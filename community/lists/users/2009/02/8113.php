<?
$subject_val = "[OMPI users] OpenMPI 1.3.1 rpm build error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 12:01:04 2009" -->
<!-- isoreceived="20090219170104" -->
<!-- sent="Thu, 19 Feb 2009 09:00:59 -0800" -->
<!-- isosent="20090219170059" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.3.1 rpm build error" -->
<!-- id="df8c8a6d0902190900n78d8aeb3r136f6d00ad0890b6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.3.1 rpm build error<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 12:00:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8114.php">Abderezak MEKFOULDJI: "[OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<li><strong>Previous message:</strong> <a href="8112.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8127.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8127.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I'm trying to build openmpi RPMs from the included spec file.  The
<br>
build fails with:
<br>
<p>gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
<br>
-DBINDIR=\&quot;/opt/openmpi-gcc/1.3/bin\&quot;
<br>
-DDATADIR=\&quot;/opt/openmpi-gcc/1.3/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
<br>
-DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
<br>
-fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
<br>
vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o vt_iowrap.o
<br>
vt_iowrap.c
<br>
vt_iowrap.c:1242: error: expected declaration specifiers or '...'
<br>
before numeric constant
<br>
vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
<br>
make[5]: *** [vt_iowrap.o] Error 1
<br>
<p><p>My build command was:
<br>
rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
<br>
1' --define 'modules_rpm_name environment-modules' --define
<br>
'build_all_in_one_rpm 0' --define 'configure_options
<br>
--with-tm=/opt/torque --with-openib=/opt/mlnx-ofed/src/OFED-1.3.1'
<br>
--define '_name openmpi-gcc' openmpi-1.3.spec
<br>
<p>This build for the 1.2.8 worked fine; this is my first attempt at
<br>
building 1.3.1.
<br>
The system is Rocks 5.1 (CentSO 5.2), GCC 4.1.2-42 (CentOS 5.2 default).
<br>
<p>Any suggestions?
<br>
<p>Thanks!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8114.php">Abderezak MEKFOULDJI: "[OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<li><strong>Previous message:</strong> <a href="8112.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8127.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8127.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
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
