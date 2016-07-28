<?
$subject_val = "Re: [OMPI devel] Build failure on FreeBSD 7";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  4 14:56:40 2008" -->
<!-- isoreceived="20080504185640" -->
<!-- sent="Sun, 04 May 2008 11:56:10 -0700" -->
<!-- isosent="20080504185610" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failure on FreeBSD 7" -->
<!-- id="481E06CA.6030705_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BF8D698F-193F-4A37-9015-66DA42992679_at_cisco.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-04 14:56:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3824.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] undefined referencesforrdma_get_peer_addr	&amp;	rdma_get_local_addr"</a>
<li><strong>Previous message:</strong> <a href="3822.php">Roland Dreier: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>In reply to:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 3, 2008, at 7:32 PM, Brad Penoff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The small commit that Karol originally suggested was just pushed to
</span><br>
<span class="quotelev2">&gt;&gt; ompi-trunk.  This just simply adds the appropriate header files for
</span><br>
<span class="quotelev2">&gt;&gt; FreeBSD (6.2, 6.3 and 7) to be able to compile.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; This didn't fix the hanging on the kevent call mentioned in this
</span><br>
<span class="quotelev2">&gt;&gt; thread, however, setting the environment variable EVENT_NOKQUEUE did
</span><br>
<span class="quotelev2">&gt;&gt; find a work-around.  I'm not sure if that is the solution we want for
</span><br>
<span class="quotelev2">&gt;&gt; all FreeBSD platforms in the long term (requiring the user to set
</span><br>
<span class="quotelev2">&gt;&gt; particular environment variables for particular platforms), but for
</span><br>
<span class="quotelev2">&gt;&gt; now at least I can run the MTT tests that I need to (once it gets in a
</span><br>
<span class="quotelev2">&gt;&gt; nightly build).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, I think you're the only one who cares about FreeBSD, so  
</span><br>
<span class="quotelev1">&gt; it's likely going to be up to you to get it working.  :-\  I'm not  
</span><br>
<span class="quotelev1">&gt; being snide; I'm just saying that it's likely that no one else cares  
</span><br>
<span class="quotelev1">&gt; about FreeBSD, so no one else will spend cycles on a fix for it -- the  
</span><br>
<span class="quotelev1">&gt; only thing that people will care about is how the fix affects the rest  
</span><br>
<span class="quotelev1">&gt; of the code base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree that making people setenv EVENT_NOKQUEUE before running on  
</span><br>
<span class="quotelev1">&gt; FreeBSD is not desirable.  I'm not too much of a fan of your patch,  
</span><br>
<span class="quotelev1">&gt; though -- is there a better way?  E.g., can you extend the test in  
</span><br>
<span class="quotelev1">&gt; ompi/config/ompi_setup_libevent.c to reliably detect whether kevent  
</span><br>
<span class="quotelev1">&gt; works on FreeBSD or not?  I'm assuming that the test should return  
</span><br>
<span class="quotelev1">&gt; &quot;no, kevent is not supported&quot; on FreeBSD, as opposed to the &quot;yes, it  
</span><br>
<span class="quotelev1">&gt; works&quot; that it must be returning today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>In the end I don't care if OMPI runs on FreeBSD of not, but I see that I 
<br>
might be able to help a little here.
<br>
<p>I have been doing some Xen testing that is entirely unrelated to OMPI, 
<br>
but happens to leave me with installations of FreeBSD 6.2 for i386 and 
<br>
FreeBSD 7.0 (both i386 and amd86).  I will not commit to building and 
<br>
testing an entire OMPI, but I can offer to try out any configure test 
<br>
that Brad devises, just to be sure the coverage is more than one 
<br>
installation.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3824.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] undefined referencesforrdma_get_peer_addr	&amp;	rdma_get_local_addr"</a>
<li><strong>Previous message:</strong> <a href="3822.php">Roland Dreier: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>In reply to:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
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
