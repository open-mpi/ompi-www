<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 12:06:22 2008" -->
<!-- isoreceived="20080804160622" -->
<!-- sent="Mon, 4 Aug 2008 12:06:17 -0400" -->
<!-- isosent="20080804160617" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="BCBA9149-C82E-426C-B84E-8D6C4222DB60_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48972418.4060108_at_3db-labs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to specify hosts for MPI_Comm_spawn<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 12:06:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6267.php">Jan Ploski: "[OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6265.php">Jeff Squyres: "Re: [OMPI users] MPI adopt-a-group: a question and status report"</a>
<li><strong>In reply to:</strong> <a href="6264.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6211.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 4, 2008, at 11:45 AM, Mark Borgerding wrote:
<br>
<p><span class="quotelev1">&gt; But I think I've got a path forward.  I've been able to use sockets  
</span><br>
<span class="quotelev1">&gt; and MPI_Comm_join to create intercomms between the singleton and  
</span><br>
<span class="quotelev1">&gt; mpirun-spawned children.  The important step I was missing was
</span><br>
<span class="quotelev1">&gt; &quot;orted --persistent --seed --scope public&quot;.  Now the MPI_Comm_join  
</span><br>
<span class="quotelev1">&gt; calls in different worlds can see each other.
</span><br>
<p>Good!
<br>
<p><span class="quotelev1">&gt; FWIW, this technique just works in LAM, presumably because lamboot  
</span><br>
<span class="quotelev1">&gt; is an explicit step.
</span><br>
<p>Yes.  LAM's universe is [mostly] statically defined during lamboot.   
<br>
New MPI processes that come into existence get a unique &quot;name&quot; and  
<br>
therefore the uniques issues surrounding the MPI-2 dynamics are  
<br>
handled easily.  In OMPI, we didn't have a &quot;global&quot; daemon that  
<br>
handles these kinds of things by default, so you have to launch it  
<br>
manually.
<br>
<p><span class="quotelev1">&gt; I've almost got my head wrapped around the technique in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/10/4327.php">http://www.open-mpi.org/community/lists/users/2007/10/4327.php</a>
</span><br>
<span class="quotelev1">&gt; Are there any shortcuts I could take for the case where all the  
</span><br>
<span class="quotelev1">&gt; clients are already in a group?
</span><br>
<p><p>If they're all created as a result of individual JOINs, I don't think  
<br>
so.
<br>
<p>That being said, I should throw in the pitch that the MPI Forum is in  
<br>
the process of defining MPI-3.  If you have a new dynamic process  
<br>
pattern that would be useful, I encourage you to submit a proposal to  
<br>
the Forum for consideration to MPI-3 (or heck, join the Forum and  
<br>
become part of the discussion!).  Perhaps a new function  
<br>
MPI_JOIN_MANY?  :-)
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
<li><strong>Next message:</strong> <a href="6267.php">Jan Ploski: "[OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6265.php">Jeff Squyres: "Re: [OMPI users] MPI adopt-a-group: a question and status report"</a>
<li><strong>In reply to:</strong> <a href="6264.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6211.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
