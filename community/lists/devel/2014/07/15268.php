<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 12:03:21 2014" -->
<!-- isoreceived="20140725160321" -->
<!-- sent="Fri, 25 Jul 2014 09:02:00 -0700" -->
<!-- isosent="20140725160200" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux" -->
<!-- id="C0DBED8A-CE11-40A7-9CAF-2C7563F3D343_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="43BF8B75-9E2F-4728-85B7-6E3C9ADA2787_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 12:02:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15269.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI users] missing link option for	openmpi-1.8.2rc2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="15267.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="15267.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15269.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI users] missing link option for	openmpi-1.8.2rc2 on Linux"</a>
<li><strong>Reply:</strong> <a href="15269.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI users] missing link option for	openmpi-1.8.2rc2 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think it's just libmpi_java that needs that linker flag, so it shouldn't affect anyone else
<br>
<p>On Jul 25, 2014, at 8:59 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OMPI developers --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is &quot;-z noexecstack&quot; a linker option we should test for in configure, and use it if it works?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any side effects that could cause problems?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux
</span><br>
<span class="quotelev2">&gt;&gt; Date: July 25, 2014 at 2:44:48 AM EDT
</span><br>
<span class="quotelev2">&gt;&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;, Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I installed openmpi-1.8.2rc2 on &quot;openSUSE Linux 12.1 x86_64&quot;
</span><br>
<span class="quotelev2">&gt;&gt; with Sun C 5.12 and get the following warning if I run a small
</span><br>
<span class="quotelev2">&gt;&gt; Java program. I get no warning for my gcc-4.9.0 version of
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.8.2rc2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 java 109 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev2">&gt;&gt; Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.8.2_64_cc/lib64/libmpi_java.so.1.2.0 which
</span><br>
<span class="quotelev2">&gt;&gt; might have disabled stack guard. The VM will try to fix the stack
</span><br>
<span class="quotelev2">&gt;&gt; guard now.
</span><br>
<span class="quotelev2">&gt;&gt; It's highly recommended that you fix the library with
</span><br>
<span class="quotelev2">&gt;&gt; 'execstack -c &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 java 110 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would be grateful if somebody can add the link option
</span><br>
<span class="quotelev2">&gt;&gt; '-z noexecstack' to omit the warning. Thank you very much for
</span><br>
<span class="quotelev2">&gt;&gt; your help in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24871.php">http://www.open-mpi.org/community/lists/users/2014/07/24871.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15267.php">http://www.open-mpi.org/community/lists/devel/2014/07/15267.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15269.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI users] missing link option for	openmpi-1.8.2rc2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="15267.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="15267.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15269.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI users] missing link option for	openmpi-1.8.2rc2 on Linux"</a>
<li><strong>Reply:</strong> <a href="15269.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI users] missing link option for	openmpi-1.8.2rc2 on Linux"</a>
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
