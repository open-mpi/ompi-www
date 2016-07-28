<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 15:53:03 2007" -->
<!-- isoreceived="20070508195303" -->
<!-- sent="Tue, 08 May 2007 14:52:59 -0500" -->
<!-- isosent="20070508195259" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)" -->
<!-- id="1178653979.11455.4.camel_at_stevo-desktop" -->
<!-- inreplyto="4640BA18.7060104_at_open-mpi.org" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-08 15:52:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1490.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and RDMA-CM)"</a>
<li><strong>Previous message:</strong> <a href="1488.php">Andrew Friedley: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI and	RDMA-CM)"</a>
<li><strong>In reply to:</strong> <a href="1488.php">Andrew Friedley: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI and	RDMA-CM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1493.php">Donald Kerr: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<li><strong>Reply:</strong> <a href="1493.php">Donald Kerr: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2007-05-08 at 13:57 -0400, Andrew Friedley wrote:
<br>
<span class="quotelev1">&gt; Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Well I've tried OMPI on ofed-1.2 udapl today and it doesn't work.  I'm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; debugging now.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here's part of the problem (from ompi/btl/udapl/btl_udapl.c):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     /* TODO - big bad evil hack! */
</span><br>
<span class="quotelev2">&gt; &gt;     /* uDAPL doesn't ever seem to keep track of ports with addresses.  This
</span><br>
<span class="quotelev2">&gt; &gt;        becomes a problem when we use dat_ep_query() to obtain a remote address
</span><br>
<span class="quotelev2">&gt; &gt;        on an endpoint.  In this case, both the DAT_PORT_QUAL and the sin_port
</span><br>
<span class="quotelev2">&gt; &gt;        field in the DAT_SOCK_ADDR are 0, regardless of the actual port. This is
</span><br>
<span class="quotelev2">&gt; &gt;        a problem when we have more than one uDAPL process per IA - these
</span><br>
<span class="quotelev2">&gt; &gt;        processes will have exactly the same address, as the port is all
</span><br>
<span class="quotelev2">&gt; &gt;        we have to differentiate who is who.  Thus, our uDAPL EP -&gt; BTL EP
</span><br>
<span class="quotelev2">&gt; &gt;        matching algorithm will break down.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        So, we insert the port we used for our PSP into the DAT_SOCK_ADDR for
</span><br>
<span class="quotelev2">&gt; &gt;        this IA.  uDAPL then conveniently propagates this to where we need it.
</span><br>
<span class="quotelev2">&gt; &gt;      */
</span><br>
<span class="quotelev2">&gt; &gt;     ((struct sockaddr_in*)attr.ia_address_ptr)-&gt;sin_port = htons(port);
</span><br>
<span class="quotelev2">&gt; &gt;     ((struct sockaddr_in*)&amp;btl-&gt;udapl_addr.addr)-&gt;sin_port = htons(port);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The OMPI code stuffs the port chosen by udapl for a listening endpoint
</span><br>
<span class="quotelev2">&gt; &gt; into the ia address memory (which is owned by the udapl layer btw).
</span><br>
<span class="quotelev2">&gt; &gt; There's a slight problem with that:  The OFA udapl openib_cma code binds
</span><br>
<span class="quotelev2">&gt; &gt; cm_id's to this ia_address regularly.  When an hca is opened, a cm_id is
</span><br>
<span class="quotelev2">&gt; &gt; bound to this address to obtain the local hca port number and gid that
</span><br>
<span class="quotelev2">&gt; &gt; is being used.  In addition, a cm_id is bound to this address each time
</span><br>
<span class="quotelev2">&gt; &gt; an endpoint is created (either at ep_create time or ep_connect time).
</span><br>
<span class="quotelev2">&gt; &gt; So that ia_address field is used by the dapl cm to create local
</span><br>
<span class="quotelev2">&gt; &gt; cm_ids...  Since the port was always zero, the rmda-cma would choose a
</span><br>
<span class="quotelev2">&gt; &gt; unique port for each cm_id bound to that address.   
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But OMPI sets a the port field to non-zero, the rdma_cma fails all the
</span><br>
<span class="quotelev2">&gt; &gt; subsequent rdma_bind_addr() calls since the port is already in use.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps this hack really is a workaround for a DAPL bug where somebodies
</span><br>
<span class="quotelev2">&gt; &gt; dapl wasn't tracking port numbers correctly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep. My memory is dim, but I think that was OFED's DAPL, or it was in 
</span><br>
<span class="quotelev1">&gt; the generic part of DAPL that all implementations seem to share.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As hinted by the comment (I wrote it by the way), I think the best 
</span><br>
<span class="quotelev1">&gt; solution would be if dat_ep_query() returned the port number correctly. 
</span><br>
<span class="quotelev1">&gt;   Most of uDAPL seems to just pass around pointers to internal data 
</span><br>
<span class="quotelev1">&gt; structures (which I'm not sure is the best idea in the world), so it 
</span><br>
<span class="quotelev1">&gt; didn't seem like a trivial fix to me at the time.  I remember 
</span><br>
<span class="quotelev1">&gt; considering reporting this as a bug, but I didn't because the uDAPL 
</span><br>
<span class="quotelev1">&gt; standard didn't seem to enforce any requirements on passing the port 
</span><br>
<span class="quotelev1">&gt; number around with the address, so it technically wasn't wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Was the OFED uDAPL code switched from something else to RDMA CM at some 
</span><br>
<span class="quotelev1">&gt; point?  I'm almost certain I was running fine on OFED's uDAPL at one 
</span><br>
<span class="quotelev1">&gt; point (in fact, a lot of the uDAPL BTL development I did was using the 
</span><br>
<span class="quotelev1">&gt; OFED stack).
</span><br>
<p>Yes, the OFA uDAPL was changed from using the ib-cm to the rdma-cm a
<br>
while back.  Perhaps you ran on the ib-cm version?  And, the rdma-cma
<br>
started using port numbers and enforcing uniqueness even more recently I
<br>
think.
<br>
<p>Perhaps Don Kerr has some insight on how the Sun uDAPL behaves?  Should
<br>
OMPI still need this hack?
<br>
<p><p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1490.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and RDMA-CM)"</a>
<li><strong>Previous message:</strong> <a href="1488.php">Andrew Friedley: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI and	RDMA-CM)"</a>
<li><strong>In reply to:</strong> <a href="1488.php">Andrew Friedley: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI and	RDMA-CM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1493.php">Donald Kerr: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<li><strong>Reply:</strong> <a href="1493.php">Donald Kerr: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
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
