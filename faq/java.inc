<?php
$q[] = "Why is there a Java interface in Open MPI?";
$anchor[] = "java_why";

$a[] = "Because there is an increasing interest in using Java for HPC.
Also, MPI can benefit from Java because its widespread use makes it
likely to find new uses beyond traditional HPC applications.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What MPI coverage is provided by the Java interface?";
$anchor[] = "java_cover";

$a[] = "Complete MPI-3.1 coverage is provided with a few exceptions. 
The bindings for the MPI_Neighbor_alltoallw and MPI_Ineighbor_alltoallw 
functions are planned for release after v2.0.0. Also excluded are functions 
that incorporate the concepts of explicit virtual memory addressing, such
as MPI_Win_shared_query.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What releases contain the Java interface?";
$anchor[] = "java_rels";

$a[] = "The Java bindings are integrated into Open MPI starting from
the v1.7 series. Beginning with the v2.0 series, the Java bindings 
include coverage of MPI-3.1.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Is there documentation for the Java interface?";
$anchor[] = "java_docs";

$a[] = "The Java API documentation is generated at build time in
'\$prefix/share/doc/openmpi/javadoc'.

Here you have an overview of how to use the Java bindings:
<a href=\"http://blogs.cisco.com/performance/java-bindings-for-open-mpi\">
Cisco Blog for High Performance Computing Networking</a>

The following paper serves as a reference for the API, and in addition
provides details of the internal implementation to justify some of the
design decisions:
<ul>
    O. Vega-Gisbert, J. E. Roman, and J. M. Squyres. \"Design and
    implementation of Java bindings in Open MPI\". Submitted (2014).
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I build the Java interface?";
$anchor[] = "java_build";

$a[] = "In order to use Java bindings in Open MPI, they must be enabled
during configuration. If the JDK can be found in a standard location,
the simplest way to do this is:

<geshi bash>
shell$ ./configure --enable-mpi-java ...
</geshi>

Otherwise, it is necessary to indicate where the JDK binaries and headers
are located:

<geshi bash>
shell$ ./configure --enable-mpi-java --with-jdk-bindir=<foo>
                   --with-jdk-headers=<bar> ...
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I build and run my Java MPI application?";
$anchor[] = "java_app";

$a[] = "For convenience, the [mpijavac] wrapper compiler has been
provided for compiling Java-based MPI applications. It ensures that
all required MPI libraries and class paths are defined. You can see
the actual command line using the [--showme] option, if you are
interested.

Once your application has been compiled, you can run it with the
standard [mpirun] command line:

<geshi bash>
shell$ mpirun [options] java [your-java-options] my-app-class
</geshi>

For convenience, mpirun has been updated to detect the [java] command
and ensure that the required MPI libraries and class paths are defined
to support execution. You therefore do NOT need to specify the Java
library path to the MPI installation, nor the MPI classpath. Any class
path definitions required for your application should be specified
either on the command line or via the CLASSPATH environmental
variable. Note that the local directory will be added to the class
path if nothing is specified.

As always, the [java] executable, all required libraries, and your
application classes must be available on all nodes.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Where did the Java interface come from?";
$anchor[] = "java_origin";

$a[] = "Initially we based the Open MPI interface on the mpiJava code
originally developed at Syracuse and Indiana Universities, and
subsequently maintained by HLRS. However, we later totally rewrote the
Java bindings and extended the API to cover MPI-3 functionality.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does the Java interface impact performance of my non-Java application?";
$anchor[] = "java_impact";

$a[] = "The Java interface in Open MPI is logically separated from, and
completely transparent to, all other Open MPI users and have zero
performance impact on the rest of the code/bindings.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does MPI perform under Java?";
$anchor[] = "java_perform";

$a[] = "We have tested the Java bindings against some benchmarks and
the results are satisfactory (having a slight overhead with respect to
C/Fortran code).

We suggest users experiencing performance problems to contact the
<a href=\"https://www.open-mpi.org/community/lists/ompi.php\">
OMPI users mailing list</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What are the known limitations of the Java interface?";
$anchor[] = "java_limitations";

$a[] = "There exist issues with Intel Truescale (PSM) and Omnipath
(PSM2) interconnects involving Java. The problems definitely exist in
PSM v1.16, and PSM2 v10.2; we have not tested previous versions.
As of November 2016, there is not yet a PSM/PSM2 release that completely
fixes the issue. Intel is working on the issue, and will update this 
FAQ when more information is available.

The following [mpirun] command options will disable PSM/PSM2:

<geshi bash>
shell$ mpirun [other options] --mca mtl ^psm java [your-java-options] my-app-class
</geshi>

<geshi bash>
shell$ mpirun [other options] --mca mtl ^psm2 java [your-java-options] my-app-class
</geshi>";
