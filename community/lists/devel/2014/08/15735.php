<?
$subject_val = "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 10:15:26 2014" -->
<!-- isoreceived="20140827141526" -->
<!-- sent="Wed, 27 Aug 2014 17:15:06 +0300" -->
<!-- isosent="20140827141506" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()" -->
<!-- id="CAEcYPwB7PNo6ZFG-K1Dy1cL+nNAtoq8mcECe4hN3cxEzMaySBg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkUqzfx=A32eF7g6-DB-hgWH+r1fnx4QVtj1q001PjeecA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 10:15:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15736.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="15734.php">Orion Poplawski: "[OMPI devel] TKR"</a>
<li><strong>In reply to:</strong> <a href="15723.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15736.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="15736.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 26 August 2014 23:59, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Lisandro,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You rely on a feature clearly prohibited by the MPI standard. Please read
</span><br>
<span class="quotelev1">&gt; the entire section I pinpointed you to (8.7.1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are 2 key sentences in the section.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. When MPI_FINALIZE is called, it will first execute the equivalent of an
</span><br>
<span class="quotelev1">&gt; MPI_COMM_FREE on MPI_COMM_SELF.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The freeing of MPI_COMM_SELF occurs before any other parts of MPI are
</span><br>
<span class="quotelev1">&gt; affected. Thus, for example, calling MPI_FINALIZED will return false in any
</span><br>
<span class="quotelev1">&gt; of these callback functions. Once done with MPI_COMM_SELF, the order and
</span><br>
<span class="quotelev1">&gt; rest of the actions taken by MPI_FINALIZE is not specified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus when MPI is calling the equivalent of MPI_COMM_FREE on your
</span><br>
<span class="quotelev1">&gt; communicator, it is too late the MPI is already considered as finalized.
</span><br>
<span class="quotelev1">&gt; Moreover, relying on MPI to cleanup your communicators is already bad habit,
</span><br>
<span class="quotelev1">&gt; which is rightfully punished by Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>After much thinking about it, I must surrender :-), you were right.
<br>
Sorry for the noise.
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15736.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="15734.php">Orion Poplawski: "[OMPI devel] TKR"</a>
<li><strong>In reply to:</strong> <a href="15723.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15736.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="15736.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
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
