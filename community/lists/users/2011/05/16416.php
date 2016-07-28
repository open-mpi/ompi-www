<?
$subject_val = "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 22:19:58 2011" -->
<!-- isoreceived="20110503021958" -->
<!-- sent="Mon, 2 May 2011 19:19:53 -0700" -->
<!-- isosent="20110503021953" -->
<!-- name="Randall Svancara" -->
<!-- email="rsvancara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??" -->
<!-- id="BANLkTinXz64_J_H3Et+=0BPb4GpHPupqLw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Randall Svancara (<em>rsvancara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 22:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16417.php">Ralph Castain: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Previous message:</strong> <a href="16415.php">Jim Kusznir: "[OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>In reply to:</strong> <a href="16415.php">Jim Kusznir: "[OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16417.php">Ralph Castain: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe I was having this same issue until I switched to the 2.5.x
<br>
series of torque.  I will have to check my notes which are at work,
<br>
but it is something to try at least.  It seems this should not matter.
<br>
<p>Maybe try setting the ld_library_path or adding /opt/torque/lib.  I am
<br>
not familiar with the PGI compilers, but I have had decent luck with
<br>
the Intel compilers.
<br>
<p>Best of luck!
<br>
<p>Randall
<br>
<p>On Mon, May 2, 2011 at 5:22 PM, Jim Kusznir &lt;jkusznir_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to build openmpi 1.4.3 against PGI 11.4 on my Rocks 5.1
</span><br>
<span class="quotelev1">&gt; system. &#160;My &quot;tried and true&quot; build command for OpenMPI is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 rpmbuild -bb --define
</span><br>
<span class="quotelev1">&gt; 'install_in_opt 1' --define 'install_modulefile 1' --define
</span><br>
<span class="quotelev1">&gt; 'modules_rpm_name environment-modules' --define 'build_all_in_one_rpm
</span><br>
<span class="quotelev1">&gt; 0' &#160;--define 'configure_options --with-tm=/opt/torque' --define '_name
</span><br>
<span class="quotelev1">&gt; openmpi-pgi2011' --define 'use_default_rpm_opt_flags 0'
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.3.spec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is what I've used to build openmpi 1.4.3 for gcc and against PGI
</span><br>
<span class="quotelev1">&gt; 8.x (our last version of PGI installed). &#160;This time, its not working,
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
<span class="quotelev1">&gt; configure: error: TM support requested but not found. &#160;Aborting
</span><br>
<span class="quotelev1">&gt; error: Bad exit status from /var/tmp/rpm-tmp.7564 (%build)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, /opt/torque/ is present. &#160;/opt/torque/bin/pbs-config returns:
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
<span class="quotelev1">&gt; libtorque.a &#160;libtorque.la &#160;libtorque.so &#160;libtorque.so.2 &#160;libtorque.so.2.0.0
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Randall Svancara
<a href="http://knowyourlinux.com/">http://knowyourlinux.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16417.php">Ralph Castain: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Previous message:</strong> <a href="16415.php">Jim Kusznir: "[OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>In reply to:</strong> <a href="16415.php">Jim Kusznir: "[OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16417.php">Ralph Castain: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
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
