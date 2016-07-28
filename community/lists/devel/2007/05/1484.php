<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 13:29:26 2007" -->
<!-- isoreceived="20070508172926" -->
<!-- sent="Tue, 08 May 2007 12:29:21 -0500" -->
<!-- isosent="20070508172921" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI	and RDMA-CM)" -->
<!-- id="1178645361.6064.35.camel_at_stevo-desktop" -->
<!-- inreplyto="1178641872.6064.12.camel_at_stevo-desktop" -->
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
<strong>Date:</strong> 2007-05-08 13:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1485.php">Steve Wise: "[OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI	and RDMA-CM)"</a>
<li><strong>Previous message:</strong> <a href="1483.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="1482.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1488.php">Andrew Friedley: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI and	RDMA-CM)"</a>
<li><strong>Reply:</strong> <a href="1488.php">Andrew Friedley: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI and	RDMA-CM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well I've tried OMPI on ofed-1.2 udapl today and it doesn't work.  I'm
</span><br>
<span class="quotelev1">&gt; debugging now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Here's part of the problem (from ompi/btl/udapl/btl_udapl.c):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* TODO - big bad evil hack! */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* uDAPL doesn't ever seem to keep track of ports with addresses.  This
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;becomes a problem when we use dat_ep_query() to obtain a remote address
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;on an endpoint.  In this case, both the DAT_PORT_QUAL and the sin_port
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;field in the DAT_SOCK_ADDR are 0, regardless of the actual port. This is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a problem when we have more than one uDAPL process per IA - these
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processes will have exactly the same address, as the port is all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;we have to differentiate who is who.  Thus, our uDAPL EP -&gt; BTL EP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matching algorithm will break down.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So, we insert the port we used for our PSP into the DAT_SOCK_ADDR for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this IA.  uDAPL then conveniently propagates this to where we need it.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;((struct sockaddr_in*)attr.ia_address_ptr)-&gt;sin_port = htons(port);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;((struct sockaddr_in*)&amp;btl-&gt;udapl_addr.addr)-&gt;sin_port = htons(port);
<br>
<p>The OMPI code stuffs the port chosen by udapl for a listening endpoint
<br>
into the ia address memory (which is owned by the udapl layer btw).
<br>
There's a slight problem with that:  The OFA udapl openib_cma code binds
<br>
cm_id's to this ia_address regularly.  When an hca is opened, a cm_id is
<br>
bound to this address to obtain the local hca port number and gid that
<br>
is being used.  In addition, a cm_id is bound to this address each time
<br>
an endpoint is created (either at ep_create time or ep_connect time).
<br>
So that ia_address field is used by the dapl cm to create local
<br>
cm_ids...  Since the port was always zero, the rmda-cma would choose a
<br>
unique port for each cm_id bound to that address.   
<br>
<p>But OMPI sets a the port field to non-zero, the rdma_cma fails all the
<br>
subsequent rdma_bind_addr() calls since the port is already in use.
<br>
<p>Perhaps this hack really is a workaround for a DAPL bug where somebodies
<br>
dapl wasn't tracking port numbers correctly?
<br>
<p>I think there are three issues here:
<br>
<p>1) OMPI shouldn't be stepping on the ia_address.
<br>
<p>2) OFA udapl should probably be explicitly binding local cm_ids to port
<br>
zero.
<br>
<p>3) dat_ep_query() should be returning the correct port numbers...
<br>
<p><p>I'm going to run a few experiments:
<br>
<p>1) remove the OMPI hack and see if things work fine for OFA udapl.
<br>
Perhaps OFA udapl correctly tracks ports on endpoints?
<br>
<p>2) leave OMPI as-is and change OFA udapl to not assume the ia_addr
<br>
sockaddr has a 0 port in it.  
<br>
<p><p><p><p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1485.php">Steve Wise: "[OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI	and RDMA-CM)"</a>
<li><strong>Previous message:</strong> <a href="1483.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="1482.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1488.php">Andrew Friedley: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI and	RDMA-CM)"</a>
<li><strong>Reply:</strong> <a href="1488.php">Andrew Friedley: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI and	RDMA-CM)"</a>
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
