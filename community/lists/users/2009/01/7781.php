<?
$subject_val = "Re: [OMPI users] MCA base component file not found";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 06:44:13 2009" -->
<!-- isoreceived="20090123114413" -->
<!-- sent="Fri, 23 Jan 2009 06:44:07 -0500" -->
<!-- isosent="20090123114407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MCA base component file not found" -->
<!-- id="F800FEF4-4903-4CBF-B2BD-A9801203CB9B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAY140-W3F965A83C9EBAF388DF24FFCF0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] MCA base component file not found<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 06:44:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7780.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>In reply to:</strong> <a href="7777.php">Yongqi Sun: "[OMPI users] MCA base component file not found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This sounds like you installed OMPI v1.3 over your existing OMPI v1.2  
<br>
installation.
<br>
<p>Note that there are several plugins in the v1.2 series that  
<br>
disappeared in the v1.3 series (i.e., those plugins are either no  
<br>
longer supported or transmorgified into new plugins in v1.3; the  
<br>
latter is the most common case).  It is best to remove your old v1.2  
<br>
installation before installing v1.3.
<br>
<p>But if you're no longer able to do that, remove each of the files  
<br>
listed below (those are the v1.2 plugins that did not carry forward to  
<br>
v1.3), and that should be sufficient.
<br>
<p><p>On Jan 23, 2009, at 5:43 AM, Yongqi Sun wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI 1.3 is giving me the following warnigns no matter what  
</span><br>
<span class="quotelev1">&gt; executables I was launching, even a helloworld program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================================
</span><br>
<span class="quotelev1">&gt; openmpi-1.3/examples$ mpiexec -np 2 hello
</span><br>
<span class="quotelev1">&gt; [MyPC:06046] mca: base: component_find: unable to open /usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_ras_dash_host: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [MyPC:06046] mca: base: component_find: unable to open /usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_ras_gridengine: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [MyPC:06046] mca: base: component_find: unable to open /usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_ras_localhost: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [MyPC:06046] mca: base: component_find: unable to open /usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_errmgr_hnp: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [MyPC:06046] mca: base: component_find: unable to open /usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_errmgr_orted: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [MyPC:06046] mca: base: component_find: unable to open /usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_errmgr_proxy: file not fo! und (ignored)
</span><br>
<span class="quotelev1">&gt; [MyPC:06046] mca: base: component_find: unable to open /usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_iof_proxy: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [MyPC:06046] mca: base: component_find: unable to open /usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_iof_svc: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [MyPC:06052] mca: base: component_find: unable to open /usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_iof_proxy: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [MyPC:06052] mca: base: component_find: unable to open /usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_iof_svc: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt; ======================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I install these How can I suppress these warnings? I haven't  
</span><br>
<span class="quotelev1">&gt; found any instruction about this in FAQ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed Open MPI version 1.3 on my Linux multicore desktop, into  
</span><br>
<span class="quotelev1">&gt; the same folder with version 1.2.8. I installed by the simpliest  
</span><br>
<span class="quotelev1">&gt; configuration:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ configure --prefix=/usr/local
</span><br>
<span class="quotelev1">&gt; $ make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sun, Yongqi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7780.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>In reply to:</strong> <a href="7777.php">Yongqi Sun: "[OMPI users] MCA base component file not found"</a>
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
