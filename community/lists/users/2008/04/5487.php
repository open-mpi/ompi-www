<?
$subject_val = "Re: [OMPI users] Message compression in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 08:50:09 2008" -->
<!-- isoreceived="20080424125009" -->
<!-- sent="Thu, 24 Apr 2008 08:48:12 -0400" -->
<!-- isosent="20080424124812" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Message compression in OpenMPI" -->
<!-- id="9E314D0E-96A8-4F21-8CA4-993F831CA34E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48107C7B.2070706_at_fgi.fi" -->
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
<strong>Subject:</strong> Re: [OMPI users] Message compression in OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 08:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5488.php">Adrian Knoth: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5486.php">Alberto Giannetti: "[OMPI users] PubSub and MPI"</a>
<li><strong>In reply to:</strong> <a href="5485.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5496.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2008, at 8:26 AM, Tomas Ukkonen wrote:
<br>
<p><span class="quotelev1">&gt; Yes, you are probably right that its not worth the effort in general  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; especially not in HPC environments where you have very fast network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I can think of (rather important) special cases where it is  
</span><br>
<span class="quotelev1">&gt; important
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - non HPC environments with slow network: beowulf clusters and/or
</span><br>
<span class="quotelev1">&gt;   internet + normal PCs where you use existing workstations and  
</span><br>
<span class="quotelev1">&gt; network
</span><br>
<span class="quotelev1">&gt;   for computations.
</span><br>
<span class="quotelev1">&gt; - communication/io-bound computations where you transfer
</span><br>
<span class="quotelev1">&gt;   large redundant datasets between nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it would be nice to be able to turn on the compression (for spefic
</span><br>
<span class="quotelev1">&gt; communicators and/or data transfers) when you need it.
</span><br>
<p>Quite possibly so.  Note that there are a few proposals going on in  
<br>
MPI-2.2/MPI-3 about how to pass &quot;hints&quot; or &quot;assertions&quot; to the MPI  
<br>
implementation.  Compression could be one of these hints -- the MPI  
<br>
may not be able to detect that it's in a situation that is favorable  
<br>
for compression, so having the user/app tell it &quot;use compression on  
<br>
this communicator&quot; could be helpful.
<br>
<p>Would you be willing to contribute the work to Open MPI to enable  
<br>
compression?  Per a post yesterday (<a href="http://www.open-mpi.org/community/lists/users/2008/04/5473.php">http://www.open-mpi.org/community/lists/users/2008/04/5473.php</a> 
<br>
), contributions are always welcome.
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
<li><strong>Next message:</strong> <a href="5488.php">Adrian Knoth: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5486.php">Alberto Giannetti: "[OMPI users] PubSub and MPI"</a>
<li><strong>In reply to:</strong> <a href="5485.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5496.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
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
