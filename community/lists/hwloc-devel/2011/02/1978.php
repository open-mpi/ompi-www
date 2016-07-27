<?
$subject_val = "[hwloc-devel] arbitrary length limit in attr_snprintf";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 21 14:16:12 2011" -->
<!-- isoreceived="20110221191612" -->
<!-- sent="Mon, 21 Feb 2011 13:16:06 -0600" -->
<!-- isosent="20110221191606" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] arbitrary length limit in attr_snprintf" -->
<!-- id="4D62B9F6.4040005_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] arbitrary length limit in attr_snprintf<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-21 14:16:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1979.php">Jeff Squyres: "[hwloc-devel] more de-c99"</a>
<li><strong>Previous message:</strong> <a href="1977.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3191)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The output of hwloc_obj_attr_snprintf() is arbitrarily limited. In particular, 
<br>
the infos portion is at most 255 characters long. On my systems there is quite 
<br>
a bit more in the infos for the machine object.
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1979.php">Jeff Squyres: "[hwloc-devel] more de-c99"</a>
<li><strong>Previous message:</strong> <a href="1977.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3191)"</a>
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
