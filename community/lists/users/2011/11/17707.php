<?
$subject_val = "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 13:59:49 2011" -->
<!-- isoreceived="20111104175949" -->
<!-- sent="Fri, 4 Nov 2011 18:00:14 -0000" -->
<!-- isosent="20111104180014" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage" -->
<!-- id="201111041759.pA4Hxi6p029303_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB27C5481AF1_at_HDXMSPB.us.lmco.com" -->
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
<strong>From:</strong> Rushton Martin (<em>JMRUSHTON_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 14:00:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17708.php">Charles Shelor: "[OMPI users] MPI on MacOS Lion help"</a>
<li><strong>Previous message:</strong> <a href="17706.php">David Turner: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17704.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17713.php">David Turner: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17713.php">David Turner: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There appears to be some confusion about ramdisks and tmpfs.  A ramdisk
<br>
sets aside a fixed amount of memory for its exclusive use, so that a
<br>
file being written to ramdisk goes first to the cache, then to ramdisk,
<br>
and may exist in both for some time.  tmpfs however opens up the cache
<br>
to programs so that a file being written goes to cache and stays there.
<br>
The &quot;size&quot; of a tmpfs pseudo-disk is the maximum it can grow to (which
<br>
according to the mount man page defaults to 50% of memory).  Hence only
<br>
enough memory to hold the data is actually used which ties up with David
<br>
Turner's figures.
<br>
<p>You can easily tell which method is in use from df.  A traditional
<br>
ramdisk will appears as /dev/ramN (N = 0, 1 ...) whereas a tmpfs device
<br>
will be a simple name, often tmpfs.  I would guess that the single &quot;-&quot;
<br>
in David's df command is precisely this.  On our diskless nodes root
<br>
shows as device compute_x86_64, whilst /tmp, /dev/shm and /var/tmp show
<br>
as &quot;none&quot;.
<br>
<p>HTH,
<br>
<p>Martin Rushton
<br>
HPC System Manager, Weapons Technologies
<br>
Tel: 01959 514777, Mobile: 07939 219057
<br>
email: jmrushton_at_[hidden]
<br>
www.QinetiQ.com
<br>
QinetiQ - Delivering customer-focused solutions
<br>
<p>Please consider the environment before printing this email.
<br>
-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Blosch, Edwin L
<br>
Sent: 04 November 2011 16:19
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node
<br>
/tmpfor OpenMPI usage
<br>
<p>OK, I wouldn't have guessed that the space for /tmp isn't actually in
<br>
RAM until it's needed.  That's the key piece of knowledge I was missing;
<br>
I really appreciate it.  So you can allow /tmp to be reasonably sized,
<br>
but if you aren't actually using it, then it doesn't take up 11 GB of
<br>
RAM.  And you prevent users from crashing the node by setting mem limit
<br>
to 4 GB less than the available memory. Got it.
<br>
<p>I agree with your earlier comment:  these are fairly common systems now.
<br>
We have program- and owner-specific disks where I work, and after the
<br>
program ends, the disks are archived or destroyed.  Before the stateless
<br>
configuration option, the entire computer, nodes and switches as well as
<br>
disks, were archived or destroyed after each program.  Not too
<br>
cost-effective.
<br>
<p>Is this a reasonable final summary? :  OpenMPI uses temporary files in
<br>
such a way that it is performance-critical that these so-called session
<br>
files, used for shared-memory communications, must be &quot;local&quot;.  For
<br>
state-less clusters, this means the node image must include a /tmp or
<br>
/wrk partition, intelligently sized so as not to enable an application
<br>
to exhaust the physical memory of the node, and care must be taken not
<br>
to mask this in-memory /tmp with an NFS mounted filesystem.  It is not
<br>
uncommon for cluster enablers to exclude /tmp from a typical base Linux
<br>
filesystem image or mount it over NFS, as a means of providing users
<br>
with a larger-sized /tmp that is not limited to a fraction of the node's
<br>
physical memory, or to avoid garbage accumulation in /tmp taking up the
<br>
physical RAM.  But not having /tmp or mounting it over NFS is not a
<br>
viable stateless-node configuration option if you intend to run OpenMPI.
<br>
Instead you could have a /bigtmp which is NFS-mounted and a /tmp whi!
<br>
&nbsp;ch is local, for example. Starting in OpenMPI 1.7.x, shared-memory
<br>
communication will no longer go through memory-mapped files, and
<br>
vendors/users will no longer need to be vigilant concerning this OpenMPI
<br>
performance requirement on stateless node configuration. 
<br>
<p><p>Is that a reasonable summary?
<br>
<p>If so, would it be helpful to include this as an FAQ entry under General
<br>
category?  Or the &quot;shared memory&quot; category?  Or the &quot;troubleshooting&quot;
<br>
category?
<br>
<p><p>Thanks
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of David Turner
<br>
Sent: Friday, November 04, 2011 1:38 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node
<br>
/tmp for OpenMPI usage
<br>
<p>% df /tmp
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
<p>The compute nodes have 24GB.  Freshly booted, about 3.2GB is consumed by
<br>
the kernel, various services, and the root file system.
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
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; On Behalf Of David Turner
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 03, 2011 6:36 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node 
</span><br>
<span class="quotelev1">&gt; /tmp for OpenMPI usage
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not a systems guy, but I'll pitch in anyway.  On our cluster, all 
</span><br>
<span class="quotelev1">&gt; the compute nodes are completely diskless.  The root file system, 
</span><br>
<span class="quotelev1">&gt; including /tmp, resides in memory (ramdisk).  OpenMPI puts these 
</span><br>
<span class="quotelev1">&gt; session directories therein.  All our jobs run through a batch system 
</span><br>
<span class="quotelev1">&gt; (torque).  At the conclusion of each batch job, an epilogue process 
</span><br>
<span class="quotelev1">&gt; runs that removes all files belonging to the owner of the current 
</span><br>
<span class="quotelev1">&gt; batch job from /tmp (and also looks for and kills orphan processes 
</span><br>
<span class="quotelev1">&gt; belonging to the user).  This epilogue had to written by our systems 
</span><br>
<span class="quotelev1">&gt; staff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe this is a fairly common configuration for diskless clusters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/3/11 4:09 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the help.  A couple follow-up-questions, maybe this starts
</span><br>
<p><span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev1">&gt; go outside OpenMPI:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What's wrong with using /dev/shm?  I think you said earlier in this 
</span><br>
<span class="quotelev2">&gt;&gt; thread
</span><br>
<span class="quotelev1">&gt; that this was not a safe place.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the NFS-mount point is moved from /tmp to /work, would a /tmp 
</span><br>
<span class="quotelev2">&gt;&gt; magically
</span><br>
<span class="quotelev1">&gt; appear in the filesystem for a stateless node?  How big would it be, 
</span><br>
<span class="quotelev1">&gt; given that there is no local disk, right?  That may be something I 
</span><br>
<span class="quotelev1">&gt; have to ask the vendor, which I've tried, but they don't quite seem to
</span><br>
get the question.
<br>
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
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, November 03, 2011 5:22 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less node
</span><br>
<p><span class="quotelev2">&gt;&gt; /tmp
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
<span class="quotelev3">&gt;&gt;&gt; I might be missing something here. Is there a side-effect or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance
</span><br>
<span class="quotelev1">&gt; loss if you don't use the sm btl?  Why would it exist if there is a 
</span><br>
<span class="quotelev1">&gt; wholly equivalent alternative?  What happens to traffic that is 
</span><br>
<span class="quotelev1">&gt; intended for another process on the same node?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a definite performance impact, and we wouldn't recommend 
</span><br>
<span class="quotelev2">&gt;&gt; doing
</span><br>
<span class="quotelev1">&gt; what Eugene suggested if you care about performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The correct solution here is get your sys admin to make /tmp local. 
</span><br>
<span class="quotelev2">&gt;&gt; Making
</span><br>
<span class="quotelev1">&gt; /tmp NFS mounted across multiple nodes is a major &quot;faux pas&quot; in the 
</span><br>
<span class="quotelev1">&gt; Linux world - it should never be done, for the reasons stated by Jeff.
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
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<p><span class="quotelev3">&gt;&gt;&gt; On
</span><br>
<span class="quotelev1">&gt; Behalf Of Eugene Loh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, November 03, 2011 1:23 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node
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
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't tell OpenMPI what BTLs to use. The default uses sm and puts
</span><br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; a
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
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Eugene Loh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Thursday, November 03, 2011 12:54 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: How to set up state-less 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node
</span><br>
<span class="quotelev1">&gt; /tmp for OpenMPI usage
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've not been following closely.  Why must one use shared-memory 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communications?  How about using other BTLs in a &quot;loopback&quot;
</span><br>
fashion?
<br>
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
This email and any attachments to it may be confidential and are
intended solely for the use of the individual to whom it is 
addressed. If you are not the intended recipient of this email,
you must neither take any action based upon its contents, nor 
copy or show it to anyone. Please contact the sender if you 
believe you have received this email in error. QinetiQ may 
monitor email traffic data and also the content of email for 
the purposes of security. QinetiQ Limited (Registered in England
&amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17708.php">Charles Shelor: "[OMPI users] MPI on MacOS Lion help"</a>
<li><strong>Previous message:</strong> <a href="17706.php">David Turner: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17704.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17713.php">David Turner: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<li><strong>Reply:</strong> <a href="17713.php">David Turner: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
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
