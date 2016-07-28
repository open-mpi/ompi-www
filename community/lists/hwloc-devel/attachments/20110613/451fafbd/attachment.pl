
###
### Configuring hwloc distribution tarball
### Startup tests
###
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking target system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking how to create a ustar tar archive... gnutar
checking for hwloc version... 1.3a1r3511
checking for gcc... gcc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether gcc accepts -g... yes
checking for gcc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of gcc... gcc3
checking whether gcc and cc understand -c and -o together... yes
checking how to run the C preprocessor... gcc -E
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for ANSI C header files... yes
checking for sys/types.h... yes
checking for sys/stat.h... yes
checking for stdlib.h... yes
checking for string.h... yes
checking for memory.h... yes
checking for strings.h... yes
checking for inttypes.h... yes
checking for stdint.h... yes
checking for unistd.h... yes
checking minix/config.h usability... no
checking minix/config.h presence... no
checking for minix/config.h... no
checking whether it is safe to define __EXTENSIONS__... yes
checking for pkg-config... /usr/bin/pkg-config
checking pkg-config is at least version 0.9.0... yes

###
### Configuring hwloc core
###
checking hwloc building mode... standalone
configure: hwloc builddir: /root/HWLOC/hwloc-1.3a1r3511
configure: hwloc srcdir: /root/HWLOC/hwloc-1.3a1r3511
checking if want hwloc maintainer support... disabled
checking for hwloc directory prefix... (none)
checking for hwloc symbol prefix... hwloc_
checking size of void *... 8
checking which OS support to include... Linux
checking which CPU support to include... x86_64
checking size of unsigned long... 8
checking size of unsigned int... 4
checking for __attribute__... yes
checking for __attribute__(aligned)... yes
checking for __attribute__(always_inline)... yes
checking for __attribute__(cold)... no
checking for __attribute__(const)... yes
checking for __attribute__(deprecated)... yes
checking for __attribute__(format)... no
checking for __attribute__(hot)... no
checking for __attribute__(malloc)... yes
checking for __attribute__(may_alias)... yes
checking for __attribute__(no_instrument_function)... yes
checking for __attribute__(nonnull)... no
checking for __attribute__(noreturn)... yes
checking for __attribute__(packed)... yes
checking for __attribute__(pure)... yes
checking for __attribute__(sentinel)... no
checking for __attribute__(unused)... yes
checking for __attribute__(warn_unused_result)... yes
checking for __attribute__(weak_alias)... yes
checking if gcc supports -fvisibility... yes
checking whether to enable visibility... yes (via -fvisibility=hidden)
configure: WARNING: " -fvisibility=hidden" has been added to the hwloc CFLAGS
checking for inline compatibility keyword... __inline__
checking for strncasecmp... yes
checking whether function strncasecmp is declared... yes
checking for strftime... yes
checking for setlocale... yes
checking for stdint.h... (cached) yes
checking sys/mman.h usability... yes
checking sys/mman.h presence... yes
checking for sys/mman.h... yes
checking for KAFFINITY... no
checking for PROCESSOR_CACHE_TYPE... no
checking for CACHE_DESCRIPTOR... no
checking for LOGICAL_PROCESSOR_RELATIONSHIP... no
checking for RelationProcessorPackage... no
checking for SYSTEM_LOGICAL_PROCESSOR_INFORMATION... no
checking for GROUP_AFFINITY... no
checking for PROCESSOR_RELATIONSHIP... no
checking for NUMA_NODE_RELATIONSHIP... no
checking for CACHE_RELATIONSHIP... no
checking for PROCESSOR_GROUP_INFO... no
checking for GROUP_RELATIONSHIP... no
checking for SYSTEM_LOGICAL_PROCESSOR_INFORMATION_EX... no
checking for PSAPI_WORKING_SET_EX_BLOCK... no
checking for PSAPI_WORKING_SET_EX_INFORMATION... no
checking for main in -lgdi32... no
checking windows.h usability... no
checking windows.h presence... no
checking for windows.h... no
checking sys/lgrp_user.h usability... no
checking sys/lgrp_user.h presence... no
checking for sys/lgrp_user.h... no
checking kstat.h usability... no
checking kstat.h presence... no
checking for kstat.h... no
checking whether _SC_NPROCESSORS_ONLN is declared... yes
checking whether _SC_NPROCESSORS_CONF is declared... yes
checking whether _SC_NPROC_ONLN is declared... no
checking whether _SC_NPROC_CONF is declared... no
checking whether _SC_LARGE_PAGESIZE is declared... no
checking mach/mach_host.h usability... no
checking mach/mach_host.h presence... no
checking for mach/mach_host.h... no
checking mach/mach_init.h usability... no
checking mach/mach_init.h presence... no
checking for mach/mach_init.h... no
checking sys/param.h usability... yes
checking sys/param.h presence... yes
checking for sys/param.h... yes
checking for sys/sysctl.h... yes
checking whether CTL_HW is declared... no
checking whether HW_NCPU is declared... no
checking for sysctl... yes
checking for sysctlbyname... no
checking for pthread_t... yes
checking whether function sched_setaffinity is declared... yes
checking for old prototype of sched_setaffinity... no
checking for working CPU_SET... yes
checking for working CPU_SET_S... no
checking for working _syscall3... no
checking for KERRIGHED... no
checking for lib... no
checking for bash... /bin/sh
checking for ffs... yes
checking whether function ffs is declared... yes
checking for ffsl... yes
checking whether function ffsl is declared... yes
checking for fls... no
checking for flsl... no
checking for clz... no
checking for clzl... no
checking for openat... yes
checking malloc.h usability... yes
checking malloc.h presence... yes
checking for malloc.h... yes
checking for getpagesize... yes
checking for memalign... yes
checking for posix_memalign... yes
checking sys/utsname.h usability... yes
checking sys/utsname.h presence... yes
checking for sys/utsname.h... yes
checking for uname... yes
checking numaif.h usability... no
checking numaif.h presence... no
checking for numaif.h... no
checking pthread_np.h usability... no
checking pthread_np.h presence... no
checking for pthread_np.h... no
checking whether pthread_setaffinity_np is declared... yes
checking whether pthread_getaffinity_np is declared... yes
checking for sched_setaffinity... yes
checking for sys/cpuset.h... no
checking for library containing pthread_getthrds_np... no
checking for PCI... no
checking pci/pci.h usability... yes
checking pci/pci.h presence... yes
checking for pci/pci.h... yes
checking for pci_init in -lpci... yes
checking whether PCI_LOOKUP_NO_NUMBERS is declared... yes
checking for pci_find_cap in -lpci... yes
checking whether struct pci_dev has a device_class field... yes
checking whether struct pci_dev has a domain field... yes
checking for XML... yes
checking for xmlNewDoc... yes
checking for final XML support... yes
checking for cpuid... yes
checking for X... libraries , headers 

###
### Configuring hwloc documentation
###
checking if this is a developer build... no (doxygen generation is optional)
checking for doxygen... /usr/bin/doxygen
checking for pdflatex... no
checking for makeindex... /usr/bin/makeindex
checking for fig2dev... no
checking for gs... /usr/bin/gs
checking for epstopdf... /usr/bin/epstopdf
checking if can build doxygen docs... no
checking for a sed that does not truncate output... /bin/sed
checking if the sed -i option requires an argument... no
checking for w3m... no
checking for lynx... /usr/bin/lynx
checking if can build top-level README... yes
checking if will build doxygen docs... no
checking if will install doxygen docs... yes
checking whether to enable "picky" compiler mode... no (default)

###
### Configuring hwloc command line utilities
###
checking for CAIRO... yes
checking for cairo_fill... yes
checking for final CAIRO support... yes
checking for gethostbyname... yes
checking for connect... yes
checking for remove... yes
checking for shmat... yes
checking for IceConnectionNumber in -lICE... yes
checking for X11/Xlib.h... yes
checking X11/Xutil.h usability... yes
checking X11/Xutil.h presence... yes
checking for X11/Xutil.h... yes
checking for XOpenDisplay in -lX11... yes
checking X11/keysym.h usability... yes
checking X11/keysym.h presence... yes
checking for X11/keysym.h... yes
checking for XOpenDisplay in -lX11... (cached) yes
checking for wchar_t... yes
checking for putwc... yes
checking locale.h usability... yes
checking locale.h presence... yes
checking for locale.h... yes
checking for setlocale... (cached) yes
checking langinfo.h usability... yes
checking langinfo.h presence... yes
checking for langinfo.h... yes
checking for nl_langinfo... yes
checking curses.h usability... yes
checking curses.h presence... yes
checking for curses.h... yes
checking for term.h... yes
checking for library containing tparm... -lncursesw
checking whether diff accepts -u... -u

###
### Configuring hwloc tests
###
checking whether numa_bitmask_alloc is declared... no
checking infiniband/verbs.h usability... yes
checking infiniband/verbs.h presence... yes
checking for infiniband/verbs.h... yes
checking for ibv_open_device in -libverbs... yes
checking myriexpress.h usability... no
checking myriexpress.h presence... no
checking for myriexpress.h... no
checking cuda.h usability... no
checking cuda.h presence... no
checking for cuda.h... no
checking cuda_runtime_api.h usability... no
checking cuda_runtime_api.h presence... no
checking for cuda_runtime_api.h... no
checking for xmllint... xmllint
checking for bunzip2... bunzip2
checking whether diff accepts -u... -u
checking for a sed that does not truncate output... (cached) /bin/sed
checking for fgrep... /bin/grep -F
checking for ld used by gcc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking whether ln -s works... yes
checking the maximum length of command line arguments... 98304
checking whether the shell understands some XSI constructs... yes
checking whether the shell understands "+="... yes
checking for /usr/bin/ld option to reload object files... -r
checking for objdump... objdump
checking how to recognize dependent libraries... pass_all
checking for ar... ar
checking for strip... strip
checking for ranlib... ranlib
checking command to parse /usr/bin/nm -B output from gcc object... ok
checking for dlfcn.h... yes
checking for objdir... .libs
checking if gcc supports -fno-rtti -fno-exceptions... no
checking for gcc option to produce PIC... -fPIC -DPIC
checking if gcc PIC flag -fPIC -DPIC works... yes
checking if gcc static flag -static works... yes
checking if gcc supports -c -o file.o... yes
checking if gcc supports -c -o file.o... (cached) yes
checking whether the gcc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking whether -lc should be explicitly linked in... no
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... yes
checking whether to build static libraries... no
configure: creating ./config.status
config.status: creating Makefile
config.status: creating include/Makefile
config.status: creating src/Makefile
config.status: creating doc/Makefile
config.status: creating doc/doxygen-config.cfg
config.status: creating utils/Makefile
config.status: creating hwloc.pc
config.status: creating tests/Makefile
config.status: creating tests/linux/Makefile
config.status: creating tests/linux/gather/Makefile
config.status: creating tests/xml/Makefile
config.status: creating tests/ports/Makefile
config.status: creating tests/linux/hwloc-gather-topology
config.status: creating tests/linux/gather/test-gather-topology.sh
config.status: creating tests/linux/test-topology.sh
config.status: creating tests/xml/test-topology.sh
config.status: creating utils/test-hwloc-calc.sh
config.status: creating utils/test-hwloc-distrib.sh
config.status: creating include/private/autogen/config.h
config.status: creating include/hwloc/autogen/config.h
config.status: linking src/topology.c to tests/ports/topology.c
config.status: linking src/traversal.c to tests/ports/traversal.c
config.status: linking src/topology-synthetic.c to tests/ports/topology-synthetic.c
config.status: linking src/topology-solaris.c to tests/ports/topology-solaris.c
config.status: linking src/topology-aix.c to tests/ports/topology-aix.c
config.status: linking src/topology-osf.c to tests/ports/topology-osf.c
config.status: linking src/topology-windows.c to tests/ports/topology-windows.c
config.status: linking src/topology-darwin.c to tests/ports/topology-darwin.c
config.status: linking src/topology-freebsd.c to tests/ports/topology-freebsd.c
config.status: linking src/topology-hpux.c to tests/ports/topology-hpux.c
config.status: executing depfiles commands
config.status: executing chmoding-scripts commands
config.status: executing libtool commands
Making all in src
make[1]: Entering directory `/root/HWLOC/hwloc-1.3a1r3511/src'
depbase=`echo topology.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool  --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -fvisibility=hidden  -I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT topology.lo -MD -MP -MF $depbase.Tpo -c -o topology.lo topology.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -fvisibility=hidden -I/usr/include/libxml2 -fvisibility=hidden -I/usr/include/libxml2 -I/root/HWLOC/hwloc-1.3a1r3511/include -MT topology.lo -MD -MP -MF .deps/topology.Tpo -c topology.c  -fPIC -DPIC -o .libs/topology.o
depbase=`echo traversal.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool  --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -fvisibility=hidden  -I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT traversal.lo -MD -MP -MF $depbase.Tpo -c -o traversal.lo traversal.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -fvisibility=hidden -I/usr/include/libxml2 -fvisibility=hidden -I/usr/include/libxml2 -I/root/HWLOC/hwloc-1.3a1r3511/include -MT traversal.lo -MD -MP -MF .deps/traversal.Tpo -c traversal.c  -fPIC -DPIC -o .libs/traversal.o
depbase=`echo distances.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool  --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -fvisibility=hidden  -I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT distances.lo -MD -MP -MF $depbase.Tpo -c -o distances.lo distances.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -fvisibility=hidden -I/usr/include/libxml2 -fvisibility=hidden -I/usr/include/libxml2 -I/root/HWLOC/hwloc-1.3a1r3511/include -MT distances.lo -MD -MP -MF .deps/distances.Tpo -c distances.c  -fPIC -DPIC -o .libs/distances.o
depbase=`echo topology-synthetic.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool  --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -fvisibility=hidden  -I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT topology-synthetic.lo -MD -MP -MF $depbase.Tpo -c -o topology-synthetic.lo topology-synthetic.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -fvisibility=hidden -I/usr/include/libxml2 -fvisibility=hidden -I/usr/include/libxml2 -I/root/HWLOC/hwloc-1.3a1r3511/include -MT topology-synthetic.lo -MD -MP -MF .deps/topology-synthetic.Tpo -c topology-synthetic.c  -fPIC -DPIC -o .libs/topology-synthetic.o
depbase=`echo bind.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool  --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -fvisibility=hidden  -I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT bind.lo -MD -MP -MF $depbase.Tpo -c -o bind.lo bind.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -fvisibility=hidden -I/usr/include/libxml2 -fvisibility=hidden -I/usr/include/libxml2 -I/root/HWLOC/hwloc-1.3a1r3511/include -MT bind.lo -MD -MP -MF .deps/bind.Tpo -c bind.c  -fPIC -DPIC -o .libs/bind.o
depbase=`echo cpuset.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool  --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -fvisibility=hidden  -I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT cpuset.lo -MD -MP -MF $depbase.Tpo -c -o cpuset.lo cpuset.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -fvisibility=hidden -I/usr/include/libxml2 -fvisibility=hidden -I/usr/include/libxml2 -I/root/HWLOC/hwloc-1.3a1r3511/include -MT cpuset.lo -MD -MP -MF .deps/cpuset.Tpo -c cpuset.c  -fPIC -DPIC -o .libs/cpuset.o
depbase=`echo misc.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool  --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -fvisibility=hidden  -I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT misc.lo -MD -MP -MF $depbase.Tpo -c -o misc.lo misc.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -fvisibility=hidden -I/usr/include/libxml2 -fvisibility=hidden -I/usr/include/libxml2 -I/root/HWLOC/hwloc-1.3a1r3511/include -MT misc.lo -MD -MP -MF .deps/misc.Tpo -c misc.c  -fPIC -DPIC -o .libs/misc.o
depbase=`echo topology-xml.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool  --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -fvisibility=hidden  -I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT topology-xml.lo -MD -MP -MF $depbase.Tpo -c -o topology-xml.lo topology-xml.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -fvisibility=hidden -I/usr/include/libxml2 -fvisibility=hidden -I/usr/include/libxml2 -I/root/HWLOC/hwloc-1.3a1r3511/include -MT topology-xml.lo -MD -MP -MF .deps/topology-xml.Tpo -c topology-xml.c  -fPIC -DPIC -o .libs/topology-xml.o
depbase=`echo topology-libpci.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool  --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -fvisibility=hidden  -I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT topology-libpci.lo -MD -MP -MF $depbase.Tpo -c -o topology-libpci.lo topology-libpci.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -fvisibility=hidden -I/usr/include/libxml2 -fvisibility=hidden -I/usr/include/libxml2 -I/root/HWLOC/hwloc-1.3a1r3511/include -MT topology-libpci.lo -MD -MP -MF .deps/topology-libpci.Tpo -c topology-libpci.c  -fPIC -DPIC -o .libs/topology-libpci.o
depbase=`echo topology-linux.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool  --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -fvisibility=hidden  -I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT topology-linux.lo -MD -MP -MF $depbase.Tpo -c -o topology-linux.lo topology-linux.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -fvisibility=hidden -I/usr/include/libxml2 -fvisibility=hidden -I/usr/include/libxml2 -I/root/HWLOC/hwloc-1.3a1r3511/include -MT topology-linux.lo -MD -MP -MF .deps/topology-linux.Tpo -c topology-linux.c  -fPIC -DPIC -o .libs/topology-linux.o
depbase=`echo topology-x86.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool  --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -fvisibility=hidden  -I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT topology-x86.lo -MD -MP -MF $depbase.Tpo -c -o topology-x86.lo topology-x86.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -fvisibility=hidden -I/usr/include/libxml2 -fvisibility=hidden -I/usr/include/libxml2 -I/root/HWLOC/hwloc-1.3a1r3511/include -MT topology-x86.lo -MD -MP -MF .deps/topology-x86.Tpo -c topology-x86.c  -fPIC -DPIC -o .libs/topology-x86.o
/bin/sh ../libtool  --tag=CC   --mode=link gcc -fvisibility=hidden  -I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include    -no-undefined  -version-number 0:0:0 -lxml2 -lz -lm    -lpci  -o libhwloc.la -rpath /usr/local/lib topology.lo traversal.lo distances.lo topology-synthetic.lo bind.lo cpuset.lo misc.lo topology-xml.lo topology-libpci.lo  topology-linux.lo       topology-x86.lo  
libtool: link: gcc -shared  .libs/topology.o .libs/traversal.o .libs/distances.o .libs/topology-synthetic.o .libs/bind.o .libs/cpuset.o .libs/misc.o .libs/topology-xml.o .libs/topology-libpci.o .libs/topology-linux.o .libs/topology-x86.o   -lxml2 -lz -lm -lpci    -Wl,-soname -Wl,libhwloc.so.0 -o .libs/libhwloc.so.0.0.0
libtool: link: (cd ".libs" && rm -f "libhwloc.so.0" && ln -s "libhwloc.so.0.0.0" "libhwloc.so.0")
libtool: link: (cd ".libs" && rm -f "libhwloc.so" && ln -s "libhwloc.so.0.0.0" "libhwloc.so")
libtool: link: ( cd ".libs" && rm -f "libhwloc.la" && ln -s "../libhwloc.la" "libhwloc.la" )
make[1]: Leaving directory `/root/HWLOC/hwloc-1.3a1r3511/src'
Making all in include
make[1]: Entering directory `/root/HWLOC/hwloc-1.3a1r3511/include'
make[1]: Nothing to be done for `all'.
make[1]: Leaving directory `/root/HWLOC/hwloc-1.3a1r3511/include'
Making all in utils
make[1]: Entering directory `/root/HWLOC/hwloc-1.3a1r3511/utils'
gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -I/usr/include/cairo -I/usr/include/freetype2 -I/usr/include/libpng12   -I/usr/include/libxml2    -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT lstopo-lstopo.o -MD -MP -MF .deps/lstopo-lstopo.Tpo -c -o lstopo-lstopo.o `test -f 'lstopo.c' || echo './'`lstopo.c
mv -f .deps/lstopo-lstopo.Tpo .deps/lstopo-lstopo.Po
gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -I/usr/include/cairo -I/usr/include/freetype2 -I/usr/include/libpng12   -I/usr/include/libxml2    -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT lstopo-lstopo-color.o -MD -MP -MF .deps/lstopo-lstopo-color.Tpo -c -o lstopo-lstopo-color.o `test -f 'lstopo-color.c' || echo './'`lstopo-color.c
mv -f .deps/lstopo-lstopo-color.Tpo .deps/lstopo-lstopo-color.Po
gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -I/usr/include/cairo -I/usr/include/freetype2 -I/usr/include/libpng12   -I/usr/include/libxml2    -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT lstopo-lstopo-text.o -MD -MP -MF .deps/lstopo-lstopo-text.Tpo -c -o lstopo-lstopo-text.o `test -f 'lstopo-text.c' || echo './'`lstopo-text.c
mv -f .deps/lstopo-lstopo-text.Tpo .deps/lstopo-lstopo-text.Po
gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -I/usr/include/cairo -I/usr/include/freetype2 -I/usr/include/libpng12   -I/usr/include/libxml2    -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT lstopo-lstopo-draw.o -MD -MP -MF .deps/lstopo-lstopo-draw.Tpo -c -o lstopo-lstopo-draw.o `test -f 'lstopo-draw.c' || echo './'`lstopo-draw.c
mv -f .deps/lstopo-lstopo-draw.Tpo .deps/lstopo-lstopo-draw.Po
gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -I/usr/include/cairo -I/usr/include/freetype2 -I/usr/include/libpng12   -I/usr/include/libxml2    -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT lstopo-lstopo-fig.o -MD -MP -MF .deps/lstopo-lstopo-fig.Tpo -c -o lstopo-lstopo-fig.o `test -f 'lstopo-fig.c' || echo './'`lstopo-fig.c
mv -f .deps/lstopo-lstopo-fig.Tpo .deps/lstopo-lstopo-fig.Po
gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -I/usr/include/cairo -I/usr/include/freetype2 -I/usr/include/libpng12   -I/usr/include/libxml2    -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT lstopo-lstopo-cairo.o -MD -MP -MF .deps/lstopo-lstopo-cairo.Tpo -c -o lstopo-lstopo-cairo.o `test -f 'lstopo-cairo.c' || echo './'`lstopo-cairo.c
mv -f .deps/lstopo-lstopo-cairo.Tpo .deps/lstopo-lstopo-cairo.Po
gcc -DHAVE_CONFIG_H -I. -I../include/private/autogen -I../include/hwloc/autogen  -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include -I/root/HWLOC/hwloc-1.3a1r3511/include  -I/usr/include/cairo -I/usr/include/freetype2 -I/usr/include/libpng12   -I/usr/include/libxml2    -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -MT lstopo-lstopo-xml.o -MD -MP -MF .deps/lstopo-lstopo-xml.Tpo -c -o lstopo-lstopo-xml.o `test -f 'lstopo-xml.c' || echo './'`lstopo-xml.c
mv -f .deps/lstopo-lstopo-xml.Tpo .deps/lstopo-lstopo-xml.Po
/bin/sh ../libtool  --tag=CC   --mode=link gcc -I/usr/include/cairo -I/usr/include/freetype2 -I/usr/include/libpng12   -I/usr/include/libxml2    -fvisibility=hidden  -I/usr/include/libxml2    -I/root/HWLOC/hwloc-1.3a1r3511/include -L/root/HWLOC/hwloc-1.3a1r3511/src  -o lstopo lstopo-lstopo.o lstopo-lstopo-color.o lstopo-lstopo-text.o lstopo-lstopo-draw.o lstopo-lstopo-fig.o lstopo-lstopo-cairo.o lstopo-lstopo-xml.o  /root/HWLOC/hwloc-1.3a1r3511/src/libhwloc.la -lcairo   -lxml2 -lz -lm   -lm -lncursesw  -lX11 -lpci 
libtool: link: gcc -I/usr/include/cairo -I/usr/include/freetype2 -I/usr/include/libpng12 -I/usr/include/libxml2 -fvisibility=hidden -I/usr/include/libxml2 -I/root/HWLOC/hwloc-1.3a1r3511/include -o .libs/lstopo lstopo-lstopo.o lstopo-lstopo-color.o lstopo-lstopo-text.o lstopo-lstopo-draw.o lstopo-lstopo-fig.o lstopo-lstopo-cairo.o lstopo-lstopo-xml.o  -L/root/HWLOC/hwloc-1.3a1r3511/src /root/HWLOC/hwloc-1.3a1r3511/src/.libs/libhwloc.so -lcairo -lxml2 -lz -lm -lncursesw -lX11 -lpci -Wl,-rpath -Wl,/usr/local/lib
/root/HWLOC/hwloc-1.3a1r3511/src/.libs/libhwloc.so: undefined reference to `__res_query'
collect2: ld returned 1 exit status
make[1]: *** [lstopo] Error 1
make[1]: Leaving directory `/root/HWLOC/hwloc-1.3a1r3511/utils'
make: *** [all-recursive] Error 1
