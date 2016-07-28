<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 03:57:54 2014" -->
<!-- isoreceived="20140827075754" -->
<!-- sent="Wed, 27 Aug 2014 16:57:51 +0900" -->
<!-- isosent="20140827075751" -->
<!-- name="Tetsuya Mishima" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="201408270757.AA00011_at_MCML0096.jcity.maeda.co.jp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="05937868-C6FE-43A0-8CFE-D40099EDA555_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running a hybrid MPI+openMP program<br>
<strong>From:</strong> Tetsuya Mishima (<em>tmishima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 03:57:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25162.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25160.php">Benjamin Giehle: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>In reply to:</strong> <a href="25116.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25162.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25162.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti and Ralph,
<br>
<p>How do you think if we accept bind-to none option even when the pe=N option is provided?
<br>
<p>just like:
<br>
mpirun -map-by slot:pe=N -bind-to none ./inverse
<br>
<p>If yes, it's easy for me to make a patch.
<br>
<p>Tetsuya
<br>
<p><pre>
----
Tetsuya Mishima  tmishima_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25162.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25160.php">Benjamin Giehle: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>In reply to:</strong> <a href="25116.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25162.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25162.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
