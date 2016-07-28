<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 25 13:28:52 2006" -->
<!-- isoreceived="20061025172852" -->
<!-- sent="Wed, 25 Oct 2006 13:28:47 -0400" -->
<!-- isosent="20061025172847" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Starting on remote nodes" -->
<!-- id="FADFC07D-2390-4822-AAAD-03A3DA031BE3_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1161791039.26570.346.camel_at_shavano.itc.virginia.edu" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-25 13:28:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2050.php">Katherine Holcomb: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="2048.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="2046.php">Katherine Holcomb: "[OMPI users] Starting on remote nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 25, 2006, at 11:43 AM, Katherine Holcomb wrote:
<br>
<p><span class="quotelev1">&gt; ...We support
</span><br>
<span class="quotelev1">&gt; multiple compilers (specifically PGI and Intel) and due to
</span><br>
<span class="quotelev1">&gt; incompatibilities in different vendors' f90 .mod files, we have  
</span><br>
<span class="quotelev1">&gt; separate
</span><br>
<span class="quotelev1">&gt; directories for OpenMPI with each compiler.  Therefore we cannot set a
</span><br>
<span class="quotelev1">&gt; global path to the OpenMPI binaries -- it will differ depending on the
</span><br>
<span class="quotelev1">&gt; user's choice of compiler.  I have read about the --prefix flag and  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; does work, but our users are mostly barely conversant with Unix and  
</span><br>
<span class="quotelev1">&gt; many
</span><br>
<span class="quotelev1">&gt; would have difficulty finding and specifying the appropriate path.   
</span><br>
<span class="quotelev1">&gt; (We
</span><br>
<span class="quotelev1">&gt; use the modules software environment currently to set paths and the  
</span><br>
<span class="quotelev1">&gt; like
</span><br>
<span class="quotelev1">&gt; for them.)  Is there some way to specify something like &quot;use the same
</span><br>
<span class="quotelev1">&gt; path as you are in&quot; from the root process?  There was some allusion in
</span><br>
<span class="quotelev1">&gt; the FAQ to changing the wrappers to include directives, but the  
</span><br>
<span class="quotelev1">&gt; link led
</span><br>
<span class="quotelev1">&gt; to a &quot;no such category&quot; page.
</span><br>
<p>I presume you left some critical piece of information out of your  
<br>
message, like the name and configuration of the batch queueing system  
<br>
you are using.
<br>
<p>The answer to your question as worded may not be the best answer for  
<br>
your problem.
<br>
<p>I have dealt with two cases similar to yours:
<br>
<p>1) Large system using Modules and LSF batch queueing system -- this  
<br>
type of system requires the people configuring LSF to set up some  
<br>
stuff or the end users have to use --prefix flag to get the OpenMPI  
<br>
path, plus more to get the correct compiler (something I never  
<br>
figured out how to do before the LSF admins extended their LSF  
<br>
installation to cover OpenMPI). [what stuff I don't know, I'm not an  
<br>
LSF admin]
<br>
<p>2) Local system I sysadm, learning Modules setup was going to take  
<br>
more time than I had available so I wrote a script that sets PATH,  
<br>
MANPATH, and LD_LIBRARY_PATH based on similar arguments as the real  
<br>
Module software (also G95_INCLUDE_PATH  for g95).  When the user sets  
<br>
the environmental variables via my script and then runs OpenMPI I see  
<br>
no problems with OpenMPI on the other nodes; however, we don't have a  
<br>
batch queuing system.  I don't see why using the Modules software  
<br>
would be any different.  One critical piece is that my script also  
<br>
aliases mpirun, for example &quot;alias mpirun &quot;mpirun --prefix /opt/g95/ 
<br>
openmpi/1.1.1 &quot; (which the real modules software should also be able  
<br>
to do if needed) and I have only one installation of each type of  
<br>
compiler (g95, Intel, PGI, Absoft).
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2050.php">Katherine Holcomb: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="2048.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="2046.php">Katherine Holcomb: "[OMPI users] Starting on remote nodes"</a>
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
