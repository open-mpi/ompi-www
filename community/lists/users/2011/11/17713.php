<?
$subject_val = "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 19:40:34 2011" -->
<!-- isoreceived="20111104234034" -->
<!-- sent="Fri, 04 Nov 2011 16:43:35 -0700" -->
<!-- isosent="20111104234335" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage" -->
<!-- id="4EB478A7.3060104_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201111041759.pA4Hxi6p029303_at_milliways.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 19:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17714.php">David Singleton: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17712.php">Charles Shelor: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>In reply to:</strong> <a href="17707.php">Rushton Martin: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17690.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, my terminology is inexact.  I believe you are correct; our
<br>
diskless nodes use tmpfs, not ramdisk.  Thanks for the clarification!
<br>
<p>On 11/4/11 11:00 AM, Rushton Martin wrote:
<br>
<span class="quotelev1">&gt; There appears to be some confusion about ramdisks and tmpfs.  A ramdisk
</span><br>
<span class="quotelev1">&gt; sets aside a fixed amount of memory for its exclusive use, so that a
</span><br>
<span class="quotelev1">&gt; file being written to ramdisk goes first to the cache, then to ramdisk,
</span><br>
<span class="quotelev1">&gt; and may exist in both for some time.  tmpfs however opens up the cache
</span><br>
<span class="quotelev1">&gt; to programs so that a file being written goes to cache and stays there.
</span><br>
<span class="quotelev1">&gt; The &quot;size&quot; of a tmpfs pseudo-disk is the maximum it can grow to (which
</span><br>
<span class="quotelev1">&gt; according to the mount man page defaults to 50% of memory).  Hence only
</span><br>
<span class="quotelev1">&gt; enough memory to hold the data is actually used which ties up with David
</span><br>
<span class="quotelev1">&gt; Turner's figures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can easily tell which method is in use from df.  A traditional
</span><br>
<span class="quotelev1">&gt; ramdisk will appears as /dev/ramN (N = 0, 1 ...) whereas a tmpfs device
</span><br>
<span class="quotelev1">&gt; will be a simple name, often tmpfs.  I would guess that the single &quot;-&quot;
</span><br>
<span class="quotelev1">&gt; in David's df command is precisely this.  On our diskless nodes root
</span><br>
<span class="quotelev1">&gt; shows as device compute_x86_64, whilst /tmp, /dev/shm and /var/tmp show
</span><br>
<span class="quotelev1">&gt; as &quot;none&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Martin Rushton
</span><br>
<span class="quotelev1">&gt; HPC System Manager, Weapons Technologies
</span><br>
<span class="quotelev1">&gt; Tel: 01959 514777, Mobile: 07939 219057
</span><br>
<span class="quotelev1">&gt; email: jmrushton_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.QinetiQ.com
</span><br>
<span class="quotelev1">&gt; QinetiQ - Delivering customer-focused solutions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please consider the environment before printing this email.
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Blosch, Edwin L
</span><br>
<span class="quotelev1">&gt; Sent: 04 November 2011 16:19
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node
</span><br>
<span class="quotelev1">&gt; /tmpfor OpenMPI usage
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, I wouldn't have guessed that the space for /tmp isn't actually in
</span><br>
<span class="quotelev1">&gt; RAM until it's needed.  That's the key piece of knowledge I was missing;
</span><br>
<span class="quotelev1">&gt; I really appreciate it.  So you can allow /tmp to be reasonably sized,
</span><br>
<span class="quotelev1">&gt; but if you aren't actually using it, then it doesn't take up 11 GB of
</span><br>
<span class="quotelev1">&gt; RAM.  And you prevent users from crashing the node by setting mem limit
</span><br>
<span class="quotelev1">&gt; to 4 GB less than the available memory. Got it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree with your earlier comment:  these are fairly common systems now.
</span><br>
<span class="quotelev1">&gt; We have program- and owner-specific disks where I work, and after the
</span><br>
<span class="quotelev1">&gt; program ends, the disks are archived or destroyed.  Before the stateless
</span><br>
<span class="quotelev1">&gt; configuration option, the entire computer, nodes and switches as well as
</span><br>
<span class="quotelev1">&gt; disks, were archived or destroyed after each program.  Not too
</span><br>
<span class="quotelev1">&gt; cost-effective.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a reasonable final summary? :  OpenMPI uses temporary files in
</span><br>
<span class="quotelev1">&gt; such a way that it is performance-critical that these so-called session
</span><br>
<span class="quotelev1">&gt; files, used for shared-memory communications, must be &quot;local&quot;.  For
</span><br>
<span class="quotelev1">&gt; state-less clusters, this means the node image must include a /tmp or
</span><br>
<span class="quotelev1">&gt; /wrk partition, intelligently sized so as not to enable an application
</span><br>
<span class="quotelev1">&gt; to exhaust the physical memory of the node, and care must be taken not
</span><br>
<span class="quotelev1">&gt; to mask this in-memory /tmp with an NFS mounted filesystem.  It is not
</span><br>
<span class="quotelev1">&gt; uncommon for cluster enablers to exclude /tmp from a typical base Linux
</span><br>
<span class="quotelev1">&gt; filesystem image or mount it over NFS, as a means of providing users
</span><br>
<span class="quotelev1">&gt; with a larger-sized /tmp that is not limited to a fraction of the node's
</span><br>
<span class="quotelev1">&gt; physical memory, or to avoid garbage accumulation in /tmp taking up the
</span><br>
<span class="quotelev1">&gt; physical RAM.  But not having /tmp or mounting it over NFS is not a
</span><br>
<span class="quotelev1">&gt; viable stateless-node configuration option if you intend to run OpenMPI.
</span><br>
<span class="quotelev1">&gt; Instead you could have a /bigtmp which is NFS-mounted and a /tmp whi!
</span><br>
<span class="quotelev1">&gt;   ch is local, for example. Starting in OpenMPI 1.7.x, shared-memory
</span><br>
<span class="quotelev1">&gt; communication will no longer go through memory-mapped files, and
</span><br>
<span class="quotelev1">&gt; vendors/users will no longer need to be vigilant concerning this OpenMPI
</span><br>
<span class="quotelev1">&gt; performance requirement on stateless node configuration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that a reasonable summary?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, would it be helpful to include this as an FAQ entry under General
</span><br>
<span class="quotelev1">&gt; category?  Or the &quot;shared memory&quot; category?  Or the &quot;troubleshooting&quot;
</span><br>
<span class="quotelev1">&gt; category?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of David Turner
</span><br>
<span class="quotelev1">&gt; Sent: Friday, November 04, 2011 1:38 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node
</span><br>
<span class="quotelev1">&gt; /tmp for OpenMPI usage
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % df /tmp
</span><br>
<span class="quotelev1">&gt; Filesystem           1K-blocks      Used Available Use% Mounted on
</span><br>
<span class="quotelev1">&gt; -                     12330084    822848  11507236   7% /
</span><br>
<span class="quotelev1">&gt; % df /
</span><br>
<span class="quotelev1">&gt; Filesystem           1K-blocks      Used Available Use% Mounted on
</span><br>
<span class="quotelev1">&gt; -                     12330084    822848  11507236   7% /
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That works out to 11GB.  But...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The compute nodes have 24GB.  Freshly booted, about 3.2GB is consumed by
</span><br>
<span class="quotelev1">&gt; the kernel, various services, and the root file system.
</span><br>
<span class="quotelev1">&gt; At this time, usage of /tmp is essentially nil.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We set user memory limits to 20GB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would imagine that the size of the session directories depends on a
</span><br>
<span class="quotelev1">&gt; number of factors; perhaps the developers can comment on that.  I have
</span><br>
<span class="quotelev1">&gt; only seen total sizes in the 10s of MBs on our 8-node, 24GB nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As long as they're removed after each job, they don't really compete
</span><br>
<span class="quotelev1">&gt; with the application for available memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/3/11 8:40 PM, Ed Blosch wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks very much, exactly what I wanted to hear. How big is /tmp?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of David Turner
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, November 03, 2011 6:36 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node
</span><br>
<span class="quotelev2">&gt;&gt; /tmp for OpenMPI usage
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not a systems guy, but I'll pitch in anyway.  On our cluster, all
</span><br>
<span class="quotelev2">&gt;&gt; the compute nodes are completely diskless.  The root file system,
</span><br>
<span class="quotelev2">&gt;&gt; including /tmp, resides in memory (ramdisk).  OpenMPI puts these
</span><br>
<span class="quotelev2">&gt;&gt; session directories therein.  All our jobs run through a batch system
</span><br>
<span class="quotelev2">&gt;&gt; (torque).  At the conclusion of each batch job, an epilogue process
</span><br>
<span class="quotelev2">&gt;&gt; runs that removes all files belonging to the owner of the current
</span><br>
<span class="quotelev2">&gt;&gt; batch job from /tmp (and also looks for and kills orphan processes
</span><br>
<span class="quotelev2">&gt;&gt; belonging to the user).  This epilogue had to written by our systems
</span><br>
<span class="quotelev2">&gt;&gt; staff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe this is a fairly common configuration for diskless clusters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/3/11 4:09 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the help.  A couple follow-up-questions, maybe this starts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; go outside OpenMPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What's wrong with using /dev/shm?  I think you said earlier in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thread
</span><br>
<span class="quotelev2">&gt;&gt; that this was not a safe place.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the NFS-mount point is moved from /tmp to /work, would a /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; magically
</span><br>
<span class="quotelev2">&gt;&gt; appear in the filesystem for a stateless node?  How big would it be,
</span><br>
<span class="quotelev2">&gt;&gt; given that there is no local disk, right?  That may be something I
</span><br>
<span class="quotelev2">&gt;&gt; have to ask the vendor, which I've tried, but they don't quite seem to
</span><br>
<span class="quotelev1">&gt; get the question.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, November 03, 2011 5:22 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp
</span><br>
<span class="quotelev2">&gt;&gt; for OpenMPI usage
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 3, 2011, at 2:55 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I might be missing something here. Is there a side-effect or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performance
</span><br>
<span class="quotelev2">&gt;&gt; loss if you don't use the sm btl?  Why would it exist if there is a
</span><br>
<span class="quotelev2">&gt;&gt; wholly equivalent alternative?  What happens to traffic that is
</span><br>
<span class="quotelev2">&gt;&gt; intended for another process on the same node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a definite performance impact, and we wouldn't recommend
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing
</span><br>
<span class="quotelev2">&gt;&gt; what Eugene suggested if you care about performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The correct solution here is get your sys admin to make /tmp local.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making
</span><br>
<span class="quotelev2">&gt;&gt; /tmp NFS mounted across multiple nodes is a major &quot;faux pas&quot; in the
</span><br>
<span class="quotelev2">&gt;&gt; Linux world - it should never be done, for the reasons stated by Jeff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Eugene Loh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Thursday, November 03, 2011 1:23 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node
</span><br>
<span class="quotelev2">&gt;&gt; /tmp for OpenMPI usage
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Right.  Actually &quot;--mca btl ^sm&quot;.  (Was missing &quot;btl&quot;.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 11/3/2011 11:19 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't tell OpenMPI what BTLs to use. The default uses sm and puts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev2">&gt;&gt; session file on /tmp, which is NFS-mounted and thus not a good choice.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are you suggesting something like --mca ^sm?
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
<span class="quotelev2">&gt;&gt; Behalf Of Eugene Loh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Thursday, November 03, 2011 12:54 PM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node
</span><br>
<span class="quotelev2">&gt;&gt; /tmp for OpenMPI usage
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've not been following closely.  Why must one use shared-memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communications?  How about using other BTLs in a &quot;loopback&quot;
</span><br>
<span class="quotelev1">&gt; fashion?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; This email and any attachments to it may be confidential and are
</span><br>
<span class="quotelev1">&gt; intended solely for the use of the individual to whom it is
</span><br>
<span class="quotelev1">&gt; addressed. If you are not the intended recipient of this email,
</span><br>
<span class="quotelev1">&gt; you must neither take any action based upon its contents, nor
</span><br>
<span class="quotelev1">&gt; copy or show it to anyone. Please contact the sender if you
</span><br>
<span class="quotelev1">&gt; believe you have received this email in error. QinetiQ may
</span><br>
<span class="quotelev1">&gt; monitor email traffic data and also the content of email for
</span><br>
<span class="quotelev1">&gt; the purposes of security. QinetiQ Limited (Registered in England
</span><br>
<span class="quotelev1">&gt; &amp;  Wales: Company Number: 3796233) Registered office: Cody Technology
</span><br>
<span class="quotelev1">&gt; Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
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
<li><strong>Next message:</strong> <a href="17714.php">David Singleton: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17712.php">Charles Shelor: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>In reply to:</strong> <a href="17707.php">Rushton Martin: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17690.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
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
