<?php

include_once("$topdir/software/ompi/current/version.inc");

$q[] = "In general, how do I build MPI applications with Open MPI?";

$anchor[] = "general-build";

$a[] = "The Open MPI team *strongly* recommends that you simply use
Open MPI's \"wrapper\" compilers to compile your MPI applications.
That is, instead of using (for example) [gcc] to compile your program,
use [mpicc].  Open MPI provides a wrapper compiler for four languages:

<div align=\"center\">
<table border=1 cellpadding=5>
<tr>
<th>Language</th>
<th>Wrapper compiler name</th>
</tr>

<tr>
<td>C</td>
<td align=center valign=top> [mpicc] </td>
</tr>

<tr>
<td>C++</td>
<td align=center valign=top> [mpiCC], [mpicxx], or [mpic++] <br />(note that [mpiCC] will not exist<br />on case-insensitive filesystems)</td>
</tr>

<tr>
<td>Fortran</td>
<td align=center valign=top> [mpifort] (for v1.7 and above) <br /> [mpif77] and [mpif90] (for older versions) </td>
</tr>

</table>
</div>

Hence, if you expect to compile your program as:

<geshi bash>
shell$ gcc my_mpi_application.c -o my_mpi_application
</geshi>

Simply use the following instead:

<geshi bash>
shell$ mpicc my_mpi_application.c -o my_mpi_application
</geshi>

Note that Open MPI's wrapper compilers do not do any actual compiling
or linking; all they do is manipulate the command line and add in all
the relevant compiler / linker flags and then invoke the underlying
compiler / linker (hence, the name \"wrapper\" compiler).  More
specifically, if you run into a compiler or linker error, check your
source code and/or back-end compiler -- it is _usually_ not the fault of
the Open MPI wrapper compiler.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Wait -- what is <code>mpifort</code>?  Shouldn't I use
<code>mpif77</code> and <code>mpif90</code>?";

$anchor[] = "mpifort-vs-mpif77-and-mpif90";

$a[] = "[mpifort] is a new name for the Fortran wrapper compiler that
debuted in Open MPI v1.7.

*It supports compiling all versions of Fortran*, and *utilizing all
MPI Fortran interfaces* (<code>mpif.h</code>, [use mpi], and [use
mpi_f08]).  There is no need to distinguish between \"Fortran 77\"
(which hasn't existed for 30+ years) or \"Fortran 90\" -- just use
[mpifort] to compile all your Fortran MPI applications and don't worry
about what dialect it is, nor which MPI Fortran interface it uses.

Other MPI implementations will also soon support a wrapper compiler
named [mpifort], so hopefully we can move the whole world to this
simpler wrapper compiler name, and elminiate the use of [mpif77] and
[mpif90].

<font color=\"red\"><strong>Specifically: [mpif77] and [mpif90] are
deprecated as of Open MPI v1.7.</strong></font> Although [mpif77] and
[mpif90] still exist in Open MPI v1.7 for legacy reasons, they will
likely be removed in some (undetermined) future release.  It is in
your interest to convert to [mpifort] now.

Also note that these names are literally just sym links to [mpifort]
under the covers.  So you're using [mpifort] whether you realize it or
not.  :-)

Basically, the 1980's called; they want their [mpif77] wrapper
compiler back.  _Let's let them have it._ ";

/////////////////////////////////////////////////////////////////////////

$q[] = "I can't / don't want to use Open MPI's wrapper compilers.
What do I do?";

$anchor[] = "cant-use-wrappers";

$a[] = "We repeat the above statement: the Open MPI Team *strongly*
recommends that the use the wrapper compilers to compile and link MPI
applications.

If you find yourself saying, \"But I don't *want* to use wrapper
compilers!\", please humor us and try them.  See if they work for you.
Be sure to let us know if they do _not_ work for you.

Many people base their \"wrapper compilers suck!\" mentality on bad
behavior from poorly-implemented wrapper compilers in the mid-1990's.
Things are _much_ better these days; wrapper compilers can handle
almost any situation, and are far more reliable than you attempting to
hard-code the Open MPI-specific compiler and linker flags manually.

That being said, there *are* some -- very, very few -- situations
where using wrapper compilers can be problematic -- such as nesting
multiple wrapper compilers of multiple projects.  Hence, Open MPI
provides a workaround to find out what command line flags you need to
compile MPI applications.  There are generally two sets of flags that
you need: compile flags and link flags.

<geshi bash>
# Show the flags necessary to compile MPI C applications
shell$ mpicc --showme:compile

# Show the flags necessary to link MPI C applications
shell$ mpicc --showme:link
</geshi>

The [--showme:*] flags work with all Open MPI wrapper compilers
(specifically: [mpicc], [mpiCC] / [mpicxx] / [mpic++], [mpifort], and
if you really must use them, [mpif77], [mpif90]).

Hence, if you need to use some other compiler other than Open MPI's
wrapper compilers, we advise you to run the appropriate Open MPI
wrapper compiler with the [--showme] flags to see what Open MPI needs
to compile / link, and then use those with your compiler.

<font color = red> *NOTE:* It is _absolutely not sufficient_
to simply add \"[-lmpi]\" to your link line and assume that you will
obtain a valid Open MPI executable. </font>

*NOTE:* It is almost never a good idea to hard-code these results in a
Makefile (or other build system).  It is almost always best to run
(for example) \"[mpicc --showme:compile]\" in a dynamic fashion to
find out what you need.  For example, GNU Make allows running commands
and assigning their results to variables:

<geshi make>
MPI_COMPILE_FLAGS = $(shell mpicc --showme:compile)
MPI_LINK_FLAGS = $(shell mpicc --showme:link)

my_app: my_app.c
        $(CC) $(MPI_COMPILE_FLAGS) my_app.c $(MPI_LINK_FLAGS) -o my_app
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I override the flags specified by Open MPI's wrapper
compilers? (v1.0 series)";

$anchor[] = "override-wrappers";

$a[] = "<strong><font color=red>NOTE:</font></strong> This answer
applies to the v1.0 series of Open MPI only.  If you are using a later
series, <a href=\"#override-wrappers-after-v1.0\">please see this FAQ
entry</a>.

The wrapper compilers each construct command lines in the following
form:

<geshi bash>
[compiler] [xCPPFLAGS] [xFLAGS] user_arguments [xLDFLAGS] [xLIBS]
</geshi>

Where [&lt;compiler&gt;] is replaced by the default back-end compiler for each
language, and \"[x]\" is customized for each language (i.e., C, C++, F77,
and F90).

By setting appropriate environment variables, a user can
override default values used by the wrapper compilers.  The table
below lists the variables for each of the wrapper compilers; the
_Generic_ set applies to any wrapper compiler if the corresponding
wrapper-specific variable is not set.  For example, the value of
[\$OMPI_LDFLAGS] will be used with [mpicc] only if
[\$OMPI_MPICC_LDFLAGS] is not set.

<div align=\"center\">
<table  border=\"1\" cellpadding=\"5\" cellspacing=\"1\">
  <tr>
    <th> Wrapper Compiler </th>
    <th> Compiler </th>
    <th> Preprocessor Flags </th>
    <th> Compiler Flags </th>
    <th> Linker Flags </th>
    <th> Linker Library Flags </th>
  </tr>

  <!-- Generic to all Compilers -->
  <tr>
    <td> *Generic* </td>
    <td> &nbsp; </td>
    <td> [OMPI_CPPFLAGS] <br>
         [OMPI_CXXPPFLAGS] <br>
         [OMPI_F77PPFLAGS] <br>
         [OMPI_F90PPFLAGS] </td>
    <td> [OMPI_CFLAGS] <br>
         [OMPI_CXXFLAGS] <br>
         [OMPI_F77FLAGS] <br>
         [OMPI_F90FLAGS] </td>
    <td> [OMPI_LDFLAGS] </td>
    <td> [OMPI_LIBS] </td>
  </tr>

  <!-- MPICC Compiler -->
  <tr>
    <td> *mpicc* </td>
    <td> [OMPI_MPICC] </td>
    <td> [OMPI_MPICC_CPPFLAGS] </td>
    <td> [OMPI_MPICC_CFLAGS] </td>
    <td> [OMPI_MPICC_LDFLAGS] </td>
    <td> [OMPI_MPICC_LIBS] </td>
  </tr>

  <!-- MPICXX Compiler -->
  <tr>
    <td> *mpicxx* </td>
    <td> [OMPI_MPIXX] </td>
    <td> [OMPI_MPICXX_CXXPPFLAGS] </td>
    <td> [OMPI_MPICXX_CXXFLAGS] </td>
    <td> [OMPI_MPICXX_LDFLAGS] </td>
    <td> [OMPI_MPICXX_LIBS] </td>
  </tr>

  <!-- MPIF77 Compiler -->
  <tr>
    <td> *mpif77* </td>
    <td> [OMPI_MPIF77] </td>
    <td> [OMPI_MPIF77_F77PPFLAGS] </td>
    <td> [OMPI_MPIF77_F77FLAGS] </td>
    <td> [OMPI_MPIF77_LDFLAGS] </td>
    <td> [OMPI_MPIF77_LIBS] </td>
  </tr>

  <!-- MPIF90 Compiler -->
  <tr>
    <td> *mpif90* </td>
    <td> [OMPI_MPIF90] </td>
    <td> [OMPI_MPIF90_F90PPFLAGS] </td>
    <td> [OMPI_MPIF90_F90FLAGS] </td>
    <td> [OMPI_MPIF90_LDFLAGS] </td>
    <td> [OMPI_MPIF90_LIBS] </td>
  </tr>
</table>
</div>

*NOTE:* If you set a variable listed above, Open MPI will entirely
replace the default value that was originally there.  Hence, it is
advisable to only replace these values when absolutely necessary.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I override the flags specified by Open MPI's wrapper
compilers? (v1.1 series and beyond)";

$anchor[] = "override-wrappers-after-v1.0";

function w($name) {
  return "<tr>
      <th colspan=7>$name wrapper compilers</th>
  </tr>\n";
}
function c($w, $note, $proj, $compiler, $preproc, $cflags) {
  $str = "  <tr>
      <td> [$w] ";
  if (!empty($note)) {
      $str .= "<font color=\"red\"><strong>($note)</strong></font>";
  }
  $str .= "</td>
      <td> [$proj" . "_$compiler] </td>
      <td> [$proj" . "_$preproc] </td>
      <td> [$proj" . "_$cflags] </td>
      <td> [$proj" . "_LDFLAGS] </td>
      <td> [$proj" . "_LIBS] </td>
      <td> [$w-wrapper-data.txt] </td>
  </tr>\n";
  return $str;
}

$a[] = "<strong><font color=red>NOTE:</font></strong> This answer
applies to the v1.1 and later series of Open MPI only.  If you are
using the v1.0 series, <a href=\"#override-wrappers\">please see this
FAQ entry</a>.

The Open MPI wrapper compilers are driven by text files that
contain, among other things, the flags that are passed to the
underlying compiler.  These text files are generated automatically for
Open MPI and are customized for the compiler set that was selected
when Open MPI was configured; it is _not_ recommended that users edit
these files.

<blockquote>
<strong>Note that changing the underlying compiler may not work at
all.</strong> For example, C++ and Fortran compilers are notoriously
binary incompatible with each other (sometimes even within multiple
releases of the same compiler).  If you compile/install Open MPI with
C++ compiler XYZ and then use the <code>OMPI_CXX</code> environment
variable to change the <code>mpicxx</code> wrapper compiler to use the
ABC C++ compiler, your application code may not compile and/or link.
The traditional method of using multiple different compilers with Open
MPI is to install Open MPI multiple times; each installation should be
built/installed with a different compiler.  This is annoying, but it
is beyond the scope of Open MPI to be able to fix.
</blockquote>

However, there are cases where it may be necessary or desireable to
edit these files and add to or subtract from the flags that Open MPI
selected.  These files are installed in [\$pkgdatadir], which defaults
to [\$prefix/share/openmpi/&lt;wrapper_name&gt;-wrapper-data.txt].  A
few environment variables are available for run-time replacement of
the wrapper's default values (from the text files):

<div align=center>
<table border=1 cellpadding=5>
  <tr>
     <th> Wrapper Compiler </th>
     <th> Compiler </th>
     <th> Preprocessor Flags </th>
     <th> Compiler Flags </th>
     <th> Linker Flags </th>
     <th> Linker Library Flags </th>
     <th> Data File </th>
  </tr>\n " .
        w("Open MPI") .
        c("mpicc", "", "OMPI", "CC", "CPPFLAGS", "CFLAGS") .
        c("mpic++", "", "OMPI", "CXX", "CPPFLAGS", "CXXFLAGS") .
        c("mpiCC", "", "OMPI", "CXX", "CPPFLAGS", "CXXFLAGS") .
        c("mpifort", "", "OMPI", "FC", "CPPFLAGS", "FCFLAGS") .
        c("mpif77", "deprecated as of v1.7", "OMPI", "F77", "CPPFLAGS", "FFLAGS") .
        c("mpif90", "deprecated as of v1.7", "OMPI", "FC", "CPPFLAGS", "FCFLAGS") .
        w("OpenRTE") .
        c("ortecc", "", "ORTE", "CC", "CPPFLAGS", "CFLAGS") .
        c("ortec++", "", "ORTE", "CXX", "CPPFLAGS", "CXXFLAGS") .
        w("OPAL") .
        c("opalcc", "", "OPAL", "CC", "CPPFLAGS", "CFLAGS") .
        c("opalc++", "", "OPAL", "CXX", "CPPFLAGS", "CXXFLAGS") . "
</table>
</div>

Note that the values of these fields can be directly influenced by
passing flags to Open MPI's [configure] script.  The following options
are available to [configure]:

<ul>

<li> *--with-wrapper-cflags:* Extra flags to add to CFLAGS when using
[mpicc].

<li> *--with-wrapper-cxxflags:* Extra flags to add to CXXFLAGS when
using [mpiCC].

<li> *--with-wrapper-fflags:* Extra flags to add to FFLAGS when using
[mpif77] <font color=\"red\"><strong>(this option has disappeared in
Open MPI 1.7 and will not return; see <a
href=\"#mpifort-vs-mpif77-and-mpif90\">this FAQ entry</a> for more
details)</strong></font>.

<li> *--with-wrapper-fcflags:* Extra flags to add to FCFLAGS when
using [mpif90] and [mpifort].

<li> *--with-wrapper-ldflags:* Extra flags to add to LDFLAGS when
using any of the wrapper compilers.

<li> *--with-wrapper-libs:* Extra flags to add to LIBS when using any
of the wrapper compilers.

</ul>

The files cited in the above table are fairly simplistic \"key=value\"
data formats.  The following are several fields that are likely to be
interesting for end-users:

<ul>

<li> *project_short:* Prefix for all environment variables.  See
below.</li>

<li> *compiler_env:* Specifies the base name of the environment
variable that can be used to override the wrapper's underlying
compiler at run-time.  The full name of the environment variable is of
the form &lt;project_short&gt;_&lt;compiler_env&gt;; see table
above.</li>

<li> *compiler_flags_env:* Specifies the base name of the environment
variable that can be used to override the wrapper's compiler flags at
run-time.  The full name of the environment variable is of the form
&lt;project_short&gt;_&lt;compiler_flags_env&gt;; see table
above.</li>

<li> *compiler:* The executable name of the underlying compiler.</li>

<li> *extra_includes:* Relative to \$installdir, a list of directories
to also list in the preprocessor flags to find header files.</li>

<li> *preprocessor_flags:* A list of flags passed to the
preprocessor.</li>

<li> *compiler_flags:* A list of flags passed to the compiler.</li>

<li> *linker_flags:* A list of flags passed to the linker.</li>

<li> *libs:* A list of libraries passed to the linker.</li>

<li> *required_file:* If non-empty, check for the presence of this
file before continuing.  If the file is not there, the wrapper will
abort saying that the language is not supported.</li>

<li> *includedir:* Directory containing Open MPI's header files.  The
proper compiler \"include\" flag is prepended to this directory and
added into the preprocessor flags.</li>

<li> *libdir:* Directory containing Open MPI's library files.  The
proper compiler \"include\" flag is prepended to this directory and
added into the linker flags.</li>

<li> *module_option:* This field only appears in [mpif90].  It is the
flag that the Fortran 90 compiler requires to declare where module
files are located.</li>

</ul>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "How can I tell what the wrapper compiler default flags are?";

$anchor[] = "default-wrapper-compiler-flags";

$a[] = "If the corresponding environment variables are not set, the
wrappers will add [-I\$includedir] and [-I\$includedir/openmpi] (which
usually map to [\$prefix/include] and [\$prefix/include/openmpi],
respectively) to the xFLAGS area, and add [-L\$libdir] (which usually
maps to [\$prefix/lib]) to the xLDFLAGS area.

To obtain the values of the other flags, there are two main methods:

<ol>
<li> Use the [--showme] option to any wrapper compiler.  For example
(lines broken here for readability):

<geshi bash>
shell$ mpicc prog.c -o prog --showme
gcc -I/path/to/openmpi/include -I/path/to/openmpi/include/openmpi/ompi \
prog.c -o prog -L/path/to/openmpi/lib -lmpi \
-lopen-rte -lopen-pal -lutil -lnsl -ldl -Wl,--export-dynamic -lm
</geshi>

This shows a coarse-grained method for getting the entire command
line, but does not tell you what each set of flags are (xFLAGS,
xCPPFLAGS, xLDFLAGS, and xLIBS).

<li> Use the [ompi_info] command.  For example:

<geshi bash>
shell$ ompi_info --all | grep wrapper
   Wrapper extra CFLAGS:
 Wrapper extra CXXFLAGS:
   Wrapper extra FFLAGS:
  Wrapper extra FCFLAGS:
  Wrapper extra LDFLAGS:
     Wrapper extra LIBS: -lutil -lnsl -ldl -Wl,--export-dynamic -lm
</geshi>

This installation is _only_ adding options in the [xLIBS] areas of the
wrapper compilers; all other values are blank (remember: the [-I]'s
and [-L]'s are implicit).

Note that the [--parsable] option can be used to obtain
machine-parsable versions of this output.  For example:

<geshi bash>
shell$ ompi_info --all --parsable | grep wrapper:extra
option:wrapper:extra_cflags:
option:wrapper:extra_cxxflags:
option:wrapper:extra_fflags:
option:wrapper:extra_fcflags:
option:wrapper:extra_ldflags:
option:wrapper:extra_libs:-lutil -lnsl  -ldl  -Wl,--export-dynamic -lm
</geshi>
</ol>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why does \"mpicc --showme &lt;some flags&gt;\" not show any
MPI-relevant flags?";

$anchor[] = "wrapper-showme-with-no-file";

$a[] = "The output of commands similar to the following may be
somewhat surprising:

<geshi bash>
shell$ mpicc -g --showme
gcc -g
shell$
</geshi>

Where are all the MPI-related flags, such as the necessary -I, -L, and
-l flags?

The short answer is that these flags are not included in the wrapper
compiler's underlying command line unless the wrapper compiler sees a
filename argument.  Specifically (output artifically wrapped below for
readability)

<geshi bash>
shell$ mpicc -g --showme
gcc -g
shell$ mpicc -g foo.c --showme
gcc -I/opt/openmpi/include/openmpi -I/opt/openmpi/include -g foo.c
-Wl,-u,_munmap -Wl,-multiply_defined,suppress -L/opt/openmpi/lib -lmpi
-lopen-rte -lopen-pal -ldl
</geshi>

The second command had the filename \"foo.c\" in it, so the wrapper
added all the relevant flags.  This behavior is specifically to allow
behavior such as the following:

<geshi bash>
shell$ mpicc --version --showme
gcc --version
shell$ mpicc --version
i686-apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. build 5363)
Copyright (C) 2005 Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

shell$
</geshi>

That is, the wrapper compiler does not behave differently when
constructing the underlying command line if \"--showme\" is used or
not.  The _only_ difference is whether the resulting command line is
displayed or executed.

Hence, this behavior allows users to pass arguments to the underlying
compiler without intending to actually compile or link (such as
passing --version to query the underlying compiler's version).  If the
wrapper compilers added more flags in these cases, some underlying
compilers emit warnings.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Are there ways to just <em>add</em> flags to the wrapper compilers?";

$anchor[] = "adding-flags-to-wrappers";

$a[] = "Yes!

Open MPI's [configure] script allows you to add command line flags to
the wrappers on a permanent basis.  The following [configure] options
are available:

<ul>
<li> *--with-wrapper-cflags=&lt;flags&gt;:* These flags are added into
the [CFLAGS] area in the [mpicc] wrapper compiler.</li>
<li> *--with-wrapper-cxxflags=&lt;flags&gt;:* These flags are added into
the [CXXFLAGS] area in the [mpicxx] wrapper compiler.</li>
<li> *--with-wrapper-fflags=&lt;flags&gt;:* These flags are added into
the [FFLAGS] area in the [mpif77] wrapper compiler <font
color=\"red\"><strong>(this option has disappeared in Open MPI 1.7 and
will not return; see <a href=\"#mpifort-vs-mpif77-and-mpif90\">this
FAQ entry</a> for more details)</strong></font>.</li>
<li> *--with-wrapper-fcflags=&lt;flags&gt;:* These flags are added into
the [FCFLAGS] area in the [mpif90] wrapper compiler.</li>
<li> *--with-wrapper-ldflags=&lt;flags&gt;:* These flags are added into
the [LDFLAGS] area in all the wrapper compilers.</li>
<li> *--with-wrapper-libs=&lt;flags&gt;:* These flags are added into
the [LIBS] area in all the wrapper compilers.</li>
</ul>

These configure options can be handy if you have some optional
compiler/linker flags that you need both Open MPI and all MPI
applications to be compiled with.  Rather than trying to get all your
users to remember to pass the extra flags to the compiler when
compiling their applications, you can specify them with the [configure]
options shown above, thereby silently including them in the Open MPI
wrapper compilers -- your users will therefore be using the correct
flags without ever knowing it.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why don't the wrapper compilers add \"-rpath\" (or similar)
flags by default? (version v1.7.3 and earlier)";

$anchor[] = "why-no-rpath";

$a[] = "<strong><font color=\"red\">NOTE:</font></strong> Starting
with Open MPI v1.7.4, the wrapper compilers _do_ include [-rpath] by
default.  See <a
href=\"#wrapper-rpath-behavior-v1.7.4-and-beyond\">this FAQ entry for
more information</a>.

The default installation of Open MPI tries very hard to not
include any non-essential flags in the wrapper compilers.  This is the
most conservative setting and allows the greatest flexability for
end-users.  If the wrapper compilers started adding flags to support
specific features (such as run-time locations for finding the Open MPI
libraries), such flags -- no matter how useful to some portion of
users -- would almost certainly break assumptions and functionality
for other users.

As a workaround, Open MPI provides several mechanisms for users to
manually override the flags in the wrapper compilers:

<ol>
<li> First and simplest, you can add your own flags to the wrapper
compiler command line by simply listing them on the command line.  For
example:
<geshi bash>
shell$ mpicc my_mpi_application.c -o my_mpi_application -rpath /path/to/openmpi/install/lib
</geshi>
<li> Use the [--showme] options to the wrapper compilers to
dynamically see what flags the wrappers are adding, and modify them as
appropiate.  <a href=\"#cant-use-wrappers\">See this FAQ entry</a> for
more details.</li>
<li> Use environment variables to override the arguments that the
wrappers insert.  If you are using Open MPI 1.0.x, <a
href=\"#override-wrappers\">this FAQ entry</a>, otherwise see <a
href=\"#override-wrappers-after-v1.0\">this FAQ entry</a>.</li>
<li> If you are using Open MPI 1.1 or layer, you can modify text files
that provide the system-wide default flags for the wrapper compilers.
<a href=\"#override-wrappers-after-v1.0\">this FAQ entry</a> for more
details.</li>
<li> If you are using Open MPI 1.1 or layer, you can pass additional
flags in to the system-wide wrapper compiler default flags through
Open MPI's configure script.  <a
href=\"#adding-flags-to-wrappers\">See this FAQ entry</a> for more
details.</li>
</ol>

You can use one of more of these methods to insert your own flags
(such as [-rpath] or similar).";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why do the wrapper compilers add \"-rpath\" (or similar)
flags by default? (version v1.7.4 and beyond)";

$anchor[] = "wrapper-rpath-behavior-v1.7.4-and-beyond";

$a[] = "Prior to v1.7.4, the Open MPI wrapper compilers did not
automatically add [-rpath] (or similar) flags when linking MPI
application executables (for all the reasons <a
href=\"#why-no-rpath\">in this FAQ entry</a>).

Due to popular user request, Open MPI changed its policy starting with
v1.7.4: by default on supported systems, Open MPI's wrapper compilers
_do_ insert [-rpath] (or similar) flags when linking MPI applications.
You can see the exact flags added by the [-showme] functionality
described in <a href=\"#default-wrapper-compiler-flags\">this FAQ
entry</a>.

This behavior can be disabled by configuring Open MPI with the
[--disable-wrapper-rpath] CLI option.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I build 100% static MPI applications?";

$anchor[] = "static-mpi-apps";

$a[] = "Fully static linking is not for the weak, and it is not
recommended.  But it is possible, with some caveats.

<ol>

<li> You must have static libraries available for *everything* that
your program links to.  This includes Open MPI; you must have used the
[--enable-static] option to Open MPI's configure or otherwise have
available the static versions of the Open MPI libraries (note that
Open MPI static builds default to including all of its plugins *in*
its libraries -- as opposed to having each plugin in its own dynamic
shared object file.  So *all* of Open MPI's code will be contained in
the static libraries -- even what are normally contained in Open MPI's
plugins).  Note that some popular Linux libraries do not have static
versions by default (e.g., libnuma), or require additional RPMs to be
installed to get the equivalent libraries.</li>

<li> Open MPI must have been built without a memory manager.  This
means that Open MPI must have been configured with the
[--without-memory-manager] flag.  This is irrelevant on some platforms
for which Open MPI does not have a memory manager, but on some
platforms it is necessary (Linux).  It is harmless to use this flag on
platforms where Open MPI does not have a memory manager.  Not having a
memory manager means that Open MPI's [mpi_leave_pinned] behavior for
OS-bypass networks such as InfiniBand will not work.</li>

<li> On some systems (Linux), you may see linker warnings about some
files requiring dynamic libraries for functions such as [gethostname]
and [dlopen].  These are ok, but do mean that you need to have the
shared libraries installed.  You can disable all of Open MPI's
[dlopen] behavior (i.e., prevent it from trying to open any plugins)
by specifying the [--disable-dlopen] flag to Open MPI's configure
script).  This will eliminate the linker warnings about [dlopen].</li>
</ol>

For example, this is how to configure Open MPI to build static
libraries on Linux:

<geshi bash>
shell$ ./configure --without-memory-manager --without-libnuma \
  --enable-static [...your other configure arguments...]
</geshi>

Some systems may have additional constraints about their support
libraries that require additional steps to produce working 100% static
MPI applications.  For example, the [libibverbs] support library from
OpenIB / OFED has its own plugin system (which, by default, won't work
with an otherwise-static application); MPI applications need
additional compiler/linker flags to be specified to create a working
100% MPI application.  See <a href=\"#static-ofa-mpi-apps\">this
FAQ entry</a> for the details.</a>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I build 100% static OpenFabrics / OpenIB / OFED MPI
applications on Linux?";

$anchor[] = "static-ofa-mpi-apps";

$a[] = "Fully static linking is not for the weak, and it is not
recommended.  But it is possible.  First, you must read <a
href=\"#static-mpi-apps\">this FAQ entry.</a>

For an OpenFabrics / OpenIB / OFED application to be built statically,
you must have libibverbs v1.0.4 or later (v1.0.4 was released after
OFED 1.1, so if you have OFED 1.1, you will manually need to upgrade
your libibverbs).  Both libibverbs and your verbs hardware plugin must
be available in static form.

Once all of that has been setup, run the following (artificially
wrapped sample output shown below -- your output may be slightly
different):

<geshi bash>
shell$ mpicc your_app.c -o your_app --showme
gcc -I/opt/openmpi/include/openmpi \
-I/opt/openmpi/include -pthread ring.c -o ring \
-L/usr/local/ofed/lib -L/usr/local/ofed/lib64/infiniband \
-L/usr/local/ofed/lib64 -L/opt/openmpi/lib -lmpi -lopen-rte \
-lopen-pal -libverbs -lrt -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</geshi>

(or use whatever wrapper compiler is relevant -- the [--showme] flag
is the important part here)

This example shows the steps for the GNU compiler suite, but other
compilers will be similar.  This example also assumes that the
OpenFabrics / OpenIB / OFED install was rooted at [/usr/local/ofed];
some distributions install under [/usr/ofed] (or elsewhere).  Finally,
some installations use the library directory \"lib64\" while others
use \"lib\".  Adjust your directory names as appropriate.

Take the output of from the above command and run it manually to
compile and link your application, adding the following hilighted
arguments:

<geshi bash>
shell$ gcc --static -I/opt/openmpi/include/openmpi \
  -I/opt/openmpi/include -pthread ring.c -o ring \
  -L/usr/local/ofed/lib -L/usr/local/ofed/lib64/infiniband \
  -L/usr/local/ofed/lib64 -L/opt/openmpi/lib -lmpi -lopen-rte \
  -lopen-pal -Wl,--whole-archive -libverbs /usr/local/ofed/lib64/infiniband/mthca.a \
  -Wl,--no-whole-archive -lrt -Wl,--export-dynamic -lnsl -lutil \
  -lm -ldl
</geshi>

Note that the *mthca.a* file is the verbs plugin for Mellanox HCAs.
If you have an HCA from a different vendor (such as IBM or QLogic),
use the appropriate filename (look in [\$ofed_libdir/infiniband] for
verbs plugin files for your hardware).

Specifically, these added arguments do the following:

<ul>
<li> [-static]: Tell the linker to generate a static executable.</li>
<li> [-Wl,--whole-archive]: Tell the linker to include the entire
[ibverbs] library in the executable.</li>
<li> [\$ofed_root/lib64/infiniband/mthca.a]: Include the Mellanox verbs
plugin in the executable.</li>
<li> [-Wl,--no-whole-archive]: Tell the linker the return to the
default of not including entire libraries in the executable.</li>
</ul>

You can either add these arguments in manually, or you can <a
href=\"#override-wrappers-after-v1.0\">see this FAQ entry</a> to
modify the default behavior of the wrapper compilers to hide this
complexity from end users (but be aware that if modify the wrapper
compilers default behavior, *all* users will be creating static
applications!).";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why does it take soooo long to compile F90 MPI applications?";

$anchor[] = "f90-mpi-slow-compiles";

$a[] = "
<blockquote>
<font color=\"red\"><strong>NOTE:</strong></font> Starting with Open
MPI v1.7, if you are not using gfortran, buidling the Fortran 90 and
08 bindings do not suffer the same performance penalty that previous
versions incurred.  The Open MPI developers encourage all users to
upgrade to the new Fortran bindings implementation -- including the
new MPI-3 Fortran'08 bindings -- when possible.
</blockquote>

This is unfortunately due to a design flaw in the MPI F90
bindings themselves.

The answer to this question is exactly the same as it is for why it
takes so long to compile the MPI F90 bindings in the Open MPI
implementation; <a
href=\"./?category=building#f90-bindings-slow-compile\">please see
this FAQ entry</a> for the details.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I build BLACS with Open MPI?";

$anchor[] = "blacs";

$a[] = "The [blacs_install.ps] file (available from that web site)
describes how to build BLACS, so we won't repeat much of it here
(especially since it might change in future versions). These
instructions only pertain to making Open MPI work correctly with
BLACS.

After selecting the appropriate starting [Bmake.inc], make the
following changes to Sections 1, 2, and 3. The example below is from
the [Bmake.MPI-SUN4SOL2]; your [Bmake.inc] file may be different.

<geshi make>
# Section 1:
# Ensure to use MPI for the communication layer

   COMMLIB = MPI

# The MPIINCdir macro is used to link in mpif.h and
# must contain the location of Open MPI's mpif.h.
# The MPILIBdir and MPILIB macros are irrelevant
# and should be left empty.

   MPIdir = /path/to/openmpi-$ver_current
   MPILIBdir =
   MPIINCdir = $(MPIdir)/include
   MPILIB =

# Section 2:
# Set these values:

   SYSINC =
   INTFACE = -Df77IsF2C
   SENDIS =
   BUFF =
   TRANSCOMM = -DUseMpi2
   WHATMPI =
   SYSERRORS =

# Section 3:
# You may need to specify the full path to
# mpif77 / mpicc if they aren't already in
# your path.

   F77            = mpif77
   F77LOADFLAGS   =

   CC             = mpicc
   CCLOADFLAGS    =
</geshi>

The remainder of the values are fairly obvious and irrelevant to Open
MPI; you can set whatever optimization level you want, etc.

If you follow the rest of the instructions for building, BLACS will
build correctly and use Open MPI as its MPI communication layer.
";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I build ScaLAPACK with Open MPI?";

$anchor[] = "scalapack";

$a[] = "The [scalapack_install.ps] file (available from that web site)
describes how to build ScaLAPACK, so we won't repeat much of it here
(especially since it might change in future versions). These
instructions only pertain to making Open MPI work correctly with
ScaLAPACK.  These instructions assume that you have built and
installed BLACS with Open MPI.

<geshi make>
# Make sure you follow the instructions to build BLACS with Open MPI,
# and put its location in the following.

   BLACSdir      = &lt;path where you installed BLACS&gt;

# The MPI section is commented out.  Uncomment it. The wrapper
# compiler will handle SMPLIB, so make it blank. The rest are correct
# as is.

   USEMPI        = -DUsingMpiBlacs
   SMPLIB        =
   BLACSFINIT    = $(BLACSdir)/blacsF77init_MPI-$(PLAT)-$(BLACSDBGLVL).a
   BLACSCINIT    = $(BLACSdir)/blacsCinit_MPI-$(PLAT)-$(BLACSDBGLVL).a
   BLACSLIB      = $(BLACSdir)/blacs_MPI-$(PLAT)-$(BLACSDBGLVL).a
   TESTINGdir    = $(home)/TESTING

# The PVMBLACS setup needs to be commented out.

   #USEMPI        =
   #SMPLIB        = $(PVM_ROOT)/lib/$(PLAT)/libpvm3.a -lnsl -lsocket
   #BLACSFINIT    =
   #BLACSCINIT    =
   #BLACSLIB      = $(BLACSdir)/blacs_PVM-$(PLAT)-$(BLACSDBGLVL).a
   #TESTINGdir    = $(HOME)/pvm3/bin/$(PLAT)

# Make sure that the BLASLIB points to the right place.  We built this
# example on Solaris, hence the name below.  The Linux version of the
# library (as of this writing) is blas_LINUX.a.

   BLASLIB       = $(LAPACKdir)/blas_solaris.a

# You may need to specify the full path to mpif77 / mpicc if they
# aren't already in your path.

   F77            = mpif77
   F77LOADFLAGS   =

   CC             = mpicc
   CCLOADFLAGS    =
</geshi>

The remainder of the values are fairly obvious and irrelevant to Open
MPI; you can set whatever optimization level you want, etc.

If you follow the rest of the instructions for building, ScaLAPACK
will build correctly and use Open MPI as its MPI communication
layer.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I build PETSc with Open MPI?";

$anchor[] = "petsc";

$a[] = "The only special configuration that you need to build PETSc is
to ensure that Open MPI's wrapper compilers (i.e., [mpicc] and
[mpif77]) are in your [\$PATH] before running the PETSc [configure.py]
script.

PETSc should then automatically find Open MPI's wrapper compilers and
correctly build itself using Open MPI.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I build VASP with Open MPI?";

$anchor[] = "vasp";

$a[] = "The following was reported by an Open MPI user who was able to
successfully build and run VASP with Open MPI:

I just compiled the latest VASP v4.6 using Open MPI v1.2.1, ifort
v9.1, ACML v3.6.0, BLACS with patch-03 and Scalapack v1.7.5 built with
ACML.

I configured Open MPI with [--enable-static] flag.

I used the VASP supplied [makefile.linux_ifc_opt] and only corrected
the paths to the ACML, scalapack, and BLACS dirs (I didn't lower the
optimization to [-O0] for mpi.f like I suggested before).  The [-D]'s
are standard except I get a little better performance with
[-DscaLAPACK] (I tested it with out this option too):

<geshi make>
CPP    = $(CPP_) -DMPI  -DHOST=\"LinuxIFC\" -DIFC \
     -Dkind8 -DNGZhalf -DCACHE_SIZE=4000 -DPGF90 -Davoidalloc \
     -DMPI_BLOCK=2000  \
     -Duse_cray_ptr -DscaLAPACK
</geshi>

Also, Blacs and Scalapack used the [-D]'s suggested in the Open MPI FAQ.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Are other language / application bindings available for Open MPI?";

$anchor[] = "other-languages";

$a[] = "Other MPI language bindings and application-level programming
interfaces have been been written by third parties.  Here are a link
to some of the available packages:

...we used to maintain a list of links here.  But the list changes
over time; projects come, and projects go.  Your best bet these days
is simply to use Google to find MPI bindings and application-level
programming interfaces.";
