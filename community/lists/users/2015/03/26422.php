<?
$subject_val = "Re: [OMPI users] understanding BTL selection process";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 18:23:01 2015" -->
<!-- isoreceived="20150302232301" -->
<!-- sent="Mon, 02 Mar 2015 16:22:50 -0700" -->
<!-- isosent="20150302232250" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] understanding BTL selection process" -->
<!-- id="54F4F0CA.6000208_at_byu.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54F4D956.7060201_at_byu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] understanding BTL selection process<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-02 18:22:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26423.php">Siegmar Gross: "[OMPI users] some warnings for openmpi-dev-1184-gbb22d26"</a>
<li><strong>Previous message:</strong> <a href="26421.php">Lloyd Brown: "[OMPI users] understanding BTL selection process"</a>
<li><strong>In reply to:</strong> <a href="26421.php">Lloyd Brown: "[OMPI users] understanding BTL selection process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As much as I hate to reply to myself, I'm going to in this case.
<br>
<p>Digging deeper into the old OS image (I found a couple of nodes that I
<br>
forgot to image), it looks like libibverbs and librdmacm were, in fact
<br>
installed.  That explains how the previous image was able to avoid the
<br>
&quot;cannot open shared object file&quot; messages.
<br>
<p>My current theory is that somewhere between the (very) old version of
<br>
librdmacm on the old image, and the new version on the new image, that
<br>
there was a change that started to emit the &quot;librdmacm: Fatal: no RDMA
<br>
devices found&quot; messages.
<br>
<p>All of this implies that the difference is related to something that
<br>
happened with librdmacm, not something that changed in OpenMPI.  Sorry
<br>
for the list noise.
<br>
<p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 03/02/2015 02:42 PM, Lloyd Brown wrote:
<br>
<span class="quotelev1">&gt; I hope this isn't too basic of a question, but is there a document
</span><br>
<span class="quotelev1">&gt; somewhere that describes how the selection of which BTL components (eg.
</span><br>
<span class="quotelev1">&gt; openib, tcp) to use occurs when mpirun/mpiexec is launched?  I know it
</span><br>
<span class="quotelev1">&gt; can be influenced by conf files, parameters, and env variables.  But
</span><br>
<span class="quotelev1">&gt; lacking those, how does it choose which components to use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to diagnose an issue involving OpenMPI, OFED, and an OS
</span><br>
<span class="quotelev1">&gt; upgrade.  I'm hoping that better understanding of how components are
</span><br>
<span class="quotelev1">&gt; selected, will help me figure out what changed with the OS upgrade.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a longer explanation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We recently upgraded our HPC cluster from RHEL 6.2 to 6.6.  We have
</span><br>
<span class="quotelev1">&gt; several versions of OpenMPI availale from a central NFS store.  Our
</span><br>
<span class="quotelev1">&gt; cluster has some nodes with IB hardware, and some without.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the old OS image, we did not install any of the OFED components on
</span><br>
<span class="quotelev1">&gt; the non-IB nodes, and OpenMPI was able to somehow figure out that it
</span><br>
<span class="quotelev1">&gt; shouldn't even try the openib btl, without any runtime warnings.  We got
</span><br>
<span class="quotelev1">&gt; the speeds we were expecting, when running osu_bw tests from the OMB
</span><br>
<span class="quotelev1">&gt; test suite, for either the IB nodes (about 3800 MB/s for 4xQDR IB), or
</span><br>
<span class="quotelev1">&gt; the non-IB nodes (about 115 MB/s for 1GbE).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since the OS upgrade, we start to get warnings like this on non-IB nodes
</span><br>
<span class="quotelev1">&gt; without OFED installed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 hello_world
</span><br>
<span class="quotelev2">&gt;&gt; [m7stage-1-1:09962] mca: base: component_find: unable to open /apps/openmpi/1.6.3_gnu-4.4/lib/openmpi/mca_btl_ofud: librdmacm.so.1: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [m7stage-1-1:09961] mca: base: component_find: unable to open /apps/openmpi/1.6.3_gnu-4.4/lib/openmpi/mca_btl_ofud: librdmacm.so.1: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [m7stage-1-1:09961] mca: base: component_find: unable to open /apps/openmpi/1.6.3_gnu-4.4/lib/openmpi/mca_btl_openib: librdmacm.so.1: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [m7stage-1-1:09962] mca: base: component_find: unable to open /apps/openmpi/1.6.3_gnu-4.4/lib/openmpi/mca_btl_openib: librdmacm.so.1: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process # 0 of 2 on host m7stage-1-1
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process # 1 of 2 on host m7stage-1-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Obviously these are references to software components associated with
</span><br>
<span class="quotelev1">&gt; OFED.  We can install OFED on the non-IB nodes, but then we get warnings
</span><br>
<span class="quotelev1">&gt; more like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 hello_world
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm: Fatal: no RDMA devices found
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm: Fatal: no RDMA devices found
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [[63448,1],0]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev2">&gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev2">&gt;&gt;   Host: m7stage-1-1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process # 0 of 2 on host m7stage-1-1
</span><br>
<span class="quotelev2">&gt;&gt; Hello from process # 1 of 2 on host m7stage-1-1
</span><br>
<span class="quotelev2">&gt;&gt; [m7stage-1-1:18753] 1 more process has sent help message help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev2">&gt;&gt; [m7stage-1-1:18753] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Obviously we can work with this by using &quot;--mca btl ^openib&quot; or similar
</span><br>
<span class="quotelev1">&gt; on the non-IB nodes.  And we're pursuing that option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I'm struggling to understand what happened to cause OpenMPI on the
</span><br>
<span class="quotelev1">&gt; non-IB node, without OFED installed, to no longer be able to figure out
</span><br>
<span class="quotelev1">&gt; that it shouldn't use the openib btl.  Thus the reason why I ask for
</span><br>
<span class="quotelev1">&gt; more information about how that decision is being made.  Maybe that will
</span><br>
<span class="quotelev1">&gt; clue me in, as to what changed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26423.php">Siegmar Gross: "[OMPI users] some warnings for openmpi-dev-1184-gbb22d26"</a>
<li><strong>Previous message:</strong> <a href="26421.php">Lloyd Brown: "[OMPI users] understanding BTL selection process"</a>
<li><strong>In reply to:</strong> <a href="26421.php">Lloyd Brown: "[OMPI users] understanding BTL selection process"</a>
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
