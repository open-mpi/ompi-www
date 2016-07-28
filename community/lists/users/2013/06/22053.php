<?
$subject_val = "Re: [OMPI users] OMPI Coll Framework and RDMA";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 18:37:23 2013" -->
<!-- isoreceived="20130606223723" -->
<!-- sent="Thu, 6 Jun 2013 18:37:15 -0400" -->
<!-- isosent="20130606223715" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI Coll Framework and RDMA" -->
<!-- id="9E45644C-5752-47F9-AF52-AA86A4B5F103_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOf_+-Vmky+pQrG-Dkt=2TCRwjYN7o+w_HCWaFf94YijR_BgjA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-06-06 18:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22054.php">Blosch, Edwin L: "[OMPI users] Sandy Bridge performance question"</a>
<li><strong>Previous message:</strong> <a href="22052.php">Edscott Wilson: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22051.php">Jingcha Joba: "[OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22057.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Reply:</strong> <a href="22057.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Default implementation of collectives is based on PML (p2p layer) that is implemented on top of BTL.
<br>
Consequently it laverages RDMA capabilities to some extend.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jun 6, 2013, at 1:59 PM, Jingcha Joba &lt;pukkimonkey_at_[hidden]&lt;mailto:pukkimonkey_at_[hidden]&gt;&gt; wrote:
Hi,
I have a quick question.
Is there an openib (in btl framework) equivalent in coll framework?
I have an MPI application with gatherv and scatterv. I am wondering if I can leverage RDMA capabilities of the underlying Infiniband fabric.
Thanks,
--
Joba
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22054.php">Blosch, Edwin L: "[OMPI users] Sandy Bridge performance question"</a>
<li><strong>Previous message:</strong> <a href="22052.php">Edscott Wilson: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22051.php">Jingcha Joba: "[OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22057.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Reply:</strong> <a href="22057.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
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
