<?
$subject_val = "Re: [OMPI users] Building OpenMPI 1.5.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 13:22:22 2010" -->
<!-- isoreceived="20101102172222" -->
<!-- sent="Tue, 2 Nov 2010 13:22:15 -0400" -->
<!-- isosent="20101102172215" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI 1.5.x" -->
<!-- id="CD48A4C5-5988-4D2B-8B21-DD3FBA4360F8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=p53fmR42RCBib4MySmzWBWDNGgS56i-ZBQpKi_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building OpenMPI 1.5.x<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-02 13:22:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14684.php">Jim Kusznir: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Previous message:</strong> <a href="14682.php">Jim Kusznir: "[OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>In reply to:</strong> <a href="14682.php">Jim Kusznir: "[OMPI users] Building OpenMPI 1.5.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14684.php">Jim Kusznir: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Reply:</strong> <a href="14684.php">Jim Kusznir: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jim -- 
<br>
<p>I have an open issue about exactly this with Red Hat.  I am awaiting guidance from them to know how to fix it.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2611">https://svn.open-mpi.org/trac/ompi/ticket/2611</a>
<br>
<p>The only workaround for the moment is to build from tarball, not RPM.
<br>
<p><p>On Nov 2, 2010, at 12:47 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I finally decided to rebuild openmpi on my cluster (last built when
</span><br>
<span class="quotelev1">&gt; 1.3.2 was current).  I have a ROCKS cluster, so I need to build RPMs
</span><br>
<span class="quotelev1">&gt; to install accross the cluster rebuilds.  Previously, I did so with
</span><br>
<span class="quotelev1">&gt; the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
</span><br>
<span class="quotelev1">&gt; 1' --define 'modules_rpm_name environment-modules' --define
</span><br>
<span class="quotelev1">&gt; 'build_all_in_one_rpm 0' --define 'configure_options
</span><br>
<span class="quotelev1">&gt; --with-tm=/opt/torque' --define '_name openmpi-gcc' --define 'makeopts
</span><br>
<span class="quotelev1">&gt; -J8' openmpi-1.3.2.spec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With 1.5, this fails with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** This configure script does not support
</span><br>
<span class="quotelev1">&gt; --program-prefix, --program-suffix or --program-transform-name. Users
</span><br>
<span class="quotelev1">&gt; are recommended to instead use --prefix with a unique directory and
</span><br>
<span class="quotelev1">&gt; make symbolic links as desired for renaming.
</span><br>
<span class="quotelev1">&gt; configure: error: *** Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought it might have been the --define '_name ...', so I removed
</span><br>
<span class="quotelev1">&gt; that, but got the same error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For me, the _name is important, as I build for two different compilers
</span><br>
<span class="quotelev1">&gt; and need to have the resulting RPMs named accordingly (and have them
</span><br>
<span class="quotelev1">&gt; installed in their own /opt/opemmpi-gcc, etc directories).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions how to proceed?  (the specific version of openmpi in
</span><br>
<span class="quotelev1">&gt; this case is the one available for download on Nov 2 from the main
</span><br>
<span class="quotelev1">&gt; website; obtained via the src.rpm download)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Jim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="14684.php">Jim Kusznir: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Previous message:</strong> <a href="14682.php">Jim Kusznir: "[OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>In reply to:</strong> <a href="14682.php">Jim Kusznir: "[OMPI users] Building OpenMPI 1.5.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14684.php">Jim Kusznir: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Reply:</strong> <a href="14684.php">Jim Kusznir: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
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
