<?
$subject_val = "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 10:28:26 2013" -->
<!-- isoreceived="20130606142826" -->
<!-- sent="Thu, 6 Jun 2013 07:28:18 -0700" -->
<!-- isosent="20130606142818" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns" -->
<!-- id="EAAB851C-0F0C-4FC7-87E3-E824C73BFB0E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="trinity-467f2622-9181-4aa2-be94-96098f9b070d-1370508757642_at_3capp-gmx-bs11" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 10:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22039.php">José Luis García Pallero: "[OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22037.php">Ralph Castain: "Re: [OMPI users] openmpi-lsb_launch failed"</a>
<li><strong>In reply to:</strong> <a href="22036.php">Nima Aghajari: "[OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22045.php">Nima Aghajari: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You could do it by specifying which cores to use - something like
<br>
<p>mpirun -np 4 --slot-list 0-3 prog_1 : -np 1 prog_2
<br>
<p><p>On Jun 6, 2013, at 1:52 AM, Nima Aghajari &lt;greyy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; I am currently using openmpi 1.6.4 and trying to do a parallel performance analysis for a parallel two-program mpirun. So what I have are two programs that are executed like this:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      mpirun -np 4 my_prog1 : -np 1 my_prog2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; my_prog1 and my_prog2 run sequentially, so when one program is actually doing something the other one idles. So ideally I would like my_prog1 to use all 4 available cores and my_prog2 could use any of those for but not an extra one! The command from above results in a run with 5 mpi processes, which run on 5 cores. But in order to compare it with another setup I have to restrict the run to 4 actual cores. I tried using a hostfile as suggested in the FAQ-examples:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      cat my_host
</span><br>
<span class="quotelev1">&gt;      localhost slots=4
</span><br>
<span class="quotelev1">&gt;      mpirun -np 4 --hostfile my_host my_prog1 : -np 1 --hostfile my_host my_prog2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This solution works fine for a single program mpirun. But for the multiple program example from above it leads to a run on 5 cores again because of the duplicate use of the hostfile. Does anyone have an idea how to restrict such a mimd/mpmd mpirun to an overall number of cores?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22038/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22039.php">José Luis García Pallero: "[OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22037.php">Ralph Castain: "Re: [OMPI users] openmpi-lsb_launch failed"</a>
<li><strong>In reply to:</strong> <a href="22036.php">Nima Aghajari: "[OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22045.php">Nima Aghajari: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
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
