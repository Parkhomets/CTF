[app]

title = hello_w

package.name = myapp

package.domain = org.test

source.dir = .

source.include_exts = py

version = 0.1

requirements = python3,kivy
android.permissions = INTERNET



# (str) Supported orientation (one of landscape, sensorLandscape, portrait or all)
orientation = portrait


# change the major version of python used by the app
osx.python_version = 3

# Kivy version to use
osx.kivy_version = 1.9.1

#
# Android specific
#

# (bool) Indicate if the application should be fullscreen or not
fullscreen = 0



android.arch = armeabi-v7a




[buildozer]

# (int) Log level (0 = error only, 1 = info, 2 = debug (with command output))
log_level = 2

# (int) Display warning if buildozer is run as root (0 = False, 1 = True)
warn_on_root = 1

