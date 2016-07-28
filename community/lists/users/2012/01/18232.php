<?
$subject_val = "Re: [OMPI users] Checkpoint an MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 09:13:14 2012" -->
<!-- isoreceived="20120120141314" -->
<!-- sent="Fri, 20 Jan 2012 09:13:08 -0500" -->
<!-- isosent="20120120141308" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint an MPI process" -->
<!-- id="CAANzjE=Rx58G4whgqUhSnsQ1OSd6m_4fxX7coGuQvCmKvP-hGg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABm3_qonweE3veR1CfWL7FM6rhNQG1AXRy13YpaxWO_Chm7G1A_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 09:13:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18233.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Previous message:</strong> <a href="18231.php">Jens J&#248;rgen Mortensen: "[OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>In reply to:</strong> <a href="18230.php">Rodrigo Oliveira: "Re: [OMPI users] Checkpoint an MPI process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rodrigo,
<br>
<p>Open MPI has the ability to migrate a subset of processes (in the trunk -
<br>
though currently broken due to recent code movement, I'm slowing developing
<br>
the fix in my spare time). The current implementation only checkpoints the
<br>
migrating processes, but suspends all other processes during the migration
<br>
activity. There has been some work on providing more of a live migration
<br>
mechanism in Open MPI (where non-migrating processes are not suspended),
<br>
but I do not know the state of that work. The original work was integrated
<br>
into LAM/MPI by Chao Wang and Frank Mueller at North Carolina State
<br>
University and depended on some, yet, unreleased features of BLCR.
<br>
<p>Open MPI also has the ability to suspend a job via SIGSTOP/SIGCONT without
<br>
the need for checkpoint, but it applies to the whole job. A while back, I
<br>
enhanced that feature such that a checkpoint is established before the
<br>
SIGSTOP is processed, so that a user can terminate and restart the job if
<br>
they wish instead of just being able to SIGCONT.
<br>
<p>So these features are not quite what you are looking for, but could be used
<br>
as a starting point for future development if someone was so motivated. A
<br>
short term alternative is to use a virtual machine that provides the
<br>
migration functionality you are looking for, though at the additional cost
<br>
of a virtual machine interposition layer.
<br>
<p>-- Josh
<br>
<p>On Fri, Jan 20, 2012 at 8:31 AM, Rodrigo Oliveira &lt;rsilva.oliveira_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I appreciate your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, it's better to create my own mechanism as mentioned
</span><br>
<span class="quotelev1">&gt; Lloyd. Actually my application is a framework to stream processing
</span><br>
<span class="quotelev1">&gt; (something like IBM System-S), in which I use Open MPI as communication
</span><br>
<span class="quotelev1">&gt; layer and part of process management. One of this framework's features is
</span><br>
<span class="quotelev1">&gt; to provide a dynamic load balance mechanism. In some situations I need to
</span><br>
<span class="quotelev1">&gt; move processes between machines or temporally suspend their execution. To
</span><br>
<span class="quotelev1">&gt; achieve this, I need a checkpoint/restart mechanism. It is the reason of my
</span><br>
<span class="quotelev1">&gt; question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rodrigo Silva Oliveira
</span><br>
<span class="quotelev1">&gt; M.Sc. Student - Computer Science
</span><br>
<span class="quotelev1">&gt; Universidade Federal de Minas Gerais
</span><br>
<span class="quotelev1">&gt; www.dcc.ufmg.br/~rsilva &lt;<a href="http://www.dcc.ufmg.br/%7Ersilva">http://www.dcc.ufmg.br/%7Ersilva</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 19, 2012 at 1:18 PM, Lloyd Brown &lt;lloyd_brown_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since you're looking for a function call, I'm going to assume that you
</span><br>
<span class="quotelev2">&gt;&gt; are writing this application, and it's not a pre-compiled, commercial
</span><br>
<span class="quotelev2">&gt;&gt; application.  Given that, it's going to be significantly better to have
</span><br>
<span class="quotelev2">&gt;&gt; an internal application checkpointing mechanism, where it serializes and
</span><br>
<span class="quotelev2">&gt;&gt; stores the data, etc., than to use an external, applicaiton-agnostic
</span><br>
<span class="quotelev2">&gt;&gt; checkpointing mechanism like BLCR or similar.  The application should be
</span><br>
<span class="quotelev2">&gt;&gt; aware of what data is important, how to most efficiently store it, etc.
</span><br>
<span class="quotelev2">&gt;&gt;  A generic library has to assume that everything is important, and store
</span><br>
<span class="quotelev2">&gt;&gt; it all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Don't get me wrong.  Libraries like BLCR are great for applications that
</span><br>
<span class="quotelev2">&gt;&gt; don't have that visibility, and even as a tool for the
</span><br>
<span class="quotelev2">&gt;&gt; application-internal checkpointing mechanism (where the application
</span><br>
<span class="quotelev2">&gt;&gt; deliberately interacts with the library to annotate what's important to
</span><br>
<span class="quotelev2">&gt;&gt; store, and how to do so, etc.).  But if you're writing the application,
</span><br>
<span class="quotelev2">&gt;&gt; you're better off to handle it internally, than externally.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lloyd Brown
</span><br>
<span class="quotelev2">&gt;&gt; Systems Administrator
</span><br>
<span class="quotelev2">&gt;&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev2">&gt;&gt; Brigham Young University
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 01/19/2012 08:05 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Currently Open MPI only supports the checkpointing of the whole
</span><br>
<span class="quotelev3">&gt;&gt; &gt; application. There has been some work on uncoordinated checkpointing
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with message logging, though I do not know the state of that work with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; regards to availability. That work has been undertaken by the University
</span><br>
<span class="quotelev3">&gt;&gt; &gt; of Tennessee Knoxville, so maybe they can provide more information.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Wed, Jan 18, 2012 at 3:24 PM, Rodrigo Oliveira
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;rsilva.oliveira_at_[hidden] &lt;mailto:rsilva.oliveira_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     I'd like to know if there is a way to checkpoint a specific process
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     running under an mpirun call. In other words, is there a function
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     CHECKPOINT(rank) in which I can pass the rank of the process I want
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     to checkpoint? I do not want to checkpoint the entire application,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     but just one of its processes.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18232/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18233.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Previous message:</strong> <a href="18231.php">Jens J&#248;rgen Mortensen: "[OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>In reply to:</strong> <a href="18230.php">Rodrigo Oliveira: "Re: [OMPI users] Checkpoint an MPI process"</a>
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
