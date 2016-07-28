<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 11:28:05 2007" -->
<!-- isoreceived="20070611152805" -->
<!-- sent="Mon, 11 Jun 2007 11:27:03 -0400" -->
<!-- isosent="20070611152703" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] rdma over tcp?" -->
<!-- id="7C68F95A-CAEC-49F7-AC2A-1180FBA1A7BD_at_umich.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 11:27:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3454.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3452.php">Kees Verstoep: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3473.php">Brian Barrett: "Re: [OMPI users] rdma over tcp?"</a>
<li><strong>Reply:</strong> <a href="3473.php">Brian Barrett: "Re: [OMPI users] rdma over tcp?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With openmpi-1.2.0
<br>
<p>i ran a:  ompi_info --param btl tcp
<br>
<p>and i see reference to:
<br>
<p>MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current value: &quot;131072&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
<br>
<p>Can TCP support RDMA?  I thought you needed fancy hardware to get  
<br>
such support?  Light on this subject is highly appreciated.
<br>
<p>&nbsp;&nbsp;Also if a user using ethernet, is trying to up the limit for  
<br>
'greedy'  messages that the btl_tcp_eager_limit?  Is there a problem  
<br>
increasing its size?  We will test it with his app of-course,  but  
<br>
was wondering if there was a 'gotcha'  I was going to walk into.
<br>
Thanks
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3454.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3452.php">Kees Verstoep: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3473.php">Brian Barrett: "Re: [OMPI users] rdma over tcp?"</a>
<li><strong>Reply:</strong> <a href="3473.php">Brian Barrett: "Re: [OMPI users] rdma over tcp?"</a>
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
