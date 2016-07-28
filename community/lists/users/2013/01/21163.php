<?
$subject_val = "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 19 13:05:36 2013" -->
<!-- isoreceived="20130119180536" -->
<!-- sent="Sun, 20 Jan 2013 02:05:31 +0800" -->
<!-- isosent="20130119180531" -->
<!-- name="Lee Eric" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi" -->
<!-- id="CAOJJ1ZpAiqJipFozxEhCmObJ091dLxTrdC_B0o9MENnFCFJe+A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOJJ1Zqttgx9KhnvkJYg+vAwbm+Q4L2+tENdf9tegpH9W6fr8Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi<br>
<strong>From:</strong> Lee Eric (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-19 13:05:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21164.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Previous message:</strong> <a href="21162.php">Ralph Castain: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>In reply to:</strong> <a href="21158.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21166.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21166.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21186.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The cross-compile issue I fixed. Check following source code:
<br>
opal_config_asm.m4:897: [AC_MSG_ERROR([No atomic primitives available
<br>
for $host])])
<br>
<p>It seems that checks the toolchain's tuple is one of: armv7* or armv6*
<br>
or armv5*. I have recompiled my toolchain and no such error occurred.
<br>
However, I hit another issue about fortran as configure running.
<br>
<p>*** Fortran 90/95 compiler
<br>
checking for armv6-rpi-linux-gnueabi-gfortran...
<br>
armv6-rpi-linux-gnueabi-gfortran
<br>
checking whether we are using the GNU Fortran compiler... yes
<br>
checking whether armv6-rpi-linux-gnueabi-gfortran accepts -g... yes
<br>
checking if Fortran 77 compiler works... links (cross compiling)
<br>
checking armv6-rpi-linux-gnueabi-gfortran external symbol
<br>
convention... single underscore
<br>
checking if C and Fortran 77 are link compatible... yes
<br>
checking to see if F77 compiler likes the C++ exception flags...
<br>
skipped (no C++ exceptions flags)
<br>
checking to see if mpif77/mpif90 compilers need additional linker flags... none
<br>
checking if Fortran 77 compiler supports CHARACTER... yes
<br>
checking size of Fortran 77 CHARACTER... configure: error: Can not
<br>
determine size of CHARACTER when cross-compiling
<br>
<p>Any hint? Thanks.
<br>
<p>Eric
<br>
<p>On Sat, Jan 19, 2013 at 10:08 PM, Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Any heads up? Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 18, 2013 at 5:28 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 16, 2013, at 6:41 AM, Leif Lindholm &lt;Leif.Lindholm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That isn't, technically speaking, correct for the Raspberry Pi - but it is a workaround if you know you will never actually use the asm implementations of the atomics, but only the inline C ones..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This sort of hides the problem that the dedicated barrier instructions were not available in ARMv6 (it used &quot;system control coprocessor operations&quot; instead.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you ever executed the asm implementation, you would trigger an undefined instruction exception on the Pi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hah; sweet.  Ok.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So what's the right answer?  Would it be acceptable to use a no-op for this operation on such architectures?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21164.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Previous message:</strong> <a href="21162.php">Ralph Castain: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>In reply to:</strong> <a href="21158.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21166.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21166.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21186.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
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
