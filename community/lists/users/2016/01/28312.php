<?
$subject_val = "[OMPI users] MPI hangs on poll_device() with rdma";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 22:24:27 2016" -->
<!-- isoreceived="20160121032427" -->
<!-- sent="Thu, 21 Jan 2016 11:24:25 +0800" -->
<!-- isosent="20160121032425" -->
<!-- name="Eva" -->
<!-- email="wuzhh01_at_[hidden]" -->
<!-- subject="[OMPI users] MPI hangs on poll_device() with rdma" -->
<!-- id="CAHgSaRSWAWgFyKY2gS=FJ59KfLNhxYZGqiBS0g9GOPDbd0ofGQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI hangs on poll_device() with rdma<br>
<strong>From:</strong> Eva (<em>wuzhh01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-20 22:24:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28313.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Previous message:</strong> <a href="28311.php">Saliya Ekanayake: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28313.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Reply:</strong> <a href="28313.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Run MPI_Send on MPI1.8.5 without multithread enabled:
<br>
it hangs on mca_pml_ob1_send() -&gt; opal_progreses() -&gt;
<br>
btl_openib_component_progress() -&gt; poll_device() -&gt; libmlx4-rdmav2.so -&gt; cq
<br>
-&gt; phread_spin_unlock
<br>
The program can run on TCP with no error.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28312/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28313.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Previous message:</strong> <a href="28311.php">Saliya Ekanayake: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28313.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Reply:</strong> <a href="28313.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
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
