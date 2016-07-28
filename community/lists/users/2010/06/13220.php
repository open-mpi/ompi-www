<?
$subject_val = "[OMPI users] SM failure with mixed 32/64-bit procs on the same machine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  3 10:49:15 2010" -->
<!-- isoreceived="20100603144915" -->
<!-- sent="Thu, 3 Jun 2010 17:29:12 +0300" -->
<!-- isosent="20100603142912" -->
<!-- name="Katz, Jacob" -->
<!-- email="jacob.katz_at_[hidden]" -->
<!-- subject="[OMPI users] SM failure with mixed 32/64-bit procs on the same machine" -->
<!-- id="89F8C511E9BE1F41AE2F1BB0424037F201E8BD60C7_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>Subject:</strong> [OMPI users] SM failure with mixed 32/64-bit procs on the same machine<br>
<strong>From:</strong> Katz, Jacob (<em>jacob.katz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-03 10:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13221.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<li><strong>Previous message:</strong> <a href="13219.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13221.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<li><strong>Reply:</strong> <a href="13221.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have two processes, one a 32bit and another a 64bit, running on the same 64bit machine. When running with TCP BTL everything works fine, however with SM BTL it's not.
<br>
In one application the processes just got stuck - one in Send and the other in Recv. In another application I even saw a segfault inside the MPI libraries in one of the processes.
<br>
<p>Is such scenario officially supported by SM BTL?
<br>
<p>Open MPI: 1.3.3
<br>
Heterogeneous support: yes
<br>
<p>Thanks.
<br>
--------------------------------
<br>
Jacob M. Katz | jacob.katz_at_[hidden]&lt;mailto:jacob.katz_at_[hidden]&gt; | Work: +972-4-865-5726 | iNet: (8)-465-5726
<br>
<p>---------------------------------------------------------------------
<br>
Intel Israel (74) Limited
<br>
<p>This e-mail and any attachments may contain confidential material for
<br>
the sole use of the intended recipient(s). Any review or distribution
<br>
by others is strictly prohibited. If you are not the intended
<br>
recipient, please contact the sender and delete all copies.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13220/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13221.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<li><strong>Previous message:</strong> <a href="13219.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13221.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
<li><strong>Reply:</strong> <a href="13221.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the samemachine"</a>
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
