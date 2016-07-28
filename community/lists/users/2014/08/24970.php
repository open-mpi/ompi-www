<?
$subject_val = "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 09:32:39 2014" -->
<!-- isoreceived="20140811133239" -->
<!-- sent="Mon, 11 Aug 2014 13:32:37 +0000" -->
<!-- isosent="20140811133237" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks" -->
<!-- id="AA850AF4-FE4C-4C43-B364-16B5B26B4F6E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9EFF36C-3E9F-4011-9681-BDC0F4E3AF09_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 09:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24971.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Previous message:</strong> <a href="24969.php">Siegmar Gross: "[OMPI users] update to problem with rankfiles"</a>
<li><strong>In reply to:</strong> <a href="24954.php">Yang, David: "[OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24981.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks"</a>
<li><strong>Reply:</strong> <a href="24981.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This usually indicates an error with the compiler on your machine.
<br>
<p>As Ralph implied, this may indicate that you don't have Xcode installed (and therefore don't have a compiler).
<br>
<p>You can look in config.log to be sure, or send it here (compress first, please), and we'll let you know.
<br>
<p><p>On Aug 10, 2014, at 12:20 PM, Yang, David &lt;xyang_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have encountered a problem compiling openmpi 1.8.1 on a Mac running Mavericks. When I ran ./configure, I got the following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Configuring Open MPI
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Startup tests
</span><br>
<span class="quotelev1">&gt; checking build system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev1">&gt; checking host system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev1">&gt; checking target system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev1">&gt; checking for gcc... gcc
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev1">&gt; checking for suffix of executables... 
</span><br>
<span class="quotelev1">&gt; checking whether we are cross compiling... configure: error: in `/Users/xyang/programs/openmpi-1.8.1':
</span><br>
<span class="quotelev1">&gt; configure: error: cannot run C compiled programs.
</span><br>
<span class="quotelev1">&gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could someone please help? Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correspondence/TSPA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24954.php">http://www.open-mpi.org/community/lists/users/2014/08/24954.php</a>
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
<li><strong>Next message:</strong> <a href="24971.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Previous message:</strong> <a href="24969.php">Siegmar Gross: "[OMPI users] update to problem with rankfiles"</a>
<li><strong>In reply to:</strong> <a href="24954.php">Yang, David: "[OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24981.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks"</a>
<li><strong>Reply:</strong> <a href="24981.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks"</a>
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
