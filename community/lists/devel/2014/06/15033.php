<?
$subject_val = "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 23:02:28 2014" -->
<!-- isoreceived="20140620030228" -->
<!-- sent="Fri, 20 Jun 2014 12:02:37 +0900" -->
<!-- isosent="20140620030237" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile" -->
<!-- id="53A3A44D.4080502_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9CEDD566-1EA6-4C21-9E77-C756BD00CEAF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-19 23:02:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15034.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Previous message:</strong> <a href="15032.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>In reply to:</strong> <a href="15032.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15034.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Reply:</strong> <a href="15034.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and Tetsuya,
<br>
<p>is this related to the hang i reported at
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/06/14975.php">http://www.open-mpi.org/community/lists/devel/2014/06/14975.php</a> ?
<br>
<p>Nathan already replied he is working on a fix.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 2014/06/20 11:54, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; My guess is that the coll/ml component may have problems with binding a single process across multiple cores like that - it might be that we'll have to have it check for that condition and disqualify itself. It is a particularly bad binding pattern, though, as shared memory gets completely messed up when you split that way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15034.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Previous message:</strong> <a href="15032.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>In reply to:</strong> <a href="15032.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15034.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Reply:</strong> <a href="15034.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
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
