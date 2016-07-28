<?
$subject_val = "Re: [OMPI devel] bcol basesmuma maintainer?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  2 17:23:11 2013" -->
<!-- isoreceived="20130102222311" -->
<!-- sent="Wed, 2 Jan 2013 17:22:53 -0500" -->
<!-- isosent="20130102222253" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bcol basesmuma maintainer?" -->
<!-- id="33F06063-C8BA-4429-8205-993E8F059FFB_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD31794093_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bcol basesmuma maintainer?<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-02 17:22:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11891.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<li><strong>Previous message:</strong> <a href="11889.php">Barrett, Brian W: "[OMPI devel] bcol basesmuma maintainer?"</a>
<li><strong>In reply to:</strong> <a href="11889.php">Barrett, Brian W: "[OMPI devel] bcol basesmuma maintainer?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11891.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>I will take a look. Thanks for the patch !
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jan 2, 2013, at 4:37 PM, Barrett, Brian W wrote:
Hi all -
Who's maintaining the bcol basesmuma component?  I'd like to commit the
attached patch, which cleans up some usage of process names, but want a
second pair of eyeballs.  The orte_namelist_t type is meant for places
where the orte_process_na me_t needs to be put on a list.  In basesmuma,
it's being used like an rote_process_name_t.  While it doesn't really
matter, it means one more thing that has to be in the API between the
runtime and the MPI layer, so I'd like to clean it up.
Thanks,
Brian
--
 Brian W. Barrett
 Scalable System Software Group
 Sandia National Laboratories
&lt;bcol_namelist.diff&gt;_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11891.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<li><strong>Previous message:</strong> <a href="11889.php">Barrett, Brian W: "[OMPI devel] bcol basesmuma maintainer?"</a>
<li><strong>In reply to:</strong> <a href="11889.php">Barrett, Brian W: "[OMPI devel] bcol basesmuma maintainer?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11891.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
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
