<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 10:26:24 2006" -->
<!-- isoreceived="20061023142624" -->
<!-- sent="Mon, 23 Oct 2006 10:26:18 -0400" -->
<!-- isosent="20061023142618" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual Gigabit ethernet support" -->
<!-- id="f869b68c0610230726i32661dd7h4ac48b6ceae9bff8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.61.0610231415530.1895_at_dhruva1.ncra.tifr.res.in" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 10:26:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2031.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2032.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2032.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you try channel bonding? If your OS is Linux, there are plenty of
<br>
&quot;howto&quot; on the internet which will tell you how to do it.
<br>
<p>However, your CPU might be the bottleneck in this case. How much of CPU
<br>
horsepower is available at 140MB/s?
<br>
<p>If the CPU *is* the bottleneck, changing your network driver (e.g. from
<br>
interrupt-based to poll-based packet transfer) might help. If you are
<br>
unfamiliar with writing network drivers for your OS, this may not be a
<br>
trivial task, though.
<br>
<p>Oh, and like I pointed out last time, if all of the above seem OK, try
<br>
putting your second link to a separate PC and see if you can gate twice the
<br>
throughput. If so, then the ECMP implementation of your IP stack is what is
<br>
causing the problem. This is the hardest one to fix. You could rewrite a few
<br>
routines in ipv4 processing and recompile the Kernel, if you are familiar
<br>
with Kernel building and your OS is Linux.
<br>
<p><p>On 10/23/06, Jayanta Roy &lt;jroy_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sometime before I have posted doubts about using dual gigabit support
</span><br>
<span class="quotelev1">&gt; fully. See I get ~140MB/s full duplex transfer rate in each of following
</span><br>
<span class="quotelev1">&gt; runs.....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_include eth0 -n 4 -bynode -hostfile host a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_include eth1 -n 4 -bynode -hostfile host a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How to combine these two port or use a proper routing table in place host
</span><br>
<span class="quotelev1">&gt; file? I am using openmpi-1.1 version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Jayanta
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
<p><p><p><pre>
-- 
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2030/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2031.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2032.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2032.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
