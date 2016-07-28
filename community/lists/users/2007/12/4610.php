<?
$subject_val = "Re: [OMPI users] OpenMP + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 09:54:31 2007" -->
<!-- isoreceived="20071206145431" -->
<!-- sent="Thu, 6 Dec 2007 09:54:22 -0500" -->
<!-- isosent="20071206145422" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP + OpenMPI" -->
<!-- id="f869b68c0712060654p5bc2ff5bt14d878c56c55d8b4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F6B4896-3745-4C27-80AB-E37187AFED7A_at_cisco.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 09:54:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4611.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4609.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="4609.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4612.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4612.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Automatically striping large messages across multiple NICs is certainly a
<br>
very nice feature; I was not aware that OpenMPI does this transparently. (I
<br>
wonder if other MPI implementations do this or not). However, I have the
<br>
following concern: Since the communication over an ethernet NIC is most
<br>
likely over IP, does it take into account the route cost when striping
<br>
messages? For example, host A and B in the MPD ring might be connected via
<br>
two NICs, one direct and one via an intermediate router, or one with a large
<br>
bandwidth and another with a small bandwidth. Does OpenMPI send a smaller
<br>
chunk of data over a route with a higher cost?
<br>
<p>Because of this concern, I think the channel bonding approach someone else
<br>
suggested is more preferable; all these details will be taken care of at the
<br>
hardware level instead of at the IP level.
<br>
Thanks
<br>
Durga
<br>
<p>On Dec 6, 2007 9:42 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Wow, that's quite a .sig.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI will automatically stripe large messages across however many
</span><br>
<span class="quotelev1">&gt; NICs you have.  So you shouldn't need to use multiple threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The threading support in the OMPI v1.2 series is broken; it's not
</span><br>
<span class="quotelev1">&gt; worth using. There's a big warning in configure when you enable it.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 5, 2007, at 9:57 PM, Tee Wen Kai wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have installed openmpi-1.2.3. My system has two ethernet ports.
</span><br>
<span class="quotelev2">&gt; &gt; Thus, I am trying to make use of both ports to speed up the
</span><br>
<span class="quotelev2">&gt; &gt; communication process by using openmp to split into two threads.
</span><br>
<span class="quotelev2">&gt; &gt; However, this implementation always cause error. Then I realized
</span><br>
<span class="quotelev2">&gt; &gt; that I need to build openmpi using --enable-mpi-threads and use
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init_thread to initialize. But, the initialization always return
</span><br>
<span class="quotelev2">&gt; &gt; MPI_THREAD_SINGLE no matter what value I set. Using ompi_info|grep
</span><br>
<span class="quotelev2">&gt; &gt; Thread, it shows that thread support has already been activated.
</span><br>
<span class="quotelev2">&gt; &gt; Thus, I seek your help to teach me what other configurations I need
</span><br>
<span class="quotelev2">&gt; &gt; to set in order to use multi-threads and what are the parameters to
</span><br>
<span class="quotelev2">&gt; &gt; include in mpirun in order to use the two ethernet ports.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tee
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Many of us spend our time wishing for things we could have if we
</span><br>
<span class="quotelev2">&gt; &gt; didn't spend half our time wishing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Looking for last minute shopping deals? Find them fast with Yahoo!
</span><br>
<span class="quotelev2">&gt; &gt; Search._______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Its a battle between humans and communists;
Which side are you in?
.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4610/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4611.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4609.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="4609.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4612.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4612.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
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
