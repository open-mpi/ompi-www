<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 29 09:19:28 2006" -->
<!-- isoreceived="20061129141928" -->
<!-- sent="Wed, 29 Nov 2006 16:19:19 +0200" -->
<!-- isosent="20061129141919" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="20061129141919.GA21324_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2187C467-8B80-4B52-B7F5-E76AAD31F6BA_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-29 09:19:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2253.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2251.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>In reply to:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2241.php">shaposh_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 29, 2006 at 08:48:48AM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; - There's also the issue that the BIOS determines core/socket order  
</span><br>
<span class="quotelev1">&gt; mapping to Linux virtual processor IDs.  Linux virtual processor 0 is  
</span><br>
<span class="quotelev1">&gt; always socket 0, core 0.  But what is linux virtual processor 1?  Is  
</span><br>
<span class="quotelev1">&gt; it socket 0, core 1, or socket 1, core 0?  This stuff is quite  
</span><br>
<span class="quotelev1">&gt; complicated to figure out, and can have large implications  
</span><br>
<span class="quotelev1">&gt; (particularly in NUMA environments).
</span><br>
<span class="quotelev1">&gt;
</span><br>
This problem is solved in the latest kernels. They have
<br>
/sys/devices/system/cpu/cpu?/topology/ directory.
<br>
# ls /sys/devices/system/cpu/cpu0/topology/
<br>
core_id  core_siblings  physical_package_id  thread_siblings
<br>
<p>There is enough information in those files to determine CPU topology
<br>
(including HT)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 29, 2006, at 1:08 AM, Durga Choudhury wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But does it matter which core the process gets bound to? They are  
</span><br>
<span class="quotelev2">&gt; &gt; all identical, and as long as the task is parallelized in equal  
</span><br>
<span class="quotelev2">&gt; &gt; chunks (that's the key part), it should not matter. The last time I  
</span><br>
<span class="quotelev2">&gt; &gt; had to do this, the problem had to do with real-time processing of  
</span><br>
<span class="quotelev2">&gt; &gt; a very large radar image. My approach was to spawn *ONE* MPI  
</span><br>
<span class="quotelev2">&gt; &gt; process per blade and 12 threads (to utilize the 12 processors).  
</span><br>
<span class="quotelev2">&gt; &gt; Inside the task entry point of each pthread, I called  
</span><br>
<span class="quotelev2">&gt; &gt; sched_setaffinity(). Then I set the scheduling algorithm to real  
</span><br>
<span class="quotelev2">&gt; &gt; time with a very high task priority to avoid preemption. It turns  
</span><br>
<span class="quotelev2">&gt; &gt; out that the last two steps did not buy me much because ours was a  
</span><br>
<span class="quotelev2">&gt; &gt; lean, embedded architecture anyway, designed to run real-time  
</span><br>
<span class="quotelev2">&gt; &gt; applications, but I definitely got a speed up from the task  
</span><br>
<span class="quotelev2">&gt; &gt; distribution.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It sure would be very nice for openMPI to have this feature; no  
</span><br>
<span class="quotelev2">&gt; &gt; questions about that. All I am saying is: if a user wants it today,  
</span><br>
<span class="quotelev2">&gt; &gt; a reasonable workaround is available so he/she does not need to wait.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is my $0.01's worth, since I am probably a lot less experienced.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Durga
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 11/29/06, Brian W. Barrett &lt;bbarrett_at_[hidden]&gt; wrote: It would  
</span><br>
<span class="quotelev2">&gt; &gt; be difficult to do well without some MPI help, in my
</span><br>
<span class="quotelev2">&gt; &gt; opinion.  You certainly could use the Linux processor affinity API
</span><br>
<span class="quotelev2">&gt; &gt; directly in the MPI application.  But how would the process know
</span><br>
<span class="quotelev2">&gt; &gt; which core to bind to?  It could wait until after MPI_INIT and call
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_RANK, but MPI implementations allocate many of their
</span><br>
<span class="quotelev2">&gt; &gt; resources during MPI_INIT, so there's high potential of the resources
</span><br>
<span class="quotelev2">&gt; &gt; (ie, memory) ending up associated with a different processor than the
</span><br>
<span class="quotelev2">&gt; &gt; one the process gets pinned to.  That isn't a big deal on Intel
</span><br>
<span class="quotelev2">&gt; &gt; machines, but is a major issue for AMD processors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just my $0.02, anyway.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 28, 2006, at 6:09 PM, Durga Choudhury wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff (and everybody else)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; First of all, pardon me if this is a stupid comment; I am learning
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the nuts-and-bolts of parallel programming; but my comment is as
</span><br>
<span class="quotelev3">&gt; &gt; &gt; follows:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Why can't this be done *outside* openMPI, by calling Linux's
</span><br>
<span class="quotelev3">&gt; &gt; &gt; processor affinity APIs directly? I work with a blade server kind
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of archirecture, where each blade has 12 CPUs. I use pthread within
</span><br>
<span class="quotelev3">&gt; &gt; &gt; each blade and MPI to talk across blades. I use the Linux system
</span><br>
<span class="quotelev3">&gt; &gt; &gt; calls to attach a thread to a specific CPU and it seems to work
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fine. The only drawback is: it makes the code unportable to a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; different OS. But even if you implemented paffinity within openMPI,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the code will still be unportable to a different implementation of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI, which, as is, it is not.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hope this helps to the original poster.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Durga
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On 11/28/06, Jeff Squyres &lt; jsquyres_at_[hidden]&gt; wrote: There is not,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; right now.  However, this is mainly because back when I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; implemented the processor affinity stuff in OMPI (well over a year
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ago), no one had any opinions on exactly what interface to expose to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the use.  :-)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So right now there's only this lame control:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am not opposed to implementing more flexible processor affinity
</span><br>
<span class="quotelev3">&gt; &gt; &gt; controls, but the Big Discussion over the past few months is exactly
</span><br>
<span class="quotelev3">&gt; &gt; &gt; how to expose it to the end user.  There have been several formats
</span><br>
<span class="quotelev3">&gt; &gt; &gt; proposed (e.g., mpirun command line parameters, magic MPI  
</span><br>
<span class="quotelev2">&gt; &gt; attributes,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MCA parameters, etc.), but nothing that has been &quot;good&quot; and &quot;right&quot;.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So here's the time to chime in -- anyone have any opinions on this?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Nov 25, 2006, at 9:31 AM, shaposh_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; i cant figure out, is there a way with open-mpi to bind all
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; threads on a given node to a specified subset of CPUs.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; For example, on a multi-socket multi-core machine, i want to use
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; only a single core on each CPU.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thank You.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Best Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Alexander Shaposhnikov
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Devil wanted omnipresence;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; He therefore created communists.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;   Brian Barrett
</span><br>
<span class="quotelev2">&gt; &gt;   Open MPI Team, CCS-1
</span><br>
<span class="quotelev2">&gt; &gt;   Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Devil wanted omnipresence;
</span><br>
<span class="quotelev2">&gt; &gt; He therefore created communists.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2253.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2251.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>In reply to:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2241.php">shaposh_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
