<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI users] missing link option for	openmpi-1.8.2rc2 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 12:29:22 2014" -->
<!-- isoreceived="20140725162922" -->
<!-- sent="Fri, 25 Jul 2014 16:29:21 +0000" -->
<!-- isosent="20140725162921" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI users] missing link option for	openmpi-1.8.2rc2 on Linux" -->
<!-- id="C891322D-B31C-40CE-9E1F-AEA95DC4246C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C0DBED8A-CE11-40A7-9CAF-2C7563F3D343_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI users] missing link option for	openmpi-1.8.2rc2 on Linux<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 12:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15270.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<li><strong>Previous message:</strong> <a href="15268.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="15268.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Understood.  I'm asking, in principle, as to whether we should use -z noexecstack for the whole thing -- i.e., is this just a good &quot;best practice&quot; kind of flag we should enable?
<br>
<p><p>On Jul 25, 2014, at 12:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think it's just libmpi_java that needs that linker flag, so it shouldn't affect anyone else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 25, 2014, at 8:59 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI developers --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is &quot;-z noexecstack&quot; a linker option we should test for in configure, and use it if it works?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are there any side effects that could cause problems?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: July 25, 2014 at 2:44:48 AM EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;, Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed openmpi-1.8.2rc2 on &quot;openSUSE Linux 12.1 x86_64&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Sun C 5.12 and get the following warning if I run a small
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Java program. I get no warning for my gcc-4.9.0 version of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.8.2rc2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 java 109 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.8.2_64_cc/lib64/libmpi_java.so.1.2.0 which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might have disabled stack guard. The VM will try to fix the stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guard now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's highly recommended that you fix the library with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'execstack -c &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc1 java 110 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would be grateful if somebody can add the link option
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '-z noexecstack' to omit the warning. Thank you very much for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your help in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24871.php">http://www.open-mpi.org/community/lists/users/2014/07/24871.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15267.php">http://www.open-mpi.org/community/lists/devel/2014/07/15267.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15268.php">http://www.open-mpi.org/community/lists/devel/2014/07/15268.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15270.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<li><strong>Previous message:</strong> <a href="15268.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="15268.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux"</a>
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
