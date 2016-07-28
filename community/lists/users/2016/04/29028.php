<?
$subject_val = "Re: [OMPI users] MPI_Bcast implementations in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 12:20:13 2016" -->
<!-- isoreceived="20160425162013" -->
<!-- sent="Mon, 25 Apr 2016 12:20:12 -0400" -->
<!-- isosent="20160425162012" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast implementations in OpenMPI" -->
<!-- id="4DCA743F-4C0F-45A4-9633-D22E7A363C05_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="871t5tn1nv.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast implementations in OpenMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-25 12:20:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29029.php">Gus Correa: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29027.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="29024.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29076.php">Dave Love: "[OMPI users] collective tuning (was: MPI_Bcast implementations in OpenMPI)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29076.php">Dave Love: "[OMPI users] collective tuning (was: MPI_Bcast implementations in OpenMPI)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Apr 25, 2016, at 11:33 , Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dave,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You are absolutely right, the parameters are now 6-7 years old,
</span><br>
<span class="quotelev2">&gt;&gt; gathered on interconnects long gone. Moreover, several discussions in
</span><br>
<span class="quotelev2">&gt;&gt; this mailing list indicated that they do not match current network
</span><br>
<span class="quotelev2">&gt;&gt; capabilities.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have recently reshuffled the tuned module to move all the algorithms
</span><br>
<span class="quotelev2">&gt;&gt; in the base and therefore make them available to other collective
</span><br>
<span class="quotelev2">&gt;&gt; modules (the code is available in master and 1.10 and the future
</span><br>
<span class="quotelev2">&gt;&gt; 2.0). This move has the potential for allowing different decision
</span><br>
<span class="quotelev2">&gt;&gt; schemes to coexists, and be dynamically selected at runtime based on
</span><br>
<span class="quotelev2">&gt;&gt; network properties, network topology, or even applications needs. I
</span><br>
<span class="quotelev2">&gt;&gt; continue to have hopes that network vendors will eventually get
</span><br>
<span class="quotelev2">&gt;&gt; interested in tailoring the collective selection to match their
</span><br>
<span class="quotelev2">&gt;&gt; network capabilities, and provide their users with a performance boost
</span><br>
<span class="quotelev2">&gt;&gt; by allowing for network specific algorithm selection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That sounds useful, assuming the speed is generally dominated by the
</span><br>
<span class="quotelev1">&gt; basic fabric.  What's involved in making the relevant measurements and
</span><br>
<span class="quotelev1">&gt; plugging them in?  I did look at using OTPO(?) to check this sort of
</span><br>
<span class="quotelev1">&gt; thing once.  I couldn't make it work in the time I had, but Periscope
</span><br>
<span class="quotelev1">&gt; might be a good alternative now.
</span><br>
<p>It is a multidimensional space optimization problem. The critical point is identifying the switching points between different algorithms based on their performance (taking in account, at least, physical topology, number of processes and amount of data). The paper I sent on one of my previous email discusses how we did the decision functions on the current implementation. There are certainly better ways, but the one we took at least did not involve any extra software, and was done using simple scripts.
<br>
<p><span class="quotelev1">&gt; If it's fairly mechanical -- maybe even if not -- it seems like
</span><br>
<span class="quotelev1">&gt; something that should just be done regardless of vendors.  I'm sure
</span><br>
<span class="quotelev1">&gt; plenty of people could measure QDR fat tree, for a start (at least where
</span><br>
<span class="quotelev1">&gt; measurement isn&#226;&#128;&#153;t frowned upon).
</span><br>
<p>Based on feedback from the user mailing list, several users did such optimizations for their specific applications. This makes the optimization problem much simpler, as some of the parameters have discrete values (message size). If we assume a symmetric network, and have a small number of message sizes of interest, it is enough to run few benchmarks (skampi, to the IMB test on the collective of interest), and manually finding the switch point is a relatively simple process.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29024.php">http://www.open-mpi.org/community/lists/users/2016/04/29024.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29029.php">Gus Correa: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<li><strong>Previous message:</strong> <a href="29027.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="29024.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29076.php">Dave Love: "[OMPI users] collective tuning (was: MPI_Bcast implementations in OpenMPI)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29076.php">Dave Love: "[OMPI users] collective tuning (was: MPI_Bcast implementations in OpenMPI)"</a>
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
