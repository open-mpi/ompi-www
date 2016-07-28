<?
$subject_val = "Re: [OMPI users] Building OpenMPI 1.5.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 15:48:16 2010" -->
<!-- isoreceived="20101102194816" -->
<!-- sent="Tue, 02 Nov 2010 15:48:06 -0400" -->
<!-- isosent="20101102194806" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI 1.5.x" -->
<!-- id="4CD06AF6.2080301_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-02 15:48:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14687.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Previous message:</strong> <a href="14685.php">Riccardo Murri: "Re: [OMPI users] MPI-2.2: do you care?"</a>
<li><strong>In reply to:</strong> <a href="14682.php">Jim Kusznir: "[OMPI users] Building OpenMPI 1.5.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14687.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Reply:</strong> <a href="14687.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jim
<br>
<p>Please, read what the OpenMPI folks say about the 1.5 release:
<br>
<p>&quot;PLEASE NOTE: According to Open MPI's release methodology, the v1.5 
<br>
series is a &quot;feature release&quot; series. This means that it has rich new 
<br>
features that we think are tested and stable, but they are not as mature 
<br>
as the stable &quot;bug fix&quot; v1.4 series. If you are looking for ultra 
<br>
stability, you should probably be using the v1.4 series.&quot;
<br>
<p>Given this, rather than going to the cutting edge,
<br>
I continue to use 1.4.2 (but should upgrade to 1.4.3).
<br>
<p>You can download the 1.4 series, and the older releases as well.
<br>
Just look at the menu on the LHS of their web page under &quot;Download&quot;:
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
<br>
<p>The 1.4.2 &quot;configure --help&quot; still shows this (although I only use 
<br>
--prefix):
<br>
<p>Program names:
<br>
&nbsp;&nbsp;&nbsp;--program-prefix=PREFIX            prepend PREFIX to installed 
<br>
program names
<br>
&nbsp;&nbsp;&nbsp;--program-suffix=SUFFIX            append SUFFIX to installed program 
<br>
names
<br>
&nbsp;&nbsp;&nbsp;--program-transform-name=PROGRAM   run sed PROGRAM on installed 
<br>
program names
<br>
<p><p><p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>Jim Kusznir wrote:
<br>
<span class="quotelev1">&gt; Hi all:
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14687.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Previous message:</strong> <a href="14685.php">Riccardo Murri: "Re: [OMPI users] MPI-2.2: do you care?"</a>
<li><strong>In reply to:</strong> <a href="14682.php">Jim Kusznir: "[OMPI users] Building OpenMPI 1.5.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14687.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Reply:</strong> <a href="14687.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
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
