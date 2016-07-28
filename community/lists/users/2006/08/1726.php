<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  7 10:41:41 2006" -->
<!-- isoreceived="20060807144141" -->
<!-- sent="Mon, 7 Aug 2006 08:41:36 -0600" -->
<!-- isosent="20060807144136" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Proprieatary transport layer for openMPI..." -->
<!-- id="2FCFEF5D-779D-4DD4-8CE1-11EFE4ABD07B_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f869b68c0608070718t1d15e4cep9876263efd03665f_at_mail.gmail.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-07 10:41:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1727.php">Brock Palen: "[OMPI users] network preference"</a>
<li><strong>Previous message:</strong> <a href="1725.php">Durga Choudhury: "[OMPI users] Proprieatary transport layer for openMPI..."</a>
<li><strong>In reply to:</strong> <a href="1725.php">Durga Choudhury: "[OMPI users] Proprieatary transport layer for openMPI..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Durga,
<br>
<p><p>Currently there are two options for porting an interconnect to Open  
<br>
MPI, one would be to use the BTL interface (Byte Transfer Layer).  
<br>
Another would be to use the MTL (Matching Transport Layer). The  
<br>
difference is that the MTL is useful for those APIs which expose  
<br>
matching and other high level semantics such as Portals or MX. If  
<br>
your  API does not support these higher level protocols the BTL would  
<br>
be a good choice. There is some documentation on the BTL interface,  
<br>
one paper describes the various layers at a high level and is found  
<br>
here: <a href="http://www.open-mpi.org/papers/ipdps-2006">http://www.open-mpi.org/papers/ipdps-2006</a>. For more details  
<br>
there was an extensive presentation done at a developers conference  
<br>
and the slides are available here: <a href="http://www.open-mpi.org/papers/">http://www.open-mpi.org/papers/</a> 
<br>
workshop-2006/wed_01_pt2pt.pdf . This should give you a place to  
<br>
start. Depending on the semantics of your API, writing a BTL can be  
<br>
done quite quickly although interconnect specific optimization can  
<br>
take some time. You mention that you would like to leverage your  
<br>
switch architecture, not sure what you mean by this, is this for  
<br>
point-to-point communication or for collective optimization? If you  
<br>
need collective optimization you would need to touch a few other  
<br>
components in Open MPI but this could also  be done in a modular way.  
<br>
Let me know if you need any other assistance as we would be happy to  
<br>
have another interconnect supported in Open MPI.
<br>
<p>- Galen
<br>
<p><p>On Aug 7, 2006, at 8:18 AM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; Hi All
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have been using the Argonne MPICH (over TCP/IP) on our in-house  
</span><br>
<span class="quotelev1">&gt; designed embedded multicomputer for last several months with  
</span><br>
<span class="quotelev1">&gt; satisfactory results. Our network technology is custom built and is  
</span><br>
<span class="quotelev1">&gt; * not* infiniband (or any published standards, such as Myrinet)  
</span><br>
<span class="quotelev1">&gt; based. This is due to the nature of our application. We are  
</span><br>
<span class="quotelev1">&gt; currently running TCP/IP over out backplane network and using that  
</span><br>
<span class="quotelev1">&gt; as the transport layer of MPICH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the next generation of our software release, we are planning to  
</span><br>
<span class="quotelev1">&gt; write a low level transport layer to leverage our switch  
</span><br>
<span class="quotelev1">&gt; architecture and considering changing the entire MPI protocol stack  
</span><br>
<span class="quotelev1">&gt; to openMPI. From what I have found so far, I'd have to write  
</span><br>
<span class="quotelev1">&gt; routines to provide services similar to the ones found under ompi/ 
</span><br>
<span class="quotelev1">&gt; mca/btl/{tcp,mx,...}. I'd like to get some guidance as to how to do  
</span><br>
<span class="quotelev1">&gt; this. Is there a document about this? Has anybody in this list done  
</span><br>
<span class="quotelev1">&gt; something similar before and if so, what was the difficulty level  
</span><br>
<span class="quotelev1">&gt; involved?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Devil wanted omnipresence;
</span><br>
<span class="quotelev1">&gt; He therefore created communists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1726/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1727.php">Brock Palen: "[OMPI users] network preference"</a>
<li><strong>Previous message:</strong> <a href="1725.php">Durga Choudhury: "[OMPI users] Proprieatary transport layer for openMPI..."</a>
<li><strong>In reply to:</strong> <a href="1725.php">Durga Choudhury: "[OMPI users] Proprieatary transport layer for openMPI..."</a>
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
