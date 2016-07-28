<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 11:08:00 2007" -->
<!-- isoreceived="20070419150800" -->
<!-- sent="Thu, 19 Apr 2007 20:37:57 +0530" -->
<!-- isosent="20070419150757" -->
<!-- name="Babu Bhai" -->
<!-- email="babubhai3_at_[hidden]" -->
<!-- subject="[OMPI users] new installation problem" -->
<!-- id="4192a7a40704190807w30c2b0c5i67241bc1cfd8570a_at_mail.gmail.com" -->
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
<strong>From:</strong> Babu Bhai (<em>babubhai3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-19 11:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3094.php">Harald Servat: "[OMPI users] peruse MSG_ARRIVED events lost"</a>
<li><strong>Previous message:</strong> <a href="3092.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3095.php">Jeff Squyres: "Re: [OMPI users] new installation problem"</a>
<li><strong>Reply:</strong> <a href="3095.php">Jeff Squyres: "Re: [OMPI users] new installation problem"</a>
<li><strong>Maybe reply:</strong> <a href="3100.php">Babu Bhai: "Re: [OMPI users] new installation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
&nbsp;&nbsp;Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I have migrated from LAM/MPI to OpenMPI. I am not able to execute simple
<br>
mpi code in which master sends an integer to slave.
<br>
If i execute code on single machine i.e start 2 instance on same machine
<br>
(mpirun -np 2 hello) this works fine.
<br>
<p>If i execute in cluster using         mpirun --prefix /usr/local -np 2
<br>
--host 199.63.34.154,199.63.34.36 hello
<br>
it gives following error
<br>
&quot;btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=113&quot;
<br>
<p>I am using openmpi-1.2
<br>
<p>regards,
<br>
Abhishek
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3093/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3094.php">Harald Servat: "[OMPI users] peruse MSG_ARRIVED events lost"</a>
<li><strong>Previous message:</strong> <a href="3092.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3095.php">Jeff Squyres: "Re: [OMPI users] new installation problem"</a>
<li><strong>Reply:</strong> <a href="3095.php">Jeff Squyres: "Re: [OMPI users] new installation problem"</a>
<li><strong>Maybe reply:</strong> <a href="3100.php">Babu Bhai: "Re: [OMPI users] new installation problem"</a>
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
