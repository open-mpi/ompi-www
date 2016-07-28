<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 14:29:36 2007" -->
<!-- isoreceived="20071006182936" -->
<!-- sent="Sat, 6 Oct 2007 20:29:29 +0200" -->
<!-- isosent="20071006182929" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] incorrect configure code (1.2.4 and earlier)" -->
<!-- id="08F3D0C7-F06A-468C-975A-9CC6622D08FA_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1190918694.2512.1.camel_at_y-boda.ydc.se" -->
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
<strong>Date:</strong> 2007-10-06 14:29:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4163.php">Jeff Squyres: "Re: [OMPI users] libnbc compilation"</a>
<li><strong>Previous message:</strong> <a href="4161.php">Jeff Squyres: "Re: [OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4078.php">&#197;ke Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim is right that we don't need to restore flags before AC_MSG_ERROR  
<br>
because it's going to abort.
<br>
<p>Here's some other comments (based on line numbers from the v1.2 branch):
<br>
<p>- I'm not sure why you removed PTHREAD_LIBS=&quot;$pl&quot; on line 483?
<br>
<p>- Why move LIBS=&quot;$orig_LIBS&quot; away from line 538?  Don't you also need  
<br>
it for the &quot;success&quot; case?
<br>
<p>- Ditto for line 553.
<br>
<p><p><p>On Sep 27, 2007, at 8:44 PM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2007-09-27 at 14:18 -0400, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 2007-09-27 at 09:09 -0400, Tim Prins wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ake,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looking at the svn logs it looks like you reported the problems  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these checks quite a while ago and we fixed them (in r13773
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/13773">https://svn.open-mpi.org/trac/ompi/changeset/13773</a>), but we  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; never moved
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; them to the 1.2 branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, it's the same. Since i never saw it in the source i tried  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; once more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with some more explanations just in case :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will ask for this to be moved to the 1.2 branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, the changes made for ompi_config_pthreads.m4 are  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you are suggesting now. Is this changeset good enough, or are there
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other changes you think should be made?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ones i sent today are slightly more correct. There where 2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; missing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LIBS=&quot;$orig_LIBS&quot; in the failure cases.
</span><br>
<span class="quotelev2">&gt;&gt; But do we really need these? It looks like configure aborts in these
</span><br>
<span class="quotelev2">&gt;&gt; cases (I am not a autoconf wizard, so I could be completely wrong  
</span><br>
<span class="quotelev2">&gt;&gt; here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know. I just put them in since it was the right thing to  
</span><br>
<span class="quotelev1">&gt; do. And
</span><br>
<span class="quotelev1">&gt; there where other variables that was reset in those places.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
<li><strong>Next message:</strong> <a href="4163.php">Jeff Squyres: "Re: [OMPI users] libnbc compilation"</a>
<li><strong>Previous message:</strong> <a href="4161.php">Jeff Squyres: "Re: [OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4078.php">&#197;ke Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
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
