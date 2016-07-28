<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 19:56:32 2010" -->
<!-- isoreceived="20100505235632" -->
<!-- sent="Wed, 5 May 2010 20:54:56 -0300" -->
<!-- isosent="20100505235456" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?" -->
<!-- id="20100505235456.GA5622_at_sopalepc" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE1EC79.3030608_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 19:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12915.php">Terry Frankcombe: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12913.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12913.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12920.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12920.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12939.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on aNehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, May 05, 2010 at 06:08:57PM -0400, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; If anybody else has Open MPI working with hyperthreading and &quot;sm&quot;
</span><br>
<span class="quotelev1">&gt; on a Nehalem box, I would appreciate any information about the
</span><br>
<span class="quotelev1">&gt; Linux distro and kernel version being used.
</span><br>
<p>Debian 5 (lenny), Core i7 920, Asus P6T MoBo, 12GB RAM, OpenMPI 1.2.8
<br>
(with a custom-built MPI_recv.c and MPI_Send.c, which cut down on the
<br>
cpu load caused by the busy wait polling).  We have six (6) of these
<br>
machines.  All configured the same.
<br>
<p>uname -a yields:
<br>
Linux screm 2.6.26-2-amd64 #1 SMP Thu Feb 11 00:59:32 UTC 2010 x86_64 GNU/Linux
<br>
<p>HyperThreading is on.
<br>
<p>Applications are -np 2 only:
<br>
&nbsp;&nbsp;mpirun --host localhost,localhost --byslot --mca btl sm,self -np 2 ${BIN}
<br>
<p>We normally run (up to) 4 of these jobs on each machine.
<br>
<p>Using Intel 11.0.074 and 11.1.0** compilers; have trouble with the
<br>
11.1.0** and &quot;-mcmodel=large -shared-intel&quot; builds.  Trouble meaning
<br>
the numerical results vary strangely.  Still working on that problem.
<br>
<p>Hope that helps,
<br>
Douglas.
<br>
<p>P.S.  Yes, I know OpenMPI 1.2.8 is old.  We have been using it for 2
<br>
years with no apparent problems.  When I saw comments like &quot;machine
<br>
hung&quot; for 1.4.1, and &quot;data loss&quot; for 1.3.x, I put aside thoughts of
<br>
upgrading.
<br>
<p><pre>
-- 
  Douglas Guptill                       voice: 902-461-9749
  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
  Oceanography Department               fax:   902-494-3877
  Dalhousie University
  Halifax, NS, B3H 4J1, Canada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12915.php">Terry Frankcombe: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12913.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12913.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12920.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12920.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12939.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on aNehalem	standalone machine?"</a>
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
