<?
$subject_val = "Re: [OMPI users] InfiniBand path migration not working";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 11:34:35 2012" -->
<!-- isoreceived="20120228163435" -->
<!-- sent="Tue, 28 Feb 2012 11:34:30 -0500" -->
<!-- isosent="20120228163430" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand path migration not working" -->
<!-- id="7A804708-C44A-4BF1-9EF3-0B81AB8C3625_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+tOgLEwOe1fSLhMGnfpTw+ErVUGAQSR9UkSZ3XZr2ZHBG5emA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] InfiniBand path migration not working<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 11:34:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18581.php">Muhammad Wahaj Sethi: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Previous message:</strong> <a href="18579.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18555.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18583.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18583.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeremy,
<br>
<p>I reviewed the code and it seems to be ok :) The error should be reported if the port migration is already happened once (port 1 to port 2), and now you are trying to shutdown port 2 and MPI reports that it can't migrate anymore. It assumes that port 1 is still down and it can't go back to from port 2 to port 1.
<br>
<p>Can you please build open mpi in debug mode and try to run it in verbose mode. It will help to understand better the scenario. 
<br>
<p>Thanks !
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Feb 23, 2012, at 9:00 PM, Jeremy wrote:
&gt; Hi Pasha,
&gt; Thanks for your response.  I look forward to hearing from you when you
&gt; have a chance.
&gt; 
&gt; -Jeremy
&gt; 
&gt; On Wed, Feb 22, 2012 at 10:43 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
&gt;&gt; Jeremy,
&gt;&gt; I implemented the APM support for openib btl a long time ago. I do not remember all the details of the implementation, but I remember that it is used to support LMC bits and multiple ib ports. Unfortunately I'm super busy this week. I will try look at it early next week.
&gt;&gt; 
&gt;&gt; Pavel (Pasha) Shamis
&gt;&gt; ---
&gt;&gt; Application Performance Tools Group
&gt;&gt; Computer Science and Math Division
&gt;&gt; Oak Ridge National Laboratory
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18581.php">Muhammad Wahaj Sethi: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Previous message:</strong> <a href="18579.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18555.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18583.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18583.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
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
