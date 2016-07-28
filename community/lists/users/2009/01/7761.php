<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 09:26:51 2009" -->
<!-- isoreceived="20090122142651" -->
<!-- sent="Thu, 22 Jan 2009 15:26:46 +0100" -->
<!-- isosent="20090122142646" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="9b0da5ce0901220626x7fa75af3re29af4558bddb15a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BB04B9F1-0C97-458D-BD10-678A280160C5_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Handling output of processes<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 09:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7762.php">Geoffroy Pignot: "[OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="7760.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="7759.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7765.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7765.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I downloaded 1.3 the day its release was announced :)
<br>
<p>I now wanted to try it, so i pieced it together from orte-iof --help:
<br>
- started an mpirun with 4 process
<br>
- opened a new terminal
<br>
- did ps to find the mpirun's pid
<br>
- then: orte-iof --pid 8449 --rank 0 --stdout
<br>
but nothing happens...
<br>
So did i misunderstand its usage?
<br>
<p>I quickly glanced at the code - i guess
<br>
&nbsp;&nbsp;orte_iof.pull(&amp;target_proc, stream, 1)
<br>
is the heart of the matter. But i was unable to fnd where this
<br>
orte-iof struct fas actually defined. COUld you give me a hint?
<br>
<p>Thanks
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Thu, Jan 22, 2009 at 2:33 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; If you are willing/able to upgrade to 1.3, you will find a new utility
</span><br>
<span class="quotelev1">&gt; called &quot;ompi-iof&quot;  (or &quot;orte-iof&quot;) that allows you to capture the output
</span><br>
<span class="quotelev1">&gt; from any specified rank or combination of ranks. Note that the output is
</span><br>
<span class="quotelev1">&gt; copied to the tool, so it will also still arrive at the output of mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to build your own version of that utility, you can use this tool
</span><br>
<span class="quotelev1">&gt; as an example of how to do it - the source is at orte/tools/orte-iof. Feel
</span><br>
<span class="quotelev1">&gt; free to ask questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you need to do this with a prior release....well, I'm afraid it won't
</span><br>
<span class="quotelev1">&gt; work. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2009, at 1:58 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4 CPUs).
</span><br>
<span class="quotelev2">&gt;&gt; I would like to be able to observe the output of the processes
</span><br>
<span class="quotelev2">&gt;&gt; separately during an mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What i currently do is to apply the mpirun to a shell script which
</span><br>
<span class="quotelev2">&gt;&gt; opens a xterm for each process,
</span><br>
<span class="quotelev2">&gt;&gt; which then starts the actual application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This works, but is a bit complicated, e.g. finding the window you're
</span><br>
<span class="quotelev2">&gt;&gt; interested in among 19 others.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So i was wondering is there a possibility to capture the processes'
</span><br>
<span class="quotelev2">&gt;&gt; outputs separately, so
</span><br>
<span class="quotelev2">&gt;&gt; i can make an application in which i can switch between the different
</span><br>
<span class="quotelev2">&gt;&gt; processor outputs?
</span><br>
<span class="quotelev2">&gt;&gt; I could imagine that could be done by wrapper applications which
</span><br>
<span class="quotelev2">&gt;&gt; redirect the output over a TCP
</span><br>
<span class="quotelev2">&gt;&gt; socket to a server application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But perhaps there is an easier way, or something like this alread does
</span><br>
<span class="quotelev2">&gt;&gt; exist?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt;  Jody
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7762.php">Geoffroy Pignot: "[OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="7760.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="7759.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7765.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7765.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
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
