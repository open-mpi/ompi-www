<?
$subject_val = "Re: [OMPI devel] Thread safety in the BTL layer";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  6 15:58:55 2016" -->
<!-- isoreceived="20160306205855" -->
<!-- sent="Sun, 6 Mar 2016 15:58:45 -0500" -->
<!-- isosent="20160306205845" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Thread safety in the BTL layer" -->
<!-- id="CAMJJpkVFPYj2tQLp7wsfe+V8_XnV7T=uLff0Zkq23rOkfdKWGQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDiYpkBhShJ3-6T1eOa9Y1QriKhBoeBONsG82=y0-qxwsg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Thread safety in the BTL layer<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-06 15:58:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18693.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: disable debug-devel-build-by-default"</a>
<li><strong>Previous message:</strong> <a href="18691.php">dpchoudh .: "[OMPI devel] Thread safety in the BTL layer"</a>
<li><strong>In reply to:</strong> <a href="18691.php">dpchoudh .: "[OMPI devel] Thread safety in the BTL layer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Durga,
<br>
<p>There is an ongoing effort to make the master (and future versions) not
<br>
only thread safe for all networks (all combinations of BTL, and PML/MTL)
<br>
but also thread efficient. The fact that we removed the checks (as the one
<br>
you noticed in the openib BTL) doesn't means that all BTL are currently
<br>
thread safe, but that we enabled them in multi-threaded builds and are
<br>
actively working to fix all issues we (and out nightly MTT tests) identify.
<br>
<p>Overall the BTLs should only care about protecting internal state, and
<br>
little else (and there is little else in the global context that the BTLs
<br>
are allowed to alter). All the components that the BTLs interact with, i.e.
<br>
PML, rcache and mpool, have their own protection. Few things you should pay
<br>
attention to:
<br>
1. if you have async progress don't provide a progress function. This will
<br>
prevent the PML from calling the progress when it might interfere with your
<br>
own. Also keep in mind that the PML has no idea if it interfere with your
<br>
progress, and it is possible it will call sends indiscriminately.
<br>
2. Make sure the send path is thread-safe as the PML is allowed to call the
<br>
BTL API from multiple threads.
<br>
3. Don't raise any callbacks to the PML layer while holding a lock on the
<br>
endpoint, or in fact on any BTL strucutres (the PML can send a message in
<br>
the callback).
<br>
<p>I am sure the list of &quot;don't do&quot; is much longer. Feel free to ask if you
<br>
find anything puzzling.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><p><p>On Sun, Mar 6, 2016 at 3:31 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sorry for asking too many 101 questions; hopefully someone won't mind
</span><br>
<span class="quotelev1">&gt; answering.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like, as of the current release, some BTLs (e.g. openib) are not
</span><br>
<span class="quotelev1">&gt; thread safe, and the code explicitly bails out if it finds that MIT_Init()
</span><br>
<span class="quotelev1">&gt; was called with THREAD_MULTIPLE. Then there are some BTLs, such as TCP,
</span><br>
<span class="quotelev1">&gt; that can handle THREAD_MULTIPLE. Here are the questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. There must be global (shared) variables that the BTL layer is
</span><br>
<span class="quotelev1">&gt; accessing, which is giving rise to the thread safety. Is there a list of
</span><br>
<span class="quotelev1">&gt; such variables, the code path in which they are accessed, and/or any
</span><br>
<span class="quotelev1">&gt; documentation on them (including any past mailing list post)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Browsing through the mailing list (I have been a subscriber to the
</span><br>
<span class="quotelev1">&gt; *user* list for quite a while), it looks like a lot of people have stumbled
</span><br>
<span class="quotelev1">&gt; on to the issue that the openib BTL is not thread safe. Given that, I'd
</span><br>
<span class="quotelev1">&gt; presume, it is the most popular BTL, since infiniband-like fabrics holds a
</span><br>
<span class="quotelev1">&gt; lion's share of the HPC interconnect market, it must be quite difficult to
</span><br>
<span class="quotelev1">&gt; make it thread safe. Any comments on the level of work it would take to
</span><br>
<span class="quotelev1">&gt; make sure a new BTL would be thread safe? Something along the line of a
</span><br>
<span class="quotelev1">&gt; 'do-this' or 'don't-do-that' would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. It looks like the openib BTL bailing out if called with THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; has been removed in the master branch (at least from a cursory look.) Does
</span><br>
<span class="quotelev1">&gt; that mean that the openib BTL is now thread safe, of is it that the check
</span><br>
<span class="quotelev1">&gt; has simply been moved to another location?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18691.php">http://www.open-mpi.org/community/lists/devel/2016/03/18691.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18692/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18693.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: disable debug-devel-build-by-default"</a>
<li><strong>Previous message:</strong> <a href="18691.php">dpchoudh .: "[OMPI devel] Thread safety in the BTL layer"</a>
<li><strong>In reply to:</strong> <a href="18691.php">dpchoudh .: "[OMPI devel] Thread safety in the BTL layer"</a>
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
