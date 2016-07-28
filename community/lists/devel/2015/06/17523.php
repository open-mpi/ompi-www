<?
$subject_val = "Re: [OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 21:34:40 2015" -->
<!-- isoreceived="20150623013440" -->
<!-- sent="Tue, 23 Jun 2015 10:34:33 +0900" -->
<!-- isosent="20150623013433" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY" -->
<!-- id="5588B7A9.9090000_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAEcYPwA6PAGqQEn26_qA6hOG3bE7p2+h=iJQfjDdw82PZPqnJg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-22 21:34:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17524.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<li><strong>Previous message:</strong> <a href="17522.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<li><strong>In reply to:</strong> <a href="17518.php">Lisandro Dalcin: "[OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>this is related to your previous report :
<br>
some bugs were introduced when silencing zero size mallocs
<br>
<p>here is attached a patch (to be applied as well as the previous one)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/23/2015 12:23 AM, Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; The attached test code used to work in 1.8.5 and below, but they are
</span><br>
<span class="quotelev1">&gt; failing in 1.8.6 with MPI_ERR_INTERN (tested in OS X).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17518.php">http://www.open-mpi.org/community/lists/devel/2015/06/17518.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17523/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17523/osc.patch">osc.patch</a>
</ul>
<!-- attachment="osc.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17524.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<li><strong>Previous message:</strong> <a href="17522.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<li><strong>In reply to:</strong> <a href="17518.php">Lisandro Dalcin: "[OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
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
