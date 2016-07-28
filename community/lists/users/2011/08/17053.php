<?
$subject_val = "[OMPI users] An MPI performance related question...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 11 17:43:30 2011" -->
<!-- isoreceived="20110811214330" -->
<!-- sent="Thu, 11 Aug 2011 16:42:30 -0500" -->
<!-- isosent="20110811214230" -->
<!-- name="Yen, Joseph" -->
<!-- email="Joseph.Yen_at_[hidden]" -->
<!-- subject="[OMPI users] An MPI performance related question..." -->
<!-- id="E2897CE0EF8A6C488730DB4DC98B852758481CFB21_at_TULMSG01.jade.jacobs.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E2897CE0EF8A6C488730DB4DC98B852758481CFB20_at_TULMSG01.jade.jacobs.com" -->
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
<strong>Subject:</strong> [OMPI users] An MPI performance related question...<br>
<strong>From:</strong> Yen, Joseph (<em>Joseph.Yen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-11 17:42:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17054.php">Jeff Squyres: "[OMPI users] open-mpi.org scheduled outage"</a>
<li><strong>Previous message:</strong> <a href="17052.php">CB: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks a lot for posting my question. I am using Vampire Trace (VT) library for performance diagnosis and enhancement. An excerpted output of the code profiling using VT looks like the following table where the bottleneck process is named 'sync' (in the first row). I did not know or use a function 'sync' in my MPI code. Can someone tell me how 'sync' enters the context of an MPI code and how one may do to mitigate the related bottleneck problem? Thanks so much for help.
<br>
<p>Joseph
<br>
<p>==================================================================
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;excl. time  incl. time
<br>
*excl. time  incl. time      calls      / call      / call             name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;23.710s     23.710s          2       11.855s     11.855s        sync
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.403s      3.403s          2            1.701s      1.701s          MPI_Barrier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.240s      3.269s          1            3.240s      3.269s         MPI_Init
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.966s      1.966s         42        46.812ms    46.812ms  MPI_Waitall
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.680s      0.680s    10.3125   65.932ms    65.932ms  MPI_Wait
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.639s      0.639s          2           0.320s          0.320s     MPI_Allreduce
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.403s      0.403s 806017.625     0.499us  0.499us  _ZN14CellTetLaminar6ddendzEi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.359s      0.359s 1134916.62     0.315us  0.315us  _2__STRING.244
<br>
<p><p><p>________________________________
<br>
NOTICE - This communication may contain confidential and privileged information that is for the sole use of the intended recipient. Any viewing, copying or distribution of, or reliance on this message by unintended recipients is strictly prohibited. If you have received this message in error, please notify us immediately by replying to the message and deleting it from your computer.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17053/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17054.php">Jeff Squyres: "[OMPI users] open-mpi.org scheduled outage"</a>
<li><strong>Previous message:</strong> <a href="17052.php">CB: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
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
