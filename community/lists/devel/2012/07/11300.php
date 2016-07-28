<?
$subject_val = "Re: [OMPI devel] Still bothered / cannot run an application";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 17 17:51:16 2012" -->
<!-- isoreceived="20120717215116" -->
<!-- sent="Tue, 17 Jul 2012 16:51:11 -0500" -->
<!-- isosent="20120717215111" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Still bothered / cannot run an application" -->
<!-- id="2F6CB5F6-6EEE-47A7-8FF8-C4AA00443587_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="650E7DF9-C64B-4FAE-B532-F5019225863C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Still bothered / cannot run an application<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-17 17:51:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11301.php">Shiqing Fan: "Re: [OMPI devel] OpenMPI_v1.6-1_win32.exe contains debug version of library?"</a>
<li><strong>Previous message:</strong> <a href="11299.php">Snoweye Chen: "[OMPI devel] OpenMPI_v1.6-1_win32.exe contains debug version of library?"</a>
<li><strong>In reply to:</strong> <a href="11293.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Progress still continues on this issue... (Nathan and I are actually sitting together in a room this week and are continuing to work on this)
<br>
<p>We just put up a new FAQ item about this issue:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
<br>
<p><p>On Jul 13, 2012, at 7:02 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 12, 2012, at 12:04 PM, Paul Kapinos wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a long time ago, I reported about an error in Open MPI:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/02/18565.php">http://www.open-mpi.org/community/lists/users/2012/02/18565.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, in the 1.6 the behaviour has changed: the test case don't hang forever and block an InfiniBand interface, but seem to run through, and now this error message is printed:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The OpenFabrics (openib) BTL failed to register memory in the driver.
</span><br>
<span class="quotelev2">&gt;&gt; Please check /var/log/messages or dmesg for driver specific failure
</span><br>
<span class="quotelev2">&gt;&gt; reason.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We updated our mechanism, but accidentally left this warning message in (it has since been removed).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's what's happening: Mellanox changed the default amount of registered memory that is available -- they dramatically reduced it.  We haven't gotten a good answer yet as to *why* this change was made.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can change some kernel-level parameters to increase it again, and then OMPI should work fine.  Here's an IBM article about it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.ibm.com/developerworks/wikis/display/hpccentral/Using+RDMA+with+pagepool+larger+than+8GB">http://www.ibm.com/developerworks/wikis/display/hpccentral/Using+RDMA+with+pagepool+larger+than+8GB</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here's some comments that Mellanox made on a ticket about this issue (including some corrections/clarifications to that IBM article):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/3134#comment:12">https://svn.open-mpi.org/trac/ompi/ticket/3134#comment:12</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically, what's happening is that OMPI is behaving badly when it runs out of registered memory.  We have tried two things to make this better (i.e., still perform *correctly*, albeit at a lower performance level), and we're not sure yet whether they work properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. When OMPI tries to register more memory for an RDMA message transaction and fails, it falls back to send-receive (where we already have pre-registered memory available to use).  However, this can still end up hanging because of OMPI's &quot;lazy connection&quot; scheme -- where OMPI doesn't open IB connections between MPI processes until the first time each pair of processes communicate.  So if OMPI runs out of registered memory and then tries to open a new IB connection to a new peer -- kaboom.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. When OMPI starts it, it guesstimates how much memory can be registered and equally divides it between all the OMPI processes *in that job* on the same node.  We had mixed reports of this working or not.  I made a 1.6.x tarball with this fix in it, if you could give it a whirl (with the default low registered memory kernel parameters, to ensure that you can invoke the &quot;out of registered memory&quot; issue):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
</span><br>
<span class="quotelev1">&gt;    Use the openmpi-1.6.1ticket3131r26612M.tar.bz2 tarball
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #2 is the latest attempt to fix it, but we haven't had good testing of it.  Could you give it a whirl and let us know what happens?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11301.php">Shiqing Fan: "Re: [OMPI devel] OpenMPI_v1.6-1_win32.exe contains debug version of library?"</a>
<li><strong>Previous message:</strong> <a href="11299.php">Snoweye Chen: "[OMPI devel] OpenMPI_v1.6-1_win32.exe contains debug version of library?"</a>
<li><strong>In reply to:</strong> <a href="11293.php">Jeff Squyres: "Re: [OMPI devel] Still bothered / cannot run an application"</a>
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
