<?
$subject_val = "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 11:40:33 2009" -->
<!-- isoreceived="20091209164033" -->
<!-- sent="Wed, 9 Dec 2009 11:40:28 -0500" -->
<!-- isosent="20091209164028" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet" -->
<!-- id="154E2EF7-58A9-4B99-8042-0EE980638B91_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="659f361d0912031101w36d3c390q2a496299471dee60_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 11:40:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7214.php">Rainer Keller: "[OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5"</a>
<li><strong>Previous message:</strong> <a href="7212.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="7183.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7329.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 3, 2009, at 2:01 PM, Chang IL Yoon wrote:
<br>
<p><span class="quotelev1">&gt; Dear Josh and Paul.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all, thank you very much for your interesting on my problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I tested it again with MPIRUN_CMD as 'mpirun -am ft-enable-cr -np  
</span><br>
<span class="quotelev1">&gt; %N %P'
</span><br>
<span class="quotelev1">&gt;    But the checkpoint did not work.
</span><br>
<p>Is it giving the same error?
<br>
<p>Can you send me information on how you configured Open MPI on your  
<br>
system?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Here are the more information on my MPI configuration.
</span><br>
<span class="quotelev1">&gt;  - What version of Open MPI are you using?
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; I am using Open-MPI ver 1.3.3 with BLCR ver 0.8.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - How did you configure Open MPI?
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; ./configure --enable-ft-thread --with-ft=cr --enable-mpi- 
</span><br>
<span class="quotelev1">&gt; threads --with-blcr={BLCR_DIR} --with-blcr-libdir={BLCR_LIBDIR} -- 
</span><br>
<span class="quotelev1">&gt; prefix={OPENMPI_DIR}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - What arguments are being passed to 'mpirun' when running with  
</span><br>
<span class="quotelev1">&gt; GASNet?
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; mpirun -am ft-enable-cr --machinefile ./machinefile -np 1 ./ 
</span><br>
<span class="quotelev1">&gt; personal
</span><br>
<p>The '-np 1' argument is a bit puzzling to me, don't you want this to  
<br>
be &gt;1 normally. GASNet does not use any MPI dynamic process management  
<br>
interfaces (e.g., MPI_Comm_spawn), does it?
<br>
<p><p><span class="quotelev3">&gt;    &gt;&gt; personal is the same probram, my-app.c except for using  
</span><br>
<span class="quotelev1">&gt; gasnet_init and gasnet_exit() instead of MPI_Init() and  
</span><br>
<span class="quotelev1">&gt; MPI_Finalize().
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; my-app.c is in <a href="http://osl.iu.edu/research/ft/ompi-cr/examples.php">http://osl.iu.edu/research/ft/ompi-cr/examples.php</a> 
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; gasnet_init() and gasnet_exit() use MPI_Init() and  
</span><br>
<span class="quotelev1">&gt; MPI_Finalize().
</span><br>
<p>So you are using the program from the SELF checkpoint example? If Open  
<br>
MPI detects that the application has the appropriate function  
<br>
callbacks to use the SELF CRS (which this example does) then it will - 
<br>
not- use the BLCR component, but instead select the SELF component.
<br>
<p>Try using a simple counting program instead of that particular  
<br>
example. You could also just remove the opal_crs_self_user_* and  
<br>
my_personal_* functions form the example program to reduce it to one.
<br>
<p>I'm not sure why the checkpoint would not work even with the SELF CRS.  
<br>
I'll have to check on that.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - Do you have any environment variables/MCA parameters set for Open  
</span><br>
<span class="quotelev1">&gt; MPI?
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; yes
</span><br>
<span class="quotelev1">&gt;    $HOME/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt;    # Local snapshot directory (not used in this scenario)
</span><br>
<span class="quotelev1">&gt;    crs_base_snapshot_dir=${HOME}/temp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    # Remote snapshot directory (globally mounted file system))
</span><br>
<span class="quotelev1">&gt;    snapc_base_global_snapshot_dir=${HOME}/checkpoints
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - My network interconnects is Infiniband/OpenIB (IP over IB).
</span><br>
<p>These all look fine to me.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) If there are something for me to solve this problem, please let  
</span><br>
<span class="quotelev1">&gt; me know without any hesitation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you again for your reading
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 1, 2009 at 1:49 PM, Paul H. Hargrove  
</span><br>
<span class="quotelev1">&gt; &lt;PHHargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Thomas,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I connection with Josh's question about mpirun arguments, I suggest  
</span><br>
<span class="quotelev1">&gt; you try setting
</span><br>
<span class="quotelev1">&gt;    MPIRUN_CMD='mpirun -am ft-enable-cr -np %N %P %A'
</span><br>
<span class="quotelev1">&gt; in your environment before launching the GASNet application.  This  
</span><br>
<span class="quotelev1">&gt; will instruct GASNet's wrapper around mpirun to include the flag  
</span><br>
<span class="quotelev1">&gt; Josh mentioned.
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
<span class="quotelev1">&gt; Thomas,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not tried to use the checkpoint/restart feature with GASNet  
</span><br>
<span class="quotelev1">&gt; over MPI, so I cannot comment directly on how they interact.  
</span><br>
<span class="quotelev1">&gt; However, the combination should work as long as the proper arguments  
</span><br>
<span class="quotelev1">&gt; (-am ft-enable-cr) are passed along to the mpirun command, and Open  
</span><br>
<span class="quotelev1">&gt; MPI is configured properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error message that you copied seems to indicate that the local  
</span><br>
<span class="quotelev1">&gt; daemon on one of the nodes failed to start a checkpoint of the  
</span><br>
<span class="quotelev1">&gt; target application. Often this is caused by one of two things:
</span><br>
<span class="quotelev1">&gt;  - Open MPI was not configured with the fault tolerance thread, and  
</span><br>
<span class="quotelev1">&gt; the application is waiting for a long time in a computation loop  
</span><br>
<span class="quotelev1">&gt; (not entering the MPI library).
</span><br>
<span class="quotelev1">&gt;  - The '-am ft-enable-cr' flag was not provided to the mpirun  
</span><br>
<span class="quotelev1">&gt; process, so the MPI application did not activate the C/R specific  
</span><br>
<span class="quotelev1">&gt; code paths and is therefore denying the request to checkpoint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send me a bit more information:
</span><br>
<span class="quotelev1">&gt;  - What version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;  - How did you configure Open MPI?
</span><br>
<span class="quotelev1">&gt;  - What arguments are being passed to 'mpirun' when running with  
</span><br>
<span class="quotelev1">&gt; GASNet?
</span><br>
<span class="quotelev1">&gt;  - Do you have any environment variables/MCA parameters set for Open  
</span><br>
<span class="quotelev1">&gt; MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2009, at 7:13 PM, Thomas CI Yoon wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks to developers of OPEN-MPI for Fault-Tolerance, I can use the  
</span><br>
<span class="quotelev1">&gt; checkpoint/restart function very well for my MPI applications.
</span><br>
<span class="quotelev1">&gt; But its checkpoint does not work for my GASNet applications which  
</span><br>
<span class="quotelev1">&gt; use the MPI conduit.
</span><br>
<span class="quotelev1">&gt; Is here anyone else to help me?
</span><br>
<span class="quotelev1">&gt; I wrote some code with GASNet API (Global-Address Space Networking: <a href="http://gasnet.cs.berkeley.edu/">http://gasnet.cs.berkeley.edu/</a>) 
</span><br>
<span class="quotelev1">&gt;     and used MPI conduit for my gasnet application, so my program  
</span><br>
<span class="quotelev1">&gt; ran well with open-mpirun. Thus I thought that I could also use the  
</span><br>
<span class="quotelev1">&gt; transparent checkpoint/restart function supported by BLCR in Open- 
</span><br>
<span class="quotelev1">&gt; mpi. As opposed to my idea, it does not work and show the following  
</span><br>
<span class="quotelev1">&gt; error message.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The process with PID 13896 is not checkpointable.
</span><br>
<span class="quotelev1">&gt;       This could be due to one of the following:
</span><br>
<span class="quotelev1">&gt;        - An application with this PID doesn't currently exist
</span><br>
<span class="quotelev1">&gt;        - The application with this PID isn't checkpointable
</span><br>
<span class="quotelev1">&gt;        - The application with this PID isn't an OPAL application.
</span><br>
<span class="quotelev1">&gt;       We were looking for the named files:
</span><br>
<span class="quotelev1">&gt;         /tmp/opal_cr_prog_write.13896
</span><br>
<span class="quotelev1">&gt;         /tmp/opal_cr_prog_read.13896
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 1 more process has sent help message help-opal-checkpoint.txt
</span><br>
<span class="quotelev1">&gt; Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help
</span><br>
<span class="quotelev1">&gt;  0] 13896) Step 53
</span><br>
<span class="quotelev1">&gt;  0] 15100) Step 53
</span><br>
<span class="quotelev1">&gt;  0] 13896) Step 54
</span><br>
<span class="quotelev1">&gt;  0] 15100) Step 54
</span><br>
<span class="quotelev1">&gt;  0] 13896) Step 55
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my application, the MPI_Initialized() says it is initialized.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your reading and have a great day.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7214.php">Rainer Keller: "[OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5"</a>
<li><strong>Previous message:</strong> <a href="7212.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="7183.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7329.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
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
