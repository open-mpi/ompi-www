<?
$subject_val = "[OMPI devel] typo in opal/event/evutil.h ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 05:58:52 2010" -->
<!-- isoreceived="20100226105852" -->
<!-- sent="Fri, 26 Feb 2010 11:48:29 +0100" -->
<!-- isosent="20100226104829" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] typo in opal/event/evutil.h ?" -->
<!-- id="1267181309.2597.47.camel_at_frecb014522.frec.bull.fr" -->
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
<strong>Subject:</strong> [OMPI devel] typo in opal/event/evutil.h ?<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-26 05:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7505.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>Previous message:</strong> <a href="7503.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7505.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>Reply:</strong> <a href="7505.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm getting this warning during the make if configured with
<br>
--enable-picky:
<br>
../../../../opal/event/evutil.h:62:7: warning: &quot;_EVENT_SIZEOF_LONG_LONG&quot;
<br>
is not defined
<br>
Looks like changeset #32687831ca9e has introduced a typo?
<br>
I'm wondering whether _EVENT_SIZEOF_LONG_LONG shouldn't be changed to
<br>
SIZEOF_LONG_LONG?
<br>
<p><p>--- a/opal/event/evutil.h       Thu Feb 25 21:04:09 2010 +0000
<br>
+++ b/opal/event/evutil.h       Fri Feb 26 10:29:31 2010 +0100
<br>
@@ -59,7 +59,7 @@ extern &quot;C&quot; {
<br>
&nbsp;#elif defined(WIN32)
<br>
&nbsp;#define ev_uint64_t unsigned __int64
<br>
&nbsp;#define ev_int64_t signed __int64
<br>
-#elif _EVENT_SIZEOF_LONG_LONG == 8
<br>
+#elif SIZEOF_LONG_LONG == 8
<br>
&nbsp;#define ev_uint64_t unsigned long long
<br>
&nbsp;#define ev_int64_t long long
<br>
&nbsp;#elif SIZEOF_LONG == 8
<br>
<p><p>Regards,
<br>
Nadia
<br>
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7505.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>Previous message:</strong> <a href="7503.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7505.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>Reply:</strong> <a href="7505.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
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
