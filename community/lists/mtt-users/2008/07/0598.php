<?
$subject_val = "Re: [MTT users] RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 12:40:56 2008" -->
<!-- isoreceived="20080731164056" -->
<!-- sent="Thu, 31 Jul 2008 13:42:37 -0300" -->
<!-- isosent="20080731164237" -->
<!-- name="Rafael Folco" -->
<!-- email="rfolco_at_[hidden]" -->
<!-- subject="Re: [MTT users] RETRY EXCEEDED ERROR" -->
<!-- id="1217522557.6812.50.camel_at_T42" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4891DFA7.6050204_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Rafael Folco (<em>rfolco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 12:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0599.php">Jeff Squyres: "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="0597.php">Pavel Shamis (Pasha): "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="0597.php">Pavel Shamis (Pasha): "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0599.php">Jeff Squyres: "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="0599.php">Jeff Squyres: "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the response, Pasha. Yes, I agree this is some issue with the
<br>
IB network. I came to the list looking for some previous experience of
<br>
other users... I wonder why 10.2.1.90 works with all other nodes,
<br>
10.2.1.50 works with all other nodes as well, but they can't work
<br>
together. Maybe OFED lists will be more appropriate for this kind of
<br>
question.
<br>
<p>Regards,
<br>
<p>Rafael
<br>
<p><p>On Thu, 2008-07-31 at 18:52 +0300, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; The &quot;RETRY EXCEEDED ERROR&quot; error is related to IB and not MTT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error says that IB failed to send IB packet from
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; machine 10.2.1.90 to 10.2.1.50
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need to run your IB network monitoring tool and found the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Usually it is some bad cable in IB fabric that causes such errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rafael Folco wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I need some help, please.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm running a set of MTT tests on my cluster and I have issues in a
</span><br>
<span class="quotelev2">&gt; &gt; particular node. 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,7][btl_openib_component.c:1332:btl_openib_component_progress] from
</span><br>
<span class="quotelev2">&gt; &gt; 10.2.1.90 to: 10.2.1.50 error polling HP CQ with status RETRY EXCEEDED
</span><br>
<span class="quotelev2">&gt; &gt; ERROR status number 12 for wr_id 268870712 opcode 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am able to ping from 10.2.1.90 to 10.2.1.50, and they are visible to
</span><br>
<span class="quotelev2">&gt; &gt; each other in the network, just like the other nodes. I've already
</span><br>
<span class="quotelev2">&gt; &gt; checked the drivers, reinstalled openmpi, but nothing changes...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 10.2.1.90:
</span><br>
<span class="quotelev2">&gt; &gt; # ping 10.2.1.50
</span><br>
<span class="quotelev2">&gt; &gt; PING 10.2.1.50 (10.2.1.50) 56(84) bytes of data.
</span><br>
<span class="quotelev2">&gt; &gt; 64 bytes from 10.2.1.50: icmp_seq=1 ttl=64 time=9.95 ms
</span><br>
<span class="quotelev2">&gt; &gt; 64 bytes from 10.2.1.50: icmp_seq=2 ttl=64 time=0.076 ms
</span><br>
<span class="quotelev2">&gt; &gt; 64 bytes from 10.2.1.50: icmp_seq=3 ttl=64 time=0.114 ms
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The cable connections are the same to every node and all tests run fine
</span><br>
<span class="quotelev2">&gt; &gt; without &#239;&#187;&#191;10.2.1.90. In the other hand, when I add 10.2.1.90 to the
</span><br>
<span class="quotelev2">&gt; &gt; hostlist, I get many failures.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please, could someone tell me why 10.2.1.90 doesn't like 10.2.1.50 ? Any
</span><br>
<span class="quotelev2">&gt; &gt; clue?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't see any problems with other combination of nodes. This is very
</span><br>
<span class="quotelev2">&gt; &gt; very weird.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MTT Results Summary
</span><br>
<span class="quotelev2">&gt; &gt; hostname: p6ihopenhpc1-ib0
</span><br>
<span class="quotelev2">&gt; &gt; uname: Linux p6ihopenhpc1-ib0 2.6.16.60-0.21-ppc64 #1 SMP Tue May 6
</span><br>
<span class="quotelev2">&gt; &gt; 12:41:02 UTC 2008 ppc64 ppc64 ppc64 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt; who am i: root     pts/3        Jul 31 13:31 (elm3b150:S.0)
</span><br>
<span class="quotelev2">&gt; &gt; +-------------+-----------------+------+------+----------+------+
</span><br>
<span class="quotelev2">&gt; &gt; | Phase       | Section         | Pass | Fail | Time out | Skip |
</span><br>
<span class="quotelev2">&gt; &gt; +-------------+-----------------+------+------+----------+------+
</span><br>
<span class="quotelev2">&gt; &gt; | MPI install | openmpi-1.2.5   | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Build  | trivial         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Build  | ibm             | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Build  | onesided        | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Build  | mpicxx          | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Build  | imb             | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Build  | netpipe         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Run    | trivial         | 4    | 4    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Run    | ibm             | 59   | 120  | 0        | 3    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Run    | onesided        | 95   | 37   | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Run    | mpicxx          | 0    | 1    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Run    | imb correctness | 0    | 1    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Run    | imb performance | 0    | 12   | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; | Test Run    | netpipe         | 1    | 0    | 0        | 0    |
</span><br>
<span class="quotelev2">&gt; &gt; +-------------+-----------------+------+------+----------+------+
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also attached one of the errors here.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rafael
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Rafael Folco
OpenHPC / Brazil Test Lead
IBM Linux Technology Center
E-Mail: rfolco_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0599.php">Jeff Squyres: "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="0597.php">Pavel Shamis (Pasha): "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="0597.php">Pavel Shamis (Pasha): "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0599.php">Jeff Squyres: "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="0599.php">Jeff Squyres: "Re: [MTT users] RETRY EXCEEDED ERROR"</a>
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
