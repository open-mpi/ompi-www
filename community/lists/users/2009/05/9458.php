<?
$subject_val = "Re: [OMPI users] Fwd: open mpi ptoblem with LAM previously installed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 08:26:36 2009" -->
<!-- isoreceived="20090528122636" -->
<!-- sent="Thu, 28 May 2009 08:26:18 -0400" -->
<!-- isosent="20090528122618" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: open mpi ptoblem with LAM previously installed" -->
<!-- id="6122DEF9-DC47-4614-A7D5-0482F25037F3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fe852e230905271445y27c02a9agff745d994f8c954_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: open mpi ptoblem with LAM previously installed<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-28 08:26:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9459.php">Joe Griffin: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<li><strong>Previous message:</strong> <a href="9457.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<li><strong>In reply to:</strong> <a href="9449.php">Dimar Gonzalez: "[OMPI users] Fwd: open mpi ptoblem with LAM previously installed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 27, 2009, at 5:45 PM, Dimar Gonzalez wrote:
<br>
<p><span class="quotelev1">&gt; I have the following error when I run a job:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that there is no lamd running on the host cbuach.
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; I added the environment variables in my .bashrc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATH=/usr/local/openmpi-1.3.2/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export PATH
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.3.2/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried defining directly the path of the mpirun on the open-mpi  
</span><br>
<span class="quotelev1">&gt; folder:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2/bin/mpirun --host ubuntu-frontend -np 8  mb  
</span><br>
<span class="quotelev1">&gt; -i  batch_flavescens.txt&gt;log.txt &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but doesn't work, I hope any help to fix this problem.
</span><br>
<p><p>You might want to also check that your &quot;mb&quot; MPI application was  
<br>
compiled with the Open MPI wrapper compilers (not LAM's wrapper  
<br>
compilers).
<br>
<p>Additionally, if no one is using LAM/MPI, you might want to remove  
<br>
it.  If LAM was installed by default on your system by the OS, you can  
<br>
probably use your OS's package management system (rpm, yum, whatever)  
<br>
to remove LAM.
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
<li><strong>Next message:</strong> <a href="9459.php">Joe Griffin: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<li><strong>Previous message:</strong> <a href="9457.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<li><strong>In reply to:</strong> <a href="9449.php">Dimar Gonzalez: "[OMPI users] Fwd: open mpi ptoblem with LAM previously installed"</a>
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
