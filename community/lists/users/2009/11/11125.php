<?
$subject_val = "Re: [OMPI users] disabling LSF integration at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 12:22:53 2009" -->
<!-- isoreceived="20091110172253" -->
<!-- sent="Tue, 10 Nov 2009 10:22:44 -0700" -->
<!-- isosent="20091110172244" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] disabling LSF integration at runtime" -->
<!-- id="58BBF290-34E7-41B4-8CD6-17E3E0E28B76_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="554e24be0911100916h37551420v46a8c8e94847d657_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] disabling LSF integration at runtime<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 12:22:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11126.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Previous message:</strong> <a href="11124.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>In reply to:</strong> <a href="11123.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11126.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Reply:</strong> <a href="11126.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just add
<br>
<p>plm = rsh
<br>
<p>to your default mca param file.
<br>
<p>You don't need to reconfigure or rebuild OMPI
<br>
<p>On Nov 10, 2009, at 10:16 AM, Chris Walker wrote:
<br>
<p><span class="quotelev1">&gt; We have modules for both 1.3.2 and 1.3.3 (intel compilers)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 10, 2009 at 11:58 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What version of OMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 10, 2009, at 9:49 AM, Chris Walker wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've been having a lot of problems where openmpi jobs crash at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; startup because the call to lsb_launch fails (we have a ticket open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Platform about this).  Is there a way to disable the lsb_launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; startup mechanism at runtime and revert to ssh?  It's easy enough to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recompile without LSF support, but it'd be even easier to drop a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter in  openmpi-mca-params.conf.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11126.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Previous message:</strong> <a href="11124.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>In reply to:</strong> <a href="11123.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11126.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Reply:</strong> <a href="11126.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
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
