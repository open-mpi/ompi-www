<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 04:59:32 2007" -->
<!-- isoreceived="20070918085932" -->
<!-- sent="Tue, 18 Sep 2007 10:59:31 +0200" -->
<!-- isosent="20070918085931" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] another mpirun + xgrid question" -->
<!-- id="2D66D7F7-32A0-4156-B375-02EE313F4782_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BA25F95F-E09D-4991-82CB-EC87DCE75960_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-09-18 04:59:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4036.php">Michael: "Re: [OMPI users] mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="4034.php">Jeff Squyres: "Re: [OMPI users] mpi_file_set_view"</a>
<li><strong>In reply to:</strong> <a href="4033.php">Josh Hursey: "Re: [OMPI users] another mpirun + xgrid question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 18.09.2007 um 01:17 schrieb Josh Hursey:
<br>
<p><span class="quotelev1">&gt; What version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This feature is not in any release at the moment, but is scheduled
</span><br>
<span class="quotelev1">&gt; for v1.3. It is available in the subversion development trunk which
</span><br>
<p>Aha - thx. I simply looked at the latest 1.2.3 only. - Reuti
<br>
<p><span class="quotelev1">&gt; can be downloaded either from subversion or from a nightly snapshot
</span><br>
<span class="quotelev1">&gt; tarball on the Open MPI website:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2007, at 4:03 PM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 17.09.2007 um 21:33 schrieb Josh Hursey:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for catching up to this thread a bit late.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the Open MPI trunk there is a mpirun option to preload a binary
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before execution on remote nodes called '--preload-binary' (or '- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; s').
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It has been tested with many of the resource managers (and should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fairly resource manager agnostic), but I don't believe it has been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tested in the Xgrid environment. It will not use the Xgrid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distribution mechanism, but rsh/ssh transfer mechanisms. Native  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xgrid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support can most likely be supported, but I do not know of any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developer planning to do so at the moment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It has been a while since I tested the '--preload-binary' option to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun so please let us know if you experience any problems.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also a '--preload-files=' option to mpirun that will allow arbitrary
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files to be distributed to remote machines before a job starts as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; well. Both options are useful when working in non-shared file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is fantasic - but is this a hidden feature, compile-time option,
</span><br>
<span class="quotelev2">&gt;&gt; or lack of documentation? When I issue &quot;mpirun -help&quot; I don't get
</span><br>
<span class="quotelev2">&gt;&gt; these options listed. Hence I wasn't aware of them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 17, 2007, at 3:17 PM, Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 17.09.2007 um 16:34 schrieb Brian Barrett:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 10, 2007, at 1:35 PM, Lev Givon wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When launching an MPI program with mpirun on an xgrid cluster, is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; there a way to cause the program being run to be temporarily
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; copied to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the compute nodes in the cluster when executed (i.e., similar to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; what the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; xgrid command line tool does)? Or is it necessary to make the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; being run available on every compute node (e.g., using NFS data
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; partions)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is functionality we never added to our XGrid support.  It
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; certainly could be added, but we have an extremely limited
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; supply of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; developer cycles for the XGrid support at the moment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think this should be implemented for all platforms, if it would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have to be part of OpenMPI at all (the parallel library Linda is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; offering such a feature). Otherwise the option would be to submit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job using XGrid, or any another queuingsystem, where you can setup
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; such file tranfers in any prolog script (and epilog to remove the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; programs again) - or copy it to the created $TMPDIR which I would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggest if you decide to use e.g. SUN GridEngine, as this will be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ereased after the job automatically.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But just for curiosity: how is XGrid handling it, as you refer to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command-line-tool? If you have a jobscript with three mpirun-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; commands
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for three different programs, XGrid will transfer all three  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; programs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the nodes for this job, or is it limited to be just one  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just one XGrid job?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Networking Team, CCS-1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="4036.php">Michael: "Re: [OMPI users] mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="4034.php">Jeff Squyres: "Re: [OMPI users] mpi_file_set_view"</a>
<li><strong>In reply to:</strong> <a href="4033.php">Josh Hursey: "Re: [OMPI users] another mpirun + xgrid question"</a>
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
