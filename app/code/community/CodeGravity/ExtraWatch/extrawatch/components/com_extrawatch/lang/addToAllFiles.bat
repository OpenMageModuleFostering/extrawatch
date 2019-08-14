SET CYGWIN_PATH=D:\prog\cygwin\bin

for %%I in (*.php) do (%CYGWIN_PATH%\cat.exe linesToAdd.txt >> %%I)