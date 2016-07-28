<?
$subject_val = "Re: [OMPI users] Broadcast faster than barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 30 09:32:31 2016" -->
<!-- isoreceived="20160530133231" -->
<!-- sent="Mon, 30 May 2016 09:32:31 -0400" -->
<!-- isosent="20160530133231" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Broadcast faster than barrier" -->
<!-- id="CA+ssbKWWT=aFCi=TCWyb0EAc_u=+5fXSZ448t0XPGrjHk+Bd-w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="37142D5FC373A846ACE4F75AA11EA84D4CA076AA_at_DITKA.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Broadcast faster than barrier<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-30 09:32:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29326.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Previous message:</strong> <a href="29324.php">Dorier, Matthieu: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>In reply to:</strong> <a href="29324.php">Dorier, Matthieu: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29326.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These were taken using OSU Micro benchmarks 5.3
<br>
<a href="http://mvapich.cse.ohio-state.edu/benchmarks/">http://mvapich.cse.ohio-state.edu/benchmarks/</a>
<br>
<p>For example, in a cluster with 32 nodes each running 24 processes,
<br>
<p>Broadcast for bytes 1 to 64 take around 36 us where as the barrier takes
<br>
165 us. These were on 40Gbps Infiniband
<br>
<p># OSU MPI Broadcast Latency Test v5.3
<br>
# Size       Avg Latency(us)
<br>
1                      33.23
<br>
2                      34.36
<br>
...
<br>
<p># OSU MPI Barrier Latency Test v5.3
<br>
# Avg Latency(us)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;165.70
<br>
<p><p><p><p>On May 30, 2016 9:10 AM, &quot;Dorier, Matthieu&quot; &lt;mdorier_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How are you measuring these times?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthieu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Saliya Ekanayake [
</span><br>
<span class="quotelev1">&gt; esaliya_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, May 30, 2016 7:53 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] Broadcast faster than barrier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran Ohio micro benchmarks for openmpi and noticed broadcast with smaller
</span><br>
<span class="quotelev1">&gt; number of bytes is faster than a barrier - 2us vs 120us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to understand how this could happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29324.php">http://www.open-mpi.org/community/lists/users/2016/05/29324.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29325/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29326.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Previous message:</strong> <a href="29324.php">Dorier, Matthieu: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>In reply to:</strong> <a href="29324.php">Dorier, Matthieu: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29326.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
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
