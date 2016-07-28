<?
$subject_val = "Re: [OMPI devel] problem compiling r20196";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 04:25:38 2009" -->
<!-- isoreceived="20090106092538" -->
<!-- sent="Tue, 06 Jan 2009 10:25:26 +0100" -->
<!-- isosent="20090106092526" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem compiling r20196" -->
<!-- id="49632386.5050306_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8DB14E3A-A308-4EE0-83DB-886746C746B9_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem compiling r20196<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-06 04:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5102.php">Lenny Verkhovsky: "[OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5100.php">Terry Dontje: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>In reply to:</strong> <a href="5098.php">Ralph Castain: "Re: [OMPI devel] problem compiling r20196"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The file is present on the 2.6.19 distribution, which is the most 
</span><br>
<span class="quotelev1">&gt; current I have access to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
It seems that it is no longer installed since 2.6.25:
<br>
<a href="http://kerneltrap.org/mailarchive/linux-kernel/2007/10/30/368690">http://kerneltrap.org/mailarchive/linux-kernel/2007/10/30/368690</a>
<br>
<span class="quotelev1">&gt; However, after looking at the code, I realized that we no longer need 
</span><br>
<span class="quotelev1">&gt; that include file anyway - so I have removed it. Hopefully, that 
</span><br>
<span class="quotelev1">&gt; should let you build.
</span><br>
Yes it's ok now.
<br>
<p>Thanks,
<br>
<p>Thomas
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 5, 2009, at 12:08 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there some other file that should be included instead?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 5, 2009, at 1:16 PM, Thomas Ropars wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't manage to compile the code from the svn r20196.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pstat_linux_module.c:34:73: error: asm/page.h: No such file or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [pstat_linux_module.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that it is because new Linux kernels no longer install 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; asm/page.h (I use a 2.6.27 Linux kernel).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thomas.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5102.php">Lenny Verkhovsky: "[OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5100.php">Terry Dontje: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>In reply to:</strong> <a href="5098.php">Ralph Castain: "Re: [OMPI devel] problem compiling r20196"</a>
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
