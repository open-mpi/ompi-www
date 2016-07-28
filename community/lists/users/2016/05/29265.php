<?
$subject_val = "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 12:18:06 2016" -->
<!-- isoreceived="20160521161806" -->
<!-- sent="Sat, 21 May 2016 09:18:05 -0700" -->
<!-- isosent="20160521161805" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind" -->
<!-- id="CAGKz=uLEdSW9t+xsgFyxRtZi6v4EF3n2bPL7G=BdKebKyLYhzg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADsB1iBvxFfJpLDzj_YNcwFTyof2ogsGJBt4iFFxtWfep4N7jQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-21 12:18:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29266.php">George Bosilca: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Previous message:</strong> <a href="29264.php">Andrea Negri: "[OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use mpi_f08&quot; with gfortran 5"</a>
<li><strong>In reply to:</strong> <a href="29257.php">MM: "[OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Best performance per dollar for CPU systems is usually one generation past
<br>
mid core count single socket system, such as Intel Haswell or Broadwell
<br>
Core i7. Might get lucky and find eg 12-core Xeon processors cheap now.
<br>
<p>If you want lots of MPI ranks per dollar, look at Intel Knights Corner Xeon
<br>
Phi cards in a cheap host.
<br>
<p>You can also go small with an array of Raspberry PI, Arduino,
<br>
Adapteva Parallella, Intel NUC, etc.
<br>
<p>However, if you are doing non-commercial research, you should just apply
<br>
for supercomputer time at a government-sponsored center like NERSC or
<br>
XSEDE.
<br>
<p>Jeff
<br>
(Who works for Intel, and thus may be accused of excessive familiarity with
<br>
Intel products)
<br>
<p>On Friday, May 20, 2016, MM &lt;finjulhich_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Say I don't have access to a actual cluster, yet I'm considering cloud
</span><br>
<span class="quotelev1">&gt; compute solutions for my MPI program ultimately, but such a cost may be
</span><br>
<span class="quotelev1">&gt; highly prohibitive at the moment.
</span><br>
<span class="quotelev1">&gt; In terms of middle ground, if I am interesting in compute only, no
</span><br>
<span class="quotelev1">&gt; storage, what are possible hardware solutions out there to deploy my MPI
</span><br>
<span class="quotelev1">&gt; program?
</span><br>
<span class="quotelev1">&gt; By no storage, I mean that my control linux box running the frontend of
</span><br>
<span class="quotelev1">&gt; the program, but is also part of the mpi communicator always gathers all
</span><br>
<span class="quotelev1">&gt; results and stores them locally.
</span><br>
<span class="quotelev1">&gt; At the moment, I have a second box over ethernet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking at something like Intel Compute Stick (is it possible at all
</span><br>
<span class="quotelev1">&gt; to buy a few, is linux running on them, the arch seems to be the same
</span><br>
<span class="quotelev1">&gt; x86-64, is there a possible setup with tcp for those and have openmpi over
</span><br>
<span class="quotelev1">&gt; tcp)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it more cost-effective to look at extra regular linux commodity boxes?
</span><br>
<span class="quotelev1">&gt; If a no hard drive box is possible, can the executables of my MPI program
</span><br>
<span class="quotelev1">&gt; sendable over the wire before running them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we exclude GPU or other nonMPI solutions, and cost being a primary
</span><br>
<span class="quotelev1">&gt; factor, what is progression path from 2boxes to a cloud based solution
</span><br>
<span class="quotelev1">&gt; (amazon and the like...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29265/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29266.php">George Bosilca: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Previous message:</strong> <a href="29264.php">Andrea Negri: "[OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use mpi_f08&quot; with gfortran 5"</a>
<li><strong>In reply to:</strong> <a href="29257.php">MM: "[OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
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
