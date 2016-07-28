<?
$subject_val = "[Open MPI Announce] Critical bug notice";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 14:34:58 2009" -->
<!-- isoreceived="20090327183458" -->
<!-- sent="Fri, 27 Mar 2009 11:34:46 -0700" -->
<!-- isosent="20090327183446" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Critical bug notice" -->
<!-- id="951015C3-0139-4E62-8C89-CCD6B90BA82E_at_cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Critical bug notice<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 14:34:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/04/0030.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.3.2 released"</a>
<li><strong>Previous message:</strong> <a href="0028.php">Jeff Squyres: "[Open MPI Announce] New Open MPI release numbering scheme"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI team has uncovered a serious bug in Open MPI v1.3.0 and  
<br>
v1.3.1: when running on OpenFabrics-based networks, silent data  
<br>
corruption is possible in some cases.  There are two workarounds to  
<br>
avoid the issue -- please see the bug ticket that has been opened  
<br>
about this issue for further details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1853">https://svn.open-mpi.org/trac/ompi/ticket/1853</a>
<br>
<p>We strongly encourage all users who are using Open MPI v1.3.0 and/or  
<br>
v1.3.1 on OpenFabrics-based networks to read this ticket and use one  
<br>
of the workarounds described there.
<br>
<p>The Open MPI team is working on a fix; it will be included in the  
<br>
v1.3.2 release.  Updates will be posted to the ticket.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/04/0030.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.3.2 released"</a>
<li><strong>Previous message:</strong> <a href="0028.php">Jeff Squyres: "[Open MPI Announce] New Open MPI release numbering scheme"</a>
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
