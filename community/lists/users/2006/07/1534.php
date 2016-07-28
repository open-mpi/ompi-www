<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 00:17:31 2006" -->
<!-- isoreceived="20060704041731" -->
<!-- sent="Tue, 4 Jul 2006 00:17:06 -0400" -->
<!-- isosent="20060704041706" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I install OpenMPI on a machine where I have mpich2" -->
<!-- id="200607040017.06874.kyron_at_neuralbs.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1151984425.5101.12.camel_at_localhost" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-04 00:17:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1535.php">Samuel Wieczorek: "[OMPI users] Compilation problem"</a>
<li><strong>Previous message:</strong> <a href="1533.php">Manal Helal: "Re: [OMPI users] Can I install OpenMPI on a machine where I have	mpich2"</a>
<li><strong>In reply to:</strong> <a href="1533.php">Manal Helal: "Re: [OMPI users] Can I install OpenMPI on a machine where I have	mpich2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The only reference I have at the moment (technical article in french).
<br>
<p><a href="http://www.manitou.uqam.ca/manitou.dll?lire+recherche+_DEFAUT+format+html+expression+%2340786002:2">http://www.manitou.uqam.ca/manitou.dll?lire+recherche+_DEFAUT+format+html+expression+%2340786002:2</a>
<br>
<p>I strongly recommend scanning IEEE on the subject though and cheching out the beowulf mailling list.
<br>
<p>Eric
<br>
<p>Le lundi 3 juillet 2006 23:40, Manal Helal a &#195;&#169;crit&#194;&#160;:
<br>
<span class="quotelev1">&gt; Hi Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am a PhD student, and I do need this comparison for academic purposes;
</span><br>
<span class="quotelev1">&gt; a fairly generic one will do, and I guess after running on both, I might
</span><br>
<span class="quotelev1">&gt; have my own application/hardware specific points to add, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again, I appreciate it, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Manal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 2006-07-03 at 23:17 -0400, Eric Thibodeau wrote:
</span><br>
<span class="quotelev2">&gt; &gt; See comments below:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Le lundi 3 juillet 2006 23:01, Manal Helal a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am having problems running a multi-threaded  applications using MPICH
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2, and considering moving to OpenMPI. I already have mpich2 installed,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and don't want to uninstall as yet. Can I have both installed and works
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fine on the same machine?
</span><br>
<span class="quotelev2">&gt; &gt; Yes, simply run the configure script with something like:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=$HOME/openmpi-`uname -m`
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You will then be able to compile applications with:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ~/openmpi-i686/bin/mpicc app.c -o app
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; And run them with:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ~/openmpi-i686/bin/mpirun -np 3 app
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also, I searched for a comparison of features of mpich vs lammpi vs
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openmpi and didn't find any so far. Will you please help me find one?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Comparison is only relevant on your hardware with you application. Any other comparison are mostly for academic purposes and grand assignments ;)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you for your help in advance, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Manal
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1535.php">Samuel Wieczorek: "[OMPI users] Compilation problem"</a>
<li><strong>Previous message:</strong> <a href="1533.php">Manal Helal: "Re: [OMPI users] Can I install OpenMPI on a machine where I have	mpich2"</a>
<li><strong>In reply to:</strong> <a href="1533.php">Manal Helal: "Re: [OMPI users] Can I install OpenMPI on a machine where I have	mpich2"</a>
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
