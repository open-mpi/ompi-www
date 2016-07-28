<?
$subject_val = "Re: [OMPI users] terrible infiniband performance for HPL, &amp; gfortran message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 08:00:28 2016" -->
<!-- isoreceived="20160323120028" -->
<!-- sent="Wed, 23 Mar 2016 07:59:49 -0400" -->
<!-- isosent="20160323115949" -->
<!-- name="Ronald Cohen" -->
<!-- email="recohen3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] terrible infiniband performance for HPL, &amp;amp; gfortran message" -->
<!-- id="CAEcVHtOfwbetEFZvJ9U+SSa3vm3DooegAF8iJMkoGKwOgR_+xw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] terrible infiniband performance for HPL, &amp;amp; gfortran message" -->
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
<strong>Subject:</strong> Re: [OMPI users] terrible infiniband performance for HPL, &amp; gfortran message<br>
<strong>From:</strong> Ronald Cohen (<em>recohen3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 07:59:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28793.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28791.php">Ronald Cohen: "[OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached is the output of ompi_info --all .
<br>
<p>Note that the message :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort use mpi_f08: yes
<br>
&nbsp;Fort mpi_f08 compliance: The mpi_f08 module is available, but due to
<br>
limitations in the gfortran compiler, does not support the following:
<br>
array subsections, direct passthru (where possible) to underlying Open
<br>
MPI's C functionality
<br>
is not correct anymore--gfortran 6.0.0 now includes array subsections
<br>
Not sure about direct passthru.
<br>
<p>Ron
<br>
<pre>
---
Ron Cohen
recohen3_at_[hidden]
skypename: ronaldcohen
twitter: @recohen3
On Wed, Mar 23, 2016 at 7:54 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt; I get 100 GFLOPS for 16 cores on one node, but 1 GFLOP running 8 cores
&gt; on two nodes. It seems that quad-infiniband should do better than
&gt; this. I built openmpi-1.10.2g with gcc version 6.0.0 20160317 . Any
&gt; ideas of what to do to get usable performance? Thank you!
&gt;
&gt; bstatus
&gt; Infiniband device 'mlx4_0' port 1 status:
&gt;         default gid:     fe80:0000:0000:0000:0002:c903:00ec:9301
&gt;         base lid:        0x1
&gt;         sm lid:          0x1
&gt;         state:           4: ACTIVE
&gt;         phys state:      5: LinkUp
&gt;         rate:            56 Gb/sec (4X FDR)
&gt;         link_layer:      InfiniBand
&gt;
&gt; Ron
&gt; --
&gt;
&gt; Professor Dr. Ronald Cohen
&gt; Ludwig Maximilians Universit&#195;&#164;t
&gt; Theresienstrasse 41 Room 207
&gt; Department f&#195;&#188;r Geo- und Umweltwissenschaften
&gt; M&#195;&#188;nchen
&gt; 80333
&gt; Deutschland
&gt;
&gt;
&gt; ronald.cohen_at_[hidden]
&gt; skype: ronaldcohen
&gt; +49 (0) 89 74567980
&gt; ---
&gt; Ronald Cohen
&gt; Geophysical Laboratory
&gt; Carnegie Institution
&gt; 5251 Broad Branch Rd., N.W.
&gt; Washington, D.C. 20015
&gt; rcohen_at_[hidden]
&gt; office: 202-478-8937
&gt; skype: ronaldcohen
&gt; <a href="https://twitter.com/recohen3">https://twitter.com/recohen3</a>
&gt; <a href="https://www.linkedin.com/profile/view?id=163327727">https://www.linkedin.com/profile/view?id=163327727</a>
&gt;
&gt;
&gt; ---
&gt; Ron Cohen
&gt; recohen3_at_[hidden]
&gt; skypename: ronaldcohen
&gt; twitter: @recohen3

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28792/ompi_info.out">ompi_info.out</a>
</ul>
<!-- attachment="ompi_info.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28793.php">Gilles Gouaillardet: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28791.php">Ronald Cohen: "[OMPI users] terrible infiniband performance for"</a>
<!-- nextthread="start" -->
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
