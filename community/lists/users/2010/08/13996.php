<?
$subject_val = "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 20:00:07 2010" -->
<!-- isoreceived="20100813000007" -->
<!-- sent="Thu, 12 Aug 2010 16:59:53 -0700" -->
<!-- isosent="20100812235953" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Run-Time &amp;quot;Freedom&amp;quot; Question" -->
<!-- id="4C648AF9.3060007_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="63FF222C-CBBC-4A1C-8CC5-9A3CB35D475C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 19:59:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13997.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="13995.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>In reply to:</strong> <a href="13995.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13998.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="13998.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/12/2010 3:27 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Ick - talk about confusing! I suppose there must be -some- rational 
</span><br>
<span class="quotelev1">&gt; reason why someone would want to do this, but I can't imagine what it 
</span><br>
<span class="quotelev1">&gt; would be....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm no expert on compiler vs lib confusion, but some of my own 
</span><br>
<span class="quotelev1">&gt; experience would say that this is a bad idea regardless of whether or 
</span><br>
<span class="quotelev1">&gt; not OMPI is involved. Compiler version interoperability is usually 
</span><br>
<span class="quotelev1">&gt; questionable, depending upon how far apart the rev levels are.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only answer I can offer is that you would have to try it. It will 
</span><br>
<span class="quotelev1">&gt; undoubtedly be a case-by-case basis: some combinations might work, 
</span><br>
<span class="quotelev1">&gt; others might fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2010, at 3:53 PM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello OpenMPI,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; we have deployed OpenMPI 1.4.1 and 1.4.2 on our Intel Nehalem cluster 
</span><br>
<span class="quotelev2">&gt;&gt; using Intel compilers V 11.1.059 and 11.1.072 respectively, and one 
</span><br>
<span class="quotelev2">&gt;&gt; user has the following request:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can we build OpenMPI version say O.1 against Intel compilers version 
</span><br>
<span class="quotelev2">&gt;&gt; say I.1 but  then built an application with OpenMPI O.1 BUT then use 
</span><br>
<span class="quotelev2">&gt;&gt; a DIFFERENT Intel compiler version say I.2 to built and run this MPI 
</span><br>
<span class="quotelev2">&gt;&gt; application?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suggested to him to 1) simply try to built and run the application 
</span><br>
<span class="quotelev2">&gt;&gt; with O.1 but use Intel compilers version I.X whatever this X is and 
</span><br>
<span class="quotelev2">&gt;&gt; see if it has any issues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OR 2) If the above does not work, I would build OpenMPI O.1 against 
</span><br>
<span class="quotelev2">&gt;&gt; Intel version I.X so he can use THIS combination for his hypothetical 
</span><br>
<span class="quotelev2">&gt;&gt; application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; He insists that I build OpenMPI O.1 with some version of Intel 
</span><br>
<span class="quotelev2">&gt;&gt; compilers I.Y but then at run time he would like to use *different* 
</span><br>
<span class="quotelev2">&gt;&gt; Intel run time libs at will I.Z &lt;&gt; I.X.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you provide me with a suggestion for a sane solution to this ? :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
Guessing at what is meant here, if you build MPI with a given version of 
<br>
Intel compilers, it ought to work when the application is built with a 
<br>
similar or more recent Intel compiler, or when the run-time 
<br>
LD_LIBRARY_PATH refers to a similar or newer library (within reason). 
<br>
There are similar constraints on glibc version.  &quot;Within reason&quot; works 
<br>
over a more restricted range when C++ is involved.  Note that the Intel 
<br>
linux compilers link to the gcc and glibc libraries as well as those 
<br>
which come with the compiler, and the MPI could be built with a 
<br>
combination of gcc and ifort to work with icc or gcc and ifort.  
<br>
gfortran and ifort libraries, however, are incompatible, except that 
<br>
libgomp calls can be supported by libiomp5.
<br>
The &quot;rational&quot; use I can see is that an application programmer would 
<br>
likely wish to test a range of compilers without rebuilding MPI.  Intel 
<br>
documentation says there is forward compatibility testing of libraries, 
<br>
at least to the extent that a build made with 10.1 would work with 11.1 
<br>
libraries.
<br>
The most recent Intel library compatibility break was between MKL 9 and 10.
<br>
<p><p><p><pre>
-- 
Tim Prince
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13996/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13997.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="13995.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>In reply to:</strong> <a href="13995.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13998.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="13998.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
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
