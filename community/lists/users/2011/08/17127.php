<?
$subject_val = "[OMPI users] Question regarding SELF-checkpointing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 31 06:36:54 2011" -->
<!-- isoreceived="20110831103654" -->
<!-- sent="Wed, 31 Aug 2011 10:36:49 +0000" -->
<!-- isosent="20110831103649" -->
<!-- name="Faisal Shahzad" -->
<!-- email="itsfaisi_at_[hidden]" -->
<!-- subject="[OMPI users] Question regarding SELF-checkpointing" -->
<!-- id="SNT118-W418150E4298ED484A3F48D5160_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Question regarding SELF-checkpointing<br>
<strong>From:</strong> Faisal Shahzad (<em>itsfaisi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-31 06:36:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17128.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17126.php">Fabien: "[OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17130.php">Josh Hursey: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>Reply:</strong> <a href="17130.php">Josh Hursey: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Group,
<br>
I have a mpi-program in which every process is communicating with its neighbors. When SELF-checkpointing, every process writes to a separate file.Problem is that sometimes after making a checkpoint, program does not continue again. Having more number of processes makes this problem severe.With just 1 process (no communication), SEFL-checkpointing works normally with no problem.I have tried different '--mca btl' parameters (openib,tcp,sm,self), but problem persists.I would very much appreciate your support regarding it.
<br>
Kind regards,Faisal 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17127/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17128.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17126.php">Fabien: "[OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17130.php">Josh Hursey: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>Reply:</strong> <a href="17130.php">Josh Hursey: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
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
