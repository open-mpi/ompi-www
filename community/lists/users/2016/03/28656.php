<?
$subject_val = "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  7 21:07:52 2016" -->
<!-- isoreceived="20160308020752" -->
<!-- sent="Tue, 8 Mar 2016 11:07:53 +0900" -->
<!-- isosent="20160308020753" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation" -->
<!-- id="56DE33F9.9090205_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAO5ZQ3s_8jqAOx0dTuScBvM==M5Rh54+6EW=t1y5GHN+Q_TJng_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-07 21:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28657.php">dpchoudh .: "[OMPI users] iWARP usage issue"</a>
<li><strong>Previous message:</strong> <a href="28655.php">Jun Kudo: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<li><strong>In reply to:</strong> <a href="28655.php">Jun Kudo: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jun,
<br>
<p>a patch is available at 
<br>
<a href="https://github.com/ggouaillardet/ompi-release/commit/f277beace9fbe8dd71f733602b5d4b0344d77a29.patch">https://github.com/ggouaillardet/ompi-release/commit/f277beace9fbe8dd71f733602b5d4b0344d77a29.patch</a>
<br>
this is not a bulletproof one, but it does fix your problem.
<br>
<p>in this case, MPI_Ineighbor_alltoallw is invoked with sendbuf == 
<br>
recvbuf, and internally,
<br>
libnbc considers this is an in place alltoall, and hence allocate a 
<br>
temporary buffer
<br>
(that is now (almost) correctly used with this patch)
<br>
this is suboptimal, since even if sendbuf == recvbuf, the displacements 
<br>
you use ensure there
<br>
is no overlap.
<br>
<p>bottom line, this patch does fix your problem, but because of the libnbc 
<br>
internals, the second MPI_Ineighbor_alltoallw is suboptimal (assuming 
<br>
such a call is allowed by the standard)
<br>
<p>master does things differently, and there is no such bug here.
<br>
<p><p>George,
<br>
<p>is it valid (per the MPI standard) to invoke MPI_Ineighbor_alltoallw 
<br>
with sendbuf == recvbuf ?
<br>
<p>bonus question :
<br>
what if we have sendbuf != recvbuf, but the data overlap because of the 
<br>
displacements ?
<br>
for example :
<br>
int buf[1];
<br>
MPI_Ineighbor_alltoallw(buf, 1, {0}, MPI_INT, buf+1, 1, {-4}, MPI_INT, 
<br>
MPI_COMM_WORLD, &amp;request)
<br>
is this allowed per the MPI standard ? if yes, then the implementation 
<br>
should figure this out, and i am pretty sure it does not currently.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 3/8/2016 9:18 AM, Jun Kudo wrote:
<br>
<span class="quotelev1">&gt; Giles,
</span><br>
<span class="quotelev1">&gt; Thanks for the small bug fix.  It helped clear up that test case but 
</span><br>
<span class="quotelev1">&gt; I'm again running into another segmentation fault on a more 
</span><br>
<span class="quotelev1">&gt; complicated problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached another 'working' example.  This time I am using the 
</span><br>
<span class="quotelev1">&gt; MPI_Ineighbor_alltoallw on a triangular topology; node 0 communicates 
</span><br>
<span class="quotelev1">&gt; bi-directionally with nodes 1 and 2, node 1 with nodes 0 and 2, and 
</span><br>
<span class="quotelev1">&gt; node 2 with node 0 and 1.  Each node is sending one double (with value 
</span><br>
<span class="quotelev1">&gt; my_rank) to each of its neighbors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code has two different calls to the MPI API that only differ in 
</span><br>
<span class="quotelev1">&gt; the receive buffer arguments.  In both versions, I am sending from and 
</span><br>
<span class="quotelev1">&gt; receiving into the same static array.  In the working 
</span><br>
<span class="quotelev1">&gt; (non-segfaulting) version, I am receiving into the latter half of the 
</span><br>
<span class="quotelev1">&gt; array by pointing to the start of the second half (&amp;send_number[2]) 
</span><br>
<span class="quotelev1">&gt; and specifying displacements of 0 and 8 bytes.  In the segfaulting 
</span><br>
<span class="quotelev1">&gt; version, I am again receiving into the latter half of the array by 
</span><br>
<span class="quotelev1">&gt; pointing to the start of the array (send_number) with displacements of 
</span><br>
<span class="quotelev1">&gt; 16 to 24 bytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program run with the command 'mpirun -n 3 
</span><br>
<span class="quotelev1">&gt; ./simpleneighborhood_multiple' compiled with the latest OpenMPI 
</span><br>
<span class="quotelev1">&gt; (1.10.2) + patch encounters a segmentation fault when receiving using 
</span><br>
<span class="quotelev1">&gt; the latter commands.  The same program compiled with MPICH (3.2) runs 
</span><br>
<span class="quotelev1">&gt; without any problems and with the expected results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if I'm screwing anything up.  Thanks for the help.
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
<span class="quotelev1">&gt; On Mon, Feb 29, 2016 at 9:34 PM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks for the report and the test case,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     this is a bug and i pushed a commit to master.
</span><br>
<span class="quotelev1">&gt;     for the time being, you can download a patch for v1.10 at
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/ggouaillardet/ompi-release/commit/4afdab0aa86e5127767c4dfbdb763b4cb641e37a.patch">https://github.com/ggouaillardet/ompi-release/commit/4afdab0aa86e5127767c4dfbdb763b4cb641e37a.patch</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 3/1/2016 12:17 AM, Jun Kudo wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hello,
</span><br>
<span class="quotelev2">&gt;&gt;     I'm trying to use the neighborhood collective communication
</span><br>
<span class="quotelev2">&gt;&gt;     capabilities (MPI_Ineighbor_x) of MPI coupled with the
</span><br>
<span class="quotelev2">&gt;&gt;     distributed graph constructor (MPI_Dist_graph_create_adjacent)
</span><br>
<span class="quotelev2">&gt;&gt;     but I'm encountering a segmentation fault on a test case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I have attached a 'working' example where I create a MPI
</span><br>
<span class="quotelev2">&gt;&gt;     communicator with a simple distributed graph topology where Rank
</span><br>
<span class="quotelev2">&gt;&gt;     0 contains Node 0 that communicates bi-directionally (receiving
</span><br>
<span class="quotelev2">&gt;&gt;     from and sending to) with Node 1 located on Rank 1.  I then
</span><br>
<span class="quotelev2">&gt;&gt;     attempt to send integer messages using the neighborhood
</span><br>
<span class="quotelev2">&gt;&gt;     collective MPI_Ineighbor_alltoall. The program run with the
</span><br>
<span class="quotelev2">&gt;&gt;     command 'mpirun -n 2 ./simpleneighborhood' compiled with the
</span><br>
<span class="quotelev2">&gt;&gt;     latest OpenMPI  (1.10.2) encounters a segmentation fault during
</span><br>
<span class="quotelev2">&gt;&gt;     the non-blocking call.  The same program compiled with MPICH
</span><br>
<span class="quotelev2">&gt;&gt;     (3.2) runs without any problems and with the expected results. 
</span><br>
<span class="quotelev2">&gt;&gt;     To muddy the waters a little more, the same program compiled with
</span><br>
<span class="quotelev2">&gt;&gt;     OpenMPI but using the blocking neighborhood collective,
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Neighbor_alltoall, seems to run just fine as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I'm not really sure at this point if I'm making a simple mistake
</span><br>
<span class="quotelev2">&gt;&gt;     in the construction of my test or if something is more
</span><br>
<span class="quotelev2">&gt;&gt;     fundamentally wrong.  I would appreciate any insight into my
</span><br>
<span class="quotelev2">&gt;&gt;     problem!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks ahead of the time for help and let me know if I can
</span><br>
<span class="quotelev2">&gt;&gt;     provide anymore information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt;     Jun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/02/28608.php">http://www.open-mpi.org/community/lists/users/2016/02/28608.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/02/28610.php">http://www.open-mpi.org/community/lists/users/2016/02/28610.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28655.php">http://www.open-mpi.org/community/lists/users/2016/03/28655.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28656/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28657.php">dpchoudh .: "[OMPI users] iWARP usage issue"</a>
<li><strong>Previous message:</strong> <a href="28655.php">Jun Kudo: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<li><strong>In reply to:</strong> <a href="28655.php">Jun Kudo: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
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
