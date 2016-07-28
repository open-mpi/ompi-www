<?
$subject_val = "Re: [OMPI devel] MPI_Type_free(MPI_BYTE) not failing afterMPI_Win_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 07:52:24 2010" -->
<!-- isoreceived="20100622115224" -->
<!-- sent="Tue, 22 Jun 2010 07:52:19 -0400" -->
<!-- isosent="20100622115219" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Type_free(MPI_BYTE) not failing afterMPI_Win_create()" -->
<!-- id="587B345C-83D2-443C-A943-B687D7D1C48D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimLnXOf11DIcSMg5DH0ANlORpM6O5LJIvK3wMF-_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Type_free(MPI_BYTE) not failing afterMPI_Win_create()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 07:52:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8114.php">Jeff Squyres: "[OMPI devel] 1.5rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8112.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="8111.php">Lisandro Dalcin: "[OMPI devel] MPI_Type_free(MPI_BYTE) not failing after MPI_Win_create()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 18, 2010, at 2:57 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; See the code below. As expected, you DO get an error (though the error
</span><br>
<span class="quotelev1">&gt; is ERR_INTERN, somewhat not informative). However, if you fist
</span><br>
<span class="quotelev1">&gt; create() % destroy a windows, you DO NOT get any error. This is VERY
</span><br>
<span class="quotelev1">&gt; strange, right?
</span><br>
<p>It looks like it's a combination of two things:
<br>
<p>1. A fix that you brought up a long time ago was applied to the trunk but not to the v1.4 branch (disallowing calling TYPE_FREE on predefined types).  I just filed CMR #2448 to fix this.
<br>
<p>2. It looks like MPI_WIN_CREATE is incrementing the refcount on MPI_TYPE_BYTE (assumedly by sending a message?), but that refcount is never getting decreased (perhaps the message is not received?).  I do note that this does not happen on the trunk (the refcount stays at 1); it only happens on the v1.4 series.  I'm not sure how high priority it'll be to fix this, but I filed ticket #2449 about the issue.
<br>
<p>Thanks for reporting these issues!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8114.php">Jeff Squyres: "[OMPI devel] 1.5rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8112.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="8111.php">Lisandro Dalcin: "[OMPI devel] MPI_Type_free(MPI_BYTE) not failing after MPI_Win_create()"</a>
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
