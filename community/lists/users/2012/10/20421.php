<?
$subject_val = "[OMPI users] [threads] How to configure Open MPI for thread support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  8 15:31:15 2012" -->
<!-- isoreceived="20121008193115" -->
<!-- sent="Mon, 8 Oct 2012 14:31:11 -0500" -->
<!-- isosent="20121008193111" -->
<!-- name="Daniel Mitchell" -->
<!-- email="daniel.lewis.mitchell_at_[hidden]" -->
<!-- subject="[OMPI users] [threads] How to configure Open MPI for thread support" -->
<!-- id="CACSDapYuGRh7TMqjcz2QZ71QbNkg==75AWHd-r3eyfh728+74A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] [threads] How to configure Open MPI for thread support<br>
<strong>From:</strong> Daniel Mitchell (<em>daniel.lewis.mitchell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-08 15:31:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20422.php">Tohiko Looka: "[OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20420.php">Yiannis Papadopoulos: "[OMPI users] Additional rules for valgrind 3.7 and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20423.php">Ralph Castain: "Re: [OMPI users] [threads] How to configure Open MPI for thread support"</a>
<li><strong>Reply:</strong> <a href="20423.php">Ralph Castain: "Re: [OMPI users] [threads] How to configure Open MPI for thread support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I'm writing a hybrid parallel program and it seems that unless I
<br>
configure Open MPI with --enable-thread-multiple, then MPI_Init_thread
<br>
always provides MPI_THREAD_SINGLE, regardless of what I pass for the
<br>
required argument.
<br>
<p>Does this mean that I have to configure with --enable-thread-multiple
<br>
even to use FUNNELED and SERIALIZED threads?
<br>
<p>Daniel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20422.php">Tohiko Looka: "[OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20420.php">Yiannis Papadopoulos: "[OMPI users] Additional rules for valgrind 3.7 and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20423.php">Ralph Castain: "Re: [OMPI users] [threads] How to configure Open MPI for thread support"</a>
<li><strong>Reply:</strong> <a href="20423.php">Ralph Castain: "Re: [OMPI users] [threads] How to configure Open MPI for thread support"</a>
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
