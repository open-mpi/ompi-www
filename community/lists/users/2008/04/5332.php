<?
$subject_val = "[OMPI users] 32-bit openib btl fails on 64-bit OS";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  6 20:58:52 2008" -->
<!-- isoreceived="20080407005852" -->
<!-- sent="Sun, 6 Apr 2008 20:58:30 -0400" -->
<!-- isosent="20080407005830" -->
<!-- name="Teng Lin" -->
<!-- email="teng.lin_at_[hidden]" -->
<!-- subject="[OMPI users] 32-bit openib btl fails on 64-bit OS" -->
<!-- id="2557D757-EE62-4380-8CEB-C72EE50D3DC9_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] 32-bit openib btl fails on 64-bit OS<br>
<strong>From:</strong> Teng Lin (<em>teng.lin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-06 20:58:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5333.php">Albert Babinskas: "[OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>Previous message:</strong> <a href="5331.php">Andreas Sch&#228;fer: "Re: [OMPI users] Problem with sending vectors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5380.php">Jeff Squyres: "Re: [OMPI users] 32-bit openib btl fails on 64-bit OS"</a>
<li><strong>Reply:</strong> <a href="5380.php">Jeff Squyres: "Re: [OMPI users] 32-bit openib btl fails on 64-bit OS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>In order to run a 32-bit program on a 64-bit cluster, one has to build  
<br>
32-bit OpenMPI. Following some instructions on this mailing list, I  
<br>
successfully built OpenMPI 1.2.4 on 64-bit OS. However, I run into  
<br>
openib problem when I try to run hello_c program. I also built 64-bit  
<br>
OpenMPI from same source. The interesting fact is 64-bit OpenMPI works  
<br>
just fine. Below is the output from orterun,
<br>
<p>############################################################################
<br>
iceland:/home/tlin/test_pbs&gt;/home/tin/openmpi-1.2.4/bin/orterun -np 2  
<br>
--hostfile mach.lst /home/tlin/test_pbs/hello_c.32
<br>
--------------------------------------------------------------------------
<br>
The OpenIB BTL failed to initialize while trying to create an internal
<br>
queue.  This typically indicates a failed OpenFabrics installation or
<br>
faulty hardware.  The failure occured here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Host:        cl1n004
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI source: btl_openib.c:828
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Function:    ibv_create_cq()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Error:       Invalid argument (errno=22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Device:      mthca0
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
The OpenIB BTL failed to initialize while trying to create an internal
<br>
queue.  This typically indicates a failed OpenFabrics installation or
<br>
faulty hardware.  The failure occured here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Host:        cl1n001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI source: btl_openib.c:828
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Function:    ibv_create_cq()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Error:       Invalid argument (errno=22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Device:      mthca0
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or  
<br>
environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or  
<br>
environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
######################################################################
<br>
I saw this error on before on other cluster. Following the instruction  
<br>
on (<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>)  
<br>
does fix the problem. However, I doubt that is the reason why 32 bit  
<br>
OpenMPI does not work on this cluster. Output from limit looks fine to  
<br>
me. And if that is the case, 64 bit OpenMPI will not work.  Any ideas?
<br>
<p><p>Thanks,
<br>
Teng
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5333.php">Albert Babinskas: "[OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>Previous message:</strong> <a href="5331.php">Andreas Sch&#228;fer: "Re: [OMPI users] Problem with sending vectors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5380.php">Jeff Squyres: "Re: [OMPI users] 32-bit openib btl fails on 64-bit OS"</a>
<li><strong>Reply:</strong> <a href="5380.php">Jeff Squyres: "Re: [OMPI users] 32-bit openib btl fails on 64-bit OS"</a>
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
