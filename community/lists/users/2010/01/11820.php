<?
$subject_val = "[OMPI users] MPI_Comm_spawn_multiple with MPI_Info object";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 12:05:59 2010" -->
<!-- isoreceived="20100119170559" -->
<!-- sent="Tue, 19 Jan 2010 18:05:53 +0100" -->
<!-- isosent="20100119170553" -->
<!-- name="Federico Golfr&#232; Andreasi" -->
<!-- email="federico.golfre_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_spawn_multiple with MPI_Info object" -->
<!-- id="b88e40561001190905x1101b1e8ne5166980ca453cfa_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_spawn_multiple with MPI_Info object<br>
<strong>From:</strong> Federico Golfr&#232; Andreasi (<em>federico.golfre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 12:05:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11821.php">Justin Bronder: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Previous message:</strong> <a href="11819.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11822.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
<li><strong>Reply:</strong> <a href="11822.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone !
<br>
<p>I have to submit you a question,
<br>
I write a little code that does and MPI_Comm_spawn_multiple on a specific
<br>
set of node.
<br>
The node where to run on are specified using the &quot;host&quot; attribute of the
<br>
MPI_Info object.
<br>
That attribute is filled with the string get from MPI_Get_processor_name.
<br>
<p>Is this the correct way of working ?
<br>
<p>I have a strange behavior when I use alias in the /etc/hosts file.
<br>
(I run jobs in a linux cluster, with CentOS 5).
<br>
If I use the alias in the hostfile the spawn process throws me an error;
<br>
instead the spawning process (run with the same hostfile) runs correctly.
<br>
<p>It seems that is necessary, when using the spawn function with INFO object,
<br>
to run the spawning process with a hostfile filled with the &quot;real&quot; and
<br>
complete hostname.
<br>
Or I have to use a different function to get the host name?
<br>
<p>Thank you very much,
<br>
Federico
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11820/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11821.php">Justin Bronder: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Previous message:</strong> <a href="11819.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11822.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
<li><strong>Reply:</strong> <a href="11822.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
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
