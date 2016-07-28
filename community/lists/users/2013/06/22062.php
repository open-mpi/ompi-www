<?
$subject_val = "Re: [OMPI users] OMPI Coll Framework and RDMA";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  7 11:09:32 2013" -->
<!-- isoreceived="20130607150932" -->
<!-- sent="Fri, 7 Jun 2013 11:09:24 -0400" -->
<!-- isosent="20130607150924" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI Coll Framework and RDMA" -->
<!-- id="C0E5139A-03FD-49F4-B208-02434E1D45B0_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOf_+-Uexu8f3HtYtDKSuqAwYj8WCPa_XdO1muWy4rG7r7--LA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI Coll Framework and RDMA<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-07 11:09:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22063.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Previous message:</strong> <a href="22061.php">Ralph Castain: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>In reply to:</strong> <a href="22057.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22063.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Reply:</strong> <a href="22063.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does that mean, if there is a AllGatherV and assuming that every process belongs to default comm, there will n-1 Queue Pair between the collecting process and other processes ?
<br>
n = total number of MPI processes.
<br>
<p>The answer depends on multiple parameters, like number of processes, message size, etc. Some algorithms will require O(log(n)) connections other O(n).
<br>
Also on OpenIB btl level per rank we create multiple QPs , not just one. To make things even more complicated :-) there are multiple types of QPs, like RC and XRC.
<br>
<p>-Pasha
<br>
<p><p><p><pre>
--
Joba
On Thu, Jun 6, 2013 at 3:37 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&lt;mailto:shamisp_at_[hidden]&gt;&gt; wrote:
Default implementation of collectives is based on PML (p2p layer) that is implemented on top of BTL.
Consequently it laverages RDMA capabilities to some extend.
Pavel (Pasha) Shamis
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jun 6, 2013, at 1:59 PM, Jingcha Joba &lt;pukkimonkey_at_[hidden]&lt;mailto:pukkimonkey_at_[hidden]&gt;&lt;mailto:pukkimonkey_at_[hidden]&lt;mailto:pukkimonkey_at_[hidden]&gt;&gt;&gt; wrote:
Hi,
I have a quick question.
Is there an openib (in btl framework) equivalent in coll framework?
I have an MPI application with gatherv and scatterv. I am wondering if I can leverage RDMA capabilities of the underlying Infiniband fabric.
Thanks,
--
Joba
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22063.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Previous message:</strong> <a href="22061.php">Ralph Castain: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>In reply to:</strong> <a href="22057.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22063.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Reply:</strong> <a href="22063.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
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
