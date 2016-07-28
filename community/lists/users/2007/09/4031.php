<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 15:33:33 2007" -->
<!-- isoreceived="20070917193333" -->
<!-- sent="Mon, 17 Sep 2007 15:33:29 -0400" -->
<!-- isosent="20070917193329" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] another mpirun + xgrid question" -->
<!-- id="13C81102-73FA-4BB2-B058-4F51E3008776_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="52F7B28F-058C-4252-867A-73344B4532CB_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-17 15:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4032.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Previous message:</strong> <a href="4030.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>In reply to:</strong> <a href="4030.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4032.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Reply:</strong> <a href="4032.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for catching up to this thread a bit late.
<br>
<p>In the Open MPI trunk there is a mpirun option to preload a binary  
<br>
before execution on remote nodes called '--preload-binary' (or '-s').  
<br>
It has been tested with many of the resource managers (and should be  
<br>
fairly resource manager agnostic), but I don't believe it has been  
<br>
tested in the Xgrid environment. It will not use the Xgrid  
<br>
distribution mechanism, but rsh/ssh transfer mechanisms. Native Xgrid  
<br>
support can most likely be supported, but I do not know of any  
<br>
developer planning to do so at the moment.
<br>
<p>It has been a while since I tested the '--preload-binary' option to  
<br>
mpirun so please let us know if you experience any problems. There is  
<br>
also a '--preload-files=' option to mpirun that will allow arbitrary  
<br>
files to be distributed to remote machines before a job starts as  
<br>
well. Both options are useful when working in non-shared file systems.
<br>
<p>Cheers,
<br>
Josh
<br>
<p><p>On Sep 17, 2007, at 3:17 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Am 17.09.2007 um 16:34 schrieb Brian Barrett:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 10, 2007, at 1:35 PM, Lev Givon wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When launching an MPI program with mpirun on an xgrid cluster, is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there a way to cause the program being run to be temporarily
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copied to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the compute nodes in the cluster when executed (i.e., similar to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xgrid command line tool does)? Or is it necessary to make the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; being run available on every compute node (e.g., using NFS data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; partions)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is functionality we never added to our XGrid support.  It
</span><br>
<span class="quotelev2">&gt;&gt; certainly could be added, but we have an extremely limited supply of
</span><br>
<span class="quotelev2">&gt;&gt; developer cycles for the XGrid support at the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this should be implemented for all platforms, if it would
</span><br>
<span class="quotelev1">&gt; have to be part of OpenMPI at all (the parallel library Linda is
</span><br>
<span class="quotelev1">&gt; offering such a feature). Otherwise the option would be to submit the
</span><br>
<span class="quotelev1">&gt; job using XGrid, or any another queuingsystem, where you can setup
</span><br>
<span class="quotelev1">&gt; such file tranfers in any prolog script (and epilog to remove the
</span><br>
<span class="quotelev1">&gt; programs again) - or copy it to the created $TMPDIR which I would
</span><br>
<span class="quotelev1">&gt; suggest if you decide to use e.g. SUN GridEngine, as this will be
</span><br>
<span class="quotelev1">&gt; ereased after the job automatically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But just for curiosity: how is XGrid handling it, as you refer to
</span><br>
<span class="quotelev1">&gt; command-line-tool? If you have a jobscript with three mpirun-commands
</span><br>
<span class="quotelev1">&gt; for three different programs, XGrid will transfer all three programs
</span><br>
<span class="quotelev1">&gt; to the nodes for this job, or is it limited to be just one mpirun is
</span><br>
<span class="quotelev1">&gt; just one XGrid job?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;    Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;    Networking Team, CCS-1
</span><br>
<span class="quotelev2">&gt;&gt;    Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4032.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Previous message:</strong> <a href="4030.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>In reply to:</strong> <a href="4030.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4032.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Reply:</strong> <a href="4032.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
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
