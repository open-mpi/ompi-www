<?
$subject_val = "Re: [OMPI users] openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 10:33:56 2012" -->
<!-- isoreceived="20121029143356" -->
<!-- sent="Mon, 29 Oct 2012 07:33:49 -0700 (PDT)" -->
<!-- isosent="20121029143349" -->
<!-- name="Mahmood Naderan" -->
<!-- email="nt_mahmood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi shared memory feature" -->
<!-- id="1351521229.94340.YahooMailNeo_at_web111702.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="ABE5F9AE-C59F-4248-A5EF-353470F62EB4_at_cisco.com" -->
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
<strong>From:</strong> Mahmood Naderan (<em>nt_mahmood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-29 10:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20572.php">Reuti: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="20570.php">Giuseppe P.: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="20569.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20573.php">Ralph Castain: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20573.php">Ralph Castain: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks again for your answer. The reason why I had negative view to the shared memory feature was that we were debugging the system (our program, openmpi, cluster settings, ...) for nearly a week. To avoid any confusion, I will use &quot;node&quot;. Here we have:
1- Node 'A' which has some pysical disks 32GB of memory

2- Node 'B' which has 64GB of memory but has no disks. It boots from an image which resides on 'A'.
3- There is no tmpfs.
4- We installed openmpi with *default* options.

5- We run the command &quot;openmpi -np 4 ....&quot; on 'B'



So 4 processes are running on 'B'. Assume P1 is trying to send sond something to P2. This is my understanding (please correct if I am wrong)
1- P1 create a packet.
2- P1 send the packet to the network interface.
3- The packet is transfered from 'B' to 'A'.
4- While on 'A', the packet goes to the disk and do something.
5- The packet is again oon the way from 'A' to 'B'.
6- P2 on 'B' will get the packet.

That is a clear inefficient communication.

What I understand from your replies, is that if there is a tmpfs, then P1 and P2 can communicate through the memory on 'B' which is fine. But I think there should be more documentation on that. 

&#160;
Regards,
Mahmood



________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Mahmood Naderan &lt;nt_mahmood_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Monday, October 29, 2012 1:28 PM
Subject: Re: [OMPI users] openmpi shared memory feature
 
Your original question stuck in my brain over the weekend, and I *think* you may have been asking a different question than I originally answered.&#160; Even though you say we answered your question, I'm going to post my ruminations here anyway.&#160; :-)

You might have been asking about how a shared memory *file* on a diskless machine -- where the majority of the filesystem is presumably on a network mount -- could be efficient.&#160; 

If you look at the shared memory as a &quot;file&quot; on a filesystem (particularly if it's a network filesystem), then you're right: all file reads and writes turn into network communications.&#160; Therefore, communication through &quot;files&quot; would actually be quite inefficient: reads and writes to such files would be pumped through the network.

The reality is that shared memory &quot;files&quot; are special kinds of files.&#160; They're just rendezvous points for multiple processes to find the shared memory.&#160; Once a process mmaps a shared memory &quot;file&quot;, then reads and writes to that file effectively don't actually go through the underlying filesystem anymore.&#160; Instead, they go directly to the shared memory (which is kinda the point).&#160; 

There are some corner cases where the contents of the shared memory can be written out to the filesystem (which, in the case of the network filesystem, would result in network communications to the file server), but Open MPI avoids those cases.

Hope that helps.




On Oct 27, 2012, at 2:17 PM, Mahmood Naderan wrote:

&gt; Thanks all. It is now cleared.
&gt; 
&gt; Regards,
&gt; Mahmood
&gt; 
&gt; From: Damien &lt;damien_at_[hidden]&gt;
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
&gt; Sent: Saturday, October 27, 2012 7:25 PM
&gt; Subject: Re: [OMPI users] openmpi shared memory feature
&gt; 
&gt; Mahmood,
&gt; 
&gt; To build on what Jeff said, here's a short summary of how diskless clusters work:
&gt; 
&gt; A diskless node gets its operating system through a physical network (say gig-E), including the HPC applications and the MPI runtimes, from a master server.&#160; That master server isn't the MPI head node, it's a separate OS/Network boot server.&#160; That's completely separate from how the MPI applications run.&#160; The MPI-based HPC applications on the nodes communicate through a dedicated, faster physical network (say Infiniband).&#160; There's two separate networks, one for starting and running nodes and one for doing HPC work.&#160; On the same node, MPI processes use shared-memory to communicate, regardless of whether it's diskless or not, it's just part of MPI.&#160; Between nodes, MPI processes use that faster, dedicated network, and that's regardless of whether it's diskless or not, it's just part of MPI. The networks are separate because it's more efficient.
&gt; 
&gt; Damien
&gt; 
&gt; On 27/10/2012 11:00 AM, Jeff Squyres wrote:
&gt; &gt; On Oct 27, 2012, at 12:47 PM, Mahmood Naderan wrote:
&gt; &gt; 
&gt; &gt;&gt;&gt; Because communicating through shared memory when sending messages between processes on the same server is far faster than going through a network stack.
&gt; &gt;&gt;&#160; I see... But that is not good for diskless clusters. Am I right? assume processes are on a node (which has no disk). In this case, their communication go though network (from computing node to server) then IO and then network again (from server to computing node).
&gt; &gt; I don't quite understand what you're saying -- what exactly is your distinction between &quot;server&quot; and &quot;computing node&quot;?
&gt; &gt; 
&gt; &gt; For the purposes of my reply, I use the word &quot;server&quot; to mean &quot;one computational server, possibly containing multiple processors, a bunch of RAM, and possibly one or more disks.&quot;&#160; For example, a 1U &quot;pizza box&quot; style rack enclosure containing the guts of a typical x86-based system.
&gt; &gt; 
&gt; &gt; You seem to be relating two orthogonal things: whether a server has a disk and how MPI messages flow from one process to another.
&gt; &gt; 
&gt; &gt; When using shared memory, the message starts in one process, gets copied to shared memory, then then gets copied to the other process.&#160; If you use the knem Linux kernel module, we can avoid shared memory in some cases and copy the message directly from one process' memory to the other.
&gt; &gt; 
&gt; &gt; It's irrelevant as to whether there is a disk or not.
&gt; &gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20571/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20572.php">Reuti: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="20570.php">Giuseppe P.: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="20569.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20573.php">Ralph Castain: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20573.php">Ralph Castain: "Re: [OMPI users] openmpi shared memory feature"</a>
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
