<?
$subject_val = "Re: [OMPI users] What's wrong with this code?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 09:43:36 2011" -->
<!-- isoreceived="20110223144336" -->
<!-- sent="Wed, 23 Feb 2011 09:43:26 -0500" -->
<!-- isosent="20110223144326" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What's wrong with this code?" -->
<!-- id="4D651D0E.8000002_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2B4454FE-8B29-4BA5-B935-1927A03C7405_at_cisco.com" -->
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
<strong>Date:</strong> 2011-02-23 09:43:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15692.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15690.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15687.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 22, 2011, at 4:41 PM, Prentice Bisbal wrote:
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt;&gt;      parameter (MPI_STATUS_SIZE=5)
</span><br>
<span class="quotelev2">&gt;&gt; -----------------^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's hard to say without seeing the rest of the subroutine in question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send the source the the entire subroutine that is failing to compile?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Unfortunately, I I don't think I can provide the rest of the code. I'll
<br>
have to talk to the author first. I believe it's considered proprietary.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15692.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15690.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15687.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
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
