<?
$subject_val = "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 24 07:26:04 2016" -->
<!-- isoreceived="20160624112604" -->
<!-- sent="Fri, 24 Jun 2016 14:26:00 +0300" -->
<!-- isosent="20160624112600" -->
<!-- name="knawnd_at_[hidden]" -->
<!-- email="knawnd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers" -->
<!-- id="576D18C8.4070703_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DAE44F2B-6FD4-4D1C-9E7A-DBEF4E339323_at_cisco.com" -->
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
<strong>Date:</strong> 2016-06-24 07:26:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29543.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Previous message:</strong> <a href="29541.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>In reply to:</strong> <a href="29541.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29543.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Reply:</strong> <a href="29543.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote on 24/06/16 13:43:
<br>
<span class="quotelev1">&gt; Nikolay --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all the detail!  That helps a tremendous amount.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI actually uses IP networks in *two* ways:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. for command and control
</span><br>
<span class="quotelev1">&gt; 2. for MPI communications
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your use of btl_tcp_if_include regulates #2, but not #1 -- you need to add another MCA param to regulate #1.  Try this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun --mca btl_tcp_if_include venet0:0 --mca oob_tcp_if_include venet0:0 ...
</span><br>
<span class="quotelev1"> &gt; See if that works.
</span><br>
Jeff, thanks a lot for such prompt reply, detailed explanation and suggestion! But unfortunately the 
<br>
error is still the same:
<br>
<p>[user_at_ct110 hello]$ /opt/openmpi/1.10.3/bin/mpirun --mca btl self,tcp --mca btl_tcp_if_include 
<br>
venet0:0 --mca oob_tcp_if_include venet0:0 -np 1 -host 10.0.50.41 hostname
<br>
[ct111.domain.org:01054] [[12888,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken 
<br>
pipe (32)
<br>
[...snip...]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29543.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Previous message:</strong> <a href="29541.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>In reply to:</strong> <a href="29541.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29543.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Reply:</strong> <a href="29543.php">Jeff Squyres (jsquyres): "Re: [OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
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
