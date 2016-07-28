<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 12:03:07 2007" -->
<!-- isoreceived="20071017160307" -->
<!-- sent="Wed, 17 Oct 2007 11:02:46 -0500" -->
<!-- isosent="20071017160246" -->
<!-- name="Sajjad Tabib" -->
<!-- email="stabib_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI can't open PML cm" -->
<!-- id="OFC6E7EF32.C1220DF5-ON86257377.005557F3-86257377.005824D2_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Sajjad Tabib (<em>stabib_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 12:02:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI users] Open MPI can't open PML cm"</a>
<li><strong>Previous message:</strong> <a href="4228.php">Yuan Wan: "[OMPI users] OMPI not work with Intel '-fast' option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI users] Open MPI can't open PML cm"</a>
<li><strong>Reply:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI users] Open MPI can't open PML cm"</a>
<li><strong>Maybe reply:</strong> <a href="4288.php">Sajjad Tabib: "Re: [OMPI users] Open MPI can't open PML cm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to use the cm component from pml, but when I execute the 
<br>
command: &quot;mpirun -np 2 --mca pml cm ompi_test&quot;, I get the error message 
<br>
that &quot;No available pml components were found&quot;. I did a ompi_info to see if 
<br>
the cm component exist, and it does. The output of &quot;&gt;ompi_info | grep cm&quot; 
<br>
was &quot;MCA pml: cm (MCA v1.0, API v1.0, Component v1.3)&quot;. I have also set my 
<br>
&nbsp;LD_LIBRARY_PATH as instructed by the FAQs. I have even reconfigured and 
<br>
rebuilt open-mpi, but that didn't fix the problem either. I am wondering 
<br>
whether a process on my system could interfere with opening the cm 
<br>
component. I don't know the answer to this, but thought that I should 
<br>
throw it out there.
<br>
Anyways, I am not sure what to do next to troubleshoot this problem and 
<br>
was hoping that somebody could give me pointers on what might be wrong or 
<br>
what I could check/do next.
<br>
<p>Thank You, 
<br>
<p>Sajjad Tabib
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4229/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI users] Open MPI can't open PML cm"</a>
<li><strong>Previous message:</strong> <a href="4228.php">Yuan Wan: "[OMPI users] OMPI not work with Intel '-fast' option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI users] Open MPI can't open PML cm"</a>
<li><strong>Reply:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI users] Open MPI can't open PML cm"</a>
<li><strong>Maybe reply:</strong> <a href="4288.php">Sajjad Tabib: "Re: [OMPI users] Open MPI can't open PML cm"</a>
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
