<?
$subject_val = "Re: [OMPI devel] bcol basesmuma maintainer?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 15:16:11 2013" -->
<!-- isoreceived="20130103201611" -->
<!-- sent="Thu, 3 Jan 2013 15:15:38 -0500" -->
<!-- isosent="20130103201538" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bcol basesmuma maintainer?" -->
<!-- id="868C8DB3-5A34-4A9A-99D8-A308B5AC87AE_at_ornl.gov" -->
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
<strong>Date:</strong> 2013-01-03 15:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11892.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
<li><strong>Previous message:</strong> <a href="11890.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<li><strong>In reply to:</strong> <a href="11889.php">Barrett, Brian W: "[OMPI devel] bcol basesmuma maintainer?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
The patch looks good. Please go ahead and push it.
<br>
Thanks !
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
<li><strong>Next message:</strong> <a href="11892.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
<li><strong>Previous message:</strong> <a href="11890.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<li><strong>In reply to:</strong> <a href="11889.php">Barrett, Brian W: "[OMPI devel] bcol basesmuma maintainer?"</a>
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
