<?
$subject_val = "[OMPI devel] configure broken";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 21:09:17 2009" -->
<!-- isoreceived="20091023010917" -->
<!-- sent="Thu, 22 Oct 2009 21:09:10 -0400" -->
<!-- isosent="20091023010910" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] configure broken" -->
<!-- id="02419272-EFB2-4D41-A889-C3B8DC877EED_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] configure broken<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 21:09:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7014.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<li><strong>Previous message:</strong> <a href="7012.php">David Singleton: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7014.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<li><strong>Reply:</strong> <a href="7014.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There seems to be an issue with the latest changes on the configure  
<br>
scripts. A careful reading of the output of configure on MAC OS X  
<br>
shows a lot of errors/warnings, which leads to undefined  
<br>
AM_CONDITIONALS (PROJECT_OMPI_*). This apparently comes from  
<br>
configure.ac line 62 where the path to /bin/true is hardcoded! Of  
<br>
course /bin/true doesn't exist on MAC OS X, instead it is locate in / 
<br>
usr/bin/.
<br>
<p>george.
<br>
<p>checking how to create a ustar tar archive... gnutar
<br>
../ompi/configure: line 5480: /bin/true: No such file or directory
<br>
../ompi/configure: line 5488: /bin/true: No such file or directory
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7014.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<li><strong>Previous message:</strong> <a href="7012.php">David Singleton: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7014.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<li><strong>Reply:</strong> <a href="7014.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
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
