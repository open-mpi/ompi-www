<?
$subject_val = "Re: [OMPI users] Calculate time spent on non blocking communication?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 07:35:31 2011" -->
<!-- isoreceived="20110202123531" -->
<!-- sent="Wed, 2 Feb 2011 16:35:26 +0400" -->
<!-- isosent="20110202123526" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calculate time spent on non blocking communication?" -->
<!-- id="AANLkTi=nDnGFETpU=xCU+ZCX2yX50uFk7BCRExgGjvrK_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinewz_xYx88PgouojvogAF6Ld8NwF_nCHsY0rf6_at_mail.gmail.com" -->
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
<strong>From:</strong> Bibrak Qamar (<em>bibrakc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 07:35:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15480.php">Jeff Squyres: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>Previous message:</strong> <a href="15478.php">Bibrak Qamar: "[OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>In reply to:</strong> <a href="15457.php">Bibrak Qamar: "[OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15483.php">Eugene Loh: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>Reply:</strong> <a href="15483.php">Eugene Loh: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>Reply:</strong> <a href="15492.php">Gustavo Correa: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa, But it will include the time of computation which took place
<br>
before waitAll( ).
<br>
<p><p>Date: Tue, 1 Feb 2011 10:09:03 +0400
<br>
From: Bibrak Qamar &lt;bibrakc_at_[hidden]&gt;
<br>
Subject: [OMPI users] Calculate time spent on non blocking
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;communication?
<br>
To: users_at_[hidden]
<br>
Message-ID:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;AANLkTinewz_xYx88PgouojvogAF6Ld8NwF_nCHsY0rf6_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
<br>
<p>Hello All,
<br>
<p>I am using non-blocking send and receive, and i want to calculate the time
<br>
it took for the communication. Is there any method or a way to do this using
<br>
openmpi.
<br>
<p>Thanks
<br>
Bibrak Qamar
<br>
Undergraduate Student BIT-9
<br>
Member Center for High Performance Scientific Computing
<br>
NUST-School of Electrical Engineering and Computer Science.
<br>
-------------- next part --------------
<br>
HTML attachment scrubbed and removed
<br>
<p>------------------------------
<br>
<p>Message: 4
<br>
Date: Mon, 31 Jan 2011 22:14:53 -0800
<br>
From: Eugene Loh &lt;eugene.loh_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Calculate time spent on non blocking
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;communication?
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;4D47A4DD.5010106_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=ISO-8859-1; format=flowed
<br>
<p>Bibrak Qamar wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using non-blocking send and receive, and i want to calculate the
</span><br>
<span class="quotelev1">&gt; time it took for the communication. Is there any method or a way to do
</span><br>
<span class="quotelev1">&gt; this using openmpi.
</span><br>
<p>You probably have to start by defining what you mean by &quot;the time it
<br>
took for the communication&quot;.  Anyhow, the Peruse instrumentation in OMPI
<br>
might help.
<br>
<p><p>------------------------------
<br>
<p>Message: 5
<br>
Date: Tue, 1 Feb 2011 01:20:36 -0500
<br>
From: Gustavo Correa &lt;gus_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Calculate time spent on non blocking
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;communication?
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;8F16054C-6FCA-4E65-9C83-5EFBFCB18DB7_at_[hidden]
<br>
<span class="quotelev1">&gt;
</span><br>
Content-Type: text/plain; charset=us-ascii
<br>
<p><p>On Feb 1, 2011, at 1:09 AM, Bibrak Qamar wrote:
<br>
<p><p><p><p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using non-blocking send and receive, and i want to calculate the time
</span><br>
it took for the communication. Is there any method or a way to do this using
<br>
openmpi.
<br>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<p>About the same as with blocking communication, I guess.
<br>
<p>Would this do work for you?
<br>
<p>start=MPI_Wtime()
<br>
MPI_Isend(...)
<br>
...
<br>
MPI_Irecv(...)
<br>
...
<br>
MPI_Wait[all](...)
<br>
end=MPI_Wtime()
<br>
print *, 'walltime = ', end-start
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15479/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15480.php">Jeff Squyres: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>Previous message:</strong> <a href="15478.php">Bibrak Qamar: "[OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>In reply to:</strong> <a href="15457.php">Bibrak Qamar: "[OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15483.php">Eugene Loh: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>Reply:</strong> <a href="15483.php">Eugene Loh: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>Reply:</strong> <a href="15492.php">Gustavo Correa: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
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
