
# Whether or not to build shared libraries.
build_libtool_libs=yes

# Whether or not to build static libraries.
build_old_libs=no

# A BSD- or MS-compatible name lister.
NM="/usr/bin/nm -B"

# Which release of libtool.m4 was used?
macro_version=2.2.6b
macro_revision=1.3017

# Assembler program.
AS=as

# DLL creation program.
DLLTOOL=dlltool

# Object dumper program.
OBJDUMP=objdump

# What type of objects to build.
pic_mode=default

# Whether or not to optimize for fast installation.
fast_install=needless

# The host system.
host_alias=
host=powerpc64-unknown-linux-gnu
host_os=linux-gnu

# The build system.
build_alias=
build=powerpc64-unknown-linux-gnu
build_os=linux-gnu

# A sed program that does not truncate output.
SED="/bin/sed"

# Sed that helps us avoid accidentally triggering echo(1) options like -n.
Xsed="$SED -e 1s/^X//"

# A grep program that handles long lines.
GREP="/bin/grep"

# An ERE matcher.
EGREP="/bin/grep -E"

# A literal string matcher.
FGREP="/bin/grep -F"

# Whether we need soft or hard links.
LN_S="ln -s"

# What is the maximum length of a command?
max_cmd_len=98304

# Object file suffix (normally "o").
objext=o

# Executable file suffix (normally "").
exeext=

# whether the shell understands "unset".
lt_unset=unset

# turn spaces into newlines.
SP2NL="tr \\040 \\012"

# turn newlines into spaces.
NL2SP="tr \\015\\012 \\040\\040"

# How to create reloadable object files.
reload_flag=" -r"
reload_cmds="\$LD\$reload_flag -o \$output\$reload_objs"

# Method to check whether dependent libraries are shared objects.
deplibs_check_method="pass_all"

# Command to use when deplibs_check_method == "file_magic".
file_magic_cmd="\$MAGIC_CMD"

# The archiver.
AR="ar"
AR_FLAGS="cru"

# A symbol stripping program.
STRIP="strip"

# Commands used to install an old-style archive.
RANLIB="ranlib"
old_postinstall_cmds="chmod 644 \$oldlib~\$RANLIB \$oldlib"
old_postuninstall_cmds=""

# A C compiler.
LTCC="gcc"

# LTCC compiler flags.
LTCFLAGS="-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden"

# Take the output of nm and produce a listing of raw symbols and C names.
global_symbol_pipe="sed -n -e 's/^.*[	 ]\\([ABCDGIRSTW][ABCDGIRSTW]*\\)[	 ][	 ]*\\([_A-Za-z][_A-Za-z0-9]*\\)\$/\\1 \\2 \\2/p'"

# Transform the output of nm in a proper C declaration.
global_symbol_to_cdecl="sed -n -e 's/^T .* \\(.*\\)\$/extern int \\1();/p' -e 's/^[ABCDGIRSTW]* .* \\(.*\\)\$/extern char \\1;/p'"

# Transform the output of nm in a C name address pair.
global_symbol_to_c_name_address="sed -n -e 's/^: \\([^ ]*\\) \$/  {\\\"\\1\\\", (void *) 0},/p' -e 's/^[ABCDGIRSTW]* \\([^ ]*\\) \\([^ ]*\\)\$/  {\"\\2\", (void *) \\&\\2},/p'"

# Transform the output of nm in a C name address pair when lib prefix is needed.
global_symbol_to_c_name_address_lib_prefix="sed -n -e 's/^: \\([^ ]*\\) \$/  {\\\"\\1\\\", (void *) 0},/p' -e 's/^[ABCDGIRSTW]* \\([^ ]*\\) \\(lib[^ ]*\\)\$/  {\"\\2\", (void *) \\&\\2},/p' -e 's/^[ABCDGIRSTW]* \\([^ ]*\\) \\([^ ]*\\)\$/  {\"lib\\2\", (void *) \\&\\2},/p'"

# The name of the directory that contains temporary libtool files.
objdir=.libs

# Shell to use when invoking shell scripts.
SHELL="/bin/sh"

# An echo program that does not interpret backslashes.
ECHO="echo"

# Used to examine libraries when file_magic_cmd begins with "file".
MAGIC_CMD=file

# Must we lock files when doing compilation?
need_locks="no"

# Tool to manipulate archived DWARF debug symbol files on Mac OS X.
DSYMUTIL=""

# Tool to change global to local symbols on Mac OS X.
NMEDIT=""

# Tool to manipulate fat objects and archives on Mac OS X.
LIPO=""

# ldd/readelf like tool for Mach-O binaries on Mac OS X.
OTOOL=""

# ldd/readelf like tool for 64 bit Mach-O binaries on Mac OS X 10.4.
OTOOL64=""

# Old archive suffix (normally "a").
libext=a

# Shared library suffix (normally ".so").
shrext_cmds=".so"

# The commands to extract the exported symbol list from a shared archive.
extract_expsyms_cmds=""

# Variables whose values should be saved in libtool wrapper scripts and
# restored at link time.
variables_saved_for_relink="PATH LD_LIBRARY_PATH LD_RUN_PATH GCC_EXEC_PREFIX COMPILER_PATH LIBRARY_PATH"

# Do we need the "lib" prefix for modules?
need_lib_prefix=no

# Do we need a version for libraries?
need_version=no

# Library versioning type.
version_type=linux

# Shared library runtime path variable.
runpath_var=LD_RUN_PATH

# Shared library path variable.
shlibpath_var=LD_LIBRARY_PATH

# Is shlibpath searched before the hard-coded library search path?
shlibpath_overrides_runpath=yes

# Format of library name prefix.
libname_spec="lib\$name"

# List of archive names.  First name is the real one, the rest are links.
# The last name is the one that the linker finds with -lNAME
library_names_spec="\${libname}\${release}\${shared_ext}\$versuffix \${libname}\${release}\${shared_ext}\$major \$libname\${shared_ext}"

# The coded name of the library, if different from the real name.
soname_spec="\${libname}\${release}\${shared_ext}\$major"

# Command to use after installation of a shared archive.
postinstall_cmds=""

# Command to use after uninstallation of a shared archive.
postuninstall_cmds=""

# Commands used to finish a libtool library installation in a directory.
finish_cmds="PATH=\\\"\\\$PATH:/sbin\\\" ldconfig -n \$libdir"

# As "finish_cmds", except a single script fragment to be evaled but
# not shown.
finish_eval=""

# Whether we should hardcode library paths into libraries.
hardcode_into_libs=yes

# Compile-time system search path for libraries.
sys_lib_search_path_spec="/usr/lib/gcc/powerpc64-suse-linux/4.1.2 /usr/powerpc64-suse-linux/lib /usr/lib /lib"

# Run-time system search path for libraries.
sys_lib_dlsearch_path_spec="/lib /usr/lib /usr/X11R6/lib64/Xaw3d /usr/X11R6/lib64 /usr/X11R6/lib/Xaw3d /usr/X11R6/lib /usr/powerpc-suse-linux/lib /usr/powerpc64-suse-linux/lib /usr/local/lib /opt/kde3/lib /opt/gnome/lib /lib64 /lib /usr/lib64 /usr/lib /usr/local/lib64 /opt/kde3/lib64 /opt/gnome/lib64 /opt/ibm/db2/V9.7/lib32 /opt/ibm/db2/V9.7/lib64 "

# Whether dlopen is supported.
dlopen_support=yes

# Whether dlopen of programs is supported.
dlopen_self=no

# Whether dlopen of statically linked programs is supported.
dlopen_self_static=unknown

# Commands to strip libraries.
old_striplib="strip --strip-debug"
striplib="strip --strip-unneeded"


# The linker used to build libraries.
LD="/usr/bin/ld -m elf32ppclinux"

# Commands used to build an old-style archive.
old_archive_cmds="\$AR \$AR_FLAGS \$oldlib\$oldobjs~\$RANLIB \$oldlib"

# A language specific compiler.
CC="gcc"

# Is the compiler the GNU compiler?
with_gcc=yes

# Compiler flag to turn off builtin functions.
no_builtin_flag=" -fno-builtin"

# How to pass a linker flag through the compiler.
wl="-Wl,"

# Additional compiler flags for building library objects.
pic_flag=" -fPIC -DPIC"

# Compiler flag to prevent dynamic linking.
link_static_flag="-static"

# Does compiler simultaneously support -c and -o options?
compiler_c_o="yes"

# Whether or not to add -lc for building shared libraries.
build_libtool_need_lc=no

# Whether or not to disallow shared libs when runtime libs are static.
allow_libtool_libs_with_static_runtimes=no

# Compiler flag to allow reflexive dlopens.
export_dynamic_flag_spec="\${wl}--export-dynamic"

# Compiler flag to generate shared objects directly from archives.
whole_archive_flag_spec="\${wl}--whole-archive\$convenience \${wl}--no-whole-archive"

# Whether the compiler copes with passing no objects directly.
compiler_needs_object="no"

# Create an old-style archive from a shared archive.
old_archive_from_new_cmds=""

# Create a temporary old-style archive to link instead of a shared archive.
old_archive_from_expsyms_cmds=""

# Commands used to build a shared archive.
archive_cmds="\$CC -shared \$libobjs \$deplibs \$compiler_flags \${wl}-soname \$wl\$soname -o \$lib"
archive_expsym_cmds="echo \\\"{ global:\\\" > \$output_objdir/\$libname.ver~
	    cat \$export_symbols | sed -e \\\"s/\\\\(.*\\\\)/\\\\1;/\\\" >> \$output_objdir/\$libname.ver~
	    echo \\\"local: *; };\\\" >> \$output_objdir/\$libname.ver~
	    \$CC -shared \$libobjs \$deplibs \$compiler_flags \${wl}-soname \$wl\$soname \${wl}-version-script \${wl}\$output_objdir/\$libname.ver -o \$lib"

# Commands used to build a loadable module if different from building
# a shared archive.
module_cmds=""
module_expsym_cmds=""

# Whether we are building with GNU ld or not.
with_gnu_ld="yes"

# Flag that allows shared libraries with undefined symbols to be built.
allow_undefined_flag=""

# Flag that enforces no undefined symbols.
no_undefined_flag=""

# Flag to hardcode $libdir into a binary during linking.
# This must work even if $libdir does not exist
hardcode_libdir_flag_spec="\${wl}-rpath \${wl}\$libdir"

# If ld is used when linking, flag to hardcode $libdir into a binary
# during linking.  This must work even if $libdir does not exist.
hardcode_libdir_flag_spec_ld=""

# Whether we need a single "-rpath" flag with a separated argument.
hardcode_libdir_separator=""

# Set to "yes" if using DIR/libNAME${shared_ext} during linking hardcodes
# DIR into the resulting binary.
hardcode_direct=no

# Set to "yes" if using DIR/libNAME${shared_ext} during linking hardcodes
# DIR into the resulting binary and the resulting library dependency is
# "absolute",i.e impossible to change by setting ${shlibpath_var} if the
# library is relocated.
hardcode_direct_absolute=no

# Set to "yes" if using the -LDIR flag during linking hardcodes DIR
# into the resulting binary.
hardcode_minus_L=no

# Set to "yes" if using SHLIBPATH_VAR=DIR during linking hardcodes DIR
# into the resulting binary.
hardcode_shlibpath_var=unsupported

# Set to "yes" if building a shared library automatically hardcodes DIR
# into the library and all subsequent libraries and executables linked
# against it.
hardcode_automatic=no

# Set to yes if linker adds runtime paths of dependent libraries
# to runtime path list.
inherit_rpath=no

# Whether libtool must link a program against all its dependency libraries.
link_all_deplibs=unknown

# Fix the shell variable $srcfile for the compiler.
fix_srcfile_path=""

# Set to "yes" if exported symbols are required.
always_export_symbols=no

# The commands to list exported symbols.
export_symbols_cmds="\$NM \$libobjs \$convenience | \$global_symbol_pipe | \$SED 's/.* //' | sort | uniq > \$export_symbols"

# Symbols that should not be listed in the preloaded symbols.
exclude_expsyms="_GLOBAL_OFFSET_TABLE_|_GLOBAL__F[ID]_.*"

# Symbols that must always be exported.
include_expsyms=""

# Commands necessary for linking programs (against libraries) with templates.
prelink_cmds=""

# Specify filename containing input files.
file_list_spec=""

# How to hardcode a shared library path into an executable.
hardcode_action=immediate

# The directories searched by this compiler when creating a shared library.
compiler_lib_search_dirs=""

# Dependencies to place before and after the objects being linked to
# create a shared library.
predep_objects=""
postdep_objects=""
predeps=""
postdeps=""

# The library search path used internally by the compiler when linking
# a shared library.
compiler_lib_search_path=""

