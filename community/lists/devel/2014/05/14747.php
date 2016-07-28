<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 04:03:10 2014" -->
<!-- isoreceived="20140508080310" -->
<!-- sent="Thu, 8 May 2014 12:03:10 +0400" -->
<!-- isosent="20140508080310" -->
<!-- name="Elena Elkina" -->
<!-- email="elena.elkina_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="CANhOtjbTuVqyAZagPkpBBzj1ZQUngp7OY9A5RDTZQSCnGLkuwQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="536B370B.8090504_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] regression with derived datatypes<br>
<strong>From:</strong> Elena Elkina (<em>elena.elkina_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 04:03:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14748.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14746.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14746.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14748.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>My reproducer failed even with one port enabled (-mca btl_openib_if_include
<br>
mlx4_0:1 ).
<br>
I tried with trunk as well - the same issue.
<br>
<p>Best,
<br>
Elena
<br>
<p><p>On Thu, May 8, 2014 at 11:49 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nathan and George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here are the output files of the original test_scif.c
</span><br>
<span class="quotelev1">&gt; the command line was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -host localhost --mca btl scif,vader,self --mca
</span><br>
<span class="quotelev1">&gt; mpi_ddt_unpack_debug 1 --mca mpi_ddt_pack_debug 1 --mca
</span><br>
<span class="quotelev1">&gt; mpi_ddt_position_debug 1 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is a silent failure and there is no core file
</span><br>
<span class="quotelev1">&gt; the test itself detects it did not receive the expected value
</span><br>
<span class="quotelev1">&gt; /* grep &quot;expected&quot; in the output */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/05/08 16:43, Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev2">&gt; &gt; If you can get me the backtrace from one of the crash core files I would
</span><br>
<span class="quotelev1">&gt; like to see what is going on there.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14746.php">http://www.open-mpi.org/community/lists/devel/2014/05/14746.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14747/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14748.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14746.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14746.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14748.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
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
