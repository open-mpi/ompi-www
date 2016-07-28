<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 16:21:28 2007" -->
<!-- isoreceived="20070508202128" -->
<!-- sent="Tue, 08 May 2007 16:21:18 -0400" -->
<!-- isosent="20070508202118" -->
<!-- name="Donald Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)" -->
<!-- id="4640DBBE.5000601_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1178653979.11455.4.camel_at_stevo-desktop" -->
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
<strong>From:</strong> Donald Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-08 16:21:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1494.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Previous message:</strong> <a href="1492.php">Brian Barrett: "[OMPI devel] Autotools Upgrade Time"</a>
<li><strong>In reply to:</strong> <a href="1489.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1485.php">Steve Wise: "[OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI	and RDMA-CM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt;On Tue, 2007-05-08 at 13:57 -0400, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Well I've tried OMPI on ofed-1.2 udapl today and it doesn't work.  I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;debugging now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Here's part of the problem (from ompi/btl/udapl/btl_udapl.c):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* TODO - big bad evil hack! */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* uDAPL doesn't ever seem to keep track of ports with addresses.  This
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       becomes a problem when we use dat_ep_query() to obtain a remote address
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       on an endpoint.  In this case, both the DAT_PORT_QUAL and the sin_port
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       field in the DAT_SOCK_ADDR are 0, regardless of the actual port. This is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       a problem when we have more than one uDAPL process per IA - these
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       processes will have exactly the same address, as the port is all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       we have to differentiate who is who.  Thus, our uDAPL EP -&gt; BTL EP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       matching algorithm will break down.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       So, we insert the port we used for our PSP into the DAT_SOCK_ADDR for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       this IA.  uDAPL then conveniently propagates this to where we need it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ((struct sockaddr_in*)attr.ia_address_ptr)-&gt;sin_port = htons(port);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ((struct sockaddr_in*)&amp;btl-&gt;udapl_addr.addr)-&gt;sin_port = htons(port);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;The OMPI code stuffs the port chosen by udapl for a listening endpoint
</span><br>
<span class="quotelev3">&gt;&gt;&gt;into the ia address memory (which is owned by the udapl layer btw).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;There's a slight problem with that:  The OFA udapl openib_cma code binds
</span><br>
<span class="quotelev3">&gt;&gt;&gt;cm_id's to this ia_address regularly.  When an hca is opened, a cm_id is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;bound to this address to obtain the local hca port number and gid that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;is being used.  In addition, a cm_id is bound to this address each time
</span><br>
<span class="quotelev3">&gt;&gt;&gt;an endpoint is created (either at ep_create time or ep_connect time).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;So that ia_address field is used by the dapl cm to create local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;cm_ids...  Since the port was always zero, the rmda-cma would choose a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;unique port for each cm_id bound to that address.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;But OMPI sets a the port field to non-zero, the rdma_cma fails all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;subsequent rdma_bind_addr() calls since the port is already in use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Perhaps this hack really is a workaround for a DAPL bug where somebodies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;dapl wasn't tracking port numbers correctly?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Yep. My memory is dim, but I think that was OFED's DAPL, or it was in 
</span><br>
<span class="quotelev2">&gt;&gt;the generic part of DAPL that all implementations seem to share.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;As hinted by the comment (I wrote it by the way), I think the best 
</span><br>
<span class="quotelev2">&gt;&gt;solution would be if dat_ep_query() returned the port number correctly. 
</span><br>
<span class="quotelev2">&gt;&gt;  Most of uDAPL seems to just pass around pointers to internal data 
</span><br>
<span class="quotelev2">&gt;&gt;structures (which I'm not sure is the best idea in the world), so it 
</span><br>
<span class="quotelev2">&gt;&gt;didn't seem like a trivial fix to me at the time.  I remember 
</span><br>
<span class="quotelev2">&gt;&gt;considering reporting this as a bug, but I didn't because the uDAPL 
</span><br>
<span class="quotelev2">&gt;&gt;standard didn't seem to enforce any requirements on passing the port 
</span><br>
<span class="quotelev2">&gt;&gt;number around with the address, so it technically wasn't wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Was the OFED uDAPL code switched from something else to RDMA CM at some 
</span><br>
<span class="quotelev2">&gt;&gt;point?  I'm almost certain I was running fine on OFED's uDAPL at one 
</span><br>
<span class="quotelev2">&gt;&gt;point (in fact, a lot of the uDAPL BTL development I did was using the 
</span><br>
<span class="quotelev2">&gt;&gt;OFED stack).
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yes, the OFA uDAPL was changed from using the ib-cm to the rdma-cm a
</span><br>
<span class="quotelev1">&gt;while back.  Perhaps you ran on the ib-cm version?  And, the rdma-cma
</span><br>
<span class="quotelev1">&gt;started using port numbers and enforcing uniqueness even more recently I
</span><br>
<span class="quotelev1">&gt;think.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Perhaps Don Kerr has some insight on how the Sun uDAPL behaves?  Should
</span><br>
<span class="quotelev1">&gt;OMPI still need this hack?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;From what I recall, and Andrew can probably set me straight if I get 
<br>
this wrong. This hack was included because we were not able to pull the 
<br>
remote port from dat_ep_query. If dat_ep_query supplies that data then 
<br>
we could probably do away with the hack.
<br>
<p>I have not heard back from the developer at Sun who implemented uDAPL 
<br>
for Solaris. My thought is that it was also based on the older ib-cm but 
<br>
will confirm. I submitted a bug against Solaris uDAPL to provide the 
<br>
port via dat_ep_query awhile back and it looks like it has been fixed, I 
<br>
just have not tested this because we weren't using it.
<br>
<p>-DON
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Steve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1494.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Previous message:</strong> <a href="1492.php">Brian Barrett: "[OMPI devel] Autotools Upgrade Time"</a>
<li><strong>In reply to:</strong> <a href="1489.php">Steve Wise: "Re: [OMPI devel] OMPI over OFA udapl (was Re: [ofa-general]	OpenMPI and	RDMA-CM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1485.php">Steve Wise: "[OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI	and RDMA-CM)"</a>
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
