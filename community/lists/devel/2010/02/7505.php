<?
$subject_val = "Re: [OMPI devel] typo in opal/event/evutil.h ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 08:42:02 2010" -->
<!-- isoreceived="20100226134202" -->
<!-- sent="Fri, 26 Feb 2010 06:41:53 -0700" -->
<!-- isosent="20100226134153" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] typo in opal/event/evutil.h ?" -->
<!-- id="71d2d8cc1002260541k6323ee8bsc0f1aed352793bbe_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1267181309.2597.47.camel_at_frecb014522.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] typo in opal/event/evutil.h ?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-26 08:41:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7506.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7504.php">Nadia Derbey: "[OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>In reply to:</strong> <a href="7504.php">Nadia Derbey: "[OMPI devel] typo in opal/event/evutil.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7508.php">Nadia Derbey: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>Reply:</strong> <a href="7508.php">Nadia Derbey: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nadia
<br>
<p>I thought I saw a correction go by recently that fixed this in the trunk?
<br>
What revision are you at, and on which branch?
<br>
<p>On Fri, Feb 26, 2010 at 3:48 AM, Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting this warning during the make if configured with
</span><br>
<span class="quotelev1">&gt; --enable-picky:
</span><br>
<span class="quotelev1">&gt; ../../../../opal/event/evutil.h:62:7: warning: &quot;_EVENT_SIZEOF_LONG_LONG&quot;
</span><br>
<span class="quotelev1">&gt; is not defined
</span><br>
<span class="quotelev1">&gt; Looks like changeset #32687831ca9e has introduced a typo?
</span><br>
<span class="quotelev1">&gt; I'm wondering whether _EVENT_SIZEOF_LONG_LONG shouldn't be changed to
</span><br>
<span class="quotelev1">&gt; SIZEOF_LONG_LONG?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- a/opal/event/evutil.h       Thu Feb 25 21:04:09 2010 +0000
</span><br>
<span class="quotelev1">&gt; +++ b/opal/event/evutil.h       Fri Feb 26 10:29:31 2010 +0100
</span><br>
<span class="quotelev1">&gt; @@ -59,7 +59,7 @@ extern &quot;C&quot; {
</span><br>
<span class="quotelev1">&gt;  #elif defined(WIN32)
</span><br>
<span class="quotelev1">&gt;  #define ev_uint64_t unsigned __int64
</span><br>
<span class="quotelev1">&gt;  #define ev_int64_t signed __int64
</span><br>
<span class="quotelev1">&gt; -#elif _EVENT_SIZEOF_LONG_LONG == 8
</span><br>
<span class="quotelev1">&gt; +#elif SIZEOF_LONG_LONG == 8
</span><br>
<span class="quotelev1">&gt;  #define ev_uint64_t unsigned long long
</span><br>
<span class="quotelev1">&gt;  #define ev_int64_t long long
</span><br>
<span class="quotelev1">&gt;  #elif SIZEOF_LONG == 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7506.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7504.php">Nadia Derbey: "[OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>In reply to:</strong> <a href="7504.php">Nadia Derbey: "[OMPI devel] typo in opal/event/evutil.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7508.php">Nadia Derbey: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>Reply:</strong> <a href="7508.php">Nadia Derbey: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
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
