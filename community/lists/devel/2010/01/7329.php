<?
$subject_val = "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 19:14:21 2010" -->
<!-- isoreceived="20100120001421" -->
<!-- sent="Tue, 19 Jan 2010 16:14:15 -0800" -->
<!-- isosent="20100120001415" -->
<!-- name="Chang IL Yoon" -->
<!-- email="workciyoon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet" -->
<!-- id="659f361d1001191614t15e79d2ekf3b567fcfb0f2bbe_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BC3AAD9E-B04F-47F4-803D-6D8187749CF3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-01-19 19:14:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7330.php">Guillaume Thouvenin: "[OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty"</a>
<li><strong>Previous message:</strong> <a href="7328.php">Sebastian Rinke: "[OMPI devel] PML csum: checksum for RDMA transfers?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7141.php">Thomas CI Yoon: "[OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Josh
<br>
<p>First of all, thank you for your continuous attention on this issue.
<br>
<p>About the problem, even though I followed what you had suggested like the
<br>
below, the checkpoint did not work.
<br>
<p>So append this value to your $HOME/.openmpi/mca-params.conf file
<br>
#-----------------
<br>
mca_base_param_file_prefix=ft-enable-cr
<br>
#-----------------
<br>
<p>Sincerely
<br>
Thomas
<br>
<p><p>On Mon, Jan 11, 2010 at 2:21 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; (Sorry for the delay in replying. I am still sorting through a backlog of
</span><br>
<span class="quotelev1">&gt; holiday email buildup).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 10, 2009, at 7:32 PM, Chang IL Yoon wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dear Josh.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank your for keeping attention on this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec 9, 2009 at 8:40 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 3, 2009, at 2:01 PM, Chang IL Yoon wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Josh and Paul.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First of all, thank you very much for your interesting on my problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) I tested it again with MPIRUN_CMD as 'mpirun -am ft-enable-cr -np %N
</span><br>
<span class="quotelev2">&gt;&gt; %P'
</span><br>
<span class="quotelev2">&gt;&gt;  But the checkpoint did not work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it giving the same error?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send me information on how you configured Open MPI on your system?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it gives the same error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When was installing the open-mpi-1.3.3, I used the following
</span><br>
<span class="quotelev2">&gt;&gt; configuration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-ft-thread --with-ft=cr --enable-mpi- threads
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr={BLCR_DIR} --with-blcr-libdir={BLCR_LIBDIR} --
</span><br>
<span class="quotelev2">&gt;&gt; prefix={OPENMPI_DIR}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What kind of configuration information do you need?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks fine to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) Here are the more information on my MPI configuration.
</span><br>
<span class="quotelev2">&gt;&gt;  - What version of Open MPI are you using?
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt; I am using Open-MPI ver 1.3.3 with BLCR ver 0.8.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  - How did you configure Open MPI?
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt; ./configure --enable-ft-thread --with-ft=cr --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr={BLCR_DIR} --with-blcr-libdir={BLCR_LIBDIR}
</span><br>
<span class="quotelev2">&gt;&gt; --prefix={OPENMPI_DIR}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  - What arguments are being passed to 'mpirun' when running with GASNet?
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt; mpirun -am ft-enable-cr --machinefile ./machinefile -np 1 ./personal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The '-np 1' argument is a bit puzzling to me, don't you want this to be &gt;1
</span><br>
<span class="quotelev2">&gt;&gt; normally. GASNet does not use any MPI dynamic process management interfaces
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., MPI_Comm_spawn), does it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, actually I do not know if GASNet uses a MPI dynamic process
</span><br>
<span class="quotelev2">&gt;&gt; management or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It probably does not (not many applications do), but it could be a problem
</span><br>
<span class="quotelev1">&gt; if they do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt; personal is the same probram, my-app.c except for using gasnet_init
</span><br>
<span class="quotelev2">&gt;&gt; and gasnet_exit() instead of MPI_Init() and MPI_Finalize().
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt; my-app.c is in <a href="http://osl.iu.edu/research/ft/ompi-cr/examples.php">http://osl.iu.edu/research/ft/ompi-cr/examples.php</a>.
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt; gasnet_init() and gasnet_exit() use MPI_Init() and MPI_Finalize().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So you are using the program from the SELF checkpoint example? If Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; detects that the application has the appropriate function callbacks to use
</span><br>
<span class="quotelev2">&gt;&gt; the SELF CRS (which this example does) then it will -not- use the BLCR
</span><br>
<span class="quotelev2">&gt;&gt; component, but instead select the SELF component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try using a simple counting program instead of that particular example.
</span><br>
<span class="quotelev2">&gt;&gt; You could also just remove the opal_crs_self_user_* and my_personal_*
</span><br>
<span class="quotelev2">&gt;&gt; functions form the example program to reduce it to one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure why the checkpoint would not work even with the SELF CRS.
</span><br>
<span class="quotelev2">&gt;&gt; I'll have to check on that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Even though I used a simple counting program, the check point did not
</span><br>
<span class="quotelev2">&gt;&gt; work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Humm... Everything seems to be setup correctly, and the application is
</span><br>
<span class="quotelev1">&gt; still behaving like it is not getting the '-am ft-enable-cr' parameter. The
</span><br>
<span class="quotelev1">&gt; only other thing I can think of to try is to set this value in the
</span><br>
<span class="quotelev1">&gt; $HOME/.openmpi/mca-params.conf file. It looks a bit different but if you add
</span><br>
<span class="quotelev1">&gt; the following line it should work (as long as $HOME is mounted on all of the
</span><br>
<span class="quotelev1">&gt; machines).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So append this value to your $HOME/.openmpi/mca-params.conf file and see if
</span><br>
<span class="quotelev1">&gt; that helps.
</span><br>
<span class="quotelev1">&gt; #-----------------
</span><br>
<span class="quotelev1">&gt; mca_base_param_file_prefix=ft-enable-cr
</span><br>
<span class="quotelev1">&gt; #-----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that doesn't work, I'll have to think a bit more about what might be
</span><br>
<span class="quotelev1">&gt; going wrong here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  - Do you have any environment variables/MCA parameters set for Open MPI?
</span><br>
<span class="quotelev4">&gt;&gt;  &gt;&gt; yes
</span><br>
<span class="quotelev2">&gt;&gt;  $HOME/.openmpi/mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt;  # Local snapshot directory (not used in this scenario)
</span><br>
<span class="quotelev2">&gt;&gt;  crs_base_snapshot_dir=${HOME}/temp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # Remote snapshot directory (globally mounted file system))
</span><br>
<span class="quotelev2">&gt;&gt;  snapc_base_global_snapshot_dir=${HOME}/checkpoints
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  - My network interconnects is Infiniband/OpenIB (IP over IB).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These all look fine to me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) If there are something for me to solve this problem, please let me know
</span><br>
<span class="quotelev2">&gt;&gt; without any hesitation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you again for your reading
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 1, 2009 at 1:49 PM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thomas,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I connection with Josh's question about mpirun arguments, I suggest you
</span><br>
<span class="quotelev2">&gt;&gt; try setting
</span><br>
<span class="quotelev2">&gt;&gt;  MPIRUN_CMD='mpirun -am ft-enable-cr -np %N %P %A'
</span><br>
<span class="quotelev2">&gt;&gt; in your environment before launching the GASNet application.  This will
</span><br>
<span class="quotelev2">&gt;&gt; instruct GASNet's wrapper around mpirun to include the flag Josh mentioned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh Hursey wrote:
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
<span class="quotelev2">&gt;&gt; Dear all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks to developers of OPEN-MPI for Fault-Tolerance, I can use the
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint/restart function very well for my MPI applications.
</span><br>
<span class="quotelev2">&gt;&gt; But its checkpoint does not work for my GASNet applications which use the
</span><br>
<span class="quotelev2">&gt;&gt; MPI conduit.
</span><br>
<span class="quotelev2">&gt;&gt; Is here anyone else to help me?
</span><br>
<span class="quotelev2">&gt;&gt; I wrote some code with GASNet API (Global-Address Space Networking:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gasnet.cs.berkeley.edu/">http://gasnet.cs.berkeley.edu/</a>)    and used MPI conduit for my gasnet
</span><br>
<span class="quotelev2">&gt;&gt; application, so my program ran well with open-mpirun. Thus I thought that I
</span><br>
<span class="quotelev2">&gt;&gt; could also use the transparent checkpoint/restart function supported by BLCR
</span><br>
<span class="quotelev2">&gt;&gt; in Open-mpi. As opposed to my idea, it does not work and show the following
</span><br>
<span class="quotelev2">&gt;&gt; error message.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Error: The process with PID 13896 is not checkpointable.
</span><br>
<span class="quotelev2">&gt;&gt;     This could be due to one of the following:
</span><br>
<span class="quotelev2">&gt;&gt;      - An application with this PID doesn't currently exist
</span><br>
<span class="quotelev2">&gt;&gt;      - The application with this PID isn't checkpointable
</span><br>
<span class="quotelev2">&gt;&gt;      - The application with this PID isn't an OPAL application.
</span><br>
<span class="quotelev2">&gt;&gt;     We were looking for the named files:
</span><br>
<span class="quotelev2">&gt;&gt;       /tmp/opal_cr_prog_write.13896
</span><br>
<span class="quotelev2">&gt;&gt;       /tmp/opal_cr_prog_read.13896
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 1 more process has sent help message help-opal-checkpoint.txt
</span><br>
<span class="quotelev2">&gt;&gt; Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help
</span><br>
<span class="quotelev2">&gt;&gt;  0] 13896) Step 53
</span><br>
<span class="quotelev2">&gt;&gt;  0] 15100) Step 53
</span><br>
<span class="quotelev2">&gt;&gt;  0] 13896) Step 54
</span><br>
<span class="quotelev2">&gt;&gt;  0] 15100) Step 54
</span><br>
<span class="quotelev2">&gt;&gt;  0] 13896) Step 55
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my application, the MPI_Initialized() says it is initialized.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your reading and have a great day.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7329/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7330.php">Guillaume Thouvenin: "[OMPI devel] [patch] MPI_Comm_Spawn(), parent name is empty"</a>
<li><strong>Previous message:</strong> <a href="7328.php">Sebastian Rinke: "[OMPI devel] PML csum: checksum for RDMA transfers?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7141.php">Thomas CI Yoon: "[OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
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
