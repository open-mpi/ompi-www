<?
$subject_val = "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 12:12:58 2007" -->
<!-- isoreceived="20071129171258" -->
<!-- sent="Thu, 29 Nov 2007 11:12:37 -0600" -->
<!-- isosent="20071129171237" -->
<!-- name="Bob Soliday" -->
<!-- email="soliday_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_peer_try_connect problem" -->
<!-- id="474EF305.8050604_at_aps.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF03295342_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca_oob_tcp_peer_try_connect problem<br>
<strong>From:</strong> Bob Soliday (<em>soliday_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 12:12:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4564.php">Rajesh Sudarsan: "[OMPI users] Reinitialize MPI_COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="4562.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>In reply to:</strong> <a href="4562.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4565.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Interesting.  Would you mind sharing your patch? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Bob Soliday
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 29, 2007 11:35 AM
</span><br>
<span class="quotelev1">&gt; To: Ralph H Castain
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mca_oob_tcp_peer_try_connect problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I solved the problem by making a change to
</span><br>
<span class="quotelev1">&gt; orte/mca/oob/tcp/oob_tcp_peer.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Linux 2.6 I have read that after a failed connect system call the
</span><br>
<span class="quotelev1">&gt; next call to connect can immediately return ECONNABORTED and not try to
</span><br>
<span class="quotelev1">&gt; actually connect, the next call to connect will then work. So I changed
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_peer_try_connect to test for ECONNABORTED and then call
</span><br>
<span class="quotelev1">&gt; connect again. The hello_c example script is now working.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think this has solved the underlying cause as to way connect is
</span><br>
<span class="quotelev1">&gt; failing in the first place but at least now I move on to the next step.
</span><br>
<span class="quotelev1">&gt; My best guess at the moment is that it is using eth0 initially when I
</span><br>
<span class="quotelev1">&gt; want it to use eth1. This fails and then when it moves on to eth1 I run
</span><br>
<span class="quotelev1">&gt; into the &quot;can't call connect after it just failed bug&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Bob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I changed oob_tcp_peer.c at line 289 from:
<br>
<p><p>/* start the connect - will likely fail with EINPROGRESS */
<br>
if(connect(peer-&gt;peer_sd,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(struct sockaddr*)&amp;inaddr, sizeof(struct sockaddr_in)) &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;/* non-blocking so wait for completion */
<br>
&nbsp;&nbsp;&nbsp;if(opal_socket_errno == EINPROGRESS || opal_socket_errno == EWOULDBLOCK) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_event_add(&amp;peer-&gt;peer_send_event, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;opal_output(0, &quot;[%lu,%lu,%lu]-[%lu,%lu,%lu] mca_oob_tcp_peer_try_connect: &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;connect to %s:%d failed: %s (%d)&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_ARGS(orte_process_info.my_name),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_ARGS(&amp;(peer-&gt;peer_name)),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet_ntoa(inaddr.sin_addr),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ntohs(inaddr.sin_port),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strerror(opal_socket_errno),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_socket_errno);
<br>
&nbsp;&nbsp;&nbsp;continue;
<br>
}
<br>
<p><p>to:
<br>
<p><p>/* start the connect - will likely fail with EINPROGRESS */
<br>
if(connect(peer-&gt;peer_sd,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(struct sockaddr*)&amp;inaddr, sizeof(struct sockaddr_in)) &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;/* non-blocking so wait for completion */
<br>
&nbsp;&nbsp;&nbsp;if (opal_socket_errno == ECONNABORTED) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(connect(peer-&gt;peer_sd,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(struct sockaddr*)&amp;inaddr, sizeof(struct sockaddr_in)) &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(opal_socket_errno == EINPROGRESS || opal_socket_errno == EWOULDBLOCK) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_event_add(&amp;peer-&gt;peer_send_event, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;[%lu,%lu,%lu]-[%lu,%lu,%lu] mca_oob_tcp_peer_try_connect: &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;connect to %s:%d failed: %s (%d)&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_ARGS(orte_process_info.my_name),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_ARGS(&amp;(peer-&gt;peer_name)),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet_ntoa(inaddr.sin_addr),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ntohs(inaddr.sin_port),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strerror(opal_socket_errno),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_socket_errno);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(opal_socket_errno == EINPROGRESS || opal_socket_errno == EWOULDBLOCK) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_event_add(&amp;peer-&gt;peer_send_event, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;[%lu,%lu,%lu]-[%lu,%lu,%lu] mca_oob_tcp_peer_try_connect: &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;connect to %s:%d failed: %s (%d)&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_ARGS(orte_process_info.my_name),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_ARGS(&amp;(peer-&gt;peer_name)),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet_ntoa(inaddr.sin_addr),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ntohs(inaddr.sin_port),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strerror(opal_socket_errno),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_socket_errno);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4564.php">Rajesh Sudarsan: "[OMPI users] Reinitialize MPI_COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="4562.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>In reply to:</strong> <a href="4562.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4565.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
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
