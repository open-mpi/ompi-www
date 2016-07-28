<?
$subject_val = "[OMPI users] writev error: Bad address";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 31 16:08:45 2014" -->
<!-- isoreceived="20140131210845" -->
<!-- sent="Fri, 31 Jan 2014 13:08:41 -0800" -->
<!-- isosent="20140131210841" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="[OMPI users] writev error: Bad address" -->
<!-- id="52EC10D9.2060400_at_biostat.ucsf.edu" -->
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
<strong>Subject:</strong> [OMPI users] writev error: Bad address<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-31 16:08:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23518.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23516.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23519.php">Reuti: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Reply:</strong> <a href="23519.php">Reuti: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23556.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am getting the following error, amidst many successful message sends:
<br>
[n10][[50048,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:118:mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error (0x7f6155970038, 578659815)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bad address(1)
<br>
<p>Any ideas about what is going on or what I can do to fix it?
<br>
<p>I am using the openmpi-bin 1.4.2-4 Debian package on a cluster running 
<br>
Debian squeeze.
<br>
<p>I couldn't find a config.log file; there is 
<br>
/etc/openmpi/openmpi-mca-params.conf, which is completely commented out.
<br>
<p>Invocation is from R 3.0.1 (debian package) with Rmpi 0.6.3 built by me 
<br>
from source in a local directory. My sends all use mpi.isend.Robj and 
<br>
the receives use mpi.recv.Robj, both from the Rmpi library.
<br>
<p>The jobs were started with rmpilaunch; it and the hosts file are 
<br>
included in the attachments. TCP connections.  rmpilaunch leaves me in 
<br>
an R session on the master.  I invoked the code inside the toplevel() 
<br>
function toward the bottom of dbox-master.R.
<br>
<p>The program source files and other background information is in the 
<br>
attached file.    n10 has the output of |ompi_info --all, and n1011 has 
<br>
other info for both nodes that were active (n10 was master; n11 had some 
<br>
slaves).
<br>
|
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23517/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23517/mpi.tar.bz2">mpi.tar.bz2</a>
</ul>
<!-- attachment="mpi.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23518.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23516.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23519.php">Reuti: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Reply:</strong> <a href="23519.php">Reuti: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23556.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
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
