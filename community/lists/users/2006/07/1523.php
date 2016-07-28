<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul  1 11:18:15 2006" -->
<!-- isoreceived="20060701151815" -->
<!-- sent="Sat, 1 Jul 2006 09:17:53 -0600" -->
<!-- isosent="20060701151753" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)" -->
<!-- id="AB962F49-4CF6-43C8-9D2B-8899F2D6BB4E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44A651A7.8060309_at_fraka-mp.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-01 11:17:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1524.php">openmpi-user: "[OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="1522.php">Bert Wesarg: "[OMPI users] MPI_Op_reduce()"</a>
<li><strong>In reply to:</strong> <a href="1521.php">openmpi-user: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 1, 2006, at 4:42 AM, openmpi-user wrote:
<br>
<p><span class="quotelev1">&gt; @ Terry (and All)!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Enclose you'll find a (minor) bugfix with respect to the BUS_ADRALN  
</span><br>
<span class="quotelev1">&gt; I've reported recently when submitting jobs to the XGrid with  
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1. The BUS_ADRALN error on SPARC systems might be caused  
</span><br>
<span class="quotelev1">&gt; by a similar code segment. For the &quot;bugfix&quot; see line 55ff of the  
</span><br>
<span class="quotelev1">&gt; attached code file pls_xgrid_cliemt.m
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't check this yet, but it's very likely that the same code  
</span><br>
<span class="quotelev1">&gt; segment causes the BUS_ADRALN error in the trunk-tarballs when  
</span><br>
<span class="quotelev1">&gt; submitting jobs to with XGrid with those releases.
</span><br>
<p>Thanks for the patch.  The XGrid code is OS X only, so we still have  
<br>
some work to do on Solaris.  I'm not sure how this bug lived through  
<br>
testing.  I've applied it to our Subversion source and it will be  
<br>
part of the Open MPI 1.1.1 release.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1524.php">openmpi-user: "[OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="1522.php">Bert Wesarg: "[OMPI users] MPI_Op_reduce()"</a>
<li><strong>In reply to:</strong> <a href="1521.php">openmpi-user: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<!-- nextthread="start" -->
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
