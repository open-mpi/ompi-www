<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  3 23:51:08 2006" -->
<!-- isoreceived="20060704035108" -->
<!-- sent="Tue, 04 Jul 2006 13:40:25 +1000" -->
<!-- isosent="20060704034025" -->
<!-- name="Manal Helal" -->
<!-- email="manalorama_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I install OpenMPI on a machine where I have	mpich2" -->
<!-- id="1151984425.5101.12.camel_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="200607032317.39655.kyron_at_neuralbs.com" -->
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
<strong>From:</strong> Manal Helal (<em>manalorama_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-03 23:40:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1534.php">Eric Thibodeau: "Re: [OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<li><strong>Previous message:</strong> <a href="1532.php">Eric Thibodeau: "Re: [OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<li><strong>In reply to:</strong> <a href="1532.php">Eric Thibodeau: "Re: [OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1534.php">Eric Thibodeau: "Re: [OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<li><strong>Reply:</strong> <a href="1534.php">Eric Thibodeau: "Re: [OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eric
<br>
<p>Thank you very much for your reply.
<br>
<p>I am a PhD student, and I do need this comparison for academic purposes;
<br>
a fairly generic one will do, and I guess after running on both, I might
<br>
have my own application/hardware specific points to add, 
<br>
<p>Thanks again, I appreciate it, 
<br>
<p>Manal
<br>
<p>On Mon, 2006-07-03 at 23:17 -0400, Eric Thibodeau wrote:
<br>
<span class="quotelev1">&gt; See comments below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le lundi 3 juillet 2006 23:01, Manal Helal a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am having problems running a multi-threaded  applications using MPICH
</span><br>
<span class="quotelev2">&gt; &gt; 2, and considering moving to OpenMPI. I already have mpich2 installed,
</span><br>
<span class="quotelev2">&gt; &gt; and don't want to uninstall as yet. Can I have both installed and works
</span><br>
<span class="quotelev2">&gt; &gt; fine on the same machine?
</span><br>
<span class="quotelev1">&gt; Yes, simply run the configure script with something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$HOME/openmpi-`uname -m`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You will then be able to compile applications with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~/openmpi-i686/bin/mpicc app.c -o app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And run them with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~/openmpi-i686/bin/mpirun -np 3 app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also, I searched for a comparison of features of mpich vs lammpi vs
</span><br>
<span class="quotelev2">&gt; &gt; openmpi and didn't find any so far. Will you please help me find one?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comparison is only relevant on your hardware with you application. Any other comparison are mostly for academic purposes and grand assignments ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your help in advance, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Manal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1534.php">Eric Thibodeau: "Re: [OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<li><strong>Previous message:</strong> <a href="1532.php">Eric Thibodeau: "Re: [OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<li><strong>In reply to:</strong> <a href="1532.php">Eric Thibodeau: "Re: [OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1534.php">Eric Thibodeau: "Re: [OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
<li><strong>Reply:</strong> <a href="1534.php">Eric Thibodeau: "Re: [OMPI users] Can I install OpenMPI on a machine where I have mpich2"</a>
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
