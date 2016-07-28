<?
$subject_val = "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 24 08:42:27 2012" -->
<!-- isoreceived="20121224134227" -->
<!-- sent="Mon, 24 Dec 2012 08:41:56 -0500" -->
<!-- isosent="20121224134156" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI] #3351: JAVA scatter error" -->
<!-- id="B9FCEE40-3B15-44B7-A8BA-9C6DB85E3A71_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201212191422.qBJEM2hs005209_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI] #3351: JAVA scatter error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-24 08:41:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21046.php">Jeff Squyres: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Previous message:</strong> <a href="21044.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="21010.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21039.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 19, 2012, at 9:22 AM, Siegmar Gross wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I think the real shortcoming is that there is no Datatype.Resized
</span><br>
<span class="quotelev2">&gt;&gt; function.  That can be fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you sure? That would at least solve one problem.
</span><br>
<p><p>Here's a first cut at a patch.
<br>
<p>I don't know if this is fully correct; I don't quite understand yet how baseSize is used in the .java files, but it seems incorrect to me.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21045/resized.patch">resized.patch</a>
</ul>
<!-- attachment="resized.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21046.php">Jeff Squyres: "Re: [OMPI users] broadcasting basic data items in Java"</a>
<li><strong>Previous message:</strong> <a href="21044.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="21010.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21039.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
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
