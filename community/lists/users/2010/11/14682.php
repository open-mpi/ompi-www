<?
$subject_val = "[OMPI users] Building OpenMPI 1.5.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 12:47:56 2010" -->
<!-- isoreceived="20101102164756" -->
<!-- sent="Tue, 2 Nov 2010 09:47:51 -0700" -->
<!-- isosent="20101102164751" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="[OMPI users] Building OpenMPI 1.5.x" -->
<!-- id="AANLkTi=p53fmR42RCBib4MySmzWBWDNGgS56i-ZBQpKi_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Building OpenMPI 1.5.x<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-02 12:47:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14683.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Previous message:</strong> <a href="14681.php">Jeff Squyres: "Re: [OMPI users] Question about collective messages implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14683.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Reply:</strong> <a href="14683.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Reply:</strong> <a href="14686.php">Gus Correa: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I finally decided to rebuild openmpi on my cluster (last built when
<br>
1.3.2 was current).  I have a ROCKS cluster, so I need to build RPMs
<br>
to install accross the cluster rebuilds.  Previously, I did so with
<br>
the following command:
<br>
<p>rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
<br>
1' --define 'modules_rpm_name environment-modules' --define
<br>
'build_all_in_one_rpm 0' --define 'configure_options
<br>
--with-tm=/opt/torque' --define '_name openmpi-gcc' --define 'makeopts
<br>
-J8' openmpi-1.3.2.spec
<br>
<p>With 1.5, this fails with:
<br>
<p>configure: WARNING: *** This configure script does not support
<br>
--program-prefix, --program-suffix or --program-transform-name. Users
<br>
are recommended to instead use --prefix with a unique directory and
<br>
make symbolic links as desired for renaming.
<br>
configure: error: *** Cannot continue
<br>
<p>I thought it might have been the --define '_name ...', so I removed
<br>
that, but got the same error.
<br>
<p>For me, the _name is important, as I build for two different compilers
<br>
and need to have the resulting RPMs named accordingly (and have them
<br>
installed in their own /opt/opemmpi-gcc, etc directories).
<br>
<p>Any suggestions how to proceed?  (the specific version of openmpi in
<br>
this case is the one available for download on Nov 2 from the main
<br>
website; obtained via the src.rpm download)
<br>
<p>--Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14683.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Previous message:</strong> <a href="14681.php">Jeff Squyres: "Re: [OMPI users] Question about collective messages implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14683.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Reply:</strong> <a href="14683.php">Jeff Squyres: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Reply:</strong> <a href="14686.php">Gus Correa: "Re: [OMPI users] Building OpenMPI 1.5.x"</a>
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
