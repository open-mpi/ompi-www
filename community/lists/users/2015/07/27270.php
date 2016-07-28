<?
$subject_val = "[OMPI users] binding/mapping using command line";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 06:32:13 2015" -->
<!-- isoreceived="20150710103213" -->
<!-- sent="Fri, 10 Jul 2015 10:31:55 +0000" -->
<!-- isosent="20150710103155" -->
<!-- name="Nils Smeds" -->
<!-- email="nsmeds_at_[hidden]" -->
<!-- subject="[OMPI users] binding/mapping using command line" -->
<!-- id="1436524314.3974.15.camel_at_lenovo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] binding/mapping using command line<br>
<strong>From:</strong> Nils Smeds (<em>nsmeds_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-10 06:31:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27271.php">Audet, Martin: "[OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines"</a>
<li><strong>Previous message:</strong> <a href="27269.php">Saliya Ekanayake: "Re: [OMPI users] What collective implementation is used when?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27284.php">Ralph Castain: "Re: [OMPI users] binding/mapping using command line"</a>
<li><strong>Reply:</strong> <a href="27284.php">Ralph Castain: "Re: [OMPI users] binding/mapping using command line"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've not found a set of good examples on this, so please give me
<br>
pointers to any information I might have missed.
<br>

<br>
I need to experiment with &quot;odd&quot; process placements and am trying to
<br>
accomplish this via the command line rather than using a placement
<br>
file.
<br>

<br>
I am using OpenMPI 1.8.x
<br>

<br>
I have successfully used e.g. 
<br>
-display-map -map-by dist:span -mca rmaps_dist_device $hca_dev
<br>

<br>
together with -bind-to core  to map processes close to a PCI resource.
<br>

<br>
Now I'd like to (for comparison) map processes far away from the same
<br>
resource. The end result is to bind one process per node onto socket 1
<br>
(not 0) and/or numa node 2 or 3 (instead of 0 or 1). The MPI processes
<br>
may be bound to a single core or a set of cores, that is not important.
<br>

<br>
One not working example is:
<br>

<br>
&nbsp;-map-by ppr=1:numa --slot-list 2 -bind-to core
<br>

<br>
My reasoning was that I'd on each node would have 4 slots each spanning
<br>
a single numa node and I'd only use numa node 2 on each node. This I
<br>
have found is not how it is supposed to work. The error message is:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;Conflicting directives for binding policy are causing the policy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to be redefined:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New policy:   socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prior policy:  CORE
<br>

<br>
A more direct way would be to only use socket 1 (not 0) in the system,
<br>
but trying that I get:
<br>

<br>
--map-by socket:span --bind-to socket --slot-list 1  
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;Conflicting directives for binding policy are causing the policy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to be redefined:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New policy:   socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prior policy:  SOCKET
<br>

<br>

<br>
Pointers to working examples of various non-trivial bindings in
<br>
particular related to numa are welcome.
<br>

<br>
Thanks
<br>

<br>
/Nils<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27271.php">Audet, Martin: "[OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines"</a>
<li><strong>Previous message:</strong> <a href="27269.php">Saliya Ekanayake: "Re: [OMPI users] What collective implementation is used when?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27284.php">Ralph Castain: "Re: [OMPI users] binding/mapping using command line"</a>
<li><strong>Reply:</strong> <a href="27284.php">Ralph Castain: "Re: [OMPI users] binding/mapping using command line"</a>
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
