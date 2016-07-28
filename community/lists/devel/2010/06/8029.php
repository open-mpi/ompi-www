<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 11:25:04 2010" -->
<!-- isoreceived="20100602152504" -->
<!-- sent="Wed, 2 Jun 2010 17:29:47 +0200 (CEST)" -->
<!-- isosent="20100602152947" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="alpine.DEB.2.00.1006021538500.3819_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="32FB9480-9458-4B59-B898-7C10A2E3792B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL add procs errors<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 11:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8030.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8028.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8022.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8030.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8030.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2 Jun 2010, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Don't you mean return NULL?  This function is supposed to return a (struct ibv_cq *).
</span><br>
Oops. My bad. Yes, it should return NULL. And it seems that if I make 
<br>
ibv_create_cq always return NULL, the scenario described by George works 
<br>
smoothly : returned OMPI_ERROR =&gt; bitmask cleared =&gt; connectivity problem 
<br>
=&gt; stop or tcp fallback. The problem is more complicated than I thought.
<br>
<p>But it made me progress on why I'm crashing : in my case, only a subset of 
<br>
processes have their create_cq fail. But others work fine, hence they 
<br>
request a qp creation, and my process which failed over on tcp starts 
<br>
creating a qp ... and crashes.
<br>
<p>If you replace :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
by :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (atoi(getenv(&quot;OMPI_COMM_WORLD_RANK&quot;)) == 26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
(yes, that's ugly, but it's just to debug the problem) and run on -say- 32 
<br>
processes, you should be able to reproduce the bug. Well, unless I'm 
<br>
mistaken again.
<br>
<p>The crash stack should look like this :
<br>
#0  0x0000003d0d605a30 in ibv_cmd_create_qp () from /usr/lib64/libibverbs.so.1
<br>
#1  0x00007f28b44e049b in ibv_cmd_create_qp () from /usr/lib64/libmlx4-rdmav2.so
<br>
#2  0x0000003d0d609a42 in ibv_create_qp () from /usr/lib64/libibverbs.so.1
<br>
#3  0x00007f28b6be6e6e in qp_create_one () from /home_nfs/jeaugeys/DISTS/openmpi-1.4.2/lib/openmpi/mca_btl_openib.so
<br>
#4  0x00007f28b6be78a4 in oob_module_start_connect () from /home_nfs/jeaugeys/DISTS/openmpi-1.4.2/lib/openmpi/mca_btl_openib.so
<br>
#5  0x00007f28b6be7fbb in rml_recv_cb () from /home_nfs/jeaugeys/DISTS/openmpi-1.4.2/lib/openmpi/mca_btl_openib.so
<br>
#6  0x00007f28b8c56868 in orte_rml_recv_msg_callback () from /home_nfs/jeaugeys/DISTS/openmpi-1.4.2/lib/openmpi/mca_rml_oob.so
<br>
#7  0x00007f28b8a4cf96 in mca_oob_tcp_msg_recv_complete () from /home_nfs/jeaugeys/DISTS/openmpi-1.4.2/lib/openmpi/mca_oob_tcp.so
<br>
#8  0x00007f28b8a4e2c2 in mca_oob_tcp_peer_recv_handler () from /home_nfs/jeaugeys/DISTS/openmpi-1.4.2/lib/openmpi/mca_oob_tcp.so
<br>
#9  0x00007f28b9496898 in opal_event_base_loop () from /home_nfs/jeaugeys/DISTS/openmpi-1.4.2/lib/libopen-pal.so.0
<br>
#10 0x00007f28b948ace9 in opal_progress () from /home_nfs/jeaugeys/DISTS/openmpi-1.4.2/lib/libopen-pal.so.0
<br>
#11 0x00007f28b9951ed5 in ompi_request_default_wait_all () from /home_nfs/jeaugeys/DISTS/openmpi-1.4.2/lib/libmpi.so.0
<br>
<p>This new advance may change everything. Of course, stopping at the bml 
<br>
level still &quot;solves&quot; the problem, but maybe we can fix this more properly 
<br>
within the openib BTL. Unless this is a general 
<br>
out-of-band-connection-protocol issue ().
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8030.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8028.php">Jeff Squyres: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8022.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8030.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8030.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
