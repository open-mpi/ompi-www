<?
$subject_val = "Re: [OMPI users] Scalability issue";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  5 19:11:21 2010" -->
<!-- isoreceived="20101206001121" -->
<!-- sent="Sun, 05 Dec 2010 16:11:10 -0800" -->
<!-- isosent="20101206001110" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scalability issue" -->
<!-- id="4CFC2A1E.8030904_at_aol.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5619D6E2-6A08-4BEE-BACC-A3ED1F879961_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scalability issue<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-05 19:11:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14999.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14997.php">Gustavo Correa: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>In reply to:</strong> <a href="14996.php">Gustavo Correa: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14999.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/5/2010 3:22 PM, Gustavo Correa wrote:
<br>
<span class="quotelev1">&gt; I would just rebuild OpenMPI withOUT the compiler flags that change the standard
</span><br>
<span class="quotelev1">&gt; sizes of  &quot;int&quot; and &quot;float&quot; (do a &quot;make cleandist&quot; first!), then recompile your program,
</span><br>
<span class="quotelev1">&gt; and see how it goes.
</span><br>
<span class="quotelev1">&gt; I don't think you are gaining anything by trying to change the standard &quot;int/integer&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;real/float&quot; sizdes, and most likely they are inviting trouble, making things more confusing.
</span><br>
<span class="quotelev1">&gt; Worst scenario, you will at least be sure that the bug is somewhere else, not on the mismatch
</span><br>
<span class="quotelev1">&gt; of basic type sizes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you need to pass 8-byte real buffers, use MPI_DOUBLE_PRECISION, or MPI_REAL8
</span><br>
<span class="quotelev1">&gt; in your (Fortran) MPI calls, and declare them in the Fortran code accordingly
</span><br>
<span class="quotelev1">&gt; (double precision or real(kind=8)).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I remember right, there is no  8-byte integer support in the Fortran MPI bindings,
</span><br>
<span class="quotelev1">&gt; only in the C bindings, but some OpenMPI expert could clarify this.
</span><br>
<span class="quotelev1">&gt; Hence, if you are passing 8-byte integers in your MPI calls this may be also problematic.
</span><br>
My colleagues routinely use 8-byte integers with Fortran, but I agree 
<br>
it's not done by changing openmpi build parameters.   They do use 
<br>
Fortran compile line options for the application to change the default 
<br>
integer and real to 64-bit.  I wasn't aware of any reluctance to use 
<br>
MPI_INTEGER8.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14999.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14997.php">Gustavo Correa: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>In reply to:</strong> <a href="14996.php">Gustavo Correa: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14999.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
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
