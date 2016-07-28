<?
$subject_val = "Re: [OMPI users] openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 27 13:25:28 2012" -->
<!-- isoreceived="20121027172528" -->
<!-- sent="Sat, 27 Oct 2012 11:25:11 -0600" -->
<!-- isosent="20121027172511" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi shared memory feature" -->
<!-- id="508C18F7.6070303_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6DAC015B-10FE-4AA2-8378-F139BBA33D9C_at_cisco.com" -->
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
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-27 13:25:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20564.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20562.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20562.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20564.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20564.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mahmood,
<br>
<p>To build on what Jeff said, here's a short summary of how diskless 
<br>
clusters work:
<br>
<p>A diskless node gets its operating system through a physical network 
<br>
(say gig-E), including the HPC applications and the MPI runtimes, from a 
<br>
master server.  That master server isn't the MPI head node, it's a 
<br>
separate OS/Network boot server.  That's completely separate from how 
<br>
the MPI applications run.  The MPI-based HPC applications on the nodes 
<br>
communicate through a dedicated, faster physical network (say 
<br>
Infiniband).  There's two separate networks, one for starting and 
<br>
running nodes and one for doing HPC work.  On the same node, MPI 
<br>
processes use shared-memory to communicate, regardless of whether it's 
<br>
diskless or not, it's just part of MPI.  Between nodes, MPI processes 
<br>
use that faster, dedicated network, and that's regardless of whether 
<br>
it's diskless or not, it's just part of MPI. The networks are separate 
<br>
because it's more efficient.
<br>
<p>Damien
<br>
<p>On 27/10/2012 11:00 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 27, 2012, at 12:47 PM, Mahmood Naderan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because communicating through shared memory when sending messages between processes on the same server is far faster than going through a network stack.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I see... But that is not good for diskless clusters. Am I right? assume processes are on a node (which has no disk). In this case, their communication go though network (from computing node to server) then IO and then network again (from server to computing node).
</span><br>
<span class="quotelev1">&gt; I don't quite understand what you're saying -- what exactly is your distinction between &quot;server&quot; and &quot;computing node&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the purposes of my reply, I use the word &quot;server&quot; to mean &quot;one computational server, possibly containing multiple processors, a bunch of RAM, and possibly one or more disks.&quot;  For example, a 1U &quot;pizza box&quot; style rack enclosure containing the guts of a typical x86-based system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You seem to be relating two orthogonal things: whether a server has a disk and how MPI messages flow from one process to another.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When using shared memory, the message starts in one process, gets copied to shared memory, then then gets copied to the other process.  If you use the knem Linux kernel module, we can avoid shared memory in some cases and copy the message directly from one process' memory to the other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's irrelevant as to whether there is a disk or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20564.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20562.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20562.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20564.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20564.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
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
