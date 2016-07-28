<?
$subject_val = "[OMPI devel] is anyone seeing this on their intel/inifinipath cluster?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 18:08:00 2015" -->
<!-- isoreceived="20150501220800" -->
<!-- sent="Fri, 1 May 2015 16:07:58 -0600" -->
<!-- isosent="20150501220758" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] is anyone seeing this on their intel/inifinipath cluster?" -->
<!-- id="CAF1Cqj5xAWSQJcZ6=orC3iomM42-5Sn4LZ6RGeRxZKHp3RHtrA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] is anyone seeing this on their intel/inifinipath cluster?<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-01 18:07:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17378.php">Orion Poplawski: "Re: [OMPI devel] segfault in test"</a>
<li><strong>Previous message:</strong> <a href="17376.php">Howard Pritchard: "[OMPI devel] romio refresh on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17379.php">Rolf vandeVaart: "Re: [OMPI devel] is anyone seeing this on their intel/inifinipath	cluster?"</a>
<li><strong>Reply:</strong> <a href="17379.php">Rolf vandeVaart: "Re: [OMPI devel] is anyone seeing this on their intel/inifinipath	cluster?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I'm doing some work with master on a intel/infinipath system and there some
<br>
odd undefined
<br>
symbols errors showing up:
<br>
<p>/users/hpp/ompi_install/lib/libmca_common_libfabric.so.0: undefined symbol:
<br>
psmx_eq_open
<br>
<p>anyone else seeing this on their intel/infinipath system?
<br>
<p>What's bizarre is that psmx_eq_open shouldn't be visible outside of the
<br>
libfabric.so itself.  So
<br>
having libfabric internal symbols required in a ompi mca lib seems to be
<br>
incorrect.
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17378.php">Orion Poplawski: "Re: [OMPI devel] segfault in test"</a>
<li><strong>Previous message:</strong> <a href="17376.php">Howard Pritchard: "[OMPI devel] romio refresh on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17379.php">Rolf vandeVaart: "Re: [OMPI devel] is anyone seeing this on their intel/inifinipath	cluster?"</a>
<li><strong>Reply:</strong> <a href="17379.php">Rolf vandeVaart: "Re: [OMPI devel] is anyone seeing this on their intel/inifinipath	cluster?"</a>
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
