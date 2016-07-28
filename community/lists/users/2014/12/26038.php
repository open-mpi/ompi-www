<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 02:48:12 2014" -->
<!-- isoreceived="20141219074812" -->
<!-- sent="Fri, 19 Dec 2014 02:48:11 -0500" -->
<!-- isosent="20141219074811" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="CAMJJpkUmr0iBZyphE2BZq5-Dx1NGPYB+JjdnHKR7jDsR0u1W9Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AC5EF713-D87F-4412-B56E-BEFE9A3E5D2D_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 02:48:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26039.php">Nick Papior Andersen: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="26037.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="26037.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26039.php">Nick Papior Andersen: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="26039.php">Nick Papior Andersen: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="26040.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 18, 2014 at 2:27 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Dec 17, 2014, at 9:52 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't understand how MPIX_&lt;something&gt; is better.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Given that there is *zero* commonality between any MPI extension
</span><br>
<span class="quotelev1">&gt; implemented between MPI implementations, how exactly is having the same
</span><br>
<span class="quotelev1">&gt; prefix any less confusing?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is an overstatement. There were quite a few examples over the last
</span><br>
<span class="quotelev1">&gt; few years (PERUSE, libNBC, ULFM). They all took different approaches for
</span><br>
<span class="quotelev1">&gt; the naming of their functions, increasing the potential users confusion. As
</span><br>
<span class="quotelev1">&gt; a developer for one of these MPI extensions I would rather go with a unique
</span><br>
<span class="quotelev1">&gt; naming scheme to free our users from the hassle of the name checking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PERUSE and libNBC were both exposed through actual MPI functions -- not
</span><br>
<span class="quotelev1">&gt; extensions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No, they we both exposed in the most convenient way for users: PERSUE_* and
<br>
NBC_*.
<br>
<p>If you put ULFM in ompi/mpiext, we don't have a strict policy on the
<br>
<span class="quotelev1">&gt; exposed extension symbols, that's true.  But FWIW, the existing ones that
</span><br>
<span class="quotelev1">&gt; are in the OMPI github tree are all OMPI_* symbols.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All this being said, if your *real* complaint is that you want the same
</span><br>
<span class="quotelev1">&gt; prefixes for ULFM between OMPI and MPICH, then great -- use MPIX in both.
</span><br>
<span class="quotelev1">&gt; That's an entirely different case than what I have been talking about
</span><br>
<span class="quotelev1">&gt; because you *do* have the same functions/behavior in multiple MPI
</span><br>
<span class="quotelev1">&gt; implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I had no complaint. I simply made a statement based on my prior experience
<br>
as a developer of two such extensions, extensions that 1) have (or had) a
<br>
reasonable number of users; and 2) were useful enough to be finally
<br>
supported by multiple open source MPI implementations.
<br>
<p>We made little progress over the last couple of [extremely long] emails and
<br>
the original topic diverged and got diluted. Lets hold on our discussion
<br>
here and let Nick, Keita and the others go ahead and complete their work.
<br>
We can fiddle over the naming scheme during our face-to-face meeting in
<br>
January.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>My point is that if we have OMPI-specific extensions (which most likely
<br>
<span class="quotelev1">&gt; will be), then having an OMPI_ prefix is a Good Thing because it clearly
</span><br>
<span class="quotelev1">&gt; identifies them as belonging to OMPI, not other MPI implementations.
</span><br>
<p><p><span class="quotelev3">&gt; &gt;&gt; My point is that using an extension is inherently non-portable.  The
</span><br>
<span class="quotelev1">&gt; chances for &lt;something&gt; to collide between different MPI implementations is
</span><br>
<span class="quotelev1">&gt; actually quite high.  Indeed, if everyone uses MPIX_&lt;something&gt;, then
</span><br>
<span class="quotelev1">&gt; there's a very real possibility that MPIX_Foo != MPIX_Foo != MPIX_Foo.
</span><br>
<span class="quotelev1">&gt; That's *horrible*.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Horrible sure, but highly improbable (function names have a meaning)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we're being being subjective here -- there's no real way to
</span><br>
<span class="quotelev1">&gt; quantify this.  We might have to agree to disagree on this point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One real place that MPI implementations may collide on extension names are
</span><br>
<span class="quotelev1">&gt; symbols for upcoming/new functions (e.g., MPI-4 functions).  MPICH, for
</span><br>
<span class="quotelev1">&gt; example, put the NBCs in as MPIX_Ibarrier (etc.) before MPI-3 was formally
</span><br>
<span class="quotelev1">&gt; passed.  OMPI, however, just put those functions in as MPI_Ibarrier() -- we
</span><br>
<span class="quotelev1">&gt; never marked them as MPIX.  I.e., we wanted until the NBCs were formally
</span><br>
<span class="quotelev1">&gt; voted in and then put them in as their final names.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rationale for this approach so that a) we waited until it was pretty
</span><br>
<span class="quotelev1">&gt; certain that these functions were final final final, and b) people could
</span><br>
<span class="quotelev1">&gt; start using the functions immediately without having to worry about whether
</span><br>
<span class="quotelev1">&gt; they are named MPIX_foo or MPI_foo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If OMPI continues this policy, then OMPI/MPICH won't collide on these
</span><br>
<span class="quotelev1">&gt; names.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #if defined(OPEN_MPI) &amp;&amp; OPEN_MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   OMPI_Foo(a,b,c);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #if defined(MPICH) &amp;&amp; MPICH
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPIX_Foo(f,e,d,c,b,a);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is horrible! This is the kind of solution that neither a developer
</span><br>
<span class="quotelev1">&gt; or a user of such an extension would promote.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Er... regardless of whether the OMPI extension begins with MPIX_ or OMPI_,
</span><br>
<span class="quotelev1">&gt; how does that change the above code pattern?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Extensions are *always* potentially non-portable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I guess my fundamental question is: why impose commonality of names
</span><br>
<span class="quotelev1">&gt; where there is no commonality of function signature and behavior?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The overarching goal of an MPI extension is to show the interest of the
</span><br>
<span class="quotelev1">&gt; approach and eventually become part of the standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess we disagree there.  There's been 2 OMPI extensions that have
</span><br>
<span class="quotelev1">&gt; existed for several releases that have no intention of ever going into the
</span><br>
<span class="quotelev1">&gt; standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; A well designed extension will have a unique function signature and
</span><br>
<span class="quotelev1">&gt; behavior, not only across different implementations but across different
</span><br>
<span class="quotelev1">&gt; versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...er... by definition, any given implementation cannot guarantee that.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26037.php">http://www.open-mpi.org/community/lists/users/2014/12/26037.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26038/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26039.php">Nick Papior Andersen: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="26037.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="26037.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26039.php">Nick Papior Andersen: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="26039.php">Nick Papior Andersen: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="26040.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
