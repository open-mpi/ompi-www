<?
$subject_val = "[hwloc-devel] documentation/implementation questions with the snprintf routines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 11:13:17 2011" -->
<!-- isoreceived="20110106161317" -->
<!-- sent="Thu, 06 Jan 2011 10:13:10 -0600" -->
<!-- isosent="20110106161310" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] documentation/implementation questions with the snprintf routines" -->
<!-- id="4D25EA16.8090002_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] documentation/implementation questions with the snprintf routines<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 11:13:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1801.php">Brice Goglin: "Re: [hwloc-devel] documentation/implementation questions with the snprintf routines"</a>
<li><strong>Previous message:</strong> <a href="1799.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1801.php">Brice Goglin: "Re: [hwloc-devel] documentation/implementation questions with the snprintf routines"</a>
<li><strong>Reply:</strong> <a href="1801.php">Brice Goglin: "Re: [hwloc-devel] documentation/implementation questions with the snprintf routines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The man pages for the various snprintf routines indicate that they return the 
<br>
number of characters written. My testing indicates that they always return the 
<br>
number of characters required, which can be more or less than the space supplied.
<br>
My testing also indicates that if the buffer size is indicated as zero, the 
<br>
buffer pointer is not referenced. This allows me to pass in NULL and zero to 
<br>
determine the required size before allocating the space. I would like to see 
<br>
that explicitly promised so I can count on it going forward.
<br>
thanks,
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1801.php">Brice Goglin: "Re: [hwloc-devel] documentation/implementation questions with the snprintf routines"</a>
<li><strong>Previous message:</strong> <a href="1799.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1801.php">Brice Goglin: "Re: [hwloc-devel] documentation/implementation questions with the snprintf routines"</a>
<li><strong>Reply:</strong> <a href="1801.php">Brice Goglin: "Re: [hwloc-devel] documentation/implementation questions with the snprintf routines"</a>
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
