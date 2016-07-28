<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 13:48:51 2011" -->
<!-- isoreceived="20111104174851" -->
<!-- sent="Fri, 04 Nov 2011 10:51:51 -0700" -->
<!-- isosent="20111104175151" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage" -->
<!-- id="4EB42637.1000606_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 13:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17707.php">Rushton Martin: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17705.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17697.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17704.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should have been more careful.  When we first started using OpenMPI,
<br>
version 1.4.1, there was a bug that caused session directories to be
<br>
left behind.  This was fixed in subsequent releases (and via a patch
<br>
for 1.4.1).
<br>
<p>Our batch epilogue still removes everything in /tmp that belongs to the
<br>
owner of the batch job.  It is invoked after the user's application has
<br>
terminated, so the session directories are already gone by that time.
<br>
<p>Sorry for the confusion!
<br>
<p>On 11/4/11 3:43 AM, TERRY DONTJE wrote:
<br>
<span class="quotelev1">&gt; David, are you saying your jobs consistently leave behind session files
</span><br>
<span class="quotelev1">&gt; after the job exits? It really shouldn't even in the case when a job
</span><br>
<span class="quotelev1">&gt; aborts, I thought, mpirun took great pains to cleanup after itself. Can
</span><br>
<span class="quotelev1">&gt; you tell us what version of OMPI you are running with? I think I could
</span><br>
<span class="quotelev1">&gt; see kill -9 of mpirun and processes below would cause turds to be left
</span><br>
<span class="quotelev1">&gt; behind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/4/2011 2:37 AM, David Turner wrote:
</span><br>
<span class="quotelev2">&gt;&gt; % df /tmp
</span><br>
<span class="quotelev2">&gt;&gt; Filesystem 1K-blocks Used Available Use% Mounted on
</span><br>
<span class="quotelev2">&gt;&gt; - 12330084 822848 11507236 7% /
</span><br>
<span class="quotelev2">&gt;&gt; % df /
</span><br>
<span class="quotelev2">&gt;&gt; Filesystem 1K-blocks Used Available Use% Mounted on
</span><br>
<span class="quotelev2">&gt;&gt; - 12330084 822848 11507236 7% /
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That works out to 11GB. But...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The compute nodes have 24GB. Freshly booted, about 3.2GB is
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
<span class="quotelev2">&gt;&gt; number of factors; perhaps the developers can comment on that. I have
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
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for OpenMPI usage
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not a systems guy, but I'll pitch in anyway. On our cluster,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all the compute nodes are completely diskless. The root file system,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; including /tmp, resides in memory (ramdisk). OpenMPI puts these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; session directories therein. All our jobs run through a batch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system (torque). At the conclusion of each batch job, an epilogue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process runs that removes all files belonging to the owner of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current batch job from /tmp (and also looks for and kills orphan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes belonging to the user). This epilogue had to written
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for the help. A couple follow-up-questions, maybe this starts to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go outside OpenMPI:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What's wrong with using /dev/shm? I think you said earlier in this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that this was not a safe place.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If the NFS-mount point is moved from /tmp to /work, would a /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; magically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appear in the filesystem for a stateless node? How big would it be,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; given
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that there is no local disk, right? That may be something I have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ask the
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node /tmp
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I might be missing something here. Is there a side-effect or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; performance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loss if you don't use the sm btl? Why would it exist if there is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wholly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; equivalent alternative? What happens to traffic that is intended for
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
<span class="quotelev4">&gt;&gt;&gt;&gt; The correct solution here is get your sys admin to make /tmp local.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp NFS mounted across multiple nodes is a major &quot;faux pas&quot; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Right. Actually &quot;--mca btl ^sm&quot;. (Was missing &quot;btl&quot;.)
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've not been following closely. Why must one use shared-memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; communications? How about using other BTLs in a &quot;loopback&quot; fashion?
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
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17707.php">Rushton Martin: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17705.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17697.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17704.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
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
