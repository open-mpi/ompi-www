<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 10:03:03 2008" -->
<!-- isoreceived="20080804140303" -->
<!-- sent="Mon, 4 Aug 2008 10:02:57 -0400" -->
<!-- isosent="20080804140257" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="BFC662F6-3A9A-4C80-9316-6541ABEED9FB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48968CC7.2040502_at_3dB-Labs.com" -->
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
<strong>Date:</strong> 2008-08-04 10:02:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6262.php">Bernhard Hermann: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>Previous message:</strong> <a href="6260.php">Jeff Squyres: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>In reply to:</strong> <a href="6256.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 4, 2008, at 12:59 AM, Mark Borgerding wrote:
<br>
<p><span class="quotelev2">&gt;&gt; You should be able to merge each child communicator from each  
</span><br>
<span class="quotelev2">&gt;&gt; accept thread into a global comm anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you elaborate? I am struggling to see how to implement this.  A  
</span><br>
<span class="quotelev1">&gt; pointer to sample code would be helpful.
</span><br>
<p><span class="quotelev1">&gt; Specifically, I'd like to be able to have a single process merge/ 
</span><br>
<span class="quotelev1">&gt; join/aggregate a bunch of intercommunicators into one group and have  
</span><br>
<span class="quotelev1">&gt; a single communicator for it.  FWIW, the intercommunicators are  
</span><br>
<span class="quotelev1">&gt; point-to-point from several calls to MPI_Comm_join.
</span><br>
<p><p>I *think* George Bosilca sent some sample code about this across one  
<br>
of the OMPI lists (users or devel) a long time ago.  I'm not 100% sure  
<br>
about that, though...
<br>
<p>I unfortunately forget the trick that he used.  :-\
<br>
<p><span class="quotelev1">&gt; MPI_Group_union looks promising, but I cannot see any way of  
</span><br>
<span class="quotelev1">&gt; retrieving the communicator given a group.
</span><br>
<p><p>A communicator contains a group, not the other way around.  You can  
<br>
make a communicator from a group, though (see MPI_COMM_CREATE), but I  
<br>
don't think it'll do what you want in this case.
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
<li><strong>Next message:</strong> <a href="6262.php">Bernhard Hermann: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>Previous message:</strong> <a href="6260.php">Jeff Squyres: "Re: [OMPI users] FRQ: Warn if components specified but missing"</a>
<li><strong>In reply to:</strong> <a href="6256.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
