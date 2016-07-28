<?
$subject_val = "Re: [OMPI devel] typo in opal/event/evutil.h ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 09:16:35 2010" -->
<!-- isoreceived="20100226141635" -->
<!-- sent="Fri, 26 Feb 2010 15:06:12 +0100" -->
<!-- isosent="20100226140612" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] typo in opal/event/evutil.h ?" -->
<!-- id="1267193172.2597.65.camel_at_frecb014522.frec.bull.fr" -->
<!-- inreplyto="71d2d8cc1002260541k6323ee8bsc0f1aed352793bbe_at_mail.gmail.com" -->
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
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-26 09:06:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7509.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7507.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7505.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7511.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>Reply:</strong> <a href="7511.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2010-02-26 at 06:41 -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought I saw a correction go by recently that fixed this in the
</span><br>
<span class="quotelev1">&gt; trunk? What revision are you at, and on which branch?
</span><br>
<p>Hi Ralph,
<br>
<p>1) hg branch:
<br>
default
<br>
But I'm getting the warning in the v1.5 branch too.
<br>
<p>2)
<br>
changeset:   17631:177d287dee3c
<br>
user:        jsquyres
<br>
date:        Thu Feb 25 21:04:09 2010 +0000
<br>
summary:     This has bugged me for a long, long time: rename
<br>
btl_openib_iwarp.*
<br>
&nbsp;-&gt;
<br>
<p>3) configure options:
<br>
--with-platform=../contrib/platform/optimized --enable-picky
<br>
<p>4) Last update on this file is for me:
<br>
<p>changeset:   17413:32687831ca9e
<br>
user:        brbarret
<br>
date:        Thu Feb 04 05:38:30 2010 +0000
<br>
summary:     Update libevent to 1.4.13
<br>
<p>But maybe something got messed here in our repo, will check.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 26, 2010 at 3:48 AM, Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         Hi,
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         I'm getting this warning during the make if configured with
</span><br>
<span class="quotelev1">&gt;         --enable-picky:
</span><br>
<span class="quotelev1">&gt;         ../../../../opal/event/evutil.h:62:7: warning:
</span><br>
<span class="quotelev1">&gt;         &quot;_EVENT_SIZEOF_LONG_LONG&quot;
</span><br>
<span class="quotelev1">&gt;         is not defined
</span><br>
<span class="quotelev1">&gt;         Looks like changeset #32687831ca9e has introduced a typo?
</span><br>
<span class="quotelev1">&gt;         I'm wondering whether _EVENT_SIZEOF_LONG_LONG shouldn't be
</span><br>
<span class="quotelev1">&gt;         changed to
</span><br>
<span class="quotelev1">&gt;         SIZEOF_LONG_LONG?
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         --- a/opal/event/evutil.h       Thu Feb 25 21:04:09 2010 +0000
</span><br>
<span class="quotelev1">&gt;         +++ b/opal/event/evutil.h       Fri Feb 26 10:29:31 2010 +0100
</span><br>
<span class="quotelev1">&gt;         @@ -59,7 +59,7 @@ extern &quot;C&quot; {
</span><br>
<span class="quotelev1">&gt;          #elif defined(WIN32)
</span><br>
<span class="quotelev1">&gt;          #define ev_uint64_t unsigned __int64
</span><br>
<span class="quotelev1">&gt;          #define ev_int64_t signed __int64
</span><br>
<span class="quotelev1">&gt;         -#elif _EVENT_SIZEOF_LONG_LONG == 8
</span><br>
<span class="quotelev1">&gt;         +#elif SIZEOF_LONG_LONG == 8
</span><br>
<span class="quotelev1">&gt;          #define ev_uint64_t unsigned long long
</span><br>
<span class="quotelev1">&gt;          #define ev_int64_t long long
</span><br>
<span class="quotelev1">&gt;          #elif SIZEOF_LONG == 8
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Regards,
</span><br>
<span class="quotelev1">&gt;         Nadia
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7509.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7507.php">George Bosilca: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7505.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7511.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>Reply:</strong> <a href="7511.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
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
