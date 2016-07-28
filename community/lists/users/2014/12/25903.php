<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 10:11:58 2014" -->
<!-- isoreceived="20141202151158" -->
<!-- sent="Tue, 2 Dec 2014 16:11:37 +0100" -->
<!-- isosent="20141202151137" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="CAAbhqc7oVSiDkUzAVmcsSuHBU-kVbo7keWd+pqihWp_5yuBovw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="27D3AFBC-6863-4095-98D8-EFBBBC30EDC9_at_cisco.com" -->
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
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-02 10:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25904.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25902.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25902.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25912.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to drop in,
<br>
<p>I can/and will provide whatever interface you want (if you want my
<br>
contribution).
<br>
<p>However just to help my ignorance,
<br>
1. Adam Moody's method still requires a way to create a distinguished
<br>
string per processor, i.e. the spilt is entirely done via the string/color,
<br>
which then needs to be deciphered by the coder. This seems to me to be more
<br>
cumbersome than just providing the level of split dependent on HW type?
<br>
2. My implementation does this via hwloc locality designators, hence it is
<br>
a generic interface for &quot;all&quot; hardware types. This seems like a more
<br>
generic way of dividing communicators compared to Adam's. Without having
<br>
the user to figure out where the processors are located.
<br>
<p>Or did I miss something?
<br>
<p>This is not to say that one or the other is superior, I just see two
<br>
different ways of creating communicators. Adams is full user control, using
<br>
hwloc is fully hardware determined, or should be.
<br>
<p>Secondly, do you think there is something wrong with the code as the
<br>
splitting did not take into account the L3 cache and socket correctly?
<br>
<p>2014-12-02 15:56 GMT+01:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On Dec 2, 2014, at 1:10 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Are you referring to something Adam Moody proposed?  Or some other Adam?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; He did more than proposing, he provided a link to the implementation in
</span><br>
<span class="quotelev1">&gt; SCR. So yes, I was indeed referring to Adam Moody.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah -- you're referring to
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25871.php">http://www.open-mpi.org/community/lists/users/2014/11/25871.php</a>.  Got it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FWIW, we&#226;&#128;&#153;ve traditionally named Open MPI-specific extensions &quot;OMPI_&quot;
</span><br>
<span class="quotelev1">&gt; instead of &quot;MPIX_&quot; (which can be confused with other MPI implementation
</span><br>
<span class="quotelev1">&gt; extensions).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Indeed, it was a choice we made long ago. Thinking about this
</span><br>
<span class="quotelev1">&gt; retroactively it was a bad choice. We (UTK) maintain some of the
</span><br>
<span class="quotelev1">&gt; extensions, and as other MPI libraries start providing similar extensions
</span><br>
<span class="quotelev1">&gt; (while they are discussed in the MPI Forum), users start asking for a
</span><br>
<span class="quotelev1">&gt; common naming scheme in order to simplify their life.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've talked to users who ask for the opposite -- since MPI extensions are,
</span><br>
<span class="quotelev1">&gt; by definition, specific to a particular MPI implementation, they
</span><br>
<span class="quotelev1">&gt; specifically asked for OMPI MPI extensions to *not* be MPIX_*, because then
</span><br>
<span class="quotelev1">&gt; it's easy to identify that it's an Open MPI extension (vs. an extension for
</span><br>
<span class="quotelev1">&gt; some other MPI implementation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other than a preferential reason, what other competing reason do we have
</span><br>
<span class="quotelev1">&gt; to stick with OMPI_ instead of MPIX_?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it's largely informal, so we can do whatever we want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The namespace MPIX_ is not regulated (nor mandated), so there's
</span><br>
<span class="quotelev1">&gt; possibilities for collisions, which would be pretty dreadful for users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I like the OMPI_ prefix because it clearly identifies the function as
</span><br>
<span class="quotelev1">&gt; specific to Open MPI (i.e., you really should enclose it in #if
</span><br>
<span class="quotelev1">&gt; defined(OPEN_MPI) / #endif).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you/users really want MPIX_, how about: use OMPI_Foo as the &quot;real&quot;
</span><br>
<span class="quotelev1">&gt; name, and have alternate entry points via MPIX_Foo?  (via #define, wrapper
</span><br>
<span class="quotelev1">&gt; functions, or whatever)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then we all win.  Huzzah!
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25902.php">http://www.open-mpi.org/community/lists/users/2014/12/25902.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25903/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25904.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>Previous message:</strong> <a href="25902.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25902.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25912.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
