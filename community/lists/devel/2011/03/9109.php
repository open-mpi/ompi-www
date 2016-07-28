<?
$subject_val = "[OMPI devel] Return status of MPI_Probe()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 16:50:23 2011" -->
<!-- isoreceived="20110321205023" -->
<!-- sent="Mon, 21 Mar 2011 16:50:16 -0400" -->
<!-- isosent="20110321205016" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] Return status of MPI_Probe()" -->
<!-- id="CB1B26F9-6813-4015-A110-231B354816D5_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Return status of MPI_Probe()<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 16:50:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9110.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Previous message:</strong> <a href="9108.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9112.php">George Bosilca: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Reply:</strong> <a href="9112.php">George Bosilca: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If MPI_Probe() encounters an error causing it to exit with the 'status.MPI_ERROR' set, say:
<br>
&nbsp;&nbsp;ret = MPI_Probe(MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;status);
<br>
<p>Should it return an error? So should it return:
<br>
&nbsp;- ret = status.MPI_ERROR
<br>
&nbsp;- ret = MPI_ERROR_IN_STATUS
<br>
&nbsp;- ret = MPI_SUCCESS
<br>
Additionally, should it trigger the error handler on the communicator?
<br>
<p>In Open MPI, it will always return MPI_SUCCESS (pml_ob1_iprobe.c:74), but it feels like this is wrong. I looked to the MPI standard for some insight, but could not find where it addresses the return code of MPI_Probe.
<br>
<p>Can anyone shed some light on this topic for me?
<br>
<p>Thanks,
<br>
Josh
<br>
<p><p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9110.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Previous message:</strong> <a href="9108.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9112.php">George Bosilca: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Reply:</strong> <a href="9112.php">George Bosilca: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
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
