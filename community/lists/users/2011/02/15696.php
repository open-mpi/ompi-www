<?
$subject_val = "Re: [OMPI users] What's wrong with this code?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 11:27:11 2011" -->
<!-- isoreceived="20110223162711" -->
<!-- sent="Wed, 23 Feb 2011 11:27:06 -0500" -->
<!-- isosent="20110223162706" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What's wrong with this code?" -->
<!-- id="4D65355A.2050809_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FC63AC79-9B9A-4437-8E38-24C8A40AD15C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What's wrong with this code?<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 11:27:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15697.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15693.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15697.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15697.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 23, 2011, at 9:48 AM, Tim Prince wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree with your logic, but the problem is where the code containing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the error is coming from - it's comping from a header files that's a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; part of Open MPI, which makes me think this is a cmpiler error, since
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm sure there are plenty of people using the same header file. in their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you certain that they all find it necessary to re-define identifiers from that header file, rather than picking parameter names which don't conflict?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without seeing the code, it sounds like Tim might be right: someone is trying to re-define the MPI_STATUS_SIZE parameter that is being defined by OMPI's mpif-config.h header file.  Regardless of include file/initialization ordering (i.e., regardless of whether mpif-config.h is the first or Nth entity to try to set this parameter), user code should never set this parameter value.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or any symbol that begins with MPI_, for that matter.  The entire &quot;MPI_&quot; namespace is reserved for MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I understand that, and I checked the code to make sure the programmer
<br>
didn't do anything stupid like that.
<br>
<p>The entire code is only a few hundred lines in two different files. In
<br>
the entire program, there is only 1 include statement:
<br>
<p>include 'mpif.h'
<br>
<p>and MPI_STATUS_SIZE appears only once:
<br>
<p>integer ierr,istatus(MPI_STATUS_SIZE)
<br>
<p>I have limited knowledge of Fortran programming, but based on this, I
<br>
don't see how MPI_STATUS_SIZE could be getting overwritten.
<br>
<p><p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15697.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15693.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15697.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15697.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
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
