<?
$subject_val = "[OMPI users] help me please, about Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 12:51:40 2008" -->
<!-- isoreceived="20080616165140" -->
<!-- sent="Mon, 16 Jun 2008 12:51:31 -0400" -->
<!-- isosent="20080616165131" -->
<!-- name="Tony Smith" -->
<!-- email="dtustudy8_at_[hidden]" -->
<!-- subject="[OMPI users] help me please, about Open MPI" -->
<!-- id="BAY104-W32BC5D00DA99730856FD48FDA90_at_phx.gbl" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] help me please, about Open MPI<br>
<strong>From:</strong> Tony Smith (<em>dtustudy8_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 12:51:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5888.php">Andreas Schäfer: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5886.php">Doug Reeder: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5888.php">Andreas Schäfer: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Reply:</strong> <a href="5888.php">Andreas Schäfer: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sir: 
<br>
<p>&nbsp;
<br>
<p>I am trying to install Open MPI on a cluster that has been installed with mpich-
<br>
<p>gm  MPI. 
<br>
<p>&nbsp;
<br>
<p>I have followed the steps on your website. 
<br>
<p>I can compile and run the Hello_c application correctly.
<br>
<p>&nbsp;
<br>
<p>But, how can I make sure that the application is run by Open MPI not by mpich-
<br>
<p>gm MPI ? 
<br>
<p>&nbsp;
<br>
<p>I have changed PATH and LD_LIBRARY_PATH:
<br>
<p>&nbsp;
<br>
<p>I deleted /opt/mpich-gm/bin from PATH and added 
<br>
<p>/ptmp/myname/openmpi123/ompi123_install/bin/ into PATH. 
<br>
<p>&nbsp;
<br>
<p>LD_LIBRARY_PATH=/ptmp/myname/openmpi123/ompi123_install/lib
<br>
<p>&nbsp;
<br>
<p>And then, I got 
<br>
<p>&nbsp;
<br>
<p>-bash-3.00$ which mpirun
<br>
/ptmp/myname/openmpi123/ompi123_install/bin/mpirun 
<br>
<p>&nbsp;
<br>
<p>In my job script , I used 
<br>
<p>&nbsp;
<br>
<p>&quot;time mpirun -np 16  /ptmp/jxding/openmpi123/openmpi-1.2.3/examples/hello_c&quot;
<br>
<p>Then I added &quot;which mpirun&quot; in my job script, and then submited my job to the 
<br>
cluster , I got :
<br>
====================================
<br>
<p>/opt/mpich-gm/bin/mpirun
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
Hello, world, I am 0 of 1
<br>
0.117u 0.165s 0:09.54 2.8%      0+0k 0+0io 0pf+0w
<br>
<p>====================================
<br>
<p>So , it means that the application is still using MPICH-GM not Open MPI.
<br>
<p>Would you please help me with that ?
<br>
<p><p>thanks, 
<br>
<p>&nbsp;
<br>
<p>Tony
<br>
<p>&nbsp;
<br>
<p>June 16  2008 
<br>
_________________________________________________________________
<br>
Now you can invite friends from Facebook and other groups to join you on Windows Live&#153; Messenger. Add now.
<br>
<a href="https://www.invite2messenger.net/im/?source=TXT_EML_WLH_AddNow_Now">https://www.invite2messenger.net/im/?source=TXT_EML_WLH_AddNow_Now</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5887/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5888.php">Andreas Schäfer: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5886.php">Doug Reeder: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5888.php">Andreas Schäfer: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Reply:</strong> <a href="5888.php">Andreas Schäfer: "Re: [OMPI users] help me please, about Open MPI"</a>
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
