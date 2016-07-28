<?
$subject_val = "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 07:29:50 2012" -->
<!-- isoreceived="20120228122950" -->
<!-- sent="Tue, 28 Feb 2012 07:29:46 -0500" -->
<!-- isosent="20120228122946" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l" -->
<!-- id="30F96DF5-44DA-4456-9662-EBD85825E207_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1330280555.62127.YahooMailNeo_at_web113815.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 07:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10623.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10621.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10610.php">Ron Broberg: "[OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10624.php">Leif Lindholm: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Reply:</strong> <a href="10624.php">Leif Lindholm: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ron -- Many thanks!
<br>
<p>Leif -- can you comment on this?  (yes, I'm passing the buck to our ARM Open MPI representative :-) )
<br>
<p><p>On Feb 26, 2012, at 1:22 PM, Ron Broberg wrote:
<br>
<p><span class="quotelev1">&gt; I would like to report the following information regarding compiling OpenMPI on Debian ARMv6. I won't submit this as a patch because I don't believe that &quot;delete all 'dmb' instructions&quot; can be considered a well developed patch. But this information may be of use to someone down the line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was able to compile the upstream openmpi-1.5.4 distribution on a Debian6 armv6l qemu emulation.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.5.tar.bz2">http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.5.tar.bz2</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You have to make 3 changes to the package
</span><br>
<span class="quotelev1">&gt;  1) Delete all references to the RISC instruction 'dmb'
</span><br>
<span class="quotelev1">&gt;  2) Modify the 'configure' file to include an 'armv6' option
</span><br>
<span class="quotelev1">&gt;  3) Compile with CFLAGS=-march=armv6 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## 1) make the following edits to these three files
</span><br>
<span class="quotelev1">&gt; ./opal/asm/generated/atomic-local.s
</span><br>
<span class="quotelev1">&gt;     delete all dmb instructions
</span><br>
<span class="quotelev1">&gt; ./opal/asm/base/ARM.asm
</span><br>
<span class="quotelev1">&gt;     delete all dmb instructions
</span><br>
<span class="quotelev1">&gt; ./opal/include/opal/sys/arm/atomic.h
</span><br>
<span class="quotelev1">&gt;     change the lines:
</span><br>
<span class="quotelev1">&gt; #if OPAL_WANT_SMP_LOCKS
</span><br>
<span class="quotelev1">&gt; #define MB()  __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
</span><br>
<span class="quotelev1">&gt; #define RMB() __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
</span><br>
<span class="quotelev1">&gt; #define WMB() __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #define MB()
</span><br>
<span class="quotelev1">&gt; #define RMB()
</span><br>
<span class="quotelev1">&gt; #define WMB()
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to read:
</span><br>
<span class="quotelev1">&gt; #define MB()
</span><br>
<span class="quotelev1">&gt; #define RMB()
</span><br>
<span class="quotelev1">&gt; #define WMB()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## 2) add the following to the 'configure' file at line 26946 of 171183
</span><br>
<span class="quotelev1">&gt; goto line 26946, there should be an 'alpha-' section above and an 'armv7' below
</span><br>
<span class="quotelev1">&gt; insert the following
</span><br>
<span class="quotelev1">&gt;         armv6*)
</span><br>
<span class="quotelev1">&gt;             ompi_cv_asm_arch=&quot;ARM&quot;
</span><br>
<span class="quotelev1">&gt;             OPAL_ASM_SUPPORT_64BIT=0
</span><br>
<span class="quotelev1">&gt;             OMPI_GCC_INLINE_ASSIGN='&quot;mov %0, #0&quot; : &quot;=&amp;r&quot;(ret)'
</span><br>
<span class="quotelev1">&gt;             ;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## 3) compile and install with the following CFLAGS
</span><br>
<span class="quotelev1">&gt; CFLAGS=-march=armv6
</span><br>
<span class="quotelev1">&gt; ./configure CFLAGS=-march=armv6
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; sudo make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; more information about my build at
</span><br>
<span class="quotelev1">&gt; <a href="http://rhinohide.wordpress.com/2012/02/26/openmpi-on-raspberry-pi/">http://rhinohide.wordpress.com/2012/02/26/openmpi-on-raspberry-pi/</a> 
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
<li><strong>Next message:</strong> <a href="10623.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10621.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10610.php">Ron Broberg: "[OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10624.php">Leif Lindholm: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Reply:</strong> <a href="10624.php">Leif Lindholm: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
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
