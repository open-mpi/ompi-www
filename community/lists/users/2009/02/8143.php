<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.1 rpm build error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 14:21:06 2009" -->
<!-- isoreceived="20090220192106" -->
<!-- sent="Fri, 20 Feb 2009 11:20:58 -0800" -->
<!-- isosent="20090220192058" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.1 rpm build error" -->
<!-- id="df8c8a6d0902201120w41744b53xb56cd119de1db5bd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FFD42CBD-BED1-44D9-87EB-F0C63F4C0C24_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.1 rpm build error<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 14:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8142.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8127.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just went to www.open-mpi.org, went to download, then source rpm.
<br>
Looks like it was actually 1.3-1.  Here's the src.rpm that I pulled
<br>
in:
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.3/downloads/openmpi-1.3-1.src.rpm">http://www.open-mpi.org/software/ompi/v1.3/downloads/openmpi-1.3-1.src.rpm</a>
<br>
<p>The reason for this upgrade is it seems a user found some bug that may
<br>
be in the OpenMPI code that results in occasionally an MPI_Send()
<br>
message getting lost.  He's managed to reproduce it multiple times,
<br>
and we can't find anything in his code that can cause it...He's got
<br>
logs of mpi_send() going out, but the matching mpi_receive() never
<br>
getting anything, thus killing his code.  We're currently running
<br>
1.2.8 with ofed support (Haven't tried turning off ofed, etc. yet).
<br>
<p><p>--Jim
<br>
<p>On Thu, Feb 19, 2009 at 6:46 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; There is no 1.3.1 RPM yet (only a 1.3 RPM) -- what file specifically are you
</span><br>
<span class="quotelev1">&gt; trying to build?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you try building one of the 1.3.1 nightly snapshot tarballs?  I
</span><br>
<span class="quotelev1">&gt; *think* the problem you're seeing is a problem due to FORTIFY_SOURCE in the
</span><br>
<span class="quotelev1">&gt; VT code in 1.3 and should be fixed by now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/nightly/v1.3/">http://www.open-mpi.org/nightly/v1.3/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 19, 2009, at 12:00 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to build openmpi RPMs from the included spec file.  The
</span><br>
<span class="quotelev2">&gt;&gt; build fails with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev2">&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev2">&gt;&gt; -DBINDIR=\&quot;/opt/openmpi-gcc/1.3/bin\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DDATADIR=\&quot;/opt/openmpi-gcc/1.3/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
</span><br>
<span class="quotelev2">&gt;&gt; -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
</span><br>
<span class="quotelev2">&gt;&gt; -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
</span><br>
<span class="quotelev2">&gt;&gt; vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o vt_iowrap.o
</span><br>
<span class="quotelev2">&gt;&gt; vt_iowrap.c
</span><br>
<span class="quotelev2">&gt;&gt; vt_iowrap.c:1242: error: expected declaration specifiers or '...'
</span><br>
<span class="quotelev2">&gt;&gt; before numeric constant
</span><br>
<span class="quotelev2">&gt;&gt; vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My build command was:
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
</span><br>
<span class="quotelev2">&gt;&gt; 1' --define 'modules_rpm_name environment-modules' --define
</span><br>
<span class="quotelev2">&gt;&gt; 'build_all_in_one_rpm 0' --define 'configure_options
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm=/opt/torque --with-openib=/opt/mlnx-ofed/src/OFED-1.3.1'
</span><br>
<span class="quotelev2">&gt;&gt; --define '_name openmpi-gcc' openmpi-1.3.spec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This build for the 1.2.8 worked fine; this is my first attempt at
</span><br>
<span class="quotelev2">&gt;&gt; building 1.3.1.
</span><br>
<span class="quotelev2">&gt;&gt; The system is Rocks 5.1 (CentSO 5.2), GCC 4.1.2-42 (CentOS 5.2 default).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
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
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8142.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8127.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8144.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
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
