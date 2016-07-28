<?
$subject_val = "Re: [OMPI users] openib issue with 1.6.5 but not later releases";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 19 15:09:56 2015" -->
<!-- isoreceived="20151019190956" -->
<!-- sent="Mon, 19 Oct 2015 19:09:52 +0000" -->
<!-- isosent="20151019190952" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib issue with 1.6.5 but not later releases" -->
<!-- id="D24AA8A8.237F4%shamisp_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="56250704.6040804_at_ssc-spc.gc.ca" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-19 15:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27897.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27895.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>In reply to:</strong> <a href="27895.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27897.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Reply:</strong> <a href="27897.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please see inline (marked with &quot;Pasha &gt;&quot;).
<br>
<p>From: users &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of John Marshall &lt;John.Marshall_at_[hidden]&lt;mailto:John.Marshall_at_[hidden]&gt;&gt;
<br>
Reply-To: Open Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Date: Monday, October 19, 2015 11:06 AM
<br>
To: Open Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [OMPI users] openib issue with 1.6.5 but not later releases
<br>
<p><p>Further efforts have shown that if we add:
<br>
export OMPI_MCA_btl_openib_if_include=&lt;device&gt;
<br>
where device corresponds to the IB interface (e.g., mlx4_14), then
<br>
our test does not fail (yet, anyways).
<br>
<p>Pasha &gt; This is a pretty clear indicator that each container sees more than a single device.
<br>
Can you run ibv_devinfo -V within container and see what happens ?
<br>
<p>So, is this setting required if there are multiple IB interfaces (as
<br>
when there are multiple eth interfaces)? What is curious is that
<br>
there is only one interface visible from the container. Does the
<br>
openib btl look deeper and find all that exist in the host?
<br>
<p>Pasha &gt; Not really. We use Verbs driver to fetch the list of devices on the &quot;node&quot;
<br>
<p>Is there something about the openib implementations in 1.8 and
<br>
1.10 that may handle this differently since we do not set
<br>
OMPI_MCA_btl_openib_if_include but our tests seem to work? Or,
<br>
is it a fluke?
<br>
<p>Pasha &gt; I was not involved that much in 1.8 and 1.10 so it is a bit hard to comment.
<br>
I would suspect that this might be somehow related to the locality feature and openib btl selects and creates only one btl instance and ignores all the rest.
<br>
<p>Best,
<br>
Pasha
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27896/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27897.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27895.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>In reply to:</strong> <a href="27895.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27897.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Reply:</strong> <a href="27897.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
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
