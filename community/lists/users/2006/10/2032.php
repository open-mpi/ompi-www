<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 13:46:59 2006" -->
<!-- isoreceived="20061023174659" -->
<!-- sent="Mon, 23 Oct 2006 23:16:49 +0530 (IST)" -->
<!-- isosent="20061023174649" -->
<!-- name="Jayanta Roy" -->
<!-- email="jroy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual Gigabit ethernet support" -->
<!-- id="Pine.LNX.4.61.0610232311020.26638_at_dhruva1.ncra.tifr.res.in" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f869b68c0610230726i32661dd7h4ac48b6ceae9bff8_at_mail.gmail.com" -->
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
<strong>From:</strong> Jayanta Roy (<em>jroy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 13:46:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2033.php">George Bosilca: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2031.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2030.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2036.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2036.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have tried with lamboot with a host file where odd-even nodes will talk 
<br>
within themselves using eth0 and talk across them using eth1. So my 
<br>
transfer runs @ 230MB/s at starting. But after few transfers rate falls 
<br>
down to ~130MB/s and after long run finally comes to ~54MB/s. Why this 
<br>
type of network slowing down with time is happenning?
<br>
<p>Regards,
<br>
Jayanta
<br>
<p>On Mon, 23 Oct 2006, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; Did you try channel bonding? If your OS is Linux, there are plenty of
</span><br>
<span class="quotelev1">&gt; &quot;howto&quot; on the internet which will tell you how to do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, your CPU might be the bottleneck in this case. How much of CPU
</span><br>
<span class="quotelev1">&gt; horsepower is available at 140MB/s?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the CPU *is* the bottleneck, changing your network driver (e.g. from
</span><br>
<span class="quotelev1">&gt; interrupt-based to poll-based packet transfer) might help. If you are
</span><br>
<span class="quotelev1">&gt; unfamiliar with writing network drivers for your OS, this may not be a
</span><br>
<span class="quotelev1">&gt; trivial task, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oh, and like I pointed out last time, if all of the above seem OK, try
</span><br>
<span class="quotelev1">&gt; putting your second link to a separate PC and see if you can gate twice the
</span><br>
<span class="quotelev1">&gt; throughput. If so, then the ECMP implementation of your IP stack is what is
</span><br>
<span class="quotelev1">&gt; causing the problem. This is the hardest one to fix. You could rewrite a few
</span><br>
<span class="quotelev1">&gt; routines in ipv4 processing and recompile the Kernel, if you are familiar
</span><br>
<span class="quotelev1">&gt; with Kernel building and your OS is Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/23/06, Jayanta Roy &lt;jroy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sometime before I have posted doubts about using dual gigabit support
</span><br>
<span class="quotelev2">&gt;&gt; fully. See I get ~140MB/s full duplex transfer rate in each of following
</span><br>
<span class="quotelev2">&gt;&gt; runs.....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_tcp_if_include eth0 -n 4 -bynode -hostfile host a.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_tcp_if_include eth1 -n 4 -bynode -hostfile host a.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How to combine these two port or use a proper routing table in place host
</span><br>
<span class="quotelev2">&gt;&gt; file? I am using openmpi-1.1 version.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Jayanta
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Devil wanted omnipresence;
</span><br>
<span class="quotelev1">&gt; He therefore created communists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
<br>
Jayanta Roy
<br>
National Centre for Radio Astrophysics  |  Phone  : +91-20-25697107
<br>
Tata Institute of Fundamental Research  |  Fax    : +91-20-25692149 Pune
<br>
University Campus, Pune 411 007    |  e-mail : jroy_at_[hidden]
<br>
India
<br>
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2033.php">George Bosilca: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2031.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2030.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2036.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2036.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
