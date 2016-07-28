<?
$subject_val = "Re: [OMPI devel] IP address to verb interface mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  8 00:52:17 2016" -->
<!-- isoreceived="20160408045217" -->
<!-- sent="Fri, 8 Apr 2016 13:52:15 +0900" -->
<!-- isosent="20160408045215" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IP address to verb interface mapping" -->
<!-- id="570738FF.4010809_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDjC+kq2+o7HRW2=HJqBtsX3CkZzHBd8ki_aOk3Bp1V3rQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-08 00:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18750.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Previous message:</strong> <a href="18748.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>In reply to:</strong> <a href="18748.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18750.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Reply:</strong> <a href="18750.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At init time, each task invoke btl_openib_component_init() which invokes 
<br>
btl_openib_modex_send()
<br>
basically, it collects infiniband info (port, subnet, lid, ...) and 
<br>
&quot;push&quot; them to orted via the modex mechanism.
<br>
<p>When a communication is created, the remote information is retrieved via 
<br>
the modex mechanism in mca_btl_openib_proc_get_locket()
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/8/2016 1:30 PM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for responding quickly; however, I am afraid I did not explain 
</span><br>
<span class="quotelev1">&gt; my question clearly enough; my apologies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I am trying to understand is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My cluster has (say) 7 nodes. I use IP-over-Ethernet for Orted (for 
</span><br>
<span class="quotelev1">&gt; job launch and control traffic); this is not used for MPI messaging. 
</span><br>
<span class="quotelev1">&gt; Let's say that the IP addresses are 192.168.1.2-192.168.1.9. They are 
</span><br>
<span class="quotelev1">&gt; all in the same IP subnet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI messaging is used using some other interconnects, such as 
</span><br>
<span class="quotelev1">&gt; Infiniband. All 7 nodes are connected to the same Infiniband switch 
</span><br>
<span class="quotelev1">&gt; and hence are in the same (infiniband) subnet as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my host file, I mention (say) 4 IP addresses: 192.168.3-192.168.1.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is, how does OpenMPI pick the 4 Infiniband interfaces that 
</span><br>
<span class="quotelev1">&gt; matches the IP addresses? Put another way, the ranks of each launched 
</span><br>
<span class="quotelev1">&gt; jobs are (I presume) setup by orted by some mechanism. When I do an 
</span><br>
<span class="quotelev1">&gt; MPI_Send() to a given rank, the message goes to the Infiniband 
</span><br>
<span class="quotelev1">&gt; interface with a particular LID. How does this IP-to-Infiniband LID 
</span><br>
<span class="quotelev1">&gt; mapping happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 8, 2016 at 12:12 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     the hostnames (or their IPs) are only used to ssh orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if you use only the tcp btl :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     TCP *MPI* communications (vs OOB management communications) are
</span><br>
<span class="quotelev1">&gt;     handled by btl/tcp
</span><br>
<span class="quotelev1">&gt;     by default, all usable interfaces are used, then messages are
</span><br>
<span class="quotelev1">&gt;     split (iirc, by ob1 pml) and then &quot;fragments&quot;
</span><br>
<span class="quotelev1">&gt;     are sent using all interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     each interface has a latency and bandwidth that is used to split
</span><br>
<span class="quotelev1">&gt;     message into fragments.
</span><br>
<span class="quotelev1">&gt;     (assuming it is correctly configured, 90% of a large message is
</span><br>
<span class="quotelev1">&gt;     sent over the 10GbE interface, and 10% is sent over the GbE interface)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if you can explicitly list/blacklist interface
</span><br>
<span class="quotelev1">&gt;     mpirun --mca btl_tcp_if_include ...
</span><br>
<span class="quotelev1">&gt;     or
</span><br>
<span class="quotelev1">&gt;     mpirun --mca btl_tcp_if_exclude ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     (see ompi_info --all for the syntax)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     but if you use several btls (for example tcp and openib), the
</span><br>
<span class="quotelev1">&gt;     btl(s) with the lower exclusivity are not used.
</span><br>
<span class="quotelev1">&gt;     (for example, a large message is *not* split and send using native
</span><br>
<span class="quotelev1">&gt;     ib, IPoIB and GbE because the openib btl
</span><br>
<span class="quotelev1">&gt;     has a higher exclusivity than the tcp btl)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     did this answer your question ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 4/8/2016 12:24 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     (Newbie warning! Sorry :-(  )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Let's say my cluster has 7 nodes, connected via IP-over-Ethernet
</span><br>
<span class="quotelev2">&gt;&gt;     for control traffic and some kind of raw verbs (or anything else
</span><br>
<span class="quotelev2">&gt;&gt;     such as SRIO) interface for data transfer. Let's say my host file
</span><br>
<span class="quotelev2">&gt;&gt;     chooses 4 out of the 7 nodes for an MPI job, based on the IP
</span><br>
<span class="quotelev2">&gt;&gt;     address, which are assigned to the Ethernet interfaces.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     My question is: where in the code does this mapping between
</span><br>
<span class="quotelev2">&gt;&gt;     IP-to-whatever_interface_is_used_for_MPI_Send/Recv is determined,
</span><br>
<span class="quotelev2">&gt;&gt;     such as only those chosen nodes receive traffic over the verbs
</span><br>
<span class="quotelev2">&gt;&gt;     interface?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;     Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     We learn from history that we never learn from history.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2016/04/18746.php">http://www.open-mpi.org/community/lists/devel/2016/04/18746.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18747.php">http://www.open-mpi.org/community/lists/devel/2016/04/18747.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18748.php">http://www.open-mpi.org/community/lists/devel/2016/04/18748.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18749/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18750.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Previous message:</strong> <a href="18748.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>In reply to:</strong> <a href="18748.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18750.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Reply:</strong> <a href="18750.php">dpchoudh .: "Re: [OMPI devel] IP address to verb interface mapping"</a>
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
