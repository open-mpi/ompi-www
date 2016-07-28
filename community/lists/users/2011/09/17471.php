<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 29 12:45:16 2011" -->
<!-- isoreceived="20110929164516" -->
<!-- sent="Thu, 29 Sep 2011 10:45:02 -0600" -->
<!-- isosent="20110929164502" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275FE9724A_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275FE967CE_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-29 12:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17472.php">Brice Goglin: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17470.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17468.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17479.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17479.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, Bruce, Reuti, all:
<br>
<p>If I add --without-hwloc in addition to --without-libnuma, then it builds.  Is that a reasonable thing to do?  Is there a better workaround?  This 'hwloc' module looks like it might be important.
<br>
<p>For what it's worth, if there's something wrong with my configure line, let me know what to improve. Otherwise, as weird as &quot;--enable-mca-no-build=maffinity --disable-io-romio --enable-static --disable-shared&quot; may look, I am not trying to build fully static binaries. I have unavoidable need to build OpenMPI on certain machines and then transfer the executables to other machines that are compatable but not identical, and over the years these are the minimal set of configure flags necessary to make that possible. I may revisit these choices at some point, but if they are supposed to work, then I'd rather just keep using them.
<br>
<p>Thanks again,
<br>
<p>Ed
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Blosch, Edwin L
<br>
Sent: Wednesday, September 28, 2011 4:02 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'
<br>
<p>Jeff,  
<br>
<p>I've tried it now adding --without-libnuma.  Actually that did NOT fix the problem, so I can send you the full output from configure if you want, to understand why this &quot;hwloc&quot; function is trying to use a function which appears to be unavailable.  The answers to some of your questions:
<br>
<p>The configure command was this:
<br>
<p>./configure --prefix=/release/cfd/openmpi-intel --without-tm --without-sge --without-lsf --without-psm --without-portals --without-elan --without-slurm --without-loadleveler --without-libnuma --enable-mpirun-prefix-by-default --enable-contrib-no-build=vt --enable-mca-no-build=maffinity --disable-per-user-config-files --disable-io-romio --enable-static --disable-shared --without-openib CXX=/appserv/intel/cce/10.1.021/bin/icpc CC=/appserv/intel/cce/10.1.021/bin/icc 'CFLAGS=  -O2' 'CXXFLAGS=  -O2' F77=/appserv/intel/fce/10.1.021/bin/ifort 'FFLAGS=-D_GNU_SOURCE -traceback  -O2' FC=/appserv/intel/fce/10.1.021/bin/ifort 'FCFLAGS=-D_GNU_SOURCE -traceback  -O2' 'LDFLAGS= -static-intel
<br>
<p>The error messages upon linking the application are unchanged:  
<br>
<span class="quotelev1">&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_alloc_membind':
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x1da): undefined reference to `mbind'
</span><br>
<p>Re: NUMA:  It appears there is a /usr/lib64/libnuma.so but no static version. There is /usr/include/numa.h and /usr/include/numaif.h.
<br>
<p>I don't understand about make V=1. What tree? Somewhere in the OpenMPI build, or in the application compilation itself? Is &quot;V=1&quot; something in the OpenMPI makefile structure?
<br>
<p>Thanks,
<br>
<p>Ed
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Wednesday, September 28, 2011 11:05 AM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'
<br>
<p>Yowza; that sounds like a configury bug.  :-(
<br>
<p>What line were you using to configure Open MPI?  Do you have libnuma installed?  If so, do you have the .h and .so files?  Do you have the .a file?
<br>
<p>Can you send the last few lines of output from a failed &quot;make V=1&quot; in that tree?  (it'll show us the exact commands used to compile/link, etc.)
<br>
<p><p>On Sep 28, 2011, at 11:55 AM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; I am getting some undefined references in building OpenMPI 1.5.4 and I would like to know how to work around it.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The errors look like this:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_alloc_membind':
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x1da): undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x213): undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_set_area_membind':
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x414): undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt; topology-linux.c :(.text+0x46c): undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_get_thisthread_membind':
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x4ff): undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x5ff): undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev1">&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_set_thisthread_membind':
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x7b5): undefined reference to `migrate_pages'
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x7e9): undefined reference to `set_mempolicy'
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x831): undefined reference to `set_mempolicy'
</span><br>
<span class="quotelev1">&gt; make: *** [main] Error 1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; S ome  configure output that is probably relevant:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; checking numaif.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking numaif.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for numaif.h... yes
</span><br>
<span class="quotelev1">&gt; checking for set_mempolicy in -lnuma... yes
</span><br>
<span class="quotelev1">&gt; checking for mbind in -lnuma... yes
</span><br>
<span class="quotelev1">&gt; checking for migrate_pages in -lnuma... yes
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The FAQ says that I should have to give -with-libnuma explicitly, but I did not do that.   Is there a problem with configure? Or the FAQ?  Or perhaps the system has a configuration peculiarity?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On another system, the configure output is different, and there are no unresolved references:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; checking numaif.h usability... no
</span><br>
<span class="quotelev1">&gt; checking numaif.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for numaif.h... no
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What is the configure option that will make the unresolved references go away?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17472.php">Brice Goglin: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17470.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17468.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17479.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17479.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
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
