<?
$subject_val = "Re: [OMPI users] Question regarding SELF-checkpointing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 31 11:35:59 2011" -->
<!-- isoreceived="20110831153559" -->
<!-- sent="Wed, 31 Aug 2011 11:35:55 -0400" -->
<!-- isosent="20110831153555" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question regarding SELF-checkpointing" -->
<!-- id="CAANzjEnxMAc6z2JfYxZGsUEFxj2gUhUwmGqeTyjBdHd3D6GvOw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT118-W418150E4298ED484A3F48D5160_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question regarding SELF-checkpointing<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-31 11:35:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17131.php">Gus Correa: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17129.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>In reply to:</strong> <a href="17127.php">Faisal Shahzad: "[OMPI users] Question regarding SELF-checkpointing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17139.php">Faisal Shahzad: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17139.php">Faisal Shahzad: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That seems like a bug to me.
<br>
<p>What version of Open MPI are you using? How have you setup the C/R
<br>
functionality (what MCA options do you have set, what command line
<br>
options are you using)? Can you send a small reproducing application
<br>
that we can test against?
<br>
<p>That should help us focus in on the problem a bit.
<br>
<p>-- Josh
<br>
<p>On Wed, Aug 31, 2011 at 6:36 AM, Faisal Shahzad &lt;itsfaisi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear Group,
</span><br>
<span class="quotelev1">&gt; I have a mpi-program in which every process is communicating with its
</span><br>
<span class="quotelev1">&gt; neighbors. When SELF-checkpointing, every process writes to a separate file.
</span><br>
<span class="quotelev1">&gt; Problem is that sometimes after making a checkpoint, program does not
</span><br>
<span class="quotelev1">&gt; continue again. Having more number of processes makes this problem severe.
</span><br>
<span class="quotelev1">&gt; With just 1 process (no communication), SEFL-checkpointing works normally
</span><br>
<span class="quotelev1">&gt; with no problem.
</span><br>
<span class="quotelev1">&gt; I have tried different '--mca btl' parameters (openib,tcp,sm,self), but
</span><br>
<span class="quotelev1">&gt; problem persists.
</span><br>
<span class="quotelev1">&gt; I would very much appreciate your support regarding it.
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Faisal
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17131.php">Gus Correa: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17129.php">Jeff Squyres: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>In reply to:</strong> <a href="17127.php">Faisal Shahzad: "[OMPI users] Question regarding SELF-checkpointing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17139.php">Faisal Shahzad: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17139.php">Faisal Shahzad: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
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
