@echo off

set cwd=%cd%
set homesteadVagrant=D:\Projects\laravel-project\Homestead

cd /d %homesteadVagrant% && vagrant %*
cd /d %cwd%

set cwd=
set homesteadVagrant=