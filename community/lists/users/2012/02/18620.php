<?
$subject_val = "Re: [OMPI users] ssh between nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 16:20:00 2012" -->
<!-- isoreceived="20120229212000" -->
<!-- sent="Wed, 29 Feb 2012 14:16:43 -0700" -->
<!-- isosent="20120229211643" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh between nodes" -->
<!-- id="4F4E95BB.7030408_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2190BA584788164982F798330F63AC4042C3EC1D_at_mb03.aggies.usu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ssh between nodes<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 16:16:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18621.php">Martin Siegert: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>Previous message:</strong> <a href="18619.php">Randall Svancara: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>In reply to:</strong> <a href="18618.php">Denver Smith: "[OMPI users] ssh between nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18621.php">Martin Siegert: "Re: [OMPI users] ssh between nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It really depends.  You certainly CAN have mpirun/mpiexec use ssh to
<br>
launch the remote processes.  If you're using Torque, though, I strongly
<br>
recommend using the hooks in OpenMPI, into the Torque TM-API (see
<br>
<a href="http://www.open-mpi.org/faq/?category=building#build-rte-tm">http://www.open-mpi.org/faq/?category=building#build-rte-tm</a>).  That will
<br>
use the pbs_mom's themselves to launch all the processes, which has
<br>
several advantages.
<br>
<p>Using the TM-API for job launch means that remote processes will be
<br>
children of the Torque pbs_mom process, not the sshd process, which
<br>
means that Torque will be able to do a better job at killing rogue
<br>
processes, reporting resources utilized, etc.
<br>
<p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 02/29/2012 02:09 PM, Denver Smith wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my cluster running moab and torque, I cannot ssh without a password
</span><br>
<span class="quotelev1">&gt; between compute nodes. I can however request multiple node jobs fine. I
</span><br>
<span class="quotelev1">&gt; was wondering if passwordless ssh keys need to be set up between compute
</span><br>
<span class="quotelev1">&gt; nodes in order for mpi applications to run correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18621.php">Martin Siegert: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>Previous message:</strong> <a href="18619.php">Randall Svancara: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>In reply to:</strong> <a href="18618.php">Denver Smith: "[OMPI users] ssh between nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18621.php">Martin Siegert: "Re: [OMPI users] ssh between nodes"</a>
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
