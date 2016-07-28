<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 27 16:11:10 2006" -->
<!-- isoreceived="20060327211110" -->
<!-- sent="Mon, 27 Mar 2006 16:11:10 -0500" -->
<!-- isosent="20060327211110" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best MPI implementation" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF56BD95_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Best MPI implementation" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-27 16:11:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0920.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<li><strong>Previous message:</strong> <a href="0918.php">Michael Kluskens: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0909.php">Tony Power: "[OMPI users] Best MPI implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0921.php">Eric Brunner-Williams: "Re: [OMPI users] Best MPI implementation"</a>
<li><strong>Reply:</strong> <a href="0921.php">Eric Brunner-Williams: "Re: [OMPI users] Best MPI implementation"</a>
<li><strong>Reply:</strong> <a href="0922.php">Michael Kluskens: "Re: [OMPI users] Best MPI implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We all think that Open MPI is fantastic, but we're a little biased.
<br>
<p>FWIW, I used to be the lead developer on LAM/MPI, and I'll tell you that
<br>
the LAM guys are now spending the vast majority of their time on Open
<br>
MPI.  Specifically: LAM is in maintenance mode.
<br>
<p>For your code, most MPI implementations (Open MPI, LAM/MPI, etc.)
<br>
support the same API.  So if it compiles/links with one, it *should*
<br>
compile/link with the others (assuming you coded it in an MPI-conformant
<br>
way).  Most of the tutorials out there are for MPI programming, and have
<br>
a smattering of information about how to compile/run for a particular
<br>
implementation.  So -- most any of the tutorials are fine.
<br>
<p>For Open MPI, it's quite similar to LAM -- use mpicc / mpiCC / mpif77 /
<br>
mpif90 to compile and link your application, and then use mpirun to run
<br>
it (there is no lamboot / lamhalt step in Open MPI like there is with
<br>
LAM).  Check out the FAQ on the Open MPI web site for more details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
<p>Hope that helps.
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Tony Power
</span><br>
<span class="quotelev1">&gt; Sent: Monday, March 27, 2006 5:45 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Best MPI implementation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; I am going to start my approach to parallel programming (on C or C++)
</span><br>
<span class="quotelev1">&gt; and I would like to know what should I learn/use, LAM MPI, OpenMPI, or
</span><br>
<span class="quotelev1">&gt; any other MPI implementation.
</span><br>
<span class="quotelev1">&gt; Can anyone advise me please?
</span><br>
<span class="quotelev1">&gt; I believe OpenMPI would be best, but I can't find any 
</span><br>
<span class="quotelev1">&gt; tutorial on OpenMPI.
</span><br>
<span class="quotelev1">&gt; Thank you very much ;)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0920.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<li><strong>Previous message:</strong> <a href="0918.php">Michael Kluskens: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0909.php">Tony Power: "[OMPI users] Best MPI implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0921.php">Eric Brunner-Williams: "Re: [OMPI users] Best MPI implementation"</a>
<li><strong>Reply:</strong> <a href="0921.php">Eric Brunner-Williams: "Re: [OMPI users] Best MPI implementation"</a>
<li><strong>Reply:</strong> <a href="0922.php">Michael Kluskens: "Re: [OMPI users] Best MPI implementation"</a>
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
