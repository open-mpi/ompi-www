<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 14:27:40 2007" -->
<!-- isoreceived="20070608182740" -->
<!-- sent="Fri, 8 Jun 2007 14:27:29 -0400" -->
<!-- isosent="20070608182729" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communication Latency" -->
<!-- id="6D29B394-F8BC-4F7E-85DA-97BB298EB12D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="00c701c7a794$63a821f0$03f41e8d_at_desktop" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 14:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3416.php">Jeff Squyres: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<li><strong>In reply to:</strong> <a href="3368.php">Andy Georgi: "[OMPI users]  Communication Latency"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The answer is &quot;it depends&quot;; there's a lot of factors involved.
<br>
<p>- What is the topology of your network?
<br>
- Where do processes land within the topology of the network?
<br>
- What interconnect are you using?  (e.g., the openib BTL will  
<br>
usually use short message RDMA to a limited set of peers as an  
<br>
optimization)
<br>
- How long are your messages?
<br>
<p>OMPI does not have any special optimizations for point-to-point  
<br>
communications for MPI_COMM_WORLD ranks that happen to be powers of  
<br>
two.  Other factors may contribute to make that true for your runs,  
<br>
but there's nothing hard-coded in Open MPI for that.
<br>
<p><p><p>On Jun 5, 2007, at 1:10 PM, Andy Georgi wrote:
<br>
<p><span class="quotelev1">&gt; hi everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'm new on this list and started using OpenMPI for my parallel  
</span><br>
<span class="quotelev1">&gt; jobs. first step was to measure the latency for blocking  
</span><br>
<span class="quotelev1">&gt; communication functions. now my first question: is it possible that  
</span><br>
<span class="quotelev1">&gt; ordained communication pairs will be optimized?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; background:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; latency for special processnumbers is nearly 25% smaller, e.g. for  
</span><br>
<span class="quotelev1">&gt; process 1,2,4,8,16,32,64... (every computer scientist should see  
</span><br>
<span class="quotelev1">&gt; the pattern ;-)). it doesn't matter from which process i send the  
</span><br>
<span class="quotelev1">&gt; message if the receiver is one of these processes i have top  
</span><br>
<span class="quotelev1">&gt; latency values. it's not possible that this effect comes through  
</span><br>
<span class="quotelev1">&gt; the network because communication from proc5 to proc32 e.g. is  
</span><br>
<span class="quotelev1">&gt; faster than communication from proc32 to proc5. i've tried it with  
</span><br>
<span class="quotelev1">&gt; OpenMPI for Intel 1.1.4 and 1.2.2 and OpenMPI for PGI 1.2.2. always  
</span><br>
<span class="quotelev1">&gt; the same results. now i think it must be a kind of optimization. if  
</span><br>
<span class="quotelev1">&gt; it's so i would like to know it because then i have an  
</span><br>
<span class="quotelev1">&gt; explanation ;-).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thx and regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; andy
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3416.php">Jeff Squyres: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<li><strong>In reply to:</strong> <a href="3368.php">Andy Georgi: "[OMPI users]  Communication Latency"</a>
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
