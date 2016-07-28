<?
$subject_val = "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 21:18:05 2010" -->
<!-- isoreceived="20100813011805" -->
<!-- sent="Thu, 12 Aug 2010 19:17:56 -0600" -->
<!-- isosent="20100813011756" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Run-Time &amp;quot;Freedom&amp;quot; Question" -->
<!-- id="22EED58B-4796-4065-B19D-891B9548B2DD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 21:17:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14001.php">Tim Prince: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="13999.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>In reply to:</strong> <a href="13998.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14007.php">Jed Brown: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="14007.php">Jed Brown: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 12, 2010, at 7:04 PM, Michael E. Thomadakis wrote:
<br>
<p><span class="quotelev1">&gt; On 08/12/10 18:59, Tim Prince wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 8/12/2010 3:27 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ick - talk about confusing! I suppose there must be -some- rational reason why someone would want to do this, but I can't imagine what it would be....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm no expert on compiler vs lib confusion, but some of my own experience would say that this is a bad idea regardless of whether or not OMPI is involved. Compiler version interoperability is usually questionable, depending upon how far apart the rev levels are.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only answer I can offer is that you would have to try it. It will undoubtedly be a case-by-case basis: some combinations might work, others might fail.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; we have deployed OpenMPI 1.4.1 and 1.4.2 on our Intel Nehalem cluster using Intel compilers V 11.1.059 and 11.1.072 respectively, and one user has the following request:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can we build OpenMPI version say O.1 against Intel compilers version say I.1 but  then built an application with OpenMPI O.1 BUT then use a DIFFERENT Intel compiler version say I.2 to built and run this MPI application?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I suggested to him to 1) simply try to built and run the application with O.1 but use Intel compilers version I.X whatever this X is and see if it has any issues. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OR 2) If the above does not work, I would build OpenMPI O.1 against Intel version I.X so he can use THIS combination for his hypothetical application. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; He insists that I build OpenMPI O.1 with some version of Intel compilers I.Y but then at run time he would like to use different Intel run time libs at will I.Z &lt;&gt; I.X. 
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
<span class="quotelev2">&gt;&gt; Guessing at what is meant here, if you build MPI with a given version of Intel compilers, it ought to work when the application is built with a similar or more recent Intel compiler, or when the run-time LD_LIBRARY_PATH refers to a similar or newer library (within reason). There are similar constraints on glibc version.  &quot;Within reason&quot; works over a more restricted range when C++ is involved.  Note that the Intel linux compilers link to the gcc and glibc libraries as well as those which come with the compiler, and the MPI could be built with a combination of gcc and ifort to work with icc or gcc and ifort.  gfortran and ifort libraries, however, are incompatible, except that libgomp calls can be supported by libiomp5.
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;rational&quot; use I can see is that an application programmer would likely wish to test a range of compilers without rebuilding MPI.  Intel documentation says there is forward compatibility testing of libraries, at least to the extent that a build made with 10.1 would work with 11.1 libraries.
</span><br>
<span class="quotelev2">&gt;&gt; The most recent Intel library compatibility break was between MKL 9 and 10.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Tim, I offered to provide myself the combination of OMPI+ Intel compilers so that application can use it in stable fashion. When I inquired about this application so I can look into this I was told that &quot;there is NO application yet (!) that fails but just in case it fails ...&quot; I was asked to hack into the OMPI  building process to let OMPI use one run-time but then the MPI application using this OMPI ... use another! 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The &quot;easy&quot; way to accomplish this would be to:
<br>
<p>(a) build OMPI with whatever compiler you decide to use as a &quot;baseline&quot;
<br>
<p>(b) do -not- use the wrapper compiler to build the application. Instead, do &quot;mpicc --showme&quot; (or whatever language equivalent you want) to get the compile line, substitute your &quot;new&quot; compiler library for the &quot;old&quot; one, and then execute the resulting command manually.
<br>
<p>If you then set your LD_LIBRARY_PATH to the &quot;new&quot; libs, it might work - but no guarantees. Still, you could try it - and if it worked, you could always just explain that this is a case-by-case situation, and so it -could- break with other compiler combinations.
<br>
<p>Critical note: the app developers would have to validate the code with every combination! Otherwise, correct execution will be a complete crap-shoot - just because the app doesn't abnormally terminate does -not- mean it generated a correct result!
<br>
<p><p><span class="quotelev1">&gt; Thanks for the information on this. We indeed use Intel Compiler set 11.1.XXX + OMPI 1.4.1 and 1.4.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The basic motive in this hypothetical situation is to build the MPI application ONCE and then swap run-time libs as newer compilers come out.... I am certain that even if one can get away with it with nearby run-time versions there is no guarantee of the stability at-infinitum. I end up having to spent more time for technically &quot;awkward&quot; requests than the reasonable ones. Reminds me when I was a teacher I had to spent more time with all the people trying to avoid doing the work than with the good students... hmmm :-) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; take care,,,
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prince
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14001.php">Tim Prince: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="13999.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>In reply to:</strong> <a href="13998.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14007.php">Jed Brown: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Reply:</strong> <a href="14007.php">Jed Brown: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
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
