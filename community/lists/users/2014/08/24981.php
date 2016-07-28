<?
$subject_val = "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 16:04:56 2014" -->
<!-- isoreceived="20140811200456" -->
<!-- sent="Mon, 11 Aug 2014 20:04:55 +0000" -->
<!-- isosent="20140811200455" -->
<!-- name="Yang, David" -->
<!-- email="xyang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks" -->
<!-- id="A86C5317-14D8-45BA-8DC3-3A72FEC97322_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AA850AF4-FE4C-4C43-B364-16B5B26B4F6E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac	running	Mavericks<br>
<strong>From:</strong> Yang, David (<em>xyang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 16:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks"</a>
<li><strong>Previous message:</strong> <a href="24980.php">Ralph Castain: "Re: [OMPI users] Filem could not be found for one user"</a>
<li><strong>In reply to:</strong> <a href="24970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks"</a>
<li><strong>Reply:</strong> <a href="24982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, Doug,
<br>
<p>I do have Xcode installed. Attached is the log file. Here again is the screen dump:
<br>
<p>[9]:yangmp:xyang:% ./configure --prefix=/opt/openmpi-1.8.1
<br>
<p>============================================================================
<br>
== Configuring Open MPI
<br>
============================================================================
<br>
<p>*** Startup tests
<br>
checking build system type... x86_64-apple-darwin13.3.0
<br>
checking host system type... x86_64-apple-darwin13.3.0
<br>
checking target system type... x86_64-apple-darwin13.3.0
<br>
checking for gcc... gcc
<br>
checking whether the C compiler works... yes
<br>
checking for C compiler default output file name... a.out
<br>
checking for suffix of executables...
<br>
checking whether we are cross compiling... configure: error: in `/Users/xyang/programs/openmpi-1.8.1':
<br>
configure: error: cannot run C compiled programs.
<br>
If you meant to cross compile, use `--host'.
<br>
See `config.log' for more details
<br>
<p>Your help is really appreciated!
<br>
<p><p>David
<br>
<p>Correspondence/TSPA
<br>
<p><p><p><p><p>On Aug 11, 2014, at 7:32 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This usually indicates an error with the compiler on your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Ralph implied, this may indicate that you don't have Xcode installed (and therefore don't have a compiler).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can look in config.log to be sure, or send it here (compress first, please), and we'll let you know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2014, at 12:20 PM, Yang, David &lt;xyang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have encountered a problem compiling openmpi 1.8.1 on a Mac running Mavericks. When I ran ./configure, I got the following error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; == Configuring Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Startup tests
</span><br>
<span class="quotelev2">&gt;&gt; checking build system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev2">&gt;&gt; checking host system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev2">&gt;&gt; checking target system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev2">&gt;&gt; checking for gcc... gcc
</span><br>
<span class="quotelev2">&gt;&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev2">&gt;&gt; checking for suffix of executables...
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are cross compiling... configure: error: in `/Users/xyang/programs/openmpi-1.8.1':
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: cannot run C compiled programs.
</span><br>
<span class="quotelev2">&gt;&gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev2">&gt;&gt; See `config.log' for more details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could someone please help? Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Correspondence/TSPA
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24954.php">http://www.open-mpi.org/community/lists/users/2014/08/24954.php</a>
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24970.php">http://www.open-mpi.org/community/lists/users/2014/08/24970.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24981/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24981/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks"</a>
<li><strong>Previous message:</strong> <a href="24980.php">Ralph Castain: "Re: [OMPI users] Filem could not be found for one user"</a>
<li><strong>In reply to:</strong> <a href="24970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks"</a>
<li><strong>Reply:</strong> <a href="24982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks"</a>
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
