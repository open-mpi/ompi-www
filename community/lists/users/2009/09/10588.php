<?
$subject_val = "Re: [OMPI users] problem in using blcr";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 09:53:21 2009" -->
<!-- isoreceived="20090908135321" -->
<!-- sent="Tue, 8 Sep 2009 09:53:18 -0400" -->
<!-- isosent="20090908135318" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem in using blcr" -->
<!-- id="30C41C3E-E69C-4BE1-9310-1DBEC5C67417_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="191637.13623.qm_at_web37301.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem in using blcr<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-08 09:53:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10589.php">Josh Hursey: "Re: [OMPI users] checkpointing 2 or more processes running in parallel"</a>
<li><strong>Previous message:</strong> <a href="10587.php">Attila B&#246;rcs: "[OMPI users] SVD with mpi"</a>
<li><strong>In reply to:</strong> <a href="10583.php">Mallikarjuna Shastry: "[OMPI users] problem in using blcr"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you configure Open MPI with the appropriate checkpoint/restart  
<br>
options? Did you remember to add the '-am ft-enable-cr' parameter to  
<br>
mpirun? Is BLCR loaded properly on your machines? These are the common  
<br>
problems that people usually hit when getting started.
<br>
<p>There is a C/R Fault Tolerance User's Guide attached to the wiki page  
<br>
linked below. It contains all the information on configuring and  
<br>
running with checkpoint/restart in Open MPI.
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
<br>
<p>Let me know if you still have trouble after working through that  
<br>
document.
<br>
<p>-- Josh
<br>
<p><p>On Sep 7, 2009, at 12:29 AM, Mallikarjuna Shastry wrote:
<br>
<p><span class="quotelev1">&gt; dear sir/madam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am not able to checkpoint the open mpi programs using BLCR.
</span><br>
<span class="quotelev1">&gt; i am using openmpi 1.3.3 and blcr 0.8.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kindly tell me how do i configure the open mpi with blcr to  
</span><br>
<span class="quotelev1">&gt; checkpoint my mpi programs using blcr checkpoint library
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanking you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mallikarjuna shastry
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="10589.php">Josh Hursey: "Re: [OMPI users] checkpointing 2 or more processes running in parallel"</a>
<li><strong>Previous message:</strong> <a href="10587.php">Attila B&#246;rcs: "[OMPI users] SVD with mpi"</a>
<li><strong>In reply to:</strong> <a href="10583.php">Mallikarjuna Shastry: "[OMPI users] problem in using blcr"</a>
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
