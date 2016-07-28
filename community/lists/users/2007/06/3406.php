<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 20:58:30 2007" -->
<!-- isoreceived="20070608005830" -->
<!-- sent="Thu, 7 Jun 2007 17:58:06 -0700" -->
<!-- isosent="20070608005806" -->
<!-- name="Ben Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with DL POLY" -->
<!-- id="20070608005806.GG3716_at_dancer.ca.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C359F781-2CEC-45CD-A888-2BC360C3AAF1_at_vanderbilt.edu" -->
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
<strong>From:</strong> Ben Allan (<em>baallan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 20:58:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3407.php">Code Master: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Previous message:</strong> <a href="3405.php">Michael Edwards: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>In reply to:</strong> <a href="3403.php">Aaron Thompson: "[OMPI users] Issues with DL POLY"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you saying t(single-process execution) &lt; t(4-process execution)
<br>
for identical problems on each (same total amount of data)?
<br>
<p>There's rarely a speedup in such a case-- processing the same
<br>
amount of data while shipping some fraction of it over
<br>
a slow network between processing steps is almost certain to be slower.
<br>
<p>Where things get interesting (and encouraging) is if you increase
<br>
the total data being processed (hold data quantity per node constant).
<br>
<p>ben allan
<br>
<p>On Thu, Jun 07, 2007 at 08:24:03PM -0400, Aaron Thompson wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 	Does anyone have experience using DL POLY with OpenMPI?  I've gotten  
</span><br>
<span class="quotelev1">&gt; it to compile, but when I run a simulation using mpirun with two dual- 
</span><br>
<span class="quotelev1">&gt; processor machines, it runs a little *slower* than on one CPU on one  
</span><br>
<span class="quotelev1">&gt; machine!  Yet the program is running two instances on each node.  Any  
</span><br>
<span class="quotelev1">&gt; ideas?  The test programs included with OpenMPI show that it is  
</span><br>
<span class="quotelev1">&gt; running correctly across multiple nodes.
</span><br>
<span class="quotelev1">&gt; 	Sorry if this is a little off-topic, I wasn't able to find help on  
</span><br>
<span class="quotelev1">&gt; the official DL POLY mailing list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	Thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aaron Thompson
</span><br>
<span class="quotelev1">&gt; Vanderbilt University
</span><br>
<span class="quotelev1">&gt; aaron.p.thompson_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3407.php">Code Master: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Previous message:</strong> <a href="3405.php">Michael Edwards: "Re: [OMPI users] Issues with DL POLY"</a>
<li><strong>In reply to:</strong> <a href="3403.php">Aaron Thompson: "[OMPI users] Issues with DL POLY"</a>
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
