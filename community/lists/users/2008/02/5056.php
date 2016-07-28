<?
$subject_val = "[OMPI users] MPI Reduce Error when using C++, C, F77 and F90 in same executable";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 16:59:11 2008" -->
<!-- isoreceived="20080220215911" -->
<!-- sent="Wed, 20 Feb 2008 21:58:32 +0000" -->
<!-- isosent="20080220215832" -->
<!-- name="Si Hammond" -->
<!-- email="simon.hammond_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Reduce Error when using C++, C, F77 and F90 in same executable" -->
<!-- id="47BCA288.5080805_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI Reduce Error when using C++, C, F77 and F90 in same executable<br>
<strong>From:</strong> Si Hammond (<em>simon.hammond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 16:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5057.php">Kevin Durda: "Re: [OMPI users] Specifying -wdir"</a>
<li><strong>Previous message:</strong> <a href="5055.php">R C Pasianot: "[OMPI users] Specifying -wdir"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Guys,
<br>
<p>We have a very large executable written in C++, C, F77 and F90 (and we 
<br>
use all of these compilers!). Our code compiles and links fine but when 
<br>
we run it on our cluster (under PBSPro) we get the errors at the bottom 
<br>
of the email.
<br>
<p>I wondered if you guys could shed any light on this? Seems to be an odd 
<br>
error than MPI_COMM_WORLD is an invalid communicator? Do you think its a 
<br>
hardware fault or a compilation issue? For reference we're using OpenMPI 
<br>
1.2.5 with InfiniBand connected via a Voltaire switch. Processors are 
<br>
Intel Dual Core. Compilers are GNU C (gcc), C++ (g++) and gfortran.
<br>
<p><p><p>[node207:12109] *** An error occurred in MPI_Allreduce
<br>
[node109:11337] *** An error occurred in MPI_Allreduce
<br>
[node109:11337] *** on communicator MPI_COMM_WORLD
<br>
[node109:11337] *** MPI_ERR_COMM: invalid communicator
<br>
[node109:11337] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node117:11236] *** An error occurred in MPI_Allreduce
<br>
[node117:11236] *** on communicator MPI_COMM_WORLD
<br>
[node117:11236] *** MPI_ERR_COMM: invalid communicator
<br>
[node117:11236] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node113:11288] *** An error occurred in MPI_Allreduce
<br>
[node113:11288] *** on communicator MPI_COMM_WORLD
<br>
[node113:11288] *** MPI_ERR_COMM: invalid communicator
<br>
[node113:11288] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node111:11295] *** An error occurred in MPI_Allreduce
<br>
[node111:11295] *** on communicator MPI_COMM_WORLD
<br>
[node111:11295] *** MPI_ERR_COMM: invalid communicator
<br>
[node111:11295] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node110:11295] *** An error occurred in MPI_Allreduce
<br>
[node110:11295] *** on communicator MPI_COMM_WORLD
<br>
[node110:11295] *** MPI_ERR_COMM: invalid communicator
<br>
[node110:11295] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node115:11496] *** An error occurred in MPI_Allreduce
<br>
[node115:11496] *** on communicator MPI_COMM_WORLD
<br>
[node115:11496] *** MPI_ERR_COMM: invalid communicator
<br>
[node115:11496] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node118:11239] *** An error occurred in MPI_Allreduce
<br>
[node118:11239] *** on communicator MPI_COMM_WORLD
<br>
[node118:11239] *** MPI_ERR_COMM: invalid communicator
<br>
[node118:11239] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node116:11249] *** An error occurred in MPI_Allreduce
<br>
[node116:11249] *** on communicator MPI_COMM_WORLD
<br>
[node116:11249] *** MPI_ERR_COMM: invalid communicator
<br>
[node116:11249] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node119:11239] *** An error occurred in MPI_Allreduce
<br>
[node119:11239] *** on communicator MPI_COMM_WORLD
<br>
[node119:11239] *** MPI_ERR_COMM: invalid communicator
<br>
[node119:11239] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node207:12109] *** on communicator MPI_COMM_WORLD
<br>
[node207:12109] *** MPI_ERR_COMM: invalid communicator
<br>
[node207:12109] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node114:11261] *** An error occurred in MPI_Allreduce
<br>
[node114:11261] *** on communicator MPI_COMM_WORLD
<br>
[node114:11261] *** MPI_ERR_COMM: invalid communicator
<br>
[node114:11261] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node206:12030] *** An error occurred in MPI_Allreduce
<br>
[node206:12030] *** on communicator MPI_COMM_WORLD
<br>
[node206:12030] *** MPI_ERR_COMM: invalid communicator
<br>
[node206:12030] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node117:11237] *** An error occurred in MPI_Allreduce
<br>
[node113:11287] *** An error occurred in MPI_Allreduce
<br>
[node111:11293] *** An error occurred in MPI_Allreduce
<br>
[node110:11293] *** An error occurred in MPI_Allreduce
<br>
[node110:11293] *** on communicator MPI_COMM_WORLD
<br>
[node110:11293] *** MPI_ERR_COMM: invalid communicator
<br>
[node110:11293] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node115:11495] *** An error occurred in MPI_Allreduce
<br>
[node118:11237] *** An error occurred in MPI_Allreduce
<br>
[node118:11237] *** on communicator MPI_COMM_WORLD
<br>
[node118:11237] *** MPI_ERR_COMM: invalid communicator
<br>
[node118:11237] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node116:11247] *** An error occurred in MPI_Allreduce
<br>
[node116:11247] *** on communicator MPI_COMM_WORLD
<br>
[node116:11247] *** MPI_ERR_COMM: invalid communicator
<br>
[node116:11247] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node119:11238] *** An error occurred in MPI_Allreduce
<br>
[node114:11262] *** An error occurred in MPI_Allreduce
<br>
[node206:12029] *** An error occurred in MPI_Allreduce
<br>
[node206:12029] *** on communicator MPI_COMM_WORLD
<br>
[node206:12029] *** MPI_ERR_COMM: invalid communicator
<br>
[node206:12029] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node117:11238] *** An error occurred in MPI_Allreduce
<br>
[node113:11289] *** An error occurred in MPI_Allreduce
<br>
[node111:11294] *** An error occurred in MPI_Allreduce
<br>
[node110:11294] *** An error occurred in MPI_Allreduce
<br>
[node110:11294] *** on communicator MPI_COMM_WORLD
<br>
[node110:11294] *** MPI_ERR_COMM: invalid communicator
<br>
[node110:11294] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node115:11497] *** An error occurred in MPI_Allreduce
<br>
[node115:11497] *** on communicator MPI_COMM_WORLD
<br>
[node118:11238] *** An error occurred in MPI_Allreduce
<br>
[node118:11238] *** on communicator MPI_COMM_WORLD
<br>
[node118:11238] *** MPI_ERR_COMM: invalid communicator
<br>
[node118:11238] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node116:11248] *** An error occurred in MPI_Allreduce
<br>
[node116:11248] *** on communicator MPI_COMM_WORLD
<br>
[node116:11248] *** MPI_ERR_COMM: invalid communicator
<br>
[node116:11248] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node119:11240] *** An error occurred in MPI_Allreduce
<br>
[node114:11263] *** An error occurred in MPI_Allreduce
<br>
[node114:11263] *** on communicator MPI_COMM_WORLD
<br>
[node114:11263] *** MPI_ERR_COMM: invalid communicator
<br>
[node114:11263] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node206:12031] *** An error occurred in MPI_Allreduce
<br>
[node206:12031] *** on communicator MPI_COMM_WORLD
<br>
[node206:12031] *** MPI_ERR_COMM: invalid communicator
<br>
[node206:12031] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node117:11237] *** on communicator MPI_COMM_WORLD
<br>
[node117:11237] *** MPI_ERR_COMM: invalid communicator
<br>
[node117:11237] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node113:11287] *** on communicator MPI_COMM_WORLD
<br>
[node113:11287] *** MPI_ERR_COMM: invalid communicator
<br>
[node113:11287] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node111:11293] *** on communicator MPI_COMM_WORLD
<br>
[node111:11293] *** MPI_ERR_COMM: invalid communicator
<br>
[node111:11293] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node115:11495] *** on communicator MPI_COMM_WORLD
<br>
[node115:11495] *** MPI_ERR_COMM: invalid communicator
<br>
[node115:11495] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node119:11238] *** on communicator MPI_COMM_WORLD
<br>
[node119:11238] *** MPI_ERR_COMM: invalid communicator
<br>
[node119:11238] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node114:11262] *** on communicator MPI_COMM_WORLD
<br>
[node114:11262] *** MPI_ERR_COMM: invalid communicator
<br>
[node114:11262] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node117:11238] *** on communicator MPI_COMM_WORLD
<br>
[node117:11238] *** MPI_ERR_COMM: invalid communicator
<br>
[node117:11238] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node113:11289] *** on communicator MPI_COMM_WORLD
<br>
[node113:11289] *** MPI_ERR_COMM: invalid communicator
<br>
[node113:11289] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node111:11294] *** on communicator MPI_COMM_WORLD
<br>
[node111:11294] *** MPI_ERR_COMM: invalid communicator
<br>
[node111:11294] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node115:11497] *** MPI_ERR_COMM: invalid communicator
<br>
[node115:11497] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node119:11240] *** on communicator MPI_COMM_WORLD
<br>
[node119:11240] *** MPI_ERR_COMM: invalid communicator
<br>
[node119:11240] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_tm_module.c 
<br>
at line 572
<br>
[node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at 
<br>
line 90
<br>
[node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[node109:11335] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_tm_module.c 
<br>
at line 603
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job. 
<br>
Returned value Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
[node117:11235] OOB: Connection to HNP lost
<br>
[node113:11286] OOB: Connection to HNP lost
<br>
[node111:11292] OOB: Connection to HNP lost
<br>
[node115:11494] OOB: Connection to HNP lost
<br>
[node119:11237] OOB: Connection to HNP lost
<br>
[node116:11246] OOB: Connection to HNP lost
<br>
[node206:12028] OOB: Connection to HNP lost
<br>
[node114:11260] OOB: Connection to HNP lost
<br>
<p><p><pre>
-- 
Si Hammond
Performance Prediction and Analysis Lab,
High Performance Systems Group,
University of Warwick, UK
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5057.php">Kevin Durda: "Re: [OMPI users] Specifying -wdir"</a>
<li><strong>Previous message:</strong> <a href="5055.php">R C Pasianot: "[OMPI users] Specifying -wdir"</a>
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
