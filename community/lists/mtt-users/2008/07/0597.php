<?
$subject_val = "Re: [MTT users] RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 11:52:13 2008" -->
<!-- isoreceived="20080731155213" -->
<!-- sent="Thu, 31 Jul 2008 18:52:07 +0300" -->
<!-- isosent="20080731155207" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [MTT users] RETRY EXCEEDED ERROR" -->
<!-- id="4891DFA7.6050204_at_dev.mellanox.co.il" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1217519034.6812.28.camel_at_T42" -->
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
<strong>Subject:</strong> Re: [MTT users] RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 11:52:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0598.php">Rafael Folco: "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="0596.php">Rafael Folco: "[MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="0596.php">Rafael Folco: "[MTT users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0598.php">Rafael Folco: "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="0598.php">Rafael Folco: "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The &quot;RETRY EXCEEDED ERROR&quot; error is related to IB and not MTT.
<br>
<p>The error says that IB failed to send IB packet from
<br>
<p>machine 10.2.1.90 to 10.2.1.50
<br>
<p>You need to run your IB network monitoring tool and found the issue.
<br>
<p>Usually it is some bad cable in IB fabric that causes such errors.
<br>
<p>Regards,
<br>
Pasha 
<br>
<p><p>Rafael Folco wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need some help, please.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running a set of MTT tests on my cluster and I have issues in a
</span><br>
<span class="quotelev1">&gt; particular node. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,7][btl_openib_component.c:1332:btl_openib_component_progress] from
</span><br>
<span class="quotelev1">&gt; 10.2.1.90 to: 10.2.1.50 error polling HP CQ with status RETRY EXCEEDED
</span><br>
<span class="quotelev1">&gt; ERROR status number 12 for wr_id 268870712 opcode 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am able to ping from 10.2.1.90 to 10.2.1.50, and they are visible to
</span><br>
<span class="quotelev1">&gt; each other in the network, just like the other nodes. I've already
</span><br>
<span class="quotelev1">&gt; checked the drivers, reinstalled openmpi, but nothing changes...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10.2.1.90:
</span><br>
<span class="quotelev1">&gt; # ping 10.2.1.50
</span><br>
<span class="quotelev1">&gt; PING 10.2.1.50 (10.2.1.50) 56(84) bytes of data.
</span><br>
<span class="quotelev1">&gt; 64 bytes from 10.2.1.50: icmp_seq=1 ttl=64 time=9.95 ms
</span><br>
<span class="quotelev1">&gt; 64 bytes from 10.2.1.50: icmp_seq=2 ttl=64 time=0.076 ms
</span><br>
<span class="quotelev1">&gt; 64 bytes from 10.2.1.50: icmp_seq=3 ttl=64 time=0.114 ms
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cable connections are the same to every node and all tests run fine
</span><br>
<span class="quotelev1">&gt; without &#239;&#187;&#191;10.2.1.90. In the other hand, when I add 10.2.1.90 to the
</span><br>
<span class="quotelev1">&gt; hostlist, I get many failures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please, could someone tell me why 10.2.1.90 doesn't like 10.2.1.50 ? Any
</span><br>
<span class="quotelev1">&gt; clue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see any problems with other combination of nodes. This is very
</span><br>
<span class="quotelev1">&gt; very weird.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MTT Results Summary
</span><br>
<span class="quotelev1">&gt; hostname: p6ihopenhpc1-ib0
</span><br>
<span class="quotelev1">&gt; uname: Linux p6ihopenhpc1-ib0 2.6.16.60-0.21-ppc64 #1 SMP Tue May 6
</span><br>
<span class="quotelev1">&gt; 12:41:02 UTC 2008 ppc64 ppc64 ppc64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; who am i: root     pts/3        Jul 31 13:31 (elm3b150:S.0)
</span><br>
<span class="quotelev1">&gt; +-------------+-----------------+------+------+----------+------+
</span><br>
<span class="quotelev1">&gt; | Phase       | Section         | Pass | Fail | Time out | Skip |
</span><br>
<span class="quotelev1">&gt; +-------------+-----------------+------+------+----------+------+
</span><br>
<span class="quotelev1">&gt; | MPI install | openmpi-1.2.5   | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Build  | trivial         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Build  | ibm             | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Build  | onesided        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Build  | mpicxx          | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Build  | imb             | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Build  | netpipe         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Run    | trivial         | 4    | 4    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Run    | ibm             | 59   | 120  | 0        | 3    |
</span><br>
<span class="quotelev1">&gt; | Test Run    | onesided        | 95   | 37   | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Run    | mpicxx          | 0    | 1    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Run    | imb correctness | 0    | 1    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Run    | imb performance | 0    | 12   | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Run    | netpipe         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev1">&gt; +-------------+-----------------+------+------+----------+------+
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also attached one of the errors here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rafael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0598.php">Rafael Folco: "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="0596.php">Rafael Folco: "[MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="0596.php">Rafael Folco: "[MTT users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0598.php">Rafael Folco: "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="0598.php">Rafael Folco: "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
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
