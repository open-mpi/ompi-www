<?
$subject_val = "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 07:14:39 2008" -->
<!-- isoreceived="20080827111439" -->
<!-- sent="Wed, 27 Aug 2008 13:14:27 +0200" -->
<!-- isosent="20080827111427" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv" -->
<!-- id="320D8140-8369-4C5A-B7D1-EA8B292255C3_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FD0205D7-41D0-48E6-80AC-465D33540324_at_gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-27 07:14:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6435.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Previous message:</strong> <a href="6433.php">Robert Kubrick: "[OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>In reply to:</strong> <a href="6433.php">Robert Kubrick: "[OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6435.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Reply:</strong> <a href="6435.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is the definition of a buffered receive ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 26, 2008, at 10:17 PM, Robert Kubrick wrote:
<br>
<p><span class="quotelev1">&gt; From a performance point of view, which one is better:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Battach(10*sizeof(MSG))
</span><br>
<span class="quotelev1">&gt; MPI_Brecv()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_recv_init()
</span><br>
<span class="quotelev1">&gt; MPI_recv_init()
</span><br>
<span class="quotelev1">&gt; MPI_recv_init()
</span><br>
<span class="quotelev1">&gt; ... /* 10 recv handlers */
</span><br>
<span class="quotelev1">&gt; MPI_Start(all recv)
</span><br>
<span class="quotelev1">&gt; MPI_Waitany()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand MPI_Brecv will require an extra message copy, from the  
</span><br>
<span class="quotelev1">&gt; attached buffer to the MPI_Brecv() buffer. I'd like to know if there  
</span><br>
<span class="quotelev1">&gt; other differences between the two methods.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rob
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6434/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6435.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Previous message:</strong> <a href="6433.php">Robert Kubrick: "[OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>In reply to:</strong> <a href="6433.php">Robert Kubrick: "[OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6435.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Reply:</strong> <a href="6435.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
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
