<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 09:20:33 2006" -->
<!-- isoreceived="20060410132033" -->
<!-- sent="Mon, 10 Apr 2006 09:20:32 -0400" -->
<!-- isosent="20060410132032" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OT] padding and integer types" -->
<!-- id="91C1B441-52FF-4B0D-8B17-C7BD05FE9DEE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060410083145.GB9313_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2006-04-10 09:20:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0824.php">Brian Barrett: "[OMPI devel] Open MPI v1.1 branch created"</a>
<li><strong>Previous message:</strong> <a href="0822.php">Ralf Wildenhues: "[OMPI devel] [OT] padding and integer types"</a>
<li><strong>In reply to:</strong> <a href="0822.php">Ralf Wildenhues: "[OMPI devel] [OT] padding and integer types"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 10, 2006, at 4:31 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Apologies for a slightly off-topic (Autoconf-related) question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe OpenMPI deals with Fortran implementations where integer
</span><br>
<span class="quotelev1">&gt; types contain internal padding (i.e., not all bits are used for the
</span><br>
<span class="quotelev1">&gt; value); at least I read the configure macros this way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is padding in C types a practical issue as well?  Say, a 'short'  
</span><br>
<span class="quotelev1">&gt; with a
</span><br>
<span class="quotelev1">&gt; maximum value of 32767 but 32 or 64 bits storage size?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only system we found that exhibits this was a Cray Y-MP from the
</span><br>
<span class="quotelev1">&gt; cray-cyber museum (it's accessible and usable), but we don't know of
</span><br>
<span class="quotelev1">&gt; more modern systems that do this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Background: there is discussion[1] over a macro to compute such  
</span><br>
<span class="quotelev1">&gt; ranges,
</span><br>
<span class="quotelev1">&gt; fit also for cross compilation, but we're unsure about its practical
</span><br>
<span class="quotelev1">&gt; value.  I figured the readers here may have more such experience.
</span><br>
<p>With very few exceptions (Fortran LOGICAL, the max value of a Fortran  
<br>
handle (basically, the lower of INT_MAX and max value of Fortran  
<br>
INTEGER), we try very hard to avoid looking at values in the user  
<br>
buffers.  Less work that way ;).  George would have to say for sure,  
<br>
but I think we would do the right thing for the Y-MP, as we look at  
<br>
both size and alignment issues.
<br>
<p>If I remember correctly, the oddness of some of those old Cray  
<br>
machines for integers was nothing compared to their entertaining  
<br>
floating point units.  But I post-date all those machines, so all I  
<br>
know is based on lore ;).
<br>
<p>I think the Cray X1 does some interesting things with datatype  
<br>
sizing, but nothing like the Y-MP.  Not sure about the MTA machine.   
<br>
OMPI is a long way from supporting either of those machines, so not a  
<br>
huge deal for us.  The other machines from Cray (the XT-3/Red Storm  
<br>
and XD-1) are Opteron-based machines that basically only do the  
<br>
standard LP64 setup.  So no worries there.
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
<li><strong>Next message:</strong> <a href="0824.php">Brian Barrett: "[OMPI devel] Open MPI v1.1 branch created"</a>
<li><strong>Previous message:</strong> <a href="0822.php">Ralf Wildenhues: "[OMPI devel] [OT] padding and integer types"</a>
<li><strong>In reply to:</strong> <a href="0822.php">Ralf Wildenhues: "[OMPI devel] [OT] padding and integer types"</a>
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
