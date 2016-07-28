<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 19 16:27:36 2007" -->
<!-- isoreceived="20071019202736" -->
<!-- sent="Fri, 19 Oct 2007 14:27:20 -0600" -->
<!-- isosent="20071019202720" -->
<!-- name="Jennis Pruett" -->
<!-- email="jennyp_at_[hidden]" -->
<!-- subject="[OMPI devel] [PMX:VIRUS] RE: issue with --without-tm in configure?" -->
<!-- id="002701c8128e$734de580$bcf3a580_at_lanl.gov" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Jennis Pruett (<em>jennyp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-19 16:27:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2471.php">David Erukhimovich: "Re: [OMPI devel] Trying to get total procs num in odls framework"</a>
<li><strong>Previous message:</strong> <a href="2469.php">Tim Prins: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<li><strong>In reply to:</strong> <a href="2456.php">Jennis Pruett: "[OMPI devel] issue with --without-tm in configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2477.php">Jeff Squyres: "Re: [OMPI devel] [WARNING : A/V UNSCANNABLE] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
<li><strong>Reply:</strong> <a href="2477.php">Jeff Squyres: "Re: [OMPI devel] [WARNING : A/V UNSCANNABLE] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here are the needed output files 
<br>
ompi124...gz is the output from the configure and make,
<br>
the imb..tar contains output from the trial run. 
<br>
<p>The main focus is the same error as listed here below with tm. 
<br>
<p>The system is gm, but I can't get the version right away. 
<br>
I don't have permissions. It is coming as soon as the systems people
<br>
tell me what it is.  This issue doesn't seem to be gm related.
<br>
<p>Thanks,
<br>
Jenny
<br>
<p><p><p><p>-----------------------------------------------------------------------
<br>
Jennis (Jenny)
<br>
Los Alamos National Laboratory
<br>
505-667-1955
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Jennis Pruett
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, October 17, 2007 1:49 PM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] issue with --without-tm in configure?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; version 1.2.4. This is my configure command line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ./configure 
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/projects/hpctools/jennyp/openmpi124flash/openmpi-1.2.4
</span><br>
<span class="quotelev1">&gt; --libdir=/usr/projects/hpctools/jennyp/openmpi124flash/openmpi
</span><br>
<span class="quotelev1">&gt; -1.2.4/lib64
</span><br>
<span class="quotelev1">&gt; --with-bproc --without-tm --enable-shared 
</span><br>
<span class="quotelev1">&gt; --with-io_romio_flags=--with-file-system=ufs+nfs+panfs 
</span><br>
<span class="quotelev1">&gt; --without-pty_support
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
<span class="quotelev1">&gt; warnings, no matter what compiler I m using.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt;mpirun -n 6 ./IMB-MPI1
</span><br>
<span class="quotelev1">&gt; [n110:26208] mca: base: component_find: unable to open ras 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n110:26208] mca: base: component_find: unable to open pls 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n111:26215] mca: base: component_find: unable to open ras 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n111:26212] mca: base: component_find: unable to open ras 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n112:26216] mca: base: component_find: unable to open ras 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n112:26213] mca: base: component_find: unable to open ras 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n110:26211] mca: base: component_find: unable to open ras 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n110:26214] mca: base: component_find: unable to open ras 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n111:26212] mca: base: component_find: unable to open pls 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n111:26215] mca: base: component_find: unable to open pls 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n112:26213] mca: base: component_find: unable to open pls 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n110:26211] mca: base: component_find: unable to open pls 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n110:26214] mca: base: component_find: unable to open pls 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [n112:26216] mca: base: component_find: unable to open pls 
</span><br>
<span class="quotelev1">&gt; tm: file not found 
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was told today that the --without-tm parameter  is being 
</span><br>
<span class="quotelev1">&gt; ignored in the configure statement.
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
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---------
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
<span class="quotelev1">&gt; devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>


<p>
WARNING: The virus scanner was unable to scan the next
<br>
attachment.  This attachment could possibly contain viruses
<br>
or other malicious programs.  The attachment could not be
<br>
scanned for the following reasons:
<br>
<p>The file was corrupt
<br>
<p>You are advised NOT to open this attachment unless you are
<br>
completely sure of its contents.  If in doubt, please
<br>
contact your system administrator.  
<br>
<p>The identifier for this message is 'l9JKRV1V010512'.
<br>
<p>The Management
<br>
PureMessage Admin &lt;pmx-admin_at_[hidden]&gt;
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2470/ompi124-output.tar.gz">ompi124-output.tar.gz</a>
</ul>
<!-- attachment="ompi124-output.tar.gz" -->
<hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2470/imb-imp1-run.tar">imb-imp1-run.tar</a>
</ul>
<!-- attachment="imb-imp1-run.tar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2471.php">David Erukhimovich: "Re: [OMPI devel] Trying to get total procs num in odls framework"</a>
<li><strong>Previous message:</strong> <a href="2469.php">Tim Prins: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<li><strong>In reply to:</strong> <a href="2456.php">Jennis Pruett: "[OMPI devel] issue with --without-tm in configure?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2477.php">Jeff Squyres: "Re: [OMPI devel] [WARNING : A/V UNSCANNABLE] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
<li><strong>Reply:</strong> <a href="2477.php">Jeff Squyres: "Re: [OMPI devel] [WARNING : A/V UNSCANNABLE] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
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
