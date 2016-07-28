<?
$subject_val = "Re: [OMPI users] What's wrong with this code?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 17:22:37 2011" -->
<!-- isoreceived="20110222222237" -->
<!-- sent="Tue, 22 Feb 2011 14:22:29 -0800" -->
<!-- isosent="20110222222229" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What's wrong with this code?" -->
<!-- id="4D643725.9020907_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D642D86.3050105_at_ias.edu" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 17:22:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15687.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15685.php">Prentice Bisbal: "[OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15685.php">Prentice Bisbal: "[OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15690.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15690.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/22/2011 1:41 PM, Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; One of the researchers I support is writing some Fortran code that uses
</span><br>
<span class="quotelev1">&gt; Open MPI. The code is being compiled with the Intel Fortran compiler.
</span><br>
<span class="quotelev1">&gt; This one line of code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; integer ierr,istatus(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; leads to these errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpif90 -o simplex simplexmain579m.for simplexsubs579
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.8/intel-11/x86_64/include/mpif-config.h(88):
</span><br>
<span class="quotelev1">&gt; error #6406: Conflicting attributes or multiple declaration of name.
</span><br>
<span class="quotelev1">&gt; [MPI_STATUS_SIZE]
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_STATUS_SIZE=5)
</span><br>
<span class="quotelev1">&gt; -----------------^
</span><br>
<span class="quotelev1">&gt; simplexmain579m.for(147): error #6591: An automatic object is invalid in
</span><br>
<span class="quotelev1">&gt; a main program.   [ISTATUS]
</span><br>
<span class="quotelev1">&gt;          integer ierr,istatus(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt; ---------------------^
</span><br>
<span class="quotelev1">&gt; simplexmain579m.for(147): error #6219: A specification expression object
</span><br>
<span class="quotelev1">&gt; must be a dummy argument, a COMMON block object, or an object accessible
</span><br>
<span class="quotelev1">&gt; through host or use association   [MPI_STATUS_SIZE]
</span><br>
<span class="quotelev1">&gt;          integer ierr,istatus(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt; -----------------------------^
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.8/intel-11/x86_64/include/mpif-common.h(211):
</span><br>
<span class="quotelev1">&gt; error #6756: A COMMON block data object must not be an automatic object.
</span><br>
<span class="quotelev1">&gt;    [MPI_STATUS_IGNORE]
</span><br>
<span class="quotelev1">&gt;        integer MPI_STATUS_IGNORE(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt; --------------^
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.8/intel-11/x86_64/include/mpif-common.h(211):
</span><br>
<span class="quotelev1">&gt; error #6591: An automatic object is invalid in a main program.
</span><br>
<span class="quotelev1">&gt; [MPI_STATUS_IGNORE]
</span><br>
<span class="quotelev1">&gt;        integer MPI_STATUS_IGNORE(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea how to fix this? Is this a bug in the Intel compiler, or the code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I can't see the code from here.  The first failure to recognize the 
<br>
PARAMETER definition apparently gives rise to the others.  According to 
<br>
the message, you already used the name MPI_STATUS_SIZE in mpif-config.h 
<br>
and now you are trying to give it another usage (not case sensitive) in 
<br>
the same scope.  If so, it seems good that the compiler catches it.
<br>
<pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15687.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15685.php">Prentice Bisbal: "[OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15685.php">Prentice Bisbal: "[OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15690.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15690.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
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
