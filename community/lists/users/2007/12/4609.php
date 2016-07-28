<?
$subject_val = "Re: [OMPI users] OpenMP + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 09:42:45 2007" -->
<!-- isoreceived="20071206144245" -->
<!-- sent="Thu, 6 Dec 2007 09:42:37 -0500" -->
<!-- isosent="20071206144237" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP + OpenMPI" -->
<!-- id="4F6B4896-3745-4C27-80AB-E37187AFED7A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="927233.58948.qm_at_web32806.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMP + OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 09:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4610.php">Durga Choudhury: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4608.php">Ralph H Castain: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>In reply to:</strong> <a href="4600.php">Tee Wen Kai: "[OMPI users] OpenMP + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4610.php">Durga Choudhury: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4610.php">Durga Choudhury: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow, that's quite a .sig.  :-)
<br>
<p>Open MPI will automatically stripe large messages across however many  
<br>
NICs you have.  So you shouldn't need to use multiple threads.
<br>
<p>The threading support in the OMPI v1.2 series is broken; it's not  
<br>
worth using. There's a big warning in configure when you enable it.  :-)
<br>
<p><p>On Dec 5, 2007, at 9:57 PM, Tee Wen Kai wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed openmpi-1.2.3. My system has two ethernet ports.  
</span><br>
<span class="quotelev1">&gt; Thus, I am trying to make use of both ports to speed up the  
</span><br>
<span class="quotelev1">&gt; communication process by using openmp to split into two threads.  
</span><br>
<span class="quotelev1">&gt; However, this implementation always cause error. Then I realized  
</span><br>
<span class="quotelev1">&gt; that I need to build openmpi using --enable-mpi-threads and use  
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread to initialize. But, the initialization always return  
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE no matter what value I set. Using ompi_info|grep  
</span><br>
<span class="quotelev1">&gt; Thread, it shows that thread support has already been activated.  
</span><br>
<span class="quotelev1">&gt; Thus, I seek your help to teach me what other configurations I need  
</span><br>
<span class="quotelev1">&gt; to set in order to use multi-threads and what are the parameters to  
</span><br>
<span class="quotelev1">&gt; include in mpirun in order to use the two ethernet ports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tee
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _________________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Many of us spend our time wishing for things we could have if we  
</span><br>
<span class="quotelev1">&gt; didn't spend half our time wishing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking for last minute shopping deals? Find them fast with Yahoo!  
</span><br>
<span class="quotelev1">&gt; Search._______________________________________________
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
<li><strong>Next message:</strong> <a href="4610.php">Durga Choudhury: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4608.php">Ralph H Castain: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>In reply to:</strong> <a href="4600.php">Tee Wen Kai: "[OMPI users] OpenMP + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4610.php">Durga Choudhury: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4610.php">Durga Choudhury: "Re: [OMPI users] OpenMP + OpenMPI"</a>
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
