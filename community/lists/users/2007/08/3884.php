<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 15:13:51 2007" -->
<!-- isoreceived="20070817191351" -->
<!-- sent="Fri, 17 Aug 2007 15:13:27 -0400" -->
<!-- isosent="20070817191327" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sepran package dead lock" -->
<!-- id="7DA33084-F8FB-4796-A529-5A2B3160742D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ADD764D9-A803-481F-BAEF-7E107E2F4E08_at_umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 15:13:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3885.php">Brock Palen: "Re: [OMPI users] sepran package dead lock"</a>
<li><strong>Previous message:</strong> <a href="3883.php">Jeff Squyres: "Re: [OMPI users] fortran + pgi +pgi memory issues"</a>
<li><strong>In reply to:</strong> <a href="3878.php">Brock Palen: "[OMPI users] sepran package dead lock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3885.php">Brock Palen: "Re: [OMPI users] sepran package dead lock"</a>
<li><strong>Reply:</strong> <a href="3885.php">Brock Palen: "Re: [OMPI users] sepran package dead lock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17, 2007, at 12:16 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; We have a user who uses the sepran1206 package.  It works for him on
</span><br>
<span class="quotelev1">&gt; lam, mpich2 and OMPI up to problem sizes i see in the debugger (ddt)
</span><br>
<span class="quotelev1">&gt; that both rank 0 and rank 1 call PMPI_SEND()
</span><br>
<span class="quotelev1">&gt; Is PMPI_SEND the same as MPI_SEND?
</span><br>
<p>For the most part, yes.  In Open MPI on many operating systems, one  
<br>
is a weak symbol for the other (so in a debugger, you might see your  
<br>
app call PMPI_Send instead of MPI_Send).  On other operating systems  
<br>
where weak symbols are not supported (e.g., OS X), there are two  
<br>
copies of the same C function, one named MPI_Send and the other named  
<br>
PMPI_Send (ditto for Fortran).
<br>
<p>The &quot;PMPI&quot; versions are what are called the profiling versions --  
<br>
meaning that someone can write their own 3rd party library and  
<br>
provide &quot;MPI_&lt;foo&gt;&quot; functions to intercept all the MPI calls.  They  
<br>
can then do process accounting, tracing, or whatever they want to do,  
<br>
and then call the back-end &quot;PMPI_&lt;foo&gt;&quot; function to perform the  
<br>
actual MPI functionality.  See the &quot;profiling&quot; chapter of the MPI-1  
<br>
spec if you care about the details.
<br>
<p><span class="quotelev1">&gt; also why would it work with lam and mpich2 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we up the btl_sm_eager_limit it works, (obviously due to the
</span><br>
<span class="quotelev1">&gt; blocking nature of both calling MPI_SEND)
</span><br>
<span class="quotelev1">&gt; but I am confused as to why lam works and ompi does not.
</span><br>
<p>A common reason for this kind of behavior is assuming that MPI_SEND  
<br>
will not block.  Check out an old magazine column that I wrote about  
<br>
this topic:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://cw.squyres.com/columns/2004-08-CW-MPI-Mechanic.pdf">http://cw.squyres.com/columns/2004-08-CW-MPI-Mechanic.pdf</a>
<br>
<p>It's &quot;#1&quot; on my top-10 list of evils to avoid in parallel (that  
<br>
column is part 2 of 2 -- part 1 is <a href="http://cw.squyres.com/columns/">http://cw.squyres.com/columns/</a> 
<br>
2004-07-CW-MPI-Mechanic.pdf).    I also talk about the same problem  
<br>
in this column under the &quot;Debugging a Classic MPI Mistake&quot; heading:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://cw.squyres.com/columns/2005-01-CW-MPI-Mechanic.pdf">http://cw.squyres.com/columns/2005-01-CW-MPI-Mechanic.pdf</a>
<br>
<p>I'll likely be copying/moving the PDFs of these old columns to  
<br>
www.open-mpi.org in the not-distant future.
<br>
<p>BTW: I'm not saying that this is definitely the problem, but from  
<br>
your description, it certainly could be.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3885.php">Brock Palen: "Re: [OMPI users] sepran package dead lock"</a>
<li><strong>Previous message:</strong> <a href="3883.php">Jeff Squyres: "Re: [OMPI users] fortran + pgi +pgi memory issues"</a>
<li><strong>In reply to:</strong> <a href="3878.php">Brock Palen: "[OMPI users] sepran package dead lock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3885.php">Brock Palen: "Re: [OMPI users] sepran package dead lock"</a>
<li><strong>Reply:</strong> <a href="3885.php">Brock Palen: "Re: [OMPI users] sepran package dead lock"</a>
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
