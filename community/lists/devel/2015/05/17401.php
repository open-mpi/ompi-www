<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 22:43:59 2015" -->
<!-- isoreceived="20150515024359" -->
<!-- sent="Thu, 14 May 2015 22:43:57 -0400" -->
<!-- isosent="20150515024357" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579" -->
<!-- id="CAMJJpkWp25hyoDEwESa-sb6pt8b8V9Vjk8D95i+Hbx7YAcvDew_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150515001007.DD0ED260201_at_lion.crest.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-14 22:43:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17402.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17400.php">Ralph Castain: "Re: [OMPI devel] Warnings about malloc(0) in debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17402.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Reply:</strong> <a href="17402.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>The code pushed in g8e30579 is clearly not the right solution.
<br>
<p>The problem starts in oob_tcp_listener.c line 742. A new
<br>
mca_oob_tcp_pending_connection_t object is allocated to store the incoming
<br>
connection. The accept few lines below fails with an error code of 0x23
<br>
which means &quot;resource temporary unavailable&quot; on OS X (i.e. EAGAIN). Thus,
<br>
the if at line 750 is skipped, and we reach line 763 (a &quot;continue&quot;) with 1)
<br>
a connection not accepted, and 2) an allocated object not release. Voila!
<br>
<p>Freeing the pending_connection object is not the right approach either, as
<br>
it will only remove the memory leak but the process will become a CPU hog.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p><p><p>On Thu, May 14, 2015 at 8:10 PM, &lt;gitdub_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;        via  8e30579e6efab580cf9cf1bec8f8df1376b7e9ef (commit)
</span><br>
<span class="quotelev1">&gt;       from  1488e82efd1d09c30ba46dfa00b89e623623272f (commit)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/8e30579e6efab580cf9cf1bec8f8df1376b7e9ef">https://github.com/open-mpi/ompi/commit/8e30579e6efab580cf9cf1bec8f8df1376b7e9ef</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit 8e30579e6efab580cf9cf1bec8f8df1376b7e9ef
</span><br>
<span class="quotelev1">&gt; Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Thu May 14 18:09:13 2015 -0600
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The Mac appears to have problems with the keepalive support - once
</span><br>
<span class="quotelev1">&gt; keepalive starts, the memory footprint soars. So disable keepalive on the
</span><br>
<span class="quotelev1">&gt; Mac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev1">&gt; b/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev1">&gt; index d1d124d..4939560 100644
</span><br>
<span class="quotelev1">&gt; --- a/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev1">&gt; +++ b/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev1">&gt; @@ -57,6 +57,12 @@ AC_DEFUN([OPAL_CHECK_OS_FLAVORS],
</span><br>
<span class="quotelev1">&gt;                         [$opal_have_solaris],
</span><br>
<span class="quotelev1">&gt;                         [Whether or not we have solaris])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$opal_found_apple&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; +          [opal_have_mac=1], [opal_have_mac=0])
</span><br>
<span class="quotelev1">&gt; +    AC_DEFINE_UNQUOTED([OPAL_HAVE_MAC],
</span><br>
<span class="quotelev1">&gt; +                       [$opal_have_mac],
</span><br>
<span class="quotelev1">&gt; +                       [Whether or not we are on a Mac])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      # check for sockaddr_in (a good sign we have TCP)
</span><br>
<span class="quotelev1">&gt;      AC_CHECK_HEADERS([netdb.h netinet/in.h netinet/tcp.h])
</span><br>
<span class="quotelev1">&gt;      AC_CHECK_TYPES([struct sockaddr_in],
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/oob/tcp/oob_tcp_common.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/oob/tcp/oob_tcp_common.c
</span><br>
<span class="quotelev1">&gt; index a768472..e3decf2 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/oob/tcp/oob_tcp_common.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/oob/tcp/oob_tcp_common.c
</span><br>
<span class="quotelev1">&gt; @@ -72,7 +72,7 @@
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * Set socket buffering
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#if defined(SO_KEEPALIVE) &amp;&amp; !OPAL_HAVE_MAC
</span><br>
<span class="quotelev1">&gt;  static void set_keepalive(int sd)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int option;
</span><br>
<span class="quotelev1">&gt; @@ -146,6 +146,7 @@ static void set_keepalive(int sd)
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  #endif  // TCP_KEEPCNT
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; +#endif //SO_KEEPALIVE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  void orte_oob_tcp_set_socket_options(int sd)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; @@ -181,7 +182,7 @@ void orte_oob_tcp_set_socket_options(int sd)
</span><br>
<span class="quotelev1">&gt;                              opal_socket_errno);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; -#if defined(SO_KEEPALIVE)
</span><br>
<span class="quotelev1">&gt; +#if defined(SO_KEEPALIVE) &amp;&amp; !OPAL_HAVE_MAC
</span><br>
<span class="quotelev1">&gt;      if (0 &lt; mca_oob_tcp_component.keepalive_time) {
</span><br>
<span class="quotelev1">&gt;          set_keepalive(sd);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev1">&gt; index dd1af2a..372ed4c 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev1">&gt; @@ -404,7 +404,7 @@ static int tcp_component_register(void)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &amp;mca_oob_tcp_component.disable_ipv6_family);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#if !OPAL_HAVE_MAC
</span><br>
<span class="quotelev1">&gt;      mca_oob_tcp_component.keepalive_time = 10;
</span><br>
<span class="quotelev1">&gt;      (void)mca_base_component_var_register(component, &quot;keepalive_time&quot;,
</span><br>
<span class="quotelev1">&gt;                                            &quot;Idle time in seconds before
</span><br>
<span class="quotelev1">&gt; starting to send keepalives (num &lt;= 0 ----&gt; disable keepalive)&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -427,7 +427,8 @@ static int tcp_component_register(void)
</span><br>
<span class="quotelev1">&gt;                                            OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev1">&gt;                                            MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &amp;mca_oob_tcp_component.keepalive_probes);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      mca_oob_tcp_component.retry_delay = 0;
</span><br>
<span class="quotelev1">&gt;      (void)mca_base_component_var_register(component, &quot;retry_delay&quot;,
</span><br>
<span class="quotelev1">&gt;                                            &quot;Time (in sec) to wait before
</span><br>
<span class="quotelev1">&gt; trying to connect to peer again&quot;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt;  config/opal_check_os_flavors.m4      | 6 ++++++
</span><br>
<span class="quotelev1">&gt;  orte/mca/oob/tcp/oob_tcp_common.c    | 5 +++--
</span><br>
<span class="quotelev1">&gt;  orte/mca/oob/tcp/oob_tcp_component.c | 5 +++--
</span><br>
<span class="quotelev1">&gt;  3 files changed, 12 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; ompi-commits mailing list
</span><br>
<span class="quotelev1">&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17401/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17402.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17400.php">Ralph Castain: "Re: [OMPI devel] Warnings about malloc(0) in debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17402.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Reply:</strong> <a href="17402.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
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
