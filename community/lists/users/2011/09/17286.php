<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 12:01:34 2011" -->
<!-- isoreceived="20110914160134" -->
<!-- sent="Wed, 14 Sep 2011 18:01:23 +0200" -->
<!-- isosent="20110914160123" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?" -->
<!-- id="9DFEC364-71CF-4A08-8085-90EEDBBA2006_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275E483F26_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 12:01:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17287.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17285.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17285.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17287.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 14.09.2011 um 17:39 schrieb Blosch, Edwin L:
<br>
<p><span class="quotelev1">&gt; Thanks, Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the failure messages, unfortunately:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; setgid FAILED
</span><br>
<span class="quotelev1">&gt; setgid FAILED
</span><br>
<span class="quotelev1">&gt; setgid FAILED
</span><br>
<p>N.B.: This would be a side effect of the tight integration to do it automatcially for all slave tasks.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I actually had attempted to call setgid from within the application previously, which looks similar to what you've done, but it failed. That was when I initiated the post to the mailing list. My conclusion, a guess really, was that Linux would not let me setgid from within my program because I was not root.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 14, 2011 8:15 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached should set the gid of the remote daemons (and their children) to the gid of mpirun. No cmd line option or anything is required - it will just always do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would you mind giving it a try?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know if/how it works.
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
<li><strong>Next message:</strong> <a href="17287.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17285.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17285.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17287.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
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
