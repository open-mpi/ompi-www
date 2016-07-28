<?
$subject_val = "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  8 09:23:43 2015" -->
<!-- isoreceived="20150808132343" -->
<!-- sent="Sat, 8 Aug 2015 22:23:42 +0900" -->
<!-- isosent="20150808132342" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1" -->
<!-- id="CAAkFZ5s0WcZw4ZwZjT5MibOG8M1+7YeCsWZmZUPdL=ykD6EVvQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57ofpPR_K2BmiB4OGb9m7vEbT0ypj1nZz3ArLza7w5ajy0Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-08 09:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27413.php">James Spencer: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="27411.php">Ralph Castain: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="27411.php">Ralph Castain: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
if your application still hangs, you can use padb <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
<br>
to the state of the application.
<br>
if it hangs in a MPI collective subroutine, you can try to
<br>
mpirun --mca coll basic
<br>
and see if the hang disappear.
<br>
(the default tuned coll module is known to be broken in some cases)
<br>
<p>based on your report, we might recommend some tuning for the tuned module
<br>
(as you can guess, the basic coll module is not optimized)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, August 8, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My first suggestion would be to try using 1.8.8 instead to get all the bug
</span><br>
<span class="quotelev1">&gt; fixes since 1.8.1 was released
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 7, 2015 at 10:34 PM, kishor sharma &lt;kishor.iitr_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','kishor.iitr_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I recently upgraded from openmpi 1.5.4 to openmpi 1.81 and built an
</span><br>
<span class="quotelev2">&gt;&gt; application which uses parallel version of Mumps (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mumps.enseeiht.fr/">http://mumps.enseeiht.fr/</a>) .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am noticing process gets hung with np &gt; 2 but some time it works also.
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure if this because of the openmpi upgrade or some problem with
</span><br>
<span class="quotelev2">&gt;&gt; our code. It used to work fine with 1.5.4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Strace shows that process is polling some resource while it is hanged.
</span><br>
<span class="quotelev2">&gt;&gt; Any pointers on how to debug this ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Kishor
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27410.php">http://www.open-mpi.org/community/lists/users/2015/08/27410.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27412/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27413.php">James Spencer: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="27411.php">Ralph Castain: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="27411.php">Ralph Castain: "Re: [OMPI users] Mumps Parallel version hanging with OpenMPI 1.8.1"</a>
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
