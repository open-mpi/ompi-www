<?
$subject_val = "Re: [OMPI users] Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 15:53:14 2010" -->
<!-- isoreceived="20100813195314" -->
<!-- sent="Fri, 13 Aug 2010 15:53:10 -0400" -->
<!-- isosent="20100813195310" -->
<!-- name="David Ronis" -->
<!-- email="David.Ronis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Abort" -->
<!-- id="1281729190.22705.12.camel_at_ronispc.chem.mcgill.ca" -->
<!-- charset="ansi_x3.4-1968" -->
<!-- inreplyto="20100813175018.5FE3ABA009D_at_asmx5.McGill.CA" -->
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
<strong>Subject:</strong> Re: [OMPI users] Abort<br>
<strong>From:</strong> David Ronis (<em>David.Ronis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-13 15:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14022.php">James R. Leek: "[OMPI users] Does openmpi not support nested mpiruns?"</a>
<li><strong>Previous message:</strong> <a href="14020.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>Maybe in reply to:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14037.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14037.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using mpirun and the nodes are all on the same machin (a 8 cpu box
<br>
with an intel i7).  coresize is unlimited:
<br>
<p><p>ulimit -a
<br>
core file size          (blocks, -c) unlimited
<br>
<p>David
<br>
<p><p>n Fri, 2010-08-13 at 13:47 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 13, 2010, at 1:18 PM, David Ronis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Second coredumpsize is unlimited, and indeed I DO get core dumps when
</span><br>
<span class="quotelev2">&gt; &gt; I'm running a single-processor version.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What launcher are you using underneath Open MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might want to make sure that the underlying launcher actually sets the coredumpsize to unlimited on each server where you're running.  E.g., if you're using rsh/ssh, check that your shell startup files set coredumpsize to unlimited for non-interactive logins.  Or, if you're using (for example) Torque, check to ensure that jobs launched under Torque don't have their coredumpsize automatically reset to 0, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14022.php">James R. Leek: "[OMPI users] Does openmpi not support nested mpiruns?"</a>
<li><strong>Previous message:</strong> <a href="14020.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>Maybe in reply to:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14037.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14037.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
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
