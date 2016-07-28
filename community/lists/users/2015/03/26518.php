<?
$subject_val = "Re: [OMPI users] open mpi on blue waters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 12:06:27 2015" -->
<!-- isoreceived="20150325160627" -->
<!-- sent="Wed, 25 Mar 2015 09:06:24 -0700" -->
<!-- isosent="20150325160624" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on blue waters" -->
<!-- id="1670ACCF-8303-4CBD-9775-9767194E2E24_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="178A48ED-FAB6-419C-94A2-2B62FC791D14_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi on blue waters<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 12:06:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26519.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26517.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26517.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26519.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26519.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26524.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OHO! You have munge running on the head node, but not on the backends!
<br>
<p>Okay, all you have to do is set the MCA param &#226;&#128;&#156;sec&#226;&#128;&#157; to &#226;&#128;&#156;basic&#226;&#128;&#157; in your environment, or add &#226;&#128;&#156;-mca sec basic&#226;&#128;&#157; on your cmd line
<br>
<p><p><span class="quotelev1">&gt; On Mar 25, 2015, at 8:53 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nid25257:09727] sec: munge validate_cred 12345
</span><br>
<span class="quotelev1">&gt; [nid25257:09727] sec: munge failed to decode credential: Invalid credential format
</span><br>
<span class="quotelev1">&gt; [nid25257:09727] [[9128,0],0] ORTE_ERROR_LOG: Authentication failed in file ../../../../../orte/mca/oob/tcp/oob_tcp_connection.c at line 803
</span><br>
<span class="quotelev1">&gt; [nid25257:09727] [[9128,0],0] mca_oob_tcp_listen_thread: new connection: (17, 11) 10.128.69.143:34369
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26518/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26519.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26517.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26517.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26519.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26519.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Reply:</strong> <a href="26524.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
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
