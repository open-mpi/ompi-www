<?
$subject_val = "[OMPI users] MPI_Comm_spawn and exported variables";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 17:57:09 2013" -->
<!-- isoreceived="20131219225709" -->
<!-- sent="Thu, 19 Dec 2013 17:57:08 -0500" -->
<!-- isosent="20131219225708" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_spawn and exported variables" -->
<!-- id="CAMsSzSCv7g4aCc0_mazy2WOYm675V65jhzRcFDfTHTCkWNxFFw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_spawn and exported variables<br>
<strong>From:</strong> Tim Miller (<em>btamiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 17:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23263.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<li><strong>Previous message:</strong> <a href="23261.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23263.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<li><strong>Reply:</strong> <a href="23263.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I have a question similar (but not identical to) the one asked by Tom Fogel
<br>
a week or so back...
<br>
<p>I have a code that uses MPI_Comm_spawn to launch different processes. The
<br>
executables for these use libraries in non-standard locations, so what I've
<br>
done is add the directories containing them to my LD_LIBRARY_PATH
<br>
environment variable, and then calling mpirun with &quot;-x LD_LIBRARY_PATH&quot;.
<br>
This works well for me on OpenMPI 1.6.3 and earlier. However, I've been
<br>
playing with OpenMPI 1.7.3 and this no longer seems to work. As soon as my
<br>
code MPI_Comm_spawns, all the spawned processes die complaining that they
<br>
can't find the correct libraries to start the executable.
<br>
<p>Has there been a way that exported variables are passed to spawned
<br>
processes between OpenMPI 1.6 and 1.7? Is there something else I'm doing
<br>
wrong here?
<br>
<p>Best Regards,
<br>
Tim
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23262/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23263.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<li><strong>Previous message:</strong> <a href="23261.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23263.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<li><strong>Reply:</strong> <a href="23263.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
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
