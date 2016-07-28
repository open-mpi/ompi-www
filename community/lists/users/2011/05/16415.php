<?
$subject_val = "[OMPI users] Building openmpi with PGI 11.4: won't find torque??";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 20:22:52 2011" -->
<!-- isoreceived="20110503002252" -->
<!-- sent="Mon, 2 May 2011 17:22:48 -0700" -->
<!-- isosent="20110503002248" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="[OMPI users] Building openmpi with PGI 11.4: won't find torque??" -->
<!-- id="BANLkTi=FvQ+QsbGUWtL6zxfnvJqPtDx6Lg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Building openmpi with PGI 11.4: won't find torque??<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 20:22:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16416.php">Randall Svancara: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Previous message:</strong> <a href="16414.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16416.php">Randall Svancara: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Reply:</strong> <a href="16416.php">Randall Svancara: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Reply:</strong> <a href="16417.php">Ralph Castain: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I'm trying to build openmpi 1.4.3 against PGI 11.4 on my Rocks 5.1
<br>
system.  My &quot;tried and true&quot; build command for OpenMPI is:
<br>
<p>CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 rpmbuild -bb --define
<br>
'install_in_opt 1' --define 'install_modulefile 1' --define
<br>
'modules_rpm_name environment-modules' --define 'build_all_in_one_rpm
<br>
0'  --define 'configure_options --with-tm=/opt/torque' --define '_name
<br>
openmpi-pgi2011' --define 'use_default_rpm_opt_flags 0'
<br>
openmpi-1.4.3.spec
<br>
<p>This is what I've used to build openmpi 1.4.3 for gcc and against PGI
<br>
8.x (our last version of PGI installed).  This time, its not working,
<br>
though, and with what I consider to be a very strange failure point:
<br>
<p>--- MCA component plm:tm (m4 configuration macro)
<br>
checking for MCA component plm:tm compile mode... dso
<br>
checking --with-tm value... sanity check ok (/opt/torque)
<br>
checking for pbs-config... /opt/torque/bin/pbs-config
<br>
checking tm.h usability... yes
<br>
checking tm.h presence... yes
<br>
checking for tm.h... yes
<br>
checking for tm_finalize... no
<br>
checking tm.h usability... yes
<br>
checking tm.h presence... yes
<br>
checking for tm.h... yes
<br>
looking for library in lib
<br>
checking for tm_init in -lpbs... no
<br>
looking for library in lib64
<br>
checking for tm_init in -lpbs... no
<br>
looking for library in lib
<br>
checking for tm_init in -ltorque... no
<br>
looking for library in lib64
<br>
checking for tm_init in -ltorque... no
<br>
configure: error: TM support requested but not found.  Aborting
<br>
error: Bad exit status from /var/tmp/rpm-tmp.7564 (%build)
<br>
<p><p>However, /opt/torque/ is present.  /opt/torque/bin/pbs-config returns:
<br>
[root_at_aeolus modulefiles]# /opt/torque/bin/pbs-config --prefix
<br>
/opt/torque
<br>
[root_at_aeolus modulefiles]# /opt/torque/bin/pbs-config --package
<br>
pbs
<br>
[root_at_aeolus modulefiles]# /opt/torque/bin/pbs-config --version
<br>
2.3.0
<br>
[root_at_aeolus modulefiles]# /opt/torque/bin/pbs-config --libs
<br>
-L/opt/torque/lib64 -ltorque -Wl,--rpath -Wl,/opt/torque/lib64
<br>
<p>and /opt/torque/lib64 does have:
<br>
[root_at_aeolus modulefiles]# ls /opt/torque/lib64
<br>
libtorque.a  libtorque.la  libtorque.so  libtorque.so.2  libtorque.so.2.0.0
<br>
<p>so I'm a bit dumbfounded as to why configure doesn't &quot;find&quot; torque
<br>
support...Any suggestions?
<br>
<p>--Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16416.php">Randall Svancara: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Previous message:</strong> <a href="16414.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16416.php">Randall Svancara: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Reply:</strong> <a href="16416.php">Randall Svancara: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Reply:</strong> <a href="16417.php">Ralph Castain: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
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
