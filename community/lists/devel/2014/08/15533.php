<?
$subject_val = "[OMPI devel] v1.8.2 still held up...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 13:55:39 2014" -->
<!-- isoreceived="20140807175539" -->
<!-- sent="Thu, 7 Aug 2014 10:55:08 -0700" -->
<!-- isosent="20140807175508" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.8.2 still held up..." -->
<!-- id="48268221-4E38-4000-B6CB-8F8C37D47261_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] v1.8.2 still held up...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-07 13:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15534.php">Pritchard Jr., Howard: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Previous message:</strong> <a href="15532.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15534.php">Pritchard Jr., Howard: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Reply:</strong> <a href="15534.php">Pritchard Jr., Howard: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Reply:</strong> <a href="15535.php">Paul Hargrove: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Reply:</strong> <a href="15536.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Reply:</strong> <a href="15537.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Reply:</strong> <a href="15573.php">Paul Hargrove: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Reply:</strong> <a href="15574.php">Paul Hargrove: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey folks
<br>
<p>I *really* need your help to get this release out the door. It remains stuck on two things:
<br>
<p>* static linking failure - Gilles has posted a proposed fix, but somebody needs to approve and CMR it. Please see:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/4834">https://svn.open-mpi.org/trac/ompi/ticket/4834</a>
<br>
<p>* fixes to coll/ml that expanded to fixing page alignment in general - someone needs to review/approve it:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/4826">https://svn.open-mpi.org/trac/ompi/ticket/4826</a>
<br>
<p><p>We also have three outstanding issues that may not make 1.8.2:
<br>
<p>* MPI-I/O issues - looks like ROMIO needs some patches, and OMPIO may have an issue:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2014/08/24934.php">http://www.open-mpi.org/community/lists/users/2014/08/24934.php</a>
<br>
<p>* Siegmar reports another alignment issue on Sparc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2014/07/24869.php">http://www.open-mpi.org/community/lists/users/2014/07/24869.php</a>
<br>
<p>* Siegmar reports an issue that looks like it relates to handling of boolean MCA params:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2014/08/24944.php">http://www.open-mpi.org/community/lists/users/2014/08/24944.php</a>
<br>
<p><p>Can someone *please* help out with these?
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15533/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15534.php">Pritchard Jr., Howard: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Previous message:</strong> <a href="15532.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15534.php">Pritchard Jr., Howard: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Reply:</strong> <a href="15534.php">Pritchard Jr., Howard: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Reply:</strong> <a href="15535.php">Paul Hargrove: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Reply:</strong> <a href="15536.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Reply:</strong> <a href="15537.php">Gilles Gouaillardet: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Reply:</strong> <a href="15573.php">Paul Hargrove: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Reply:</strong> <a href="15574.php">Paul Hargrove: "Re: [OMPI devel] v1.8.2 still held up..."</a>
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
