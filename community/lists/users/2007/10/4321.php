<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 07:49:00 2007" -->
<!-- isoreceived="20071025114900" -->
<!-- sent="Thu, 25 Oct 2007 07:48:51 -0400" -->
<!-- isosent="20071025114851" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Merging Intracommunicators" -->
<!-- id="DC6647C6-925E-48A6-A629-F78030C73BCE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AF8A5203-6FBD-44A9-AF03-103E8D859BE5_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-25 07:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4322.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4320.php">42aftab_at_[hidden]: "[OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>In reply to:</strong> <a href="4319.php">George Bosilca: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4326.php">Edgar Gabriel: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Reply:</strong> <a href="4326.php">Edgar Gabriel: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 25, 2007, at 12:11 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Now you cast a doubt on me. As far as I remember, there is a trick  
</span><br>
<span class="quotelev1">&gt; in MPI2 to do this. You can merge your inter-communicators into one  
</span><br>
<span class="quotelev1">&gt; intra-communicators with MPI_Intercomm_merge and then use  
</span><br>
<span class="quotelev1">&gt; MPI_Intercomm_create to spawn a new inter-comm over the 2 childs  
</span><br>
<span class="quotelev1">&gt; world (using the common parent as a bridge process) ... I have to  
</span><br>
<span class="quotelev1">&gt; try it to refresh my memory :)
</span><br>
<p>If you have the following scenario:
<br>
<p>- A spawns B, gets intercomm AB
<br>
- A spawns C, gets intercomm AC (that does not include B)
<br>
- ...repeat N times (e.g., to AN)
<br>
<p>Then B and C are not even aware of each other (from MPI's  
<br>
perspective).  I can't think of an MPI operation to magically connect  
<br>
all the previously-unknown-to-each-other MPI processes.  You could  
<br>
use COMM_ACCEPT/COMM_CONNECT or COMM_JOIN to connect B and C (and B  
<br>
and D, and B and E, and C and D, and ...) and then you might have  
<br>
some more options, but that might be even more trouble that doing the  
<br>
cumulative COMM_SPAWN/INTERCOMM_MERGE.
<br>
<p>George: if you know of some trick, it would be interesting to hear.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4322.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4320.php">42aftab_at_[hidden]: "[OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>In reply to:</strong> <a href="4319.php">George Bosilca: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4326.php">Edgar Gabriel: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Reply:</strong> <a href="4326.php">Edgar Gabriel: "Re: [OMPI users] Merging Intracommunicators"</a>
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
