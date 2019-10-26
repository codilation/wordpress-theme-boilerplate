# WordPress Theme Boilerplate

WordPress Theme Boilerplate is robust solution for developing a WordPress theme from the start. It uses docker to set up WordPress so you will NOT need to setup a LAMP stack on your machine. It is also perfect for building with PostCSS and Webpack.

## How do I use it?

### Setting up WordPress

- clone this repo - `git clone git@github.com:codilation/wordpress-theme-boilerplate.git`
- Install [Docker Desktop](https://www.docker.com/products/docker-desktop)
- From the directory of the repo, run `docker-compose up -d` to set up WordPress locally
- Access your WordPress at [localhost:8000](http://localhost:8000)
- Activate the theme from the *Themes* section in the Admin Panel

### Setting up the Theme

- Install dependancies - `npm install` or `yarn install`
- Start **development** mode - `npm run dev` or `yarn dev`
- Build a **production** distribution - `npm run build` or `yarn build`