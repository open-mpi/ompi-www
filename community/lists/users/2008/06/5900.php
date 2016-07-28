<?
$subject_val = "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 10:18:44 2008" -->
<!-- isoreceived="20080617141844" -->
<!-- sent="Tue, 17 Jun 2008 09:18:36 -0500" -->
<!-- isosent="20080617141836" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI" -->
<!-- id="44079e5f0806170718s4c62906dt175dd6b29bcf0694_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BF03E651-0CFC-40AA-8C19-9F5A701D5AAA_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI<br>
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 10:18:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5901.php">Jeff Squyres: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5899.php">Jeff Squyres: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5895.php">Brock Palen: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5901.php">Jeff Squyres: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<li><strong>Reply:</strong> <a href="5901.php">Jeff Squyres: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jun 16, 2008 at 9:46 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Brad just curious.
</span><br>
<span class="quotelev1">&gt; Did you tweak any other values for starting and running a job on such a
</span><br>
<span class="quotelev1">&gt; large system?  You say unmodified,  but OpenMPI lets you tweak many values
</span><br>
<span class="quotelev1">&gt; at runtime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ahh...sorry for the confusion.  By &quot;unmodified&quot;, I meant at the source code
<br>
level.  The version of Open MPI used was from a straight checkout of the
<br>
trunk and did not have any special code modifications for Roadrunner.  We
<br>
certainly did change some of the default run-time settings.
<br>
<p><p><span class="quotelev1">&gt; I would be curious to expand what I know from what you discovered.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The main run-time parameters used are as follows:
<br>
<p>- For scalable process launch
<br>
&nbsp;&nbsp;routed = binomial
<br>
<p>- To reduce the overhead for IB connections:
<br>
&nbsp;&nbsp;btl_openib_receive_queues =
<br>
P,128,64,32,32,32:S,2048,1024,128,32:S,12288,1024,128,32:S,65536,1024,128,32
<br>
<p>- Bind processes to computational cores:
<br>
&nbsp;&nbsp;opal_paffinity_alone = 1
<br>
<p>- Leave buffers pinned and registered
<br>
&nbsp;&nbsp;mpi_leave_pinned = 1
<br>
<p>--brad
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/%7Ebrockp">http://www.umich.edu/%7Ebrockp</a>&gt;
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 16, 2008, at 10:12 PM, Brad Benton wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings Open MPI users; we thought you'd be interested in the
</span><br>
<span class="quotelev1">&gt; following announcement...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A new supercomputer, powered by Open MPI, has broken the petaflop
</span><br>
<span class="quotelev1">&gt; barrier to become the world's fastest supercomputer.  The
</span><br>
<span class="quotelev1">&gt; &quot;Roadrunner&quot; system was jointly developed by Los Alamos National
</span><br>
<span class="quotelev1">&gt; Laboratories and IBM.  Roadrunner's design uses a cluster of AMD
</span><br>
<span class="quotelev1">&gt; dual-core processors coupled with computational accelerators based
</span><br>
<span class="quotelev1">&gt; on the IBM Cell Broadband Engine.  The cluster consists of 3,060
</span><br>
<span class="quotelev1">&gt; nodes, each of which has 2 dual-core AMD processors and associated
</span><br>
<span class="quotelev1">&gt; Cell accelerators.  The AMD nodes are connected with 4x DDR
</span><br>
<span class="quotelev1">&gt; InfiniBand links.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI was used as the communications library for the 12,240
</span><br>
<span class="quotelev1">&gt; processes comprising the Linpack run which broke the Petaflop
</span><br>
<span class="quotelev1">&gt; barrier at 1.026 Petaflop/s.  The version of Open MPI used in the
</span><br>
<span class="quotelev1">&gt; run-for-record was a pre-release version of the upcoming 1.3
</span><br>
<span class="quotelev1">&gt; release.  Enhancements in this release include modifications for
</span><br>
<span class="quotelev1">&gt; efficient, scalable process launch.  As such, Open MPI was run
</span><br>
<span class="quotelev1">&gt; unmodified from a snapshot of the pre-1.3 source base (meaning:
</span><br>
<span class="quotelev1">&gt; there are no Roadrunner-specific enhancements that are unportable to
</span><br>
<span class="quotelev1">&gt; other environments -- all Open MPI users benefit from the
</span><br>
<span class="quotelev1">&gt; scalability and performance improvements contributed by the
</span><br>
<span class="quotelev1">&gt; Roadrunner project).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Brad Benton
</span><br>
<span class="quotelev1">&gt; Open MPI/Roadrunner Team
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5900/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5901.php">Jeff Squyres: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5899.php">Jeff Squyres: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5895.php">Brock Palen: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5901.php">Jeff Squyres: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<li><strong>Reply:</strong> <a href="5901.php">Jeff Squyres: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
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
