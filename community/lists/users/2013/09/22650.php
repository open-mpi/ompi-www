<?
$subject_val = "Re: [OMPI users] adding library (libmpi_cxx.so.1)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 16:47:27 2013" -->
<!-- isoreceived="20130913204727" -->
<!-- sent="Fri, 13 Sep 2013 13:44:46 -0700 (PDT)" -->
<!-- isosent="20130913204446" -->
<!-- name="amirreza Hashemi" -->
<!-- email="hashemi_amirreza_at_[hidden]" -->
<!-- subject="Re: [OMPI users] adding library (libmpi_cxx.so.1)" -->
<!-- id="1379105086.1091.YahooMailNeo_at_web160206.mail.bf1.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1379094210.76442.YahooMailNeo_at_web160201.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] adding library (libmpi_cxx.so.1)<br>
<strong>From:</strong> amirreza Hashemi (<em>hashemi_amirreza_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-13 16:44:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22651.php">Huangwei: "[OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Previous message:</strong> <a href="22649.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>In reply to:</strong> <a href="22648.php">amirreza Hashemi: "[OMPI users] adding library (libmpi_cxx.so.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Reply:</strong> <a href="22653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Sorry about that, actually I am not sure what more exactly I
<br>
&nbsp;can provide here, I am using openmpi 1.5.4-3.fc16.x86_64 with fedora 
<br>
machine, I installed that on yum install openmpi command. But when I am 
<br>
trying to make connection with some library  libmpi_cxx.so.1 to main 
<br>
code, it gives me an error which it says there is no communicator
<br>
Fatal error in MPI_Comm_dup: Invalid communicator, error stack:
<br>
MPI_Comm_dup(168): MPI_Comm_dup(comm=0x0, new_comm=0x7fffde7fb24c) failed
<br>
MPI_Comm_dup(96).: Invalid communicator
<br>
<p>Mpi libraries are found in two paths which are /usr/lib64/openmpi/lib/ and /usr/local/lib/
<br>
I
<br>
&nbsp;would like to ask how can I can make connection to mpi library in 
<br>
fedora linux machine. It is indeed that I added   libmpi_cxx.so.1 
<br>
(libmpi_cxx.so.1 =&gt; /usr/lib64/openmpi/lib/libmpi_cxx.so.1
<br>
&nbsp;(0x00007f120836e000)). 
<br>
I don't know is that enough information or not.
<br>
I would be really apprecieated if you can help me to figure out this problem!!
<br>
<p>Thanks,
<br>
Ami
<br>
<p><p>________________________________
<br>
&nbsp;From: amirreza Hashemi &lt;hashemi_amirreza_at_[hidden]&gt;
<br>
To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt; 
<br>
Sent: Friday, September 13, 2013 1:43 PM
<br>
Subject: adding library (libmpi_cxx.so.1)
<br>
&nbsp;
<br>
<p><p>Hi All,
<br>
<p>I have a problem to add a MPI library 
<br>
libmpi_cxx.so.1 to code which I am workign on it, I export the library 
<br>
to LD_LIBRARY_PATH. But whenever I do this, I get this error:
<br>
Fatal error in MPI_Comm_dup: Invalid communicator, error stack:
<br>
MPI_Comm_dup(168): MPI_Comm_dup(comm=0x0, new_comm=0x7fff39826eac) failed
<br>
MPI_Comm_dup(96).: Invalid communicator
<br>
<p>It might be possible that I have several openmpi in my linux machine and 
<br>
the code could not recognize right one. I just have this library in 
<br>
these two path: /usr/lib64/openmpi/lib/ and /usr/local/lib/, but none of them is not working in my case. Installed openmpi in my machine is 
<br>
openmpi-1.5.4-3.fc16.x86_64 and I am working with Fedora.
<br>
Does anybody can help me to figure out this problem?
<br>
<p>Thanks,
<br>
Ami
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22650/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22651.php">Huangwei: "[OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Previous message:</strong> <a href="22649.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>In reply to:</strong> <a href="22648.php">amirreza Hashemi: "[OMPI users] adding library (libmpi_cxx.so.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Reply:</strong> <a href="22653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
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
