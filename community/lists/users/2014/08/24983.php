<?
$subject_val = "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 16:13:48 2014" -->
<!-- isoreceived="20140811201348" -->
<!-- sent="Mon, 11 Aug 2014 13:13:47 -0700" -->
<!-- isosent="20140811201347" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks" -->
<!-- id="CAMD57of1hRaZOeAY=sMxAkRm2Ypr5NaV8CWRgzy8L9_5CnHq8w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="46AAAF50-6084-475D-B17B-544DC328FD0F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 16:13:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24984.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
<li><strong>Previous message:</strong> <a href="24982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks"</a>
<li><strong>In reply to:</strong> <a href="24982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24984.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
<li><strong>Reply:</strong> <a href="24984.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If this is an updated system (i.e., you updated the OS to Mavericks), did
<br>
you remember to re-install Xcode? Mavericks requires an updated version of
<br>
Xcode, and you have to reinstall the cmd line tools as well.
<br>
<p><p><p>On Mon, Aug 11, 2014 at 1:11 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Something is not right in your Xcode setup -- perhaps you need to install
</span><br>
<span class="quotelev1">&gt; the Xcode command line tools?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the relevant config.log output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; configure:5967: gcc -o conftest    conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c:10:19: fatal error: stdio.h: No such file or directory
</span><br>
<span class="quotelev1">&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;                    ^
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It can't even compile a trivial C program with &lt;stdio.h&gt; -- which means
</span><br>
<span class="quotelev1">&gt; something is very borked with your local compiler installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2014, at 4:04 PM, Yang, David &lt;xyang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff, Doug,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I do have Xcode installed. Attached is the log file. Here again is the
</span><br>
<span class="quotelev1">&gt; screen dump:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [9]:yangmp:xyang:% ./configure --prefix=/opt/openmpi-1.8.1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; == Configuring Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** Startup tests
</span><br>
<span class="quotelev2">&gt; &gt; checking build system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev2">&gt; &gt; checking host system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev2">&gt; &gt; checking target system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev2">&gt; &gt; checking for gcc... gcc
</span><br>
<span class="quotelev2">&gt; &gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev2">&gt; &gt; checking for suffix of executables...
</span><br>
<span class="quotelev2">&gt; &gt; checking whether we are cross compiling... configure: error: in
</span><br>
<span class="quotelev1">&gt; `/Users/xyang/programs/openmpi-1.8.1':
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: cannot run C compiled programs.
</span><br>
<span class="quotelev2">&gt; &gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev2">&gt; &gt; See `config.log' for more details
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your help is really appreciated!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; David
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Correspondence/TSPA
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 11, 2014, at 7:32 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This usually indicates an error with the compiler on your machine.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As Ralph implied, this may indicate that you don't have Xcode
</span><br>
<span class="quotelev1">&gt; installed (and therefore don't have a compiler).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You can look in config.log to be sure, or send it here (compress
</span><br>
<span class="quotelev1">&gt; first, please), and we'll let you know.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Aug 10, 2014, at 12:20 PM, Yang, David &lt;xyang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I have encountered a problem compiling openmpi 1.8.1 on a Mac running
</span><br>
<span class="quotelev1">&gt; Mavericks. When I ran ./configure, I got the following error.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; == Configuring Open MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; *** Startup tests
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; checking build system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; checking host system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; checking target system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; checking for gcc... gcc
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; checking for suffix of executables...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; checking whether we are cross compiling... configure: error: in
</span><br>
<span class="quotelev1">&gt; `/Users/xyang/programs/openmpi-1.8.1':
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; configure: error: cannot run C compiled programs.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; See `config.log' for more details
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Could someone please help? Thanks!
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; David
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Correspondence/TSPA
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24954.php">http://www.open-mpi.org/community/lists/users/2014/08/24954.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24970.php">http://www.open-mpi.org/community/lists/users/2014/08/24970.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;config.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24981.php">http://www.open-mpi.org/community/lists/users/2014/08/24981.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/24982.php">http://www.open-mpi.org/community/lists/users/2014/08/24982.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24983/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24984.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
<li><strong>Previous message:</strong> <a href="24982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks"</a>
<li><strong>In reply to:</strong> <a href="24982.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on	Mac	running	Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24984.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
<li><strong>Reply:</strong> <a href="24984.php">Yang, David: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
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
