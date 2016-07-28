<?
$subject_val = "[OMPI users] Icreasing OFED registerable memory";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 28 09:05:45 2014" -->
<!-- isoreceived="20141228140545" -->
<!-- sent="Sun, 28 Dec 2014 14:03:36 +0000" -->
<!-- isosent="20141228140336" -->
<!-- name="Waleed Lotfy" -->
<!-- email="Waleed.Lotfy_at_[hidden]" -->
<!-- subject="[OMPI users] Icreasing OFED registerable memory" -->
<!-- id="72AAB83113C15C4CBB7CDE3037A199CB8B45E569_at_BEXGW-H20514.local.bibalex.dom" -->
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
<strong>Subject:</strong> [OMPI users] Icreasing OFED registerable memory<br>
<strong>From:</strong> Waleed Lotfy (<em>Waleed.Lotfy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-28 09:03:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26077.php">Saliya Ekanayake: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="26075.php">Ralph Castain: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26086.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26086.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26107.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a bunch of 8 GB memory nodes in a cluster who were lately
<br>
upgraded to 16 GB. When I run any jobs I get the following warning:
<br>
--------------------------------------------------------------------------
<br>
WARNING: It appears that your OpenFabrics subsystem is configured to
<br>
only
<br>
allow registering part of your physical memory.  This can cause MPI jobs
<br>
to
<br>
run with erratic performance, hang, and/or crash.
<br>
<p>This may be caused by your OpenFabrics vendor limiting the amount of
<br>
physical memory that can be registered.  You should investigate the
<br>
relevant Linux kernel module parameters that control how much physical
<br>
memory can be registered, and increase them to allow registering all
<br>
physical memory on your machine.
<br>
<p>See this Open MPI FAQ item for more information on these Linux kernel
<br>
module
<br>
parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>&nbsp;&nbsp;Local host:              comp022.local
<br>
&nbsp;&nbsp;Registerable memory:     8192 MiB
<br>
&nbsp;&nbsp;Total memory:            16036 MiB
<br>
<p>Your MPI job will continue, but may be behave poorly and/or hang.
<br>
--------------------------------------------------------------------------
<br>
<p>Searching for a fix to this issue, I found that I have to set
<br>
log_num_mtt within the kernel module, so I added this line to
<br>
modprobe.conf:
<br>
<p>options mlx4_core log_num_mtt=21
<br>
<p>But then ib0 interface fails to start showing this error:
<br>
ib_ipoib device ib0 does not seem to be present, delaying
<br>
initialization.
<br>
<p>Reducing the value of log_num_mtt to 20, allows ib0 to start but shows
<br>
the registerable memory of 8 GB warning.
<br>
<p>I am using OFED 1.3.1, I know it is pretty old and we are planning to
<br>
upgrade soon.
<br>
<p>Output on all nodes for 'ompi_info  -v ompi full --parsable':
<br>
<p>ompi:version:full:1.2.7
<br>
ompi:version:svn:r19401
<br>
orte:version:full:1.2.7
<br>
orte:version:svn:r19401
<br>
opal:version:full:1.2.7
<br>
opal:version:svn:r19401
<br>
<p>Any help would be appreciated.
<br>
<p>Waleed Lotfy
<br>
Bibliotheca Alexandrina
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26077.php">Saliya Ekanayake: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="26075.php">Ralph Castain: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26086.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26086.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26107.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
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
