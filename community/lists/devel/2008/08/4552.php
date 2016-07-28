<?
$subject_val = "[OMPI devel] openib component lock";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 18:04:23 2008" -->
<!-- isoreceived="20080805220423" -->
<!-- sent="Tue, 5 Aug 2008 18:04:14 -0400" -->
<!-- isosent="20080805220414" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib component lock" -->
<!-- id="5B481D44-6B0E-456F-9481-D80A240EEC2F_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] openib component lock<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-05 18:04:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4553.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib component lock"</a>
<li><strong>Previous message:</strong> <a href="4551.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.7rc4 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4553.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib component lock"</a>
<li><strong>Reply:</strong> <a href="4553.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib component lock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In working on <a href="https://svn.open-mpi.org/trac/ompi/ticket/1434">https://svn.open-mpi.org/trac/ompi/ticket/1434</a>, I see  
<br>
fairly inconsistent use of the mca_openib_btl_component.ib_lock, such  
<br>
as within btl_openib_proc.c.
<br>
<p>In fixing #1434, do I need to be mindful doing all the locking  
<br>
properly, or is it already so broken that it doesn't really matter,  
<br>
and all I need to do is ensure that I don't put in any bozo deadlocks?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4553.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib component lock"</a>
<li><strong>Previous message:</strong> <a href="4551.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.7rc4 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4553.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib component lock"</a>
<li><strong>Reply:</strong> <a href="4553.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib component lock"</a>
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
