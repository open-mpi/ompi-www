<?
$subject_val = "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 27 10:56:23 2012" -->
<!-- isoreceived="20120427145623" -->
<!-- sent="Fri, 27 Apr 2012 08:56:15 -0600" -->
<!-- isosent="20120427145615" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)" -->
<!-- id="03B793B5-F2A0-4D2B-8459-4BCD657501B5_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="ca8312d3f333da5381e7d8f4c1bcb91c_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-27 10:56:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19151.php">Jens Glaser: "[OMPI users] Multithreading applications with OMPI 1.7"</a>
<li><strong>Previous message:</strong> <a href="19149.php">R&#195;&#169;mi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>In reply to:</strong> <a href="19149.php">R&#195;&#169;mi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19167.php">Rémi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19167.php">Rémi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Couple of things:
<br>
<p>1. please do send the output from ompi_info
<br>
<p>2. please send the slurm envars from your allocation - i.e., after you do your salloc.
<br>
<p>Are you sure that slurm is actually &quot;binding&quot; us during this launch? If you just srun your get-allowed-cpu, what does it show? I'm wondering if it just gets reflected in the allocation envar and not actually binding the orteds.
<br>
<p><p>On Apr 27, 2012, at 8:41 AM, R&#233;mi Palancher wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, thank you for all your helpful answers!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 2 Apr 2012 20:30:37 -0700, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid the 1.5 series doesn't offer any help in this regard. The
</span><br>
<span class="quotelev2">&gt;&gt; required changes only exist in the developers trunk, which will be
</span><br>
<span class="quotelev2">&gt;&gt; released as the 1.7 series in the not-too-distant future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tested the same use case with 1.5.5 and I obtain the exact same result than with 1.4.5. I confirm this version doesn't offer any help on this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've also tested the last available snapshot 1.7a1r26338 of the trunk, but it seems to have 2 regressions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - when PSM enabled, undefined symbol error within mca_mtl_psm.so:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 1 get-allowed-cpu-ompi
</span><br>
<span class="quotelev1">&gt; [cn0286:23252] mca: base: component_find: unable to open /home/H76170/openmpi/1.7a1r26338/lib/openmpi/mca_mtl_psm: /home/H76170/openmpi/1.7a1r26338/lib/openmpi/mca_mtl_psm.so: undefined symbol: ompi_mtl_psm_imrecv (ignored)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host:      cn0286
</span><br>
<span class="quotelev1">&gt; Framework: mtl
</span><br>
<span class="quotelev1">&gt; Component: psm
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [cn0286:23252] mca: base: components_open: component pml / cm open function failed
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No available pml components were found!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This means that there are no components of this type installed on your
</span><br>
<span class="quotelev1">&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a fatal error; your MPI process is likely to abort.  Check the
</span><br>
<span class="quotelev1">&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev1">&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev1">&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has at
</span><br>
<span class="quotelev1">&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [cn0286:23252] PML cm cannot be selected
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - when disabling PSM support (in order to avoid previous error), binding to cores allocated by Slurm fails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ salloc --qos=debug -N 2 -n 20
</span><br>
<span class="quotelev1">&gt; $ srun hostname | sort | uniq -c
</span><br>
<span class="quotelev1">&gt;     12 cn0564
</span><br>
<span class="quotelev1">&gt;      8 cn0565
</span><br>
<span class="quotelev1">&gt; $ module load openmpi_1.7a1r26338
</span><br>
<span class="quotelev1">&gt; $ unset OMPI_MCA_mtl OMPI_MCA_pml
</span><br>
<span class="quotelev1">&gt; $ mpicc -o get-allowed-cpu-ompi get-allowed-cpu.c
</span><br>
<span class="quotelev1">&gt; $ mpirun get-allowed-cpu-ompi
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 12 of 20 (cn0565): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 13 of 20 (cn0565): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 14 of 20 (cn0565): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 15 of 20 (cn0565): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 16 of 20 (cn0565): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 17 of 20 (cn0565): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 18 of 20 (cn0565): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 19 of 20 (cn0565): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 07 of 20 (cn0564): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 08 of 20 (cn0564): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 09 of 20 (cn0564): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 10 of 20 (cn0564): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 11 of 20 (cn0564): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 00 of 20 (cn0564): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 01 of 20 (cn0564): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 02 of 20 (cn0564): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 03 of 20 (cn0564): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 04 of 20 (cn0564): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 05 of 20 (cn0564): 0-23
</span><br>
<span class="quotelev1">&gt; Launch (null) Task 06 of 20 (cn0564): 0-23
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI, I am using Slurm 2.3.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did I missed something with this trunk version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you want me to send the corresponding generated config.log, &quot;ompi_info&quot; and &quot;mpirun ompi full&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; R&#233;mi Palancher
</span><br>
<span class="quotelev1">&gt; <a href="http://rezib.org">http://rezib.org</a>
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
<li><strong>Next message:</strong> <a href="19151.php">Jens Glaser: "[OMPI users] Multithreading applications with OMPI 1.7"</a>
<li><strong>Previous message:</strong> <a href="19149.php">R&#195;&#169;mi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>In reply to:</strong> <a href="19149.php">R&#195;&#169;mi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19167.php">Rémi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19167.php">Rémi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
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
