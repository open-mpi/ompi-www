<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 02:25:53 2007" -->
<!-- isoreceived="20070117072553" -->
<!-- sent="Wed, 17 Jan 2007 17:25:49 +1000" -->
<!-- isosent="20070117072549" -->
<!-- name="eddie168" -->
<!-- email="eddie168+ompi_user_at_[hidden]" -->
<!-- subject="[OMPI users] Can't start more than one process in a node as normal user" -->
<!-- id="b62da3030701162325q242c174fq4c016f5f03793a10_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> eddie168 (<em>eddie168+ompi_user_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 02:25:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2473.php">Adrian Knoth: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Previous message:</strong> <a href="2471.php">aaron.mcdonough_at_[hidden]: "[OMPI users]  openmpi on altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2476.php">Ralph H Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Reply:</strong> <a href="2476.php">Ralph H Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Reply:</strong> <a href="2480.php">Brian W. Barrett: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have recently installed OpenMPI 1.1.2 on a OpenSSI cluster running Fedora
<br>
core 3. I tested a simple hello world mpi program (attached) and it runs ok
<br>
as root. However, if I run the same program under normal user, it gives the
<br>
following error:
<br>
<p>[eddie_at_oceanus:~/home2/mpi_tut]$ mpirun -np 2 tut01
<br>
[oceanus:125089] mca_common_sm_mmap_init: ftruncate failed with errno=13
<br>
[oceanus:125089] mca_mpool_sm_init: unable to create shared memory mapping (
<br>
/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe/1/shared_mem_pool.localhost
<br>
)
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[eddie_at_oceanus:~/home2/mpi_tut]$
<br>
<p>Am I need to give certain permission to the user in order to oversubscribe
<br>
processes?
<br>
<p>Thanks in advance,
<br>
<p>Eddie.
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2472/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2472/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2473.php">Adrian Knoth: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Previous message:</strong> <a href="2471.php">aaron.mcdonough_at_[hidden]: "[OMPI users]  openmpi on altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2476.php">Ralph H Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Reply:</strong> <a href="2476.php">Ralph H Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Reply:</strong> <a href="2480.php">Brian W. Barrett: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
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
