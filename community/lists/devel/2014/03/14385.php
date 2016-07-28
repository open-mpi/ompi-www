<?
$subject_val = "[OMPI devel] example/Hello_c.c : mpirun run failed on two physical nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 06:54:39 2014" -->
<!-- isoreceived="20140325105439" -->
<!-- sent="Tue, 25 Mar 2014 10:54:32 +0000" -->
<!-- isosent="20140325105432" -->
<!-- name="Wang,Yanfei(SYS)" -->
<!-- email="wangyanfei01_at_[hidden]" -->
<!-- subject="[OMPI devel] example/Hello_c.c : mpirun run failed on two physical nodes." -->
<!-- id="90EBD3F3C2BD0E44804EEB54DD5003A455231E09_at_TC-MAIL-MB02.internal.baidu.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] example/Hello_c.c : mpirun run failed on two physical nodes.<br>
<strong>From:</strong> Wang,Yanfei(SYS) (<em>wangyanfei01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 06:54:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14386.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<li><strong>Previous message:</strong> <a href="14384.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14386.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<li><strong>Reply:</strong> <a href="14386.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am a fresh learner of OpenMPI programmer, and have some troubles on building mpi programming, hope some helps..
<br>
<p>The example/helloc_c can works successfully with 2 process on local machine, however, do not work on two separate physical node.
<br>
<p>Physical two nodes:
<br>
Eg:
<br>
[root_at_bb-nsi-ib04 examples]# mpirun -hostfile hosts -np 2 hello_c
<br>
The command just return instantly without nothing printed.
<br>
Local machine:
<br>
[root_at_bb-nsi-ib04 examples]# mpirun -np 2 hello_c
<br>
Hello, world, I am 0 of 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib04.bb01.*.com Distribution, ident: 1.7.5, Mar 20, 2014, 108)
<br>
Hello, world, I am 1 of 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib04.bb01.*.com Distribution, ident: 1.7.5, Mar 20, 2014, 108)
<br>
[root_at_bb-nsi-ib04 examples]#
<br>
-----peer machine is ok--------
<br>
[root_at_bb-nsi-ib03 examples]# mpirun -np 2 hello_c
<br>
Hello, world, I am 0 of 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib03.bb01.*.com Distribution, ident: 1.7.5, Mar 20, 2014, 108)
<br>
Hello, world, I am 1 of 2, (Open MPI v1.7.5, package: Open MPI root_at_bb-nsi-ib03.bb01.*.com Distribution, ident: 1.7.5, Mar 20, 2014, 108)
<br>
[root_at_bb-nsi-ib03 examples]#
<br>
the command run successfully, and print two message!!
<br>
<p>Configuration details:
<br>
OpenMPI version: 1.7.5
<br>
Hostfile:
<br>
[root_at_bb-nsi-ib04 examples]# cat hosts
<br>
ib03 slots=1
<br>
ib04 slots=1
<br>
[root_at_bb-nsi-ib04 examples]#
<br>
/etc/hosts:
<br>
[root_at_bb-nsi-ib04 examples]# cat /etc/hosts
<br>
192.168.71.3 ib03
<br>
192.168.71.4 ib04
<br>
SSH:
<br>
Public rsa key is redistributed two machine, ib03 and ib04, and to do ssh login in without password is ok, I am sure.
<br>
<p>I am confused about this trouble, and anyone can help us?  It have nothing log and error tip, could anyone tell me how to do diagnose it.
<br>
<p>BR
<br>
<p>Yanfei Wang
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14385/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14386.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<li><strong>Previous message:</strong> <a href="14384.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14386.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<li><strong>Reply:</strong> <a href="14386.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
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
