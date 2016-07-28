<?
$subject_val = "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 14 07:23:53 2012" -->
<!-- isoreceived="20120514112353" -->
<!-- sent="Mon, 14 May 2012 07:23:48 -0400" -->
<!-- isosent="20120514112348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily" -->
<!-- id="454A6367-3E68-4DD4-B74F-A9C8AB0B3014_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120514061644.GA18673_at_neuromancer" -->
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
<strong>Subject:</strong> Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-14 07:23:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19268.php">Götz Waschk: "[OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory"</a>
<li><strong>Previous message:</strong> <a href="19266.php">Andreas Sch&#228;fer: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>In reply to:</strong> <a href="19266.php">Andreas Sch&#228;fer: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19269.php">Bert Wesarg: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 14, 2012, at 2:16 AM, Andreas Sch&#228;fer wrote:
<br>
<p><span class="quotelev1">&gt; Not much more surprising than an array allocated by malloc() not being
</span><br>
<span class="quotelev1">&gt; automatically deallocated once the pointer dies. The datatype variable
</span><br>
<span class="quotelev1">&gt; is merely a handle, Open MPI has an internal data store for each
</span><br>
<span class="quotelev1">&gt; user-defines datatype. Same for requests AFAIK.
</span><br>
<p><p>+1
<br>
<p>More specifically: the MPI standard defines the behavior this way.  It's not an Open MPI-specific artifact.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19268.php">Götz Waschk: "[OMPI users] Open-MPI 1.6 searches for default hostfile in the wrong directory"</a>
<li><strong>Previous message:</strong> <a href="19266.php">Andreas Sch&#228;fer: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>In reply to:</strong> <a href="19266.php">Andreas Sch&#228;fer: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19269.php">Bert Wesarg: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
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
