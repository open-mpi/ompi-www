<?
$subject_val = "Re: [OMPI users] MPI_Bcast implementations in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 22 14:26:42 2016" -->
<!-- isoreceived="20160422182642" -->
<!-- sent="Fri, 22 Apr 2016 14:26:40 -0400" -->
<!-- isosent="20160422182640" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast implementations in OpenMPI" -->
<!-- id="D2E0981E-3FAF-41A3-8DC2-64CB78026842_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8737qdocna.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Date:</strong> 2016-04-22 14:26:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28999.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="28997.php">Tom Rosmond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>In reply to:</strong> <a href="28995.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29024.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="29024.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>You are absolutely right, the parameters are now 6-7 years old, gathered on interconnects long gone. Moreover, several discussions in this mailing list indicated that they do not match current network capabilities.
<br>
<p>I have recently reshuffled the tuned module to move all the algorithms in the base and therefore make them available to other collective modules (the code is available in master and 1.10 and the future 2.0). This move has the potential for allowing different decision schemes to coexists, and be dynamically selected at runtime based on network properties, network topology, or even applications needs. I continue to have hopes that network vendors will eventually get interested in tailoring the collective selection to match their network capabilities, and provide their users with a performance boost by allowing for network specific algorithm selection.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; On Apr 22, 2016, at 12:02 , Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Matthieu,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are talking about how Open MPI selects between different broadcast
</span><br>
<span class="quotelev2">&gt;&gt; algorithms you might want to read [1]. We have implemented a dozen
</span><br>
<span class="quotelev2">&gt;&gt; different broadcast algorithms and have run a set of tests to measure their
</span><br>
<span class="quotelev2">&gt;&gt; performance. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd been meaning to ask about this sort of thing as I didn't anything
</span><br>
<span class="quotelev1">&gt; written about it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems the measurements on which at collective parameter defaults are
</span><br>
<span class="quotelev1">&gt; based were originally from interconnects with at least an order of
</span><br>
<span class="quotelev1">&gt; magnitude difference in performance from typical current ones, and maybe
</span><br>
<span class="quotelev1">&gt; different topology.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have parameters been revisited since, or is it clear they'll still be
</span><br>
<span class="quotelev1">&gt; valid for, say, FDR IB?  I know a case that was changed a while ago, but
</span><br>
<span class="quotelev1">&gt; the new alltoallv default algorithm hurt performance on typical
</span><br>
<span class="quotelev1">&gt; chemistry code that might constitute the majority of its use, and it
</span><br>
<span class="quotelev1">&gt; wasn't clear why the change was made.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume it could be useful to know how things were derived to indicate
</span><br>
<span class="quotelev1">&gt; when it might be worth trying different values as it often seems
</span><br>
<span class="quotelev1">&gt; worthwhile to do so.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28995.php">http://www.open-mpi.org/community/lists/users/2016/04/28995.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28999.php">Gilles Gouaillardet: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="28997.php">Tom Rosmond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>In reply to:</strong> <a href="28995.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29024.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="29024.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
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
