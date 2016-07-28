<?
$subject_val = "[OMPI devel] issue with group sentinel values";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 03:51:00 2015" -->
<!-- isoreceived="20150911075100" -->
<!-- sent="Fri, 11 Sep 2015 16:50:53 +0900" -->
<!-- isosent="20150911075053" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] issue with group sentinel values" -->
<!-- id="55F287DD.3020207_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] issue with group sentinel values<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-11 03:50:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18005.php">Ralph Castain: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Previous message:</strong> <a href="18003.php">Gilles Gouaillardet: "Re: [OMPI devel] New master warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18008.php">George Bosilca: "Re: [OMPI devel] issue with group sentinel values"</a>
<li><strong>Reply:</strong> <a href="18008.php">George Bosilca: "Re: [OMPI devel] issue with group sentinel values"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>i am experiencing some issues and i found commit 
<br>
0bf06de3f1444f469303e47752430ec9b423b33f
<br>
<a href="https://github.com/open-mpi/ompi/commit/0bf06de3f1444f469303e47752430ec9b423b33f">https://github.com/open-mpi/ompi/commit/0bf06de3f1444f469303e47752430ec9b423b33f</a> 
<br>
and the following are very likely the root cause.
<br>
<p>i experience this on a linux sparc system only.
<br>
<p>Per the commit log :
<br>
&quot;[...] This takes advantage of the fact that on most (all?)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;systems the top bit of a user-space pointer is never set. If this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;changes then a new sentinel will be needed.&quot;
<br>
<p>i am sorry to report the assumption is wrong :-(
<br>
<p>print group-&gt;grp_proc_pointers[0]
<br>
Result = (struct ompi_proc_t *) 0xfffff8010010f540
<br>
<p>what about using the lower bit instead ?
<br>
my assumption is that ompi_proc_t objects are aligned (static or 
<br>
malloc'ed one) on at least a pointer size (4 in x86) so the lower bit 
<br>
should always be zero.
<br>
<p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18005.php">Ralph Castain: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Previous message:</strong> <a href="18003.php">Gilles Gouaillardet: "Re: [OMPI devel] New master warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18008.php">George Bosilca: "Re: [OMPI devel] issue with group sentinel values"</a>
<li><strong>Reply:</strong> <a href="18008.php">George Bosilca: "Re: [OMPI devel] issue with group sentinel values"</a>
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
