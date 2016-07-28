<?
$subject_val = "Re: [OMPI devel] get_iwarp_subnet_id in openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 00:16:16 2008" -->
<!-- isoreceived="20080521041616" -->
<!-- sent="Wed, 21 May 2008 00:16:05 -0400" -->
<!-- isosent="20080521041605" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] get_iwarp_subnet_id in openib btl" -->
<!-- id="4833A205.1010205_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080520234532.GF31790_at_opengridcomputing.com" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 00:16:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3955.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3953.php">Brad Benton: "Re: [OMPI devel] Trunk check-in policy until the branch for 1.3"</a>
<li><strong>In reply to:</strong> <a href="3952.php">Jon Mason: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yup. It works. Thanks! With r18470 it works even better!
<br>
<p>Jon Mason wrote:
<br>
<span class="quotelev1">&gt; On Tue, May 20, 2008 at 03:44:41PM -0400, Pak Lui wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jon,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is CentOS 4.6 on Ranger. Sorry I didn't mention it. So what should  
</span><br>
<span class="quotelev2">&gt;&gt; I do?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; login3% more /etc/*release*
</span><br>
<span class="quotelev2">&gt;&gt; ::::::::::::::
</span><br>
<span class="quotelev2">&gt;&gt; /etc/redhat-release
</span><br>
<span class="quotelev2">&gt;&gt; ::::::::::::::
</span><br>
<span class="quotelev2">&gt;&gt; CentOS release 4.6 (Final)
</span><br>
<span class="quotelev2">&gt;&gt; ::::::::::::::
</span><br>
<span class="quotelev2">&gt;&gt; /etc/rocks-release
</span><br>
<span class="quotelev2">&gt;&gt; ::::::::::::::
</span><br>
<span class="quotelev2">&gt;&gt; Rocks release 4.2.1 (Cydonia)
</span><br>
<span class="quotelev2">&gt;&gt; login3%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, looks like I busted you.  Please pull the latest bits and verify my
</span><br>
<span class="quotelev1">&gt; fix solves your issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jon Mason wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, May 20, 2008 at 02:48:49PM -0400, Pak Lui wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am not familiar with get_iwarp_subnet_id and I am not sure why it 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is  causing trunk to barf. I think I am using ofed 1.2.5. See 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attached for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is in the 1.3 tree, not 1.2.  There was a bug in Solaris that was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fixed recently that was around this area.  Please make sure you are at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the latest level.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config.log.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   10439 libtool: link: pgCC -O -DNDEBUG -o .libs/ompi_info 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; components.o  ompi_info.o output.o param.o version.o  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so  -L/opt/ofed/lib64 -libcm -libverbs 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -lrt   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /work/00951/paklui/ompi-trunk7/config-data1/orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /work/00951/paklui/ompi-trunk7/config-data1/opal/.libs/libopen-pal.so 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  -lnuma -ldl -lnsl -lutil -lpthread -Wl,--rpath   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,/work/00951/paklui/ompi-trunk7/shared-install1/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   10440 ../../../ompi/.libs/libmpi.so: undefined reference to   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `get_iwarp_subnet_ id'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   10441 make[2]: *** [ompi_info] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   10442 make[2]: Leaving directory   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/work/00951/paklui/ompi-trunk7/config-data1/         
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/tools/ompi_info'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   10443 make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   10444 make[1]: Leaving directory   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/work/00951/paklui/ompi-trunk7/config-data1/ompi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   10445 make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;make.install.log.0&quot; 10445L, 2050037C                         10445,1 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Bot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Pak Lui
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Pak Lui
</span><br>
<span class="quotelev2">&gt;&gt; pak.lui_at_[hidden]
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
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3955.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3953.php">Brad Benton: "Re: [OMPI devel] Trunk check-in policy until the branch for 1.3"</a>
<li><strong>In reply to:</strong> <a href="3952.php">Jon Mason: "Re: [OMPI devel] get_iwarp_subnet_id in openib btl"</a>
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
