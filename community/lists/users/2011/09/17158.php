<?
$subject_val = "Re: [OMPI users] I want to check our own modified Ofed stack with MPI application";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 01:10:39 2011" -->
<!-- isoreceived="20110906051039" -->
<!-- sent="Tue, 6 Sep 2011 10:40:33 +0530" -->
<!-- isosent="20110906051033" -->
<!-- name="bhimesh akula" -->
<!-- email="bhimesh.akula_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I want to check our own modified Ofed stack with MPI application" -->
<!-- id="CAPOYHvYyFLnGpp4TAHBXMeZMnekpQ_w4QhRRca1UiX8UvNKvgQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B5E0EC77-A3B8-42A5-9F9A-CF7B75809748_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] I want to check our own modified Ofed stack with MPI application<br>
<strong>From:</strong> bhimesh akula (<em>bhimesh.akula_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 01:10:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17159.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17157.php">Rodrigo Oliveira: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17143.php">Jeff Squyres: "Re: [OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for the information.I got understanding like openmpi is a library not
<br>
a tool like qperf,correct me if i am wrong.If it is a tool,explain me how to
<br>
run it.
<br>
<p>On Fri, Sep 2, 2011 at 5:13 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If I understand you correctly, it sounds like MPI -- overall -- is new to
</span><br>
<span class="quotelev1">&gt; you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that's the case, here's the 2 minute overview: MPI is communications
</span><br>
<span class="quotelev1">&gt; middleware, typically used for parallel applications.  MPI, as an API, is
</span><br>
<span class="quotelev1">&gt; underlying-network-agnostic; hence, it can be used with TCP sockets,
</span><br>
<span class="quotelev1">&gt; ethernet, OpenFabrics-based networks, etc., without the upper-layer
</span><br>
<span class="quotelev1">&gt; application being aware of the differences between these networks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's lots of MPI-based applications out there, including bunches of
</span><br>
<span class="quotelev1">&gt; benchmarks and tests.  You might want to get the Intel MPI Benchmarks (aka
</span><br>
<span class="quotelev1">&gt; &quot;IMB&quot;) and compile and run those with Open MPI over your modified OFED
</span><br>
<span class="quotelev1">&gt; stack. The IMB are sufficiently complex, and MPI implementations themselves
</span><br>
<span class="quotelev1">&gt; are sufficiently complex and different from each other that running IMB with
</span><br>
<span class="quotelev1">&gt; 4 or 8 processes will exercise your OFED stack in many different ways;
</span><br>
<span class="quotelev1">&gt; that's probably why MPI was recommended to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The two big open source MPI implementations -- Open MPI and MPICH2 -- both
</span><br>
<span class="quotelev1">&gt; come with &quot;wrapper&quot; compilers (mpicc, mpic++, mpf77, mpif90, ...etc.) that
</span><br>
<span class="quotelev1">&gt; add all the relevant compiler/linker flags to the command line to
</span><br>
<span class="quotelev1">&gt; compile/link your application.  Hence, in Makefiles, you can typically
</span><br>
<span class="quotelev1">&gt; remove all MPI-inspired references to -I, -L, and -l and just use the
</span><br>
<span class="quotelev1">&gt; wrapper compilers.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc -c foo.c
</span><br>
<span class="quotelev1">&gt; mpicc -c bar.c
</span><br>
<span class="quotelev1">&gt; mpicc foo.o bar.o -o my_mpi_application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You then use &quot;mpirun&quot; to launch your application in parallel.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 --hostfile my_hostfile my_mpi_application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the mpirun(1) for more details, and the FAQ.  Each MPI implementation's
</span><br>
<span class="quotelev1">&gt; mpirun is typically different than the others (e.g., Open MPI's mpirun has
</span><br>
<span class="quotelev1">&gt; different CLI options than MPICH2's mpirun).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI also allows the concept of run-time customization of the
</span><br>
<span class="quotelev1">&gt; underlying MPI processing engine via &quot;MCA&quot; parameters.  You can pass MCA
</span><br>
<span class="quotelev1">&gt; params via the command line, environment, or files (see the FAQ).  Open MPI
</span><br>
<span class="quotelev1">&gt; should probably pick the OpenFabrics-based transport by default on your
</span><br>
<span class="quotelev1">&gt; machines, but just to be sure, you can force the use of the &quot;openib&quot; BTL
</span><br>
<span class="quotelev1">&gt; (byte transport layer) in Open MPI thusly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 --hostfile my_hostfile --mca btl openib,sm,self
</span><br>
<span class="quotelev1">&gt; my_mpi_application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openib = OFED-based transport (for MPI procs on remote servers)
</span><br>
<span class="quotelev1">&gt; sm = shared memory-based transport (for MPI procs on the same server)
</span><br>
<span class="quotelev1">&gt; self = process loopback
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That should be enough to get you going; good luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 2, 2011, at 7:17 AM, bhimesh akula wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi ,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We developed new OFED stack as for our requirements to our new
</span><br>
<span class="quotelev1">&gt; product.Now it is needed to check the functionality of new OFED stack using
</span><br>
<span class="quotelev1">&gt; MPI,used multi node setup to check this stack.But problem is we are not
</span><br>
<span class="quotelev1">&gt; having no idea how to use OPEN-MPI tool to check our stack.I went through
</span><br>
<span class="quotelev1">&gt; this site &quot;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&quot;,here only mentioned how to run MPI
</span><br>
<span class="quotelev1">&gt; applications but we need our new stack has to be checked using MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As we checked our new stack using qperf tool but MPI is more recommended
</span><br>
<span class="quotelev1">&gt; .Want to know how to run MPI as how we used qperf. we used qperf like &quot;at
</span><br>
<span class="quotelev1">&gt; one node running qperf as server and running qperf at other node as
</span><br>
<span class="quotelev1">&gt; client,ran all the qperf test cases from client to see the functionality and
</span><br>
<span class="quotelev1">&gt; performance of OFED&quot;.Like this how we can use OPEN-MPI tool to test the new
</span><br>
<span class="quotelev1">&gt; stack.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think problem conveyed well,please get back to me on this as soon as
</span><br>
<span class="quotelev1">&gt; possible.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks &amp; regards,
</span><br>
<span class="quotelev2">&gt; &gt; Punya Bhimesh.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17159.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17157.php">Rodrigo Oliveira: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17143.php">Jeff Squyres: "Re: [OMPI users] I want to check our own modified Ofed stack with MPI application"</a>
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
