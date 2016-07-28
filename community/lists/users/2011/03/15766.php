<?
$subject_val = "[OMPI users] using MPI through Qt";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 03:39:14 2011" -->
<!-- isoreceived="20110301083914" -->
<!-- sent="Tue, 1 Mar 2011 00:39:10 -0800" -->
<!-- isosent="20110301083910" -->
<!-- name="Eye RCS 51" -->
<!-- email="eye.rcs.51_at_[hidden]" -->
<!-- subject="[OMPI users] using MPI through Qt" -->
<!-- id="AANLkTimp9XLthm8CRrKLNiZjkOB-ZJQ6mH80rn_G6FYA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] using MPI through Qt<br>
<strong>From:</strong> Eye RCS 51 (<em>eye.rcs.51_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 03:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15767.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15765.php">Pak Lui: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15769.php">David Zhang: "Re: [OMPI users] using MPI through Qt"</a>
<li><strong>Reply:</strong> <a href="15769.php">David Zhang: "Re: [OMPI users] using MPI through Qt"</a>
<li><strong>Reply:</strong> <a href="15771.php">Eugene Loh: "Re: [OMPI users] using MPI through Qt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In an effort to make a Qt gui using MPI, I have the following:
<br>
<p>1. Gui started in master node.
<br>
<p>2. In Gui, through a pushbutton, a global variable x is assigned some value;
<br>
let say, x=1000;
<br>
<p>3. I want this value to be know to all nodes. So I used broadcast in the
<br>
function assigning it on the master node and all other nodes.
<br>
<p>4. I printed values of x, which prints all 1000 in all nodes.
<br>
<p>5. Now control has reached to MPI_Finalize in all nodes except master.
<br>
<p>Now If I want to reassign value of x using pushbutton in master node and
<br>
again broadcast to and print in all nodes, can it be done??
<br>
I mean, can I have an MPI function which through GUI is called many times
<br>
and assigns and prints WHILE program is running.
<br>
<p>OR simply can I have a print function which is printing noderank value in
<br>
all nodes whenever pushbutton is pressed while program is running.
<br>
<p>command i used is &quot;mpirun -np 3 ./a.out&quot;.
<br>
<p>Any help will be appreciated.
<br>
Thanks you very much.
<br>
<p><pre>
--
eye51
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15766/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15767.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15765.php">Pak Lui: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15769.php">David Zhang: "Re: [OMPI users] using MPI through Qt"</a>
<li><strong>Reply:</strong> <a href="15769.php">David Zhang: "Re: [OMPI users] using MPI through Qt"</a>
<li><strong>Reply:</strong> <a href="15771.php">Eugene Loh: "Re: [OMPI users] using MPI through Qt"</a>
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
