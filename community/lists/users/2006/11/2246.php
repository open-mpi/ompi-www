<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 29 01:08:19 2006" -->
<!-- isoreceived="20061129060819" -->
<!-- sent="Wed, 29 Nov 2006 01:08:10 -0500" -->
<!-- isosent="20061129060810" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="f869b68c0611282208o3adc6deax6049b626513e8123_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3D1254A7-7FAB-451A-8C47-5DB2431DB4AF_at_lanl.gov" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-29 01:08:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2247.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2245.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2244.php">Brian W. Barrett: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian
<br>
<p>But does it matter which core the process gets bound to? They are all
<br>
identical, and as long as the task is parallelized in equal chunks (that's
<br>
the key part), it should not matter. The last time I had to do this, the
<br>
problem had to do with real-time processing of a very large radar image. My
<br>
approach was to spawn *ONE* MPI process per blade and 12 threads (to utilize
<br>
the 12 processors). Inside the task entry point of each pthread, I called
<br>
sched_setaffinity(). Then I set the scheduling algorithm to real time with a
<br>
very high task priority to avoid preemption. It turns out that the last two
<br>
steps did not buy me much because ours was a lean, embedded architecture
<br>
anyway, designed to run real-time applications, but I definitely got a speed
<br>
up from the task distribution.
<br>
<p>It sure would be very nice for openMPI to have this feature; no questions
<br>
about that. All I am saying is: if a user wants it today, a reasonable
<br>
workaround is available so he/she does not need to wait.
<br>
<p>This is my $0.01's worth, since I am probably a lot less experienced.
<br>
<p>Durga
<br>
<p><p>On 11/29/06, Brian W. Barrett &lt;bbarrett_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be difficult to do well without some MPI help, in my
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
<span class="quotelev2">&gt; &gt; On 11/28/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: There is not,
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
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not opposed to implementing more flexible processor affinity
</span><br>
<span class="quotelev2">&gt; &gt; controls, but the Big Discussion over the past few months is exactly
</span><br>
<span class="quotelev2">&gt; &gt; how to expose it to the end user.  There have been several formats
</span><br>
<span class="quotelev2">&gt; &gt; proposed (e.g., mpirun command line parameters, magic MPI attributes,
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
<p><p><p><pre>
-- 
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2246/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2247.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2245.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2244.php">Brian W. Barrett: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
