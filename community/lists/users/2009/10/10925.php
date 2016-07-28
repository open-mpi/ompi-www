<?
$subject_val = "Re: [OMPI users] mpirun failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 18 06:07:04 2009" -->
<!-- isoreceived="20091018100704" -->
<!-- sent="Sun, 18 Oct 2009 12:03:53 +0200" -->
<!-- isosent="20091018100353" -->
<!-- name="Oswald Benedikt" -->
<!-- email="Benedikt.Oswald_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun failure" -->
<!-- id="0C9CAFE8C4E5CA49884E636AE1D7CD690358D880_at_MAILBOX0B.psi.ch" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0EF4BACC-48BD-444D-BF8C-1AF7D062CFB5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun failure<br>
<strong>From:</strong> Oswald Benedikt (<em>Benedikt.Oswald_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-18 06:03:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10926.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun failure"</a>
<li><strong>Previous message:</strong> <a href="10924.php">Ralph Castain: "Re: [OMPI users] mpirun failure"</a>
<li><strong>In reply to:</strong> <a href="10924.php">Ralph Castain: "Re: [OMPI users] mpirun failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10926.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun failure"</a>
<li><strong>Reply:</strong> <a href="10926.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, thanks, that's what puzzled  when I saw the reference to 1.3, but the LD_LIBRARY_PATH was set to point
<br>
to the respective version, i.e. 1.3.2 or 1.3.3 and the 1.3 executables were not in the PATH.
<br>
<p>Are there any other env variables or . files that need to be set ?
<br>
<p>Benedikt
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] on behalf of Ralph Castain
<br>
Sent: Sun 18.10.2009 6:04
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] mpirun failure
<br>
&nbsp;
<br>
Looks to me like you may be picking up an earlier version when you  
<br>
launch. At least, when I look at the error message, it says that it  
<br>
came from a file in the openmpi-1.3 directory tree. Yet you say you  
<br>
installed 1.3.2 and 1.3.3.
<br>
<p>Any chance your ld_library_path is pointing at the older version?
<br>
<p><p>On Oct 17, 2009, at 11:29 AM, Oswald Benedikt wrote:
<br>
<p><span class="quotelev1">&gt; Dear open-mpi users / developers, maybe this problem has been  
</span><br>
<span class="quotelev1">&gt; treated before but at least I can not find it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried both open mpi 1.3.2 and 1.3.3 on Mac OS X (10.5.8).  
</span><br>
<span class="quotelev1">&gt; Compilation and installation of openmpi
</span><br>
<span class="quotelev1">&gt; works well, also compilation and linking of users applications.  
</span><br>
<span class="quotelev1">&gt; However, when I want to start an application
</span><br>
<span class="quotelev1">&gt; with mpirun, it crashes, both for open mpi 1.3.3. and 1.3.2 as  
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; benedikt-oswalds-macbook-pro:mieScatteringDispersive benediktoswald$  
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ../../../hades3d/hades3d --option- 
</span><br>
<span class="quotelev1">&gt; file=mieScatteringDispersive.job
</span><br>
<span class="quotelev1">&gt; [benedikt-oswalds-macbook-pro.local:50793] [[7314,1],0]  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-1.3/orte/ 
</span><br>
<span class="quotelev1">&gt; mca/ess/env/ess_env_module.c at line 235
</span><br>
<span class="quotelev1">&gt; [benedikt-oswalds-macbook-pro.local:50793] [[7314,1],0]  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-1.3/orte/ 
</span><br>
<span class="quotelev1">&gt; mca/ess/env/ess_env_module.c at line 261
</span><br>
<span class="quotelev1">&gt; [benedikt-oswalds-macbook-pro.local:50794] [[7314,1],1]  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Value out of bounds in file ../../../../openmpi-1.3/ 
</span><br>
<span class="quotelev1">&gt; orte/mca/ess/base/ess_base_nidmap.c at line 153
</span><br>
<span class="quotelev1">&gt; [benedikt-oswalds-macbook-pro.local:50794] [[7314,1],1]  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-1.3/orte/ 
</span><br>
<span class="quotelev1">&gt; mca/ess/env/ess_env_module.c at line 235
</span><br>
<span class="quotelev1">&gt; [benedikt-oswalds-macbook-pro.local:50794] [[7314,1],1]  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Value out of bounds in file ../../../../openmpi-1.3/ 
</span><br>
<span class="quotelev1">&gt; orte/mca/ess/base/ess_base_nidmap.c at line 153
</span><br>
<span class="quotelev1">&gt; [benedikt-oswalds-macbook-pro.local:50794] [[7314,1],1]  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-1.3/orte/ 
</span><br>
<span class="quotelev1">&gt; mca/ess/env/ess_env_module.c at line 261
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_grpcomm_modex failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [benedikt-oswalds-macbook-pro.local:50794] Abort before MPI_INIT  
</span><br>
<span class="quotelev1">&gt; completed successfully; not able to guarantee that all other  
</span><br>
<span class="quotelev1">&gt; processes were killed!
</span><br>
<span class="quotelev1">&gt; [benedikt-oswalds-macbook-pro.local:50794] [[7314,1],1]  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-1.3/orte/ 
</span><br>
<span class="quotelev1">&gt; mca/ess/env/ess_env_module.c at line 297
</span><br>
<span class="quotelev1">&gt; [benedikt-oswalds-macbook-pro.local:50794] [[7314,1],1]  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file ../../../../../openmpi-1.3/orte/ 
</span><br>
<span class="quotelev1">&gt; mca/grpcomm/bad/grpcomm_bad_module.c at line 559
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 50794 on
</span><br>
<span class="quotelev1">&gt; node benedikt-oswalds-macbook-pro.local exiting without calling  
</span><br>
<span class="quotelev1">&gt; &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone comment on this ? Is this a basic installation or path  
</span><br>
<span class="quotelev1">&gt; problem ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi 1.3 does not show this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Benedikt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Benedikt Oswald, Dr. sc. techn., dipl. El. Ing. ETH, www.psi.ch,  
</span><br>
<span class="quotelev1">&gt; Computational Accelerator Scientist
</span><br>
<span class="quotelev1">&gt; Paul Scherrer  Institute (PSI), CH-5232 Villigen, Suisse, benedikt.oswald_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; , +41(0)56 310 32 12
</span><br>
<span class="quotelev1">&gt; &quot;Passion is required for any great work, and for the Revolution  
</span><br>
<span class="quotelev1">&gt; passion and audacity are required in big doses.&quot;,
</span><br>
<span class="quotelev1">&gt; Ernesto 'Che' Guevara, Letter to his parents.
</span><br>
<span class="quotelev1">&gt; <a href="http://maxwell.psi.ch/amaswiki/index.php/User:BenediktOswald">http://maxwell.psi.ch/amaswiki/index.php/User:BenediktOswald</a>
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>
<br><hr>
<ul>
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10925/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10926.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun failure"</a>
<li><strong>Previous message:</strong> <a href="10924.php">Ralph Castain: "Re: [OMPI users] mpirun failure"</a>
<li><strong>In reply to:</strong> <a href="10924.php">Ralph Castain: "Re: [OMPI users] mpirun failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10926.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun failure"</a>
<li><strong>Reply:</strong> <a href="10926.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun failure"</a>
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
