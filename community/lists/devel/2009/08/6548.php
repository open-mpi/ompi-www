<?
$subject_val = "Re: [OMPI devel] Device failover on ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  1 20:22:08 2009" -->
<!-- isoreceived="20090802002208" -->
<!-- sent="Sat, 01 Aug 2009 20:21:56 -0400" -->
<!-- isosent="20090802002156" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover on ob1" -->
<!-- id="C69A5464.3A286%rlgraham_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A72BE40.8020207_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Device failover on ob1<br>
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-01 20:21:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6549.php">Brian Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6547.php">Sylvain Jeaugey: "[OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6546.php">Mouhamed Gueye: "[OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6549.php">Brian Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6549.php">Brian Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6557.php">Mouhamed Gueye: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is the impact on sm, which is by far the most sensitive to latency. This really belongs in a place other than ob1.  Ob1 is supposed to provide the lowest latency possible, and other pml's are supposed to be used for heavier weight protocols.
<br>
<p>On the technical side, how do you distinguish between a lot acknowledgement and an undelivered message ?  You really don't want to try and deliver data into user space twice, as once a receive is complete, who knows what the user has done with that buffer ?  A general treatment needs to be able to false negatives, and attempts to deliver the data more than once.
<br>
<p>How are you detecting missing acknowledgements ?  Are you using some sort of timer ?
<br>
<p>Rich
<br>
<p>On 7/31/09 5:49 AM, &quot;Mouhamed Gueye&quot; &lt;mouhamed.gueye_at_[hidden]&gt; wrote:
<br>
<p>Hi list,
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
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6549.php">Brian Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6547.php">Sylvain Jeaugey: "[OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6546.php">Mouhamed Gueye: "[OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6549.php">Brian Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6549.php">Brian Barrett: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Reply:</strong> <a href="6557.php">Mouhamed Gueye: "Re: [OMPI devel] Device failover on ob1"</a>
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
