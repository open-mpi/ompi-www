<?
$subject_val = "Re: [OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 07:45:40 2011" -->
<!-- isoreceived="20111122124540" -->
<!-- sent="Tue, 22 Nov 2011 07:45:35 -0500" -->
<!-- isosent="20111122124535" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2" -->
<!-- id="F31385F1-790E-4C2D-ADEC-67AFF2F2704C_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="000001cca88d$96ecfaf0$c4c6f0d0$_at_northwestern.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 07:45:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10014.php">Jeff Squyres: "Re: [OMPI devel] Trunk VT breakage"</a>
<li><strong>Previous message:</strong> <a href="10012.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10007.php">Bruce Foster: "[OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is very strange.  That sym link does not exist in the 1.4.4 tarball -- it is generated during &quot;make&quot;.
<br>
<p>You didn't accidentally vpath build using the OMPI v1.2 source, did you?  The rules in the opal/asm/Makefile.am refer to the top_srcdir, which should implicitly point to the top directory of the source code.  There's no explicit reference to any specific directory -- they're all relative to the top source directory.
<br>
<p>See <a href="https://svn.open-mpi.org/trac/ompi/browser/branches/v1.4/opal/asm/Makefile.am#L21">https://svn.open-mpi.org/trac/ompi/browser/branches/v1.4/opal/asm/Makefile.am#L21</a>.
<br>
<p><p><p>On Nov 21, 2011, at 3:38 PM, Bruce Foster wrote:
<br>
<p><span class="quotelev1">&gt; I configured the 1.4.4 release with the following:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; NUVER=1.4.4
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; rm -f config.cache
</span><br>
<span class="quotelev1">&gt; rm -f NUInstall.configure
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; #/bef/OpenMPI/openmpi-${NUVER}/configure \
</span><br>
<span class="quotelev1">&gt; ../../openmpi-${NUVER}/configure \
</span><br>
<span class="quotelev1">&gt;         --prefix=/opt/openmpi/GNU \
</span><br>
<span class="quotelev1">&gt;         --with-tm=/usr/pbs \
</span><br>
<span class="quotelev1">&gt;         --enable-static \
</span><br>
<span class="quotelev1">&gt;         --disable-dlopen \
</span><br>
<span class="quotelev1">&gt;         --build=x86_64-redhat-linux-gnu \
</span><br>
<span class="quotelev1">&gt;         --host=x86_64-redhat-linux-gnu \
</span><br>
<span class="quotelev1">&gt;         --target=x86_64-redhat-linux-gnu \
</span><br>
<span class="quotelev1">&gt;         2&gt;&amp;1 | tee NUInstall.configure
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I don&#146;t see any problems in the configuration output. However, when I try to make the results, there is an explicit reference to release 1.4.2, and the make fails:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [root_at_seldon GNU]# more NUInstall.make.all
</span><br>
<span class="quotelev1">&gt; Making all in config
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/config'
</span><br>
<span class="quotelev1">&gt; make[1]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/config'
</span><br>
<span class="quotelev1">&gt; Making all in contrib
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/contrib'
</span><br>
<span class="quotelev1">&gt; make[1]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/contrib'
</span><br>
<span class="quotelev1">&gt; Making all in opal
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal'
</span><br>
<span class="quotelev1">&gt; Making all in include
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal/include'
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal/include'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal/include'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal/include'
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal/asm'
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `../../../../openmpi-1.4.2/opal/asm/asm.c', needed
</span><br>
<span class="quotelev1">&gt; by `asm.lo'.  Stop.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal/asm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Looking at the configured opal/asm directory, there&#146;s a bad symlink to the 1.4.2 release:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [bef_at_seldon GNU]# cd opal/asm
</span><br>
<span class="quotelev1">&gt; [bef_at_seldon asm]# ls -l
</span><br>
<span class="quotelev1">&gt; total 199
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 bef bef   264 May  5  2010 asm.lo
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 bef bef   935 May  5  2010 asm.o
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 bef bef   285 May  5  2010 atomic-asm.lo
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 bef bef  1115 May  5  2010 atomic-asm.o
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 bef bef    65 May  5  2010 atomic-asm.S -&gt; ../../../../openmpi-1.4.2/opal/asm/generated/atomic-amd64-linux.s
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 bef bef   873 May  5  2010 libasm.la
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 bef bef 54526 Oct 14 16:19 Makefile
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Bruce
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10014.php">Jeff Squyres: "Re: [OMPI devel] Trunk VT breakage"</a>
<li><strong>Previous message:</strong> <a href="10012.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10007.php">Bruce Foster: "[OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2"</a>
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
