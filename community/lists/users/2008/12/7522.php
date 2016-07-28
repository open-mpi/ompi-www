<?
$subject_val = "Re: [OMPI users] Interactive OMPI job, stdin problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 11:45:36 2008" -->
<!-- isoreceived="20081212164536" -->
<!-- sent="Fri, 12 Dec 2008 09:45:28 -0700" -->
<!-- isosent="20081212164528" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Interactive OMPI job, stdin problem" -->
<!-- id="47CDC240-9019-4C81-9521-CA3268B26B44_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081212152143.122520_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Interactive OMPI job, stdin problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 11:45:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7523.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7521.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7520.php">Harald Anlauf: "[OMPI users] Interactive OMPI job, stdin problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7531.php">Jeff Squyres: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Reply:</strong> <a href="7531.php">Jeff Squyres: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Harald
<br>
<p>There is a patch for the IOF in 1.3 &quot;soaking&quot; in the trunk right now.  
<br>
I'll check to ensure it fixes this issue too. Hopefully, it will come  
<br>
over to the 1.3 branch early next week.
<br>
<p>Ralph
<br>
<p><p>On Dec 12, 2008, at 8:21 AM, Harald Anlauf wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having problems with OMPI-1.3beta with an interactive job where  
</span><br>
<span class="quotelev1">&gt; rank 0
</span><br>
<span class="quotelev1">&gt; reads stdin from a terminal.  The problem does not show up when stdin
</span><br>
<span class="quotelev1">&gt; is redirected from a file.  The problem also does not exist with  
</span><br>
<span class="quotelev1">&gt; OMPI 1.2.[5-9].
</span><br>
<span class="quotelev1">&gt; Has there been any change in OMPI between 1.2 and 1.3 that I should  
</span><br>
<span class="quotelev1">&gt; take
</span><br>
<span class="quotelev1">&gt; care of?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please find attached a famous sample program that was modified to  
</span><br>
<span class="quotelev1">&gt; aid debugging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program reads the number of intervals used to calculate pi. 0  
</span><br>
<span class="quotelev1">&gt; means exit.
</span><br>
<span class="quotelev1">&gt; I first enter 1000, then 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interactive run, without mpirun:
</span><br>
<span class="quotelev1">&gt; % ./a.out
</span><br>
<span class="quotelev1">&gt; Process            0  of            1  is alive
</span><br>
<span class="quotelev1">&gt; Process            0  before read
</span><br>
<span class="quotelev1">&gt; Enter the number of intervals: (0 quits)
</span><br>
<span class="quotelev1">&gt; 1000
</span><br>
<span class="quotelev1">&gt; Process            0  read:  n =        1000
</span><br>
<span class="quotelev1">&gt; Process            0  before MPI_BCAST
</span><br>
<span class="quotelev1">&gt; Process            0  after  MPI_BCAST
</span><br>
<span class="quotelev1">&gt;  pi is approximately: 3.1415927369231227  Error is: 0.0000000833333296
</span><br>
<span class="quotelev1">&gt; Process            0  before read
</span><br>
<span class="quotelev1">&gt; Enter the number of intervals: (0 quits)
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; Process            0  read:  n =           0
</span><br>
<span class="quotelev1">&gt; Process            0  before MPI_BCAST
</span><br>
<span class="quotelev1">&gt; Process            0  after  MPI_BCAST
</span><br>
<span class="quotelev1">&gt; Process            0  Normal exit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With mpirun:
</span><br>
<span class="quotelev1">&gt; % mpirun -np 1 ./a.out
</span><br>
<span class="quotelev1">&gt; Process            0  of            1  is alive
</span><br>
<span class="quotelev1">&gt; Process            0  before read
</span><br>
<span class="quotelev1">&gt; Enter the number of intervals: (0 quits)
</span><br>
<span class="quotelev1">&gt; 1000
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 10909 on
</span><br>
<span class="quotelev1">&gt; node oflws105 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now with stdin redirected from a here-document:
</span><br>
<span class="quotelev1">&gt; % mpirun -np 1 ./a.out &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt;&gt; 1000
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; EOF
</span><br>
<span class="quotelev1">&gt; Process            0  of            1  is alive
</span><br>
<span class="quotelev1">&gt; Process            0  before read
</span><br>
<span class="quotelev1">&gt; Enter the number of intervals: (0 quits)
</span><br>
<span class="quotelev1">&gt; Process            0  read:  n =        1000
</span><br>
<span class="quotelev1">&gt; Process            0  before MPI_BCAST
</span><br>
<span class="quotelev1">&gt; Process            0  after  MPI_BCAST
</span><br>
<span class="quotelev1">&gt;  pi is approximately: 3.1415927369231227  Error is: 0.0000000833333296
</span><br>
<span class="quotelev1">&gt; Process            0  before read
</span><br>
<span class="quotelev1">&gt; Enter the number of intervals: (0 quits)
</span><br>
<span class="quotelev1">&gt; Process            0  read:  n =           0
</span><br>
<span class="quotelev1">&gt; Process            0  before MPI_BCAST
</span><br>
<span class="quotelev1">&gt; Process            0  after  MPI_BCAST
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Similarly for np &gt; 1, with minor variations, but the same error  
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody reproduce this behavior?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ompi_info |grep SVN
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r20119
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r20119
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r20119
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Harald
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Sensationsangebot verl&#228;ngert: GMX FreeDSL - Telefonanschluss + DSL
</span><br>
<span class="quotelev1">&gt; f&#252;r nur 16,37 Euro/mtl.!* <a href="http://dsl.gmx.de/?ac=OM.AD.PD003K1308T4569a">http://dsl.gmx.de/?ac=OM.AD.PD003K1308T4569a</a>
</span><br>
<span class="quotelev1">&gt; &lt;pi3f90-test.f90&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="7523.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7521.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7520.php">Harald Anlauf: "[OMPI users] Interactive OMPI job, stdin problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7531.php">Jeff Squyres: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Reply:</strong> <a href="7531.php">Jeff Squyres: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
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
