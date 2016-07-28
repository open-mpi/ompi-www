<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31376 - trunk/orte/mca/oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 13 20:29:39 2014" -->
<!-- isoreceived="20140414002939" -->
<!-- sent="Sun, 13 Apr 2014 17:28:23 -0700" -->
<!-- isosent="20140414002823" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31376 - trunk/orte/mca/oob/tcp" -->
<!-- id="C1781558-A3C4-47B5-BAF6-44C89065D337_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E36A8BD1-673C-4850-81AB-B5B347A4C2D2_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r31376 - trunk/orte/mca/oob/tcp<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-13 20:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14505.php">Mike Dubman: "Re: [OMPI devel] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14503.php">George Bosilca: "Re: [OMPI devel] Trunk datatype warnings"</a>
<li><strong>In reply to:</strong> <a href="14502.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31376 - trunk/orte/mca/oob/tcp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's fair, and a good point - I'll change it to a pipe. Thx!
<br>
<p>On Apr 13, 2014, at 4:42 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Inter-process communications are better handled via pipes and sockets than opening /dev/null. More generic and it does not depend on any particularities of the /dev/null file system implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2014, at 19:26 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ??? How is that any different/better than what was done?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 13, 2014, at 4:23 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Isn&#146;t a socket or a pipe the right way to address this issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 12, 2014, at 11:01 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2014-04-12 11:01:24 EDT (Sat, 12 Apr 2014)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 31376
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31376">https://svn.open-mpi.org/trac/ompi/changeset/31376</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ensure we properly terminate the listening thread prior to exiting, but do so in a way that doesn't make us wait for select to timeout.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Refs #4510
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/orte/mca/oob/tcp/oob_tcp_component.c |     9 ++++++---                               
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/orte/mca/oob/tcp/oob_tcp_component.h |     2 ++                                      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/orte/mca/oob/tcp/oob_tcp_listener.c  |    17 ++++++++++++-----                       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3 files changed, 20 insertions(+), 8 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp_component.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/orte/mca/oob/tcp/oob_tcp_component.c	Sat Apr 12 10:43:20 2014	(r31375)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp_component.c	2014-04-12 11:01:24 EDT (Sat, 12 Apr 2014)	(r31376)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -140,8 +140,8 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  if (ORTE_PROC_IS_HNP) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      OBJ_CONSTRUCT(&amp;mca_oob_tcp_component.listen_thread, opal_thread_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mca_oob_tcp_component.listen_thread_active = false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        mca_oob_tcp_component.listen_thread_tv.tv_sec = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        mca_oob_tcp_component.listen_thread_tv.tv_usec = 300000;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        mca_oob_tcp_component.listen_thread_tv.tv_sec = 3600;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        mca_oob_tcp_component.listen_thread_tv.tv_usec = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  mca_oob_tcp_component.addr_count = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  OBJ_CONSTRUCT(&amp;mca_oob_tcp_component.modules, opal_pointer_array_t);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -659,7 +659,10 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  if (ORTE_PROC_IS_HNP &amp;&amp; mca_oob_tcp_component.listen_thread_active) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        mca_oob_tcp_component.listen_thread_active = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        mca_oob_tcp_component.listen_thread_active = false;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        /* tell the thread to exit */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        write(mca_oob_tcp_component.stop_thread, &amp;i, sizeof(int));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        opal_thread_join(&amp;mca_oob_tcp_component.listen_thread, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  while (NULL != (item = opal_list_remove_first(&amp;mca_oob_tcp_component.listeners))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp_component.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/orte/mca/oob/tcp/oob_tcp_component.h	Sat Apr 12 10:43:20 2014	(r31375)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp_component.h	2014-04-12 11:01:24 EDT (Sat, 12 Apr 2014)	(r31376)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -12,6 +12,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Copyright (c) 2006-2013 Los Alamos National Security, LLC. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Copyright (c) 2010-2011 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; + * Copyright (c) 2014      Intel, Inc. All rights reserved
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Additional copyrights may follow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -77,6 +78,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  opal_thread_t      listen_thread;          /**&lt; handle to the listening thread */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  bool               listen_thread_active;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  struct timeval     listen_thread_tv;       /**&lt; Timeout when using listen thread */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    int                stop_thread;            /**&lt; file descriptor used to exit the listen thread */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /* peers available via this transport - the index is the process name,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   * and the pointer returned is the pointer to the last module that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/orte/mca/oob/tcp/oob_tcp_listener.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/orte/mca/oob/tcp/oob_tcp_listener.c	Sat Apr 12 10:43:20 2014	(r31375)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/orte/mca/oob/tcp/oob_tcp_listener.c	2014-04-12 11:01:24 EDT (Sat, 12 Apr 2014)	(r31376)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -121,11 +121,11 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    /* if I am the HNP, create a separate event base for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -     * listening thread so we can harvest connection requests
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -     * as rapidly as possible
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    /* if I am the HNP, start a listening thread so we can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +     * harvest connection requests as rapidly as possible
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  if (ORTE_PROC_IS_HNP) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        mca_oob_tcp_component.stop_thread = open(&quot;/dev/null&quot;, O_RDWR);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mca_oob_tcp_component.listen_thread_active = true;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mca_oob_tcp_component.listen_thread.t_run = listen_thread;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mca_oob_tcp_component.listen_thread.t_arg = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -641,15 +641,22 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          FD_SET(listener-&gt;sd, &amp;readfds);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          max = (listener-&gt;sd &gt; max) ? listener-&gt;sd : max;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        /* add the stop_thread fd */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        FD_SET(mca_oob_tcp_component.stop_thread, &amp;readfds);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        max = (mca_oob_tcp_component.stop_thread &gt; max) ? mca_oob_tcp_component.stop_thread : max;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      /* set timeout interval */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      timeout.tv_sec = mca_oob_tcp_component.listen_thread_tv.tv_sec;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      timeout.tv_usec = mca_oob_tcp_component.listen_thread_tv.tv_usec;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        /* Block in a select for a short (10ms) amount of time to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -         * avoid hammering the cpu.  If a connection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        /* Block in a select to avoid hammering the cpu.  If a connection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       * comes in, we'll get woken up right away.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      rc = select(max + 1, &amp;readfds, NULL, NULL, &amp;timeout);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        if (!mca_oob_tcp_component.listen_thread_active) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            /* we've been asked to terminate */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            return NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      if (rc &lt; 0) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          if (EAGAIN != opal_socket_errno &amp;&amp; EINTR != opal_socket_errno) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              perror(&quot;select&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14500.php">http://www.open-mpi.org/community/lists/devel/2014/04/14500.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14501.php">http://www.open-mpi.org/community/lists/devel/2014/04/14501.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14502.php">http://www.open-mpi.org/community/lists/devel/2014/04/14502.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14505.php">Mike Dubman: "Re: [OMPI devel] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14503.php">George Bosilca: "Re: [OMPI devel] Trunk datatype warnings"</a>
<li><strong>In reply to:</strong> <a href="14502.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31376 - trunk/orte/mca/oob/tcp"</a>
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
