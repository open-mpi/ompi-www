<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 09:55:48 2007" -->
<!-- isoreceived="20070717135548" -->
<!-- sent="Tue, 17 Jul 2007 07:55:26 -0600" -->
<!-- isosent="20070717135526" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 801, Issue 1" -->
<!-- id="C2C2266E.34C5%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="469CC085.20702_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 09:55:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1916.php">Jeff Squyres: "[OMPI devel] OMPI SVN commit mails"</a>
<li><strong>Previous message:</strong> <a href="1914.php">Manuel Prinz: "Re: [OMPI devel] Call for OMPI Binary Distributions"</a>
<li><strong>In reply to:</strong> <a href="1913.php">Rolf vandeVaart: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that the only problem with that procedure is that it automatically
<br>
connects the new application with *all* pre-existing applications. There is
<br>
no discrimination possible as your client doesn't know the server's jobid,
<br>
nor is there any way for it to &quot;discover&quot; that information.
<br>
<p>So this is fine IF you want that mode of operation (i.e., all applications
<br>
running with a persistent daemon that call connect are to be fully
<br>
interconnected to all predecessors). Perhaps that is adequate, but it isn't
<br>
what was told to me as the desired functionality.
<br>
<p>Of course, there may be something in the MPI code that corrects this
<br>
behavior. What I'm describing is solely what is happening at the RTE
<br>
level...which means, of course, that the contact info for all those procs is
<br>
probably being exchanged even if the MPI layer is ignoring some of it. ;-)
<br>
<p><p>On 7/17/07 7:13 AM, &quot;Rolf vandeVaart&quot; &lt;Rolf.Vandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/17/07 5:37 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 16, 2007, at 2:28 PM, Matthew Moskewicz wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI-2 does support the MPI_COMM_JOIN and MPI_COMM_ACCEPT/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_COMM_CONNECT models.  We do support this in Open MPI, but the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; restrictions (in terms of ORTE) may not be sufficient for you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; perhaps i'll experiment -- any clues as to what the orte
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; restrictions might be?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The main constraint is that you have to run a &quot;persistent&quot; orted that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will span all your MPI_COMM_WORLD's.  We have only lightly tested
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this scenario -- Ralph, can you comment more here?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I'm not convinced Open MPI really supports either of those two MPI
</span><br>
<span class="quotelev2">&gt;&gt; semantics. It is true that we have something in our code repository, but I'm
</span><br>
<span class="quotelev2">&gt;&gt; not convinced it actually does what people think.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There are two use-cases one must consider:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. an application code spawns another job and then at some later point wants
</span><br>
<span class="quotelev2">&gt;&gt; to connect to it. Our current implementation of comm_spawn does this
</span><br>
<span class="quotelev2">&gt;&gt; automatically via the accept/connect procedure, so we have this covered.
</span><br>
<span class="quotelev2">&gt;&gt; However, it relies upon the notion that (a) the parent job *knows* the jobid
</span><br>
<span class="quotelev2">&gt;&gt; of the child, and (b) the parent sends a message to the child telling it
</span><br>
<span class="quotelev2">&gt;&gt; where and how to rendezvous with it. You don't need the persistent daemon
</span><br>
<span class="quotelev2">&gt;&gt; here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. a user starts one application, and then starts another (would have to be
</span><br>
<span class="quotelev2">&gt;&gt; in a separate window or batch job as we do not support running mpirun in the
</span><br>
<span class="quotelev2">&gt;&gt; background) that connects to the first. The problem here is that neither
</span><br>
<span class="quotelev2">&gt;&gt; application knows the jobid of the other, has no info on how to communicate
</span><br>
<span class="quotelev2">&gt;&gt; with the other, nor knows a common rendezvous point. You would definitely
</span><br>
<span class="quotelev2">&gt;&gt; need a persistent daemon for this use-case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would have to review the code to see, but my best guess from what I
</span><br>
<span class="quotelev2">&gt;&gt; remember is that we don't actually support the second use-case at this time.
</span><br>
<span class="quotelev2">&gt;&gt; It would be possible to do so, albeit complicated - but I'm almost certain
</span><br>
<span class="quotelev2">&gt;&gt; nobody ever implemented it. I had talked at one time about providing the
</span><br>
<span class="quotelev2">&gt;&gt; necessary glue, either at the command line or (better) via some internal
</span><br>
<span class="quotelev2">&gt;&gt; &quot;magic&quot;, but never got much interest - and so never did anything about
</span><br>
<span class="quotelev2">&gt;&gt; it...and I don't recall seeing anyone else make the necessary changes.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; FWIW, these are the instructions that we documented for OMPI v1.2 for
</span><br>
<span class="quotelev1">&gt; client/server
</span><br>
<span class="quotelev1">&gt; (MPI_COMM_ACCEPT and MPI_COMM_CONNECT) from different jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; USING MPI CLIENT/SERVER APPLICATIONS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The instructions in this section explain how to get best results when
</span><br>
<span class="quotelev1">&gt; starting Open
</span><br>
<span class="quotelev1">&gt; MPI client/server applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To Start the Persistent Daemon
</span><br>
<span class="quotelev1">&gt; Note &#173; The persistent daemon needs to run on the node where mpirun is
</span><br>
<span class="quotelev1">&gt; started.
</span><br>
<span class="quotelev1">&gt; 1. Use the cd command to move to the directory that contains the Sun HPC
</span><br>
<span class="quotelev1">&gt; ClusterTools 7 binaries.
</span><br>
<span class="quotelev1">&gt; % cd /opt/SUNWhpc/HPC7.0/bin
</span><br>
<span class="quotelev1">&gt; 2. To start the persistent daemon, issue the following command,
</span><br>
<span class="quotelev1">&gt; substituting the
</span><br>
<span class="quotelev1">&gt; name of your MPI job&#185;s universe for univ1:
</span><br>
<span class="quotelev1">&gt; % orted --persistent --seed --scope public --universe univ1 --debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The --persistent flag to orted (the ORTE daemon) starts the persistent
</span><br>
<span class="quotelev1">&gt; daemon.
</span><br>
<span class="quotelev1">&gt; You also need to set the --seed and --scope public options on the same
</span><br>
<span class="quotelev1">&gt; command line, as shown in the example. The optional --debug flag prints out
</span><br>
<span class="quotelev1">&gt; debugging messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TO LAUNCH THE CLIENT/SERVER JOB
</span><br>
<span class="quotelev1">&gt; Note &#173; Make sure you launch all MPI client/server jobs from the same node on
</span><br>
<span class="quotelev1">&gt; which you started the persistent daemon.
</span><br>
<span class="quotelev1">&gt; 1. Type the following command to launch the server application.
</span><br>
<span class="quotelev1">&gt; Substitute the
</span><br>
<span class="quotelev1">&gt; name of your MPI job&#185;s universe for univ1:
</span><br>
<span class="quotelev1">&gt; % ./mpirun -np 1 --universe univ1 t_accept
</span><br>
<span class="quotelev1">&gt; 2. Type the following command to launch the client application,
</span><br>
<span class="quotelev1">&gt; substituting the
</span><br>
<span class="quotelev1">&gt; name of your MPI job&#185;s universe for univ1:
</span><br>
<span class="quotelev1">&gt; % ./mpirun -np 4 --universe univ1 t_connect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the client and server jobs span more than 1 node, the first job (that
</span><br>
<span class="quotelev1">&gt; is, the server
</span><br>
<span class="quotelev1">&gt; job) must specify on the mpirun command line all the nodes that will be
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<span class="quotelev1">&gt; Specifying the node names allocates the specified hosts from the entire
</span><br>
<span class="quotelev1">&gt; universe of
</span><br>
<span class="quotelev1">&gt; server and client jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, if the server runs on node0 and the client job runs on
</span><br>
<span class="quotelev1">&gt; node1 only, the
</span><br>
<span class="quotelev1">&gt; command to launch the server must specify both nodes (using the -host
</span><br>
<span class="quotelev1">&gt; node0,node1 flag) even it uses only one process on node0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assuming that the persistent daemon is started on node0, the command to
</span><br>
<span class="quotelev1">&gt; launch
</span><br>
<span class="quotelev1">&gt; the server would look like this:
</span><br>
<span class="quotelev1">&gt; node0% ./mpirun -np 1 --universe univ1 -host node0,node1 t_accept
</span><br>
<span class="quotelev1">&gt; The command to launch the client is:
</span><br>
<span class="quotelev1">&gt; n ode0% ./mpirun -np 4 --universe univ1 -host node1 t_connect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note &#173; Name publishing does not work in jobs between different universes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1916.php">Jeff Squyres: "[OMPI devel] OMPI SVN commit mails"</a>
<li><strong>Previous message:</strong> <a href="1914.php">Manuel Prinz: "Re: [OMPI devel] Call for OMPI Binary Distributions"</a>
<li><strong>In reply to:</strong> <a href="1913.php">Rolf vandeVaart: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
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
