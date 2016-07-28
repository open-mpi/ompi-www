<?
$subject_val = "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 11:51:12 2014" -->
<!-- isoreceived="20140220165112" -->
<!-- sent="Thu, 20 Feb 2014 08:50:09 -0800" -->
<!-- isosent="20140220165009" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory" -->
<!-- id="8AD90289-9F4E-4FAD-9EDD-781BE08E39E5_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53063088.8030601_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-20 11:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23626.php">Ralph Castain: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23624.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23624.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah - good to know! I did the mod anyway, so hopefully we'll do better in 1.7.5 regardless.
<br>
<p>Thanks for the update!
<br>
Ralph
<br>
<p>On Feb 20, 2014, at 8:42 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; some new information about this &quot;bug&quot;: we got a defective disk on this computer!  Then filesystem errors occurred...  The disk is now replaced since 2 days and everything seems to work well (the problem re-occurred since the last time I wrote about it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for bothering!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/05/2014 11:38 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid it isn't quite that simple, Jeff. We also have the race condition at startup - multiple procs on the same machine, from the same job, will be trying to create the session directory tree. At the moment, we see the fact that some other proc created it and simply create our own entry underneath as required. So I don't know how to tell the difference between &quot;some other proc from my job created it first&quot; vs &quot;this is a stale directory and should be deleted&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, I might be able to rig something up when the daemons start, and for singletons. Will give that a try
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 4, 2014, at 6:11 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 3, 2014, at 6:44 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If I may suggest to test the behavior of 1.7.x... what about this: Have a test case that creates a bunch of files (from 0 to 65536) in /tmp/openmpi-sessions-${USER}... before launching an executable without mpirun... &gt;:)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ick - it will actually only conflict if/when the pid's wrap, so it's a pretty rare issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph: what do you think about modifying this for 1.7.5?  I.e., if the pid dir already exists in the session directory, remove it.  This is always safe to do (assuming /tmp is a local filesystem) because the OS will never use the same PID for 2 concurrent processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23626.php">Ralph Castain: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23624.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23624.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
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
