<?
$subject_val = "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 10:47:10 2011" -->
<!-- isoreceived="20111214154710" -->
<!-- sent="Wed, 14 Dec 2011 16:47:05 +0100" -->
<!-- isosent="20111214154705" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How &amp;quot;CUDA Init prior to MPI_Init&amp;quot; co-exists with unique GPU for each MPI process?" -->
<!-- id="CAHCaCk+SzFaaht9UrdxG=49P9RAfOud_9wG5NO4TSVofDnLjEg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGR4S9E2Goh-OWjRK8rUbefOiSe-DaaH5=7rTZQGa-C6LUfiKQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 10:47:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17953.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17951.php">Dmitry N. Mikushin: "[OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>In reply to:</strong> <a href="17951.php">Dmitry N. Mikushin: "[OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17954.php">Rolf vandeVaart: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Reply:</strong> <a href="17954.php">Rolf vandeVaart: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Processes are not spawned by MPI_Init. They are spawned before by some
<br>
applications between your mpirun call and when your program starts. When it
<br>
does, you already have all MPI processes (you can check by adding a sleep
<br>
or something like that), but they are not synchronized and do not know each
<br>
other. This is what MPI_Init is used for.
<br>
<p>Matthieu Brucher
<br>
<p>2011/12/14 Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Dear colleagues,
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
<p><p><p><pre>
-- 
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17952/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17953.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17951.php">Dmitry N. Mikushin: "[OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>In reply to:</strong> <a href="17951.php">Dmitry N. Mikushin: "[OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17954.php">Rolf vandeVaart: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Reply:</strong> <a href="17954.php">Rolf vandeVaart: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
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
