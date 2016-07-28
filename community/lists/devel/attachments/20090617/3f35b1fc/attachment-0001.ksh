Making all in config
make[1]: Entering directory `/usr/local/src/openmpi-1.3.2/config'
make[1]: Nothing to be done for `all'.
make[1]: Leaving directory `/usr/local/src/openmpi-1.3.2/config'
Making all in contrib
make[1]: Entering directory `/usr/local/src/openmpi-1.3.2/contrib'
make[1]: Nothing to be done for `all'.
make[1]: Leaving directory `/usr/local/src/openmpi-1.3.2/contrib'
Making all in opal
make[1]: Entering directory `/usr/local/src/openmpi-1.3.2/opal'
Making all in include
make[2]: Entering directory `/usr/local/src/openmpi-1.3.2/opal/include'
make  all-am
make[3]: Entering directory `/usr/local/src/openmpi-1.3.2/opal/include'
make[3]: Nothing to be done for `all-am'.
make[3]: Leaving directory `/usr/local/src/openmpi-1.3.2/opal/include'
make[2]: Leaving directory `/usr/local/src/openmpi-1.3.2/opal/include'
Making all in libltdl
make[2]: Entering directory `/usr/local/src/openmpi-1.3.2/opal/libltdl'
make  all-am
make[3]: Entering directory `/usr/local/src/openmpi-1.3.2/opal/libltdl'
/bin/sh ./libtool --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I.  -DLT_CONFIG_H='<config.h>' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl   -O3 -DNDEBUG  -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo -c -o dlopen.lo `test -f 'loaders/dlopen.c' || echo './'`loaders/dlopen.c
libtool: compile:  icc -DHAVE_CONFIG_H -I. "-DLT_CONFIG_H=<config.h>" -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo -c loaders/dlopen.c -o dlopen.o
mv -f .deps/dlopen.Tpo .deps/dlopen.Plo
/bin/sh ./libtool --tag=CC   --mode=link icc  -O3 -DNDEBUG  -module -avoid-version  -o dlopen.la  dlopen.lo  -lnsl -lutil  
libtool: link: ar cru .libs/dlopen.a  dlopen.o
libtool: link: ranlib .libs/dlopen.a
libtool: link: ( cd ".libs" && rm -f "dlopen.la" && ln -s "../dlopen.la" "dlopen.la" )
/bin/sh ./libtool --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc -DLT_CONFIG_H='<config.h>' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl   -O3 -DNDEBUG  -MT libltdlc_la-preopen.lo -MD -MP -MF .deps/libltdlc_la-preopen.Tpo -c -o libltdlc_la-preopen.lo `test -f 'loaders/preopen.c' || echo './'`loaders/preopen.c
libtool: compile:  icc -DHAVE_CONFIG_H -I. -DLTDLOPEN=libltdlc "-DLT_CONFIG_H=<config.h>" -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -MT libltdlc_la-preopen.lo -MD -MP -MF .deps/libltdlc_la-preopen.Tpo -c loaders/preopen.c -o libltdlc_la-preopen.o
mv -f .deps/libltdlc_la-preopen.Tpo .deps/libltdlc_la-preopen.Plo
/bin/sh ./libtool --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc -DLT_CONFIG_H='<config.h>' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl   -O3 -DNDEBUG  -MT libltdlc_la-lt__alloc.lo -MD -MP -MF .deps/libltdlc_la-lt__alloc.Tpo -c -o libltdlc_la-lt__alloc.lo `test -f 'lt__alloc.c' || echo './'`lt__alloc.c
libtool: compile:  icc -DHAVE_CONFIG_H -I. -DLTDLOPEN=libltdlc "-DLT_CONFIG_H=<config.h>" -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -MT libltdlc_la-lt__alloc.lo -MD -MP -MF .deps/libltdlc_la-lt__alloc.Tpo -c lt__alloc.c -o libltdlc_la-lt__alloc.o
mv -f .deps/libltdlc_la-lt__alloc.Tpo .deps/libltdlc_la-lt__alloc.Plo
/bin/sh ./libtool --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc -DLT_CONFIG_H='<config.h>' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl   -O3 -DNDEBUG  -MT libltdlc_la-lt_dlloader.lo -MD -MP -MF .deps/libltdlc_la-lt_dlloader.Tpo -c -o libltdlc_la-lt_dlloader.lo `test -f 'lt_dlloader.c' || echo './'`lt_dlloader.c
libtool: compile:  icc -DHAVE_CONFIG_H -I. -DLTDLOPEN=libltdlc "-DLT_CONFIG_H=<config.h>" -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -MT libltdlc_la-lt_dlloader.lo -MD -MP -MF .deps/libltdlc_la-lt_dlloader.Tpo -c lt_dlloader.c -o libltdlc_la-lt_dlloader.o
mv -f .deps/libltdlc_la-lt_dlloader.Tpo .deps/libltdlc_la-lt_dlloader.Plo
/bin/sh ./libtool --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc -DLT_CONFIG_H='<config.h>' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl   -O3 -DNDEBUG  -MT libltdlc_la-lt_error.lo -MD -MP -MF .deps/libltdlc_la-lt_error.Tpo -c -o libltdlc_la-lt_error.lo `test -f 'lt_error.c' || echo './'`lt_error.c
libtool: compile:  icc -DHAVE_CONFIG_H -I. -DLTDLOPEN=libltdlc "-DLT_CONFIG_H=<config.h>" -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -MT libltdlc_la-lt_error.lo -MD -MP -MF .deps/libltdlc_la-lt_error.Tpo -c lt_error.c -o libltdlc_la-lt_error.o
mv -f .deps/libltdlc_la-lt_error.Tpo .deps/libltdlc_la-lt_error.Plo
/bin/sh ./libtool --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc -DLT_CONFIG_H='<config.h>' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl   -O3 -DNDEBUG  -MT libltdlc_la-ltdl.lo -MD -MP -MF .deps/libltdlc_la-ltdl.Tpo -c -o libltdlc_la-ltdl.lo `test -f 'ltdl.c' || echo './'`ltdl.c
libtool: compile:  icc -DHAVE_CONFIG_H -I. -DLTDLOPEN=libltdlc "-DLT_CONFIG_H=<config.h>" -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -MT libltdlc_la-ltdl.lo -MD -MP -MF .deps/libltdlc_la-ltdl.Tpo -c ltdl.c -o libltdlc_la-ltdl.o
ltdl.c(1267): warning #279: controlling expression is constant
  	  archive_name = MALLOC (char, LT_STRLEN (name) + LT_STRLEN (libext) + 2);
  	                 ^

mv -f .deps/libltdlc_la-ltdl.Tpo .deps/libltdlc_la-ltdl.Plo
/bin/sh ./libtool --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc -DLT_CONFIG_H='<config.h>' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl   -O3 -DNDEBUG  -MT libltdlc_la-slist.lo -MD -MP -MF .deps/libltdlc_la-slist.Tpo -c -o libltdlc_la-slist.lo `test -f 'slist.c' || echo './'`slist.c
libtool: compile:  icc -DHAVE_CONFIG_H -I. -DLTDLOPEN=libltdlc "-DLT_CONFIG_H=<config.h>" -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -MT libltdlc_la-slist.lo -MD -MP -MF .deps/libltdlc_la-slist.Tpo -c slist.c -o libltdlc_la-slist.o
mv -f .deps/libltdlc_la-slist.Tpo .deps/libltdlc_la-slist.Plo
/bin/sh ./libtool --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I.  -DLT_CONFIG_H='<config.h>' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl   -O3 -DNDEBUG  -MT lt__strl.lo -MD -MP -MF .deps/lt__strl.Tpo -c -o lt__strl.lo lt__strl.c
libtool: compile:  icc -DHAVE_CONFIG_H -I. "-DLT_CONFIG_H=<config.h>" -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -MT lt__strl.lo -MD -MP -MF .deps/lt__strl.Tpo -c lt__strl.c -o lt__strl.o
mv -f .deps/lt__strl.Tpo .deps/lt__strl.Plo
/bin/sh ./libtool --tag=CC   --mode=link icc  -O3 -DNDEBUG  -no-undefined -dlpreopen dlopen.la   -o libltdlc.la  libltdlc_la-preopen.lo libltdlc_la-lt__alloc.lo libltdlc_la-lt_dlloader.lo libltdlc_la-lt_error.lo libltdlc_la-ltdl.lo libltdlc_la-slist.lo lt__strl.lo -lnsl -lutil  
libtool: link: rm -f .libs/libltdlc.nm .libs/libltdlc.nmS .libs/libltdlc.nmT
libtool: link: (cd .libs && icc -O3 -DNDEBUG -c -fno-builtin -fno-rtti -fno-exceptions  -fPIC -DPIC "libltdlcS.c")
libtool: link: rm -f ".libs/libltdlcS.c" ".libs/libltdlc.nm" ".libs/libltdlc.nmS" ".libs/libltdlc.nmT"
libtool: link: (cd .libs/libltdlc.lax/dlopen.a && ar x "/usr/local/src/openmpi-1.3.2/opal/libltdl/./.libs/dlopen.a")
libtool: link: ar cru .libs/libltdlc.a  libltdlc_la-preopen.o libltdlc_la-lt__alloc.o libltdlc_la-lt_dlloader.o libltdlc_la-lt_error.o libltdlc_la-ltdl.o libltdlc_la-slist.o lt__strl.o .libs/libltdlcS.o  .libs/libltdlc.lax/dlopen.a/dlopen.o 
libtool: link: ranlib .libs/libltdlc.a
libtool: link: rm -fr .libs/libltdlc.lax
libtool: link: ( cd ".libs" && rm -f "libltdlc.la" && ln -s "../libltdlc.la" "libltdlc.la" )
make[3]: Leaving directory `/usr/local/src/openmpi-1.3.2/opal/libltdl'
make[2]: Leaving directory `/usr/local/src/openmpi-1.3.2/opal/libltdl'
Making all in asm
make[2]: Entering directory `/usr/local/src/openmpi-1.3.2/opal/asm'
depbase=`echo asm.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
/bin/sh ../../libtool --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../..    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -MT asm.lo -MD -MP -MF $depbase.Tpo -c -o asm.lo asm.c &&\
mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -MT asm.lo -MD -MP -MF .deps/asm.Tpo -c asm.c -o asm.o
rm -f atomic-asm.S
ln -s "../../opal/asm/generated/atomic-amd64-linux.s" atomic-asm.S
depbase=`echo atomic-asm.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
/bin/sh ../../libtool   --mode=compile icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../..    -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -MT atomic-asm.lo -MD -MP -MF $depbase.Tpo -c -o atomic-asm.lo atomic-asm.S &&\
mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -MT atomic-asm.lo -MD -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S -o atomic-asm.o
Unknown flag -x
Unknown flag -a
Unknown flag -s
Unknown flag -s
Unknown flag -e
Unknown flag -m
Unknown flag -b
Unknown flag -l
Unknown flag -e
Unknown flag -r
Unknown flag --
Unknown flag -w
Unknown flag -i
Unknown flag -t
Unknown flag -h
Unknown flag --
Unknown flag -c
Unknown flag -p
Unknown flag -p
Unknown flag -F
Cannot open source file .deps/atomic-asm.Tpo
Extra name /tmp/iccstrw8F.s ignored
No input file for -M flag
mv: cannot stat `.deps/atomic-asm.Tpo': No such file or directory
make[2]: *** [atomic-asm.lo] Error 1
make[2]: Leaving directory `/usr/local/src/openmpi-1.3.2/opal/asm'
make[1]: *** [all-recursive] Error 1
make[1]: Leaving directory `/usr/local/src/openmpi-1.3.2/opal'
make: *** [all-recursive] Error 1