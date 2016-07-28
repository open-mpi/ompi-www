<?
$subject_val = "Re: [OMPI users] What's wrong with this code?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 09:41:34 2011" -->
<!-- isoreceived="20110223144134" -->
<!-- sent="Wed, 23 Feb 2011 09:41:22 -0500" -->
<!-- isosent="20110223144122" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What's wrong with this code?" -->
<!-- id="4D651C92.9030701_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D643725.9020907_at_aol.com" -->
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
<strong>Date:</strong> 2011-02-23 09:41:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15691.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15689.php">Ahsan Ali: "Re: [OMPI users] WRF Problem running in Parallel (jody)"</a>
<li><strong>In reply to:</strong> <a href="15686.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15692.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15692.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim Prince wrote:
<br>
<span class="quotelev1">&gt; On 2/22/2011 1:41 PM, Prentice Bisbal wrote:
</span><br>
<span class="quotelev2">&gt;&gt; One of the researchers I support is writing some Fortran code that uses
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI. The code is being compiled with the Intel Fortran compiler.
</span><br>
<span class="quotelev2">&gt;&gt; This one line of code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; integer ierr,istatus(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; leads to these errors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpif90 -o simplex simplexmain579m.for simplexsubs579
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.2.8/intel-11/x86_64/include/mpif-config.h(88):
</span><br>
<span class="quotelev2">&gt;&gt; error #6406: Conflicting attributes or multiple declaration of name.
</span><br>
<span class="quotelev2">&gt;&gt; [MPI_STATUS_SIZE]
</span><br>
<span class="quotelev2">&gt;&gt;        parameter (MPI_STATUS_SIZE=5)
</span><br>
<span class="quotelev2">&gt;&gt; -----------------^
</span><br>
<span class="quotelev2">&gt;&gt; simplexmain579m.for(147): error #6591: An automatic object is invalid in
</span><br>
<span class="quotelev2">&gt;&gt; a main program.   [ISTATUS]
</span><br>
<span class="quotelev2">&gt;&gt;          integer ierr,istatus(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------^
</span><br>
<span class="quotelev2">&gt;&gt; simplexmain579m.for(147): error #6219: A specification expression object
</span><br>
<span class="quotelev2">&gt;&gt; must be a dummy argument, a COMMON block object, or an object accessible
</span><br>
<span class="quotelev2">&gt;&gt; through host or use association   [MPI_STATUS_SIZE]
</span><br>
<span class="quotelev2">&gt;&gt;          integer ierr,istatus(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------^
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.2.8/intel-11/x86_64/include/mpif-common.h(211):
</span><br>
<span class="quotelev2">&gt;&gt; error #6756: A COMMON block data object must not be an automatic object.
</span><br>
<span class="quotelev2">&gt;&gt;    [MPI_STATUS_IGNORE]
</span><br>
<span class="quotelev2">&gt;&gt;        integer MPI_STATUS_IGNORE(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev2">&gt;&gt; --------------^
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.2.8/intel-11/x86_64/include/mpif-common.h(211):
</span><br>
<span class="quotelev2">&gt;&gt; error #6591: An automatic object is invalid in a main program.
</span><br>
<span class="quotelev2">&gt;&gt; [MPI_STATUS_IGNORE]
</span><br>
<span class="quotelev2">&gt;&gt;        integer MPI_STATUS_IGNORE(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea how to fix this? Is this a bug in the Intel compiler, or the
</span><br>
<span class="quotelev2">&gt;&gt; code?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't see the code from here.  The first failure to recognize the
</span><br>
<span class="quotelev1">&gt; PARAMETER definition apparently gives rise to the others.  According to
</span><br>
<span class="quotelev1">&gt; the message, you already used the name MPI_STATUS_SIZE in mpif-config.h
</span><br>
<span class="quotelev1">&gt; and now you are trying to give it another usage (not case sensitive) in
</span><br>
<span class="quotelev1">&gt; the same scope.  If so, it seems good that the compiler catches it.
</span><br>
<p>I agree with your logic, but the problem is where the code containing
<br>
the error is coming from - it's comping from a header files that's a
<br>
part of Open MPI, which makes me think this is a compiler error, since
<br>
I'm sure there are plenty of people using the same header file. in their
<br>
code.
<br>
<p><p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15691.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15689.php">Ahsan Ali: "Re: [OMPI users] WRF Problem running in Parallel (jody)"</a>
<li><strong>In reply to:</strong> <a href="15686.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15692.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15692.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
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
