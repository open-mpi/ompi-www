<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar 24 08:39:14 2007" -->
<!-- isoreceived="20070324123914" -->
<!-- sent="Sat, 24 Mar 2007 08:38:43 -0400" -->
<!-- isosent="20070324123843" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] install error" -->
<!-- id="7FC46FBA-3631-4077-976E-3045D675FA64_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="9E8869B62C56004781914D8107A36DEF010D001F_at_email.corp.hydropoint.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-24 08:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2913.php">Jeff Squyres: "Re: [OMPI users] Problems compiling openmpi 1.2 under AIX 5.2"</a>
<li><strong>Previous message:</strong> <a href="2911.php">Jeff Squyres: "Re: [OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<li><strong>In reply to:</strong> <a href="2906.php">Dan Dansereau: "[OMPI users] install error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dan --
<br>
<p>Your attachments didn't seem to make it through.  Could you re-send?
<br>
<p>Thanks
<br>
<p><p>On Mar 23, 2007, at 7:01 PM, Dan Dansereau wrote:
<br>
<p><span class="quotelev1">&gt; To ALL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting the following error while attempting to install  
</span><br>
<span class="quotelev1">&gt; openmpi on a Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System &#150; as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux utahwtm.hydropoint.com 2.6.9-42.0.2.ELsmp #1 SMP Wed Aug 23  
</span><br>
<span class="quotelev1">&gt; 13:38:27 BST 2006 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with the  lntel compilers that are the latest versions of 9.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is the ERROR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: icc -O3 -DNDEBUG -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -restrict -pthread -o opal_wrapper opal_wrapper.o -Wl,-- 
</span><br>
<span class="quotelev1">&gt; export-dynamic  -pthread ../../../opal/.libs/libopen-pal.a -lnsl - 
</span><br>
<span class="quotelev1">&gt; lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(opal_ptmalloc2_munmap.o)(.text 
</span><br>
<span class="quotelev1">&gt; +0x1d): In function `munmap':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; : undefined reference to `__munmap'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(opal_ptmalloc2_munmap.o)(.text 
</span><br>
<span class="quotelev1">&gt; +0x52): In function `opal_mem_free_ptmalloc2_munmap':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; : undefined reference to `__munmap'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(opal_ptmalloc2_munmap.o)(.text 
</span><br>
<span class="quotelev1">&gt; +0x66): In function `mmap':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; : undefined reference to `__mmap'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(opal_ptmalloc2_munmap.o)(.text 
</span><br>
<span class="quotelev1">&gt; +0x8d): In function `opal_mem_free_ptmalloc2_mmap':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; : undefined reference to `__mmap'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/dad/model/openmpi-1.2/opal/tools/ 
</span><br>
<span class="quotelev1">&gt; wrappers'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/dad/model/openmpi-1.2/opal'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the config command was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort --disable-shared -- 
</span><br>
<span class="quotelev1">&gt; enable-static --prefix=/model/OPENMP_I
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and executed with no errors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached both the config.log and the compile.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help or direction would greatly be appreciated.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2913.php">Jeff Squyres: "Re: [OMPI users] Problems compiling openmpi 1.2 under AIX 5.2"</a>
<li><strong>Previous message:</strong> <a href="2911.php">Jeff Squyres: "Re: [OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<li><strong>In reply to:</strong> <a href="2906.php">Dan Dansereau: "[OMPI users] install error"</a>
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
