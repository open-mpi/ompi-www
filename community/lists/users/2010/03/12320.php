<?
$subject_val = "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 09:12:12 2010" -->
<!-- isoreceived="20100311141212" -->
<!-- sent="Thu, 11 Mar 2010 06:12:09 -0800" -->
<!-- isosent="20100311141209" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)" -->
<!-- id="3E361137-BEA7-4E6D-9C08-1D2374091A2B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT110-W57EFAC27B4C8BC05C755768B320_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 09:12:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12321.php">Matthew MacManes: "[OMPI users] mpi error?"</a>
<li><strong>Previous message:</strong> <a href="12319.php">Reuti: "Re: [OMPI users] MPI and DRMAA"</a>
<li><strong>In reply to:</strong> <a href="12315.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12364.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10, 2010, at 9:25 PM, abc def wrote:
<br>
<p><span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; Fatal error in MPI_Comm_spawn: Other MPI error, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn(130).........: MPI_Comm_spawn(cmd=&quot;./mpitest-2.ex&quot;, argv=0x75e920, maxprocs=1, info=0x9c000000, root=0, MPI_COMM_SELF, intercomm=0x7fffe29510e4, errors=0x6b20d0) failed
</span><br>
<span class="quotelev1">&gt; MPID_Comm_spawn_multiple(71): Function MPID_Comm_spawn_multiple not implementedFatal error in MPI_Comm_spawn: Other MPI error, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn(130).........: MPI_Comm_spawn(cmd=&quot;./mpitest-2.ex&quot;, argv=0xd44920, maxprocs=1, info=0x9c000000, root=0, MPI_COMM_SELF, intercomm=0x7fffb38d08e4, errors=0x6b20d0) failed
</span><br>
<span class="quotelev1">&gt; MPID_Comm_spawn_multiple(71): Function MPID_Comm_spawn_multiple not implementedrank 1 in job 190041  december_56088   caused collective abort of all ranks
</span><br>
<span class="quotelev1">&gt;   exit status of rank 1: return code 1
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<p>It looks like you are using some flavor of MPICH.  
<br>
<p>This list is for supporting the Open MPI implementation; not MPICH.  You should probably direct your questions to their support list -- we don't know what their error messages mean, etc.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12321.php">Matthew MacManes: "[OMPI users] mpi error?"</a>
<li><strong>Previous message:</strong> <a href="12319.php">Reuti: "Re: [OMPI users] MPI and DRMAA"</a>
<li><strong>In reply to:</strong> <a href="12315.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12364.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
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
