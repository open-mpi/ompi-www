<?
$subject_val = "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 10:27:14 2008" -->
<!-- isoreceived="20080617142714" -->
<!-- sent="Tue, 17 Jun 2008 10:26:52 -0400" -->
<!-- isosent="20080617142652" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI" -->
<!-- id="1C762696-26CB-4F04-B407-525AA92F4453_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44079e5f0806170718s4c62906dt175dd6b29bcf0694_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 10:26:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5902.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5900.php">Brad Benton: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5900.php">Brad Benton: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13403.php">Durga Choudhury: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 17, 2008, at 10:18 AM, Brad Benton wrote:
<br>
<p><span class="quotelev1">&gt; The main run-time parameters used are as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - For scalable process launch
</span><br>
<span class="quotelev1">&gt;   routed = binomial
</span><br>
<p>Note that this is a new parameter for OMPI v1.3 -- it has to do with  
<br>
how non-MPI communications are sent around (e.g., OMPI startup  
<br>
coordination).  More documentation will be coming along on the new  
<br>
ORTE-level controls for v1.3.
<br>
<p><span class="quotelev1">&gt; - To reduce the overhead for IB connections:
</span><br>
<span class="quotelev1">&gt;   btl_openib_receive_queues = P,128,64,32,32,32:S,2048,1024,128,32:S, 
</span><br>
<span class="quotelev1">&gt; 12288,1024,128,32:S,65536,1024,128,32
</span><br>
<p>This is also a new parameter for v1.3 -- see the &quot;sneak peak&quot; v1.3  
<br>
screencast in the videos section (in the OpenFabrics subsection) on  
<br>
the OMPI web site for a description of what it is/does.
<br>
<p><span class="quotelev1">&gt; - Bind processes to computational cores:
</span><br>
<span class="quotelev1">&gt;   opal_paffinity_alone = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Leave buffers pinned and registered
</span><br>
<span class="quotelev1">&gt;   mpi_leave_pinned = 1
</span><br>
<p>These params exist in v1.2.
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
<li><strong>Next message:</strong> <a href="5902.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5900.php">Brad Benton: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5900.php">Brad Benton: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13403.php">Durga Choudhury: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
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
