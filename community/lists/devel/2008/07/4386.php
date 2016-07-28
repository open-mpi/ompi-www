<?
$subject_val = "Re: [OMPI devel] v1.3: libnbc and sm2 coll components";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 18:36:48 2008" -->
<!-- isoreceived="20080721223648" -->
<!-- sent="Mon, 21 Jul 2008 18:36:46 -0400" -->
<!-- isosent="20080721223646" -->
<!-- name="Torsten Hoefler" -->
<!-- email="torsten.hoefler_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.3: libnbc and sm2 coll components" -->
<!-- id="20080721223646.GD3187_at_benten.cs.indiana.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3E55E4BB-6A8E-4756-99DA-7538BF1A0FAC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.3: libnbc and sm2 coll components<br>
<strong>From:</strong> Torsten Hoefler (<em>torsten.hoefler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-21 18:36:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4387.php">Brian W. Barrett: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>Previous message:</strong> <a href="4385.php">Jeff Squyres: "[OMPI devel] MCA base component changes"</a>
<li><strong>In reply to:</strong> <a href="4384.php">Jeff Squyres: "[OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4390.php">Jeff Squyres: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<li><strong>Reply:</strong> <a href="4390.php">Jeff Squyres: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<span class="quotelev1">&gt; Should these 2 components be in v1.3?
</span><br>
for LibNBC: no. This was a test to implement blocking colls on top of
<br>
non-blocking when the tuned implementation was lacking some ops (e.g.,
<br>
Allgather). Tuned now efficiently implements most collectives which
<br>
makes the blocking version of LibNBC unnecessary. Non-blocking
<br>
collectives are not supported by Open MPI (and were not implemented in
<br>
this component).
<br>
<p>I (as the author) would vote to delete it from the trunk :).
<br>
<p>Best,
<br>
&nbsp;&nbsp;Torsten
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
Indiana University    | <a href="http://www.indiana.edu">http://www.indiana.edu</a>
Open Systems Lab      | <a href="http://osl.iu.edu/">http://osl.iu.edu/</a>
150 S. Woodlawn Ave.  | Bloomington, IN, 474045-7104 | USA
Lindley Hall Room 135 | +01 (812) 855-3608
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4387.php">Brian W. Barrett: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>Previous message:</strong> <a href="4385.php">Jeff Squyres: "[OMPI devel] MCA base component changes"</a>
<li><strong>In reply to:</strong> <a href="4384.php">Jeff Squyres: "[OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4390.php">Jeff Squyres: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<li><strong>Reply:</strong> <a href="4390.php">Jeff Squyres: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
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
