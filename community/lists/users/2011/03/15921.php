<?
$subject_val = "[OMPI users] bizarre failure with IMB/openib";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 07:25:59 2011" -->
<!-- isoreceived="20110321112559" -->
<!-- sent="Mon, 21 Mar 2011 11:25:37 +0000" -->
<!-- isosent="20110321112537" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] bizarre failure with IMB/openib" -->
<!-- id="8762rcu34e.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] bizarre failure with IMB/openib<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 07:25:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15922.php">yanyg_at_[hidden]: "[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15920.php">Randall Svancara: "[OMPI users] OpenMPI and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15926.php">Peter Kjellström: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>Reply:</strong> <a href="15926.php">Peter Kjellström: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>Reply:</strong> <a href="15956.php">Dave Love: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to test some new nodes with ConnectX adaptors, and failing to
<br>
get (so far just) IMB to run on them.
<br>
<p>The binary runs on the same cluster using TCP, or using PSM on some
<br>
other IB nodes.  A rebuilt PMB and various existing binaries work with
<br>
openib on the ConnectX nodes running it exactly the same way as IMB.
<br>
I.e. this seems to be something specific to IMB and openib.
<br>
<p>It seems rather bizarre, and I have no idea how to debug it in the
<br>
absence of hints from a web search, i.e. why has it failed to attempt
<br>
the openib BTL in this case.  I can't get any openib-related information
<br>
using obvious MCA verbosity flags.  Can anyone make suggestions?
<br>
<p>I'm using gcc-compiled OMPI 1.4.3 and the current RedHat 5 OFED with IMB
<br>
3.2.2, specifying `btl openib,sm,self' (or `mtl psm' on the Qlogic
<br>
nodes).  I'm not sure what else might be relevant.  The output from
<br>
trying to run IMB follows, for what it's worth.
<br>
<p>&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;At least one pair of MPI processes are unable to reach each other for
<br>
&nbsp;&nbsp;MPI communications.  This means that no Open MPI device has indicated
<br>
&nbsp;&nbsp;that it can be used to communicate between these processes.  This is
<br>
&nbsp;&nbsp;an error; Open MPI requires that all MPI processes be able to reach
<br>
&nbsp;&nbsp;each other.  This error can sometimes be the result of forgetting to
<br>
&nbsp;&nbsp;specify the &quot;self&quot; BTL.
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process 1 ([[25307,1],2]) is on host: lvgig116
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process 2 ([[25307,1],12]) is on host: lvgig117
<br>
&nbsp;&nbsp;&nbsp;&nbsp;BTLs attempted: self sm
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Your MPI job is now going to abort; sorry.
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;It looks like MPI_INIT failed for some reason; your parallel process is
<br>
&nbsp;&nbsp;likely to abort.  There are many reasons that a parallel process can
<br>
&nbsp;&nbsp;fail during MPI_INIT; some of which are due to configuration or environment
<br>
&nbsp;&nbsp;problems.  This failure appears to be an internal failure; here's some
<br>
&nbsp;&nbsp;additional information (which may only be relevant to an Open MPI
<br>
&nbsp;&nbsp;developer):
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;*** The MPI_Init_thread() function was called before MPI_INIT was invoked.
<br>
&nbsp;&nbsp;*** This is disallowed by the MPI standard.
<br>
&nbsp;&nbsp;*** Your MPI job will now abort.
<br>
&nbsp;&nbsp;[lvgig116:8052] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
&nbsp;&nbsp;*** The MPI_Init_thread() function was called before MPI_INIT was invoked.
<br>
&nbsp;&nbsp;*** This is disallowed by the MPI standard.
<br>
&nbsp;&nbsp;*** Your MPI job will now abort.
<br>
<p>&nbsp;&nbsp;...
<br>
<p>&nbsp;&nbsp;[lvgig116:07931] 19 more processes have sent help message help-mca-bml-r2.txt / unreachable proc
<br>
&nbsp;&nbsp;[lvgig116:07931] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
&nbsp;&nbsp;[lvgig116:07931] 19 more processes have sent help message help-mpi-runtime / mpi_init:startup:internal-failure
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15922.php">yanyg_at_[hidden]: "[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15920.php">Randall Svancara: "[OMPI users] OpenMPI and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15926.php">Peter Kjellström: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>Reply:</strong> <a href="15926.php">Peter Kjellström: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>Reply:</strong> <a href="15956.php">Dave Love: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
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
