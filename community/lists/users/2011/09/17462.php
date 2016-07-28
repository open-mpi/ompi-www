<?
$subject_val = "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 28 12:04:51 2011" -->
<!-- isoreceived="20110928160451" -->
<!-- sent="Wed, 28 Sep 2011 12:04:46 -0400" -->
<!-- isosent="20110928160446" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'" -->
<!-- id="EC2376DC-BF21-4307-B59C-5EAAE2C4EF4B_at_cisco.com" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-28 12:04:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17463.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Previous message:</strong> <a href="17461.php">Blosch, Edwin L: "[OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17461.php">Blosch, Edwin L: "[OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17468.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17468.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yowza; that sounds like a configury bug.  :-(
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
<span class="quotelev1">&gt; The FAQ says that I should have to give &#150;with-libnuma explicitly, but I did not do that.   Is there a problem with configure? Or the FAQ?  Or perhaps the system has a configuration peculiarity?
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17463.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Previous message:</strong> <a href="17461.php">Blosch, Edwin L: "[OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17461.php">Blosch, Edwin L: "[OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17468.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17468.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
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
