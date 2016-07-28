<?
$subject_val = "Re: [OMPI users] Building OpenMPI 1.5.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 14:08:00 2010" -->
<!-- isoreceived="20101102180800" -->
<!-- sent="Tue, 2 Nov 2010 11:07:54 -0700" -->
<!-- isosent="20101102180754" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI 1.5.x" -->
<!-- id="AANLkTimuLV7woRJfGN02Ht5u9ziKZ1-Do=eL9LbUkO26_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CD48A4C5-5988-4D2B-8B21-DD3FBA4360F8_at_cisco.com" -->
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
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-02 14:07:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14685.php">Riccardo Murri: "Re: [OMPI users] MPI-2.2: do you care?"</a>
<li><strong>Previous message:</strong> <a href="14683.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>In reply to:</strong> <a href="14683.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14686.php">Gus Correa: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By build from tarball, are you saying that I can build RPMs from the
<br>
tarball, and it will work?
<br>
<p>(keep in mind that with rocks, all software must be made into RPMs for
<br>
installation)
<br>
<p>--Jim
<br>
<p>On Tue, Nov 2, 2010 at 10:22 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jim --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have an open issue about exactly this with Red Hat. &#160;I am awaiting guidance from them to know how to fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2611">https://svn.open-mpi.org/trac/ompi/ticket/2611</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only workaround for the moment is to build from tarball, not RPM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 2, 2010, at 12:47 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I finally decided to rebuild openmpi on my cluster (last built when
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.2 was current). &#160;I have a ROCKS cluster, so I need to build RPMs
</span><br>
<span class="quotelev2">&gt;&gt; to install accross the cluster rebuilds. &#160;Previously, I did so with
</span><br>
<span class="quotelev2">&gt;&gt; the following command:
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With 1.5, this fails with:
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought it might have been the --define '_name ...', so I removed
</span><br>
<span class="quotelev2">&gt;&gt; that, but got the same error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For me, the _name is important, as I build for two different compilers
</span><br>
<span class="quotelev2">&gt;&gt; and need to have the resulting RPMs named accordingly (and have them
</span><br>
<span class="quotelev2">&gt;&gt; installed in their own /opt/opemmpi-gcc, etc directories).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions how to proceed? &#160;(the specific version of openmpi in
</span><br>
<span class="quotelev2">&gt;&gt; this case is the one available for download on Nov 2 from the main
</span><br>
<span class="quotelev2">&gt;&gt; website; obtained via the src.rpm download)
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="14685.php">Riccardo Murri: "Re: [OMPI users] MPI-2.2: do you care?"</a>
<li><strong>Previous message:</strong> <a href="14683.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>In reply to:</strong> <a href="14683.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14686.php">Gus Correa: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
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
