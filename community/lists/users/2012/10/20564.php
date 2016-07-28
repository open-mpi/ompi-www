<?
$subject_val = "Re: [OMPI users] openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 27 14:17:19 2012" -->
<!-- isoreceived="20121027181719" -->
<!-- sent="Sat, 27 Oct 2012 11:17:13 -0700 (PDT)" -->
<!-- isosent="20121027181713" -->
<!-- name="Mahmood Naderan" -->
<!-- email="nt_mahmood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi shared memory feature" -->
<!-- id="1351361833.20557.YahooMailNeo_at_web111719.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="508C18F7.6070303_at_khubla.com" -->
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
<strong>Date:</strong> 2012-10-27 14:17:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20565.php">Jeff Squyres: "[OMPI users] Tip for HPC cluster admins"</a>
<li><strong>Previous message:</strong> <a href="20563.php">Damien: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20563.php">Damien: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20569.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20569.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks all. It is now cleared.


Regards,
Mahmood



________________________________
 From: Damien &lt;damien_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Saturday, October 27, 2012 7:25 PM
Subject: Re: [OMPI users] openmpi shared memory feature
 
Mahmood,

To build on what Jeff said, here's a short summary of how diskless clusters work:

A diskless node gets its operating system through a physical network (say gig-E), including the HPC applications and the MPI runtimes, from a master server.&#160; That master server isn't the MPI head node, it's a separate OS/Network boot server.&#160; That's completely separate from how the MPI applications run.&#160; The MPI-based HPC applications on the nodes communicate through a dedicated, faster physical network (say Infiniband).&#160; There's two separate networks, one for starting and running nodes and one for doing HPC work.&#160; On the same node, MPI processes use shared-memory to communicate, regardless of whether it's diskless or not, it's just part of MPI.&#160; Between nodes, MPI processes use that faster, dedicated network, and that's regardless of whether it's diskless or not, it's just part of MPI. The networks are separate because it's more efficient.

Damien

On 27/10/2012 11:00 AM, Jeff Squyres wrote:
&gt; On Oct 27, 2012, at 12:47 PM, Mahmood Naderan wrote:
&gt; 
&gt;&gt;&gt; Because communicating through shared memory when sending messages between processes on the same server is far faster than going through a network stack.
&gt;&gt;&#160;  I see... But that is not good for diskless clusters. Am I right? assume processes are on a node (which has no disk). In this case, their communication go though network (from computing node to server) then IO and then network again (from server to computing node).
&gt; I don't quite understand what you're saying -- what exactly is your distinction between &quot;server&quot; and &quot;computing node&quot;?
&gt; 
&gt; For the purposes of my reply, I use the word &quot;server&quot; to mean &quot;one computational server, possibly containing multiple processors, a bunch of RAM, and possibly one or more disks.&quot;&#160; For example, a 1U &quot;pizza box&quot; style rack enclosure containing the guts of a typical x86-based system.
&gt; 
&gt; You seem to be relating two orthogonal things: whether a server has a disk and how MPI messages flow from one process to another.
&gt; 
&gt; When using shared memory, the message starts in one process, gets copied to shared memory, then then gets copied to the other process.&#160; If you use the knem Linux kernel module, we can avoid shared memory in some cases and copy the message directly from one process' memory to the other.
&gt; 
&gt; It's irrelevant as to whether there is a disk or not.
&gt; 

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20564/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20565.php">Jeff Squyres: "[OMPI users] Tip for HPC cluster admins"</a>
<li><strong>Previous message:</strong> <a href="20563.php">Damien: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20563.php">Damien: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20569.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20569.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
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
