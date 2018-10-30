<?php

$vampir_is_gone = "<p><strong><font
color=\"red\">NOTE:</font></strong> VampirTrace was only included Open
MPI from v1.3.x through v1.10.x.  It was removed in the v2.0.0 release
of Open MPI.  This FAQ question pertains to the versions of Open MPI
that contained VampirTrace.</p>";

$q[] = "What is VampirTrace?";
$anchor[] = "vt_what";

$a[] = "$vampir_is_gone

VampirTrace is a program tracing package that can collect a
very fine grained event trace of your sequential or parallel
program. The traces can be visualized by the Vampir tool and a number
of other tools that read the Open Trace Format (OTF).

Tracing is interesting for performance analysis and optimization of
parallel and HPC (High Performance Computing) applications in general
and MPI programs in particular. In fact, that's where the letters
'mpi' in Vampir come from. Therefore, it is integrated into Open MPI
for convenience.

VampirTrace is included in Open MPI v1.3 and later.

VampirTrace consists of two main components: Firstly, the
instrumentation part which slightly modifies the target program in
order to be notified about run-time events of interest. Simply replace
the compiler wrappers to activate it: [mpicc] to [mpicc-vt], [mpicxx]
to [mpicxx-vt] and so on (note that the [*-vt] variants of the wrapper
compilers are unavailable before Open MPI v1.3).  Secondly, the
run-time measurement part is responsible for data collection.  This
can only be effective when the first part was performed -- otherwise
there will be *no* effect on your program *at all*.

VampirTrace has been developed at ZIH, TU Dresden in collaboration with
the KOJAK project from JSC/FZ Juelich and is available as open source
software under BSD license, see [ompi/contrib/vt/vt/COPYING].

The software is also available as a stand-alone source code
package. The latest version can always be found at " .  "<a href=
\"http://www.tu-dresden.de/zih/vampirtrace/\" >" .
"http://www.tu-dresden.de/zih/vampirtrace/</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Where can I find the complete documentation of VampirTrace?";
$anchor[] = "vt_docu";

$a[] = "$vampir_is_gone

A complete documentation of VampirTrace comes with the Open
MPI software package as PDF and HTML (in Open MPI v1.3 and later). You
can find it in the Open MPI source tree [ompi/contrib/vt/vt/doc/] or
after installing Open MPI in
[\$(install-prefix)/share/vampirtrace/doc/].";

/////////////////////////////////////////////////////////////////////////

$q[] = "How to instrument my MPI application with VampirTrace?";
$anchor[] = "vt_instrument";

$a[] = "$vampir_is_gone

All the necessary instrumentation of user functions as well as
MPI and OpenMP events is handled by special compiler wrappers (
[mpicc-vt, mpicxx-vt, mpif77-vt, mpif90-vt] ). Unlike the normal
wrappers ( [mpicc] and friends) these wrappers call VampirTrace's
compiler wrappers ( [vtcc, vtcxx, vtf77, vtf90] ) instead of the
native compilers. The [vt*] wrappers use underlying platform compilers
to perform the necessary instrumentation of the program and link the
suitable VampirTrace library.

Original:
<geshi bash>
shell$ mpicc -c hello.c -o hello
</geshi>

With instrumentation:
<geshi bash>
shell$ mpicc-vt -c hello.c -o hello
</geshi>

For your application, simply change the compiler definitions in your
Makefile(s):
<geshi make>
# original definitions in Makefile
## CC=mpicc
## CXX=mpicxx
## F90=mpif90

# replace with
CC=mpicc-vt
CXX=mpicxx-vt
F90=mpif90-vt
</geshi>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does VampirTrace cause overhead to my application?";
$anchor[] = "vt_overhead";
$a[] = "$vampir_is_gone

By using the default MPI compiler wrappers ( [mpicc] etc.) your
application will be run without any changes at all. The VampirTrace
compiler wrappers ( [mpicc-vt] etc.) link the VampirTrace library which intercepts
MPI calls and some user level function/subroutine calls. This causes a certain
amount of runtime overhead to applications. Usually, the overhead is reasonably
small (0.x% - 5%) and VampirTrace by default enables precautions to avoid
excessive overhead. However, it can be configured to produce very substantial
overhead using non-default settings.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How can I change the underlying compiler of the mpi*-vt wrappers?";
$anchor[] = "vt_change";

$a[] = "$vampir_is_gone

Unlike the standard MPI compiler wrappers ( [mpicc] etc.) the
environment variables [OMPI_CC, OMPI_CXX, OMPI_F77, OMPI_F90] do not
affect the VampirTrace compiler wrappers. Please, use the environment
variables [VT_CC, VT_CXX, VT_F77, VT_F90] instead. In addition, you
can set the compiler with the wrapper's option [-vt:[cc|cxx|f77|f90]]

The following two are equivalent, setting the underlying compiler to
gcc:

<geshi bash>
shell$ VT_CC=gcc mpicc-vt -c hello.c -o hello
shell$ mpicc-vt -vt:cc gcc -c hello.c -o hello
</geshi>

Futhermore, you can modify the default settings in
[<install-prefix>/share/openmpi/mpi*-wrapper-data.txt].";

/////////////////////////////////////////////////////////////////////////

$q[] = "How can I pass VampirTrace related configure options through the
Open MPI configure?";
$anchor[] = "vt_options";

$a[] = "$vampir_is_gone

To give options to the VampirTrace configure script you can add these
to the configure option [--with-contrib-vt-flags].

The following example passes the options [--with-papi-lib-dir] and [--with-papi-lib]
to the VampirTrace configure script to specify the location and the name of the PAPI
library:

<geshi bash>
shell$ ./configure --with-contrib-vt-flags='--with-papi-lib-dir=/usr/lib64 --with-papi-lib=-lpapi64' ...
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How to disable the integrated VampirTrace, completely?";
$anchor[] = "vt_disable";

$a[] = "$vampir_is_gone

By default, the VampirTrace part of Open MPI will be built and
installed.  If you would like to disable building and installing of
VampirTrace add the value [vt] to the configure option
[--enable-contrib-no-build].

<geshi bash>
shell$ ./configure --enable-contrib-no-build=vt ...
</geshi>";

