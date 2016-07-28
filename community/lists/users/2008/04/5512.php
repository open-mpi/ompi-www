<?
$subject_val = "Re: [OMPI users] Openmpi (VASP): Signal code: Address not mapped	(1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 14:26:27 2008" -->
<!-- isoreceived="20080424182627" -->
<!-- sent="Thu, 24 Apr 2008 20:26:15 +0200" -->
<!-- isosent="20080424182615" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi (VASP): Signal code: Address not mapped	(1)" -->
<!-- id="20080424182615.GA5284_at_wintermute" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="28bb77d30804241003m2d040e36l7959670d81b72627_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi (VASP): Signal code: Address not mapped	(1)<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 14:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5513.php">Aurélien Bouteiller: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5511.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>In reply to:</strong> <a href="5507.php">Steven Truong: "[OMPI users] Openmpi (VASP): Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>On 10:03 Thu 24 Apr     , Steven Truong wrote:
<br>
<span class="quotelev1">&gt; Could somebody tell me what might cause this error?
</span><br>
<p>I'll try.
<br>
<p><span class="quotelev1">&gt; [compute-1-27:31550] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [compute-1-27:31550] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [compute-1-27:31550] Signal code: Address not mapped (1)
</span><br>
<p>&quot;Address not mapped&quot; means that the program tried to access a memory
<br>
location that is not part of the process' address space (e.g. null
<br>
pointer).
<br>
<p><span class="quotelev1">&gt; [compute-1-27:31550] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [compute-1-27:31550] [ 0] /lib64/tls/libpthread.so.0 [0x34e6c0c4f0]
</span><br>
<span class="quotelev1">&gt; [compute-1-27:31550] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/vaspopenmpi_scala(__dfast__cnormn+0x18e) [0x4dd0ee]
</span><br>
<span class="quotelev1">&gt; [compute-1-27:31550] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/vaspopenmpi_scala(__rmm_diis__eddrmm+0x59be) [0x5b11fe]
</span><br>
<span class="quotelev1">&gt; [compute-1-27:31550] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/vaspopenmpi_scala(elmin_+0x32fa) [0x608a9a]
</span><br>
<span class="quotelev1">&gt; [compute-1-27:31550] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/vaspopenmpi_scala(MAIN__+0x15492) [0x425f4a]
</span><br>
<span class="quotelev1">&gt; [compute-1-27:31550] [ 5] /usr/local/bin/vaspopenmpi_scala(main+0xe) [0x6ed9ee]
</span><br>
<span class="quotelev1">&gt; [compute-1-27:31550] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev1">&gt; [0x34e5f1c3fb]
</span><br>
<span class="quotelev1">&gt; [compute-1-27:31550] [ 7] /usr/local/bin/vaspopenmpi_scala [0x410a2a]
</span><br>
<span class="quotelev1">&gt; [compute-1-27:31550] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [compute-1-27:31549] *** Process received signal ***
</span><br>
<p>What follows is a backtrace of the functions currently being executed
<br>
(in reverse order, as found on the stack). I'd hazard a guess that
<br>
it's not OMPI's fault but VASP's, since the segfault happens in one of
<br>
its functions. Maybe you should have a look there.
<br>
<p>HTH
<br>
-Andi
<br>
<p><p><pre>
-- 
============================================
Andreas Sch&#228;fer
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
============================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5512/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5513.php">Aurélien Bouteiller: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5511.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>In reply to:</strong> <a href="5507.php">Steven Truong: "[OMPI users] Openmpi (VASP): Signal code: Address not mapped (1)"</a>
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
