<?
$subject_val = "Re: [OMPI devel] Segfault in 1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 08:50:24 2008" -->
<!-- isoreceived="20080715125024" -->
<!-- sent="Tue, 15 Jul 2008 08:55:06 -0400" -->
<!-- isosent="20080715125506" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Segfault in 1.3 branch" -->
<!-- id="487C9E2A.8030704_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990807150526y681849edpada1c7ade4df1e8a_at_mail.gmail.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-15 08:55:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4360.php">Andrew Friedley: "Re: [OMPI devel] ompi_ignore dr pml?"</a>
<li><strong>Previous message:</strong> <a href="4358.php">Lenny Verkhovsky: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4358.php">Lenny Verkhovsky: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4363.php">Jeff Squyres: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="4363.php">Jeff Squyres: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny, I opened a ticket for something that looks the same as this. 
<br>
Maybe you can add your details to it.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/1386">https://svn.open-mpi.org/trac/ompi/ticket/1386</a>
<br>
<p>Rolf
<br>
<p>Lenny Verkhovsky wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess it should be here, sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_18850/bin/mpirun -np 2 -H witch2,witch3 
</span><br>
<span class="quotelev1">&gt; ./IMB-MPI1_18850 PingPong
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Intel (R) MPI Benchmark Suite V3.0v modified by Voltaire, MPI-1 part
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Date : Tue Jul 15 15:11:30 2008
</span><br>
<span class="quotelev1">&gt; # Machine : x86_64
</span><br>
<span class="quotelev1">&gt; # System : Linux
</span><br>
<span class="quotelev1">&gt; # Release : 2.6.16.46-0.12-smp
</span><br>
<span class="quotelev1">&gt; # Version : #1 SMP Thu May 17 14:00:09 UTC 2007
</span><br>
<span class="quotelev1">&gt; # MPI Version : 2.0
</span><br>
<span class="quotelev1">&gt; # MPI Thread Environment: MPI_THREAD_SINGLE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Minimum message length in bytes: 0
</span><br>
<span class="quotelev1">&gt; # Maximum message length in bytes: 67108864
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype : MPI_BYTE
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype for reductions : MPI_FLOAT
</span><br>
<span class="quotelev1">&gt; # MPI_Op : MPI_SUM
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # List of Benchmarks to run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # PingPong
</span><br>
<span class="quotelev1">&gt; [witch3:32461] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [witch3:32461] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [witch3:32461] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [witch3:32461] Failing at address: 0x20
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [ 0] /lib64/libpthread.so.0 [0x2b514fcedc10]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [ 1] 
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; [0x2b51510b416a]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [ 2] 
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; [0x2b51510b4661]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [ 3] 
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; [0x2b51510b180e]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [ 4] 
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_btl_openib.so 
</span><br>
<span class="quotelev1">&gt; [0x2b5151811c22]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [ 5] 
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_btl_openib.so 
</span><br>
<span class="quotelev1">&gt; [0x2b51518132e9]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [ 6] 
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_bml_r2.so 
</span><br>
<span class="quotelev1">&gt; [0x2b51512c412f]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [ 7] 
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_18850/lib/libopen-pal.so.0(opal_progress+0x5a) 
</span><br>
<span class="quotelev1">&gt; [0x2b514f71268a]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [ 8] 
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_18850/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; [0x2b51510af0f5]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [ 9] 
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_18850/lib/libmpi.so.0(PMPI_Recv+0x13b) 
</span><br>
<span class="quotelev1">&gt; [0x2b514f47941b]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [10] ./IMB-MPI1_18850(IMB_pingpong+0x1a1) [0x4073cd]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [11] ./IMB-MPI1_18850(IMB_warm_up+0x2d) [0x405e49]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [12] ./IMB-MPI1_18850(main+0x394) [0x4034d4]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [13] /lib64/libc.so.6(__libc_start_main+0xf4) 
</span><br>
<span class="quotelev1">&gt; [0x2b514fe14154]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] [14] ./IMB-MPI1_18850 [0x4030a9]
</span><br>
<span class="quotelev1">&gt; [witch3:32461] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   witch2
</span><br>
<span class="quotelev1">&gt;   witch3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/15/08, *Pavel Shamis (Pasha)* &lt;pasha_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:pasha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         It looks like a new issue to me, Pasha. Possibly a side
</span><br>
<span class="quotelev1">&gt;         consequence of the
</span><br>
<span class="quotelev1">&gt;         IOF change made by Jeff and I the other day. From what I can
</span><br>
<span class="quotelev1">&gt;         see, it looks
</span><br>
<span class="quotelev1">&gt;         like you app was a simple &quot;hello&quot; - correct?
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Yep, it is simple hello application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         If you look at the error, the problem occurs when mpirun is
</span><br>
<span class="quotelev1">&gt;         trying to route
</span><br>
<span class="quotelev1">&gt;         a message. Since the app is clearly running at this time, the
</span><br>
<span class="quotelev1">&gt;         problem is
</span><br>
<span class="quotelev1">&gt;         probably in the IOF. The error message shows that mpirun is
</span><br>
<span class="quotelev1">&gt;         attempting to
</span><br>
<span class="quotelev1">&gt;         route a message to a jobid that doesn't exist. We have a test
</span><br>
<span class="quotelev1">&gt;         in the RML
</span><br>
<span class="quotelev1">&gt;         that forces an &quot;abort&quot; if that occurs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I would guess that there is either a race condition or memory
</span><br>
<span class="quotelev1">&gt;         corruption
</span><br>
<span class="quotelev1">&gt;         occurring somewhere, but I have no idea where.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         This may be the &quot;new hole in the dyke&quot; I cautioned about in
</span><br>
<span class="quotelev1">&gt;         earlier notes
</span><br>
<span class="quotelev1">&gt;         regarding the IOF... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Still, given that this hits rarely, it probably is a more
</span><br>
<span class="quotelev1">&gt;         acceptable bug to
</span><br>
<span class="quotelev1">&gt;         leave in the code than the one we just fixed (duplicated stdin)...
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It is not so rare issue, 19 failures in my MTT run
</span><br>
<span class="quotelev1">&gt;     (<a href="http://www.open-mpi.org/mtt/index.php?do_redir=765">http://www.open-mpi.org/mtt/index.php?do_redir=765</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 7/14/08 1:11 AM, &quot;Pavel Shamis (Pasha)&quot;
</span><br>
<span class="quotelev1">&gt;         &lt;pasha_at_[hidden] &lt;mailto:pasha_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Please see <a href="http://www.open-mpi.org/mtt/index.php?do_redir=764">http://www.open-mpi.org/mtt/index.php?do_redir=764</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             The error is not consistent. It takes a lot of iteration
</span><br>
<span class="quotelev1">&gt;             to reproduce it.
</span><br>
<span class="quotelev1">&gt;             In my MTT testing I seen it few times.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Is it know issue ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Regards,
</span><br>
<span class="quotelev1">&gt;             Pasha
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             devel mailing list
</span><br>
<span class="quotelev1">&gt;             devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;                
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4360.php">Andrew Friedley: "Re: [OMPI devel] ompi_ignore dr pml?"</a>
<li><strong>Previous message:</strong> <a href="4358.php">Lenny Verkhovsky: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4358.php">Lenny Verkhovsky: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4363.php">Jeff Squyres: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="4363.php">Jeff Squyres: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
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
