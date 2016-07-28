<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 09:11:00 2007" -->
<!-- isoreceived="20070717131100" -->
<!-- sent="Tue, 17 Jul 2007 09:13:41 -0400" -->
<!-- isosent="20070717131341" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 801, Issue 1" -->
<!-- id="469CC085.20702_at_sun.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C2C2148E.34BB%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 09:13:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1914.php">Manuel Prinz: "Re: [OMPI devel] Call for OMPI Binary Distributions"</a>
<li><strong>Previous message:</strong> <a href="1912.php">Jeff Squyres: "Re: [OMPI devel] Call for OMPI Binary Distributions"</a>
<li><strong>In reply to:</strong> <a href="1910.php">Ralph Castain: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1915.php">Ralph Castain: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>Reply:</strong> <a href="1915.php">Ralph Castain: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/17/07 5:37 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 16, 2007, at 2:28 PM, Matthew Moskewicz wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI-2 does support the MPI_COMM_JOIN and MPI_COMM_ACCEPT/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_COMM_CONNECT models.  We do support this in Open MPI, but the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; restrictions (in terms of ORTE) may not be sufficient for you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perhaps i'll experiment -- any clues as to what the orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restrictions might be?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; The main constraint is that you have to run a &quot;persistent&quot; orted that
</span><br>
<span class="quotelev2">&gt;&gt; will span all your MPI_COMM_WORLD's.  We have only lightly tested
</span><br>
<span class="quotelev2">&gt;&gt; this scenario -- Ralph, can you comment more here?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, I'm not convinced Open MPI really supports either of those two MPI
</span><br>
<span class="quotelev1">&gt; semantics. It is true that we have something in our code repository, but I'm
</span><br>
<span class="quotelev1">&gt; not convinced it actually does what people think.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are two use-cases one must consider:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. an application code spawns another job and then at some later point wants
</span><br>
<span class="quotelev1">&gt; to connect to it. Our current implementation of comm_spawn does this
</span><br>
<span class="quotelev1">&gt; automatically via the accept/connect procedure, so we have this covered.
</span><br>
<span class="quotelev1">&gt; However, it relies upon the notion that (a) the parent job *knows* the jobid
</span><br>
<span class="quotelev1">&gt; of the child, and (b) the parent sends a message to the child telling it
</span><br>
<span class="quotelev1">&gt; where and how to rendezvous with it. You don't need the persistent daemon
</span><br>
<span class="quotelev1">&gt; here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. a user starts one application, and then starts another (would have to be
</span><br>
<span class="quotelev1">&gt; in a separate window or batch job as we do not support running mpirun in the
</span><br>
<span class="quotelev1">&gt; background) that connects to the first. The problem here is that neither
</span><br>
<span class="quotelev1">&gt; application knows the jobid of the other, has no info on how to communicate
</span><br>
<span class="quotelev1">&gt; with the other, nor knows a common rendezvous point. You would definitely
</span><br>
<span class="quotelev1">&gt; need a persistent daemon for this use-case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would have to review the code to see, but my best guess from what I
</span><br>
<span class="quotelev1">&gt; remember is that we don't actually support the second use-case at this time.
</span><br>
<span class="quotelev1">&gt; It would be possible to do so, albeit complicated - but I'm almost certain
</span><br>
<span class="quotelev1">&gt; nobody ever implemented it. I had talked at one time about providing the
</span><br>
<span class="quotelev1">&gt; necessary glue, either at the command line or (better) via some internal
</span><br>
<span class="quotelev1">&gt; &quot;magic&quot;, but never got much interest - and so never did anything about
</span><br>
<span class="quotelev1">&gt; it...and I don't recall seeing anyone else make the necessary changes.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
FWIW, these are the instructions that we documented for OMPI v1.2 for 
<br>
client/server
<br>
(MPI_COMM_ACCEPT and MPI_COMM_CONNECT) from different jobs.
<br>
<p>-----------------------------------------------------------------------------------------
<br>
<p>USING MPI CLIENT/SERVER APPLICATIONS
<br>
<p>The instructions in this section explain how to get best results when 
<br>
starting Open
<br>
MPI client/server applications.
<br>
<p>To Start the Persistent Daemon
<br>
Note &#150; The persistent daemon needs to run on the node where mpirun is 
<br>
started.
<br>
1. Use the cd command to move to the directory that contains the Sun HPC
<br>
ClusterTools 7 binaries.
<br>
% cd /opt/SUNWhpc/HPC7.0/bin
<br>
2. To start the persistent daemon, issue the following command, 
<br>
substituting the
<br>
name of your MPI job&#146;s universe for univ1:
<br>
% orted --persistent --seed --scope public --universe univ1 --debug
<br>
<p>The --persistent flag to orted (the ORTE daemon) starts the persistent 
<br>
daemon.
<br>
You also need to set the --seed and --scope public options on the same
<br>
command line, as shown in the example. The optional --debug flag prints out
<br>
debugging messages.
<br>
<p>TO LAUNCH THE CLIENT/SERVER JOB
<br>
Note &#150; Make sure you launch all MPI client/server jobs from the same node on
<br>
which you started the persistent daemon.
<br>
1. Type the following command to launch the server application. 
<br>
Substitute the
<br>
name of your MPI job&#146;s universe for univ1:
<br>
% ./mpirun -np 1 --universe univ1 t_accept
<br>
2. Type the following command to launch the client application, 
<br>
substituting the
<br>
name of your MPI job&#146;s universe for univ1:
<br>
% ./mpirun -np 4 --universe univ1 t_connect
<br>
<p>If the client and server jobs span more than 1 node, the first job (that 
<br>
is, the server
<br>
job) must specify on the mpirun command line all the nodes that will be 
<br>
used.
<br>
Specifying the node names allocates the specified hosts from the entire 
<br>
universe of
<br>
server and client jobs.
<br>
<p>For example, if the server runs on node0 and the client job runs on 
<br>
node1 only, the
<br>
command to launch the server must specify both nodes (using the -host
<br>
node0,node1 flag) even it uses only one process on node0.
<br>
<p>Assuming that the persistent daemon is started on node0, the command to 
<br>
launch
<br>
the server would look like this:
<br>
node0% ./mpirun -np 1 --universe univ1 -host node0,node1 t_accept
<br>
The command to launch the client is:
<br>
n ode0% ./mpirun -np 4 --universe univ1 -host node1 t_connect
<br>
<p>Note &#150; Name publishing does not work in jobs between different universes.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1914.php">Manuel Prinz: "Re: [OMPI devel] Call for OMPI Binary Distributions"</a>
<li><strong>Previous message:</strong> <a href="1912.php">Jeff Squyres: "Re: [OMPI devel] Call for OMPI Binary Distributions"</a>
<li><strong>In reply to:</strong> <a href="1910.php">Ralph Castain: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1915.php">Ralph Castain: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>Reply:</strong> <a href="1915.php">Ralph Castain: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
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
