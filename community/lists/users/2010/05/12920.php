<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 10:02:20 2010" -->
<!-- isoreceived="20100506140220" -->
<!-- sent="Thu, 6 May 2010 08:02:10 -0600" -->
<!-- isosent="20100506140210" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?" -->
<!-- id="7DC1D35D-11C6-4F4B-870A-031FF11F7B30_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100505235456.GA5622_at_sopalepc" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 10:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12921.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12919.php">Richard Treumann: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>In reply to:</strong> <a href="12914.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12921.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12921.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12923.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12925.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Gus
<br>
<p>Just saw a ticket go by reminding us about continuing hang problems on shared memory when building with gcc 4.4.x - any  chance you are in that category? You might have said something earlier in this thread....
<br>
<p>On May 5, 2010, at 5:54 PM, Douglas Guptill wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, May 05, 2010 at 06:08:57PM -0400, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If anybody else has Open MPI working with hyperthreading and &quot;sm&quot;
</span><br>
<span class="quotelev2">&gt;&gt; on a Nehalem box, I would appreciate any information about the
</span><br>
<span class="quotelev2">&gt;&gt; Linux distro and kernel version being used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debian 5 (lenny), Core i7 920, Asus P6T MoBo, 12GB RAM, OpenMPI 1.2.8
</span><br>
<span class="quotelev1">&gt; (with a custom-built MPI_recv.c and MPI_Send.c, which cut down on the
</span><br>
<span class="quotelev1">&gt; cpu load caused by the busy wait polling).  We have six (6) of these
</span><br>
<span class="quotelev1">&gt; machines.  All configured the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; uname -a yields:
</span><br>
<span class="quotelev1">&gt; Linux screm 2.6.26-2-amd64 #1 SMP Thu Feb 11 00:59:32 UTC 2010 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HyperThreading is on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Applications are -np 2 only:
</span><br>
<span class="quotelev1">&gt;  mpirun --host localhost,localhost --byslot --mca btl sm,self -np 2 ${BIN}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We normally run (up to) 4 of these jobs on each machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using Intel 11.0.074 and 11.1.0** compilers; have trouble with the
</span><br>
<span class="quotelev1">&gt; 11.1.0** and &quot;-mcmodel=large -shared-intel&quot; builds.  Trouble meaning
</span><br>
<span class="quotelev1">&gt; the numerical results vary strangely.  Still working on that problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps,
</span><br>
<span class="quotelev1">&gt; Douglas.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S.  Yes, I know OpenMPI 1.2.8 is old.  We have been using it for 2
</span><br>
<span class="quotelev1">&gt; years with no apparent problems.  When I saw comments like &quot;machine
</span><br>
<span class="quotelev1">&gt; hung&quot; for 1.4.1, and &quot;data loss&quot; for 1.3.x, I put aside thoughts of
</span><br>
<span class="quotelev1">&gt; upgrading.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Douglas Guptill                       voice: 902-461-9749
</span><br>
<span class="quotelev1">&gt;  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Oceanography Department               fax:   902-494-3877
</span><br>
<span class="quotelev1">&gt;  Dalhousie University
</span><br>
<span class="quotelev1">&gt;  Halifax, NS, B3H 4J1, Canada
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
<li><strong>Next message:</strong> <a href="12921.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12919.php">Richard Treumann: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>In reply to:</strong> <a href="12914.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12921.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12921.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12923.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12925.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
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
