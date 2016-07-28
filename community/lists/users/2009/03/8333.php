<?
$subject_val = "Re: [OMPI users] RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 16:26:12 2009" -->
<!-- isoreceived="20090305212612" -->
<!-- sent="Thu, 5 Mar 2009 13:26:05 -0800" -->
<!-- isosent="20090305212605" -->
<!-- name="Jan Lindheim" -->
<!-- email="lindheim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RETRY EXCEEDED ERROR" -->
<!-- id="20090305212604.GQ30193_at_cacr.caltech.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49AF8CEF.3030202_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Jan Lindheim (<em>lindheim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 16:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8334.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8332.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>In reply to:</strong> <a href="8309.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8334.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8334.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar 05, 2009 at 10:27:27AM +0200, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Time to dig up diagnostics tools and look at port statistics.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; You may use ibdiagnet tool for the network debug - 
</span><br>
<span class="quotelev1">&gt; *<a href="http://linux.die.net/man/1/ibdiagnet">http://linux.die.net/man/1/ibdiagnet</a>. *This tool is part of OFED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks Pasha!
<br>
ibdiagnet reports the following:
<br>
<p>-I---------------------------------------------------
<br>
-I- IPoIB Subnets Check
<br>
-I---------------------------------------------------
<br>
-I- Subnet: IPv4 PKey:0x7fff QKey:0x00000b1b MTU:2048Byte rate:10Gbps SL:0x00
<br>
-W- Port localhost/P1 lid=0x00e2 guid=0x001e0bffff4ced75 dev=25218 can not join
<br>
&nbsp;&nbsp;&nbsp;&nbsp;due to rate:2.5Gbps &lt; group:10Gbps
<br>
<p>I guess this may indicate a bad adapter.  Now, I just need to find what
<br>
system this maps to.
<br>
<p>I also ran ibcheckerrors and it reports a lot of problems with buffer
<br>
overruns.  Here's the tail end of the output, with only some of the last
<br>
ports reported:
<br>
<p>#warn: counter SymbolErrors = 36905     (threshold 10) lid 193 port 14
<br>
#warn: counter LinkDowned = 23  (threshold 10) lid 193 port 14
<br>
#warn: counter RcvErrors = 15641        (threshold 10) lid 193 port 14
<br>
#warn: counter RcvSwRelayErrors = 225   (threshold 100) lid 193 port 14
<br>
#warn: counter ExcBufOverrunErrors = 10         (threshold 10) lid 193 port 14
<br>
Error check on lid 193 (ISR9288/ISR9096 Voltaire sLB-24) port 14:  FAILED 
<br>
#warn: counter LinkRecovers = 181       (threshold 10) lid 193 port 1
<br>
#warn: counter RcvSwRelayErrors = 2417  (threshold 100) lid 193 port 1
<br>
Error check on lid 193 (ISR9288/ISR9096 Voltaire sLB-24) port 1:  FAILED 
<br>
#warn: counter LinkRecovers = 103       (threshold 10) lid 193 port 3
<br>
#warn: counter RcvErrors = 9035         (threshold 10) lid 193 port 3
<br>
#warn: counter RcvSwRelayErrors = 64670         (threshold 100) lid 193 port 3
<br>
Error check on lid 193 (ISR9288/ISR9096 Voltaire sLB-24) port 3:  FAILED 
<br>
#warn: counter SymbolErrors = 13151     (threshold 10) lid 193 port 4
<br>
#warn: counter RcvErrors = 109  (threshold 10) lid 193 port 4
<br>
#warn: counter RcvSwRelayErrors = 507   (threshold 100) lid 193 port 4
<br>
Error check on lid 193 (ISR9288/ISR9096 Voltaire sLB-24) port 4:  FAILED 
<br>
<p>## Summary: 209 nodes checked, 0 bad nodes found
<br>
##          716 ports checked, 103 ports have errors beyond threshold
<br>
<p><p>I wonder if this is something that needs to be tuned in the Infiniband
<br>
switch or if there is something in OpenMPI/OpenIB that can be tuned.
<br>
<p>Thanks,
<br>
Jan Lindheim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8334.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8332.php">Jeff Layton: "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>In reply to:</strong> <a href="8309.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8334.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8334.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
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
