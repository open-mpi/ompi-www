<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 07:56:17 2007" -->
<!-- isoreceived="20070404115617" -->
<!-- sent="Wed, 4 Apr 2007 07:56:12 -0400" -->
<!-- isosent="20070404115612" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]" -->
<!-- id="ea86ce220704040456n373bb504k4044b0d2ffaecb57_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="461361BE.1030004_at_sara.nl" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 07:56:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="3004.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="2998.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<li><strong>Reply:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Bas van der Vlies,
<br>
The memory leak you found in Open MPI 1.2 has not yet been fixed in the
<br>
1.2 branch. You can follow the status of that particular fix for the
<br>
1.2 branch here:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/970">https://svn.open-mpi.org/trac/ompi/ticket/970</a>
<br>
<p>The fix should go in soon, but I had a problem yesterday applying the fix.
<br>
<p>It has been fixed in the trunk, which has nightly tarballs available
<br>
here where you don't need to run autogen (and shouldn't):
<br>
<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p>Be aware that the trunk is currently under development for a future 1.3 release,
<br>
and already has many differences with the 1.2 version.  i.e. it is unstable.
<br>
<p>However, what specifically happened when you say that ./autogen.sh fails on
<br>
the trunk?  What version of libtool, automake, and autoconf do you have?
<br>
<p>Thanks for your bug report and your patience!
<br>
<p>On 4/4/07, Bas van der Vlies &lt;basv_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Bas van der Vlies wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes we saw the memory leak, and a fix is already in the trunk right now..
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sorry i didn't reply back earlier...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The fix will be merged in V1.2, as soon as the release managers approve it..
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks we will test it and do some more scalapack testing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the fix in trunk or also in the nighly build release. When i download
</span><br>
<span class="quotelev1">&gt; the trunk version ./autogen.sh fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i use the nighyly build version of openmpi-1.2.1a0r14212.tar.gz. We
</span><br>
<span class="quotelev1">&gt; still observe a memory leak. Is this the right version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt; *                                                                  *
</span><br>
<span class="quotelev1">&gt; *  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
</span><br>
<span class="quotelev1">&gt; *  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
</span><br>
<span class="quotelev1">&gt; *  Kruislaan 415                         fax:    +31 20 6683167    *
</span><br>
<span class="quotelev1">&gt; *  1098 SJ Amsterdam                                               *
</span><br>
<span class="quotelev1">&gt; *                                                                  *
</span><br>
<span class="quotelev1">&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="3004.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="2998.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<li><strong>Reply:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
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
