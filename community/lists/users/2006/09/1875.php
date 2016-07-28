<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 15 11:44:11 2006" -->
<!-- isoreceived="20060915154411" -->
<!-- sent="Fri, 15 Sep 2006 11:29:00 -0400" -->
<!-- isosent="20060915152900" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Perl and MPI" -->
<!-- id="01DF06D9-D1B9-4C44-998B-840C301CCE31_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20060915143604.61991.qmail_at_web37505.mail.mud.yahoo.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-15 11:29:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1876.php">Jeff Squyres: "Re: [OMPI users] MPI on large clusters"</a>
<li><strong>Previous message:</strong> <a href="1874.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1867.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1879.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1879.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 15, 2006, at 10:36 AM, imran shaik wrote:
<br>
<p><span class="quotelev1">&gt; Can you elaborate on this.?
</span><br>
<span class="quotelev1">&gt; I have few doubts as well:
</span><br>
<span class="quotelev1">&gt; 1) OpenMPI runtime supports SGE?? Does it uses SGE instead of MPI  
</span><br>
<span class="quotelev1">&gt; runtime when it finds SGE running??
</span><br>
<p>It's a difficult question if you expect an answer describing the deep  
<br>
internals of the Open MPI implementation. Let's say from a high level  
<br>
point of view that the MPI runtime detect SGE and use it in order to  
<br>
start the MPI job.
<br>
<p><span class="quotelev1">&gt; 2) Is it possible to check point and run MPI jobs?
</span><br>
<p>Not with the released version. It's still work in progress.  
<br>
Eventually it will be one of the features of Open MPI but not before  
<br>
SC2006.
<br>
<p><span class="quotelev1">&gt; 3) Is it possible to add and remove processes dynamically from the  
</span><br>
<span class="quotelev1">&gt; MPI communicator?
</span><br>
<p>Open MPI is MPI 2 compliant, therefore it support dynamic processes.  
<br>
The is a FAQ on the web site on how to do it.
<br>
<p><span class="quotelev1">&gt; 5) When do we actually need many different communicators?
</span><br>
<p>It depend on what you plan to do. Usually, from the programmer point  
<br>
of view using multiple communicators make the code more readable as  
<br>
they allow you to have a logic view of the messages in transit. But  
<br>
it is not a requirement. One can write a million lines of code MPI  
<br>
application and only use the MPI_COMM_WORLD.
<br>
<p><span class="quotelev1">&gt; 4) Is MPI only suitable for low latency communication in  a cluster  
</span><br>
<span class="quotelev1">&gt; environment?
</span><br>
<p>MPI was designed as a programming paradigm. It allow expressing  
<br>
parallel algorithms based on communications between peers. These  
<br>
communications can be point-to-point or collectives. The goal is  
<br>
wider than just low latency communications, as the standard allow you  
<br>
[as an example] to describe the memory layout of the data that get  
<br>
involved in the communication. The MPI forum have the full  
<br>
documentation about all the features of the MPI 2 standard.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote: I can't speak to the Perl  
</span><br>
<span class="quotelev1">&gt; bindings, but Open MPI's runtime already supports
</span><br>
<span class="quotelev1">&gt; SGE, so all you have to do is &quot;mpirun&quot; like usual and we take care  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; rest. You may have to check your version of Open MPI as this  
</span><br>
<span class="quotelev1">&gt; capability was
</span><br>
<span class="quotelev1">&gt; added in the more recent releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/13/06 8:52 AM, &quot;Renato Golin&quot; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 9/13/06, imran shaik wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I need to run parallel jobs on a cluster typically of size 600  
</span><br>
<span class="quotelev1">&gt; nodes and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; running SGE, but the programmers are good at perl but not C or C+ 
</span><br>
<span class="quotelev1">&gt; +. So i
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thought of MPI, but i dont know whether it has perl support?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Imran,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SGE will dispatch process among the nodes of your cluster but it  
</span><br>
<span class="quotelev1">&gt; does
</span><br>
<span class="quotelev2">&gt; &gt; not support interprocess communication, which MPI does. If your
</span><br>
<span class="quotelev2">&gt; &gt; problem is easily splittable (like parse a large apache log, read a
</span><br>
<span class="quotelev2">&gt; &gt; large xml list of things) you might be able to split the data and
</span><br>
<span class="quotelev2">&gt; &gt; spawn as many process as you can.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I do it using LSF (another dispatcher) and a Makefile that controls
</span><br>
<span class="quotelev2">&gt; &gt; the dependencies and spawn the processes (using make's -j flag)  
</span><br>
<span class="quotelev1">&gt; and it
</span><br>
<span class="quotelev2">&gt; &gt; works quite well. But if your job need the communication (like
</span><br>
<span class="quotelev2">&gt; &gt; processing big matrices, collecting and distributing data among
</span><br>
<span class="quotelev2">&gt; &gt; processes etc) you'll need an interprocess communication and that's
</span><br>
<span class="quotelev2">&gt; &gt; what MPI is best at.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In a nutshell, you'll need the runtime environment to run MPI  
</span><br>
<span class="quotelev1">&gt; programs
</span><br>
<span class="quotelev2">&gt; &gt; as well as you need SGE's runtime environments on every node to
</span><br>
<span class="quotelev2">&gt; &gt; dispatch jobs and collect information.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; About MPI bindings for Perl, there's this module:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://search.cpan.org/~josh/Parallel-MPI-0.03/MPI.pm">http://search.cpan.org/~josh/Parallel-MPI-0.03/MPI.pm</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but it's far too young to be trustworthy, IMHO, and you'll probably
</span><br>
<span class="quotelev2">&gt; &gt; need the MPI runtime on all nodes as well...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cheers,
</span><br>
<span class="quotelev2">&gt; &gt; --renato
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
<span class="quotelev1">&gt; Talk is cheap. Use Yahoo! Messenger to make PC-to-Phone calls.  
</span><br>
<span class="quotelev1">&gt; Great rates starting at 1&#162;/min.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1876.php">Jeff Squyres: "Re: [OMPI users] MPI on large clusters"</a>
<li><strong>Previous message:</strong> <a href="1874.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>In reply to:</strong> <a href="1867.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1879.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Reply:</strong> <a href="1879.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
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
