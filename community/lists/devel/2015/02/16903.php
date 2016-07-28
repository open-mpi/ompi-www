<?
$subject_val = "[OMPI devel] Master build failure w/ Solaris Studio 12.3 on Linux/x86-64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 22:35:29 2015" -->
<!-- isoreceived="20150203033529" -->
<!-- sent="Mon, 2 Feb 2015 19:35:27 -0800" -->
<!-- isosent="20150203033527" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Master build failure w/ Solaris Studio 12.3 on Linux/x86-64" -->
<!-- id="CAAvDA14vT3dwL6YwHO0AS9PQP6T0QQcSTYVSu20d=OgSu2gXOw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Master build failure w/ Solaris Studio 12.3 on Linux/x86-64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 22:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI devel] Build failure on OpenBSD (deja vu)"</a>
<li><strong>Previous message:</strong> <a href="16902.php">Paul Hargrove: "[OMPI devel] Master assert failure on Linux/PPC64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a Linux/x86-64 system I am using the Solaris Studio 12.3 compilers.
<br>
I have configured the current master tarball as follows:
<br>
&nbsp;&nbsp;--prefix=... --enable-debug \
<br>
&nbsp;&nbsp;CC=cc CXX=CC FC=f90 \
<br>
&nbsp;&nbsp;CXXFLAGS='-L/lib/x86_64-linux-gnu -L/usr/lib/x86_64-linux-gnu
<br>
-library=stlport4' \
<br>
&nbsp;&nbsp;--with-wrapper-cxxflags='-L/lib/x86_64-linux-gnu
<br>
-L/usr/lib/x86_64-linux-gnu -library=stlport4' \
<br>
&nbsp;&nbsp;--enable-mpi-cxx --enable-mpi-java
<br>
<p>When building Open MPI I see (from &quot;make V=1&quot;):
<br>
<p>libtool: compile:  cc -DHAVE_CONFIG_H -I.
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63/opal/mca/common/libfabric
<br>
-I../../../../opal/include -I../../../../ompi/include
<br>
-I../../../../oshmem/include
<br>
-I../../../../opal/mca/common/libfabric/libfabric
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/include
<br>
-D_GNU_SOURCE
<br>
-DSYSCONFDIR=\&quot;/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/INST/etc\&quot;
<br>
-DRDMADIR=\&quot;/tmp\&quot;
<br>
-DEXTDIR=\&quot;/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/INST/lib/openmpi\&quot;
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63
<br>
-I../../../..
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63/opal/include
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63/orte/include
<br>
-I../../../../orte/include
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63/ompi/include
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63/oshmem/include
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/BLD/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63/opal/mca/event/libevent2022/libevent
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63/opal/mca/event/libevent2022/libevent/include
<br>
-I/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-g -mt -c
<br>
/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/src/fabric.c
<br>
&nbsp;-KPIC -DPIC -o libfabric/src/.libs/libmca_common_libfabric_la-fabric.o
<br>
Bad seg kind in yFinishObjectCode()
<br>
cc: acomp failed for
<br>
/home/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u3/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/src/fabric.c
<br>
<p>I have no clue where yFinishObjectCode() comes from.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16903/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI devel] Build failure on OpenBSD (deja vu)"</a>
<li><strong>Previous message:</strong> <a href="16902.php">Paul Hargrove: "[OMPI devel] Master assert failure on Linux/PPC64"</a>
<!-- nextthread="start" -->
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
