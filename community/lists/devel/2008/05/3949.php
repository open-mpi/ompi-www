<?
$subject_val = "Re: [OMPI devel] get_iwarp_subnet_id in openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 16:44:28 2008" -->
<!-- isoreceived="20080520204428" -->
<!-- sent="Tue, 20 May 2008 16:43:33 -0400" -->
<!-- isosent="20080520204333" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] get_iwarp_subnet_id in openib btl" -->
<!-- id="4AC7F7EF-B889-4B49-AE36-B32FA20750F3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48332A29.3060902_at_Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-20 16:43:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3950.php">Brad Benton: "[OMPI devel] Trunk check-in policy until the branch for 1.3"</a>
<li><strong>Previous message:</strong> <a href="3948.php">Pak Lui: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>In reply to:</strong> <a href="3948.php">Pak Lui: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3952.php">Jon Mason: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's definitely two problems in the _iwarp.c file -- see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1294">https://svn.open-mpi.org/trac/ompi/ticket/1294</a>
<br>
<p><p>On May 20, 2008, at 3:44 PM, Pak Lui wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jon,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is CentOS 4.6 on Ranger. Sorry I didn't mention it. So what  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt; I do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; login3% more /etc/*release*
</span><br>
<span class="quotelev1">&gt; ::::::::::::::
</span><br>
<span class="quotelev1">&gt; /etc/redhat-release
</span><br>
<span class="quotelev1">&gt; ::::::::::::::
</span><br>
<span class="quotelev1">&gt; CentOS release 4.6 (Final)
</span><br>
<span class="quotelev1">&gt; ::::::::::::::
</span><br>
<span class="quotelev1">&gt; /etc/rocks-release
</span><br>
<span class="quotelev1">&gt; ::::::::::::::
</span><br>
<span class="quotelev1">&gt; Rocks release 4.2.1 (Cydonia)
</span><br>
<span class="quotelev1">&gt; login3%
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jon Mason wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, May 20, 2008 at 02:48:49PM -0400, Pak Lui wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not familiar with get_iwarp_subnet_id and I am not sure why  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; causing trunk to barf. I think I am using ofed 1.2.5. See attached  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is in the 1.3 tree, not 1.2.  There was a bug in Solaris that  
</span><br>
<span class="quotelev2">&gt;&gt; was
</span><br>
<span class="quotelev2">&gt;&gt; fixed recently that was around this area.  Please make sure you are  
</span><br>
<span class="quotelev2">&gt;&gt; at
</span><br>
<span class="quotelev2">&gt;&gt; the latest level.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Jon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.log.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  10439 libtool: link: pgCC -O -DNDEBUG -o .libs/ompi_info  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info.o output.o param.o version.o  ../../../ompi/.libs/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/opt/ofed/lib64 -libcm -libverbs -lrt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /work/00951/paklui/ompi-trunk7/config-data1/orte/.libs/libopen- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rte.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /work/00951/paklui/ompi-trunk7/config-data1/opal/.libs/libopen- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pal.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lnuma -ldl -lnsl -lutil -lpthread -Wl,--rpath
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,/work/00951/paklui/ompi-trunk7/shared-install1/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  10440 ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `get_iwarp_subnet_ id'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  10441 make[2]: *** [ompi_info] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  10442 make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/work/00951/paklui/ompi-trunk7/config-data1/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/tools/ompi_info'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  10443 make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  10444 make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/work/00951/paklui/ompi-trunk7/config-data1/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  10445 make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;make.install.log.0&quot; 10445L, 2050037C                          
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10445,1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bot
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Pak Lui
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3950.php">Brad Benton: "[OMPI devel] Trunk check-in policy until the branch for 1.3"</a>
<li><strong>Previous message:</strong> <a href="3948.php">Pak Lui: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<li><strong>In reply to:</strong> <a href="3948.php">Pak Lui: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3952.php">Jon Mason: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
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
