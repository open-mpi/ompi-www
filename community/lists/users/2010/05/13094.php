<?
$subject_val = "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 02:40:41 2010" -->
<!-- isoreceived="20100520064041" -->
<!-- sent="Thu, 20 May 2010 08:39:35 +0200" -->
<!-- isosent="20100520063935" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?" -->
<!-- id="AANLkTimx9vfLf-lnqzk_3_yXjFtE_Vt-eegjM4EXx13a_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="60A64243-791E-4A7D-8FCD-94F5B4BFB728_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 02:39:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13095.php">jody: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13093.php">Sang Chul Choi: "[OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>In reply to:</strong> <a href="13093.php">Sang Chul Choi: "[OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13104.php">Sang Chul Choi: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>Reply:</strong> <a href="13104.php">Sang Chul Choi: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
mpirun has an option for this (check the mpirun man page):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-tag-output, --tag-output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tag  each  line  of  output to stdout, stderr, and
<br>
stddiag with [jobid, rank]&lt;stdxxx&gt; indicating the process jobid and
<br>
rank that generated the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output, and the channel which generated it.
<br>
<p>Using this you can filter the entire output by grepping for the required rank.
<br>
<p>Another possibility is to use the option
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-xterm, --xterm &lt;ranks&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Display the specified ranks in separate xterm windows.
<br>
The ranks are specified as a comma-separated list of ranges, with a -1
<br>
indicating  all.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A separate window will be created for each specified
<br>
rank.  Note: In some environments, xterm may require that the
<br>
executable be in the user&#146;s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;path, or be specified in absolute or relative terms.
<br>
Thus, it may be necessary to specify a local executable as &quot;./foo&quot;
<br>
instead of just &quot;foo&quot;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If xterm fails to find the executable, mpirun will hang,
<br>
but still respond correctly to a ctrl-c.  If this happens, please
<br>
check that the exe-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cutable is being specified correctly and try again.
<br>
<p>That way you can open a single terminal window for the process you are
<br>
interested in.
<br>
<p><p>Jody
<br>
<p><p>On Thu, May 20, 2010 at 1:28 AM, Sang Chul Choi &lt;goshng_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am wondering if there is a way to run a particular process among multiple processes on the console of a linux cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to see the screen output (standard output) of a particular process (using a particular ID of a process) on the console screen while the MPI program is running. &#160;I think that if I run a MPI program on a linux cluster using Sun Grid Engine, the particular process that prints out to standard output could run on the console or computing node. &#160; And, it would be hard to see screen output of the particular process. &#160;Is there a way to to set one process aside and to run it on the console in Sun Grid Engine?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run the MPI program on my desktop with quad cores, I can set aside one process using an ID to print information that I need. &#160;I do not know how I could do that in much larger scale like using Sun Grid Engine. &#160;I could let one process print out in a file and then I could see it. &#160;I do not know how I could let one process to print out on the console screen by setting it to run on the console using Sun Grid Engine or any other similar thing such as PBS. &#160;I doubt that a cluster would allow jobs to run on the console because then others users would have to be in trouble in submitting jobs. &#160;If this is the case, there seem no way to print out on the console. &#160; Then, do I have to have a separate (non-MPI) program that can communicate with MPI program using TCP/IP by running the separate program on the master node of a cluster? &#160;This separate non-MPI program may then communicate sporadically with the MPI program. &#160;I do not know if this is a general approach or a peculiar way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will appreciate any of input.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sang Chul
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13095.php">jody: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13093.php">Sang Chul Choi: "[OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>In reply to:</strong> <a href="13093.php">Sang Chul Choi: "[OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13104.php">Sang Chul Choi: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<li><strong>Reply:</strong> <a href="13104.php">Sang Chul Choi: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
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
