// Sets the value for the get parameter
const setGetParam = (name, value) => {
  let result = '';

  const url = location.href.split('?');
  const base = url[0];
  const query = url[1];

  if (query) {
    const params = query.split('&');

    params.forEach((item) => {
      const keyValue = item.split('=');

      if (keyValue[0] != name) {
        result += `${item}&`;
      }
    });
  }

  result += `${name}=${value}`;
  window.location.href = `${base}?${result}`;
};

export { setGetParam };
