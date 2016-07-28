<?
$subject_val = "[OMPI users] Open MPI does not work when MPICH or intel MPI are installed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 07:44:02 2016" -->
<!-- isoreceived="20160523114402" -->
<!-- sent="Mon, 23 May 2016 11:40:57 +0000 (UTC)" -->
<!-- isosent="20160523114057" -->
<!-- name="Megdich Islem" -->
<!-- email="megdich_islem_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI does not work when MPICH or intel MPI are installed" -->
<!-- id="792759046.1653046.1464003657839.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="792759046.1653046.1464003657839.JavaMail.yahoo.ref_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI does not work when MPICH or intel MPI are installed<br>
<strong>From:</strong> Megdich Islem (<em>megdich_islem_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 07:40:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29280.php">Andy Riebs: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>Previous message:</strong> <a href="29278.php">Siegmar Gross: "[OMPI users] problem with slot-list and openmpi-v2.x-dev-1441-g402abf9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29280.php">Andy Riebs: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>Reply:</strong> <a href="29280.php">Andy Riebs: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am using 2 software, one is called Open Foam and the other called EMPIRE that need to run together at the same time.Open Foam uses &#194;&#160;Open MPI implementation and EMPIRE uses either MPICH or intel mpi.The version of Open MPI that comes with Open Foam is 1.6.5.I am using Intel (R) MPI Library for linux * OS, version 5.1.3 and MPICH 3.0.4.
<br>
My problem is when I have the environment variables of &#194;&#160;either mpich or Intel MPI &#194;&#160;sourced to bashrc, I fail to run a case of Open Foam with parallel processing ( You find attached a picture of the error I got )&#194;&#160;This is an example of a command line I use to run Open Foammpirun -np 4 interFoam -parallel
<br>
Once I keep the environment variable of OpenFoam only, the parallel processing works without any problem, so I won't be able to run EMPIRE.
<br>
I am sourcing the environment variables in this way:
<br>
For Open Foam:source /opt/openfoam30/etc/bashrc
<br>
For MPICH 3.0.4
<br>
export PATH=/home/islem/Desktop/mpich/bin:$PATHexport LD_LIBRARY_PATH=&quot;/home/islem/Desktop/mpich/lib/:$LD_LIBRARY_PATH&quot;export MPICH_F90=gfortranexport MPICH_CC=/opt/intel/bin/iccexport MPICH_CXX=/opt/intel/bin/icpcexport MPICH-LINK_CXX=&quot;-L/home/islem/Desktop/mpich/lib/ -Wl,-rpath -Wl,/home/islem/Desktop/mpich/lib -lmpichcxx -lmpich -lopa -lmpl -lrt -lpthread&quot;
<br>
For intel
<br>
export PATH=$PATH:/opt/intel/bin/LD_LIBRARY_PATH=&quot;/opt/intel/lib/intel64:$LD_LIBRARY_PATH&quot;export LD_LIBRARY_PATHsource /opt/intel/compilers_and_libraries_2016.3.210/linux/mpi/intel64/bin/mpivars.sh intel64
<br>
If Only Open Foam is sourced, mpirun --version gives OPEN MPI (1.6.5)If Open Foam and MPICH are sourced, mpirun --version gives mpich 3.0.1If Open Foam and intel MPI are sourced, mpirun --version gives intel (R) MPI libarary for linux, version 5.1.3&#194;&#160;
<br>
My question is why I can't have two MPI implementation installed and sourced together. How can I solve the problem ?
<br>
Regards,Islem Megdiche
<br>
<p><p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29279/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29279/OF-error.png" alt="OF-error.png">
<!-- attachment="OF-error.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29280.php">Andy Riebs: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>Previous message:</strong> <a href="29278.php">Siegmar Gross: "[OMPI users] problem with slot-list and openmpi-v2.x-dev-1441-g402abf9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29280.php">Andy Riebs: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>Reply:</strong> <a href="29280.php">Andy Riebs: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
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
