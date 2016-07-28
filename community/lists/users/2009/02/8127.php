<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.1 rpm build error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 21:46:38 2009" -->
<!-- isoreceived="20090220024638" -->
<!-- sent="Thu, 19 Feb 2009 21:46:30 -0500" -->
<!-- isosent="20090220024630" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.1 rpm build error" -->
<!-- id="FFD42CBD-BED1-44D9-87EB-F0C63F4C0C24_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0902190900n78d8aeb3r136f6d00ad0890b6_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 21:46:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8128.php">Gerry Creager: "Re: [OMPI users] Error during ./configure."</a>
<li><strong>Previous message:</strong> <a href="8126.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8113.php">Jim Kusznir: "[OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8143.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8143.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no 1.3.1 RPM yet (only a 1.3 RPM) -- what file specifically  
<br>
are you trying to build?
<br>
<p>Could you try building one of the 1.3.1 nightly snapshot tarballs?  I  
<br>
*think* the problem you're seeing is a problem due to FORTIFY_SOURCE  
<br>
in the VT code in 1.3 and should be fixed by now.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.3/">http://www.open-mpi.org/nightly/v1.3/</a>
<br>
<p><p>On Feb 19, 2009, at 12:00 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to build openmpi RPMs from the included spec file.  The
</span><br>
<span class="quotelev1">&gt; build fails with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/opt/openmpi-gcc/1.3/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/opt/openmpi-gcc/1.3/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
</span><br>
<span class="quotelev1">&gt; -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
</span><br>
<span class="quotelev1">&gt; -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
</span><br>
<span class="quotelev1">&gt; vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o vt_iowrap.o
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:1242: error: expected declaration specifiers or '...'
</span><br>
<span class="quotelev1">&gt; before numeric constant
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
</span><br>
<span class="quotelev1">&gt; make[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My build command was:
</span><br>
<span class="quotelev1">&gt; rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
</span><br>
<span class="quotelev1">&gt; 1' --define 'modules_rpm_name environment-modules' --define
</span><br>
<span class="quotelev1">&gt; 'build_all_in_one_rpm 0' --define 'configure_options
</span><br>
<span class="quotelev1">&gt; --with-tm=/opt/torque --with-openib=/opt/mlnx-ofed/src/OFED-1.3.1'
</span><br>
<span class="quotelev1">&gt; --define '_name openmpi-gcc' openmpi-1.3.spec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This build for the 1.2.8 worked fine; this is my first attempt at
</span><br>
<span class="quotelev1">&gt; building 1.3.1.
</span><br>
<span class="quotelev1">&gt; The system is Rocks 5.1 (CentSO 5.2), GCC 4.1.2-42 (CentOS 5.2  
</span><br>
<span class="quotelev1">&gt; default).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8128.php">Gerry Creager: "Re: [OMPI users] Error during ./configure."</a>
<li><strong>Previous message:</strong> <a href="8126.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8113.php">Jim Kusznir: "[OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8143.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8143.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
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
