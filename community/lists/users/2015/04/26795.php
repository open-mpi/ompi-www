<?
$subject_val = "Re: [OMPI users] Configure failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 14:54:40 2015" -->
<!-- isoreceived="20150427185440" -->
<!-- sent="Mon, 27 Apr 2015 18:54:39 +0000" -->
<!-- isosent="20150427185439" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure failure" -->
<!-- id="6765E6B5-A98A-415A-9345-5422B1A9CF47_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPsJ1Nbk1O3XFUhO7wnpRSsbBAadWpJfpYRGfik_juuPaBaOWQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure failure<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-27 14:54:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26796.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<li><strong>Previous message:</strong> <a href="26794.php">Walt Brainerd: "[OMPI users] Configure failure"</a>
<li><strong>In reply to:</strong> <a href="26794.php">Walt Brainerd: "[OMPI users] Configure failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26796.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<li><strong>Reply:</strong> <a href="26796.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<li><strong>Reply:</strong> <a href="26797.php">Marco Atzeri: "Re: [OMPI users] Configure failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marco --
<br>
<p>Have you run into this?
<br>
<p>The m4 line in question that seems to be the problem is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[AS_VAR_SET(type_var, [`cat conftestval`])]
<br>
<p>Does `cat foo` in cygwin result in a ^M in the resulting shell string?  If so, is there a standard way to get rid of it?
<br>
<p><p><p><span class="quotelev1">&gt; On Apr 27, 2015, at 2:17 PM, Walt Brainerd &lt;walt.brainerd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to be able to do Coarrays in Fortran and am
</span><br>
<span class="quotelev1">&gt; waiting for gfortran 5.1 in cygwin. In the meantime, I thought
</span><br>
<span class="quotelev1">&gt; I would try to build Openmpi and see if it might work with a
</span><br>
<span class="quotelev1">&gt; Mingw. Configure failed and the ^M looks strange to me and
</span><br>
<span class="quotelev1">&gt; thought you all might want to see it. Here is a little piece of
</span><br>
<span class="quotelev1">&gt; the configure log. A compressed version is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Up-to-date cygwin on Windows 8.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any advice on how (or whether) I can do this would be appreciated.
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:33415: checking size of Fortran CHARACTER
</span><br>
<span class="quotelev1">&gt; configure:33483: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-alia
</span><br>
<span class="quotelev1">&gt; sing -I. -c conftest.c
</span><br>
<span class="quotelev1">&gt; configure:33490: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:33500: gfortran   conftestf.f90 conftest.o -o conftest
</span><br>
<span class="quotelev1">&gt; configure:33507: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:33551: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:33558: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:33574: result: 1^M   &lt;----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; configure:33597: checking for C type corresponding to CHARACTER
</span><br>
<span class="quotelev1">&gt; configure:33643: result: not found
</span><br>
<span class="quotelev1">&gt; configure:33647: WARNING: *** Did not find corresponding C type
</span><br>
<span class="quotelev1">&gt; configure:33650: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Walt Brainerd
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26794.php">http://www.open-mpi.org/community/lists/users/2015/04/26794.php</a>
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
<li><strong>Next message:</strong> <a href="26796.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<li><strong>Previous message:</strong> <a href="26794.php">Walt Brainerd: "[OMPI users] Configure failure"</a>
<li><strong>In reply to:</strong> <a href="26794.php">Walt Brainerd: "[OMPI users] Configure failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26796.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<li><strong>Reply:</strong> <a href="26796.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<li><strong>Reply:</strong> <a href="26797.php">Marco Atzeri: "Re: [OMPI users] Configure failure"</a>
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
