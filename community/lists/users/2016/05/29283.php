<?
$subject_val = "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 10:31:32 2016" -->
<!-- isoreceived="20160523143132" -->
<!-- sent="Mon, 23 May 2016 23:31:30 +0900" -->
<!-- isosent="20160523143130" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed" -->
<!-- id="CAAkFZ5u86Q0ev=ospehnKvd0kumYBoeMD8WF=J+TaDUH3xYecQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5742FA90.80909_at_hpe.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 10:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29284.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>In reply to:</strong> <a href="29280.php">Andy Riebs: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
modules are way more friendly that manually setting and exporting your
<br>
environment.
<br>
the issue here is you are setting your environment in your .bashrc, and
<br>
that cannot work if your account is used with various MPI implementations.
<br>
(unless your .bashrc checks a third party variable to select the
<br>
appropriate mpi, in this case, simply extend the logic to select openmpi)
<br>
<p>if you configure'd with --enable-mpirun-prefix-by-default, you should not
<br>
need anything in your environment.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, May 23, 2016, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The short answer: Environment module files are probably the best solution
</span><br>
<span class="quotelev1">&gt; for your problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The long answer: See
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.admin-magazine.com/HPC/Articles/Environment-Modules">http://www.admin-magazine.com/HPC/Articles/Environment-Modules</a>&gt;
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.admin-magazine.com/HPC/Articles/Environment-Modules">http://www.admin-magazine.com/HPC/Articles/Environment-Modules</a>&gt;, which
</span><br>
<span class="quotelev1">&gt; pretty much addresses your question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/23/2016 07:40 AM, Megdich Islem wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using 2 software, one is called Open Foam and the other called EMPIRE
</span><br>
<span class="quotelev1">&gt; that need to run together at the same time.
</span><br>
<span class="quotelev1">&gt; Open Foam uses  Open MPI implementation and EMPIRE uses either MPICH or
</span><br>
<span class="quotelev1">&gt; intel mpi.
</span><br>
<span class="quotelev1">&gt; The version of Open MPI that comes with Open Foam is 1.6.5.
</span><br>
<span class="quotelev1">&gt; I am using Intel (R) MPI Library for linux * OS, version 5.1.3 and MPICH
</span><br>
<span class="quotelev1">&gt; 3.0.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My problem is when I have the environment variables of  either mpich or
</span><br>
<span class="quotelev1">&gt; Intel MPI  sourced to bashrc, I fail to run a case of Open Foam with
</span><br>
<span class="quotelev1">&gt; parallel processing ( You find attached a picture of the error I got )
</span><br>
<span class="quotelev1">&gt; This is an example of a command line I use to run Open Foam
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 interFoam -parallel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once I keep the environment variable of OpenFoam only, the parallel
</span><br>
<span class="quotelev1">&gt; processing works without any problem, so I won't be able to run EMPIRE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am sourcing the environment variables in this way:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For Open Foam:
</span><br>
<span class="quotelev1">&gt; source /opt/openfoam30/etc/bashrc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For MPICH 3.0.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=/home/islem/Desktop/mpich/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=&quot;/home/islem/Desktop/mpich/lib/:$LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev1">&gt; export MPICH_F90=gfortran
</span><br>
<span class="quotelev1">&gt; export MPICH_CC=/opt/intel/bin/icc
</span><br>
<span class="quotelev1">&gt; export MPICH_CXX=/opt/intel/bin/icpc
</span><br>
<span class="quotelev1">&gt; export MPICH-LINK_CXX=&quot;-L/home/islem/Desktop/mpich/lib/ -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/home/islem/Desktop/mpich/lib -lmpichcxx -lmpich -lopa -lmpl -lrt
</span><br>
<span class="quotelev1">&gt; -lpthread&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For intel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/opt/intel/bin/
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=&quot;/opt/intel/lib/intel64:$LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; source
</span><br>
<span class="quotelev1">&gt; /opt/intel/compilers_and_libraries_2016.3.210/linux/mpi/intel64/bin/mpivars.sh
</span><br>
<span class="quotelev1">&gt; intel64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If Only Open Foam is sourced, mpirun --version gives OPEN MPI (1.6.5)
</span><br>
<span class="quotelev1">&gt; If Open Foam and MPICH are sourced, mpirun --version gives mpich 3.0.1
</span><br>
<span class="quotelev1">&gt; If Open Foam and intel MPI are sourced, mpirun --version gives intel (R)
</span><br>
<span class="quotelev1">&gt; MPI libarary for linux, version 5.1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is why I can't have two MPI implementation installed and
</span><br>
<span class="quotelev1">&gt; sourced together. How can I solve the problem ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Islem Megdiche
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29279.php">http://www.open-mpi.org/community/lists/users/2016/05/29279.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29283/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29284.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>In reply to:</strong> <a href="29280.php">Andy Riebs: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
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
