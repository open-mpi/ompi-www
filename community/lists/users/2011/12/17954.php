<?
$subject_val = "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 10:54:20 2011" -->
<!-- isoreceived="20111214155420" -->
<!-- sent="Wed, 14 Dec 2011 07:54:13 -0800" -->
<!-- isosent="20111214155413" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How &amp;quot;CUDA Init prior to MPI_Init&amp;quot; co-exists with unique GPU for each MPI process?" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F34C06E75298_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHCaCk+SzFaaht9UrdxG=49P9RAfOud_9wG5NO4TSVofDnLjEg_at_mail.gmail.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 10:54:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17955.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17953.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17952.php">Matthieu Brucher: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17956.php">Dmitry N. Mikushin: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Reply:</strong> <a href="17956.php">Dmitry N. Mikushin: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To add to this, yes, we recommend that the CUDA context exists prior to a call to MPI_Init.  That is because a CUDA context needs to exist prior to MPI_Init as the library attempts to register some internal buffers with the CUDA library that require a CUDA context exists already.  Note that this is only relevant if you plan to send and receive CUDA device memory directly from MPI calls.   There is a little more about this in the FAQ here.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#mpi-cuda-support">http://www.open-mpi.org/faq/?category=running#mpi-cuda-support</a>
<br>
<p><p>Rolf
<br>
<p>From: Matthieu Brucher [mailto:matthieu.brucher_at_[hidden]]
<br>
Sent: Wednesday, December 14, 2011 10:47 AM
<br>
To: Open MPI Users
<br>
Cc: Rolf vandeVaart
<br>
Subject: Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?
<br>
<p>Hi,
<br>
<p>Processes are not spawned by MPI_Init. They are spawned before by some applications between your mpirun call and when your program starts. When it does, you already have all MPI processes (you can check by adding a sleep or something like that), but they are not synchronized and do not know each other. This is what MPI_Init is used for.
<br>
<p>Matthieu Brucher
<br>
2011/12/14 Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&lt;mailto:maemarcus_at_[hidden]&gt;&gt;
<br>
Dear colleagues,
<br>
<p>For GPU Winter School powered by Moscow State University cluster
<br>
&quot;Lomonosov&quot;, the OpenMPI 1.7 was built to test and popularize CUDA
<br>
capabilities of MPI. There is one strange warning I cannot understand:
<br>
OpenMPI runtime suggests to initialize CUDA prior to MPI_Init. Sorry,
<br>
but how could it be? I thought processes are spawned during MPI_Init,
<br>
and such context will be created on the very first root process. Why
<br>
do we need existing CUDA context before MPI_Init? I think there was no
<br>
such error in previous versions.
<br>
<p>Thanks,
<br>
- D.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><pre>
--
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
-----------------------------------------------------------------------------------
This email message is for the sole use of the intended recipient(s) and may contain
confidential information.  Any unauthorized review, use, disclosure or distribution
is prohibited.  If you are not the intended recipient, please contact the sender by
reply email and destroy all copies of the original message.
-----------------------------------------------------------------------------------
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17954/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17955.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17953.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17952.php">Matthieu Brucher: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17956.php">Dmitry N. Mikushin: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Reply:</strong> <a href="17956.php">Dmitry N. Mikushin: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
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
