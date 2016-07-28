<?
$subject_val = "Re: [OMPI users] Interactive OMPI job, stdin problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 13 08:22:16 2008" -->
<!-- isoreceived="20081213132216" -->
<!-- sent="Sat, 13 Dec 2008 08:22:10 -0500" -->
<!-- isosent="20081213132210" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Interactive OMPI job, stdin problem" -->
<!-- id="522E596B-BC4B-42D7-9785-A2BA7E5116BF_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47CDC240-9019-4C81-9521-CA3268B26B44_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-13 08:22:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7532.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="7530.php">Jeff Squyres: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="7522.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7536.php">Harald Anlauf: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Reply:</strong> <a href="7536.php">Harald Anlauf: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Reply:</strong> <a href="7537.php">Harald Anlauf: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Harold --
<br>
<p>Along those lines, would you mind downloading a nightly trunk tarball  
<br>
and giving it a whirl to see if the IOF patch we have soaking does fix  
<br>
the problem in your environment?  Part of the difficulty we've had in  
<br>
testing the patch is that the problem was only intermittently  
<br>
repeatable on some machines in some environments.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p><p>On Dec 12, 2008, at 11:45 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi Harald
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a patch for the IOF in 1.3 &quot;soaking&quot; in the trunk right  
</span><br>
<span class="quotelev1">&gt; now. I'll check to ensure it fixes this issue too. Hopefully, it  
</span><br>
<span class="quotelev1">&gt; will come over to the 1.3 branch early next week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2008, at 8:21 AM, Harald Anlauf wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am having problems with OMPI-1.3beta with an interactive job  
</span><br>
<span class="quotelev2">&gt;&gt; where rank 0
</span><br>
<span class="quotelev2">&gt;&gt; reads stdin from a terminal.  The problem does not show up when stdin
</span><br>
<span class="quotelev2">&gt;&gt; is redirected from a file.  The problem also does not exist with  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI 1.2.[5-9].
</span><br>
<span class="quotelev2">&gt;&gt; Has there been any change in OMPI between 1.2 and 1.3 that I should  
</span><br>
<span class="quotelev2">&gt;&gt; take
</span><br>
<span class="quotelev2">&gt;&gt; care of?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please find attached a famous sample program that was modified to  
</span><br>
<span class="quotelev2">&gt;&gt; aid debugging.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The program reads the number of intervals used to calculate pi. 0  
</span><br>
<span class="quotelev2">&gt;&gt; means exit.
</span><br>
<span class="quotelev2">&gt;&gt; I first enter 1000, then 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interactive run, without mpirun:
</span><br>
<span class="quotelev2">&gt;&gt; % ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  of            1  is alive
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  before read
</span><br>
<span class="quotelev2">&gt;&gt; Enter the number of intervals: (0 quits)
</span><br>
<span class="quotelev2">&gt;&gt; 1000
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  read:  n =        1000
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  before MPI_BCAST
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  after  MPI_BCAST
</span><br>
<span class="quotelev2">&gt;&gt; pi is approximately: 3.1415927369231227  Error is: 0.0000000833333296
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  before read
</span><br>
<span class="quotelev2">&gt;&gt; Enter the number of intervals: (0 quits)
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  read:  n =           0
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  before MPI_BCAST
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  after  MPI_BCAST
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  Normal exit
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With mpirun:
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 1 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  of            1  is alive
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  before read
</span><br>
<span class="quotelev2">&gt;&gt; Enter the number of intervals: (0 quits)
</span><br>
<span class="quotelev2">&gt;&gt; 1000
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 0 with PID 10909 on
</span><br>
<span class="quotelev2">&gt;&gt; node oflws105 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now with stdin redirected from a here-document:
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 1 ./a.out &lt;&lt;EOF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EOF
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  of            1  is alive
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  before read
</span><br>
<span class="quotelev2">&gt;&gt; Enter the number of intervals: (0 quits)
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  read:  n =        1000
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  before MPI_BCAST
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  after  MPI_BCAST
</span><br>
<span class="quotelev2">&gt;&gt; pi is approximately: 3.1415927369231227  Error is: 0.0000000833333296
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  before read
</span><br>
<span class="quotelev2">&gt;&gt; Enter the number of intervals: (0 quits)
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  read:  n =           0
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  before MPI_BCAST
</span><br>
<span class="quotelev2">&gt;&gt; Process            0  after  MPI_BCAST
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Similarly for np &gt; 1, with minor variations, but the same error  
</span><br>
<span class="quotelev2">&gt;&gt; message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody reproduce this behavior?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % ompi_info |grep SVN
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI SVN revision: r20119
</span><br>
<span class="quotelev2">&gt;&gt;  Open RTE SVN revision: r20119
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL SVN revision: r20119
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Harald
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Sensationsangebot verl&#228;ngert: GMX FreeDSL - Telefonanschluss + DSL
</span><br>
<span class="quotelev2">&gt;&gt; f&#252;r nur 16,37 Euro/mtl.!* <a href="http://dsl.gmx.de/">http://dsl.gmx.de/</a>? 
</span><br>
<span class="quotelev2">&gt;&gt; ac=OM.AD.PD003K1308T4569a
</span><br>
<span class="quotelev2">&gt;&gt; &lt;pi3f90-test.f90&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7532.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="7530.php">Jeff Squyres: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="7522.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7536.php">Harald Anlauf: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Reply:</strong> <a href="7536.php">Harald Anlauf: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Reply:</strong> <a href="7537.php">Harald Anlauf: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
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
