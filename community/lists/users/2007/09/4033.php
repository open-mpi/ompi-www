<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 19:19:22 2007" -->
<!-- isoreceived="20070917231922" -->
<!-- sent="Mon, 17 Sep 2007 19:17:36 -0400" -->
<!-- isosent="20070917231736" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] another mpirun + xgrid question" -->
<!-- id="BA25F95F-E09D-4991-82CB-EC87DCE75960_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AE9147C0-C6B4-408D-B67D-9E7318E701D4_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2007-09-17 19:17:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4034.php">Jeff Squyres: "Re: [OMPI users] mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="4032.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>In reply to:</strong> <a href="4032.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4035.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Reply:</strong> <a href="4035.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of Open MPI are you using?
<br>
<p>This feature is not in any release at the moment, but is scheduled  
<br>
for v1.3. It is available in the subversion development trunk which  
<br>
can be downloaded either from subversion or from a nightly snapshot  
<br>
tarball on the Open MPI website:
<br>
<a href="http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/</a>
<br>
<p>-- Josh
<br>
<p>On Sep 17, 2007, at 4:03 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Josh:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 17.09.2007 um 21:33 schrieb Josh Hursey:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for catching up to this thread a bit late.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the Open MPI trunk there is a mpirun option to preload a binary
</span><br>
<span class="quotelev2">&gt;&gt; before execution on remote nodes called '--preload-binary' (or '-s').
</span><br>
<span class="quotelev2">&gt;&gt; It has been tested with many of the resource managers (and should be
</span><br>
<span class="quotelev2">&gt;&gt; fairly resource manager agnostic), but I don't believe it has been
</span><br>
<span class="quotelev2">&gt;&gt; tested in the Xgrid environment. It will not use the Xgrid
</span><br>
<span class="quotelev2">&gt;&gt; distribution mechanism, but rsh/ssh transfer mechanisms. Native Xgrid
</span><br>
<span class="quotelev2">&gt;&gt; support can most likely be supported, but I do not know of any
</span><br>
<span class="quotelev2">&gt;&gt; developer planning to do so at the moment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It has been a while since I tested the '--preload-binary' option to
</span><br>
<span class="quotelev2">&gt;&gt; mpirun so please let us know if you experience any problems. There is
</span><br>
<span class="quotelev2">&gt;&gt; also a '--preload-files=' option to mpirun that will allow arbitrary
</span><br>
<span class="quotelev2">&gt;&gt; files to be distributed to remote machines before a job starts as
</span><br>
<span class="quotelev2">&gt;&gt; well. Both options are useful when working in non-shared file  
</span><br>
<span class="quotelev2">&gt;&gt; systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is fantasic - but is this a hidden feature, compile-time option,
</span><br>
<span class="quotelev1">&gt; or lack of documentation? When I issue &quot;mpirun -help&quot; I don't get
</span><br>
<span class="quotelev1">&gt; these options listed. Hence I wasn't aware of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 17, 2007, at 3:17 PM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 17.09.2007 um 16:34 schrieb Brian Barrett:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 10, 2007, at 1:35 PM, Lev Givon wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When launching an MPI program with mpirun on an xgrid cluster, is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there a way to cause the program being run to be temporarily
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; copied to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the compute nodes in the cluster when executed (i.e., similar to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; what the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xgrid command line tool does)? Or is it necessary to make the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; being run available on every compute node (e.g., using NFS data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; partions)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is functionality we never added to our XGrid support.  It
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; certainly could be added, but we have an extremely limited  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supply of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; developer cycles for the XGrid support at the moment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think this should be implemented for all platforms, if it would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have to be part of OpenMPI at all (the parallel library Linda is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; offering such a feature). Otherwise the option would be to submit  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job using XGrid, or any another queuingsystem, where you can setup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such file tranfers in any prolog script (and epilog to remove the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs again) - or copy it to the created $TMPDIR which I would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggest if you decide to use e.g. SUN GridEngine, as this will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ereased after the job automatically.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But just for curiosity: how is XGrid handling it, as you refer to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command-line-tool? If you have a jobscript with three mpirun- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commands
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for three different programs, XGrid will transfer all three programs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the nodes for this job, or is it limited to be just one mpirun is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just one XGrid job?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Brian W. Barrett
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Networking Team, CCS-1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Los Alamos National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="4034.php">Jeff Squyres: "Re: [OMPI users] mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="4032.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>In reply to:</strong> <a href="4032.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4035.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Reply:</strong> <a href="4035.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
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
