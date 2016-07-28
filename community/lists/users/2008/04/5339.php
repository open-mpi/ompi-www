<?
$subject_val = "Re: [OMPI users] An error occurred in MPI_comm_size";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 06:05:18 2008" -->
<!-- isoreceived="20080408100518" -->
<!-- sent="Tue, 8 Apr 2008 03:04:55 -0700 (PDT)" -->
<!-- isosent="20080408100455" -->
<!-- name="yacob sen" -->
<!-- email="yacob_123_at_[hidden]" -->
<!-- subject="Re: [OMPI users] An error occurred in MPI_comm_size" -->
<!-- id="9165.43429.qm_at_web53412.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] An error occurred in MPI_comm_size" -->
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
<strong>Subject:</strong> Re: [OMPI users] An error occurred in MPI_comm_size<br>
<strong>From:</strong> yacob sen (<em>yacob_123_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-08 06:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5340.php">Reuti: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<li><strong>Previous message:</strong> <a href="5338.php">Terry Frankcombe: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<li><strong>Maybe in reply to:</strong> <a href="5335.php">yacob sen: "[OMPI users] An error occurred in MPI_comm_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5340.php">Reuti: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<li><strong>Reply:</strong> <a href="5340.php">Reuti: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All
<br>
<p>Thank you Brock and Terry for your comments. I did now install manually openmpi. Now openmpi works
<br>
properly. I can compile and run my programs.It is so wonderful now. The result is now the same as when 
<br>
I run it in Linux cluster and on my dual processor Laptop.
<br>
<p><p>When I run : mpirun -np 4 ./test  (test being the exe file coming form my the compiled fortran program).
<br>
<p>The program still give a result based on 4 processor. How can this be true while I have only two processor
<br>
in my laptop.
<br>
<p>Can any one comment on this ?
<br>
<p>Regards
<br>
yacob 
<br>
<p><p>----- Original Message ----
<br>
From: yacob sen &lt;yacob_123_at_[hidden]&gt;
<br>
To: users_at_[hidden]
<br>
Sent: Monday, April 7, 2008 5:08:39 PM
<br>
Subject: An error occurred in MPI_comm_size
<br>
<p><p><p>Dear All,
<br>
<p>I have just installed openmpi/mpich in ubuntu 7.10 in my linux machine which has  a dual processor. 
<br>
<p>I compiled my fortran program as follows:
<br>
<p>mpif90  add.f90 -o add_n
<br>
<p>I, however, forced to copy &quot;mpif.h&quot; library in my working directory where i run my program and also I  inserted an additional line inside the file &quot;/etc/openmpi/openmpi-mca-params.conf&quot;, the following : btl=^openib.
<br>
<p><p>I have then run the program as:
<br>
<p>mpirun -np 2 ./add_n  (here I use 2
<br>
&nbsp;processor as my dual laptop has two processor)
<br>
<p>What I got is the following error message :
<br>
<p>[geosl063:13781] *** An error occurred in MPI_comm_size
<br>
[geosl063:13780] *** An error occurred in MPI_comm_size
<br>
[geosl063:13780] *** on communicator MPI_COMM_WORLD
<br>
[geosl063:13780] *** MPI_ERR_COMM: invalid communicator
<br>
[geosl063:13780] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[geosl063:13781] *** on communicator MPI_COMM_WORLD
<br>
[geosl063:13781] *** MPI_ERR_COMM: invalid communicator
<br>
<p><p>I used  MPI commands to program my fortran code. The program has been running in a linux cluster. The point here is to develop my parallel program in my linux laptop before I go and run it in a Linux cluster.
<br>
<p>Any comments. I appreciate any comments
<br>
<p>Thank you so much
<br>
<p><p>Yacob
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You rock. That's why Blockbuster's offering you one month of Blockbuster Total Access, No Cost.
<br>
<p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
You rock. That's why Blockbuster's offering you one month of Blockbuster Total Access, No Cost.  
<br>
<a href="http://tc.deals.yahoo.com/tc/blockbuster/text5.com">http://tc.deals.yahoo.com/tc/blockbuster/text5.com</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5339/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5340.php">Reuti: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<li><strong>Previous message:</strong> <a href="5338.php">Terry Frankcombe: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<li><strong>Maybe in reply to:</strong> <a href="5335.php">yacob sen: "[OMPI users] An error occurred in MPI_comm_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5340.php">Reuti: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
<li><strong>Reply:</strong> <a href="5340.php">Reuti: "Re: [OMPI users] An error occurred in MPI_comm_size"</a>
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
