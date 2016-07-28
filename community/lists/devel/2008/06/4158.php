<?
$subject_val = "[OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 08:16:21 2008" -->
<!-- isoreceived="20080619121621" -->
<!-- sent="Thu, 19 Jun 2008 08:16:11 -0400" -->
<!-- isosent="20080619121611" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress" -->
<!-- id="485A4E0B.4020505_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 08:16:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4159.php">George Bosilca: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Previous message:</strong> <a href="4157.php">Muhammad Atif: "[OMPI devel] multiple GigE interfaces..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4159.php">George Bosilca: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Reply:</strong> <a href="4159.php">George Bosilca: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Galen, George and others that might have SM BTL interest.
<br>
<p>In my quest of looking at MPI_Iprobe performance I found what I think is 
<br>
an issue.  If you have an application that is using the SM BTL and does 
<br>
a small message send &lt;=256 followed by an MPI_Iprobe the 
<br>
mca_btl_sm_component function that is eventually called as a result of 
<br>
the opal_progress will receive and ack message from its send and then 
<br>
return.  The net affect is that the real message is after the ack 
<br>
message doesn't get read until a second MPI_Iprobe is made. 
<br>
<p>It seems to me that mca_btl_sm_component should read all Ack messages 
<br>
from a particular fifo until it either finds a real send fragment or no 
<br>
more messages on the fifo.  Otherwise, we are forcing calls like 
<br>
MPI_Iprobe to not return messages that are really there.  I am not sure 
<br>
by IB but I know that the TCP BTL does not show this issue (which 
<br>
doesn't surprise me since I imagine the BTL is relying on TCP to handle 
<br>
this type of protocol stuff).
<br>
<p>Before I go munging with the code I wanted to make sure I am not 
<br>
overlooking something here.  One concern is if I change the code to 
<br>
drain all the ack messages is that going to disrupt performance elsewhere?
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4159.php">George Bosilca: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Previous message:</strong> <a href="4157.php">Muhammad Atif: "[OMPI devel] multiple GigE interfaces..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4159.php">George Bosilca: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Reply:</strong> <a href="4159.php">George Bosilca: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
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
