<?
$subject_val = "[OMPI users] OpenMPI Remote Execution Problem (Application does not start)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 10:32:07 2014" -->
<!-- isoreceived="20140826143207" -->
<!-- sent="Tue, 26 Aug 2014 16:31:37 +0200" -->
<!-- isosent="20140826143137" -->
<!-- name="Benjamin Giehle" -->
<!-- email="giehle_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI Remote Execution Problem (Application does not start)" -->
<!-- id="77371F2938F4A84EAE592A132FF27D19AE673FC5D9_at_RZ-MERKUR.hs-ulm.de" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI Remote Execution Problem (Application does not start)<br>
<strong>From:</strong> Benjamin Giehle (<em>giehle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 10:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25153.php">Ralph Castain: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>Previous message:</strong> <a href="25151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25153.php">Ralph Castain: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>Reply:</strong> <a href="25153.php">Ralph Castain: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>i have a problem with running my mpi application on a remote machine.
<br>
If I start the application via ssh everything works just fine, but if I use mpirun the application won't start.
<br>
If I start the application on the local machine with mpi it works too.
<br>
<p>ssh myhost ./myapp       &lt;- works
<br>
mpirun -np 2 ./myapp      &lt;- works
<br>
mpirun -np 2 --host myhost  ./myapp    &lt;- does not work
<br>
<p>I already configured ssh, so that I don't have to enter a password.
<br>
I am using the OpenMPI Version 1.8.1 on both machines.
<br>
I uploaded all required files, I hope you can help me...
<br>
<p>Regards
<br>
<p>Benjamin Giehle
<br>




<br><p>
<p><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25152/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25152/mpirun.txt">mpirun.txt</a>
</ul>
<!-- attachment="mpirun.txt" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25152/ompiinfo.txt.bz2">ompiinfo.txt.bz2</a>
</ul>
<!-- attachment="ompiinfo.txt.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25152/ompiparseable.txt.bz2">ompiparseable.txt.bz2</a>
</ul>
<!-- attachment="ompiparseable.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25153.php">Ralph Castain: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>Previous message:</strong> <a href="25151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25153.php">Ralph Castain: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>Reply:</strong> <a href="25153.php">Ralph Castain: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
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
