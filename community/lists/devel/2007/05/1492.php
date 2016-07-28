<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 16:03:45 2007" -->
<!-- isoreceived="20070508200345" -->
<!-- sent="Tue, 8 May 2007 14:03:36 -0600" -->
<!-- isosent="20070508200336" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="[OMPI devel] Autotools Upgrade Time" -->
<!-- id="551D7DEE-5B28-4ECD-AD2F-DB4FEC2E7CE5_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-08 16:03:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1493.php">Donald Kerr: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<li><strong>Previous message:</strong> <a href="1491.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and RDMA-CM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1548.php">Brian Barrett: "Re: [OMPI devel] Autotools Upgrade Time"</a>
<li><strong>Reply:</strong> <a href="1548.php">Brian Barrett: "Re: [OMPI devel] Autotools Upgrade Time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>As was discussed on the telecon a couple of weeks ago, to try to  
<br>
lower the maintenance cost of the build system, starting this  
<br>
Saturday Autoconf 2.60 and Automake 1.10 will be required to  
<br>
successfully run autogen.sh on the trunk.  As I mentioned in a  
<br>
previous e-mail, the required versions of the autotools will be:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Autoconf	Automake	Libtool
<br>
v1.1		2.57-2.59	1.9.6		1.5.22
<br>
v1.2		2.57-new	1.9.6-new	1.5.22-new
<br>
trunk		2.60-new	1.10.0-new	1.5.22-new
<br>
<p><p>This means that there's no set of autotools that will be able to  
<br>
build all three versions of Open MPI, but since very few people  
<br>
currently spend time on v1.1, this should not present a major problem.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1493.php">Donald Kerr: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<li><strong>Previous message:</strong> <a href="1491.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and RDMA-CM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1548.php">Brian Barrett: "Re: [OMPI devel] Autotools Upgrade Time"</a>
<li><strong>Reply:</strong> <a href="1548.php">Brian Barrett: "Re: [OMPI devel] Autotools Upgrade Time"</a>
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
