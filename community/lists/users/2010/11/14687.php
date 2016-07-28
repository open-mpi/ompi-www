<?
$subject_val = "Re: [OMPI users] Building OpenMPI 1.5.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 15:59:05 2010" -->
<!-- isoreceived="20101102195905" -->
<!-- sent="Tue, 2 Nov 2010 15:58:59 -0400" -->
<!-- isosent="20101102195859" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI 1.5.x" -->
<!-- id="D371D552-8520-4377-8B4E-EEF65BBE3502_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD06AF6.2080301_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2010-11-02 15:58:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14688.php">Prentice Bisbal: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14686.php">Gus Correa: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>In reply to:</strong> <a href="14686.php">Gus Correa: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The issue is described in the ticket that I cited -- we used a newer version of the GNU Autotools to bootstrap the v1.5 series than the v1.4 series.  The RPM macros that ship with RHEL 5 and 6 (and I think SLES 11?) don't seem to be compatible with this version -- so I'm not quite sure what the Right solution is.
<br>
<p>To be clear: the v1.4 series will continue to be unaffected by this issue because we pick a set of versions of the GNU autotools for a release series and stick with it for the life of the series.  It's only the v1.5 series that is problematic here.
<br>
<p>One workaround, as indirectly implied by #2611, would be to edit /usr/lib/rpm/macros and edit the &quot;%configure&quot; macro to remove the --program-suffix and --program-prefix clauses from it.  Then build the Open MPI RPM, and then restore those clauses in /usr/lib/rpm/macros.  This is icky and not a good solution, but it'll work.
<br>
<p><p><p>On Nov 2, 2010, at 3:48 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please, read what the OpenMPI folks say about the 1.5 release:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;PLEASE NOTE: According to Open MPI's release methodology, the v1.5 series is a &quot;feature release&quot; series. This means that it has rich new features that we think are tested and stable, but they are not as mature as the stable &quot;bug fix&quot; v1.4 series. If you are looking for ultra stability, you should probably be using the v1.4 series.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given this, rather than going to the cutting edge,
</span><br>
<span class="quotelev1">&gt; I continue to use 1.4.2 (but should upgrade to 1.4.3).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can download the 1.4 series, and the older releases as well.
</span><br>
<span class="quotelev1">&gt; Just look at the menu on the LHS of their web page under &quot;Download&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 1.4.2 &quot;configure --help&quot; still shows this (although I only use --prefix):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program names:
</span><br>
<span class="quotelev1">&gt;  --program-prefix=PREFIX            prepend PREFIX to installed program names
</span><br>
<span class="quotelev1">&gt;  --program-suffix=SUFFIX            append SUFFIX to installed program names
</span><br>
<span class="quotelev1">&gt;  --program-transform-name=PROGRAM   run sed PROGRAM on installed program names
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jim Kusznir wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all:
</span><br>
<span class="quotelev2">&gt;&gt; I finally decided to rebuild openmpi on my cluster (last built when
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.2 was current).  I have a ROCKS cluster, so I need to build RPMs
</span><br>
<span class="quotelev2">&gt;&gt; to install accross the cluster rebuilds.  Previously, I did so with
</span><br>
<span class="quotelev2">&gt;&gt; the following command:
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
</span><br>
<span class="quotelev2">&gt;&gt; 1' --define 'modules_rpm_name environment-modules' --define
</span><br>
<span class="quotelev2">&gt;&gt; 'build_all_in_one_rpm 0' --define 'configure_options
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm=/opt/torque' --define '_name openmpi-gcc' --define 'makeopts
</span><br>
<span class="quotelev2">&gt;&gt; -J8' openmpi-1.3.2.spec
</span><br>
<span class="quotelev2">&gt;&gt; With 1.5, this fails with:
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** This configure script does not support
</span><br>
<span class="quotelev2">&gt;&gt; --program-prefix, --program-suffix or --program-transform-name. Users
</span><br>
<span class="quotelev2">&gt;&gt; are recommended to instead use --prefix with a unique directory and
</span><br>
<span class="quotelev2">&gt;&gt; make symbolic links as desired for renaming.
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: *** Cannot continue
</span><br>
<span class="quotelev2">&gt;&gt; I thought it might have been the --define '_name ...', so I removed
</span><br>
<span class="quotelev2">&gt;&gt; that, but got the same error.
</span><br>
<span class="quotelev2">&gt;&gt; For me, the _name is important, as I build for two different compilers
</span><br>
<span class="quotelev2">&gt;&gt; and need to have the resulting RPMs named accordingly (and have them
</span><br>
<span class="quotelev2">&gt;&gt; installed in their own /opt/opemmpi-gcc, etc directories).
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions how to proceed?  (the specific version of openmpi in
</span><br>
<span class="quotelev2">&gt;&gt; this case is the one available for download on Nov 2 from the main
</span><br>
<span class="quotelev2">&gt;&gt; website; obtained via the src.rpm download)
</span><br>
<span class="quotelev2">&gt;&gt; --Jim
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="14688.php">Prentice Bisbal: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14686.php">Gus Correa: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>In reply to:</strong> <a href="14686.php">Gus Correa: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
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
