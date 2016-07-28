<?
$subject_val = "[OMPI users] terrible infiniband performance for";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 07:55:11 2016" -->
<!-- isoreceived="20160323115511" -->
<!-- sent="Wed, 23 Mar 2016 07:54:54 -0400" -->
<!-- isosent="20160323115454" -->
<!-- name="Ronald Cohen" -->
<!-- email="recohen3_at_[hidden]" -->
<!-- subject="[OMPI users] terrible infiniband performance for" -->
<!-- id="CAEcVHtMjcU8goLTe4a=2OJhvswS0HvkrcZO805VrYd1HiZUf7Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] terrible infiniband performance for<br>
<strong>From:</strong> Ronald Cohen (<em>recohen3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 07:54:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28792.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for HPL, &amp; gfortran message"</a>
<li><strong>Previous message:</strong> <a href="28790.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28793.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28793.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get 100 GFLOPS for 16 cores on one node, but 1 GFLOP running 8 cores
<br>
on two nodes. It seems that quad-infiniband should do better than
<br>
this. I built openmpi-1.10.2g with gcc version 6.0.0 20160317 . Any
<br>
ideas of what to do to get usable performance? Thank you!
<br>
<p>bstatus
<br>
Infiniband device 'mlx4_0' port 1 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0002:c903:00ec:9301
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           4: ACTIVE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      5: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            56 Gb/sec (4X FDR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:      InfiniBand
<br>
<p>Ron
<br>
<pre>
--
Professor Dr. Ronald Cohen
Ludwig Maximilians Universit&#195;&#164;t
Theresienstrasse 41 Room 207
Department f&#195;&#188;r Geo- und Umweltwissenschaften
M&#195;&#188;nchen
80333
Deutschland
ronald.cohen_at_[hidden]
skype: ronaldcohen
+49 (0) 89 74567980
---
Ronald Cohen
Geophysical Laboratory
Carnegie Institution
5251 Broad Branch Rd., N.W.
Washington, D.C. 20015
rcohen_at_[hidden]
office: 202-478-8937
skype: ronaldcohen
<a href="https://twitter.com/recohen3">https://twitter.com/recohen3</a>
<a href="https://www.linkedin.com/profile/view?id=163327727">https://www.linkedin.com/profile/view?id=163327727</a>
---
Ron Cohen
recohen3_at_[hidden]
skypename: ronaldcohen
twitter: @recohen3
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28792.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for HPL, &amp; gfortran message"</a>
<li><strong>Previous message:</strong> <a href="28790.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28793.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Reply:</strong> <a href="28793.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
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
