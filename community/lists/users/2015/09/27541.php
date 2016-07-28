<?
$subject_val = "[OMPI users] As one MPI process executes MPI_Barrier(), other processes hang";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  5 11:14:30 2015" -->
<!-- isoreceived="20150905151430" -->
<!-- sent="Sat, 5 Sep 2015 20:44:28 +0530" -->
<!-- isosent="20150905151428" -->
<!-- name="Dhanashree N P" -->
<!-- email="dhan0110_at_[hidden]" -->
<!-- subject="[OMPI users] As one MPI process executes MPI_Barrier(), other processes hang" -->
<!-- id="CAC946L3G1vtMFaUuODb4vocjsJ1P7=LthtpH2nWwYLGrOs8gjQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] As one MPI process executes MPI_Barrier(), other processes hang<br>
<strong>From:</strong> Dhanashree N P (<em>dhan0110_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-05 11:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27542.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings"</a>
<li><strong>Previous message:</strong> <a href="27540.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27557.php">Jeff Squyres (jsquyres): "Re: [OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
<li><strong>Reply:</strong> <a href="27557.php">Jeff Squyres (jsquyres): "Re: [OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>I have an MPI program for having multiple processes read from a file that
<br>
contains list of file names and based on the file names read - it reads the
<br>
corresponding file and counts the frequency of words.
<br>
<p>If one of the processes completes this and returns - to block executing
<br>
MPI_Barrier(), the other processes also hang. On debugging, it could be
<br>
seen that the *readFile()* function is not entered by the other processes
<br>
currently in *process_files()*.
<br>
<p>Unable to figure out why this happens. Please find the code here
<br>
&lt;<a href="http://stackoverflow.com/questions/32413612/as-one-mpi-process-executes-mpi-barrier-other-processes-hang">http://stackoverflow.com/questions/32413612/as-one-mpi-process-executes-mpi-barrier-other-processes-hang</a>&gt;
<br>
<p>Any suggestions would be very much helpful!
<br>
<p><p>Thank you,
<br>
Dhanashree
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27541/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27542.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings"</a>
<li><strong>Previous message:</strong> <a href="27540.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27557.php">Jeff Squyres (jsquyres): "Re: [OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
<li><strong>Reply:</strong> <a href="27557.php">Jeff Squyres (jsquyres): "Re: [OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
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
