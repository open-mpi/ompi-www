<?
$subject_val = "Re: [OMPI users] Running Hetergenous MPI Application Over Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 16:17:17 2008" -->
<!-- isoreceived="20080505201717" -->
<!-- sent="Mon, 5 May 2008 15:17:10 -0500" -->
<!-- isosent="20080505201710" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running Hetergenous MPI Application Over Infiniband" -->
<!-- id="44079e5f0805051317p135185bbrc4bf9532ff66272f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1209657721.6518.28.camel_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running Hetergenous MPI Application Over Infiniband<br>
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 16:17:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5610.php">rajlaxmi: "[OMPI users] Query:File locking failed in ADIOI_Set_lock"</a>
<li><strong>Previous message:</strong> <a href="5608.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5587.php">Ryan Buckley ; 21426: "[OMPI users] Running Hetergenous MPI Application Over Infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ryan,
<br>
<p>I have been running a similar heterogeneous setup in my lab; i.e., a mix of
<br>
ppc64 and x86_64 systems connected by ethernet and InfiniBand.  In trying to
<br>
replicate your problem, what I see is that it is not an issue of processor
<br>
heterogeneity, but rather an issue with heterogeneous transports.  Can you
<br>
remove the openib specifier from the btl lists in the appfile and try
<br>
again?  I.e., force all inter-system communications over ethernet?  For me,
<br>
that works.  But, if I mix systems with IB with systems without IB, I, too,
<br>
see a hang...even if the processor architectures are the same.  If you could
<br>
confirm that your case is the same, then we can make sure we're only chasing
<br>
one problem and not two.
<br>
<p>Thanks,
<br>
--Brad
<br>
<p>Brad Benton
<br>
IBM
<br>
<p><p><p><p>On Thu, May 1, 2008 at 11:02 AM, Ryan Buckley ; 21426 &lt;rbuckley_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run a simple Hello World MPI application in a
</span><br>
<span class="quotelev1">&gt; heterogeneous environment.  The machines include 1 x86 machine with a
</span><br>
<span class="quotelev1">&gt; standard 1Gb ethernet connection and 2 ppc machines with standard 1Gb
</span><br>
<span class="quotelev1">&gt; ethernet as well as a 10Gb ethernet (Infiniband) switch between the two.
</span><br>
<span class="quotelev1">&gt; The Hello World program is the same hello_c.c that is included in the
</span><br>
<span class="quotelev1">&gt; examples directory of the Open MPI installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The goal is that I would like to run heterogeneous applications between
</span><br>
<span class="quotelev1">&gt; the three aforementioned machines in the following manner:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        The x86 machine will use tcp to communicate to the 2 ppc machines,
</span><br>
<span class="quotelev1">&gt; while the ppc machines will communicate with one another via the 10GbE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                x86 &lt;--tcp--&gt; ppc_1
</span><br>
<span class="quotelev1">&gt;                x86 &lt;--tcp--&gt; ppc_2
</span><br>
<span class="quotelev1">&gt;                ppc1 &lt;--openib--&gt; ppc_2
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
<span class="quotelev1">&gt; I've also attached the output from 'ompi_info --all' from all machines.
</span><br>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5609/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5610.php">rajlaxmi: "[OMPI users] Query:File locking failed in ADIOI_Set_lock"</a>
<li><strong>Previous message:</strong> <a href="5608.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5587.php">Ryan Buckley ; 21426: "[OMPI users] Running Hetergenous MPI Application Over Infiniband"</a>
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
