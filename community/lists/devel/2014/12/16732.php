<?
$subject_val = "Re: [OMPI devel] openib receive queue settings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 26 19:06:16 2014" -->
<!-- isoreceived="20141227000616" -->
<!-- sent="Sat, 27 Dec 2014 00:04:53 +0000" -->
<!-- isosent="20141227000453" -->
<!-- name="Devendar Bureddy" -->
<!-- email="devendar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib receive queue settings" -->
<!-- id="AM2PR05MB0771D3E138EB55FAA231322DAE530_at_AM2PR05MB0771.eurprd05.prod.outlook.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="549DAA4B.9070507_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib receive queue settings<br>
<strong>From:</strong> Devendar Bureddy (<em>devendar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-26 19:04:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16733.php">Paul Kapinos: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16731.php">Edgar Gabriel: "[OMPI devel] openib receive queue settings"</a>
<li><strong>In reply to:</strong> <a href="16731.php">Edgar Gabriel: "[OMPI devel] openib receive queue settings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like a bug here. It is considering  source of var is  MCA_BASE_VAR_SOURCE_FILE  for both variables reading from  mca-param.conf andv  INI file(opal/mca/btl/openib/mca-btl-openib-device-params.ini).  
<br>
But, in function mca_btl_openib_tune_endpoint(),  where this error triggered is only checking values from INI file (opal_btl_openib_ini_query()) for receive queue value correctness.  
<br>
<p>Not sure, if it should consider  MCA_BASE_VAR_SOURCE_ENV  as a source for variables read from .openmpi/mca-param.conf file.
<br>
Nathan - any idea?
<br>
<p>-Devendar
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Edgar Gabriel
<br>
Sent: Friday, December 26, 2014 10:35 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] openib receive queue settings
<br>
<p>I still see an issue with the openib receive queues settings. 
<br>
Interestingly, it seems to work if I pass the setting with the mpirun command, e.g.
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
The Open MPI receive queue configuration for the OpenFabrics devices on two nodes are incompatible, meaning that MPI processes on two specific nodes were unable to communicate with each other.  This generally happens when you are using OpenFabrics devices from different vendors on the same network.  You should be able to use the mca_btl_openib_receive_queues MCA parameter to set a uniform receive queue configuration for all the devices in the MPI job, and therefore be able to run successfully.
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
<p>Does anybody have an idea what I should be looking for to fix this? I can definitely confirm, that the home file system is mounted on all nodes correctly (i.e. all processes can access the same mca-params.conf file), and they have the identical IB hardware (in contrary to what the error message says).
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
_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16731.php">http://www.open-mpi.org/community/lists/devel/2014/12/16731.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16733.php">Paul Kapinos: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16731.php">Edgar Gabriel: "[OMPI devel] openib receive queue settings"</a>
<li><strong>In reply to:</strong> <a href="16731.php">Edgar Gabriel: "[OMPI devel] openib receive queue settings"</a>
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
