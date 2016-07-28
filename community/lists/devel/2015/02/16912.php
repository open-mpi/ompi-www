<?
$subject_val = "[OMPI devel] Master build broken libfabrics + PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 02:04:27 2015" -->
<!-- isoreceived="20150203070427" -->
<!-- sent="Mon, 2 Feb 2015 23:04:24 -0800" -->
<!-- isosent="20150203070424" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Master build broken libfabrics + PGI" -->
<!-- id="CAAvDA14DU_5MPaia0AFoRRkYEn1gXGE9cjxp387nFU-YNh48fA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Master build broken libfabrics + PGI<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 02:04:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16913.php">Paul Hargrove: "Re: [OMPI devel] Master hangs in opal_LIFO test"</a>
<li><strong>Previous message:</strong> <a href="16911.php">Paul Hargrove: "[OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16954.php">Paul Hargrove: "Re: [OMPI devel] Master build broken libfabrics + PGI"</a>
<li><strong>Reply:</strong> <a href="16954.php">Paul Hargrove: "Re: [OMPI devel] Master build broken libfabrics + PGI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a Linux/x86_64 system with PGI-14.3 I have configured a current master
<br>
tarball with the following:
<br>
&nbsp;&nbsp;&nbsp;--prefix=... --enable-debug CC=pgcc CXX=pgCC FC=pgfortran
<br>
<p>I see &quot;make V=1&quot; fail as shown below.
<br>
This does NOT occur with GNU or Intel compilers on the same system.
<br>
<p>Initial guess is mis-ordered includes.
<br>
<p>-Paul
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=pgcc /bin/sh
<br>
../../../../../openmpi-dev-803-g5919b63/config/depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool  --tag=CC   --mode=compile pgcc
<br>
-DHAVE_CONFIG_H -I. -I../../../../../openm
<br>
pi-dev-803-g5919b63/opal/mca/common/libfabric -I../../../../opal/include
<br>
-I../../../../ompi/include -I../../..
<br>
/../oshmem/include -I../../../../opal/mca/common/libfabric/libfabric
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwl
<br>
oc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
<br>
&nbsp;-I/scratch/hargr
<br>
ove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric
<br>
-I/scratch/hargrove/openmpi-dev-803-g5919b63/
<br>
opal/mca/common/libfabric/libfabric/include -D_GNU_SOURCE
<br>
-DSYSCONFDIR=\&quot;/scratch/hargrove/inst/etc\&quot; -DRDMADI
<br>
R=\&quot;/tmp\&quot; -DEXTDIR=\&quot;/scratch/hargrove/inst/lib/openmpi\&quot;
<br>
-I../../../../../openmpi-dev-803-g5919b63 -I../../.
<br>
./.. -I../../../../../openmpi-dev-803-g5919b63/opal/include
<br>
-I../../../../../openmpi-dev-803-g5919b63/orte/inc
<br>
lude -I../../../../orte/include
<br>
-I../../../../../openmpi-dev-803-g5919b63/ompi/include
<br>
-I../../../../../openmp
<br>
i-dev-803-g5919b63/oshmem/include
<br>
-I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/hwloc/hwloc191/hwloc
<br>
/include -I/scratch/hargrove/bld/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/scratch/hargrove/openmpi-dev-803-g59
<br>
19b63/opal/mca/event/libevent2022/libevent
<br>
-I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/event/libeven
<br>
t2022/libevent/include
<br>
-I/scratch/hargrove/bld/opal/mca/event/libevent2022/libevent/include  -g -c
<br>
-o libfabric/src/libmca_common_libfabric_la-fi_tostr.lo `test -f
<br>
'libfabric/src/fi_tostr.c' || echo
<br>
'../../../../../openmpi-dev-803-g5919b63/opal/mca/common/libfabric/'`libfabric/src/fi_tostr.c
<br>
libtool: compile:  pgcc -DHAVE_CONFIG_H -I.
<br>
-I../../../../../openmpi-dev-803-g5919b63/opal/mca/common/libfabric
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
-I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric
<br>
-I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/include
<br>
-D_GNU_SOURCE -DSYSCONFDIR=\&quot;/scratch/hargrove/inst/etc\&quot;
<br>
-DRDMADIR=\&quot;/tmp\&quot; -DEXTDIR=\&quot;/scratch/hargrove/inst/lib/openmpi\&quot;
<br>
-I../../../../../openmpi-dev-803-g5919b63 -I../../../..
<br>
-I../../../../../openmpi-dev-803-g5919b63/opal/include
<br>
-I../../../../../openmpi-dev-803-g5919b63/orte/include
<br>
-I../../../../orte/include
<br>
-I../../../../../openmpi-dev-803-g5919b63/ompi/include
<br>
-I../../../../../openmpi-dev-803-g5919b63/oshmem/include
<br>
-I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/scratch/hargrove/bld/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/event/libevent2022/libevent
<br>
-I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/event/libevent2022/libevent/include
<br>
-I/scratch/hargrove/bld/opal/mca/event/libevent2022/libevent/include -g -c
<br>
../../../../../openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/src/fi_tostr.c
<br>
-MD  -fpic -DPIC -o
<br>
libfabric/src/.libs/libmca_common_libfabric_la-fi_tostr.o
<br>
PGC-S-0040-Illegal use of symbol, pthread_mutex_t
<br>
(/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/include/rdma/fi_eq.h:
<br>
75)
<br>
PGC-W-0156-Type not specified, 'int' assumed
<br>
(/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/include/rdma/fi_eq.h:
<br>
75)
<br>
PGC-S-0040-Illegal use of symbol, pthread_cond_t
<br>
(/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/include/rdma/fi_eq.h:
<br>
76)
<br>
PGC-W-0156-Type not specified, 'int' assumed
<br>
(/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/include/rdma/fi_eq.h:
<br>
76)
<br>
PGC-S-0043-Redefinition of symbol, pthread_mutex_t
<br>
(/usr/include/x86_64-linux-gnu/bits/pthreadtypes.h: 104)
<br>
PGC-S-0043-Redefinition of symbol, pthread_cond_t
<br>
(/usr/include/x86_64-linux-gnu/bits/pthreadtypes.h: 130)
<br>
PGC/x86-64 Linux 14.3-0: compilation completed with severe errors
<br>
make[2]: *** [libfabric/src/libmca_common_libfabric_la-fi_tostr.lo] Error 1
<br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16913.php">Paul Hargrove: "Re: [OMPI devel] Master hangs in opal_LIFO test"</a>
<li><strong>Previous message:</strong> <a href="16911.php">Paul Hargrove: "[OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16954.php">Paul Hargrove: "Re: [OMPI devel] Master build broken libfabrics + PGI"</a>
<li><strong>Reply:</strong> <a href="16954.php">Paul Hargrove: "Re: [OMPI devel] Master build broken libfabrics + PGI"</a>
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
