<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 25 13:39:54 2006" -->
<!-- isoreceived="20061025173954" -->
<!-- sent="Wed, 25 Oct 2006 13:39:46 -0400" -->
<!-- isosent="20061025173946" -->
<!-- name="Katherine Holcomb" -->
<!-- email="kholcomb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Starting on remote nodes" -->
<!-- id="1161797987.26570.389.camel_at_shavano.itc.virginia.edu" -->
<!-- inreplyto="03173989-ED0F-4635-86CC-83A268C9027B_at_ieee.org" -->
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
<strong>From:</strong> Katherine Holcomb (<em>kholcomb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-25 13:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2051.php">Michael Kluskens: "[OMPI users]  MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>Previous message:</strong> <a href="2049.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="2048.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2049.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I presume you left some critical piece of information out of your  
</span><br>
<span class="quotelev1">&gt; message, like the name and configuration of the batch queueing system  
</span><br>
<span class="quotelev1">&gt; you are using.
</span><br>
<p>We're using PBS Pro although I don't think it's a factor in this
<br>
particular situation.  (I did find some behavior with PBS Pro that
<br>
seemed not to be as advertised, i.e. it was placing all the processes on
<br>
one node when two were requested unless the -machinefile flag was
<br>
explicitly set to $PBS_NODEFILE, but that was a different problem.)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The answer to your question as worded may not be the best answer for  
</span><br>
<span class="quotelev1">&gt; your problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have dealt with two cases similar to yours:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Large system using Modules and LSF batch queueing system -- this  
</span><br>
<span class="quotelev1">&gt; type of system requires the people configuring LSF to set up some  
</span><br>
<span class="quotelev1">&gt; stuff or the end users have to use --prefix flag to get the OpenMPI  
</span><br>
<span class="quotelev1">&gt; path, plus more to get the correct compiler (something I never  
</span><br>
<span class="quotelev1">&gt; figured out how to do before the LSF admins extended their LSF  
</span><br>
<span class="quotelev1">&gt; installation to cover OpenMPI). [what stuff I don't know, I'm not an  
</span><br>
<span class="quotelev1">&gt; LSF admin]
</span><br>
<p>It does look like we'll have to use the --prefix flag, at least to
<br>
start.  Rainer Keller pointed out that I can set an environment variable
<br>
in the module script and that does seem to be the best option for now.
<br>
We'd rather not get into wrapping the binaries.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) Local system I sysadm, learning Modules setup was going to take  
</span><br>
<span class="quotelev1">&gt; more time than I had available so I wrote a script that sets PATH,  
</span><br>
<span class="quotelev1">&gt; MANPATH, and LD_LIBRARY_PATH based on similar arguments as the real  
</span><br>
<span class="quotelev1">&gt; Module software (also G95_INCLUDE_PATH  for g95).  When the user sets  
</span><br>
<span class="quotelev1">&gt; the environmental variables via my script and then runs OpenMPI I see  
</span><br>
<span class="quotelev1">&gt; no problems with OpenMPI on the other nodes; however, we don't have a  
</span><br>
<span class="quotelev1">&gt; batch queuing system.  I don't see why using the Modules software  
</span><br>
<span class="quotelev1">&gt; would be any different.  One critical piece is that my script also  
</span><br>
<span class="quotelev1">&gt; aliases mpirun, for example &quot;alias mpirun &quot;mpirun --prefix /opt/g95/ 
</span><br>
<span class="quotelev1">&gt; openmpi/1.1.1 &quot; (which the real modules software should also be able  
</span><br>
<span class="quotelev1">&gt; to do if needed) and I have only one installation of each type of  
</span><br>
<span class="quotelev1">&gt; compiler (g95, Intel, PGI, Absoft).
</span><br>
<p>Long term we are probably going to do something similar (write our own
<br>
Modules replacement).  For one thing, the Modules software doesn't seem
<br>
to have been maintained for a while, and for another, it uses Tcl, which
<br>
is not much of a mainstream language anymore.
<br>
<p><pre>
-- 
Katherine Holcomb, Ph.D.                kholcomb_at_[hidden]
Research Computing Support Group - ITC  Office Phone: (434) 982-5948
148 BSEL, Clark Hall                    Center Phone: (434) 243-8799
University of Virginia 22904            
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2051.php">Michael Kluskens: "[OMPI users]  MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>Previous message:</strong> <a href="2049.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="2048.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2049.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
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
