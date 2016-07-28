<?
$subject_val = "Re: [OMPI users] OMPI Coll Framework and RDMA";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  7 01:35:39 2013" -->
<!-- isoreceived="20130607053539" -->
<!-- sent="Thu, 6 Jun 2013 22:35:15 -0700" -->
<!-- isosent="20130607053515" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI Coll Framework and RDMA" -->
<!-- id="CAOf_+-Uexu8f3HtYtDKSuqAwYj8WCPa_XdO1muWy4rG7r7--LA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9E45644C-5752-47F9-AF52-AA86A4B5F103_at_ornl.gov" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-07 01:35:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22058.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>Previous message:</strong> <a href="22056.php">vacate: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>In reply to:</strong> <a href="22053.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22062.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Reply:</strong> <a href="22062.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pavel,
<br>
<p>Does that mean, if there is a AllGatherV and assuming that every process
<br>
belongs to default comm, there will n-1 Queue Pair between the collecting
<br>
process and other processes ?
<br>
n = total number of MPI processes.
<br>
<p><p><pre>
--
Joba
On Thu, Jun 6, 2013 at 3:37 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
&gt; Default implementation of collectives is based on PML (p2p layer) that is
&gt; implemented on top of BTL.
&gt; Consequently it laverages RDMA capabilities to some extend.
&gt;
&gt; Pavel (Pasha) Shamis
&gt; ---
&gt; Computer Science Research Group
&gt; Computer Science and Math Division
&gt; Oak Ridge National Laboratory
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;
&gt; On Jun 6, 2013, at 1:59 PM, Jingcha Joba &lt;pukkimonkey_at_[hidden]&lt;mailto:
&gt; pukkimonkey_at_[hidden]&gt;&gt; wrote:
&gt;
&gt; Hi,
&gt;
&gt; I have a quick question.
&gt;
&gt; Is there an openib (in btl framework) equivalent in coll framework?
&gt;
&gt; I have an MPI application with gatherv and scatterv. I am wondering if I
&gt; can leverage RDMA capabilities of the underlying Infiniband fabric.
&gt;
&gt;
&gt; Thanks,
&gt; --
&gt; Joba
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22058.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>Previous message:</strong> <a href="22056.php">vacate: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>In reply to:</strong> <a href="22053.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22062.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Reply:</strong> <a href="22062.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
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
