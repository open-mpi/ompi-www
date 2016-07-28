<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 20 13:03:09 2005" -->
<!-- isoreceived="20051020180309" -->
<!-- sent="Thu, 20 Oct 2005 22:03:03 +0400 (MSD)" -->
<!-- isosent="20051020180303" -->
<!-- name="Konstantin Karganov" -->
<!-- email="kostik_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI debugging support" -->
<!-- id="Pine.LNX.4.44.0510202107410.5234-100000_at_ispserv.ispras.ru" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1129827461.8968.16.camel_at_doolie.osl.iu.edu" -->
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
<strong>From:</strong> Konstantin Karganov (<em>kostik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-20 13:03:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0213.php">Chris Gottbrath: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0211.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0210.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0213.php">Chris Gottbrath: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0213.php">Chris Gottbrath: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0214.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; However, we're quite open to other approaches.  Because of the nature of
</span><br>
<span class="quotelev1">&gt; our integration with a variety of different run-time environments, our
</span><br>
<span class="quotelev1">&gt; startup is not a shell script -- mpirun (&quot;orterun&quot; is its real name;
</span><br>
<span class="quotelev1">&gt; &quot;mpirun&quot; is a sym link to orterun) is a compiled executable.
</span><br>
Surely, I saw that mpirun is the orterun executable :)
<br>
And this means that to add some features I need to rebuild it (and some 
<br>
run-time libs probably) each time. 
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; What are the requirements of your debugger?  Do you attempt to launch
</span><br>
<span class="quotelev1">&gt; the MPI processes yourself, or do you attach to them after they are
</span><br>
<span class="quotelev1">&gt; launched (which is what TotalView does)?
</span><br>
It is supposed to attach GDB to each process after it has launched, so the 
<br>
TotalView interface goes well, except that its details are hardcoded in 
<br>
the source of orte/tools/orterun (as you may guess I don't have the 
<br>
executable named &quot;totalview&quot;, etc.). I'd like to know when and where do 
<br>
the functions from orterun/totalview.{h,c} get called, do I need to write 
<br>
my own file like this, etc. In other words, &quot;the debugger adder reference 
<br>
manual&quot; :)
<br>
<p>Currently I launch gdb's on remote processes via ssh (as MPICH does), but 
<br>
probably it will be better to use orte framework capabilities for this. 
<br>
Don't know yet how.
<br>
<p>In general, are there an ompi/orte architecture description docs, other 
<br>
than short schemes in your publications? It's too general there and too 
<br>
detailed in sources and doxygen docs. Some intermediate &quot;how all this 
<br>
works together&quot; doc is needed to assemble the whole picture...
<br>
For me, I do not understand it completely.
<br>
<p><span class="quotelev1">&gt; Open MPI uses orterun as its launcher, not the first MPI process.
</span><br>
<span class="quotelev1">&gt; Hence, it is the one that TotalView gets it information from (in that
</span><br>
<span class="quotelev1">&gt; sense, it's similar to the MPICH model -- there is one coordinator; it's
</span><br>
<span class="quotelev1">&gt; just that it's orterun, not the first MPI process).  Once orterun
</span><br>
<span class="quotelev1">&gt; receives notification that all the MPI processes have started, it gives
</span><br>
<span class="quotelev1">&gt; the nodename/PID information of each process to TotalView who then
</span><br>
<span class="quotelev1">&gt; launches its own debugger processes on those nodes and attaches to the
</span><br>
<span class="quotelev1">&gt; processes.  
</span><br>
Hm.. with MPICH I use the first gdb copy to get the info from the 0-th 
<br>
process and then continue to use it as a node debugger, here I'll have to 
<br>
use one more gdb to get the process table out of orterun process? And how 
<br>
to do this in a safe way?
<br>
<p><span class="quotelev1">&gt; You probably get a &quot;stopped&quot; message when you try to bg orterun because
</span><br>
<span class="quotelev1">&gt; the shell thinks that it is waiting for input from stdin, because we
</span><br>
<span class="quotelev1">&gt; didn't close it.
</span><br>
Actually this shouldn't matter. Many programs don't close stdin but 
<br>
nothing prevents them from running in background until they try to 
<br>
read input. The same &quot;Hello world&quot; application runs well with MPICH 
<br>
&quot;mpirun -np 3 a.out &amp;&quot;
<br>
&nbsp;
<br>
Best regards,
<br>
Konstantin.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0213.php">Chris Gottbrath: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0211.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0210.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0213.php">Chris Gottbrath: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0213.php">Chris Gottbrath: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0214.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
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
