<?
$subject_val = "[OMPI devel] openib receive queue settings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 26 13:35:08 2014" -->
<!-- isoreceived="20141226183508" -->
<!-- sent="Fri, 26 Dec 2014 12:34:51 -0600" -->
<!-- isosent="20141226183451" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="[OMPI devel] openib receive queue settings" -->
<!-- id="549DAA4B.9070507_at_cs.uh.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] openib receive queue settings<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-26 13:34:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16732.php">Devendar Bureddy: "Re: [OMPI devel] openib receive queue settings"</a>
<li><strong>Previous message:</strong> <a href="16730.php">Edgar Gabriel: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16732.php">Devendar Bureddy: "Re: [OMPI devel] openib receive queue settings"</a>
<li><strong>Reply:</strong> <a href="16732.php">Devendar Bureddy: "Re: [OMPI devel] openib receive queue settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I still see an issue with the openib receive queues settings. 
<br>
Interestingly, it seems to work if I pass the setting with the mpirun 
<br>
command, e.g.
<br>
<p>mpirun  --mca btl_openib_receive_queues 
<br>
S,12288,128,64,32:S,65536,128,64,32 --npernode 1 -np 2 ./lat
<br>
<p>but if I add it to the ${HOME}/.openmpi/mca-param.conf file, e.g.
<br>
<p>---snip---
<br>
&nbsp;&nbsp;cat  ~/.openmpi/mca-params.conf
<br>
...
<br>
btl_openib_receive_queues = S,12288,128,64,32:S,65536,128,64,32
<br>
...
<br>
----------snip---
<br>
<p>I receive the following error message:
<br>
gabriel_at_crill:~&gt; mpirun  --npernode 1 -np 2 ./lat
<br>
--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;&nbsp;Local host:       crill-003
<br>
&nbsp;&nbsp;&nbsp;Local adapter:    mlx4_0 (vendor 0x2c9, part ID 26418)
<br>
&nbsp;&nbsp;&nbsp;Local queues:     S,12288,128,64,32:S,65536,128,64,32
<br>
<p>&nbsp;&nbsp;&nbsp;Remote host:      crill-004
<br>
&nbsp;&nbsp;&nbsp;Remote adapter:   (vendor 0x2c9, part ID 26418)
<br>
&nbsp;&nbsp;&nbsp;Remote queues: 
<br>
P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
<br>
--------------------------------------------------------------------------
<br>
<p>Does anybody have an idea what I should be looking for to fix this? I 
<br>
can definitely confirm, that the home file system is mounted on all 
<br>
nodes correctly (i.e. all processes can access the same mca-params.conf 
<br>
file), and they have the identical IB hardware (in contrary to what the 
<br>
error message says).
<br>
<p><p>Thanks
<br>
Edgar
<br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16732.php">Devendar Bureddy: "Re: [OMPI devel] openib receive queue settings"</a>
<li><strong>Previous message:</strong> <a href="16730.php">Edgar Gabriel: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16732.php">Devendar Bureddy: "Re: [OMPI devel] openib receive queue settings"</a>
<li><strong>Reply:</strong> <a href="16732.php">Devendar Bureddy: "Re: [OMPI devel] openib receive queue settings"</a>
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
