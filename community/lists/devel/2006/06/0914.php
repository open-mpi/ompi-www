<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 19:38:01 2006" -->
<!-- isoreceived="20060601233801" -->
<!-- sent="Thu, 1 Jun 2006 19:37:53 -0400" -->
<!-- isosent="20060601233753" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SIGSTOP and SIGCONT on orted" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C42F_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] SIGSTOP and SIGCONT on orted" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-01 19:37:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0915.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0913.php">Pak Lui: "[OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Maybe in reply to:</strong> <a href="0913.php">Pak Lui: "[OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0915.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Reply:</strong> <a href="0915.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The main reason that it doesn't work is because we didn't do any thing
<br>
to make it work.  :-)
<br>
<p>Specifically, mpirun is not intercepting SIGSTOP and passing it on to
<br>
the remote nodes.  There is nothing in the design or architecture that
<br>
would prevent this, but we just don't do it [yet].
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Pak Lui
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 01, 2006 5:02 PM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] SIGSTOP and SIGCONT on orted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a question on signals. Normally when I do a SIGTERM 
</span><br>
<span class="quotelev1">&gt; (control-C) 
</span><br>
<span class="quotelev1">&gt; on mpirun, the signal seems to get handled in a way that it 
</span><br>
<span class="quotelev1">&gt; broadcasts 
</span><br>
<span class="quotelev1">&gt; to the orted and processes on the execution hosts. However, 
</span><br>
<span class="quotelev1">&gt; when I send 
</span><br>
<span class="quotelev1">&gt; a SIGSTOP to mpirun, mpirun seems to have stopped, but the 
</span><br>
<span class="quotelev1">&gt; processes of 
</span><br>
<span class="quotelev1">&gt; the user executable continue to run. I guess I could hook up the 
</span><br>
<span class="quotelev1">&gt; debugger to mpirun and orted to see why they are handled differently, 
</span><br>
<span class="quotelev1">&gt; but I guess I anxious to hear about it here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to see the behavior of SIGSTOP and SIGCONT for the 
</span><br>
<span class="quotelev1">&gt; suspension/resumption feature in N1GE. It'll try to use these 
</span><br>
<span class="quotelev1">&gt; signals to 
</span><br>
<span class="quotelev1">&gt; stop and continue both mpirun and orted (and its processes), but the 
</span><br>
<span class="quotelev1">&gt; signals (SIGSTOP and SIGCONT) don't seem to get propagated to 
</span><br>
<span class="quotelev1">&gt; the remote 
</span><br>
<span class="quotelev1">&gt; orted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can see there are some issues for implementing this feature on N1GE 
</span><br>
<span class="quotelev1">&gt; because the 'qrsh' interface does not send the signal to orted on the 
</span><br>
<span class="quotelev1">&gt; remote node, but only to 'mpirun'. I am trying to see how to 
</span><br>
<span class="quotelev1">&gt; work around 
</span><br>
<span class="quotelev1">&gt; this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Pak Lui
</span><br>
<span class="quotelev1">&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0915.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0913.php">Pak Lui: "[OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Maybe in reply to:</strong> <a href="0913.php">Pak Lui: "[OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0915.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Reply:</strong> <a href="0915.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
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
