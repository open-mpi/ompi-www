<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb  4 11:52:34 2006" -->
<!-- isoreceived="20060204165234" -->
<!-- sent="Sat, 4 Feb 2006 08:52:27 -0800 (PST)" -->
<!-- isosent="20060204165227" -->
<!-- name="Konstantin Kudin" -->
<!-- email="konstantin_kudin_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Open-MPI all-to-all performance" -->
<!-- id="20060204165227.20244.qmail_at_web52013.mail.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[O-MPI users] Open-MPI all-to-all performance" -->
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
<strong>From:</strong> Konstantin Kudin (<em>konstantin_kudin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-04 11:52:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0581.php">Brian Barrett: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<li><strong>Previous message:</strong> <a href="0579.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="0565.php">Konstantin Kudin: "[O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Sorry, I forgot to specify everything properly in my previous e-mail:
<br>
<p>mpirun -np 8 -mca btl tcp -mca coll self,basic,tuned -mca  \
<br>
mpi_paffinity_alone 1 skampi41
<br>
<p>#/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     256.4      2.8      8     256.4      2.8      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    2153.0     13.0      8    2153.0     13.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    3752.3     33.7      8    3752.3     33.7      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5    5722.7     43.0      8    5722.7     43.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6    8660.7    821.7      8    8660.7    821.7      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7    9530.3    292.9      8    9530.3    292.9      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8   12666.9    807.1      8   12666.9    807.1      8
<br>
<p>#/*@insyncol_MPI_Alltoall_Isend_Irecv-nodes-long-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     235.0      0.7      8     235.0      0.7      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1565.6     15.3      8    1565.6     15.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    2694.8     24.3      8    2694.8     24.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5   11389.9   6971.9      6   11389.9   6971.9      6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6  249612.0  21102.1      2  249612.0  21102.1      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7  239051.9   3915.0      2  239051.9   3915.0      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8  262356.5  12324.6      2  262356.5  12324.6      2
<br>
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0581.php">Brian Barrett: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<li><strong>Previous message:</strong> <a href="0579.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="0565.php">Konstantin Kudin: "[O-MPI users] Open-MPI all-to-all performance"</a>
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
