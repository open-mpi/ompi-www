<?
$subject_val = "Re: [OMPI users] openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 08:28:50 2012" -->
<!-- isoreceived="20121029122850" -->
<!-- sent="Mon, 29 Oct 2012 08:28:44 -0400" -->
<!-- isosent="20121029122844" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi shared memory feature" -->
<!-- id="ABE5F9AE-C59F-4248-A5EF-353470F62EB4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1351361833.20557.YahooMailNeo_at_web111719.mail.gq1.yahoo.com" -->
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
<strong>Date:</strong> 2012-10-29 08:28:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20570.php">Giuseppe P.: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="20568.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>In reply to:</strong> <a href="20564.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20571.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20571.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your original question stuck in my brain over the weekend, and I *think* you may have been asking a different question than I originally answered.  Even though you say we answered your question, I'm going to post my ruminations here anyway.  :-)
<br>
<p>You might have been asking about how a shared memory *file* on a diskless machine -- where the majority of the filesystem is presumably on a network mount -- could be efficient.  
<br>
<p>If you look at the shared memory as a &quot;file&quot; on a filesystem (particularly if it's a network filesystem), then you're right: all file reads and writes turn into network communications.  Therefore, communication through &quot;files&quot; would actually be quite inefficient: reads and writes to such files would be pumped through the network.
<br>
<p>The reality is that shared memory &quot;files&quot; are special kinds of files.  They're just rendezvous points for multiple processes to find the shared memory.  Once a process mmaps a shared memory &quot;file&quot;, then reads and writes to that file effectively don't actually go through the underlying filesystem anymore.  Instead, they go directly to the shared memory (which is kinda the point).  
<br>
<p>There are some corner cases where the contents of the shared memory can be written out to the filesystem (which, in the case of the network filesystem, would result in network communications to the file server), but Open MPI avoids those cases.
<br>
<p>Hope that helps.
<br>
<p><p><p><p>On Oct 27, 2012, at 2:17 PM, Mahmood Naderan wrote:
<br>
<p><span class="quotelev1">&gt; Thanks all. It is now cleared.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mahmood
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Damien &lt;damien_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, October 27, 2012 7:25 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openmpi shared memory feature
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mahmood,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To build on what Jeff said, here's a short summary of how diskless clusters work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A diskless node gets its operating system through a physical network (say gig-E), including the HPC applications and the MPI runtimes, from a master server.  That master server isn't the MPI head node, it's a separate OS/Network boot server.  That's completely separate from how the MPI applications run.  The MPI-based HPC applications on the nodes communicate through a dedicated, faster physical network (say Infiniband).  There's two separate networks, one for starting and running nodes and one for doing HPC work.  On the same node, MPI processes use shared-memory to communicate, regardless of whether it's diskless or not, it's just part of MPI.  Between nodes, MPI processes use that faster, dedicated network, and that's regardless of whether it's diskless or not, it's just part of MPI. The networks are separate because it's more efficient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 27/10/2012 11:00 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 27, 2012, at 12:47 PM, Mahmood Naderan wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Because communicating through shared memory when sending messages between processes on the same server is far faster than going through a network stack.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  I see... But that is not good for diskless clusters. Am I right? assume processes are on a node (which has no disk). In this case, their communication go though network (from computing node to server) then IO and then network again (from server to computing node).
</span><br>
<span class="quotelev2">&gt; &gt; I don't quite understand what you're saying -- what exactly is your distinction between &quot;server&quot; and &quot;computing node&quot;?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For the purposes of my reply, I use the word &quot;server&quot; to mean &quot;one computational server, possibly containing multiple processors, a bunch of RAM, and possibly one or more disks.&quot;  For example, a 1U &quot;pizza box&quot; style rack enclosure containing the guts of a typical x86-based system.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You seem to be relating two orthogonal things: whether a server has a disk and how MPI messages flow from one process to another.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When using shared memory, the message starts in one process, gets copied to shared memory, then then gets copied to the other process.  If you use the knem Linux kernel module, we can avoid shared memory in some cases and copy the message directly from one process' memory to the other.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It's irrelevant as to whether there is a disk or not.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20570.php">Giuseppe P.: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="20568.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>In reply to:</strong> <a href="20564.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20571.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20571.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
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
