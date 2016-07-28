<?
$subject_val = "Re: [OMPI users] seg fault with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 16:39:48 2012" -->
<!-- isoreceived="20120601203948" -->
<!-- sent="Fri, 01 Jun 2012 16:39:31 -0400" -->
<!-- isosent="20120601203931" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault with intel compiler" -->
<!-- id="4FC92883.7000609_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPkgxczC2oUEsWxBrdEZmNounwQqM14U__4_bb_9NfYnfmeMHw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-06-01 16:39:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19432.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19430.php">Tom Harvill: "[OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>In reply to:</strong> <a href="19421.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19432.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19432.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Edmund
<br>
<p>The [Torque/PBS] syntax '-l procs=48' is somewhat troublesome,
<br>
and may not be understood by the scheduler [It doesn't
<br>
work correctly with Maui, which is what we have here.  I read
<br>
people saying it works with pbs_sched and with Moab,
<br>
but that's hearsay.]
<br>
This issue comes back very often in the Torque mailing
<br>
list.
<br>
<p>Have you tried instead this alternate syntax?
<br>
<p>'-l nodes=2:ppn=24'
<br>
<p>[I am assuming here that your
<br>
nodes have 24 cores, i.e. 24 'ppn', each]
<br>
<p>Then in the script:
<br>
mpiexec -np 48 ./your_program
<br>
<p><p>Also, in your PBS script you could print
<br>
the contents of PBS_NODEFILE.
<br>
<p>cat $PBS_NODEFILE
<br>
<p><p>A simple troubleshooting test is to launch 'hostname'
<br>
with mpirun
<br>
<p>mpirun -np 48 hostname
<br>
<p>Finally, are you sure that the OpenMPI you are using was
<br>
compiled with Torque support?
<br>
If not, I wonder if clauses like '-bynode' would work at all.
<br>
Jeff may correct me if I am wrong, but if your
<br>
OpenMPI lacks Torque support,
<br>
you may need to pass to mpirun
<br>
the $PBS_NODEFILE as your hostfile.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>On 06/01/2012 11:26 AM, Edmund Sumbar wrote:
<br>
<span class="quotelev1">&gt; On Fri, Jun 1, 2012 at 8:09 AM, Jeff Squyres &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It's been a loooong time since I've run under PBS, so I don't
</span><br>
<span class="quotelev1">&gt;     remember if your script's environment is copied out to the remote
</span><br>
<span class="quotelev1">&gt;     nodes where your application actually runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Can you verify that PATH and LD_LIBRARY_PATH are the same on all
</span><br>
<span class="quotelev1">&gt;     nodes in your PBS allocation after you module load?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled the following program and invoked it with &quot;mpiexec -bynode
</span><br>
<span class="quotelev1">&gt; ./test-env&quot; in a PBS script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int i, rank, size, namelen;
</span><br>
<span class="quotelev1">&gt;    MPI_Status stat;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    printf(&quot;rank: %d: ld_library_path: %s\n&quot;, rank,
</span><br>
<span class="quotelev1">&gt; getenv(&quot;LD_LIBRARY_PATH&quot;));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    return (0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I submitted the script with &quot;qsub -l procs=24 job.pbs&quot;, and got
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank: 4: ld_library_path:
</span><br>
<span class="quotelev1">&gt; /lustre/jasper/software/openmpi/openmpi-1.6-intel/lib:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/ipp/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/mkl/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/compiler/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/tbb/lib/intel64:/home/esumbar/local/lib:/usr/lib/jvm/jre-1.6.0-sun/lib/amd64/server:/usr/lib/jvm/jre-1.6.0-sun/lib/amd64:/opt/sgi/sgimc/lib:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/debugger/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/mpirt/lib/intel64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank: 3: ld_library_path:
</span><br>
<span class="quotelev1">&gt; /lustre/jasper/software/openmpi/openmpi-1.6-intel/lib:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/ipp/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/mkl/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/compiler/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/tbb/lib/intel64:/home/esumbar/local/lib:/usr/lib/jvm/jre-1.6.0-sun/lib/amd64/server:/usr/lib/jvm/jre-1.6.0-sun/lib/amd64:/opt/sgi/sgimc/lib:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/debugger/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/mpirt/lib/intel64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...more of the same...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I submitted it with -l procs=48, I got
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cl2n004:11617] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cl2n004:11617] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [cl2n004:11617] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [cl2n004:11617] Failing at address: 0x10
</span><br>
<span class="quotelev1">&gt; [cl2n004:11617] [ 0] /lib64/libpthread.so.0 [0x376ca0ebe0]
</span><br>
<span class="quotelev1">&gt; [cl2n004:11617] [ 1]
</span><br>
<span class="quotelev1">&gt; /lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x4b3)
</span><br>
<span class="quotelev1">&gt; [0x2af788a98113]
</span><br>
<span class="quotelev1">&gt; [cl2n004:11617] [ 2]
</span><br>
<span class="quotelev1">&gt; /lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(opal_memory_ptmalloc2_malloc+0x59)
</span><br>
<span class="quotelev1">&gt; [0x2af788a9a8a9]
</span><br>
<span class="quotelev1">&gt; [cl2n004:11617] [ 3]
</span><br>
<span class="quotelev1">&gt; /lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; [0x2af788a9a596]
</span><br>
<span class="quotelev1">&gt; [cl2n004:11617] [ 4]
</span><br>
<span class="quotelev1">&gt; /lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0x2af78c916654]
</span><br>
<span class="quotelev1">&gt; [cl2n004:11617] [ 5] /lib64/libpthread.so.0 [0x376ca0677d]
</span><br>
<span class="quotelev1">&gt; [cl2n004:11617] [ 6] /lib64/libc.so.6(clone+0x6d) [0x376bed325d]
</span><br>
<span class="quotelev1">&gt; [cl2n004:11617] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 4 with PID 11617 on node cl2n004
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that failures happen for arbitrary reasons. When I added a line
</span><br>
<span class="quotelev1">&gt; in the PBS script to print out the node allocation, the procs=24 case
</span><br>
<span class="quotelev1">&gt; failed, but then it worked a few seconds later, with the same list of
</span><br>
<span class="quotelev1">&gt; allocated nodes. So there's definitely something amiss with the cluster,
</span><br>
<span class="quotelev1">&gt; although I wouldn't know where to start investigating. Perhaps there is
</span><br>
<span class="quotelev1">&gt; a pre-installed OMPI somewhere that's interfering, but I'm doubtful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, thanks for all the support.
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
<li><strong>Next message:</strong> <a href="19432.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19430.php">Tom Harvill: "[OMPI users] Question about component priority (psm/sm)"</a>
<li><strong>In reply to:</strong> <a href="19421.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19432.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19432.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
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
