<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 27 17:27:00 2006" -->
<!-- isoreceived="20060427212700" -->
<!-- sent="Thu, 27 Apr 2006 15:26:59 -0600 (MDT)" -->
<!-- isosent="20060427212659" -->
<!-- name="Jorge Parra" -->
<!-- email="jeparra_at_[hidden]" -->
<!-- subject="[OMPI users] error running MPI" -->
<!-- id="Pine.LNX.4.64.0604271520440.8030_at_rhsvr03.ece.unm.edu" -->
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
<strong>From:</strong> Jorge Parra (<em>jeparra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-27 17:26:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1163.php">Brian Barrett: "Re: [OMPI users] error running MPI"</a>
<li><strong>Previous message:</strong> <a href="1161.php">Marcus G. Daniels: "[OMPI users] crash inside mca_btl_tcp_proc_remove"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1163.php">Brian Barrett: "Re: [OMPI users] error running MPI"</a>
<li><strong>Reply:</strong> <a href="1163.php">Brian Barrett: "Re: [OMPI users] error running MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I configured and maked (make all install) succesfully (no errors) open 
<br>
MPI. I am doing that for a crossplataform. The host is a ppc 405 and the 
<br>
build machine is a i686. Once I succesfully built it, I wanted to run 
<br>
&quot;ompi_info&quot; to check the installation. So I copied all the prefix 
<br>
directory to the host plataform and I executed ompi_info.
<br>
<p>I got the following error:
<br>
<p>root_at_ml403:/opt/mpi-ppc-405-linux/exec/bin# ./ompi_info
<br>
./ompi_info: error while loading shared libraries: libstdc++.so.6: cannot 
<br>
open y
<br>
<p>The host platform is a minimal linux instalation (just the kernel, the 
<br>
filesystem and a few commands). So I understand I should have something 
<br>
else installed, Is that the problem? If so, what should I have installed 
<br>
in the host platform to make it run?
<br>
<p>Thank you,
<br>
<p>Jorge
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1163.php">Brian Barrett: "Re: [OMPI users] error running MPI"</a>
<li><strong>Previous message:</strong> <a href="1161.php">Marcus G. Daniels: "[OMPI users] crash inside mca_btl_tcp_proc_remove"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1163.php">Brian Barrett: "Re: [OMPI users] error running MPI"</a>
<li><strong>Reply:</strong> <a href="1163.php">Brian Barrett: "Re: [OMPI users] error running MPI"</a>
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
