<?
$subject_val = "Re: [OMPI users] MPI_Alltoall with Vector Datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 10:08:45 2014" -->
<!-- isoreceived="20140508140845" -->
<!-- sent="Thu, 8 May 2014 16:08:44 +0200" -->
<!-- isosent="20140508140844" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoall with Vector Datatype" -->
<!-- id="CAHCaCkK+Lww9cSFY2R-1Yjx5TckV2UUxB+-x108Z99tbmE+y=w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEBucnDUfY-NGVCrnXGokDGWbKd46KUGruTrdMEQH2_LVxtSrA_at_mail.gmail.com" -->
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
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 10:08:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24314.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Previous message:</strong> <a href="24312.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24312.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24315.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24315.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Alltoall should only return when all data is sent and received on
<br>
the current rank, so there shouldn't be any race condition.
<br>
<p>Cheers,
<br>
<p>Matthieu
<br>
<p>2014-05-08 15:53 GMT+02:00 Spenser Gilliland &lt;spenser_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; George &amp; other list members,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I may have a race condition in this example that is masked by
</span><br>
<span class="quotelev1">&gt; the print_matrix statement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, lets say rank one has a large sleep before reaching the
</span><br>
<span class="quotelev1">&gt; local transpose, will the other ranks have completed the Alltoall and
</span><br>
<span class="quotelev1">&gt; when rank one reaches the local transpose it is altering the data that
</span><br>
<span class="quotelev1">&gt; the other processors sent it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Spenser
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Spenser Gilliland
</span><br>
<span class="quotelev1">&gt; Computer Engineer
</span><br>
<span class="quotelev1">&gt; Doctoral Candidate
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24314.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Previous message:</strong> <a href="24312.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24312.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24315.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24315.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
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
