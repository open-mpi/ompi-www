<?
$subject_val = "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 21:04:54 2010" -->
<!-- isoreceived="20100813010454" -->
<!-- sent="Thu, 12 Aug 2010 20:04:47 -0500" -->
<!-- isosent="20100813010447" -->
<!-- name="Michael E. Thomadakis" -->
<!-- email="miket7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Run-Time &amp;quot;Freedom&amp;quot; Question" -->
<!-- id="4C649A2F.5070509_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C648AF9.3060007_at_aol.com" -->
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
<strong>From:</strong> Michael E. Thomadakis (<em>miket7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 21:04:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13999.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="13997.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>In reply to:</strong> <a href="13996.php">Tim Prince: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13999.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="13999.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="14000.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="14001.php">Tim Prince: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 08/12/10 18:59, Tim Prince wrote:
<br>
<span class="quotelev1">&gt; On 8/12/2010 3:27 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ick - talk about confusing! I suppose there must be -some- rational 
</span><br>
<span class="quotelev2">&gt;&gt; reason why someone would want to do this, but I can't imagine what it 
</span><br>
<span class="quotelev2">&gt;&gt; would be....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm no expert on compiler vs lib confusion, but some of my own 
</span><br>
<span class="quotelev2">&gt;&gt; experience would say that this is a bad idea regardless of whether or 
</span><br>
<span class="quotelev2">&gt;&gt; not OMPI is involved. Compiler version interoperability is usually 
</span><br>
<span class="quotelev2">&gt;&gt; questionable, depending upon how far apart the rev levels are.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Only answer I can offer is that you would have to try it. It will 
</span><br>
<span class="quotelev2">&gt;&gt; undoubtedly be a case-by-case basis: some combinations might work, 
</span><br>
<span class="quotelev2">&gt;&gt; others might fail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 12, 2010, at 3:53 PM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello OpenMPI,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we have deployed OpenMPI 1.4.1 and 1.4.2 on our Intel Nehalem 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster using Intel compilers V 11.1.059 and 11.1.072 respectively, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and one user has the following request:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can we build OpenMPI version say O.1 against Intel compilers version 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; say I.1 but  then built an application with OpenMPI O.1 BUT then use 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a DIFFERENT Intel compiler version say I.2 to built and run this MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suggested to him to 1) simply try to built and run the application 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with O.1 but use Intel compilers version I.X whatever this X is and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see if it has any issues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OR 2) If the above does not work, I would build OpenMPI O.1 against 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel version I.X so he can use THIS combination for his 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hypothetical application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; He insists that I build OpenMPI O.1 with some version of Intel 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers I.Y but then at run time he would like to use *different* 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel run time libs at will I.Z &lt;&gt; I.X.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you provide me with a suggestion for a sane solution to this ? :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev1">&gt; Guessing at what is meant here, if you build MPI with a given version 
</span><br>
<span class="quotelev1">&gt; of Intel compilers, it ought to work when the application is built 
</span><br>
<span class="quotelev1">&gt; with a similar or more recent Intel compiler, or when the run-time 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH refers to a similar or newer library (within reason). 
</span><br>
<span class="quotelev1">&gt; There are similar constraints on glibc version.  &quot;Within reason&quot; works 
</span><br>
<span class="quotelev1">&gt; over a more restricted range when C++ is involved.  Note that the 
</span><br>
<span class="quotelev1">&gt; Intel linux compilers link to the gcc and glibc libraries as well as 
</span><br>
<span class="quotelev1">&gt; those which come with the compiler, and the MPI could be built with a 
</span><br>
<span class="quotelev1">&gt; combination of gcc and ifort to work with icc or gcc and ifort.  
</span><br>
<span class="quotelev1">&gt; gfortran and ifort libraries, however, are incompatible, except that 
</span><br>
<span class="quotelev1">&gt; libgomp calls can be supported by libiomp5.
</span><br>
<span class="quotelev1">&gt; The &quot;rational&quot; use I can see is that an application programmer would 
</span><br>
<span class="quotelev1">&gt; likely wish to test a range of compilers without rebuilding MPI.  
</span><br>
<span class="quotelev1">&gt; Intel documentation says there is forward compatibility testing of 
</span><br>
<span class="quotelev1">&gt; libraries, at least to the extent that a build made with 10.1 would 
</span><br>
<span class="quotelev1">&gt; work with 11.1 libraries.
</span><br>
<span class="quotelev1">&gt; The most recent Intel library compatibility break was between MKL 9 
</span><br>
<span class="quotelev1">&gt; and 10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Dear Tim, I offered to provide myself the combination of OMPI+ Intel 
<br>
compilers so that application can use it in stable fashion. When I 
<br>
inquired about this application so I can look into this I was told that 
<br>
&quot;there is NO application yet (!) that fails but just in case it fails 
<br>
...&quot; I was asked to hack into the OMPI  building process to let OMPI use 
<br>
one run-time but then the MPI application using this OMPI ... use another!
<br>
<p><p>Thanks for the information on this. We indeed use Intel Compiler set 
<br>
11.1.XXX + OMPI 1.4.1 and 1.4.2.
<br>
<p>The basic motive in this hypothetical situation is to build the MPI 
<br>
application ONCE and then swap run-time libs as newer compilers come 
<br>
out.... I am certain that even if one can get away with it with nearby 
<br>
run-time versions there is no guarantee of the stability at-infinitum. I 
<br>
end up having to spent more time for technically &quot;awkward&quot; requests than 
<br>
the reasonable ones. Reminds me when I was a teacher I had to spent more 
<br>
time with all the people trying to avoid doing the work than with the 
<br>
good students... hmmm :-)
<br>
<p><p>take care,,,
<br>
Mike
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13998/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13999.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="13997.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>In reply to:</strong> <a href="13996.php">Tim Prince: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13999.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="13999.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="14000.php">Ralph Castain: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="14001.php">Tim Prince: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
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
