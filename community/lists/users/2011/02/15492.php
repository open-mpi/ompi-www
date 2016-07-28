<?
$subject_val = "Re: [OMPI users] Calculate time spent on non blocking communication?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 19:17:00 2011" -->
<!-- isoreceived="20110203001700" -->
<!-- sent="Wed, 2 Feb 2011 19:16:47 -0500" -->
<!-- isosent="20110203001647" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calculate time spent on non blocking communication?" -->
<!-- id="DFF64EAC-C6AE-4B72-B9B8-18EC1D42C13F_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=nDnGFETpU=xCU+ZCX2yX50uFk7BCRExgGjvrK_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calculate time spent on non blocking communication?<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 19:16:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15493.php">Jeff Squyres: "Re: [OMPI users] OpenMPI version syntax?"</a>
<li><strong>Previous message:</strong> <a href="15491.php">David Zhang: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>In reply to:</strong> <a href="15479.php">Bibrak Qamar: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15494.php">Eugene Loh: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>Reply:</strong> <a href="15494.php">Eugene Loh: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 2, 2011, at 7:35 AM, Bibrak Qamar wrote:
<br>
<p><span class="quotelev1">&gt; Gus Correa, But it will include the time of computation which took place before waitAll( ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Correct.
<br>
Now I realize you want the communication time only,
<br>
not the overall time.
<br>
<p>Even to define precisely what this means may be a bit tricky.
<br>
I guess Eugene Loh was hinting this difficulty.
<br>
<p>Is it the time MPI_Isend takes to return?
<br>
It returns as soon as the send is posted, I think,
<br>
but this doesn't mean that the message was received at the other end,
<br>
or that you are free to use the send buffer either.
<br>
You could do it with 
<br>
start=MPI_Wtime()
<br>
call MPI_Isend(...)
<br>
end=MPI_Wtime()
<br>
but this may not be very useful.
<br>
<p>Is it the time until MPI_[I]recv returns?
<br>
Well, that one could be measured the way I suggested,
<br>
but it will probably contain also time used to compute.
<br>
<p>Is it something else, perhaps?
<br>
<p>My guess is that it may be hard to nail down communication time alone, 
<br>
particularly in non-blocking case,
<br>
at least if you try to get it only with MPI calls.
<br>
Non-blocking is really designed to overlap communication and computation,
<br>
not to separate them.
<br>
Also, I guess MPI itself doesn't give user access to the details of *how* it 
<br>
provides communication, timing information included.
<br>
However, OpenMPI may give this info, with non-MPI (hence non-portable) functions, I'd guess.
<br>
<p>Have you tried inserting MPI_Test calls as Jeff suggested? 
<br>
(Perhaps along with MPI_Wtime)
<br>
<p>Maybe there is more timing information available outside MPI,
<br>
at another  OpenMPI internal level.
<br>
Perhaps this is accessible from  within the program, via non-MPI calls,
<br>
but I don't really know.
<br>
Maybe the OpenMPI developers have a hint.
<br>
Have you read Eugene Loh's suggestions?
<br>
<p>Now I am asking more questions than answering anything. :)
<br>
<p>Gus Correa
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Date: Tue, 1 Feb 2011 10:09:03 +0400
</span><br>
<span class="quotelev1">&gt; From: Bibrak Qamar &lt;bibrakc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Calculate time spent on non blocking
</span><br>
<span class="quotelev1">&gt;        communication?
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;AANLkTinewz_xYx88PgouojvogAF6Ld8NwF_nCHsY0rf6_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using non-blocking send and receive, and i want to calculate the time
</span><br>
<span class="quotelev1">&gt; it took for the communication. Is there any method or a way to do this using
</span><br>
<span class="quotelev1">&gt; openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Bibrak Qamar
</span><br>
<span class="quotelev1">&gt; Undergraduate Student BIT-9
</span><br>
<span class="quotelev1">&gt; Member Center for High Performance Scientific Computing
</span><br>
<span class="quotelev1">&gt; NUST-School of Electrical Engineering and Computer Science.
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Mon, 31 Jan 2011 22:14:53 -0800
</span><br>
<span class="quotelev1">&gt; From: Eugene Loh &lt;eugene.loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Calculate time spent on non blocking
</span><br>
<span class="quotelev1">&gt;        communication?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4D47A4DD.5010106_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bibrak Qamar wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using non-blocking send and receive, and i want to calculate the
</span><br>
<span class="quotelev2">&gt; &gt; time it took for the communication. Is there any method or a way to do
</span><br>
<span class="quotelev2">&gt; &gt; this using openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You probably have to start by defining what you mean by &quot;the time it
</span><br>
<span class="quotelev1">&gt; took for the communication&quot;.  Anyhow, the Peruse instrumentation in OMPI
</span><br>
<span class="quotelev1">&gt; might help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Tue, 1 Feb 2011 01:20:36 -0500
</span><br>
<span class="quotelev1">&gt; From: Gustavo Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Calculate time spent on non blocking
</span><br>
<span class="quotelev1">&gt;        communication?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;8F16054C-6FCA-4E65-9C83-5EFBFCB18DB7_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 1, 2011, at 1:09 AM, Bibrak Qamar wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using non-blocking send and receive, and i want to calculate the time it took for the communication. Is there any method or a way to do this using openmpi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Bibrak Qamar
</span><br>
<span class="quotelev2">&gt; &gt; Undergraduate Student BIT-9
</span><br>
<span class="quotelev2">&gt; &gt; Member Center for High Performance Scientific Computing
</span><br>
<span class="quotelev2">&gt; &gt; NUST-School of Electrical Engineering and Computer Science.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; About the same as with blocking communication, I guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would this do work for you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; start=MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; MPI_Isend(...)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; MPI_Irecv(...)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; MPI_Wait[all](...)
</span><br>
<span class="quotelev1">&gt; end=MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; print *, 'walltime = ', end-start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="15493.php">Jeff Squyres: "Re: [OMPI users] OpenMPI version syntax?"</a>
<li><strong>Previous message:</strong> <a href="15491.php">David Zhang: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>In reply to:</strong> <a href="15479.php">Bibrak Qamar: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15494.php">Eugene Loh: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>Reply:</strong> <a href="15494.php">Eugene Loh: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
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
