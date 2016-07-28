<?
$subject_val = "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  7 19:18:19 2016" -->
<!-- isoreceived="20160308001819" -->
<!-- sent="Mon, 7 Mar 2016 19:18:16 -0500" -->
<!-- isosent="20160308001816" -->
<!-- name="Jun Kudo" -->
<!-- email="junkudo18_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation" -->
<!-- id="CAO5ZQ3s_8jqAOx0dTuScBvM==M5Rh54+6EW=t1y5GHN+Q_TJng_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="56D4FFA8.4070603_at_rist.or.jp" -->
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
<strong>From:</strong> Jun Kudo (<em>junkudo18_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-07 19:18:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28656.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<li><strong>Previous message:</strong> <a href="28654.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28610.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28656.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<li><strong>Reply:</strong> <a href="28656.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Giles,
<br>
Thanks for the small bug fix.  It helped clear up that test case but I'm
<br>
again running into another segmentation fault on a more complicated problem.
<br>
<p>I've attached another 'working' example.  This time I am using the
<br>
MPI_Ineighbor_alltoallw on a triangular topology;  node 0 communicates
<br>
bi-directionally with nodes 1 and 2, node 1 with nodes 0 and 2, and node 2
<br>
with node 0 and 1.  Each node is sending one double (with value my_rank) to
<br>
each of its neighbors.
<br>
<p>The code has two different calls to the MPI API that only differ in the
<br>
receive buffer arguments.  In both versions, I am sending from and
<br>
receiving into the same static array.  In the working (non-segfaulting)
<br>
version, I am receiving into the latter half of the array by pointing to
<br>
the start of the second half (&amp;send_number[2]) and specifying displacements
<br>
of 0 and 8 bytes.  In the segfaulting version, I am again receiving into
<br>
the latter half of the array by pointing to the start of the array
<br>
(send_number) with displacements of 16 to 24 bytes.
<br>
<p>The program run with the command 'mpirun -n 3
<br>
./simpleneighborhood_multiple' compiled with the latest OpenMPI  (1.10.2) +
<br>
patch encounters a segmentation fault when receiving using the latter
<br>
commands.  The same program compiled with MPICH (3.2) runs without any
<br>
problems and with the expected results.
<br>
<p>Let me know if I'm screwing anything up.  Thanks for the help.
<br>
<p>Sincerely,
<br>
Jun
<br>
<p><p>On Mon, Feb 29, 2016 at 9:34 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the report and the test case,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is a bug and i pushed a commit to master.
</span><br>
<span class="quotelev1">&gt; for the time being, you can download a patch for v1.10 at
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/ggouaillardet/ompi-release/commit/4afdab0aa86e5127767c4dfbdb763b4cb641e37a.patch">https://github.com/ggouaillardet/ompi-release/commit/4afdab0aa86e5127767c4dfbdb763b4cb641e37a.patch</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/1/2016 12:17 AM, Jun Kudo wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I'm trying to use the neighborhood collective communication capabilities
</span><br>
<span class="quotelev1">&gt; (MPI_Ineighbor_x) of MPI coupled with the distributed graph constructor
</span><br>
<span class="quotelev1">&gt; (MPI_Dist_graph_create_adjacent) but I'm encountering a segmentation fault
</span><br>
<span class="quotelev1">&gt; on a test case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached a 'working' example where I create a MPI communicator with
</span><br>
<span class="quotelev1">&gt; a simple distributed graph topology where Rank 0 contains Node 0 that
</span><br>
<span class="quotelev1">&gt; communicates bi-directionally (receiving from and sending to) with Node 1
</span><br>
<span class="quotelev1">&gt; located on Rank 1.  I then attempt to send integer messages using the
</span><br>
<span class="quotelev1">&gt; neighborhood collective MPI_Ineighbor_alltoall.  The program run with the
</span><br>
<span class="quotelev1">&gt; command 'mpirun -n 2 ./simpleneighborhood' compiled with the latest
</span><br>
<span class="quotelev1">&gt; OpenMPI  (1.10.2) encounters a segmentation fault during the non-blocking
</span><br>
<span class="quotelev1">&gt; call.  The same program compiled with MPICH (3.2) runs without any problems
</span><br>
<span class="quotelev1">&gt; and with the expected results.  To muddy the waters a little more, the same
</span><br>
<span class="quotelev1">&gt; program compiled with OpenMPI but using the blocking neighborhood
</span><br>
<span class="quotelev1">&gt; collective, MPI_Neighbor_alltoall, seems to run just fine as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not really sure at this point if I'm making a simple mistake in the
</span><br>
<span class="quotelev1">&gt; construction of my test or if something is more fundamentally wrong.  I
</span><br>
<span class="quotelev1">&gt; would appreciate any insight into my problem!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks ahead of the time for help and let me know if I can provide anymore
</span><br>
<span class="quotelev1">&gt; information.
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28608.php">http://www.open-mpi.org/community/lists/users/2016/02/28608.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28610.php">http://www.open-mpi.org/community/lists/users/2016/02/28610.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28655/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28655/simpleneighborhood_multiple.cpp">simpleneighborhood_multiple.cpp</a>
</ul>
<!-- attachment="simpleneighborhood_multiple.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28656.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<li><strong>Previous message:</strong> <a href="28654.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28610.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28656.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<li><strong>Reply:</strong> <a href="28656.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
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
