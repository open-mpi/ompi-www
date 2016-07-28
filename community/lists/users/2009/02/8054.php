<?
$subject_val = "[OMPI users] running as rank 0 of 1 for 2 processor";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 01:32:32 2009" -->
<!-- isoreceived="20090213063232" -->
<!-- sent="Fri, 13 Feb 2009 12:02:28 +0530" -->
<!-- isosent="20090213063228" -->
<!-- name="Ramya Narasimhan" -->
<!-- email="varsharamya_at_[hidden]" -->
<!-- subject="[OMPI users] running as rank 0 of 1 for 2 processor" -->
<!-- id="a0e0cf520902122232y763319c5h776a941e04a9def9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] running as rank 0 of 1 for 2 processor<br>
<strong>From:</strong> Ramya Narasimhan (<em>varsharamya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 01:32:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8055.php">Raymond Wan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>Previous message:</strong> <a href="8053.php">Ramya Narasimhan: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8055.php">Raymond Wan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>Reply:</strong> <a href="8055.php">Raymond Wan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have installed openmpi-1.3. When I checked for the example programs,
<br>
the output shows only rank 0 of size 1 for 2 processors. When I gave the
<br>
command: *mpirun -hostfile node -np 2 hello_c*
<br>
the output is
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
<p>In my node file, I have
<br>
*IP address* slots=2 max_slots=2
<br>
I don't know why it is not giving as 0 of 2 and 1 of 2.
<br>
For installation, I gave
<br>
*configure --prefix=/path
<br>
make all
<br>
make install*
<br>
<p>Thanks for any clarifications and suggestions.
<br>
Varsha
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8054/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8055.php">Raymond Wan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>Previous message:</strong> <a href="8053.php">Ramya Narasimhan: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8055.php">Raymond Wan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>Reply:</strong> <a href="8055.php">Raymond Wan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
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
