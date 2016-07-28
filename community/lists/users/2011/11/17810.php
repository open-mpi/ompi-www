<?
$subject_val = "Re: [OMPI users] Shared memory optimizations in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 09:04:06 2011" -->
<!-- isoreceived="20111122140406" -->
<!-- sent="Tue, 22 Nov 2011 09:04:02 -0500" -->
<!-- isosent="20111122140402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared memory optimizations in OMPI" -->
<!-- id="D5E2E7A2-D660-4CA9-BD77-36BDE6383191_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFQkOS5d547tp6iax4tGViFNDHYjEy+z2m=Fc+cs-93FY_onAw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared memory optimizations in OMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 09:04:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17811.php">Shamik Ganguly: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17809.php">Jeff Squyres: "Re: [OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
<li><strong>In reply to:</strong> <a href="17808.php">Shamik Ganguly: "[OMPI users] Shared memory optimizations in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17811.php">Shamik Ganguly: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 22, 2011, at 1:09 AM, Shamik Ganguly wrote:
<br>
<p><span class="quotelev1">&gt; I want to trace when the MPI  library prevents an MPI_Send from going to the socket and makes it access shared memory because the target node is on the same chip (CMP). I want to use PIN to trace this. Can you please give me some pointers about which functions are taking this decision so that I can instrument the appropriate library calls in PIN?
</span><br>
<p>What's PIN?
<br>
<p>The decision is made in the ob1 PML plugin.  Way back during MPI_INIT, each MPI process creates lists of BTLs to use to contact each MPI process peer.  
<br>
<p>When a process is on the same *node* (e.g., a single server) -- not just the same processor socket/chip -- the shared memory BTL is given preference to all other BTLs by use of a priority mechanism.  Hence, the &quot;sm&quot; BTL is put at the front of the BML lists (BML = BTL multiplexing layer -- it's essentially just list management for BTLs).  
<br>
<p>Later, when MPI_SEND comes through, it uses the already-setup BML lists to determine which BTL(s) to use to send a message.
<br>
<p>That's the 50,000 foot view.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17811.php">Shamik Ganguly: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17809.php">Jeff Squyres: "Re: [OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
<li><strong>In reply to:</strong> <a href="17808.php">Shamik Ganguly: "[OMPI users] Shared memory optimizations in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17811.php">Shamik Ganguly: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
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
