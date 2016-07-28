<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 14:13:14 2006" -->
<!-- isoreceived="20061023181314" -->
<!-- sent="Mon, 23 Oct 2006 14:13:05 -0400" -->
<!-- isosent="20061023181305" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual Gigabit ethernet support" -->
<!-- id="f869b68c0610231113y19c6057bt14be47e150f9e5f3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.61.0610232311020.26638_at_dhruva1.ncra.tifr.res.in" -->
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
<strong>Date:</strong> 2006-10-23 14:13:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2037.php">Brock Palen: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2035.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2032.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2031.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What I think is happening is this:
<br>
<p>The initial transfer rate you are seeing is the burst rate; after a long
<br>
time average, your sustained transfer rate emerges. Like George said, you
<br>
should use a proven tool to measure your bandwidth. We use netperf, a
<br>
freeware from HP.
<br>
<p>That said, the ethernet technology is not a good candidate for HPC (one
<br>
reason people don't use it in the backplanes, despite the low cost). Do the
<br>
math yourself: there is a 54 byte overhead (14 B ethernet + 20B IP + 20B
<br>
TCP) for every packet sent, for socket communication. That is why protocols
<br>
like uDAPL over Infiniband is gaining in popularity.
<br>
<p>Durga
<br>
<p><p>On 10/23/06, Jayanta Roy &lt;jroy_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried with lamboot with a host file where odd-even nodes will talk
</span><br>
<span class="quotelev1">&gt; within themselves using eth0 and talk across them using eth1. So my
</span><br>
<span class="quotelev1">&gt; transfer runs @ 230MB/s at starting. But after few transfers rate falls
</span><br>
<span class="quotelev1">&gt; down to ~130MB/s and after long run finally comes to ~54MB/s. Why this
</span><br>
<span class="quotelev1">&gt; type of network slowing down with time is happenning?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jayanta
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 23 Oct 2006, Durga Choudhury wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Did you try channel bonding? If your OS is Linux, there are plenty of
</span><br>
<span class="quotelev2">&gt; &gt; &quot;howto&quot; on the internet which will tell you how to do it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, your CPU might be the bottleneck in this case. How much of CPU
</span><br>
<span class="quotelev2">&gt; &gt; horsepower is available at 140MB/s?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If the CPU *is* the bottleneck, changing your network driver (e.g. from
</span><br>
<span class="quotelev2">&gt; &gt; interrupt-based to poll-based packet transfer) might help. If you are
</span><br>
<span class="quotelev2">&gt; &gt; unfamiliar with writing network drivers for your OS, this may not be a
</span><br>
<span class="quotelev2">&gt; &gt; trivial task, though.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Oh, and like I pointed out last time, if all of the above seem OK, try
</span><br>
<span class="quotelev2">&gt; &gt; putting your second link to a separate PC and see if you can gate twice
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; throughput. If so, then the ECMP implementation of your IP stack is what
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev2">&gt; &gt; causing the problem. This is the hardest one to fix. You could rewrite a
</span><br>
<span class="quotelev1">&gt; few
</span><br>
<span class="quotelev2">&gt; &gt; routines in ipv4 processing and recompile the Kernel, if you are
</span><br>
<span class="quotelev1">&gt; familiar
</span><br>
<span class="quotelev2">&gt; &gt; with Kernel building and your OS is Linux.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 10/23/06, Jayanta Roy &lt;jroy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sometime before I have posted doubts about using dual gigabit support
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fully. See I get ~140MB/s full duplex transfer rate in each of
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev3">&gt; &gt;&gt; runs.....
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun --mca btl_tcp_if_include eth0 -n 4 -bynode -hostfile host a.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun --mca btl_tcp_if_include eth1 -n 4 -bynode -hostfile host a.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; How to combine these two port or use a proper routing table in place
</span><br>
<span class="quotelev1">&gt; host
</span><br>
<span class="quotelev3">&gt; &gt;&gt; file? I am using openmpi-1.1 version.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Jayanta
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Devil wanted omnipresence;
</span><br>
<span class="quotelev2">&gt; &gt; He therefore created communists.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
</span><br>
<span class="quotelev1">&gt; Jayanta Roy
</span><br>
<span class="quotelev1">&gt; National Centre for Radio Astrophysics  |  Phone  : +91-20-25697107
</span><br>
<span class="quotelev1">&gt; Tata Institute of Fundamental Research  |  Fax    : +91-20-25692149 Pune
</span><br>
<span class="quotelev1">&gt; University Campus, Pune 411 007    |  e-mail : jroy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; India
</span><br>
<span class="quotelev1">&gt; ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2036/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2037.php">Brock Palen: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2035.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2032.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2031.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
