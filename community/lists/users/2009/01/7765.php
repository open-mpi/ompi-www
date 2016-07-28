<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 12:32:57 2009" -->
<!-- isoreceived="20090122173257" -->
<!-- sent="Thu, 22 Jan 2009 10:32:48 -0700" -->
<!-- isosent="20090122173248" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="F0CC7CC1-A20F-45F8-8AC1-1A725EBA8950_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0901220626x7fa75af3re29af4558bddb15a_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 12:32:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7766.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="7764.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names"</a>
<li><strong>In reply to:</strong> <a href="7761.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7787.php">Allen Barnett: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....it works fine for me. Note that orte-iof must be executed from  
<br>
the same node as mpirun. Also, ensure that rank=0 is actually the MPI  
<br>
rank that is printing something! Otherwise, nothing will come out.
<br>
<p>It should also be noted that it does take time for you to execute orte- 
<br>
iof, and that orte-iof will not capture any output that precedes its  
<br>
connection with mpirun. Thus, if the output comes out before orte-iof  
<br>
sets up the connection to mpirun, that output will not show up on orte- 
<br>
iof's screen.
<br>
<p>Just as an FYI: you can have mpirun tell you its pid automatically  
<br>
with --report-pid so you don't have to do a ps to find it.
<br>
<p>If you want to write your own, you will need to configure your build -- 
<br>
with-devel-headers. Your program will then need to have the same list  
<br>
of includes as shown in that example code.
<br>
<p>Ralph
<br>
<p>On Jan 22, 2009, at 7:26 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I downloaded 1.3 the day its release was announced :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I now wanted to try it, so i pieced it together from orte-iof --help:
</span><br>
<span class="quotelev1">&gt; - started an mpirun with 4 process
</span><br>
<span class="quotelev1">&gt; - opened a new terminal
</span><br>
<span class="quotelev1">&gt; - did ps to find the mpirun's pid
</span><br>
<span class="quotelev1">&gt; - then: orte-iof --pid 8449 --rank 0 --stdout
</span><br>
<span class="quotelev1">&gt; but nothing happens...
</span><br>
<span class="quotelev1">&gt; So did i misunderstand its usage?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I quickly glanced at the code - i guess
</span><br>
<span class="quotelev1">&gt;  orte_iof.pull(&amp;target_proc, stream, 1)
</span><br>
<span class="quotelev1">&gt; is the heart of the matter. But i was unable to fnd where this
</span><br>
<span class="quotelev1">&gt; orte-iof struct fas actually defined. COUld you give me a hint?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 22, 2009 at 2:33 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If you are willing/able to upgrade to 1.3, you will find a new  
</span><br>
<span class="quotelev2">&gt;&gt; utility
</span><br>
<span class="quotelev2">&gt;&gt; called &quot;ompi-iof&quot;  (or &quot;orte-iof&quot;) that allows you to capture the  
</span><br>
<span class="quotelev2">&gt;&gt; output
</span><br>
<span class="quotelev2">&gt;&gt; from any specified rank or combination of ranks. Note that the  
</span><br>
<span class="quotelev2">&gt;&gt; output is
</span><br>
<span class="quotelev2">&gt;&gt; copied to the tool, so it will also still arrive at the output of  
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want to build your own version of that utility, you can use  
</span><br>
<span class="quotelev2">&gt;&gt; this tool
</span><br>
<span class="quotelev2">&gt;&gt; as an example of how to do it - the source is at orte/tools/orte- 
</span><br>
<span class="quotelev2">&gt;&gt; iof. Feel
</span><br>
<span class="quotelev2">&gt;&gt; free to ask questions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you need to do this with a prior release....well, I'm afraid it  
</span><br>
<span class="quotelev2">&gt;&gt; won't
</span><br>
<span class="quotelev2">&gt;&gt; work. :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2009, at 1:58 AM, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPUs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to be able to observe the output of the processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separately during an mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What i currently do is to apply the mpirun to a shell script which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opens a xterm for each process,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which then starts the actual application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This works, but is a bit complicated, e.g. finding the window you're
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interested in among 19 others.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So i was wondering is there a possibility to capture the processes'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; outputs separately, so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i can make an application in which i can switch between the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor outputs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I could imagine that could be done by wrapper applications which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; redirect the output over a TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket to a server application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But perhaps there is an easier way, or something like this alread  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exist?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7766.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="7764.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names"</a>
<li><strong>In reply to:</strong> <a href="7761.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7787.php">Allen Barnett: "Re: [OMPI users] Handling output of processes"</a>
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
