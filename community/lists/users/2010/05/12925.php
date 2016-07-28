<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 11:27:13 2010" -->
<!-- isoreceived="20100506152713" -->
<!-- sent="Thu, 06 May 2010 11:26:57 -0400" -->
<!-- isosent="20100506152657" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?" -->
<!-- id="4BE2DFC1.7080108_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7DC1D35D-11C6-4F4B-870A-031FF11F7B30_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 11:26:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12926.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12924.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>In reply to:</strong> <a href="12920.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12927.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12927.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, Douglas
<br>
<p>Ralph:
<br>
<p>Yes, I am in black list of your ticket (gcc 4.4.3):
<br>
<p>gcc --version
<br>
gcc (GCC) 4.4.3 20100127 (Red Hat 4.4.3-4)
<br>
Copyright (C) 2010 Free Software Foundation, Inc.
<br>
<p>Is is possible (and not too time consuming) to install an
<br>
older gcc on this Fedora 12 box, and compile Open MPI with it?
<br>
(It may be easier just to install another Linux distribution,
<br>
I would guess.  Fedora was not my choice, it is just a PITA.)
<br>
<p>Douglas:
<br>
<p>Thank you so much for telling your Linux distro, version, etc.
<br>
Now it is really starting to look as a distro/kernel/gcc issue.
<br>
I would not use Fedora, but I don't administer the box.
<br>
<p>Would you know which gcc you used to build your Open MPI?
<br>
Or did you use Intel icc instead?
<br>
<p>Cheers,
<br>
Gus
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Yo Gus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just saw a ticket go by reminding us about 
</span><br>
<span class="quotelev1">&gt; continuing hang problems on shared memory when building with 
</span><br>
<span class="quotelev1">&gt; gcc 4.4.x - any  chance you are in that category? 
</span><br>
<span class="quotelev1">&gt; You might have said something earlier in this thread....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 5, 2010, at 5:54 PM, Douglas Guptill wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 05, 2010 at 06:08:57PM -0400, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If anybody else has Open MPI working with hyperthreading and &quot;sm&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on a Nehalem box, I would appreciate any information about the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux distro and kernel version being used.
</span><br>
<span class="quotelev2">&gt;&gt; Debian 5 (lenny), Core i7 920, Asus P6T MoBo, 12GB RAM, OpenMPI 1.2.8
</span><br>
<span class="quotelev2">&gt;&gt; (with a custom-built MPI_recv.c and MPI_Send.c, which cut down on the
</span><br>
<span class="quotelev2">&gt;&gt; cpu load caused by the busy wait polling).  We have six (6) of these
</span><br>
<span class="quotelev2">&gt;&gt; machines.  All configured the same.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; uname -a yields:
</span><br>
<span class="quotelev2">&gt;&gt; Linux screm 2.6.26-2-amd64 #1 SMP Thu Feb 11 00:59:32 UTC 2010 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HyperThreading is on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Applications are -np 2 only:
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun --host localhost,localhost --byslot --mca btl sm,self -np 2 ${BIN}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We normally run (up to) 4 of these jobs on each machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using Intel 11.0.074 and 11.1.0** compilers; have trouble with the
</span><br>
<span class="quotelev2">&gt;&gt; 11.1.0** and &quot;-mcmodel=large -shared-intel&quot; builds.  Trouble meaning
</span><br>
<span class="quotelev2">&gt;&gt; the numerical results vary strangely.  Still working on that problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps,
</span><br>
<span class="quotelev2">&gt;&gt; Douglas.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S.  Yes, I know OpenMPI 1.2.8 is old.  We have been using it for 2
</span><br>
<span class="quotelev2">&gt;&gt; years with no apparent problems.  When I saw comments like &quot;machine
</span><br>
<span class="quotelev2">&gt;&gt; hung&quot; for 1.4.1, and &quot;data loss&quot; for 1.3.x, I put aside thoughts of
</span><br>
<span class="quotelev2">&gt;&gt; upgrading.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;  Douglas Guptill                       voice: 902-461-9749
</span><br>
<span class="quotelev2">&gt;&gt;  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  Oceanography Department               fax:   902-494-3877
</span><br>
<span class="quotelev2">&gt;&gt;  Dalhousie University
</span><br>
<span class="quotelev2">&gt;&gt;  Halifax, NS, B3H 4J1, Canada
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12926.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12924.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>In reply to:</strong> <a href="12920.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12927.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12927.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
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
