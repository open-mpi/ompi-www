<?
$subject_val = "[OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 20 13:19:00 2012" -->
<!-- isoreceived="20120620171900" -->
<!-- sent="Wed, 20 Jun 2012 17:18:31 +0000" -->
<!-- isosent="20120620171831" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenIB compile error" -->
<!-- id="CC076206.F96A%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] OpenIB compile error<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-20 13:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11129.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11127.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11129.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11129.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11130.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I'm seeing the compile error with the OMPI trunk and OFED 15.3.1.  Has
<br>
anyone seen this before?  I have vague recollections of seeing e-mail
<br>
discussion on the issue, but can't find those e-mails now...
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p>In file included from ../../../../opal/mca/hwloc/hwloc.h:87,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib_component.c:69:
<br>
../../../../opal/mca/hwloc/hwloc142/hwloc142.h:38:10: error: #error Tried
<br>
to include hwloc verbs helper file, but hwloc was compiled with no
<br>
OpenFabrics support
<br>
btl_openib_component.c: In function 'get_ib_dev_distance':
<br>
btl_openib_component.c:2435: error: implicit declaration of function
<br>
'opal_hwloc142_hwloc_ibv_get_device_cpuset'
<br>
make[1]: *** [btl_openib_component.lo] Error 1
<br>
make[1]: Leaving directory
<br>
`/home/bwbarre/projects/ompi/trunk/ompi/mca/btl/openib'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11129.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11127.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11129.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11129.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11130.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
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
