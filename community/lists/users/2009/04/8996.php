<?
$subject_val = "[OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 09:29:36 2009" -->
<!-- isoreceived="20090421132936" -->
<!-- sent="Tue, 21 Apr 2009 16:28:57 +0300" -->
<!-- isosent="20090421132857" -->
<!-- name="Katz, Jacob" -->
<!-- email="jacob.katz_at_[hidden]" -->
<!-- subject="[OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?" -->
<!-- id="89F8C511E9BE1F41AE2F1BB0424037F2CFEE5244_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>Subject:</strong> [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?<br>
<strong>From:</strong> Katz, Jacob (<em>jacob.katz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 09:28:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8997.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9004.php">George Bosilca: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?"</a>
<li><strong>Reply:</strong> <a href="9004.php">George Bosilca: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In a dynamically connected client/server-style application, where the server uses MPI_OPEN_PORT/MPI_COMM_ACCEPT and the client uses MPI_COMM_CONNECT, what will be the communication method (BTL) chosen by OMPI? Will the communication thru the resultant inter-communicator use TCP, or will OMPI choose the best possible method (e.g. sm if the client and the server are on the same node)?
<br>
<p>Thanks.
<br>
--------------------------------
<br>
Jacob M. Katz | jacob.katz_at_[hidden]&lt;mailto:jacob.katz_at_[hidden]&gt; | Work: +972-4-865-5726 | iNet: (8)-465-5726
<br>
<p>---------------------------------------------------------------------
<br>
Intel Israel (74) Limited
<br>
<p>This e-mail and any attachments may contain confidential material for
<br>
the sole use of the intended recipient(s). Any review or distribution
<br>
by others is strictly prohibited. If you are not the intended
<br>
recipient, please contact the sender and delete all copies.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8996/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8997.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9004.php">George Bosilca: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?"</a>
<li><strong>Reply:</strong> <a href="9004.php">George Bosilca: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?"</a>
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
