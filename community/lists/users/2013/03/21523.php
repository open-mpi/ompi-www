<?
$subject_val = "[OMPI users] Send Recv Bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 11 16:09:47 2013" -->
<!-- isoreceived="20130311200947" -->
<!-- sent="Mon, 11 Mar 2013 16:09:43 -0400" -->
<!-- isosent="20130311200943" -->
<!-- name="Nilesh Mahajan" -->
<!-- email="nnmahaja_at_[hidden]" -->
<!-- subject="[OMPI users] Send Recv Bandwidth" -->
<!-- id="CACf6GBJAi1pzLyjYGzbSkK-dqRtrym0QV+17CF3TsUK3bNSE4Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Send Recv Bandwidth<br>
<strong>From:</strong> Nilesh Mahajan (<em>nnmahaja_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-11 16:09:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21524.php">Svyatoslav Korneev: "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<li><strong>Previous message:</strong> <a href="21522.php">Rolf vandeVaart: "Re: [OMPI users] status of cuda across multiple IO hubs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was comparing a simple Send-Recv  program to another program with two
<br>
memcpy's to/from shared memory. Number of processes  = 2 and different
<br>
array sizes (from 10^6 - 10^8 doubles) on IA64. With the --mca btl sm,self
<br>
options I get almost twice the bandwidth compared to the two memcpy's. I
<br>
looked at openmpi source and I cannot figure out if it's using anything
<br>
other than simple glibc memcpy. I must be missing something. Can somebody
<br>
please help?
<br>
<p>Thanks,
<br>
Nilesh.
<br>
<p>P.S. I was not sure if I should post this message in the users or the devl
<br>
list, so I posted to both. Apologies for the multiple postings.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21523/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21524.php">Svyatoslav Korneev: "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<li><strong>Previous message:</strong> <a href="21522.php">Rolf vandeVaart: "Re: [OMPI users] status of cuda across multiple IO hubs?"</a>
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
