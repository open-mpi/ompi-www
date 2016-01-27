<?php

include_once("$topdir/software/netloc/current/version.inc");

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I build netloc?";

$anchor[] = "easy-build";

$a[] = "
<b>The following only applies to netloc v0.5 since next releases will
be included in hwloc releases</b>.

In general, all you need to do is expand the tarball, run the provided
[configure] script, and then run \"[make all install]\".  For example:

<geshi bash>
shell$ gunzip -c netloc-$ver_current.tar.gz | tar xf -
shell$ cd netloc-$ver_current
shell$ ./configure --prefix=/usr/local
<...lots of output...>
shell$ make all install
</geshi>

Note that the [configure] script supports a lot of different command
line options.  For example, the [--prefix] option in the above example
tells netloc to install under the directory [/usr/local/].

Consult the <a
href=\"https://github.com/open-mpi/netloc/blob/master/README\">[README]</a>
file in the netloc tarball and the output of \"[configure --help]\" for
specific instructions regarding netloc's [configure] command line options.
";

/////////////////////////////////////////////////////////////////////////

$q[] = "What version of hwloc does netloc require?";

$anchor[] = "build-hwloc";

$a[] = "
<b>The following only applies to netloc v0.5 since next releases will
be included in hwloc releases</b>.

netloc requires a <a href=\"http://www.open-mpi.org/projects/hwloc/\">hwloc</a>
version of 1.4.2 or later. There are some addtional features in hwloc 1.8 and
later that netloc can take advantage of as well (e.g., topology compression).
";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is Jansson? Why does netloc require it?";

$anchor[] = "build-jansson";

$a[] = "
<a href=\"http://www.digip.org/jansson/\">Jansson</a> is C library for managing
JSON encoded data. Internally, netloc uses Jansson to store metadata and the
network topology.

netloc requires Jansson version 2.3 or later. The [--with-jansson(=DIR)]
configure option allows you to specifiy the location of the Jansson
library. The [(=DIR)] part means that specifying the directory is optional.
";

/////////////////////////////////////////////////////////////////////////
