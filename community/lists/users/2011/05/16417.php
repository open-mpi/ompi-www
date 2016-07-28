<?
$subject_val = "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 22:21:13 2011" -->
<!-- isoreceived="20110503022113" -->
<!-- sent="Mon, 2 May 2011 20:21:04 -0600" -->
<!-- isosent="20110503022104" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??" -->
<!-- id="BDD32348-4314-4F27-A18B-3BBBC6D88DA2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=FvQ+QsbGUWtL6zxfnvJqPtDx6Lg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 22:21:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16418.php">Ahsan Ali: "[OMPI users] WRF Problem running in Parallel on multiple nodes (cluster)"</a>
<li><strong>Previous message:</strong> <a href="16416.php">Randall Svancara: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>In reply to:</strong> <a href="16415.php">Jim Kusznir: "[OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16422.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Reply:</strong> <a href="16422.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's probably looking for the torque lib in lib instead of lib64. There should be a configure option to tell it --with-tm-libdir or something like that - check &quot;configure -h&quot;
<br>
<p><p>On May 2, 2011, at 6:22 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to build openmpi 1.4.3 against PGI 11.4 on my Rocks 5.1
</span><br>
<span class="quotelev1">&gt; system.  My &quot;tried and true&quot; build command for OpenMPI is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 rpmbuild -bb --define
</span><br>
<span class="quotelev1">&gt; 'install_in_opt 1' --define 'install_modulefile 1' --define
</span><br>
<span class="quotelev1">&gt; 'modules_rpm_name environment-modules' --define 'build_all_in_one_rpm
</span><br>
<span class="quotelev1">&gt; 0'  --define 'configure_options --with-tm=/opt/torque' --define '_name
</span><br>
<span class="quotelev1">&gt; openmpi-pgi2011' --define 'use_default_rpm_opt_flags 0'
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.3.spec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is what I've used to build openmpi 1.4.3 for gcc and against PGI
</span><br>
<span class="quotelev1">&gt; 8.x (our last version of PGI installed).  This time, its not working,
</span><br>
<span class="quotelev1">&gt; though, and with what I consider to be a very strange failure point:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- MCA component plm:tm (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component plm:tm compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking --with-tm value... sanity check ok (/opt/torque)
</span><br>
<span class="quotelev1">&gt; checking for pbs-config... /opt/torque/bin/pbs-config
</span><br>
<span class="quotelev1">&gt; checking tm.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking tm.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for tm.h... yes
</span><br>
<span class="quotelev1">&gt; checking for tm_finalize... no
</span><br>
<span class="quotelev1">&gt; checking tm.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking tm.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for tm.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for tm_init in -lpbs... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib64
</span><br>
<span class="quotelev1">&gt; checking for tm_init in -lpbs... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for tm_init in -ltorque... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib64
</span><br>
<span class="quotelev1">&gt; checking for tm_init in -ltorque... no
</span><br>
<span class="quotelev1">&gt; configure: error: TM support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt; error: Bad exit status from /var/tmp/rpm-tmp.7564 (%build)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, /opt/torque/ is present.  /opt/torque/bin/pbs-config returns:
</span><br>
<span class="quotelev1">&gt; [root_at_aeolus modulefiles]# /opt/torque/bin/pbs-config --prefix
</span><br>
<span class="quotelev1">&gt; /opt/torque
</span><br>
<span class="quotelev1">&gt; [root_at_aeolus modulefiles]# /opt/torque/bin/pbs-config --package
</span><br>
<span class="quotelev1">&gt; pbs
</span><br>
<span class="quotelev1">&gt; [root_at_aeolus modulefiles]# /opt/torque/bin/pbs-config --version
</span><br>
<span class="quotelev1">&gt; 2.3.0
</span><br>
<span class="quotelev1">&gt; [root_at_aeolus modulefiles]# /opt/torque/bin/pbs-config --libs
</span><br>
<span class="quotelev1">&gt; -L/opt/torque/lib64 -ltorque -Wl,--rpath -Wl,/opt/torque/lib64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and /opt/torque/lib64 does have:
</span><br>
<span class="quotelev1">&gt; [root_at_aeolus modulefiles]# ls /opt/torque/lib64
</span><br>
<span class="quotelev1">&gt; libtorque.a  libtorque.la  libtorque.so  libtorque.so.2  libtorque.so.2.0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so I'm a bit dumbfounded as to why configure doesn't &quot;find&quot; torque
</span><br>
<span class="quotelev1">&gt; support...Any suggestions?
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
<li><strong>Next message:</strong> <a href="16418.php">Ahsan Ali: "[OMPI users] WRF Problem running in Parallel on multiple nodes (cluster)"</a>
<li><strong>Previous message:</strong> <a href="16416.php">Randall Svancara: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>In reply to:</strong> <a href="16415.php">Jim Kusznir: "[OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16422.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Reply:</strong> <a href="16422.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
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
