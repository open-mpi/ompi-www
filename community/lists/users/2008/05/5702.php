<?
$subject_val = "Re: [OMPI users] Running Hetergenous MPI Application Over Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 18 18:17:53 2008" -->
<!-- isoreceived="20080518221753" -->
<!-- sent="Sun, 18 May 2008 17:17:40 -0500" -->
<!-- isosent="20080518221740" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running Hetergenous MPI Application Over Infiniband" -->
<!-- id="44079e5f0805181517q76ea9e5cl37f31cd8e1aa3e60_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1210883432.10857.7.camel_at_localhost" -->
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
<strong>Date:</strong> 2008-05-18 18:17:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5703.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Previous message:</strong> <a href="5701.php">Davi Vercillo C. Garcia: "Re: [OMPI users] ROMIO of OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5673.php">Ryan Buckley ; 21426: "Re: [OMPI users] Running Hetergenous MPI Application Over	Infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ryan,
<br>
<p>Thanks for the confirmation that this is an issue with mixing
<br>
different transports.  I will followup by trying this with the current
<br>
trunk.  If things work okay there, then the best approach might be
<br>
for you to move forward to that, if possible.  It's at a fairly stable
<br>
point now in anticipation for branching for the upcoming 1.3 release.
<br>
However, if it's still an issue on the trunk, then I will file a defect
<br>
on it &amp; we'll get it resolved for the 1.3 release.
<br>
<p>--Brad
<br>
<p><p>On Thu, May 15, 2008 at 3:30 PM, Ryan Buckley ; 21426 &lt;rbuckley_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello Brad,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I removed the openib specifier from the btl lists in the appfile and the
</span><br>
<span class="quotelev1">&gt; application ran fine over ethernet.  And yes, to confirm, if I attempt
</span><br>
<span class="quotelev1">&gt; to mix systems with IB and systems without IB, the application
</span><br>
<span class="quotelev1">&gt; hangs.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Ryan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been running a similar heterogeneous setup in my lab; i.e., a mix
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; ppc64 and x86_64 systems connected by ethernet and InfiniBand. In trying
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; replicate your problem, what I see is that it is not an issue of
</span><br>
<span class="quotelev1">&gt; processor
</span><br>
<span class="quotelev1">&gt; heterogeneity, but rather an issue with heterogeneous transports. Can
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; remove the openib specifier from the btl lists in the appfile and try
</span><br>
<span class="quotelev1">&gt; again? I.e., force all inter-system communications over ethernet? For
</span><br>
<span class="quotelev1">&gt; me,
</span><br>
<span class="quotelev1">&gt; that works. But, if I mix systems with IB with systems without IB, I,
</span><br>
<span class="quotelev1">&gt; too,
</span><br>
<span class="quotelev1">&gt; see a hang...even if the processor architectures are the same. If you
</span><br>
<span class="quotelev1">&gt; could
</span><br>
<span class="quotelev1">&gt; confirm that your case is the same, then we can make sure we're only
</span><br>
<span class="quotelev1">&gt; chasing
</span><br>
<span class="quotelev1">&gt; one problem and not two.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --Brad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brad Benton
</span><br>
<span class="quotelev1">&gt; IBM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 1, 2008 at 11:02 AM, Ryan Buckley ; 21426
</span><br>
<span class="quotelev1">&gt; &lt;rbuckley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to run a simple Hello World MPI application in a
</span><br>
<span class="quotelev2">&gt; &gt; heterogeneous environment. The machines include 1 x86 machine with a
</span><br>
<span class="quotelev2">&gt; &gt; standard 1Gb ethernet connection and 2 ppc machines with standard 1Gb
</span><br>
<span class="quotelev2">&gt; &gt; ethernet as well as a 10Gb ethernet (Infiniband) switch between the
</span><br>
<span class="quotelev1">&gt; two.
</span><br>
<span class="quotelev2">&gt; &gt; The Hello World program is the same hello_c.c that is included in the
</span><br>
<span class="quotelev2">&gt; &gt; examples directory of the Open MPI installation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The goal is that I would like to run heterogeneous applications
</span><br>
<span class="quotelev1">&gt; between
</span><br>
<span class="quotelev2">&gt; &gt; the three aforementioned machines in the following manner:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The x86 machine will use tcp to communicate to the 2 ppc machines,
</span><br>
<span class="quotelev2">&gt; &gt; while the ppc machines will communicate with one another via the
</span><br>
<span class="quotelev1">&gt; 10GbE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; x86 &lt;--tcp--&gt; ppc_1
</span><br>
<span class="quotelev2">&gt; &gt; x86 &lt;--tcp--&gt; ppc_2
</span><br>
<span class="quotelev2">&gt; &gt; ppc1 &lt;--openib--&gt; ppc_2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am currently using a machfile set up as follows,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # cat machfile
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ppc_host_1&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ppc_host_2&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;x86_host&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In addition I am using an appfile set up as follows,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # cat appfile
</span><br>
<span class="quotelev2">&gt; &gt; -np 1 --hostfile machfile --host &lt;ppc_host_1&gt; --mca btl
</span><br>
<span class="quotelev2">&gt; &gt; sm,self,tcp,openib /path/to/ppc/openmpi-1.2.5/examples/hello
</span><br>
<span class="quotelev2">&gt; &gt; -np 1 --hostfile machfile --host &lt;ppc_host_2&gt; --mca btl
</span><br>
<span class="quotelev2">&gt; &gt; sm,self,tcp,openib /path/to/ppc/openmpi-1.2.5/examples/hello
</span><br>
<span class="quotelev2">&gt; &gt; -np 1 --hostfile machfile --host &lt;x86_host&gt; --mca btl
</span><br>
<span class="quotelev2">&gt; &gt; sm,self,tcp /path/to/x86/openmpi-1.2.5/examples/hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am running on the command line via
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # mpirun --app appfile
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've also attached the output from 'ompi_info --all' from all
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any suggestions would be much appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ryan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5702/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5703.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Previous message:</strong> <a href="5701.php">Davi Vercillo C. Garcia: "Re: [OMPI users] ROMIO of OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5673.php">Ryan Buckley ; 21426: "Re: [OMPI users] Running Hetergenous MPI Application Over	Infiniband"</a>
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
