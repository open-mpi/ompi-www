<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 16:40:13 2005" -->
<!-- isoreceived="20050914214013" -->
<!-- sent="Wed, 14 Sep 2005 15:40:07 -0600" -->
<!-- isosent="20050914214007" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  error message on make" -->
<!-- id="432898B7.6020604_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="56046fca8a489063dde069d929d7229f_at_open-mpi.org" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-14 16:40:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0351.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Previous message:</strong> <a href="0349.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>In reply to:</strong> <a href="0349.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0351.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0351.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff - seems like a configure/build issue to me. Shouldn't we disable
<br>
numa support and not try to build it if the supporting libraries
<br>
don't exist?
<br>
<p>Thanks,
<br>
Tim
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I believe the problem is that you are trying to link statically, but  
</span><br>
<span class="quotelev1">&gt; there is no static version of libnuma available (i.e., there's only  
</span><br>
<span class="quotelev1">&gt; libnuma.so, not libnuma.a).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, if you want libnuma support, you'll either have to generate a  
</span><br>
<span class="quotelev1">&gt; libnuma.a file or compile Open MPI dynamically...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 14, 2005, at 4:25 PM, James W. Barker wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;This error has been occurring during make for the last couple of days
</span><br>
<span class="quotelev2">&gt;&gt;(this error is from HEAD 7371).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Jim Barker
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt;g++ -g -Wall -Wundef -Wno-long-long -finline-functions -pthread -o
</span><br>
<span class="quotelev2">&gt;&gt;ompi_info components.o ompi_info.o output.o param.o version.o
</span><br>
<span class="quotelev2">&gt;&gt;-Wl,--export-dynamic  ../../../ompi/.libs/libmpi.a
</span><br>
<span class="quotelev2">&gt;&gt;-L/usr/mellanox/lib -lvapi -lmosal -lmpga -lmtl_common
</span><br>
<span class="quotelev2">&gt;&gt;../../../orte/.libs/liborte.a ../../../opal/.libs/libopal.a -ldl -lm
</span><br>
<span class="quotelev2">&gt;&gt;-lutil -lnsl
</span><br>
<span class="quotelev2">&gt;&gt;../../../opal/.libs/libopal.a(maffinity_libnuma_module.o)(.text+0xd):
</span><br>
<span class="quotelev2">&gt;&gt;In function `opal_maffinity_libnuma_component_query':
</span><br>
<span class="quotelev2">&gt;&gt;/home/jbarker/ompi_7371/opal/mca/maffinity/libnuma/ 
</span><br>
<span class="quotelev2">&gt;&gt;maffinity_libnuma_module.c:55:
</span><br>
<span class="quotelev2">&gt;&gt;undefined reference to `numa_available'
</span><br>
<span class="quotelev2">&gt;&gt;../../../opal/.libs/libopal.a(maffinity_libnuma_module.o)(.text+0x5b):
</span><br>
<span class="quotelev2">&gt;&gt;In function `libnuma_module_init':
</span><br>
<span class="quotelev2">&gt;&gt;/home/jbarker/ompi_7371/opal/mca/maffinity/libnuma/ 
</span><br>
<span class="quotelev2">&gt;&gt;maffinity_libnuma_module.c:71:
</span><br>
<span class="quotelev2">&gt;&gt;undefined reference to `numa_set_strict'
</span><br>
<span class="quotelev2">&gt;&gt;../../../opal/.libs/libopal.a(maffinity_libnuma_module.o)(.text+0x60): 
</span><br>
<span class="quotelev2">&gt;&gt;/home/jbarker/ompi_7371/opal/mca/maffinity/libnuma/ 
</span><br>
<span class="quotelev2">&gt;&gt;maffinity_libnuma_module.c:72:
</span><br>
<span class="quotelev2">&gt;&gt;undefined reference to `numa_set_localalloc'
</span><br>
<span class="quotelev2">&gt;&gt;../../../opal/.libs/libopal.a(maffinity_libnuma_module.o)(.text+0xb5):
</span><br>
<span class="quotelev2">&gt;&gt;In function `libnuma_module_set':
</span><br>
<span class="quotelev2">&gt;&gt;/home/jbarker/ompi_7371/opal/mca/maffinity/libnuma/ 
</span><br>
<span class="quotelev2">&gt;&gt;maffinity_libnuma_module.c:90:
</span><br>
<span class="quotelev2">&gt;&gt;undefined reference to `numa_setlocal_memory'
</span><br>
<span class="quotelev2">&gt;&gt;collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;make[3]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;make[3]: Leaving directory  
</span><br>
<span class="quotelev2">&gt;&gt;`/home/jbarker/ompi_7371/ompi/tools/ompi_info'
</span><br>
<span class="quotelev2">&gt;&gt;make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;make[2]: Leaving directory `/home/jbarker/ompi_7371/ompi/tools'
</span><br>
<span class="quotelev2">&gt;&gt;make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;make[1]: Leaving directory `/home/jbarker/ompi_7371/ompi'
</span><br>
<span class="quotelev2">&gt;&gt;make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;James W. Barker,  Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;Computer and Computational Sciences Division
</span><br>
<span class="quotelev2">&gt;&gt;Advanced Computing Laboratory - Resilient Technologies Team
</span><br>
<span class="quotelev2">&gt;&gt;505-665-9558
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0351.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Previous message:</strong> <a href="0349.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>In reply to:</strong> <a href="0349.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0351.php">Jeff Squyres: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0351.php">Jeff Squyres: "Re:  error message on make"</a>
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
