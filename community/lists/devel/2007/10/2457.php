<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 15:55:09 2007" -->
<!-- isoreceived="20071017195509" -->
<!-- sent="Wed, 17 Oct 2007 15:54:50 -0400" -->
<!-- isosent="20071017195450" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] issue with --without-tm in configure?" -->
<!-- id="04E5B82E-DBBD-4666-9C6A-00A122B3FE09_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="00cc01c810f6$c16d3ca0$bcf3a580_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-10-17 15:54:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2458.php">Jeff Squyres: "Re: [OMPI devel] Hybrid examples"</a>
<li><strong>Previous message:</strong> <a href="2456.php">Jennis Pruett: "[OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>In reply to:</strong> <a href="2456.php">Jennis Pruett: "[OMPI devel] issue with --without-tm in configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2470.php">Jennis Pruett: "[OMPI devel] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jenny --
<br>
<p>Can you send the information listed on the &quot;getting help&quot; web page?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Oct 17, 2007, at 3:48 PM, Jennis Pruett wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello, All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm new to this forum, but I'm told this is where I'm to ask  
</span><br>
<span class="quotelev1">&gt; questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a linux cluster, bproc, gm, and am trying to configure  
</span><br>
<span class="quotelev1">&gt; version 1.2.4.
</span><br>
<span class="quotelev1">&gt; This is my configure command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/projects/hpctools/jennyp/openmpi124flash/openmpi-1.2.4
</span><br>
<span class="quotelev1">&gt; --libdir=/usr/projects/hpctools/jennyp/openmpi124flash/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4/lib64
</span><br>
<span class="quotelev1">&gt; --with-bproc --without-tm --enable-shared
</span><br>
<span class="quotelev1">&gt; --with-io_romio_flags=--with-file-system=ufs+nfs+panfs --without- 
</span><br>
<span class="quotelev1">&gt; pty_support
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ( I threw in the --without-pty-support just to see if it would make a
</span><br>
<span class="quotelev1">&gt; difference.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The make and install seem to proced ok.
</span><br>
<span class="quotelev1">&gt; The test I have is an IMB-MPI1 test, and I am getting these  
</span><br>
<span class="quotelev1">&gt; warnings, no
</span><br>
<span class="quotelev1">&gt; matter what compiler I
</span><br>
<span class="quotelev1">&gt; m using.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 6 ./IMB-MPI1
</span><br>
<span class="quotelev1">&gt; [n110:26208] mca: base: component_find: unable to open ras tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n110:26208] mca: base: component_find: unable to open pls tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n111:26215] mca: base: component_find: unable to open ras tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n111:26212] mca: base: component_find: unable to open ras tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n112:26216] mca: base: component_find: unable to open ras tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n112:26213] mca: base: component_find: unable to open ras tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n110:26211] mca: base: component_find: unable to open ras tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n110:26214] mca: base: component_find: unable to open ras tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n111:26212] mca: base: component_find: unable to open pls tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n111:26215] mca: base: component_find: unable to open pls tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n112:26213] mca: base: component_find: unable to open pls tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n110:26211] mca: base: component_find: unable to open pls tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n110:26214] mca: base: component_find: unable to open pls tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n112:26216] mca: base: component_find: unable to open pls tm: file  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was told today that the --without-tm parameter  is being ignored  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; configure statement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone know what is going on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; Jennis (Jenny)
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 505-667-1955
</span><br>
<span class="quotelev1">&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2458.php">Jeff Squyres: "Re: [OMPI devel] Hybrid examples"</a>
<li><strong>Previous message:</strong> <a href="2456.php">Jennis Pruett: "[OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>In reply to:</strong> <a href="2456.php">Jennis Pruett: "[OMPI devel] issue with --without-tm in configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2470.php">Jennis Pruett: "[OMPI devel] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
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
