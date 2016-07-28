<?
$subject_val = "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 00:25:55 2010" -->
<!-- isoreceived="20100311052555" -->
<!-- sent="Thu, 11 Mar 2010 05:25:50 +0000" -->
<!-- isosent="20100311052550" -->
<!-- name="abc def" -->
<!-- email="cannonjunk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)" -->
<!-- id="SNT110-W57EFAC27B4C8BC05C755768B320_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A4731510-7922-4030-B9CE-F7B4DB56B725_at_open-mpi.org" -->
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
<strong>From:</strong> abc def (<em>cannonjunk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 00:25:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12316.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12314.php">Ralph Castain: "Re: [OMPI users] MPI and DRMAA"</a>
<li><strong>In reply to:</strong> <a href="12265.php">Ralph Castain: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12320.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12320.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much for the examples.
<br>
<p>I tried the following program, based on the guidance here and additional information I found through google:
<br>
<p>-------------------------------
<br>
PROGRAM mpitest1
<br>
IMPLICIT none
<br>
<p>CHARACTER*6 :: dir
<br>
CHARACTER*1 :: crank
<br>
<p>! MPI parameters
<br>
INCLUDE 'mpif.h'
<br>
INTEGER :: status(MPI_STATUS_SIZE)
<br>
INTEGER :: child_comm, ierr, info, irank, isize, nkeys
<br>
INTEGER :: errorcode_array(1)
<br>
<p>! MPI Initialisation
<br>
CALL MPI_INIT(ierr)
<br>
CALL MPI_COMM_RANK(MPI_COMM_WORLD,irank,ierr) ! Gets my rank
<br>
CALL MPI_COMM_SIZE(MPI_COMM_WORLD,isize,ierr) ! Gets the com size
<br>
CALL MPI_INFO_CREATE(info, ierr) ! Prepare MPI INFO field
<br>
<p>! Prepare a directory for each process based on the process rank (ie, test-0, test-1, test-2...)
<br>
WRITE(crank,'(I1)') irank
<br>
dir=&quot;test-&quot; // crank
<br>
CALL SYSTEM(&quot;mkdir &quot; // dir)
<br>
<p>CALL SYSTEM(&quot;cp mpitest-2.ex &quot; // dir // &quot;/&quot;) ! Copy mpitest-2 to the directory for each processor (checked - this works fine)
<br>
<p>CALL MPI_INFO_SET(info, &quot;wdir&quot;, &quot;test-0&quot;, ierr) ! Set the working directory for the external simulation (to keep it simple, we just use the directory created by process 0, which is called test-0
<br>
<p>CALL MPI_Info_get_nkeys(info,nkeys,ierr)
<br>
<p>print *, nkeys
<br>
<p>CALL MPI_COMM_SPAWN(&quot;./mpitest-2.ex&quot;,MPI_ARGV_NULL,1,info,0,MPI_COMM_SELF,child_comm,errorcode_array,ierr)
<br>
<p>CALL MPI_FINALIZE(ierr)
<br>
<p>END PROGRAM mpitest1
<br>
-------------------------------
<br>
<p><p>This gets so far as printing nkeys, which comes out correctly as &quot;1&quot;. It then crashes on the spawn command though:
<br>
<p>------------------------------
<br>
Fatal error in MPI_Comm_spawn: Other MPI error, error stack:
<br>
MPI_Comm_spawn(130).........: MPI_Comm_spawn(cmd=&quot;./mpitest-2.ex&quot;, argv=0x75e920, maxprocs=1, info=0x9c000000, root=0, MPI_COMM_SELF, intercomm=0x7fffe29510e4, errors=0x6b20d0) failed
<br>
MPID_Comm_spawn_multiple(71): Function MPID_Comm_spawn_multiple not implementedFatal error in MPI_Comm_spawn: Other MPI error, error stack:
<br>
MPI_Comm_spawn(130).........: MPI_Comm_spawn(cmd=&quot;./mpitest-2.ex&quot;, argv=0xd44920, maxprocs=1, info=0x9c000000, root=0, MPI_COMM_SELF, intercomm=0x7fffb38d08e4, errors=0x6b20d0) failed
<br>
MPID_Comm_spawn_multiple(71): Function MPID_Comm_spawn_multiple not implementedrank 1 in job 190041  december_56088   caused collective abort of all ranks
<br>
&nbsp;&nbsp;exit status of rank 1: return code 1
<br>
------------------------------
<br>
<p>It says something about MPID_Comm_spawn_multiple not being implemented,
<br>
but I don't know what this is. I'm only spawning one instance, not
<br>
multiple instances. The parameters &quot;MPI_COMM_SELF&quot; and &quot;child_comm&quot;
<br>
I've implemented blindly, based on what I've googled so far; I don't
<br>
really understand this and I can't find information about it.
<br>
<p>I should also say that I'm back in the testing environment for now (ie, mvapich2) although it will eventually be run in open-mpi (or optionally, mvapich1, but not mvapich2).
<br>
<p>As ever, I'm very grateful for all the help so far, and am hoping this can eventually be solved, step-by-step.
<br>
<p>From: rhc_at_[hidden]
<br>
Date: Sun, 7 Mar 2010 01:00:40 -0700
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)
<br>
<p><p><p>Attached is are some simple examples (in C) that collectively does most of what you are trying to do.
<br>
You have some args wrong in your call. See slave_spawn.c for how to use info_keys.
<br>
HTHRalph
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Got a cool Hotmail story? Tell us now
<br>
<a href="http://clk.atdmt.com/UKM/go/195013117/direct/01/">http://clk.atdmt.com/UKM/go/195013117/direct/01/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12315/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12316.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12314.php">Ralph Castain: "Re: [OMPI users] MPI and DRMAA"</a>
<li><strong>In reply to:</strong> <a href="12265.php">Ralph Castain: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12320.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12320.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
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
