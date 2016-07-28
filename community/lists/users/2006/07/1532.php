<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  3 23:18:02 2006" -->
<!-- isoreceived="20060704031802" -->
<!-- sent="Mon, 3 Jul 2006 23:17:39 -0400" -->
<!-- isosent="20060704031739" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I install OpenMPI on a machine where I have mpich2" -->
<!-- id="200607032317.39655.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1151982096.5101.8.camel_at_localhost" -->
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
<strong>Date:</strong> 2006-07-03 23:17:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1533.php">Manal Helal: "Re: [OMPI users] Can I install OpenMPI on a machine where I have	mpich2"</a>
<li><strong>Previous message:</strong> <a href="1531.php">Manal Helal: "[OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<li><strong>In reply to:</strong> <a href="1531.php">Manal Helal: "[OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1533.php">Manal Helal: "Re: [OMPI users] Can I install OpenMPI on a machine where I have	mpich2"</a>
<li><strong>Reply:</strong> <a href="1533.php">Manal Helal: "Re: [OMPI users] Can I install OpenMPI on a machine where I have	mpich2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See comments below:
<br>
<p>Le lundi 3 juillet 2006 23:01, Manal Helal a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having problems running a multi-threaded  applications using MPICH
</span><br>
<span class="quotelev1">&gt; 2, and considering moving to OpenMPI. I already have mpich2 installed,
</span><br>
<span class="quotelev1">&gt; and don't want to uninstall as yet. Can I have both installed and works
</span><br>
<span class="quotelev1">&gt; fine on the same machine?
</span><br>
Yes, simply run the configure script with something like:
<br>
<p>./configure --prefix=$HOME/openmpi-`uname -m`
<br>
<p>You will then be able to compile applications with:
<br>
<p>~/openmpi-i686/bin/mpicc app.c -o app
<br>
<p>And run them with:
<br>
<p>~/openmpi-i686/bin/mpirun -np 3 app
<br>
<p><span class="quotelev1">&gt; Also, I searched for a comparison of features of mpich vs lammpi vs
</span><br>
<span class="quotelev1">&gt; openmpi and didn't find any so far. Will you please help me find one?
</span><br>
<p>Comparison is only relevant on your hardware with you application. Any other comparison are mostly for academic purposes and grand assignments ;)
<br>
<p><span class="quotelev1">&gt; Thank you for your help in advance, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Manal
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
<li><strong>Next message:</strong> <a href="1533.php">Manal Helal: "Re: [OMPI users] Can I install OpenMPI on a machine where I have	mpich2"</a>
<li><strong>Previous message:</strong> <a href="1531.php">Manal Helal: "[OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<li><strong>In reply to:</strong> <a href="1531.php">Manal Helal: "[OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1533.php">Manal Helal: "Re: [OMPI users] Can I install OpenMPI on a machine where I have	mpich2"</a>
<li><strong>Reply:</strong> <a href="1533.php">Manal Helal: "Re: [OMPI users] Can I install OpenMPI on a machine where I have	mpich2"</a>
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
