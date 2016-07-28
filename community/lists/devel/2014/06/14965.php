<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 08:37:36 2014" -->
<!-- isoreceived="20140603123736" -->
<!-- sent="Tue, 3 Jun 2014 05:37:32 -0700" -->
<!-- isosent="20140603123732" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="4536C445-8E86-49BA-AFB9-3CAFDAC2CADB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5sjbGipm09tfVROByMyfkjZ07YU5U9jc2fk60-WKUEt8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intermittent hangs when exiting with error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-03 08:37:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14966.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14964.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14964.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14966.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14966.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 3, 2014, at 3:06 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i get no more complains about rtc :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but MPI_Abort still hangs :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i reviewed my configuration and the hang is not related to one node having one IB port and the other node having two IB ports.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the two nodes can establish TCP connections via :
</span><br>
<span class="quotelev1">&gt; - eth0 (but they are *not* on the same subnet)
</span><br>
<span class="quotelev1">&gt; - ib0 (and they *are* on the same subnet)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from the logs, it seems eth0 is &quot;discarded&quot; and only ib0 is used.
</span><br>
<p>That would be correct - we don't really &quot;discard&quot; eth0, but default to using the interfaces on the common subnet to avoid routing
<br>
<p><span class="quotelev1">&gt; when the task abort, it hangs ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i attached the logs i took on two VM with a &quot;simpler&quot; config :
</span><br>
<span class="quotelev1">&gt; - slurm0 has one eth port (eth0)
</span><br>
<span class="quotelev1">&gt;   * eth0 is on 192.168.122.100/24 (network 0)
</span><br>
<span class="quotelev1">&gt;   * eth0:1 is on 10.0.0.1/24 (network 0)
</span><br>
<span class="quotelev1">&gt; - slurm3 has two eth ports (eth0 and eth1)
</span><br>
<span class="quotelev1">&gt;   * eth0 is on 192.168.222.0/24 (network 1)
</span><br>
<span class="quotelev1">&gt;   * eth1 is on 10.0.0.2/24 (network 0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; network0 and network1 are connected to a router.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from slurm0, i launch :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 -host slurm3 --mca btl tcp,self --mca oob_base_verbose 10 ./abort
</span><br>
<p>Is this running under slurm? Or are you running under rsh?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the oob logs are attached
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
<span class="quotelev1">&gt; On Tue, Jun 3, 2014 at 12:10 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Thanks Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i will try this tomorrow
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 3, 2014 at 12:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I think I have this fixed with r31928, but have no way to test it on my machine. Please see if it works for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2014, at 7:09 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is indeed the problem - we are trying to send a message and don't know how to get it somewhere. I'll break the loop, and then ask that you run this again with -mca oob_base_verbose 10 so we can see the intended recipient.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 2, 2014, at 3:55 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x00007fe8fab67ce3 in mca_oob_tcp_component_hop_unknown () from /.../local/ompi-trunk/lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14954.php">http://www.open-mpi.org/community/lists/devel/2014/06/14954.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;abort.oob.log.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14964.php">http://www.open-mpi.org/community/lists/devel/2014/06/14964.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14965/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14966.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14964.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14964.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14966.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14966.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
