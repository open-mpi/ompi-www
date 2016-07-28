<?
$subject_val = "[OMPI devel] segv in coll tuned";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 09:30:26 2009" -->
<!-- isoreceived="20091012133026" -->
<!-- sent="Mon, 12 Oct 2009 15:30:15 +0200" -->
<!-- isosent="20091012133015" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] segv in coll tuned" -->
<!-- id="453d39990910120630u467bee09ua7045b1be4069b62_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] segv in coll tuned<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-12 09:30:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6956.php">Terry Dontje: "Re: [OMPI devel] segv in coll tuned"</a>
<li><strong>Previous message:</strong> <a href="6954.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6956.php">Terry Dontje: "Re: [OMPI devel] segv in coll tuned"</a>
<li><strong>Reply:</strong> <a href="6956.php">Terry Dontje: "Re: [OMPI devel] segv in coll tuned"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I experience the following error with current trunk r22090. It also occures
<br>
in 1.3 branch.
<br>
#~/work/svn/ompi/branches/1.3//build_x86-64/install/bin/mpirun -H witch21
<br>
-np 4 -mca coll_tuned_use_dynamic_rules 1 ./IMB-MPI1
<br>
Sometimes it's error, and sometimes it's segv. It recreates with np&gt;4.
<br>
[witch21:26540] *** An error occurred in MPI_Barrier
<br>
[witch21:26540] *** on communicator MPI COMMUNICATOR 3 SPLIT FROM 0
<br>
[witch21:26540] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[witch21:26540] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 26540 on
<br>
node witch21 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
3 total processes killed (some possibly by mpirun during cleanup)
<br>
<p>thanks
<br>
Lenny.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6955/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6956.php">Terry Dontje: "Re: [OMPI devel] segv in coll tuned"</a>
<li><strong>Previous message:</strong> <a href="6954.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6956.php">Terry Dontje: "Re: [OMPI devel] segv in coll tuned"</a>
<li><strong>Reply:</strong> <a href="6956.php">Terry Dontje: "Re: [OMPI devel] segv in coll tuned"</a>
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
