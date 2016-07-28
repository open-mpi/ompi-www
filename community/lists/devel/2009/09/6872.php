<?
$subject_val = "[OMPI devel] coll sm ramifications";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 12:32:29 2009" -->
<!-- isoreceived="20090922163229" -->
<!-- sent="Tue, 22 Sep 2009 12:32:23 -0400" -->
<!-- isosent="20090922163223" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] coll sm ramifications" -->
<!-- id="F5B84277-323D-4C59-A80C-E1A2787EBF2B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] coll sm ramifications<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 12:32:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6873.php">Pallab Datta: "Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="6871.php">Lisandro Dalcin: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol 	visibility of libtool ltdl API in current trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Someday soon, coll sm will be reliable.  Really.  :-)
<br>
<p>One thing I noticed is that coll sm is &quot;slow&quot; in communicator  
<br>
construction and destruction because it mmap's upon creation and  
<br>
munmap's upon deletion.  For most apps, this probably doesn't matter.   
<br>
For apps that create bajillions of communicators, the effect can be  
<br>
noticeable.
<br>
<p>There's at least one way to alleviate this effect, but I don't have  
<br>
time to implement this optimization.  I wrote up a ticket with a few  
<br>
more details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2027">https://svn.open-mpi.org/trac/ompi/ticket/2027</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6873.php">Pallab Datta: "Re: [OMPI devel] [OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="6871.php">Lisandro Dalcin: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol 	visibility of libtool ltdl API in current trunk"</a>
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
