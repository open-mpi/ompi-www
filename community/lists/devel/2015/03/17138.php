<?
$subject_val = "[OMPI devel] Master failure of oob_tcp on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 01:05:44 2015" -->
<!-- isoreceived="20150320050544" -->
<!-- sent="Thu, 19 Mar 2015 22:05:40 -0700" -->
<!-- isosent="20150320050540" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Master failure of oob_tcp on Solaris" -->
<!-- id="CAAvDA14H0XK+ttVm5VNVLLuwwHjyhbWoTePoCfB-RbbxqmYXgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Master failure of oob_tcp on Solaris<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-20 01:05:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17139.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Previous message:</strong> <a href="17137.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17139.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Reply:</strong> <a href="17139.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Seen earlier today with last night's master tarball:
<br>
<p>$ mpirun -mca btl sm,self,verbs -np 2 -host pcp-j-31,pcp-j-35
<br>
examples/ring_c'
<br>
[pcp-j-35:01400]
<br>
[/shared/OMPI/openmpi-master-solaris11-x64-ib-ss12u3/openmpi-dev-1351-gccba8ce/orte/mca/oob/tcp/oob_tcp_common.c:103]
<br>
setsockopt(TCP_KEEPALIVE) failed: Option not supported by protocol (99)
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17138/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17139.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Previous message:</strong> <a href="17137.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17139.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Reply:</strong> <a href="17139.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
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
