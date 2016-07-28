<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 10:27:09 2009" -->
<!-- isoreceived="20091204152709" -->
<!-- sent="Fri, 4 Dec 2009 08:26:45 -0700" -->
<!-- isosent="20091204152645" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes" -->
<!-- id="dcf611bd0912040726r76d29e33me5682cfa085f2dc2_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="973D2387-A9C5-42E4-BAD3-65760E71764F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 10:26:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11414.php">Cupp, Matthew R: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>Previous message:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11415.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11415.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 4, 2009 at 08:21, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You used it correctly. Remember, all that cpu number is telling you is the
</span><br>
<span class="quotelev1">&gt; percentage of use by that process. So bottom line is: we are releasing it as
</span><br>
<span class="quotelev1">&gt; much as we possibly can, but no other process wants to use the cpu, so we go
</span><br>
<span class="quotelev1">&gt; ahead and use it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If any other process wanted it, then the percentage would drop and the
</span><br>
<span class="quotelev1">&gt; other proc would take some.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a quadcore CPU, so when I run with &quot;-np 4&quot; I get this
</span><br>
<p>nbock    25699  0.0  0.0  53980  2312 pts/2    S+   08:23   0:00
<br>
/usr/local/openmpi-1.3.4-gcc-4.4.2/bin/mpirun -np 4 --mca
<br>
mpi_yield_when_idle 1 ./master
<br>
nbock    25700 71.0  0.0 158964  3876 pts/2    R+   08:23   0:45 ./master
<br>
nbock    25701  0.0  0.0 158960  3804 pts/2    S+   08:23   0:00 ./master
<br>
nbock    25702  0.0  0.0 158960  3804 pts/2    S+   08:23   0:00 ./master
<br>
nbock    25703  0.0  0.0 158960  3804 pts/2    S+   08:23   0:00 ./master
<br>
nbock    25704 76.1  0.0 158964  3900 pts/2    R+   08:23   0:47 ./slave
<br>
arg1 arg2
<br>
nbock    25705 81.3  0.0 158964  3904 pts/2    R+   08:23   0:51 ./slave
<br>
arg1 arg2
<br>
nbock    25706 79.2  0.0 158964  3904 pts/2    R+   08:23   0:49 ./slave
<br>
arg1 arg2
<br>
nbock    25707 77.4  0.0 158964  3908 pts/2    R+   08:23   0:48 ./slave
<br>
arg1 arg2
<br>
<p>When you say &quot;the other proc would take some&quot;, how much do you expect it to
<br>
take? In my case above, the master process does not appear to yield a whole
<br>
lot. Can I reduce the polling frequency? I know that my slave processes
<br>
typically run several minutes to hours.
<br>
<p>nick
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11413/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11414.php">Cupp, Matthew R: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>Previous message:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11415.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11415.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
