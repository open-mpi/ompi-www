<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 12:26:26 2006" -->
<!-- isoreceived="20061023162626" -->
<!-- sent="Mon, 23 Oct 2006 17:26:15 +0100" -->
<!-- isosent="20061023162615" -->
<!-- name="Miguel Figueiredo Mascarenhas Sousa Filipe" -->
<!-- email="miguel.filipe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual Gigabit ethernet support" -->
<!-- id="f058a9c30610230926w7b0c1e3fuac02541f7156f1db_at_mail.gmail.com" -->
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
<strong>From:</strong> Miguel Figueiredo Mascarenhas Sousa Filipe (<em>miguel.filipe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 12:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2032.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2030.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2033.php">George Bosilca: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p><p>On 10/23/06, Jayanta Roy &lt;jroy_at_[hidden]&gt; wrote:
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
<p><p><p>Thats impressive, since its _more_ than the threotetical limit of 1Gb
<br>
ethernet.
<br>
140MB = 140 x 8 Mbit = 1120 Megabit/sec &gt; 1 Gigabit/sec...
<br>
<p><p><p>mpirun --mca btl_tcp_if_include eth0 -n 4 -bynode -hostfile host a.out
<br>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Miguel Sousa Filipe
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2032.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2030.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2033.php">George Bosilca: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
