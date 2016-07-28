<?
$subject_val = "[OMPI devel] Open MPI 1.6.5 opal_paffinity_base_get_physical_socket_id";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 14:48:01 2014" -->
<!-- isoreceived="20140530184801" -->
<!-- sent="Fri, 30 May 2014 18:47:53 +0000" -->
<!-- isosent="20140530184753" -->
<!-- name="Lecrenski, Stephen K       PW" -->
<!-- email="Stephen.Lecrenski_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI 1.6.5 opal_paffinity_base_get_physical_socket_id" -->
<!-- id="3647E454F318284EAF10851638CD92520638C7F2_at_UUSNWE1M.na.utcmail.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI 1.6.5 opal_paffinity_base_get_physical_socket_id<br>
<strong>From:</strong> Lecrenski, Stephen K       PW (<em>Stephen.Lecrenski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-30 14:47:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14916.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>Previous message:</strong> <a href="14914.php">George Bosilca: "Re: [OMPI devel] fortran types alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14916.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>Reply:</strong> <a href="14916.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running some performance tests (Open SpeedShop) with a program which uses Open MPI and Infiniband.
<br>
<p>I see a line of code which appears to be taking a considerable amount of cpu time in relation to other pieces of the code.
<br>
<p>opal_paffinity_base_get_physical_socket_id (libmpi.so.1.0.8: paffinity_base_wrappers.c,118)
<br>
<p>&nbsp;&nbsp;Exclusive CPU time in seconds.
<br>
<p>% of CPU Time
<br>
<p>Statement Location (Line Number)
<br>
<p>19031.94
<br>
<p>38.339796
<br>
<p>paffinity_base_wrappers.c(118)
<br>
<p>14188.66
<br>
<p>28.583021
<br>
<p>paffinity_base_wrappers.c(113)
<br>
<p>10934.38
<br>
<p>22.027282
<br>
<p>paffinity_base_wrappers.c(129)
<br>
<p>2185.16
<br>
<p>4.401999
<br>
<p>paffinity_base_wrappers.c(121)
<br>
<p>1081.96
<br>
<p>2.179606
<br>
<p>paffinity_base_wrappers.c(130)
<br>
<p>546.93
<br>
<p>1.101789
<br>
<p>paffinity_base_wrappers.c(114)
<br>
<p>546.17
<br>
<p>1.100258
<br>
<p>paffinity_base_wrappers.c(65)
<br>
<p>541.67
<br>
<p>1.091193
<br>
<p>paffinity_base_wrappers.c(126)
<br>
<p>540.52
<br>
<p>1.088876
<br>
<p>ompi_mpi_abort.c(80)
<br>
<p>2.23
<br>
<p>0.004492
<br>
<p>ompi_mpi_abort.c(101)
<br>
<p><p><p>Is this normal behavior?
<br>
<p>Thanks,
<br>
<p>Stephen Lecrenski
<br>
High Performance Technical Computing
<br>
<p>Pratt &amp; Whitney
<br>
400 Main Street
<br>
East Hartford,CT 06108
<br>
Telephone: 860 - 557 - 2895
<br>
Email:         Stephen.Lecrenski_at_[hidden]&lt;mailto:dwayne.hanlan_at_[hidden]&gt;
<br>
P Please consider the environment before printing this e-mail
<br>
CONFIDENTIALITY WARNING: This email may contain privileged or confidential information and is for the sole use of the intended recipients.  Unauthorized disclosure or use of this communication is prohibited.  If you believe that you have received this email in error, please notify the sender immediately and delete it from your system.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14915/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14916.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>Previous message:</strong> <a href="14914.php">George Bosilca: "Re: [OMPI devel] fortran types alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14916.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>Reply:</strong> <a href="14916.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
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
