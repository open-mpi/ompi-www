<?
$subject_val = "Re: [OMPI devel] Broken master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 10:59:27 2015" -->
<!-- isoreceived="20151105155927" -->
<!-- sent="Thu, 5 Nov 2015 07:59:21 -0800" -->
<!-- isosent="20151105155921" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Broken master" -->
<!-- id="61CA6B8E-1164-408A-A740-9BFABEEA5A81_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C0772F8C-148C-4057-A770-347024CB17D8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Broken master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-05 10:59:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18334.php">Artem Polyakov: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18332.php">Ralph Castain: "Re: [OMPI devel] Broken master"</a>
<li><strong>In reply to:</strong> <a href="18332.php">Ralph Castain: "Re: [OMPI devel] Broken master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Found and fixed it - I blame Jeff for suggesting I move a free to the wrong place :-)
<br>
<p><span class="quotelev1">&gt; On Nov 5, 2015, at 7:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Strange - it&#226;&#128;&#153;s been working for me. I&#226;&#128;&#153;ll take another gander at it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 5, 2015, at 6:13 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden] &lt;mailto:rvandevaart_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph:
</span><br>
<span class="quotelev2">&gt;&gt; Just an FYI that the following change broke the use of --host on master last night.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rvandevaart_at_drossetti-ivy4 ompi-master-rolfv]$ git bisect bad
</span><br>
<span class="quotelev2">&gt;&gt; 169c44258d5c98870872b77166390d4f9a81105e is the first bad commit
</span><br>
<span class="quotelev2">&gt;&gt; commit 169c44258d5c98870872b77166390d4f9a81105e
</span><br>
<span class="quotelev2">&gt;&gt; Author: Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Tue Nov 3 19:00:28 2015 -0800
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Fix missing check
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rvandevaart_at_drossetti-ivy4 src]$ mpirun -host drossetti-ivy4 -np 2 MPI_Isend_ator_c
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] Failing at address: 0x347976692d69
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] [ 0] /lib64/libpthread.so.0(+0xf710)[0x7f633fa42710]
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] [ 1] /ivylogin/home/rvandevaart/ompi-repos/ompi-master-rolfv/dbg/lib/libopen-pal.so.0(+0x7b1c2)[0x7f63409821c2]
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] [ 2] /ivylogin/home/rvandevaart/ompi-repos/ompi-master-rolfv/dbg/lib/libopen-pal.so.0(opal_argv_split+0x25)[0x7f63409821fb]
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] [ 3] /ivylogin/home/rvandevaart/ompi-repos/ompi-master-rolfv/dbg/lib/libopen-rte.so.0(orte_util_add_dash_host_nodes+0x143)[0x7f6340c82830]
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] [ 4] /ivylogin/home/rvandevaart/ompi-repos/ompi-master-rolfv/dbg/lib/libopen-rte.so.0(orte_plm_base_setup_virtual_machine+0x1008)[0x7f6340cccc86]
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] [ 5] /ivylogin/home/rvandevaart/ompi-repos/ompi-master-rolfv/dbg/lib/openmpi/mca_plm_rsh.so(+0x68b1)[0x7f633dc008b1]
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] [ 6] /ivylogin/home/rvandevaart/ompi-repos/ompi-master-rolfv/dbg/lib/libopen-pal.so.0(opal_libevent2022_event_base_loop+0x53c)[0x7f63409a070c]
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] [ 7] mpirun[0x4050a1]
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] [ 8] mpirun[0x4034a4]
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f633f6bdd1d]
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] [10] mpirun[0x4033c9]
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy4:28764] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt; [rvandevaart_at_drossetti-ivy4 src]$ 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message. 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18331.php">http://www.open-mpi.org/community/lists/devel/2015/11/18331.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/11/18331.php">http://www.open-mpi.org/community/lists/devel/2015/11/18331.php</a>&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18333/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18334.php">Artem Polyakov: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18332.php">Ralph Castain: "Re: [OMPI devel] Broken master"</a>
<li><strong>In reply to:</strong> <a href="18332.php">Ralph Castain: "Re: [OMPI devel] Broken master"</a>
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
