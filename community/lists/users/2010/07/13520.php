<?
$subject_val = "Re: [OMPI users] trouble using openmpi under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 15:37:02 2010" -->
<!-- isoreceived="20100707193702" -->
<!-- sent="Wed, 7 Jul 2010 15:37:14 -0400" -->
<!-- isosent="20100707193714" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using openmpi under slurm" -->
<!-- id="8FC63A00-E244-428F-9BB1-F604FE1A3BA2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BCDF6F86-18CB-4EDD-B45D-83374D926823_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] trouble using openmpi under slurm<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 15:37:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13521.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13519.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13519.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13538.php">Gus Correa: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1.
<br>
<p>FWIW, Open MPI works pretty well with SLURM; I use it back here at Cisco for all my testing.  That one particular option you're testing doesn't seem to work, but all in all, the integration works fairly well.
<br>
<p><p>On Jul 7, 2010, at 3:27 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; You'll get passionate advocates from all the various resource managers - there really isn't a right/wrong answer. Torque is more widely used, but any of them will do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; None are perfect, IMHO.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 7, 2010, at 1:16 PM, Douglas Guptill wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 07, 2010 at 12:37:54PM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No....afraid not. Things work pretty well, but there are places
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where things just don't mesh. Sub-node allocation in particular is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an issue as it implies binding, and slurm and ompi have conflicting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; methods.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It all can get worked out, but we have limited time and nobody cares
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enough to put in the effort. Slurm just isn't used enough to make it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; worthwhile (too small an audience).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am about to get my first HPC cluster (128 nodes), and was
</span><br>
<span class="quotelev2">&gt;&gt; considering slurm.  We do use MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should I be looking at Torque instead for a queue manager?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Suggestions appreciated,
</span><br>
<span class="quotelev2">&gt;&gt; Douglas.
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Douglas Guptill                       voice: 902-461-9749
</span><br>
<span class="quotelev2">&gt;&gt; Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Oceanography Department               fax:   902-494-3877
</span><br>
<span class="quotelev2">&gt;&gt; Dalhousie University
</span><br>
<span class="quotelev2">&gt;&gt; Halifax, NS, B3H 4J1, Canada
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="13521.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13519.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13519.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13538.php">Gus Correa: "Re: [OMPI users] trouble using openmpi under slurm"</a>
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
