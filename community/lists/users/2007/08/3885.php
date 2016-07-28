<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 15:19:53 2007" -->
<!-- isoreceived="20070817191953" -->
<!-- sent="Fri, 17 Aug 2007 15:18:53 -0400" -->
<!-- isosent="20070817191853" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sepran package dead lock" -->
<!-- id="5537AE05-BFB5-4000-A891-31CB29FAEB4E_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7DA33084-F8FB-4796-A529-5A2B3160742D_at_cisco.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 15:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3886.php">Tudor Buican: "[OMPI users] OpenMPI 1.2.3: can't find mca libraries"</a>
<li><strong>Previous message:</strong> <a href="3884.php">Jeff Squyres: "Re: [OMPI users] sepran package dead lock"</a>
<li><strong>In reply to:</strong> <a href="3884.php">Jeff Squyres: "Re: [OMPI users] sepran package dead lock"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks this is all interesting articles.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Aug 17, 2007, at 3:13 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 17, 2007, at 12:16 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have a user who uses the sepran1206 package.  It works for him on
</span><br>
<span class="quotelev2">&gt;&gt; lam, mpich2 and OMPI up to problem sizes i see in the debugger (ddt)
</span><br>
<span class="quotelev2">&gt;&gt; that both rank 0 and rank 1 call PMPI_SEND()
</span><br>
<span class="quotelev2">&gt;&gt; Is PMPI_SEND the same as MPI_SEND?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the most part, yes.  In Open MPI on many operating systems, one
</span><br>
<span class="quotelev1">&gt; is a weak symbol for the other (so in a debugger, you might see your
</span><br>
<span class="quotelev1">&gt; app call PMPI_Send instead of MPI_Send).  On other operating systems
</span><br>
<span class="quotelev1">&gt; where weak symbols are not supported (e.g., OS X), there are two
</span><br>
<span class="quotelev1">&gt; copies of the same C function, one named MPI_Send and the other named
</span><br>
<span class="quotelev1">&gt; PMPI_Send (ditto for Fortran).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;PMPI&quot; versions are what are called the profiling versions --
</span><br>
<span class="quotelev1">&gt; meaning that someone can write their own 3rd party library and
</span><br>
<span class="quotelev1">&gt; provide &quot;MPI_&lt;foo&gt;&quot; functions to intercept all the MPI calls.  They
</span><br>
<span class="quotelev1">&gt; can then do process accounting, tracing, or whatever they want to do,
</span><br>
<span class="quotelev1">&gt; and then call the back-end &quot;PMPI_&lt;foo&gt;&quot; function to perform the
</span><br>
<span class="quotelev1">&gt; actual MPI functionality.  See the &quot;profiling&quot; chapter of the MPI-1
</span><br>
<span class="quotelev1">&gt; spec if you care about the details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; also why would it work with lam and mpich2 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If we up the btl_sm_eager_limit it works, (obviously due to the
</span><br>
<span class="quotelev2">&gt;&gt; blocking nature of both calling MPI_SEND)
</span><br>
<span class="quotelev2">&gt;&gt; but I am confused as to why lam works and ompi does not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A common reason for this kind of behavior is assuming that MPI_SEND
</span><br>
<span class="quotelev1">&gt; will not block.  Check out an old magazine column that I wrote about
</span><br>
<span class="quotelev1">&gt; this topic:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://cw.squyres.com/columns/2004-08-CW-MPI-Mechanic.pdf">http://cw.squyres.com/columns/2004-08-CW-MPI-Mechanic.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's &quot;#1&quot; on my top-10 list of evils to avoid in parallel (that
</span><br>
<span class="quotelev1">&gt; column is part 2 of 2 -- part 1 is <a href="http://cw.squyres.com/columns/">http://cw.squyres.com/columns/</a>
</span><br>
<span class="quotelev1">&gt; 2004-07-CW-MPI-Mechanic.pdf).    I also talk about the same problem
</span><br>
<span class="quotelev1">&gt; in this column under the &quot;Debugging a Classic MPI Mistake&quot; heading:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://cw.squyres.com/columns/2005-01-CW-MPI-Mechanic.pdf">http://cw.squyres.com/columns/2005-01-CW-MPI-Mechanic.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll likely be copying/moving the PDFs of these old columns to
</span><br>
<span class="quotelev1">&gt; www.open-mpi.org in the not-distant future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: I'm not saying that this is definitely the problem, but from
</span><br>
<span class="quotelev1">&gt; your description, it certainly could be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3886.php">Tudor Buican: "[OMPI users] OpenMPI 1.2.3: can't find mca libraries"</a>
<li><strong>Previous message:</strong> <a href="3884.php">Jeff Squyres: "Re: [OMPI users] sepran package dead lock"</a>
<li><strong>In reply to:</strong> <a href="3884.php">Jeff Squyres: "Re: [OMPI users] sepran package dead lock"</a>
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
