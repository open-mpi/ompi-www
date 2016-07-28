<?
$subject_val = "[OMPI users] shm unlinking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 05:39:32 2011" -->
<!-- isoreceived="20110414093932" -->
<!-- sent="Thu, 14 Apr 2011 10:39:01 +0100" -->
<!-- isosent="20110414093901" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="[OMPI users] shm unlinking" -->
<!-- id="130277396679516834_at_towy" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="13027707807958391_at_towy" -->
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
<strong>Subject:</strong> [OMPI users] shm unlinking<br>
<strong>From:</strong> Rushton Martin (<em>JMRUSHTON_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 05:39:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16241.php">Jeff Squyres: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16239.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16239.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16242.php">Ralph Castain: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16242.php">Ralph Castain: "Re: [OMPI users] shm unlinking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice from the developer archives that there was some discussion
<br>
about when psm_shm... files ought to be unlinked from /dev/shm:
<br>
<p>---------------------------------
<br>
Subject: Re: [OMPI devel] System V Shared Memory for Open MPI: Request
<br>
forCommunity Input and Testing
<br>
From: Barrett, Brian W (bwbarre_at_[hidden])
<br>
Date: 2010-06-11 12:53:50
<br>
&lt;snip&gt;
<br>
On Jun 11, 2010, at 5:10 AM, Jeff Squyres wrote: 
<br>
<p><p><span class="quotelev1">&gt; On Jun 11, 2010, at 5:43 AM, Paul H. Hargrove wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting. Do you think this behavior of the linux kernel would 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change if the file was unlink()ed after attach ? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As Jeff pointed out, the file IS unlinked by Open MPI, presumably to 
</span><br>
<span class="quotelev2">&gt;&gt; ensure it is not left behind in case of abnormal termination. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have to admit that I lied. :-( 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sam and I were talking on the phone yesterday about the shm_open()
</span><br>
stuff and to my chagrin, I discovered that the mmap'ed files are *not*
<br>
unlinked in OMPI until MPI_FINALIZE. I'm not actually sure why; I could
<br>
have sworn that we unlinked them after everyone mmap'ed them... 
<br>
<p><p>The idea was one large memory segment for all processes and it wasn't
<br>
unlinked after complete attach so that we could have spawned procs also
<br>
use shmem (which never worked, of course). So I think we could unlink
<br>
during init at this point.. 
<br>
<p>Brian 
<br>
-----------------------------------
<br>
<p>The following reply is also relevant:
<br>
<p>-----------------------------------
<br>
Subject: Re: [OMPI devel] System V Shared Memory for Open MPI: Request
<br>
forCommunity Input and Testing
<br>
From: Jeff Squyres (jsquyres_at_[hidden])
<br>
Date: 2010-06-11 13:06:37 
<br>
&lt;snip&gt;
<br>
I could have sworn that we decided that long ago and added the unlink. 
<br>
<p>Probably we *did* reach that conclusion long ago, but never actually got
<br>
around to adding the unlink. Sam and I are still in that code area now;
<br>
we might as well add the unlink while we're there. 
<br>
-----------------------------------
<br>
<p>Has this change been implemented, and if so in which version?  We are
<br>
seeing this behaviour with occasional orphaned files left behind, not a
<br>
good situation on a diskless node.  I noted the comment by Paul
<br>
Hargrove:
<br>
<p>-----------------------------------
<br>
While it is not &quot;fair&quot; for Opem MPI to be lazy about its temporary 
<br>
resources in the case of normal termination, there will probably always 
<br>
be small windows of vulnerability to leakage if one dies in just the 
<br>
wrong case (eg a failed assertion between the shmat() and the 
<br>
smctl(IPC_RMID)). On the bright side, it is worth noting that a 
<br>
properly maintained batch environment should include an epilogue that 
<br>
scrubs /tmp, /var/tmp, /usr/tmp, and any other shared writable 
<br>
location. Similarly, to prevent a very simple/obvious DOS it should be 
<br>
destroying any SysV IPC objects left over by the job. 
<br>
-----------------------------------
<br>
<p>I have not yet been able to get evidence of Torque actually running the
<br>
epilogue scripts on sister nodes, something I am perusing in the
<br>
torqueusers mailing list.  Briefly, OMPI seems to start the processes on
<br>
remote nodes itself without running Torque's MOM, but it is the MOM that
<br>
runs pro- and epilogues.  Obviously this is not directly an OMPI
<br>
problem, until as here there is an assumption made.
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
This email and any attachments to it may be confidential and are
<br>
intended solely for the use of the individual to whom it is 
<br>
addressed. If you are not the intended recipient of this email,
<br>
you must neither take any action based upon its contents, nor 
<br>
copy or show it to anyone. Please contact the sender if you 
<br>
believe you have received this email in error. QinetiQ may 
<br>
monitor email traffic data and also the content of email for 
<br>
the purposes of security. QinetiQ Limited (Registered in England
<br>
&amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
<br>
Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16241.php">Jeff Squyres: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16239.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16239.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16242.php">Ralph Castain: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16242.php">Ralph Castain: "Re: [OMPI users] shm unlinking"</a>
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
