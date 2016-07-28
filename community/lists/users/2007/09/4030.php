<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 15:15:45 2007" -->
<!-- isoreceived="20070917191545" -->
<!-- sent="Mon, 17 Sep 2007 21:17:00 +0200" -->
<!-- isosent="20070917191700" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] another mpirun + xgrid question" -->
<!-- id="52F7B28F-058C-4252-867A-73344B4532CB_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A0069AC7-5FAB-46A9-BCF8-36B901BAED32_at_lanl.gov" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-17 15:17:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4031.php">Josh Hursey: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Previous message:</strong> <a href="4029.php">Andrus, Mr. Brian (Contractor): "[OMPI users] mpi_file_set_view"</a>
<li><strong>In reply to:</strong> <a href="4027.php">Brian Barrett: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4031.php">Josh Hursey: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Reply:</strong> <a href="4031.php">Josh Hursey: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 17.09.2007 um 16:34 schrieb Brian Barrett:
<br>
<p><span class="quotelev1">&gt; On Sep 10, 2007, at 1:35 PM, Lev Givon wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When launching an MPI program with mpirun on an xgrid cluster, is
</span><br>
<span class="quotelev2">&gt;&gt; there a way to cause the program being run to be temporarily  
</span><br>
<span class="quotelev2">&gt;&gt; copied to
</span><br>
<span class="quotelev2">&gt;&gt; the compute nodes in the cluster when executed (i.e., similar to
</span><br>
<span class="quotelev2">&gt;&gt; what the
</span><br>
<span class="quotelev2">&gt;&gt; xgrid command line tool does)? Or is it necessary to make the program
</span><br>
<span class="quotelev2">&gt;&gt; being run available on every compute node (e.g., using NFS data
</span><br>
<span class="quotelev2">&gt;&gt; partions)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is functionality we never added to our XGrid support.  It
</span><br>
<span class="quotelev1">&gt; certainly could be added, but we have an extremely limited supply of
</span><br>
<span class="quotelev1">&gt; developer cycles for the XGrid support at the moment.
</span><br>
<p>I think this should be implemented for all platforms, if it would  
<br>
have to be part of OpenMPI at all (the parallel library Linda is  
<br>
offering such a feature). Otherwise the option would be to submit the  
<br>
job using XGrid, or any another queuingsystem, where you can setup  
<br>
such file tranfers in any prolog script (and epilog to remove the  
<br>
programs again) - or copy it to the created $TMPDIR which I would  
<br>
suggest if you decide to use e.g. SUN GridEngine, as this will be  
<br>
ereased after the job automatically.
<br>
<p>But just for curiosity: how is XGrid handling it, as you refer to  
<br>
command-line-tool? If you have a jobscript with three mpirun-commands  
<br>
for three different programs, XGrid will transfer all three programs  
<br>
to the nodes for this job, or is it limited to be just one mpirun is  
<br>
just one XGrid job?
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;    Networking Team, CCS-1
</span><br>
<span class="quotelev1">&gt;    Los Alamos National Laboratory
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4031.php">Josh Hursey: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Previous message:</strong> <a href="4029.php">Andrus, Mr. Brian (Contractor): "[OMPI users] mpi_file_set_view"</a>
<li><strong>In reply to:</strong> <a href="4027.php">Brian Barrett: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4031.php">Josh Hursey: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Reply:</strong> <a href="4031.php">Josh Hursey: "Re: [OMPI users] another mpirun + xgrid question"</a>
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
