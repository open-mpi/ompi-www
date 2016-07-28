<?
$subject_val = "[OMPI users] Help om Openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 03:39:13 2010" -->
<!-- isoreceived="20100331073913" -->
<!-- sent="Wed, 31 Mar 2010 14:39:08 +0700" -->
<!-- isosent="20100331073908" -->
<!-- name="Huynh Thuc Cuoc" -->
<!-- email="htcuoc_at_[hidden]" -->
<!-- subject="[OMPI users] Help om Openmpi" -->
<!-- id="l2z5903bc431003310039oacc1e1al524067c9eb20a859_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Help om Openmpi<br>
<strong>From:</strong> Huynh Thuc Cuoc (<em>htcuoc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 03:39:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12489.php">Yves Caniou: "[OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12487.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Maybe reply:</strong> <a href="12494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help om Openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I had install my cluster which the configuration as following:
<br>
- headnode :
<br>
&nbsp;&nbsp;+ linux CenOS 5.4, 4 CPUs, 3G RAM
<br>
&nbsp;&nbsp;+ sun gridengine sge6.0u12. The headnode is admin and submit node too.
<br>
&nbsp;&nbsp;+ Openmpi 1.2.9. In the installation openmpi :.configure
<br>
--prefix=/opt/openmpi --with-sge ...Processes complilation and make was
<br>
fine.
<br>
&nbsp;&nbsp;+ I have 2 others nodes which confg. are: 4 CPU, 1 G RAM and on which run
<br>
sgeexecd.
<br>
Testing for SGE on headnode and nodes by qsub was fine.
<br>
When testing openmpi with as folowing:
<br>
[guser1_at_ioitg2 examples]$ /opt/openmpi/bin/mpirun -np 4 --hostfile myhosts
<br>
hello_cxx
<br>
Hello, world!  I am 0 of 4
<br>
Hello, world!  I am 1 of 4
<br>
Hello, world!  I am 3 of 4
<br>
Hello, world!  I am 2 of 4
<br>
[guser1_at_ioitg2 examples]$
<br>
<p>The openmpi runs well.
<br>
My file myhosts:
<br>
ioitg2.ioit-grid.ac.vn slots=4
<br>
node1.ioit-grid.ac.vn slots=4
<br>
node2.ioit-grid.ac.vn slots=4
<br>
<p>Now for more processes:
<br>
[guser1_at_ioitg2 examples]$ /opt/openmpi/bin/mpirun -np 6 --hostfile myhosts
<br>
hello_cxx
<br>
guser1_at_[hidden]'s password:
<br>
--------------------------------------------------------------------------
<br>
Failed to find the following executable:
<br>
<p>Host:       node1.ioit-grid.ac.vn
<br>
Executable: hello_cxx
<br>
<p>Cannot continue.
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that job rank 0 with PID 19164 on node
<br>
ioitg2.ioit-grid.ac.vnexited on signal 15 (Terminated).
<br>
3 additional processes aborted (not shown)
<br>
[guser1_at_ioitg2 examples]$
<br>
<p>This is error massage. I was login on node1 successful.
<br>
<p>PLS, Help me. What problems I have 9installation, configurations, ...). Have
<br>
I install openmpi on all nodes ?
<br>
<p>Thank you very much and I am waitting your helps.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12488/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12489.php">Yves Caniou: "[OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12487.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Maybe reply:</strong> <a href="12494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help om Openmpi"</a>
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
