<?
$subject_val = "Re: [OMPI users] seg fault with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 17:30:03 2012" -->
<!-- isoreceived="20120601213003" -->
<!-- sent="Fri, 01 Jun 2012 17:29:54 -0400" -->
<!-- isosent="20120601212954" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault with intel compiler" -->
<!-- id="4FC93452.5020309_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPkgxcw+qYxkL8xDgLBU4GRONYRyyUOBOha-kgX5Yibd6ViyMQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 17:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19435.php">Jeff Squyres: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>Previous message:</strong> <a href="19433.php">George Bosilca: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>In reply to:</strong> <a href="19432.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19452.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19452.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/01/2012 05:06 PM, Edmund Sumbar wrote:
<br>
<span class="quotelev1">&gt; Thanks for the tips Gus. I'll definitely try some of these, particularly
</span><br>
<span class="quotelev1">&gt; the nodes:ppn syntax, and report back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You can check for torque support with
<br>
<p>mpicc --showme
<br>
<p>It should show among other things -ltorque [if it
<br>
has torque support] and -lrdmacm -libverbs [if it
<br>
has OpenIB/Infinband support].
<br>
<p>If Torque is not installed in a standard location
<br>
[such as /usr or /usr/local],
<br>
which is often the case, you may need
<br>
to point configure to the Torque library with:
<br>
<p>--with-tm=/path/to/torque
<br>
<p>Likewise for Infinband/OpenIB if you have it:
<br>
<p>--with-openib=/path/to/openib
<br>
<p>[I am citing these options from memory.
<br>
Do a './configure -help' to check the right syntax, please.]
<br>
<p>Making a log file of your configure run may be helpful, to
<br>
diagnose problems.
<br>
<p>Finally, if I remember right, there was some problem
<br>
reported in the list regarding Intel compilers 12.1.
<br>
[I built 1.4.5 with Intel 11 and it works fine.]
<br>
However, that problem may have been superseded in
<br>
the latest OpenMPI 1.6.0.
<br>
[The release notes will tell, or perhaps Jeff.]
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt; Right now, I'm upgrading the Intel Compilers
</span><br>
<span class="quotelev1">&gt; and rebuilding Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 1, 2012 at 2:39 PM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The [Torque/PBS] syntax '-l procs=48' is somewhat troublesome,
</span><br>
<span class="quotelev1">&gt;     and may not be understood by the scheduler [It doesn't
</span><br>
<span class="quotelev1">&gt;     work correctly with Maui, which is what we have here.  I read
</span><br>
<span class="quotelev1">&gt;     people saying it works with pbs_sched and with Moab,
</span><br>
<span class="quotelev1">&gt;     but that's hearsay.]
</span><br>
<span class="quotelev1">&gt;     This issue comes back very often in the Torque mailing
</span><br>
<span class="quotelev1">&gt;     list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Have you tried instead this alternate syntax?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     '-l nodes=2:ppn=24'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [I am assuming here that your
</span><br>
<span class="quotelev1">&gt;     nodes have 24 cores, i.e. 24 'ppn', each]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Then in the script:
</span><br>
<span class="quotelev1">&gt;     mpiexec -np 48 ./your_program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Also, in your PBS script you could print
</span><br>
<span class="quotelev1">&gt;     the contents of PBS_NODEFILE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     A simple troubleshooting test is to launch 'hostname'
</span><br>
<span class="quotelev1">&gt;     with mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun -np 48 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Finally, are you sure that the OpenMPI you are using was
</span><br>
<span class="quotelev1">&gt;     compiled with Torque support?
</span><br>
<span class="quotelev1">&gt;     If not, I wonder if clauses like '-bynode' would work at all.
</span><br>
<span class="quotelev1">&gt;     Jeff may correct me if I am wrong, but if your
</span><br>
<span class="quotelev1">&gt;     OpenMPI lacks Torque support,
</span><br>
<span class="quotelev1">&gt;     you may need to pass to mpirun
</span><br>
<span class="quotelev1">&gt;     the $PBS_NODEFILE as your hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Edmund Sumbar
</span><br>
<span class="quotelev1">&gt; University of Alberta
</span><br>
<span class="quotelev1">&gt; +1 780 492 9360
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19435.php">Jeff Squyres: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>Previous message:</strong> <a href="19433.php">George Bosilca: "Re: [OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>In reply to:</strong> <a href="19432.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19452.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19452.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
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
