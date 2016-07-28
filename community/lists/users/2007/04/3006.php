<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 07:59:00 2007" -->
<!-- isoreceived="20070404115900" -->
<!-- sent="Wed, 4 Apr 2007 07:58:28 -0400" -->
<!-- isosent="20070404115828" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]" -->
<!-- id="607EEB5F-BA96-4FD0-B8BC-6C1EAE369AC1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220704040456n373bb504k4044b0d2ffaecb57_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-04-04 07:58:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3007.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="3005.php">Tim Mattox: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="3005.php">Tim Mattox: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops!  Someone else just mailed me off-list and told me the same  
<br>
thing; I mis-read the version number in Bas' first mail.  Tim Mattox  
<br>
is exactly right; the fix is on the OMPI trunk but not yet in the 1.2  
<br>
branch (and therefore not in the 1.2 nightly tarballs).
<br>
<p><p>On Apr 4, 2007, at 7:56 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Hello Bas van der Vlies,
</span><br>
<span class="quotelev1">&gt; The memory leak you found in Open MPI 1.2 has not yet been fixed in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; 1.2 branch. You can follow the status of that particular fix for the
</span><br>
<span class="quotelev1">&gt; 1.2 branch here:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/970">https://svn.open-mpi.org/trac/ompi/ticket/970</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fix should go in soon, but I had a problem yesterday applying  
</span><br>
<span class="quotelev1">&gt; the fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It has been fixed in the trunk, which has nightly tarballs available
</span><br>
<span class="quotelev1">&gt; here where you don't need to run autogen (and shouldn't):
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be aware that the trunk is currently under development for a future  
</span><br>
<span class="quotelev1">&gt; 1.3 release,
</span><br>
<span class="quotelev1">&gt; and already has many differences with the 1.2 version.  i.e. it is  
</span><br>
<span class="quotelev1">&gt; unstable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, what specifically happened when you say that ./autogen.sh  
</span><br>
<span class="quotelev1">&gt; fails on
</span><br>
<span class="quotelev1">&gt; the trunk?  What version of libtool, automake, and autoconf do you  
</span><br>
<span class="quotelev1">&gt; have?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your bug report and your patience!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/4/07, Bas van der Vlies &lt;basv_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Bas van der Vlies wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes we saw the memory leak, and a fix is already in the trunk  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; right now..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry i didn't reply back earlier...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The fix will be merged in V1.2, as soon as the release managers  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; approve it..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks we will test it and do some more scalapack testing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is the fix in trunk or also in the nighly build release. When i  
</span><br>
<span class="quotelev2">&gt;&gt; download
</span><br>
<span class="quotelev2">&gt;&gt; the trunk version ./autogen.sh fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If i use the nighyly build version of  
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2.1a0r14212.tar.gz. We
</span><br>
<span class="quotelev2">&gt;&gt; still observe a memory leak. Is this the right version?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; *                                                                  *
</span><br>
<span class="quotelev2">&gt;&gt; *  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
</span><br>
<span class="quotelev2">&gt;&gt; *  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
</span><br>
<span class="quotelev2">&gt;&gt; *  Kruislaan 415                         fax:    +31 20 6683167    *
</span><br>
<span class="quotelev2">&gt;&gt; *  1098 SJ Amsterdam                                               *
</span><br>
<span class="quotelev2">&gt;&gt; *                                                                  *
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<li><strong>Next message:</strong> <a href="3007.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="3005.php">Tim Mattox: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="3005.php">Tim Mattox: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
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
