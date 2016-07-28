<?
$subject_val = "Re: [OMPI users] Configure failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 16:02:11 2015" -->
<!-- isoreceived="20150427200211" -->
<!-- sent="Mon, 27 Apr 2015 13:02:10 -0700" -->
<!-- isosent="20150427200210" -->
<!-- name="Walt Brainerd" -->
<!-- email="walt.brainerd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure failure" -->
<!-- id="CAPsJ1NZTJJvDezh2VQi6HsoCp-zCEry5c5QYvBWuE=1bDSfCMA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6765E6B5-A98A-415A-9345-5422B1A9CF47_at_cisco.com" -->
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
<strong>From:</strong> Walt Brainerd (<em>walt.brainerd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-27 16:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26797.php">Marco Atzeri: "Re: [OMPI users] Configure failure"</a>
<li><strong>Previous message:</strong> <a href="26795.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<li><strong>In reply to:</strong> <a href="26795.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26797.php">Marco Atzeri: "Re: [OMPI users] Configure failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I had some Mingw compilers ahead of cygwin
<br>
in my path when I did that configure. I tried it again and
<br>
it appears to have run to the end, even though I got quite a
<br>
few lines with &quot;error&quot; and it says &quot;couldn't remove
<br>
conftest.exe ... busy&quot;. I'll send config.log if you want.
<br>
<p>I am running make and will let you know how that goes,
<br>
but you probably shouldn't worry about the ^M thing.
<br>
<p>Sorry,
<br>
<p>On Mon, Apr 27, 2015 at 11:54 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Marco --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you run into this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The m4 line in question that seems to be the problem is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [AS_VAR_SET(type_var, [`cat conftestval`])]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does `cat foo` in cygwin result in a ^M in the resulting shell string?  If
</span><br>
<span class="quotelev1">&gt; so, is there a standard way to get rid of it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 27, 2015, at 2:17 PM, Walt Brainerd &lt;walt.brainerd_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to be able to do Coarrays in Fortran and am
</span><br>
<span class="quotelev2">&gt; &gt; waiting for gfortran 5.1 in cygwin. In the meantime, I thought
</span><br>
<span class="quotelev2">&gt; &gt; I would try to build Openmpi and see if it might work with a
</span><br>
<span class="quotelev2">&gt; &gt; Mingw. Configure failed and the ^M looks strange to me and
</span><br>
<span class="quotelev2">&gt; &gt; thought you all might want to see it. Here is a little piece of
</span><br>
<span class="quotelev2">&gt; &gt; the configure log. A compressed version is attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Up-to-date cygwin on Windows 8.1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any advice on how (or whether) I can do this would be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure:33415: checking size of Fortran CHARACTER
</span><br>
<span class="quotelev2">&gt; &gt; configure:33483: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-alia
</span><br>
<span class="quotelev2">&gt; &gt; sing -I. -c conftest.c
</span><br>
<span class="quotelev2">&gt; &gt; configure:33490: $? = 0
</span><br>
<span class="quotelev2">&gt; &gt; configure:33500: gfortran   conftestf.f90 conftest.o -o conftest
</span><br>
<span class="quotelev2">&gt; &gt; configure:33507: $? = 0
</span><br>
<span class="quotelev2">&gt; &gt; configure:33551: ./conftest
</span><br>
<span class="quotelev2">&gt; &gt; configure:33558: $? = 0
</span><br>
<span class="quotelev2">&gt; &gt; configure:33574: result: 1^M
</span><br>
<span class="quotelev1">&gt;  &lt;----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; configure:33597: checking for C type corresponding to CHARACTER
</span><br>
<span class="quotelev2">&gt; &gt; configure:33643: result: not found
</span><br>
<span class="quotelev2">&gt; &gt; configure:33647: WARNING: *** Did not find corresponding C type
</span><br>
<span class="quotelev2">&gt; &gt; configure:33650: error: Cannot continue
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Walt Brainerd
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26794.php">http://www.open-mpi.org/community/lists/users/2015/04/26794.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26795.php">http://www.open-mpi.org/community/lists/users/2015/04/26795.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Walt Brainerd
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26796/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26797.php">Marco Atzeri: "Re: [OMPI users] Configure failure"</a>
<li><strong>Previous message:</strong> <a href="26795.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<li><strong>In reply to:</strong> <a href="26795.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26797.php">Marco Atzeri: "Re: [OMPI users] Configure failure"</a>
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
