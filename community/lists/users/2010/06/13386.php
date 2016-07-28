<?
$subject_val = "Re: [OMPI users] Fortran - MPI_WORLD_COMM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 18:32:15 2010" -->
<!-- isoreceived="20100622223215" -->
<!-- sent="Tue, 22 Jun 2010 17:32:11 -0500 (CDT)" -->
<!-- isosent="20100622223211" -->
<!-- name="chan_at_[hidden]" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran - MPI_WORLD_COMM" -->
<!-- id="23159760.1002031277245931970.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="14734344.1001981277245543845.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran - MPI_WORLD_COMM<br>
<strong>From:</strong> <a href="mailto:chan_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Fortran%20-%20MPI_WORLD_COMM"><em>chan_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-06-22 18:32:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13387.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13385.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Maybe in reply to:</strong> <a href="13381.php">Mihaly Mezei: "[OMPI users] Fortran - MPI_WORLD_COMM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13388.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Reply:</strong> <a href="13388.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_COMM_WORLD is defined by a parameter statement, so it
<br>
is a fortran contant. The following f77 program fails to compile.
<br>
<p><span class="quotelev1">&gt; cat ts_param.f 
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer mm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parameter (mm = 9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /cmblk/ mm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<span class="quotelev1">&gt; gfortran ts_param.f
</span><br>
ts_param.f:4.23:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /cmblk/ mm                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: PARAMETER attribute conflicts with COMMON attribute in 'mm' at (1)
<br>
<span class="quotelev1">&gt; ifort ts_param.f                                           
</span><br>
ts_param.f(4): error #6414: This PARAMETER constant name is invalid in this context.   [MM]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /cmblk/ mm
<br>
---------------------^
<br>
compilation aborted for ts_param.f (code 1)
<br>
<p>Don't think you can do that with either MPICH2 or OpenMPI.
<br>
Since MPI_COMM_WORLD is a constant, why do you want to put it
<br>
in a common block ?
<br>
<p>A.Chan
<br>
<p>----- &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 22, 2010, at 5:55 PM, Mihaly Mezei wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpi0.f(2): error #6414: This PARAMETER constant name is invalid in
</span><br>
<span class="quotelev1">&gt; this context.   [MPI_COMM_WORLD]
</span><br>
<span class="quotelev2">&gt; &gt;       common /MPI_DM/ MPI_COMM_WORLD,NUMNOD,MYRANK
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------^
</span><br>
<span class="quotelev2">&gt; &gt; mpi0.f(21): error #6412: A dummy argument name is invalid in this
</span><br>
<span class="quotelev1">&gt; context.   [MPI_COMM_WORLD]
</span><br>
<span class="quotelev2">&gt; &gt;       common /MPI_DM/ MPI_COMM_WORLD,NUMNOD,MYRANK
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Funky.  I'm not a fortran expert, but I didn't know what you couldn't
</span><br>
<span class="quotelev1">&gt; put a parameter in a common block.  I guess that's a difference
</span><br>
<span class="quotelev1">&gt; between OMPI and MPICH -- sorry!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I try to pass MPI_WORLD_COMM to a subrotine as one of the
</span><br>
<span class="quotelev1">&gt; subroutine argument, it aborts at run time whe it comes to using it in
</span><br>
<span class="quotelev1">&gt; an MPI_Bcast call
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev2">&gt; &gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That shouldn't be.  But it does seem to imply that your passing a bad
</span><br>
<span class="quotelev1">&gt; datatype, not a bad communicator.  Can you send a small code example
</span><br>
<span class="quotelev1">&gt; that shows the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13387.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13385.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Maybe in reply to:</strong> <a href="13381.php">Mihaly Mezei: "[OMPI users] Fortran - MPI_WORLD_COMM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13388.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Reply:</strong> <a href="13388.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
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
