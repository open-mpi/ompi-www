<?
$subject_val = "Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 16:11:33 2014" -->
<!-- isoreceived="20140811201133" -->
<!-- sent="Mon, 11 Aug 2014 20:11:31 +0000" -->
<!-- isosent="20140811201131" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks" -->
<!-- id="46AAAF50-6084-475D-B17B-544DC328FD0F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A86C5317-14D8-45BA-8DC3-3A72FEC97322_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 16:11:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24983.php">Ralph Castain: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<li><strong>Previous message:</strong> <a href="24981.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks"</a>
<li><strong>In reply to:</strong> <a href="24981.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24983.php">Ralph Castain: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<li><strong>Reply:</strong> <a href="24983.php">Ralph Castain: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something is not right in your Xcode setup -- perhaps you need to install the Xcode command line tools?
<br>
<p>Here's the relevant config.log output:
<br>
<p>-----
<br>
configure:5967: gcc -o conftest    conftest.c  &gt;&amp;5
<br>
conftest.c:10:19: fatal error: stdio.h: No such file or directory
<br>
&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
compilation terminated.
<br>
-----
<br>
<p>It can't even compile a trivial C program with &lt;stdio.h&gt; -- which means something is very borked with your local compiler installation.
<br>
<p><p><p>On Aug 11, 2014, at 4:04 PM, Yang, David &lt;xyang_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff, Doug,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do have Xcode installed. Attached is the log file. Here again is the screen dump:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [9]:yangmp:xyang:% ./configure --prefix=/opt/openmpi-1.8.1
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
<span class="quotelev1">&gt; Your help is really appreciated!
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
<span class="quotelev1">&gt; On Aug 11, 2014, at 7:32 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This usually indicates an error with the compiler on your machine.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As Ralph implied, this may indicate that you don't have Xcode installed (and therefore don't have a compiler).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You can look in config.log to be sure, or send it here (compress first, please), and we'll let you know.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 10, 2014, at 12:20 PM, Yang, David &lt;xyang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have encountered a problem compiling openmpi 1.8.1 on a Mac running Mavericks. When I ran ./configure, I got the following error.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ============================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; == Configuring Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ============================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** Startup tests
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking build system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking host system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking target system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking for gcc... gcc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking for suffix of executables... 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; checking whether we are cross compiling... configure: error: in `/Users/xyang/programs/openmpi-1.8.1':
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure: error: cannot run C compiled programs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; See `config.log' for more details
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Could someone please help? Thanks!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; David
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Correspondence/TSPA
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24954.php">http://www.open-mpi.org/community/lists/users/2014/08/24954.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24970.php">http://www.open-mpi.org/community/lists/users/2014/08/24970.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24981.php">http://www.open-mpi.org/community/lists/users/2014/08/24981.php</a>
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
<li><strong>Next message:</strong> <a href="24983.php">Ralph Castain: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<li><strong>Previous message:</strong> <a href="24981.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks"</a>
<li><strong>In reply to:</strong> <a href="24981.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24983.php">Ralph Castain: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<li><strong>Reply:</strong> <a href="24983.php">Ralph Castain: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
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
