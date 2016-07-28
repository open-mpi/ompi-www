<?
$subject_val = "[OMPI users] Doubts about the hpcc MPIRandomAccess problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 07:17:57 2008" -->
<!-- isoreceived="20080910111757" -->
<!-- sent="Wed, 10 Sep 2008 13:17:48 +0200" -->
<!-- isosent="20080910111748" -->
<!-- name="Ramiro Alba Queipo" -->
<!-- email="raq_at_[hidden]" -->
<!-- subject="[OMPI users] Doubts about the hpcc MPIRandomAccess problem" -->
<!-- id="1221045468.31161.89.camel_at_mundo" -->
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
<strong>Subject:</strong> [OMPI users] Doubts about the hpcc MPIRandomAccess problem<br>
<strong>From:</strong> Ramiro Alba Queipo (<em>raq_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-10 07:17:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6493.php">Jeff Squyres: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6491.php">Samuel Sarholz: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody:
<br>
<p>I had the same problem described at thread
<br>
<a href="http://www.open-mpi.org/community/lists/users/2008/05/5601.php">http://www.open-mpi.org/community/lists/users/2008/05/5601.php</a> which I
<br>
solved setting btl_openib_free_list_max MCA  parameter to 2048, but I
<br>
have some doubts and derived problems that I would like to comment:
<br>
<p>1) Is this a problem which only affects to hpcc MPIRandomAccess test or
<br>
it may happen with any other code?
<br>
<p>2) Should I set this parameter to some value by default? Would the
<br>
performance be affected? How should I take into account to tune this
<br>
parameter (if needed) for our home make applications?
<br>
<p>3) I am using jfs file system on our cluster nodes and eventually I got
<br>
it corrupted or put in a read only state when running into memory
<br>
problems like the  hpcc MPIRandomAccess or other problems with our home
<br>
make code. 
<br>
&nbsp;a) How can memory problems caused by user codes corrupt file systems /
<br>
and/or /home? 
<br>
&nbsp;b) Is this related to libibverbs bypassing the kernel TCP stack (I had
<br>
to set /dev/infiniband/uverbs0 rw to everybody)?
<br>
&nbsp;c) Should I change to ext3 file system?
<br>
&nbsp;d) Shoud I change other parameters according to
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#limiting-registered-memory-usage">http://www.open-mpi.org/faq/?category=openfabrics#limiting-registered-memory-usage</a>
<br>
<p>I have a newly started infiniband cluster in stand by, so please, any
<br>
comment or advice will be welcomed
<br>
<p>***********************************************************************
<br>
My environment info, is:
<br>
<p>1) Openfabrics included in distribution
<br>
2) Linux distribution: Ubuntu 7.04
<br>
&nbsp;&nbsp;&nbsp;uname -a -&gt;   Linux jff202 2.6.20-16-server #2 SMP Tue Feb 12
<br>
02:16:56 UTC 2008 x86_64 GNU/Linux
<br>
<p>3) Subnet manager: OpenSM 3.1.11 from OFED 1.3 installed on the cluster
<br>
server with Ubuntu 8.04
<br>
<p>4) ulimit -l -&gt; unlimited
<br>
<p>5) The MCA parameters that I have modified
<br>
at /etc/openmpi/openmpi-mca-params.conf are:
<br>
<p>mpi_paffinity_alone = 1
<br>
pls_rsh_agent = rsh
<br>
<p><p>Thanks in advance regards
<br>
<p><p><pre>
-- 
Aquest missatge ha estat analitzat per MailScanner
a la cerca de virus i d'altres continguts perillosos,
i es considera que est&#224; net.
For all your IT requirements visit: <a href="http://www.transtec.co.uk">http://www.transtec.co.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6493.php">Jeff Squyres: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6491.php">Samuel Sarholz: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
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
