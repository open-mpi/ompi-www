<?
$subject_val = "Re: [OMPI users] Help on the big picture..";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 24 00:27:32 2010" -->
<!-- isoreceived="20100724042732" -->
<!-- sent="Sat, 24 Jul 2010 00:27:06 -0400" -->
<!-- isosent="20100724042706" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on the big picture.." -->
<!-- id="AANLkTi=Eo-1Ketvjn=bRerTy3u-4AVf5adEoQY_myuLC_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C4A4FA3.9070606_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help on the big picture..<br>
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-24 00:27:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13769.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13767.php">Tim Prince: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>In reply to:</strong> <a href="13767.php">Tim Prince: "Re: [OMPI users] Help on the big picture.."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
this is a mailing list, and some of us are new, others older and
<br>
experienced, the new ones we might not know the protocol commonly
<br>
used, but we should at least treat each other more friendly without
<br>
judging the interests of the others ahead of time, because you are
<br>
wrong.
<br>
<p>All the answers received were useful for me.
<br>
thanks...
<br>
Cristobal
<br>
<p><p><p><p><p>On Fri, Jul 23, 2010 at 10:27 PM, Tim Prince &lt;n8tm_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On 7/22/2010 4:11 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cristobal Navarro wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i was aware of the big difference hehe.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now that openMP and openMPI is in talk, i've alwyas wondered if its a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; good idea to model a solution on the following way, using both openMP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and openMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suppose you have n nodes, each node has a quadcore, (so you have n*4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch n proceses acorrding to the n nodes available.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set a resource manager like SGE to fill the n*4 slots using round robin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on each process, make use of the other cores available on the node,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with openMP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if this is possible, then on each one could make use fo the shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory model locally at each node, evading unnecesary I/O through the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nwetwork, what do you think?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Before asking what we think about this, please check the many references
</span><br>
<span class="quotelev1">&gt; posted on this subject over the last decade. &#160;Then refine your question to
</span><br>
<span class="quotelev1">&gt; what you are interested in hearing about; evidently you have no interest in
</span><br>
<span class="quotelev1">&gt; much of this topic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it is possible, and many of the atmosphere/oceans/climate codes
</span><br>
<span class="quotelev2">&gt;&gt; that we run is written with this capability. In other areas of
</span><br>
<span class="quotelev2">&gt;&gt; science and engineering this is probably the case too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, this is not necessarily better/faster/simpler than dedicate all
</span><br>
<span class="quotelev2">&gt;&gt; the cores to MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my view, this is due to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) OpenMP has a different scope than MPI,
</span><br>
<span class="quotelev2">&gt;&gt; and to some extent is limited by more stringent requirements than MPI;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) Most modern MPI implementations (and OpenMPI is an example) use shared
</span><br>
<span class="quotelev2">&gt;&gt; memory mechanisms to communicate between processes that reside
</span><br>
<span class="quotelev2">&gt;&gt; in a single physical node/computer;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The shared memory communication of several MPI implementations does greatly
</span><br>
<span class="quotelev1">&gt; improve efficiency of message passing among ranks assigned to the same node.
</span><br>
<span class="quotelev1">&gt; &#160;However, these ranks also communicate with ranks on other nodes, so there
</span><br>
<span class="quotelev1">&gt; is a large potential advantage for hybrid MPI/OpenMP as the number of cores
</span><br>
<span class="quotelev1">&gt; in use increases. &#160;If you aren't interested in running on more than 8 nodes
</span><br>
<span class="quotelev1">&gt; or so, perhaps you won't care about this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) Writing hybrid code with MPI and OpenMP requires more effort,
</span><br>
<span class="quotelev2">&gt;&gt; and much care so as not to let the two forms of parallelism step on
</span><br>
<span class="quotelev2">&gt;&gt; each other's toes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI standard specifies the use of MPI_init_thread to indicate which
</span><br>
<span class="quotelev1">&gt; combination of MPI and threading you intend to use, and to inquire whether
</span><br>
<span class="quotelev1">&gt; that model is supported by the active MPI.
</span><br>
<span class="quotelev1">&gt; In the case where there is only 1 MPI process per node (possibly using
</span><br>
<span class="quotelev1">&gt; several cores via OpenMP threading) there is no requirement for special
</span><br>
<span class="quotelev1">&gt; affinity support.
</span><br>
<span class="quotelev1">&gt; If there is more than 1 FUNNELED rank per multiple CPU node, it becomes
</span><br>
<span class="quotelev1">&gt; important to maintain cache locality for each rank.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMP operates mostly through compiler directives/pragmas interspersed
</span><br>
<span class="quotelev2">&gt;&gt; on the code. &#160;For instance, you can parallelize inner loops in no time,
</span><br>
<span class="quotelev2">&gt;&gt; granted that there are no data dependencies across the commands within the
</span><br>
<span class="quotelev2">&gt;&gt; loop. &#160;All it takes is to write one or two directive/pragma lines.
</span><br>
<span class="quotelev2">&gt;&gt; More than loop parallelization can be done with OpenMP, of course,
</span><br>
<span class="quotelev2">&gt;&gt; although not as much as can be done with MPI.
</span><br>
<span class="quotelev2">&gt;&gt; Still, with OpenMP, you are restricted to work in a shared memory
</span><br>
<span class="quotelev2">&gt;&gt; environment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; By contrast, MPI requires more effort to program, but it takes advantage
</span><br>
<span class="quotelev2">&gt;&gt; of shared memory and networked environments
</span><br>
<span class="quotelev2">&gt;&gt; (and perhaps extended grids too).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;snips&gt;
</span><br>
<span class="quotelev1">&gt; snipped tons of stuff rather than attempt to reconcile top postings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Prince
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
<li><strong>Next message:</strong> <a href="13769.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13767.php">Tim Prince: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>In reply to:</strong> <a href="13767.php">Tim Prince: "Re: [OMPI users] Help on the big picture.."</a>
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
