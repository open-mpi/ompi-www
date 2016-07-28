<?
$subject_val = "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  3 12:47:37 2010" -->
<!-- isoreceived="20100803164737" -->
<!-- sent="Tue, 03 Aug 2010 12:47:30 -0400" -->
<!-- isosent="20100803164730" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC:  Add new Solaris sysinfo component" -->
<!-- id="C87DC062.E4EF%rlgraham_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C57F6A8.6070105_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC:  Add new Solaris sysinfo component<br>
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-03 12:47:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8246.php">Terry Dontje: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>Previous message:</strong> <a href="8244.php">Ralph Castain: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>In reply to:</strong> <a href="8243.php">Terry Dontje: "[OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8246.php">Terry Dontje: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>Reply:</strong> <a href="8246.php">Terry Dontje: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why do we need an RFC for this sort of component ?  Seems self contained.
<br>
<p>Rich
<br>
<p><p>On 8/3/10 6:59 AM, &quot;Terry Dontje&quot; &lt;terry.dontje_at_[hidden]&gt; wrote:
<br>
<p>WHAT:  Add new Solaris sysinfo component
<br>
<p>WHY:  To allow OPAL access to chip type and model information when running on Solaris OS.
<br>
<p>WHERE: opal/mca/sysinfo/solaris
<br>
<p>WHEN:  for 1.5.1
<br>
<p>TIMEOUT:  Aug 10, 2010
<br>
<p>-------------------------------------------------------------------------
<br>
<p>MORE DETAILS:
<br>
<p>There is a sysinfo framework that has a component for Linux to expose the chip type and model information to OPAL.  This RFC is to propose the making of a Solaris component to expose the same information.  The Linux component also exposes number of processes and memory amount on a node, however the first instantiation of the Solaris component will not expose this information because it will be easier to do such with hwloc (which has not been integrated to provide such info, yet).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8246.php">Terry Dontje: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>Previous message:</strong> <a href="8244.php">Ralph Castain: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>In reply to:</strong> <a href="8243.php">Terry Dontje: "[OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8246.php">Terry Dontje: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>Reply:</strong> <a href="8246.php">Terry Dontje: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
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
