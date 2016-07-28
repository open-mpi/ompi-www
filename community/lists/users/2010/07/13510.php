<?
$subject_val = "Re: [OMPI users] trouble using openmpi under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 13:27:04 2010" -->
<!-- isoreceived="20100707172704" -->
<!-- sent="Wed, 7 Jul 2010 11:26:55 -0600" -->
<!-- isosent="20100707172655" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using openmpi under slurm" -->
<!-- id="2F04DA66-FE62-4131-8F8A-DAFB69668C46_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTilOZtBNIYgP8BObhp7XUNQHfar5R2L9psHlJ-Ig_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 13:26:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13511.php">Jeff Squyres: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13509.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13487.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13512.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13512.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid the bottom line is that OMPI simply doesn't support core-level allocations. I tried it on a slurm machine available to me, using our devel trunk as well as 1.4, with the same results.
<br>
<p>Not sure why you are trying to run that way, but I'm afraid you can't do it with OMPI.
<br>
<p>On Jul 6, 2010, at 3:20 PM, David Roundy wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Jul 6, 2010 at 12:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks - that helps.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As you note, the issue is that OMPI doesn't support the core-level allocation options of slurm - never has, probably never will. What I found interesting, though, was that your envars don't anywhere indicate that this is what you requested. I don't see anything there that would case the daemon to crash.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I'm left to guess that this is an issue where slurm doesn't like something OMPI does because it violates that core-level option. Can you add --display-devel-map to your mpirun command? It would be interesting to see where it thinks the daemon should go.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just to check - the envars you sent in your other note came from the sbatch -c 2 run, yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes indeed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just for good measure, I'm attaching my current test script submit.sh
</span><br>
<span class="quotelev1">&gt; and its complete output, also run with sbatch -c 2.  Oddly enough
</span><br>
<span class="quotelev1">&gt; adding --display-devel-map doesn't cause mpirun to generate any output
</span><br>
<span class="quotelev1">&gt; before crashing.  Does this give you any sort of a hint?  :(  Any
</span><br>
<span class="quotelev1">&gt; other suggestions for tracking the source of this down? I'd really
</span><br>
<span class="quotelev1">&gt; hoped you'd tell me that one of the env vars told you that my slurm
</span><br>
<span class="quotelev1">&gt; config was messed up, since that would seem pretty easy to fix, once I
</span><br>
<span class="quotelev1">&gt; knew how it was messed up...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; &lt;submit.sh&gt;&lt;slurm-2833.out&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13511.php">Jeff Squyres: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13509.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13487.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13512.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13512.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
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
