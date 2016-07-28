<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 11:56:24 2011" -->
<!-- isoreceived="20111108165624" -->
<!-- sent="Tue, 8 Nov 2011 11:56:19 -0500" -->
<!-- isosent="20111108165619" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage" -->
<!-- id="E0355DF3-2281-4DD4-BEB3-A30B77AD03FE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EB64E2DC-9329-4144-8CB9-81261DB01062_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 11:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17724.php">Jeffrey A Cummings: "[OMPI users]  Socket ports"</a>
<li><strong>Previous message:</strong> <a href="17722.php">Ralph Castain: "Re: [OMPI users] OSX:  dyld: Symbol not found: _orte_daemon"</a>
<li><strong>In reply to:</strong> <a href="17721.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17724.php">Jeffrey A Cummings: "[OMPI users]  Socket ports"</a>
<li><strong>Reply:</strong> <a href="17724.php">Jeffrey A Cummings: "[OMPI users]  Socket ports"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talked about this issue on the weekly OMPI engineering teleconf today.
<br>
<p>It seems like it would be a good idea to bring over the new shared memory revamp to the v1.5 series before it transitions to v1.6 so that it can avoid network-mounted /tmp filesystem issues.  LANL will be evaluating this; the gut feeling was that it would not be a lot of work to bring this over to the v1.5 branch.
<br>
<p>I've created <a href="https://svn.open-mpi.org/trac/ompi/ticket/2908">https://svn.open-mpi.org/trac/ompi/ticket/2908</a> to track the issue.
<br>
<p><p><p>On Nov 8, 2011, at 8:21 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 7, 2011, at 12:12 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the valuable input. I'll change to a wait-and-watch approach.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The FAQ on tuning sm says &quot;If the session directory is located on a network filesystem, the shared memory BTL latency will be extremely high.&quot;  And the title is 'Why am I seeing incredibly poor performance...'.  So I made the leap that this configuration must be avoided at all costs...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (sorry for jumping in late; it's the week before SC, and lots of deadlines are approaching!)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is definitely true: if OMPI's mmap files are located on a network filesystem (such as if /tmp is NFS-mounted), your latencies will be higher.  I don't claim to know all the exact reasons why, but I have personally seen enough empirical evidence to believe it.  Perhaps newer versions of Linux/NFS/whatever have made the issue better.  But I'm quite sure that it was happening; that's why we put in that warning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a few points to add to this discussion, in no particular order:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Keep in mind the difference between the session directory and the shared memory backing files: the session directory contains some meta data that OMPI processes need.  In general, most of that data is not performance-critical, such that if it's on a networked filesystem, general MPI performance will not be affected.  In 1.4.x and 1.5.x, the shared memory mmap files are also located in the session directory, and as described above, we have definitely seen a negative MPI latency performance impact when this file is on a networked file system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. In the upcoming OMPI v1.7, we revamped the shared memory backing system such that mmap does not have to be used, and therefore will not care if /tmp is on a networked filesystem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. I don't know whether /tmp on an networked filesystem is 100% &quot;proper&quot; or not.  I know that some people do it, but there are uniqueness requirements that can definitely be violated in various other tools in this case.  OMPI may not be the only software package that can run into problems here, even if the problems are rare and difficult to track down (e.g., because two processes with the same PID on different machines tried to use the same filename in /tmp, or attempts to use file locking, etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17724.php">Jeffrey A Cummings: "[OMPI users]  Socket ports"</a>
<li><strong>Previous message:</strong> <a href="17722.php">Ralph Castain: "Re: [OMPI users] OSX:  dyld: Symbol not found: _orte_daemon"</a>
<li><strong>In reply to:</strong> <a href="17721.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17724.php">Jeffrey A Cummings: "[OMPI users]  Socket ports"</a>
<li><strong>Reply:</strong> <a href="17724.php">Jeffrey A Cummings: "[OMPI users]  Socket ports"</a>
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
