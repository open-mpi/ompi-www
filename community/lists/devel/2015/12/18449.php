<?
$subject_val = "Re: [OMPI devel] [1.10.2rc1] alloc link failure on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 20:13:19 2015" -->
<!-- isoreceived="20151222011319" -->
<!-- sent="Tue, 22 Dec 2015 10:13:17 +0900" -->
<!-- isosent="20151222011317" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.10.2rc1] alloc link failure on Solaris" -->
<!-- id="5678A3AC.7000704_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA17OwvbjLSc4z=29p+mya69UCrpj9Pz=8hUt7n7esxr1RA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.10.2rc1] alloc link failure on Solaris<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-21 20:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18450.php">Gilles Gouaillardet: "[OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>Previous message:</strong> <a href="18448.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>In reply to:</strong> <a href="18440.php">Paul Hargrove: "[OMPI devel] [1.10.2rc1] alloc link failure on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul !
<br>
<p>i will review this and make the PRs
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 12/20/2015 9:44 AM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; On my Solaris 11.2 system, alloca() is a macro defined in alloca.h.
</span><br>
<span class="quotelev1">&gt; So, the following is needed to avoid link failures:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/pml/cm/pml_cm.h~   Sat Dec 19 16:25:54 2015
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/pml/cm/pml_cm.h    Sat Dec 19 16:26:30 2015
</span><br>
<span class="quotelev1">&gt; @@ -32,6 +32,9 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;pml_cm_sendreq.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/message/message.h&quot;
</span><br>
<span class="quotelev1">&gt; +#ifdef HAVE_ALLOCA_H
</span><br>
<span class="quotelev1">&gt; +#include &lt;alloca.h&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;  BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based solely on source inspection, I believe master and v2.x have the 
</span><br>
<span class="quotelev1">&gt; same issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18440.php">http://www.open-mpi.org/community/lists/devel/2015/12/18440.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18449/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18450.php">Gilles Gouaillardet: "[OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>Previous message:</strong> <a href="18448.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>In reply to:</strong> <a href="18440.php">Paul Hargrove: "[OMPI devel] [1.10.2rc1] alloc link failure on Solaris"</a>
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
