<?
$subject_val = "Re: [OMPI users] shm unlinking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 09:07:48 2011" -->
<!-- isoreceived="20110414130748" -->
<!-- sent="Thu, 14 Apr 2011 07:07:40 -0600" -->
<!-- isosent="20110414130740" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shm unlinking" -->
<!-- id="1C2DD972-5A4D-4ED1-9ADF-B3D9095E9ADF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="130277396679516834_at_towy" -->
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
<strong>Subject:</strong> Re: [OMPI users] shm unlinking<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 09:07:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16243.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16241.php">Jeff Squyres: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16240.php">Rushton Martin: "[OMPI users] shm unlinking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16244.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16244.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Difficult to follow your thread here, but I think you're wondering about post-job cleanup?
<br>
<p>Torque runs an epilogue script on all nodes included in the allocation. It is advisable to always have the epilogue script clean out the tmp directories, assuming single-user use of allocated nodes. If multiple users share nodes, then you can't do that.
<br>
<p>OMPI uses the MOMs to start its daemons, and all MPI procs are children of those daemons. So Torque knows what nodes were used, even if it doesn't know about the specific MPI procs. Not that this matters - like I said, the epilogue gets run on all nodes, used or not.
<br>
<p>I'm pretty sure the unlink change is in the 1.4 series - not sure precisely when it was made.
<br>
<p><p>On Apr 14, 2011, at 3:39 AM, Rushton Martin wrote:
<br>
<p><span class="quotelev1">&gt; I notice from the developer archives that there was some discussion
</span><br>
<span class="quotelev1">&gt; about when psm_shm... files ought to be unlinked from /dev/shm:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] System V Shared Memory for Open MPI: Request
</span><br>
<span class="quotelev1">&gt; forCommunity Input and Testing
</span><br>
<span class="quotelev1">&gt; From: Barrett, Brian W (bwbarre_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2010-06-11 12:53:50
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 11, 2010, at 5:10 AM, Jeff Squyres wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 11, 2010, at 5:43 AM, Paul H. Hargrove wrote: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Interesting. Do you think this behavior of the linux kernel would 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; change if the file was unlink()ed after attach ? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As Jeff pointed out, the file IS unlinked by Open MPI, presumably to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ensure it is not left behind in case of abnormal termination. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have to admit that I lied. :-( 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sam and I were talking on the phone yesterday about the shm_open()
</span><br>
<span class="quotelev1">&gt; stuff and to my chagrin, I discovered that the mmap'ed files are *not*
</span><br>
<span class="quotelev1">&gt; unlinked in OMPI until MPI_FINALIZE. I'm not actually sure why; I could
</span><br>
<span class="quotelev1">&gt; have sworn that we unlinked them after everyone mmap'ed them... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The idea was one large memory segment for all processes and it wasn't
</span><br>
<span class="quotelev1">&gt; unlinked after complete attach so that we could have spawned procs also
</span><br>
<span class="quotelev1">&gt; use shmem (which never worked, of course). So I think we could unlink
</span><br>
<span class="quotelev1">&gt; during init at this point.. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian 
</span><br>
<span class="quotelev1">&gt; -----------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following reply is also relevant:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] System V Shared Memory for Open MPI: Request
</span><br>
<span class="quotelev1">&gt; forCommunity Input and Testing
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres (jsquyres_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2010-06-11 13:06:37 
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; I could have sworn that we decided that long ago and added the unlink. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Probably we *did* reach that conclusion long ago, but never actually got
</span><br>
<span class="quotelev1">&gt; around to adding the unlink. Sam and I are still in that code area now;
</span><br>
<span class="quotelev1">&gt; we might as well add the unlink while we're there. 
</span><br>
<span class="quotelev1">&gt; -----------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has this change been implemented, and if so in which version?  We are
</span><br>
<span class="quotelev1">&gt; seeing this behaviour with occasional orphaned files left behind, not a
</span><br>
<span class="quotelev1">&gt; good situation on a diskless node.  I noted the comment by Paul
</span><br>
<span class="quotelev1">&gt; Hargrove:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------
</span><br>
<span class="quotelev1">&gt; While it is not &quot;fair&quot; for Opem MPI to be lazy about its temporary 
</span><br>
<span class="quotelev1">&gt; resources in the case of normal termination, there will probably always 
</span><br>
<span class="quotelev1">&gt; be small windows of vulnerability to leakage if one dies in just the 
</span><br>
<span class="quotelev1">&gt; wrong case (eg a failed assertion between the shmat() and the 
</span><br>
<span class="quotelev1">&gt; smctl(IPC_RMID)). On the bright side, it is worth noting that a 
</span><br>
<span class="quotelev1">&gt; properly maintained batch environment should include an epilogue that 
</span><br>
<span class="quotelev1">&gt; scrubs /tmp, /var/tmp, /usr/tmp, and any other shared writable 
</span><br>
<span class="quotelev1">&gt; location. Similarly, to prevent a very simple/obvious DOS it should be 
</span><br>
<span class="quotelev1">&gt; destroying any SysV IPC objects left over by the job. 
</span><br>
<span class="quotelev1">&gt; -----------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have not yet been able to get evidence of Torque actually running the
</span><br>
<span class="quotelev1">&gt; epilogue scripts on sister nodes, something I am perusing in the
</span><br>
<span class="quotelev1">&gt; torqueusers mailing list.  Briefly, OMPI seems to start the processes on
</span><br>
<span class="quotelev1">&gt; remote nodes itself without running Torque's MOM, but it is the MOM that
</span><br>
<span class="quotelev1">&gt; runs pro- and epilogues.  Obviously this is not directly an OMPI
</span><br>
<span class="quotelev1">&gt; problem, until as here there is an assumption made.
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
<span class="quotelev1">&gt; &amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16243.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16241.php">Jeff Squyres: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16240.php">Rushton Martin: "[OMPI users] shm unlinking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16244.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16244.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
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
