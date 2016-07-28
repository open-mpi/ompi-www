<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 22 07:25:57 2006" -->
<!-- isoreceived="20060922112557" -->
<!-- sent="Fri, 22 Sep 2006 16:55:52 +0530" -->
<!-- isosent="20060922112552" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="[OMPI devel] btl_openib_max_btls" -->
<!-- id="5d5f7eba0609220425v1ba6dd9fva8fda8dd907e5129_at_mail.gmail.com" -->
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
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-22 07:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1074.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] ORTE layer working"</a>
<li><strong>Previous message:</strong> <a href="1072.php">Jeff Squyres: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #183: DR deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1081.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_max_btls"</a>
<li><strong>Reply:</strong> <a href="1081.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_max_btls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The ompi_info command shows the following description for
<br>
&quot;btl_openib_max_btls&quot; parameter
<br>
MCA btl: parameter &quot;btl_openib_max_btls&quot; (current value: &quot;-1&quot;)  Maximum
<br>
number of HCA ports to use (-1 = use all available, otherwise must be &gt;= 1)
<br>
<p>Even though I specify &quot;mpirun --mca btl_openib_max_btls 1 .....&quot;  2 openib
<br>
btls are created(the HCA has 2 ports).
<br>
When I try to run Open MPI across 2 nodes (one node has an HCA with 2 ports
<br>
and the other has only one port). Both endpoints send the QP information
<br>
over to the peer. Only one endpoint exists at the peer so it prints the
<br>
following error message:
<br>
[0,1,1][btl_openib_endpoint.c:706:mca_btl_openib_endpoint_recv] can't find
<br>
suitable endpoint for this peer
<br>
<p>[0,1,0][btl_openib_endpoint.c:913:mca_btl_openib_endpoint_connect] error
<br>
posting receive errno says Operation now in progress
<br>
<p>[0,1,0][btl_openib_endpoint.c:737:mca_btl_openib_endpoint_recv] endpoint
<br>
connect error: -1
<br>
<p>Is &quot;btl_openib_max_btls&quot; the maximum number of BTLs or maximum number of
<br>
BTLs per port (which is what the current implementation &quot;init_one_hca()&quot;
<br>
looks like)?
<br>
<p>-Nysal
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1073/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1074.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] ORTE layer working"</a>
<li><strong>Previous message:</strong> <a href="1072.php">Jeff Squyres: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #183: DR deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1081.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_max_btls"</a>
<li><strong>Reply:</strong> <a href="1081.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_max_btls"</a>
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
