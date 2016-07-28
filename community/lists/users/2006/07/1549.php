<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 09:48:15 2006" -->
<!-- isoreceived="20060705134815" -->
<!-- sent="Wed, 5 Jul 2006 09:48:06 -0400" -->
<!-- isosent="20060705134806" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on MacOS X" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFB244F7_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] open-mpi on MacOS X" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-05 09:48:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1550.php">Marcin Skoczylas: "[OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>Previous message:</strong> <a href="1548.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Maybe in reply to:</strong> <a href="1526.php">Jack Howarth: "[OMPI users] open-mpi on MacOS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Jack Howarth
</span><br>
<span class="quotelev1">&gt; Sent: Monday, July 03, 2006 10:35 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] open-mpi on MacOS X
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I have created simple fink (<a href="http://fink.sourceforge.net">http://fink.sourceforge.net</a>) 
</span><br>
<span class="quotelev1">&gt; packaging 
</span><br>
<span class="quotelev1">&gt; for open-mpi v1.1 on MacOS X. The packaging builds open-mpi with its
</span><br>
<span class="quotelev1">&gt; default settings in configure and appears to pass all of its 
</span><br>
<span class="quotelev1">&gt; make check
</span><br>
<span class="quotelev1">&gt; without problems. 
</span><br>
<p>Thanks!
<br>
<p><span class="quotelev1">&gt; However, the lack of clear documentation 
</span><br>
<span class="quotelev1">&gt; for open-mpi
</span><br>
<span class="quotelev1">&gt; still is a problem. 
</span><br>
<p>Agreed.  This is something that we're actively working on.
<br>
<p>In the meantime, feel free to send your questions to this list.
<br>
<p><span class="quotelev1">&gt; I seem able to manually run the test programs from
</span><br>
<span class="quotelev1">&gt; the open-mpi distribution using...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mdrun -np 2 ...
</span><br>
<p>Just to clarify -- what is mdrun?  Do you mean mpirun?  Open MPI does
<br>
not provide an executable named &quot;mdrun&quot;.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; after starting the orted daemon with....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orted --seed --persistent --scope public 
</span><br>
<p>Per Brock's comments, you don't need to start the orted manually.
<br>
Indeed, this model is only loosely tested -- it has known problems with
<br>
not releasing all resources at the end of each mpirun (e.g., the memory
<br>
footprint of that orted will keep growing over time).  See below.
<br>
<p><span class="quotelev1">&gt; I can see both cpus spike when I do the mdrun's so I think
</span><br>
<span class="quotelev1">&gt; that works. However, I can't figure how the proper way to
</span><br>
<span class="quotelev1">&gt; monitor the status of the available nodes. Specifically,
</span><br>
<span class="quotelev1">&gt; what is the equivalent to the lamnodes program in open-mpi?
</span><br>
<p>Right now, Open MPI does not have a &quot;persistent universe&quot; model like
<br>
LAM's (e.g., lamboot over a bunch of nodes).  orted's are launched
<br>
behind the scenes for each job for each node (e.g., in the rsh/ssh case,
<br>
we rsh/ssh to each node once, launch an orted, and then the orted
<br>
launches as many user processes as necessary).
<br>
<p>However, equivalent to LAM, Open MPI can use the back-end
<br>
schedule/resource manager to know which nodes to launch on.  Even with
<br>
lamboot, you had to specify a hostfile or have a back-end resource
<br>
manager that said &quot;use these nodes.&quot;  lamnodes was not really a
<br>
monitoring tool -- it was more of a &quot;here's the nodes that you specified
<br>
to me earlier&quot; tool.  
<br>
<p>If you really want monitoring tools for your nodes, you might want to
<br>
look outside of MPI -- SLURM and Torque are fairly common open source
<br>
resource managers.  And there's a bunch of tools available for
<br>
monitoring nodes in a cluster, too.
<br>
<p><span class="quotelev1">&gt; Also, is there a simple test program that runs for a significant
</span><br>
<span class="quotelev1">&gt; period of time that I can use to test the different options to
</span><br>
<span class="quotelev1">&gt; monitor and control the open-mpi jobs that are running under
</span><br>
<span class="quotelev1">&gt; orted? Thanks in advance for any clarifications.
</span><br>
<p>Open MPI's run-time options are [essentially] read at startup and used
<br>
for the duration of the job's run.  Most of the options are not
<br>
changeable after a given run has started.
<br>
<p>We have not yet included any sample apps inside Open MPI (a la LAM), but
<br>
we'll likely include some simple &quot;hello world&quot; and other well-known
<br>
sample MPI apps in the future.  For long-running tests, you might want
<br>
to run any of the MPI benchmark suites available (e.g., NetPIPE, the
<br>
Intel benchmarks, HPL, etc.).
<br>
<p><span class="quotelev1">&gt;          Jack
</span><br>
<span class="quotelev1">&gt; ps I assume that at v1.1, open-mpi is considered to be a usable
</span><br>
<span class="quotelev1">&gt; replacement for lam? Certainly, gromacs 3.3.1 seems to compile
</span><br>
<span class="quotelev1">&gt; its mpi support against open-mpi.
</span><br>
<p>Yes.  There are still some features in LAM that are not yet in Open MPI
<br>
(e.g., a persistent universe), but most of the good/important ones are
<br>
being added to Open MPI over time.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1550.php">Marcin Skoczylas: "[OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>Previous message:</strong> <a href="1548.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Maybe in reply to:</strong> <a href="1526.php">Jack Howarth: "[OMPI users] open-mpi on MacOS X"</a>
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
