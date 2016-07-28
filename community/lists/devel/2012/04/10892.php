<?
$subject_val = "Re: [OMPI devel] OPAL polling optimization";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 08:57:52 2012" -->
<!-- isoreceived="20120419125752" -->
<!-- sent="Thu, 19 Apr 2012 06:57:45 -0600" -->
<!-- isosent="20120419125745" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OPAL polling optimization" -->
<!-- id="8A143CBF-2A08-4902-BC5B-3831664481E4_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F90087B.1000409_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OPAL polling optimization<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-19 08:57:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10893.php">Jeffrey Squyres: "[OMPI devel] After svn up..."</a>
<li><strong>Previous message:</strong> <a href="10891.php">Alex Margolin: "[OMPI devel] OPAL polling optimization"</a>
<li><strong>In reply to:</strong> <a href="10891.php">Alex Margolin: "[OMPI devel] OPAL polling optimization"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We &quot;ingest&quot; the libevent releases from their distribution. Frankly, I am really loath to modify it as they become resistant to helping us with problems if we do, and the event lib is deeply embedded in our code.
<br>
<p>Would you please take the libevent modifications to them? Nick et al are very open to contributions.
<br>
<p>As for the &quot;unused&quot; params - I suspect you will find they are present due to compatibility with other event_add calls so they can all be called from within the same code without additional if-else switching.
<br>
<p><p>On Apr 19, 2012, at 6:43 AM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm writing a new polling module and I stumbled upon some strange code:
</span><br>
<span class="quotelev1">&gt; The following function is implemented in openmpi-trunk/opal/mca/event/libevent2013/libevent/signal.c :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; evsig_add(struct event_base *base, evutil_socket_t evsignal, short old, short events, void *p)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - It appears the three last paramaters are not used at all!
</span><br>
<span class="quotelev1">&gt; It's a coincidence that I'm just trying to register ANY signal handler to interrupt my ppoll syscall, so It may work out,
</span><br>
<span class="quotelev1">&gt; but I'm not sure how I'm supposed to use this function to set my own handler, not what the other parameters are for.
</span><br>
<span class="quotelev1">&gt; I've attached my patch for OPAL so far... I'll appreciate any advice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; &lt;mosix-opal-patch.diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10893.php">Jeffrey Squyres: "[OMPI devel] After svn up..."</a>
<li><strong>Previous message:</strong> <a href="10891.php">Alex Margolin: "[OMPI devel] OPAL polling optimization"</a>
<li><strong>In reply to:</strong> <a href="10891.php">Alex Margolin: "[OMPI devel] OPAL polling optimization"</a>
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
