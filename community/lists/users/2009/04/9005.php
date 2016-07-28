<?
$subject_val = "[OMPI users] Could following situations caused by RDMA mca parameters?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 11:01:25 2009" -->
<!-- isoreceived="20090421150125" -->
<!-- sent="Tue, 21 Apr 2009 23:01:21 +0800" -->
<!-- isosent="20090421150121" -->
<!-- name="Tsung Han Shie" -->
<!-- email="icbm0926_at_[hidden]" -->
<!-- subject="[OMPI users] Could following situations caused by RDMA mca parameters?" -->
<!-- id="84b2b5e30904210801y64473227n5a519cd8c50846d7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Could following situations caused by RDMA mca parameters?<br>
<strong>From:</strong> Tsung Han Shie (<em>icbm0926_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 11:01:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9006.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9004.php">George Bosilca: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9025.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<li><strong>Reply:</strong> <a href="9025.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all
<br>
<p>I tried to increase speed of a program with openmpi-1.1.3 by adding
<br>
following 4 parameters into openmpi-mca-params.conf file.
<br>
<p>mpi_leave_pinned=1
<br>
btl_openib_eager_rdma_num=128
<br>
btl_openib_max_eager_rdma=128
<br>
btl_openib_eager_limit=1024
<br>
<p>and then, I ran my program twice(124 processes on 31 nodes). one with
<br>
&quot;mpi_leave_pinned=1&quot;, another with &quot;mpi_leave_pinned=0&quot;.
<br>
All of them were stopped abnormally with &quot;ctrl+c&quot; and &quot;killall -9
<br>
&lt;program&gt;&quot;.
<br>
After that, I couldn't start to run that program again.
<br>
I checked every nodes with &quot;free -m&quot; and I found that huge amount of cached
<br>
memory were used in each nodes.
<br>
Could this situation be caused by those 4 parameters? IS there anyway to
<br>
free theme?
<br>
<p>Best regard
<br>
<p>T. H. Hsieh
<br>
MS. Student, NTU, Taiwan.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9005/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9006.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9004.php">George Bosilca: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9025.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<li><strong>Reply:</strong> <a href="9025.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
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
