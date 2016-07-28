<?
$subject_val = "Re: [OMPI users] Running on two nodes slower than running on one node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 30 06:10:18 2014" -->
<!-- isoreceived="20140130111018" -->
<!-- sent="Thu, 30 Jan 2014 03:09:56 -0800" -->
<!-- isosent="20140130110956" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running on two nodes slower than running on one node" -->
<!-- id="891439E4-84F6-4AD6-83D1-72ED4CBD0C98_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJTHAueiGEA+mn=SdaUp7FTiCdfESYm07BwgaAsZau9FgS+VBw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running on two nodes slower than running on one node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-30 06:09:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23509.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23507.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>In reply to:</strong> <a href="23507.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23510.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2014, at 12:38 AM, Victor &lt;victor.major_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I use htop and top....and until now I did not make the connection that each listed process is actually a thread...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thus the application that I am running is single threaded. How does that affect the CPU affinity and rank settings?
</span><br>
<p><p>It affects it very much - there is no value in running a rank on multiple cores in that case. Just do &quot;mpirun --bind-to-core&quot;
<br>
<p>Threading the app is a mixed bag - it might help, but there is a penalty as well since you have to do all that thread locking. For now, just bind-to-core
<br>
<p><p><span class="quotelev1">&gt; &lt;-- as mentioned earlier I am a novice, and very easily confused :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 30 January 2014 15:59, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ps. 'htop' is a good tool for looking at where processes are running.
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23508/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23509.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23507.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>In reply to:</strong> <a href="23507.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23510.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
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
