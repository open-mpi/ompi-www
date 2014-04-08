<?php
$q[] = "Why is there a Java interface in Open MPI?";
$anchor[] = "java_why";

$a[] = "The Java interface is provided in Open MPI on a provisional
basis. It is not part of the current or any proposed MPI
standard. Continued inclusion of the Java interface is contingent upon
active user interest and continued developer support.

The decision to add a Java interface to Open MPI was motivated by a
request from the Hadoop community. Hadoop is a Java-based environment
for processing extremely large data sets. Modeled on the Google
enterprise system, it has evolved into its own rapidly growing
open-source community.

Although executed in parallel, Hadoop processes are independent
and thus would only possibly use MPI as a base for efficient
messaging. Of greater interest, however, is the ability to
add MPI-based follow-on processing to a Hadoop map-reduce
operation. Since Hadoop map-reduce is typically done in Java,
any subsequent MPI operations would best be done in that language.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What MPI coverage is provided by the Java interface?";
$anchor[] = "java_cover";

$a[] = "The Java interface currently covers all MPI 1.2 APIs. Work to
extend the interface to the full MPI-3 specification is on-going.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What releases contain the Java interface?";
$anchor[] = "java_rels";

$a[] = "The Java interface is included in the Open MPI developer code
trunk. Nightly snapshots of that code repository are available as
tarballs from our web site at <a
href=\"http://www.open-mpi.org/nightly/trunk/index.php\" >Nightly
Snapshots</a>.

There was discussion of including the Java interface in an upcoming
release, but as of January 2013, the development community has decided
that it is not yet ready, and is therefore only available in the
development trunk.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Is there documentation for the Java interface?";
$anchor[] = "java_docs";

$a[] = "The Java interface documentation is included in the Open MPI
man pages. Please note that we are working to complete this
documentation - if you don't see a specific interface documented, it
may just be that we haven't gotten to it yet.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I build the Java interface?";
$anchor[] = "java_build";

$a[] = "The Java interface will build only if it is explicitly
requested and the required JDK support is found.  Java support
requires that Open MPI be built at least with shared libraries (i.e.,
--enable-shared) - any additional options are fine and will not
conflict. Note that this is the default for Open MPI, so you don't
have to explicitly add the option.

If the JDK is not in a place where we automatically find it, you can
specify the location. Two
options are available for this purpose:

<faqcode>
--with-jdk-bindir=[the location of javac and javah]
--with-jdk-headers=[the directory containing jni.h]
</faqcode>

For simplicity, typical configurations are provided in platform files
under contrib/platform/hadoop. These will meet the needs of most
users, or at least provide a starting point for your own custom
configuration.

In summary, therefore, you can configure the system using the
following Java-related options:

<faqcode>
./configure --with-platform=contrib/platform/hadoop/[your-platform] ...
</faqcode>

or

<faqcode>
./configure --enable-mpi-java --with-jdk-bindir=foo --with-jdk-headers=bar ...
</faqcode>

or simply

<faqcode>
./configure --enable-mpi-java ...
</faqcode>

if the JDK is in a standard place that we automatically find.";

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

<faqcode>
shell$ mpirun [options] java [your-java-options] my-app-class
</faqcode>

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

$a[] = "We have based the Open MPI interface on the mpiJava code
originally developed at Syracuse and Indiana Universities, and
subsequently maintained by HLRS. Documentation on their use can be
found in the Publications section of our FAQ site at <a
href=\"http://www.open-mpi.org/papers/mpi-java-presentation/\" >MPI
Java Tutorial</a> and at <a
href=\"http://www.open-mpi.org/papers/mpi-java-spec/\" >MPI Java
Spec</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does the Java interface impact performance of my non-Java application?";
$anchor[] = "java_impact";

$a[] = "The Java interface in Open MPI is logically separated from,and
completely transparent to, all other Open MPI users and have zero
performance impact on the rest of the code/bindings.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does MPI perform under Java?";
$anchor[] = "java_perform";

$a[] = "We are currently quantifying the performance of MPI-based Java
applications. Historically, Java-based applications have exhibited a
roughly 20% reduction in performance when compared to the C-based
equivalent. However, Java has improved significantly over the years
and we expect this difference to be less that previously observed.";
