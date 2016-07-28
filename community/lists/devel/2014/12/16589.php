<?
$subject_val = "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 03:29:19 2014" -->
<!-- isoreceived="20141215082919" -->
<!-- sent="Mon, 15 Dec 2014 08:29:17 +0000" -->
<!-- isosent="20141215082917" -->
<!-- name="Pascal Deveze" -->
<!-- email="pascal.deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late" -->
<!-- id="DC31D20C207C9643AEEE0D83E753E5C9918CE7D4_at_BUMSG3WM.fr.ad.bull.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMJJpkUMscaWps7X2Ts85d7HE2TrTsyKosYgfOaCS4HOJcc+2A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late<br>
<strong>From:</strong> Pascal Deveze (<em>pascal.deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 03:29:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16590.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>Previous message:</strong> <a href="16588.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>In reply to:</strong> <a href="16583.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16661.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>

<br>
Thanks for the patch. That was the solution.
<br>

<br>
Pascal
<br>

<br>
De : devel [mailto:devel-bounces_at_[hidden]] De la part de George Bosilca
<br>
Envoy&#195;&#169; : samedi 13 d&#195;&#169;cembre 2014 08:38
<br>
&#195;&#128; : Open MPI Developers
<br>
Objet : Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late
<br>

<br>
The source of this annoyance is the widely spread usage of OMPI_ENABLE_THREAD_MULTIPLE as an argument for all of the component init calls. This is obviously wrong as OMPI_ENABLE_THREAD_MULTIPLE is not about the requested support of thread support but about the less restrictive thread level supported by the library. Luckily the solution is simple, replace OMPI_ENABLE_THREAD_MULTIPLE by variable ompi_mpi_thread_multiple, and there should be no need for checking opal_using_threads in the initializers (open-mpi/ompi_at_343071498965a8f73d5f2b0c27a7ef404caf286c).
<br>

<br>
&nbsp;&nbsp;George.
<br>

<br>

<br>
On Fri, Dec 12, 2014 at 2:58 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden]&lt;mailto:pascal.deveze_at_[hidden]&gt;&gt; wrote:
<br>
George,
<br>

<br>
My initial problem is that when MPI is compiled with &#226;&#128;&#156;--enable-mpi-thread-multiple&#226;&#128;&#157;, the variable enable_mpi_threads is set to 1 even if MPI_Init() is called in place of MPI_Init_thread().
<br>
I saw also that  opal_using_threads() exists and was used by other BTLs.
<br>

<br>
Maybe the solution is to find the way to set enable_mpi_threads to 0 when MPI_Init() is called.
<br>

<br>

<br>
De : devel [mailto:devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;] De la part de George Bosilca
<br>
Envoy&#195;&#169; : vendredi 12 d&#195;&#169;cembre 2014 07:03
<br>

<br>
&#195;&#128; : Open MPI Developers
<br>
Objet : Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late
<br>

<br>
On Thu, Dec 11, 2014 at 8:30 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Just to help me understand: I don&#226;&#128;&#153;t think this change actually changed any behavior. However, it certainly *allows* a different behavior. Isn&#226;&#128;&#153;t that true?
<br>

<br>
It depends how you look at this. To be extremely clear it prevents the modules from using anything else than their arguments to decide the provided threading model. With the current change, it is possible that some of the modules will continue to follow this &quot;old&quot; behavior, while others might switch to check opal_using_threads to see how they might behave.
<br>

<br>
My point here is not that one is better than the other, just that we inadvertently introduced a possibility for non-consistent behavior.
<br>

<br>
Let me take an example. In the old scheme, the PML was allowed to run each BTL in a separate thread, with absolutely no BTL support for thread safety. Thus, the PML could have managed all the interactions between BTL and requests in an atomic way, without the BTL knowing about. Now, if the BTL make his decision based on the value returned by opal_using_threads this approach is not possible anymore.
<br>

<br>
If so, I guess the real question is for Pascal at Bull: why do you feel this earlier setting is required?
<br>

<br>
This might allow to see if using functions that require protection, such as opal_lifo_push, will work by default or one should use directly their atomic version?
<br>

<br>
&nbsp;&nbsp;George.
<br>

<br>

<br>

<br>
On Dec 11, 2014, at 4:21 PM, George Bosilca &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
<br>

<br>
The overall design in OMPI was that no OMPI module should be allowed to decide if threads are on (thus it should not rely on the value returned by opal_using_threads during it's initialization stage). Instead, they should respect the level of thread support requested as an argument during the initialization step.
<br>

<br>
And this is true even for the BTLs. The PML component init function is propagating the  enable_progress_threads and enable_mpi_threads, down to the BML, and then to the BTL. This 2 variables, enable_progress_threads and enable_mpi_threads, are exactly what the ompi_mpi_init is using to compute the the value of the opal) using_thread (and that this patch moved).
<br>

<br>
The setting of the opal_using_threads was delayed during the initialization to ensure that it's value was not used to select a specific thread-level in any module, a behavior that is allowed now with the new setting.
<br>

<br>
A drastic change in behavior...
<br>

<br>
&nbsp;&nbsp;George.
<br>

<br>

<br>
On Tue, Dec 9, 2014 at 3:33 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Kewl - I&#226;&#128;&#153;ll fix. Thanks!
<br>

<br>
On Dec 9, 2014, at 12:32 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden]&lt;mailto:pascal.deveze_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Hi Ralph,
<br>

<br>
This in in the trunk.
<br>

<br>
De : devel [mailto:devel-bounces_at_[hidden]] De la part de Ralph Castain
<br>
Envoy&#195;&#169; : mardi 9 d&#195;&#169;cembre 2014 09:32
<br>
&#195;&#128; : Open MPI Developers
<br>
Objet : Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late
<br>

<br>
Hi Pascal
<br>

<br>
Is this in the trunk or in the 1.8 series (or both)?
<br>

<br>

<br>
On Dec 9, 2014, at 12:28 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden]&lt;mailto:pascal.deveze_at_[hidden]&gt;&gt; wrote:
<br>

<br>

<br>
In case where MPI is compiled with --enable-mpi-thread-multiple, a call to opal_using_threads() always returns 0 in the routine btl_xxx_component_init() of the BTLs, event if the application calls MPI_Init_thread() with MPI_THREAD_MULTIPLE.
<br>

<br>
This is because opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late.
<br>

<br>
I propose the following patch that solves the problem for me:
<br>

<br>
diff --git a/ompi/runtime/ompi_mpi_init.c b/ompi/runtime/ompi_mpi_init.c
<br>
index 35509cf..c2370fc 100644
<br>
--- a/ompi/runtime/ompi_mpi_init.c
<br>
+++ b/ompi/runtime/ompi_mpi_init.c
<br>
@@ -512,6 +512,13 @@ int ompi_mpi_init(int argc, char **argv, int requested, int *provided)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#endif
<br>

<br>
+    /* If thread support was enabled, then setup OPAL to allow for
<br>
+       them. */
<br>
+    if ((OPAL_ENABLE_PROGRESS_THREADS == 1) ||
<br>
+        (*provided != MPI_THREAD_SINGLE)) {
<br>
+        opal_set_using_threads(true);
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* initialize datatypes. This step should be done early as it will
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* create the local convertor and local arch used in the proc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* init.
<br>
@@ -724,13 +731,6 @@ int ompi_mpi_init(int argc, char **argv, int requested, int *provided)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>

<br>
-    /* If thread support was enabled, then setup OPAL to allow for
<br>
-       them. */
<br>
-    if ((OPAL_ENABLE_PROGRESS_THREADS == 1) ||
<br>
-        (*provided != MPI_THREAD_SINGLE)) {
<br>
-        opal_set_using_threads(true);
<br>
-    }
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* start PML/BTL's */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = MCA_PML_CALL(enable(true));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( OMPI_SUCCESS != ret ) {
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16459.php">http://www.open-mpi.org/community/lists/devel/2014/12/16459.php</a>
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16462.php">http://www.open-mpi.org/community/lists/devel/2014/12/16462.php</a>
<br>

<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16463.php">http://www.open-mpi.org/community/lists/devel/2014/12/16463.php</a>
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16516.php">http://www.open-mpi.org/community/lists/devel/2014/12/16516.php</a>
<br>

<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16517.php">http://www.open-mpi.org/community/lists/devel/2014/12/16517.php</a>
<br>

<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16537.php">http://www.open-mpi.org/community/lists/devel/2014/12/16537.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16589/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16590.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>Previous message:</strong> <a href="16588.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>In reply to:</strong> <a href="16583.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16661.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
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
