<?
$subject_val = "Re: [OMPI users] application with mxm hangs on startup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 22 07:22:49 2012" -->
<!-- isoreceived="20120822112249" -->
<!-- sent="Wed, 22 Aug 2012 15:22:44 +0400" -->
<!-- isosent="20120822112244" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] application with mxm hangs on startup" -->
<!-- id="CAFamD4V9hQu7gVwCOXin5GNJKHDzseBa=pAakHxGbRJx96Eneg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFamD4W0i7A4MMXH_9LN74ruBGVyGuXH1=hEG-aOaz48PGWA6w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] application with mxm hangs on startup<br>
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-22 07:22:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19983.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="19981.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="19980.php">Pavel Mezentsev: "[OMPI users] application with mxm hangs on startup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19997.php">Mike Dubman: "Re: [OMPI users] application with mxm hangs on startup"</a>
<li><strong>Reply:</strong> <a href="19997.php">Mike Dubman: "Re: [OMPI users] application with mxm hangs on startup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've tried to launch the application on nodes with QDR Infiniband. The
<br>
first attempt with 2 processes worked, but the following was printed to the
<br>
output:
<br>
[1345633953.436676] [b01:2523 :0]     mpool.c:99   MXM ERROR Invalid
<br>
mempool parameter(s)
<br>
[1345633953.436676] [b01:2522 :0]     mpool.c:99   MXM ERROR Invalid
<br>
mempool parameter(s)
<br>
--------------------------------------------------------------------------
<br>
MXM was unable to create an endpoint. Please make sure that the network
<br>
link is
<br>
active on the node and the hardware is functioning.
<br>
<p>&nbsp;&nbsp;Error: Invalid parameter
<br>
<p>--------------------------------------------------------------------------
<br>
<p>The results from this launch didn't differ from the results of the launch
<br>
without MXM.
<br>
<p>Then I've tried to launch it with 256 processes, but got the same message
<br>
from each process and then the application crashed. After that I'm
<br>
observing the same behavior as with FDR: application hangs in
<br>
the beginning.
<br>
<p>Best regards, Pavel Mezentsev.
<br>
<p><p>2012/8/22 Pavel Mezentsev &lt;pavel.mezentsev_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've built openmpi 1.6.1rc3 with support of MXM. But when I try to launch
</span><br>
<span class="quotelev1">&gt; an application using this mtl it hangs and can't figure out why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I launch it with np below 128 then everything works fine since mxm
</span><br>
<span class="quotelev1">&gt; isn't used. I've tried setting the threshold to 0 and launching 2 processes
</span><br>
<span class="quotelev1">&gt; with the same result: hangs on startup.
</span><br>
<span class="quotelev1">&gt; What could be causing this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the command I execute:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.6.1/mxm-test/bin/mpirun \
</span><br>
<span class="quotelev1">&gt;                 -np $NP \
</span><br>
<span class="quotelev1">&gt;                 -hostfile hosts_fdr2 \
</span><br>
<span class="quotelev1">&gt;                 --mca mtl mxm \
</span><br>
<span class="quotelev1">&gt;                 --mca btl ^tcp \
</span><br>
<span class="quotelev1">&gt;                 --mca mtl_mxm_np 0 \
</span><br>
<span class="quotelev1">&gt;                 -x OMP_NUM_THREADS=$NT \
</span><br>
<span class="quotelev1">&gt;                 -x LD_LIBRARY_PATH \
</span><br>
<span class="quotelev1">&gt;                 --bind-to-core \
</span><br>
<span class="quotelev1">&gt;                 -npernode 16 \
</span><br>
<span class="quotelev1">&gt;                 --mca coll_fca_np 0 -mca coll_fca_enable 0 \
</span><br>
<span class="quotelev1">&gt;                 ./IMB-MPI1 -npmin $NP Allreduce Reduce Barrier Bcast
</span><br>
<span class="quotelev1">&gt; Allgather Allgatherv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm performing the tests on nodes with Intel SB processors and FDR.
</span><br>
<span class="quotelev1">&gt; Openmpi was configured with the following parameters:
</span><br>
<span class="quotelev1">&gt; CC=icc CXX=icpc F77=ifort FC=ifort ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi/1.6.1rc3/mxm-test --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev1">&gt; --with-fca=/opt/mellanox/fca --with-knem=/usr/share/knem
</span><br>
<span class="quotelev1">&gt; I'm using the latest ofed from mellanox: 1.5.3-3.1.0 on centos 6.1 with
</span><br>
<span class="quotelev1">&gt; default kernel: 2.6.32-131.0.15.
</span><br>
<span class="quotelev1">&gt; The compilation with default mxm (1.0.601) failed so I installed the
</span><br>
<span class="quotelev1">&gt; latest version from mellanox: 1.1.1227
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards, Pavel Mezentsev.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19982/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19983.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="19981.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="19980.php">Pavel Mezentsev: "[OMPI users] application with mxm hangs on startup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19997.php">Mike Dubman: "Re: [OMPI users] application with mxm hangs on startup"</a>
<li><strong>Reply:</strong> <a href="19997.php">Mike Dubman: "Re: [OMPI users] application with mxm hangs on startup"</a>
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
