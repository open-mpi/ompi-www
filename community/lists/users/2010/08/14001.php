<?
$subject_val = "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 21:28:35 2010" -->
<!-- isoreceived="20100813012835" -->
<!-- sent="Thu, 12 Aug 2010 18:28:09 -0700" -->
<!-- isosent="20100813012809" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Run-Time &amp;quot;Freedom&amp;quot; Question" -->
<!-- id="4C649FA9.90409_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C649A2F.5070509_at_gmail.com" -->
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
<strong>Date:</strong> 2010-08-12 21:28:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14000.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>In reply to:</strong> <a href="13998.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13997.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/12/2010 6:04 PM, Michael E. Thomadakis wrote:
<br>
<span class="quotelev1">&gt; On 08/12/10 18:59, Tim Prince wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 8/12/2010 3:27 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ick - talk about confusing! I suppose there must be -some- rational 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reason why someone would want to do this, but I can't imagine what 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it would be....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm no expert on compiler vs lib confusion, but some of my own 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; experience would say that this is a bad idea regardless of whether 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or not OMPI is involved. Compiler version interoperability is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usually questionable, depending upon how far apart the rev levels are.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only answer I can offer is that you would have to try it. It will 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undoubtedly be a case-by-case basis: some combinations might work, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; others might fail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 12, 2010, at 3:53 PM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello OpenMPI,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we have deployed OpenMPI 1.4.1 and 1.4.2 on our Intel Nehalem 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cluster using Intel compilers V 11.1.059 and 11.1.072 respectively, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and one user has the following request:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can we build OpenMPI version say O.1 against Intel compilers 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version say I.1 but  then built an application with OpenMPI O.1 BUT 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then use a DIFFERENT Intel compiler version say I.2 to built and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run this MPI application?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I suggested to him to 1) simply try to built and run the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application with O.1 but use Intel compilers version I.X whatever 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this X is and see if it has any issues.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OR 2) If the above does not work, I would build OpenMPI O.1 against 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Intel version I.X so he can use THIS combination for his 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hypothetical application.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; He insists that I build OpenMPI O.1 with some version of Intel 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compilers I.Y but then at run time he would like to use *different* 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Intel run time libs at will I.Z &lt;&gt; I.X.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you provide me with a suggestion for a sane solution to this ? :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt; Guessing at what is meant here, if you build MPI with a given version 
</span><br>
<span class="quotelev2">&gt;&gt; of Intel compilers, it ought to work when the application is built 
</span><br>
<span class="quotelev2">&gt;&gt; with a similar or more recent Intel compiler, or when the run-time 
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH refers to a similar or newer library (within reason). 
</span><br>
<span class="quotelev2">&gt;&gt; There are similar constraints on glibc version.  &quot;Within reason&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; works over a more restricted range when C++ is involved.  Note that 
</span><br>
<span class="quotelev2">&gt;&gt; the Intel linux compilers link to the gcc and glibc libraries as well 
</span><br>
<span class="quotelev2">&gt;&gt; as those which come with the compiler, and the MPI could be built 
</span><br>
<span class="quotelev2">&gt;&gt; with a combination of gcc and ifort to work with icc or gcc and 
</span><br>
<span class="quotelev2">&gt;&gt; ifort.  gfortran and ifort libraries, however, are incompatible, 
</span><br>
<span class="quotelev2">&gt;&gt; except that libgomp calls can be supported by libiomp5.
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;rational&quot; use I can see is that an application programmer would 
</span><br>
<span class="quotelev2">&gt;&gt; likely wish to test a range of compilers without rebuilding MPI.  
</span><br>
<span class="quotelev2">&gt;&gt; Intel documentation says there is forward compatibility testing of 
</span><br>
<span class="quotelev2">&gt;&gt; libraries, at least to the extent that a build made with 10.1 would 
</span><br>
<span class="quotelev2">&gt;&gt; work with 11.1 libraries.
</span><br>
<span class="quotelev2">&gt;&gt; The most recent Intel library compatibility break was between MKL 9 
</span><br>
<span class="quotelev2">&gt;&gt; and 10.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Tim, I offered to provide myself the combination of OMPI+ Intel 
</span><br>
<span class="quotelev1">&gt; compilers so that application can use it in stable fashion. When I 
</span><br>
<span class="quotelev1">&gt; inquired about this application so I can look into this I was told 
</span><br>
<span class="quotelev1">&gt; that &quot;there is NO application yet (!) that fails but just in case it 
</span><br>
<span class="quotelev1">&gt; fails ...&quot; I was asked to hack into the OMPI  building process to let 
</span><br>
<span class="quotelev1">&gt; OMPI use one run-time but then the MPI application using this OMPI ... 
</span><br>
<span class="quotelev1">&gt; use another!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the information on this. We indeed use Intel Compiler set 
</span><br>
<span class="quotelev1">&gt; 11.1.XXX + OMPI 1.4.1 and 1.4.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The basic motive in this hypothetical situation is to build the MPI 
</span><br>
<span class="quotelev1">&gt; application ONCE and then swap run-time libs as newer compilers come 
</span><br>
<span class="quotelev1">&gt; out.... I am certain that even if one can get away with it with nearby 
</span><br>
<span class="quotelev1">&gt; run-time versions there is no guarantee of the stability at-infinitum. 
</span><br>
<span class="quotelev1">&gt; I end up having to spent more time for technically &quot;awkward&quot; requests 
</span><br>
<span class="quotelev1">&gt; than the reasonable ones. Reminds me when I was a teacher I had to 
</span><br>
<span class="quotelev1">&gt; spent more time with all the people trying to avoid doing the work 
</span><br>
<span class="quotelev1">&gt; than with the good students... hmmm :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
According to my understanding, your application (or MPI) built with an 
<br>
Intel 11.1 compiler should continue working with future Intel 11.1 and 
<br>
12.x libraries.  I don't expect Intel to test or support this 
<br>
compatibility beyond that.
<br>
You will likely want to upgrade your OpenMPI earlier than the time when 
<br>
Intel compiler changes require a new MPI build.
<br>
If the interest is in getting performance benefits of future hardware 
<br>
simply by installing new dynamic libraries without rebuilding an 
<br>
application, Intel MKL is the most likely favorable scenario.  The MKL 
<br>
with optimizations for AVX is already in  beta test, and should work as 
<br>
a direct replacement for the MKL in current releases.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14001/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14000.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>In reply to:</strong> <a href="13998.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13997.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
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
