<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 11:07:47 2016" -->
<!-- isoreceived="20160503150747" -->
<!-- sent="Tue, 3 May 2016 10:07:33 -0500" -->
<!-- isosent="20160503150733" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)" -->
<!-- id="CAANzjEnL4Pu23_Kdyo_Ts_k-GwUEQd-0YGx4x=Mv3JA8J4cW4A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16B-3MQUgCCmPrsBk_MJB=Sy05x_GtYmXjfz2tvMaChtg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 11:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18906.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>Previous message:</strong> <a href="18904.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>In reply to:</strong> <a href="18904.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18910.php">Christopher Samuel: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me see if I can get access to a Power 7 machine internally, and I will
<br>
try to replicate.
<br>
<p>On Tue, May 3, 2016 at 9:54 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a Power7 (big-endian) system &quot;BlueBiou&quot; at Rice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Xlc is 13.1 with no updates:
</span><br>
<span class="quotelev1">&gt; $ xlc -qversion
</span><br>
<span class="quotelev1">&gt; IBM XL C/C++ for Linux, V13.1
</span><br>
<span class="quotelev1">&gt; Version: 13.01.0000.0000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have privileged to install updates.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I too can build with xlc for little-endian Power8.
</span><br>
<span class="quotelev1">&gt; $ /opt/ibm/xlC/13.1.2/bin/xlc -qversion
</span><br>
<span class="quotelev1">&gt; IBM XL C/C++ for Linux, V13.1.2 (5725-C73, 5765-J08)
</span><br>
<span class="quotelev1">&gt; Version: 13.01.0002.0000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it is worth noting that my understanding from IBM docs is that
</span><br>
<span class="quotelev1">&gt; the xlc for ppc64el is a VERY different compiler.
</span><br>
<span class="quotelev1">&gt; Specifically it uses the Clang front-end rather than IBM's own.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 3, 2016 at 7:47 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What generation of the power arch are you using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have successfully built (a few weeks ago) with the xlc compiler 13.1.3
</span><br>
<span class="quotelev2">&gt;&gt; on a Power 8 (pcc64le). It might be related the big vs. little endian, but
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if it is something that was fixed in a point release of the xlc
</span><br>
<span class="quotelev2">&gt;&gt; compiler. Are you able to upgrade to the latest compiler revision and try
</span><br>
<span class="quotelev2">&gt;&gt; again?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Internally, we are working on getting MTT nightly testing with the xl
</span><br>
<span class="quotelev2">&gt;&gt; compilers - currently we are just reporting gcc results)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, May 3, 2016 at 3:11 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For possible inclusion in README:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xlc-13.1.0 on Linux dies compiling the embedded hwloc in this rc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (details below).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same is true of the released hwloc 1.11.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile:  xlc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/src
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../../../../../opal/include -I../../../../../../ompi/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../../../../../oshmem/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../../../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../../../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../../../../../ompi/mpiext/cuda/c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DHWLOC_INSIDE_LIBHWLOC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DHWLOC_PLUGINS_PATH=\&quot;/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/INST/lib/hwloc\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../../../../..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/orte/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../../../../../orte/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/ompi/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/oshmem/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -D_REENTRANT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/BLD/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -q64 -g -c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/src/topology-xml-nolibxml.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wp,-qmakedep=gcc,-MF.deps/topology-xml-nolibxml.TPlo  -qpic -DPIC -o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/topology-xml-nolibxml.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/ibm/xlC/13.1.0/bin/.orig/xlc: 1501-224 (S) fatal error in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/ibm/xlC/13.1.0/exe/xlcentry: signal 11 received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: *** [topology-xml-nolibxml.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18897.php">http://www.open-mpi.org/community/lists/devel/2016/05/18897.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18902.php">http://www.open-mpi.org/community/lists/devel/2016/05/18902.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18904.php">http://www.open-mpi.org/community/lists/devel/2016/05/18904.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18905/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18906.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (inline asm)"</a>
<li><strong>Previous message:</strong> <a href="18904.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>In reply to:</strong> <a href="18904.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18910.php">Christopher Samuel: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
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
