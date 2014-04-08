<?php
$topdir = "../../..";
$title = "mpif77(1) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       mpif77 -- Open MPI Fortran 77 wrapper compiler

</PRE>
<H2>SYNTAX</H2><PRE>
       mpif77 [-showme|-showme:compile|-showme:link] ...

</PRE>
<H2>OPTIONS</H2><PRE>
       -showme
              Do  not  invoke the underlying compiler.  Instead, show the com-
              mand line that would be executed to compile the program.   <B>NOTE:</B>
              If  a  non-filename  argument is passed on the command line, the
              <I>-showme</I> option will <I>not</I> display any additional flags.  For exam-
              ple,  both  "mpif77  --showme" and "mpif77 --showme my_source.c"
              will show all the wrapper-supplied flags.  But  "mpif77  -showme
              -v" will only show the underlying compiler name and "-v".

       -showme:compile
              Do not invoke the underlying Fortran 77 compiler.  Instead, show
              the compiler flags that would be supplied to the Fortran 77 com-
              piler.

       -showme:link
              Do not invoke the underlying Fortran 77 compiler.  Instead, show
              the linker flags that would be supplied to the Fortran  77  com-
              piler.

       See  the  man  page for your underlying compiler for other options that
       can be passed through mpif77

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Conceptually, the role of these commands is quite simple: transparently
       add  relevant compiler and linker flags to the user's command line that
       are necessary to compile / link Open MPI programs, and then invoke  the
       underlying compiler to actually perform the command.

       As such, these commands are frequently referred to as "wrapper" compil-
       ers because they do not actually compile  or  link  applications  them-
       selves;  they  only  add  in command line flags and invoke the back-end
       compiler.

   <B>Background</B>
       Open MPI is comprised of three software  layers:  OPAL  (Open  Portable
       Access  Layer),  ORTE (Open Run-Time Environment), and OMPI (Open MPI).
       There are wrapper compilers for each layer; each layer's  wrapper  only
       links  in  the  libraries  relevant for that layer.  Specifically, each
       layer provides the following wrapper compilers:

       OPAL
           <I>opalcc</I> and <I>opalc++</I>

       ORTE
           <I>ortecc</I> and <I>ortec++</I>

       OMPI
           <I>mpicc</I>, <I>mpic++</I>, <I>mpicxx</I>, <I>mpiCC</I> (only on  systems  with  case-senstive
           file  systems),  <I>mpif77</I>, and <I>mpif90</I>.  Note that <I>mpic++</I>, <I>mpicxx</I>, and
           <I>mpiCC</I> all invoke the same underlying C++  compiler  with  the  same
           options.   All  are provided as compatibility with other MPI imple-

       piler.   Translation of an Open MPI program requires the linkage of the
       Open MPI-specific libraries which may not reside in one of the standard
       search  directories  of <B>ld(1)</B>.  It also often requires the inclusion of
       header files what may also not be found in a standard location.

       <I>mpif77</I> passes its arguments to the underlying Fortran 77 compiler along
       with the -I, -L and -l options required by Open MPI programs.

       The  Open  MPI  Team  <I>strongly</I>  encourages  using the wrapper compilers
       instead of attempting to link to the Open MPI libraries manually.  This
       allows  the specific implementation of Open MPI to change without forc-
       ing changes to linker directives in users' Makefiles.  Indeed, the spe-
       cific  set of flags and libraries used by the wrapper compilers depends
       on how Open MPI was configured and built; the values can change between
       different installations of the same version of Open MPI.

       Indeed, since the wrappers are simply thin shells on top of an underly-
       ing compiler, there are very, very few compelling reasons  <I>not</I>  to  use
       <I>mpif77</I>.   When  it  is  not  possible to use the wrappers directly, the
       <I>-showme:compile</I> and <I>-showme:link</I> options should be  used  to  determine
       what flags the wrappers would have used.  For example:

       shell$ cc -c file1.c `mpicc -showme:compile`

       shell$ cc -c file2.c `mpicc -showme:compile`

       shell$ cc file1.o file2.o `mpicc -showme:link` -o my_mpi_program

</PRE>
<H2>NOTES</H2><PRE>
       It is possible to make the wrapper compilers multi-lib aware.  That is,
       the libraries and includes specified may differ based on  the  compiler
       flags  specified  (for example, with the GNU compilers on Linux, a dif-
       ferent library path may be used if  -m32  is  seen  versus  -m64  being
       seen).   This  is not the default behavior in a standard build, but can
       be activated (for example, in a binary package providing both 32 and 64
       bit support).  More information can be found at:

         https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264

</PRE>
<H2>FILES</H2><PRE>
       The  string  that  the  wrapper  compilers insert into the command line
       before invoking the underlying compiler are stored in a text file  cre-
       ated  by  Open  MPI  and installed to <I>$pkgdata/mpif77-wrapper-data.txt</I>,
       where <I>$pkgdata</I> is typically <I>$prefix/share/openmpi</I>, and <I>$prefix</I>  is  the
       top installation directory of Open MPI.

       It  is  rarely  necessary  to edit this file, but it can be examined to
       gain insight into what flags the wrappers are placing  on  the  command
       line.

</PRE>
<H2>ENVIRONMENT VARIABLES</H2><PRE>
       By default, the wrappers use the compilers that were selected when Open
       MPI was configured.  These compilers were either found automatically by
       Open  MPI's "configure" script, or were selected by the user in the CC,
       CXX, F77,  and/or  FC  environment  variables  before  "configure"  was
       invoked.   Additionally,  other  arguments specific to the compiler may
       have been selected by configure.

              Flags added when invoking the preprocessor (C or C++)

       LDFLAGS
              Flags added when invoking the linker (C, C++, or Fortran)

       LIBS   Libraries added when invoking the linker (C, C++, or Fortran)

       CC     C compiler

       CFLAGS C compiler flags

       CXX    C++ compiler

       CXXFLAGS
              C++ compiler flags

       F77    Fortran 77 compiler

       FFLAGS Fortran 77 compiler flags

       FC     Fortran 90 compiler

       FCFLAGS
              Fortran 90 compiler flags

1.3.4                            Nov 11, 2009                        <B>mpif77(1)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
