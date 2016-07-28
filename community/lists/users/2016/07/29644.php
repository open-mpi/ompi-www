<?
$subject_val = "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 21:59:45 2016" -->
<!-- isoreceived="20160712015945" -->
<!-- sent="Mon, 11 Jul 2016 21:59:43 -0400" -->
<!-- isosent="20160712015943" -->
<!-- name="Bennet Fauber" -->
<!-- email="bennet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem when installing Rmpi package in HPC cluster" -->
<!-- id="CAB2ovotoZiGcJ8iXi4VMYZrqF=1yArSu=0-Mu9RhThNM47TjeA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="dfacd564-a9f7-5460-6c38-63e297bb7283_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem when installing Rmpi package in HPC cluster<br>
<strong>From:</strong> Bennet Fauber (<em>bennet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-11 21:59:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29645.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Previous message:</strong> <a href="29643.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>In reply to:</strong> <a href="29643.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have found that virtually all Rmpi jobs need to be started with
<br>
<p>$ mpirun -np 1 R CMD BATCH ....
<br>
<p>This is, as I understand it, because the first R will initialize the
<br>
MPI environment and then when you create the cluster, it wants to be
<br>
able to start the rest of the processes.  When you intialize the rest
<br>
of the workers, it should be with one less than the total number of
<br>
processors.  Something like
<br>
<p>mpi.spawn.Rslaves(nslaves=mpi.universe.size()-1)
<br>
<p>We have a very trivial example at
<br>
<p><a href="http://arc-ts.umich.edu/software/rmpi/">http://arc-ts.umich.edu/software/rmpi/</a>
<br>
<p>I have also found that making sure to add the profile that is included
<br>
with Rmpi is also needed.  I do this by adding two lines to the R
<br>
executable script near the top to set and export the and renaming that
<br>
Rmpi.  The profile should be in the Rmpi installation directory.  In
<br>
our case, that makes the first few lines of the R startup script look
<br>
like
<br>
<p>#!/bin/sh
<br>
# Shell wrapper for R executable.
<br>
R_PROFILE=/usr/cac/rhel6/Rmpi/R-3.2.2/0.6-5/Rmpi/Rprofile
<br>
export R_PROFILE
<br>
R_HOME_DIR=/usr/cac/rhel6/R/3.2.2/lib64/R
<br>
....
<br>
<p>Things get dicier if you are using doMPI on top of Rmpi rather than Rmpi itself.
<br>
<p>Just in case that is of any help,
<br>
<p>-- bennet
<br>
<p><p><p><p>On Mon, Jul 11, 2016 at 7:52 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Note this is just a workaround, this simply disables the mxm mtl (e.g.
</span><br>
<span class="quotelev1">&gt; Mellanox optimized infiniband driver).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; basically, there are two ways to run a single task mpi program (a.out)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - mpirun -np 1 ./a.out (this is the &quot;standard&quot; way)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - ./a.out (aka singleton mode)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the logs you posted do not specify how the test was launch (e.g. with or
</span><br>
<span class="quotelev1">&gt; without mpirun)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bottom line, if you hit a singleton limitation (e.g. mxm/mtl is not working
</span><br>
<span class="quotelev1">&gt; in singleton mode), then you can simply
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np &lt;n&gt; a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your Rmpi applications, and this should be just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if not, you need to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_pml=ob1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regardless you are using mpirun or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* and for the sake of completion, if you are using mpirun, an equivalent
</span><br>
<span class="quotelev1">&gt; option is to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca pml ob1 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/12/2016 1:34 AM, pan yang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried export OMPI_MCA_pml=ob1, and it worked! Thank you very much for your
</span><br>
<span class="quotelev1">&gt; brilliant suggestion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, I don't really understand what do you mean by 'can you also
</span><br>
<span class="quotelev1">&gt; extract the command tha launch the test ?'...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Pan
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29640.php">http://www.open-mpi.org/community/lists/users/2016/07/29640.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29643.php">http://www.open-mpi.org/community/lists/users/2016/07/29643.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29645.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Previous message:</strong> <a href="29643.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>In reply to:</strong> <a href="29643.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
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
