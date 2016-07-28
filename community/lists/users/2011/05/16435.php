<?
$subject_val = "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 18:21:42 2011" -->
<!-- isoreceived="20110503222142" -->
<!-- sent="Tue, 3 May 2011 15:21:36 -0700" -->
<!-- isosent="20110503222136" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??" -->
<!-- id="BANLkTinLuzhBwRp4PSVpNnydA+2pDWtDgQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="32E9DC15-D5A3-43A2-BEDB-6A96AFF5290D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 18:21:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16436.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Previous message:</strong> <a href="16434.php">Paul Cizmas: "[OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7"</a>
<li><strong>In reply to:</strong> <a href="16422.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16436.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Reply:</strong> <a href="16436.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My gzipp'ed config.log is attached.  Thanks!
<br>
--Jim
<br>
<p>On Tue, May 3, 2011 at 4:52 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It should search both tmdir/lib and tmdir/lib64 by default, IIRC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please send your config.log (please compress); it'll contain the specific reason why configure didn't find libtorque.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 2, 2011, at 10:21 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's probably looking for the torque lib in lib instead of lib64. There should be a configure option to tell it --with-tm-libdir or something like that - check &quot;configure -h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 2, 2011, at 6:22 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to build openmpi 1.4.3 against PGI 11.4 on my Rocks 5.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system. &#160;My &quot;tried and true&quot; build command for OpenMPI is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 rpmbuild -bb --define
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'install_in_opt 1' --define 'install_modulefile 1' --define
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'modules_rpm_name environment-modules' --define 'build_all_in_one_rpm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0' &#160;--define 'configure_options --with-tm=/opt/torque' --define '_name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-pgi2011' --define 'use_default_rpm_opt_flags 0'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.4.3.spec
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is what I've used to build openmpi 1.4.3 for gcc and against PGI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8.x (our last version of PGI installed). &#160;This time, its not working,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though, and with what I consider to be a very strange failure point:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- MCA component plm:tm (m4 configuration macro)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for MCA component plm:tm compile mode... dso
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking --with-tm value... sanity check ok (/opt/torque)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for pbs-config... /opt/torque/bin/pbs-config
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking tm.h usability... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking tm.h presence... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for tm.h... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for tm_finalize... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking tm.h usability... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking tm.h presence... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for tm.h... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for library in lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for tm_init in -lpbs... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for library in lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for tm_init in -lpbs... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for library in lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for tm_init in -ltorque... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for library in lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for tm_init in -ltorque... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: TM support requested but not found. &#160;Aborting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: Bad exit status from /var/tmp/rpm-tmp.7564 (%build)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, /opt/torque/ is present. &#160;/opt/torque/bin/pbs-config returns:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_aeolus modulefiles]# /opt/torque/bin/pbs-config --prefix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_aeolus modulefiles]# /opt/torque/bin/pbs-config --package
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pbs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_aeolus modulefiles]# /opt/torque/bin/pbs-config --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.3.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_aeolus modulefiles]# /opt/torque/bin/pbs-config --libs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/opt/torque/lib64 -ltorque -Wl,--rpath -Wl,/opt/torque/lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and /opt/torque/lib64 does have:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_aeolus modulefiles]# ls /opt/torque/lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtorque.a &#160;libtorque.la &#160;libtorque.so &#160;libtorque.so.2 &#160;libtorque.so.2.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so I'm a bit dumbfounded as to why configure doesn't &quot;find&quot; torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support...Any suggestions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --Jim
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16435/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16436.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Previous message:</strong> <a href="16434.php">Paul Cizmas: "[OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7"</a>
<li><strong>In reply to:</strong> <a href="16422.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16436.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Reply:</strong> <a href="16436.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
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
