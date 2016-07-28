<?
$subject_val = "[OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 07:41:24 2010" -->
<!-- isoreceived="20100310124124" -->
<!-- sent="Wed, 10 Mar 2010 13:41:19 +0100" -->
<!-- isosent="20100310124119" -->
<!-- name="Olivier Riff" -->
<!-- email="oliriff_at_[hidden]" -->
<!-- subject="[OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun" -->
<!-- id="6ca4ee801003100441s38b79820q4c8465c2953e7b44_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun<br>
<strong>From:</strong> Olivier Riff (<em>oliriff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 07:41:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12297.php">Reuti: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Previous message:</strong> <a href="12295.php">brian janus: "Re: [OMPI users] can torque support openmpi checkpoint?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12297.php">Reuti: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Reply:</strong> <a href="12297.php">Reuti: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Reply:</strong> <a href="12298.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am using openmpi on several machines which have different user accounts
<br>
and I cannot find a way to specify the login for each machine in the
<br>
machinefile passed to mpirun.
<br>
The only solution I found is to use the -host argument of mpirun, such as:
<br>
mpirun -np 2 --host user1_at_machine1,user2_at_machine2 MyProgram
<br>
which is very inconvenient with a lot of machines.
<br>
<p>Is there a way to do the same using a machinefile text? :
<br>
mpirun -np 2 -machinefile machinefile.txt MyProgram
<br>
<p>I cannot find the appropriate syntax for specifying a user in
<br>
machinefile.txt...
<br>
<p>Thanks in advance,
<br>
<p>Olivier
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12296/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12297.php">Reuti: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Previous message:</strong> <a href="12295.php">brian janus: "Re: [OMPI users] can torque support openmpi checkpoint?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12297.php">Reuti: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Reply:</strong> <a href="12297.php">Reuti: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Reply:</strong> <a href="12298.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
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
