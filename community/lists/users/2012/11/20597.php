<?
$subject_val = "Re: [OMPI users] openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 05:36:41 2012" -->
<!-- isoreceived="20121101093641" -->
<!-- sent="Thu, 1 Nov 2012 02:36:25 -0700 (PDT)" -->
<!-- isosent="20121101093625" -->
<!-- name="Mahmood Naderan" -->
<!-- email="nt_mahmood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi shared memory feature" -->
<!-- id="1351762585.68515.YahooMailNeo_at_web111723.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FE3F8CCB-DEB8-4BC6-8C44-38176720AAF3_at_cisco.com" -->
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
<strong>From:</strong> Mahmood Naderan (<em>nt_mahmood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 05:36:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20598.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20596.php">George Bosilca: "Re: [OMPI users] [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>In reply to:</strong> <a href="../../2012/10/20564.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20609.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20609.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have understood about the the advantages of shared memeory BTL. I wanted to share some of my observations and gain an understanding about the internal mechanisms of opemmpi. I am wondering why openmpi uses a temporary file for transferring data between the two processes which are on the same node (regardless of having a tmpfs or tcp stack). 


Assume there is no tmpfs. Then why P1 and P2 on another node (B in my example) should communicate through tcp? Why should they use a file for shared communication. This is our observation that there is a lot of IO activity (writing activity is larger than reading). Basically they should communicate through the RAM of the node. An analogy for this, is the boot process of node B which has no disks. At the boot process it reads the images from the disk on A though network. Later it has loaded all necessary things in to *its RAM* and do what ever it want though its memory.


It seems that reading and writing files for this purpose is inefficient. Wouldn't&#160; it be more logical to use interprocess communication (IPC) API to transfer the pointer to the data between processes. As an observation, we found that mpich2 does not use the temporary file for shared memory management (though I have not figured out the mechanism yet) and achieves a better performance (minor but noticable) with respect to openmpi.&#160; 


Any thoughts?


&#160;
Regards,
Mahmood



________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Monday, October 29, 2012 4:31 PM
Subject: Re: [OMPI users] openmpi shared memory feature
 
On Oct 29, 2012, at 11:01 AM, Ralph Castain wrote:

&gt; Wow, that would make no sense at all. If P1 and P2 are on the same node, then we will use shared memory to do the transfer, as Jeff described. However, if you disable shared memory, as you indicated you were doing on a previous message (by adding -mca btl ^sm), then we would use a loopback device if available - i.e., the packet would be handed to the network stack, which would then return it to P2 without it ever leaving the node.
&gt; 
&gt; If there is no loopback device, and you disable shared memory, then we would abort the job with an error as there is no way for P1 to communicate with P2.
&gt; 
&gt; We would never do what you describe.

To be clear: it would probably be a good idea to have *some* tmpfs on your diskless node.&#160; Some things should simply not be on a network filesystem (e.g., /tmp).&#160; Google around; there are good reasons for having a small tmpfs, even on a diskless server.

Indeed, Open MPI will warn you if it ends up putting a shared memory &quot;file&quot; (which, as I described, isn't really a file) on a network filesystem -- e.g., if /tmp is a network filesystem.&#160; OMPI warns because corner cases can arise that cause performance degradation (e.g., the OS may periodically writing out the contents of shared memory to the network filesystem).

But as Ralph says: Open MPI primarily uses shared memory when communicating with processes on the same server (unless you disable shared memory).&#160; This means Open MPI copies message A from P1's address space to shared memory, and then P2 copies message A from shared memory to its address space.&#160; Or, if you're using the Linux knem kernel module, MPI copies message A from P1's address space directly to P2's address space.&#160; No network transfer occurs, unless you possibly have /tmp on a network filesystem, and/or no /dev/shm filesystem, or other corner cases like that.

-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>


_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-20597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20598.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20596.php">George Bosilca: "Re: [OMPI users] [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>In reply to:</strong> <a href="../../2012/10/20564.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20609.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20609.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
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
