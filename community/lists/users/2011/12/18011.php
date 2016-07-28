<?
$subject_val = "Re: [OMPI users] Shared Memory Collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 19 23:54:44 2011" -->
<!-- isoreceived="20111220045444" -->
<!-- sent="Tue, 20 Dec 2011 10:24:37 +0530" -->
<!-- isosent="20111220045437" -->
<!-- name="Nilesh Mahajan" -->
<!-- email="nnmahaja_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Collectives" -->
<!-- id="CACf6GBKMBpFLK3XcAEMOW=+08EN=02F7UaqLdB=GiF+cZAtUeg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACf6GBJPMW4KVqA54yBFXx8=JDsGqHCco95rQWm0i26YMQpGBQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory Collectives<br>
<strong>From:</strong> Nilesh Mahajan (<em>nnmahaja_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-19 23:54:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18012.php">Mathieu westphal: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18010.php">Shaandar Nyamtulga: "[OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am trying to implement the following collectives in MPI
<br>
sharedmemory, Alltoall, Broadcast, Reduce with zero copy
<br>
optimizations.So for Reduce, my compiler allocates all the send
<br>
buffers in sharedmemory (mmap anonymous), and allocates only one
<br>
receive buffer againin shared memory. Then all the processes reduce to
<br>
the root buffer ina data parallel manner. Now it looks like openmpi is
<br>
doing somethingsimilar except that they must copy from/to the
<br>
send/receive buffers.So my implementation of reduce should perform
<br>
better for large buffersizes. But that is not the case. Anybody knows
<br>
why? Any pointers arewelcome.
<br>
Also the openmpi reduce performance has large variations. I run
<br>
reducewith different array sizes with np = 8 50 times and for a single
<br>
arraysize, I find that there is a significant number of outliers.
<br>
Didanybody face similar problems?
<br>
Thanks,Nilesh.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18012.php">Mathieu westphal: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18010.php">Shaandar Nyamtulga: "[OMPI users] Passwordless ssh"</a>
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
