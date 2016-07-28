<?
$subject_val = "Re: [OMPI users] problem with -npernode";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 17 18:34:41 2010" -->
<!-- isoreceived="20100617223441" -->
<!-- sent="Thu, 17 Jun 2010 16:34:33 -0600" -->
<!-- isosent="20100617223433" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with -npernode" -->
<!-- id="5B60EDCA-1B69-4FFF-803D-BFC222688F61_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C1A988F.70301_at_lbl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-17 18:34:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13341.php">Brad Benton: "Re: [OMPI users] Threading models with openib"</a>
<li><strong>Previous message:</strong> <a href="13339.php">David Turner: "[OMPI users] problem with -npernode"</a>
<li><strong>In reply to:</strong> <a href="13339.php">David Turner: "[OMPI users] problem with -npernode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13344.php">David Turner: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Reply:</strong> <a href="13344.php">David Turner: "Re: [OMPI users] problem with -npernode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No more info required - it's a bug. Fixed and awaiting release of 1.4.3.
<br>
<p>Thanks
<br>
<p>On Jun 17, 2010, at 3:50 PM, David Turner wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Recently, Christopher Maestas reported a problem with -npernode in
</span><br>
<span class="quotelev1">&gt; Open MPI 1.4.2 (&quot;running a ompi 1.4.2 job with -np versus -npernode&quot;).
</span><br>
<span class="quotelev1">&gt; I have also encountered this problem, with a simple &quot;hello, world&quot;
</span><br>
<span class="quotelev1">&gt; program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpirun -np 16 ./a.out
</span><br>
<span class="quotelev1">&gt; myrank, icount =             0           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             2           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             5           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             7           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             1           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             4           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             6           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             3           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             8           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             9           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =            10           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =            12           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =            13           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =            15           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =            11           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =            14           16
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpirun -np 16 -npernode 8 ./a.out
</span><br>
<span class="quotelev1">&gt; [c1146:15313] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [c1146:15313] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [c1146:15313] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [c1146:15313] Failing at address: 0x50
</span><br>
<span class="quotelev1">&gt; [c1146:15313] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; [c1138:26571] [[62315,0],1] routed:binomial: Connection to lifeline [[62315,0],0] lost
</span><br>
<span class="quotelev1">&gt;         % module swap openmpi openmpi/1.4.1
</span><br>
<span class="quotelev1">&gt;         % mpirun -np 16 -npernode 8 ./a.out
</span><br>
<span class="quotelev1">&gt; myrank, icount =             8           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =            13           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =            10           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =            11           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =            15           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =            14           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =            12           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             5           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             2           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             3           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             1           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             0           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             9           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             6           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             7           16
</span><br>
<span class="quotelev1">&gt; myrank, icount =             4           16
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; FORTRAN STOP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compilers are PGI/10.5, OS is Scientific Linux 5.4, resource manager is
</span><br>
<span class="quotelev1">&gt; torque 2.4.5.  Please let me know if you need more information.  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13341.php">Brad Benton: "Re: [OMPI users] Threading models with openib"</a>
<li><strong>Previous message:</strong> <a href="13339.php">David Turner: "[OMPI users] problem with -npernode"</a>
<li><strong>In reply to:</strong> <a href="13339.php">David Turner: "[OMPI users] problem with -npernode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13344.php">David Turner: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Reply:</strong> <a href="13344.php">David Turner: "Re: [OMPI users] problem with -npernode"</a>
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
