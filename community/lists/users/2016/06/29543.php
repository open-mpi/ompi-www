<?
$subject_val = "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 24 09:08:10 2016" -->
<!-- isoreceived="20160624130810" -->
<!-- sent="Fri, 24 Jun 2016 13:08:07 +0000" -->
<!-- isosent="20160624130807" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers" -->
<!-- id="287EA471-552A-4092-AE67-3CCDBD0B4BE3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="576D18C8.4070703_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-24 09:08:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29544.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Previous message:</strong> <a href="29542.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>In reply to:</strong> <a href="29542.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29544.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Reply:</strong> <a href="29544.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 24, 2016, at 7:26 AM, knawnd_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun --mca btl_tcp_if_include venet0:0 --mca oob_tcp_if_include venet0:0 ...
</span><br>
<span class="quotelev2">&gt; &gt; See if that works.
</span><br>
<span class="quotelev1">&gt; Jeff, thanks a lot for such prompt reply, detailed explanation and suggestion! But unfortunately the error is still the same:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [user_at_ct110 hello]$ /opt/openmpi/1.10.3/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include venet0:0 --mca oob_tcp_if_include venet0:0 -np 1 -host 10.0.50.41 hostname
</span><br>
<span class="quotelev1">&gt; [ct111.domain.org:01054] [[12888,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [...snip...]
</span><br>
<p>I'm reminded of the fact that we did some tests on OpenVZ recently, and I had to add a hack to make Open MPI skip one of the interfaces:
<br>
<p>-----
<br>
diff --git a/opal/mca/if/posix_ipv4/if_posix.c b/opal/mca/if/posix_ipv4/if_posix
<br>
index 6f75533..ed447e7 100644
<br>
--- a/opal/mca/if/posix_ipv4/if_posix.c
<br>
+++ b/opal/mca/if/posix_ipv4/if_posix.c
<br>
@@ -221,6 +221,15 @@ static int if_posix_open(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strncpy(intf-&gt;if_name, ifr-&gt;ifr_name, sizeof(intf-&gt;if_name) - 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intf-&gt;if_flags = ifr-&gt;ifr_flags;
<br>
<p>+       // JMS Hackaround for OpenVZ
<br>
+       if (strcmp(intf-&gt;if_name, &quot;venet0&quot;) == 0) {
<br>
+            opal_output_verbose(1, opal_if_base_framework.framework_output,
<br>
+                                &quot;OpenVZ hack:%s:%d: skipping interface venet0&quot;,
<br>
+                                __FILE__, __LINE__);
<br>
+           OBJ_RELEASE(intf);
<br>
+            continue;
<br>
+       }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* every new address gets its own internal if_index */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intf-&gt;if_index = opal_list_get_size(&amp;opal_if_list)+1;
<br>
<p>-----
<br>
<p>Can you try this and see if it works for you?
<br>
<p>If so, we might need to something a bit more methodical / deliberate to make Open MPI work on openvz.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29544.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Previous message:</strong> <a href="29542.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>In reply to:</strong> <a href="29542.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29544.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Reply:</strong> <a href="29544.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
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
