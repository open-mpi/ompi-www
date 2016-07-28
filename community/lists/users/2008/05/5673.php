<?
$subject_val = "Re: [OMPI users] Running Hetergenous MPI Application Over	Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 16:30:41 2008" -->
<!-- isoreceived="20080515203041" -->
<!-- sent="Thu, 15 May 2008 16:30:32 -0400" -->
<!-- isosent="20080515203032" -->
<!-- name="Ryan Buckley ; 21426" -->
<!-- email="rbuckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running Hetergenous MPI Application Over	Infiniband" -->
<!-- id="1210883432.10857.7.camel_at_localhost" -->
<!-- inreplyto="[OMPI users] Running Hetergenous MPI Application Over	Infiniband" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running Hetergenous MPI Application Over	Infiniband<br>
<strong>From:</strong> Ryan Buckley ; 21426 (<em>rbuckley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-15 16:30:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5674.php">Jeff Squyres: "Re: [OMPI users] Migrating from lam-mpi"</a>
<li><strong>Previous message:</strong> <a href="5672.php">Wen Hao Wang: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5702.php">Brad Benton: "Re: [OMPI users] Running Hetergenous MPI Application Over Infiniband"</a>
<li><strong>Reply:</strong> <a href="5702.php">Brad Benton: "Re: [OMPI users] Running Hetergenous MPI Application Over Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Brad, 
<br>
<p>I removed the openib specifier from the btl lists in the appfile and the
<br>
application ran fine over ethernet.  And yes, to confirm, if I attempt
<br>
to mix systems with IB and systems without IB, the application
<br>
hangs.    
<br>
<p>Thanks, 
<br>
<p>Ryan
<br>
<p><p><p>Hello Ryan, 
<br>
<p><p>I have been running a similar heterogeneous setup in my lab; i.e., a mix
<br>
of 
<br>
ppc64 and x86_64 systems connected by ethernet and InfiniBand. In trying
<br>
to 
<br>
replicate your problem, what I see is that it is not an issue of
<br>
processor 
<br>
heterogeneity, but rather an issue with heterogeneous transports. Can
<br>
you 
<br>
remove the openib specifier from the btl lists in the appfile and try 
<br>
again? I.e., force all inter-system communications over ethernet? For
<br>
me, 
<br>
that works. But, if I mix systems with IB with systems without IB, I,
<br>
too, 
<br>
see a hang...even if the processor architectures are the same. If you
<br>
could 
<br>
confirm that your case is the same, then we can make sure we're only
<br>
chasing 
<br>
one problem and not two. 
<br>
<p><p>Thanks, 
<br>
--Brad 
<br>
<p><p>Brad Benton 
<br>
IBM 
<br>
<p><p>On Thu, May 1, 2008 at 11:02 AM, Ryan Buckley ; 21426
<br>
&lt;rbuckley_at_[hidden]&gt; 
<br>
wrote: 
<br>
<p><p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run a simple Hello World MPI application in a
</span><br>
<span class="quotelev1">&gt; heterogeneous environment. The machines include 1 x86 machine with a
</span><br>
<span class="quotelev1">&gt; standard 1Gb ethernet connection and 2 ppc machines with standard 1Gb
</span><br>
<span class="quotelev1">&gt; ethernet as well as a 10Gb ethernet (Infiniband) switch between the
</span><br>
two.
<br>
<span class="quotelev1">&gt; The Hello World program is the same hello_c.c that is included in the
</span><br>
<span class="quotelev1">&gt; examples directory of the Open MPI installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The goal is that I would like to run heterogeneous applications
</span><br>
between
<br>
<span class="quotelev1">&gt; the three aforementioned machines in the following manner:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The x86 machine will use tcp to communicate to the 2 ppc machines,
</span><br>
<span class="quotelev1">&gt; while the ppc machines will communicate with one another via the
</span><br>
10GbE.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; x86 &lt;--tcp--&gt; ppc_1
</span><br>
<span class="quotelev1">&gt; x86 &lt;--tcp--&gt; ppc_2
</span><br>
<span class="quotelev1">&gt; ppc1 &lt;--openib--&gt; ppc_2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently using a machfile set up as follows,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # cat machfile
</span><br>
<span class="quotelev1">&gt; &lt;ppc_host_1&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ppc_host_2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;x86_host&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition I am using an appfile set up as follows,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # cat appfile
</span><br>
<span class="quotelev1">&gt; -np 1 --hostfile machfile --host &lt;ppc_host_1&gt; --mca btl
</span><br>
<span class="quotelev1">&gt; sm,self,tcp,openib /path/to/ppc/openmpi-1.2.5/examples/hello
</span><br>
<span class="quotelev1">&gt; -np 1 --hostfile machfile --host &lt;ppc_host_2&gt; --mca btl
</span><br>
<span class="quotelev1">&gt; sm,self,tcp,openib /path/to/ppc/openmpi-1.2.5/examples/hello
</span><br>
<span class="quotelev1">&gt; -np 1 --hostfile machfile --host &lt;x86_host&gt; --mca btl
</span><br>
<span class="quotelev1">&gt; sm,self,tcp /path/to/x86/openmpi-1.2.5/examples/hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running on the command line via
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun --app appfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've also attached the output from 'ompi_info --all' from all
</span><br>
machines.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions would be much appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ryan
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5674.php">Jeff Squyres: "Re: [OMPI users] Migrating from lam-mpi"</a>
<li><strong>Previous message:</strong> <a href="5672.php">Wen Hao Wang: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5702.php">Brad Benton: "Re: [OMPI users] Running Hetergenous MPI Application Over Infiniband"</a>
<li><strong>Reply:</strong> <a href="5702.php">Brad Benton: "Re: [OMPI users] Running Hetergenous MPI Application Over Infiniband"</a>
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
