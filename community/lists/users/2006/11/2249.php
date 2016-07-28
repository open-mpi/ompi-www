<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 29 08:49:19 2006" -->
<!-- isoreceived="20061129134919" -->
<!-- sent="Wed, 29 Nov 2006 08:48:48 -0500" -->
<!-- isosent="20061129134848" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="2187C467-8B80-4B52-B7F5-E76AAD31F6BA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f869b68c0611282208o3adc6deax6049b626513e8123_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-29 08:48:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2250.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2248.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>In reply to:</strong> <a href="2246.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2252.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2252.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's a few issues involved here:
<br>
<p>- Brian was pointing out that AMDs are NUMA (and Intel may well go  
<br>
NUMA someday -- scaling up to hundreds of cores, unless something  
<br>
quite unexpected happens in terms of computer architectures, simply  
<br>
does not scale in UMA architectures).  So each core is *not* created  
<br>
equal -- mainly in terms of locality to resources.  If MPI allocates  
<br>
resources local to core X and you end up pinning yourself to core Y,  
<br>
what happens if X and Y are not local to each other?  You've just  
<br>
killed your performance because of the latency hit to get to MPI- (or  
<br>
other) allocated resources.
<br>
<p>- If you're going to use the Linux sched_setaffinity(), beware that  
<br>
this function has changed signatures multiple times over the history  
<br>
of Linux (there are at least 3 versions that I'm aware of).   
<br>
Shameless plug: try the Portable Linux Processor Affinity (PLPA)  
<br>
micro-library that provides a simple, consistent interface to Linux  
<br>
processor affinity regardless of your version of Linux kernel and  
<br>
glibc (<a href="http://www.open-mpi.org/software/plpa/">http://www.open-mpi.org/software/plpa/</a>).  The library has  
<br>
nothing to do with MPI and can be used in any application that wants  
<br>
to use paffinity.
<br>
<p>- There's also the issue that some clusters -- particularly those  
<br>
setup for high-core-count hosts -- may well be setup to allow  
<br>
multiple MPI jobs to land on the same host.  In that case, how does  
<br>
the MPI app know which core to bind itself to?  If every MPI job  
<br>
starts binding itself to core 0 and counting upwards, the case where  
<br>
multiple MPI jobs land on the same host becomes a disaster.
<br>
<p>- There's also the issue that the BIOS determines core/socket order  
<br>
mapping to Linux virtual processor IDs.  Linux virtual processor 0 is  
<br>
always socket 0, core 0.  But what is linux virtual processor 1?  Is  
<br>
it socket 0, core 1, or socket 1, core 0?  This stuff is quite  
<br>
complicated to figure out, and can have large implications  
<br>
(particularly in NUMA environments).
<br>
<p><p><p>On Nov 29, 2006, at 1:08 AM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But does it matter which core the process gets bound to? They are  
</span><br>
<span class="quotelev1">&gt; all identical, and as long as the task is parallelized in equal  
</span><br>
<span class="quotelev1">&gt; chunks (that's the key part), it should not matter. The last time I  
</span><br>
<span class="quotelev1">&gt; had to do this, the problem had to do with real-time processing of  
</span><br>
<span class="quotelev1">&gt; a very large radar image. My approach was to spawn *ONE* MPI  
</span><br>
<span class="quotelev1">&gt; process per blade and 12 threads (to utilize the 12 processors).  
</span><br>
<span class="quotelev1">&gt; Inside the task entry point of each pthread, I called  
</span><br>
<span class="quotelev1">&gt; sched_setaffinity(). Then I set the scheduling algorithm to real  
</span><br>
<span class="quotelev1">&gt; time with a very high task priority to avoid preemption. It turns  
</span><br>
<span class="quotelev1">&gt; out that the last two steps did not buy me much because ours was a  
</span><br>
<span class="quotelev1">&gt; lean, embedded architecture anyway, designed to run real-time  
</span><br>
<span class="quotelev1">&gt; applications, but I definitely got a speed up from the task  
</span><br>
<span class="quotelev1">&gt; distribution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sure would be very nice for openMPI to have this feature; no  
</span><br>
<span class="quotelev1">&gt; questions about that. All I am saying is: if a user wants it today,  
</span><br>
<span class="quotelev1">&gt; a reasonable workaround is available so he/she does not need to wait.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is my $0.01's worth, since I am probably a lot less experienced.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/29/06, Brian W. Barrett &lt;bbarrett_at_[hidden]&gt; wrote: It would  
</span><br>
<span class="quotelev1">&gt; be difficult to do well without some MPI help, in my
</span><br>
<span class="quotelev1">&gt; opinion.  You certainly could use the Linux processor affinity API
</span><br>
<span class="quotelev1">&gt; directly in the MPI application.  But how would the process know
</span><br>
<span class="quotelev1">&gt; which core to bind to?  It could wait until after MPI_INIT and call
</span><br>
<span class="quotelev1">&gt; MPI_COMM_RANK, but MPI implementations allocate many of their
</span><br>
<span class="quotelev1">&gt; resources during MPI_INIT, so there's high potential of the resources
</span><br>
<span class="quotelev1">&gt; (ie, memory) ending up associated with a different processor than the
</span><br>
<span class="quotelev1">&gt; one the process gets pinned to.  That isn't a big deal on Intel
</span><br>
<span class="quotelev1">&gt; machines, but is a major issue for AMD processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my $0.02, anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 28, 2006, at 6:09 PM, Durga Choudhury wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff (and everybody else)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; First of all, pardon me if this is a stupid comment; I am learning
</span><br>
<span class="quotelev2">&gt; &gt; the nuts-and-bolts of parallel programming; but my comment is as
</span><br>
<span class="quotelev2">&gt; &gt; follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why can't this be done *outside* openMPI, by calling Linux's
</span><br>
<span class="quotelev2">&gt; &gt; processor affinity APIs directly? I work with a blade server kind
</span><br>
<span class="quotelev2">&gt; &gt; of archirecture, where each blade has 12 CPUs. I use pthread within
</span><br>
<span class="quotelev2">&gt; &gt; each blade and MPI to talk across blades. I use the Linux system
</span><br>
<span class="quotelev2">&gt; &gt; calls to attach a thread to a specific CPU and it seems to work
</span><br>
<span class="quotelev2">&gt; &gt; fine. The only drawback is: it makes the code unportable to a
</span><br>
<span class="quotelev2">&gt; &gt; different OS. But even if you implemented paffinity within openMPI,
</span><br>
<span class="quotelev2">&gt; &gt; the code will still be unportable to a different implementation of
</span><br>
<span class="quotelev2">&gt; &gt; MPI, which, as is, it is not.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope this helps to the original poster.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Durga
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 11/28/06, Jeff Squyres &lt; jsquyres_at_[hidden]&gt; wrote: There is not,
</span><br>
<span class="quotelev2">&gt; &gt; right now.  However, this is mainly because back when I
</span><br>
<span class="quotelev2">&gt; &gt; implemented the processor affinity stuff in OMPI (well over a year
</span><br>
<span class="quotelev2">&gt; &gt; ago), no one had any opinions on exactly what interface to expose to
</span><br>
<span class="quotelev2">&gt; &gt; the use.  :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So right now there's only this lame control:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not opposed to implementing more flexible processor affinity
</span><br>
<span class="quotelev2">&gt; &gt; controls, but the Big Discussion over the past few months is exactly
</span><br>
<span class="quotelev2">&gt; &gt; how to expose it to the end user.  There have been several formats
</span><br>
<span class="quotelev2">&gt; &gt; proposed (e.g., mpirun command line parameters, magic MPI  
</span><br>
<span class="quotelev1">&gt; attributes,
</span><br>
<span class="quotelev2">&gt; &gt; MCA parameters, etc.), but nothing that has been &quot;good&quot; and &quot;right&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; So here's the time to chime in -- anyone have any opinions on this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 25, 2006, at 9:31 AM, shaposh_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i cant figure out, is there a way with open-mpi to bind all
</span><br>
<span class="quotelev3">&gt; &gt; &gt; threads on a given node to a specified subset of CPUs.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For example, on a multi-socket multi-core machine, i want to use
</span><br>
<span class="quotelev3">&gt; &gt; &gt; only a single core on each CPU.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank You.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Alexander Shaposhnikov
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian Barrett
</span><br>
<span class="quotelev1">&gt;   Open MPI Team, CCS-1
</span><br>
<span class="quotelev1">&gt;   Los Alamos National Laboratory
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Devil wanted omnipresence;
</span><br>
<span class="quotelev1">&gt; He therefore created communists.
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2250.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2248.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>In reply to:</strong> <a href="2246.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2252.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2252.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
