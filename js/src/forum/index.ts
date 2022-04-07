import app from 'flarum/forum/app';

interface ICsrfResponse {
  data: {
    attributes: { token: string };
    id: number;
    type: 'csrf-auto-refreshes';
  };
}

const interval = 5 * 60 * 60 * 1000;

app.initializers.add('davwheat/csrf-auto-refresh', () => {
  // Every 5 mins, make POST to keep CSRF alive
  (window as any).__davwheat_csrf_auto_refresh_interval = setInterval(() => {
    app
      .request<ICsrfResponse>({ url: app.forum.attribute('apiUrl') + '/csrf-refresh', method: 'POST' })
      .then((response) => {
        const csrfToken = response.data.attributes.token;

        app.session.csrfToken = csrfToken;
      })
      .catch((e) => {
        console.group();
        console.warn(`[davwheat/csrf-auto-refresh] Failed to keep CSRF token alive.`);
        console.error(e);
        console.groupEnd();
      });
  }, interval);
});
