<?
$subject_val = "[OMPI devel] build problem, autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 16:47:56 2009" -->
<!-- isoreceived="20090827204756" -->
<!-- sent="Thu, 27 Aug 2009 13:48:17 -0700" -->
<!-- isosent="20090827204817" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] build problem, autogen" -->
<!-- id="4A96F111.4030309_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] build problem, autogen<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-27 16:48:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6727.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6725.php">Jeff Squyres: "Re: [OMPI devel] VMware and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6727.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6727.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having a build problem.  I want to be able to build on all sorts of 
<br>
different machines and don't always know that the right versions of 
<br>
various tools will be available.  So, I drag them around with me.  So, 
<br>
e.g., I have these tarballs:
<br>
<p>autoconf-2.63.tar.bz2
<br>
automake-1.10.2.tar.bz2
<br>
m4-1.4.13.tar.bz2
<br>
openmpi-1.4a1r20984.tar.bz2
<br>
<p>After building the other tools, I start autogen on OMPI and get this:
<br>
<p>*** Running GNU tools
<br>
[Running] libtoolize --automake --copy
<br>
[Running] aclocal
<br>
configure.in:2123: warning: macro `AM_PROG_LIBTOOL' not found in library
<br>
[Running] autoheader
<br>
[Running] autoconf
<br>
configure.in:2126: error: possibly undefined macro: AM_PROG_LIBTOOL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If this token and others are legitimate, please use m4_pattern_allow.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the Autoconf documentation.
<br>
<p>-------------------------------------------------------------------------
<br>
It seems that the execution of &quot;autoconf&quot; has failed.  See above for
<br>
the specific error message that caused it to abort.
<br>
-------------------------------------------------------------------------
<br>
<p>Error running autogen.sh -l in romio.  Aborting.
<br>
<p>What's up?  This is SuSE with GCC.  Run script and log file attached.  
<br>
Thanks for any help.
<br>
<p>
<br><p>
#!/bin/csh -x
<br>
<p>ls
<br>
<p>setenv CFLAGS      &quot;-O -m64 -g&quot;
<br>
setenv CXXFLAGS    &quot;-O -m64 -g&quot;
<br>
setenv FFLAGS      &quot;-O -m64 -g&quot;
<br>
setenv FCFLAGS     &quot;-O -m64 -g&quot;
<br>
<p>pwd
<br>
<p>set INSTALLDIR = `pwd`/myopt
<br>
set path = ( $INSTALLDIR/bin /usr/ccs/bin /usr/bin /bin )
<br>
<p>foreach PACKAGE ( m4-1.4.13 autoconf-2.63 automake-1.10.2 )
<br>
&nbsp;&nbsp;bunzip2 $PACKAGE.tar.bz2
<br>
&nbsp;&nbsp;tar xf  $PACKAGE.tar
<br>
&nbsp;&nbsp;pushd   $PACKAGE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=$INSTALLDIR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make install
<br>
&nbsp;&nbsp;popd
<br>
end
<br>
<p>bunzip2 openmpi-1.4a1r20984.tar.bz2
<br>
tar xf  openmpi-1.4a1r20984.tar
<br>
pushd   openmpi-1.4a1r20984
<br>
&nbsp;&nbsp;./autogen.sh
<br>
# ./configure                         \
<br>
#   --disable-visibility              \
<br>
#   --enable-mpirun-prefix-by-default \
<br>
#   --prefix=$INSTALLDIR
<br>
# make
<br>
# make install
<br>
popd
<br>
<p>ls
<br>
<p><p>
<p>
ls
<br>
autoconf-2.63.tar.bz2
<br>
automake-1.10.2.tar.bz2
<br>
log
<br>
m4-1.4.13.tar.bz2
<br>
openmpi-1.4a1r20984.tar.bz2
<br>
run
<br>
setenv CFLAGS -O -m64 -g
<br>
setenv CXXFLAGS -O -m64 -g
<br>
setenv FFLAGS -O -m64 -g
<br>
setenv FCFLAGS -O -m64 -g
<br>
pwd
<br>
/tmp/OMPI-test-build
<br>
set INSTALLDIR = `pwd`/myopt
<br>
pwd
<br>
set path = ( /tmp/OMPI-test-build/myopt/bin /usr/ccs/bin /usr/bin /bin )
<br>
foreach PACKAGE ( m4-1.4.13 autoconf-2.63 automake-1.10.2 )
<br>
bunzip2 m4-1.4.13.tar.bz2
<br>
tar xf m4-1.4.13.tar
<br>
pushd m4-1.4.13
<br>
/tmp/OMPI-test-build/m4-1.4.13 /tmp/OMPI-test-build 
<br>
./configure --prefix=/tmp/OMPI-test-build/myopt
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for a thread-safe mkdir -p... /bin/mkdir -p
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking for gcc... gcc
<br>
checking for C compiler default output file name... a.out
<br>
checking whether the C compiler works... yes
<br>
checking whether we are cross compiling... no
<br>
checking for suffix of executables... 
<br>
checking for suffix of object files... o
<br>
checking whether we are using the GNU C compiler... yes
<br>
checking whether gcc accepts -g... yes
<br>
checking for gcc option to accept ISO C89... none needed
<br>
checking for style of include used by make... GNU
<br>
checking dependency style of gcc... gcc3
<br>
checking for ranlib... ranlib
<br>
checking whether gcc and cc understand -c and -o together... yes
<br>
checking build system type... x86_64-unknown-linux-gnu
<br>
checking host system type... x86_64-unknown-linux-gnu
<br>
checking how to run the C preprocessor... gcc -E
<br>
checking for grep that handles long lines and -e... /usr/bin/grep
<br>
checking for egrep... /usr/bin/grep -E
<br>
checking for ANSI C header files... yes
<br>
checking for sys/types.h... yes
<br>
checking for sys/stat.h... yes
<br>
checking for stdlib.h... yes
<br>
checking for string.h... yes
<br>
checking for memory.h... yes
<br>
checking for strings.h... yes
<br>
checking for inttypes.h... yes
<br>
checking for stdint.h... yes
<br>
checking for unistd.h... yes
<br>
checking minix/config.h usability... no
<br>
checking minix/config.h presence... no
<br>
checking for minix/config.h... no
<br>
checking whether it is safe to define __EXTENSIONS__... yes
<br>
checking for _LARGEFILE_SOURCE value needed for large files... no
<br>
checking for gcc option to accept ISO C99... -std=gnu99
<br>
checking for gcc -std=gnu99 option to accept ISO Standard C... (cached) -std=gnu99
<br>
configure: autobuild project... GNU M4
<br>
configure: autobuild revision... 1.4.13
<br>
configure: autobuild hostname... saem9
<br>
configure: autobuild timestamp... 20090827T193729Z
<br>
checking for long long int... yes
<br>
checking for unsigned long long int... yes
<br>
checking for working alloca.h... yes
<br>
checking for alloca... yes
<br>
checking for btowc... yes
<br>
checking for setrlimit... yes
<br>
checking for sigaltstack... yes
<br>
checking for mempcpy... yes
<br>
checking for __fpending... yes
<br>
checking for fpurge... no
<br>
checking for __fpurge... yes
<br>
checking for __freading... yes
<br>
checking for getdtablesize... yes
<br>
checking for gettimeofday... yes
<br>
checking for lstat... yes
<br>
checking for mbsinit... yes
<br>
checking for mbrtowc... yes
<br>
checking for pathconf... yes
<br>
checking for posix_spawn... yes
<br>
checking for isblank... yes
<br>
checking for iswctype... yes
<br>
checking for wcscoll... yes
<br>
checking for sigaction... yes
<br>
checking for siginterrupt... yes
<br>
checking for pipe... yes
<br>
checking for vasnprintf... no
<br>
checking for wcrtomb... yes
<br>
checking for iswcntrl... yes
<br>
checking for setenv... yes
<br>
checking for wctob... yes
<br>
checking for nl_langinfo and CODESET... yes
<br>
checking for a traditional french locale... fr_FR
<br>
checking for ucontext.h... yes
<br>
checking for unistd.h... (cached) yes
<br>
checking for errno.h... yes
<br>
checking for fcntl.h... yes
<br>
checking for float.h... yes
<br>
checking for stdio_ext.h... yes
<br>
checking for sys/time.h... yes
<br>
checking for math.h... yes
<br>
checking for sys/param.h... yes
<br>
checking for locale.h... yes
<br>
checking for sched.h... yes
<br>
checking for signal.h... yes
<br>
checking for spawn.h... yes
<br>
checking for stdarg.h... yes
<br>
checking for stdint.h... (cached) yes
<br>
checking for wchar.h... yes
<br>
checking for stdio.h... yes
<br>
checking for stdlib.h... (cached) yes
<br>
checking for sys/socket.h... yes
<br>
checking for string.h... (cached) yes
<br>
checking for sys/stat.h... (cached) yes
<br>
checking for sys/wait.h... yes
<br>
checking for wctype.h... yes
<br>
checking for working C stack overflow detection... yes
<br>
checking for correct stack_t interpretation... yes
<br>
checking for precise C stack overflow detection... no
<br>
checking for ld used by GCC... /usr/x86_64-suse-linux/bin/ld
<br>
checking if the linker (/usr/x86_64-suse-linux/bin/ld) is GNU ld... yes
<br>
checking for shared library run path origin... done
<br>
checking for libsigsegv... no, consider installing GNU libsigsegv
<br>
checking whether system is Windows or MSDOS... no
<br>
checking whether // is distinct from /... no
<br>
checking whether the preprocessor supports include_next... yes
<br>
checking for complete errno.h... yes
<br>
checking whether strerror_r is declared... yes
<br>
checking for strerror_r... yes
<br>
checking whether strerror_r returns char *... yes
<br>
checking for inline... inline
<br>
checking for mode_t... yes
<br>
checking for sig_atomic_t... yes
<br>
checking whether stdin defaults to large file offsets... yes
<br>
checking getopt.h usability... yes
<br>
checking getopt.h presence... yes
<br>
checking for getopt.h... yes
<br>
checking for getopt_long_only... yes
<br>
checking whether optreset is declared... no
<br>
checking for working GNU getopt function... yes
<br>
checking whether getenv is declared... yes
<br>
checking for C/C++ restrict keyword... __restrict
<br>
checking for struct timeval... yes
<br>
checking where to find the exponent in a 'float'... word 0 bit 23
<br>
checking whether byte ordering is bigendian... no
<br>
checking whether getc_unlocked is declared... yes
<br>
checking whether we are using the GNU C Library 2.1 or newer... yes
<br>
checking for multithread API to use... none
<br>
checking whether malloc, realloc, calloc are POSIX compliant... yes
<br>
checking for stdlib.h... (cached) yes
<br>
checking for GNU libc compatible malloc... yes
<br>
checking for mbstate_t... yes
<br>
checking for a traditional japanese locale... ja_JP
<br>
checking for a transitional chinese locale... zh_CN.GB18030
<br>
checking for a french Unicode locale... fr_FR.UTF-8
<br>
checking for special C compiler options needed for large files... no
<br>
checking for _FILE_OFFSET_BITS value needed for large files... no
<br>
checking whether posix_spawn works... yes
<br>
checking for uid_t in sys/types.h... yes
<br>
checking whether snprintf is declared... yes
<br>
checking for stdbool.h that conforms to C99... yes
<br>
checking for _Bool... yes
<br>
checking for working strerror function... yes
<br>
checking whether strndup is declared... yes
<br>
checking whether strnlen is declared... yes
<br>
checking whether strsignal is declared... yes
<br>
checking whether sys_siglist is declared... yes
<br>
checking whether stat file-mode macros are broken... no
<br>
checking whether clearerr_unlocked is declared... yes
<br>
checking whether feof_unlocked is declared... yes
<br>
checking whether ferror_unlocked is declared... yes
<br>
checking whether fflush_unlocked is declared... yes
<br>
checking whether fgets_unlocked is declared... yes
<br>
checking whether fputc_unlocked is declared... yes
<br>
checking whether fputs_unlocked is declared... yes
<br>
checking whether fread_unlocked is declared... yes
<br>
checking whether fwrite_unlocked is declared... yes
<br>
checking whether getchar_unlocked is declared... yes
<br>
checking whether putc_unlocked is declared... yes
<br>
checking whether putchar_unlocked is declared... yes
<br>
checking for wchar_t... yes
<br>
checking for wint_t... yes
<br>
checking for size_t... yes
<br>
checking for inttypes.h... yes
<br>
checking for stdint.h... yes
<br>
checking for intmax_t... yes
<br>
checking whether printf supports size specifiers as in C99... yes
<br>
checking whether printf supports 'long double' arguments... yes
<br>
checking whether printf supports infinite 'double' arguments... yes
<br>
checking whether printf supports infinite 'long double' arguments... no
<br>
checking whether printf supports the 'a' and 'A' directives... no
<br>
checking whether printf supports the 'F' directive... yes
<br>
checking whether printf supports the 'n' directive... yes
<br>
checking whether printf supports the 'ls' directive... yes
<br>
checking whether printf supports POSIX/XSI format strings with positions... yes
<br>
checking whether printf supports the grouping flag... yes
<br>
checking whether printf supports the left-adjust flag correctly... yes
<br>
checking whether printf supports the zero flag correctly... yes
<br>
checking whether printf supports large precisions... yes
<br>
checking whether printf survives out-of-memory conditions... yes
<br>
checking whether ungetc works on arbitrary bytes... yes
<br>
checking whether alarm is declared... yes
<br>
checking for alloca as a compiler built-in... yes
<br>
checking whether to enable assertions... yes
<br>
checking whether btowc(EOF) is correct... yes
<br>
checking whether sigaltstack is declared... yes
<br>
checking for stack_t... yes
<br>
checking whether // is distinct from /... (cached) no
<br>
checking if environ is properly declared... yes
<br>
checking for error_at_line... yes
<br>
checking for working fcntl.h... yes
<br>
checking whether fflush works on input streams... no
<br>
checking whether fopen recognizes a trailing slash... yes
<br>
checking whether __fpending is declared... yes
<br>
checking whether fpurge is declared... no
<br>
checking whether frexp() can be used without linking with libm... yes
<br>
checking whether frexp works... yes
<br>
checking whether frexpl() can be used without linking with libm... yes
<br>
checking whether frexpl works... yes
<br>
checking whether frexpl is declared... yes
<br>
checking for fseeko... yes
<br>
checking for ftello... yes
<br>
checking for gettimeofday with POSIX signature... yes
<br>
checking whether gettimeofday clobbers localtime buffer... no
<br>
checking whether the compiler generally respects inline... yes
<br>
checking whether isnan(double) can be used without linking with libm... yes
<br>
checking whether isnan(float) can be used without linking with libm... yes
<br>
checking whether isnan(float) works... yes
<br>
checking whether isnan(long double) can be used without linking with libm... yes
<br>
checking whether isnanl works... no
<br>
checking where to find the exponent in a 'long double'... word 2 bit 0
<br>
checking for libsigsegv... (cached) no, consider installing GNU libsigsegv
<br>
checking whether lseek detects pipes... yes
<br>
checking whether lstat dereferences a symlink specified with a trailing slash... yes
<br>
checking for stdlib.h... (cached) yes
<br>
checking for GNU libc compatible malloc... (cached) yes
<br>
checking whether NAN macro works... yes
<br>
checking whether HUGE_VAL works... yes
<br>
checking whether mbrtowc handles incomplete characters... yes
<br>
checking whether mbrtowc works as well as mbtowc... yes
<br>
checking whether mbrtowc handles a NULL string argument... yes
<br>
checking whether mbrtowc has a correct return value... yes
<br>
checking whether mbrtowc returns 0 when parsing a NUL character... yes
<br>
checking whether mbrtowc handles incomplete characters... (cached) yes
<br>
checking whether mbrtowc works as well as mbtowc... (cached) yes
<br>
checking for mkdtemp... yes
<br>
checking for working mkstemp... yes
<br>
checking for obstacks... yes
<br>
checking whether open recognizes a trailing slash... yes
<br>
checking whether frexp can be used without linking with libm... (cached) yes
<br>
checking whether frexp works... (cached) yes
<br>
checking whether ldexp can be used without linking with libm... yes
<br>
checking whether frexpl can be used without linking with libm... (cached) yes
<br>
checking whether frexpl works... (cached) yes
<br>
checking whether frexpl is declared... (cached) yes
<br>
checking whether ldexpl can be used without linking with libm... yes
<br>
checking whether ldexpl works... yes
<br>
checking whether ldexpl is declared... yes
<br>
checking for rawmemchr... yes
<br>
checking for working re_compile_pattern... no
<br>
checking libintl.h usability... yes
<br>
checking libintl.h presence... yes
<br>
checking for libintl.h... yes
<br>
checking whether isblank is declared... yes
<br>
checking for struct sigaction.sa_sigaction... yes
<br>
checking for volatile sig_atomic_t... yes
<br>
checking for signbit macro... yes
<br>
checking for signbit compiler built-ins... yes
<br>
checking for sigprocmask... yes
<br>
checking for stdint.h... (cached) yes
<br>
checking for SIZE_MAX... yes
<br>
checking for snprintf... yes
<br>
checking whether snprintf respects a size of 1... yes
<br>
checking for ssize_t... yes
<br>
checking for va_copy... yes
<br>
checking whether stdint.h conforms to C99... no
<br>
checking sys/inttypes.h usability... no
<br>
checking sys/inttypes.h presence... no
<br>
checking for sys/inttypes.h... no
<br>
checking sys/bitypes.h usability... yes
<br>
checking sys/bitypes.h presence... yes
<br>
checking for sys/bitypes.h... yes
<br>
checking for bit size of ptrdiff_t... 64
<br>
checking for bit size of size_t... 64
<br>
checking for bit size of sig_atomic_t... 32
<br>
checking for bit size of wchar_t... 32
<br>
checking for bit size of wint_t... 32
<br>
checking whether sig_atomic_t is signed... yes
<br>
checking whether wchar_t is signed... yes
<br>
checking whether wint_t is signed... no
<br>
checking for ptrdiff_t integer literal suffix... l
<br>
checking for size_t integer literal suffix... ul
<br>
checking for sig_atomic_t integer literal suffix... 
<br>
checking for wchar_t integer literal suffix... 
<br>
checking for wint_t integer literal suffix... u
<br>
checking for random.h... no
<br>
checking for struct random_data... yes
<br>
checking for strchrnul... yes
<br>
checking for working strndup... yes
<br>
checking for working strnlen... yes
<br>
checking for strsignal... yes
<br>
checking whether strsignal always returns a string... yes
<br>
checking whether strstr works in linear time... no
<br>
checking for working strtod... yes
<br>
checking whether strtod obeys C99... no
<br>
checking for pow... no
<br>
checking for pow in -lm... yes
<br>
checking for strtol... yes
<br>
checking for nlink_t... yes
<br>
checking for __secure_getenv... yes
<br>
checking for ptrdiff_t... yes
<br>
checking for snprintf... (cached) yes
<br>
checking for strnlen... yes
<br>
checking for wcslen... yes
<br>
checking for wcsnlen... yes
<br>
checking for mbrtowc... (cached) yes
<br>
checking for wcrtomb... (cached) yes
<br>
checking whether _snprintf is declared... no
<br>
checking for vasprintf... yes
<br>
checking for vasprintf... (cached) yes
<br>
checking for nl_langinfo... yes
<br>
checking for ptrdiff_t... (cached) yes
<br>
checking for snprintf... (cached) yes
<br>
checking for strnlen... (cached) yes
<br>
checking for wcslen... (cached) yes
<br>
checking for wcsnlen... (cached) yes
<br>
checking for mbrtowc... (cached) yes
<br>
checking for wcrtomb... (cached) yes
<br>
checking whether _snprintf is declared... (cached) no
<br>
checking for waitid... yes
<br>
checking whether &lt;wchar.h&gt; is standalone... yes
<br>
checking whether wcrtomb return value is correct... yes
<br>
checking whether iswcntrl works... yes
<br>
checking for stdint.h... (cached) yes
<br>
checking for a traditional french locale... (cached) fr_FR
<br>
checking for a french Unicode locale... (cached) fr_FR.UTF-8
<br>
checking where to find the exponent in a 'double'... word 1 bit 20
<br>
checking where to find the exponent in a 'float'... (cached) word 0 bit 23
<br>
checking where to find the exponent in a 'long double'... (cached) word 2 bit 0
<br>
checking for a traditional french locale... (cached) fr_FR
<br>
checking for a french Unicode locale... (cached) fr_FR.UTF-8
<br>
checking for a traditional japanese locale... (cached) ja_JP
<br>
checking for a transitional chinese locale... (cached) zh_CN.GB18030
<br>
checking for a french Unicode locale... (cached) fr_FR.UTF-8
<br>
checking for a traditional french locale... (cached) fr_FR
<br>
checking for a french Unicode locale... (cached) fr_FR.UTF-8
<br>
checking for wchar_t... (cached) yes
<br>
checking for wint_t... (cached) yes
<br>
checking for unsetenv... yes
<br>
checking for unsetenv() return type... int
<br>
checking for a traditional french locale... (cached) fr_FR
<br>
checking for a french Unicode locale... (cached) fr_FR.UTF-8
<br>
checking for a traditional japanese locale... (cached) ja_JP
<br>
checking for a transitional chinese locale... (cached) zh_CN.GB18030
<br>
checking whether wctob works... yes
<br>
checking whether wctob is declared... yes
<br>
checking whether an open file can be renamed... yes
<br>
checking if changeword is wanted... no
<br>
checking which shell to use for syscmd... /bin/sh
<br>
checking if malloc debugging is wanted... no
<br>
configure: creating ./config.status
<br>
config.status: creating Makefile
<br>
config.status: creating doc/Makefile
<br>
config.status: creating lib/Makefile
<br>
config.status: creating src/Makefile
<br>
config.status: creating tests/Makefile
<br>
config.status: creating checks/Makefile
<br>
config.status: creating examples/Makefile
<br>
config.status: creating lib/config.h
<br>
config.status: executing depfiles commands
<br>
config.status: executing stamp-h commands
<br>
make
<br>
make  all-recursive
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13'
<br>
Making all in .
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13'
<br>
make[2]: Nothing to be done for `all-am'.
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13'
<br>
Making all in examples
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/examples'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/examples'
<br>
Making all in lib
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
<br>
&nbsp;&nbsp;cat ./alloca.in.h; \
<br>
} &gt; alloca.h-t
<br>
mv -f alloca.h-t alloca.h
<br>
rm -f configmake.h-t configmake.h
<br>
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
<br>
&nbsp;&nbsp;echo '#define PREFIX &quot;/tmp/OMPI-test-build/myopt&quot;'; \
<br>
&nbsp;&nbsp;echo '#define EXEC_PREFIX &quot;/tmp/OMPI-test-build/myopt&quot;'; \
<br>
&nbsp;&nbsp;echo '#define BINDIR &quot;/tmp/OMPI-test-build/myopt/bin&quot;'; \
<br>
&nbsp;&nbsp;echo '#define SBINDIR &quot;/tmp/OMPI-test-build/myopt/sbin&quot;'; \
<br>
&nbsp;&nbsp;echo '#define LIBEXECDIR &quot;/tmp/OMPI-test-build/myopt/libexec&quot;'; \
<br>
&nbsp;&nbsp;echo '#define DATAROOTDIR &quot;/tmp/OMPI-test-build/myopt/share&quot;'; \
<br>
&nbsp;&nbsp;echo '#define DATADIR &quot;/tmp/OMPI-test-build/myopt/share&quot;'; \
<br>
&nbsp;&nbsp;echo '#define SYSCONFDIR &quot;/tmp/OMPI-test-build/myopt/etc&quot;'; \
<br>
&nbsp;&nbsp;echo '#define SHAREDSTATEDIR &quot;/tmp/OMPI-test-build/myopt/com&quot;'; \
<br>
&nbsp;&nbsp;echo '#define LOCALSTATEDIR &quot;/tmp/OMPI-test-build/myopt/var&quot;'; \
<br>
&nbsp;&nbsp;echo '#define INCLUDEDIR &quot;/tmp/OMPI-test-build/myopt/include&quot;'; \
<br>
&nbsp;&nbsp;echo '#define OLDINCLUDEDIR &quot;/usr/include&quot;'; \
<br>
&nbsp;&nbsp;echo '#define DOCDIR &quot;/tmp/OMPI-test-build/myopt/share/doc/m4&quot;'; \
<br>
&nbsp;&nbsp;echo '#define INFODIR &quot;/tmp/OMPI-test-build/myopt/share/info&quot;'; \
<br>
&nbsp;&nbsp;echo '#define HTMLDIR &quot;/tmp/OMPI-test-build/myopt/share/doc/m4&quot;'; \
<br>
&nbsp;&nbsp;echo '#define DVIDIR &quot;/tmp/OMPI-test-build/myopt/share/doc/m4&quot;'; \
<br>
&nbsp;&nbsp;echo '#define PDFDIR &quot;/tmp/OMPI-test-build/myopt/share/doc/m4&quot;'; \
<br>
&nbsp;&nbsp;echo '#define PSDIR &quot;/tmp/OMPI-test-build/myopt/share/doc/m4&quot;'; \
<br>
&nbsp;&nbsp;echo '#define LIBDIR &quot;/tmp/OMPI-test-build/myopt/lib&quot;'; \
<br>
&nbsp;&nbsp;echo '#define LISPDIR &quot;&quot;'; \
<br>
&nbsp;&nbsp;echo '#define LOCALEDIR &quot;/tmp/OMPI-test-build/myopt/share/locale&quot;'; \
<br>
&nbsp;&nbsp;echo '#define MANDIR &quot;/tmp/OMPI-test-build/myopt/share/man&quot;'; \
<br>
&nbsp;&nbsp;echo '#define MANEXT &quot;&quot;'; \
<br>
&nbsp;&nbsp;echo '#define PKGDATADIR &quot;/tmp/OMPI-test-build/myopt/share/m4&quot;'; \
<br>
&nbsp;&nbsp;echo '#define PKGINCLUDEDIR &quot;/tmp/OMPI-test-build/myopt/include/m4&quot;'; \
<br>
&nbsp;&nbsp;echo '#define PKGLIBDIR &quot;/tmp/OMPI-test-build/myopt/lib/m4&quot;'; \
<br>
&nbsp;&nbsp;echo '#define PKGLIBEXECDIR &quot;/tmp/OMPI-test-build/myopt/libexec/m4&quot;'; \
<br>
} | sed '/&quot;&quot;/d' &gt; configmake.h-t
<br>
mv configmake.h-t configmake.h
<br>
rm -f fcntl.h-t fcntl.h
<br>
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
<br>
&nbsp;&nbsp;sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''NEXT_FCNTL_H''@|&lt;fcntl.h&gt;|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_OPEN''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_OPEN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; ./fcntl.in.h; \
<br>
} &gt; fcntl.h-t
<br>
mv fcntl.h-t fcntl.h
<br>
rm -f math.h-t math.h
<br>
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */' &amp;&amp; \
<br>
&nbsp;&nbsp;sed -e 's|@''INCLUDE_NEXT_AS_FIRST_DIRECTIVE''@|include_next|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''NEXT_MATH_H''@|&lt;math.h&gt;|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_CEILF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_CEILL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FLOORF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FLOORL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FREXP''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FREXPL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_ISFINITE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_ISINF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_ISNAN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_ISNANF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_ISNAND''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_ISNANL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_LDEXPL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MATHL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_ROUND''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_ROUNDF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_ROUNDL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_SIGNBIT''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_TRUNC''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_TRUNCF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_TRUNCL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_ISNANF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_ISNAND''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_ISNANL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_ACOSL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_ASINL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_ATANL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_COSL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_EXPL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_FREXPL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_LDEXPL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_LOGL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_SINL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_SQRTL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_TANL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_TRUNC''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_TRUNCF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_CEILF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_CEILL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FLOORF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FLOORL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FREXP''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FREXPL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_HUGE_VAL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_ISFINITE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_ISINF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_ISNAN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_LDEXPL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_NAN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_ROUND''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_ROUNDF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_ROUNDL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_SIGNBIT''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_SIGNBIT_USING_GCC''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_TRUNCL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; ./math.in.h; \
<br>
} &gt; math.h-t
<br>
mv math.h-t math.h
<br>
rm -f signal.h-t signal.h
<br>
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */' &amp;&amp; \
<br>
&nbsp;&nbsp;sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''NEXT_SIGNAL_H''@|&lt;signal.h&gt;|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_SIGNAL_H_SIGPIPE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_SIGPROCMASK''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_SIGACTION''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_POSIX_SIGNALBLOCKING''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_SIGSET_T''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_SIGINFO_T''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_SIGACTION''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STRUCT_SIGACTION_SA_SIGACTION''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_TYPE_VOLATILE_SIG_ATOMIC_T''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; ./signal.in.h; \
<br>
} &gt; signal.h-t
<br>
mv signal.h-t signal.h
<br>
rm -f stdint.h-t stdint.h
<br>
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
<br>
&nbsp;&nbsp;sed -e 's/@''HAVE_STDINT_H''@/1/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''INCLUDE_NEXT''@|include_next|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''NEXT_STDINT_H''@|&lt;stdint.h&gt;|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''HAVE_SYS_TYPES_H''@/1/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''HAVE_INTTYPES_H''@/1/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''HAVE_SYS_INTTYPES_H''@/0/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''HAVE_SYS_BITYPES_H''@/1/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''HAVE_LONG_LONG_INT''@/1/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''HAVE_UNSIGNED_LONG_LONG_INT''@/1/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''APPLE_UNIVERSAL_BUILD''@/0/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''BITSIZEOF_PTRDIFF_T''@/64/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''PTRDIFF_T_SUFFIX''@/l/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''BITSIZEOF_SIG_ATOMIC_T''@/32/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''HAVE_SIGNED_SIG_ATOMIC_T''@/1/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''SIG_ATOMIC_T_SUFFIX''@//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''BITSIZEOF_SIZE_T''@/64/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''SIZE_T_SUFFIX''@/ul/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''BITSIZEOF_WCHAR_T''@/32/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''HAVE_SIGNED_WCHAR_T''@/1/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''WCHAR_T_SUFFIX''@//g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''BITSIZEOF_WINT_T''@/32/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''HAVE_SIGNED_WINT_T''@/0/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's/@''WINT_T_SUFFIX''@/u/g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; ./stdint.in.h; \
<br>
} &gt; stdint.h-t
<br>
mv stdint.h-t stdint.h
<br>
rm -f stdio.h-t stdio.h
<br>
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */' &amp;&amp; \
<br>
&nbsp;&nbsp;sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''NEXT_STDIO_H''@|&lt;stdio.h&gt;|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FPRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FPRINTF_POSIX''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_PRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_PRINTF_POSIX''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_SNPRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_SPRINTF_POSIX''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_VFPRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_VFPRINTF_POSIX''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_VPRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_VPRINTF_POSIX''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_VSNPRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_VSPRINTF_POSIX''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_DPRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_VDPRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_VASPRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_OBSTACK_PRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_OBSTACK_PRINTF_POSIX''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FOPEN''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FREOPEN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FSEEK''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FSEEKO''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FTELL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FTELLO''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FFLUSH''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FCLOSE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FPUTC''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_PUTC''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_PUTCHAR''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FPUTS''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_PUTS''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FWRITE''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_GETDELIM''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_GETLINE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_PERROR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STDIO_H_SIGPIPE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_STDIO_WRITE_FUNCS''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FPRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_VFPRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_PRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_VPRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_SNPRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_SNPRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_VSNPRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_VSNPRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_SPRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_VSPRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DPRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_DPRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_VDPRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_VDPRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_VASPRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_VASPRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_OBSTACK_PRINTF''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_OBSTACK_PRINTF''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FOPEN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FREOPEN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FSEEKO''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FSEEK''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FTELLO''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FTELL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FFLUSH''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FCLOSE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_GETDELIM''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_GETLINE''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_GETLINE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_PERROR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; ./stdio.in.h; \
<br>
} &gt; stdio.h-t
<br>
mv stdio.h-t stdio.h
<br>
rm -f stdlib.h-t stdlib.h
<br>
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */' &amp;&amp; \
<br>
&nbsp;&nbsp;sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''NEXT_STDLIB_H''@|&lt;stdlib.h&gt;|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_RANDOM_H''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MALLOC_POSIX''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_REALLOC_POSIX''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_CALLOC_POSIX''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_ATOLL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_GETLOADAVG''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_GETSUBOPT''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MKDTEMP''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MKSTEMP''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_PUTENV''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_RANDOM_R''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_RPMATCH''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_SETENV''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRTOD''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRTOLL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRTOULL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_UNSETENV''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_ATOLL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_CALLOC_POSIX''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_GETSUBOPT''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_MALLOC_POSIX''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_MKDTEMP''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_REALLOC_POSIX''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_RANDOM_R''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_RPMATCH''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_SETENV''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STRTOD''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STRTOLL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STRTOULL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STRUCT_RANDOM_DATA''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_SYS_LOADAVG_H''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_UNSETENV''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_GETLOADAVG''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_MKSTEMP''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_PUTENV''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_STRTOD''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''VOID_UNSETENV''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; ./stdlib.in.h; \
<br>
} &gt; stdlib.h-t
<br>
mv stdlib.h-t stdlib.h
<br>
rm -f string.h-t string.h
<br>
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */' &amp;&amp; \
<br>
&nbsp;&nbsp;sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''NEXT_STRING_H''@|&lt;string.h&gt;|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSLEN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSNLEN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSCHR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSRCHR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSSTR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSCASECMP''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSNCASECMP''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSPCASECMP''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSCASESTR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSCSPN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSPBRK''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSSPN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSSEP''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MBSTOK_R''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MEMMEM''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MEMPCPY''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_MEMRCHR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_RAWMEMCHR''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STPCPY''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STPNCPY''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRCHRNUL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRDUP''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRNDUP''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRNLEN''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRPBRK''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRSEP''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRSTR''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRCASESTR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRTOK_R''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRERROR''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRSIGNAL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_STRVERSCMP''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_MEMMEM''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_MEMPCPY''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_MEMRCHR''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_RAWMEMCHR''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STPCPY''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STPNCPY''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STRCHRNUL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_STRDUP''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STRNDUP''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_STRNDUP''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_STRNLEN''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STRPBRK''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STRSEP''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STRCASESTR''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_STRTOK_R''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_STRERROR''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_STRSIGNAL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_STRVERSCMP''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_MEMMEM''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_STRCASESTR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_STRDUP''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_STRSTR''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_STRERROR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_STRSIGNAL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; ./string.in.h; \
<br>
} &gt; string.h-t
<br>
mv string.h-t string.h
<br>
/bin/mkdir -p sys
<br>
rm -f sys/stat.h-t sys/stat.h
<br>
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
<br>
&nbsp;&nbsp;sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''NEXT_SYS_STAT_H''@|&lt;sys/stat.h&gt;|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_LCHMOD''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_LSTAT''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_LCHMOD''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_LSTAT''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_LSTAT''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_MKDIR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; ./sys_stat.in.h; \
<br>
} &gt; sys/stat.h-t
<br>
mv sys/stat.h-t sys/stat.h
<br>
/bin/mkdir -p sys
<br>
rm -f sys/wait.h-t sys/wait.h
<br>
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
<br>
&nbsp;&nbsp;sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''NEXT_SYS_WAIT_H''@|&lt;sys/wait.h&gt;|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; ./sys_wait.in.h; \
<br>
} &gt; sys/wait.h-t
<br>
mv sys/wait.h-t sys/wait.h
<br>
rm -f unistd.h-t unistd.h
<br>
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
<br>
&nbsp;&nbsp;sed -e 's|@''HAVE_UNISTD_H''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''INCLUDE_NEXT''@|include_next|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''NEXT_UNISTD_H''@|&lt;unistd.h&gt;|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_CHOWN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_CLOSE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_DUP2''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_ENVIRON''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_EUIDACCESS''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FCHDIR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FSYNC''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_FTRUNCATE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_GETCWD''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_GETDOMAINNAME''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_GETDTABLESIZE''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_GETHOSTNAME''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_GETLOGIN_R''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_GETPAGESIZE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_GETUSERSHELL''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_LCHOWN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_LINK''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_LSEEK''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_READLINK''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_SLEEP''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_UNISTD_H_SIGPIPE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''GNULIB_WRITE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DUP2''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_EUIDACCESS''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_FSYNC''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_FTRUNCATE''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_GETDOMAINNAME''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_GETDTABLESIZE''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_GETHOSTNAME''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_GETPAGESIZE''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_GETUSERSHELL''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_LINK''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_READLINK''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_SLEEP''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_ENVIRON''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_DECL_GETLOGIN_R''@|1|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_OS_H''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''HAVE_SYS_PARAM_H''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_CHOWN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_CLOSE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_FCHDIR''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_GETCWD''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_GETPAGESIZE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_LCHOWN''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_LSEEK''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''REPLACE_WRITE''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e 's|@''UNISTD_H_HAVE_WINSOCK2_H''@|0|g' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; ./unistd.in.h; \
<br>
} &gt; unistd.h-t
<br>
mv unistd.h-t unistd.h
<br>
make  all-recursive
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
&nbsp;CC  gl_avltree_oset.o
<br>
&nbsp;CC  c-ctype.o
<br>
&nbsp;CC  c-stack.o
<br>
&nbsp;CC  clean-temp.o
<br>
&nbsp;CC  execute.o
<br>
&nbsp;CC  fatal-signal.o
<br>
&nbsp;CC  fpurge.o
<br>
&nbsp;CC  freadahead.o
<br>
&nbsp;CC  freading.o
<br>
&nbsp;CC  gl_linkedhash_list.o
<br>
&nbsp;CC  gl_list.o
<br>
&nbsp;CC  localcharset.o
<br>
&nbsp;CC  glthread/lock.o
<br>
&nbsp;CC  malloca.o
<br>
&nbsp;CC  memchr2.o
<br>
&nbsp;CC  gl_oset.o
<br>
&nbsp;CC  pipe.o
<br>
&nbsp;CC  printf-frexp.o
<br>
&nbsp;CC  printf-frexpl.o
<br>
&nbsp;CC  progname.o
<br>
&nbsp;CC  glthread/threadlib.o
<br>
&nbsp;CC  glthread/tls.o
<br>
&nbsp;CC  tmpdir.o
<br>
&nbsp;CC  verror.o
<br>
&nbsp;CC  version-etc.o
<br>
&nbsp;CC  version-etc-fsf.o
<br>
&nbsp;CC  wait-process.o
<br>
&nbsp;CC  xalloc-die.o
<br>
&nbsp;CC  xmalloca.o
<br>
&nbsp;CC  xprintf.o
<br>
&nbsp;CC  xstrndup.o
<br>
&nbsp;CC  xvasprintf.o
<br>
&nbsp;CC  xasprintf.o
<br>
&nbsp;CC  asnprintf.o
<br>
&nbsp;CC  asprintf.o
<br>
&nbsp;CC  basename.o
<br>
&nbsp;CC  cloexec.o
<br>
&nbsp;CC  close-stream.o
<br>
&nbsp;CC  closein.o
<br>
&nbsp;CC  closeout.o
<br>
&nbsp;CC  dirname.o
<br>
&nbsp;CC  dup-safer.o
<br>
&nbsp;CC  exitfail.o
<br>
&nbsp;CC  fd-safer.o
<br>
&nbsp;CC  fflush.o
<br>
&nbsp;CC  filenamecat.o
<br>
&nbsp;CC  fopen-safer.o
<br>
&nbsp;CC  fseeko.o
<br>
&nbsp;CC  isnanl.o
<br>
&nbsp;CC  mkstemp-safer.o
<br>
&nbsp;CC  pipe-safer.o
<br>
&nbsp;CC  printf-args.o
<br>
&nbsp;CC  printf-parse.o
<br>
&nbsp;CC  quotearg.o
<br>
&nbsp;CC  regex.o
<br>
&nbsp;CC  stripslash.o
<br>
&nbsp;CC  strstr.o
<br>
&nbsp;CC  strtod.o
<br>
&nbsp;CC  tempname.o
<br>
&nbsp;CC  vasnprintf.o
<br>
&nbsp;CC  vasprintf.o
<br>
&nbsp;CC  xmalloc.o
<br>
&nbsp;AR  libm4.a
<br>
rm -f t-charset.alias charset.alias
<br>
/bin/sh ./config.charset 'x86_64-unknown-linux-gnu' &gt; t-charset.alias
<br>
mv t-charset.alias charset.alias
<br>
rm -f t-ref-add.sed ref-add.sed
<br>
sed -e '/^#/d' -e 's/@''PACKAGE''@/m4/g' ref-add.sin &gt; t-ref-add.sed
<br>
mv t-ref-add.sed ref-add.sed
<br>
rm -f t-ref-del.sed ref-del.sed
<br>
sed -e '/^#/d' -e 's/@''PACKAGE''@/m4/g' ref-del.sin &gt; t-ref-del.sed
<br>
mv t-ref-del.sed ref-del.sed
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
Making all in src
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/src'
<br>
&nbsp;CC  m4.o
<br>
&nbsp;CC  builtin.o
<br>
&nbsp;CC  debug.o
<br>
&nbsp;CC  eval.o
<br>
&nbsp;CC  format.o
<br>
&nbsp;CC  freeze.o
<br>
&nbsp;CC  input.o
<br>
&nbsp;CC  macro.o
<br>
&nbsp;CC  output.o
<br>
&nbsp;CC  path.o
<br>
&nbsp;CC  symtab.o
<br>
&nbsp;CCLD  m4
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/src'
<br>
Making all in doc
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/doc'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/doc'
<br>
Making all in checks
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/checks'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/checks'
<br>
Making all in tests
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
cp ./test-posix_spawn1.in.sh test-posix_spawn1.sh-t
<br>
mv test-posix_spawn1.sh-t test-posix_spawn1.sh
<br>
cp ./test-posix_spawn2.in.sh test-posix_spawn2.sh-t
<br>
mv test-posix_spawn2.sh-t test-posix_spawn2.sh
<br>
make  all-recursive
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make[4]: Nothing to be done for `all-am'.
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13'
<br>
make install
<br>
make  install-recursive
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13'
<br>
Making install in .
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
make[3]: Nothing to be done for `install-data-am'.
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13'
<br>
Making install in examples
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/examples'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/examples'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
make[3]: Nothing to be done for `install-data-am'.
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/examples'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/examples'
<br>
Making install in lib
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
make  install-recursive
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
make[5]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
if test yes = no; then \
<br>
&nbsp;&nbsp;case 'linux-gnu' in \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;darwin[56]*) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;need_charset_alias=true ;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;darwin* | cygwin* | mingw* | pw32* | cegcc*) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;need_charset_alias=false ;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;need_charset_alias=true ;; \
<br>
&nbsp;&nbsp;esac ; \
<br>
else \
<br>
&nbsp;&nbsp;need_charset_alias=false ; \
<br>
fi ; \
<br>
if $need_charset_alias; then \
<br>
&nbsp;&nbsp;/bin/sh /tmp/OMPI-test-build/m4-1.4.13/build-aux/install-sh -d /tmp/OMPI-test-build/myopt/lib ; \
<br>
fi ; \
<br>
if test -f /tmp/OMPI-test-build/myopt/lib/charset.alias; then \
<br>
&nbsp;&nbsp;sed -f ref-add.sed /tmp/OMPI-test-build/myopt/lib/charset.alias &gt; /tmp/OMPI-test-build/myopt/lib/charset.tmp ; \
<br>
&nbsp;&nbsp;/usr/bin/install -c -m 644 /tmp/OMPI-test-build/myopt/lib/charset.tmp /tmp/OMPI-test-build/myopt/lib/charset.alias ; \
<br>
&nbsp;&nbsp;rm -f /tmp/OMPI-test-build/myopt/lib/charset.tmp ; \
<br>
else \
<br>
&nbsp;&nbsp;if $need_charset_alias; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sed -f ref-add.sed charset.alias &gt; /tmp/OMPI-test-build/myopt/lib/charset.tmp ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/install -c -m 644 /tmp/OMPI-test-build/myopt/lib/charset.tmp /tmp/OMPI-test-build/myopt/lib/charset.alias ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rm -f /tmp/OMPI-test-build/myopt/lib/charset.tmp ; \
<br>
&nbsp;&nbsp;fi ; \
<br>
fi
<br>
make[5]: Nothing to be done for `install-data-am'.
<br>
make[5]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
<br>
Making install in src
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/src'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/src'
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/bin&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/bin&quot;
<br>
&nbsp;&nbsp;/usr/bin/install -c m4 '/tmp/OMPI-test-build/myopt/bin'
<br>
make[3]: Nothing to be done for `install-data-am'.
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/src'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/src'
<br>
Making install in doc
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/doc'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/doc'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/info&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/info&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 ./m4.info ./m4.info-1 ./m4.info-2 '/tmp/OMPI-test-build/myopt/share/info'
<br>
&nbsp;install-info --info-dir='/tmp/OMPI-test-build/myopt/share/info' '/tmp/OMPI-test-build/myopt/share/info/m4.info'
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/man/man1&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/man/man1&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 ./m4.1 '/tmp/OMPI-test-build/myopt/share/man/man1'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/doc'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/doc'
<br>
Making install in checks
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/checks'
<br>
make[2]: Nothing to be done for `install'.
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/checks'
<br>
Making install in tests
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make  install-recursive
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make[5]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make[5]: Nothing to be done for `install-exec-am'.
<br>
make[5]: Nothing to be done for `install-data-am'.
<br>
make[5]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13'
<br>
popd
<br>
/tmp/OMPI-test-build 
<br>
end
<br>
bunzip2 autoconf-2.63.tar.bz2
<br>
tar xf autoconf-2.63.tar
<br>
pushd autoconf-2.63
<br>
/tmp/OMPI-test-build/autoconf-2.63 /tmp/OMPI-test-build 
<br>
./configure --prefix=/tmp/OMPI-test-build/myopt
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for a thread-safe mkdir -p... /bin/mkdir -p
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking whether /bin/sh -n is known to work... yes
<br>
checking for expr... /usr/bin/expr
<br>
checking for GNU M4 that supports accurate traces... /tmp/OMPI-test-build/myopt/bin/m4
<br>
checking how m4 supports trace files... --debugfile
<br>
checking for perl... /usr/bin/perl
<br>
checking for emacs... emacs
<br>
checking whether emacs is sufficiently recent... yes
<br>
checking for emacs... emacs
<br>
checking where .elc files should go... ${datarootdir}/emacs/site-lisp
<br>
checking for grep that handles long lines and -e... /usr/bin/grep
<br>
checking for egrep... /usr/bin/grep -E
<br>
checking for a sed that does not truncate output... /usr/bin/sed
<br>
checking whether make is case sensitive... yes
<br>
configure: creating ./config.status
<br>
config.status: creating tests/Makefile
<br>
config.status: creating tests/atlocal
<br>
config.status: creating man/Makefile
<br>
config.status: creating lib/emacs/Makefile
<br>
config.status: creating Makefile
<br>
config.status: creating doc/Makefile
<br>
config.status: creating lib/Makefile
<br>
config.status: creating lib/Autom4te/Makefile
<br>
config.status: creating lib/autoscan/Makefile
<br>
config.status: creating lib/m4sugar/Makefile
<br>
config.status: creating lib/autoconf/Makefile
<br>
config.status: creating lib/autotest/Makefile
<br>
config.status: creating bin/Makefile
<br>
config.status: executing tests/atconfig commands
<br>
make
<br>
make  all-recursive
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63'
<br>
Making all in bin
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/bin'
<br>
rm -f autom4te autom4te.tmp
<br>
srcdir=''; \
<br>
&nbsp;&nbsp;test -f ./autom4te.in || srcdir=./; \
<br>
&nbsp;&nbsp;sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from autom4te.in; do not edit by hand.|g' ${srcdir}autom4te.in &gt;autom4te.tmp
<br>
chmod +x autom4te.tmp
<br>
chmod a-w autom4te.tmp
<br>
mv autom4te.tmp autom4te
<br>
cd ../lib &amp;&amp; make  autom4te.cfg
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
<br>
rm -f autom4te.cfg autom4te.tmp
<br>
sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@AWK[@]|gawk|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' ./autom4te.in &gt;autom4te.tmp
<br>
chmod a-w autom4te.tmp
<br>
mv autom4te.tmp autom4te.cfg
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
<br>
cd ../lib/m4sugar &amp;&amp; make  version.m4
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
<br>
:;{ \
<br>
&nbsp;&nbsp;echo '# This file is part of -*- Autoconf -*-.' &amp;&amp; \
<br>
&nbsp;&nbsp;echo '# Version of Autoconf.' &amp;&amp; \
<br>
&nbsp;&nbsp;echo '# Copyright (C) 1999, 2000, 2001, 2002, 2006, 2007' &amp;&amp; \
<br>
&nbsp;&nbsp;echo '# Free Software Foundation, Inc.' &amp;&amp; \
<br>
&nbsp;&nbsp;echo  &amp;&amp;\
<br>
&nbsp;&nbsp;echo 'm4_define([m4_PACKAGE_NAME],      [GNU Autoconf])' &amp;&amp; \
<br>
&nbsp;&nbsp;echo 'm4_define([m4_PACKAGE_TARNAME],   [autoconf])' &amp;&amp; \
<br>
&nbsp;&nbsp;echo 'm4_define([m4_PACKAGE_VERSION],   [2.63])' &amp;&amp; \
<br>
&nbsp;&nbsp;echo 'm4_define([m4_PACKAGE_STRING],    [GNU Autoconf 2.63])' &amp;&amp; \
<br>
&nbsp;&nbsp;echo 'm4_define([m4_PACKAGE_BUGREPORT], [bug-autoconf_at_[hidden]])'; \
<br>
} &gt; version.m4-t
<br>
mv version.m4-t version.m4
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
<br>
autom4te_perllibdir='..'/lib AUTOM4TE_CFG='../lib/autom4te.cfg'         ../bin/autom4te -B '..'/lib -B '..'/lib         --language M4sh --cache '' --melt ./autoconf.as -o autoconf.in
<br>
rm -f autoconf autoconf.tmp
<br>
srcdir=''; \
<br>
&nbsp;&nbsp;test -f ./autoconf.in || srcdir=./; \
<br>
&nbsp;&nbsp;sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from autoconf.in; do not edit by hand.|g' ${srcdir}autoconf.in &gt;autoconf.tmp
<br>
chmod +x autoconf.tmp
<br>
chmod a-w autoconf.tmp
<br>
mv autoconf.tmp autoconf
<br>
rm -f autoheader autoheader.tmp
<br>
srcdir=''; \
<br>
&nbsp;&nbsp;test -f ./autoheader.in || srcdir=./; \
<br>
&nbsp;&nbsp;sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from autoheader.in; do not edit by hand.|g' ${srcdir}autoheader.in &gt;autoheader.tmp
<br>
chmod +x autoheader.tmp
<br>
chmod a-w autoheader.tmp
<br>
mv autoheader.tmp autoheader
<br>
rm -f autoreconf autoreconf.tmp
<br>
srcdir=''; \
<br>
&nbsp;&nbsp;test -f ./autoreconf.in || srcdir=./; \
<br>
&nbsp;&nbsp;sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from autoreconf.in; do not edit by hand.|g' ${srcdir}autoreconf.in &gt;autoreconf.tmp
<br>
chmod +x autoreconf.tmp
<br>
chmod a-w autoreconf.tmp
<br>
mv autoreconf.tmp autoreconf
<br>
rm -f ifnames ifnames.tmp
<br>
srcdir=''; \
<br>
&nbsp;&nbsp;test -f ./ifnames.in || srcdir=./; \
<br>
&nbsp;&nbsp;sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from ifnames.in; do not edit by hand.|g' ${srcdir}ifnames.in &gt;ifnames.tmp
<br>
chmod +x ifnames.tmp
<br>
chmod a-w ifnames.tmp
<br>
mv ifnames.tmp ifnames
<br>
rm -f autoscan autoscan.tmp
<br>
srcdir=''; \
<br>
&nbsp;&nbsp;test -f ./autoscan.in || srcdir=./; \
<br>
&nbsp;&nbsp;sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from autoscan.in; do not edit by hand.|g' ${srcdir}autoscan.in &gt;autoscan.tmp
<br>
chmod +x autoscan.tmp
<br>
chmod a-w autoscan.tmp
<br>
mv autoscan.tmp autoscan
<br>
rm -f autoupdate autoupdate.tmp
<br>
srcdir=''; \
<br>
&nbsp;&nbsp;test -f ./autoupdate.in || srcdir=./; \
<br>
&nbsp;&nbsp;sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from autoupdate.in; do not edit by hand.|g' ${srcdir}autoupdate.in &gt;autoupdate.tmp
<br>
chmod +x autoupdate.tmp
<br>
chmod a-w autoupdate.tmp
<br>
mv autoupdate.tmp autoupdate
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/bin'
<br>
Making all in .
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63'
<br>
make[2]: Nothing to be done for `all-am'.
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63'
<br>
Making all in lib
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
<br>
Making all in Autom4te
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/Autom4te'
<br>
make[3]: Nothing to be done for `all'.
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/Autom4te'
<br>
Making all in m4sugar
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
<br>
autom4te_perllibdir='../..'/lib AUTOM4TE_CFG='../../lib/autom4te.cfg'         ../../bin/autom4te -B '../..'/lib -B '../..'/lib        				\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--language=m4sugar			\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--freeze			\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--output=m4sugar.m4f
<br>
autom4te_perllibdir='../..'/lib AUTOM4TE_CFG='../../lib/autom4te.cfg'         ../../bin/autom4te -B '../..'/lib -B '../..'/lib        				\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--language=m4sh			\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--freeze			\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--output=m4sh.m4f
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
<br>
Making all in autoconf
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoconf'
<br>
autom4te_perllibdir='../..'/lib AUTOM4TE_CFG='../../lib/autom4te.cfg'         ../../bin/autom4te -B '../..'/lib -B '../..'/lib        				\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--language=autoconf			\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--freeze			\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--output=autoconf.m4f
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoconf'
<br>
Making all in autotest
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autotest'
<br>
autom4te_perllibdir='../..'/lib AUTOM4TE_CFG='../../lib/autom4te.cfg'         ../../bin/autom4te -B '../..'/lib -B '../..'/lib        				\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--language=autotest			\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--freeze			\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--output=autotest.m4f
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autotest'
<br>
Making all in autoscan
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoscan'
<br>
echo '# Automatically Generated: do not edit this file' &gt;autoscan.list
<br>
sed '/^[#]/!q' ./autoscan.pre                  &gt;&gt;autoscan.list
<br>
( \
<br>
&nbsp;&nbsp;sed -n '/^[^#]/p' ./autoscan.pre; \
<br>
&nbsp;&nbsp;autom4te_perllibdir='../..'/lib AUTOM4TE_CFG='../../lib/autom4te.cfg'         ../../bin/autom4te -B '../..'/lib -B '../..'/lib         --cache '' -M -l autoconf -t'AN_OUTPUT:$1: $2		$3' \
<br>
) | LC_ALL=C sort                                      &gt;&gt;autoscan.list
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoscan'
<br>
Making all in emacs
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/emacs'
<br>
WARNING: Warnings can be ignored. :-)
<br>
if test &quot;emacs&quot; != no; then \
<br>
&nbsp;&nbsp;set x; \
<br>
&nbsp;&nbsp;list='autoconf-mode.el autotest-mode.el'; for p in $list; do \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if test -f &quot;$p&quot;; then d=; else d=&quot;./&quot;; fi; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;set x &quot;$@&quot; &quot;$d$p&quot;; shift; \
<br>
&nbsp;&nbsp;done; \
<br>
&nbsp;&nbsp;shift; \
<br>
&nbsp;&nbsp;EMACS=&quot;emacs&quot; /bin/sh ../../build-aux/elisp-comp &quot;$@&quot; || exit 1; \
<br>
else : ; fi
<br>
While compiling autoconf-mode in file /tmp/OMPI-test-build/autoconf-2.63/lib/emacs/elc.4876/autoconf-mode.el:
<br>
&nbsp;&nbsp;** assignment to free variable add-log-current-defun-function
<br>
Wrote /tmp/OMPI-test-build/autoconf-2.63/lib/emacs/elc.4876/autoconf-mode.elc
<br>
While compiling autotest-mode in file /tmp/OMPI-test-build/autoconf-2.63/lib/emacs/elc.4876/autotest-mode.el:
<br>
&nbsp;&nbsp;** assignment to free variable add-log-current-defun-function
<br>
Wrote /tmp/OMPI-test-build/autoconf-2.63/lib/emacs/elc.4876/autotest-mode.elc
<br>
Done
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/emacs'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
<br>
make[3]: Nothing to be done for `all-am'.
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
<br>
Making all in doc
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/doc'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/doc'
<br>
Making all in tests
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/tests'
<br>
autom4te_perllibdir='..'/lib AUTOM4TE_CFG='../lib/autom4te.cfg'         ../bin/autom4te -B '..'/lib -B '..'/lib         --language=M4sh ./wrapper.as -o wrapper.in
<br>
rm -f autoconf autoconf.tmp
<br>
input=wrapper.in; \
<br>
sed -e 's|@wrap_program[@]|autoconf|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e &quot;s|@configure_input[@]|Generated from $input.|g&quot; wrapper.in &gt;autoconf.tmp
<br>
chmod +x autoconf.tmp
<br>
chmod a-w autoconf.tmp
<br>
mv -f autoconf.tmp autoconf
<br>
rm -f autoheader autoheader.tmp
<br>
input=wrapper.in; \
<br>
sed -e 's|@wrap_program[@]|autoheader|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e &quot;s|@configure_input[@]|Generated from $input.|g&quot; wrapper.in &gt;autoheader.tmp
<br>
chmod +x autoheader.tmp
<br>
chmod a-w autoheader.tmp
<br>
mv -f autoheader.tmp autoheader
<br>
rm -f autom4te autom4te.tmp
<br>
input=wrapper.in; \
<br>
sed -e 's|@wrap_program[@]|autom4te|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e &quot;s|@configure_input[@]|Generated from $input.|g&quot; wrapper.in &gt;autom4te.tmp
<br>
chmod +x autom4te.tmp
<br>
chmod a-w autom4te.tmp
<br>
mv -f autom4te.tmp autom4te
<br>
rm -f autoreconf autoreconf.tmp
<br>
input=wrapper.in; \
<br>
sed -e 's|@wrap_program[@]|autoreconf|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e &quot;s|@configure_input[@]|Generated from $input.|g&quot; wrapper.in &gt;autoreconf.tmp
<br>
chmod +x autoreconf.tmp
<br>
chmod a-w autoreconf.tmp
<br>
mv -f autoreconf.tmp autoreconf
<br>
rm -f autoscan autoscan.tmp
<br>
input=wrapper.in; \
<br>
sed -e 's|@wrap_program[@]|autoscan|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e &quot;s|@configure_input[@]|Generated from $input.|g&quot; wrapper.in &gt;autoscan.tmp
<br>
chmod +x autoscan.tmp
<br>
chmod a-w autoscan.tmp
<br>
mv -f autoscan.tmp autoscan
<br>
rm -f autoupdate autoupdate.tmp
<br>
input=wrapper.in; \
<br>
sed -e 's|@wrap_program[@]|autoupdate|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e &quot;s|@configure_input[@]|Generated from $input.|g&quot; wrapper.in &gt;autoupdate.tmp
<br>
chmod +x autoupdate.tmp
<br>
chmod a-w autoupdate.tmp
<br>
mv -f autoupdate.tmp autoupdate
<br>
rm -f ifnames ifnames.tmp
<br>
input=wrapper.in; \
<br>
sed -e 's|@wrap_program[@]|ifnames|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e &quot;s|@configure_input[@]|Generated from $input.|g&quot; wrapper.in &gt;ifnames.tmp
<br>
chmod +x ifnames.tmp
<br>
chmod a-w ifnames.tmp
<br>
mv -f ifnames.tmp ifnames
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/tests'
<br>
Making all in man
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/man'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/man'
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63'
<br>
make install
<br>
make  install-recursive
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63'
<br>
Making install in bin
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/bin'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/bin'
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/bin&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/bin&quot;
<br>
&nbsp;/usr/bin/install -c 'autom4te' '/tmp/OMPI-test-build/myopt/bin/autom4te'
<br>
&nbsp;/usr/bin/install -c 'autoconf' '/tmp/OMPI-test-build/myopt/bin/autoconf'
<br>
&nbsp;/usr/bin/install -c 'autoheader' '/tmp/OMPI-test-build/myopt/bin/autoheader'
<br>
&nbsp;/usr/bin/install -c 'autoreconf' '/tmp/OMPI-test-build/myopt/bin/autoreconf'
<br>
&nbsp;/usr/bin/install -c 'ifnames' '/tmp/OMPI-test-build/myopt/bin/ifnames'
<br>
&nbsp;/usr/bin/install -c 'autoscan' '/tmp/OMPI-test-build/myopt/bin/autoscan'
<br>
&nbsp;/usr/bin/install -c 'autoupdate' '/tmp/OMPI-test-build/myopt/bin/autoupdate'
<br>
make[3]: Nothing to be done for `install-data-am'.
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/bin'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/bin'
<br>
Making install in .
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/autoconf&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/autoconf&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 './INSTALL' '/tmp/OMPI-test-build/myopt/share/autoconf/INSTALL'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63'
<br>
Making install in lib
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
<br>
Making install in Autom4te
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/Autom4te'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/Autom4te'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'C4che.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/C4che.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'ChannelDefs.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/ChannelDefs.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Channels.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/Channels.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Configure_ac.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/Configure_ac.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'FileUtils.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/FileUtils.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'General.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/General.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Request.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/Request.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Struct.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/Struct.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'XFile.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/XFile.pm'
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/Autom4te'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/Autom4te'
<br>
Making install in m4sugar
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'm4sugar.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar/m4sugar.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'foreach.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar/foreach.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'm4sh.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar/m4sh.m4'
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'version.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar/version.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'm4sugar.m4f' '/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar/m4sugar.m4f'
<br>
&nbsp;/usr/bin/install -c -m 644 'm4sh.m4f' '/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar/m4sh.m4f'
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
<br>
Making install in autoconf
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoconf'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoconf'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/autoconf/autoconf&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/autoconf/autoconf&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'autoconf.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/autoconf.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'general.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/general.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'status.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/status.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'oldnames.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/oldnames.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'specific.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/specific.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'autoheader.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/autoheader.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'autoupdate.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/autoupdate.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'autotest.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/autotest.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'autoscan.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/autoscan.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'lang.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/lang.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'c.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/c.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'erlang.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/erlang.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'fortran.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/fortran.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'functions.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/functions.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'headers.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/headers.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'types.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/types.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'libs.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/libs.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'programs.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/programs.m4'
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/autoconf/autoconf&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/autoconf/autoconf&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'autoconf.m4f' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/autoconf.m4f'
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoconf'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoconf'
<br>
Making install in autotest
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autotest'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autotest'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/autoconf/autotest&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/autoconf/autotest&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'autotest.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autotest/autotest.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'general.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autotest/general.m4'
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/autoconf/autotest&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/autoconf/autotest&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'autotest.m4f' '/tmp/OMPI-test-build/myopt/share/autoconf/autotest/autotest.m4f'
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autotest'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autotest'
<br>
Making install in autoscan
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoscan'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoscan'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/autoconf/autoscan&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/autoconf/autoscan&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'autoscan.list' '/tmp/OMPI-test-build/myopt/share/autoconf/autoscan/autoscan.list'
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoscan'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoscan'
<br>
Making install in emacs
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/emacs'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/emacs'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
&nbsp;/usr/bin/install -c -m 644 'autoconf-mode.el' '/tmp/OMPI-test-build/myopt/share/emacs/site-lisp/autoconf-mode.el'
<br>
&nbsp;/usr/bin/install -c -m 644 'autoconf-mode.elc' '/tmp/OMPI-test-build/myopt/share/emacs/site-lisp/autoconf-mode.elc'
<br>
&nbsp;/usr/bin/install -c -m 644 'autotest-mode.el' '/tmp/OMPI-test-build/myopt/share/emacs/site-lisp/autotest-mode.el'
<br>
&nbsp;/usr/bin/install -c -m 644 'autotest-mode.elc' '/tmp/OMPI-test-build/myopt/share/emacs/site-lisp/autotest-mode.elc'
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/emacs'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/emacs'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/autoconf&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/autoconf&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'autom4te.cfg' '/tmp/OMPI-test-build/myopt/share/autoconf/autom4te.cfg'
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
<br>
Making install in doc
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/doc'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/doc'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/info&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/info&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 './autoconf.info' '/tmp/OMPI-test-build/myopt/share/info/autoconf.info'
<br>
&nbsp;/usr/bin/install -c -m 644 './standards.info' '/tmp/OMPI-test-build/myopt/share/info/standards.info'
<br>
&nbsp;install-info --info-dir='/tmp/OMPI-test-build/myopt/share/info' '/tmp/OMPI-test-build/myopt/share/info/autoconf.info'
<br>
&nbsp;install-info --info-dir='/tmp/OMPI-test-build/myopt/share/info' '/tmp/OMPI-test-build/myopt/share/info/standards.info'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/doc'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/doc'
<br>
Making install in tests
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/tests'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/tests'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
make[3]: Nothing to be done for `install-data-am'.
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/tests'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/tests'
<br>
Making install in man
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/man'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/man'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/man/man1&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/man/man1&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 '././autoconf.1' '/tmp/OMPI-test-build/myopt/share/man/man1/autoconf.1'
<br>
&nbsp;/usr/bin/install -c -m 644 '././autoheader.1' '/tmp/OMPI-test-build/myopt/share/man/man1/autoheader.1'
<br>
&nbsp;/usr/bin/install -c -m 644 '././autom4te.1' '/tmp/OMPI-test-build/myopt/share/man/man1/autom4te.1'
<br>
&nbsp;/usr/bin/install -c -m 644 '././autoreconf.1' '/tmp/OMPI-test-build/myopt/share/man/man1/autoreconf.1'
<br>
&nbsp;/usr/bin/install -c -m 644 '././autoscan.1' '/tmp/OMPI-test-build/myopt/share/man/man1/autoscan.1'
<br>
&nbsp;/usr/bin/install -c -m 644 '././autoupdate.1' '/tmp/OMPI-test-build/myopt/share/man/man1/autoupdate.1'
<br>
&nbsp;/usr/bin/install -c -m 644 '././ifnames.1' '/tmp/OMPI-test-build/myopt/share/man/man1/ifnames.1'
<br>
&nbsp;/usr/bin/install -c -m 644 '././config.guess.1' '/tmp/OMPI-test-build/myopt/share/man/man1/config.guess.1'
<br>
&nbsp;/usr/bin/install -c -m 644 '././config.sub.1' '/tmp/OMPI-test-build/myopt/share/man/man1/config.sub.1'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/man'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/man'
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63'
<br>
popd
<br>
/tmp/OMPI-test-build 
<br>
end
<br>
bunzip2 automake-1.10.2.tar.bz2
<br>
tar xf automake-1.10.2.tar
<br>
pushd automake-1.10.2
<br>
/tmp/OMPI-test-build/automake-1.10.2 /tmp/OMPI-test-build 
<br>
./configure --prefix=/tmp/OMPI-test-build/myopt
<br>
checking build system type... x86_64-unknown-linux-gnu
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for a thread-safe mkdir -p... /bin/mkdir -p
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking for perl... /usr/bin/perl
<br>
checking for tex... no
<br>
checking whether autoconf is installed... yes
<br>
checking whether autoconf works... yes
<br>
checking whether autoconf is recent enough... yes
<br>
checking whether ln works... yes
<br>
checking for grep that handles long lines and -e... /usr/bin/grep
<br>
checking for egrep... /usr/bin/grep -E
<br>
checking for fgrep... /usr/bin/grep -F
<br>
configure: creating ./config.status
<br>
config.status: creating Makefile
<br>
config.status: creating doc/Makefile
<br>
config.status: creating lib/Automake/Makefile
<br>
config.status: creating lib/Automake/tests/Makefile
<br>
config.status: creating lib/Makefile
<br>
config.status: creating lib/am/Makefile
<br>
config.status: creating m4/Makefile
<br>
config.status: creating tests/Makefile
<br>
config.status: creating tests/defs
<br>
config.status: creating tests/aclocal-1.10
<br>
config.status: creating tests/automake-1.10
<br>
make
<br>
Making all in lib
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
<br>
Making all in Automake
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
<br>
Making all in tests
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake/tests'
<br>
make[3]: Nothing to be done for `all'.
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake/tests'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
<br>
rm -f Config.tmp Config.pm
<br>
in=`echo Config.pm | sed 's/\.[^.]*$//'`; sed -e 's,[@]APIVERSION[@],1.10,g' -e 's,[@]PACKAGE[@],automake,g' -e 's,[@]PERL[@],/usr/bin/perl,g' -e 's,[@]SHELL[@],/bin/sh,g' -e 's,[@]VERSION[@],1.10.2,g' -e &quot;s,[@]configure_input[@],Generated from $in.in; do not edit by hand.,g&quot; -e 's,[@]datadir[@],/tmp/OMPI-test-build/myopt/share,g' ./Config.in &gt;Config.tmp
<br>
chmod +x Config.tmp
<br>
chmod a-w Config.tmp
<br>
mv -f Config.tmp Config.pm
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
<br>
Making all in am
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/am'
<br>
make[2]: Nothing to be done for `all'.
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/am'
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
<br>
make[2]: Nothing to be done for `all-am'.
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
<br>
Making all in .
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2'
<br>
rm -f automake automake.tmp
<br>
sed -e 's,[@]APIVERSION[@],1.10,g' -e 's,[@]PACKAGE[@],automake,g' -e 's,[@]PATH_SEPARATOR[@],:,g' -e 's,[@]PERL[@],/usr/bin/perl,g' -e 's,[@]SHELL[@],/bin/sh,g' -e 's,[@]VERSION[@],1.10.2,g' -e 's,[@]configure_input[@],Generated from automake.in; do not edit by hand.,g' -e 's,[@]datadir[@],/tmp/OMPI-test-build/myopt/share,g' ./automake.in &gt;automake.tmp
<br>
chmod +x automake.tmp
<br>
chmod a-w automake.tmp
<br>
mv -f automake.tmp automake
<br>
rm -f aclocal aclocal.tmp
<br>
sed -e 's,[@]APIVERSION[@],1.10,g' -e 's,[@]PACKAGE[@],automake,g' -e 's,[@]PATH_SEPARATOR[@],:,g' -e 's,[@]PERL[@],/usr/bin/perl,g' -e 's,[@]SHELL[@],/bin/sh,g' -e 's,[@]VERSION[@],1.10.2,g' -e 's,[@]configure_input[@],Generated from aclocal.in; do not edit by hand.,g' -e 's,[@]datadir[@],/tmp/OMPI-test-build/myopt/share,g' ./aclocal.in &gt;aclocal.tmp
<br>
chmod +x aclocal.tmp
<br>
chmod a-w aclocal.tmp
<br>
mv -f aclocal.tmp aclocal
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2'
<br>
Making all in doc
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/doc'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/doc'
<br>
Making all in m4
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/m4'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/m4'
<br>
Making all in tests
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/tests'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/tests'
<br>
make install
<br>
Making install in lib
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
<br>
Making install in Automake
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
<br>
Making install in tests
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake/tests'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake/tests'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
make[4]: Nothing to be done for `install-data-am'.
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake/tests'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake/tests'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'ChannelDefs.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/ChannelDefs.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Channels.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Channels.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Condition.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Condition.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Configure_ac.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Configure_ac.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'DisjConditions.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/DisjConditions.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'FileUtils.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/FileUtils.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'General.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/General.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Item.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Item.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'ItemDef.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/ItemDef.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Location.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Location.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Options.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Options.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Rule.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Rule.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'RuleDef.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/RuleDef.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Struct.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Struct.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Variable.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Variable.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'VarDef.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/VarDef.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Version.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Version.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'XFile.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/XFile.pm'
<br>
&nbsp;/usr/bin/install -c -m 644 'Wrap.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Wrap.pm'
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'Config.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Config.pm'
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
<br>
Making install in am
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/am'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/am'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/automake-1.10/am&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/automake-1.10/am&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'ansi2knr.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/ansi2knr.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'check.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/check.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'clean-hdr.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/clean-hdr.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'clean.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/clean.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'compile.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/compile.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'configure.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/configure.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'data.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/data.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'dejagnu.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/dejagnu.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'depend.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/depend.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'depend2.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/depend2.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'distdir.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/distdir.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'footer.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/footer.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'header-vars.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/header-vars.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'header.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/header.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'install.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/install.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'inst-vars.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/inst-vars.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'java.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/java.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'lang-compile.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/lang-compile.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'lex.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/lex.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'library.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/library.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'libs.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/libs.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'libtool.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/libtool.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'lisp.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/lisp.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'ltlib.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/ltlib.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'ltlibrary.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/ltlibrary.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'mans-vars.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/mans-vars.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'mans.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/mans.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'multilib.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/multilib.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'program.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/program.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'progs.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/progs.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'python.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/python.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'remake-hdr.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/remake-hdr.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'scripts.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/scripts.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'subdirs.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/subdirs.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'tags.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/tags.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'texi-vers.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/texi-vers.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'texibuild.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/texibuild.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'texinfos.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/texinfos.am'
<br>
&nbsp;/usr/bin/install -c -m 644 'yacc.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/yacc.am'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/am'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/am'
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/automake-1.10&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/automake-1.10&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'COPYING' '/tmp/OMPI-test-build/myopt/share/automake-1.10/COPYING'
<br>
&nbsp;/usr/bin/install -c -m 644 'INSTALL' '/tmp/OMPI-test-build/myopt/share/automake-1.10/INSTALL'
<br>
&nbsp;/usr/bin/install -c -m 644 'texinfo.tex' '/tmp/OMPI-test-build/myopt/share/automake-1.10/texinfo.tex'
<br>
&nbsp;/usr/bin/install -c -m 644 'ansi2knr.c' '/tmp/OMPI-test-build/myopt/share/automake-1.10/ansi2knr.c'
<br>
&nbsp;/usr/bin/install -c -m 644 'ansi2knr.1' '/tmp/OMPI-test-build/myopt/share/automake-1.10/ansi2knr.1'
<br>
&nbsp;/usr/bin/install -c -m 644 'config-ml.in' '/tmp/OMPI-test-build/myopt/share/automake-1.10/config-ml.in'
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/automake-1.10&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/automake-1.10&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'config.guess' '/tmp/OMPI-test-build/myopt/share/automake-1.10/config.guess'
<br>
&nbsp;/usr/bin/install -c -m 644 'config.sub' '/tmp/OMPI-test-build/myopt/share/automake-1.10/config.sub'
<br>
&nbsp;/usr/bin/install -c -m 644 'install-sh' '/tmp/OMPI-test-build/myopt/share/automake-1.10/install-sh'
<br>
&nbsp;/usr/bin/install -c -m 644 'mdate-sh' '/tmp/OMPI-test-build/myopt/share/automake-1.10/mdate-sh'
<br>
&nbsp;/usr/bin/install -c -m 644 'missing' '/tmp/OMPI-test-build/myopt/share/automake-1.10/missing'
<br>
&nbsp;/usr/bin/install -c -m 644 'mkinstalldirs' '/tmp/OMPI-test-build/myopt/share/automake-1.10/mkinstalldirs'
<br>
&nbsp;/usr/bin/install -c -m 644 'elisp-comp' '/tmp/OMPI-test-build/myopt/share/automake-1.10/elisp-comp'
<br>
&nbsp;/usr/bin/install -c -m 644 'ylwrap' '/tmp/OMPI-test-build/myopt/share/automake-1.10/ylwrap'
<br>
&nbsp;/usr/bin/install -c -m 644 'acinstall' '/tmp/OMPI-test-build/myopt/share/automake-1.10/acinstall'
<br>
&nbsp;/usr/bin/install -c -m 644 'depcomp' '/tmp/OMPI-test-build/myopt/share/automake-1.10/depcomp'
<br>
&nbsp;/usr/bin/install -c -m 644 'compile' '/tmp/OMPI-test-build/myopt/share/automake-1.10/compile'
<br>
&nbsp;/usr/bin/install -c -m 644 'py-compile' '/tmp/OMPI-test-build/myopt/share/automake-1.10/py-compile'
<br>
&nbsp;/usr/bin/install -c -m 644 'symlink-tree' '/tmp/OMPI-test-build/myopt/share/automake-1.10/symlink-tree'
<br>
make  install-data-hook
<br>
make[4]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/config.guess
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/config.sub
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/install-sh
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/mdate-sh
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/missing
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/mkinstalldirs
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/elisp-comp
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/ylwrap
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/acinstall
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/depcomp
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/compile
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/py-compile
<br>
&nbsp;chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/symlink-tree
<br>
make[4]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
<br>
Making install in .
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2'
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2'
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/bin&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/bin&quot;
<br>
&nbsp;/usr/bin/install -c 'automake' '/tmp/OMPI-test-build/myopt/bin/automake'
<br>
&nbsp;/usr/bin/install -c 'aclocal' '/tmp/OMPI-test-build/myopt/bin/aclocal'
<br>
make  install-exec-hook
<br>
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2'
<br>
&nbsp;ln /tmp/OMPI-test-build/myopt/bin/automake /tmp/OMPI-test-build/myopt/bin/automake-1.10
<br>
&nbsp;ln /tmp/OMPI-test-build/myopt/bin/aclocal /tmp/OMPI-test-build/myopt/bin/aclocal-1.10
<br>
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2'
<br>
make[2]: Nothing to be done for `install-data-am'.
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2'
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2'
<br>
Making install in doc
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/doc'
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/doc'
<br>
make[2]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/doc/automake&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/doc/automake&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 './amhello-1.0.tar.gz' '/tmp/OMPI-test-build/myopt/share/doc/automake/amhello-1.0.tar.gz'
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/info&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/info&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 './automake.info' '/tmp/OMPI-test-build/myopt/share/info/automake.info'
<br>
&nbsp;/usr/bin/install -c -m 644 './automake.info-1' '/tmp/OMPI-test-build/myopt/share/info/automake.info-1'
<br>
&nbsp;/usr/bin/install -c -m 644 './automake.info-2' '/tmp/OMPI-test-build/myopt/share/info/automake.info-2'
<br>
&nbsp;install-info --info-dir='/tmp/OMPI-test-build/myopt/share/info' '/tmp/OMPI-test-build/myopt/share/info/automake.info'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/doc'
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/doc'
<br>
Making install in m4
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/m4'
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/m4'
<br>
make[2]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/tmp/OMPI-test-build/myopt/share/aclocal-1.10&quot; || /bin/mkdir -p &quot;/tmp/OMPI-test-build/myopt/share/aclocal-1.10&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 '../m4/amversion.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/amversion.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'as.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/as.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'auxdir.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/auxdir.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'ccstdc.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/ccstdc.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'cond.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/cond.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'depend.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/depend.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'depout.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/depout.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'dmalloc.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/dmalloc.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'gcj.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/gcj.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'header.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/header.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'init.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/init.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'install-sh.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/install-sh.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'lead-dot.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/lead-dot.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'lex.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/lex.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'lispdir.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/lispdir.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'maintainer.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/maintainer.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'make.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/make.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'minuso.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/minuso.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'missing.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/missing.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'mkdirp.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/mkdirp.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'multi.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/multi.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'obsol-gt.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/obsol-gt.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'obsol-lt.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/obsol-lt.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'obsolete.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/obsolete.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'options.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/options.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'protos.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/protos.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'python.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/python.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'regex.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/regex.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'runlog.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/runlog.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'sanity.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/sanity.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'strip.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/strip.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'substnot.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/substnot.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'tar.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/tar.m4'
<br>
&nbsp;/usr/bin/install -c -m 644 'upc.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/upc.m4'
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/m4'
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/m4'
<br>
Making install in tests
<br>
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/tests'
<br>
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/tests'
<br>
make[2]: Nothing to be done for `install-exec-am'.
<br>
make[2]: Nothing to be done for `install-data-am'.
<br>
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/tests'
<br>
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/tests'
<br>
popd
<br>
/tmp/OMPI-test-build 
<br>
end
<br>
bunzip2 openmpi-1.4a1r20984.tar.bz2
<br>
tar xf openmpi-1.4a1r20984.tar
<br>
pushd openmpi-1.4a1r20984
<br>
/tmp/OMPI-test-build/openmpi-1.4a1r20984 /tmp/OMPI-test-build 
<br>
./autogen.sh
<br>
[Checking] command line parameters
<br>
[Checking] prerequisites
<br>
Configuring projects: opal orte ompi
<br>
/tmp/OMPI-test-build/openmpi-1.4a1r20984
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/backtrace/darwin
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/backtrace/darwin
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/backtrace/execinfo
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/backtrace/execinfo
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/backtrace/none
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/backtrace/none
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/backtrace/printstack
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/backtrace/printstack
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/carto/auto_detect
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   opal/mca/carto/auto_detect
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/carto/file
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   opal/mca/carto/file
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/crs/blcr
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/crs/blcr
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/crs/none
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   opal/mca/crs/none
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/crs/self
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/crs/self
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/installdirs/config
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/installdirs/config
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/installdirs/env
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/installdirs/env
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/maffinity/first_use
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   opal/mca/maffinity/first_use
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/maffinity/libnuma
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/maffinity/libnuma
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/memchecker/valgrind
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/memchecker/valgrind
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/memory/malloc_solaris
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/memory/malloc_solaris
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/memory/ptmalloc2
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/memory/ptmalloc2
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/paffinity/darwin
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/paffinity/darwin
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/paffinity/linux
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/paffinity/linux
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/paffinity/posix
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/paffinity/posix
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/paffinity/solaris
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/paffinity/solaris
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/paffinity/windows
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/paffinity/windows
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/pstat/darwin
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/pstat/darwin
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/pstat/linux
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/pstat/linux
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/aix
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/timer/aix
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/altix
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/timer/altix
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/catamount
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/timer/catamount
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/darwin
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/timer/darwin
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/linux
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/timer/linux
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/solaris
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/timer/solaris
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/windows
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   opal/mca/timer/windows
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/errmgr/default
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/errmgr/default
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/alps
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ess/alps
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/cnos
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ess/cnos
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/env
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ess/env
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/hnp
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ess/hnp
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/lsf
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ess/lsf
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/portals_utcp
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ess/portals_utcp
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/singleton
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ess/singleton
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/slave
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ess/slave
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/slurm
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ess/slurm
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/slurmd
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ess/slurmd
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/tool
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ess/tool
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/filem/rsh
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/filem/rsh
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/grpcomm/bad
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/grpcomm/bad
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/grpcomm/basic
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/grpcomm/basic
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/grpcomm/cnos
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/grpcomm/cnos
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/grpcomm/hier
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/grpcomm/hier
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/iof/hnp
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/iof/hnp
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/iof/orted
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/iof/orted
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/iof/tool
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/iof/tool
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/notifier/ftb
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/notifier/ftb
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/notifier/smtp
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/notifier/smtp
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/notifier/syslog
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/notifier/syslog
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/notifier/twitter
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/notifier/twitter
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/odls/default
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/odls/default
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/oob/tcp
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/oob/tcp
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/alps
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/plm/alps
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/lsf
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/plm/lsf
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/rsh
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/plm/rsh
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/slurm
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/plm/slurm
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/slurmd
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/plm/slurmd
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/tm
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/plm/tm
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/xgrid
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/plm/xgrid
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ras/alps
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ras/alps
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ras/gridengine
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ras/gridengine
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ras/loadleveler
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ras/loadleveler
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ras/lsf
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ras/lsf
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ras/slurm
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ras/slurm
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ras/tm
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/ras/tm
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/rmaps/rank_file
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/rmaps/rank_file
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/rmaps/round_robin
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/rmaps/round_robin
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/rmaps/seq
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/rmaps/seq
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/rmaps/topo
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/rmaps/topo
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/rml/ftrm
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/rml/ftrm
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/rml/oob
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/rml/oob
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/routed/binomial
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/routed/binomial
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/routed/direct
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/routed/direct
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/routed/linear
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/routed/linear
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/routed/radix
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/routed/radix
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/routed/slave
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   orte/mca/routed/slave
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/snapc/full
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   orte/mca/snapc/full
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/allocator/basic
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/allocator/basic
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/allocator/bucket
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/allocator/bucket
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/bml/r2
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/bml/r2
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/elan
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/btl/elan
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/gm
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/btl/gm
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/mx
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/btl/mx
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/ofud
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/btl/ofud
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/openib
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/btl/openib
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/portals
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/btl/portals
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/sctp
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/btl/sctp
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/self
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/btl/self
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/sm
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/btl/sm
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/tcp
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/btl/tcp
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/udapl
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/btl/udapl
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/basic
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/coll/basic
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/hierarch
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/coll/hierarch
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/inter
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/coll/inter
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/self
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/coll/self
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/sm
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/coll/sm
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/sync
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/coll/sync
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/tuned
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/coll/tuned
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/common/mx
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/common/mx
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/common/portals
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/common/portals
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/common/sm
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/common/sm
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/crcp/bkmrk
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/crcp/bkmrk
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/dpm/orte
<br>
<p>--&gt; Adding to top-level configure no-configure subdirs:
<br>
--&gt;   ompi/mca/dpm/orte
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>*** Found configure.params and configure.m4
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/io/romio
<br>
<p>--&gt; Adding to top-level configure m4-configure subdirs:
<br>
--&gt;   ompi/mca/io/romio
<br>
--&gt; Adding to top-level configure AC_CONFIG_FILES list:
<br>
--&gt;   Makefile
<br>
<p>==&gt; Found autogen.subdirs -- sub-traversing...
<br>
<p>*** Running autogen.sh in romio
<br>
***   (started in /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/io/romio)
<br>
[Checking] command line parameters
<br>
[Checking] prerequisites
<br>
<p>*** Found configure.(in|ac)
<br>
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/io/romio/romio
<br>
<p>*** Running GNU tools
<br>
[Running] libtoolize --automake --copy
<br>
[Running] aclocal
<br>
configure.in:2123: warning: macro `AM_PROG_LIBTOOL' not found in library
<br>
[Running] autoheader
<br>
[Running] autoconf
<br>
configure.in:2126: error: possibly undefined macro: AM_PROG_LIBTOOL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If this token and others are legitimate, please use m4_pattern_allow.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the Autoconf documentation.
<br>
<p>-------------------------------------------------------------------------
<br>
It seems that the execution of &quot;autoconf&quot; has failed.  See above for
<br>
the specific error message that caused it to abort.
<br>
-------------------------------------------------------------------------
<br>
<p>Error running autogen.sh -l in romio.  Aborting.
<br>
popd
<br>
/tmp/OMPI-test-build 
<br>
ls
<br>
autoconf-2.63
<br>
autoconf-2.63.tar
<br>
automake-1.10.2
<br>
automake-1.10.2.tar
<br>
log
<br>
m4-1.4.13
<br>
m4-1.4.13.tar
<br>
myopt
<br>
openmpi-1.4a1r20984
<br>
openmpi-1.4a1r20984.tar
<br>
run
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6727.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6725.php">Jeff Squyres: "Re: [OMPI devel] VMware and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6727.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6727.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
