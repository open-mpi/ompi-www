<?
$subject_val = "Re: [OMPI users] problem with -npernode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 12:57:24 2010" -->
<!-- isoreceived="20100618165724" -->
<!-- sent="Fri, 18 Jun 2010 09:57:17 -0700" -->
<!-- isosent="20100618165717" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with -npernode" -->
<!-- id="4C1BA56D.1070009_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5B60EDCA-1B69-4FFF-803D-BFC222688F61_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with -npernode<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 12:57:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13345.php">Jeff Squyres: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Previous message:</strong> <a href="13343.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13340.php">Ralph Castain: "Re: [OMPI users] problem with -npernode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13345.php">Jeff Squyres: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Reply:</strong> <a href="13345.php">Jeff Squyres: "Re: [OMPI users] problem with -npernode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On 06/17/2010 03:34 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; No more info required - it's a bug. Fixed and awaiting release of 1.4.3.
</span><br>
<p>I downloaded openmpi-1.4.3a1r23261.tar.gz, dated June 9.  It behaves the
<br>
same as 1.4.2.  Is there a newer version available for testing?
<br>
<p><span class="quotelev1">&gt; On Jun 17, 2010, at 3:50 PM, David Turner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Recently, Christopher Maestas reported a problem with -npernode in
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI 1.4.2 (&quot;running a ompi 1.4.2 job with -np versus -npernode&quot;).
</span><br>
<span class="quotelev2">&gt;&gt; I have also encountered this problem, with a simple &quot;hello, world&quot;
</span><br>
<span class="quotelev2">&gt;&gt; program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 16 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             0           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             2           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             5           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             7           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             1           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             4           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             6           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             3           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             8           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             9           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =            10           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =            12           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =            13           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =            15           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =            11           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =            14           16
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 16 -npernode 8 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; [c1146:15313] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [c1146:15313] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [c1146:15313] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [c1146:15313] Failing at address: 0x50
</span><br>
<span class="quotelev2">&gt;&gt; [c1146:15313] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt; [c1138:26571] [[62315,0],1] routed:binomial: Connection to lifeline [[62315,0],0] lost
</span><br>
<span class="quotelev2">&gt;&gt;          % module swap openmpi openmpi/1.4.1
</span><br>
<span class="quotelev2">&gt;&gt;          % mpirun -np 16 -npernode 8 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             8           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =            13           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =            10           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =            11           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =            15           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =            14           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =            12           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             5           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             2           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             3           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             1           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             0           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             9           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             6           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             7           16
</span><br>
<span class="quotelev2">&gt;&gt; myrank, icount =             4           16
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt; FORTRAN STOP
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Compilers are PGI/10.5, OS is Scientific Linux 5.4, resource manager is
</span><br>
<span class="quotelev2">&gt;&gt; torque 2.4.5.  Please let me know if you need more information.  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David Turner
</span><br>
<span class="quotelev2">&gt;&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13345.php">Jeff Squyres: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Previous message:</strong> <a href="13343.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13340.php">Ralph Castain: "Re: [OMPI users] problem with -npernode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13345.php">Jeff Squyres: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Reply:</strong> <a href="13345.php">Jeff Squyres: "Re: [OMPI users] problem with -npernode"</a>
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
