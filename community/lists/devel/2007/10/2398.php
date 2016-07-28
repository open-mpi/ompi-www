<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 03:32:18 2007" -->
<!-- isoreceived="20071008073218" -->
<!-- sent="Mon, 8 Oct 2007 09:32:11 +0200" -->
<!-- isosent="20071008073211" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] COMM_SPAWN communication failures" -->
<!-- id="F3006E09-519C-4441-8ED2-0B77D26B6D4E_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-08 03:32:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2399.php">Aurelien Bouteiller: "[OMPI devel] Indirect calls to wait* and test*"</a>
<li><strong>Previous message:</strong> <a href="2397.php">Jeff Squyres: "[OMPI devel] FYI: MorphMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In last night's MTT, I got a bunch of errors in COMM_SPAWN.  I know  
<br>
we're expecting it to fail (possibly/probably due to IOF errors), but  
<br>
this didn't appear to be what we expected.  For simplicity, I  
<br>
compiled the IBM test suite manually and ran the spawn test:
<br>
<p>[0:30] svbu-mpi:~/svn/ompi-tests/ibm/dynamic % mpirun -np 3 spawn
<br>
[svbu-mpi001.cisco.com:02845] [1,1] ORTE_ERROR_LOG: Communication  
<br>
failure in file grpcomm_basic_module.c at line 666
<br>
[svbu-mpi001.cisco.com:02845] [1,1] ORTE_ERROR_LOG: Communication  
<br>
failure in file communicator/comm_dyn.c at line 274
<br>
[**ERROR**]: MPI_COMM_WORLD rank 1, file spawn.c:114:
<br>
ERROR: MPI_Comm_spawn returned errcode[0] = -112
<br>
[svbu-mpi001.cisco.com:02845] MPI_ABORT invoked on rank 1 in  
<br>
communicator MPI_COMM_WORLD with errorcode 1
<br>
[svbu-mpi001.cisco.com:02846] [1,2] ORTE_ERROR_LOG: Communication  
<br>
failure in file grpcomm_basic_module.c at line 666
<br>
[svbu-mpi001.cisco.com:02846] [1,2] ORTE_ERROR_LOG: Communication  
<br>
failure in file communicator/comm_dyn.c at line 274
<br>
[**ERROR**]: MPI_COMM_WORLD rank 2, file spawn.c:114:
<br>
ERROR: MPI_Comm_spawn returned errcode[0] = -112
<br>
[svbu-mpi001.cisco.com:02846] MPI_ABORT invoked on rank 2 in  
<br>
communicator MPI_COMM_WORLD with errorcode 1
<br>
<p>This looks odd to me (&quot;communication failure&quot;).  Ralph -- can you  
<br>
investigate?
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2399.php">Aurelien Bouteiller: "[OMPI devel] Indirect calls to wait* and test*"</a>
<li><strong>Previous message:</strong> <a href="2397.php">Jeff Squyres: "[OMPI devel] FYI: MorphMPI"</a>
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
