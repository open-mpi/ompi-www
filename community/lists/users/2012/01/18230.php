<?
$subject_val = "Re: [OMPI users] Checkpoint an MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 08:31:17 2012" -->
<!-- isoreceived="20120120133117" -->
<!-- sent="Fri, 20 Jan 2012 11:31:12 -0200" -->
<!-- isosent="20120120133112" -->
<!-- name="Rodrigo Oliveira" -->
<!-- email="rsilva.oliveira_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint an MPI process" -->
<!-- id="CABm3_qonweE3veR1CfWL7FM6rhNQG1AXRy13YpaxWO_Chm7G1A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F183449.7040100_at_byu.edu" -->
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
<strong>From:</strong> Rodrigo Oliveira (<em>rsilva.oliveira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 08:31:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18231.php">Jens Jørgen Mortensen: "[OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Previous message:</strong> <a href="18229.php">Randolph Pullen: "Re: [OMPI users] Fw:  system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18215.php">Lloyd Brown: "Re: [OMPI users] Checkpoint an MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18232.php">Josh Hursey: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>Reply:</strong> <a href="18232.php">Josh Hursey: "Re: [OMPI users] Checkpoint an MPI process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I appreciate your help.
<br>
<p>Indeed, it's better to create my own mechanism as mentioned Lloyd. Actually
<br>
my application is a framework to stream processing (something like IBM
<br>
System-S), in which I use Open MPI as communication layer and part of
<br>
process management. One of this framework's features is to provide a
<br>
dynamic load balance mechanism. In some situations I need to move processes
<br>
between machines or temporally suspend their execution. To achieve this, I
<br>
need a checkpoint/restart mechanism. It is the reason of my question.
<br>
<p>Thanks again.
<br>
<p><p>Rodrigo Silva Oliveira
<br>
M.Sc. Student - Computer Science
<br>
Universidade Federal de Minas Gerais
<br>
www.dcc.ufmg.br/~rsilva &lt;<a href="http://www.dcc.ufmg.br/%7Ersilva">http://www.dcc.ufmg.br/%7Ersilva</a>&gt;
<br>
<p><p><p><p>On Thu, Jan 19, 2012 at 1:18 PM, Lloyd Brown &lt;lloyd_brown_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Since you're looking for a function call, I'm going to assume that you
</span><br>
<span class="quotelev1">&gt; are writing this application, and it's not a pre-compiled, commercial
</span><br>
<span class="quotelev1">&gt; application.  Given that, it's going to be significantly better to have
</span><br>
<span class="quotelev1">&gt; an internal application checkpointing mechanism, where it serializes and
</span><br>
<span class="quotelev1">&gt; stores the data, etc., than to use an external, applicaiton-agnostic
</span><br>
<span class="quotelev1">&gt; checkpointing mechanism like BLCR or similar.  The application should be
</span><br>
<span class="quotelev1">&gt; aware of what data is important, how to most efficiently store it, etc.
</span><br>
<span class="quotelev1">&gt;  A generic library has to assume that everything is important, and store
</span><br>
<span class="quotelev1">&gt; it all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't get me wrong.  Libraries like BLCR are great for applications that
</span><br>
<span class="quotelev1">&gt; don't have that visibility, and even as a tool for the
</span><br>
<span class="quotelev1">&gt; application-internal checkpointing mechanism (where the application
</span><br>
<span class="quotelev1">&gt; deliberately interacts with the library to annotate what's important to
</span><br>
<span class="quotelev1">&gt; store, and how to do so, etc.).  But if you're writing the application,
</span><br>
<span class="quotelev1">&gt; you're better off to handle it internally, than externally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lloyd Brown
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev1">&gt; Brigham Young University
</span><br>
<span class="quotelev1">&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 01/19/2012 08:05 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Currently Open MPI only supports the checkpointing of the whole
</span><br>
<span class="quotelev2">&gt; &gt; application. There has been some work on uncoordinated checkpointing
</span><br>
<span class="quotelev2">&gt; &gt; with message logging, though I do not know the state of that work with
</span><br>
<span class="quotelev2">&gt; &gt; regards to availability. That work has been undertaken by the University
</span><br>
<span class="quotelev2">&gt; &gt; of Tennessee Knoxville, so maybe they can provide more information.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan 18, 2012 at 3:24 PM, Rodrigo Oliveira
</span><br>
<span class="quotelev2">&gt; &gt; &lt;rsilva.oliveira_at_[hidden] &lt;mailto:rsilva.oliveira_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     I'd like to know if there is a way to checkpoint a specific process
</span><br>
<span class="quotelev2">&gt; &gt;     running under an mpirun call. In other words, is there a function
</span><br>
<span class="quotelev2">&gt; &gt;     CHECKPOINT(rank) in which I can pass the rank of the process I want
</span><br>
<span class="quotelev2">&gt; &gt;     to checkpoint? I do not want to checkpoint the entire application,
</span><br>
<span class="quotelev2">&gt; &gt;     but just one of its processes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;     users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18230/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18231.php">Jens Jørgen Mortensen: "[OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Previous message:</strong> <a href="18229.php">Randolph Pullen: "Re: [OMPI users] Fw:  system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18215.php">Lloyd Brown: "Re: [OMPI users] Checkpoint an MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18232.php">Josh Hursey: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>Reply:</strong> <a href="18232.php">Josh Hursey: "Re: [OMPI users] Checkpoint an MPI process"</a>
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
