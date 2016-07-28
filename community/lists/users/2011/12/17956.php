<?
$subject_val = "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 11:04:49 2011" -->
<!-- isoreceived="20111214160449" -->
<!-- sent="Wed, 14 Dec 2011 19:04:40 +0300" -->
<!-- isosent="20111214160440" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How &amp;quot;CUDA Init prior to MPI_Init&amp;quot; co-exists with unique GPU for each MPI process?" -->
<!-- id="CAGR4S9F-m0Uz5hE8qhBGWmm4hKZChVeNMMwS8W7XA93uMppwgQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F34C06E75298_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 11:04:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17957.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17955.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>In reply to:</strong> <a href="17954.php">Rolf vandeVaart: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Matthieu, Rolf,
<br>
<p>Thank you!
<br>
<p>But normally CUDA device selection is based on MPI process index. So,
<br>
cuda context must exist where MPI index is not yet available. What is
<br>
the best practice of process&lt;-&gt;GPU mapping in this case? Or can I
<br>
select any device prior to MPI_Init and later change to another
<br>
device?
<br>
<p>- D.
<br>
<p>2011/12/14 Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; To add to this, yes, we recommend that the CUDA context exists prior to a
</span><br>
<span class="quotelev1">&gt; call to MPI_Init.&#160; That is because a CUDA context needs to exist prior to
</span><br>
<span class="quotelev1">&gt; MPI_Init as the library attempts to register some internal buffers with the
</span><br>
<span class="quotelev1">&gt; CUDA library that require a CUDA context exists already.&#160; Note that this is
</span><br>
<span class="quotelev1">&gt; only relevant if you plan to send and receive CUDA device memory directly
</span><br>
<span class="quotelev1">&gt; from MPI calls.&#160;&#160; There is a little more about this in the FAQ here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpi-cuda-support">http://www.open-mpi.org/faq/?category=running#mpi-cuda-support</a>
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
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Matthieu Brucher [mailto:matthieu.brucher_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, December 14, 2011 10:47 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Rolf vandeVaart
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with
</span><br>
<span class="quotelev1">&gt; unique GPU for each MPI process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Processes are not spawned by MPI_Init. They are spawned before by some
</span><br>
<span class="quotelev1">&gt; applications between your mpirun call and when your program starts. When it
</span><br>
<span class="quotelev1">&gt; does, you already have all MPI processes (you can check by adding a sleep or
</span><br>
<span class="quotelev1">&gt; something like that), but they are not synchronized and do not know each
</span><br>
<span class="quotelev1">&gt; other. This is what MPI_Init is used for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthieu Brucher
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/12/14 Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear colleagues,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For GPU Winter School powered by Moscow State University cluster
</span><br>
<span class="quotelev1">&gt; &quot;Lomonosov&quot;, the OpenMPI 1.7 was built to test and popularize CUDA
</span><br>
<span class="quotelev1">&gt; capabilities of MPI. There is one strange warning I cannot understand:
</span><br>
<span class="quotelev1">&gt; OpenMPI runtime suggests to initialize CUDA prior to MPI_Init. Sorry,
</span><br>
<span class="quotelev1">&gt; but how could it be? I thought processes are spawned during MPI_Init,
</span><br>
<span class="quotelev1">&gt; and such context will be created on the very first root process. Why
</span><br>
<span class="quotelev1">&gt; do we need existing CUDA context before MPI_Init? I think there was no
</span><br>
<span class="quotelev1">&gt; such error in previous versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - D.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev1">&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev1">&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may
</span><br>
<span class="quotelev1">&gt; contain confidential information.&#160; Any unauthorized review, use, disclosure
</span><br>
<span class="quotelev1">&gt; or distribution is prohibited.&#160; If you are not the intended recipient,
</span><br>
<span class="quotelev1">&gt; please contact the sender by reply email and destroy all copies of the
</span><br>
<span class="quotelev1">&gt; original message.
</span><br>
<span class="quotelev1">&gt; ________________________________
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17957.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17955.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>In reply to:</strong> <a href="17954.php">Rolf vandeVaart: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<!-- nextthread="start" -->
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
