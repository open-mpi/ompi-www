<?
$subject_val = "[OMPI users] Reconstructed concept about a semi-automatic optimized parallel I/O with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 10:00:04 2012" -->
<!-- isoreceived="20120627140004" -->
<!-- sent="Wed, 27 Jun 2012 15:59:58 +0200 (CEST)" -->
<!-- isosent="20120627135958" -->
<!-- name="Xuan Wang" -->
<!-- email="xuan.wang_at_[hidden]" -->
<!-- subject="[OMPI users] Reconstructed concept about a semi-automatic optimized parallel I/O with Open MPI" -->
<!-- id="571128.58031.1340805598281.JavaMail.root_at_epsilon" -->
<!-- charset="utf-8" -->
<!-- inreplyto="6613345.58017.1340804563381.JavaMail.root_at_epsilon" -->
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
<strong>Subject:</strong> [OMPI users] Reconstructed concept about a semi-automatic optimized parallel I/O with Open MPI<br>
<strong>From:</strong> Xuan Wang (<em>xuan.wang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 09:59:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19677.php">Syed Ahsan Ali: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Previous message:</strong> <a href="19675.php">Iliev, Hristo: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>This is the reconsidered concept about our semi-automatic optimized parallel I/O system. Referring to the last discussion please take a look at the following link:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/06/19517.php">http://www.open-mpi.org/community/lists/users/2012/06/19517.php</a>
<br>
<p>Thank Ralph and Jeff for giving me so many advises. The whole system has been reconsidered, please take a look at the attached pictures. As the parallel I/O is extremely complex, we have chosen the most important and impactive part - I/O algorithm - to start. As for the other parts (listed by Jeff), such as the MPI layer, the OS of the file system, the storage controller, the network and so on, it is easier to be taken into consideration one by one later (Hope I am not wrong :)).
<br>
<p><p>Description of the picture
<br>
<p>I/O System: The system we want to implement.
<br>
<p>Other Systems: The systems outside the I/O system and contain the database, I/O monitor and the file systems like GPFS.
<br>
<p><p>Step 1: The client sends the commands to the I/O nodes and starts the system deamon, which start the MPI process, on each node.
<br>
<p>Step 2: After preparing in the system deamon, the MPI process starts running. All the necessary information such as the URI of database, the address of the source/target file in the file system, the I/O parameters, the number of processes used and so on is passed to the MPI process either as MPI hints or as the parameters of mpirun command.
<br>
<p>Step 3 &amp; 4: After the MPI_Init(), we can define a function named like MPI_IO_Select() to obtain the best I/O algorithm/pattern from the database. A similar algorithm selecting function has been implemented in the OMPIO under the fcoll module. I think it is possible to add the database accessing part in the source code of this module. In addition, accessing the file system to get the storage property before the I/O algorithm/pattern selection is also possible, if the file system offers such kind of API. Then the proper I/O algorithm/pattern with proper I/O parameters is applied in the next steps.
<br>
<p>Step 5 &amp; 6: The best I/O operation runs on the file system.
<br>
<p>Step 7: After the end of the MPI process, the system deamon continues to do the further work.
<br>
<p>Step 8 &amp; 9: During the accessing of the file system, the monitor keeps watching the status of the file system and the performance of the I/O operation. The results or information will be collected and sent to the database for further analyzing. This part has no interaction with the MPI process or even the I/O system, therefore, it does not have to be real time.
<br>
<p><p>The system decides the I/O operation according to several conditions in order to insure that the I/O operation will not be worse than the last similar I/O operation. It might have some self-study ability with the help of database. The changeable or optimizable part is NOT ONLY the I/O algorithm, but also the I/O related parameters.
<br>
<p>We think it will be very useful for those applications, which usually run similar or long I/O operations.
<br>
<p>Any suggestion is welcomed.
<br>
<p>Thanks.
<br>
<p>Best Regards!
<br>
Xuan Wang
<br>

<br><hr>
<img src="http://www.open-mpi.org/community/lists/users/att-19676/Optimization.png" alt="Optimization.png">
<!-- attachment="Optimization.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19677.php">Syed Ahsan Ali: "Re: [OMPI users] undefined reference to `netcdf_mp_nf90_open_'"</a>
<li><strong>Previous message:</strong> <a href="19675.php">Iliev, Hristo: "Re: [OMPI users] MPI Problem"</a>
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
