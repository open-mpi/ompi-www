<?
$subject_val = "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 19:08:48 2015" -->
<!-- isoreceived="20150406230848" -->
<!-- sent="Mon, 6 Apr 2015 16:08:45 -0700" -->
<!-- isosent="20150406230845" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors" -->
<!-- id="B928DF1B-FA49-409C-AB29-C8E576E297BA_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj5B8xWhMGVOdYosKKOXbVdXnX9gC4Sc9jsx-o_my6ukkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-06 19:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17187.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>Previous message:</strong> <a href="17185.php">Howard Pritchard: "[OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>In reply to:</strong> <a href="17185.php">Howard Pritchard: "[OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>Reply:</strong> <a href="17265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think either solution would be valuable - this is something that came up a few months ago, but the Java team members couldn&#226;&#128;&#153;t trace it down, and neither Jeff nor I had time to pursue it.
<br>
<p><p><span class="quotelev1">&gt; On Apr 6, 2015, at 3:30 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There seems to have been recent outburst of interest in the mpi java bindings, so moving in retrograde fashion back to what I use to be doing, I've started investigating the Ompi JNI code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm noticing that at least on sles11sp3, that soon after the java vm invokes the JNI_OnUnload of the ompi JNI code, the JVM segfaults when running some pthread key destructors, namely those associated with pthread keys that ompi is setting up.  If I set the destructor field to null in the ompi calls to pthread_key_create, then the jvm shuts down without a segfault after the java app exits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that one can get lucky, as is the case when I run the java app on my mac.  That's because the jvm on this system doesn't care to run the JNI_OnUnload code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One way to handle this problem would be to go find all the places (fortunately not many) where opal_tsd_key_create is called, and then make sure there is an appropriate opal_tsd_key_destroy for the key during the MPI_Finalize procedure.  Alternately,  since this is basically a dso problem, one could define fini functions to run the destructors during the dlclose procedure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17185.php">http://www.open-mpi.org/community/lists/devel/2015/04/17185.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17187.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>Previous message:</strong> <a href="17185.php">Howard Pritchard: "[OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>In reply to:</strong> <a href="17185.php">Howard Pritchard: "[OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>Reply:</strong> <a href="17265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
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
