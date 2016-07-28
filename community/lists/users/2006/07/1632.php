<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 16 18:53:56 2006" -->
<!-- isoreceived="20060716225356" -->
<!-- sent="Sun, 16 Jul 2006 18:53:33 -0400" -->
<!-- isosent="20060716225333" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR" -->
<!-- id="200607161853.33885.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DFC23615-3C49-47C9-B012-CED82566F6A3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-07-16 18:53:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1633.php">Mahesh Barve: "[OMPI users] What Really Happens During OpenMPI MPI_INIT?"</a>
<li><strong>Previous message:</strong> <a href="1631.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>In reply to:</strong> <a href="1631.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, now all makes more sense to me. I'll try the hard way, multiple builds for multiple envs ;)
<br>
<p>Eric
<br>
<p>Le dimanche 16 juillet 2006 18:21, Brian Barrett a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; On Jul 16, 2006, at 4:13 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Now that I have that out of the way, I'd like to know how I am  
</span><br>
<span class="quotelev2">&gt; &gt; supposed to compile my apps so that they can run on an homogenous  
</span><br>
<span class="quotelev2">&gt; &gt; network with mpi. Here is an example:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; kyron_at_headless ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ mpicc -L/ 
</span><br>
<span class="quotelev2">&gt; &gt; usr/X/lib -lm -lX11 -O3 mandelbrot-mpi.c -o mandelbrot-mpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; kyron_at_headless ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ mpirun -- 
</span><br>
<span class="quotelev2">&gt; &gt; hostfile hostlist -np 3 ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2/ 
</span><br>
<span class="quotelev2">&gt; &gt; mandelbrot-mpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could not execute the executable &quot;/home/kyron/1_Files/1_ETS/ 
</span><br>
<span class="quotelev2">&gt; &gt; 1_Maitrise/MGL810/Devoir2/mandelbrot-mpi&quot;: Exec format error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This could mean that your PATH or executable name is wrong, or that  
</span><br>
<span class="quotelev2">&gt; &gt; you do not
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; have the necessary permissions. Please ensure that the executable  
</span><br>
<span class="quotelev2">&gt; &gt; is able to be
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; found and executed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As can be seen with the uname -a that was run previously, I have 2  
</span><br>
<span class="quotelev2">&gt; &gt; &quot;local nodes&quot; on the x86_64 and two i686 nodes. I tried to find  
</span><br>
<span class="quotelev2">&gt; &gt; examples in the Doc on howto compile applications correctly for  
</span><br>
<span class="quotelev2">&gt; &gt; such a setup without compromising performance but I came short of  
</span><br>
<span class="quotelev2">&gt; &gt; an example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From the sound of it, you have a heterogeneous configuration -- some  
</span><br>
<span class="quotelev1">&gt; nodes are x86_64 and some are x86.  Because of this, you either have  
</span><br>
<span class="quotelev1">&gt; to compile your application twice, once for each platform or compile  
</span><br>
<span class="quotelev1">&gt; your application for the lowest common denominator.  My guess would  
</span><br>
<span class="quotelev1">&gt; be that it easier and more foolproof if you compiled everything in 32  
</span><br>
<span class="quotelev1">&gt; bit mode.  If you run in a mixed mode, using application schemas (see  
</span><br>
<span class="quotelev1">&gt; the mpirun man page) will be the easiest way to make things work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="1633.php">Mahesh Barve: "[OMPI users] What Really Happens During OpenMPI MPI_INIT?"</a>
<li><strong>Previous message:</strong> <a href="1631.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>In reply to:</strong> <a href="1631.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
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
