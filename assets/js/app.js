import { setGetParam } from './util';

document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('limit').addEventListener('change', (evt) => {
    setGetParam('limit', evt.target.value);
  });
});
