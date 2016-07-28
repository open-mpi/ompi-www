<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 02:37:28 2011" -->
<!-- isoreceived="20111104063728" -->
<!-- sent="Thu, 03 Nov 2011 23:37:50 -0700" -->
<!-- isosent="20111104063750" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage" -->
<!-- id="4EB3883E.5050706_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="002d01cc9aa3$748f31f0$5dad95d0$_at_net" -->
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
<strong>Date:</strong> 2011-11-04 02:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17697.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17695.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17695.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17697.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17697.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17704.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
% df /tmp
<br>
Filesystem           1K-blocks      Used Available Use% Mounted on
<br>
-                     12330084    822848  11507236   7% /
<br>
% df /
<br>
Filesystem           1K-blocks      Used Available Use% Mounted on
<br>
-                     12330084    822848  11507236   7% /
<br>
<p>That works out to 11GB.  But...
<br>
<p>The compute nodes have 24GB.  Freshly booted, about 3.2GB is
<br>
consumed by the kernel, various services, and the root file system.
<br>
At this time, usage of /tmp is essentially nil.
<br>
<p>We set user memory limits to 20GB.
<br>
<p>I would imagine that the size of the session directories depends on a
<br>
number of factors; perhaps the developers can comment on that.  I have
<br>
only seen total sizes in the 10s of MBs on our 8-node, 24GB nodes.
<br>
<p>As long as they're removed after each job, they don't really compete
<br>
with the application for available memory.
<br>
<p>On 11/3/11 8:40 PM, Ed Blosch wrote:
<br>
<span class="quotelev1">&gt; Thanks very much, exactly what I wanted to hear. How big is /tmp?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of David Turner
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 03, 2011 6:36 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp
</span><br>
<span class="quotelev1">&gt; for OpenMPI usage
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not a systems guy, but I'll pitch in anyway.  On our cluster,
</span><br>
<span class="quotelev1">&gt; all the compute nodes are completely diskless.  The root file system,
</span><br>
<span class="quotelev1">&gt; including /tmp, resides in memory (ramdisk).  OpenMPI puts these
</span><br>
<span class="quotelev1">&gt; session directories therein.  All our jobs run through a batch
</span><br>
<span class="quotelev1">&gt; system (torque).  At the conclusion of each batch job, an epilogue
</span><br>
<span class="quotelev1">&gt; process runs that removes all files belonging to the owner of the
</span><br>
<span class="quotelev1">&gt; current batch job from /tmp (and also looks for and kills orphan
</span><br>
<span class="quotelev1">&gt; processes belonging to the user).  This epilogue had to written
</span><br>
<span class="quotelev1">&gt; by our systems staff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe this is a fairly common configuration for diskless
</span><br>
<span class="quotelev1">&gt; clusters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/3/11 4:09 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the help.  A couple follow-up-questions, maybe this starts to
</span><br>
<span class="quotelev1">&gt; go outside OpenMPI:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What's wrong with using /dev/shm?  I think you said earlier in this thread
</span><br>
<span class="quotelev1">&gt; that this was not a safe place.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the NFS-mount point is moved from /tmp to /work, would a /tmp magically
</span><br>
<span class="quotelev1">&gt; appear in the filesystem for a stateless node?  How big would it be, given
</span><br>
<span class="quotelev1">&gt; that there is no local disk, right?  That may be something I have to ask the
</span><br>
<span class="quotelev1">&gt; vendor, which I've tried, but they don't quite seem to get the question.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, November 03, 2011 5:22 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp
</span><br>
<span class="quotelev1">&gt; for OpenMPI usage
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 3, 2011, at 2:55 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I might be missing something here. Is there a side-effect or performance
</span><br>
<span class="quotelev1">&gt; loss if you don't use the sm btl?  Why would it exist if there is a wholly
</span><br>
<span class="quotelev1">&gt; equivalent alternative?  What happens to traffic that is intended for
</span><br>
<span class="quotelev1">&gt; another process on the same node?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a definite performance impact, and we wouldn't recommend doing
</span><br>
<span class="quotelev1">&gt; what Eugene suggested if you care about performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The correct solution here is get your sys admin to make /tmp local. Making
</span><br>
<span class="quotelev1">&gt; /tmp NFS mounted across multiple nodes is a major &quot;faux pas&quot; in the Linux
</span><br>
<span class="quotelev1">&gt; world - it should never be done, for the reasons stated by Jeff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Eugene Loh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, November 03, 2011 1:23 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node
</span><br>
<span class="quotelev1">&gt; /tmp for OpenMPI usage
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right.  Actually &quot;--mca btl ^sm&quot;.  (Was missing &quot;btl&quot;.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/3/2011 11:19 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't tell OpenMPI what BTLs to use. The default uses sm and puts a
</span><br>
<span class="quotelev1">&gt; session file on /tmp, which is NFS-mounted and thus not a good choice.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you suggesting something like --mca ^sm?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Eugene Loh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Thursday, November 03, 2011 12:54 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node
</span><br>
<span class="quotelev1">&gt; /tmp for OpenMPI usage
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've not been following closely.  Why must one use shared-memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communications?  How about using other BTLs in a &quot;loopback&quot; fashion?
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="17697.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17695.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17695.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17697.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17697.php">TERRY DONTJE: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17704.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
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
