<?
$subject_val = "Re: [OMPI users] Compiling both 32-bit and 64-bit?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 24 16:15:37 2011" -->
<!-- isoreceived="20110824201537" -->
<!-- sent="Thu, 25 Aug 2011 00:15:32 +0400" -->
<!-- isosent="20110824201532" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling both 32-bit and 64-bit?" -->
<!-- id="CAGR4S9HGauniVW095-C1Dzn=9frHDdcqcTVAfTX9_oNM7xPKAA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA7A92EB.60AE%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling both 32-bit and 64-bit?<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-24 16:15:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17099.php">Barrett, Brian W: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>Previous message:</strong> <a href="17097.php">Barrett, Brian W: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>In reply to:</strong> <a href="17097.php">Barrett, Brian W: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17099.php">Barrett, Brian W: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>Reply:</strong> <a href="17099.php">Barrett, Brian W: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Brian,
<br>
<p>I'm trying to follow the guide for 1.5.4, not yet clear what's wrong:
<br>
<p>[marcusmae_at_zacate build32]$ ../configure
<br>
--prefix=/opt/openmpi_kgen-1.5.4
<br>
--includedir=/opt/openmpi_kgen-1.5.4/include/32
<br>
--libdir=/opt/openmpi_kgen-1.5.4/lib32 --build=x86_64-unknown-linux
<br>
--host=x86_64-unknown-linux --target=i686-unknown-linux
<br>
--disable-binaries
<br>
<p>...
<br>
<p>configure: WARNING: *** The Open MPI configure script does not support
<br>
--program-prefix, --program-suffix or --program-transform-name. Users
<br>
are recommended to instead use --prefix with a unique directory and
<br>
make symbolic links as desired for renaming.
<br>
configure: error: *** Cannot continue
<br>
<p>[marcusmae_at_zacate build32]$ ../configure
<br>
--prefix=/opt/openmpi_kgen-1.5.4
<br>
--includedir=/opt/openmpi_kgen-1.5.4/include/32
<br>
--libdir=/opt/openmpi_kgen-1.5.4/lib32 --build=x86_64-unknown-linux
<br>
--host=i686-unknown-linux --disable-binaries
<br>
<p>...
<br>
<p>checking gfortran external symbol convention... link: invalid option -- 'd'
<br>
Try `link --help' for more information.
<br>
link: invalid option -- 'd'
<br>
Try `link --help' for more information.
<br>
link: invalid option -- 'd'
<br>
Try `link --help' for more information.
<br>
link: invalid option -- 'd'
<br>
Try `link --help' for more information.
<br>
link: invalid option -- 'd'
<br>
Try `link --help' for more information.
<br>
<p>configure: error: unknown naming convention:
<br>
<p>2011/8/24 Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On 8/24/11 11:29 AM, &quot;Dmitry N. Mikushin&quot; &lt;maemarcus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Quick question: is there an easy switch to compile and install both
</span><br>
<span class="quotelev2">&gt;&gt;32-bit and 64-bit OpenMPI libraries into a single tree? E.g. 64-bit in
</span><br>
<span class="quotelev2">&gt;&gt;/prefix/lib64 and 32-bit in /prefix/lib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quick answer: not easily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Long answer: There's not an easy way, but there are some facilities to
</span><br>
<span class="quotelev1">&gt; help. &#160;I believe Oracle uses them when building binaries for Solaris.
</span><br>
<span class="quotelev1">&gt; There is some documentation available on our Trac wiki:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;<a href="https://svn.open-mpi.org/trac/ompi/wiki/MultiLib">https://svn.open-mpi.org/trac/ompi/wiki/MultiLib</a>
</span><br>
<span class="quotelev1">&gt; &#160;<a href="https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264">https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The difficulty is that it's up to the user/admin to make sure the correct
</span><br>
<span class="quotelev1">&gt; arguments are provided, as well as writing the wrapper script files to do
</span><br>
<span class="quotelev1">&gt; the sharing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &#160;Brian W. Barrett
</span><br>
<span class="quotelev1">&gt; &#160;Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt; &#160;Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17099.php">Barrett, Brian W: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>Previous message:</strong> <a href="17097.php">Barrett, Brian W: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>In reply to:</strong> <a href="17097.php">Barrett, Brian W: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17099.php">Barrett, Brian W: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>Reply:</strong> <a href="17099.php">Barrett, Brian W: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
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
