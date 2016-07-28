<?
$subject_val = "Re: [OMPI users] Restarting from a checkpoint (OMPI 1.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 09:10:40 2009" -->
<!-- isoreceived="20090121141040" -->
<!-- sent="Wed, 21 Jan 2009 08:10:35 -0600" -->
<!-- isosent="20090121141035" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Restarting from a checkpoint (OMPI 1.3)" -->
<!-- id="D782B60B-6CA1-4C40-8543-68539CC129BE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4975B060.8010703_at_itwm.fraunhofer.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Restarting from a checkpoint (OMPI 1.3)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 09:10:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7749.php">Tim Mattox: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7747.php">Bernard Secher - SFME/LGLS: "[OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="7733.php">Gregor Dschung: "[OMPI users] Restarting from a checkpoint (OMPI 1.3)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gregor,
<br>
<p>Thanks for the bug report. I saw a problem similar to this a few  
<br>
months ago (documented in the ticket below).
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1527">https://svn.open-mpi.org/trac/ompi/ticket/1527</a>
<br>
Though we fixed the accounting information, the patch I had for orte- 
<br>
restart to switch it away from using --hostfile and instead using -- 
<br>
default-hostfile was never applied to the trunk (my fault here). The  
<br>
patch is attached if you want to apply it to make sure it fixes the  
<br>
problem for you.
<br>
<p>I have committed the patch to the development trunk (r20305), and  
<br>
asked that it be brought over to the v1.3 branch so it will be  
<br>
included in the v1.3.1 release. If you want to track its progress you  
<br>
can using the ticket below.
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1761">https://svn.open-mpi.org/trac/ompi/ticket/1761</a>
<br>
<p>Thanks again,
<br>
Josh
<br>
<p><p>

<br><p>
<p><p><p>On Jan 20, 2009, at 5:07 AM, Gregor Dschung wrote:
<br>
<p><span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying the new released Open MPI 1.3 in conjunction with BLCR to
</span><br>
<span class="quotelev1">&gt; provide the checkpoint/restart-feature.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configured with ./configure --prefix=/usr/local --with-ft=cr
</span><br>
<span class="quotelev1">&gt; --enable-ft-thread --enable-mpi-threads --with-blcr=/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A MPI-job on a single machine (several threads) is checkpointed and
</span><br>
<span class="quotelev1">&gt; restarted very well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The checkpoint of a MPI-job across two hosts (ethernet, tcp) is also
</span><br>
<span class="quotelev1">&gt; done without warnings or errors (the homedir and the directory, where
</span><br>
<span class="quotelev1">&gt; the MPI-Application is, are shared with NFS). The restart works too,  
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; all threads are only started on the host, where I enter the ompi- 
</span><br>
<span class="quotelev1">&gt; restart
</span><br>
<span class="quotelev1">&gt; command. Even if I add the -hostfile argument to ompi-restart, only  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; one host is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody has a hint?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Gregor
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7748/orte-restart-hostfile.patch">orte-restart-hostfile.patch</a>
</ul>
<!-- attachment="orte-restart-hostfile.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7749.php">Tim Mattox: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7747.php">Bernard Secher - SFME/LGLS: "[OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="7733.php">Gregor Dschung: "[OMPI users] Restarting from a checkpoint (OMPI 1.3)"</a>
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
