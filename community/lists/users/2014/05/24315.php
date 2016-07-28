<?
$subject_val = "Re: [OMPI users] MPI_Alltoall with Vector Datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 12:00:51 2014" -->
<!-- isoreceived="20140508160051" -->
<!-- sent="Thu, 8 May 2014 12:00:49 -0400" -->
<!-- isosent="20140508160049" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoall with Vector Datatype" -->
<!-- id="CAMJJpkWD5fWhbyXo=5-CR-YxUp+8HhqLCncEwCdoEJ8Kn-X_Sg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHCaCkK+Lww9cSFY2R-1Yjx5TckV2UUxB+-x108Z99tbmE+y=w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Alltoall with Vector Datatype<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 12:00:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24316.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Previous message:</strong> <a href="24314.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24313.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24318.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24318.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the issue is with the way you define the send and receive
<br>
buffer in the MPI_Alltoall. You have to keep in mind that the
<br>
all-to-all pattern will overwrite the entire data in the receive
<br>
buffer. Thus, starting from a relative displacement in the data (in
<br>
this case matrix[wrank*wrows]), begs for troubles, as you will write
<br>
outside the receive buffer.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, May 8, 2014 at 10:08 AM, Matthieu Brucher
<br>
&lt;matthieu.brucher_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The Alltoall should only return when all data is sent and received on
</span><br>
<span class="quotelev1">&gt; the current rank, so there shouldn't be any race condition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthieu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-05-08 15:53 GMT+02:00 Spenser Gilliland &lt;spenser_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; George &amp; other list members,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I may have a race condition in this example that is masked by
</span><br>
<span class="quotelev2">&gt;&gt; the print_matrix statement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, lets say rank one has a large sleep before reaching the
</span><br>
<span class="quotelev2">&gt;&gt; local transpose, will the other ranks have completed the Alltoall and
</span><br>
<span class="quotelev2">&gt;&gt; when rank one reaches the local transpose it is altering the data that
</span><br>
<span class="quotelev2">&gt;&gt; the other processors sent it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Spenser
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Spenser Gilliland
</span><br>
<span class="quotelev2">&gt;&gt; Computer Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Doctoral Candidate
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev1">&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev1">&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev1">&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
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
<li><strong>Next message:</strong> <a href="24316.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Previous message:</strong> <a href="24314.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24313.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24318.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24318.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
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
