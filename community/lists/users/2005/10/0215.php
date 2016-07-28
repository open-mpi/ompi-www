<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 03:41:09 2005" -->
<!-- isoreceived="20051021084109" -->
<!-- sent="Fri, 21 Oct 2005 12:41:00 +0400 (MSD)" -->
<!-- isosent="20051021084100" -->
<!-- name="Konstantin Karganov" -->
<!-- email="kostik_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI debugging support" -->
<!-- id="Pine.LNX.4.44.0510211049530.16976-100000_at_ispserv.ispras.ru" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1129839985.10636.42.camel_at_doolie.osl.iu.edu" -->
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
<strong>Date:</strong> 2005-10-21 03:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0216.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0214.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0214.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0216.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0216.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0217.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; You and Chris G. raise a good point -- another parallel debugger vendor
</span><br>
<span class="quotelev1">&gt; has contacted me about the same issue (their debugger does not have an
</span><br>
<span class="quotelev1">&gt; executable named &quot;totalview&quot;). 
</span><br>
<span class="quotelev1">&gt; &lt;...&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
Actually, the point is deeper than just a debugger naming question. 
<br>
High-quality MPI implementation should provide more flexibility to the 
<br>
user. The debuggers may differ by startup algorithms: MPICH (the same 
<br>
example) allows to write arbitrary script for starting the custom 
<br>
debugger. And it works fine launching this script in run-time (there is a 
<br>
naming convention), w/o need to rebuild and reinstall the library.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Read the TV specifications about how they attach -- if you have a
</span><br>
<span class="quotelev1">&gt; different scheme, let's talk... 
</span><br>
We are not a mature product (as famous TotalView) to have own 
<br>
requirements. We are also open to consideration.
<br>
Currently I implemented the startup for MPICH program debugging (using the 
<br>
totalview interface, I know how it works), but this scheme may be 
<br>
changed.
<br>
<p><span class="quotelev2">&gt; &gt; Currently I launch gdb's on remote processes via ssh (as MPICH does), but 
</span><br>
<span class="quotelev2">&gt; &gt; probably it will be better to use orte framework capabilities for this. 
</span><br>
<span class="quotelev1">&gt; Gotcha; not a bad idea.  Might fit nicely into having support for your
</span><br>
<span class="quotelev1">&gt; debugger be a component...?
</span><br>
Actually all I need is the same, that orte already does:
<br>
1. Launch the processes on all nodes
<br>
2. Make sure they are successfully launched.
<br>
3. Get the array of handles to read/write to each process
<br>
4. Be able to stop the processes
<br>
5. Probably send signals to processes (gdb uses SIGINT to interrupt 
<br>
execution)
<br>
6. Probably have the info about node names and PIDs to display it and to 
<br>
implement pp.4-5
<br>
Looks just the same as for usual run, but the devil is surely in the 
<br>
details.
<br>
<p><span class="quotelev1">&gt; I think the two main things you want are:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1. the information about the MPI processes in the ORTE job of interest
</span><br>
<span class="quotelev1">&gt; (are you interested in handling MPI-2 dynamic situations?).
</span><br>
Not yet. It is planned to support only MPI 1.2 for the first release.
<br>
<p><span class="quotelev1">&gt; 2. &lt;..&gt;
</span><br>
I also might want 3. Get the knowlwdge &quot;how it works&quot; to be able to play 
<br>
with the code myself :)
<br>
<p><span class="quotelev1">&gt; TV's view of the world is to ave &quot;one&quot; master debugger that controls all 
</span><br>
<span class="quotelev1">&gt; the processes, so having a separate &quot;starter&quot; process in addition to the 
</span><br>
<span class="quotelev1">&gt; MPI processes was no big deal.
</span><br>
I'm trying to do the same way - attach gdb to each process as a node 
<br>
debugger and connect all this to the main debugger process, that has GUI 
<br>
and implements all &quot;parallel&quot; logic.
<br>
The question was merely how to do it: call &quot;gdb orterun&quot; and catch it 
<br>
somewhere on breakpoint or attach to orterun later or smth else.
<br>
<p><span class="quotelev1">&gt; if you're actually integrated in as a component, then you could get the 
</span><br>
<span class="quotelev1">&gt; information directly (i.e., via API)...?  The possibilities here are 
</span><br>
<span class="quotelev1">&gt; open. 
</span><br>
This also sounds interesting.
<br>
<p>Best regards,
<br>
Konstantin.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0216.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0214.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0214.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0216.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0216.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0217.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
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
