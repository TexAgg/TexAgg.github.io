@echo on
Set from="C:\Users\mgaik\Dropbox\Programming\PHP\TexAgg.github.io"
Set to="C:\Users\mgaik\Dropbox\Programming\PHP\TexAgg.github.io\build"
ROBOCOPY %from% %to% index.php skills.php projects.php resume.php inc\ /E