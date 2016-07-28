<?
$subject_val = "Re: [OMPI users] openib issue with 1.6.5 but not later releases";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 19 15:46:16 2015" -->
<!-- isoreceived="20151019194616" -->
<!-- sent="Mon, 19 Oct 2015 19:46:12 +0000" -->
<!-- isosent="20151019194612" -->
<!-- name="John Marshall" -->
<!-- email="John.Marshall_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib issue with 1.6.5 but not later releases" -->
<!-- id="56254884.7080403_at_ssc-spc.gc.ca" -->
<!-- charset="utf-8" -->
<!-- inreplyto="D24AA8A8.237F4%shamisp_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib issue with 1.6.5 but not later releases<br>
<strong>From:</strong> John Marshall (<em>John.Marshall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-19 15:46:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27898.php">Daniel Letai: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Previous message:</strong> <a href="27896.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>In reply to:</strong> <a href="27896.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27912.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Reply:</strong> <a href="27912.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/19/2015 07:09 PM, Shamis, Pavel wrote:
<br>
<span class="quotelev1">&gt; Please see inline (marked with &quot;Pasha &gt;&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users &lt;users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of John Marshall &lt;John.Marshall_at_[hidden] &lt;mailto:John.Marshall_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, October 19, 2015 11:06 AM
</span><br>
<span class="quotelev1">&gt; To: Open Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openib issue with 1.6.5 but not later releases
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Further efforts have shown that if we add:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     export OMPI_MCA_btl_openib_if_include=&lt;device&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where device corresponds to the IB interface (e.g., mlx4_14), then
</span><br>
<span class="quotelev1">&gt; our test does not fail (yet, anyways).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha &gt; This is a pretty clear indicator that each container sees more than a single device.
</span><br>
<span class="quotelev1">&gt; Can you run ibv_devinfo &#226;&#128;&#147;V within container and see what happens ?
</span><br>
<p>Yes. It shows info for many hca_id entries: mlx4_0 to mlx4_16.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, is this setting required if there are multiple IB interfaces (as
</span><br>
<span class="quotelev1">&gt; when there are multiple eth interfaces)? What is curious is that
</span><br>
<span class="quotelev1">&gt; there is only one interface visible from the container. Does the
</span><br>
<span class="quotelev1">&gt; openib btl look deeper and find all that exist in the host?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha &gt; Not really. We use Verbs driver to fetch the list of devices on the &quot;node&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there something about the openib implementations in 1.8 and
</span><br>
<span class="quotelev1">&gt; 1.10 that may handle this differently since we do not set
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_openib_if_include but our tests seem to work? Or,
</span><br>
<span class="quotelev1">&gt; is it a fluke?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha &gt; I was not involved that much in 1.8 and 1.10 so it is a bit hard to comment.
</span><br>
<span class="quotelev1">&gt; I would suspect that this might be somehow related to the locality feature and openib btl selects and creates only one btl instance and ignores all the rest.
</span><br>
<p>So if I understand correctly, we do not need to worry for 1.8 and 1.10.
<br>
<p>Since it is possible to see many hca_id entries, even in the container, what
<br>
do we need to do under 1.6.5? Can we use a single mlx4_# (e.g., mlx4_0) for
<br>
all or do we need to select one based on the ib# interface? We expect to
<br>
run multiple containers on a single host where each container gets a
<br>
unique/dedicated ib# interface.
<br>
<p>Thanks,
<br>
John
<br>
<p><p>John
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27896.php">http://www.open-mpi.org/community/lists/users/2015/10/27896.php</a>
</span><br>
<p><p><pre>
-- 
*John Marshall*
High Performance Computing Support, Science, Operations
Shared Services Canada / Government of Canada
John.Marshall_at_[hidden] / Tel: 514-421-4647
Soutien aux calculs haute performance, Science, Operations
Services partages Canada / Gouvernement du Canada
John.Marshall_at_[hidden] / Tel: 514-421-4647
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27897/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27898.php">Daniel Letai: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Previous message:</strong> <a href="27896.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>In reply to:</strong> <a href="27896.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27912.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Reply:</strong> <a href="27912.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
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
