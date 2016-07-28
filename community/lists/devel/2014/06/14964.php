<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 06:06:56 2014" -->
<!-- isoreceived="20140603100656" -->
<!-- sent="Tue, 3 Jun 2014 19:06:53 +0900" -->
<!-- isosent="20140603100653" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="CAAkFZ5sjbGipm09tfVROByMyfkjZ07YU5U9jc2fk60-WKUEt8w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5urbdesE2xmSOKo+f4U5P5XpHiFz=Fa4_ajeLfM9ALO7g_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-03 06:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14965.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14963.php">Hjelm, Nathan T: "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="14955.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14965.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14965.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i get no more complains about rtc :-)
<br>
<p>but MPI_Abort still hangs :-(
<br>
<p>i reviewed my configuration and the hang is not related to one node having
<br>
one IB port and the other node having two IB ports.
<br>
<p>the two nodes can establish TCP connections via :
<br>
- eth0 (but they are *not* on the same subnet)
<br>
- ib0 (and they *are* on the same subnet)
<br>
<p>from the logs, it seems eth0 is &quot;discarded&quot; and only ib0 is used.
<br>
when the task abort, it hangs ...
<br>
<p><p><p>i attached the logs i took on two VM with a &quot;simpler&quot; config :
<br>
- slurm0 has one eth port (eth0)
<br>
&nbsp;&nbsp;* eth0 is on 192.168.122.100/24 (network 0)
<br>
&nbsp;&nbsp;* eth0:1 is on 10.0.0.1/24 (network 0)
<br>
- slurm3 has two eth ports (eth0 and eth1)
<br>
&nbsp;&nbsp;* eth0 is on 192.168.222.0/24 (network 1)
<br>
&nbsp;&nbsp;* eth1 is on 10.0.0.2/24 (network 0)
<br>
<p>network0 and network1 are connected to a router.
<br>
<p><p>from slurm0, i launch :
<br>
<p>mpirun -np 1 -host slurm3 --mca btl tcp,self --mca oob_base_verbose 10
<br>
./abort
<br>
<p>the oob logs are attached
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tue, Jun 3, 2014 at 12:10 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph,
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I have this fixed with r31928, but have no way to test it on my
</span><br>
<span class="quotelev2">&gt;&gt; machine. Please see if it works for you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 2, 2014, at 7:09 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is indeed the problem - we are trying to send a message and don't
</span><br>
<span class="quotelev2">&gt;&gt; know how to get it somewhere. I'll break the loop, and then ask that you
</span><br>
<span class="quotelev2">&gt;&gt; run this again with -mca oob_base_verbose 10 so we can see the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 2, 2014, at 3:55 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007fe8fab67ce3 in mca_oob_tcp_component_hop_unknown () from
</span><br>
<span class="quotelev2">&gt;&gt; /.../local/ompi-trunk/lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14954.php">http://www.open-mpi.org/community/lists/devel/2014/06/14954.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14964/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14964/abort.oob.log.gz">abort.oob.log.gz</a>
</ul>
<!-- attachment="abort.oob.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14965.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14963.php">Hjelm, Nathan T: "Re: [OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="14955.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14965.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14965.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
