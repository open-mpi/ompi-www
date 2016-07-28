<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 16 08:49:59 2015" -->
<!-- isoreceived="20150516124959" -->
<!-- sent="Sat, 16 May 2015 12:49:51 +0000" -->
<!-- isosent="20150516124951" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579" -->
<!-- id="A43748E0-4041-4BBE-9AD8-B10B722A274D_at_cisco.com" -->
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
<strong>Date:</strong> 2015-05-16 08:49:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17411.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>In reply to:</strong> <a href="17408.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17411.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Reply:</strong> <a href="17411.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I looked at this in a bit more detail this morning.
<br>
<p>SHORT VERSION
<br>
-------------
<br>
<p>I think that the real issue is that we shouldn't be setting KEEPALIVE on the listening sockets (we should only be setting these values on accepted/connected sockets).
<br>
<p>I submitted a PR for this: <a href="https://github.com/open-mpi/ompi/pull/588">https://github.com/open-mpi/ompi/pull/588</a>; there are several commits on it, the key commit is <a href="https://github.com/jsquyres/ompi/commit/ece484c">https://github.com/jsquyres/ompi/commit/ece484c</a>.
<br>
<p>The OS X kernel reports its default keep alive values in milliseconds, and the Linux kernel reports its default values in seconds.  But I can't find definitive references to the units for setsoctopt(TCP_KEEPALIVE) (and friends) -- empirical testing on OS X shows that TCP_KEEPALIVE is definitely specified in *seconds*.
<br>
<p>MORE DETAIL
<br>
-----------
<br>
<p>We only need to set KEEPALIVE on the accepted/connected sockets; there's no point in setting KEEPALIVE -- or any of our usual socket options (e.g., RCVBUF, NODELAY, etc.) -- on the listening sockets because the listening sockets are not used to send/receive anything.
<br>
<p>Specifically: not setting these values for the listening sockets avoids the memory leak that started this whole kerfuffle.
<br>
<p>As for whether the units are in seconds vs. milliseconds: I found references to how the Linux and OS X kernels report the values (Linux: seconds, OS X: milliseconds), but I can't find any references to the units used when settings the values via setsockopt().  Most references I found imply *seconds*.
<br>
<p>I think either OS X may be buggy, or the behavior of keepalives on listening sockets is just different vs. keep alive behavior on connected sockets.  On OS X, when I setsockopt(sd, SOL_SOCKET, SO_KEEPALIVE, ...) to a value of 10, I see that the listener socket doesn't generate its first EAGAIN for 10 seconds.  But then it generates EAGAINs constantly after that, regardless of the TCP_KEEPINTVL value that is set.  Specifically, I tried setting TCP_KEEPINVTL to 1 and 1000 -- there was no change in frequency of the EAGAINs after the first one was generated.
<br>
<p>--&gt; But that may be moot because KEEPALIVE behavior on an unconnected socket may be ... weird/undefined/whatever.
<br>
<p>However, the OS X kernel clearly reports its default keepavlie values in milliseconds, and the Linux kernel clearly reports its default values in seconds.  I ran the following commands on my systems, based on information I found on <a href="http://www.gnugk.org/keepalive.html">http://www.gnugk.org/keepalive.html</a>:
<br>
<p>Linux / RHEL 6.5 / 2.6.32 kernel (this is clearly in seconds):
<br>
<p>$ sysctl net.ipv4.tcp_keepalive_time
<br>
net.ipv4.tcp_keepalive_time = 1800
<br>
$ sysctl net.ipv4.tcp_keepalive_intvl
<br>
net.ipv4.tcp_keepalive_intvl = 75
<br>
<p>Linux / Ubuntu 14.04.2 / 3.16.0 kernel (this is clearly in seconds):
<br>
<p>$ sysctl net.ipv4.tcp_keepalive_time
<br>
net.ipv4.tcp_keepalive_time = 7200
<br>
$ sysctl net.ipv4.tcp_keepalive_intvl
<br>
net.ipv4.tcp_keepalive_intvl = 75
<br>
<p>OS X 10.10 / Yosemite (this is clearly in microseconds):
<br>
<p>$ sysctl net.inet.tcp.keepidle
<br>
net.inet.tcp.keepidle: 7200000
<br>
$ sysctl net.inet.tcp.keepintvl
<br>
net.inet.tcp.keepintvl: 75000
<br>
<p><p><p><p><span class="quotelev1">&gt; On May 15, 2015, at 8:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did some more digging, and it turns out that Linux specifies the keep alive time interval in seconds - and Mac (for some strange reason) uses milliseconds. Hence the difference in behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I could replace the current commit with one that multiplies the keep alive interval by 1000x if we are on a Mac. However, we don't really need keep alive at all on the Mac, so I'm wondering if we shouldn't just leave it turned off?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I confess I don't care either way
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 14, 2015 at 10:46 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; In the worst case, i.e. no other solution is possible, OS X can be identified by the existence of the macro __APPLE__. There is no need to have OPAL_HAVE_MAC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 14, 2015 at 11:12 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Interesting - as I said, I'll take a look. In either case, the keep alive on the Mac is unnecessary as it is always a standalone scenario - no value in running it. So the &quot;fix&quot; does no harm and just saves some useless overhead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 14, 2015 at 9:00 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I'm sorry Ralph what you proposed is not really a fix. My comment is based on a real execution of exactly the command you provided with lldb attached to the process. What I see is millions of OBJ_NEW(mca_oob_tcp_pending_connection_t) because the EAGAIN is not correctly handled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 14, 2015 at 10:56 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Yes - this is the fix for that issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 14, 2015 at 8:54 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Is this by any chance associated with issue 579?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-05-14 20:49 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; I'll look at the lines you cite, but that clearly isn't the problem we are seeing here. I can verify that because the test case:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 sleep 1000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; does not open up any connections at all. Thus, the use-case you describe never occurs - yet we still blow up in memory. If I simply tell the OOB not to set keep alive, the problem goes away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It only happens on Mac, and we never see Mac based clusters, so turning off keep alive on the Mac seems a pretty simple solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 14, 2015 at 8:43 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code pushed in g8e30579 is clearly not the right solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem starts in oob_tcp_listener.c line 742. A new mca_oob_tcp_pending_connection_t object is allocated to store the incoming connection. The accept few lines below fails with an error code of 0x23 which means &quot;resource temporary unavailable&quot; on OS X (i.e. EAGAIN). Thus, the if at line 750 is skipped, and we reach line 763 (a &quot;continue&quot;) with 1) a connection not accepted, and 2) an allocated object not release. Voila!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Freeing the pending_connection object is not the right approach either, as it will only remove the memory leak but the process will become a CPU hog.
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
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
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
<span class="quotelev1">&gt;     The Mac appears to have problems with the keepalive support - once keepalive starts, the memory footprint soars. So disable keepalive on the Mac
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/config/opal_check_os_flavors.m4 b/config/opal_check_os_flavors.m4
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
<span class="quotelev1">&gt; diff --git a/orte/mca/oob/tcp/oob_tcp_common.c b/orte/mca/oob/tcp/oob_tcp_common.c
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
<span class="quotelev1">&gt; diff --git a/orte/mca/oob/tcp/oob_tcp_component.c b/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev1">&gt; index dd1af2a..372ed4c 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev1">&gt; @@ -404,7 +404,7 @@ static int tcp_component_register(void)
</span><br>
<span class="quotelev1">&gt;                                            &amp;mca_oob_tcp_component.disable_ipv6_family);
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
<span class="quotelev1">&gt;                                            &quot;Idle time in seconds before starting to send keepalives (num &lt;= 0 ----&gt; disable keepalive)&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -427,7 +427,8 @@ static int tcp_component_register(void)
</span><br>
<span class="quotelev1">&gt;                                            OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev1">&gt;                                            MCA_BASE_VAR_SCOPE_READONLY,
</span><br>
<span class="quotelev1">&gt;                                            &amp;mca_oob_tcp_component.keepalive_probes);
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
<span class="quotelev1">&gt;                                            &quot;Time (in sec) to wait before trying to connect to peer again&quot;,
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17401.php">http://www.open-mpi.org/community/lists/devel/2015/05/17401.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17402.php">http://www.open-mpi.org/community/lists/devel/2015/05/17402.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17403.php">http://www.open-mpi.org/community/lists/devel/2015/05/17403.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17404.php">http://www.open-mpi.org/community/lists/devel/2015/05/17404.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17405.php">http://www.open-mpi.org/community/lists/devel/2015/05/17405.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17406.php">http://www.open-mpi.org/community/lists/devel/2015/05/17406.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17407.php">http://www.open-mpi.org/community/lists/devel/2015/05/17407.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17408.php">http://www.open-mpi.org/community/lists/devel/2015/05/17408.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17411.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>In reply to:</strong> <a href="17408.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17411.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Reply:</strong> <a href="17411.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
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
