<?
$subject_val = "Re: [OMPI devel] IP address to verb interface mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 11 10:48:11 2016" -->
<!-- isoreceived="20160411144811" -->
<!-- sent="Mon, 11 Apr 2016 14:48:07 +0000" -->
<!-- isosent="20160411144807" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IP address to verb interface mapping" -->
<!-- id="196E4EE2-3FA7-4332-AA18-684417D79BC7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDi=83DDH8U-Kyivj36N3YwBfhVcv5xXN=FOy1OCXx9zdw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IP address to verb interface mapping<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-11 10:48:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18757.php">George Bosilca: "[OMPI devel] Process placement"</a>
<li><strong>Previous message:</strong> <a href="18755.php">David Froger: "Re: [OMPI devel] pal_installdirs_base_framework declaration"</a>
<li><strong>In reply to:</strong> <a href="18750.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To be clear: what Gilles initially said is correct -- the hostnames/IP addresses that you give to mpirun are only used to specify on which machines to launch.  They are not used for any indication of which networks to use for MPI communication.
<br>
<p>In general, BTLs and MTLs are queried during MPI_INIT and figure out what networks are available.  The next steps have changed over the years/different versions of Open MPI, but notionally it's more or less like this:
<br>
<p>- They all &quot;publish&quot; this info to a (notionally) global data store.
<br>
- Each process X checks whether it can communicate with peer process Y: it retrieves Y's BTL/MTL info from the global data store
<br>
- X effectively gives this addressing info to its BTLs/MTLs and says &quot;can you connect to any of these?&quot;
<br>
&nbsp;&nbsp;--&gt; MCA params such as btl_NAME_if_include and btl_NAME_if_exclude are factored in here
<br>
- X builds up a matrix/list of BTLs/MTLs with which it can use to communicate with each process Y
<br>
- If X finds a process with which it cannot communicate, it errors out
<br>
<p>Again, the details of the above procedure vary from version to version, but that's the general idea: each process investigates its local networking setup and compares it to peer process' local networking setup to look for connectivity paths.
<br>
<p><p><p><span class="quotelev1">&gt; On Apr 8, 2016, at 12:54 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much, Gilles. That is exactly the information I was looking for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 8, 2016 at 12:52 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; At init time, each task invoke btl_openib_component_init() which invokes btl_openib_modex_send()
</span><br>
<span class="quotelev1">&gt; basically, it collects infiniband info (port, subnet, lid, ...) and &quot;push&quot; them to orted via the modex mechanism.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When a communication is created, the remote information is retrieved via the modex mechanism in mca_btl_openib_proc_get_locket()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/8/2016 1:30 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for responding quickly; however, I am afraid I did not explain my question clearly enough; my apologies.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I am trying to understand is this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My cluster has (say) 7 nodes. I use IP-over-Ethernet for Orted (for job launch and control traffic); this is not used for MPI messaging. Let's say that the IP addresses are 192.168.1.2-192.168.1.9. They are all in the same IP subnet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The MPI messaging is used using some other interconnects, such as Infiniband. All 7 nodes are connected to the same Infiniband switch and hence are in the same (infiniband) subnet as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my host file, I mention (say) 4 IP addresses:  192.168.3-192.168.1.7
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question is, how does OpenMPI pick the 4 Infiniband interfaces that matches the IP addresses? Put another way, the ranks of each launched jobs are (I presume) setup by orted by some mechanism. When I do an MPI_Send() to a given rank, the message goes to the Infiniband interface with a particular LID. How does this IP-to-Infiniband LID mapping happen?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Apr 8, 2016 at 12:12 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the hostnames (or their IPs) are only used to ssh orted.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if you use only the tcp btl :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TCP *MPI* communications (vs OOB management communications) are handled by btl/tcp
</span><br>
<span class="quotelev2">&gt;&gt; by default, all usable interfaces are used, then messages are split (iirc, by ob1 pml) and then &quot;fragments&quot;
</span><br>
<span class="quotelev2">&gt;&gt; are sent using all interfaces.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; each interface has a latency and bandwidth that is used to split message into fragments.
</span><br>
<span class="quotelev2">&gt;&gt; (assuming it is correctly configured, 90% of a large message is sent over the 10GbE interface, and 10% is sent over the GbE interface)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if you can explicitly list/blacklist interface
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_tcp_if_include ...
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_tcp_if_exclude ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (see ompi_info --all for the syntax)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but if you use several btls (for example tcp and openib), the btl(s) with the lower exclusivity are not used.
</span><br>
<span class="quotelev2">&gt;&gt; (for example, a large message is *not* split and send using native ib, IPoIB and GbE because the openib btl
</span><br>
<span class="quotelev2">&gt;&gt; has a higher exclusivity than the tcp btl)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; did this answer your question ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 4/8/2016 12:24 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Newbie warning! Sorry :-(  )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let's say my cluster has 7 nodes, connected via IP-over-Ethernet for control traffic and some kind of raw verbs (or anything else such as SRIO) interface for data transfer. Let's say my host file chooses 4 out of the 7 nodes for an MPI job, based on the IP address, which are assigned to the Ethernet interfaces.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My question is: where in the code does this mapping between IP-to-whatever_interface_is_used_for_MPI_Send/Recv is determined, such as only those chosen nodes receive traffic over the verbs interface?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18746.php">http://www.open-mpi.org/community/lists/devel/2016/04/18746.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18747.php">http://www.open-mpi.org/community/lists/devel/2016/04/18747.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18748.php">http://www.open-mpi.org/community/lists/devel/2016/04/18748.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18749.php">http://www.open-mpi.org/community/lists/devel/2016/04/18749.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18750.php">http://www.open-mpi.org/community/lists/devel/2016/04/18750.php</a>
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
<li><strong>Next message:</strong> <a href="18757.php">George Bosilca: "[OMPI devel] Process placement"</a>
<li><strong>Previous message:</strong> <a href="18755.php">David Froger: "Re: [OMPI devel] pal_installdirs_base_framework declaration"</a>
<li><strong>In reply to:</strong> <a href="18750.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
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
