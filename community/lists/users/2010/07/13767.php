<?
$subject_val = "Re: [OMPI users] Help on the big picture..";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 23 22:28:01 2010" -->
<!-- isoreceived="20100724022801" -->
<!-- sent="Fri, 23 Jul 2010 19:27:47 -0700" -->
<!-- isosent="20100724022747" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on the big picture.." -->
<!-- id="4C4A4FA3.9070606_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C48D004.3070109_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-23 22:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13768.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Previous message:</strong> <a href="13766.php">Ralph Castain: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>In reply to:</strong> <a href="13756.php">Gus Correa: "Re: [OMPI users] Help on the big picture.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13768.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Reply:</strong> <a href="13768.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/22/2010 4:11 PM, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Cristobal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cristobal Navarro wrote:
</span><br>
<span class="quotelev2">&gt;&gt; yes,
</span><br>
<span class="quotelev2">&gt;&gt; i was aware of the big difference hehe.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; now that openMP and openMPI is in talk, i've alwyas wondered if its a
</span><br>
<span class="quotelev2">&gt;&gt; good idea to model a solution on the following way, using both openMP
</span><br>
<span class="quotelev2">&gt;&gt; and openMPI.
</span><br>
<span class="quotelev2">&gt;&gt; suppose you have n nodes, each node has a quadcore, (so you have n*4 
</span><br>
<span class="quotelev2">&gt;&gt; processors)
</span><br>
<span class="quotelev2">&gt;&gt; launch n proceses acorrding to the n nodes available.
</span><br>
<span class="quotelev2">&gt;&gt; set a resource manager like SGE to fill the n*4 slots using round robin.
</span><br>
<span class="quotelev2">&gt;&gt; on each process, make use of the other cores available on the node,
</span><br>
<span class="quotelev2">&gt;&gt; with openMP.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if this is possible, then on each one could make use fo the shared
</span><br>
<span class="quotelev2">&gt;&gt; memory model locally at each node, evading unnecesary I/O through the
</span><br>
<span class="quotelev2">&gt;&gt; nwetwork, what do you think?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
Before asking what we think about this, please check the many references 
<br>
posted on this subject over the last decade.  Then refine your question 
<br>
to what you are interested in hearing about; evidently you have no 
<br>
interest in much of this topic.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it is possible, and many of the atmosphere/oceans/climate codes
</span><br>
<span class="quotelev1">&gt; that we run is written with this capability. In other areas of
</span><br>
<span class="quotelev1">&gt; science and engineering this is probably the case too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, this is not necessarily better/faster/simpler than dedicate 
</span><br>
<span class="quotelev1">&gt; all the cores to MPI processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my view, this is due to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) OpenMP has a different scope than MPI,
</span><br>
<span class="quotelev1">&gt; and to some extent is limited by more stringent requirements than MPI;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Most modern MPI implementations (and OpenMPI is an example) use 
</span><br>
<span class="quotelev1">&gt; shared memory mechanisms to communicate between processes that reside
</span><br>
<span class="quotelev1">&gt; in a single physical node/computer;
</span><br>
The shared memory communication of several MPI implementations does 
<br>
greatly improve efficiency of message passing among ranks assigned to 
<br>
the same node.  However, these ranks also communicate with ranks on 
<br>
other nodes, so there is a large potential advantage for hybrid 
<br>
MPI/OpenMP as the number of cores in use increases.  If you aren't 
<br>
interested in running on more than 8 nodes or so, perhaps you won't care 
<br>
about this.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Writing hybrid code with MPI and OpenMP requires more effort,
</span><br>
<span class="quotelev1">&gt; and much care so as not to let the two forms of parallelism step on
</span><br>
<span class="quotelev1">&gt; each other's toes.
</span><br>
The MPI standard specifies the use of MPI_init_thread to indicate which 
<br>
combination of MPI and threading you intend to use, and to inquire 
<br>
whether that model is supported by the active MPI.
<br>
In the case where there is only 1 MPI process per node (possibly using 
<br>
several cores via OpenMP threading) there is no requirement for special 
<br>
affinity support.
<br>
If there is more than 1 FUNNELED rank per multiple CPU node, it becomes 
<br>
important to maintain cache locality for each rank.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMP operates mostly through compiler directives/pragmas interspersed
</span><br>
<span class="quotelev1">&gt; on the code.  For instance, you can parallelize inner loops in no time,
</span><br>
<span class="quotelev1">&gt; granted that there are no data dependencies across the commands within 
</span><br>
<span class="quotelev1">&gt; the loop.  All it takes is to write one or two directive/pragma lines.
</span><br>
<span class="quotelev1">&gt; More than loop parallelization can be done with OpenMP, of course,
</span><br>
<span class="quotelev1">&gt; although not as much as can be done with MPI.
</span><br>
<span class="quotelev1">&gt; Still, with OpenMP, you are restricted to work in a shared memory 
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By contrast, MPI requires more effort to program, but it takes advantage
</span><br>
<span class="quotelev1">&gt; of shared memory and networked environments
</span><br>
<span class="quotelev1">&gt; (and perhaps extended grids too).
</span><br>
<span class="quotelev1">&gt;
</span><br>
&lt;snips&gt;
<br>
snipped tons of stuff rather than attempt to reconcile top postings
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13768.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Previous message:</strong> <a href="13766.php">Ralph Castain: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>In reply to:</strong> <a href="13756.php">Gus Correa: "Re: [OMPI users] Help on the big picture.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13768.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Reply:</strong> <a href="13768.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
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
