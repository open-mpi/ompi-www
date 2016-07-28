<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 18:48:20 2008" -->
<!-- isoreceived="20080922224820" -->
<!-- sent="Mon, 22 Sep 2008 16:48:15 -0600" -->
<!-- isosent="20080922224815" -->
<!-- name="Brian Harker" -->
<!-- email="brian.harker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="48535380809221548k255acba2yf26669b471037b4d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A820F6F1-C193-474D-9FF6-8C403F1F0AAC_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure and Build ok, but mpi module not recognized?<br>
<strong>From:</strong> Brian Harker (<em>brian.harker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 18:48:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6680.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6678.php">Doug Reeder: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6678.php">Doug Reeder: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6683.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6683.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I humbly bow before my MPI masters!  Thank you guys!
<br>
<p>make clean &amp;&amp; make all install seemed to fix it.  The example code
<br>
compiles and runs fine...but...
<br>
<p>when I compile my production code, I get:
<br>
<p>fortcom: Error: driver.f90: line 211: There is no matching specific
<br>
subroutine for this generic subroutine call.   [MPI_SEND]
<br>
<p>Seems odd that it would spit up on MPI_SEND, but has no problem with
<br>
MPI_RECV...  What do you guys think?  And thanks again for your help
<br>
and patience?
<br>
<p><p><p>On Mon, Sep 22, 2008 at 4:21 PM, Doug Reeder &lt;dlr_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that unless make all depends on make clean and make clean depends on
</span><br>
<span class="quotelev1">&gt; Makefile, you have to manually run make clean and/or manually delete the
</span><br>
<span class="quotelev1">&gt; module files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2008, at 3:16 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 22, 2008, at 6:08 PM, Brian Harker wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the config.log file...now that I look through it more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; carefully, I see some errors that I didn't see when watching
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure scroll by...still don't know what to do though.  :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not to worry; there are many tests in configure that are designed to fail.
</span><br>
<span class="quotelev2">&gt;&gt;  So it's not a problem to see lots of failures in config.log.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see that it did use ifort for both the F77 and F90 compilers; that's
</span><br>
<span class="quotelev2">&gt;&gt; what I wanted to check with configure output and config.log.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Per Doug's comment, if OMPI is not re-compiling the Fortran module when
</span><br>
<span class="quotelev2">&gt;&gt; you reconfigure with a new fortran compiler, that is likely a bug.  Can you
</span><br>
<span class="quotelev2">&gt;&gt; &quot;make clean all install&quot; and see if it works?  If not, send all the output
</span><br>
<span class="quotelev2">&gt;&gt; here (see <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> for instructions; please
</span><br>
<span class="quotelev2">&gt;&gt; compress).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Cheers,
Brian
brian.harker_at_[hidden]
&quot;In science, there is only physics; all the rest is stamp-collecting.&quot;
 -Ernest Rutherford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6680.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6678.php">Doug Reeder: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6678.php">Doug Reeder: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6683.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6683.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
