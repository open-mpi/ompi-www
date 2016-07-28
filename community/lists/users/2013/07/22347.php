<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 17:11:19 2013" -->
<!-- isoreceived="20130719211119" -->
<!-- sent="Fri, 19 Jul 2013 14:11:11 -0700" -->
<!-- isosent="20130719211111" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="EA601B10-2489-4526-B6CA-56533E935F71_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51E9983F.4080700_at_ohio.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] After OS Update MPI_Init fails on one host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 17:11:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22348.php">Jeff Hammond: "Re: [OMPI users] configure/library question"</a>
<li><strong>Previous message:</strong> <a href="22346.php">Kevin H. Hobbs: "[OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22346.php">Kevin H. Hobbs: "[OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22349.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22349.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you sure you're using the same version of OMPI on this new OS? They typically distribute one in your default path, so I'd check to ensure that you really are using the version you think.
<br>
<p><p>On Jul 19, 2013, at 12:49 PM, &quot;Kevin H. Hobbs&quot; &lt;hobbsk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I just upgraded the OS on one of my workstations from Fedora 17 to 18
</span><br>
<span class="quotelev1">&gt; and now I can't run even the simplest MPI programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I filed a bug report with Fedora's bug tracker :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://bugzilla.redhat.com/show_bug.cgi?id=986409">https://bugzilla.redhat.com/show_bug.cgi?id=986409</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My simple program is attached as mpi_simple.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc works :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpicc -g -o mpi_simple mpi_simple.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can even take the generated program to another computer and it runs fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can run mon MPI programs with mpirun :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpirun -n 4 hostname
</span><br>
<span class="quotelev1">&gt;  murron.hobbs-hancock
</span><br>
<span class="quotelev1">&gt;  murron.hobbs-hancock
</span><br>
<span class="quotelev1">&gt;  murron.hobbs-hancock
</span><br>
<span class="quotelev1">&gt;  murron.hobbs-hancock
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run a program that calls MPI_Init I get an error which includes :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_util_nidmap_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output of :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 mpi_simple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is attached as error.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect it matters that this is a lenovo S10 with what /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; calls a &quot;Intel(R) Core(TM)2 Quad CPU    Q6600&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did a bit of poking around in gdb but I don't know what I'm looking for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody have an idea what's going on?
</span><br>
<span class="quotelev1">&gt; &lt;mpi_simple.c&gt;&lt;error.txt&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="22348.php">Jeff Hammond: "Re: [OMPI users] configure/library question"</a>
<li><strong>Previous message:</strong> <a href="22346.php">Kevin H. Hobbs: "[OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22346.php">Kevin H. Hobbs: "[OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22349.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22349.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
