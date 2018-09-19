#
# Production Configuration
#
# http://sass-lang.com/documentation/file.SASS_REFERENCE.html
#
# This command will help you regenerate without 'compass watch'
#
# $ compass compile -c config_prod.rb --force
#
################################################################################



# 1. Set this to the root of your project when deployed:
http_path = "/"

# 2. probably don't need to touch these
css_dir = ""
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "js"
environment = :production
relative_assets = true

sourcemap = false

# 3. You can select your preferred output style here (can be overridden via the command line):
output_style = :expanded

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false

# don't touch this
preferred_syntax = :scss
