ls
autoconf-2.63.tar.bz2
automake-1.10.2.tar.bz2
log
m4-1.4.13.tar.bz2
openmpi-1.4a1r20984.tar.bz2
run
setenv CFLAGS -O -m64 -g
setenv CXXFLAGS -O -m64 -g
setenv FFLAGS -O -m64 -g
setenv FCFLAGS -O -m64 -g
pwd
/tmp/OMPI-test-build
set INSTALLDIR = `pwd`/myopt
pwd
set path = ( /tmp/OMPI-test-build/myopt/bin /usr/ccs/bin /usr/bin /bin )
foreach PACKAGE ( m4-1.4.13 autoconf-2.63 automake-1.10.2 )
bunzip2 m4-1.4.13.tar.bz2
tar xf m4-1.4.13.tar
pushd m4-1.4.13
/tmp/OMPI-test-build/m4-1.4.13 /tmp/OMPI-test-build 
./configure --prefix=/tmp/OMPI-test-build/myopt
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking for gcc... gcc
checking for C compiler default output file name... a.out
checking whether the C compiler works... yes
checking whether we are cross compiling... no
checking for suffix of executables... 
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether gcc accepts -g... yes
checking for gcc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of gcc... gcc3
checking for ranlib... ranlib
checking whether gcc and cc understand -c and -o together... yes
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking how to run the C preprocessor... gcc -E
checking for grep that handles long lines and -e... /usr/bin/grep
checking for egrep... /usr/bin/grep -E
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
checking for _LARGEFILE_SOURCE value needed for large files... no
checking for gcc option to accept ISO C99... -std=gnu99
checking for gcc -std=gnu99 option to accept ISO Standard C... (cached) -std=gnu99
configure: autobuild project... GNU M4
configure: autobuild revision... 1.4.13
configure: autobuild hostname... saem9
configure: autobuild timestamp... 20090827T193729Z
checking for long long int... yes
checking for unsigned long long int... yes
checking for working alloca.h... yes
checking for alloca... yes
checking for btowc... yes
checking for setrlimit... yes
checking for sigaltstack... yes
checking for mempcpy... yes
checking for __fpending... yes
checking for fpurge... no
checking for __fpurge... yes
checking for __freading... yes
checking for getdtablesize... yes
checking for gettimeofday... yes
checking for lstat... yes
checking for mbsinit... yes
checking for mbrtowc... yes
checking for pathconf... yes
checking for posix_spawn... yes
checking for isblank... yes
checking for iswctype... yes
checking for wcscoll... yes
checking for sigaction... yes
checking for siginterrupt... yes
checking for pipe... yes
checking for vasnprintf... no
checking for wcrtomb... yes
checking for iswcntrl... yes
checking for setenv... yes
checking for wctob... yes
checking for nl_langinfo and CODESET... yes
checking for a traditional french locale... fr_FR
checking for ucontext.h... yes
checking for unistd.h... (cached) yes
checking for errno.h... yes
checking for fcntl.h... yes
checking for float.h... yes
checking for stdio_ext.h... yes
checking for sys/time.h... yes
checking for math.h... yes
checking for sys/param.h... yes
checking for locale.h... yes
checking for sched.h... yes
checking for signal.h... yes
checking for spawn.h... yes
checking for stdarg.h... yes
checking for stdint.h... (cached) yes
checking for wchar.h... yes
checking for stdio.h... yes
checking for stdlib.h... (cached) yes
checking for sys/socket.h... yes
checking for string.h... (cached) yes
checking for sys/stat.h... (cached) yes
checking for sys/wait.h... yes
checking for wctype.h... yes
checking for working C stack overflow detection... yes
checking for correct stack_t interpretation... yes
checking for precise C stack overflow detection... no
checking for ld used by GCC... /usr/x86_64-suse-linux/bin/ld
checking if the linker (/usr/x86_64-suse-linux/bin/ld) is GNU ld... yes
checking for shared library run path origin... done
checking for libsigsegv... no, consider installing GNU libsigsegv
checking whether system is Windows or MSDOS... no
checking whether // is distinct from /... no
checking whether the preprocessor supports include_next... yes
checking for complete errno.h... yes
checking whether strerror_r is declared... yes
checking for strerror_r... yes
checking whether strerror_r returns char *... yes
checking for inline... inline
checking for mode_t... yes
checking for sig_atomic_t... yes
checking whether stdin defaults to large file offsets... yes
checking getopt.h usability... yes
checking getopt.h presence... yes
checking for getopt.h... yes
checking for getopt_long_only... yes
checking whether optreset is declared... no
checking for working GNU getopt function... yes
checking whether getenv is declared... yes
checking for C/C++ restrict keyword... __restrict
checking for struct timeval... yes
checking where to find the exponent in a 'float'... word 0 bit 23
checking whether byte ordering is bigendian... no
checking whether getc_unlocked is declared... yes
checking whether we are using the GNU C Library 2.1 or newer... yes
checking for multithread API to use... none
checking whether malloc, realloc, calloc are POSIX compliant... yes
checking for stdlib.h... (cached) yes
checking for GNU libc compatible malloc... yes
checking for mbstate_t... yes
checking for a traditional japanese locale... ja_JP
checking for a transitional chinese locale... zh_CN.GB18030
checking for a french Unicode locale... fr_FR.UTF-8
checking for special C compiler options needed for large files... no
checking for _FILE_OFFSET_BITS value needed for large files... no
checking whether posix_spawn works... yes
checking for uid_t in sys/types.h... yes
checking whether snprintf is declared... yes
checking for stdbool.h that conforms to C99... yes
checking for _Bool... yes
checking for working strerror function... yes
checking whether strndup is declared... yes
checking whether strnlen is declared... yes
checking whether strsignal is declared... yes
checking whether sys_siglist is declared... yes
checking whether stat file-mode macros are broken... no
checking whether clearerr_unlocked is declared... yes
checking whether feof_unlocked is declared... yes
checking whether ferror_unlocked is declared... yes
checking whether fflush_unlocked is declared... yes
checking whether fgets_unlocked is declared... yes
checking whether fputc_unlocked is declared... yes
checking whether fputs_unlocked is declared... yes
checking whether fread_unlocked is declared... yes
checking whether fwrite_unlocked is declared... yes
checking whether getchar_unlocked is declared... yes
checking whether putc_unlocked is declared... yes
checking whether putchar_unlocked is declared... yes
checking for wchar_t... yes
checking for wint_t... yes
checking for size_t... yes
checking for inttypes.h... yes
checking for stdint.h... yes
checking for intmax_t... yes
checking whether printf supports size specifiers as in C99... yes
checking whether printf supports 'long double' arguments... yes
checking whether printf supports infinite 'double' arguments... yes
checking whether printf supports infinite 'long double' arguments... no
checking whether printf supports the 'a' and 'A' directives... no
checking whether printf supports the 'F' directive... yes
checking whether printf supports the 'n' directive... yes
checking whether printf supports the 'ls' directive... yes
checking whether printf supports POSIX/XSI format strings with positions... yes
checking whether printf supports the grouping flag... yes
checking whether printf supports the left-adjust flag correctly... yes
checking whether printf supports the zero flag correctly... yes
checking whether printf supports large precisions... yes
checking whether printf survives out-of-memory conditions... yes
checking whether ungetc works on arbitrary bytes... yes
checking whether alarm is declared... yes
checking for alloca as a compiler built-in... yes
checking whether to enable assertions... yes
checking whether btowc(EOF) is correct... yes
checking whether sigaltstack is declared... yes
checking for stack_t... yes
checking whether // is distinct from /... (cached) no
checking if environ is properly declared... yes
checking for error_at_line... yes
checking for working fcntl.h... yes
checking whether fflush works on input streams... no
checking whether fopen recognizes a trailing slash... yes
checking whether __fpending is declared... yes
checking whether fpurge is declared... no
checking whether frexp() can be used without linking with libm... yes
checking whether frexp works... yes
checking whether frexpl() can be used without linking with libm... yes
checking whether frexpl works... yes
checking whether frexpl is declared... yes
checking for fseeko... yes
checking for ftello... yes
checking for gettimeofday with POSIX signature... yes
checking whether gettimeofday clobbers localtime buffer... no
checking whether the compiler generally respects inline... yes
checking whether isnan(double) can be used without linking with libm... yes
checking whether isnan(float) can be used without linking with libm... yes
checking whether isnan(float) works... yes
checking whether isnan(long double) can be used without linking with libm... yes
checking whether isnanl works... no
checking where to find the exponent in a 'long double'... word 2 bit 0
checking for libsigsegv... (cached) no, consider installing GNU libsigsegv
checking whether lseek detects pipes... yes
checking whether lstat dereferences a symlink specified with a trailing slash... yes
checking for stdlib.h... (cached) yes
checking for GNU libc compatible malloc... (cached) yes
checking whether NAN macro works... yes
checking whether HUGE_VAL works... yes
checking whether mbrtowc handles incomplete characters... yes
checking whether mbrtowc works as well as mbtowc... yes
checking whether mbrtowc handles a NULL string argument... yes
checking whether mbrtowc has a correct return value... yes
checking whether mbrtowc returns 0 when parsing a NUL character... yes
checking whether mbrtowc handles incomplete characters... (cached) yes
checking whether mbrtowc works as well as mbtowc... (cached) yes
checking for mkdtemp... yes
checking for working mkstemp... yes
checking for obstacks... yes
checking whether open recognizes a trailing slash... yes
checking whether frexp can be used without linking with libm... (cached) yes
checking whether frexp works... (cached) yes
checking whether ldexp can be used without linking with libm... yes
checking whether frexpl can be used without linking with libm... (cached) yes
checking whether frexpl works... (cached) yes
checking whether frexpl is declared... (cached) yes
checking whether ldexpl can be used without linking with libm... yes
checking whether ldexpl works... yes
checking whether ldexpl is declared... yes
checking for rawmemchr... yes
checking for working re_compile_pattern... no
checking libintl.h usability... yes
checking libintl.h presence... yes
checking for libintl.h... yes
checking whether isblank is declared... yes
checking for struct sigaction.sa_sigaction... yes
checking for volatile sig_atomic_t... yes
checking for signbit macro... yes
checking for signbit compiler built-ins... yes
checking for sigprocmask... yes
checking for stdint.h... (cached) yes
checking for SIZE_MAX... yes
checking for snprintf... yes
checking whether snprintf respects a size of 1... yes
checking for ssize_t... yes
checking for va_copy... yes
checking whether stdint.h conforms to C99... no
checking sys/inttypes.h usability... no
checking sys/inttypes.h presence... no
checking for sys/inttypes.h... no
checking sys/bitypes.h usability... yes
checking sys/bitypes.h presence... yes
checking for sys/bitypes.h... yes
checking for bit size of ptrdiff_t... 64
checking for bit size of size_t... 64
checking for bit size of sig_atomic_t... 32
checking for bit size of wchar_t... 32
checking for bit size of wint_t... 32
checking whether sig_atomic_t is signed... yes
checking whether wchar_t is signed... yes
checking whether wint_t is signed... no
checking for ptrdiff_t integer literal suffix... l
checking for size_t integer literal suffix... ul
checking for sig_atomic_t integer literal suffix... 
checking for wchar_t integer literal suffix... 
checking for wint_t integer literal suffix... u
checking for random.h... no
checking for struct random_data... yes
checking for strchrnul... yes
checking for working strndup... yes
checking for working strnlen... yes
checking for strsignal... yes
checking whether strsignal always returns a string... yes
checking whether strstr works in linear time... no
checking for working strtod... yes
checking whether strtod obeys C99... no
checking for pow... no
checking for pow in -lm... yes
checking for strtol... yes
checking for nlink_t... yes
checking for __secure_getenv... yes
checking for ptrdiff_t... yes
checking for snprintf... (cached) yes
checking for strnlen... yes
checking for wcslen... yes
checking for wcsnlen... yes
checking for mbrtowc... (cached) yes
checking for wcrtomb... (cached) yes
checking whether _snprintf is declared... no
checking for vasprintf... yes
checking for vasprintf... (cached) yes
checking for nl_langinfo... yes
checking for ptrdiff_t... (cached) yes
checking for snprintf... (cached) yes
checking for strnlen... (cached) yes
checking for wcslen... (cached) yes
checking for wcsnlen... (cached) yes
checking for mbrtowc... (cached) yes
checking for wcrtomb... (cached) yes
checking whether _snprintf is declared... (cached) no
checking for waitid... yes
checking whether <wchar.h> is standalone... yes
checking whether wcrtomb return value is correct... yes
checking whether iswcntrl works... yes
checking for stdint.h... (cached) yes
checking for a traditional french locale... (cached) fr_FR
checking for a french Unicode locale... (cached) fr_FR.UTF-8
checking where to find the exponent in a 'double'... word 1 bit 20
checking where to find the exponent in a 'float'... (cached) word 0 bit 23
checking where to find the exponent in a 'long double'... (cached) word 2 bit 0
checking for a traditional french locale... (cached) fr_FR
checking for a french Unicode locale... (cached) fr_FR.UTF-8
checking for a traditional japanese locale... (cached) ja_JP
checking for a transitional chinese locale... (cached) zh_CN.GB18030
checking for a french Unicode locale... (cached) fr_FR.UTF-8
checking for a traditional french locale... (cached) fr_FR
checking for a french Unicode locale... (cached) fr_FR.UTF-8
checking for wchar_t... (cached) yes
checking for wint_t... (cached) yes
checking for unsetenv... yes
checking for unsetenv() return type... int
checking for a traditional french locale... (cached) fr_FR
checking for a french Unicode locale... (cached) fr_FR.UTF-8
checking for a traditional japanese locale... (cached) ja_JP
checking for a transitional chinese locale... (cached) zh_CN.GB18030
checking whether wctob works... yes
checking whether wctob is declared... yes
checking whether an open file can be renamed... yes
checking if changeword is wanted... no
checking which shell to use for syscmd... /bin/sh
checking if malloc debugging is wanted... no
configure: creating ./config.status
config.status: creating Makefile
config.status: creating doc/Makefile
config.status: creating lib/Makefile
config.status: creating src/Makefile
config.status: creating tests/Makefile
config.status: creating checks/Makefile
config.status: creating examples/Makefile
config.status: creating lib/config.h
config.status: executing depfiles commands
config.status: executing stamp-h commands
make
make  all-recursive
make[1]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13'
Making all in .
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13'
make[2]: Nothing to be done for `all-am'.
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13'
Making all in examples
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/examples'
make[2]: Nothing to be done for `all'.
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/examples'
Making all in lib
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
  cat ./alloca.in.h; \
} > alloca.h-t
mv -f alloca.h-t alloca.h
rm -f configmake.h-t configmake.h
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
  echo '#define PREFIX "/tmp/OMPI-test-build/myopt"'; \
  echo '#define EXEC_PREFIX "/tmp/OMPI-test-build/myopt"'; \
  echo '#define BINDIR "/tmp/OMPI-test-build/myopt/bin"'; \
  echo '#define SBINDIR "/tmp/OMPI-test-build/myopt/sbin"'; \
  echo '#define LIBEXECDIR "/tmp/OMPI-test-build/myopt/libexec"'; \
  echo '#define DATAROOTDIR "/tmp/OMPI-test-build/myopt/share"'; \
  echo '#define DATADIR "/tmp/OMPI-test-build/myopt/share"'; \
  echo '#define SYSCONFDIR "/tmp/OMPI-test-build/myopt/etc"'; \
  echo '#define SHAREDSTATEDIR "/tmp/OMPI-test-build/myopt/com"'; \
  echo '#define LOCALSTATEDIR "/tmp/OMPI-test-build/myopt/var"'; \
  echo '#define INCLUDEDIR "/tmp/OMPI-test-build/myopt/include"'; \
  echo '#define OLDINCLUDEDIR "/usr/include"'; \
  echo '#define DOCDIR "/tmp/OMPI-test-build/myopt/share/doc/m4"'; \
  echo '#define INFODIR "/tmp/OMPI-test-build/myopt/share/info"'; \
  echo '#define HTMLDIR "/tmp/OMPI-test-build/myopt/share/doc/m4"'; \
  echo '#define DVIDIR "/tmp/OMPI-test-build/myopt/share/doc/m4"'; \
  echo '#define PDFDIR "/tmp/OMPI-test-build/myopt/share/doc/m4"'; \
  echo '#define PSDIR "/tmp/OMPI-test-build/myopt/share/doc/m4"'; \
  echo '#define LIBDIR "/tmp/OMPI-test-build/myopt/lib"'; \
  echo '#define LISPDIR ""'; \
  echo '#define LOCALEDIR "/tmp/OMPI-test-build/myopt/share/locale"'; \
  echo '#define MANDIR "/tmp/OMPI-test-build/myopt/share/man"'; \
  echo '#define MANEXT ""'; \
  echo '#define PKGDATADIR "/tmp/OMPI-test-build/myopt/share/m4"'; \
  echo '#define PKGINCLUDEDIR "/tmp/OMPI-test-build/myopt/include/m4"'; \
  echo '#define PKGLIBDIR "/tmp/OMPI-test-build/myopt/lib/m4"'; \
  echo '#define PKGLIBEXECDIR "/tmp/OMPI-test-build/myopt/libexec/m4"'; \
} | sed '/""/d' > configmake.h-t
mv configmake.h-t configmake.h
rm -f fcntl.h-t fcntl.h
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
  sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
      -e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
      -e 's|@''NEXT_FCNTL_H''@|<fcntl.h>|g' \
      -e 's|@''GNULIB_OPEN''@|1|g' \
      -e 's|@''REPLACE_OPEN''@|0|g' \
      < ./fcntl.in.h; \
} > fcntl.h-t
mv fcntl.h-t fcntl.h
rm -f math.h-t math.h
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */' && \
  sed -e 's|@''INCLUDE_NEXT_AS_FIRST_DIRECTIVE''@|include_next|g' \
      -e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
      -e 's|@''NEXT_MATH_H''@|<math.h>|g' \
      -e 's|@''GNULIB_CEILF''@|0|g' \
      -e 's|@''GNULIB_CEILL''@|0|g' \
      -e 's|@''GNULIB_FLOORF''@|0|g' \
      -e 's|@''GNULIB_FLOORL''@|0|g' \
      -e 's|@''GNULIB_FREXP''@|1|g' \
      -e 's|@''GNULIB_FREXPL''@|1|g' \
      -e 's|@''GNULIB_ISFINITE''@|0|g' \
      -e 's|@''GNULIB_ISINF''@|0|g' \
      -e 's|@''GNULIB_ISNAN''@|0|g' \
      -e 's|@''GNULIB_ISNANF''@|0|g' \
      -e 's|@''GNULIB_ISNAND''@|0|g' \
      -e 's|@''GNULIB_ISNANL''@|0|g' \
      -e 's|@''GNULIB_LDEXPL''@|0|g' \
      -e 's|@''GNULIB_MATHL''@|0|g' \
      -e 's|@''GNULIB_ROUND''@|0|g' \
      -e 's|@''GNULIB_ROUNDF''@|0|g' \
      -e 's|@''GNULIB_ROUNDL''@|0|g' \
      -e 's|@''GNULIB_SIGNBIT''@|1|g' \
      -e 's|@''GNULIB_TRUNC''@|0|g' \
      -e 's|@''GNULIB_TRUNCF''@|0|g' \
      -e 's|@''GNULIB_TRUNCL''@|0|g' \
      -e 's|@''HAVE_ISNANF''@|1|g' \
      -e 's|@''HAVE_ISNAND''@|1|g' \
      -e 's|@''HAVE_ISNANL''@|1|g' \
      -e 's|@''HAVE_DECL_ACOSL''@|1|g' \
      -e 's|@''HAVE_DECL_ASINL''@|1|g' \
      -e 's|@''HAVE_DECL_ATANL''@|1|g' \
      -e 's|@''HAVE_DECL_COSL''@|1|g' \
      -e 's|@''HAVE_DECL_EXPL''@|1|g' \
      -e 's|@''HAVE_DECL_FREXPL''@|1|g' \
      -e 's|@''HAVE_DECL_LDEXPL''@|1|g' \
      -e 's|@''HAVE_DECL_LOGL''@|1|g' \
      -e 's|@''HAVE_DECL_SINL''@|1|g' \
      -e 's|@''HAVE_DECL_SQRTL''@|1|g' \
      -e 's|@''HAVE_DECL_TANL''@|1|g' \
      -e 's|@''HAVE_DECL_TRUNC''@|1|g' \
      -e 's|@''HAVE_DECL_TRUNCF''@|1|g' \
      -e 's|@''REPLACE_CEILF''@|0|g' \
      -e 's|@''REPLACE_CEILL''@|0|g' \
      -e 's|@''REPLACE_FLOORF''@|0|g' \
      -e 's|@''REPLACE_FLOORL''@|0|g' \
      -e 's|@''REPLACE_FREXP''@|0|g' \
      -e 's|@''REPLACE_FREXPL''@|0|g' \
      -e 's|@''REPLACE_HUGE_VAL''@|0|g' \
      -e 's|@''REPLACE_ISFINITE''@|0|g' \
      -e 's|@''REPLACE_ISINF''@|0|g' \
      -e 's|@''REPLACE_ISNAN''@|0|g' \
      -e 's|@''REPLACE_LDEXPL''@|0|g' \
      -e 's|@''REPLACE_NAN''@|0|g' \
      -e 's|@''REPLACE_ROUND''@|0|g' \
      -e 's|@''REPLACE_ROUNDF''@|0|g' \
      -e 's|@''REPLACE_ROUNDL''@|0|g' \
      -e 's|@''REPLACE_SIGNBIT''@|0|g' \
      -e 's|@''REPLACE_SIGNBIT_USING_GCC''@|1|g' \
      -e 's|@''REPLACE_TRUNCL''@|0|g' \
      -e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
      < ./math.in.h; \
} > math.h-t
mv math.h-t math.h
rm -f signal.h-t signal.h
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */' && \
  sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
      -e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
      -e 's|@''NEXT_SIGNAL_H''@|<signal.h>|g' \
      -e 's|@''GNULIB_SIGNAL_H_SIGPIPE''@|0|g' \
      -e 's|@''GNULIB_SIGPROCMASK''@|1|g' \
      -e 's|@''GNULIB_SIGACTION''@|1|g' \
      -e 's|@''HAVE_POSIX_SIGNALBLOCKING''@|1|g' \
      -e 's|@''HAVE_SIGSET_T''@|1|g' \
      -e 's|@''HAVE_SIGINFO_T''@|1|g' \
      -e 's|@''HAVE_SIGACTION''@|1|g' \
      -e 's|@''HAVE_STRUCT_SIGACTION_SA_SIGACTION''@|1|g' \
      -e 's|@''HAVE_TYPE_VOLATILE_SIG_ATOMIC_T''@|1|g' \
      -e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
      < ./signal.in.h; \
} > signal.h-t
mv signal.h-t signal.h
rm -f stdint.h-t stdint.h
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
  sed -e 's/@''HAVE_STDINT_H''@/1/g' \
      -e 's|@''INCLUDE_NEXT''@|include_next|g' \
      -e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
      -e 's|@''NEXT_STDINT_H''@|<stdint.h>|g' \
      -e 's/@''HAVE_SYS_TYPES_H''@/1/g' \
      -e 's/@''HAVE_INTTYPES_H''@/1/g' \
      -e 's/@''HAVE_SYS_INTTYPES_H''@/0/g' \
      -e 's/@''HAVE_SYS_BITYPES_H''@/1/g' \
      -e 's/@''HAVE_LONG_LONG_INT''@/1/g' \
      -e 's/@''HAVE_UNSIGNED_LONG_LONG_INT''@/1/g' \
      -e 's/@''APPLE_UNIVERSAL_BUILD''@/0/g' \
      -e 's/@''BITSIZEOF_PTRDIFF_T''@/64/g' \
      -e 's/@''PTRDIFF_T_SUFFIX''@/l/g' \
      -e 's/@''BITSIZEOF_SIG_ATOMIC_T''@/32/g' \
      -e 's/@''HAVE_SIGNED_SIG_ATOMIC_T''@/1/g' \
      -e 's/@''SIG_ATOMIC_T_SUFFIX''@//g' \
      -e 's/@''BITSIZEOF_SIZE_T''@/64/g' \
      -e 's/@''SIZE_T_SUFFIX''@/ul/g' \
      -e 's/@''BITSIZEOF_WCHAR_T''@/32/g' \
      -e 's/@''HAVE_SIGNED_WCHAR_T''@/1/g' \
      -e 's/@''WCHAR_T_SUFFIX''@//g' \
      -e 's/@''BITSIZEOF_WINT_T''@/32/g' \
      -e 's/@''HAVE_SIGNED_WINT_T''@/0/g' \
      -e 's/@''WINT_T_SUFFIX''@/u/g' \
      < ./stdint.in.h; \
} > stdint.h-t
mv stdint.h-t stdint.h
rm -f stdio.h-t stdio.h
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */' && \
  sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
      -e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
      -e 's|@''NEXT_STDIO_H''@|<stdio.h>|g' \
      -e 's|@''GNULIB_FPRINTF''@|1|g' \
      -e 's|@''GNULIB_FPRINTF_POSIX''@|0|g' \
      -e 's|@''GNULIB_PRINTF''@|1|g' \
      -e 's|@''GNULIB_PRINTF_POSIX''@|0|g' \
      -e 's|@''GNULIB_SNPRINTF''@|1|g' \
      -e 's|@''GNULIB_SPRINTF_POSIX''@|0|g' \
      -e 's|@''GNULIB_VFPRINTF''@|1|g' \
      -e 's|@''GNULIB_VFPRINTF_POSIX''@|0|g' \
      -e 's|@''GNULIB_VPRINTF''@|1|g' \
      -e 's|@''GNULIB_VPRINTF_POSIX''@|0|g' \
      -e 's|@''GNULIB_VSNPRINTF''@|0|g' \
      -e 's|@''GNULIB_VSPRINTF_POSIX''@|0|g' \
      -e 's|@''GNULIB_DPRINTF''@|0|g' \
      -e 's|@''GNULIB_VDPRINTF''@|0|g' \
      -e 's|@''GNULIB_VASPRINTF''@|1|g' \
      -e 's|@''GNULIB_OBSTACK_PRINTF''@|0|g' \
      -e 's|@''GNULIB_OBSTACK_PRINTF_POSIX''@|0|g' \
      -e 's|@''GNULIB_FOPEN''@|1|g' \
      -e 's|@''GNULIB_FREOPEN''@|0|g' \
      -e 's|@''GNULIB_FSEEK''@|0|g' \
      -e 's|@''GNULIB_FSEEKO''@|1|g' \
      -e 's|@''GNULIB_FTELL''@|0|g' \
      -e 's|@''GNULIB_FTELLO''@|1|g' \
      -e 's|@''GNULIB_FFLUSH''@|1|g' \
      -e 's|@''GNULIB_FCLOSE''@|0|g' \
      -e 's|@''GNULIB_FPUTC''@|1|g' \
      -e 's|@''GNULIB_PUTC''@|1|g' \
      -e 's|@''GNULIB_PUTCHAR''@|1|g' \
      -e 's|@''GNULIB_FPUTS''@|1|g' \
      -e 's|@''GNULIB_PUTS''@|1|g' \
      -e 's|@''GNULIB_FWRITE''@|1|g' \
      -e 's|@''GNULIB_GETDELIM''@|0|g' \
      -e 's|@''GNULIB_GETLINE''@|0|g' \
      -e 's|@''GNULIB_PERROR''@|0|g' \
      -e 's|@''GNULIB_STDIO_H_SIGPIPE''@|0|g' \
      -e 's|@''REPLACE_STDIO_WRITE_FUNCS''@|0|g' \
      -e 's|@''REPLACE_FPRINTF''@|0|g' \
      -e 's|@''REPLACE_VFPRINTF''@|0|g' \
      -e 's|@''REPLACE_PRINTF''@|0|g' \
      -e 's|@''REPLACE_VPRINTF''@|0|g' \
      -e 's|@''REPLACE_SNPRINTF''@|0|g' \
      -e 's|@''HAVE_DECL_SNPRINTF''@|1|g' \
      -e 's|@''REPLACE_VSNPRINTF''@|0|g' \
      -e 's|@''HAVE_DECL_VSNPRINTF''@|1|g' \
      -e 's|@''REPLACE_SPRINTF''@|0|g' \
      -e 's|@''REPLACE_VSPRINTF''@|0|g' \
      -e 's|@''HAVE_DPRINTF''@|1|g' \
      -e 's|@''REPLACE_DPRINTF''@|0|g' \
      -e 's|@''HAVE_VDPRINTF''@|1|g' \
      -e 's|@''REPLACE_VDPRINTF''@|0|g' \
      -e 's|@''HAVE_VASPRINTF''@|1|g' \
      -e 's|@''REPLACE_VASPRINTF''@|1|g' \
      -e 's|@''HAVE_DECL_OBSTACK_PRINTF''@|1|g' \
      -e 's|@''REPLACE_OBSTACK_PRINTF''@|0|g' \
      -e 's|@''REPLACE_FOPEN''@|0|g' \
      -e 's|@''REPLACE_FREOPEN''@|0|g' \
      -e 's|@''REPLACE_FSEEKO''@|1|g' \
      -e 's|@''REPLACE_FSEEK''@|0|g' \
      -e 's|@''REPLACE_FTELLO''@|0|g' \
      -e 's|@''REPLACE_FTELL''@|0|g' \
      -e 's|@''REPLACE_FFLUSH''@|1|g' \
      -e 's|@''REPLACE_FCLOSE''@|0|g' \
      -e 's|@''HAVE_DECL_GETDELIM''@|1|g' \
      -e 's|@''HAVE_DECL_GETLINE''@|1|g' \
      -e 's|@''REPLACE_GETLINE''@|0|g' \
      -e 's|@''REPLACE_PERROR''@|0|g' \
      -e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
      < ./stdio.in.h; \
} > stdio.h-t
mv stdio.h-t stdio.h
rm -f stdlib.h-t stdlib.h
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */' && \
  sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
      -e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
      -e 's|@''NEXT_STDLIB_H''@|<stdlib.h>|g' \
      -e 's|@''HAVE_RANDOM_H''@|0|g' \
      -e 's|@''GNULIB_MALLOC_POSIX''@|1|g' \
      -e 's|@''GNULIB_REALLOC_POSIX''@|0|g' \
      -e 's|@''GNULIB_CALLOC_POSIX''@|0|g' \
      -e 's|@''GNULIB_ATOLL''@|0|g' \
      -e 's|@''GNULIB_GETLOADAVG''@|0|g' \
      -e 's|@''GNULIB_GETSUBOPT''@|0|g' \
      -e 's|@''GNULIB_MKDTEMP''@|1|g' \
      -e 's|@''GNULIB_MKSTEMP''@|1|g' \
      -e 's|@''GNULIB_PUTENV''@|0|g' \
      -e 's|@''GNULIB_RANDOM_R''@|0|g' \
      -e 's|@''GNULIB_RPMATCH''@|0|g' \
      -e 's|@''GNULIB_SETENV''@|1|g' \
      -e 's|@''GNULIB_STRTOD''@|1|g' \
      -e 's|@''GNULIB_STRTOLL''@|0|g' \
      -e 's|@''GNULIB_STRTOULL''@|0|g' \
      -e 's|@''GNULIB_UNSETENV''@|1|g' \
      -e 's|@''HAVE_ATOLL''@|1|g' \
      -e 's|@''HAVE_CALLOC_POSIX''@|1|g' \
      -e 's|@''HAVE_GETSUBOPT''@|1|g' \
      -e 's|@''HAVE_MALLOC_POSIX''@|1|g' \
      -e 's|@''HAVE_MKDTEMP''@|1|g' \
      -e 's|@''HAVE_REALLOC_POSIX''@|1|g' \
      -e 's|@''HAVE_RANDOM_R''@|1|g' \
      -e 's|@''HAVE_RPMATCH''@|1|g' \
      -e 's|@''HAVE_SETENV''@|1|g' \
      -e 's|@''HAVE_STRTOD''@|1|g' \
      -e 's|@''HAVE_STRTOLL''@|1|g' \
      -e 's|@''HAVE_STRTOULL''@|1|g' \
      -e 's|@''HAVE_STRUCT_RANDOM_DATA''@|1|g' \
      -e 's|@''HAVE_SYS_LOADAVG_H''@|0|g' \
      -e 's|@''HAVE_UNSETENV''@|1|g' \
      -e 's|@''HAVE_DECL_GETLOADAVG''@|1|g' \
      -e 's|@''REPLACE_MKSTEMP''@|0|g' \
      -e 's|@''REPLACE_PUTENV''@|0|g' \
      -e 's|@''REPLACE_STRTOD''@|1|g' \
      -e 's|@''VOID_UNSETENV''@|0|g' \
      -e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
      < ./stdlib.in.h; \
} > stdlib.h-t
mv stdlib.h-t stdlib.h
rm -f string.h-t string.h
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */' && \
  sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
      -e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
      -e 's|@''NEXT_STRING_H''@|<string.h>|g' \
      -e 's|@''GNULIB_MBSLEN''@|0|g' \
      -e 's|@''GNULIB_MBSNLEN''@|0|g' \
      -e 's|@''GNULIB_MBSCHR''@|0|g' \
      -e 's|@''GNULIB_MBSRCHR''@|0|g' \
      -e 's|@''GNULIB_MBSSTR''@|0|g' \
      -e 's|@''GNULIB_MBSCASECMP''@|0|g' \
      -e 's|@''GNULIB_MBSNCASECMP''@|0|g' \
      -e 's|@''GNULIB_MBSPCASECMP''@|0|g' \
      -e 's|@''GNULIB_MBSCASESTR''@|0|g' \
      -e 's|@''GNULIB_MBSCSPN''@|0|g' \
      -e 's|@''GNULIB_MBSPBRK''@|0|g' \
      -e 's|@''GNULIB_MBSSPN''@|0|g' \
      -e 's|@''GNULIB_MBSSEP''@|0|g' \
      -e 's|@''GNULIB_MBSTOK_R''@|0|g' \
      -e 's|@''GNULIB_MEMMEM''@|0|g' \
      -e 's|@''GNULIB_MEMPCPY''@|0|g' \
      -e 's|@''GNULIB_MEMRCHR''@|0|g' \
      -e 's|@''GNULIB_RAWMEMCHR''@|1|g' \
      -e 's|@''GNULIB_STPCPY''@|0|g' \
      -e 's|@''GNULIB_STPNCPY''@|0|g' \
      -e 's|@''GNULIB_STRCHRNUL''@|1|g' \
      -e 's|@''GNULIB_STRDUP''@|0|g' \
      -e 's|@''GNULIB_STRNDUP''@|1|g' \
      -e 's|@''GNULIB_STRNLEN''@|1|g' \
      -e 's|@''GNULIB_STRPBRK''@|0|g' \
      -e 's|@''GNULIB_STRSEP''@|0|g' \
      -e 's|@''GNULIB_STRSTR''@|1|g' \
      -e 's|@''GNULIB_STRCASESTR''@|0|g' \
      -e 's|@''GNULIB_STRTOK_R''@|0|g' \
      -e 's|@''GNULIB_STRERROR''@|1|g' \
      -e 's|@''GNULIB_STRSIGNAL''@|1|g' \
      -e 's|@''GNULIB_STRVERSCMP''@|0|g' \
      -e 's|@''HAVE_DECL_MEMMEM''@|1|g' \
      -e 's|@''HAVE_MEMPCPY''@|1|g' \
      -e 's|@''HAVE_DECL_MEMRCHR''@|1|g' \
      -e 's|@''HAVE_RAWMEMCHR''@|1|g' \
      -e 's|@''HAVE_STPCPY''@|1|g' \
      -e 's|@''HAVE_STPNCPY''@|1|g' \
      -e 's|@''HAVE_STRCHRNUL''@|1|g' \
      -e 's|@''HAVE_DECL_STRDUP''@|1|g' \
      -e 's|@''HAVE_STRNDUP''@|1|g' \
      -e 's|@''HAVE_DECL_STRNDUP''@|1|g' \
      -e 's|@''HAVE_DECL_STRNLEN''@|1|g' \
      -e 's|@''HAVE_STRPBRK''@|1|g' \
      -e 's|@''HAVE_STRSEP''@|1|g' \
      -e 's|@''HAVE_STRCASESTR''@|1|g' \
      -e 's|@''HAVE_DECL_STRTOK_R''@|1|g' \
      -e 's|@''HAVE_DECL_STRERROR''@|1|g' \
      -e 's|@''HAVE_DECL_STRSIGNAL''@|1|g' \
      -e 's|@''HAVE_STRVERSCMP''@|1|g' \
      -e 's|@''REPLACE_MEMMEM''@|0|g' \
      -e 's|@''REPLACE_STRCASESTR''@|0|g' \
      -e 's|@''REPLACE_STRDUP''@|0|g' \
      -e 's|@''REPLACE_STRSTR''@|1|g' \
      -e 's|@''REPLACE_STRERROR''@|0|g' \
      -e 's|@''REPLACE_STRSIGNAL''@|0|g' \
      -e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
      < ./string.in.h; \
} > string.h-t
mv string.h-t string.h
/bin/mkdir -p sys
rm -f sys/stat.h-t sys/stat.h
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
  sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
      -e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
      -e 's|@''NEXT_SYS_STAT_H''@|<sys/stat.h>|g' \
      -e 's|@''GNULIB_LCHMOD''@|0|g' \
      -e 's|@''GNULIB_LSTAT''@|1|g' \
      -e 's|@''HAVE_LCHMOD''@|1|g' \
      -e 's|@''HAVE_LSTAT''@|1|g' \
      -e 's|@''REPLACE_LSTAT''@|0|g' \
      -e 's|@''REPLACE_MKDIR''@|0|g' \
      -e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
      < ./sys_stat.in.h; \
} > sys/stat.h-t
mv sys/stat.h-t sys/stat.h
/bin/mkdir -p sys
rm -f sys/wait.h-t sys/wait.h
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
  sed -e 's|@''INCLUDE_NEXT''@|include_next|g' \
      -e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
      -e 's|@''NEXT_SYS_WAIT_H''@|<sys/wait.h>|g' \
      -e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
      < ./sys_wait.in.h; \
} > sys/wait.h-t
mv sys/wait.h-t sys/wait.h
rm -f unistd.h-t unistd.h
{ echo '/* DO NOT EDIT! GENERATED AUTOMATICALLY! */'; \
  sed -e 's|@''HAVE_UNISTD_H''@|1|g' \
      -e 's|@''INCLUDE_NEXT''@|include_next|g' \
      -e 's|@''PRAGMA_SYSTEM_HEADER''@|#pragma GCC system_header|g' \
      -e 's|@''NEXT_UNISTD_H''@|<unistd.h>|g' \
      -e 's|@''GNULIB_CHOWN''@|0|g' \
      -e 's|@''GNULIB_CLOSE''@|0|g' \
      -e 's|@''GNULIB_DUP2''@|0|g' \
      -e 's|@''GNULIB_ENVIRON''@|1|g' \
      -e 's|@''GNULIB_EUIDACCESS''@|0|g' \
      -e 's|@''GNULIB_FCHDIR''@|0|g' \
      -e 's|@''GNULIB_FSYNC''@|0|g' \
      -e 's|@''GNULIB_FTRUNCATE''@|0|g' \
      -e 's|@''GNULIB_GETCWD''@|0|g' \
      -e 's|@''GNULIB_GETDOMAINNAME''@|0|g' \
      -e 's|@''GNULIB_GETDTABLESIZE''@|1|g' \
      -e 's|@''GNULIB_GETHOSTNAME''@|0|g' \
      -e 's|@''GNULIB_GETLOGIN_R''@|0|g' \
      -e 's|@''GNULIB_GETPAGESIZE''@|0|g' \
      -e 's|@''GNULIB_GETUSERSHELL''@|0|g' \
      -e 's|@''GNULIB_LCHOWN''@|0|g' \
      -e 's|@''GNULIB_LINK''@|0|g' \
      -e 's|@''GNULIB_LSEEK''@|1|g' \
      -e 's|@''GNULIB_READLINK''@|0|g' \
      -e 's|@''GNULIB_SLEEP''@|0|g' \
      -e 's|@''GNULIB_UNISTD_H_SIGPIPE''@|0|g' \
      -e 's|@''GNULIB_WRITE''@|0|g' \
      -e 's|@''HAVE_DUP2''@|1|g' \
      -e 's|@''HAVE_EUIDACCESS''@|1|g' \
      -e 's|@''HAVE_FSYNC''@|1|g' \
      -e 's|@''HAVE_FTRUNCATE''@|1|g' \
      -e 's|@''HAVE_GETDOMAINNAME''@|1|g' \
      -e 's|@''HAVE_GETDTABLESIZE''@|1|g' \
      -e 's|@''HAVE_GETHOSTNAME''@|1|g' \
      -e 's|@''HAVE_GETPAGESIZE''@|1|g' \
      -e 's|@''HAVE_GETUSERSHELL''@|1|g' \
      -e 's|@''HAVE_LINK''@|1|g' \
      -e 's|@''HAVE_READLINK''@|1|g' \
      -e 's|@''HAVE_SLEEP''@|1|g' \
      -e 's|@''HAVE_DECL_ENVIRON''@|1|g' \
      -e 's|@''HAVE_DECL_GETLOGIN_R''@|1|g' \
      -e 's|@''HAVE_OS_H''@|0|g' \
      -e 's|@''HAVE_SYS_PARAM_H''@|0|g' \
      -e 's|@''REPLACE_CHOWN''@|0|g' \
      -e 's|@''REPLACE_CLOSE''@|0|g' \
      -e 's|@''REPLACE_FCHDIR''@|0|g' \
      -e 's|@''REPLACE_GETCWD''@|0|g' \
      -e 's|@''REPLACE_GETPAGESIZE''@|0|g' \
      -e 's|@''REPLACE_LCHOWN''@|0|g' \
      -e 's|@''REPLACE_LSEEK''@|0|g' \
      -e 's|@''REPLACE_WRITE''@|0|g' \
      -e 's|@''UNISTD_H_HAVE_WINSOCK2_H''@|0|g' \
      -e '/definition of GL_LINK_WARNING/r ../build-aux/link-warning.h' \
      < ./unistd.in.h; \
} > unistd.h-t
mv unistd.h-t unistd.h
make  all-recursive
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
make[4]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
 CC  gl_avltree_oset.o
 CC  c-ctype.o
 CC  c-stack.o
 CC  clean-temp.o
 CC  execute.o
 CC  fatal-signal.o
 CC  fpurge.o
 CC  freadahead.o
 CC  freading.o
 CC  gl_linkedhash_list.o
 CC  gl_list.o
 CC  localcharset.o
 CC  glthread/lock.o
 CC  malloca.o
 CC  memchr2.o
 CC  gl_oset.o
 CC  pipe.o
 CC  printf-frexp.o
 CC  printf-frexpl.o
 CC  progname.o
 CC  glthread/threadlib.o
 CC  glthread/tls.o
 CC  tmpdir.o
 CC  verror.o
 CC  version-etc.o
 CC  version-etc-fsf.o
 CC  wait-process.o
 CC  xalloc-die.o
 CC  xmalloca.o
 CC  xprintf.o
 CC  xstrndup.o
 CC  xvasprintf.o
 CC  xasprintf.o
 CC  asnprintf.o
 CC  asprintf.o
 CC  basename.o
 CC  cloexec.o
 CC  close-stream.o
 CC  closein.o
 CC  closeout.o
 CC  dirname.o
 CC  dup-safer.o
 CC  exitfail.o
 CC  fd-safer.o
 CC  fflush.o
 CC  filenamecat.o
 CC  fopen-safer.o
 CC  fseeko.o
 CC  isnanl.o
 CC  mkstemp-safer.o
 CC  pipe-safer.o
 CC  printf-args.o
 CC  printf-parse.o
 CC  quotearg.o
 CC  regex.o
 CC  stripslash.o
 CC  strstr.o
 CC  strtod.o
 CC  tempname.o
 CC  vasnprintf.o
 CC  vasprintf.o
 CC  xmalloc.o
 AR  libm4.a
rm -f t-charset.alias charset.alias
/bin/sh ./config.charset 'x86_64-unknown-linux-gnu' > t-charset.alias
mv t-charset.alias charset.alias
rm -f t-ref-add.sed ref-add.sed
sed -e '/^#/d' -e 's/@''PACKAGE''@/m4/g' ref-add.sin > t-ref-add.sed
mv t-ref-add.sed ref-add.sed
rm -f t-ref-del.sed ref-del.sed
sed -e '/^#/d' -e 's/@''PACKAGE''@/m4/g' ref-del.sin > t-ref-del.sed
mv t-ref-del.sed ref-del.sed
make[4]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
Making all in src
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/src'
 CC  m4.o
 CC  builtin.o
 CC  debug.o
 CC  eval.o
 CC  format.o
 CC  freeze.o
 CC  input.o
 CC  macro.o
 CC  output.o
 CC  path.o
 CC  symtab.o
 CCLD  m4
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/src'
Making all in doc
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/doc'
make[2]: Nothing to be done for `all'.
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/doc'
Making all in checks
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/checks'
make[2]: Nothing to be done for `all'.
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/checks'
Making all in tests
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
cp ./test-posix_spawn1.in.sh test-posix_spawn1.sh-t
mv test-posix_spawn1.sh-t test-posix_spawn1.sh
cp ./test-posix_spawn2.in.sh test-posix_spawn2.sh-t
mv test-posix_spawn2.sh-t test-posix_spawn2.sh
make  all-recursive
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make[4]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make[4]: Nothing to be done for `all-am'.
make[4]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make[1]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13'
make install
make  install-recursive
make[1]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13'
Making install in .
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13'
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13'
make[3]: Nothing to be done for `install-exec-am'.
make[3]: Nothing to be done for `install-data-am'.
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13'
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13'
Making install in examples
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/examples'
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/examples'
make[3]: Nothing to be done for `install-exec-am'.
make[3]: Nothing to be done for `install-data-am'.
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/examples'
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/examples'
Making install in lib
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
make  install-recursive
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
make[4]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
make[5]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
if test yes = no; then \
  case 'linux-gnu' in \
    darwin[56]*) \
      need_charset_alias=true ;; \
    darwin* | cygwin* | mingw* | pw32* | cegcc*) \
      need_charset_alias=false ;; \
    *) \
      need_charset_alias=true ;; \
  esac ; \
else \
  need_charset_alias=false ; \
fi ; \
if $need_charset_alias; then \
  /bin/sh /tmp/OMPI-test-build/m4-1.4.13/build-aux/install-sh -d /tmp/OMPI-test-build/myopt/lib ; \
fi ; \
if test -f /tmp/OMPI-test-build/myopt/lib/charset.alias; then \
  sed -f ref-add.sed /tmp/OMPI-test-build/myopt/lib/charset.alias > /tmp/OMPI-test-build/myopt/lib/charset.tmp ; \
  /usr/bin/install -c -m 644 /tmp/OMPI-test-build/myopt/lib/charset.tmp /tmp/OMPI-test-build/myopt/lib/charset.alias ; \
  rm -f /tmp/OMPI-test-build/myopt/lib/charset.tmp ; \
else \
  if $need_charset_alias; then \
    sed -f ref-add.sed charset.alias > /tmp/OMPI-test-build/myopt/lib/charset.tmp ; \
    /usr/bin/install -c -m 644 /tmp/OMPI-test-build/myopt/lib/charset.tmp /tmp/OMPI-test-build/myopt/lib/charset.alias ; \
    rm -f /tmp/OMPI-test-build/myopt/lib/charset.tmp ; \
  fi ; \
fi
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
make[4]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/lib'
Making install in src
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/src'
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/src'
test -z "/tmp/OMPI-test-build/myopt/bin" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/bin"
  /usr/bin/install -c m4 '/tmp/OMPI-test-build/myopt/bin'
make[3]: Nothing to be done for `install-data-am'.
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/src'
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/src'
Making install in doc
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/doc'
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/doc'
make[3]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/info" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/info"
 /usr/bin/install -c -m 644 ./m4.info ./m4.info-1 ./m4.info-2 '/tmp/OMPI-test-build/myopt/share/info'
 install-info --info-dir='/tmp/OMPI-test-build/myopt/share/info' '/tmp/OMPI-test-build/myopt/share/info/m4.info'
test -z "/tmp/OMPI-test-build/myopt/share/man/man1" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/man/man1"
 /usr/bin/install -c -m 644 ./m4.1 '/tmp/OMPI-test-build/myopt/share/man/man1'
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/doc'
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/doc'
Making install in checks
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/checks'
make[2]: Nothing to be done for `install'.
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/checks'
Making install in tests
make[2]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make  install-recursive
make[3]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make[4]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make[5]: Entering directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make[4]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make[3]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make[2]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13/tests'
make[1]: Leaving directory `/tmp/OMPI-test-build/m4-1.4.13'
popd
/tmp/OMPI-test-build 
end
bunzip2 autoconf-2.63.tar.bz2
tar xf autoconf-2.63.tar
pushd autoconf-2.63
/tmp/OMPI-test-build/autoconf-2.63 /tmp/OMPI-test-build 
./configure --prefix=/tmp/OMPI-test-build/myopt
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking whether /bin/sh -n is known to work... yes
checking for expr... /usr/bin/expr
checking for GNU M4 that supports accurate traces... /tmp/OMPI-test-build/myopt/bin/m4
checking how m4 supports trace files... --debugfile
checking for perl... /usr/bin/perl
checking for emacs... emacs
checking whether emacs is sufficiently recent... yes
checking for emacs... emacs
checking where .elc files should go... ${datarootdir}/emacs/site-lisp
checking for grep that handles long lines and -e... /usr/bin/grep
checking for egrep... /usr/bin/grep -E
checking for a sed that does not truncate output... /usr/bin/sed
checking whether make is case sensitive... yes
configure: creating ./config.status
config.status: creating tests/Makefile
config.status: creating tests/atlocal
config.status: creating man/Makefile
config.status: creating lib/emacs/Makefile
config.status: creating Makefile
config.status: creating doc/Makefile
config.status: creating lib/Makefile
config.status: creating lib/Autom4te/Makefile
config.status: creating lib/autoscan/Makefile
config.status: creating lib/m4sugar/Makefile
config.status: creating lib/autoconf/Makefile
config.status: creating lib/autotest/Makefile
config.status: creating bin/Makefile
config.status: executing tests/atconfig commands
make
make  all-recursive
make[1]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63'
Making all in bin
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/bin'
rm -f autom4te autom4te.tmp
srcdir=''; \
  test -f ./autom4te.in || srcdir=./; \
  sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from autom4te.in; do not edit by hand.|g' ${srcdir}autom4te.in >autom4te.tmp
chmod +x autom4te.tmp
chmod a-w autom4te.tmp
mv autom4te.tmp autom4te
cd ../lib && make  autom4te.cfg
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
rm -f autom4te.cfg autom4te.tmp
sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@AWK[@]|gawk|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' ./autom4te.in >autom4te.tmp
chmod a-w autom4te.tmp
mv autom4te.tmp autom4te.cfg
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
cd ../lib/m4sugar && make  version.m4
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
:;{ \
  echo '# This file is part of -*- Autoconf -*-.' && \
  echo '# Version of Autoconf.' && \
  echo '# Copyright (C) 1999, 2000, 2001, 2002, 2006, 2007' && \
  echo '# Free Software Foundation, Inc.' && \
  echo  &&\
  echo 'm4_define([m4_PACKAGE_NAME],      [GNU Autoconf])' && \
  echo 'm4_define([m4_PACKAGE_TARNAME],   [autoconf])' && \
  echo 'm4_define([m4_PACKAGE_VERSION],   [2.63])' && \
  echo 'm4_define([m4_PACKAGE_STRING],    [GNU Autoconf 2.63])' && \
  echo 'm4_define([m4_PACKAGE_BUGREPORT], [bug-autoconf@gnu.org])'; \
} > version.m4-t
mv version.m4-t version.m4
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
autom4te_perllibdir='..'/lib AUTOM4TE_CFG='../lib/autom4te.cfg'         ../bin/autom4te -B '..'/lib -B '..'/lib         --language M4sh --cache '' --melt ./autoconf.as -o autoconf.in
rm -f autoconf autoconf.tmp
srcdir=''; \
  test -f ./autoconf.in || srcdir=./; \
  sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from autoconf.in; do not edit by hand.|g' ${srcdir}autoconf.in >autoconf.tmp
chmod +x autoconf.tmp
chmod a-w autoconf.tmp
mv autoconf.tmp autoconf
rm -f autoheader autoheader.tmp
srcdir=''; \
  test -f ./autoheader.in || srcdir=./; \
  sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from autoheader.in; do not edit by hand.|g' ${srcdir}autoheader.in >autoheader.tmp
chmod +x autoheader.tmp
chmod a-w autoheader.tmp
mv autoheader.tmp autoheader
rm -f autoreconf autoreconf.tmp
srcdir=''; \
  test -f ./autoreconf.in || srcdir=./; \
  sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from autoreconf.in; do not edit by hand.|g' ${srcdir}autoreconf.in >autoreconf.tmp
chmod +x autoreconf.tmp
chmod a-w autoreconf.tmp
mv autoreconf.tmp autoreconf
rm -f ifnames ifnames.tmp
srcdir=''; \
  test -f ./ifnames.in || srcdir=./; \
  sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from ifnames.in; do not edit by hand.|g' ${srcdir}ifnames.in >ifnames.tmp
chmod +x ifnames.tmp
chmod a-w ifnames.tmp
mv ifnames.tmp ifnames
rm -f autoscan autoscan.tmp
srcdir=''; \
  test -f ./autoscan.in || srcdir=./; \
  sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from autoscan.in; do not edit by hand.|g' ${srcdir}autoscan.in >autoscan.tmp
chmod +x autoscan.tmp
chmod a-w autoscan.tmp
mv autoscan.tmp autoscan
rm -f autoupdate autoupdate.tmp
srcdir=''; \
  test -f ./autoupdate.in || srcdir=./; \
  sed -e 's|@SHELL[@]|/bin/sh|g' -e 's|@PERL[@]|/usr/bin/perl|g' -e 's|@bindir[@]|/tmp/OMPI-test-build/myopt/bin|g' -e 's|@datadir[@]|/tmp/OMPI-test-build/myopt/share/autoconf|g' -e 's|@prefix[@]|/tmp/OMPI-test-build/myopt|g' -e 's|@autoconf-name[@]|'`echo autoconf | sed 's,x,x,'`'|g' -e 's|@autoheader-name[@]|'`echo autoheader | sed 's,x,x,'`'|g' -e 's|@autom4te-name[@]|'`echo autom4te | sed 's,x,x,'`'|g' -e 's|@M4[@]|/tmp/OMPI-test-build/myopt/bin/m4|g' -e 's|@M4_DEBUGFILE[@]|--debugfile|g' -e 's|@AWK[@]|gawk|g' -e 's|@RELEASE_YEAR[@]|'`sed 's/^\([0-9][0-9][0-9][0-9]\).*/\1/;q' ../ChangeLog`'|g' -e 's|@VERSION[@]|2.63|g' -e 's|@PACKAGE_NAME[@]|GNU Autoconf|g' -e 's|@configure_input[@]|Generated from autoupdate.in; do not edit by hand.|g' ${srcdir}autoupdate.in >autoupdate.tmp
chmod +x autoupdate.tmp
chmod a-w autoupdate.tmp
mv autoupdate.tmp autoupdate
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/bin'
Making all in .
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63'
make[2]: Nothing to be done for `all-am'.
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63'
Making all in lib
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
Making all in Autom4te
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/Autom4te'
make[3]: Nothing to be done for `all'.
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/Autom4te'
Making all in m4sugar
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
autom4te_perllibdir='../..'/lib AUTOM4TE_CFG='../../lib/autom4te.cfg'         ../../bin/autom4te -B '../..'/lib -B '../..'/lib        				\
	--language=m4sugar			\
	--freeze			\
	--output=m4sugar.m4f
autom4te_perllibdir='../..'/lib AUTOM4TE_CFG='../../lib/autom4te.cfg'         ../../bin/autom4te -B '../..'/lib -B '../..'/lib        				\
	--language=m4sh			\
	--freeze			\
	--output=m4sh.m4f
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
Making all in autoconf
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoconf'
autom4te_perllibdir='../..'/lib AUTOM4TE_CFG='../../lib/autom4te.cfg'         ../../bin/autom4te -B '../..'/lib -B '../..'/lib        				\
	--language=autoconf			\
	--freeze			\
	--output=autoconf.m4f
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoconf'
Making all in autotest
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autotest'
autom4te_perllibdir='../..'/lib AUTOM4TE_CFG='../../lib/autom4te.cfg'         ../../bin/autom4te -B '../..'/lib -B '../..'/lib        				\
	--language=autotest			\
	--freeze			\
	--output=autotest.m4f
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autotest'
Making all in autoscan
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoscan'
echo '# Automatically Generated: do not edit this file' >autoscan.list
sed '/^[#]/!q' ./autoscan.pre                  >>autoscan.list
( \
  sed -n '/^[^#]/p' ./autoscan.pre; \
  autom4te_perllibdir='../..'/lib AUTOM4TE_CFG='../../lib/autom4te.cfg'         ../../bin/autom4te -B '../..'/lib -B '../..'/lib         --cache '' -M -l autoconf -t'AN_OUTPUT:$1: $2		$3' \
) | LC_ALL=C sort                                      >>autoscan.list
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoscan'
Making all in emacs
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/emacs'
WARNING: Warnings can be ignored. :-)
if test "emacs" != no; then \
  set x; \
  list='autoconf-mode.el autotest-mode.el'; for p in $list; do \
    if test -f "$p"; then d=; else d="./"; fi; \
    set x "$@" "$d$p"; shift; \
  done; \
  shift; \
  EMACS="emacs" /bin/sh ../../build-aux/elisp-comp "$@" || exit 1; \
else : ; fi
While compiling autoconf-mode in file /tmp/OMPI-test-build/autoconf-2.63/lib/emacs/elc.4876/autoconf-mode.el:
  ** assignment to free variable add-log-current-defun-function
Wrote /tmp/OMPI-test-build/autoconf-2.63/lib/emacs/elc.4876/autoconf-mode.elc
While compiling autotest-mode in file /tmp/OMPI-test-build/autoconf-2.63/lib/emacs/elc.4876/autotest-mode.el:
  ** assignment to free variable add-log-current-defun-function
Wrote /tmp/OMPI-test-build/autoconf-2.63/lib/emacs/elc.4876/autotest-mode.elc
Done
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/emacs'
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
make[3]: Nothing to be done for `all-am'.
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
Making all in doc
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/doc'
make[2]: Nothing to be done for `all'.
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/doc'
Making all in tests
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/tests'
autom4te_perllibdir='..'/lib AUTOM4TE_CFG='../lib/autom4te.cfg'         ../bin/autom4te -B '..'/lib -B '..'/lib         --language=M4sh ./wrapper.as -o wrapper.in
rm -f autoconf autoconf.tmp
input=wrapper.in; \
sed -e 's|@wrap_program[@]|autoconf|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e "s|@configure_input[@]|Generated from $input.|g" wrapper.in >autoconf.tmp
chmod +x autoconf.tmp
chmod a-w autoconf.tmp
mv -f autoconf.tmp autoconf
rm -f autoheader autoheader.tmp
input=wrapper.in; \
sed -e 's|@wrap_program[@]|autoheader|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e "s|@configure_input[@]|Generated from $input.|g" wrapper.in >autoheader.tmp
chmod +x autoheader.tmp
chmod a-w autoheader.tmp
mv -f autoheader.tmp autoheader
rm -f autom4te autom4te.tmp
input=wrapper.in; \
sed -e 's|@wrap_program[@]|autom4te|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e "s|@configure_input[@]|Generated from $input.|g" wrapper.in >autom4te.tmp
chmod +x autom4te.tmp
chmod a-w autom4te.tmp
mv -f autom4te.tmp autom4te
rm -f autoreconf autoreconf.tmp
input=wrapper.in; \
sed -e 's|@wrap_program[@]|autoreconf|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e "s|@configure_input[@]|Generated from $input.|g" wrapper.in >autoreconf.tmp
chmod +x autoreconf.tmp
chmod a-w autoreconf.tmp
mv -f autoreconf.tmp autoreconf
rm -f autoscan autoscan.tmp
input=wrapper.in; \
sed -e 's|@wrap_program[@]|autoscan|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e "s|@configure_input[@]|Generated from $input.|g" wrapper.in >autoscan.tmp
chmod +x autoscan.tmp
chmod a-w autoscan.tmp
mv -f autoscan.tmp autoscan
rm -f autoupdate autoupdate.tmp
input=wrapper.in; \
sed -e 's|@wrap_program[@]|autoupdate|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e "s|@configure_input[@]|Generated from $input.|g" wrapper.in >autoupdate.tmp
chmod +x autoupdate.tmp
chmod a-w autoupdate.tmp
mv -f autoupdate.tmp autoupdate
rm -f ifnames ifnames.tmp
input=wrapper.in; \
sed -e 's|@wrap_program[@]|ifnames|g' -e 's|@abs_top_srcdir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e 's|@abs_top_builddir[@]|/tmp/OMPI-test-build/autoconf-2.63|g' -e "s|@configure_input[@]|Generated from $input.|g" wrapper.in >ifnames.tmp
chmod +x ifnames.tmp
chmod a-w ifnames.tmp
mv -f ifnames.tmp ifnames
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/tests'
Making all in man
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/man'
make[2]: Nothing to be done for `all'.
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/man'
make[1]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63'
make install
make  install-recursive
make[1]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63'
Making install in bin
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/bin'
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/bin'
test -z "/tmp/OMPI-test-build/myopt/bin" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/bin"
 /usr/bin/install -c 'autom4te' '/tmp/OMPI-test-build/myopt/bin/autom4te'
 /usr/bin/install -c 'autoconf' '/tmp/OMPI-test-build/myopt/bin/autoconf'
 /usr/bin/install -c 'autoheader' '/tmp/OMPI-test-build/myopt/bin/autoheader'
 /usr/bin/install -c 'autoreconf' '/tmp/OMPI-test-build/myopt/bin/autoreconf'
 /usr/bin/install -c 'ifnames' '/tmp/OMPI-test-build/myopt/bin/ifnames'
 /usr/bin/install -c 'autoscan' '/tmp/OMPI-test-build/myopt/bin/autoscan'
 /usr/bin/install -c 'autoupdate' '/tmp/OMPI-test-build/myopt/bin/autoupdate'
make[3]: Nothing to be done for `install-data-am'.
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/bin'
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/bin'
Making install in .
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63'
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63'
make[3]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/autoconf" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/autoconf"
 /usr/bin/install -c -m 644 './INSTALL' '/tmp/OMPI-test-build/myopt/share/autoconf/INSTALL'
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63'
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63'
Making install in lib
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
Making install in Autom4te
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/Autom4te'
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/Autom4te'
make[4]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te"
 /usr/bin/install -c -m 644 'C4che.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/C4che.pm'
 /usr/bin/install -c -m 644 'ChannelDefs.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/ChannelDefs.pm'
 /usr/bin/install -c -m 644 'Channels.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/Channels.pm'
 /usr/bin/install -c -m 644 'Configure_ac.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/Configure_ac.pm'
 /usr/bin/install -c -m 644 'FileUtils.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/FileUtils.pm'
 /usr/bin/install -c -m 644 'General.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/General.pm'
 /usr/bin/install -c -m 644 'Request.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/Request.pm'
 /usr/bin/install -c -m 644 'Struct.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/Struct.pm'
 /usr/bin/install -c -m 644 'XFile.pm' '/tmp/OMPI-test-build/myopt/share/autoconf/Autom4te/XFile.pm'
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/Autom4te'
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/Autom4te'
Making install in m4sugar
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
make[4]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar"
 /usr/bin/install -c -m 644 'm4sugar.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar/m4sugar.m4'
 /usr/bin/install -c -m 644 'foreach.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar/foreach.m4'
 /usr/bin/install -c -m 644 'm4sh.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar/m4sh.m4'
test -z "/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar"
 /usr/bin/install -c -m 644 'version.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar/version.m4'
 /usr/bin/install -c -m 644 'm4sugar.m4f' '/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar/m4sugar.m4f'
 /usr/bin/install -c -m 644 'm4sh.m4f' '/tmp/OMPI-test-build/myopt/share/autoconf/m4sugar/m4sh.m4f'
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/m4sugar'
Making install in autoconf
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoconf'
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoconf'
make[4]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/autoconf/autoconf" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/autoconf/autoconf"
 /usr/bin/install -c -m 644 'autoconf.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/autoconf.m4'
 /usr/bin/install -c -m 644 'general.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/general.m4'
 /usr/bin/install -c -m 644 'status.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/status.m4'
 /usr/bin/install -c -m 644 'oldnames.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/oldnames.m4'
 /usr/bin/install -c -m 644 'specific.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/specific.m4'
 /usr/bin/install -c -m 644 'autoheader.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/autoheader.m4'
 /usr/bin/install -c -m 644 'autoupdate.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/autoupdate.m4'
 /usr/bin/install -c -m 644 'autotest.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/autotest.m4'
 /usr/bin/install -c -m 644 'autoscan.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/autoscan.m4'
 /usr/bin/install -c -m 644 'lang.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/lang.m4'
 /usr/bin/install -c -m 644 'c.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/c.m4'
 /usr/bin/install -c -m 644 'erlang.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/erlang.m4'
 /usr/bin/install -c -m 644 'fortran.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/fortran.m4'
 /usr/bin/install -c -m 644 'functions.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/functions.m4'
 /usr/bin/install -c -m 644 'headers.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/headers.m4'
 /usr/bin/install -c -m 644 'types.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/types.m4'
 /usr/bin/install -c -m 644 'libs.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/libs.m4'
 /usr/bin/install -c -m 644 'programs.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/programs.m4'
test -z "/tmp/OMPI-test-build/myopt/share/autoconf/autoconf" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/autoconf/autoconf"
 /usr/bin/install -c -m 644 'autoconf.m4f' '/tmp/OMPI-test-build/myopt/share/autoconf/autoconf/autoconf.m4f'
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoconf'
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoconf'
Making install in autotest
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autotest'
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autotest'
make[4]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/autoconf/autotest" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/autoconf/autotest"
 /usr/bin/install -c -m 644 'autotest.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autotest/autotest.m4'
 /usr/bin/install -c -m 644 'general.m4' '/tmp/OMPI-test-build/myopt/share/autoconf/autotest/general.m4'
test -z "/tmp/OMPI-test-build/myopt/share/autoconf/autotest" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/autoconf/autotest"
 /usr/bin/install -c -m 644 'autotest.m4f' '/tmp/OMPI-test-build/myopt/share/autoconf/autotest/autotest.m4f'
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autotest'
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autotest'
Making install in autoscan
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoscan'
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoscan'
make[4]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/autoconf/autoscan" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/autoconf/autoscan"
 /usr/bin/install -c -m 644 'autoscan.list' '/tmp/OMPI-test-build/myopt/share/autoconf/autoscan/autoscan.list'
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoscan'
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/autoscan'
Making install in emacs
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/emacs'
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib/emacs'
make[4]: Nothing to be done for `install-exec-am'.
 /usr/bin/install -c -m 644 'autoconf-mode.el' '/tmp/OMPI-test-build/myopt/share/emacs/site-lisp/autoconf-mode.el'
 /usr/bin/install -c -m 644 'autoconf-mode.elc' '/tmp/OMPI-test-build/myopt/share/emacs/site-lisp/autoconf-mode.elc'
 /usr/bin/install -c -m 644 'autotest-mode.el' '/tmp/OMPI-test-build/myopt/share/emacs/site-lisp/autotest-mode.el'
 /usr/bin/install -c -m 644 'autotest-mode.elc' '/tmp/OMPI-test-build/myopt/share/emacs/site-lisp/autotest-mode.elc'
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/emacs'
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib/emacs'
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
make[4]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
make[4]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/autoconf" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/autoconf"
 /usr/bin/install -c -m 644 'autom4te.cfg' '/tmp/OMPI-test-build/myopt/share/autoconf/autom4te.cfg'
make[4]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/lib'
Making install in doc
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/doc'
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/doc'
make[3]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/info" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/info"
 /usr/bin/install -c -m 644 './autoconf.info' '/tmp/OMPI-test-build/myopt/share/info/autoconf.info'
 /usr/bin/install -c -m 644 './standards.info' '/tmp/OMPI-test-build/myopt/share/info/standards.info'
 install-info --info-dir='/tmp/OMPI-test-build/myopt/share/info' '/tmp/OMPI-test-build/myopt/share/info/autoconf.info'
 install-info --info-dir='/tmp/OMPI-test-build/myopt/share/info' '/tmp/OMPI-test-build/myopt/share/info/standards.info'
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/doc'
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/doc'
Making install in tests
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/tests'
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/tests'
make[3]: Nothing to be done for `install-exec-am'.
make[3]: Nothing to be done for `install-data-am'.
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/tests'
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/tests'
Making install in man
make[2]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/man'
make[3]: Entering directory `/tmp/OMPI-test-build/autoconf-2.63/man'
make[3]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/man/man1" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/man/man1"
 /usr/bin/install -c -m 644 '././autoconf.1' '/tmp/OMPI-test-build/myopt/share/man/man1/autoconf.1'
 /usr/bin/install -c -m 644 '././autoheader.1' '/tmp/OMPI-test-build/myopt/share/man/man1/autoheader.1'
 /usr/bin/install -c -m 644 '././autom4te.1' '/tmp/OMPI-test-build/myopt/share/man/man1/autom4te.1'
 /usr/bin/install -c -m 644 '././autoreconf.1' '/tmp/OMPI-test-build/myopt/share/man/man1/autoreconf.1'
 /usr/bin/install -c -m 644 '././autoscan.1' '/tmp/OMPI-test-build/myopt/share/man/man1/autoscan.1'
 /usr/bin/install -c -m 644 '././autoupdate.1' '/tmp/OMPI-test-build/myopt/share/man/man1/autoupdate.1'
 /usr/bin/install -c -m 644 '././ifnames.1' '/tmp/OMPI-test-build/myopt/share/man/man1/ifnames.1'
 /usr/bin/install -c -m 644 '././config.guess.1' '/tmp/OMPI-test-build/myopt/share/man/man1/config.guess.1'
 /usr/bin/install -c -m 644 '././config.sub.1' '/tmp/OMPI-test-build/myopt/share/man/man1/config.sub.1'
make[3]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/man'
make[2]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63/man'
make[1]: Leaving directory `/tmp/OMPI-test-build/autoconf-2.63'
popd
/tmp/OMPI-test-build 
end
bunzip2 automake-1.10.2.tar.bz2
tar xf automake-1.10.2.tar
pushd automake-1.10.2
/tmp/OMPI-test-build/automake-1.10.2 /tmp/OMPI-test-build 
./configure --prefix=/tmp/OMPI-test-build/myopt
checking build system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking for perl... /usr/bin/perl
checking for tex... no
checking whether autoconf is installed... yes
checking whether autoconf works... yes
checking whether autoconf is recent enough... yes
checking whether ln works... yes
checking for grep that handles long lines and -e... /usr/bin/grep
checking for egrep... /usr/bin/grep -E
checking for fgrep... /usr/bin/grep -F
configure: creating ./config.status
config.status: creating Makefile
config.status: creating doc/Makefile
config.status: creating lib/Automake/Makefile
config.status: creating lib/Automake/tests/Makefile
config.status: creating lib/Makefile
config.status: creating lib/am/Makefile
config.status: creating m4/Makefile
config.status: creating tests/Makefile
config.status: creating tests/defs
config.status: creating tests/aclocal-1.10
config.status: creating tests/automake-1.10
make
Making all in lib
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
Making all in Automake
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
Making all in tests
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake/tests'
make[3]: Nothing to be done for `all'.
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake/tests'
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
rm -f Config.tmp Config.pm
in=`echo Config.pm | sed 's/\.[^.]*$//'`; sed -e 's,[@]APIVERSION[@],1.10,g' -e 's,[@]PACKAGE[@],automake,g' -e 's,[@]PERL[@],/usr/bin/perl,g' -e 's,[@]SHELL[@],/bin/sh,g' -e 's,[@]VERSION[@],1.10.2,g' -e "s,[@]configure_input[@],Generated from $in.in; do not edit by hand.,g" -e 's,[@]datadir[@],/tmp/OMPI-test-build/myopt/share,g' ./Config.in >Config.tmp
chmod +x Config.tmp
chmod a-w Config.tmp
mv -f Config.tmp Config.pm
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
Making all in am
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/am'
make[2]: Nothing to be done for `all'.
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/am'
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
make[2]: Nothing to be done for `all-am'.
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
Making all in .
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2'
rm -f automake automake.tmp
sed -e 's,[@]APIVERSION[@],1.10,g' -e 's,[@]PACKAGE[@],automake,g' -e 's,[@]PATH_SEPARATOR[@],:,g' -e 's,[@]PERL[@],/usr/bin/perl,g' -e 's,[@]SHELL[@],/bin/sh,g' -e 's,[@]VERSION[@],1.10.2,g' -e 's,[@]configure_input[@],Generated from automake.in; do not edit by hand.,g' -e 's,[@]datadir[@],/tmp/OMPI-test-build/myopt/share,g' ./automake.in >automake.tmp
chmod +x automake.tmp
chmod a-w automake.tmp
mv -f automake.tmp automake
rm -f aclocal aclocal.tmp
sed -e 's,[@]APIVERSION[@],1.10,g' -e 's,[@]PACKAGE[@],automake,g' -e 's,[@]PATH_SEPARATOR[@],:,g' -e 's,[@]PERL[@],/usr/bin/perl,g' -e 's,[@]SHELL[@],/bin/sh,g' -e 's,[@]VERSION[@],1.10.2,g' -e 's,[@]configure_input[@],Generated from aclocal.in; do not edit by hand.,g' -e 's,[@]datadir[@],/tmp/OMPI-test-build/myopt/share,g' ./aclocal.in >aclocal.tmp
chmod +x aclocal.tmp
chmod a-w aclocal.tmp
mv -f aclocal.tmp aclocal
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2'
Making all in doc
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/doc'
make[1]: Nothing to be done for `all'.
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/doc'
Making all in m4
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/m4'
make[1]: Nothing to be done for `all'.
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/m4'
Making all in tests
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/tests'
make[1]: Nothing to be done for `all'.
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/tests'
make install
Making install in lib
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
Making install in Automake
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
Making install in tests
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake/tests'
make[4]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake/tests'
make[4]: Nothing to be done for `install-exec-am'.
make[4]: Nothing to be done for `install-data-am'.
make[4]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake/tests'
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake/tests'
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
make[4]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
make[4]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake"
 /usr/bin/install -c -m 644 'ChannelDefs.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/ChannelDefs.pm'
 /usr/bin/install -c -m 644 'Channels.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Channels.pm'
 /usr/bin/install -c -m 644 'Condition.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Condition.pm'
 /usr/bin/install -c -m 644 'Configure_ac.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Configure_ac.pm'
 /usr/bin/install -c -m 644 'DisjConditions.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/DisjConditions.pm'
 /usr/bin/install -c -m 644 'FileUtils.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/FileUtils.pm'
 /usr/bin/install -c -m 644 'General.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/General.pm'
 /usr/bin/install -c -m 644 'Item.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Item.pm'
 /usr/bin/install -c -m 644 'ItemDef.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/ItemDef.pm'
 /usr/bin/install -c -m 644 'Location.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Location.pm'
 /usr/bin/install -c -m 644 'Options.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Options.pm'
 /usr/bin/install -c -m 644 'Rule.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Rule.pm'
 /usr/bin/install -c -m 644 'RuleDef.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/RuleDef.pm'
 /usr/bin/install -c -m 644 'Struct.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Struct.pm'
 /usr/bin/install -c -m 644 'Variable.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Variable.pm'
 /usr/bin/install -c -m 644 'VarDef.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/VarDef.pm'
 /usr/bin/install -c -m 644 'Version.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Version.pm'
 /usr/bin/install -c -m 644 'XFile.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/XFile.pm'
 /usr/bin/install -c -m 644 'Wrap.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Wrap.pm'
test -z "/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake"
 /usr/bin/install -c -m 644 'Config.pm' '/tmp/OMPI-test-build/myopt/share/automake-1.10/Automake/Config.pm'
make[4]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/Automake'
Making install in am
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/am'
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib/am'
make[3]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/automake-1.10/am" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/automake-1.10/am"
 /usr/bin/install -c -m 644 'ansi2knr.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/ansi2knr.am'
 /usr/bin/install -c -m 644 'check.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/check.am'
 /usr/bin/install -c -m 644 'clean-hdr.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/clean-hdr.am'
 /usr/bin/install -c -m 644 'clean.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/clean.am'
 /usr/bin/install -c -m 644 'compile.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/compile.am'
 /usr/bin/install -c -m 644 'configure.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/configure.am'
 /usr/bin/install -c -m 644 'data.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/data.am'
 /usr/bin/install -c -m 644 'dejagnu.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/dejagnu.am'
 /usr/bin/install -c -m 644 'depend.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/depend.am'
 /usr/bin/install -c -m 644 'depend2.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/depend2.am'
 /usr/bin/install -c -m 644 'distdir.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/distdir.am'
 /usr/bin/install -c -m 644 'footer.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/footer.am'
 /usr/bin/install -c -m 644 'header-vars.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/header-vars.am'
 /usr/bin/install -c -m 644 'header.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/header.am'
 /usr/bin/install -c -m 644 'install.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/install.am'
 /usr/bin/install -c -m 644 'inst-vars.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/inst-vars.am'
 /usr/bin/install -c -m 644 'java.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/java.am'
 /usr/bin/install -c -m 644 'lang-compile.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/lang-compile.am'
 /usr/bin/install -c -m 644 'lex.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/lex.am'
 /usr/bin/install -c -m 644 'library.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/library.am'
 /usr/bin/install -c -m 644 'libs.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/libs.am'
 /usr/bin/install -c -m 644 'libtool.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/libtool.am'
 /usr/bin/install -c -m 644 'lisp.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/lisp.am'
 /usr/bin/install -c -m 644 'ltlib.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/ltlib.am'
 /usr/bin/install -c -m 644 'ltlibrary.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/ltlibrary.am'
 /usr/bin/install -c -m 644 'mans-vars.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/mans-vars.am'
 /usr/bin/install -c -m 644 'mans.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/mans.am'
 /usr/bin/install -c -m 644 'multilib.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/multilib.am'
 /usr/bin/install -c -m 644 'program.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/program.am'
 /usr/bin/install -c -m 644 'progs.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/progs.am'
 /usr/bin/install -c -m 644 'python.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/python.am'
 /usr/bin/install -c -m 644 'remake-hdr.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/remake-hdr.am'
 /usr/bin/install -c -m 644 'scripts.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/scripts.am'
 /usr/bin/install -c -m 644 'subdirs.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/subdirs.am'
 /usr/bin/install -c -m 644 'tags.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/tags.am'
 /usr/bin/install -c -m 644 'texi-vers.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/texi-vers.am'
 /usr/bin/install -c -m 644 'texibuild.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/texibuild.am'
 /usr/bin/install -c -m 644 'texinfos.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/texinfos.am'
 /usr/bin/install -c -m 644 'yacc.am' '/tmp/OMPI-test-build/myopt/share/automake-1.10/am/yacc.am'
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/am'
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib/am'
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
make[3]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/automake-1.10" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/automake-1.10"
 /usr/bin/install -c -m 644 'COPYING' '/tmp/OMPI-test-build/myopt/share/automake-1.10/COPYING'
 /usr/bin/install -c -m 644 'INSTALL' '/tmp/OMPI-test-build/myopt/share/automake-1.10/INSTALL'
 /usr/bin/install -c -m 644 'texinfo.tex' '/tmp/OMPI-test-build/myopt/share/automake-1.10/texinfo.tex'
 /usr/bin/install -c -m 644 'ansi2knr.c' '/tmp/OMPI-test-build/myopt/share/automake-1.10/ansi2knr.c'
 /usr/bin/install -c -m 644 'ansi2knr.1' '/tmp/OMPI-test-build/myopt/share/automake-1.10/ansi2knr.1'
 /usr/bin/install -c -m 644 'config-ml.in' '/tmp/OMPI-test-build/myopt/share/automake-1.10/config-ml.in'
test -z "/tmp/OMPI-test-build/myopt/share/automake-1.10" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/automake-1.10"
 /usr/bin/install -c -m 644 'config.guess' '/tmp/OMPI-test-build/myopt/share/automake-1.10/config.guess'
 /usr/bin/install -c -m 644 'config.sub' '/tmp/OMPI-test-build/myopt/share/automake-1.10/config.sub'
 /usr/bin/install -c -m 644 'install-sh' '/tmp/OMPI-test-build/myopt/share/automake-1.10/install-sh'
 /usr/bin/install -c -m 644 'mdate-sh' '/tmp/OMPI-test-build/myopt/share/automake-1.10/mdate-sh'
 /usr/bin/install -c -m 644 'missing' '/tmp/OMPI-test-build/myopt/share/automake-1.10/missing'
 /usr/bin/install -c -m 644 'mkinstalldirs' '/tmp/OMPI-test-build/myopt/share/automake-1.10/mkinstalldirs'
 /usr/bin/install -c -m 644 'elisp-comp' '/tmp/OMPI-test-build/myopt/share/automake-1.10/elisp-comp'
 /usr/bin/install -c -m 644 'ylwrap' '/tmp/OMPI-test-build/myopt/share/automake-1.10/ylwrap'
 /usr/bin/install -c -m 644 'acinstall' '/tmp/OMPI-test-build/myopt/share/automake-1.10/acinstall'
 /usr/bin/install -c -m 644 'depcomp' '/tmp/OMPI-test-build/myopt/share/automake-1.10/depcomp'
 /usr/bin/install -c -m 644 'compile' '/tmp/OMPI-test-build/myopt/share/automake-1.10/compile'
 /usr/bin/install -c -m 644 'py-compile' '/tmp/OMPI-test-build/myopt/share/automake-1.10/py-compile'
 /usr/bin/install -c -m 644 'symlink-tree' '/tmp/OMPI-test-build/myopt/share/automake-1.10/symlink-tree'
make  install-data-hook
make[4]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/config.guess
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/config.sub
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/install-sh
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/mdate-sh
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/missing
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/mkinstalldirs
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/elisp-comp
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/ylwrap
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/acinstall
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/depcomp
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/compile
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/py-compile
 chmod +x /tmp/OMPI-test-build/myopt/share/automake-1.10/symlink-tree
make[4]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/lib'
Making install in .
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2'
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2'
test -z "/tmp/OMPI-test-build/myopt/bin" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/bin"
 /usr/bin/install -c 'automake' '/tmp/OMPI-test-build/myopt/bin/automake'
 /usr/bin/install -c 'aclocal' '/tmp/OMPI-test-build/myopt/bin/aclocal'
make  install-exec-hook
make[3]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2'
 ln /tmp/OMPI-test-build/myopt/bin/automake /tmp/OMPI-test-build/myopt/bin/automake-1.10
 ln /tmp/OMPI-test-build/myopt/bin/aclocal /tmp/OMPI-test-build/myopt/bin/aclocal-1.10
make[3]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2'
make[2]: Nothing to be done for `install-data-am'.
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2'
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2'
Making install in doc
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/doc'
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/doc'
make[2]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/doc/automake" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/doc/automake"
 /usr/bin/install -c -m 644 './amhello-1.0.tar.gz' '/tmp/OMPI-test-build/myopt/share/doc/automake/amhello-1.0.tar.gz'
test -z "/tmp/OMPI-test-build/myopt/share/info" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/info"
 /usr/bin/install -c -m 644 './automake.info' '/tmp/OMPI-test-build/myopt/share/info/automake.info'
 /usr/bin/install -c -m 644 './automake.info-1' '/tmp/OMPI-test-build/myopt/share/info/automake.info-1'
 /usr/bin/install -c -m 644 './automake.info-2' '/tmp/OMPI-test-build/myopt/share/info/automake.info-2'
 install-info --info-dir='/tmp/OMPI-test-build/myopt/share/info' '/tmp/OMPI-test-build/myopt/share/info/automake.info'
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/doc'
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/doc'
Making install in m4
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/m4'
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/m4'
make[2]: Nothing to be done for `install-exec-am'.
test -z "/tmp/OMPI-test-build/myopt/share/aclocal-1.10" || /bin/mkdir -p "/tmp/OMPI-test-build/myopt/share/aclocal-1.10"
 /usr/bin/install -c -m 644 '../m4/amversion.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/amversion.m4'
 /usr/bin/install -c -m 644 'as.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/as.m4'
 /usr/bin/install -c -m 644 'auxdir.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/auxdir.m4'
 /usr/bin/install -c -m 644 'ccstdc.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/ccstdc.m4'
 /usr/bin/install -c -m 644 'cond.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/cond.m4'
 /usr/bin/install -c -m 644 'depend.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/depend.m4'
 /usr/bin/install -c -m 644 'depout.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/depout.m4'
 /usr/bin/install -c -m 644 'dmalloc.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/dmalloc.m4'
 /usr/bin/install -c -m 644 'gcj.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/gcj.m4'
 /usr/bin/install -c -m 644 'header.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/header.m4'
 /usr/bin/install -c -m 644 'init.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/init.m4'
 /usr/bin/install -c -m 644 'install-sh.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/install-sh.m4'
 /usr/bin/install -c -m 644 'lead-dot.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/lead-dot.m4'
 /usr/bin/install -c -m 644 'lex.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/lex.m4'
 /usr/bin/install -c -m 644 'lispdir.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/lispdir.m4'
 /usr/bin/install -c -m 644 'maintainer.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/maintainer.m4'
 /usr/bin/install -c -m 644 'make.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/make.m4'
 /usr/bin/install -c -m 644 'minuso.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/minuso.m4'
 /usr/bin/install -c -m 644 'missing.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/missing.m4'
 /usr/bin/install -c -m 644 'mkdirp.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/mkdirp.m4'
 /usr/bin/install -c -m 644 'multi.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/multi.m4'
 /usr/bin/install -c -m 644 'obsol-gt.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/obsol-gt.m4'
 /usr/bin/install -c -m 644 'obsol-lt.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/obsol-lt.m4'
 /usr/bin/install -c -m 644 'obsolete.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/obsolete.m4'
 /usr/bin/install -c -m 644 'options.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/options.m4'
 /usr/bin/install -c -m 644 'protos.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/protos.m4'
 /usr/bin/install -c -m 644 'python.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/python.m4'
 /usr/bin/install -c -m 644 'regex.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/regex.m4'
 /usr/bin/install -c -m 644 'runlog.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/runlog.m4'
 /usr/bin/install -c -m 644 'sanity.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/sanity.m4'
 /usr/bin/install -c -m 644 'strip.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/strip.m4'
 /usr/bin/install -c -m 644 'substnot.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/substnot.m4'
 /usr/bin/install -c -m 644 'tar.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/tar.m4'
 /usr/bin/install -c -m 644 'upc.m4' '/tmp/OMPI-test-build/myopt/share/aclocal-1.10/upc.m4'
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/m4'
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/m4'
Making install in tests
make[1]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/tests'
make[2]: Entering directory `/tmp/OMPI-test-build/automake-1.10.2/tests'
make[2]: Nothing to be done for `install-exec-am'.
make[2]: Nothing to be done for `install-data-am'.
make[2]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/tests'
make[1]: Leaving directory `/tmp/OMPI-test-build/automake-1.10.2/tests'
popd
/tmp/OMPI-test-build 
end
bunzip2 openmpi-1.4a1r20984.tar.bz2
tar xf openmpi-1.4a1r20984.tar
pushd openmpi-1.4a1r20984
/tmp/OMPI-test-build/openmpi-1.4a1r20984 /tmp/OMPI-test-build 
./autogen.sh
[Checking] command line parameters
[Checking] prerequisites
Configuring projects: opal orte ompi
/tmp/OMPI-test-build/openmpi-1.4a1r20984

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/backtrace/darwin

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/backtrace/darwin
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/backtrace/execinfo

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/backtrace/execinfo
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/backtrace/none

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/backtrace/none
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/backtrace/printstack

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/backtrace/printstack
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/carto/auto_detect

--> Adding to top-level configure no-configure subdirs:
-->   opal/mca/carto/auto_detect
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/carto/file

--> Adding to top-level configure no-configure subdirs:
-->   opal/mca/carto/file
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/crs/blcr

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/crs/blcr
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/crs/none

--> Adding to top-level configure no-configure subdirs:
-->   opal/mca/crs/none
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/crs/self

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/crs/self
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/installdirs/config

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/installdirs/config
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/installdirs/env

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/installdirs/env
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/maffinity/first_use

--> Adding to top-level configure no-configure subdirs:
-->   opal/mca/maffinity/first_use
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/maffinity/libnuma

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/maffinity/libnuma
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/memchecker/valgrind

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/memchecker/valgrind
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/memory/malloc_solaris

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/memory/malloc_solaris
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/memory/ptmalloc2

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/memory/ptmalloc2
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/paffinity/darwin

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/paffinity/darwin
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/paffinity/linux

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/paffinity/linux
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/paffinity/posix

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/paffinity/posix
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/paffinity/solaris

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/paffinity/solaris
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/paffinity/windows

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/paffinity/windows
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/pstat/darwin

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/pstat/darwin
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/pstat/linux

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/pstat/linux
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/aix

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/timer/aix
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/altix

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/timer/altix
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/catamount

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/timer/catamount
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/darwin

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/timer/darwin
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/linux

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/timer/linux
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/solaris

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/timer/solaris
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/opal/mca/timer/windows

--> Adding to top-level configure m4-configure subdirs:
-->   opal/mca/timer/windows
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/errmgr/default

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/errmgr/default
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/alps

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ess/alps
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/cnos

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ess/cnos
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/env

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ess/env
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/hnp

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ess/hnp
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/lsf

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ess/lsf
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/portals_utcp

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ess/portals_utcp
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/singleton

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ess/singleton
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/slave

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ess/slave
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/slurm

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ess/slurm
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/slurmd

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ess/slurmd
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ess/tool

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ess/tool
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/filem/rsh

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/filem/rsh
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/grpcomm/bad

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/grpcomm/bad
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/grpcomm/basic

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/grpcomm/basic
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/grpcomm/cnos

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/grpcomm/cnos
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/grpcomm/hier

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/grpcomm/hier
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/iof/hnp

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/iof/hnp
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/iof/orted

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/iof/orted
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/iof/tool

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/iof/tool
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/notifier/ftb

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/notifier/ftb
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/notifier/smtp

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/notifier/smtp
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/notifier/syslog

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/notifier/syslog
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/notifier/twitter

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/notifier/twitter
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/odls/default

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/odls/default
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/oob/tcp

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/oob/tcp
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/alps

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/plm/alps
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/lsf

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/plm/lsf
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/rsh

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/plm/rsh
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/slurm

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/plm/slurm
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/slurmd

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/plm/slurmd
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/tm

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/plm/tm
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/plm/xgrid

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/plm/xgrid
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ras/alps

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ras/alps
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ras/gridengine

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ras/gridengine
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ras/loadleveler

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ras/loadleveler
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ras/lsf

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ras/lsf
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ras/slurm

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ras/slurm
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/ras/tm

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/ras/tm
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/rmaps/rank_file

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/rmaps/rank_file
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/rmaps/round_robin

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/rmaps/round_robin
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/rmaps/seq

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/rmaps/seq
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/rmaps/topo

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/rmaps/topo
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/rml/ftrm

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/rml/ftrm
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/rml/oob

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/rml/oob
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/routed/binomial

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/routed/binomial
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/routed/direct

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/routed/direct
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/routed/linear

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/routed/linear
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/routed/radix

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/routed/radix
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/routed/slave

--> Adding to top-level configure no-configure subdirs:
-->   orte/mca/routed/slave
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/orte/mca/snapc/full

--> Adding to top-level configure m4-configure subdirs:
-->   orte/mca/snapc/full
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/allocator/basic

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/allocator/basic
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/allocator/bucket

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/allocator/bucket
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/bml/r2

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/bml/r2
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/elan

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/btl/elan
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/gm

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/btl/gm
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/mx

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/btl/mx
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/ofud

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/btl/ofud
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/openib

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/btl/openib
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/portals

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/btl/portals
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/sctp

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/btl/sctp
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/self

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/btl/self
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/sm

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/btl/sm
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/tcp

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/btl/tcp
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/btl/udapl

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/btl/udapl
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/basic

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/coll/basic
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/hierarch

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/coll/hierarch
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/inter

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/coll/inter
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/self

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/coll/self
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/sm

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/coll/sm
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/sync

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/coll/sync
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/coll/tuned

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/coll/tuned
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/common/mx

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/common/mx
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/common/portals

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/common/portals
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/common/sm

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/common/sm
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/crcp/bkmrk

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/crcp/bkmrk
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/dpm/orte

--> Adding to top-level configure no-configure subdirs:
-->   ompi/mca/dpm/orte
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

*** Found configure.params and configure.m4
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/io/romio

--> Adding to top-level configure m4-configure subdirs:
-->   ompi/mca/io/romio
--> Adding to top-level configure AC_CONFIG_FILES list:
-->   Makefile

==> Found autogen.subdirs -- sub-traversing...

*** Running autogen.sh in romio
***   (started in /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/io/romio)
[Checking] command line parameters
[Checking] prerequisites

*** Found configure.(in|ac)
***   /tmp/OMPI-test-build/openmpi-1.4a1r20984/ompi/mca/io/romio/romio

*** Running GNU tools
[Running] libtoolize --automake --copy
[Running] aclocal
configure.in:2123: warning: macro `AM_PROG_LIBTOOL' not found in library
[Running] autoheader
[Running] autoconf
configure.in:2126: error: possibly undefined macro: AM_PROG_LIBTOOL
      If this token and others are legitimate, please use m4_pattern_allow.
      See the Autoconf documentation.

-------------------------------------------------------------------------
It seems that the execution of "autoconf" has failed.  See above for
the specific error message that caused it to abort.
-------------------------------------------------------------------------

Error running autogen.sh -l in romio.  Aborting.
popd
/tmp/OMPI-test-build 
ls
autoconf-2.63
autoconf-2.63.tar
automake-1.10.2
automake-1.10.2.tar
log
m4-1.4.13
m4-1.4.13.tar
myopt
openmpi-1.4a1r20984
openmpi-1.4a1r20984.tar
run
