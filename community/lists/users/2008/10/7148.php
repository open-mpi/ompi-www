<?
$subject_val = "[OMPI users] Openmpi ver1.3beta1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 02:06:34 2008" -->
<!-- isoreceived="20081031060634" -->
<!-- sent="Fri, 31 Oct 2008 02:06:09 -0400" -->
<!-- isosent="20081031060609" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi ver1.3beta1" -->
<!-- id="BLU0-SMTP224B5E356302AC7AA4481088200_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi ver1.3beta1<br>
<strong>From:</strong> Allan Menezes (<em>amenezes007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 02:06:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7149.php">Ralph Castain: "Re: [OMPI users] Openmpi ver1.3beta1"</a>
<li><strong>Previous message:</strong> <a href="7147.php">Antonio Molins: "[OMPI users] Issues with MPI_Type_create_darray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7149.php">Ralph Castain: "Re: [OMPI users] Openmpi ver1.3beta1"</a>
<li><strong>Reply:</strong> <a href="7149.php">Ralph Castain: "Re: [OMPI users] Openmpi ver1.3beta1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I built open mpi version 1.3b1 withe following cofigure command:
<br>
./configure --prefix=/opt/openmpi13b1 --enable-mpi-threads 
<br>
--with-threads=posix --disable-ipv6
<br>
I have six nodes x1..6
<br>
I distributed the /opt/openmpi13b1 with scp to all other nodes from the 
<br>
head node
<br>
When i run the following command:
<br>
mpirun --prefix /opt/openmpi13b1  --host x1 hostname it works on x1 
<br>
printing out the hostname of x1
<br>
But when i type
<br>
mpirun --prefix /opt/openmpi13b1 --host x2 hostname it hangs and does 
<br>
not give me any output
<br>
I have a 6 node intel quad core cluster with OSCAR and pci express 
<br>
gigabit ethernet for eth0
<br>
Can somebody advise?
<br>
Thank you very much.
<br>
Allan Menezes
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7149.php">Ralph Castain: "Re: [OMPI users] Openmpi ver1.3beta1"</a>
<li><strong>Previous message:</strong> <a href="7147.php">Antonio Molins: "[OMPI users] Issues with MPI_Type_create_darray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7149.php">Ralph Castain: "Re: [OMPI users] Openmpi ver1.3beta1"</a>
<li><strong>Reply:</strong> <a href="7149.php">Ralph Castain: "Re: [OMPI users] Openmpi ver1.3beta1"</a>
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
