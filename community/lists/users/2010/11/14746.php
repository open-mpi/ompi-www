<?
$subject_val = "Re: [OMPI users] Compile problems with 1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 12 12:05:24 2010" -->
<!-- isoreceived="20101112170524" -->
<!-- sent="Fri, 12 Nov 2010 12:05:19 -0500" -->
<!-- isosent="20101112170519" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile problems with 1.3.2" -->
<!-- id="45ECBCF9-0095-45C3-9FC6-6F3E7268846C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikMDi70o228MDUULZHN+Vjo+EYYZ+=zw77Crtho_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-12 12:05:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14747.php">Martin Siegert: "[OMPI users] memory allocation - Fortran"</a>
<li><strong>Previous message:</strong> <a href="14745.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="14729.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9763.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 10, 2010, at 4:37 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; (working command):
</span><br>
<span class="quotelev1">&gt; rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
</span><br>
<span class="quotelev1">&gt; 1' --define 'modules_rpm_name environment-modules' --define
</span><br>
<span class="quotelev1">&gt; 'build_all_in_one_rpm 0' --define 'configure_options
</span><br>
<span class="quotelev1">&gt; --with-tm=/opt/torque --enable-contrib-no-build=vt' --define '_name
</span><br>
<span class="quotelev1">&gt; openmpi-gcc' openmpi-1.4.3.spec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (broke command)
</span><br>
<span class="quotelev1">&gt; rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
</span><br>
<span class="quotelev1">&gt; 1' --define 'modules_rpm_name environment-modules' --define
</span><br>
<span class="quotelev1">&gt; 'build_all_in_one_rpm 0' --define 'configure_options
</span><br>
<span class="quotelev1">&gt; --with-tm=/opt/torque' --define '_name openmpi-gcc' openmpi-1.4.3.spec
</span><br>
<p>Weird -- you're saying that *without* --enable-contrib-no-build=vt, the 1.4.3 SRPM fails to build?  
<br>
<p>Can you send the output from the rpmbuild command so that we can see the error?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="14747.php">Martin Siegert: "[OMPI users] memory allocation - Fortran"</a>
<li><strong>Previous message:</strong> <a href="14745.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="14729.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9763.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
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
