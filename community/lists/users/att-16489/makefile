IFORT=ifort.exe
FFLAGS= -assume:byterecl -nologo -w -heap-arrays:1 -c -4R8 -MD -debug:full -Zi -module:./ -Fo$@ $<


CC=cl.exe
CFLAGS=-nologo -c -W3 -DWIN32 -DMAESTRO_SQLITE_3616 -D_CRT_SECURE_NO_DEPRECATE -D_CRT_NONSTDC_NO_DEPRECATE -EHsc -GR -Zm1000 -DWIN32_LEAN_AND_MEAN -DVTK_USE_ANSI_STDLIB  -DBINDCRAY -DIFORT -MD -O2 -Zi

INC_PATH=-I. \
         -I"C:\Program Files (x86)\Microsoft SDKs\Windows\v7.0A\Include" \
         -I"C:\Program Files (x86)\Microsoft Visual Studio 9.0\VC\include" 


LINK=link.exe
LFLAGS=-nologo -subsystem:console -NODEFAULTLIB -INCREMENTAL:NO -MAP -MAPINFO:EXPORTS -DEBUG -opt:ref,icf $< -out:$@
LIBS=-LIBPATH:"C:\Program Files\Microsoft SDKs\Windows\v6.1\Lib" user32.lib \
     -LIBPATH:"C:\Program Files (x86)\Microsoft Visual Studio 9.0\VC\Lib" msvcrt.lib msvcprt.lib kernel32.lib \
     -LIBPATH:"C:\Program Files (x86)\Intel\Compiler\11.1\065\lib\ia32" libirc.lib libifcorert.lib ifqwin.lib \
     -LIBPATH:"C:\Program Files (x86)\Intel\Compiler\11.1\065\mkl\ia32\lib" mkl_core.lib


OPENMPI_PREBUILT_INC_PATH=-I"C:\MPIs\OpenMPI_v1.5.3-win32\include"
OPENMPI_PREBUILT_FLIBS=-LIBPATH:"C:\MPIs\OpenMPI_v1.5.3-win32\lib" libmpi_f77d.lib libmpid.lib libopen-pald.lib libopen-rted.lib
#OPENMPI_MACROS=-DOMPI_IMPORTS -DOPAL_IMPORTS -DORTE_IMPORTS


all: mar_f_dp2.exe

mar_f_dp2.exe: mar_f_dp2.obj
	$(LINK) $(LFLAGS) $(LIBS) $(OPENMPI_PREBUILT_FLIBS)

mar_f_dp2.obj: mar_f_dp2.f
	$(IFORT) $(FFLAGS) $(INC_PATH) $(OPENMPI_PREBUILT_INC_PATH) $(OPENMPI_MACROS)

clean:
	rm -rf *.pdb *.obj *.exe *.map *.manifest
