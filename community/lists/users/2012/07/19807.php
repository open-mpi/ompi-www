<?
$subject_val = "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 23 06:26:29 2012" -->
<!-- isoreceived="20120723102629" -->
<!-- sent="Mon, 23 Jul 2012 12:26:24 +0200" -->
<!-- isosent="20120723102624" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue" -->
<!-- id="500D26D0.4070704_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="loom.20120720T193128-101_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-23 06:26:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19808.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Previous message:</strong> <a href="19806.php">Reuti: "Re: [OMPI users] checkpoint problem"</a>
<li><strong>In reply to:</strong> <a href="19801.php">Jack Galloway: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jack,
<br>
note that support for THREAD_MULTIPLE is available in [newer] versions of open 
<br>
MPI, but disabled by default. You have to enable it by configuring, in 1.6:
<br>
<p>&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enable MPI_THREAD_MULTIPLE support (default:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;disabled)
<br>
<p>You may check the available threading supprt level by using the attaches program.
<br>
<p><p>On 07/20/12 19:33, Jack Galloway wrote:
<br>
<span class="quotelev1">&gt; This is an old thread, and I'm curious if there is support now for this?  I have
</span><br>
<span class="quotelev1">&gt; a large code that I'm running, a hybrid MPI/OpenMP code, that is having trouble
</span><br>
<span class="quotelev1">&gt; over our infiniband network.  I'm running a fairly large problem (uses about
</span><br>
<span class="quotelev1">&gt; 18GB), and part way in, I get the following errors:
</span><br>
<p>You say &quot;big footprint&quot;? I hear a bell ringing...
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
<br>
<p><p><p><p><p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19807/mpi_threading_support.f">mpi_threading_support.f</a>
</ul>
<!-- attachment="mpi_threading_support.f" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19807/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19808.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Previous message:</strong> <a href="19806.php">Reuti: "Re: [OMPI users] checkpoint problem"</a>
<li><strong>In reply to:</strong> <a href="19801.php">Jack Galloway: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
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
