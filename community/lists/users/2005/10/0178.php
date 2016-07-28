<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 11 13:11:14 2005" -->
<!-- isoreceived="20051011181114" -->
<!-- sent="Tue, 11 Oct 2005 14:10:57 -0400" -->
<!-- isosent="20051011181057" -->
<!-- name="Charles Williams" -->
<!-- email="willic3_at_[hidden]" -->
<!-- subject="[O-MPI users] Difficulties building 1.0rc2 on Tiger" -->
<!-- id="988EF248-5523-4FB0-A117-FC964A0BE29D_at_rpi.edu" -->
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
<strong>From:</strong> Charles Williams (<em>willic3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-11 13:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0179.php">Brian Barrett: "Re: [O-MPI users] Difficulties building 1.0rc2 on Tiger"</a>
<li><strong>Previous message:</strong> <a href="0177.php">sdamjad: "[O-MPI users] RE-make problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0179.php">Brian Barrett: "Re: [O-MPI users] Difficulties building 1.0rc2 on Tiger"</a>
<li><strong>Reply:</strong> <a href="0179.php">Brian Barrett: "Re: [O-MPI users] Difficulties building 1.0rc2 on Tiger"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have successfully built several previous releases on my machine,  
<br>
but this last release exited with an error.  I am attaching the build  
<br>
and config logs, but as near as I can tell, the problem is a simple  
<br>
typo in the source file.  I was able to get things to build (although  
<br>
I haven't yet tested things) by simply changing the following line in  
<br>
openmpi-1.0rc2/orte/mca/pls/xgrid/src/pls_xgrid_client.m:
<br>
<p>Original line 254:  rc = orte_rmaps_base_mapped_node_query 
<br>
(&amp;mapping_list, &amp;nodes, jobid);
<br>
Changed line 254:  ret = orte_rmaps_base_mapped_node_query 
<br>
(&amp;mapping_list, &amp;nodes, jobid);
<br>
<p>Please let me know if this is a reasonable change.  I don't have  
<br>
XGrid set up, so I wouldn't be able to test this anyway.
<br>
<p>Thanks,
<br>
Charles Williams
<br>
<p>&#239;&#191;&#188;&#239;&#191;&#188;
<br>
<p>Charles A. Williams
<br>
Dept. of Earth &amp; Environmental Sciences
<br>
Science Center, 2C01B
<br>
Rensselaer Polytechnic Institute
<br>
Troy, NY  12180
<br>
Phone:    (518) 276-3369
<br>
FAX:        (518) 276-2012
<br>
e-mail:    willic3_at_[hidden]
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0178/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0178/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0178/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0178/openmpi-make1.log">openmpi-make1.log</a>
</ul>
<!-- attachment="openmpi-make1.log" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0178/05-attachment">attachment</a>
</ul>
<!-- attachment="05-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0179.php">Brian Barrett: "Re: [O-MPI users] Difficulties building 1.0rc2 on Tiger"</a>
<li><strong>Previous message:</strong> <a href="0177.php">sdamjad: "[O-MPI users] RE-make problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0179.php">Brian Barrett: "Re: [O-MPI users] Difficulties building 1.0rc2 on Tiger"</a>
<li><strong>Reply:</strong> <a href="0179.php">Brian Barrett: "Re: [O-MPI users] Difficulties building 1.0rc2 on Tiger"</a>
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
