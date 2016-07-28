<?
$subject_val = "Re: [OMPI users] track progress of a mpi gather";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 24 11:02:37 2016" -->
<!-- isoreceived="20160424150237" -->
<!-- sent="Sun, 24 Apr 2016 11:02:36 -0400" -->
<!-- isosent="20160424150236" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] track progress of a mpi gather" -->
<!-- id="CAHXxYDgiyd6aZrV-Z-9V0CUWsXOvLYb1x5Qju28982GuAdsJQA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5vSwu--u1k2LAXTy5yeQnztqtoUVNiZ++K=0HZ2HTNmzA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] track progress of a mpi gather<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-24 11:02:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29017.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Previous message:</strong> <a href="29015.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>In reply to:</strong> <a href="29015.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29017.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Reply:</strong> <a href="29017.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Reply:</strong> <a href="29026.php">George Bosilca: "Re: [OMPI users] track progress of a mpi gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles
<br>
<p>That idea crossed my mind as well, but I was under the impression that
<br>
MPI_THREAD_MULTIPLE is not very well supported on OpenMPI? I believe it is
<br>
not supported on OpenIB, but the original poster seems to be using TCP.
<br>
Does it work for TCP?
<br>
<p>Thanks
<br>
Durga
<br>
<p>1% of the executables have 99% of CPU privilege!
<br>
Userspace code! Unite!! Occupy the kernel!!!
<br>
<p>On Sun, Apr 24, 2016 at 10:48 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; an other option is to use MPI_THREAD_MULTIPLE, and MPI_Recv() on the
</span><br>
<span class="quotelev1">&gt; master task in a dedicated thread, and use a unique tag (or MPI_Comm_dup()
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD) to separate the traffic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this is not the desired design, then the master task has to post
</span><br>
<span class="quotelev1">&gt; MPI_Irecv() and &quot;poll&quot; with MPI_Probe() / MPI_Test() and friends.
</span><br>
<span class="quotelev1">&gt; Note it is possible to use non blocking collective (MPI_Ibcast(),
</span><br>
<span class="quotelev1">&gt; MPI_Iscatter() and MPI_Igather()) and &quot;both&quot; collective and the progress
</span><br>
<span class="quotelev1">&gt; statuses
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
<span class="quotelev1">&gt; On Sunday, April 24, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure I am understanding your requirements correctly, but base on
</span><br>
<span class="quotelev2">&gt;&gt; what I think it is, how about this: you do an MPI_Send() from all the
</span><br>
<span class="quotelev2">&gt;&gt; non-root nodes to the root node and pack all the progress related data into
</span><br>
<span class="quotelev2">&gt;&gt; this send. Use a special tag for this message to make it stand out from
</span><br>
<span class="quotelev2">&gt;&gt; 'regular' sends. The root node does a non-blocking receive on this tag from
</span><br>
<span class="quotelev2">&gt;&gt; all the nodes that it is expecting this message from.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would that work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev2">&gt;&gt; Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Apr 24, 2016 at 7:05 AM, MM &lt;finjulhich_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With a miniature case of 3 linux quadcore boxes, linked via 1Gbit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethernet, I have a UI that runs on 1 of the 3 boxes, and that is the root
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the communicator.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a 1-second-running function on up to 10 parameters, my parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; space fits in the memory of the root, the space of it is N ~~ 1 million.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use broadcast/scatter/gather to collect the value of my function on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each of the 1million points, dividing 1million by the number of nodes (11:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rootnode has 1 core/thread assigned to the UI, 1 core/thread for its
</span><br>
<span class="quotelev3">&gt;&gt;&gt; evaluation of the function on its own part of the parameter space and 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other cores run non-root nodes, and the 2 other boxes all run non-root
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the rootnode does:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. broadcast needed data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. scatter param space
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. evaluate function locally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. gather results from this and all other nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How would I go about having the non-root nodes send a sort of progress
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status to the root node? that's used for plotting results on the root box
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as soon as they are available?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rds,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29013.php">http://www.open-mpi.org/community/lists/users/2016/04/29013.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29015.php">http://www.open-mpi.org/community/lists/users/2016/04/29015.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29016/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29017.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Previous message:</strong> <a href="29015.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>In reply to:</strong> <a href="29015.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29017.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Reply:</strong> <a href="29017.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Reply:</strong> <a href="29026.php">George Bosilca: "Re: [OMPI users] track progress of a mpi gather"</a>
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
