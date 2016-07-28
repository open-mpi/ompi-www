<?
$subject_val = "[OMPI devel] Trunk is brokem ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 12:15:44 2009" -->
<!-- isoreceived="20091021161544" -->
<!-- sent="Wed, 21 Oct 2009 18:15:43 +0200" -->
<!-- isosent="20091021161543" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk is brokem ?" -->
<!-- id="4ADF33AF.4040108_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk is brokem ?<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 12:15:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6983.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk is brokem ?"</a>
<li><strong>Previous message:</strong> <a href="6981.php">Brice Goglin: "[OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6983.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk is brokem ?"</a>
<li><strong>Reply:</strong> <a href="6983.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk is brokem ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On my systems I see follow error:
<br>
<p>&nbsp;gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include 
<br>
-I../../../../orte/include -I../../../../ompi/include 
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../.. 
<br>
-O3 -DNDEBUG -Wall -Wundef -Wno-long-long -Wsign-compare 
<br>
-Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic 
<br>
-Werror-implicit-function-declaration -finline-functions 
<br>
-fno-strict-aliasing -pthread -fvisibility=hidden -MT sensor_pru.lo -MD 
<br>
-MP -MF .deps/sensor_pru.Tpo -c sensor_pru.c  -fPIC -DPIC -o 
<br>
.libs/sensor_pru.o
<br>
sensor_pru_component.c: In function 'orte_sensor_pru_open':
<br>
sensor_pru_component.c:77: error: implicit declaration of function 
<br>
'opal_output'
<br>
<p>Looks like the sensor code is broken.
<br>
<p>Thanks,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6983.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk is brokem ?"</a>
<li><strong>Previous message:</strong> <a href="6981.php">Brice Goglin: "[OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6983.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk is brokem ?"</a>
<li><strong>Reply:</strong> <a href="6983.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Trunk is brokem ?"</a>
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
