<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 00:23:20 2006" -->
<!-- isoreceived="20060301052320" -->
<!-- sent="Wed, 1 Mar 2006 00:23:14 -0500" -->
<!-- isosent="20060301052314" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question and possible bugfix patches..." -->
<!-- id="B8A6EF44-D04B-4214-87D6-B234C0963F7F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f869b68c0602282004n268ec511sfaab6751fc8d8434_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-01 00:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0734.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0732.php">Durga Choudhury: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0732.php">Durga Choudhury: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2006, at 11:04 PM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; We are not using Irix but Linux as the operating system. The  
</span><br>
<span class="quotelev1">&gt; config.guess script identifies the system as mips64-unknown-gnu- 
</span><br>
<span class="quotelev1">&gt; linux. I guess it identifies the platform as &quot;unknwon&quot; because it  
</span><br>
<span class="quotelev1">&gt; is all propritary, home built hardware.
</span><br>
<p>Yeah, the second field seems to generally be something generic like  
<br>
&quot;unknown&quot; or &quot;pc&quot; with Linux.  All the OMPI configure script ever  
<br>
looks at is the first and last fields (the processor architecture and  
<br>
OS).
<br>
<p><span class="quotelev1">&gt;  Now about netpipe, you are both right and wrong. You are  
</span><br>
<span class="quotelev1">&gt; absolutely right that netpipe does not like more that 2 processes  
</span><br>
<span class="quotelev1">&gt; (it kills itself). Fortunately, I only have 2 boards in my test  
</span><br>
<span class="quotelev1">&gt; cluster so that is not a problem. And openMPI does spawn 2 copies  
</span><br>
<span class="quotelev1">&gt; of the netpipe on the two boards, I have verified it by doing a &quot;ps  
</span><br>
<span class="quotelev1">&gt; -ef&quot; on both boards and seeing the process running. However, I used  
</span><br>
<span class="quotelev1">&gt; mpiexec instead of mpirun to create the processes. My question is  
</span><br>
<span class="quotelev1">&gt; (this is something I have always wondered) what is the difference  
</span><br>
<span class="quotelev1">&gt; between mpirun and mpiexec?
</span><br>
<p>With Open MPI, absolutely nothing.  If you notice, they are both  
<br>
symlinks to something called orterun, which is Open MPI's job startup  
<br>
application.  The reason for their existence is historical.  MPI-1  
<br>
did not specify how processes were started up, but many  
<br>
implementations ended up with an mpirun command, and each  
<br>
implementation had a different command line usage.  MPI-2 added  
<br>
mpiexec as an attempt to provide a uniform job startup script.  They  
<br>
called it mpiexec because mpirun was already used by so many  
<br>
implementations and it was impossible to unify all the command line  
<br>
options.
<br>
<p>Open MPI provides mpiexec because that's what the standard says we  
<br>
should do.  We implemented the mpiexec syntax (plus some things that  
<br>
we figured users would want to do).  Since everyone expects us to  
<br>
have an mpirun, but we had some flexibility in our command line  
<br>
syntax, we just made it the same as mpirun.  In other MPI  
<br>
implementations (like LAM/MPI, for example), this is not the case and  
<br>
they have slightly different semantics.
<br>
<p><span class="quotelev1">&gt; I will run it thru the debugger tomorrow and let you know of the  
</span><br>
<span class="quotelev1">&gt; outcome.
</span><br>
<p>Hopefully that will shed some light on the problem.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0734.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0732.php">Durga Choudhury: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0732.php">Durga Choudhury: "Re: [OMPI users] Question and possible bugfix patches..."</a>
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
