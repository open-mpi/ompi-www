<?
$subject_val = "[OMPI devel] Fixed sm coll bug";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 20:28:00 2009" -->
<!-- isoreceived="20090915002800" -->
<!-- sent="Mon, 14 Sep 2009 20:27:54 -0400" -->
<!-- isosent="20090915002754" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fixed sm coll bug" -->
<!-- id="EE9C20E9-FC15-4827-B8FE-B493221F9594_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fixed sm coll bug<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-14 20:27:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6835.php">Kiril Dichev: "[OMPI devel] Infiniband always disabled for required thread level	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>Previous message:</strong> <a href="6833.php">Shaun Jackman: "[OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Finally -- I think I have it working:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1988#comment:5">https://svn.open-mpi.org/trac/ompi/ticket/1988#comment:5</a>
<br>
<p>Please, everyone, give coll sm as much testing as you can on as many  
<br>
different platforms as you can.  Use &quot;--mca coll_sm_priority 100&quot; to  
<br>
activate it (and run &gt;1 ppn, of course!).
<br>
<p>Thanks!
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
<li><strong>Next message:</strong> <a href="6835.php">Kiril Dichev: "[OMPI devel] Infiniband always disabled for required thread level	MPI_THREAD_MULTIPLE ?"</a>
<li><strong>Previous message:</strong> <a href="6833.php">Shaun Jackman: "[OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
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
