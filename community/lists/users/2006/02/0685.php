<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 22 10:08:15 2006" -->
<!-- isoreceived="20060222150815" -->
<!-- sent="Wed, 22 Feb 2006 16:07:04 +0100" -->
<!-- isosent="20060222150704" -->
<!-- name="Cezary Sliwa" -->
<!-- email="sliwa_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_SEND blocks when crossing node boundary" -->
<!-- id="43FC7E18.30309_at_blue.cft.edu.pl" -->
<!-- charset="ISO-8859-2" -->
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
<strong>From:</strong> Cezary Sliwa (<em>sliwa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-22 10:07:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0686.php">Aniruddha Shet: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<li><strong>Previous message:</strong> <a href="0684.php">George Bosilca: "Re: [OMPI users] Connection reset by peer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0712.php">Jeff Squyres: "Re: [OMPI users] MPI_SEND blocks when crossing node boundary"</a>
<li><strong>Reply:</strong> <a href="0712.php">Jeff Squyres: "Re: [OMPI users] MPI_SEND blocks when crossing node boundary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My program runs fine with openmpi-1.0.1 when run from the command line 
<br>
(5 processes with empty host file), but when I schedule it with qsub to 
<br>
run on 2 nodes it blocks on MPI_SEND
<br>
<p>(gdb) info stack
<br>
#0  0x00000034db30c441 in __libc_sigaction () from 
<br>
/lib64/tls/libpthread.so.0
<br>
#1  0x0000000000573002 in opal_evsignal_recalc ()
<br>
#2  0x0000000000582a3c in poll_dispatch ()
<br>
#3  0x00000000005729f2 in opal_event_loop ()
<br>
#4  0x0000000000577e68 in opal_progress ()
<br>
#5  0x00000000004eed4a in mca_pml_ob1_send ()
<br>
#6  0x000000000049abdd in PMPI_Send ()
<br>
#7  0x0000000000499dc0 in pmpi_send__ ()
<br>
#8  0x000000000042d5d8 in MAIN__ () at main.f:90
<br>
#9  0x00000000005877de in main (argc=Variable &quot;argc&quot; is not available.
<br>
)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0686.php">Aniruddha Shet: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<li><strong>Previous message:</strong> <a href="0684.php">George Bosilca: "Re: [OMPI users] Connection reset by peer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0712.php">Jeff Squyres: "Re: [OMPI users] MPI_SEND blocks when crossing node boundary"</a>
<li><strong>Reply:</strong> <a href="0712.php">Jeff Squyres: "Re: [OMPI users] MPI_SEND blocks when crossing node boundary"</a>
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
