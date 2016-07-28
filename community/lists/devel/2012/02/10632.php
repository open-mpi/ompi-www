<?
$subject_val = "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 11:02:42 2012" -->
<!-- isoreceived="20120228160242" -->
<!-- sent="Tue, 28 Feb 2012 16:00:42 +0000" -->
<!-- isosent="20120228160042" -->
<!-- name="Leif Lindholm" -->
<!-- email="Leif.Lindholm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l" -->
<!-- id="EF1A049ABC19F94A9FC22A9D3BCDE8F9515A171633_at_GEORGE.Emea.Arm.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="487D9567-5244-4A32-B7D1-8ED0D9EEE55A_at_cisco.com" -->
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
<strong>From:</strong> Leif Lindholm (<em>Leif.Lindholm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 11:00:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10633.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Previous message:</strong> <a href="10631.php">Ralph Castain: "Re: [OMPI devel] Trunk build problem"</a>
<li><strong>In reply to:</strong> <a href="10626.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10633.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Reply:</strong> <a href="10633.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We'd need a few ifdefs, effectively.
<br>
<p>One on the dmb/mcr and one on the 64-bit, depending on v6k or higher.
<br>
<p>This would provide ARMv6 support only though - ARMv5 or earlier (like debian &quot;armel&quot;) will still miss out.
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeffrey Squyres
</span><br>
<span class="quotelev1">&gt; Sent: 28 February 2012 14:10
</span><br>
<span class="quotelev1">&gt; To: Leif Lindholm
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Developers; Ron Broberg
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu
</span><br>
<span class="quotelev1">&gt; arm6l
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any changes we need to make to OMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2012, at 7:50 AM, Leif Lindholm wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ron,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Excellent work! Indeed - simply dropping the DMBs can lead to memory
</span><br>
<span class="quotelev1">&gt; consistency issues even on ARMv6.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The architectural semantics for memory barriers exist in ARMv6 though
</span><br>
<span class="quotelev1">&gt; - they just weren't given dedicated mnemonics.
</span><br>
<span class="quotelev2">&gt; &gt; What you could do is to simply replace the inline &quot;dmb&quot; sequences
</span><br>
<span class="quotelev1">&gt; with inline cp15 operations:
</span><br>
<span class="quotelev2">&gt; &gt; - &quot;MCR p15, 0, r0, c7, c10, 5&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  (the 'r0' is an encoding artefact and doesn't affect the register
</span><br>
<span class="quotelev2">&gt; &gt;  contents)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; LDREXD/STREXD weren't part of the ARMv6 base architecture, although
</span><br>
<span class="quotelev1">&gt; they are supported by the 1176 which is used in the Raspberry PI. If
</span><br>
<span class="quotelev1">&gt; your tools support detecting/building for extension subarchitecture
</span><br>
<span class="quotelev1">&gt; ARMv6k (supported by 1176), you can actually keep the 64-bit atomics
</span><br>
<span class="quotelev1">&gt; in.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Leif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; References:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://infocenter.arm.com/help/topic/com.arm.doc.ddi0301h/Babfdddg.html">http://infocenter.arm.com/help/topic/com.arm.doc.ddi0301h/Babfdddg.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://infocenter.arm.com/help/topic/com.arm.doc.ddi0301h/Babhejba.html">http://infocenter.arm.com/help/topic/com.arm.doc.ddi0301h/Babhejba.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: Jeffrey Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: 28 February 2012 12:30
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Ron Broberg; Open MPI Developers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cc: Leif Lindholm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu
</span><br>
<span class="quotelev3">&gt; &gt;&gt; arm6l
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ron -- Many thanks!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Leif -- can you comment on this?  (yes, I'm passing the buck to our
</span><br>
<span class="quotelev1">&gt; ARM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI representative :-) )
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 26, 2012, at 1:22 PM, Ron Broberg wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I would like to report the following information regarding
</span><br>
<span class="quotelev1">&gt; compiling
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMPI on Debian ARMv6. I won't submit this as a patch because I
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev3">&gt; &gt;&gt; believe that &quot;delete all 'dmb' instructions&quot; can be considered a
</span><br>
<span class="quotelev1">&gt; well
</span><br>
<span class="quotelev3">&gt; &gt;&gt; developed patch. But this information may be of use to someone down
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; line.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I was able to compile the upstream openmpi-1.5.4 distribution on a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Debian6 armv6l qemu emulation.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi">http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi</a>-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.4.5.tar.bz2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You have to make 3 changes to the package
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1) Delete all references to the RISC instruction 'dmb'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2) Modify the 'configure' file to include an 'armv6' option
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3) Compile with CFLAGS=-march=armv6
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ## 1) make the following edits to these three files
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./opal/asm/generated/atomic-local.s
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    delete all dmb instructions
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./opal/asm/base/ARM.asm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    delete all dmb instructions
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./opal/include/opal/sys/arm/atomic.h
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    change the lines:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #if OPAL_WANT_SMP_LOCKS
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #define MB()  __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #define RMB() __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #define WMB() __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #else
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #define MB()
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #define RMB()
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #define WMB()
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #endif
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to read:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #define MB()
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #define RMB()
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #define WMB()
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ## 2) add the following to the 'configure' file at line 26946 of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 171183
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; goto line 26946, there should be an 'alpha-' section above and an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 'armv7' below
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; insert the following
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        armv6*)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            ompi_cv_asm_arch=&quot;ARM&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            OPAL_ASM_SUPPORT_64BIT=0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            OMPI_GCC_INLINE_ASSIGN='&quot;mov %0, #0&quot; : &quot;=&amp;r&quot;(ret)'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            ;;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ## 3) compile and install with the following CFLAGS
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; CFLAGS=-march=armv6
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./configure CFLAGS=-march=armv6
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sudo make install
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; more information about my build at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://rhinohide.wordpress.com/2012/02/26/openmpi-on-raspberry-pi/">http://rhinohide.wordpress.com/2012/02/26/openmpi-on-raspberry-pi/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- IMPORTANT NOTICE: The contents of this email and any attachments
</span><br>
<span class="quotelev1">&gt; are confidential and may also be privileged. If you are not the
</span><br>
<span class="quotelev1">&gt; intended recipient, please notify the sender immediately and do not
</span><br>
<span class="quotelev1">&gt; disclose the contents to any other person, use it for any purpose, or
</span><br>
<span class="quotelev1">&gt; store or copy the information in any medium.  Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p>-- IMPORTANT NOTICE: The contents of this email and any attachments are confidential and may also be privileged. If you are not the intended recipient, please notify the sender immediately and do not disclose the contents to any other person, use it for any purpose, or store or copy the information in any medium.  Thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10633.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Previous message:</strong> <a href="10631.php">Ralph Castain: "Re: [OMPI devel] Trunk build problem"</a>
<li><strong>In reply to:</strong> <a href="10626.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10633.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Reply:</strong> <a href="10633.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
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
