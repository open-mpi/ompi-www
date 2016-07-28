<?
$subject_val = "Re: [OMPI users] mpirun/exec requires ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 07:49:19 2009" -->
<!-- isoreceived="20090325114919" -->
<!-- sent="Wed, 25 Mar 2009 04:49:13 -0700" -->
<!-- isosent="20090325114913" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun/exec requires ssh?" -->
<!-- id="15BAEFCA-3486-4142-809A-8A104E6DAF3A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C96BB1.3020201_at_dps.uibk.ac.at" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 07:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8575.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8573.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8568.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8575.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8575.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2009, at 4:24 PM, Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; @eNerd:~$ mpirun --np 2 ls
</span><br>
<span class="quotelev1">&gt; mpirun: symbol lookup error: mpirun: undefined symbol: orted_cmd_line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>FWIW, this sounds like a version mismatch or some kind.  If you're  
<br>
getting &quot;undefined symbol&quot; errors, then it's quite possible/probable  
<br>
that you're somehow mixing multiple different versions of Open MPI.   
<br>
You might want to double and triple check all your PATH and  
<br>
LD_LIBRARY_PATH settings.  &quot;make uninstall&quot; *should* work to get rid  
<br>
of an old OMPI install, but as Ralph says, it's definitely safer to rm  
<br>
-rf the tree containing the old Open MPI installation and/or install  
<br>
new versions of Open MPI in entirely new trees.
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
<li><strong>Next message:</strong> <a href="8575.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8573.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8568.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8575.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8575.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
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
