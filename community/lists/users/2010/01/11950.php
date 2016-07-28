<?
$subject_val = "[OMPI users] Create group in a non-collective way";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 31 13:41:43 2010" -->
<!-- isoreceived="20100131184143" -->
<!-- sent="Sun, 31 Jan 2010 12:41:38 -0600" -->
<!-- isosent="20100131184138" -->
<!-- name="Yiannis Papadopoulos" -->
<!-- email="giannis.papadopoulos_at_[hidden]" -->
<!-- subject="[OMPI users] Create group in a non-collective way" -->
<!-- id="bd1d94bd1001311041g644521bv5b98b0170b0c26e9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Create group in a non-collective way<br>
<strong>From:</strong> Yiannis Papadopoulos (<em>giannis.papadopoulos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-31 13:41:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11951.php">Constantinos Makassikis: "Re: [OMPI users] Test OpenMPI on a cluster"</a>
<li><strong>Previous message:</strong> <a href="11949.php">Tim: "[OMPI users] Test OpenMPI on a cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In my code I need to specify for some processes to create a group.
<br>
Now, in general the way of doing that is (correct me if I'm wrong):
<br>
<p>int ranks[] = { 1,2,3 };
<br>
int rank;
<br>
MPI_Group world_group = MPI_GROUP_NULL;
<br>
MPI_Group subgroup = MPI_GROUP_NULL;
<br>
MPI_Comm subcomm = MPI_COMM_NULL;
<br>
<p>MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank); // local operation
<br>
MPI_Comm_group(MPI_COMM_WORLD, &amp;world_group); // local operation
<br>
MPI_Group_incl(world_group, 3, ranks, &amp;subgroup); // local operation
<br>
MPI_Comm_create(MPI_COMM_WORLD, subgroup, &amp;subcomm); // collective
<br>
operation on MPI_COMM_WORLD
<br>
<p>if (rank&gt;0 rank&lt;4) {
<br>
&nbsp;&nbsp;// do something with subcomm
<br>
}
<br>
<p>// cleanup
<br>
<p>Is there any way to create the communicator inside the if?
<br>
<p>Thanks
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11951.php">Constantinos Makassikis: "Re: [OMPI users] Test OpenMPI on a cluster"</a>
<li><strong>Previous message:</strong> <a href="11949.php">Tim: "[OMPI users] Test OpenMPI on a cluster"</a>
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
