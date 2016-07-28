<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 22 10:29:22 2006" -->
<!-- isoreceived="20060822142922" -->
<!-- sent="Tue, 22 Aug 2006 10:29:15 -0400" -->
<!-- isosent="20060822142915" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual Gigabit ethernet support" -->
<!-- id="f869b68c0608220729m145c0d25ibafd452b0bc9399a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44EB0F2E.6020104_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-08-22 10:29:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1766.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="1764.php">Galen M. Shipman: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="1764.php">Galen M. Shipman: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1766.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am also guessing you might be actually using only one of the gigabit links
<br>
even though you have two available. I assume you have configured the
<br>
equal-cost-multi-path (ECMP) IP routes between the two hosts correctly; even
<br>
then, ECMP, as implemented in most IP stacks (not sure if there is an RFC
<br>
for this), really works if you are reaching the same destination network but
<br>
two different hosts. For example, ECMP would use one link to reach
<br>
10.0.0.1and another to reach
<br>
10.0.0.2, both on the 10.0.0.0/24 network. In your case, there is only one
<br>
end host, so your IP stack might be actually using one link all the time.
<br>
<p>Also, the bus might be a bottleneck as Galen pointed out
<br>
<p>Thanks
<br>
Durga
<br>
<p>On 8/22/06, Galen M. Shipman &lt;gshipman_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jayanta,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is your bus on this machine? If it is PCI-X 133 you are going to be
</span><br>
<span class="quotelev1">&gt; limited, also memory bandwidth could also be the bottleneck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jayanta Roy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;In between two nodes I have dual Gigabit ethernet full duplex links. I
</span><br>
<span class="quotelev1">&gt; was
</span><br>
<span class="quotelev2">&gt; &gt;doing benchmarking using non-blocking MPI send and receive. But I am
</span><br>
<span class="quotelev2">&gt; &gt;getting only speed corresponds to one Gigabit ethernet full duplex link
</span><br>
<span class="quotelev2">&gt; &gt;(&lt; 2Gbps). I have checked using ifconfig, this transfer is using both the
</span><br>
<span class="quotelev2">&gt; &gt;ports, then why I am not getting full throughput from dual Gigabit
</span><br>
<span class="quotelev2">&gt; &gt;ethernet ports? Can anyone please help me in this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Regards,
</span><br>
<span class="quotelev2">&gt; &gt;Jayanta
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
</span><br>
<span class="quotelev2">&gt; &gt;Jayanta Roy
</span><br>
<span class="quotelev2">&gt; &gt;National Centre for Radio Astrophysics  |  Phone  : +91-20-25697107
</span><br>
<span class="quotelev2">&gt; &gt;Tata Institute of Fundamental Research  |  Fax    : +91-20-25692149 Pune
</span><br>
<span class="quotelev2">&gt; &gt;University Campus, Pune 411 007    |  e-mail : jroy_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;India
</span><br>
<span class="quotelev2">&gt; &gt;~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1765/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1766.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="1764.php">Galen M. Shipman: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="1764.php">Galen M. Shipman: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1766.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
