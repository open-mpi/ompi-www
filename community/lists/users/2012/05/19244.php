<?
$subject_val = "Re: [OMPI users] call to fork() error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 10 08:00:52 2012" -->
<!-- isoreceived="20120510120052" -->
<!-- sent="Thu, 10 May 2012 08:00:47 -0400" -->
<!-- isosent="20120510120047" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] call to fork() error" -->
<!-- id="A43D9E69-1A0D-4B78-BBCB-0387A7F9C152_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FAB77FE.8010108_at_uea.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] call to fork() error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-10 08:00:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19245.php">Barnet Wagman: "[OMPI users] ppe-ompi 1.2.1 (Open MPI on EC2)"</a>
<li><strong>Previous message:</strong> <a href="19243.php">Jim Maas: "[OMPI users] call to fork() error"</a>
<li><strong>In reply to:</strong> <a href="19243.php">Jim Maas: "[OMPI users] call to fork() error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19253.php">Don Armstrong: "Re: [OMPI users] call to fork() error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I don't know the inner workings of R at all.  They must have changed something between 2.13 and 2.15 such that they're now calling fork() after MPI_Init()...
<br>
<p>The problem is that OpenFabrics-based networks do things that make fork()... unstable (for lack of a longer description).  That's why you're getting this warning message.
<br>
<p>Note, too, that this is only a warning message.  It's possible that everything will be fine.  If so, you can set the MCA param to disable this warning message.  We just erred on the side of caution (after too many users complained that they called fork() after MPI_Init() when they were using OpenFabrics-based networks, and then Bad Things Happened).
<br>
<p><p><p>On May 10, 2012, at 4:10 AM, Jim Maas wrote:
<br>
<p><span class="quotelev1">&gt; I'm getting the following error when running an open-mpi job on a LSF cluster using a new version of R 2.15.  I didn't get the error message when running previously using R 2.13.  Could anyone point me to the possible cause, or how to find the offending code?  I'm not a sysop, just a user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process has executed an operation involving a call to the
</span><br>
<span class="quotelev1">&gt; &quot;fork()&quot; system call to create a child process.  Open MPI is currently
</span><br>
<span class="quotelev1">&gt; operating in a condition that could result in memory corruption or
</span><br>
<span class="quotelev1">&gt; other system errors; your MPI job may hang, crash, or produce silent
</span><br>
<span class="quotelev1">&gt; data corruption.  The use of fork() (or system() or other calls that
</span><br>
<span class="quotelev1">&gt; create child processes) is strongly discouraged.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The process that invoked fork was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host:          cn159.private.dns.zone (PID 12792)
</span><br>
<span class="quotelev1">&gt;  MPI_COMM_WORLD rank: 7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are *absolutely sure* that your application will successfully
</span><br>
<span class="quotelev1">&gt; and correctly survive a call to fork(), you may disable this warning
</span><br>
<span class="quotelev1">&gt; by setting the mpi_warn_on_fork MCA parameter to 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr. Jim Maas
</span><br>
<span class="quotelev1">&gt; University of East Anglia
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19245.php">Barnet Wagman: "[OMPI users] ppe-ompi 1.2.1 (Open MPI on EC2)"</a>
<li><strong>Previous message:</strong> <a href="19243.php">Jim Maas: "[OMPI users] call to fork() error"</a>
<li><strong>In reply to:</strong> <a href="19243.php">Jim Maas: "[OMPI users] call to fork() error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19253.php">Don Armstrong: "Re: [OMPI users] call to fork() error"</a>
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
