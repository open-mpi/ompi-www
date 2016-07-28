<?
$subject_val = "[OMPI users] application with mxm hangs on startup";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 22:04:44 2012" -->
<!-- isoreceived="20120822020444" -->
<!-- sent="Wed, 22 Aug 2012 06:04:31 +0400" -->
<!-- isosent="20120822020431" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="[OMPI users] application with mxm hangs on startup" -->
<!-- id="CAFamD4W0i7A4MMXH_9LN74ruBGVyGuXH1=hEG-aOaz48PGWA6w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] application with mxm hangs on startup<br>
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-21 22:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19981.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="19979.php">Iliev, Hristo: "Re: [OMPI users] Measuring latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19982.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
<li><strong>Reply:</strong> <a href="19982.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I've built openmpi 1.6.1rc3 with support of MXM. But when I try to launch
<br>
an application using this mtl it hangs and can't figure out why.
<br>
<p>If I launch it with np below 128 then everything works fine since mxm isn't
<br>
used. I've tried setting the threshold to 0 and launching 2 processes with
<br>
the same result: hangs on startup.
<br>
What could be causing this problem?
<br>
<p>Here is the command I execute:
<br>
/opt/openmpi/1.6.1/mxm-test/bin/mpirun \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np $NP \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-hostfile hosts_fdr2 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca mtl mxm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca btl ^tcp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca mtl_mxm_np 0 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-x OMP_NUM_THREADS=$NT \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-x LD_LIBRARY_PATH \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bind-to-core \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-npernode 16 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca coll_fca_np 0 -mca coll_fca_enable 0 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./IMB-MPI1 -npmin $NP Allreduce Reduce Barrier Bcast
<br>
Allgather Allgatherv
<br>
<p>I'm performing the tests on nodes with Intel SB processors and FDR. Openmpi
<br>
was configured with the following parameters:
<br>
CC=icc CXX=icpc F77=ifort FC=ifort ./configure
<br>
--prefix=/opt/openmpi/1.6.1rc3/mxm-test --with-mxm=/opt/mellanox/mxm
<br>
--with-fca=/opt/mellanox/fca --with-knem=/usr/share/knem
<br>
I'm using the latest ofed from mellanox: 1.5.3-3.1.0 on centos 6.1 with
<br>
default kernel: 2.6.32-131.0.15.
<br>
The compilation with default mxm (1.0.601) failed so I installed the latest
<br>
version from mellanox: 1.1.1227
<br>
<p>Best regards, Pavel Mezentsev.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19980/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19981.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="19979.php">Iliev, Hristo: "Re: [OMPI users] Measuring latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19982.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
<li><strong>Reply:</strong> <a href="19982.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
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
