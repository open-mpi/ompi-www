<?
$subject_val = "Re: [OMPI devel] Segfault in 1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 17:28:12 2008" -->
<!-- isoreceived="20080715212812" -->
<!-- sent="Tue, 15 Jul 2008 17:27:54 -0400" -->
<!-- isosent="20080715212754" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Segfault in 1.3 branch" -->
<!-- id="6090B79F-51D8-43A6-97B4-11D88D8B5E02_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="487C9E2A.8030704_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-15 17:27:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4364.php">Mark Debbage: "[OMPI devel] Insufficient lockable memory leads to osu_bibw hang using OpenIB BTL"</a>
<li><strong>Previous message:</strong> <a href="4362.php">Jeff Squyres: "[OMPI devel] New trac milestone: v1.4"</a>
<li><strong>In reply to:</strong> <a href="4359.php">Rolf vandeVaart: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4361.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To be clear -- this looks like a different issue than what Pasha was  
<br>
reporting.
<br>
<p><p>On Jul 15, 2008, at 8:55 AM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny, I opened a ticket for something that looks the same as this.  
</span><br>
<span class="quotelev1">&gt; Maybe you can add your details to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1386">https://svn.open-mpi.org/trac/ompi/ticket/1386</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess it should be here, sorry.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_18850/bin/mpirun -np 2 -H  
</span><br>
<span class="quotelev2">&gt;&gt; witch2,witch3 ./IMB-MPI1_18850 PingPong
</span><br>
<span class="quotelev2">&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # Intel (R) MPI Benchmark Suite V3.0v modified by Voltaire, MPI-1  
</span><br>
<span class="quotelev2">&gt;&gt; part
</span><br>
<span class="quotelev2">&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # Date : Tue Jul 15 15:11:30 2008
</span><br>
<span class="quotelev2">&gt;&gt; # Machine : x86_64
</span><br>
<span class="quotelev2">&gt;&gt; # System : Linux
</span><br>
<span class="quotelev2">&gt;&gt; # Release : 2.6.16.46-0.12-smp
</span><br>
<span class="quotelev2">&gt;&gt; # Version : #1 SMP Thu May 17 14:00:09 UTC 2007
</span><br>
<span class="quotelev2">&gt;&gt; # MPI Version : 2.0
</span><br>
<span class="quotelev2">&gt;&gt; # MPI Thread Environment: MPI_THREAD_SINGLE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Minimum message length in bytes: 0
</span><br>
<span class="quotelev2">&gt;&gt; # Maximum message length in bytes: 67108864
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # MPI_Datatype : MPI_BYTE
</span><br>
<span class="quotelev2">&gt;&gt; # MPI_Datatype for reductions : MPI_FLOAT
</span><br>
<span class="quotelev2">&gt;&gt; # MPI_Op : MPI_SUM
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # List of Benchmarks to run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # PingPong
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] Failing at address: 0x20
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [ 0] /lib64/libpthread.so.0 [0x2b514fcedc10]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [ 1] /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1.so [0x2b51510b416a]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [ 2] /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1.so [0x2b51510b4661]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [ 3] /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1.so [0x2b51510b180e]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [ 4] /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib.so [0x2b5151811c22]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [ 5] /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib.so [0x2b51518132e9]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [ 6] /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_bml_r2.so [0x2b51512c412f]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [ 7] /home/USERS/lenny/OMPI_ORTE_18850/lib/libopen- 
</span><br>
<span class="quotelev2">&gt;&gt; pal.so.0(opal_progress+0x5a) [0x2b514f71268a]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [ 8] /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1.so [0x2b51510af0f5]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [ 9] /home/USERS/lenny/OMPI_ORTE_18850/lib/libmpi.so. 
</span><br>
<span class="quotelev2">&gt;&gt; 0(PMPI_Recv+0x13b) [0x2b514f47941b]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [10] ./IMB-MPI1_18850(IMB_pingpong+0x1a1) [0x4073cd]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [11] ./IMB-MPI1_18850(IMB_warm_up+0x2d) [0x405e49]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [12] ./IMB-MPI1_18850(main+0x394) [0x4034d4]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [13] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b514fe14154]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] [14] ./IMB-MPI1_18850 [0x4030a9]
</span><br>
<span class="quotelev2">&gt;&gt; [witch3:32461] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev2">&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  witch2
</span><br>
<span class="quotelev2">&gt;&gt;  witch3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/15/08, *Pavel Shamis (Pasha)* &lt;pasha_at_[hidden] &lt;mailto:pasha_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        It looks like a new issue to me, Pasha. Possibly a side
</span><br>
<span class="quotelev2">&gt;&gt;        consequence of the
</span><br>
<span class="quotelev2">&gt;&gt;        IOF change made by Jeff and I the other day. From what I can
</span><br>
<span class="quotelev2">&gt;&gt;        see, it looks
</span><br>
<span class="quotelev2">&gt;&gt;        like you app was a simple &quot;hello&quot; - correct?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Yep, it is simple hello application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        If you look at the error, the problem occurs when mpirun is
</span><br>
<span class="quotelev2">&gt;&gt;        trying to route
</span><br>
<span class="quotelev2">&gt;&gt;        a message. Since the app is clearly running at this time, the
</span><br>
<span class="quotelev2">&gt;&gt;        problem is
</span><br>
<span class="quotelev2">&gt;&gt;        probably in the IOF. The error message shows that mpirun is
</span><br>
<span class="quotelev2">&gt;&gt;        attempting to
</span><br>
<span class="quotelev2">&gt;&gt;        route a message to a jobid that doesn't exist. We have a test
</span><br>
<span class="quotelev2">&gt;&gt;        in the RML
</span><br>
<span class="quotelev2">&gt;&gt;        that forces an &quot;abort&quot; if that occurs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        I would guess that there is either a race condition or memory
</span><br>
<span class="quotelev2">&gt;&gt;        corruption
</span><br>
<span class="quotelev2">&gt;&gt;        occurring somewhere, but I have no idea where.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        This may be the &quot;new hole in the dyke&quot; I cautioned about in
</span><br>
<span class="quotelev2">&gt;&gt;        earlier notes
</span><br>
<span class="quotelev2">&gt;&gt;        regarding the IOF... :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Still, given that this hits rarely, it probably is a more
</span><br>
<span class="quotelev2">&gt;&gt;        acceptable bug to
</span><br>
<span class="quotelev2">&gt;&gt;        leave in the code than the one we just fixed (duplicated  
</span><br>
<span class="quotelev2">&gt;&gt; stdin)...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    It is not so rare issue, 19 failures in my MTT run
</span><br>
<span class="quotelev2">&gt;&gt;    (<a href="http://www.open-mpi.org/mtt/index.php?do_redir=765">http://www.open-mpi.org/mtt/index.php?do_redir=765</a>).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Pasha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        On 7/14/08 1:11 AM, &quot;Pavel Shamis (Pasha)&quot;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;pasha_at_[hidden] &lt;mailto:pasha_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Please see <a href="http://www.open-mpi.org/mtt/index.php?do_redir=764">http://www.open-mpi.org/mtt/index.php?do_redir=764</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            The error is not consistent. It takes a lot of iteration
</span><br>
<span class="quotelev2">&gt;&gt;            to reproduce it.
</span><br>
<span class="quotelev2">&gt;&gt;            In my MTT testing I seen it few times.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Is it know issue ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            Regards,
</span><br>
<span class="quotelev2">&gt;&gt;            Pasha
</span><br>
<span class="quotelev2">&gt;&gt;            _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;            devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;            devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;        devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;        devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4364.php">Mark Debbage: "[OMPI devel] Insufficient lockable memory leads to osu_bibw hang using OpenIB BTL"</a>
<li><strong>Previous message:</strong> <a href="4362.php">Jeff Squyres: "[OMPI devel] New trac milestone: v1.4"</a>
<li><strong>In reply to:</strong> <a href="4359.php">Rolf vandeVaart: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4361.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
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
