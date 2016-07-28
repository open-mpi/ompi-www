<?
$subject_val = "[OMPI users] Error: system limit exceeded on number of pipes that can be open";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 09:33:25 2009" -->
<!-- isoreceived="20090811133325" -->
<!-- sent="Tue, 11 Aug 2009 16:33:20 +0300" -->
<!-- isosent="20090811133320" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="[OMPI users] Error: system limit exceeded on number of pipes that can be open" -->
<!-- id="b20b52800908110633o36e11140r6997da68b8d4ba18_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Error: system limit exceeded on number of pipes that can be open<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 09:33:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10297.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10295.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello guys,
<br>
<p><p>When executing following command with mtt and ompi 1.3.3:
<br>
<p>mpirun --host witch15,witch15,witch15,witch15,witch16,witch16,witch16,witch16,witch17,witch17,witch17,witch17,witch18,witch18,witch18,witch18,witch19,witch19,witch19,witch19
<br>
-np 20   --mca btl_openib_use_srq 1  --mca btl self,sm,openib
<br>
~mtt/mtt-scratch/20090809140816_dellix8_11812/installs/mnum/tests/ibm/ibm/dynamic/loop_spawn
<br>
<p><p>getting following errors:
<br>
<p>parent: MPI_Comm_spawn #0 return : 0
<br>
parent: MPI_Comm_spawn #20 return : 0
<br>
parent: MPI_Comm_spawn #40 return : 0
<br>
parent: MPI_Comm_spawn #60 return : 0
<br>
parent: MPI_Comm_spawn #80 return : 0
<br>
parent: MPI_Comm_spawn #100 return : 0
<br>
parent: MPI_Comm_spawn #120 return : 0
<br>
parent: MPI_Comm_spawn #140 return : 0
<br>
parent: MPI_Comm_spawn #160 return : 0
<br>
parent: MPI_Comm_spawn #180 return : 0
<br>
parent: MPI_Comm_spawn #200 return : 0
<br>
parent: MPI_Comm_spawn #220 return : 0
<br>
parent: MPI_Comm_spawn #240 return : 0
<br>
parent: MPI_Comm_spawn #260 return : 0
<br>
parent: MPI_Comm_spawn #280 return : 0
<br>
parent: MPI_Comm_spawn #300 return : 0
<br>
parent: MPI_Comm_spawn #320 return : 0
<br>
parent: MPI_Comm_spawn #340 return : 0
<br>
parent: MPI_Comm_spawn #360 return : 0
<br>
parent: MPI_Comm_spawn #380 return : 0
<br>
parent: MPI_Comm_spawn #400 return : 0
<br>
parent: MPI_Comm_spawn #420 return : 0
<br>
parent: MPI_Comm_spawn #440 return : 0
<br>
parent: MPI_Comm_spawn #460 return : 0
<br>
parent: MPI_Comm_spawn #480 return : 0
<br>
parent: MPI_Comm_spawn #500 return : 0
<br>
parent: MPI_Comm_spawn #520 return : 0
<br>
parent: MPI_Comm_spawn #540 return : 0
<br>
parent: MPI_Comm_spawn #560 return : 0
<br>
parent: MPI_Comm_spawn #580 return : 0
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it
<br>
encountered an error:
<br>
<p>Error: system limit exceeded on number of pipes that can be open
<br>
Node: witch19
<br>
<p>when attempting to start process rank 0.
<br>
<p>This can be resolved by setting the mca parameter opal_set_max_sys_limits to 1,
<br>
increasing your limit descriptor setting (using limit or ulimit commands),
<br>
asking the system administrator for that node to increase the system limit, or
<br>
by rearranging your processes to place fewer of them on that node.
<br>
<p><p><p><p>Do you know what OS param I should change in order to resolve it?
<br>
<p>Thanks
<br>
<p>Mike
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10296/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10297.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10295.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
