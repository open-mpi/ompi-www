<?
$subject_val = "Re: [OMPI users] application with mxm hangs on startup";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 10:14:02 2012" -->
<!-- isoreceived="20120824141402" -->
<!-- sent="Fri, 24 Aug 2012 18:13:57 +0400" -->
<!-- isosent="20120824141357" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] application with mxm hangs on startup" -->
<!-- id="CAFamD4WBGkJw08z5qfObM1YqB0u5MdoiUM5uemXHg=VfZ15ciw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL3GGtoF-Hr3h9CBYxzperLYSD1JY9JqyzjzD+7W708QUEhb5A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-08-24 10:13:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19999.php">Brock Palen: "[OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>Previous message:</strong> <a href="19997.php">Mike Dubman: "Re: [OMPI users] application with mxm hangs on startup"</a>
<li><strong>In reply to:</strong> <a href="19997.php">Mike Dubman: "Re: [OMPI users] application with mxm hangs on startup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have the latest version installed: 1.1.1227.
<br>
And the version which initially came with latest mellanox ofed is 1.0.601.
<br>
And openmpi fails to get built with this version.
<br>
<p>I have certain progress. I managed to launch the application with openmpi
<br>
1.6.0.
<br>
But from time to time I get errors. The error occur more often as the
<br>
number of processes grows.
<br>
Here is what I get:
<br>
MXM was unable to create an endpoint. Please make sure that the network
<br>
link is
<br>
active on the node and the hardware is functioning.
<br>
<p>&nbsp;&nbsp;Error: Shared memory error
<br>
<p>--------------------------------------------------------------------------
<br>
[1345812628.431295] [b23:8172 :0] shm_queue.c:285  MXM ERROR Slave proccess
<br>
cannot obtain shared memory segment id.
<br>
[1345812628.431322] [b23:8172 :0]    shm_ep.c:133  MXM ERROR Unable to
<br>
attach endpoint
<br>
[b23:08172] [[12734,1],10] selected pml ob1, but peer [[12734,1],0] on b23
<br>
selected pml cm
<br>
<p><p>And apart from the errors the performance with mxm is pretty disappointing.
<br>
Out of 6 collectives (Allreduce Reduce Barrier Bcast Allgather Allgatherv)
<br>
only reduce shows better performance on large messages. At what scale
<br>
should the situation change? By default mxm starts working on 128
<br>
processes. But even on 256 the results with mxm are worse then with usual
<br>
openib,sm,self. Am I missing something? May be I need to tune something?
<br>
It's just that there is pretty little information on the subject except for
<br>
readme on mellanox web site.
<br>
<p>I've tried performing the tests on two configurations:
<br>
16 nodes with Intel SB processors and fdr infiniband
<br>
10 nodes with AMD Interlagos and qdr infiniband.
<br>
<p>Regards, Pavel Mezentsev.
<br>
<p><p><p><p>2012/8/24 Mike Dubman &lt;mike.ompi_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Could you please download latest mxm from
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mellanox.com/products/mxm/">http://www.mellanox.com/products/mxm/</a> and retry?
</span><br>
<span class="quotelev1">&gt; The mxm version which comes with OFED 1.5.3 was tested with OMPI 1.6.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 22, 2012 at 2:22 PM, Pavel Mezentsev &lt;
</span><br>
<span class="quotelev1">&gt; pavel.mezentsev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried to launch the application on nodes with QDR Infiniband. The
</span><br>
<span class="quotelev2">&gt;&gt; first attempt with 2 processes worked, but the following was printed to the
</span><br>
<span class="quotelev2">&gt;&gt; output:
</span><br>
<span class="quotelev2">&gt;&gt; [1345633953.436676] [b01:2523 :0]     mpool.c:99   MXM ERROR Invalid
</span><br>
<span class="quotelev2">&gt;&gt; mempool parameter(s)
</span><br>
<span class="quotelev2">&gt;&gt; [1345633953.436676] [b01:2522 :0]     mpool.c:99   MXM ERROR Invalid
</span><br>
<span class="quotelev2">&gt;&gt; mempool parameter(s)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; MXM was unable to create an endpoint. Please make sure that the network
</span><br>
<span class="quotelev2">&gt;&gt; link is
</span><br>
<span class="quotelev2">&gt;&gt; active on the node and the hardware is functioning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Error: Invalid parameter
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The results from this launch didn't differ from the results of the launch
</span><br>
<span class="quotelev2">&gt;&gt; without MXM.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then I've tried to launch it with 256 processes, but got the same message
</span><br>
<span class="quotelev2">&gt;&gt; from each process and then the application crashed. After that I'm
</span><br>
<span class="quotelev2">&gt;&gt; observing the same behavior as with FDR: application hangs in
</span><br>
<span class="quotelev2">&gt;&gt; the beginning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards, Pavel Mezentsev.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2012/8/22 Pavel Mezentsev &lt;pavel.mezentsev_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've built openmpi 1.6.1rc3 with support of MXM. But when I try to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch an application using this mtl it hangs and can't figure out why.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I launch it with np below 128 then everything works fine since mxm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isn't used. I've tried setting the threshold to 0 and launching 2 processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the same result: hangs on startup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What could be causing this problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the command I execute:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/1.6.1/mxm-test/bin/mpirun \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 -np $NP \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 -hostfile hosts_fdr2 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 --mca mtl mxm \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 --mca btl ^tcp \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 --mca mtl_mxm_np 0 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 -x OMP_NUM_THREADS=$NT \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 -x LD_LIBRARY_PATH \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 --bind-to-core \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 -npernode 16 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 --mca coll_fca_np 0 -mca coll_fca_enable 0 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ./IMB-MPI1 -npmin $NP Allreduce Reduce Barrier Bcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Allgather Allgatherv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm performing the tests on nodes with Intel SB processors and FDR.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Openmpi was configured with the following parameters:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=icc CXX=icpc F77=ifort FC=ifort ./configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/opt/openmpi/1.6.1rc3/mxm-test --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-fca=/opt/mellanox/fca --with-knem=/usr/share/knem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using the latest ofed from mellanox: 1.5.3-3.1.0 on centos 6.1 with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default kernel: 2.6.32-131.0.15.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The compilation with default mxm (1.0.601) failed so I installed the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latest version from mellanox: 1.1.1227
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards, Pavel Mezentsev.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19998/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19999.php">Brock Palen: "[OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>Previous message:</strong> <a href="19997.php">Mike Dubman: "Re: [OMPI users] application with mxm hangs on startup"</a>
<li><strong>In reply to:</strong> <a href="19997.php">Mike Dubman: "Re: [OMPI users] application with mxm hangs on startup"</a>
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
