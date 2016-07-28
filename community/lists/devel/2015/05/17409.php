<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 08:51:10 2015" -->
<!-- isoreceived="20150515125110" -->
<!-- sent="Fri, 15 May 2015 12:51:07 +0000" -->
<!-- isosent="20150515125107" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579" -->
<!-- id="33565C47-4153-434B-800A-D7A00B844E74_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57oeFJiHi686RjhdofOexCNuZtex6+XH9c2E-Se2o6Myikg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-15 08:51:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17410.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17408.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>In reply to:</strong> <a href="17408.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17410.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch.
<br>
<p>If vote for the same behavior on OS X even if it's somewhat unnecessary. I.E., use keep alive, but do 1000x the value.
<br>
<p>Sent from my phone. No type good.
<br>
<p>On May 15, 2015, at 5:42 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p>Did some more digging, and it turns out that Linux specifies the keep alive time interval in seconds - and Mac (for some strange reason) uses milliseconds. Hence the difference in behavior.
<br>
<p>So I could replace the current commit with one that multiplies the keep alive interval by 1000x if we are on a Mac. However, we don't really need keep alive at all on the Mac, so I'm wondering if we shouldn't just leave it turned off?
<br>
<p>I confess I don't care either way
<br>
Ralph
<br>
<p><p>On Thu, May 14, 2015 at 10:46 PM, George Bosilca &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
<br>
In the worst case, i.e. no other solution is possible, OS X can be identified by the existence of the macro __APPLE__. There is no need to have OPAL_HAVE_MAC.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Thu, May 14, 2015 at 11:12 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Interesting - as I said, I'll take a look. In either case, the keep alive on the Mac is unnecessary as it is always a standalone scenario - no value in running it. So the &quot;fix&quot; does no harm and just saves some useless overhead.
<br>
<p><p>On Thu, May 14, 2015 at 9:00 PM, George Bosilca &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
<br>
I'm sorry Ralph what you proposed is not really a fix. My comment is based on a real execution of exactly the command you provided with lldb attached to the process. What I see is millions of OBJ_NEW(mca_oob_tcp_pending_connection_t) because the EAGAIN is not correctly handled.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, May 14, 2015 at 10:56 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Yes - this is the fix for that issue
<br>
<p><p>On Thu, May 14, 2015 at 8:54 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
<br>
Is this by any chance associated with issue 579?
<br>
<p><p>2015-05-14 20:49 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;:
<br>
I'll look at the lines you cite, but that clearly isn't the problem we are seeing here. I can verify that because the test case:
<br>
<p>mpirun -n 1 sleep 1000
<br>
<p>does not open up any connections at all. Thus, the use-case you describe never occurs - yet we still blow up in memory. If I simply tell the OOB not to set keep alive, the problem goes away.
<br>
<p>It only happens on Mac, and we never see Mac based clusters, so turning off keep alive on the Mac seems a pretty simple solution.
<br>
<p><p>On Thu, May 14, 2015 at 8:43 PM, George Bosilca &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
<br>
Ralph,
<br>
<p>The code pushed in g8e30579 is clearly not the right solution.
<br>
<p>The problem starts in oob_tcp_listener.c line 742. A new mca_oob_tcp_pending_connection_t object is allocated to store the incoming connection. The accept few lines below fails with an error code of 0x23 which means &quot;resource temporary unavailable&quot; on OS X (i.e. EAGAIN). Thus, the if at line 750 is skipped, and we reach line 763 (a &quot;continue&quot;) with 1) a connection not accepted, and 2) an allocated object not release. Voila!
<br>
<p>Freeing the pending_connection object is not the right approach either, as it will only remove the memory leak but the process will become a CPU hog.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p><p><p>On Thu, May 14, 2015 at 8:10 PM, &lt;gitdub_at_[hidden]&lt;mailto:gitdub_at_[hidden]&gt;&gt; wrote:
<br>
This is an automated email from the git hooks/post-receive script. It was
<br>
generated because a ref change was pushed to the repository containing
<br>
the project &quot;open-mpi/ompi&quot;.
<br>
<p>The branch, master has been updated
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  8e30579e6efab580cf9cf1bec8f8df1376b7e9ef (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from  1488e82efd1d09c30ba46dfa00b89e623623272f (commit)
<br>
<p>Those revisions listed above that are new to this repository have
<br>
not appeared on any other notification email; so we list those
<br>
revisions in full, below.
<br>
<p>- Log -----------------------------------------------------------------
<br>
<a href="https://github.com/open-mpi/ompi/commit/8e30579e6efab580cf9cf1bec8f8df1376b7e9ef">https://github.com/open-mpi/ompi/commit/8e30579e6efab580cf9cf1bec8f8df1376b7e9ef</a>
<br>
<p>commit 8e30579e6efab580cf9cf1bec8f8df1376b7e9ef
<br>
Author: Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
<br>
Date:   Thu May 14 18:09:13 2015 -0600
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The Mac appears to have problems with the keepalive support - once keepalive starts, the memory footprint soars. So disable keepalive on the Mac
<br>
<p>diff --git a/config/opal_check_os_flavors.m4 b/config/opal_check_os_flavors.m4
<br>
index d1d124d..4939560 100644
<br>
--- a/config/opal_check_os_flavors.m4
<br>
+++ b/config/opal_check_os_flavors.m4
<br>
@@ -57,6 +57,12 @@ AC_DEFUN([OPAL_CHECK_OS_FLAVORS],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$opal_have_solaris],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Whether or not we have solaris])
<br>
<p>+    AS_IF([test &quot;$opal_found_apple&quot; = &quot;yes&quot;],
<br>
+          [opal_have_mac=1], [opal_have_mac=0])
<br>
+    AC_DEFINE_UNQUOTED([OPAL_HAVE_MAC],
<br>
+                       [$opal_have_mac],
<br>
+                       [Whether or not we are on a Mac])
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# check for sockaddr_in (a good sign we have TCP)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_HEADERS([netdb.h netinet/in.h netinet/tcp.h])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_TYPES([struct sockaddr_in],
<br>
diff --git a/orte/mca/oob/tcp/oob_tcp_common.c b/orte/mca/oob/tcp/oob_tcp_common.c
<br>
index a768472..e3decf2 100644
<br>
--- a/orte/mca/oob/tcp/oob_tcp_common.c
<br>
+++ b/orte/mca/oob/tcp/oob_tcp_common.c
<br>
@@ -72,7 +72,7 @@
<br>
&nbsp;/**
<br>
&nbsp;&nbsp;* Set socket buffering
<br>
&nbsp;&nbsp;*/
<br>
-
<br>
+#if defined(SO_KEEPALIVE) &amp;&amp; !OPAL_HAVE_MAC
<br>
&nbsp;static void set_keepalive(int sd)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int option;
<br>
@@ -146,6 +146,7 @@ static void set_keepalive(int sd)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;#endif  // TCP_KEEPCNT
<br>
&nbsp;}
<br>
+#endif //SO_KEEPALIVE
<br>
<p>&nbsp;void orte_oob_tcp_set_socket_options(int sd)
<br>
&nbsp;{
<br>
@@ -181,7 +182,7 @@ void orte_oob_tcp_set_socket_options(int sd)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_socket_errno);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;#endif
<br>
-#if defined(SO_KEEPALIVE)
<br>
+#if defined(SO_KEEPALIVE) &amp;&amp; !OPAL_HAVE_MAC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 &lt; mca_oob_tcp_component.keepalive_time) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set_keepalive(sd);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
diff --git a/orte/mca/oob/tcp/oob_tcp_component.c b/orte/mca/oob/tcp/oob_tcp_component.c
<br>
index dd1af2a..372ed4c 100644
<br>
--- a/orte/mca/oob/tcp/oob_tcp_component.c
<br>
+++ b/orte/mca/oob/tcp/oob_tcp_component.c
<br>
@@ -404,7 +404,7 @@ static int tcp_component_register(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mca_oob_tcp_component.disable_ipv6_family);
<br>
&nbsp;#endif
<br>
<p>-
<br>
+#if !OPAL_HAVE_MAC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_component.keepalive_time = 10;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void)mca_base_component_var_register(component, &quot;keepalive_time&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Idle time in seconds before starting to send keepalives (num &lt;= 0 ----&gt; disable keepalive)&quot;,
<br>
@@ -427,7 +427,8 @@ static int tcp_component_register(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_INFO_LVL_9,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VAR_SCOPE_READONLY,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mca_oob_tcp_component.keepalive_probes);
<br>
-
<br>
+#endif
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_component.retry_delay = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void)mca_base_component_var_register(component, &quot;retry_delay&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Time (in sec) to wait before trying to connect to peer again&quot;,
<br>
<p><p>-----------------------------------------------------------------------
<br>
<p>Summary of changes:
<br>
&nbsp;config/opal_check_os_flavors.m4      | 6 ++++++
<br>
&nbsp;orte/mca/oob/tcp/oob_tcp_common.c    | 5 +++--
<br>
&nbsp;orte/mca/oob/tcp/oob_tcp_component.c | 5 +++--
<br>
&nbsp;3 files changed, 12 insertions(+), 4 deletions(-)
<br>
<p><p>hooks/post-receive
<br>
<pre>
--
open-mpi/ompi
_______________________________________________
ompi-commits mailing list
ompi-commits_at_[hidden]&lt;mailto:ompi-commits_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17401.php">http://www.open-mpi.org/community/lists/devel/2015/05/17401.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17402.php">http://www.open-mpi.org/community/lists/devel/2015/05/17402.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17403.php">http://www.open-mpi.org/community/lists/devel/2015/05/17403.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17404.php">http://www.open-mpi.org/community/lists/devel/2015/05/17404.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17405.php">http://www.open-mpi.org/community/lists/devel/2015/05/17405.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17406.php">http://www.open-mpi.org/community/lists/devel/2015/05/17406.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17407.php">http://www.open-mpi.org/community/lists/devel/2015/05/17407.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17408.php">http://www.open-mpi.org/community/lists/devel/2015/05/17408.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17410.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17408.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>In reply to:</strong> <a href="17408.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17410.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
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
