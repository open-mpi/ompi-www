<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 13:57:45 2007" -->
<!-- isoreceived="20070508175745" -->
<!-- sent="Tue, 08 May 2007 13:57:44 -0400" -->
<!-- isosent="20070508175744" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI and	RDMA-CM)" -->
<!-- id="4640BA18.7060104_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1178645361.6064.35.camel_at_stevo-desktop" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-08 13:57:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1489.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<li><strong>Previous message:</strong> <a href="1487.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="1484.php">Steve Wise: "[OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI	and RDMA-CM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1489.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<li><strong>Reply:</strong> <a href="1489.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve Wise wrote:
<br>
<span class="quotelev2">&gt;&gt; Well I've tried OMPI on ofed-1.2 udapl today and it doesn't work.  I'm
</span><br>
<span class="quotelev2">&gt;&gt; debugging now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's part of the problem (from ompi/btl/udapl/btl_udapl.c):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* TODO - big bad evil hack! */
</span><br>
<span class="quotelev1">&gt;     /* uDAPL doesn't ever seem to keep track of ports with addresses.  This
</span><br>
<span class="quotelev1">&gt;        becomes a problem when we use dat_ep_query() to obtain a remote address
</span><br>
<span class="quotelev1">&gt;        on an endpoint.  In this case, both the DAT_PORT_QUAL and the sin_port
</span><br>
<span class="quotelev1">&gt;        field in the DAT_SOCK_ADDR are 0, regardless of the actual port. This is
</span><br>
<span class="quotelev1">&gt;        a problem when we have more than one uDAPL process per IA - these
</span><br>
<span class="quotelev1">&gt;        processes will have exactly the same address, as the port is all
</span><br>
<span class="quotelev1">&gt;        we have to differentiate who is who.  Thus, our uDAPL EP -&gt; BTL EP
</span><br>
<span class="quotelev1">&gt;        matching algorithm will break down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        So, we insert the port we used for our PSP into the DAT_SOCK_ADDR for
</span><br>
<span class="quotelev1">&gt;        this IA.  uDAPL then conveniently propagates this to where we need it.
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     ((struct sockaddr_in*)attr.ia_address_ptr)-&gt;sin_port = htons(port);
</span><br>
<span class="quotelev1">&gt;     ((struct sockaddr_in*)&amp;btl-&gt;udapl_addr.addr)-&gt;sin_port = htons(port);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OMPI code stuffs the port chosen by udapl for a listening endpoint
</span><br>
<span class="quotelev1">&gt; into the ia address memory (which is owned by the udapl layer btw).
</span><br>
<span class="quotelev1">&gt; There's a slight problem with that:  The OFA udapl openib_cma code binds
</span><br>
<span class="quotelev1">&gt; cm_id's to this ia_address regularly.  When an hca is opened, a cm_id is
</span><br>
<span class="quotelev1">&gt; bound to this address to obtain the local hca port number and gid that
</span><br>
<span class="quotelev1">&gt; is being used.  In addition, a cm_id is bound to this address each time
</span><br>
<span class="quotelev1">&gt; an endpoint is created (either at ep_create time or ep_connect time).
</span><br>
<span class="quotelev1">&gt; So that ia_address field is used by the dapl cm to create local
</span><br>
<span class="quotelev1">&gt; cm_ids...  Since the port was always zero, the rmda-cma would choose a
</span><br>
<span class="quotelev1">&gt; unique port for each cm_id bound to that address.   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But OMPI sets a the port field to non-zero, the rdma_cma fails all the
</span><br>
<span class="quotelev1">&gt; subsequent rdma_bind_addr() calls since the port is already in use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps this hack really is a workaround for a DAPL bug where somebodies
</span><br>
<span class="quotelev1">&gt; dapl wasn't tracking port numbers correctly?
</span><br>
<p>Yep. My memory is dim, but I think that was OFED's DAPL, or it was in 
<br>
the generic part of DAPL that all implementations seem to share.
<br>
<p>As hinted by the comment (I wrote it by the way), I think the best 
<br>
solution would be if dat_ep_query() returned the port number correctly. 
<br>
&nbsp;&nbsp;Most of uDAPL seems to just pass around pointers to internal data 
<br>
structures (which I'm not sure is the best idea in the world), so it 
<br>
didn't seem like a trivial fix to me at the time.  I remember 
<br>
considering reporting this as a bug, but I didn't because the uDAPL 
<br>
standard didn't seem to enforce any requirements on passing the port 
<br>
number around with the address, so it technically wasn't wrong.
<br>
<p>Was the OFED uDAPL code switched from something else to RDMA CM at some 
<br>
point?  I'm almost certain I was running fine on OFED's uDAPL at one 
<br>
point (in fact, a lot of the uDAPL BTL development I did was using the 
<br>
OFED stack).
<br>
<p><p><span class="quotelev1">&gt; I'm going to run a few experiments:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) remove the OMPI hack and see if things work fine for OFA udapl.
</span><br>
<span class="quotelev1">&gt; Perhaps OFA udapl correctly tracks ports on endpoints?
</span><br>
<p>Doubt it, but worth trying.
<br>
<p><span class="quotelev1">&gt; 2) leave OMPI as-is and change OFA udapl to not assume the ia_addr
</span><br>
<span class="quotelev1">&gt; sockaddr has a 0 port in it.  
</span><br>
<p>Pretty sure this will work, don't know if it's the correct solution though.
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1489.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<li><strong>Previous message:</strong> <a href="1487.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="1484.php">Steve Wise: "[OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI	and RDMA-CM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1489.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<li><strong>Reply:</strong> <a href="1489.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
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
