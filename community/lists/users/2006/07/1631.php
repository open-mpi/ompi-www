<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 16 18:21:47 2006" -->
<!-- isoreceived="20060716222147" -->
<!-- sent="Sun, 16 Jul 2006 16:21:37 -0600" -->
<!-- isosent="20060716222137" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR" -->
<!-- id="DFC23615-3C49-47C9-B012-CED82566F6A3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200607161813.14134.kyron_at_neuralbs.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-16 18:21:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1632.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Previous message:</strong> <a href="1630.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>In reply to:</strong> <a href="1630.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1632.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Reply:</strong> <a href="1632.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2006, at 4:13 PM, Eric Thibodeau wrote:
<br>
<span class="quotelev1">&gt; Now that I have that out of the way, I'd like to know how I am  
</span><br>
<span class="quotelev1">&gt; supposed to compile my apps so that they can run on an homogenous  
</span><br>
<span class="quotelev1">&gt; network with mpi. Here is an example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kyron_at_headless ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ mpicc -L/ 
</span><br>
<span class="quotelev1">&gt; usr/X/lib -lm -lX11 -O3 mandelbrot-mpi.c -o mandelbrot-mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kyron_at_headless ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ mpirun -- 
</span><br>
<span class="quotelev1">&gt; hostfile hostlist -np 3 ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2/ 
</span><br>
<span class="quotelev1">&gt; mandelbrot-mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could not execute the executable &quot;/home/kyron/1_Files/1_ETS/ 
</span><br>
<span class="quotelev1">&gt; 1_Maitrise/MGL810/Devoir2/mandelbrot-mpi&quot;: Exec format error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could mean that your PATH or executable name is wrong, or that  
</span><br>
<span class="quotelev1">&gt; you do not
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; have the necessary permissions. Please ensure that the executable  
</span><br>
<span class="quotelev1">&gt; is able to be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; found and executed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As can be seen with the uname -a that was run previously, I have 2  
</span><br>
<span class="quotelev1">&gt; &quot;local nodes&quot; on the x86_64 and two i686 nodes. I tried to find  
</span><br>
<span class="quotelev1">&gt; examples in the Doc on howto compile applications correctly for  
</span><br>
<span class="quotelev1">&gt; such a setup without compromising performance but I came short of  
</span><br>
<span class="quotelev1">&gt; an example.
</span><br>
<p>&nbsp;From the sound of it, you have a heterogeneous configuration -- some  
<br>
nodes are x86_64 and some are x86.  Because of this, you either have  
<br>
to compile your application twice, once for each platform or compile  
<br>
your application for the lowest common denominator.  My guess would  
<br>
be that it easier and more foolproof if you compiled everything in 32  
<br>
bit mode.  If you run in a mixed mode, using application schemas (see  
<br>
the mpirun man page) will be the easiest way to make things work.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1632.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Previous message:</strong> <a href="1630.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>In reply to:</strong> <a href="1630.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1632.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Reply:</strong> <a href="1632.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
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
