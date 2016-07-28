<?
$subject_val = "Re: [OMPI users] openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 09:29:51 2012" -->
<!-- isoreceived="20121102132951" -->
<!-- sent="Fri, 2 Nov 2012 09:29:42 -0400" -->
<!-- isosent="20121102132942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi shared memory feature" -->
<!-- id="1E1422F9-1811-4B7D-86D0-76D99E182B48_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1351762585.68515.YahooMailNeo_at_web111723.mail.gq1.yahoo.com" -->
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
<strong>Date:</strong> 2012-11-02 09:29:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20621.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20619.php">huydanlin: "[OMPI users] MPI_Issend non-blocking send in Synchronous Mode"</a>
<li><strong>In reply to:</strong> <a href="20608.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20589.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know how to explain this any more than I have: Open MPI only uses those files for an initial shared memory rendezvous point (and they're not really &quot;files&quot;, either).  After that, all communication is done through shared memory.
<br>
<p>Open MPI 1.6.x actually offers using multiple different types of back-end shared memory:
<br>
<p>1. mmap (which is what is used by default, and what you are seeing): this technique creates a &quot;file&quot; in /tmp space, mmaps it into memory, and then has all the other processes do the same thing.  The file is then removed from the filesystem, leaving just the shared memory.
<br>
<p>2. sysv: uses the shm* function calls to create shared memory.  See the shmctl(2), shmat(2), and shmget(2) man pages, for example.
<br>
&nbsp;
<br>
3. posix: use the shm_* function calls to create shared memory.  See the shm_open(2) man page, for example.
<br>
<p>You can choose a different back-end shared memory technique with the &quot;shmem&quot; MCA parameter.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;# Use the mmap method
<br>
&nbsp;&nbsp;&nbsp;mpirun --mca shmem mmap ...
<br>
<p>&nbsp;&nbsp;&nbsp;# Use the sysv method
<br>
&nbsp;&nbsp;&nbsp;mpirun --mca shmem sysv ...
<br>
<p>&nbsp;&nbsp;&nbsp;# Use the posix method
<br>
&nbsp;&nbsp;&nbsp;mpirun --mca shmem posix ...
<br>
<p>See if using a different shared memory mechanism helps you out.
<br>
<p>Finally, I'll +1 on what George said; you might want to go re-read his reply and answer his questions.
<br>
<p><p><p><p><p>On Nov 1, 2012, at 5:36 AM, Mahmood Naderan wrote:
<br>
<p><span class="quotelev1">&gt; I have understood about the the advantages of shared memeory BTL. I wanted to share some of my observations and gain an understanding about the internal mechanisms of opemmpi. I am wondering why openmpi uses a temporary file for transferring data between the two processes which are on the same node (regardless of having a tmpfs or tcp stack). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assume there is no tmpfs. Then why P1 and P2 on another node (B in my example) should communicate through tcp? Why should they use a file for shared  communication. This is our observation that there is a lot of IO activity (writing activity is larger than reading). Basically they should communicate through the RAM of the node. An analogy for this, is the boot process of node B which has no disks. At the boot process it reads the images from the disk on A though network. Later it has loaded all necessary things in to *its RAM* and do what ever it want though its memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that reading and writing files for this purpose is inefficient. Wouldn't  it be more logical to use interprocess communication (IPC) API to transfer the pointer to the data between processes. As an observation, we found that mpich2 does not use the temporary file for shared memory management (though I have not figured out the mechanism yet) and achieves a better performance (minor but noticable) with respect to openmpi.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mahmood
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Monday, October 29, 2012 4:31 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openmpi shared memory feature
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 29, 2012, at 11:01 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Wow, that would make no sense at all. If P1 and P2 are on the same node, then we will use shared memory to do the transfer, as Jeff described. However, if you disable shared memory, as you indicated you were doing on a previous message (by adding -mca btl ^sm), then we would use a loopback device if available - i.e., the packet would be handed to the network stack, which would then return it to P2 without it ever leaving the node.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If there is no loopback device, and you disable shared memory, then we would abort the job with an error as there is no way for P1 to communicate with P2.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We would never do what you describe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear: it would probably be a good idea to have *some* tmpfs on your diskless node.  Some things should simply not be on a network filesystem (e.g., /tmp).  Google around; there are good reasons for having a small tmpfs, even on a diskless server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, Open MPI will warn you if it ends up putting a shared memory &quot;file&quot; (which, as I described, isn't really a file) on a network filesystem -- e.g., if /tmp is a network filesystem.  OMPI warns because corner cases can arise that cause performance degradation (e.g., the OS may periodically writing out the contents of shared memory to the network filesystem).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But as Ralph says: Open MPI primarily uses shared memory when communicating with processes on the same server (unless you disable shared memory).  This means Open MPI copies message A from P1's address space to shared memory, and then P2 copies message A from shared memory to its address space.  Or, if you're using the Linux knem kernel module, MPI copies message A from P1's address space directly to P2's address space.  No network transfer occurs, unless you possibly have /tmp on a network filesystem, and/or no /dev/shm filesystem, or other corner cases like that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="20621.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20619.php">huydanlin: "[OMPI users] MPI_Issend non-blocking send in Synchronous Mode"</a>
<li><strong>In reply to:</strong> <a href="20608.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20589.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
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
