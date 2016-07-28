<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 22:50:01 2015" -->
<!-- isoreceived="20150515025001" -->
<!-- sent="Thu, 14 May 2015 20:49:58 -0600" -->
<!-- isosent="20150515024958" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579" -->
<!-- id="CAMD57of-HZT0u9Ge+DWJZxKjeZOYKdC4+65iPOwjdVd-qMYO2Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWp25hyoDEwESa-sb6pt8b8V9Vjk8D95i+Hbx7YAcvDew_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-14 22:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17403.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17401.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>In reply to:</strong> <a href="17401.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17403.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Reply:</strong> <a href="17403.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll look at the lines you cite, but that clearly isn't the problem we are
<br>
seeing here. I can verify that because the test case:
<br>
<p>mpirun -n 1 sleep 1000
<br>
<p>does not open up any connections at all. Thus, the use-case you describe
<br>
never occurs - yet we still blow up in memory. If I simply tell the OOB not
<br>
to set keep alive, the problem goes away.
<br>
<p>It only happens on Mac, and we never see Mac based clusters, so turning off
<br>
keep alive on the Mac seems a pretty simple solution.
<br>
<p><p>On Thu, May 14, 2015 at 8:43 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code pushed in g8e30579 is clearly not the right solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem starts in oob_tcp_listener.c line 742. A new
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_pending_connection_t object is allocated to store the incoming
</span><br>
<span class="quotelev1">&gt; connection. The accept few lines below fails with an error code of 0x23
</span><br>
<span class="quotelev1">&gt; which means &quot;resource temporary unavailable&quot; on OS X (i.e. EAGAIN). Thus,
</span><br>
<span class="quotelev1">&gt; the if at line 750 is skipped, and we reach line 763 (a &quot;continue&quot;) with 1)
</span><br>
<span class="quotelev1">&gt; a connection not accepted, and 2) an allocated object not release. Voila!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Freeing the pending_connection object is not the right approach either, as
</span><br>
<span class="quotelev1">&gt; it will only remove the memory leak but the process will become a CPU hog.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 14, 2015 at 8:10 PM, &lt;gitdub_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt;&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt;&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt;&gt;        via  8e30579e6efab580cf9cf1bec8f8df1376b7e9ef (commit)
</span><br>
<span class="quotelev2">&gt;&gt;       from  1488e82efd1d09c30ba46dfa00b89e623623272f (commit)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt;&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt;&gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/8e30579e6efab580cf9cf1bec8f8df1376b7e9ef">https://github.com/open-mpi/ompi/commit/8e30579e6efab580cf9cf1bec8f8df1376b7e9ef</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; commit 8e30579e6efab580cf9cf1bec8f8df1376b7e9ef
</span><br>
<span class="quotelev2">&gt;&gt; Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Thu May 14 18:09:13 2015 -0600
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The Mac appears to have problems with the keepalive support - once
</span><br>
<span class="quotelev2">&gt;&gt; keepalive starts, the memory footprint soars. So disable keepalive on the
</span><br>
<span class="quotelev2">&gt;&gt; Mac
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev2">&gt;&gt; b/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev2">&gt;&gt; index d1d124d..4939560 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev2">&gt;&gt; @@ -57,6 +57,12 @@ AC_DEFUN([OPAL_CHECK_OS_FLAVORS],
</span><br>
<span class="quotelev2">&gt;&gt;                         [$opal_have_solaris],
</span><br>
<span class="quotelev2">&gt;&gt;                         [Whether or not we have solaris])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    AS_IF([test &quot;$opal_found_apple&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev2">&gt;&gt; +          [opal_have_mac=1], [opal_have_mac=0])
</span><br>
<span class="quotelev2">&gt;&gt; +    AC_DEFINE_UNQUOTED([OPAL_HAVE_MAC],
</span><br>
<span class="quotelev2">&gt;&gt; +                       [$opal_have_mac],
</span><br>
<span class="quotelev2">&gt;&gt; +                       [Whether or not we are on a Mac])
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;      # check for sockaddr_in (a good sign we have TCP)
</span><br>
<span class="quotelev2">&gt;&gt;      AC_CHECK_HEADERS([netdb.h netinet/in.h netinet/tcp.h])
</span><br>
<span class="quotelev2">&gt;&gt;      AC_CHECK_TYPES([struct sockaddr_in],
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/orte/mca/oob/tcp/oob_tcp_common.c
</span><br>
<span class="quotelev2">&gt;&gt; b/orte/mca/oob/tcp/oob_tcp_common.c
</span><br>
<span class="quotelev2">&gt;&gt; index a768472..e3decf2 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/oob/tcp/oob_tcp_common.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/oob/tcp/oob_tcp_common.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -72,7 +72,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  /**
</span><br>
<span class="quotelev2">&gt;&gt;   * Set socket buffering
</span><br>
<span class="quotelev2">&gt;&gt;   */
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +#if defined(SO_KEEPALIVE) &amp;&amp; !OPAL_HAVE_MAC
</span><br>
<span class="quotelev2">&gt;&gt;  static void set_keepalive(int sd)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      int option;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -146,6 +146,7 @@ static void set_keepalive(int sd)
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;  #endif  // TCP_KEEPCNT
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; +#endif //SO_KEEPALIVE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  void orte_oob_tcp_set_socket_options(int sd)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -181,7 +182,7 @@ void orte_oob_tcp_set_socket_options(int sd)
</span><br>
<span class="quotelev2">&gt;&gt;                              opal_socket_errno);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;  #endif
</span><br>
<span class="quotelev2">&gt;&gt; -#if defined(SO_KEEPALIVE)
</span><br>
<span class="quotelev2">&gt;&gt; +#if defined(SO_KEEPALIVE) &amp;&amp; !OPAL_HAVE_MAC
</span><br>
<span class="quotelev2">&gt;&gt;      if (0 &lt; mca_oob_tcp_component.keepalive_time) {
</span><br>
<span class="quotelev2">&gt;&gt;          set_keepalive(sd);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; b/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; index dd1af2a..372ed4c 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -404,7 +404,7 @@ static int tcp_component_register(void)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  &amp;mca_oob_tcp_component.disable_ipv6_family);
</span><br>
<span class="quotelev2">&gt;&gt;  #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +#if !OPAL_HAVE_MAC
</span><br>
<span class="quotelev2">&gt;&gt;      mca_oob_tcp_component.keepalive_time = 10;
</span><br>
<span class="quotelev2">&gt;&gt;      (void)mca_base_component_var_register(component, &quot;keepalive_time&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                            &quot;Idle time in seconds before
</span><br>
<span class="quotelev2">&gt;&gt; starting to send keepalives (num &lt;= 0 ----&gt; disable keepalive)&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -427,7 +427,8 @@ static int tcp_component_register(void)
</span><br>
<span class="quotelev2">&gt;&gt;                                            OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev2">&gt;&gt;                                            MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  &amp;mca_oob_tcp_component.keepalive_probes);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;      mca_oob_tcp_component.retry_delay = 0;
</span><br>
<span class="quotelev2">&gt;&gt;      (void)mca_base_component_var_register(component, &quot;retry_delay&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                            &quot;Time (in sec) to wait before
</span><br>
<span class="quotelev2">&gt;&gt; trying to connect to peer again&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt;&gt;  config/opal_check_os_flavors.m4      | 6 ++++++
</span><br>
<span class="quotelev2">&gt;&gt;  orte/mca/oob/tcp/oob_tcp_common.c    | 5 +++--
</span><br>
<span class="quotelev2">&gt;&gt;  orte/mca/oob/tcp/oob_tcp_component.c | 5 +++--
</span><br>
<span class="quotelev2">&gt;&gt;  3 files changed, 12 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; open-mpi/ompi
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; ompi-commits mailing list
</span><br>
<span class="quotelev2">&gt;&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17401.php">http://www.open-mpi.org/community/lists/devel/2015/05/17401.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17402/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17403.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17401.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>In reply to:</strong> <a href="17401.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17403.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Reply:</strong> <a href="17403.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
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
