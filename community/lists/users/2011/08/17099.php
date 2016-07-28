<?
$subject_val = "Re: [OMPI users] Compiling both 32-bit and 64-bit?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 24 16:36:59 2011" -->
<!-- isoreceived="20110824203659" -->
<!-- sent="Wed, 24 Aug 2011 20:36:29 +0000" -->
<!-- isosent="20110824203629" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling both 32-bit and 64-bit?" -->
<!-- id="CA7AAE84.60C3%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGR4S9HGauniVW095-C1Dzn=9frHDdcqcTVAfTX9_oNM7xPKAA_at_mail.gmail.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-24 16:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17100.php">Alexander Beck-Ratzka: "[OMPI users] problems with parallel IO"</a>
<li><strong>Previous message:</strong> <a href="17098.php">Dmitry N. Mikushin: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>In reply to:</strong> <a href="17098.php">Dmitry N. Mikushin: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try to build without specifying the --build, --host, and --target
<br>
options and just specifying the various FLAGS options as either -m32 or
<br>
-m64 as appropriate?  If that doesn't clean things up, can you include all
<br>
the information requested here:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On 8/24/11 1:15 PM, &quot;Dmitry N. Mikushin&quot; &lt;maemarcus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Thanks, Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm trying to follow the guide for 1.5.4, not yet clear what's wrong:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[marcusmae_at_zacate build32]$ ../configure
</span><br>
<span class="quotelev1">&gt;--prefix=/opt/openmpi_kgen-1.5.4
</span><br>
<span class="quotelev1">&gt;--includedir=/opt/openmpi_kgen-1.5.4/include/32
</span><br>
<span class="quotelev1">&gt;--libdir=/opt/openmpi_kgen-1.5.4/lib32 --build=x86_64-unknown-linux
</span><br>
<span class="quotelev1">&gt;--host=x86_64-unknown-linux --target=i686-unknown-linux
</span><br>
<span class="quotelev1">&gt;--disable-binaries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;configure: WARNING: *** The Open MPI configure script does not support
</span><br>
<span class="quotelev1">&gt;--program-prefix, --program-suffix or --program-transform-name. Users
</span><br>
<span class="quotelev1">&gt;are recommended to instead use --prefix with a unique directory and
</span><br>
<span class="quotelev1">&gt;make symbolic links as desired for renaming.
</span><br>
<span class="quotelev1">&gt;configure: error: *** Cannot continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[marcusmae_at_zacate build32]$ ../configure
</span><br>
<span class="quotelev1">&gt;--prefix=/opt/openmpi_kgen-1.5.4
</span><br>
<span class="quotelev1">&gt;--includedir=/opt/openmpi_kgen-1.5.4/include/32
</span><br>
<span class="quotelev1">&gt;--libdir=/opt/openmpi_kgen-1.5.4/lib32 --build=x86_64-unknown-linux
</span><br>
<span class="quotelev1">&gt;--host=i686-unknown-linux --disable-binaries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;checking gfortran external symbol convention... link: invalid option --
</span><br>
<span class="quotelev1">&gt;'d'
</span><br>
<span class="quotelev1">&gt;Try `link --help' for more information.
</span><br>
<span class="quotelev1">&gt;link: invalid option -- 'd'
</span><br>
<span class="quotelev1">&gt;Try `link --help' for more information.
</span><br>
<span class="quotelev1">&gt;link: invalid option -- 'd'
</span><br>
<span class="quotelev1">&gt;Try `link --help' for more information.
</span><br>
<span class="quotelev1">&gt;link: invalid option -- 'd'
</span><br>
<span class="quotelev1">&gt;Try `link --help' for more information.
</span><br>
<span class="quotelev1">&gt;link: invalid option -- 'd'
</span><br>
<span class="quotelev1">&gt;Try `link --help' for more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;configure: error: unknown naming convention:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2011/8/24 Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; On 8/24/11 11:29 AM, &quot;Dmitry N. Mikushin&quot; &lt;maemarcus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Quick question: is there an easy switch to compile and install both
</span><br>
<span class="quotelev3">&gt;&gt;&gt;32-bit and 64-bit OpenMPI libraries into a single tree? E.g. 64-bit in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;/prefix/lib64 and 32-bit in /prefix/lib.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Quick answer: not easily.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Long answer: There's not an easy way, but there are some facilities to
</span><br>
<span class="quotelev2">&gt;&gt; help.  I believe Oracle uses them when building binaries for Solaris.
</span><br>
<span class="quotelev2">&gt;&gt; There is some documentation available on our Trac wiki:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/wiki/MultiLib">https://svn.open-mpi.org/trac/ompi/wiki/MultiLib</a>
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264">https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The difficulty is that it's up to the user/admin to make sure the
</span><br>
<span class="quotelev2">&gt;&gt;correct
</span><br>
<span class="quotelev2">&gt;&gt; arguments are provided, as well as writing the wrapper script files to
</span><br>
<span class="quotelev2">&gt;&gt;do
</span><br>
<span class="quotelev2">&gt;&gt; the sharing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;  Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17100.php">Alexander Beck-Ratzka: "[OMPI users] problems with parallel IO"</a>
<li><strong>Previous message:</strong> <a href="17098.php">Dmitry N. Mikushin: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>In reply to:</strong> <a href="17098.php">Dmitry N. Mikushin: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
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
