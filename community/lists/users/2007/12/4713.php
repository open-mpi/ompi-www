<?
$subject_val = "Re: [OMPI users] Torque and OpenMPI 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 12:48:46 2007" -->
<!-- isoreceived="20071218174846" -->
<!-- sent="Tue, 18 Dec 2007 11:48:40 -0600" -->
<!-- isosent="20071218174840" -->
<!-- name="pat.o'bryant_at_[hidden]" -->
<!-- email="pat.o'bryant_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2" -->
<!-- id="OF12118A15.D8D9FD56-ON862573B5.00613623-862573B5.0061D559_at_exxonmobil.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] Torque and OpenMPI 1.2" -->
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
<strong>From:</strong> <a href="mailto:pat.o'bryant_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Torque%20and%20OpenMPI%201.2"><em>pat.o'bryant_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-12-18 12:48:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4714.php">Tim Prins: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4712.php">Jeff Squyres: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="4700.php">pat.o'bryant_at_[hidden]: "[OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4714.php">Tim Prins: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4714.php">Tim Prins: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Here is the result of the &quot;pbs-config&quot;. By the way, I have successfully
<br>
built OpenMPI 1.2.4 on this same system. The &quot;config.log&quot; for OpenMPI 1.2.4
<br>
shows the correct Torque path. That is not surprising since the &quot;configure&quot;
<br>
script for OpenMPI 1.2.4 uses &quot;pbs-config&quot; while the configure script for
<br>
OpenMPI 1.2 does not.
<br>
--------------------------------------------------------------------------------------------------------------------
<br>
# pbs-config --libs
<br>
-L/usr/local/pbs/x86_64/lib -ltorque -Wl,--rpath
<br>
-Wl,/usr/local/pbs/x86_64/lib
<br>
--------------------------------------------------------------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Now, to address your concern about the nodes, my users are not &quot;adding
<br>
nodes&quot; to those provided by Torque. They are using a &quot;proper subset&quot; of the
<br>
nodes.  Also,  I believe I read this comment on the OpenMPI web site which
<br>
seems to imply an oversight as far as the &quot;-hostfile&quot; is concerned.
<br>
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
Can I specify a hostfile or use the --host option to mpirun when running in
<br>
a Torque / PBS environment?
<br>
As of version v1.2.1, no.
<br>
Open MPI will fail to launch processes properly when a hostfile is specifed
<br>
on the mpirun command line, or if the mpirun [--host] option is used.
<br>
<p><p>We're working on correcting the error. A future version of Open MPI will
<br>
likely launch on the hosts specified either in the hostfile or via the
<br>
--host option as long as they are a proper subset of the hosts allocated to
<br>
the Torque / PBS Pro job.
<br>
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
Thanks,
<br>
<p>J.W. (Pat) O'Bryant,Jr.
<br>
Business Line Infrastructure
<br>
Technical Systems, HPC
<br>
Office: 713-431-7022
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4714.php">Tim Prins: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4712.php">Jeff Squyres: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="4700.php">pat.o'bryant_at_[hidden]: "[OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4714.php">Tim Prins: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4714.php">Tim Prins: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
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
