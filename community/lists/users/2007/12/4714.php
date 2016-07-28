<?
$subject_val = "Re: [OMPI users] Torque and OpenMPI 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 12:57:53 2007" -->
<!-- isoreceived="20071218175753" -->
<!-- sent="Tue, 18 Dec 2007 12:57:41 -0500" -->
<!-- isosent="20071218175741" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2" -->
<!-- id="200712181257.42081.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF12118A15.D8D9FD56-ON862573B5.00613623-862573B5.0061D559_at_exxonmobil.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Torque and OpenMPI 1.2<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 12:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4715.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4713.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4713.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4715.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4715.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI v1.2 had some problems with the TM configuration code which was fixed 
<br>
in v1.2.1. So any version v1.2.1 or later should work fine (and, as you 
<br>
indicate, 1.2.4 works fine).
<br>
<p>Tim
<br>
<p>On Tuesday 18 December 2007 12:48:40 pm pat.o'bryant_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;     Here is the result of the &quot;pbs-config&quot;. By the way, I have successfully
</span><br>
<span class="quotelev1">&gt; built OpenMPI 1.2.4 on this same system. The &quot;config.log&quot; for OpenMPI 1.2.4
</span><br>
<span class="quotelev1">&gt; shows the correct Torque path. That is not surprising since the &quot;configure&quot;
</span><br>
<span class="quotelev1">&gt; script for OpenMPI 1.2.4 uses &quot;pbs-config&quot; while the configure script for
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2 does not.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;----------------------------------------- # pbs-config --libs
</span><br>
<span class="quotelev1">&gt; -L/usr/local/pbs/x86_64/lib -ltorque -Wl,--rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/local/pbs/x86_64/lib
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;-----------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Now, to address your concern about the nodes, my users are not &quot;adding
</span><br>
<span class="quotelev1">&gt; nodes&quot; to those provided by Torque. They are using a &quot;proper subset&quot; of the
</span><br>
<span class="quotelev1">&gt; nodes.  Also,  I believe I read this comment on the OpenMPI web site which
</span><br>
<span class="quotelev1">&gt; seems to imply an oversight as far as the &quot;-hostfile&quot; is concerned.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;----------------------------------------- Can I specify a hostfile or use
</span><br>
<span class="quotelev1">&gt; the --host option to mpirun when running in a Torque / PBS environment?
</span><br>
<span class="quotelev1">&gt; As of version v1.2.1, no.
</span><br>
<span class="quotelev1">&gt; Open MPI will fail to launch processes properly when a hostfile is specifed
</span><br>
<span class="quotelev1">&gt; on the mpirun command line, or if the mpirun [--host] option is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're working on correcting the error. A future version of Open MPI will
</span><br>
<span class="quotelev1">&gt; likely launch on the hosts specified either in the hostfile or via the
</span><br>
<span class="quotelev1">&gt; --host option as long as they are a proper subset of the hosts allocated to
</span><br>
<span class="quotelev1">&gt; the Torque / PBS Pro job.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;----------------------------------------- Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; J.W. (Pat) O'Bryant,Jr.
</span><br>
<span class="quotelev1">&gt; Business Line Infrastructure
</span><br>
<span class="quotelev1">&gt; Technical Systems, HPC
</span><br>
<span class="quotelev1">&gt; Office: 713-431-7022
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4715.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4713.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4713.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4715.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4715.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
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
