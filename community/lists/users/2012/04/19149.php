<?
$subject_val = "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 27 10:41:44 2012" -->
<!-- isoreceived="20120427144144" -->
<!-- sent="Fri, 27 Apr 2012 16:41:23 +0200" -->
<!-- isosent="20120427144123" -->
<!-- name="R&#195;&#169;mi Palancher" -->
<!-- email="remi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)" -->
<!-- id="ca8312d3f333da5381e7d8f4c1bcb91c_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57oeYfE70T67dP7sj+6FB7VhqRAU4FzaTGs0gPrhxp__N0Q_at_mail.gmail.com" -->
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
<strong>From:</strong> R&#195;&#169;mi Palancher (<em>remi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-27 10:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19150.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Previous message:</strong> <a href="19148.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>In reply to:</strong> <a href="18916.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19150.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="19150.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi there,
<br>
<p>&nbsp;First, thank you for all your helpful answers!
<br>
<p>&nbsp;On Mon, 2 Apr 2012 20:30:37 -0700, Ralph Castain &lt;rhc_at_[hidden]&gt; 
<br>
&nbsp;wrote:
<br>
<span class="quotelev1">&gt; I'm afraid the 1.5 series doesn't offer any help in this regard. The
</span><br>
<span class="quotelev1">&gt; required changes only exist in the developers trunk, which will be
</span><br>
<span class="quotelev1">&gt; released as the 1.7 series in the not-too-distant future.
</span><br>
<p>&nbsp;I've tested the same use case with 1.5.5 and I obtain the exact same 
<br>
&nbsp;result than with 1.4.5. I confirm this version doesn't offer any help on 
<br>
&nbsp;this.
<br>
<p>&nbsp;I've also tested the last available snapshot 1.7a1r26338 of the trunk, 
<br>
&nbsp;but it seems to have 2 regressions:
<br>
<p>&nbsp;&nbsp;&nbsp;- when PSM enabled, undefined symbol error within mca_mtl_psm.so:
<br>
<p>&nbsp;$ mpirun -n 1 get-allowed-cpu-ompi
<br>
&nbsp;[cn0286:23252] mca: base: component_find: unable to open 
<br>
&nbsp;/home/H76170/openmpi/1.7a1r26338/lib/openmpi/mca_mtl_psm: 
<br>
&nbsp;/home/H76170/openmpi/1.7a1r26338/lib/openmpi/mca_mtl_psm.so: undefined 
<br>
&nbsp;symbol: ompi_mtl_psm_imrecv (ignored)
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;A requested component was not found, or was unable to be opened.  This
<br>
&nbsp;means that this component is either not installed or is unable to be
<br>
&nbsp;used on your system (e.g., sometimes this means that shared libraries
<br>
&nbsp;that the component requires are unable to be found/loaded).  Note that
<br>
&nbsp;Open MPI stopped checking at the first component that it did not find.
<br>
<p>&nbsp;Host:      cn0286
<br>
&nbsp;Framework: mtl
<br>
&nbsp;Component: psm
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;[cn0286:23252] mca: base: components_open: component pml / cm open 
<br>
&nbsp;function failed
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;No available pml components were found!
<br>
<p>&nbsp;This means that there are no components of this type installed on your
<br>
&nbsp;system or all the components reported that they could not be used.
<br>
<p>&nbsp;This is a fatal error; your MPI process is likely to abort.  Check the
<br>
&nbsp;output of the &quot;ompi_info&quot; command and ensure that components of this
<br>
&nbsp;type are available on your system.  You may also wish to check the
<br>
&nbsp;value of the &quot;component_path&quot; MCA parameter and ensure that it has at
<br>
&nbsp;least one directory that contains valid MCA components.
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;[cn0286:23252] PML cm cannot be selected
<br>
<p>&nbsp;&nbsp;&nbsp;- when disabling PSM support (in order to avoid previous error), 
<br>
&nbsp;binding to cores allocated by Slurm fails:
<br>
<p>&nbsp;$ salloc --qos=debug -N 2 -n 20
<br>
&nbsp;$ srun hostname | sort | uniq -c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12 cn0564
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 cn0565
<br>
&nbsp;$ module load openmpi_1.7a1r26338
<br>
&nbsp;$ unset OMPI_MCA_mtl OMPI_MCA_pml
<br>
&nbsp;$ mpicc -o get-allowed-cpu-ompi get-allowed-cpu.c
<br>
&nbsp;$ mpirun get-allowed-cpu-ompi
<br>
&nbsp;Launch (null) Task 12 of 20 (cn0565): 0-23
<br>
&nbsp;Launch (null) Task 13 of 20 (cn0565): 0-23
<br>
&nbsp;Launch (null) Task 14 of 20 (cn0565): 0-23
<br>
&nbsp;Launch (null) Task 15 of 20 (cn0565): 0-23
<br>
&nbsp;Launch (null) Task 16 of 20 (cn0565): 0-23
<br>
&nbsp;Launch (null) Task 17 of 20 (cn0565): 0-23
<br>
&nbsp;Launch (null) Task 18 of 20 (cn0565): 0-23
<br>
&nbsp;Launch (null) Task 19 of 20 (cn0565): 0-23
<br>
&nbsp;Launch (null) Task 07 of 20 (cn0564): 0-23
<br>
&nbsp;Launch (null) Task 08 of 20 (cn0564): 0-23
<br>
&nbsp;Launch (null) Task 09 of 20 (cn0564): 0-23
<br>
&nbsp;Launch (null) Task 10 of 20 (cn0564): 0-23
<br>
&nbsp;Launch (null) Task 11 of 20 (cn0564): 0-23
<br>
&nbsp;Launch (null) Task 00 of 20 (cn0564): 0-23
<br>
&nbsp;Launch (null) Task 01 of 20 (cn0564): 0-23
<br>
&nbsp;Launch (null) Task 02 of 20 (cn0564): 0-23
<br>
&nbsp;Launch (null) Task 03 of 20 (cn0564): 0-23
<br>
&nbsp;Launch (null) Task 04 of 20 (cn0564): 0-23
<br>
&nbsp;Launch (null) Task 05 of 20 (cn0564): 0-23
<br>
&nbsp;Launch (null) Task 06 of 20 (cn0564): 0-23
<br>
<p>&nbsp;FYI, I am using Slurm 2.3.3.
<br>
<p>&nbsp;Did I missed something with this trunk version?
<br>
<p>&nbsp;Do you want me to send the corresponding generated config.log, 
<br>
&nbsp;&quot;ompi_info&quot; and &quot;mpirun ompi full&quot;?
<br>
<p>&nbsp;Regards,
<br>
<pre>
-- 
 R&#195;&#169;mi Palancher
 <a href="http://rezib.org">http://rezib.org</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19150.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Previous message:</strong> <a href="19148.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>In reply to:</strong> <a href="18916.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19150.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="19150.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
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
