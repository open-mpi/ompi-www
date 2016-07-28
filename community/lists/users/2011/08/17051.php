<?
$subject_val = "Re: [OMPI users] Open MPI via SSH noob issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 11 08:07:42 2011" -->
<!-- isoreceived="20110811120742" -->
<!-- sent="Thu, 11 Aug 2011 08:07:36 -0400" -->
<!-- isosent="20110811120736" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI via SSH noob issue" -->
<!-- id="44EF3785-469F-4834-A880-D320AB444335_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3D78AEFC-9A05-42B5-9AC0-02583B0224C4_at_mikrob.slu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI via SSH noob issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-11 08:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17052.php">CB: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<li><strong>Previous message:</strong> <a href="17050.php">Christopher Jones: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>In reply to:</strong> <a href="17050.php">Christopher Jones: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 11, 2011, at 2:12 AM, Christopher Jones wrote:
<br>
<p><span class="quotelev1">&gt; Ok - I see what I missed in the FAQ, sorry about that....my understanding of the shell is a bit minimal to say the least. I now have my .bashrc files configured as such on both computers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/opt/local/openmpi/lib:{$PATH}
</span><br>
<span class="quotelev1">&gt; export PATH=/opt/local/openmpi/bin:{$PATH}
</span><br>
<p>Good!
<br>
<p><span class="quotelev1">&gt; However, I am now running into a new issue that is still cryptic to me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; quadcore:~ chrisjones$ /opt/local/openmpi/bin/mpirun -np 8 -hostfile hostfile ./ring_c
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (8 processes in ring)
</span><br>
<span class="quotelev1">&gt; [quadcore.mikrob.slu.se][[53435,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 127.0.0.1 failed: Connection refused (61)
</span><br>
<p>This sounds like you have firewalls enabled on your machines.
<br>
<p>Open MPI essentially requires the ability to open random TCP sockets between processes on all of the nodes that its running on.  Can you disable the firewalls, or add implicit trust between all the nodes on which you'll be running?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17052.php">CB: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<li><strong>Previous message:</strong> <a href="17050.php">Christopher Jones: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>In reply to:</strong> <a href="17050.php">Christopher Jones: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
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
