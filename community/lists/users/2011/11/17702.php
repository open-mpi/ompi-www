<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 09:59:43 2011" -->
<!-- isoreceived="20111104135943" -->
<!-- sent="Fri, 4 Nov 2011 07:59:35 -0600" -->
<!-- isosent="20111104135935" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage" -->
<!-- id="9A2A3771-0F00-41EC-93EA-130F55F7A6C3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EB3C1DD.1090607_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 09:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17703.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17701.php">Jeff Squyres: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>In reply to:</strong> <a href="17697.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17703.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17703.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That isn't the situation, Terry. We had problems with early OMPI releases, particularly the 1.2 series. In response, the labs wrote an epilogue to ensure that the session directories were removed. Executing the epilogue is now standard operating procedure, even though our more recent releases do a much better job of cleanup.
<br>
<p>Frankly, it's a good idea anyway. It hurts nothing, takes milliseconds to do, and guarantees nothing got left behind (e.g., if someone was using a debug version of OMPI and directed opal_output to a file).
<br>
<p>On Nov 4, 2011, at 4:43 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; David, are you saying your jobs consistently leave behind session files after the job exits?  It really shouldn't even in the case when a job aborts, I thought, mpirun took great pains to cleanup after itself.    Can you tell us what version of OMPI you are running with?  I think I could see kill -9 of mpirun and processes below would cause turds to be left behind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/4/2011 2:37 AM, David Turner wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; % df /tmp 
</span><br>
<span class="quotelev2">&gt;&gt; Filesystem           1K-blocks      Used Available Use% Mounted on 
</span><br>
<span class="quotelev2">&gt;&gt; -                     12330084    822848  11507236   7% / 
</span><br>
<span class="quotelev2">&gt;&gt; % df / 
</span><br>
<span class="quotelev2">&gt;&gt; Filesystem           1K-blocks      Used Available Use% Mounted on 
</span><br>
<span class="quotelev2">&gt;&gt; -                     12330084    822848  11507236   7% / 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That works out to 11GB.  But... 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The compute nodes have 24GB.  Freshly booted, about 3.2GB is 
</span><br>
<span class="quotelev2">&gt;&gt; consumed by the kernel, various services, and the root file system. 
</span><br>
<span class="quotelev2">&gt;&gt; At this time, usage of /tmp is essentially nil. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We set user memory limits to 20GB. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would imagine that the size of the session directories depends on a 
</span><br>
<span class="quotelev2">&gt;&gt; number of factors; perhaps the developers can comment on that.  I have 
</span><br>
<span class="quotelev2">&gt;&gt; only seen total sizes in the 10s of MBs on our 8-node, 24GB nodes. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As long as they're removed after each job, they don't really compete 
</span><br>
<span class="quotelev2">&gt;&gt; with the application for available memory. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/3/11 8:40 PM, Ed Blosch wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks very much, exactly what I wanted to hear. How big is /tmp? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message----- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of David Turner 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, November 03, 2011 6:36 PM 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for OpenMPI usage 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not a systems guy, but I'll pitch in anyway.  On our cluster, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all the compute nodes are completely diskless.  The root file system, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; including /tmp, resides in memory (ramdisk).  OpenMPI puts these 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; session directories therein.  All our jobs run through a batch 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system (torque).  At the conclusion of each batch job, an epilogue 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process runs that removes all files belonging to the owner of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current batch job from /tmp (and also looks for and kills orphan 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes belonging to the user).  This epilogue had to written 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by our systems staff. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe this is a fairly common configuration for diskless 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clusters. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/3/11 4:09 PM, Blosch, Edwin L wrote: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for the help.  A couple follow-up-questions, maybe this starts to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go outside OpenMPI: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What's wrong with using /dev/shm?  I think you said earlier in this thread 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that this was not a safe place. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If the NFS-mount point is moved from /tmp to /work, would a /tmp magically 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appear in the filesystem for a stateless node?  How big would it be, given 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that there is no local disk, right?  That may be something I have to ask the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor, which I've tried, but they don't quite seem to get the question. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message----- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Ralph Castain 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Thursday, November 03, 2011 5:22 PM 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for OpenMPI usage 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 3, 2011, at 2:55 PM, Blosch, Edwin L wrote: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I might be missing something here. Is there a side-effect or performance 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loss if you don't use the sm btl?  Why would it exist if there is a wholly 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; equivalent alternative?  What happens to traffic that is intended for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another process on the same node? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is a definite performance impact, and we wouldn't recommend doing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what Eugene suggested if you care about performance. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The correct solution here is get your sys admin to make /tmp local. Making 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp NFS mounted across multiple nodes is a major &quot;faux pas&quot; in the Linux 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; world - it should never be done, for the reasons stated by Jeff. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Original Message----- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Eugene Loh 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Thursday, November 03, 2011 1:23 PM 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp for OpenMPI usage 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Right.  Actually &quot;--mca btl ^sm&quot;.  (Was missing &quot;btl&quot;.) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 11/3/2011 11:19 AM, Blosch, Edwin L wrote: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I don't tell OpenMPI what BTLs to use. The default uses sm and puts a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; session file on /tmp, which is NFS-mounted and thus not a good choice. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Are you suggesting something like --mca ^sm? 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message----- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Eugene Loh 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: Thursday, November 03, 2011 12:54 PM 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp for OpenMPI usage 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've not been following closely.  Why must one use shared-memory 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; communications?  How about using other BTLs in a &quot;loopback&quot; fashion? 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17702/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17703.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17701.php">Jeff Squyres: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>In reply to:</strong> <a href="17697.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17703.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17703.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
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
