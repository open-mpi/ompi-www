<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 20 14:00:48 2005" -->
<!-- isoreceived="20051020190048" -->
<!-- sent="Thu, 20 Oct 2005 15:00:42 -0400 (EDT)" -->
<!-- isosent="20051020190042" -->
<!-- name="Chris Gottbrath" -->
<!-- email="chrisg_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI debugging support" -->
<!-- id="Pine.LNX.4.61.0510201437140.16097_at_papua.etnus.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.44.0510202107410.5234-100000_at_ispserv.ispras.ru" -->
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
<strong>From:</strong> Chris Gottbrath (<em>chrisg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-20 14:00:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0214.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0212.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0212.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0214.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Konstantin, Jeff, 
<br>
<p><span class="quotelev1">&gt; TotalView interface goes well, except that its details are hardcoded in 
</span><br>
<span class="quotelev1">&gt; the source of orte/tools/orterun (as you may guess I don't have the 
</span><br>
<span class="quotelev1">&gt; executable named &quot;totalview&quot;, etc.). I'd like to know when and where do 
</span><br>
<span class="quotelev1">&gt; the functions from orterun/totalview.{h,c} get called, do I need to write 
</span><br>
<p>If the name 'totalview' is hardcoded in the startup executable then 
<br>
that is something that we would be happy to see be made more
<br>
flexible.
<br>
<p>What we would like to see is an environemnt variable (MPICH has 
<br>
one called 'TOTALVIEW' and I'd love to see that name but 
<br>
OPENMPI_DEBUGGER or something else debugger-neutral would 
<br>
be fine as well) that one can set with the name of the executable
<br>
that you would like to have exectuted. This would help us in our internal
<br>
testing and could potentially help customers who might have multiple
<br>
versions of totalview installed. 
<br>
<p>In our regression testing we want to be able to use the command line
<br>
interface version of TotalView. Arguably customers might want to 
<br>
be able to run TV with some arguments of its own or point to 
<br>
a specific version without altering their PATH environment variable.
<br>
<p>Cheers,
<br>
Chris
<br>
<p><pre>
--
Chris Gottbrath
Partner Technologies Engineer    Etnus, LLC
Chris.Gottbrath_at_[hidden]        <a href="http://www.etnus.com/">http://www.etnus.com/</a>
Voice: 508-652-7700 x7735        Fax: 508-652-7787
On Thu, 20 Oct 2005, Konstantin Karganov wrote:
&gt; 
&gt; &gt; However, we're quite open to other approaches.  Because of the nature of
&gt; &gt; our integration with a variety of different run-time environments, our
&gt; &gt; startup is not a shell script -- mpirun (&quot;orterun&quot; is its real name;
&gt; &gt; &quot;mpirun&quot; is a sym link to orterun) is a compiled executable.
&gt; Surely, I saw that mpirun is the orterun executable :)
&gt; And this means that to add some features I need to rebuild it (and some 
&gt; run-time libs probably) each time. 
&gt;  
&gt; &gt; What are the requirements of your debugger?  Do you attempt to launch
&gt; &gt; the MPI processes yourself, or do you attach to them after they are
&gt; &gt; launched (which is what TotalView does)?
&gt; It is supposed to attach GDB to each process after it has launched, so the 
&gt; TotalView interface goes well, except that its details are hardcoded in 
&gt; the source of orte/tools/orterun (as you may guess I don't have the 
&gt; executable named &quot;totalview&quot;, etc.). I'd like to know when and where do 
&gt; the functions from orterun/totalview.{h,c} get called, do I need to write 
&gt; my own file like this, etc. In other words, &quot;the debugger adder reference 
&gt; manual&quot; :)
&gt; 
&gt; Currently I launch gdb's on remote processes via ssh (as MPICH does), but 
&gt; probably it will be better to use orte framework capabilities for this. 
&gt; Don't know yet how.
&gt; 
&gt; In general, are there an ompi/orte architecture description docs, other 
&gt; than short schemes in your publications? It's too general there and too 
&gt; detailed in sources and doxygen docs. Some intermediate &quot;how all this 
&gt; works together&quot; doc is needed to assemble the whole picture...
&gt; For me, I do not understand it completely.
&gt; 
&gt; &gt; Open MPI uses orterun as its launcher, not the first MPI process.
&gt; &gt; Hence, it is the one that TotalView gets it information from (in that
&gt; &gt; sense, it's similar to the MPICH model -- there is one coordinator; it's
&gt; &gt; just that it's orterun, not the first MPI process).  Once orterun
&gt; &gt; receives notification that all the MPI processes have started, it gives
&gt; &gt; the nodename/PID information of each process to TotalView who then
&gt; &gt; launches its own debugger processes on those nodes and attaches to the
&gt; &gt; processes.  
&gt; Hm.. with MPICH I use the first gdb copy to get the info from the 0-th 
&gt; process and then continue to use it as a node debugger, here I'll have to 
&gt; use one more gdb to get the process table out of orterun process? And how 
&gt; to do this in a safe way?
&gt; 
&gt; &gt; You probably get a &quot;stopped&quot; message when you try to bg orterun because
&gt; &gt; the shell thinks that it is waiting for input from stdin, because we
&gt; &gt; didn't close it.
&gt; Actually this shouldn't matter. Many programs don't close stdin but 
&gt; nothing prevents them from running in background until they try to 
&gt; read input. The same &quot;Hello world&quot; application runs well with MPICH 
&gt; &quot;mpirun -np 3 a.out &amp;&quot;
&gt;  
&gt; Best regards,
&gt; Konstantin.
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0214.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0212.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0212.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0214.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
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
