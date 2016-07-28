<?
$subject_val = "Re: [OMPI devel] Master build broken libfabrics + PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 19:01:03 2015" -->
<!-- isoreceived="20150207000103" -->
<!-- sent="Fri, 6 Feb 2015 16:01:00 -0800" -->
<!-- isosent="20150207000100" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master build broken libfabrics + PGI" -->
<!-- id="CAAvDA167LCkwCqXxdP26OgWXj15NO1PgDFPGW9625Jpwa4-Wzg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA14DU_5MPaia0AFoRRkYEn1gXGE9cjxp387nFU-YNh48fA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master build broken libfabrics + PGI<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 19:01:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16955.php">Paul Hargrove: "[OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Previous message:</strong> <a href="16953.php">Dave Turner: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="16912.php">Paul Hargrove: "[OMPI devel] Master build broken libfabrics + PGI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With a newer master tarball I still see PGI + libfabrics failing, but with
<br>
different errors this time.  Relevant output from &quot;make V=1&quot; appears below.
<br>
<p>Though the build below was with pgi-10.9, I see the same problem with other
<br>
PGI compiler versions (at least 11.9 as well) on the same system (and with
<br>
identical configure arguments):
<br>
&nbsp;&nbsp;&nbsp;--prefix=... CC=pgcc CXX=pgCC
<br>
FC=pgf90 --with-tm=/usr/syscom/opt/torque/4.1.1 --enable-mpi-fortran=mpifh
<br>
<p>-Paul
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool  --tag=CC   --mode=compile pgcc
<br>
-DHAVE_CONFIG_H -I.
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric
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
&nbsp;-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include
<br>
-D_GNU_SOURCE
<br>
-DSYSCONFDIR=\&quot;/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/INST/etc\&quot;
<br>
-DRDMADIR=\&quot;/tmp\&quot;
<br>
-DEXTDIR=\&quot;/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/INST/lib/openmpi\&quot;
<br>
-DENABLE_DEBUG=0 '-DVERSION=&quot;embedded libfabric
<br>
de8444c9771ab9022d952a27134e44e5d8a5d722&quot;' '-DPACKAGE=&quot;embedded libfabric
<br>
de8444c9771ab9022d952a27134e44e5d8a5d722&quot;'
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa
<br>
-I../../../..
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/orte/include
<br>
-I../../../../orte/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/ompi/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/oshmem/include
<br>
&nbsp;-D_REENTRANT
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/BLD/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/event/libevent2022/libevent
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/event/libevent2022/libevent/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/BLD/opal/mca/event/libevent2022/libevent/include
<br>
&nbsp;-O -DNDEBUG -c -o libfabric/src/libmca_common_libfabric_la-enosys.lo `test
<br>
-f 'libfabric/src/enosys.c' || echo
<br>
'/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/'`libfabric/src/enosys.c
<br>
libtool: compile:  pgcc -DHAVE_CONFIG_H -I.
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric
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
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include
<br>
-D_GNU_SOURCE
<br>
-DSYSCONFDIR=\&quot;/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/INST/etc\&quot;
<br>
-DRDMADIR=\&quot;/tmp\&quot;
<br>
-DEXTDIR=\&quot;/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/INST/lib/openmpi\&quot;
<br>
-DENABLE_DEBUG=0 &quot;-DVERSION=\&quot;embedded libfabric
<br>
de8444c9771ab9022d952a27134e44e5d8a5d722\&quot;&quot; &quot;-DPACKAGE=\&quot;embedded libfabric
<br>
de8444c9771ab9022d952a27134e44e5d8a5d722\&quot;&quot;
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa
<br>
-I../../../..
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/orte/include
<br>
-I../../../../orte/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/ompi/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/oshmem/include
<br>
-D_REENTRANT
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/BLD/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/event/libevent2022/libevent
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/event/libevent2022/libevent/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-O -DNDEBUG -c
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/src/enosys.c
<br>
-MD  -fpic -DPIC -o libfabric/src/.libs/libmca_common_libfabric_la-enosys.o
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux
<br>
-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fabric.h:
<br>
380)PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux
<br>
-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fabric.h:
<br>
405)PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux
<br>
-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fabric.h:
<br>
411)PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux
<br>
-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fabric.h:
<br>
420)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fi_domain.h:
<br>
176)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fi_domain.h:
<br>
176)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fi_domain.h:
<br>
228)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fi_domain.h:
<br>
228)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fi_domain.h:
<br>
241)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fi_domain.h:
<br>
241)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fi_endpoint.h:
<br>
167)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fi_endpoint.h:
<br>
167)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fi_endpoint.h:
<br>
172)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fi_endpoint.h:
<br>
172)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fi_endpoint.h:
<br>
177)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/include/rdma/fi_endpoint.h:
<br>
177)
<br>
PGC-S-0137-Incompatible prototype declaration for function fi_no_bind
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/src/enosys.c:
<br>
41)
<br>
PGC-S-0137-Incompatible prototype declaration for function fi_no_control
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/src/enosys.c:
<br>
45)
<br>
PGC-S-0137-Incompatible prototype declaration for function fi_no_ops_open
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-10.9/openmpi-dev-845-ga3275aa/opal/mca/common/libfabric/libfabric/src/enosys.c:
<br>
50)
<br>
PGC/x86-64 Linux 10.9-0: compilation completed with severe errors
<br>
make[2]: *** [libfabric/src/libmca_common_libfabric_la-enosys.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/global/scratch2/sd/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-10.9/BLD/opal/mca/common/libfabric'
<br>
<p><p>On Mon, Feb 2, 2015 at 11:04 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On a Linux/x86_64 system with PGI-14.3 I have configured a current master
</span><br>
<span class="quotelev1">&gt; tarball with the following:
</span><br>
<span class="quotelev1">&gt;    --prefix=... --enable-debug CC=pgcc CXX=pgCC FC=pgfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see &quot;make V=1&quot; fail as shown below.
</span><br>
<span class="quotelev1">&gt; This does NOT occur with GNU or Intel compilers on the same system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Initial guess is mis-ordered includes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         DEPDIR=.deps depmode=pgcc /bin/sh
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-803-g5919b63/config/depcomp \
</span><br>
<span class="quotelev1">&gt;         /bin/sh ../../../../libtool  --tag=CC   --mode=compile pgcc
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I../../../../../openm
</span><br>
<span class="quotelev1">&gt; pi-dev-803-g5919b63/opal/mca/common/libfabric -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include -I../../..
</span><br>
<span class="quotelev1">&gt; /../oshmem/include -I../../../../opal/mca/common/libfabric/libfabric
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc191/hwl
</span><br>
<span class="quotelev1">&gt; oc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt;  -I/scratch/hargr
</span><br>
<span class="quotelev1">&gt; ove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric
</span><br>
<span class="quotelev1">&gt; -I/scratch/hargrove/openmpi-dev-803-g5919b63/
</span><br>
<span class="quotelev1">&gt; opal/mca/common/libfabric/libfabric/include -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DSYSCONFDIR=\&quot;/scratch/hargrove/inst/etc\&quot; -DRDMADI
</span><br>
<span class="quotelev1">&gt; R=\&quot;/tmp\&quot; -DEXTDIR=\&quot;/scratch/hargrove/inst/lib/openmpi\&quot;
</span><br>
<span class="quotelev1">&gt; -I../../../../../openmpi-dev-803-g5919b63 -I../../.
</span><br>
<span class="quotelev1">&gt; ./.. -I../../../../../openmpi-dev-803-g5919b63/opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../../openmpi-dev-803-g5919b63/orte/inc
</span><br>
<span class="quotelev1">&gt; lude -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../../openmpi-dev-803-g5919b63/ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../../openmp
</span><br>
<span class="quotelev1">&gt; i-dev-803-g5919b63/oshmem/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/hwloc/hwloc191/hwloc
</span><br>
<span class="quotelev1">&gt; /include -I/scratch/hargrove/bld/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/hargrove/openmpi-dev-803-g59
</span><br>
<span class="quotelev1">&gt; 19b63/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev1">&gt; -I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/event/libeven
</span><br>
<span class="quotelev1">&gt; t2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/hargrove/bld/opal/mca/event/libevent2022/libevent/include  -g -c
</span><br>
<span class="quotelev1">&gt; -o libfabric/src/libmca_common_libfabric_la-fi_tostr.lo `test -f
</span><br>
<span class="quotelev1">&gt; 'libfabric/src/fi_tostr.c' || echo
</span><br>
<span class="quotelev1">&gt; '../../../../../openmpi-dev-803-g5919b63/opal/mca/common/libfabric/'`libfabric/src/fi_tostr.c
</span><br>
<span class="quotelev1">&gt; libtool: compile:  pgcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I../../../../../openmpi-dev-803-g5919b63/opal/mca/common/libfabric
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../oshmem/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/common/libfabric/libfabric
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt; -I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric
</span><br>
<span class="quotelev1">&gt; -I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/include
</span><br>
<span class="quotelev1">&gt; -D_GNU_SOURCE -DSYSCONFDIR=\&quot;/scratch/hargrove/inst/etc\&quot;
</span><br>
<span class="quotelev1">&gt; -DRDMADIR=\&quot;/tmp\&quot; -DEXTDIR=\&quot;/scratch/hargrove/inst/lib/openmpi\&quot;
</span><br>
<span class="quotelev1">&gt; -I../../../../../openmpi-dev-803-g5919b63 -I../../../..
</span><br>
<span class="quotelev1">&gt; -I../../../../../openmpi-dev-803-g5919b63/opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../../openmpi-dev-803-g5919b63/orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../../openmpi-dev-803-g5919b63/ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../../openmpi-dev-803-g5919b63/oshmem/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/hargrove/bld/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev1">&gt; -I/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/scratch/hargrove/bld/opal/mca/event/libevent2022/libevent/include -g -c
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/src/fi_tostr.c
</span><br>
<span class="quotelev1">&gt; -MD  -fpic -DPIC -o
</span><br>
<span class="quotelev1">&gt; libfabric/src/.libs/libmca_common_libfabric_la-fi_tostr.o
</span><br>
<span class="quotelev1">&gt; PGC-S-0040-Illegal use of symbol, pthread_mutex_t
</span><br>
<span class="quotelev1">&gt; (/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/include/rdma/fi_eq.h:
</span><br>
<span class="quotelev1">&gt; 75)
</span><br>
<span class="quotelev1">&gt; PGC-W-0156-Type not specified, 'int' assumed
</span><br>
<span class="quotelev1">&gt; (/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/include/rdma/fi_eq.h:
</span><br>
<span class="quotelev1">&gt; 75)
</span><br>
<span class="quotelev1">&gt; PGC-S-0040-Illegal use of symbol, pthread_cond_t
</span><br>
<span class="quotelev1">&gt; (/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/include/rdma/fi_eq.h:
</span><br>
<span class="quotelev1">&gt; 76)
</span><br>
<span class="quotelev1">&gt; PGC-W-0156-Type not specified, 'int' assumed
</span><br>
<span class="quotelev1">&gt; (/scratch/hargrove/openmpi-dev-803-g5919b63/opal/mca/common/libfabric/libfabric/include/rdma/fi_eq.h:
</span><br>
<span class="quotelev1">&gt; 76)
</span><br>
<span class="quotelev1">&gt; PGC-S-0043-Redefinition of symbol, pthread_mutex_t
</span><br>
<span class="quotelev1">&gt; (/usr/include/x86_64-linux-gnu/bits/pthreadtypes.h: 104)
</span><br>
<span class="quotelev1">&gt; PGC-S-0043-Redefinition of symbol, pthread_cond_t
</span><br>
<span class="quotelev1">&gt; (/usr/include/x86_64-linux-gnu/bits/pthreadtypes.h: 130)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 14.3-0: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libfabric/src/libmca_common_libfabric_la-fi_tostr.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16954/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16955.php">Paul Hargrove: "[OMPI devel] opal_fifo SEGV from master"</a>
<li><strong>Previous message:</strong> <a href="16953.php">Dave Turner: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="16912.php">Paul Hargrove: "[OMPI devel] Master build broken libfabrics + PGI"</a>
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
