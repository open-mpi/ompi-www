<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 14:27:18 2014" -->
<!-- isoreceived="20141218192718" -->
<!-- sent="Thu, 18 Dec 2014 19:27:17 +0000" -->
<!-- isosent="20141218192717" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="AC5EF713-D87F-4412-B56E-BEFE9A3E5D2D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkWoejHjONT09D=KvfpETa4YHfCLHHJabaYTz9HHxVu8uA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-18 14:27:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26038.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="26036.php">Reuti: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="26024.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26038.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="26038.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 17, 2014, at 9:52 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I don't understand how MPIX_&lt;something&gt; is better.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Given that there is *zero* commonality between any MPI extension implemented between MPI implementations, how exactly is having the same prefix any less confusing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an overstatement. There were quite a few examples over the last few years (PERUSE, libNBC, ULFM). They all took different approaches for the naming of their functions, increasing the potential users confusion. As a developer for one of these MPI extensions I would rather go with a unique naming scheme to free our users from the hassle of the name checking.
</span><br>
<p>PERUSE and libNBC were both exposed through actual MPI functions -- not extensions.
<br>
<p>If you put ULFM in ompi/mpiext, we don't have a strict policy on the exposed extension symbols, that's true.  But FWIW, the existing ones that are in the OMPI github tree are all OMPI_* symbols.
<br>
<p>All this being said, if your *real* complaint is that you want the same prefixes for ULFM between OMPI and MPICH, then great -- use MPIX in both.  That's an entirely different case than what I have been talking about because you *do* have the same functions/behavior in multiple MPI implementations.
<br>
<p>My point is that if we have OMPI-specific extensions (which most likely will be), then having an OMPI_ prefix is a Good Thing because it clearly identifies them as belonging to OMPI, not other MPI implementations.
<br>
<p><span class="quotelev2">&gt;&gt; My point is that using an extension is inherently non-portable.  The chances for &lt;something&gt; to collide between different MPI implementations is actually quite high.  Indeed, if everyone uses MPIX_&lt;something&gt;, then there's a very real possibility that MPIX_Foo != MPIX_Foo != MPIX_Foo.  That's *horrible*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Horrible sure, but highly improbable (function names have a meaning)
</span><br>
<p>I think we're being being subjective here -- there's no real way to quantify this.  We might have to agree to disagree on this point.
<br>
<p>One real place that MPI implementations may collide on extension names are symbols for upcoming/new functions (e.g., MPI-4 functions).  MPICH, for example, put the NBCs in as MPIX_Ibarrier (etc.) before MPI-3 was formally passed.  OMPI, however, just put those functions in as MPI_Ibarrier() -- we never marked them as MPIX.  I.e., we wanted until the NBCs were formally voted in and then put them in as their final names.
<br>
<p>The rationale for this approach so that a) we waited until it was pretty certain that these functions were final final final, and b) people could start using the functions immediately without having to worry about whether they are named MPIX_foo or MPI_foo.
<br>
<p>If OMPI continues this policy, then OMPI/MPICH won't collide on these names. 
<br>
<p><span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; #if defined(OPEN_MPI) &amp;&amp; OPEN_MPI
</span><br>
<span class="quotelev2">&gt;&gt;   OMPI_Foo(a,b,c);
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #if defined(MPICH) &amp;&amp; MPICH
</span><br>
<span class="quotelev2">&gt;&gt;   MPIX_Foo(f,e,d,c,b,a);
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is horrible! This is the kind of solution that neither a developer or a user of such an extension would promote.
</span><br>
<p>Er... regardless of whether the OMPI extension begins with MPIX_ or OMPI_, how does that change the above code pattern?
<br>
<p>Extensions are *always* potentially non-portable.
<br>
<p><span class="quotelev2">&gt;&gt; I guess my fundamental question is: why impose commonality of names where there is no commonality of function signature and behavior?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The overarching goal of an MPI extension is to show the interest of the approach and eventually become part of the standard.
</span><br>
<p>I guess we disagree there.  There's been 2 OMPI extensions that have existed for several releases that have no intention of ever going into the standard.
<br>
<p><span class="quotelev1">&gt; A well designed extension will have a unique function signature and behavior, not only across different implementations but across different versions.
</span><br>
<p>...er... by definition, any given implementation cannot guarantee that.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26038.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="26036.php">Reuti: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="26024.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26038.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="26038.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
