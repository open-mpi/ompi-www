<?
$subject_val = "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 28 12:09:39 2011" -->
<!-- isoreceived="20110928160939" -->
<!-- sent="Wed, 28 Sep 2011 18:09:32 +0200" -->
<!-- isosent="20110928160932" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'" -->
<!-- id="4E8346BC.4090906_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275FE48FFA_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-28 12:09:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17465.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Previous message:</strong> <a href="17463.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>In reply to:</strong> <a href="17461.php">Blosch, Edwin L: "[OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17466.php">Reuti: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17466.php">Reuti: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/09/2011 17:55, Blosch, Edwin L a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting some undefined references in building OpenMPI 1.5.4 and I
</span><br>
<span class="quotelev1">&gt; would like to know how to work around it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The errors look like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_alloc_membind':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x1da): undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x213): undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_set_area_membind':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x414): undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; topology-linux.c :(.text+0x46c): undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_get_thisthread_membind':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x4ff): undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x5ff): undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_set_thisthread_membind':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x7b5): undefined reference to `migrate_pages'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x7e9): undefined reference to `set_mempolicy'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x831): undefined reference to `set_mempolicy'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make: *** [main] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; S ome  configure output that is probably relevant:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking numaif.h usability... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking numaif.h presence... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for numaif.h... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for set_mempolicy in -lnuma... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for mbind in -lnuma... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for migrate_pages in -lnuma... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The FAQ says that I should have to give --with-libnuma explicitly, but
</span><br>
<span class="quotelev1">&gt; I did not do that.   Is there a problem with configure? Or the FAQ? 
</span><br>
<span class="quotelev1">&gt; Or perhaps the system has a configuration peculiarity?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Last time somebody complained about this, he was trying to build
<br>
fully-static binaries but libnuma was only available as dynamic libs.
<br>
Configure only checks for dynamic libs. So it thinks libnuma is
<br>
available while the required static libnuma was actually missing,
<br>
causing make to fail later.
<br>
<p>How did you configure and build, what's your distro, and do you have
<br>
libnume static/dynamic installed ?
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17464/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17465.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Previous message:</strong> <a href="17463.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>In reply to:</strong> <a href="17461.php">Blosch, Edwin L: "[OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17466.php">Reuti: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17466.php">Reuti: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
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
