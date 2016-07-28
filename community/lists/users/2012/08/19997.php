<?
$subject_val = "Re: [OMPI users] application with mxm hangs on startup";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 05:06:20 2012" -->
<!-- isoreceived="20120824090620" -->
<!-- sent="Fri, 24 Aug 2012 12:05:54 +0300" -->
<!-- isosent="20120824090554" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] application with mxm hangs on startup" -->
<!-- id="CAL3GGtoF-Hr3h9CBYxzperLYSD1JY9JqyzjzD+7W708QUEhb5A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFamD4V9hQu7gVwCOXin5GNJKHDzseBa=pAakHxGbRJx96Eneg_at_mail.gmail.com" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 05:05:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19998.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
<li><strong>Previous message:</strong> <a href="19996.php">Jeff Squyres (jsquyres): "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="19982.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19998.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
<li><strong>Reply:</strong> <a href="19998.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Could you please download latest mxm from
<br>
<a href="http://www.mellanox.com/products/mxm/">http://www.mellanox.com/products/mxm/</a> and retry?
<br>
The mxm version which comes with OFED 1.5.3 was tested with OMPI 1.6.0.
<br>
<p>Regards
<br>
M
<br>
<p>On Wed, Aug 22, 2012 at 2:22 PM, Pavel Mezentsev
<br>
&lt;pavel.mezentsev_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I've tried to launch the application on nodes with QDR Infiniband. The
</span><br>
<span class="quotelev1">&gt; first attempt with 2 processes worked, but the following was printed to the
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev1">&gt; [1345633953.436676] [b01:2523 :0]     mpool.c:99   MXM ERROR Invalid
</span><br>
<span class="quotelev1">&gt; mempool parameter(s)
</span><br>
<span class="quotelev1">&gt; [1345633953.436676] [b01:2522 :0]     mpool.c:99   MXM ERROR Invalid
</span><br>
<span class="quotelev1">&gt; mempool parameter(s)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MXM was unable to create an endpoint. Please make sure that the network
</span><br>
<span class="quotelev1">&gt; link is
</span><br>
<span class="quotelev1">&gt; active on the node and the hardware is functioning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Error: Invalid parameter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The results from this launch didn't differ from the results of the launch
</span><br>
<span class="quotelev1">&gt; without MXM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I've tried to launch it with 256 processes, but got the same message
</span><br>
<span class="quotelev1">&gt; from each process and then the application crashed. After that I'm
</span><br>
<span class="quotelev1">&gt; observing the same behavior as with FDR: application hangs in
</span><br>
<span class="quotelev1">&gt; the beginning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards, Pavel Mezentsev.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/8/22 Pavel Mezentsev &lt;pavel.mezentsev_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've built openmpi 1.6.1rc3 with support of MXM. But when I try to launch
</span><br>
<span class="quotelev2">&gt;&gt; an application using this mtl it hangs and can't figure out why.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I launch it with np below 128 then everything works fine since mxm
</span><br>
<span class="quotelev2">&gt;&gt; isn't used. I've tried setting the threshold to 0 and launching 2 processes
</span><br>
<span class="quotelev2">&gt;&gt; with the same result: hangs on startup.
</span><br>
<span class="quotelev2">&gt;&gt; What could be causing this problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the command I execute:
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.6.1/mxm-test/bin/mpirun \
</span><br>
<span class="quotelev2">&gt;&gt;                 -np $NP \
</span><br>
<span class="quotelev2">&gt;&gt;                 -hostfile hosts_fdr2 \
</span><br>
<span class="quotelev2">&gt;&gt;                 --mca mtl mxm \
</span><br>
<span class="quotelev2">&gt;&gt;                 --mca btl ^tcp \
</span><br>
<span class="quotelev2">&gt;&gt;                 --mca mtl_mxm_np 0 \
</span><br>
<span class="quotelev2">&gt;&gt;                 -x OMP_NUM_THREADS=$NT \
</span><br>
<span class="quotelev2">&gt;&gt;                 -x LD_LIBRARY_PATH \
</span><br>
<span class="quotelev2">&gt;&gt;                 --bind-to-core \
</span><br>
<span class="quotelev2">&gt;&gt;                 -npernode 16 \
</span><br>
<span class="quotelev2">&gt;&gt;                 --mca coll_fca_np 0 -mca coll_fca_enable 0 \
</span><br>
<span class="quotelev2">&gt;&gt;                 ./IMB-MPI1 -npmin $NP Allreduce Reduce Barrier Bcast
</span><br>
<span class="quotelev2">&gt;&gt; Allgather Allgatherv
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm performing the tests on nodes with Intel SB processors and FDR.
</span><br>
<span class="quotelev2">&gt;&gt; Openmpi was configured with the following parameters:
</span><br>
<span class="quotelev2">&gt;&gt; CC=icc CXX=icpc F77=ifort FC=ifort ./configure
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/opt/openmpi/1.6.1rc3/mxm-test --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev2">&gt;&gt; --with-fca=/opt/mellanox/fca --with-knem=/usr/share/knem
</span><br>
<span class="quotelev2">&gt;&gt; I'm using the latest ofed from mellanox: 1.5.3-3.1.0 on centos 6.1 with
</span><br>
<span class="quotelev2">&gt;&gt; default kernel: 2.6.32-131.0.15.
</span><br>
<span class="quotelev2">&gt;&gt; The compilation with default mxm (1.0.601) failed so I installed the
</span><br>
<span class="quotelev2">&gt;&gt; latest version from mellanox: 1.1.1227
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards, Pavel Mezentsev.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19998.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
<li><strong>Previous message:</strong> <a href="19996.php">Jeff Squyres (jsquyres): "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="19982.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19998.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
<li><strong>Reply:</strong> <a href="19998.php">Pavel Mezentsev: "Re: [OMPI users] application with mxm hangs on startup"</a>
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
