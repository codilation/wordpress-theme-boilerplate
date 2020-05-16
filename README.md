# WordPress Theme Boilerplate
[![GitHub license](https://img.shields.io/github/license/codilation/wordpress-theme-boilerplate)](https://github.com/codiltion/wordpress-theme-boilerplate/blob/master/LICENSE)
![WordPress Plugin: Required WP Version](https://img.shields.io/wordpress/plugin/wp-version/gutenberg)

WordPress Theme Boilerplate is robust solution for developing a WordPress theme from the start. It uses Docker to set up WordPress so you will NOT need to setup a LAMP stack on your machine. It is also perfect for building with PostCSS and Webpack.

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

## What's in the box?

- Dockerized. No LAMP stack required on your development computer.
- Normalize.css
- PostCSS with the following plugins:
    - Autoprefixer
    - CSS partial import
    - SCSS-like nesting
    - [Automatic icon fonts](https://www.npmjs.com/package/iconfont-webpack-plugin)
- [BrowserSync](https://www.browsersync.io/)

## Contributing

We're always open to suggestions and improvements. You are welcome to submit a pull request or an issue on the project.

## License

The code is available under the [MIT license](LICENSE.txt).
