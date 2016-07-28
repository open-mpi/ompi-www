<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 15:25:46 2005" -->
<!-- isoreceived="20050914202546" -->
<!-- sent="Wed, 14 Sep 2005 14:25:37 -0600" -->
<!-- isosent="20050914202537" -->
<!-- name="James W. Barker" -->
<!-- email="jbarker_at_[hidden]" -->
<!-- subject="error message on make" -->
<!-- id="6.2.3.4.2.20050914142356.020fc800_at_cic-mail.lanl.gov" -->
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
<strong>From:</strong> James W. Barker (<em>jbarker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-14 15:25:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0349.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Previous message:</strong> <a href="0347.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0349.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0349.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>This error has been occurring during make for the last couple of days 
<br>
(this error is from HEAD 7371).
<br>
<p>Jim Barker
<br>
<p>mkdir .libs
<br>
g++ -g -Wall -Wundef -Wno-long-long -finline-functions -pthread -o 
<br>
ompi_info components.o ompi_info.o output.o param.o version.o 
<br>
-Wl,--export-dynamic  ../../../ompi/.libs/libmpi.a 
<br>
-L/usr/mellanox/lib -lvapi -lmosal -lmpga -lmtl_common 
<br>
../../../orte/.libs/liborte.a ../../../opal/.libs/libopal.a -ldl -lm 
<br>
-lutil -lnsl
<br>
../../../opal/.libs/libopal.a(maffinity_libnuma_module.o)(.text+0xd): 
<br>
In function `opal_maffinity_libnuma_component_query':
<br>
/home/jbarker/ompi_7371/opal/mca/maffinity/libnuma/maffinity_libnuma_module.c:55: 
<br>
undefined reference to `numa_available'
<br>
../../../opal/.libs/libopal.a(maffinity_libnuma_module.o)(.text+0x5b): 
<br>
In function `libnuma_module_init':
<br>
/home/jbarker/ompi_7371/opal/mca/maffinity/libnuma/maffinity_libnuma_module.c:71: 
<br>
undefined reference to `numa_set_strict'
<br>
../../../opal/.libs/libopal.a(maffinity_libnuma_module.o)(.text+0x60):/home/jbarker/ompi_7371/opal/mca/maffinity/libnuma/maffinity_libnuma_module.c:72: 
<br>
undefined reference to `numa_set_localalloc'
<br>
../../../opal/.libs/libopal.a(maffinity_libnuma_module.o)(.text+0xb5): 
<br>
In function `libnuma_module_set':
<br>
/home/jbarker/ompi_7371/opal/mca/maffinity/libnuma/maffinity_libnuma_module.c:90: 
<br>
undefined reference to `numa_setlocal_memory'
<br>
collect2: ld returned 1 exit status
<br>
make[3]: *** [ompi_info] Error 1
<br>
make[3]: Leaving directory `/home/jbarker/ompi_7371/ompi/tools/ompi_info'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/home/jbarker/ompi_7371/ompi/tools'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/jbarker/ompi_7371/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>James W. Barker,  Ph.D.
<br>
Los Alamos National Laboratory
<br>
Computer and Computational Sciences Division
<br>
Advanced Computing Laboratory - Resilient Technologies Team
<br>
505-665-9558 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0349.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Previous message:</strong> <a href="0347.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0349.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0349.php">Jeff Squyres: "Re:  error message on make"</a>
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
