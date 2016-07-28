<?
$subject_val = "Re: [OMPI users] What architecture?  X86_64, that's what architecture!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 17:23:06 2008" -->
<!-- isoreceived="20080314212306" -->
<!-- sent="Fri, 14 Mar 2008 15:22:59 -0600" -->
<!-- isosent="20080314212259" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What architecture?  X86_64, that's what architecture!" -->
<!-- id="EE692354-816B-44C7-90CF-C4B2B61ADBA6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47D5F969.9070507_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] What architecture?  X86_64, that's what architecture!<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-14 17:22:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5199.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Previous message:</strong> <a href="5197.php">Christopher Irving: "[OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5167.php">Jim Hill: "[OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5209.php">Jim Hill: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>Reply:</strong> <a href="5209.php">Jim Hill: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10, 2008, at 9:15 PM, Jim Hill wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to build a 64-bit 1.2.5 on an 8-core Xeon Mac Pro running  
</span><br>
<span class="quotelev1">&gt; OS X 10.4.11, with the Portland Group's PGI Workstation 7.1-5  
</span><br>
<span class="quotelev1">&gt; tools.  The configure script works its magic with a couple of  
</span><br>
<span class="quotelev1">&gt; modifications to account for PGI's tendency to freak out about F90  
</span><br>
<span class="quotelev1">&gt; modules.  Upon make, though, I end up dying with a &quot;Wat  
</span><br>
<span class="quotelev1">&gt; architecture?&quot; error in opal/mca/backtrace/darwin/MoreBacktrace/ 
</span><br>
<span class="quotelev1">&gt; MoreDebugging/MoreBacktrace.c:128 because (I presume) a 64-bit Xeon  
</span><br>
<span class="quotelev1">&gt; build isn't a PPC, a PPC64, or an X86.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this something that's been seen by others?  I'm not the world's  
</span><br>
<span class="quotelev1">&gt; greatest software stud and this is just a step along the path to my  
</span><br>
<span class="quotelev1">&gt; real objective, which is making my own software run on this beast  
</span><br>
<span class="quotelev1">&gt; machine of mine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suggestions, tips, and clever insults are welcome.  Thanks,
</span><br>
<p>The configure script should have prevented that from happening (and  
<br>
indeed does with the GNU compilers).  I don't have a copy of the PGI  
<br>
compilers for OS X to test with, so I can't debug this without some  
<br>
more information.  What changes did you make to configure, what  
<br>
options did you specify to configure, and what was the full output of  
<br>
configure?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5199.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Previous message:</strong> <a href="5197.php">Christopher Irving: "[OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5167.php">Jim Hill: "[OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5209.php">Jim Hill: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>Reply:</strong> <a href="5209.php">Jim Hill: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
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
