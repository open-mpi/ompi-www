<?
$subject_val = "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 24 10:31:42 2016" -->
<!-- isoreceived="20160624143142" -->
<!-- sent="Fri, 24 Jun 2016 17:31:27 +0300" -->
<!-- isosent="20160624143127" -->
<!-- name="knawnd_at_[hidden]" -->
<!-- email="knawnd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers" -->
<!-- id="576D443F.9000509_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="287EA471-552A-4092-AE67-3CCDBD0B4BE3_at_cisco.com" -->
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
<strong>From:</strong> <a href="mailto:knawnd_at_[hidden]?Subject=Re:%20[OMPI%20users]%20tcp_peer_send_blocking:%20send()%20to%20socket%209%20failed:%20Broken%20pipe%20(32)%20on%20openvz%20containers"><em>knawnd_at_[hidden]</em></a><br>
<strong>Date:</strong> 2016-06-24 10:31:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29545.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Previous message:</strong> <a href="29543.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>In reply to:</strong> <a href="29543.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29545.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Reply:</strong> <a href="29545.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, It works now! Thank you so much!
<br>
<p>[user_at_ct110 hello]$ /opt/openmpi/1.10.3-1/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include 
<br>
venet0:0 --mca oob_tcp_if_include venet0:0 -npernode 1 -np 2 --hostfile mpi_hosts.txt hostname
<br>
ct110
<br>
ct111
<br>
<p>[user_at_ct110 hello]$ /opt/openmpi/1.10.3-1/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include 
<br>
venet0:0 --mca oob_tcp_if_include venet0:0 -npernode 1 -np 2 --hostfile mpi_hosts.txt ./hello.bin
<br>
Hello world! from processor 0 (name=ct110 ) out of 2
<br>
wall clock time = 0.000001
<br>
Hello world! from processor 1 (name=ct111 ) out of 2
<br>
wall clock time = 0.000002
<br>
<p>It's not even needed to specify venet0:0:
<br>
[user_at_ct110 hello]$ /opt/openmpi/1.10.3-1/bin/mpirun -npernode 1 -np 2 --hostfile mpi_hosts.txt 
<br>
./hello.bin
<br>
Hello world! from processor 0 (name=ct110 ) out of 2
<br>
wall clock time = 0.000002
<br>
Hello world! from processor 1 (name=ct111 ) out of 2
<br>
wall clock time = 0.000001
<br>
<p>Thanks a lot indeed!
<br>
<p><p>Jeff Squyres (jsquyres) wrote on 24/06/16 16:08:
<br>
<span class="quotelev1">&gt; On Jun 24, 2016, at 7:26 AM, knawnd_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mpirun --mca btl_tcp_if_include venet0:0 --mca oob_tcp_if_include venet0:0 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See if that works.
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, thanks a lot for such prompt reply, detailed explanation and suggestion! But unfortunately the error is still the same:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [user_at_ct110 hello]$ /opt/openmpi/1.10.3/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include venet0:0 --mca oob_tcp_if_include venet0:0 -np 1 -host 10.0.50.41 hostname
</span><br>
<span class="quotelev2">&gt;&gt; [ct111.domain.org:01054] [[12888,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [...snip...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm reminded of the fact that we did some tests on OpenVZ recently, and I had to add a hack to make Open MPI skip one of the interfaces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/if/posix_ipv4/if_posix.c b/opal/mca/if/posix_ipv4/if_posix
</span><br>
<span class="quotelev1">&gt; index 6f75533..ed447e7 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/if/posix_ipv4/if_posix.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/if/posix_ipv4/if_posix.c
</span><br>
<span class="quotelev1">&gt; @@ -221,6 +221,15 @@ static int if_posix_open(void)
</span><br>
<span class="quotelev1">&gt;          strncpy(intf-&gt;if_name, ifr-&gt;ifr_name, sizeof(intf-&gt;if_name) - 1);
</span><br>
<span class="quotelev1">&gt;          intf-&gt;if_flags = ifr-&gt;ifr_flags;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +       // JMS Hackaround for OpenVZ
</span><br>
<span class="quotelev1">&gt; +       if (strcmp(intf-&gt;if_name, &quot;venet0&quot;) == 0) {
</span><br>
<span class="quotelev1">&gt; +            opal_output_verbose(1, opal_if_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; +                                &quot;OpenVZ hack:%s:%d: skipping interface venet0&quot;,
</span><br>
<span class="quotelev1">&gt; +                                __FILE__, __LINE__);
</span><br>
<span class="quotelev1">&gt; +           OBJ_RELEASE(intf);
</span><br>
<span class="quotelev1">&gt; +            continue;
</span><br>
<span class="quotelev1">&gt; +       }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;          /* every new address gets its own internal if_index */
</span><br>
<span class="quotelev1">&gt;          intf-&gt;if_index = opal_list_get_size(&amp;opal_if_list)+1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try this and see if it works for you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, we might need to something a bit more methodical / deliberate to make Open MPI work on openvz.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29545.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Previous message:</strong> <a href="29543.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>In reply to:</strong> <a href="29543.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29545.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Reply:</strong> <a href="29545.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
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
