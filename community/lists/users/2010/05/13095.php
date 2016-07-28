<?
$subject_val = "Re: [OMPI users] Allgather in inter-communicator bug,";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 03:18:54 2010" -->
<!-- isoreceived="20100520071854" -->
<!-- sent="Thu, 20 May 2010 09:18:49 +0200" -->
<!-- isosent="20100520071849" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Allgather in inter-communicator bug," -->
<!-- id="AANLkTinfEXmMOCeV_HSMCUsAs1yHultHEStrfwC_Nt6h_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTin_aldw2YgHMDeIgIhDE8yr9Hf7MsrIiGW15AmT_at_mail.gmail.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 03:18:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13096.php">Olivier Riff: "[OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Previous message:</strong> <a href="13094.php">jody: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>In reply to:</strong> <a href="13092.php">Battalgazi YILDIRIM: "[OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13105.php">Battalgazi YILDIRIM: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Reply:</strong> <a href="13105.php">Battalgazi YILDIRIM: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I am really no python expert, but it looks to me as if you were
<br>
gathering arrays filled with zeroes:
<br>
&nbsp;&nbsp;a = array('i', [0]) * n
<br>
<p>Shouldn't this line be
<br>
&nbsp;&nbsp;a = array('i', [r])*n
<br>
where r is the rank of the process?
<br>
<p>Jody
<br>
<p><p>On Thu, May 20, 2010 at 12:00 AM, Battalgazi YILDIRIM
<br>
&lt;yildirimga_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to use intercommunicator ::Allgather between two child process.
</span><br>
<span class="quotelev1">&gt; I have fortran and Python code,
</span><br>
<span class="quotelev1">&gt; I am using mpi4py for python. It seems that ::Allgather is not working
</span><br>
<span class="quotelev1">&gt; properly in my desktop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;I have contacted first mpi4py developers (Lisandro Dalcin), he simplified
</span><br>
<span class="quotelev1">&gt; my problem and provided two example files (python.py and fortran.f90,
</span><br>
<span class="quotelev1">&gt; please see below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We tried with different MPI vendors, the following example worked correclty(
</span><br>
<span class="quotelev1">&gt; it means the final print out should be array('i', [1, 2, 3, 4, 5, 6, 7, 8])
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it is not giving correct answer in my two desktop (Redhat and
</span><br>
<span class="quotelev1">&gt; ubuntu) both
</span><br>
<span class="quotelev1">&gt; using OPENMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could yo look at this problem please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to follow our discussion before you, you can go to following
</span><br>
<span class="quotelev1">&gt; link:
</span><br>
<span class="quotelev1">&gt; <a href="http://groups.google.com/group/mpi4py/browse_thread/thread/c17c660ae56ff97e">http://groups.google.com/group/mpi4py/browse_thread/thread/c17c660ae56ff97e</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yildirim_at_memosa:~/python_intercomm$ more python.py
</span><br>
<span class="quotelev1">&gt; from mpi4py import MPI
</span><br>
<span class="quotelev1">&gt; from array import array
</span><br>
<span class="quotelev1">&gt; import os
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; progr = os.path.abspath('a.out')
</span><br>
<span class="quotelev1">&gt; child = MPI.COMM_WORLD.Spawn(progr,[], 8)
</span><br>
<span class="quotelev1">&gt; n = child.remote_size
</span><br>
<span class="quotelev1">&gt; a = array('i', [0]) * n
</span><br>
<span class="quotelev1">&gt; child.Allgather([None,MPI.INT],[a,MPI.INT])
</span><br>
<span class="quotelev1">&gt; child.Disconnect()
</span><br>
<span class="quotelev1">&gt; print a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yildirim_at_memosa:~/python_intercomm$ more fortran.f90
</span><br>
<span class="quotelev1">&gt; program main
</span><br>
<span class="quotelev1">&gt; &#160;use mpi
</span><br>
<span class="quotelev1">&gt; &#160;implicit none
</span><br>
<span class="quotelev1">&gt; &#160;integer :: parent, rank, val, dummy, ierr
</span><br>
<span class="quotelev1">&gt; &#160;call MPI_Init(ierr)
</span><br>
<span class="quotelev1">&gt; &#160;call MPI_Comm_get_parent(parent, ierr)
</span><br>
<span class="quotelev1">&gt; &#160;call MPI_Comm_rank(parent, rank, ierr)
</span><br>
<span class="quotelev1">&gt; &#160;val = rank + 1
</span><br>
<span class="quotelev1">&gt; &#160;call MPI_Allgather(val, &#160; 1, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; dummy, 0, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; parent, ierr)
</span><br>
<span class="quotelev1">&gt; &#160;call MPI_Comm_disconnect(parent, ierr)
</span><br>
<span class="quotelev1">&gt; &#160;call MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end program main
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yildirim_at_memosa:~/python_intercomm$ mpif90 fortran.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yildirim_at_memosa:~/python_intercomm$ python python.py
</span><br>
<span class="quotelev1">&gt; array('i', [0, 0, 0, 0, 0, 0, 0, 0])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; B. Gazi YILDIRIM
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13096.php">Olivier Riff: "[OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Previous message:</strong> <a href="13094.php">jody: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>In reply to:</strong> <a href="13092.php">Battalgazi YILDIRIM: "[OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13105.php">Battalgazi YILDIRIM: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Reply:</strong> <a href="13105.php">Battalgazi YILDIRIM: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
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
