<?
$subject_val = "[hwloc-users] hwloc_get_area_memlocation() --&gt; Issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 20:20:24 2016" -->
<!-- isoreceived="20160525002024" -->
<!-- sent="Tue, 24 May 2016 19:20:22 -0500" -->
<!-- isosent="20160525002022" -->
<!-- name="Rezaul Karim Raju" -->
<!-- email="raju.cse.buet_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc_get_area_memlocation() --&amp;gt; Issue" -->
<!-- id="CAOQ1qzvzS+EVTdboGx5cx6GHChg5heHPJucYe4EF5FhZkhU2Ow_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc_get_area_memlocation() --&gt; Issue<br>
<strong>From:</strong> Rezaul Karim Raju (<em>raju.cse.buet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-24 20:20:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/07/1277.php">Jeff Squyres (jsquyres): "[hwloc-users] This list is migrating!"</a>
<li><strong>Previous message:</strong> <a href="1275.php">Mehmet Belgin: "Re: [hwloc-users] Topology Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
I was trying to use the new routine hwloc_get_area_memlocation() contains
<br>
in version: hwloc-1.11.3.
<br>
While I do check for support with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support = hwloc_topology_get_support(topology);
<br>
if (!support-&gt;membind-&gt;get_area_memlocation){
<br>
printf(&quot;Mem Location not supported \n&quot;);
<br>
goto out;
<br>
}
<br>
gives me &quot;Mem Location not supported&quot;.
<br>
<p>Did you have support for flag: HWLOC_MEMBIND_BYNODESET
<br>
&lt;<a href="https://www.open-mpi.org/projects/hwloc/doc/v1.11.3/a00084.php#ggab00475fd98815bf4fb9aaf752030e7d2a71f19fe4505f1c083dc8e6f7bdea6256">https://www.open-mpi.org/projects/hwloc/doc/v1.11.3/a00084.php#ggab00475fd98815bf4fb9aaf752030e7d2a71f19fe4505f1c083dc8e6f7bdea6256</a>&gt;
<br>
&nbsp;..?
<br>
<p>I looked at the reference here:
<br>
<a href="https://fossies.org/linux/misc/hwloc-1.11.3.tar.gz/hwloc-1.11.3/tests/hwloc_get_area_memlocation.c">https://fossies.org/linux/misc/hwloc-1.11.3.tar.gz/hwloc-1.11.3/tests/hwloc_get_area_memlocation.c</a>
<br>
<p>Thanking you,
<br>
------------------------
<br>
RaJu, Rezaul Karim
<br>
Graduate Student (PhD) | Computer Science | University of Houston
<br>
Research in High Performance Computing Tools
<br>
Houston, Texas-77004
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1276/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/07/1277.php">Jeff Squyres (jsquyres): "[hwloc-users] This list is migrating!"</a>
<li><strong>Previous message:</strong> <a href="1275.php">Mehmet Belgin: "Re: [hwloc-users] Topology Error"</a>
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
