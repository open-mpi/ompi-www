<?
$subject_val = "[OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 26 13:22:41 2012" -->
<!-- isoreceived="20120226182241" -->
<!-- sent="Sun, 26 Feb 2012 10:22:35 -0800 (PST)" -->
<!-- isosent="20120226182235" -->
<!-- name="Ron Broberg" -->
<!-- email="ronbroberg_at_[hidden]" -->
<!-- subject="[OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l" -->
<!-- id="1330280555.62127.YahooMailNeo_at_web113815.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BOZO" -->
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
<strong>Subject:</strong> [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l<br>
<strong>From:</strong> Ron Broberg (<em>ronbroberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-26 13:22:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10611.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10609.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10622.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Reply:</strong> <a href="10622.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would like to report the following information regarding compiling OpenMPI on Debian ARMv6. I won't submit this as a patch because I don't believe that &quot;delete all 'dmb' instructions&quot; can be considered a well developed patch. But this information may be of use to someone down the line.
<br>
<p>I was able to compile the upstream&#160;openmpi-1.5.4 distribution on a Debian6 armv6l qemu emulation.
<br>
<a href="http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.5.tar.bz2">http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.5.tar.bz2</a>
<br>
<p><p>You have to make 3 changes to the package
<br>
&#160;1) Delete all references to the RISC instruction 'dmb'
<br>
&#160;2) Modify the 'configure' file to include an 'armv6' option
<br>
&#160;3) Compile with CFLAGS=-march=armv6&#160;
<br>
<p>## 1) make the following edits to these three files
<br>
./opal/asm/generated/atomic-local.s
<br>
&#160; &#160; delete all dmb instructions
<br>
./opal/asm/base/ARM.asm
<br>
&#160; &#160; delete all dmb instructions
<br>
./opal/include/opal/sys/arm/atomic.h
<br>
&#160; &#160; change the lines:
<br>
#if OPAL_WANT_SMP_LOCKS
<br>
#define MB() &#160;__asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
<br>
#define RMB() __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
<br>
#define WMB() __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
<br>
#else
<br>
#define MB()
<br>
#define RMB()
<br>
#define WMB()
<br>
#endif
<br>
<p>to read:
<br>
#define MB()
<br>
#define RMB()
<br>
#define WMB()
<br>
<p>## 2) add the following to the 'configure' file at line 26946 of 171183
<br>
goto line 26946, there should be an 'alpha-' section above and an 'armv7' below
<br>
insert the following
<br>
&#160; &#160; &#160; &#160; armv6*)
<br>
&#160; &#160; &#160; &#160; &#160; &#160; ompi_cv_asm_arch=&quot;ARM&quot;
<br>
&#160; &#160; &#160; &#160; &#160; &#160; OPAL_ASM_SUPPORT_64BIT=0
<br>
&#160; &#160; &#160; &#160; &#160; &#160; OMPI_GCC_INLINE_ASSIGN='&quot;mov %0, #0&quot; : &quot;=&amp;r&quot;(ret)'
<br>
&#160; &#160; &#160; &#160; &#160; &#160; ;;
<br>
<p>## 3) compile and install with the following CFLAGS
<br>
CFLAGS=-march=armv6
<br>
./configure CFLAGS=-march=armv6
<br>
make
<br>
sudo make install
<br>
<p>more information about my build at
<br>
<a href="http://rhinohide.wordpress.com/2012/02/26/openmpi-on-raspberry-pi/">http://rhinohide.wordpress.com/2012/02/26/openmpi-on-raspberry-pi/</a>&#160;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10611.php">Paul Hargrove: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10609.php">Ralph Castain: "Re: [OMPI devel] Odd build breakage seen with 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10622.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Reply:</strong> <a href="10622.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
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
