<?
$subject_val = "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  3 09:43:41 2012" -->
<!-- isoreceived="20120303144341" -->
<!-- sent="Sat, 3 Mar 2012 07:43:31 -0700" -->
<!-- isosent="20120303144331" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Connection to lifeline&amp;quot; with openmpi-1.4.5" -->
<!-- id="462196E6-A977-4BB0-989C-36C9C6C81B3F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F505EEE.3000806_at_norbl.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-03 09:43:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18679.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18677.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18660.php">Barnet Wagman: "[OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18680.php">Barnet Wagman: "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
<li><strong>Reply:</strong> <a href="18680.php">Barnet Wagman: "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2012, at 10:47 PM, Barnet Wagman wrote:
<br>
<p><span class="quotelev1">&gt; I've run into a problem upgrading from 1.4.3 to 1.4.4 or 1.4.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With 1.4.4 and 1.4.5, I'm getting error messages like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [[59597,1],0] routed:binomial: Connection to lifeline [[59597,0],0] lost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error does not occur if I restrict the host list to localhost.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basic tests like 'mpirun hello_c' work properly.  The problem occurs using the R package Rmpi package.  (I've tried the R mailing lists, but so far to no avail.) This R package does work reliably with openmpi 1.4.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could some one explain what an error message like this indicates? Is something timing out? Any idea what changed after 1.4.3 that might lead to this kind of problem?
</span><br>
<p>Is the job completing? Usually this message appears because mpirun terminates before everything else does. Only concern I have is that the process that issued your example message is an application process, but I'm assuming it was running local to mpirun - yes?
<br>
<p>If the job is completing, then you can just ignore the message. I'm not aware of anything that changed in the 1.4 series that would have impacted termination procedures, and I haven't been seeing this behavior myself (caveat: I don't run 1.4 very often).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI I'm running ompi under Debian 6.0.4 (squeeze).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18679.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18677.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18660.php">Barnet Wagman: "[OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18680.php">Barnet Wagman: "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
<li><strong>Reply:</strong> <a href="18680.php">Barnet Wagman: "Re: [OMPI users] &quot;Connection to lifeline&quot; with openmpi-1.4.5"</a>
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
