<?
$subject_val = "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 14:01:08 2009" -->
<!-- isoreceived="20091203190108" -->
<!-- sent="Thu, 3 Dec 2009 11:01:04 -0800" -->
<!-- isosent="20091203190104" -->
<!-- name="Chang IL Yoon" -->
<!-- email="workciyoon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet" -->
<!-- id="659f361d0912031101w36d3c390q2a496299471dee60_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B158F53.6030501_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet<br>
<strong>From:</strong> Chang IL Yoon (<em>workciyoon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 14:01:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7184.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Previous message:</strong> <a href="7182.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7167.php">Paul H. Hargrove: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7213.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Reply:</strong> <a href="7213.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Josh and Paul.
<br>
<p>First of all, thank you very much for your interesting on my problem.
<br>
<p>1) I tested it again with MPIRUN_CMD as 'mpirun -am ft-enable-cr -np %N %P'
<br>
&nbsp;&nbsp;&nbsp;But the checkpoint did not work.
<br>
<p>2) Here are the more information on my MPI configuration.
<br>
&nbsp;- What version of Open MPI are you using?
<br>
<span class="quotelev2">   &gt;&gt; I am using Open-MPI ver 1.3.3 with BLCR ver 0.8.2
</span><br>
<p>&nbsp;- How did you configure Open MPI?
<br>
<span class="quotelev2">   &gt;&gt; ./configure --enable-ft-thread --with-ft=cr --enable-mpi-threads
</span><br>
--with-blcr={BLCR_DIR} --with-blcr-libdir={BLCR_LIBDIR}
<br>
--prefix={OPENMPI_DIR}
<br>
<p>&nbsp;- What arguments are being passed to 'mpirun' when running with GASNet?
<br>
<span class="quotelev2">   &gt;&gt; mpirun -am ft-enable-cr --machinefile ./machinefile -np 1 ./personal
</span><br>
<span class="quotelev2">   &gt;&gt; personal is the same probram, my-app.c except for using gasnet_init
</span><br>
and gasnet_exit() instead of MPI_Init() and MPI_Finalize().
<br>
<span class="quotelev2">   &gt;&gt; my-app.c is in <a href="http://osl.iu.edu/research/ft/ompi-cr/examples.php">http://osl.iu.edu/research/ft/ompi-cr/examples.php</a>.
</span><br>
<span class="quotelev2">   &gt;&gt; gasnet_init() and gasnet_exit() use MPI_Init() and MPI_Finalize().
</span><br>
<p>&nbsp;- Do you have any environment variables/MCA parameters set for Open MPI?
<br>
<span class="quotelev2">   &gt;&gt; yes
</span><br>
&nbsp;&nbsp;&nbsp;$HOME/.openmpi/mca-params.conf
<br>
&nbsp;&nbsp;&nbsp;# Local snapshot directory (not used in this scenario)
<br>
&nbsp;&nbsp;&nbsp;crs_base_snapshot_dir=${HOME}/temp
<br>
<p>&nbsp;&nbsp;&nbsp;# Remote snapshot directory (globally mounted file system))
<br>
&nbsp;&nbsp;&nbsp;snapc_base_global_snapshot_dir=${HOME}/checkpoints
<br>
<p>&nbsp;- My network interconnects is Infiniband/OpenIB (IP over IB).
<br>
<p>3) If there are something for me to solve this problem, please let me know
<br>
without any hesitation.
<br>
<p>Thank you again for your reading
<br>
<p>Sincerely
<br>
<p><p>On Tue, Dec 1, 2009 at 1:49 PM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thomas,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I connection with Josh's question about mpirun arguments, I suggest you try
</span><br>
<span class="quotelev1">&gt; setting
</span><br>
<span class="quotelev1">&gt;    MPIRUN_CMD='mpirun -am ft-enable-cr -np %N %P %A'
</span><br>
<span class="quotelev1">&gt; in your environment before launching the GASNet application.  This will
</span><br>
<span class="quotelev1">&gt; instruct GASNet's wrapper around mpirun to include the flag Josh mentioned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thomas,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have not tried to use the checkpoint/restart feature with GASNet over
</span><br>
<span class="quotelev2">&gt;&gt; MPI, so I cannot comment directly on how they interact. However, the
</span><br>
<span class="quotelev2">&gt;&gt; combination should work as long as the proper arguments (-am ft-enable-cr)
</span><br>
<span class="quotelev2">&gt;&gt; are passed along to the mpirun command, and Open MPI is configured properly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error message that you copied seems to indicate that the local daemon
</span><br>
<span class="quotelev2">&gt;&gt; on one of the nodes failed to start a checkpoint of the target application.
</span><br>
<span class="quotelev2">&gt;&gt; Often this is caused by one of two things:
</span><br>
<span class="quotelev2">&gt;&gt;  - Open MPI was not configured with the fault tolerance thread, and the
</span><br>
<span class="quotelev2">&gt;&gt; application is waiting for a long time in a computation loop (not entering
</span><br>
<span class="quotelev2">&gt;&gt; the MPI library).
</span><br>
<span class="quotelev2">&gt;&gt;  - The '-am ft-enable-cr' flag was not provided to the mpirun process, so
</span><br>
<span class="quotelev2">&gt;&gt; the MPI application did not activate the C/R specific code paths and is
</span><br>
<span class="quotelev2">&gt;&gt; therefore denying the request to checkpoint.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send me a bit more information:
</span><br>
<span class="quotelev2">&gt;&gt;  - What version of Open MPI are you using?
</span><br>
<span class="quotelev2">&gt;&gt;  - How did you configure Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt;  - What arguments are being passed to 'mpirun' when running with GASNet?
</span><br>
<span class="quotelev2">&gt;&gt;  - Do you have any environment variables/MCA parameters set for Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 22, 2009, at 7:13 PM, Thomas CI Yoon wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Dear all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks to developers of OPEN-MPI for Fault-Tolerance, I can use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkpoint/restart function very well for my MPI applications.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But its checkpoint does not work for my GASNet applications which use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI conduit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is here anyone else to help me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wrote some code with GASNet API (Global-Address Space Networking:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://gasnet.cs.berkeley.edu/">http://gasnet.cs.berkeley.edu/</a>)    and used MPI conduit for my gasnet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application, so my program ran well with open-mpirun. Thus I thought that I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could also use the transparent checkpoint/restart function supported by BLCR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in Open-mpi. As opposed to my idea, it does not work and show the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: The process with PID 13896 is not checkpointable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       This could be due to one of the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        - An application with this PID doesn't currently exist
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        - The application with this PID isn't checkpointable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        - The application with this PID isn't an OPAL application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       We were looking for the named files:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /tmp/opal_cr_prog_write.13896
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /tmp/opal_cr_prog_read.13896
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 more process has sent help message help-opal-checkpoint.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  0] 13896) Step 53
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  0] 15100) Step 53
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  0] 13896) Step 54
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  0] 15100) Step 54
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  0] 13896) Step 55
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my application, the MPI_Initialized() says it is initialized.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for your reading and have a great day.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7183/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7184.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Previous message:</strong> <a href="7182.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7167.php">Paul H. Hargrove: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7213.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Reply:</strong> <a href="7213.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
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
