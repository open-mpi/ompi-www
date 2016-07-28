<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 30 09:45:00 2011" -->
<!-- isoreceived="20110930134500" -->
<!-- sent="Fri, 30 Sep 2011 07:59:04 -0400" -->
<!-- isosent="20110930115904" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'" -->
<!-- id="DFC72BF4-38E5-4BD8-B480-2B9B1852CAB6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-30 07:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17479.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17477.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>In reply to:</strong> <a href="17468.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17464.php">Brice Goglin: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2011, at 5:02 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; ./configure --prefix=/release/cfd/openmpi-intel --without-tm --without-sge --without-lsf --without-psm --without-portals --without-elan --without-slurm --without-loadleveler --without-libnuma --enable-mpirun-prefix-by-default --enable-contrib-no-build=vt --enable-mca-no-build=maffinity --disable-per-user-config-files --disable-io-romio --enable-static --disable-shared --without-openib CXX=/appserv/intel/cce/10.1.021/bin/icpc CC=/appserv/intel/cce/10.1.021/bin/icc 'CFLAGS=  -O2' 'CXXFLAGS=  -O2' F77=/appserv/intel/fce/10.1.021/bin/ifort 'FFLAGS=-D_GNU_SOURCE -traceback  -O2' FC=/appserv/intel/fce/10.1.021/bin/ifort 'FCFLAGS=-D_GNU_SOURCE -traceback  -O2' 'LDFLAGS= -static-intel
</span><br>
<p>The weird thing here is that I am unable to replicate this issue.  :-\
<br>
<p>I thought that if I tried essentially the same configure line as above, I should see the same issue, because I have libnuma.so and no libnuma.a.  But it worked fine (i.e., OMPI build and installed fine, and I'm able to compile/link MPI applications just fine).  Huh.
<br>
<p><span class="quotelev1">&gt; The error messages upon linking the application are unchanged:  
</span><br>
<span class="quotelev2">&gt;&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_alloc_membind':
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x1da): undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Re: NUMA:  It appears there is a /usr/lib64/libnuma.so but no static version. There is /usr/include/numa.h and /usr/include/numaif.h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't understand about make V=1. What tree? Somewhere in the OpenMPI build, or in the application compilation itself? Is &quot;V=1&quot; something in the OpenMPI makefile structure?
</span><br>
<p>Sorry, &quot;make V=1&quot; is part of OMPI's build system.  If you &quot;make V=1&quot; in the v1.5 (and later) OMPI, it'll show you the whole compile line instead of the abbreviated output.
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 28, 2011 11:05 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yowza; that sounds like a configury bug.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What line were you using to configure Open MPI?  Do you have libnuma installed?  If so, do you have the .h and .so files?  Do you have the .a file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send the last few lines of output from a failed &quot;make V=1&quot; in that tree?  (it'll show us the exact commands used to compile/link, etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 28, 2011, at 11:55 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am getting some undefined references in building OpenMPI 1.5.4 and I would like to know how to work around it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The errors look like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_alloc_membind':
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x1da): undefined reference to `mbind'
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x213): undefined reference to `mbind'
</span><br>
<span class="quotelev2">&gt;&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_set_area_membind':
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x414): undefined reference to `mbind'
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c :(.text+0x46c): undefined reference to `mbind'
</span><br>
<span class="quotelev2">&gt;&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_get_thisthread_membind':
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x4ff): undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x5ff): undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev2">&gt;&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_set_thisthread_membind':
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x7b5): undefined reference to `migrate_pages'
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x7e9): undefined reference to `set_mempolicy'
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x831): undefined reference to `set_mempolicy'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [main] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; S ome  configure output that is probably relevant:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; checking numaif.h usability... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking numaif.h presence... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for numaif.h... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for set_mempolicy in -lnuma... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for mbind in -lnuma... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for migrate_pages in -lnuma... yes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The FAQ says that I should have to give -with-libnuma explicitly, but I did not do that.   Is there a problem with configure? Or the FAQ?  Or perhaps the system has a configuration peculiarity?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On another system, the configure output is different, and there are no unresolved references:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; checking numaif.h usability... no
</span><br>
<span class="quotelev2">&gt;&gt; checking numaif.h presence... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for numaif.h... no
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is the configure option that will make the unresolved references go away?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ed
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
<li><strong>Next message:</strong> <a href="17479.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17477.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>In reply to:</strong> <a href="17468.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17464.php">Brice Goglin: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
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
