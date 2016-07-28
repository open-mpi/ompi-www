<?
$subject_val = "Re: [OMPI users] ompi_info loop";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 10:58:58 2010" -->
<!-- isoreceived="20100209155858" -->
<!-- sent="Tue, 9 Feb 2010 10:58:52 -0500" -->
<!-- isosent="20100209155852" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_info loop" -->
<!-- id="20100209155851.GA18477_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B7120FD.3316.0051.0_at_groupwise.wmich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi_info loop<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-09 10:58:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12058.php">Mostyn Lewis: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12056.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12054.php">Benjamin Gaudio: "[OMPI users] ompi_info loop"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb/09/2010 08:46:53AM, Benjamin Gaudio wrote:
<br>
<span class="quotelev1">&gt; In trying to track down my default hostfile problem, I found that
</span><br>
<span class="quotelev1">&gt; when I run ompi_info, it simply keeps repeating:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Displaying Open MPI information for 32-bit ...
</span><br>
<span class="quotelev1">&gt; Displaying Open MPI information for 32-bit ...
</span><br>
<span class="quotelev1">&gt; Displaying Open MPI information for 32-bit ...
</span><br>
<span class="quotelev1">&gt; Displaying Open MPI information for 32-bit ...
</span><br>
<span class="quotelev1">&gt; Displaying Open MPI information for 32-bit ...
</span><br>
<span class="quotelev1">&gt; Displaying Open MPI information for 32-bit ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone seen this before?  I am using Sun HPC ClusterTools 8.2.1
</span><br>
<span class="quotelev1">&gt; on Solaris 10.
</span><br>
<p>Hi Benjamin,
<br>
<p>I can reproduce this using /opt/SUNWhpc/HPC8.2.1/sun/bin/64/ompi_info.
<br>
We'll fix this ASAP (for the next ClusterTools release).  A workaround
<br>
is to use /opt/SUNWhpc/HPC8.2.1/sun/bin/32/ompi_info.
<br>
<p>Thanks,
<br>
Ethan
<br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="12058.php">Mostyn Lewis: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12056.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12054.php">Benjamin Gaudio: "[OMPI users] ompi_info loop"</a>
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
