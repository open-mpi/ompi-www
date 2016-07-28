<?
$subject_val = "[OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 16:50:39 2007" -->
<!-- isoreceived="20071129215039" -->
<!-- sent="Thu, 29 Nov 2007 15:50:23 -0600" -->
<!-- isosent="20071129215023" -->
<!-- name="Sajjad Tabib" -->
<!-- email="stabib_at_[hidden]" -->
<!-- subject="[OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank" -->
<!-- id="OF591914CB.1A977A2D-ON862573A2.00747C8E-862573A2.0077FB30_at_us.ibm.com" -->
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
<strong>Subject:</strong> [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank<br>
<strong>From:</strong> Sajjad Tabib (<em>stabib_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 16:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2685.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<li><strong>Previous message:</strong> <a href="2683.php">Karol Mroz: "[OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2687.php">Tim Prins: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>Reply:</strong> <a href="2687.php">Tim Prins: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a proprietary transport/messaging layer that sits below an MTL 
<br>
component. This transport layer requires OpenMPI to assign it a rank that 
<br>
is unique and specific to that process and will not change from execution 
<br>
to termination. In a way, I am trying to find a one-one correspondence 
<br>
between a process's universal rank in OpenMPI and this transport layer. I 
<br>
began looking at ompi_proc_t from different processes and seemingly found 
<br>
a unique identifier, proc_name.vpid. Consequently, I assigned the ranks to 
<br>
each process in my transport layer based on the value of the local vpid of 
<br>
each process.
<br>
I have not tested this thoroughly, but it has been working so far. 
<br>
Although, I would like to make sure that this is a good approach, or know, 
<br>
at least, whether if there are other ways to do this. I would appreciate 
<br>
it if you could leave me feedback or give suggestions on how to assign 
<br>
universal ranks to a proprietary transport software.
<br>
<p>Thanks for your help,
<br>
<p>Sajjad Tabib
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2684/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2685.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<li><strong>Previous message:</strong> <a href="2683.php">Karol Mroz: "[OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2687.php">Tim Prins: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>Reply:</strong> <a href="2687.php">Tim Prins: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
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
