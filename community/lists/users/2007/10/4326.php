<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 11:16:44 2007" -->
<!-- isoreceived="20071025151644" -->
<!-- sent="Thu, 25 Oct 2007 10:16:45 -0500" -->
<!-- isosent="20071025151645" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Merging Intracommunicators" -->
<!-- id="4720B35D.5020505_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DC6647C6-925E-48A6-A629-F78030C73BCE_at_cisco.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-25 11:16:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4327.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Previous message:</strong> <a href="4325.php">Brian W. Barrett: "Re: [OMPI users] xcode and ompi"</a>
<li><strong>In reply to:</strong> <a href="4321.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4327.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Reply:</strong> <a href="4327.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 25, 2007, at 12:11 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now you cast a doubt on me. As far as I remember, there is a trick  
</span><br>
<span class="quotelev2">&gt;&gt; in MPI2 to do this. You can merge your inter-communicators into one  
</span><br>
<span class="quotelev2">&gt;&gt; intra-communicators with MPI_Intercomm_merge and then use  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Intercomm_create to spawn a new inter-comm over the 2 childs  
</span><br>
<span class="quotelev2">&gt;&gt; world (using the common parent as a bridge process) ... I have to  
</span><br>
<span class="quotelev2">&gt;&gt; try it to refresh my memory :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have the following scenario:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - A spawns B, gets intercomm AB
</span><br>
<span class="quotelev1">&gt; - A spawns C, gets intercomm AC (that does not include B)
</span><br>
<span class="quotelev1">&gt; - ...repeat N times (e.g., to AN)
</span><br>
<p>well, how about the following for your example:
<br>
<p>- D = intercomm_merge (AB)
<br>
- E = intercomm_merge (AC)
<br>
- F = intercomm_create (DC, using E as bridge-communicator)
<br>
- F' = intercomm_merge (F)
<br>
- G = intercomm_create ( BC, using F' as bridge-communicator)
<br>
<p>not very nice, but should work...
<br>
<p>Edgar
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then B and C are not even aware of each other (from MPI's  
</span><br>
<span class="quotelev1">&gt; perspective).  I can't think of an MPI operation to magically connect  
</span><br>
<span class="quotelev1">&gt; all the previously-unknown-to-each-other MPI processes.  You could  
</span><br>
<span class="quotelev1">&gt; use COMM_ACCEPT/COMM_CONNECT or COMM_JOIN to connect B and C (and B  
</span><br>
<span class="quotelev1">&gt; and D, and B and E, and C and D, and ...) and then you might have  
</span><br>
<span class="quotelev1">&gt; some more options, but that might be even more trouble that doing the  
</span><br>
<span class="quotelev1">&gt; cumulative COMM_SPAWN/INTERCOMM_MERGE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George: if you know of some trick, it would be interesting to hear.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4327.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Previous message:</strong> <a href="4325.php">Brian W. Barrett: "Re: [OMPI users] xcode and ompi"</a>
<li><strong>In reply to:</strong> <a href="4321.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4327.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Reply:</strong> <a href="4327.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
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
