<?
$subject_val = "[OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 18:04:48 2010" -->
<!-- isoreceived="20100826220448" -->
<!-- sent="Thu, 26 Aug 2010 15:04:34 -0700" -->
<!-- isosent="20100826220434" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;quot;make check&amp;quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C76E4F2.4080603_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 18:04:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8400.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8398.php">Paul H. Hargrove: "[OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8400.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8400.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am now looking at using IBM's XLC compilers for ILP32 builds on the 
<br>
same Linux/PPC64 platform for which I've reported some XLC/LP64 bugs.
<br>
<p>What I find now is that &quot;make check&quot; is failing with the loader unable 
<br>
to find libmpi.so.0.
<br>
This is with both 1.5rc5 and 1.4.3rc1.
<br>
This occurs with xlc, but things are just fine with gcc.
<br>
<p>$ uname -a
<br>
Linux login1 2.6.16.60-0.67.1-ppc64 #1 SMP Thu Aug 5 10:54:46 UTC 2010
<br>
ppc64 ppc64 ppc64 GNU/Linux
<br>
<p>$ which xlc
<br>
/soft/apps/ibmcmp-aug2010/vac/bg/9.0/bin/xlc
<br>
$ xlc -qversion
<br>
IBM XL C/C++ Advanced Edition for Blue Gene/P, V9.0
<br>
Version: 09.00.0000.0009
<br>
<p>$ gcc --version
<br>
gcc (GCC) 4.1.2 20070115 (SUSE Linux)
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>$ /lib64/libc.so.6
<br>
GNU C Library stable release version 2.4 (20090904), by Roland McGrath
<br>
et al.
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.
<br>
There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
<br>
PARTICULAR PURPOSE.
<br>
Configured for ppc64-suse-linux.
<br>
Compiled by GNU CC version 4.1.2 20070115 (SUSE Linux).
<br>
Compiled on a Linux 2.6.16 system on 2009-09-04.
<br>
Available extensions:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crypt add-on version 2.1 by Michael Glad and others
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU Libidn by Simon Josefsson
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU libio by Per Bothner
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIS(YP)/NIS+ NSS modules 0.19 by Thorsten Kukuk
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Native POSIX Threads Library by Ulrich Drepper et al
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIND-8.2.3-T5B
<br>
Thread-local storage support included.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/libc/bugs.html">http://www.gnu.org/software/libc/bugs.html</a>&gt;.
<br>
<p>Here is the configure command:
<br>
<p>$ [path_to]/configure --with-contrib-vt-flags=--with-platform=linux 
<br>
CC=xlc_r CXX=xlC_r F77=xlf FC=xlf90
<br>
<p>The problem exists with both 1.5rc5 and 1.4.3rc1.
<br>
<p>Here is the failure from 1.4.3.rc1:
<br>
<p>$ make check
<br>
[...]
<br>
make[3]: Entering directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r/test/datatype'
<br>
make[3]: `checksum' is up to date.
<br>
make[3]: `position' is up to date.
<br>
make[3]: `to_self' is up to date.
<br>
make[3]: `ddt_pack' is up to date.
<br>
make[3]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r/test/datatype'
<br>
make  check-TESTS
<br>
make[3]: Entering directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r/test/datatype'
<br>
/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r/test/datatype/.libs/checksum: 
<br>
error while loading shared libraries: libmpi.so.0: cannot open shared 
<br>
object file: No such file or directory
<br>
FAIL: checksum
<br>
/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r/test/datatype/.libs/position: 
<br>
error while loading shared libraries: libmpi.so.0: cannot open shared 
<br>
object file: No such file or directory
<br>
FAIL: position
<br>
========================================================
<br>
2 of 2 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
<p><p><p>Here is 1.5.rc5, which I suspect differs only because the two releases 
<br>
contain different tests:
<br>
<p>$ make check
<br>
[...]
<br>
make[3]: Entering directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r/ompi/debuggers'
<br>
&nbsp;&nbsp;CC     predefined_gap_test.o
<br>
&nbsp;&nbsp;CCLD   predefined_gap_test
<br>
&nbsp;&nbsp;CC     dlopen_test-dlopen_test.o
<br>
&nbsp;&nbsp;CCLD   dlopen_test
<br>
make[3]: Leaving directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r/ompi/debuggers'
<br>
make  check-TESTS
<br>
make[3]: Entering directory 
<br>
`/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r/ompi/debuggers'
<br>
/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r/ompi/debuggers/.libs/predefined_gap_test: 
<br>
error while loading shared libraries: libmpi.so.0: cannot open shared 
<br>
object file: No such file or directory
<br>
FAIL: predefined_gap_test
<br>
Trying to lt_dlopen file with dladvise_local: ./libompi_dbg_msgq
<br>
File opened with dladvise_local, all passed
<br>
PASS: dlopen_test
<br>
========================================================
<br>
1 of 2 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
<p><p>As I said above, the problem is NOT occuring w/ gcc.  So, I've attached 
<br>
the &quot;./libtool --config&quot; output for the xlc and gcc builds, which I see 
<br>
differ in more ways than I would have expected.
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<p>
<p># Whether or not to build shared libraries.
<br>
build_libtool_libs=yes
<br>
<p># Whether or not to build static libraries.
<br>
build_old_libs=no
<br>
<p># A BSD- or MS-compatible name lister.
<br>
NM=&quot;/usr/bin/nm -B&quot;
<br>
<p># Which release of libtool.m4 was used?
<br>
macro_version=2.2.6b
<br>
macro_revision=1.3017
<br>
<p># Assembler program.
<br>
AS=as
<br>
<p># DLL creation program.
<br>
DLLTOOL=dlltool
<br>
<p># Object dumper program.
<br>
OBJDUMP=objdump
<br>
<p># What type of objects to build.
<br>
pic_mode=default
<br>
<p># Whether or not to optimize for fast installation.
<br>
fast_install=needless
<br>
<p># The host system.
<br>
host_alias=
<br>
host=powerpc64-unknown-linux-gnu
<br>
host_os=linux-gnu
<br>
<p># The build system.
<br>
build_alias=
<br>
build=powerpc64-unknown-linux-gnu
<br>
build_os=linux-gnu
<br>
<p># A sed program that does not truncate output.
<br>
SED=&quot;/bin/sed&quot;
<br>
<p># Sed that helps us avoid accidentally triggering echo(1) options like -n.
<br>
Xsed=&quot;$SED -e 1s/^X//&quot;
<br>
<p># A grep program that handles long lines.
<br>
GREP=&quot;/bin/grep&quot;
<br>
<p># An ERE matcher.
<br>
EGREP=&quot;/bin/grep -E&quot;
<br>
<p># A literal string matcher.
<br>
FGREP=&quot;/bin/grep -F&quot;
<br>
<p># Whether we need soft or hard links.
<br>
LN_S=&quot;ln -s&quot;
<br>
<p># What is the maximum length of a command?
<br>
max_cmd_len=98304
<br>
<p># Object file suffix (normally &quot;o&quot;).
<br>
objext=o
<br>
<p># Executable file suffix (normally &quot;&quot;).
<br>
exeext=
<br>
<p># whether the shell understands &quot;unset&quot;.
<br>
lt_unset=unset
<br>
<p># turn spaces into newlines.
<br>
SP2NL=&quot;tr \\040 \\012&quot;
<br>
<p># turn newlines into spaces.
<br>
NL2SP=&quot;tr \\015\\012 \\040\\040&quot;
<br>
<p># How to create reloadable object files.
<br>
reload_flag=&quot; -r&quot;
<br>
reload_cmds=&quot;\$LD\$reload_flag -o \$output\$reload_objs&quot;
<br>
<p># Method to check whether dependent libraries are shared objects.
<br>
deplibs_check_method=&quot;pass_all&quot;
<br>
<p># Command to use when deplibs_check_method == &quot;file_magic&quot;.
<br>
file_magic_cmd=&quot;\$MAGIC_CMD&quot;
<br>
<p># The archiver.
<br>
AR=&quot;ar&quot;
<br>
AR_FLAGS=&quot;cru&quot;
<br>
<p># A symbol stripping program.
<br>
STRIP=&quot;strip&quot;
<br>
<p># Commands used to install an old-style archive.
<br>
RANLIB=&quot;ranlib&quot;
<br>
old_postinstall_cmds=&quot;chmod 644 \$oldlib~\$RANLIB \$oldlib&quot;
<br>
old_postuninstall_cmds=&quot;&quot;
<br>
<p># A C compiler.
<br>
LTCC=&quot;gcc&quot;
<br>
<p># LTCC compiler flags.
<br>
LTCFLAGS=&quot;-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden&quot;
<br>
<p># Take the output of nm and produce a listing of raw symbols and C names.
<br>
global_symbol_pipe=&quot;sed -n -e 's/^.*[	 ]\\([ABCDGIRSTW][ABCDGIRSTW]*\\)[	 ][	 ]*\\([_A-Za-z][_A-Za-z0-9]*\\)\$/\\1 \\2 \\2/p'&quot;
<br>
<p># Transform the output of nm in a proper C declaration.
<br>
global_symbol_to_cdecl=&quot;sed -n -e 's/^T .* \\(.*\\)\$/extern int \\1();/p' -e 's/^[ABCDGIRSTW]* .* \\(.*\\)\$/extern char \\1;/p'&quot;
<br>
<p># Transform the output of nm in a C name address pair.
<br>
global_symbol_to_c_name_address=&quot;sed -n -e 's/^: \\([^ ]*\\) \$/  {\\\&quot;\\1\\\&quot;, (void *) 0},/p' -e 's/^[ABCDGIRSTW]* \\([^ ]*\\) \\([^ ]*\\)\$/  {\&quot;\\2\&quot;, (void *) \\&amp;\\2},/p'&quot;
<br>
<p># Transform the output of nm in a C name address pair when lib prefix is needed.
<br>
global_symbol_to_c_name_address_lib_prefix=&quot;sed -n -e 's/^: \\([^ ]*\\) \$/  {\\\&quot;\\1\\\&quot;, (void *) 0},/p' -e 's/^[ABCDGIRSTW]* \\([^ ]*\\) \\(lib[^ ]*\\)\$/  {\&quot;\\2\&quot;, (void *) \\&amp;\\2},/p' -e 's/^[ABCDGIRSTW]* \\([^ ]*\\) \\([^ ]*\\)\$/  {\&quot;lib\\2\&quot;, (void *) \\&amp;\\2},/p'&quot;
<br>
<p># The name of the directory that contains temporary libtool files.
<br>
objdir=.libs
<br>
<p># Shell to use when invoking shell scripts.
<br>
SHELL=&quot;/bin/sh&quot;
<br>
<p># An echo program that does not interpret backslashes.
<br>
ECHO=&quot;echo&quot;
<br>
<p># Used to examine libraries when file_magic_cmd begins with &quot;file&quot;.
<br>
MAGIC_CMD=file
<br>
<p># Must we lock files when doing compilation?
<br>
need_locks=&quot;no&quot;
<br>
<p># Tool to manipulate archived DWARF debug symbol files on Mac OS X.
<br>
DSYMUTIL=&quot;&quot;
<br>
<p># Tool to change global to local symbols on Mac OS X.
<br>
NMEDIT=&quot;&quot;
<br>
<p># Tool to manipulate fat objects and archives on Mac OS X.
<br>
LIPO=&quot;&quot;
<br>
<p># ldd/readelf like tool for Mach-O binaries on Mac OS X.
<br>
OTOOL=&quot;&quot;
<br>
<p># ldd/readelf like tool for 64 bit Mach-O binaries on Mac OS X 10.4.
<br>
OTOOL64=&quot;&quot;
<br>
<p># Old archive suffix (normally &quot;a&quot;).
<br>
libext=a
<br>
<p># Shared library suffix (normally &quot;.so&quot;).
<br>
shrext_cmds=&quot;.so&quot;
<br>
<p># The commands to extract the exported symbol list from a shared archive.
<br>
extract_expsyms_cmds=&quot;&quot;
<br>
<p># Variables whose values should be saved in libtool wrapper scripts and
<br>
# restored at link time.
<br>
variables_saved_for_relink=&quot;PATH LD_LIBRARY_PATH LD_RUN_PATH GCC_EXEC_PREFIX COMPILER_PATH LIBRARY_PATH&quot;
<br>
<p># Do we need the &quot;lib&quot; prefix for modules?
<br>
need_lib_prefix=no
<br>
<p># Do we need a version for libraries?
<br>
need_version=no
<br>
<p># Library versioning type.
<br>
version_type=linux
<br>
<p># Shared library runtime path variable.
<br>
runpath_var=LD_RUN_PATH
<br>
<p># Shared library path variable.
<br>
shlibpath_var=LD_LIBRARY_PATH
<br>
<p># Is shlibpath searched before the hard-coded library search path?
<br>
shlibpath_overrides_runpath=yes
<br>
<p># Format of library name prefix.
<br>
libname_spec=&quot;lib\$name&quot;
<br>
<p># List of archive names.  First name is the real one, the rest are links.
<br>
# The last name is the one that the linker finds with -lNAME
<br>
library_names_spec=&quot;\${libname}\${release}\${shared_ext}\$versuffix \${libname}\${release}\${shared_ext}\$major \$libname\${shared_ext}&quot;
<br>
<p># The coded name of the library, if different from the real name.
<br>
soname_spec=&quot;\${libname}\${release}\${shared_ext}\$major&quot;
<br>
<p># Command to use after installation of a shared archive.
<br>
postinstall_cmds=&quot;&quot;
<br>
<p># Command to use after uninstallation of a shared archive.
<br>
postuninstall_cmds=&quot;&quot;
<br>
<p># Commands used to finish a libtool library installation in a directory.
<br>
finish_cmds=&quot;PATH=\\\&quot;\\\$PATH:/sbin\\\&quot; ldconfig -n \$libdir&quot;
<br>
<p># As &quot;finish_cmds&quot;, except a single script fragment to be evaled but
<br>
# not shown.
<br>
finish_eval=&quot;&quot;
<br>
<p># Whether we should hardcode library paths into libraries.
<br>
hardcode_into_libs=yes
<br>
<p># Compile-time system search path for libraries.
<br>
sys_lib_search_path_spec=&quot;/usr/lib/gcc/powerpc64-suse-linux/4.1.2 /usr/powerpc64-suse-linux/lib /usr/lib /lib&quot;
<br>
<p># Run-time system search path for libraries.
<br>
sys_lib_dlsearch_path_spec=&quot;/lib /usr/lib /usr/X11R6/lib64/Xaw3d /usr/X11R6/lib64 /usr/X11R6/lib/Xaw3d /usr/X11R6/lib /usr/powerpc-suse-linux/lib /usr/powerpc64-suse-linux/lib /usr/local/lib /opt/kde3/lib /opt/gnome/lib /lib64 /lib /usr/lib64 /usr/lib /usr/local/lib64 /opt/kde3/lib64 /opt/gnome/lib64 /opt/ibm/db2/V9.7/lib32 /opt/ibm/db2/V9.7/lib64 &quot;
<br>
<p># Whether dlopen is supported.
<br>
dlopen_support=yes
<br>
<p># Whether dlopen of programs is supported.
<br>
dlopen_self=no
<br>
<p># Whether dlopen of statically linked programs is supported.
<br>
dlopen_self_static=unknown
<br>
<p># Commands to strip libraries.
<br>
old_striplib=&quot;strip --strip-debug&quot;
<br>
striplib=&quot;strip --strip-unneeded&quot;
<br>
<p><p># The linker used to build libraries.
<br>
LD=&quot;/usr/bin/ld -m elf32ppclinux&quot;
<br>
<p># Commands used to build an old-style archive.
<br>
old_archive_cmds=&quot;\$AR \$AR_FLAGS \$oldlib\$oldobjs~\$RANLIB \$oldlib&quot;
<br>
<p># A language specific compiler.
<br>
CC=&quot;gcc&quot;
<br>
<p># Is the compiler the GNU compiler?
<br>
with_gcc=yes
<br>
<p># Compiler flag to turn off builtin functions.
<br>
no_builtin_flag=&quot; -fno-builtin&quot;
<br>
<p># How to pass a linker flag through the compiler.
<br>
wl=&quot;-Wl,&quot;
<br>
<p># Additional compiler flags for building library objects.
<br>
pic_flag=&quot; -fPIC -DPIC&quot;
<br>
<p># Compiler flag to prevent dynamic linking.
<br>
link_static_flag=&quot;-static&quot;
<br>
<p># Does compiler simultaneously support -c and -o options?
<br>
compiler_c_o=&quot;yes&quot;
<br>
<p># Whether or not to add -lc for building shared libraries.
<br>
build_libtool_need_lc=no
<br>
<p># Whether or not to disallow shared libs when runtime libs are static.
<br>
allow_libtool_libs_with_static_runtimes=no
<br>
<p># Compiler flag to allow reflexive dlopens.
<br>
export_dynamic_flag_spec=&quot;\${wl}--export-dynamic&quot;
<br>
<p># Compiler flag to generate shared objects directly from archives.
<br>
whole_archive_flag_spec=&quot;\${wl}--whole-archive\$convenience \${wl}--no-whole-archive&quot;
<br>
<p># Whether the compiler copes with passing no objects directly.
<br>
compiler_needs_object=&quot;no&quot;
<br>
<p># Create an old-style archive from a shared archive.
<br>
old_archive_from_new_cmds=&quot;&quot;
<br>
<p># Create a temporary old-style archive to link instead of a shared archive.
<br>
old_archive_from_expsyms_cmds=&quot;&quot;
<br>
<p># Commands used to build a shared archive.
<br>
archive_cmds=&quot;\$CC -shared \$libobjs \$deplibs \$compiler_flags \${wl}-soname \$wl\$soname -o \$lib&quot;
<br>
archive_expsym_cmds=&quot;echo \\\&quot;{ global:\\\&quot; &gt; \$output_objdir/\$libname.ver~
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat \$export_symbols | sed -e \\\&quot;s/\\\\(.*\\\\)/\\\\1;/\\\&quot; &gt;&gt; \$output_objdir/\$libname.ver~
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo \\\&quot;local: *; };\\\&quot; &gt;&gt; \$output_objdir/\$libname.ver~
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$CC -shared \$libobjs \$deplibs \$compiler_flags \${wl}-soname \$wl\$soname \${wl}-version-script \${wl}\$output_objdir/\$libname.ver -o \$lib&quot;
<br>
<p># Commands used to build a loadable module if different from building
<br>
# a shared archive.
<br>
module_cmds=&quot;&quot;
<br>
module_expsym_cmds=&quot;&quot;
<br>
<p># Whether we are building with GNU ld or not.
<br>
with_gnu_ld=&quot;yes&quot;
<br>
<p># Flag that allows shared libraries with undefined symbols to be built.
<br>
allow_undefined_flag=&quot;&quot;
<br>
<p># Flag that enforces no undefined symbols.
<br>
no_undefined_flag=&quot;&quot;
<br>
<p># Flag to hardcode $libdir into a binary during linking.
<br>
# This must work even if $libdir does not exist
<br>
hardcode_libdir_flag_spec=&quot;\${wl}-rpath \${wl}\$libdir&quot;
<br>
<p># If ld is used when linking, flag to hardcode $libdir into a binary
<br>
# during linking.  This must work even if $libdir does not exist.
<br>
hardcode_libdir_flag_spec_ld=&quot;&quot;
<br>
<p># Whether we need a single &quot;-rpath&quot; flag with a separated argument.
<br>
hardcode_libdir_separator=&quot;&quot;
<br>
<p># Set to &quot;yes&quot; if using DIR/libNAME${shared_ext} during linking hardcodes
<br>
# DIR into the resulting binary.
<br>
hardcode_direct=no
<br>
<p># Set to &quot;yes&quot; if using DIR/libNAME${shared_ext} during linking hardcodes
<br>
# DIR into the resulting binary and the resulting library dependency is
<br>
# &quot;absolute&quot;,i.e impossible to change by setting ${shlibpath_var} if the
<br>
# library is relocated.
<br>
hardcode_direct_absolute=no
<br>
<p># Set to &quot;yes&quot; if using the -LDIR flag during linking hardcodes DIR
<br>
# into the resulting binary.
<br>
hardcode_minus_L=no
<br>
<p># Set to &quot;yes&quot; if using SHLIBPATH_VAR=DIR during linking hardcodes DIR
<br>
# into the resulting binary.
<br>
hardcode_shlibpath_var=unsupported
<br>
<p># Set to &quot;yes&quot; if building a shared library automatically hardcodes DIR
<br>
# into the library and all subsequent libraries and executables linked
<br>
# against it.
<br>
hardcode_automatic=no
<br>
<p># Set to yes if linker adds runtime paths of dependent libraries
<br>
# to runtime path list.
<br>
inherit_rpath=no
<br>
<p># Whether libtool must link a program against all its dependency libraries.
<br>
link_all_deplibs=unknown
<br>
<p># Fix the shell variable $srcfile for the compiler.
<br>
fix_srcfile_path=&quot;&quot;
<br>
<p># Set to &quot;yes&quot; if exported symbols are required.
<br>
always_export_symbols=no
<br>
<p># The commands to list exported symbols.
<br>
export_symbols_cmds=&quot;\$NM \$libobjs \$convenience | \$global_symbol_pipe | \$SED 's/.* //' | sort | uniq &gt; \$export_symbols&quot;
<br>
<p># Symbols that should not be listed in the preloaded symbols.
<br>
exclude_expsyms=&quot;_GLOBAL_OFFSET_TABLE_|_GLOBAL__F[ID]_.*&quot;
<br>
<p># Symbols that must always be exported.
<br>
include_expsyms=&quot;&quot;
<br>
<p># Commands necessary for linking programs (against libraries) with templates.
<br>
prelink_cmds=&quot;&quot;
<br>
<p># Specify filename containing input files.
<br>
file_list_spec=&quot;&quot;
<br>
<p># How to hardcode a shared library path into an executable.
<br>
hardcode_action=immediate
<br>
<p># The directories searched by this compiler when creating a shared library.
<br>
compiler_lib_search_dirs=&quot;&quot;
<br>
<p># Dependencies to place before and after the objects being linked to
<br>
# create a shared library.
<br>
predep_objects=&quot;&quot;
<br>
postdep_objects=&quot;&quot;
<br>
predeps=&quot;&quot;
<br>
postdeps=&quot;&quot;
<br>
<p># The library search path used internally by the compiler when linking
<br>
# a shared library.
<br>
compiler_lib_search_path=&quot;&quot;
<br>
<p><p>
<br><p>
<p># Whether or not to build shared libraries.
<br>
build_libtool_libs=yes
<br>
<p># Whether or not to build static libraries.
<br>
build_old_libs=no
<br>
<p># A BSD- or MS-compatible name lister.
<br>
NM=&quot;/usr/bin/nm -B&quot;
<br>
<p># Which release of libtool.m4 was used?
<br>
macro_version=2.2.6b
<br>
macro_revision=1.3017
<br>
<p># Assembler program.
<br>
AS=as
<br>
<p># DLL creation program.
<br>
DLLTOOL=dlltool
<br>
<p># Object dumper program.
<br>
OBJDUMP=objdump
<br>
<p># What type of objects to build.
<br>
pic_mode=default
<br>
<p># Whether or not to optimize for fast installation.
<br>
fast_install=needless
<br>
<p># The host system.
<br>
host_alias=
<br>
host=powerpc64-unknown-linux-gnu
<br>
host_os=linux-gnu
<br>
<p># The build system.
<br>
build_alias=
<br>
build=powerpc64-unknown-linux-gnu
<br>
build_os=linux-gnu
<br>
<p># A sed program that does not truncate output.
<br>
SED=&quot;/bin/sed&quot;
<br>
<p># Sed that helps us avoid accidentally triggering echo(1) options like -n.
<br>
Xsed=&quot;$SED -e 1s/^X//&quot;
<br>
<p># A grep program that handles long lines.
<br>
GREP=&quot;/bin/grep&quot;
<br>
<p># An ERE matcher.
<br>
EGREP=&quot;/bin/grep -E&quot;
<br>
<p># A literal string matcher.
<br>
FGREP=&quot;/bin/grep -F&quot;
<br>
<p># Whether we need soft or hard links.
<br>
LN_S=&quot;ln -s&quot;
<br>
<p># What is the maximum length of a command?
<br>
max_cmd_len=98304
<br>
<p># Object file suffix (normally &quot;o&quot;).
<br>
objext=o
<br>
<p># Executable file suffix (normally &quot;&quot;).
<br>
exeext=
<br>
<p># whether the shell understands &quot;unset&quot;.
<br>
lt_unset=unset
<br>
<p># turn spaces into newlines.
<br>
SP2NL=&quot;tr \\040 \\012&quot;
<br>
<p># turn newlines into spaces.
<br>
NL2SP=&quot;tr \\015\\012 \\040\\040&quot;
<br>
<p># How to create reloadable object files.
<br>
reload_flag=&quot; -r&quot;
<br>
reload_cmds=&quot;\$LD\$reload_flag -o \$output\$reload_objs&quot;
<br>
<p># Method to check whether dependent libraries are shared objects.
<br>
deplibs_check_method=&quot;pass_all&quot;
<br>
<p># Command to use when deplibs_check_method == &quot;file_magic&quot;.
<br>
file_magic_cmd=&quot;\$MAGIC_CMD&quot;
<br>
<p># The archiver.
<br>
AR=&quot;ar&quot;
<br>
AR_FLAGS=&quot;cru&quot;
<br>
<p># A symbol stripping program.
<br>
STRIP=&quot;strip&quot;
<br>
<p># Commands used to install an old-style archive.
<br>
RANLIB=&quot;ranlib&quot;
<br>
old_postinstall_cmds=&quot;chmod 644 \$oldlib~\$RANLIB \$oldlib&quot;
<br>
old_postuninstall_cmds=&quot;&quot;
<br>
<p># A C compiler.
<br>
LTCC=&quot;xlc_r&quot;
<br>
<p># LTCC compiler flags.
<br>
LTCFLAGS=&quot;-O -DNDEBUG  &quot;
<br>
<p># Take the output of nm and produce a listing of raw symbols and C names.
<br>
global_symbol_pipe=&quot;sed -n -e 's/^.*[	 ]\\([ABCDGIRSTW][ABCDGIRSTW]*\\)[	 ][	 ]*\\([_A-Za-z][_A-Za-z0-9]*\\)\$/\\1 \\2 \\2/p'&quot;
<br>
<p># Transform the output of nm in a proper C declaration.
<br>
global_symbol_to_cdecl=&quot;sed -n -e 's/^T .* \\(.*\\)\$/extern int \\1();/p' -e 's/^[ABCDGIRSTW]* .* \\(.*\\)\$/extern char \\1;/p'&quot;
<br>
<p># Transform the output of nm in a C name address pair.
<br>
global_symbol_to_c_name_address=&quot;sed -n -e 's/^: \\([^ ]*\\) \$/  {\\\&quot;\\1\\\&quot;, (void *) 0},/p' -e 's/^[ABCDGIRSTW]* \\([^ ]*\\) \\([^ ]*\\)\$/  {\&quot;\\2\&quot;, (void *) \\&amp;\\2},/p'&quot;
<br>
<p># Transform the output of nm in a C name address pair when lib prefix is needed.
<br>
global_symbol_to_c_name_address_lib_prefix=&quot;sed -n -e 's/^: \\([^ ]*\\) \$/  {\\\&quot;\\1\\\&quot;, (void *) 0},/p' -e 's/^[ABCDGIRSTW]* \\([^ ]*\\) \\(lib[^ ]*\\)\$/  {\&quot;\\2\&quot;, (void *) \\&amp;\\2},/p' -e 's/^[ABCDGIRSTW]* \\([^ ]*\\) \\([^ ]*\\)\$/  {\&quot;lib\\2\&quot;, (void *) \\&amp;\\2},/p'&quot;
<br>
<p># The name of the directory that contains temporary libtool files.
<br>
objdir=.libs
<br>
<p># Shell to use when invoking shell scripts.
<br>
SHELL=&quot;/bin/sh&quot;
<br>
<p># An echo program that does not interpret backslashes.
<br>
ECHO=&quot;echo&quot;
<br>
<p># Used to examine libraries when file_magic_cmd begins with &quot;file&quot;.
<br>
MAGIC_CMD=file
<br>
<p># Must we lock files when doing compilation?
<br>
need_locks=&quot;no&quot;
<br>
<p># Tool to manipulate archived DWARF debug symbol files on Mac OS X.
<br>
DSYMUTIL=&quot;&quot;
<br>
<p># Tool to change global to local symbols on Mac OS X.
<br>
NMEDIT=&quot;&quot;
<br>
<p># Tool to manipulate fat objects and archives on Mac OS X.
<br>
LIPO=&quot;&quot;
<br>
<p># ldd/readelf like tool for Mach-O binaries on Mac OS X.
<br>
OTOOL=&quot;&quot;
<br>
<p># ldd/readelf like tool for 64 bit Mach-O binaries on Mac OS X 10.4.
<br>
OTOOL64=&quot;&quot;
<br>
<p># Old archive suffix (normally &quot;a&quot;).
<br>
libext=a
<br>
<p># Shared library suffix (normally &quot;.so&quot;).
<br>
shrext_cmds=&quot;.so&quot;
<br>
<p># The commands to extract the exported symbol list from a shared archive.
<br>
extract_expsyms_cmds=&quot;&quot;
<br>
<p># Variables whose values should be saved in libtool wrapper scripts and
<br>
# restored at link time.
<br>
variables_saved_for_relink=&quot;PATH LD_LIBRARY_PATH LD_RUN_PATH&quot;
<br>
<p># Do we need the &quot;lib&quot; prefix for modules?
<br>
need_lib_prefix=no
<br>
<p># Do we need a version for libraries?
<br>
need_version=no
<br>
<p># Library versioning type.
<br>
version_type=linux
<br>
<p># Shared library runtime path variable.
<br>
runpath_var=LD_RUN_PATH
<br>
<p># Shared library path variable.
<br>
shlibpath_var=LD_LIBRARY_PATH
<br>
<p># Is shlibpath searched before the hard-coded library search path?
<br>
shlibpath_overrides_runpath=no
<br>
<p># Format of library name prefix.
<br>
libname_spec=&quot;lib\$name&quot;
<br>
<p># List of archive names.  First name is the real one, the rest are links.
<br>
# The last name is the one that the linker finds with -lNAME
<br>
library_names_spec=&quot;\${libname}\${release}\${shared_ext}\$versuffix \${libname}\${release}\${shared_ext}\$major \$libname\${shared_ext}&quot;
<br>
<p># The coded name of the library, if different from the real name.
<br>
soname_spec=&quot;\${libname}\${release}\${shared_ext}\$major&quot;
<br>
<p># Command to use after installation of a shared archive.
<br>
postinstall_cmds=&quot;&quot;
<br>
<p># Command to use after uninstallation of a shared archive.
<br>
postuninstall_cmds=&quot;&quot;
<br>
<p># Commands used to finish a libtool library installation in a directory.
<br>
finish_cmds=&quot;PATH=\\\&quot;\\\$PATH:/sbin\\\&quot; ldconfig -n \$libdir&quot;
<br>
<p># As &quot;finish_cmds&quot;, except a single script fragment to be evaled but
<br>
# not shown.
<br>
finish_eval=&quot;&quot;
<br>
<p># Whether we should hardcode library paths into libraries.
<br>
hardcode_into_libs=yes
<br>
<p># Compile-time system search path for libraries.
<br>
sys_lib_search_path_spec=&quot;/lib /usr/lib /usr/local/lib&quot;
<br>
<p># Run-time system search path for libraries.
<br>
sys_lib_dlsearch_path_spec=&quot;/lib /usr/lib /usr/X11R6/lib64/Xaw3d /usr/X11R6/lib64 /usr/X11R6/lib/Xaw3d /usr/X11R6/lib /usr/powerpc-suse-linux/lib /usr/powerpc64-suse-linux/lib /usr/local/lib /opt/kde3/lib /opt/gnome/lib /lib64 /lib /usr/lib64 /usr/lib /usr/local/lib64 /opt/kde3/lib64 /opt/gnome/lib64 /opt/ibm/db2/V9.7/lib32 /opt/ibm/db2/V9.7/lib64 &quot;
<br>
<p># Whether dlopen is supported.
<br>
dlopen_support=yes
<br>
<p># Whether dlopen of programs is supported.
<br>
dlopen_self=yes
<br>
<p># Whether dlopen of statically linked programs is supported.
<br>
dlopen_self_static=no
<br>
<p># Commands to strip libraries.
<br>
old_striplib=&quot;strip --strip-debug&quot;
<br>
striplib=&quot;strip --strip-unneeded&quot;
<br>
<p><p># The linker used to build libraries.
<br>
LD=&quot;/usr/bin/ld -m elf32ppclinux&quot;
<br>
<p># Commands used to build an old-style archive.
<br>
old_archive_cmds=&quot;\$AR \$AR_FLAGS \$oldlib\$oldobjs~\$RANLIB \$oldlib&quot;
<br>
<p># A language specific compiler.
<br>
CC=&quot;xlc_r&quot;
<br>
<p># Is the compiler the GNU compiler?
<br>
with_gcc=
<br>
<p># Compiler flag to turn off builtin functions.
<br>
no_builtin_flag=&quot;&quot;
<br>
<p># How to pass a linker flag through the compiler.
<br>
wl=&quot;-Wl,&quot;
<br>
<p># Additional compiler flags for building library objects.
<br>
pic_flag=&quot; -qpic -DPIC&quot;
<br>
<p># Compiler flag to prevent dynamic linking.
<br>
link_static_flag=&quot;-qstaticlink&quot;
<br>
<p># Does compiler simultaneously support -c and -o options?
<br>
compiler_c_o=&quot;yes&quot;
<br>
<p># Whether or not to add -lc for building shared libraries.
<br>
build_libtool_need_lc=yes
<br>
<p># Whether or not to disallow shared libs when runtime libs are static.
<br>
allow_libtool_libs_with_static_runtimes=no
<br>
<p># Compiler flag to allow reflexive dlopens.
<br>
export_dynamic_flag_spec=&quot;\${wl}--export-dynamic&quot;
<br>
<p># Compiler flag to generate shared objects directly from archives.
<br>
whole_archive_flag_spec=&quot;\${wl}--whole-archive\$convenience \${wl}--no-whole-archive&quot;
<br>
<p># Whether the compiler copes with passing no objects directly.
<br>
compiler_needs_object=&quot;no&quot;
<br>
<p># Create an old-style archive from a shared archive.
<br>
old_archive_from_new_cmds=&quot;&quot;
<br>
<p># Create a temporary old-style archive to link instead of a shared archive.
<br>
old_archive_from_expsyms_cmds=&quot;&quot;
<br>
<p># Commands used to build a shared archive.
<br>
archive_cmds=&quot;\$CC -qmkshrobj \$libobjs \$deplibs \$compiler_flags \${wl}-soname \$wl\$soname -o \$lib&quot;
<br>
archive_expsym_cmds=&quot;echo \\\&quot;{ global:\\\&quot; &gt; \$output_objdir/\$libname.ver~
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat \$export_symbols | sed -e \\\&quot;s/\\\\(.*\\\\)/\\\\1;/\\\&quot; &gt;&gt; \$output_objdir/\$libname.ver~
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo \\\&quot;local: *; };\\\&quot; &gt;&gt; \$output_objdir/\$libname.ver~
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$CC -qmkshrobj \$libobjs \$deplibs \$compiler_flags \${wl}-soname \$wl\$soname \${wl}-version-script \${wl}\$output_objdir/\$libname.ver -o \$lib&quot;
<br>
<p># Commands used to build a loadable module if different from building
<br>
# a shared archive.
<br>
module_cmds=&quot;&quot;
<br>
module_expsym_cmds=&quot;&quot;
<br>
<p># Whether we are building with GNU ld or not.
<br>
with_gnu_ld=&quot;yes&quot;
<br>
<p># Flag that allows shared libraries with undefined symbols to be built.
<br>
allow_undefined_flag=&quot;&quot;
<br>
<p># Flag that enforces no undefined symbols.
<br>
no_undefined_flag=&quot;&quot;
<br>
<p># Flag to hardcode $libdir into a binary during linking.
<br>
# This must work even if $libdir does not exist
<br>
hardcode_libdir_flag_spec=&quot;\${wl}-rpath \${wl}\$libdir&quot;
<br>
<p># If ld is used when linking, flag to hardcode $libdir into a binary
<br>
# during linking.  This must work even if $libdir does not exist.
<br>
hardcode_libdir_flag_spec_ld=&quot;&quot;
<br>
<p># Whether we need a single &quot;-rpath&quot; flag with a separated argument.
<br>
hardcode_libdir_separator=&quot;&quot;
<br>
<p># Set to &quot;yes&quot; if using DIR/libNAME${shared_ext} during linking hardcodes
<br>
# DIR into the resulting binary.
<br>
hardcode_direct=no
<br>
<p># Set to &quot;yes&quot; if using DIR/libNAME${shared_ext} during linking hardcodes
<br>
# DIR into the resulting binary and the resulting library dependency is
<br>
# &quot;absolute&quot;,i.e impossible to change by setting ${shlibpath_var} if the
<br>
# library is relocated.
<br>
hardcode_direct_absolute=no
<br>
<p># Set to &quot;yes&quot; if using the -LDIR flag during linking hardcodes DIR
<br>
# into the resulting binary.
<br>
hardcode_minus_L=no
<br>
<p># Set to &quot;yes&quot; if using SHLIBPATH_VAR=DIR during linking hardcodes DIR
<br>
# into the resulting binary.
<br>
hardcode_shlibpath_var=unsupported
<br>
<p># Set to &quot;yes&quot; if building a shared library automatically hardcodes DIR
<br>
# into the library and all subsequent libraries and executables linked
<br>
# against it.
<br>
hardcode_automatic=no
<br>
<p># Set to yes if linker adds runtime paths of dependent libraries
<br>
# to runtime path list.
<br>
inherit_rpath=no
<br>
<p># Whether libtool must link a program against all its dependency libraries.
<br>
link_all_deplibs=unknown
<br>
<p># Fix the shell variable $srcfile for the compiler.
<br>
fix_srcfile_path=&quot;&quot;
<br>
<p># Set to &quot;yes&quot; if exported symbols are required.
<br>
always_export_symbols=no
<br>
<p># The commands to list exported symbols.
<br>
export_symbols_cmds=&quot;\$NM \$libobjs \$convenience | \$global_symbol_pipe | \$SED 's/.* //' | sort | uniq &gt; \$export_symbols&quot;
<br>
<p># Symbols that should not be listed in the preloaded symbols.
<br>
exclude_expsyms=&quot;_GLOBAL_OFFSET_TABLE_|_GLOBAL__F[ID]_.*&quot;
<br>
<p># Symbols that must always be exported.
<br>
include_expsyms=&quot;&quot;
<br>
<p># Commands necessary for linking programs (against libraries) with templates.
<br>
prelink_cmds=&quot;&quot;
<br>
<p># Specify filename containing input files.
<br>
file_list_spec=&quot;&quot;
<br>
<p># How to hardcode a shared library path into an executable.
<br>
hardcode_action=immediate
<br>
<p># The directories searched by this compiler when creating a shared library.
<br>
compiler_lib_search_dirs=&quot;&quot;
<br>
<p># Dependencies to place before and after the objects being linked to
<br>
# create a shared library.
<br>
predep_objects=&quot;&quot;
<br>
postdep_objects=&quot;&quot;
<br>
predeps=&quot;&quot;
<br>
postdeps=&quot;&quot;
<br>
<p># The library search path used internally by the compiler when linking
<br>
# a shared library.
<br>
compiler_lib_search_path=&quot;&quot;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8400.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8398.php">Paul H. Hargrove: "[OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8400.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8400.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
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
