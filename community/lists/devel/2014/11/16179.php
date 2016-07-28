<?
$subject_val = "[OMPI devel] openib choosing the wrong queue settings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 15:09:20 2014" -->
<!-- isoreceived="20141104200920" -->
<!-- sent="Tue, 04 Nov 2014 14:09:23 -0600" -->
<!-- isosent="20141104200923" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="[OMPI devel] openib choosing the wrong queue settings" -->
<!-- id="54593273.7030507_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI devel] openib choosing the wrong queue settings<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 15:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16180.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Previous message:</strong> <a href="16178.php">Howard Pritchard: "[OMPI devel] Open MPI Developers Face to Face Q1 2015 (updated doodle poll link)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16180.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Reply:</strong> <a href="16180.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm running ompi top-o-tree from github and seeing an openib btl issue 
<br>
where the qp/srq configuration is incorrect for the given device id.  
<br>
This works fine in 1.8.4rc1, but I see the problem in top-of-tree.  A 
<br>
simple 2 node IMB-MPI1 pingpong fails to get the ranks setup.  I see 
<br>
this logged:
<br>
<p>/opt/ompi-trunk/bin/mpirun --allow-run-as-root --np 2 --host 
<br>
stevo1,stevo2 --mca btl openib,sm,self /opt/ompi-trunk/bin/IMB-MPI1 pingpong
<br>
<p>&lt;snip&gt;
<br>
<p>--------------------------------------------------------------------------
<br>
The Open MPI receive queue configuration for the OpenFabrics devices
<br>
on two nodes are incompatible, meaning that MPI processes on two
<br>
specific nodes were unable to communicate with each other.  This
<br>
generally happens when you are using OpenFabrics devices from
<br>
different vendors on the same network.  You should be able to use the
<br>
mca_btl_openib_receive_queues MCA parameter to set a uniform receive
<br>
queue configuration for all the devices in the MPI job, and therefore
<br>
be able to run successfully.
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:       stevo2
<br>
&nbsp;&nbsp;&nbsp;Local adapter:    cxgb4_0 (vendor 0x1425, part ID 21520)
<br>
&nbsp;&nbsp;&nbsp;Local queues: 
<br>
P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
<br>
<p>&nbsp;&nbsp;&nbsp;Remote host:      stevo1
<br>
&nbsp;&nbsp;&nbsp;Remote adapter:   (vendor 0x1425, part ID 21520)
<br>
&nbsp;&nbsp;&nbsp;Remote queues:    P,65536,64
<br>
----------------------------------------------------------------------------
<br>
<p>The stevo1 rank has the correct queue settings: P,65536,64.  For some 
<br>
reason, stevo2 has the wrong settings, even though it has the correct 
<br>
device id info.
<br>
<p>Any suggestions on debugging this?  Like where to dig in the src to see 
<br>
if somehow the .ini parsing is broken...
<br>
<p><p>Thanks,
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16180.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Previous message:</strong> <a href="16178.php">Howard Pritchard: "[OMPI devel] Open MPI Developers Face to Face Q1 2015 (updated doodle poll link)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16180.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<li><strong>Reply:</strong> <a href="16180.php">Steve Wise: "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
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
