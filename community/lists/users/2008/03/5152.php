<?
$subject_val = "[OMPI users] build OpenMPI with OpenIB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 05:38:46 2008" -->
<!-- isoreceived="20080307103846" -->
<!-- sent="Fri, 7 Mar 2008 10:36:42 +0000 (GMT)" -->
<!-- isosent="20080307103642" -->
<!-- name="Yuan Wan" -->
<!-- email="ywan_at_[hidden]" -->
<!-- subject="[OMPI users] build OpenMPI with OpenIB" -->
<!-- id="Pine.LNX.4.64.0803071026030.28982_at_cappuccino.ucs.ed.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] build OpenMPI with OpenIB<br>
<strong>From:</strong> Yuan Wan (<em>ywan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-07 05:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5153.php">Gleb Natapov: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="5151.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5153.php">Gleb Natapov: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>Reply:</strong> <a href="5153.php">Gleb Natapov: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>Reply:</strong> <a href="5154.php">Jeff Squyres: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I want to build OpenMPI-1.2.5 on my Infiniband cluster which has OFED-2.1 
<br>
installed.
<br>
<p>I configured OpenMPI as:
<br>
----------------------------------------------------------------------------
<br>
./configure --prefix=/exports/home/local/Cluster-Apps/openmpi/gcc/64/1.2.5 \
<br>
--enable-shared --enable-static --enable-debug \
<br>
--with-openib=/usr/local/Cluster-Apps/infinipath/2.1/ofed
<br>
----------------------------------------------------------------------------
<br>
<p>And 'ompi_info | grep openib' only shows:
<br>
<p>&nbsp;&nbsp;MCA btl: openib (MCA v1.0, API v1.0.1, Component v1.2.5)
<br>
<p>I cannot see:
<br>
<p>&nbsp;&nbsp;MCA mpool: openib (MCA v1.0, API v1.0, Component v1.0)
<br>
<p>No idea why and if this will cause failure.
<br>
<p><p>When I tried to run a MPI code with the option &quot;--mca btl openib,self&quot;, It 
<br>
failed to run with the following messages:
<br>
<p><p>mpirun --mca btl openib,self -np 4 ./hello
<br>
<p>--------------------------------------------------------------------------
<br>
Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
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
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
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
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
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
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.2 is unable to reach 0.1.0 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
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
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node128:16605] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[node128:16605] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c 
<br>
at line 1166
<br>
[node128:16605] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at 
<br>
line 90
<br>
[node128:16605] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[node128:16605] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c 
<br>
at line 1198
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job. Returned 
<br>
value Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>Anyone know where I'm wrong? Thanks
<br>
<p><p>--Yuan
<br>
<p>Yuan Wan
<br>
<pre>
-- 
Unix Section
Information Services Infrastructure Division
University of Edinburgh
tel: 0131 650 4985
email: ywan_at_[hidden]
2012 Computing Services, JCMB
The King's Buildings,
Edinburgh, EH9 3JZ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5153.php">Gleb Natapov: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="5151.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5153.php">Gleb Natapov: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>Reply:</strong> <a href="5153.php">Gleb Natapov: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>Reply:</strong> <a href="5154.php">Jeff Squyres: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
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
