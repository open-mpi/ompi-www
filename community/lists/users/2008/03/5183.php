<?
$subject_val = "Re: [OMPI users] RE : MPI_Comm_connect() fails";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 07:12:13 2008" -->
<!-- isoreceived="20080313111213" -->
<!-- sent="Thu, 13 Mar 2008 12:12:07 +0100" -->
<!-- isosent="20080313111207" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE : MPI_Comm_connect() fails" -->
<!-- id="9b0da5ce0803130412g20fe7cbdi7281abb1e829226a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0803130021l4ead0f91qaf43e4ac7d332c93_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE : MPI_Comm_connect() fails<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 07:12:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5184.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5182.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>In reply to:</strong> <a href="5182.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5184.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry!
<br>
That reply was intended to another post!
<br>
<p>Jody
<br>
<p>On Thu, Mar 13, 2008 at 8:21 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; HI
</span><br>
<span class="quotelev1">&gt;  I think the recvcount argument you pass to MPI_Allgather should not be
</span><br>
<span class="quotelev1">&gt;  1 but instead
</span><br>
<span class="quotelev1">&gt;  the number of MPI_INTs your buffer rem_rank_tbl can contain.
</span><br>
<span class="quotelev1">&gt;  As it stands now, you tell MPI_Allgather that it may only receive 1 MPI_INT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Furthermore, i'm not sure, but i think your receive buffer should be
</span><br>
<span class="quotelev1">&gt;  large enough
</span><br>
<span class="quotelev1">&gt;  to contain messages from *all* processes, and not just from the &quot;far side&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5184.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5182.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>In reply to:</strong> <a href="5182.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5184.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
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
