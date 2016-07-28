<?
$subject_val = "Re: [OMPI devel] HWLOC issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 18:08:11 2015" -->
<!-- isoreceived="20150910220811" -->
<!-- sent="Fri, 11 Sep 2015 00:08:07 +0200" -->
<!-- isosent="20150910220807" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] HWLOC issue" -->
<!-- id="55F1FF47.4030102_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkVh41vUM94u-wRpWQYzkJi-sHsGdRn3dJ6HmiQmMMvkSA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] HWLOC issue<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-10 18:08:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17998.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Previous message:</strong> <a href="17996.php">Brice Goglin: "Re: [OMPI devel] HWLOC issue"</a>
<li><strong>In reply to:</strong> <a href="17995.php">George Bosilca: "Re: [OMPI devel] HWLOC issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18035.php">George Bosilca: "Re: [OMPI devel] HWLOC issue"</a>
<li><strong>Reply:</strong> <a href="18035.php">George Bosilca: "Re: [OMPI devel] HWLOC issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try this patch (it applies to hwloc v1.9-v1.11, it should be OK against
<br>
OMPI's tree).
<br>
Your bridge 22:00.0 says it contains the master bus 00. It causes a
<br>
cycle in hwloc's insert algorithm, caught be the assertion. The patch
<br>
just removes this invalid bridge entirely.
<br>
<p>Brice
<br>
<p><p><p>Le 10/09/2015 21:23, George Bosilca a &#233;crit :
<br>
<span class="quotelev1">&gt; It used to work. Now I don't know exactly when I last updated the
</span><br>
<span class="quotelev1">&gt; trunk version on the cluster, but not more than 10 days ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lstopo complains with the same assert. Interestingly enough, the same
</span><br>
<span class="quotelev1">&gt; binary succeed on the other nodes of the same cluster ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 10, 2015 at 3:20 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Did it work on the same machine before? Or did OMPI enable hwloc's
</span><br>
<span class="quotelev1">&gt;     PCI discovery recently?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Does lstopo complain the same?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 10/09/2015 21:10, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     With the current trunk version I keep getting an assert deep down
</span><br>
<span class="quotelev2">&gt;&gt;     in orted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     orted:
</span><br>
<span class="quotelev2">&gt;&gt;     ../../../../../../../ompi/opal/mca/hwloc/hwloc1110/hwloc/src/pci-common.c:177:
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_pci_try_insert_siblings_below_new_bridge: Assertion `comp
</span><br>
<span class="quotelev2">&gt;&gt;     != HWLOC_PCI_BUSID_SUPERSET' failed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The stack looks like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [ 0] /lib64/libpthread.so.0(+0xf710)[0x7fc22ce61710]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x7fc22caf0625]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [ 2] /lib64/libc.so.6(abort+0x175)[0x7fc22caf1e05]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [ 3] /lib64/libc.so.6(+0x2b74e)[0x7fc22cae974e]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt;     /lib64/libc.so.6(__assert_perror_fail+0x0)[0x7fc22cae9810]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(+0xb0a62)[0x7fc22ddc6a62]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(+0xb0b60)[0x7fc22ddc6b60]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(opal_hwloc1110_hwloc_insert_pci_device_list+0x8f)[0x7fc22ddc724c]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(+0xbf2d6)[0x7fc22ddd52d6]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [ 9]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(+0xd22f7)[0x7fc22dde82f7]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [10]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(opal_hwloc1110_hwloc_topology_load+0x1a3)[0x7fc22dde8ee1]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [11]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/lib/libopen-pal.so.0(opal_hwloc_base_get_topology+0x80)[0x7fc22ddb6ece]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [12]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/lib/libopen-rte.so.0(orte_ess_base_orted_setup+0x127)[0x7fc22e0b3523]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [13]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/lib/openmpi/mca_ess_env.so(+0xe45)[0x7fc22c6bbe45]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [14]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/lib/libopen-rte.so.0(orte_init+0x2c6)[0x7fc22e06b55a]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [15]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/lib/libopen-rte.so.0(orte_daemon+0x5c1)[0x7fc22e09a895]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [16]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/bin/orted[0x40082a]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [17]
</span><br>
<span class="quotelev2">&gt;&gt;     /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fc22cadcd5d]
</span><br>
<span class="quotelev2">&gt;&gt;     [dancer18:21100] [18]
</span><br>
<span class="quotelev2">&gt;&gt;     /home/bosilca/opt/trunk/debug/bin/orted[0x4006e9]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17993.php">http://www.open-mpi.org/community/lists/devel/2015/09/17993.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17994.php">http://www.open-mpi.org/community/lists/devel/2015/09/17994.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17995.php">http://www.open-mpi.org/community/lists/devel/2015/09/17995.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17997/fix_pci_cycle.patch">fix_pci_cycle.patch</a>
</ul>
<!-- attachment="fix_pci_cycle.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17998.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Previous message:</strong> <a href="17996.php">Brice Goglin: "Re: [OMPI devel] HWLOC issue"</a>
<li><strong>In reply to:</strong> <a href="17995.php">George Bosilca: "Re: [OMPI devel] HWLOC issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18035.php">George Bosilca: "Re: [OMPI devel] HWLOC issue"</a>
<li><strong>Reply:</strong> <a href="18035.php">George Bosilca: "Re: [OMPI devel] HWLOC issue"</a>
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
