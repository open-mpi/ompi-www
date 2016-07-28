<?
$subject_val = "[OMPI devel] Device failover on ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 31 05:50:08 2009" -->
<!-- isoreceived="20090731095008" -->
<!-- sent="Fri, 31 Jul 2009 11:49:52 +0200" -->
<!-- isosent="20090731094952" -->
<!-- name="Mouhamed Gueye" -->
<!-- email="mouhamed.gueye_at_[hidden]" -->
<!-- subject="[OMPI devel] Device failover on ob1" -->
<!-- id="4A72BE40.8020207_at_bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] Device failover on ob1<br>
<strong>From:</strong> Mouhamed Gueye (<em>mouhamed.gueye_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-31 05:49:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6547.php">Sylvain Jeaugey: "[OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="6545.php">Paul H. Hargrove: "Re: [OMPI devel] Allgather failures?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6548.php">Graham, Richard L.: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6548.php">Graham, Richard L.: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6559.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi list,
<br>
<p>Here is an update on our work concerning device failover.
<br>
<p>As many of you suggested, we reoriented our work on ob1 rather than dr 
<br>
and we now have a working prototype on top of ob1. The approach is to 
<br>
store btl descriptors sent to peers and delete them when we receive 
<br>
proof of delivery. So far, we rely on completion callback functions, 
<br>
assuming that the message is delivered when the completion function is 
<br>
called, that is the case of openib. When a btl module fails, it is 
<br>
removed from the endpoint's btl list and the next one is used to 
<br>
retransmit stored descriptors. No extra-message is transmitted, it only 
<br>
consists in additions to the header. It has been mainly tested with two 
<br>
IB modules, in both multi-rail (two separate networks) and multi-path (a 
<br>
big unique network).
<br>
<p>You can grab and test the patch here (applies on top of the trunk) :
<br>
<a href="http://bitbucket.org/gueyem/ob1-failover/">http://bitbucket.org/gueyem/ob1-failover/</a>
<br>
<p>To compile with failover support, just define --enable-device-failover 
<br>
at configure. You can then run a benchmark, disconnect a port and see 
<br>
the failover operate.
<br>
<p>A little latency increase (~ 2%) is induced by the failover layer when 
<br>
no failover occurs. To accelerate the failover process on openib, you 
<br>
can try to lower the btl_openib_ib_timeout openib parameter to 15 for 
<br>
example instead of 20 (default value).
<br>
<p>Mouhamed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6547.php">Sylvain Jeaugey: "[OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="6545.php">Paul H. Hargrove: "Re: [OMPI devel] Allgather failures?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6548.php">Graham, Richard L.: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6548.php">Graham, Richard L.: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6559.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover on ob1"</a>
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
