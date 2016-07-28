<?
$subject_val = "[OMPI devel] RMAPS rank_file component patch and modifications for review";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 06:01:13 2008" -->
<!-- isoreceived="20080326100113" -->
<!-- sent="Wed, 26 Mar 2008 12:01:03 +0200" -->
<!-- isosent="20080326100103" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="[OMPI devel] RMAPS rank_file component patch and modifications for review" -->
<!-- id="39C75744D164D948A170E9792AF8E7CAE14CE7_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> [OMPI devel] RMAPS rank_file component patch and modifications for review<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-26 06:01:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3530.php">Tim Prins: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for	review"</a>
<li><strong>Previous message:</strong> <a href="3528.php">George Bosilca: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3530.php">Tim Prins: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for	review"</a>
<li><strong>Reply:</strong> <a href="3530.php">Tim Prins: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for	review"</a>
<li><strong>Reply:</strong> <a href="3543.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3596.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
<p>Hi, all
<br>
<p>Attached patch for modified Rank_File RMAPS component.
<br>
<p>&nbsp;
<br>
<p>1.    introduced new general purpose debug flags
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_debug 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_debug
<br>
<p>&nbsp;
<br>
<p>2.    introduced new mca parameter opal_paffinity_slot_list
<br>
<p>3.    ompi_mpi_init cleaned from opal paffinity functions
<br>
<p>4.    opal paffinity functions moved to new file
<br>
opal/mca/paffinity/base/paffinity_base_service.c
<br>
<p>5.    rank_file component files were renamed according to prefix policy 
<br>
<p>6.    global variables renamed as well.
<br>
<p>7.    few bug fixes that were brought during previous discussions. 
<br>
<p>8.    If user defines opal_paffinity_alone and rmaps_rank_file_path or
<br>
opal_paffinity_slot_list, 
<br>
<p>then he gets a Warning that only opal_paffinity_alone will be used.
<br>
<p>&nbsp;
<br>
<p>.
<br>
<p>Best Regards,
<br>
<p>Lenny.
<br>
<p>&nbsp;
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3529/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3529/rank_file.patch">rank_file.patch</a>
</ul>
<!-- attachment="rank_file.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3530.php">Tim Prins: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for	review"</a>
<li><strong>Previous message:</strong> <a href="3528.php">George Bosilca: "Re: [OMPI devel] FreeBSD timer_base_open error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3530.php">Tim Prins: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for	review"</a>
<li><strong>Reply:</strong> <a href="3530.php">Tim Prins: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for	review"</a>
<li><strong>Reply:</strong> <a href="3543.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3596.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
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
