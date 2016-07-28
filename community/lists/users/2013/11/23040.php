<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 23 18:27:20 2013" -->
<!-- isoreceived="20131123232720" -->
<!-- sent="Sat, 23 Nov 2013 23:27:06 +0000" -->
<!-- isosent="20131123232706" -->
<!-- name="Teranishi, Keita" -->
<!-- email="knteran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?" -->
<!-- id="CEB6781B.45D39%knteran_at_sandia.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="05980381-8892-428E-8217-F826CCFFB08C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?<br>
<strong>From:</strong> Teranishi, Keita (<em>knteran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-23 18:27:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23041.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23039.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23037.php">Ralph Castain: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23041.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23041.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23057.php">David Whitaker: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is the module environment, and I allocate interactive node by &quot;qsub -I -lmppwidth=32 -lmppnppn=16.&quot;
<br>
module list
<br>
Currently Loaded Modulefiles:
<br>
&nbsp;&nbsp;1) modules/3.2.6.7
<br>
&nbsp;&nbsp;2) craype-network-gemini
<br>
&nbsp;&nbsp;3) cray-mpich2/5.6.4
<br>
&nbsp;&nbsp;4) atp/1.6.3
<br>
&nbsp;&nbsp;5) xe-sysroot/4.1.40
<br>
&nbsp;&nbsp;6) switch/1.0-1.0401.36779.2.72.gem
<br>
&nbsp;&nbsp;7) shared-root/1.0-1.0401.37253.3.50.gem
<br>
&nbsp;&nbsp;8) pdsh/2.26-1.0401.37449.1.1.gem
<br>
&nbsp;&nbsp;9) nodehealth/5.0-1.0401.38460.12.18.gem
<br>
&nbsp;10) lbcd/2.1-1.0401.35360.1.2.gem
<br>
&nbsp;11) hosts/1.0-1.0401.35364.1.115.gem
<br>
&nbsp;12) configuration/1.0-1.0401.35391.1.2.gem
<br>
&nbsp;13) ccm/2.2.0-1.0401.37254.2.142
<br>
&nbsp;14) audit/1.0.0-1.0401.37969.2.32.gem
<br>
&nbsp;15) rca/1.0.0-2.0401.38656.2.2.gem
<br>
&nbsp;16) dvs/1.8.6_0.9.0-1.0401.1401.1.120
<br>
&nbsp;17) csa/3.0.0-1_2.0401.37452.4.50.gem
<br>
&nbsp;18) job/1.5.5-0.1_2.0401.35380.1.10.gem
<br>
&nbsp;19) xpmem/0.1-2.0401.36790.4.3.gem
<br>
&nbsp;20) gni-headers/2.1-1.0401.5675.4.4.gem
<br>
&nbsp;21) dmapp/3.2.1-1.0401.5983.4.5.gem
<br>
&nbsp;22) pmi/4.0.1-1.0000.9421.73.3.gem
<br>
&nbsp;23) ugni/4.0-1.0401.5928.9.5.gem
<br>
&nbsp;24) udreg/2.3.2-1.0401.5929.3.3.gem
<br>
&nbsp;25) xt-libsci/12.0.00
<br>
&nbsp;26) xt-totalview/8.12.0
<br>
&nbsp;27) totalview-support/1.1.5
<br>
&nbsp;28) gcc/4.7.2
<br>
&nbsp;29) xt-asyncpe/5.22
<br>
&nbsp;30) eswrap/1.0.8
<br>
&nbsp;31) craype-mc8
<br>
&nbsp;32) PrgEnv-gnu/4.1.40
<br>
&nbsp;33) moab/5.4.4
<br>
<p><p>In interactive mode (as well as batch mode), &quot;aprun &#150;np 32&quot; can run my OpenMPI code.
<br>
aprun -n 32 ./cpi
<br>
Process 5 of 32 is on nid00015
<br>
Process 7 of 32 is on nid00015
<br>
Process 2 of 32 is on nid00015
<br>
Process 0 of 32 is on nid00015
<br>
Process 13 of 32 is on nid00015
<br>
Process 10 of 32 is on nid00015
<br>
Process 3 of 32 is on nid00015
<br>
Process 1 of 32 is on nid00015
<br>
Process 6 of 32 is on nid00015
<br>
Process 4 of 32 is on nid00015
<br>
Process 15 of 32 is on nid00015
<br>
Process 9 of 32 is on nid00015
<br>
Process 12 of 32 is on nid00015
<br>
Process 8 of 32 is on nid00015
<br>
Process 11 of 32 is on nid00015
<br>
Process 14 of 32 is on nid00015
<br>
Process 29 of 32 is on nid00014
<br>
Process 22 of 32 is on nid00014
<br>
Process 17 of 32 is on nid00014
<br>
Process 28 of 32 is on nid00014
<br>
Process 31 of 32 is on nid00014
<br>
Process 26 of 32 is on nid00014
<br>
Process 30 of 32 is on nid00014
<br>
Process 16 of 32 is on nid00014
<br>
Process 25 of 32 is on nid00014
<br>
Process 24 of 32 is on nid00014
<br>
Process 21 of 32 is on nid00014
<br>
Process 20 of 32 is on nid00014
<br>
Process 27 of 32 is on nid00014
<br>
Process 19 of 32 is on nid00014
<br>
Process 18 of 32 is on nid00014
<br>
Process 23 of 32 is on nid00014
<br>
pi is approximately 3.1415926544231265, Error is 0.0000000008333334
<br>
wall clock time = 0.004645
<br>
<p><p>Here is what I have with openmpi.
<br>
mpiexec --bind-to-core  --mca plm_base_strip_prefix_from_node_names 0 -np 32 ./cpi
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 32 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;./cpi
<br>
<p>Either request fewer slots for your application, or make more slots available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>From: Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
<br>
Reply-To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Date: Saturday, November 23, 2013 2:27 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: [EXTERNAL] Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?
<br>
<p>My guess is that you aren't doing the allocation correctly - since you are using qsub, can I assume you have Moab as your scheduler?
<br>
<p>aprun should be forwarding the envars - do you see them if you just run &quot;aprun -n 1 printenv&quot;?
<br>
<p>On Nov 23, 2013, at 2:13 PM, Teranishi, Keita &lt;knteran_at_[hidden]&lt;mailto:knteran_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi,
<br>
<p>I installed OpenMPI on our small XE6 using the configure options under /contrib directory.  It appears it is working fine, but it ignores MCA parameters (set in env var).  So I switched to mpirun (in OpenMPI) and it can handle MCA parameters somehow.  However,  mpirun fails to allocate process by cores.  For example, I allocated 32 cores (on 2 nodes) by &quot;qsub &#150;lmppwidth=32 &#150;lmppnppn=16&quot;, mpirun recognizes it as 2 slots.    Is it possible to mpirun to handle mluticore nodes of XE6 properly or is there any options to handle MCA parameters for aprun?
<br>
<p>Regards,
<br>
-----------------------------------------------------------------------------
<br>
Keita Teranishi
<br>
Principal Member of Technical Staff
<br>
Scalable Modeling and Analysis Systems
<br>
Sandia National Laboratories
<br>
Livermore, CA 94551
<br>
+1 (925) 294-3738
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23040/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23041.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23039.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23037.php">Ralph Castain: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23041.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23041.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23057.php">David Whitaker: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
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
