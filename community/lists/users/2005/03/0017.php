<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 10 22:26:19 2005" -->
<!-- isoreceived="20050311032619" -->
<!-- sent="Fri, 11 Mar 2005 14:21:58 +1100" -->
<!-- isosent="20050311032158" -->
<!-- name="Stuart Midgley" -->
<!-- email="stuart.midgley_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]" -->
<!-- id="fafb4304d2be3471477db2dbba924e7a_at_anu.edu.au" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050311010627.GA2093_at_greglaptop.internal.keyresearch.com" -->
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
<strong>From:</strong> Stuart Midgley (<em>stuart.midgley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-10 22:21:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0018.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Previous message:</strong> <a href="0016.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>In reply to:</strong> <a href="0016.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0018.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0018.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0020.php">Toon Knapen: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First, I think an ABI would be an excellent idea, if only for ease of 
<br>
support on our systems.  However, after a quick discussion with a  
<br>
colleague, I have a few concerns.
<br>
<p>One major implementation issue is the equivalent of mpirun (which I 
<br>
assume would be part of an ABI?) - or the startup requirements of 
<br>
different MPI's.  For example, many proprietary  MPI layers require 
<br>
access permissions and a context to be created for access to the high 
<br>
performance interconnect, something often done outside of mpirun.  This 
<br>
is further complicated by what individual sites/users want to do.  We 
<br>
(as in our facility) are currently implementing our own MPI run on our 
<br>
new system to setup a cpu/memory set for each individual mpi task to 
<br>
live in.
<br>
<p>As Greg points out, an ABI doesn't stop people from doing this and 
<br>
doesn't stop vendors from having their own proprietary MPI, but it does 
<br>
reduce the effectiveness of an ABI.
<br>
<p>The other issue we are concerned about is that an ABI doesn't resolve 
<br>
one of the central issues.  While you might have different MPI's with 
<br>
the same ABI, different mpi's behave differently and can cause a code 
<br>
to behave differently.  An ISV would still have to verify their code 
<br>
against all MPI's they wish to support.  For example, an ISV might, by 
<br>
accident, make an assumption about the small message size and their 
<br>
code might hang on different MPI's.
<br>
<p>Stu.
<br>
<p><p><pre>
--
&lt;---------------------------------------------------------------------&gt;
   Dr Stuart Midgley                   |  stuart.midgley_at_[hidden]
   Supercomputer Facility              |  smidgley_at_[hidden]
   Leonard Huxley Building 56          |  +61 (0)2 6125 5988   Work
   Australian National University      |  +61 (0)2 6125 8199   Fax
   CANBERRA   ACT   0200               |  +61 (0)4 1125 2488   Mob
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0018.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Previous message:</strong> <a href="0016.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>In reply to:</strong> <a href="0016.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0018.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0018.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0020.php">Toon Knapen: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
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
