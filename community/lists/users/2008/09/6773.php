<?
$subject_val = "Re: [OMPI users] Execution in multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 15:13:20 2008" -->
<!-- isoreceived="20080929191320" -->
<!-- sent="Mon, 29 Sep 2008 21:13:22 +0200" -->
<!-- isosent="20080929191322" -->
<!-- name="Fabian H&#195;&#164;nsel" -->
<!-- email="fabian.haensel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Execution in multicore machines" -->
<!-- id="20080929211322.06dfd6b0.fabian.haensel_at_zih.tu-dresden.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48E11ED5.2060808_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Execution in multicore machines<br>
<strong>From:</strong> Fabian H&#195;&#164;nsel (<em>fabian.haensel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 15:13:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6774.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6772.php">Leonardo Fialho: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>In reply to:</strong> <a href="6770.php">Leonardo Fialho: "[OMPI users] Execution in multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6796.php">Jeff Squyres: "Re: [OMPI users] Execution in multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; A) The execution time in case &quot;1&quot; should be smaller (only sm 
</span><br>
<span class="quotelev1">&gt; communication, no?) than case &quot;2&quot; and &quot;3&quot;, no? Cache problems?
</span><br>
<p>Shot in the dark from working on Sun T1 (also 8 real cores): from time
<br>
to time the OS wants to do something (interrupt handling, wake up
<br>
cron, ...). Leaving one or two cores spare for that purpose sometimes
<br>
yields much better performance (no context switches for OS anymore).
<br>
<p><span class="quotelev1">&gt; B) Why the &quot;sys&quot; time while using communication inter nodes? NIC
</span><br>
<span class="quotelev1">&gt; driver?
</span><br>
<p>That does not seem to be an uncommon value for ethernet NIC driver and
<br>
TCP/IP stack (but depends on the specific hardware (e.g. on-board
<br>
ethernet cards are worse than &quot;real&quot; ones; infiniband etc. is better
<br>
than ethernet, ...) and the amount of messages which depends on the
<br>
algorith). Depending on how you've taken measure/which OS/kernel/...
<br>
maybe that time consists of the time a driver waits for something to
<br>
happen on the network, too.
<br>
<p><span class="quotelev1">&gt; Why this time increase when I balance the load across the
</span><br>
<span class="quotelev1">&gt; nodes?
</span><br>
<p>The more nodes you use, the more communication between them takes
<br>
place, so the more &quot;parties&quot; have to sync with each other, so the more
<br>
overhead is generated.
<br>
<p>Best regards,
<br>
&nbsp;&nbsp;Fabian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6774.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6772.php">Leonardo Fialho: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>In reply to:</strong> <a href="6770.php">Leonardo Fialho: "[OMPI users] Execution in multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6796.php">Jeff Squyres: "Re: [OMPI users] Execution in multicore machines"</a>
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
