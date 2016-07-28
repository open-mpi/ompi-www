<?
$subject_val = "Re: [OMPI users] openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 27 13:01:03 2012" -->
<!-- isoreceived="20121027170103" -->
<!-- sent="Sat, 27 Oct 2012 13:00:57 -0400" -->
<!-- isosent="20121027170057" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi shared memory feature" -->
<!-- id="6DAC015B-10FE-4AA2-8378-F139BBA33D9C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1351356436.80862.YahooMailNeo_at_web111707.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi shared memory feature<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-27 13:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20563.php">Damien: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20561.php">Ralph Castain: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20560.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20563.php">Damien: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20563.php">Damien: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2012, at 12:47 PM, Mahmood Naderan wrote:
<br>
<p><span class="quotelev2">&gt; &gt;Because communicating through shared memory when sending messages between processes on the same server is far faster than going through a network stack.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I see... But that is not good for diskless clusters. Am I right? assume processes are on a node (which has no disk). In this case, their communication go though network (from computing node to server) then IO and then network again (from server to computing node).
</span><br>
<p>I don't quite understand what you're saying -- what exactly is your distinction between &quot;server&quot; and &quot;computing node&quot;?
<br>
<p>For the purposes of my reply, I use the word &quot;server&quot; to mean &quot;one computational server, possibly containing multiple processors, a bunch of RAM, and possibly one or more disks.&quot;  For example, a 1U &quot;pizza box&quot; style rack enclosure containing the guts of a typical x86-based system.
<br>
<p>You seem to be relating two orthogonal things: whether a server has a disk and how MPI messages flow from one process to another.
<br>
<p>When using shared memory, the message starts in one process, gets copied to shared memory, then then gets copied to the other process.  If you use the knem Linux kernel module, we can avoid shared memory in some cases and copy the message directly from one process' memory to the other.
<br>
<p>It's irrelevant as to whether there is a disk or not.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20563.php">Damien: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20561.php">Ralph Castain: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20560.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20563.php">Damien: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20563.php">Damien: "Re: [OMPI users] openmpi shared memory feature"</a>
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
