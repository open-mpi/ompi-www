<?
$subject_val = "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 29 21:34:18 2016" -->
<!-- isoreceived="20160301023418" -->
<!-- sent="Tue, 1 Mar 2016 11:34:16 +0900" -->
<!-- isosent="20160301023416" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation" -->
<!-- id="56D4FFA8.4070603_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAO5ZQ3tgDbvsYJT6eJdnhwv2GKBa36F4O-74MJHmO7GxkbWLng_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-29 21:34:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="28609.php">Matthew Larkin: "[OMPI users] General Questions"</a>
<li><strong>In reply to:</strong> <a href="28608.php">Jun Kudo: "[OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28655.php">Jun Kudo: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28655.php">Jun Kudo: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the report and the test case,
<br>
<p>this is a bug and i pushed a commit to master.
<br>
for the time being, you can download a patch for v1.10 at 
<br>
<a href="https://github.com/ggouaillardet/ompi-release/commit/4afdab0aa86e5127767c4dfbdb763b4cb641e37a.patch">https://github.com/ggouaillardet/ompi-release/commit/4afdab0aa86e5127767c4dfbdb763b4cb641e37a.patch</a>
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/1/2016 12:17 AM, Jun Kudo wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I'm trying to use the neighborhood collective communication 
</span><br>
<span class="quotelev1">&gt; capabilities (MPI_Ineighbor_x) of MPI coupled with the distributed 
</span><br>
<span class="quotelev1">&gt; graph constructor (MPI_Dist_graph_create_adjacent) but I'm 
</span><br>
<span class="quotelev1">&gt; encountering a segmentation fault on a test case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached a 'working' example where I create a MPI communicator 
</span><br>
<span class="quotelev1">&gt; with a simple distributed graph topology where Rank 0 contains Node 0 
</span><br>
<span class="quotelev1">&gt; that communicates bi-directionally (receiving from and sending 
</span><br>
<span class="quotelev1">&gt; to) with Node 1 located on Rank 1.  I then attempt to send integer 
</span><br>
<span class="quotelev1">&gt; messages using the neighborhood collective MPI_Ineighbor_alltoall.  
</span><br>
<span class="quotelev1">&gt; The program run with the command 'mpirun -n 2 ./simpleneighborhood' 
</span><br>
<span class="quotelev1">&gt; compiled with the latest OpenMPI  (1.10.2) encounters a segmentation 
</span><br>
<span class="quotelev1">&gt; fault during the non-blocking call.  The same program compiled with 
</span><br>
<span class="quotelev1">&gt; MPICH (3.2) runs without any problems and with the expected results.  
</span><br>
<span class="quotelev1">&gt; To muddy the waters a little more, the same program compiled with 
</span><br>
<span class="quotelev1">&gt; OpenMPI but using the blocking neighborhood collective, 
</span><br>
<span class="quotelev1">&gt; MPI_Neighbor_alltoall, seems to run just fine as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not really sure at this point if I'm making a simple mistake in 
</span><br>
<span class="quotelev1">&gt; the construction of my test or if something is more fundamentally 
</span><br>
<span class="quotelev1">&gt; wrong.  I would appreciate any insight into my problem!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks ahead of the time for help and let me know if I can provide 
</span><br>
<span class="quotelev1">&gt; anymore information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Jun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28608.php">http://www.open-mpi.org/community/lists/users/2016/02/28608.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28610/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="28609.php">Matthew Larkin: "[OMPI users] General Questions"</a>
<li><strong>In reply to:</strong> <a href="28608.php">Jun Kudo: "[OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28655.php">Jun Kudo: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28655.php">Jun Kudo: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
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
