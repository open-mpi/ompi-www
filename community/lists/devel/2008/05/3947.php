<?
$subject_val = "Re: [OMPI devel] get_iwarp_subnet_id in openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 15:31:25 2008" -->
<!-- isoreceived="20080520193125" -->
<!-- sent="Tue, 20 May 2008 14:32:23 -0500" -->
<!-- isosent="20080520193223" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] get_iwarp_subnet_id in openib btl" -->
<!-- id="20080520193223.GC31790_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48331D11.9000605_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI devel] get_iwarp_subnet_id in openib btl<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-20 15:32:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3948.php">Pak Lui: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>Previous message:</strong> <a href="3946.php">Pak Lui: "[OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>In reply to:</strong> <a href="3946.php">Pak Lui: "[OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3948.php">Pak Lui: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>Reply:</strong> <a href="3948.php">Pak Lui: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May 20, 2008 at 02:48:49PM -0400, Pak Lui wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not familiar with get_iwarp_subnet_id and I am not sure why it is  
</span><br>
<span class="quotelev1">&gt; causing trunk to barf. I think I am using ofed 1.2.5. See attached for  
</span><br>
<p>That is in the 1.3 tree, not 1.2.  There was a bug in Solaris that was
<br>
fixed recently that was around this area.  Please make sure you are at
<br>
the latest level.
<br>
<p>Thanks,
<br>
Jon
<br>
<p><span class="quotelev1">&gt; config.log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   10439 libtool: link: pgCC -O -DNDEBUG -o .libs/ompi_info components.o  
</span><br>
<span class="quotelev1">&gt; ompi_info.o output.o param.o version.o  ../../../ompi/.libs/libmpi.so  
</span><br>
<span class="quotelev1">&gt; -L/opt/ofed/lib64 -libcm -libverbs -lrt  
</span><br>
<span class="quotelev1">&gt; /work/00951/paklui/ompi-trunk7/config-data1/orte/.libs/libopen-rte.so  
</span><br>
<span class="quotelev1">&gt; /work/00951/paklui/ompi-trunk7/config-data1/opal/.libs/libopen-pal.so  
</span><br>
<span class="quotelev1">&gt; -lnuma -ldl -lnsl -lutil -lpthread -Wl,--rpath  
</span><br>
<span class="quotelev1">&gt; -Wl,/work/00951/paklui/ompi-trunk7/shared-install1/lib
</span><br>
<span class="quotelev1">&gt;   10440 ../../../ompi/.libs/libmpi.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `get_iwarp_subnet_ id'
</span><br>
<span class="quotelev1">&gt;   10441 make[2]: *** [ompi_info] Error 2
</span><br>
<span class="quotelev1">&gt;   10442 make[2]: Leaving directory  
</span><br>
<span class="quotelev1">&gt; `/work/00951/paklui/ompi-trunk7/config-data1/        
</span><br>
<span class="quotelev1">&gt; ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt;   10443 make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;   10444 make[1]: Leaving directory  
</span><br>
<span class="quotelev1">&gt; `/work/00951/paklui/ompi-trunk7/config-data1/ompi'
</span><br>
<span class="quotelev1">&gt;   10445 make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; &quot;make.install.log.0&quot; 10445L, 2050037C                         10445,1     
</span><br>
<span class="quotelev1">&gt; Bot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Pak Lui
</span><br>
<span class="quotelev1">&gt; pak.lui_at_[hidden]
</span><br>
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3948.php">Pak Lui: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>Previous message:</strong> <a href="3946.php">Pak Lui: "[OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>In reply to:</strong> <a href="3946.php">Pak Lui: "[OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3948.php">Pak Lui: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>Reply:</strong> <a href="3948.php">Pak Lui: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
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
