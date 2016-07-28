<?
$subject_val = "[OMPI users] How to checkpoint atomic function in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 14 05:26:48 2010" -->
<!-- isoreceived="20100614092648" -->
<!-- sent="Mon, 14 Jun 2010 18:26:43 +0900" -->
<!-- isosent="20100614092643" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="[OMPI users] How to checkpoint atomic function in OpenMPI" -->
<!-- id="AANLkTinZBxMyuLHI1qvPhTVAJeKOCGS2hzJFnBQlgAid_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to checkpoint atomic function in OpenMPI<br>
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-14 05:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13321.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13319.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13673.php">Josh Hursey: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13673.php">Josh Hursey: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I have a MPI program as follows:
<br>
-------------------
<br>
int main(){
<br>
&nbsp;&nbsp;&nbsp;MPI_Init();
<br>
&nbsp;&nbsp;&nbsp;......
<br>
&nbsp;&nbsp;&nbsp;for (i=0; i&lt;10000; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_atomic_func();
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
--------------------
<br>
<p>The runtime of this program mainly involves in running the loop and
<br>
my_atomic_func() takes a little bit long.
<br>
Here I want my_atomic_func() to be operated atomically, but the timing of
<br>
checkpointing (by running ompi-checkpoint command) may be in the middle of
<br>
my_atomic_func() operation and hence ompi-restart may fail to restart
<br>
correctly.
<br>
<p>So my question is:
<br>
+ At the checkpoint time (executing ompi-checkpoint), is there a way to let
<br>
OpenMPI wait until my_atomic_func()  finishes its operation?
<br>
+ How does ompi-checkpoint operate to checkpoint MPI threads?
<br>
<p>Regards,
<br>
Nguyen Toan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13320/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13321.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13319.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13673.php">Josh Hursey: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13673.php">Josh Hursey: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
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
