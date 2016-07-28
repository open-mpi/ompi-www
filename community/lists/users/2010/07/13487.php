<?
$subject_val = "Re: [OMPI users] trouble using openmpi under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 17:20:35 2010" -->
<!-- isoreceived="20100706212035" -->
<!-- sent="Tue, 6 Jul 2010 14:20:30 -0700" -->
<!-- isosent="20100706212030" -->
<!-- name="David Roundy" -->
<!-- email="roundyd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using openmpi under slurm" -->
<!-- id="AANLkTilOZtBNIYgP8BObhp7XUNQHfar5R2L9psHlJ-Ig_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5CF41CDB-39F0-477C-B6D6-4F2E50BE6909_at_open-mpi.org" -->
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
<strong>From:</strong> David Roundy (<em>roundyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 17:20:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13488.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13486.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13483.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 6, 2010 at 12:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Thanks - that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you note, the issue is that OMPI doesn't support the core-level allocation options of slurm - never has, probably never will. What I found interesting, though, was that your envars don't anywhere indicate that this is what you requested. I don't see anything there that would case the daemon to crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'm left to guess that this is an issue where slurm doesn't like something OMPI does because it violates that core-level option. Can you add --display-devel-map to your mpirun command? It would be interesting to see where it thinks the daemon should go.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to check - the envars you sent in your other note came from the sbatch -c 2 run, yes?
</span><br>
<p>Yes indeed.
<br>
<p>Just for good measure, I'm attaching my current test script submit.sh
<br>
and its complete output, also run with sbatch -c 2.  Oddly enough
<br>
adding --display-devel-map doesn't cause mpirun to generate any output
<br>
before crashing.  Does this give you any sort of a hint?  :(  Any
<br>
other suggestions for tracking the source of this down? I'd really
<br>
hoped you'd tell me that one of the env vars told you that my slurm
<br>
config was messed up, since that would seem pretty easy to fix, once I
<br>
knew how it was messed up...
<br>
<p>David
<br>
<p>

<br><hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13487/submit.sh">submit.sh</a>
</ul>
<!-- attachment="submit.sh" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13487/slurm-2833.out">slurm-2833.out</a>
</ul>
<!-- attachment="slurm-2833.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13488.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13486.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13483.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Reply:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
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
