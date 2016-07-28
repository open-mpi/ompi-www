<?
$subject_val = "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 16:59:53 2014" -->
<!-- isoreceived="20140826205953" -->
<!-- sent="Tue, 26 Aug 2014 16:59:51 -0400" -->
<!-- isosent="20140826205951" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()" -->
<!-- id="CAMJJpkUqzfx=A32eF7g6-DB-hgWH+r1fnx4QVtj1q001PjeecA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcYPwAnQmd3pzqVV_LBpiD+3yz_+cSyzrsa1AdBqBvHetxd3g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-08-26 16:59:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15724.php">Andrej Prsa: "[OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Previous message:</strong> <a href="15722.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>In reply to:</strong> <a href="15718.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15735.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="15735.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>You rely on a feature clearly prohibited by the MPI standard. Please read
<br>
the entire section I pinpointed you to (8.7.1).
<br>
<p>There are 2 key sentences in the section.
<br>
<p>1. When MPI_FINALIZE is called, it will first execute the equivalent of an
<br>
MPI_COMM_FREE on MPI_COMM_SELF.
<br>
<p>2. The freeing of MPI_COMM_SELF occurs before any other parts of MPI are
<br>
affected. Thus, for example, calling MPI_FINALIZED will return false in any
<br>
of these callback functions. Once done with MPI_COMM_SELF, the order and
<br>
rest of the actions taken by MPI_FINALIZE is not specified.
<br>
<p>Thus when MPI is calling the equivalent of MPI_COMM_FREE on your
<br>
communicator, it is too late the MPI is already considered as finalized.
<br>
Moreover, relying on MPI to cleanup your communicators is already bad
<br>
habit, which is rightfully punished by Open MPI.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><p>On Tue, Aug 26, 2014 at 3:01 PM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 26 August 2014 21:29, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The MPI standard clearly states (in 8.7.1 Allowing User Functions at
</span><br>
<span class="quotelev1">&gt; Process
</span><br>
<span class="quotelev2">&gt; &gt; Termination) that the mechanism you describe is only allowed on
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_SELF. The most relevant part starts at line 14.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMHO, you are misinterpreting the standard. Please note that the
</span><br>
<span class="quotelev1">&gt; &quot;callbacks&quot; I'm talking about are the ones registered for freeing
</span><br>
<span class="quotelev1">&gt; cached attributes, their invocation is tied to the lifetime of the MPI
</span><br>
<span class="quotelev1">&gt; handle. The callbacks you are talking about are different kind of
</span><br>
<span class="quotelev1">&gt; beasts, they are callbacks you what to run specifically at
</span><br>
<span class="quotelev1">&gt; MPI_Finalize().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Caching duplicated communicators is a key feature in many libraries.
</span><br>
<span class="quotelev1">&gt; How do you propose to handle the deallocation of the duped
</span><br>
<span class="quotelev1">&gt; communicators when COMM_WORLD is involved?
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15718.php">http://www.open-mpi.org/community/lists/devel/2014/08/15718.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15723/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15724.php">Andrej Prsa: "[OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Previous message:</strong> <a href="15722.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>In reply to:</strong> <a href="15718.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15735.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="15735.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
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
