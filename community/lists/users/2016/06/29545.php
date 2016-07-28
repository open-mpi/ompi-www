<?
$subject_val = "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 24 10:45:52 2016" -->
<!-- isoreceived="20160624144552" -->
<!-- sent="Fri, 24 Jun 2016 14:45:50 +0000" -->
<!-- isosent="20160624144550" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers" -->
<!-- id="8CC89AA9-9AE8-4AFD-8ABD-6BE90C76F4AB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="576D443F.9000509_at_gmail.com" -->
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
<strong>Date:</strong> 2016-06-24 10:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29546.php">Richard C. Wagner: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Previous message:</strong> <a href="29544.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>In reply to:</strong> <a href="29544.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, great.
<br>
<p>I've opened up <a href="https://github.com/open-mpi/ompi/pull/1814">https://github.com/open-mpi/ompi/pull/1814</a> to track the issue.  This hack around certainly isn't going to ship in an Open MPI production tarball; we should probably do something more formal / correct.
<br>
<p><p><span class="quotelev1">&gt; On Jun 24, 2016, at 10:31 AM, knawnd_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff, It works now! Thank you so much!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [user_at_ct110 hello]$ /opt/openmpi/1.10.3-1/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include venet0:0 --mca oob_tcp_if_include venet0:0 -npernode 1 -np 2 --hostfile mpi_hosts.txt hostname
</span><br>
<span class="quotelev1">&gt; ct110
</span><br>
<span class="quotelev1">&gt; ct111
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [user_at_ct110 hello]$ /opt/openmpi/1.10.3-1/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include venet0:0 --mca oob_tcp_if_include venet0:0 -npernode 1 -np 2 --hostfile mpi_hosts.txt ./hello.bin
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 0 (name=ct110 ) out of 2
</span><br>
<span class="quotelev1">&gt; wall clock time = 0.000001
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 1 (name=ct111 ) out of 2
</span><br>
<span class="quotelev1">&gt; wall clock time = 0.000002
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not even needed to specify venet0:0:
</span><br>
<span class="quotelev1">&gt; [user_at_ct110 hello]$ /opt/openmpi/1.10.3-1/bin/mpirun -npernode 1 -np 2 --hostfile mpi_hosts.txt ./hello.bin
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 0 (name=ct110 ) out of 2
</span><br>
<span class="quotelev1">&gt; wall clock time = 0.000002
</span><br>
<span class="quotelev1">&gt; Hello world! from processor 1 (name=ct111 ) out of 2
</span><br>
<span class="quotelev1">&gt; wall clock time = 0.000001
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot indeed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote on 24/06/16 16:08:
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 24, 2016, at 7:26 AM, knawnd_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mpirun --mca btl_tcp_if_include venet0:0 --mca oob_tcp_if_include venet0:0 ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; See if that works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff, thanks a lot for such prompt reply, detailed explanation and suggestion! But unfortunately the error is still the same:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [user_at_ct110 hello]$ /opt/openmpi/1.10.3/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include venet0:0 --mca oob_tcp_if_include venet0:0 -np 1 -host 10.0.50.41 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ct111.domain.org:01054] [[12888,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...snip...]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm reminded of the fact that we did some tests on OpenVZ recently, and I had to add a hack to make Open MPI skip one of the interfaces:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/if/posix_ipv4/if_posix.c b/opal/mca/if/posix_ipv4/if_posix
</span><br>
<span class="quotelev2">&gt;&gt; index 6f75533..ed447e7 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/if/posix_ipv4/if_posix.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/if/posix_ipv4/if_posix.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -221,6 +221,15 @@ static int if_posix_open(void)
</span><br>
<span class="quotelev2">&gt;&gt;         strncpy(intf-&gt;if_name, ifr-&gt;ifr_name, sizeof(intf-&gt;if_name) - 1);
</span><br>
<span class="quotelev2">&gt;&gt;         intf-&gt;if_flags = ifr-&gt;ifr_flags;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +       // JMS Hackaround for OpenVZ
</span><br>
<span class="quotelev2">&gt;&gt; +       if (strcmp(intf-&gt;if_name, &quot;venet0&quot;) == 0) {
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_output_verbose(1, opal_if_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt;&gt; +                                &quot;OpenVZ hack:%s:%d: skipping interface venet0&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                                __FILE__, __LINE__);
</span><br>
<span class="quotelev2">&gt;&gt; +           OBJ_RELEASE(intf);
</span><br>
<span class="quotelev2">&gt;&gt; +            continue;
</span><br>
<span class="quotelev2">&gt;&gt; +       }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;         /* every new address gets its own internal if_index */
</span><br>
<span class="quotelev2">&gt;&gt;         intf-&gt;if_index = opal_list_get_size(&amp;opal_if_list)+1;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you try this and see if it works for you?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If so, we might need to something a bit more methodical / deliberate to make Open MPI work on openvz.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29544.php">http://www.open-mpi.org/community/lists/users/2016/06/29544.php</a>
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
<li><strong>Next message:</strong> <a href="29546.php">Richard C. Wagner: "Re: [OMPI users] Shared Libraries"</a>
<li><strong>Previous message:</strong> <a href="29544.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>In reply to:</strong> <a href="29544.php">knawnd_at_[hidden]: "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
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
