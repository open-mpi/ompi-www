<?
$subject_val = "Re: [OMPI users] disabling LSF integration at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 12:28:25 2009" -->
<!-- isoreceived="20091110172825" -->
<!-- sent="Tue, 10 Nov 2009 12:28:20 -0500" -->
<!-- isosent="20091110172820" -->
<!-- name="Chris Walker" -->
<!-- email="christopher.walker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] disabling LSF integration at runtime" -->
<!-- id="554e24be0911100928q39dd8b20m9d86c3393e80222e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58BBF290-34E7-41B4-8CD6-17E3E0E28B76_at_open-mpi.org" -->
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
<strong>From:</strong> Chris Walker (<em>christopher.walker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 12:28:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11127.php">Nifty Tom Mitchell: "Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>Previous message:</strong> <a href="11125.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>In reply to:</strong> <a href="11125.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perfect!  Thanks very much,
<br>
Chris
<br>
<p>On Tue, Nov 10, 2009 at 12:22 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Just add
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; plm = rsh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to your default mca param file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You don't need to reconfigure or rebuild OMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2009, at 10:16 AM, Chris Walker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have modules for both 1.3.2 and 1.3.3 (intel compilers)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Nov 10, 2009 at 11:58 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What version of OMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 10, 2009, at 9:49 AM, Chris Walker wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We've been having a lot of problems where openmpi jobs crash at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; startup because the call to lsb_launch fails (we have a ticket open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with Platform about this). &#160;Is there a way to disable the lsb_launch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; startup mechanism at runtime and revert to ssh? &#160;It's easy enough to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recompile without LSF support, but it'd be even easier to drop a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameter in &#160;openmpi-mca-params.conf.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11127.php">Nifty Tom Mitchell: "Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>Previous message:</strong> <a href="11125.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>In reply to:</strong> <a href="11125.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
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
