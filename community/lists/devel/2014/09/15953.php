<?
$subject_val = "Re: [OMPI devel] Broken abort backtrace functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 15:39:23 2014" -->
<!-- isoreceived="20140930193923" -->
<!-- sent="Tue, 30 Sep 2014 12:39:17 -0700" -->
<!-- isosent="20140930193917" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Broken abort backtrace functionality" -->
<!-- id="60932ED7-BA2F-4FA2-B13C-6ED312CD90B7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABB+w0SuvFhq8YdMBG--tqWpQLwAAKFDu3h4O8BzZK32dB2hcg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Broken abort backtrace functionality<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-30 15:39:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15954.php">Devendar Bureddy: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>Previous message:</strong> <a href="15952.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Github migration: tomorrow"</a>
<li><strong>In reply to:</strong> <a href="15933.php">Deva: "[OMPI devel] Broken abort backtrace functionality"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed in r32821, scheduled for 1.8.4
<br>
<p><p>On Sep 29, 2014, at 2:00 PM, Deva &lt;devendar.bureddy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I looks like OMPI_MCA_mpi_abort_print_stack=1 is broken.  I'm seeing following warning with it.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; $mpirun -np 2  -x OMPI_MCA_mpi_abort_print_stack=1 ./hello_c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A user-supplied value attempted to override the default-only MCA
</span><br>
<span class="quotelev1">&gt; variable named &quot;mpi_abort_print_stack&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The user-supplied value was ignored.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A user-supplied value attempted to override the default-only MCA
</span><br>
<span class="quotelev1">&gt; variable named &quot;mpi_abort_print_stack&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The user-supplied value was ignored.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2, 
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2, 
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems HAVE_BACKTRACE is not defined by any configuration but, below relevant code is guarded with it. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OPAL_WANT_PRETTY_PRINT_STACKTRACE &amp;&amp; defined(HAVE_BACKTRACE)
</span><br>
<span class="quotelev1">&gt;                                  0,
</span><br>
<span class="quotelev1">&gt;                                  OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev1">&gt;                                  MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;                                  MCA_BASE_VAR_FLAG_DEFAULT_ONLY,
</span><br>
<span class="quotelev1">&gt;                                  OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev1">&gt;                                  MCA_BASE_VAR_SCOPE_CONSTANT,
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $git grep HAVE_BACKTRACE
</span><br>
<span class="quotelev1">&gt; ompi/runtime/ompi_mpi_params.c:#if OPAL_WANT_PRETTY_PRINT_STACKTRACE &amp;&amp; defined(HAVE_BACKTRACE)
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -Devendar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15933.php">http://www.open-mpi.org/community/lists/devel/2014/09/15933.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15953/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15954.php">Devendar Bureddy: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>Previous message:</strong> <a href="15952.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Github migration: tomorrow"</a>
<li><strong>In reply to:</strong> <a href="15933.php">Deva: "[OMPI devel] Broken abort backtrace functionality"</a>
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
