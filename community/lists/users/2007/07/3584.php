<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 15:56:52 2007" -->
<!-- isoreceived="20070705195652" -->
<!-- sent="Thu, 5 Jul 2007 14:56:48 -0500" -->
<!-- isosent="20070705195648" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nfs romio" -->
<!-- id="20070705195647.GF10975_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8BF06A36E7AD424197195998D9A0B8E1CD6FFA_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-05 15:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3585.php">Dennis McRitchie: "[OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Previous message:</strong> <a href="3583.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>In reply to:</strong> <a href="3565.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] nfs romio"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jul 02, 2007 at 12:49:27PM -0500, Adams, Samuel D Contr AFRL/HEDR wrote:
<br>
<span class="quotelev1">&gt; Anyway, so if anyone can tell me how I should configure my NFS server,
</span><br>
<span class="quotelev1">&gt; or OpenMPI to make ROMIO work properly, I would appreciate it.   
</span><br>
<p>Well, as Jeff said, the only safe way to run NFS servers for ROMIO is
<br>
by disabling all caching, which in turn will dramatically slow down
<br>
performance.  
<br>
<p>Since NFS is performing so slowly for you, I'd suggest taking this
<br>
opportunity to deploy a parallel file system.  PVFS, Lustre, or GPFS
<br>
might make fine choices. 
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3585.php">Dennis McRitchie: "[OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Previous message:</strong> <a href="3583.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>In reply to:</strong> <a href="3565.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] nfs romio"</a>
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
