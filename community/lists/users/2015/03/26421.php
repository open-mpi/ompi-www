<?
$subject_val = "[OMPI users] understanding BTL selection process";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 16:42:56 2015" -->
<!-- isoreceived="20150302214256" -->
<!-- sent="Mon, 02 Mar 2015 14:42:46 -0700" -->
<!-- isosent="20150302214246" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="[OMPI users] understanding BTL selection process" -->
<!-- id="54F4D956.7060201_at_byu.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] understanding BTL selection process<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-02 16:42:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26422.php">Lloyd Brown: "Re: [OMPI users] understanding BTL selection process"</a>
<li><strong>Previous message:</strong> <a href="26420.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26422.php">Lloyd Brown: "Re: [OMPI users] understanding BTL selection process"</a>
<li><strong>Reply:</strong> <a href="26422.php">Lloyd Brown: "Re: [OMPI users] understanding BTL selection process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I hope this isn't too basic of a question, but is there a document
<br>
somewhere that describes how the selection of which BTL components (eg.
<br>
openib, tcp) to use occurs when mpirun/mpiexec is launched?  I know it
<br>
can be influenced by conf files, parameters, and env variables.  But
<br>
lacking those, how does it choose which components to use?
<br>
<p>I'm trying to diagnose an issue involving OpenMPI, OFED, and an OS
<br>
upgrade.  I'm hoping that better understanding of how components are
<br>
selected, will help me figure out what changed with the OS upgrade.
<br>
<p><p><p><p>Here's a longer explanation.
<br>
<p>We recently upgraded our HPC cluster from RHEL 6.2 to 6.6.  We have
<br>
several versions of OpenMPI availale from a central NFS store.  Our
<br>
cluster has some nodes with IB hardware, and some without.
<br>
<p>On the old OS image, we did not install any of the OFED components on
<br>
the non-IB nodes, and OpenMPI was able to somehow figure out that it
<br>
shouldn't even try the openib btl, without any runtime warnings.  We got
<br>
the speeds we were expecting, when running osu_bw tests from the OMB
<br>
test suite, for either the IB nodes (about 3800 MB/s for 4xQDR IB), or
<br>
the non-IB nodes (about 115 MB/s for 1GbE).
<br>
<p>Since the OS upgrade, we start to get warnings like this on non-IB nodes
<br>
without OFED installed:
<br>
<p><span class="quotelev1">&gt; $ mpirun -np 2 hello_world
</span><br>
<span class="quotelev1">&gt; [m7stage-1-1:09962] mca: base: component_find: unable to open /apps/openmpi/1.6.3_gnu-4.4/lib/openmpi/mca_btl_ofud: librdmacm.so.1: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [m7stage-1-1:09961] mca: base: component_find: unable to open /apps/openmpi/1.6.3_gnu-4.4/lib/openmpi/mca_btl_ofud: librdmacm.so.1: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [m7stage-1-1:09961] mca: base: component_find: unable to open /apps/openmpi/1.6.3_gnu-4.4/lib/openmpi/mca_btl_openib: librdmacm.so.1: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [m7stage-1-1:09962] mca: base: component_find: unable to open /apps/openmpi/1.6.3_gnu-4.4/lib/openmpi/mca_btl_openib: librdmacm.so.1: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; Hello from process # 0 of 2 on host m7stage-1-1
</span><br>
<span class="quotelev1">&gt; Hello from process # 1 of 2 on host m7stage-1-1
</span><br>
<p>Obviously these are references to software components associated with
<br>
OFED.  We can install OFED on the non-IB nodes, but then we get warnings
<br>
more like this:
<br>
<p><span class="quotelev1">&gt; $ mpirun -np 2 hello_world
</span><br>
<span class="quotelev1">&gt; librdmacm: Fatal: no RDMA devices found
</span><br>
<span class="quotelev1">&gt; librdmacm: Fatal: no RDMA devices found
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [[63448,1],0]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev1">&gt;   Host: m7stage-1-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hello from process # 0 of 2 on host m7stage-1-1
</span><br>
<span class="quotelev1">&gt; Hello from process # 1 of 2 on host m7stage-1-1
</span><br>
<span class="quotelev1">&gt; [m7stage-1-1:18753] 1 more process has sent help message help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev1">&gt; [m7stage-1-1:18753] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<p>Obviously we can work with this by using &quot;--mca btl ^openib&quot; or similar
<br>
on the non-IB nodes.  And we're pursuing that option.
<br>
<p>But I'm struggling to understand what happened to cause OpenMPI on the
<br>
non-IB node, without OFED installed, to no longer be able to figure out
<br>
that it shouldn't use the openib btl.  Thus the reason why I ask for
<br>
more information about how that decision is being made.  Maybe that will
<br>
clue me in, as to what changed.
<br>
<p><p><p>Thanks,
<br>
<p><pre>
-- 
Lloyd Brown
Systems Administrator
Fulton Supercomputing Lab
Brigham Young University
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26422.php">Lloyd Brown: "Re: [OMPI users] understanding BTL selection process"</a>
<li><strong>Previous message:</strong> <a href="26420.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26422.php">Lloyd Brown: "Re: [OMPI users] understanding BTL selection process"</a>
<li><strong>Reply:</strong> <a href="26422.php">Lloyd Brown: "Re: [OMPI users] understanding BTL selection process"</a>
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
