<?
$subject_val = "Re: [OMPI users] track progress of a mpi gather";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 24 09:53:42 2016" -->
<!-- isoreceived="20160424135342" -->
<!-- sent="Sun, 24 Apr 2016 09:53:40 -0400" -->
<!-- isosent="20160424135340" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] track progress of a mpi gather" -->
<!-- id="CAHXxYDgiwWBNx6_UtycB=A_a1o+FvAyC8amT5C9qLUpjHzX6WA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADsB1iD=hupoZ5LdVRyUVsWpByx8rzUSFDnr0DOhpp0nnZbY4g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-04-24 09:53:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29015.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Previous message:</strong> <a href="29013.php">MM: "[OMPI users] track progress of a mpi gather"</a>
<li><strong>In reply to:</strong> <a href="29013.php">MM: "[OMPI users] track progress of a mpi gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29015.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Reply:</strong> <a href="29015.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p><p>I am not sure I am understanding your requirements correctly, but base on
<br>
what I think it is, how about this: you do an MPI_Send() from all the
<br>
non-root nodes to the root node and pack all the progress related data into
<br>
this send. Use a special tag for this message to make it stand out from
<br>
'regular' sends. The root node does a non-blocking receive on this tag from
<br>
all the nodes that it is expecting this message from.
<br>
<p>Would that work?
<br>
<p>Durga
<br>
<p><p>1% of the executables have 99% of CPU privilege!
<br>
Userspace code! Unite!! Occupy the kernel!!!
<br>
<p>On Sun, Apr 24, 2016 at 7:05 AM, MM &lt;finjulhich_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With a miniature case of 3 linux quadcore boxes, linked via 1Gbit
</span><br>
<span class="quotelev1">&gt; Ethernet, I have a UI that runs on 1 of the 3 boxes, and that is the root
</span><br>
<span class="quotelev1">&gt; of the communicator.
</span><br>
<span class="quotelev1">&gt; I have a 1-second-running function on up to 10 parameters, my parameter
</span><br>
<span class="quotelev1">&gt; space fits in the memory of the root, the space of it is N ~~ 1 million.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use broadcast/scatter/gather to collect the value of my function on each
</span><br>
<span class="quotelev1">&gt; of the 1million points, dividing 1million by the number of nodes (11:
</span><br>
<span class="quotelev1">&gt; rootnode has 1 core/thread assigned to the UI, 1 core/thread for its
</span><br>
<span class="quotelev1">&gt; evaluation of the function on its own part of the parameter space and 2
</span><br>
<span class="quotelev1">&gt; other cores run non-root nodes, and the 2 other boxes all run non-root
</span><br>
<span class="quotelev1">&gt; nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the rootnode does:
</span><br>
<span class="quotelev1">&gt; 1. broadcast needed data
</span><br>
<span class="quotelev1">&gt; 2. scatter param space
</span><br>
<span class="quotelev1">&gt; 3. evaluate function locally
</span><br>
<span class="quotelev1">&gt; 4. gather results from this and all other nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How would I go about having the non-root nodes send a sort of progress
</span><br>
<span class="quotelev1">&gt; status to the root node? that's used for plotting results on the root box
</span><br>
<span class="quotelev1">&gt; as soon as they are available?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rds,
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29013.php">http://www.open-mpi.org/community/lists/users/2016/04/29013.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29014/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29015.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Previous message:</strong> <a href="29013.php">MM: "[OMPI users] track progress of a mpi gather"</a>
<li><strong>In reply to:</strong> <a href="29013.php">MM: "[OMPI users] track progress of a mpi gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29015.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Reply:</strong> <a href="29015.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
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
