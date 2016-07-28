<?
$subject_val = "Re: [OMPI devel] Build failure on FreeBSD 7";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  4 07:29:29 2008" -->
<!-- isoreceived="20080504112929" -->
<!-- sent="Sun, 4 May 2008 07:29:23 -0400" -->
<!-- isosent="20080504112923" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failure on FreeBSD 7" -->
<!-- id="BF8D698F-193F-4A37-9015-66DA42992679_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b89c3c270805031632o44a8ab3bn48969bf41a990405_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build failure on FreeBSD 7<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-04 07:29:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Previous message:</strong> <a href="3812.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>In reply to:</strong> <a href="3812.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3823.php">Paul H. Hargrove: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3823.php">Paul H. Hargrove: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 3, 2008, at 7:32 PM, Brad Penoff wrote:
<br>
<p><span class="quotelev1">&gt; The small commit that Karol originally suggested was just pushed to
</span><br>
<span class="quotelev1">&gt; ompi-trunk.  This just simply adds the appropriate header files for
</span><br>
<span class="quotelev1">&gt; FreeBSD (6.2, 6.3 and 7) to be able to compile.
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; This didn't fix the hanging on the kevent call mentioned in this
</span><br>
<span class="quotelev1">&gt; thread, however, setting the environment variable EVENT_NOKQUEUE did
</span><br>
<span class="quotelev1">&gt; find a work-around.  I'm not sure if that is the solution we want for
</span><br>
<span class="quotelev1">&gt; all FreeBSD platforms in the long term (requiring the user to set
</span><br>
<span class="quotelev1">&gt; particular environment variables for particular platforms), but for
</span><br>
<span class="quotelev1">&gt; now at least I can run the MTT tests that I need to (once it gets in a
</span><br>
<span class="quotelev1">&gt; nightly build).
</span><br>
<p>Unfortunately, I think you're the only one who cares about FreeBSD, so  
<br>
it's likely going to be up to you to get it working.  :-\  I'm not  
<br>
being snide; I'm just saying that it's likely that no one else cares  
<br>
about FreeBSD, so no one else will spend cycles on a fix for it -- the  
<br>
only thing that people will care about is how the fix affects the rest  
<br>
of the code base.
<br>
<p>I agree that making people setenv EVENT_NOKQUEUE before running on  
<br>
FreeBSD is not desirable.  I'm not too much of a fan of your patch,  
<br>
though -- is there a better way?  E.g., can you extend the test in  
<br>
ompi/config/ompi_setup_libevent.c to reliably detect whether kevent  
<br>
works on FreeBSD or not?  I'm assuming that the test should return  
<br>
&quot;no, kevent is not supported&quot; on FreeBSD, as opposed to the &quot;yes, it  
<br>
works&quot; that it must be returning today.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Previous message:</strong> <a href="3812.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>In reply to:</strong> <a href="3812.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3823.php">Paul H. Hargrove: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Reply:</strong> <a href="3823.php">Paul H. Hargrove: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
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
