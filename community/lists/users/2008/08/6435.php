<?
$subject_val = "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 08:43:21 2008" -->
<!-- isoreceived="20080827124321" -->
<!-- sent="Wed, 27 Aug 2008 08:41:59 -0400" -->
<!-- isosent="20080827124159" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv" -->
<!-- id="B966E0CF-09D7-4469-9BA9-1CBE1D8B1964_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="320D8140-8369-4C5A-B7D1-EA8B292255C3_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-27 08:41:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6436.php">Andrew J Caird: "Re: [OMPI users] seg faults with IB and RH ibverbs-1.1.1-9"</a>
<li><strong>Previous message:</strong> <a href="6434.php">George Bosilca: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>In reply to:</strong> <a href="6434.php">George Bosilca: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6437.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Reply:</strong> <a href="6437.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting, MPI_Brecv is not in the standard (MPI_Bsend is). I don't  
<br>
understand why a recv could not implemented with an external buffer.
<br>
Anyway, my bad, I was assuming MPI_Brecv was on. Thanks George for  
<br>
pointing this out.
<br>
<p>On Aug 27, 2008, at 7:14 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; What is the definition of a buffered receive ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 26, 2008, at 10:17 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From a performance point of view, which one is better:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Battach(10*sizeof(MSG))
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Brecv()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_recv_init()
</span><br>
<span class="quotelev2">&gt;&gt; MPI_recv_init()
</span><br>
<span class="quotelev2">&gt;&gt; MPI_recv_init()
</span><br>
<span class="quotelev2">&gt;&gt; ... /* 10 recv handlers */
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Start(all recv)
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Waitany()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand MPI_Brecv will require an extra message copy, from  
</span><br>
<span class="quotelev2">&gt;&gt; the attached buffer to the MPI_Brecv() buffer. I'd like to know if  
</span><br>
<span class="quotelev2">&gt;&gt; there other differences between the two methods.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rob
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6436.php">Andrew J Caird: "Re: [OMPI users] seg faults with IB and RH ibverbs-1.1.1-9"</a>
<li><strong>Previous message:</strong> <a href="6434.php">George Bosilca: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>In reply to:</strong> <a href="6434.php">George Bosilca: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6437.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Reply:</strong> <a href="6437.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
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
