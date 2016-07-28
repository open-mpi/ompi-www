<?
$subject_val = "Re: [OMPI users] mpirun/exec requires ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 08:09:01 2009" -->
<!-- isoreceived="20090325120901" -->
<!-- sent="Wed, 25 Mar 2009 13:08:56 +0100" -->
<!-- isosent="20090325120856" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun/exec requires ssh?" -->
<!-- id="49CA1ED8.4020802_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="15BAEFCA-3486-4142-809A-8A104E6DAF3A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun/exec requires ssh?<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 08:08:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8576.php">Jeff Squyres: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>Previous message:</strong> <a href="8574.php">Jeff Squyres: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>In reply to:</strong> <a href="8574.php">Jeff Squyres: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I installed the patch provided from Ralph and everything works fine now!
<br>
<p>thanks a lot,
<br>
regards Simone
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 24, 2009, at 4:24 PM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @eNerd:~$ mpirun --np 2 ls
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: symbol lookup error: mpirun: undefined symbol: orted_cmd_line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, this sounds like a version mismatch or some kind.  If you're 
</span><br>
<span class="quotelev1">&gt; getting &quot;undefined symbol&quot; errors, then it's quite possible/probable 
</span><br>
<span class="quotelev1">&gt; that you're somehow mixing multiple different versions of Open MPI.  
</span><br>
<span class="quotelev1">&gt; You might want to double and triple check all your PATH and 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH settings.  &quot;make uninstall&quot; *should* work to get rid 
</span><br>
<span class="quotelev1">&gt; of an old OMPI install, but as Ralph says, it's definitely safer to rm 
</span><br>
<span class="quotelev1">&gt; -rf the tree containing the old Open MPI installation and/or install 
</span><br>
<span class="quotelev1">&gt; new versions of Open MPI in entirely new trees.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8576.php">Jeff Squyres: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>Previous message:</strong> <a href="8574.php">Jeff Squyres: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>In reply to:</strong> <a href="8574.php">Jeff Squyres: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
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
