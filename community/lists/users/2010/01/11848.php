<?
$subject_val = "Re: [OMPI users] flex.exe";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 19:42:19 2010" -->
<!-- isoreceived="20100122004219" -->
<!-- sent="Thu, 21 Jan 2010 16:14:40 -0500" -->
<!-- isosent="20100121211440" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] flex.exe" -->
<!-- id="8F86C896-FF33-4EFB-8EEC-23B1B0367A88_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2D094A28F6B31745BE7B844EA0FF60962C3EC54633_at_ES04SNLNT.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] flex.exe<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-21 16:14:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11849.php">Shiqing Fan: "Re: [OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="11847.php">Martin Siegert: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI users] flex.exe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11849.php">Shiqing Fan: "Re: [OMPI users] flex.exe"</a>
<li><strong>Reply:</strong> <a href="11849.php">Shiqing Fan: "Re: [OMPI users] flex.exe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't we ship the flex-generated code in the tarball anyway?  If so, why do we ship flex.exe?
<br>
<p>On Jan 21, 2010, at 12:14 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; I have to agree with the two requests here. Having either a windows tarball or a windows build tools tarball doesn't seem too burdensom, and could even be done automatically at make dist time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thu Jan 21 10:05:03 2010
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] flex.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am Donnerstag, den 21.01.2010, 11:52 -0500 schrieb Michael Di Domenico:
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.4.1/contrib/platform/win32/bin/flex.exe
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I understand this file might be required for building on windows,
</span><br>
<span class="quotelev2">&gt; &gt; since I'm not I can just delete the file without issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, for those of us under import restrictions, where binaries are
</span><br>
<span class="quotelev2">&gt; &gt; not allowed in, this file causes me to open the tarball and delete the
</span><br>
<span class="quotelev2">&gt; &gt; file (not a big deal, i know, i know).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But, can I put up a vote for a pure source only tree?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm very much in favor of that since we can't ship this binary in
</span><br>
<span class="quotelev1">&gt; Debian. We'd have to delete it from the tarball and repack it with every
</span><br>
<span class="quotelev1">&gt; release which is quite cumbersome. If these tools could be shipped in a
</span><br>
<span class="quotelev1">&gt; separate tarball that would be great!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Manuel
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11849.php">Shiqing Fan: "Re: [OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="11847.php">Martin Siegert: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI users] flex.exe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11849.php">Shiqing Fan: "Re: [OMPI users] flex.exe"</a>
<li><strong>Reply:</strong> <a href="11849.php">Shiqing Fan: "Re: [OMPI users] flex.exe"</a>
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
