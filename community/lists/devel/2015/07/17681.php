<?
$subject_val = "Re: [OMPI devel] 1.10.0rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 11:50:09 2015" -->
<!-- isoreceived="20150722155009" -->
<!-- sent="Wed, 22 Jul 2015 15:49:54 +0000" -->
<!-- isosent="20150722154954" -->
<!-- name="Burette, Yohann" -->
<!-- email="yohann.burette_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc2" -->
<!-- id="6777BD114B546D458A2696C0DEB863DF5F6F8186_at_ORSMSX107.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA141fXtSM1YrF82HvMs6T_e=B+FmxfCSGLJeV2P4Zm9iEQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Burette, Yohann (<em>yohann.burette_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-22 11:49:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17682.php">Howard Pritchard: "[OMPI devel] anyone built master on qlogic system today?"</a>
<li><strong>Previous message:</strong> <a href="17680.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>In reply to:</strong> <a href="17679.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17685.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Reply:</strong> <a href="17685.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul,
<br>

<br>
Thank you for doing all this testing!
<br>

<br>
About 1), it&#226;&#128;&#153;s hard for me to see whether it&#226;&#128;&#153;s a problem with mtl:ofi or with how OMPI selects the components to use.
<br>
Could you please run your test again with &#226;&#128;&#156;--mca mtl ofi --mca mtl_ofi_provider sockets --mca pml cm&#226;&#128;&#157;?
<br>
The idea is that if it still fails, then we have a problem with either mtl:ofi or the OFI/sockets provider. If it works, then there is an issue with how OMPI selects what component to use.
<br>

<br>
I just tried 1.10.0rc2 with the latest libfabric (master) and it seems to work fine.
<br>

<br>
Yohann
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Paul Hargrove
<br>
Sent: Wednesday, July 22, 2015 1:05 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] 1.10.0rc2
<br>

<br>
1.10.0rc2 looks mostly good to me, but I still found some issues.
<br>

<br>

<br>
1) New to this round of testing, I have built mtl:ofi with gcc, pgi, icc, clang, open64 and studio compilers.
<br>
I have only the sockets provider in libfaric (v1.0.0 and 1.1.0rc2).
<br>
However, unless I pass &quot;-mca mtl ^ofi&quot; to mpirun I get a SEGV from a callback invoked in opal_progress().
<br>
Gdb did not give a function name for the  callback, but the PC looks valid.
<br>

<br>

<br>
2) Of the several compilers I tried, only pgi-13.0 failed to compile mtl:ofi:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool  --tag=CC   --mode=compile pgcc -DHAVE_CONFIG_H -I. -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../oshmem/include -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen  -I/usr/common/ftg/libfabric/1.1.0rc2p1/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2 -I../../../.. -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/orte/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/oshmem/include   -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/hwloc/hwloc191/hwloc/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/hwloc/hwloc191/hwloc/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/event/libevent2021/libevent/include  -g  -c -o mtl_ofi_component.lo /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi/mtl_ofi_component.c
<br>
libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../oshmem/include -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen -I/usr/common/ftg/libfabric/1.1.0rc2p1/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2 -I../../../.. -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/orte/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/oshmem/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/hwloc/hwloc191/hwloc/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/hwloc/hwloc191/hwloc/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/event/libevent2021/libevent/include -g -c /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi/mtl_ofi_component.c  -fpic -DPIC -o .libs/mtl_ofi_component.o
<br>
PGC-S-0060-opal_convertor_clone is not a member of this struct or union (/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi/mtl_ofi_component.c: 51)
<br>
pgcc-Fatal-/global/scratch2/sd/hargrove/pgi-13.10/linux86-64/13.10/bin/pgc TERMINATED by signal 11
<br>

<br>
Since this ends with a SEGV in the compiler, I don't think this is an issue with the C code, just a plain compiler bug.
<br>
At lease pgi-9.0-4 and pgi-10.9 compiled the code just fine.
<br>

<br>

<br>
3) As I noted in a separate email, there are some newly uncovered issues in the embedded hwloc w/ pgi and -m32.
<br>
However, I had not tested such configurations previously, and all indications are that these issues have existed for a while.
<br>
Brice is on vacation, so there will not be an official hwloc fix for this issue until next week at the earliest.
<br>
[The upside is that I now have coverage for eight additional x86 configurations (true x86 or x86-64 w/ -m32).]
<br>

<br>

<br>
4) I noticed a couple warnings somebody might want to investigate:
<br>
&nbsp;&nbsp;openmpi-1.10.0rc2/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:2323:59: warning: format specifies type 'int' but the argument has type 'struct ibv_qp *' [-Wformat]
<br>
&nbsp;&nbsp;openmpi-1.10.0rc2/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c&quot;, line 2471: warning: improper pointer/integer combination: arg #3
<br>

<br>

<br>

<br>
Also worth noting:
<br>

<br>
The ConnectX and ConnectIB XRC detection logic appears to be working as expected on multiple systems.
<br>

<br>
I also have learned that pgi-9.0-4 is not a conforming C99 compiler when passed -m32, which is not Open MPI's fault.
<br>

<br>

<br>
And as before...
<br>
+ I am currently without any SPARC platforms
<br>
+ Several qemu-emulated ARM and MIPS tests will complete by morning (though I have some ARM successes already)
<br>

<br>

<br>
-Paul
<br>

<br>
On Tue, Jul 21, 2015 at 12:29 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Hey folks
<br>

<br>
1.10.0rc2 is now out for review - excepting the library version numbers, this should be the final version. Please take a quick gander and let me know of any problems.
<br>

<br>
<a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
<br>

<br>
Ralph
<br>

<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17670.php">http://www.open-mpi.org/community/lists/devel/2015/07/17670.php</a>
<br>

<br>

<br>

<br>
--
<br>
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
<br>
Computer Languages &amp; Systems Software (CLaSS) Group
<br>
Computer Science Department               Tel: +1-510-495-2352
<br>
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17681/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17682.php">Howard Pritchard: "[OMPI devel] anyone built master on qlogic system today?"</a>
<li><strong>Previous message:</strong> <a href="17680.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>In reply to:</strong> <a href="17679.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17685.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Reply:</strong> <a href="17685.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
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
