<?
$subject_val = "Re: [OMPI devel] Segfault in 1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 08:26:10 2008" -->
<!-- isoreceived="20080715122610" -->
<!-- sent="Tue, 15 Jul 2008 15:26:05 +0300" -->
<!-- isosent="20080715122605" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Segfault in 1.3 branch" -->
<!-- id="453d39990807150526y681849edpada1c7ade4df1e8a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="487C3F55.2020008_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Segfault in 1.3 branch<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-15 08:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4359.php">Rolf vandeVaart: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4357.php">Lenny Verkhovsky: "[OMPI devel] r18850 seqv"</a>
<li><strong>In reply to:</strong> <a href="4351.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4359.php">Rolf vandeVaart: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="4359.php">Rolf vandeVaart: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess it should be here, sorry.
<br>
<p>/home/USERS/lenny/OMPI_ORTE_18850/bin/mpirun -np 2 -H witch2,witch3
<br>
./IMB-MPI1_18850 PingPong
<br>
#---------------------------------------------------
<br>
# Intel (R) MPI Benchmark Suite V3.0v modified by Voltaire, MPI-1 part
<br>
#---------------------------------------------------
<br>
# Date : Tue Jul 15 15:11:30 2008
<br>
# Machine : x86_64
<br>
# System : Linux
<br>
# Release : 2.6.16.46-0.12-smp
<br>
# Version : #1 SMP Thu May 17 14:00:09 UTC 2007
<br>
# MPI Version : 2.0
<br>
# MPI Thread Environment: MPI_THREAD_SINGLE
<br>
<p>#
<br>
# Minimum message length in bytes: 0
<br>
# Maximum message length in bytes: 67108864
<br>
#
<br>
# MPI_Datatype : MPI_BYTE
<br>
# MPI_Datatype for reductions : MPI_FLOAT
<br>
# MPI_Op : MPI_SUM
<br>
#
<br>
#
<br>
<p># List of Benchmarks to run:
<br>
<p># PingPong
<br>
[witch3:32461] *** Process received signal ***
<br>
[witch3:32461] Signal: Segmentation fault (11)
<br>
[witch3:32461] Signal code: Address not mapped (1)
<br>
[witch3:32461] Failing at address: 0x20
<br>
[witch3:32461] [ 0] /lib64/libpthread.so.0 [0x2b514fcedc10]
<br>
[witch3:32461] [ 1]
<br>
/home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_pml_ob1.so
<br>
[0x2b51510b416a]
<br>
[witch3:32461] [ 2]
<br>
/home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_pml_ob1.so
<br>
[0x2b51510b4661]
<br>
[witch3:32461] [ 3]
<br>
/home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_pml_ob1.so
<br>
[0x2b51510b180e]
<br>
[witch3:32461] [ 4]
<br>
/home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_btl_openib.so
<br>
[0x2b5151811c22]
<br>
[witch3:32461] [ 5]
<br>
/home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_btl_openib.so
<br>
[0x2b51518132e9]
<br>
[witch3:32461] [ 6]
<br>
/home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_bml_r2.so [0x2b51512c412f]
<br>
[witch3:32461] [ 7]
<br>
/home/USERS/lenny/OMPI_ORTE_18850/lib/libopen-pal.so.0(opal_progress+0x5a)
<br>
[0x2b514f71268a]
<br>
[witch3:32461] [ 8]
<br>
/home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_pml_ob1.so
<br>
[0x2b51510af0f5]
<br>
[witch3:32461] [ 9]
<br>
/home/USERS/lenny/OMPI_ORTE_18850/lib/libmpi.so.0(PMPI_Recv+0x13b)
<br>
[0x2b514f47941b]
<br>
[witch3:32461] [10] ./IMB-MPI1_18850(IMB_pingpong+0x1a1) [0x4073cd]
<br>
[witch3:32461] [11] ./IMB-MPI1_18850(IMB_warm_up+0x2d) [0x405e49]
<br>
[witch3:32461] [12] ./IMB-MPI1_18850(main+0x394) [0x4034d4]
<br>
[witch3:32461] [13] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x2b514fe14154]
<br>
[witch3:32461] [14] ./IMB-MPI1_18850 [0x4030a9]
<br>
[witch3:32461] *** End of error message ***
<br>
mpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;witch2
<br>
&nbsp;&nbsp;witch3
<br>
<p><p>On 7/15/08, Pavel Shamis (Pasha) &lt;pasha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  It looks like a new issue to me, Pasha. Possibly a side consequence of the
</span><br>
<span class="quotelev2">&gt;&gt; IOF change made by Jeff and I the other day. From what I can see, it looks
</span><br>
<span class="quotelev2">&gt;&gt; like you app was a simple &quot;hello&quot; - correct?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yep, it is simple hello application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you look at the error, the problem occurs when mpirun is trying to
</span><br>
<span class="quotelev2">&gt;&gt; route
</span><br>
<span class="quotelev2">&gt;&gt; a message. Since the app is clearly running at this time, the problem is
</span><br>
<span class="quotelev2">&gt;&gt; probably in the IOF. The error message shows that mpirun is attempting to
</span><br>
<span class="quotelev2">&gt;&gt; route a message to a jobid that doesn't exist. We have a test in the RML
</span><br>
<span class="quotelev2">&gt;&gt; that forces an &quot;abort&quot; if that occurs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would guess that there is either a race condition or memory corruption
</span><br>
<span class="quotelev2">&gt;&gt; occurring somewhere, but I have no idea where.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be the &quot;new hole in the dyke&quot; I cautioned about in earlier notes
</span><br>
<span class="quotelev2">&gt;&gt; regarding the IOF... :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Still, given that this hits rarely, it probably is a more acceptable bug
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; leave in the code than the one we just fixed (duplicated stdin)...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It is not so rare issue, 19 failures in my MTT run (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mtt/index.php?do_redir=765">http://www.open-mpi.org/mtt/index.php?do_redir=765</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/14/08 1:11 AM, &quot;Pavel Shamis (Pasha)&quot; &lt;pasha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please see <a href="http://www.open-mpi.org/mtt/index.php?do_redir=764">http://www.open-mpi.org/mtt/index.php?do_redir=764</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error is not consistent. It takes a lot of iteration to reproduce it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my MTT testing I seen it few times.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it know issue ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4358/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4359.php">Rolf vandeVaart: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4357.php">Lenny Verkhovsky: "[OMPI devel] r18850 seqv"</a>
<li><strong>In reply to:</strong> <a href="4351.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4359.php">Rolf vandeVaart: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="4359.php">Rolf vandeVaart: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
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
