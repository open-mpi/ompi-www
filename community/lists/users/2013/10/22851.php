<?
$subject_val = "Re: [OMPI users] Odd and long error with OpenMPI and OpenFOAM.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 27 10:13:49 2013" -->
<!-- isoreceived="20131027141349" -->
<!-- sent="Sun, 27 Oct 2013 07:13:45 -0700" -->
<!-- isosent="20131027141345" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Odd and long error with OpenMPI and OpenFOAM." -->
<!-- id="6CD2427B-7657-4441-A9E8-B19AC9089DC0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DUB111-W103F52EFFC83CDEE9356E3DD40F0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Odd and long error with OpenMPI and OpenFOAM.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-27 10:13:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22852.php">Luis Kornblueh: "[OMPI users] RDMA question"</a>
<li><strong>Previous message:</strong> <a href="22850.php">Tommi Laiho: "[OMPI users] Odd and long error with OpenMPI and OpenFOAM."</a>
<li><strong>In reply to:</strong> <a href="22850.php">Tommi Laiho: "[OMPI users] Odd and long error with OpenMPI and OpenFOAM."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please look at the following:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>Note that you also need to add your OpenFOAM installation to the LD_LIBRARY_PATH.
<br>
<p><p>On Oct 27, 2013, at 5:48 AM, Tommi Laiho &lt;tommilaiho_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been trying to setup Open MPI with OpenFOAM211. I have compiled the Open MPI by myself but it went very smoothly so I guess the compilation went correctly. However I am not a true expert of the field.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have bridged modem having different IP's with different machines right now. I should at first connect two computers with Open MPI in order to run 14 cores with OpenFOAM 211. The OpenFOAM 211 is same version now in both computers which I will call as master and slave and also OpenMPI is same in both computers. This time master machine is CAELinux Ubuntu 10.04 LTS and slave is Ubuntu Studio 12.04 LTS. I have read many articles and also FAQ but now I cant progress any more by myself, I need some help. Thank you for understanding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So when I run this code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.6.5/bin/mpirun -hostfile /home/tommi2/Desktop/machinefile -np 14 /opt/openfoam211/platforms/linux*/bin/pisoFoam -parallel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and give a password for my slave machine I will get this long, very long error by OpenFOAM211 and Open MPI. In order to be honest I don't fully understand its whole meaning. Here is goes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openfoam211/platforms/linux64GccDPOpt/bin/pisoFoam: error while loading shared libraries: libincompressibleTurbulenceModel.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; /opt/openfoam211/platforms/linux64GccDPOpt/bin/pisoFoam: error while loading shared libraries: libincompressibleTurbulenceModel.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; /opt/openfoam211/platforms/linux64GccDPOpt/bin/pisoFoam: error while loading shared libraries: libincompressibleTurbulenceModel.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; /opt/openfoam211/platforms/linux64GccDPOpt/bin/pisoFoam: error while loading shared libraries: libincompressibleTurbulenceModel.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; /opt/openfoam211/platforms/linux64GccDPOpt/bin/pisoFoam: error while loading shared libraries: libincompressibleTurbulenceModel.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; /opt/openfoam211/platforms/linux64GccDPOpt/bin/pisoFoam: error while loading shared libraries: libincompressibleTurbulenceModel.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; /opt/openfoam211/platforms/linux64GccDPOpt/bin/pisoFoam: error while loading shared libraries: libincompressibleTurbulenceModel.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; [caelinux:05633] [[49395,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../orte/util/nidmap.c at line 371
</span><br>
<span class="quotelev1">&gt; [caelinux:05633] [[49395,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../orte/mca/ess/base/ess_base_nidmap.c at line 62
</span><br>
<span class="quotelev1">&gt; [caelinux:05633] [[49395,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 173
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; orte_ess_base_build_nidmap failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value Data unpack would read past end of buffer (-26) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value Data unpack would read past end of buffer (-26) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [caelinux:05633] [[49395,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [caelinux:5633] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [caelinux:5634] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [caelinux:05634] [[49395,1],3] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../orte/util/nidmap.c at line 371
</span><br>
<span class="quotelev1">&gt; [caelinux:05634] [[49395,1],3] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../orte/mca/ess/base/ess_base_nidmap.c at line 62
</span><br>
<span class="quotelev1">&gt; [caelinux:05634] [[49395,1],3] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 173
</span><br>
<span class="quotelev1">&gt; [caelinux:05634] [[49395,1],3] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [caelinux:05635] [[49395,1],5] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../orte/util/nidmap.c at line 371
</span><br>
<span class="quotelev1">&gt; [caelinux:05635] [[49395,1],5] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../orte/mca/ess/base/ess_base_nidmap.c at line 62
</span><br>
<span class="quotelev1">&gt; [caelinux:05635] [[49395,1],5] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 173
</span><br>
<span class="quotelev1">&gt; [caelinux:05635] [[49395,1],5] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [caelinux:5635] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [caelinux:05636] [[49395,1],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../orte/util/nidmap.c at line 371
</span><br>
<span class="quotelev1">&gt; [caelinux:05636] [[49395,1],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../orte/mca/ess/base/ess_base_nidmap.c at line 62
</span><br>
<span class="quotelev1">&gt; [caelinux:05636] [[49395,1],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 173
</span><br>
<span class="quotelev1">&gt; [caelinux:05636] [[49395,1],7] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [caelinux:5636] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 5633 on
</span><br>
<span class="quotelev1">&gt; node caelinux exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [caelinux:05630] 3 more processes have sent help message help-orte-runtime.txt / orte_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; [caelinux:05630] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [caelinux:05630] 3 more processes have sent help message help-orte-runtime / orte_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I will also give my OpenFOAM decomposeParDict setup for 14 cores:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*--------------------------------*- C++ -*----------------------------------*\
</span><br>
<span class="quotelev1">&gt; | ========= | |
</span><br>
<span class="quotelev1">&gt; | \\ / F ield | OpenFOAM Extend Project: Open Source CFD |
</span><br>
<span class="quotelev1">&gt; | \\ / O peration | Version: 1.6-ext |
</span><br>
<span class="quotelev1">&gt; | \\ / A nd | Web: www.extend-project.de |
</span><br>
<span class="quotelev1">&gt; | \\/ M anipulation | |
</span><br>
<span class="quotelev1">&gt; \*---------------------------------------------------------------------------*/
</span><br>
<span class="quotelev1">&gt; FoamFile
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; version 2.0;
</span><br>
<span class="quotelev1">&gt; format ascii;
</span><br>
<span class="quotelev1">&gt; class dictionary;
</span><br>
<span class="quotelev1">&gt; object decomposeParDict;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * //
</span><br>
<span class="quotelev1">&gt; numberOfSubdomains 14;
</span><br>
<span class="quotelev1">&gt; method hierarchical;
</span><br>
<span class="quotelev1">&gt; //method metis;
</span><br>
<span class="quotelev1">&gt; //method parMetis;
</span><br>
<span class="quotelev1">&gt; simpleCoeffs
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; n (4 1 1);
</span><br>
<span class="quotelev1">&gt; delta 0.001;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; hierarchicalCoeffs
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; n (14 1 1);
</span><br>
<span class="quotelev1">&gt; delta 0.001;
</span><br>
<span class="quotelev1">&gt; order xyz;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; manualCoeffs
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; dataFile &quot;cellDecomposition&quot;;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; metisCoeffs
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; //n (5 1 1);
</span><br>
<span class="quotelev1">&gt; //cellWeightsFile &quot;constant/cellWeightsFile&quot;;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; // ************************************************************************* //
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; just in case there is a fault in that. Please help me I am totally confused and thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22851/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22852.php">Luis Kornblueh: "[OMPI users] RDMA question"</a>
<li><strong>Previous message:</strong> <a href="22850.php">Tommi Laiho: "[OMPI users] Odd and long error with OpenMPI and OpenFOAM."</a>
<li><strong>In reply to:</strong> <a href="22850.php">Tommi Laiho: "[OMPI users] Odd and long error with OpenMPI and OpenFOAM."</a>
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
