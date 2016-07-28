<?
$subject_val = "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 10:19:39 2014" -->
<!-- isoreceived="20140827141939" -->
<!-- sent="Wed, 27 Aug 2014 10:19:38 -0400" -->
<!-- isosent="20140827141938" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()" -->
<!-- id="CAMJJpkUCLD5OqwdXdenyZnGFSDKXv=9FwECq-Af8qN5qYMj-Mg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcYPwB7PNo6ZFG-K1Dy1cL+nNAtoq8mcECe4hN3cxEzMaySBg_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 10:19:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15737.php">Lisandro Dalcin: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Previous message:</strong> <a href="15735.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="15735.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>We all use similar mechanisms to handle internal releases. Let's give some
<br>
credit to the MPI folks who (for once) designed a clear and workable
<br>
mechanism to achieve this.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Wed, Aug 27, 2014 at 10:15 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 26 August 2014 23:59, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Lisandro,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You rely on a feature clearly prohibited by the MPI standard. Please read
</span><br>
<span class="quotelev2">&gt; &gt; the entire section I pinpointed you to (8.7.1).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are 2 key sentences in the section.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. When MPI_FINALIZE is called, it will first execute the equivalent of
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_FREE on MPI_COMM_SELF.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. The freeing of MPI_COMM_SELF occurs before any other parts of MPI are
</span><br>
<span class="quotelev2">&gt; &gt; affected. Thus, for example, calling MPI_FINALIZED will return false in
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev2">&gt; &gt; of these callback functions. Once done with MPI_COMM_SELF, the order and
</span><br>
<span class="quotelev2">&gt; &gt; rest of the actions taken by MPI_FINALIZE is not specified.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thus when MPI is calling the equivalent of MPI_COMM_FREE on your
</span><br>
<span class="quotelev2">&gt; &gt; communicator, it is too late the MPI is already considered as finalized.
</span><br>
<span class="quotelev2">&gt; &gt; Moreover, relying on MPI to cleanup your communicators is already bad
</span><br>
<span class="quotelev1">&gt; habit,
</span><br>
<span class="quotelev2">&gt; &gt; which is rightfully punished by Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After much thinking about it, I must surrender :-), you were right.
</span><br>
<span class="quotelev1">&gt; Sorry for the noise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15735.php">http://www.open-mpi.org/community/lists/devel/2014/08/15735.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15736/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15737.php">Lisandro Dalcin: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Previous message:</strong> <a href="15735.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="15735.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
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
