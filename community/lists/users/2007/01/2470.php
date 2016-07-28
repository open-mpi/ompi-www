<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 16 21:49:03 2007" -->
<!-- isoreceived="20070117024903" -->
<!-- sent="Tue, 16 Jan 2007 19:48:46 -0700" -->
<!-- isosent="20070117024846" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi on altix" -->
<!-- id="94205959-6282-4B1E-9F42-3911FFB15CF0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7B607129-F2EA-477C-94D9-7CF0C1E137B6_at_umich.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-16 21:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2471.php">aaron.mcdonough_at_[hidden]: "[OMPI users]  openmpi on altix"</a>
<li><strong>Previous message:</strong> <a href="2469.php">Brian Budge: "[OMPI users]  ld_library_path not being updated"</a>
<li><strong>In reply to:</strong> <a href="2468.php">Brock Palen: "[OMPI users] openmpi on altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2471.php">aaron.mcdonough_at_[hidden]: "[OMPI users]  openmpi on altix"</a>
<li><strong>Reply:</strong> <a href="2471.php">aaron.mcdonough_at_[hidden]: "[OMPI users]  openmpi on altix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 16, 2007, at 4:29 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; What is the state of openMPI on a sgi altix?  How does it compare to
</span><br>
<span class="quotelev1">&gt; mpt.  I assume for all operations OMPI will use the sm btl thus all
</span><br>
<span class="quotelev1">&gt; others (other than self)  could be disabled.  Is there any other
</span><br>
<span class="quotelev1">&gt; tweaks users use?  Or is OMPI even recommend on at Altix?
</span><br>
<p>We've run Open MPI on the Altix here at Los Alamos.  For point-to- 
<br>
point communication, we're slightly slower than MPT.  But for  
<br>
collectives, we're much slower.  We just haven't done any work on  
<br>
shared memory collectives, especially on platforms where the memory  
<br>
hierarchies are as deep as they are on the Altix.  That being said,  
<br>
it should work and is a viable option if there's a feature of Open  
<br>
MPI that a user needs that is not available in MPT.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2471.php">aaron.mcdonough_at_[hidden]: "[OMPI users]  openmpi on altix"</a>
<li><strong>Previous message:</strong> <a href="2469.php">Brian Budge: "[OMPI users]  ld_library_path not being updated"</a>
<li><strong>In reply to:</strong> <a href="2468.php">Brock Palen: "[OMPI users] openmpi on altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2471.php">aaron.mcdonough_at_[hidden]: "[OMPI users]  openmpi on altix"</a>
<li><strong>Reply:</strong> <a href="2471.php">aaron.mcdonough_at_[hidden]: "[OMPI users]  openmpi on altix"</a>
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
