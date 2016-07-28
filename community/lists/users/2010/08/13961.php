<?
$subject_val = "Re: [OMPI users] MPI Template Datatype?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 16:06:04 2010" -->
<!-- isoreceived="20100810200604" -->
<!-- sent="Tue, 10 Aug 2010 22:05:59 +0200" -->
<!-- isosent="20100810200559" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Template Datatype?" -->
<!-- id="AANLkTimooAjw1_srKcs9hdu8jfVkfsni1Qtu+5ee+Y_S_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTinC7dXkEkhns9Gp4v_yawyD11eEeH2aiGBAbUL+_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Template Datatype?<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-10 16:05:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13962.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13960.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>In reply to:</strong> <a href="13960.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Aug 10, 2010 at 9:49 PM, Alexandru Blidaru &lt;alexsb92_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Are the Boost.MPI send and recv functions as fast as the standard ones when
</span><br>
<span class="quotelev1">&gt; using Open-MPI?
</span><br>
<p>Boost.MPI is layered on top of plain MPI; it basically provides a
<br>
mapping from complex and user-defined C++ data types to MPI datatypes.
<br>
The added overhead depends on how complex the C++ data structures are;
<br>
there are some tweaks and hints that can reduce the overhead, it's all
<br>
explained in the manual.
<br>
<p>There are also some performance comparison available in the Boost.MPI
<br>
manual:
<br>
<p>&nbsp;&nbsp;<a href="http://www.boost.org/doc/libs/1_43_0/doc/html/mpi/performance.html">http://www.boost.org/doc/libs/1_43_0/doc/html/mpi/performance.html</a>
<br>
<p>Best regards,
<br>
Riccardo
<br>
<p>P.S. I think discussion of Boost.MPI is off-topic on the OMPI mailing
<br>
list; feel free to email me privately or move discussion to the
<br>
Boost.MPI mailing-list.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13962.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13960.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>In reply to:</strong> <a href="13960.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
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
