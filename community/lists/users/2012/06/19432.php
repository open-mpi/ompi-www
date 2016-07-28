<?
$subject_val = "Re: [OMPI users] seg fault with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 17:06:14 2012" -->
<!-- isoreceived="20120601210614" -->
<!-- sent="Fri, 1 Jun 2012 15:06:10 -0600" -->
<!-- isosent="20120601210610" -->
<!-- name="Edmund Sumbar" -->
<!-- email="esumbar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault with intel compiler" -->
<!-- id="CAPkgxcw+qYxkL8xDgLBU4GRONYRyyUOBOha-kgX5Yibd6ViyMQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FC92883.7000609_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] seg fault with intel compiler<br>
<strong>From:</strong> Edmund Sumbar (<em>esumbar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 17:06:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19433.php">George Bosilca: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>Previous message:</strong> <a href="19431.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19431.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19434.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19434.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the tips Gus. I'll definitely try some of these, particularly
<br>
the nodes:ppn syntax, and report back.
<br>
<p>Right now, I'm upgrading the Intel Compilers and rebuilding Open MPI.
<br>
<p><p>On Fri, Jun 1, 2012 at 2:39 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The [Torque/PBS] syntax '-l procs=48' is somewhat troublesome,
</span><br>
<span class="quotelev1">&gt; and may not be understood by the scheduler [It doesn't
</span><br>
<span class="quotelev1">&gt; work correctly with Maui, which is what we have here.  I read
</span><br>
<span class="quotelev1">&gt; people saying it works with pbs_sched and with Moab,
</span><br>
<span class="quotelev1">&gt; but that's hearsay.]
</span><br>
<span class="quotelev1">&gt; This issue comes back very often in the Torque mailing
</span><br>
<span class="quotelev1">&gt; list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried instead this alternate syntax?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; '-l nodes=2:ppn=24'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [I am assuming here that your
</span><br>
<span class="quotelev1">&gt; nodes have 24 cores, i.e. 24 'ppn', each]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then in the script:
</span><br>
<span class="quotelev1">&gt; mpiexec -np 48 ./your_program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, in your PBS script you could print
</span><br>
<span class="quotelev1">&gt; the contents of PBS_NODEFILE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A simple troubleshooting test is to launch 'hostname'
</span><br>
<span class="quotelev1">&gt; with mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 48 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, are you sure that the OpenMPI you are using was
</span><br>
<span class="quotelev1">&gt; compiled with Torque support?
</span><br>
<span class="quotelev1">&gt; If not, I wonder if clauses like '-bynode' would work at all.
</span><br>
<span class="quotelev1">&gt; Jeff may correct me if I am wrong, but if your
</span><br>
<span class="quotelev1">&gt; OpenMPI lacks Torque support,
</span><br>
<span class="quotelev1">&gt; you may need to pass to mpirun
</span><br>
<span class="quotelev1">&gt; the $PBS_NODEFILE as your hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Edmund Sumbar
University of Alberta
+1 780 492 9360
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19432/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19433.php">George Bosilca: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>Previous message:</strong> <a href="19431.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19431.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19434.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19434.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
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
