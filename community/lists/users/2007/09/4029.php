<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 12:40:34 2007" -->
<!-- isoreceived="20070917164034" -->
<!-- sent="Mon, 17 Sep 2007 09:40:29 -0700" -->
<!-- isosent="20070917164029" -->
<!-- name="Andrus, Mr. Brian (Contractor)" -->
<!-- email="brian.andrus_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_file_set_view" -->
<!-- id="D392D4803D14354CBC49D772E19DD0CD456ADB_at_zeus.w2k.nrlmry.navy.mil" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Andrus, Mr. Brian (Contractor) (<em>brian.andrus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-17 12:40:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4030.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Previous message:</strong> <a href="4028.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4034.php">Jeff Squyres: "Re: [OMPI users] mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="4034.php">Jeff Squyres: "Re: [OMPI users] mpi_file_set_view"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I am a newbie at much of mpi application and try to provide support for
<br>
various users in the hpc community.
<br>
I have run into something that I don't quite understand. I have some
<br>
code that is meant to open a file for reading, but at compile time I get
<br>
&quot;Could not resolve generic procedure mpi_file_set_view&quot;
<br>
<p>I am using openmpi 1.2-1 compiled with Torque and the PGI compilers.
<br>
<p>The oddity is that when I change the line from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_SET_VIEW(fh, 0, MPI_REAL4, MPI_REAL4, 'native',
<br>
MPI_INFO_NULL, ierr)
<br>
To:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_SET_VIEW(fh, empty, MPI_REAL4, MPI_REAL4,
<br>
'native', MPI_INFO_NULL, ierr)
<br>
<p>It compiles fine. I don't understand why I get an error when passing a
<br>
literal integer rather than using a variable for a placeholder for the
<br>
displacement argument.
<br>
<p>Any feedback or information to help me learn is appreciated.
<br>
<p><p>Brian Andrus perotsystems 
<br>
Site Manager | Sr. Computer Scientist 
<br>
Naval Research Lab
<br>
7 Grace Hopper Ave, Monterey, CA  93943
<br>
Phone (831) 656-4839 | Fax (831) 656-4866 
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4029/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4030.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Previous message:</strong> <a href="4028.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4034.php">Jeff Squyres: "Re: [OMPI users] mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="4034.php">Jeff Squyres: "Re: [OMPI users] mpi_file_set_view"</a>
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
