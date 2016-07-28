<?
$subject_val = "Re: [OMPI users] error on malloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 10:24:49 2011" -->
<!-- isoreceived="20110912142449" -->
<!-- sent="Mon, 12 Sep 2011 10:24:44 -0400" -->
<!-- isosent="20110912142444" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error on malloc" -->
<!-- id="D183799F-1448-4D9E-84C9-ED27127BE7A8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJ-YiTBqK4mo1jb6ugGvdbmLjO-HK7UnTzn8_8S=aQNxVUdhw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error on malloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 10:24:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17219.php">Shamis, Pavel: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17217.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband Error"</a>
<li><strong>In reply to:</strong> <a href="17155.php">Jai Dayal: "[OMPI users] error on malloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This usually means that you have a memory error of some kind in your application.
<br>
<p>Have you tried running your application through a memory-checking debugger, such as valgrind?
<br>
<p><p>On Sep 5, 2011, at 3:48 AM, Jai Dayal wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;   I've been beating my head on this for quite a while now.  I don't have this problem when running with 1,2, or 3 procs, however, once I get to 4 or beyond, I have a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I call malloc, I get this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; txserver:11055 terminated with signal 11 at PC=2b46886bc18a SP=7fff20f51030.  Backtrace:
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-4.3.4/openmpi-1.4.3_oobpr/lib/libopen-pal.so.0(opal_memory_ptmalloc2_int_malloc+0x54a)[0x2b46886bc18a]
</span><br>
<span class="quotelev1">&gt; /apps/x86_64/mpi/openmpi/gcc-4.3.4/openmpi-1.4.3_oobpr/lib/libopen-pal.so.0[0x2b46886bd4f3]
</span><br>
<span class="quotelev1">&gt; txserver[0x415769]
</span><br>
<span class="quotelev1">&gt; txserver[0x40da8c]
</span><br>
<span class="quotelev1">&gt; txserver[0x4344bb]
</span><br>
<span class="quotelev1">&gt; txserver[0x4351cd]
</span><br>
<span class="quotelev1">&gt; txserver[0x40e3d4]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xf4)[0x2b468a5af994]
</span><br>
<span class="quotelev1">&gt; txserver(_ZNSt8ios_base4InitD1Ev+0x39)[0x40c889]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, only rank 0 calls this function.  Which is strange.  I can just put a dummy malloc in there (int * dummy = (int *)malloc(10);) for example, and it will still crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, this does not happen with n &lt; 4 procs.  The crash happens on rank 0, as it's the only rank that calls this code...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm perplexed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; J.D.
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17219.php">Shamis, Pavel: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17217.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband Error"</a>
<li><strong>In reply to:</strong> <a href="17155.php">Jai Dayal: "[OMPI users] error on malloc"</a>
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
