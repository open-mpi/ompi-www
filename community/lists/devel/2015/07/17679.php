<?
$subject_val = "Re: [OMPI devel] 1.10.0rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 04:05:16 2015" -->
<!-- isoreceived="20150722080516" -->
<!-- sent="Wed, 22 Jul 2015 01:05:08 -0700" -->
<!-- isosent="20150722080508" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc2" -->
<!-- id="CAAvDA141fXtSM1YrF82HvMs6T_e=B+FmxfCSGLJeV2P4Zm9iEQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9E15810E-FF5B-4C0D-B1EE-ADF37892F15B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc2<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-22 04:05:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17680.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Previous message:</strong> <a href="17678.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>In reply to:</strong> <a href="17670.php">Ralph Castain: "[OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17681.php">Burette, Yohann: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Reply:</strong> <a href="17681.php">Burette, Yohann: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1.10.0rc2 looks mostly good to me, but I still found some issues.
<br>
<p><p>1) New to this round of testing, I have built mtl:ofi with gcc, pgi, icc,
<br>
clang, open64 and studio compilers.
<br>
I have only the sockets provider in libfaric (v1.0.0 and 1.1.0rc2).
<br>
However, unless I pass &quot;-mca mtl ^ofi&quot; to mpirun I get a SEGV from a
<br>
callback invoked in opal_progress().
<br>
Gdb did not give a function name for the  callback, but the PC looks valid.
<br>
<p><p>2) Of the several compilers I tried, only pgi-13.0 failed to compile
<br>
mtl:ofi:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool  --tag=CC   --mode=compile pgcc
<br>
-DHAVE_CONFIG_H -I.
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi
<br>
-I../../../../opal/include -I../../../../orte/include
<br>
-I../../../../ompi/include -I../../../../oshmem/include
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
<br>
&nbsp;-I/usr/common/ftg/libfabric/1.1.0rc2p1/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2
<br>
-I../../../..
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/orte/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/oshmem/include
<br>
<p>-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/event/libevent2021/libevent/include
<br>
&nbsp;-g  -c -o mtl_ofi_component.lo
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi/mtl_ofi_component.c
<br>
libtool: compile:  pgcc -DHAVE_CONFIG_H -I.
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi
<br>
-I../../../../opal/include -I../../../../orte/include
<br>
-I../../../../ompi/include -I../../../../oshmem/include
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
<br>
-I/usr/common/ftg/libfabric/1.1.0rc2p1/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2
<br>
-I../../../..
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/orte/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/oshmem/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/event/libevent2021/libevent/include
<br>
-g -c
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi/mtl_ofi_component.c
<br>
&nbsp;-fpic -DPIC -o .libs/mtl_ofi_component.o
<br>
PGC-S-0060-opal_convertor_clone is not a member of this struct or union
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi/mtl_ofi_component.c:
<br>
51)
<br>
pgcc-Fatal-/global/scratch2/sd/hargrove/pgi-13.10/linux86-64/13.10/bin/pgc
<br>
TERMINATED by signal 11
<br>
<p>Since this ends with a SEGV in the compiler, I don't think this is an issue
<br>
with the C code, just a plain compiler bug.
<br>
At lease pgi-9.0-4 and pgi-10.9 compiled the code just fine.
<br>
<p><p>3) As I noted in a separate email, there are some newly uncovered issues in
<br>
the embedded hwloc w/ pgi and -m32.
<br>
However, I had not tested such configurations previously, and all
<br>
indications are that these issues have existed for a while.
<br>
Brice is on vacation, so there will not be an official hwloc fix for this
<br>
issue until next week at the earliest.
<br>
[The upside is that I now have coverage for eight additional x86
<br>
configurations (true x86 or x86-64 w/ -m32).]
<br>
<p><p>4) I noticed a couple warnings somebody might want to investigate:
<br>
<p>openmpi-1.10.0rc2/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:2323:59:
<br>
warning: format specifies type 'int' but the argument has type 'struct
<br>
ibv_qp *' [-Wformat]
<br>
&nbsp;&nbsp;openmpi-1.10.0rc2/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c&quot;,
<br>
line 2471: warning: improper pointer/integer combination: arg #3
<br>
<p><p><p>Also worth noting:
<br>
<p>The ConnectX and ConnectIB XRC detection logic appears to be working as
<br>
expected on multiple systems.
<br>
<p>I also have learned that pgi-9.0-4 is not a conforming C99 compiler when
<br>
passed -m32, which is not Open MPI's fault.
<br>
<p><p>And as before...
<br>
+ I am currently without any SPARC platforms
<br>
+ Several qemu-emulated ARM and MIPS tests will complete by morning (though
<br>
I have some ARM successes already)
<br>
<p><p>-Paul
<br>
<p>On Tue, Jul 21, 2015 at 12:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hey folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.10.0rc2 is now out for review - excepting the library version numbers,
</span><br>
<span class="quotelev1">&gt; this should be the final version. Please take a quick gander and let me
</span><br>
<span class="quotelev1">&gt; know of any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17670.php">http://www.open-mpi.org/community/lists/devel/2015/07/17670.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17679/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17680.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Previous message:</strong> <a href="17678.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>In reply to:</strong> <a href="17670.php">Ralph Castain: "[OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17681.php">Burette, Yohann: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Reply:</strong> <a href="17681.php">Burette, Yohann: "Re: [OMPI devel] 1.10.0rc2"</a>
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
