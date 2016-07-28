<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 16:28:53 2005" -->
<!-- isoreceived="20050914212853" -->
<!-- sent="Wed, 14 Sep 2005 17:28:51 -0400" -->
<!-- isosent="20050914212851" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  error message on make" -->
<!-- id="56046fca8a489063dde069d929d7229f_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6.2.3.4.2.20050914142356.020fc800_at_cic-mail.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-14 16:28:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0350.php">Tim S. Woodall: "Re:  error message on make"</a>
<li><strong>Previous message:</strong> <a href="0348.php">James W. Barker: "error message on make"</a>
<li><strong>In reply to:</strong> <a href="0348.php">James W. Barker: "error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0350.php">Tim S. Woodall: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0350.php">Tim S. Woodall: "Re:  error message on make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the problem is that you are trying to link statically, but  
<br>
there is no static version of libnuma available (i.e., there's only  
<br>
libnuma.so, not libnuma.a).
<br>
<p>Hence, if you want libnuma support, you'll either have to generate a  
<br>
libnuma.a file or compile Open MPI dynamically...
<br>
<p><p>On Sep 14, 2005, at 4:25 PM, James W. Barker wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error has been occurring during make for the last couple of days
</span><br>
<span class="quotelev1">&gt; (this error is from HEAD 7371).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim Barker
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mkdir .libs
</span><br>
<span class="quotelev1">&gt; g++ -g -Wall -Wundef -Wno-long-long -finline-functions -pthread -o
</span><br>
<span class="quotelev1">&gt; ompi_info components.o ompi_info.o output.o param.o version.o
</span><br>
<span class="quotelev1">&gt; -Wl,--export-dynamic  ../../../ompi/.libs/libmpi.a
</span><br>
<span class="quotelev1">&gt; -L/usr/mellanox/lib -lvapi -lmosal -lmpga -lmtl_common
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/liborte.a ../../../opal/.libs/libopal.a -ldl -lm
</span><br>
<span class="quotelev1">&gt; -lutil -lnsl
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopal.a(maffinity_libnuma_module.o)(.text+0xd):
</span><br>
<span class="quotelev1">&gt; In function `opal_maffinity_libnuma_component_query':
</span><br>
<span class="quotelev1">&gt; /home/jbarker/ompi_7371/opal/mca/maffinity/libnuma/ 
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_module.c:55:
</span><br>
<span class="quotelev1">&gt; undefined reference to `numa_available'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopal.a(maffinity_libnuma_module.o)(.text+0x5b):
</span><br>
<span class="quotelev1">&gt; In function `libnuma_module_init':
</span><br>
<span class="quotelev1">&gt; /home/jbarker/ompi_7371/opal/mca/maffinity/libnuma/ 
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_module.c:71:
</span><br>
<span class="quotelev1">&gt; undefined reference to `numa_set_strict'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopal.a(maffinity_libnuma_module.o)(.text+0x60): 
</span><br>
<span class="quotelev1">&gt; /home/jbarker/ompi_7371/opal/mca/maffinity/libnuma/ 
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_module.c:72:
</span><br>
<span class="quotelev1">&gt; undefined reference to `numa_set_localalloc'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopal.a(maffinity_libnuma_module.o)(.text+0xb5):
</span><br>
<span class="quotelev1">&gt; In function `libnuma_module_set':
</span><br>
<span class="quotelev1">&gt; /home/jbarker/ompi_7371/opal/mca/maffinity/libnuma/ 
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_module.c:90:
</span><br>
<span class="quotelev1">&gt; undefined reference to `numa_setlocal_memory'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[3]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory  
</span><br>
<span class="quotelev1">&gt; `/home/jbarker/ompi_7371/ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/jbarker/ompi_7371/ompi/tools'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/jbarker/ompi_7371/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; James W. Barker,  Ph.D.
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Computer and Computational Sciences Division
</span><br>
<span class="quotelev1">&gt; Advanced Computing Laboratory - Resilient Technologies Team
</span><br>
<span class="quotelev1">&gt; 505-665-9558
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0350.php">Tim S. Woodall: "Re:  error message on make"</a>
<li><strong>Previous message:</strong> <a href="0348.php">James W. Barker: "error message on make"</a>
<li><strong>In reply to:</strong> <a href="0348.php">James W. Barker: "error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0350.php">Tim S. Woodall: "Re:  error message on make"</a>
<li><strong>Reply:</strong> <a href="0350.php">Tim S. Woodall: "Re:  error message on make"</a>
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
