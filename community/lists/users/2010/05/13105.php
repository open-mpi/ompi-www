<?
$subject_val = "Re: [OMPI users] Allgather in inter-communicator bug,";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 09:43:33 2010" -->
<!-- isoreceived="20100520134333" -->
<!-- sent="Thu, 20 May 2010 09:43:27 -0400" -->
<!-- isosent="20100520134327" -->
<!-- name="Battalgazi YILDIRIM" -->
<!-- email="yildirimga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Allgather in inter-communicator bug," -->
<!-- id="AANLkTikqckWdz8k-Ko_y5Os1X8E27Zr6KaiCbmM8KdDB_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinfEXmMOCeV_HSMCUsAs1yHultHEStrfwC_Nt6h_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Allgather in inter-communicator bug,<br>
<strong>From:</strong> Battalgazi YILDIRIM (<em>yildirimga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 09:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13106.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13104.php">Sang Chul Choi: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>In reply to:</strong> <a href="13095.php">jody: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13106.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Reply:</strong> <a href="13106.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody,
<br>
<p>I think that it is correct, you can  test this example in your desktop,
<br>
<p>thanks,
<br>
<p>On Thu, May 20, 2010 at 3:18 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I am really no python expert, but it looks to me as if you were
</span><br>
<span class="quotelev1">&gt; gathering arrays filled with zeroes:
</span><br>
<span class="quotelev1">&gt;   a = array('i', [0]) * n
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't this line be
</span><br>
<span class="quotelev1">&gt;  a = array('i', [r])*n
</span><br>
<span class="quotelev1">&gt; where r is the rank of the process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 20, 2010 at 12:00 AM, Battalgazi YILDIRIM
</span><br>
<span class="quotelev1">&gt; &lt;yildirimga_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to use intercommunicator ::Allgather between two child
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev2">&gt; &gt; I have fortran and Python code,
</span><br>
<span class="quotelev2">&gt; &gt; I am using mpi4py for python. It seems that ::Allgather is not working
</span><br>
<span class="quotelev2">&gt; &gt; properly in my desktop.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I have contacted first mpi4py developers (Lisandro Dalcin), he
</span><br>
<span class="quotelev1">&gt; simplified
</span><br>
<span class="quotelev2">&gt; &gt; my problem and provided two example files (python.py and fortran.f90,
</span><br>
<span class="quotelev2">&gt; &gt; please see below).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We tried with different MPI vendors, the following example worked
</span><br>
<span class="quotelev1">&gt; correclty(
</span><br>
<span class="quotelev2">&gt; &gt; it means the final print out should be array('i', [1, 2, 3, 4, 5, 6, 7,
</span><br>
<span class="quotelev1">&gt; 8])
</span><br>
<span class="quotelev2">&gt; &gt; )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, it is not giving correct answer in my two desktop (Redhat and
</span><br>
<span class="quotelev2">&gt; &gt; ubuntu) both
</span><br>
<span class="quotelev2">&gt; &gt; using OPENMPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could yo look at this problem please?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you want to follow our discussion before you, you can go to following
</span><br>
<span class="quotelev2">&gt; &gt; link:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://groups.google.com/group/mpi4py/browse_thread/thread/c17c660ae56ff97e">http://groups.google.com/group/mpi4py/browse_thread/thread/c17c660ae56ff97e</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; yildirim_at_memosa:~/python_intercomm$ more python.py
</span><br>
<span class="quotelev2">&gt; &gt; from mpi4py import MPI
</span><br>
<span class="quotelev2">&gt; &gt; from array import array
</span><br>
<span class="quotelev2">&gt; &gt; import os
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; progr = os.path.abspath('a.out')
</span><br>
<span class="quotelev2">&gt; &gt; child = MPI.COMM_WORLD.Spawn(progr,[], 8)
</span><br>
<span class="quotelev2">&gt; &gt; n = child.remote_size
</span><br>
<span class="quotelev2">&gt; &gt; a = array('i', [0]) * n
</span><br>
<span class="quotelev2">&gt; &gt; child.Allgather([None,MPI.INT],[a,MPI.INT])
</span><br>
<span class="quotelev2">&gt; &gt; child.Disconnect()
</span><br>
<span class="quotelev2">&gt; &gt; print a
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; yildirim_at_memosa:~/python_intercomm$ more fortran.f90
</span><br>
<span class="quotelev2">&gt; &gt; program main
</span><br>
<span class="quotelev2">&gt; &gt;  use mpi
</span><br>
<span class="quotelev2">&gt; &gt;  implicit none
</span><br>
<span class="quotelev2">&gt; &gt;  integer :: parent, rank, val, dummy, ierr
</span><br>
<span class="quotelev2">&gt; &gt;  call MPI_Init(ierr)
</span><br>
<span class="quotelev2">&gt; &gt;  call MPI_Comm_get_parent(parent, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;  call MPI_Comm_rank(parent, rank, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;  val = rank + 1
</span><br>
<span class="quotelev2">&gt; &gt;  call MPI_Allgather(val,   1, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev2">&gt; &gt;                     dummy, 0, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev2">&gt; &gt;                     parent, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;  call MPI_Comm_disconnect(parent, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;  call MPI_Finalize(ierr)
</span><br>
<span class="quotelev2">&gt; &gt; end program main
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; yildirim_at_memosa:~/python_intercomm$ mpif90 fortran.f90
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; yildirim_at_memosa:~/python_intercomm$ python python.py
</span><br>
<span class="quotelev2">&gt; &gt; array('i', [0, 0, 0, 0, 0, 0, 0, 0])
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; B. Gazi YILDIRIM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
B. Gazi YILDIRIM
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13105/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13106.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13104.php">Sang Chul Choi: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>In reply to:</strong> <a href="13095.php">jody: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13106.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Reply:</strong> <a href="13106.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
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
