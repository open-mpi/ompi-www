<?
$subject_val = "Re: [OMPI users] Checkpoint an MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 10:18:52 2012" -->
<!-- isoreceived="20120119151852" -->
<!-- sent="Thu, 19 Jan 2012 08:18:33 -0700" -->
<!-- isosent="20120119151833" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint an MPI process" -->
<!-- id="4F183449.7040100_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjE=azvO1AJgmucFxCkxHubY+24s56sKKM0W_D_LpNoWc=Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint an MPI process<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 10:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18216.php">Durga Choudhury: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18214.php">Josh Hursey: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>In reply to:</strong> <a href="18214.php">Josh Hursey: "Re: [OMPI users] Checkpoint an MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18230.php">Rodrigo Oliveira: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>Reply:</strong> <a href="18230.php">Rodrigo Oliveira: "Re: [OMPI users] Checkpoint an MPI process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since you're looking for a function call, I'm going to assume that you
<br>
are writing this application, and it's not a pre-compiled, commercial
<br>
application.  Given that, it's going to be significantly better to have
<br>
an internal application checkpointing mechanism, where it serializes and
<br>
stores the data, etc., than to use an external, applicaiton-agnostic
<br>
checkpointing mechanism like BLCR or similar.  The application should be
<br>
aware of what data is important, how to most efficiently store it, etc.
<br>
&nbsp;A generic library has to assume that everything is important, and store
<br>
it all.
<br>
<p>Don't get me wrong.  Libraries like BLCR are great for applications that
<br>
don't have that visibility, and even as a tool for the
<br>
application-internal checkpointing mechanism (where the application
<br>
deliberately interacts with the library to annotate what's important to
<br>
store, and how to do so, etc.).  But if you're writing the application,
<br>
you're better off to handle it internally, than externally.
<br>
<p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 01/19/2012 08:05 AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Currently Open MPI only supports the checkpointing of the whole
</span><br>
<span class="quotelev1">&gt; application. There has been some work on uncoordinated checkpointing
</span><br>
<span class="quotelev1">&gt; with message logging, though I do not know the state of that work with
</span><br>
<span class="quotelev1">&gt; regards to availability. That work has been undertaken by the University
</span><br>
<span class="quotelev1">&gt; of Tennessee Knoxville, so maybe they can provide more information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 18, 2012 at 3:24 PM, Rodrigo Oliveira
</span><br>
<span class="quotelev1">&gt; &lt;rsilva.oliveira_at_[hidden] &lt;mailto:rsilva.oliveira_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I'd like to know if there is a way to checkpoint a specific process
</span><br>
<span class="quotelev1">&gt;     running under an mpirun call. In other words, is there a function
</span><br>
<span class="quotelev1">&gt;     CHECKPOINT(rank) in which I can pass the rank of the process I want
</span><br>
<span class="quotelev1">&gt;     to checkpoint? I do not want to checkpoint the entire application,
</span><br>
<span class="quotelev1">&gt;     but just one of its processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<li><strong>Next message:</strong> <a href="18216.php">Durga Choudhury: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18214.php">Josh Hursey: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>In reply to:</strong> <a href="18214.php">Josh Hursey: "Re: [OMPI users] Checkpoint an MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18230.php">Rodrigo Oliveira: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>Reply:</strong> <a href="18230.php">Rodrigo Oliveira: "Re: [OMPI users] Checkpoint an MPI process"</a>
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
