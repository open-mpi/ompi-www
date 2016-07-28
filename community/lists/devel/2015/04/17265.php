<?
$subject_val = "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 18 07:38:35 2015" -->
<!-- isoreceived="20150418113835" -->
<!-- sent="Sat, 18 Apr 2015 11:38:31 +0000" -->
<!-- isosent="20150418113831" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors" -->
<!-- id="8255B88B-3577-4DDA-907A-C4DFB684A343_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B928DF1B-FA49-409C-AB29-C8E576E297BA_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-18 07:38:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17266.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17264.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17186.php">Ralph Castain: "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard --
<br>

<br>
Does Nathan's recent infrastructure activity in Opal destructors help with this?
<br>

<br>

<br>
<span class="quotelev1">&gt; On Apr 6, 2015, at 7:08 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think either solution would be valuable - this is something that came up a few months ago, but the Java team members couldn&#226;&#128;&#153;t trace it down, and neither Jeff nor I had time to pursue it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 6, 2015, at 3:30 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There seems to have been recent outburst of interest in the mpi java bindings, so moving in retrograde fashion back to what I use to be doing, I've started investigating the Ompi JNI code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm noticing that at least on sles11sp3, that soon after the java vm invokes the JNI_OnUnload of the ompi JNI code, the JVM segfaults when running some pthread key destructors, namely those associated with pthread keys that ompi is setting up.  If I set the destructor field to null in the ompi calls to pthread_key_create, then the jvm shuts down without a segfault after the java app exits.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that one can get lucky, as is the case when I run the java app on my mac.  That's because the jvm on this system doesn't care to run the JNI_OnUnload code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One way to handle this problem would be to go find all the places (fortunately not many) where opal_tsd_key_create is called, and then make sure there is an appropriate opal_tsd_key_destroy for the key during the MPI_Finalize procedure.  Alternately,  since this is basically a dso problem, one could define fini functions to run the destructors during the dlclose procedure.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17185.php">http://www.open-mpi.org/community/lists/devel/2015/04/17185.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17186.php">http://www.open-mpi.org/community/lists/devel/2015/04/17186.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17266.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17264.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17186.php">Ralph Castain: "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
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
