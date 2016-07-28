<?
$subject_val = "Re: [OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 09:18:03 2011" -->
<!-- isoreceived="20110104141803" -->
<!-- sent="Tue, 4 Jan 2011 09:17:57 -0500" -->
<!-- isosent="20110104141757" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC" -->
<!-- id="5B83FFFB-663C-40A7-A13F-0AC4D8DF0482_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D2325D9.4070101_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 09:17:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15269.php">Brock Palen: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Previous message:</strong> <a href="15267.php">Paul Kapinos: "[OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC"</a>
<li><strong>In reply to:</strong> <a href="15267.php">Paul Kapinos: "[OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the complete info listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Jan 4, 2011, at 8:51 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to compile the OpenMPI version 1.5.1 on a CentOS  5.5 computer with the default GCC shipped with the distribution, which is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc version 4.1.2 20080704 (Red Hat 4.1.2-48)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configuration failed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; configure:156412: checking location of libltdl
</span><br>
<span class="quotelev1">&gt; configure:156425: result: internal copy
</span><br>
<span class="quotelev1">&gt; configure:156709: WARNING: Failed to build GNU libltdl.  This usually means that something
</span><br>
<span class="quotelev1">&gt; configure:156711: WARNING: is incorrectly setup with your environment. There may be useful information in
</span><br>
<span class="quotelev1">&gt; configure:156713: WARNING: opal/libltdl/config.log.  You can also disable GNU libltdl, which will disable
</span><br>
<span class="quotelev1">&gt; configure:156715: WARNING: dynamic shared object loading, by configuring with --disable-dlopen.
</span><br>
<span class="quotelev1">&gt; configure:156717: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configuration line was was follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./configure --with-openib --with-devel-headers --enable-contrib-no-build=vt --enable-mpi-threads CFLAGS=-O3 -ffast-math -mtune=opteron -m32  CXXFLAGS=-O3 -ffast-math -mtune=opteron -m32 FFLAGS=-O3 -ffast-math -mtune=opteron -m32  FCFLAGS=-O3 -ffast-math -mtune=opteron -m32  F77=gfortran LDFLAGS=-O3 -ffast-math -mtune=opteron -m32  --prefix=/....../MPI/openmpi-1.5.1mt/linux32/gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With a newer version of GCC, version 4.2.4   (and also gcc version 4.5.1) the configuration completed fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does there an error in my way of configuring, or is there a problem in the configure itself? I think the non-ability to configure and build OpenMPI with the default compiler on CentOS 5.5 is still a problem, also other versions of GCC seem not to have the same issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
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
<li><strong>Next message:</strong> <a href="15269.php">Brock Palen: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Previous message:</strong> <a href="15267.php">Paul Kapinos: "[OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC"</a>
<li><strong>In reply to:</strong> <a href="15267.php">Paul Kapinos: "[OMPI users] v1.5.1: configuration failed if compiling on CentOS 5.5 with defauld GCC"</a>
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
