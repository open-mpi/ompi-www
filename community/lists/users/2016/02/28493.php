<?
$subject_val = "Re: [OMPI users] shared memory zero size segment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 07:19:42 2016" -->
<!-- isoreceived="20160210121942" -->
<!-- sent="Wed, 10 Feb 2016 21:19:41 +0900" -->
<!-- isosent="20160210121941" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory zero size segment" -->
<!-- id="CAAkFZ5t82eR6jyjmzNn+Lv4=TX4OgvRj1tEpAdG-CQr7Gb8zAQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="442924734.161552.1455101766716.JavaMail.zimbra_at_met.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] shared memory zero size segment<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 07:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28494.php">Gilles Gouaillardet: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Previous message:</strong> <a href="28492.php">Delphine Ramalingom: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>In reply to:</strong> <a href="28485.php">Peter Wind: "[OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28496.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28496.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Peter,
<br>
<p>The bulletproof way is to use MPI_Win_shared_query after
<br>
MPI_Win_allocate_shared.
<br>
I do not know if current behavior is a bug or a feature...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, February 10, 2016, Peter Wind &lt;peter.wind_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Under fortran, MPI_Win_allocate_shared is called with a window size of
</span><br>
<span class="quotelev1">&gt; zero for some processes.
</span><br>
<span class="quotelev1">&gt; The output pointer is then not valid for these processes (null pointer).
</span><br>
<span class="quotelev1">&gt; Did I understood this wrongly? shouldn't the pointers be contiguous, so
</span><br>
<span class="quotelev1">&gt; that for a zero sized window, the pointer should point to the start of the
</span><br>
<span class="quotelev1">&gt; segment of the next rank?
</span><br>
<span class="quotelev1">&gt; The documentation explicitly specifies &quot;size = 0 is valid&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached a small code, where rank=0 allocate a window of size zero. All
</span><br>
<span class="quotelev1">&gt; the other ranks get valid pointers, except rank 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28485.php">http://www.open-mpi.org/community/lists/users/2016/02/28485.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28493/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28494.php">Gilles Gouaillardet: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Previous message:</strong> <a href="28492.php">Delphine Ramalingom: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>In reply to:</strong> <a href="28485.php">Peter Wind: "[OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28496.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28496.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
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
