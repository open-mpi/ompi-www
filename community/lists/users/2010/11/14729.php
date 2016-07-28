<?
$subject_val = "Re: [OMPI users] Compile problems with 1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 16:37:48 2010" -->
<!-- isoreceived="20101110213748" -->
<!-- sent="Wed, 10 Nov 2010 13:37:42 -0800" -->
<!-- isosent="20101110213742" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile problems with 1.3.2" -->
<!-- id="AANLkTikMDi70o228MDUULZHN+Vjo+EYYZ+=zw77Crtho_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="10F5D41E-42B1-4959-B15F-7B1608EC3828_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compile problems with 1.3.2<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 16:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14730.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<li><strong>Previous message:</strong> <a href="14728.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.5 is not detecting oversubscription"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9762.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14746.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="14746.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, here's an old thread :)
<br>
<p>It turns out I'm having the same issues with OMPI 1.4.3 (current
<br>
stable, srpm downloaded from openmpi website).
<br>
<p>My build command (which was the same for the 1.3.x build originally
<br>
cited here) is:
<br>
<p>(working command):
<br>
rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
<br>
1' --define 'modules_rpm_name environment-modules' --define
<br>
'build_all_in_one_rpm 0' --define 'configure_options
<br>
--with-tm=/opt/torque --enable-contrib-no-build=vt' --define '_name
<br>
openmpi-gcc' openmpi-1.4.3.spec
<br>
<p>(broke command)
<br>
rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
<br>
1' --define 'modules_rpm_name environment-modules' --define
<br>
'build_all_in_one_rpm 0' --define 'configure_options
<br>
--with-tm=/opt/torque' --define '_name openmpi-gcc' openmpi-1.4.3.spec
<br>
<p>Note that I can build openmpi with pgi compiler with this command,
<br>
without disabling vt:
<br>
CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 rpmbuild -bb --define
<br>
'install_in_opt 1' --define 'install_modulefile 1' --define
<br>
'modules_rpm_name environment-modules' --define 'build_all_in_one_rpm
<br>
0'  --define 'configure_options --with-tm=/opt/torque' --define '_name
<br>
openmpi-pgi8' --define 'use_default_rpm_opt_flags 0'
<br>
openmpi-1.4.3.spec
<br>
<p>--Jim
<br>
<p>On Mon, Jun 29, 2009 at 4:24 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jun 29, 2009, at 7:18 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That sounds good; I'm glad there are a variety of tools out there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, this now brings me back to my origional problem. &#160;I was
</span><br>
<span class="quotelev2">&gt;&gt; successful at compiling openmpi after disabling vt, but if I want to
</span><br>
<span class="quotelev2">&gt;&gt; use (some of) these tools, I'll need that enabled...So how do I fix
</span><br>
<span class="quotelev2">&gt;&gt; the actual problem and compile openmpi with vt?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the problem has been fixed for the upcoming v1.3.3. &#160;You might
</span><br>
<span class="quotelev1">&gt; want to grab a nightly 1.3.3 pre-release tarball and verify:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; <a href="http://www.open-mpi.org/nightly/v1.3/">http://www.open-mpi.org/nightly/v1.3/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, as a side note, the rpm generation process also mentioned
</span><br>
<span class="quotelev2">&gt;&gt; several files that were &quot;installed but unpackaged&quot;; many of these look
</span><br>
<span class="quotelev2">&gt;&gt; like they should not be:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; warning: Installed (but unpackaged) file(s) found:
</span><br>
<span class="quotelev2">&gt;&gt; &#160; /opt/openmpi-gcc/1.3.2/bin/ompi-checkpoint
</span><br>
<span class="quotelev2">&gt;&gt; &#160; /opt/openmpi-gcc/1.3.2/bin/ompi-clean
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which RPM was this -- the SRPM on the OMPI web site? &#160;If so, can you send
</span><br>
<span class="quotelev1">&gt; your rpmbuild &#160;command line?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="14730.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<li><strong>Previous message:</strong> <a href="14728.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.5 is not detecting oversubscription"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9762.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14746.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="14746.php">Jeff Squyres: "Re: [OMPI users] Compile problems with 1.3.2"</a>
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
