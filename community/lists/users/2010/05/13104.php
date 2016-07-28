<?
$subject_val = "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 09:12:20 2010" -->
<!-- isoreceived="20100520131220" -->
<!-- sent="Thu, 20 May 2010 09:12:11 -0400" -->
<!-- isosent="20100520131211" -->
<!-- name="Sang Chul Choi" -->
<!-- email="goshng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?" -->
<!-- id="E7602FA2-BB0C-4785-A658-94C6809A81C8_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AANLkTimx9vfLf-lnqzk_3_yXjFtE_Vt-eegjM4EXx13a_at_mail.gmail.com" -->
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
<strong>From:</strong> Sang Chul Choi (<em>goshng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 09:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13105.php">Battalgazi YILDIRIM: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13103.php">Jeff Squyres: "Re: [OMPI users] R&#233;p :  openmpi + share points"</a>
<li><strong>In reply to:</strong> <a href="13094.php">jody: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you!
<br>
<p>Sang Chul
<br>
<p>On May 20, 2010, at 2:39 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; mpirun has an option for this (check the mpirun man page):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       -tag-output, --tag-output
</span><br>
<span class="quotelev1">&gt;              Tag  each  line  of  output to stdout, stderr, and
</span><br>
<span class="quotelev1">&gt; stddiag with [jobid, rank]&lt;stdxxx&gt; indicating the process jobid and
</span><br>
<span class="quotelev1">&gt; rank that generated the
</span><br>
<span class="quotelev1">&gt;              output, and the channel which generated it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using this you can filter the entire output by grepping for the required rank.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another possibility is to use the option
</span><br>
<span class="quotelev1">&gt;       -xterm, --xterm &lt;ranks&gt;
</span><br>
<span class="quotelev1">&gt;              Display the specified ranks in separate xterm windows.
</span><br>
<span class="quotelev1">&gt; The ranks are specified as a comma-separated list of ranges, with a -1
</span><br>
<span class="quotelev1">&gt; indicating  all.
</span><br>
<span class="quotelev1">&gt;              A separate window will be created for each specified
</span><br>
<span class="quotelev1">&gt; rank.  Note: In some environments, xterm may require that the
</span><br>
<span class="quotelev1">&gt; executable be in the user&#146;s
</span><br>
<span class="quotelev1">&gt;              path, or be specified in absolute or relative terms.
</span><br>
<span class="quotelev1">&gt; Thus, it may be necessary to specify a local executable as &quot;./foo&quot;
</span><br>
<span class="quotelev1">&gt; instead of just &quot;foo&quot;.
</span><br>
<span class="quotelev1">&gt;              If xterm fails to find the executable, mpirun will hang,
</span><br>
<span class="quotelev1">&gt; but still respond correctly to a ctrl-c.  If this happens, please
</span><br>
<span class="quotelev1">&gt; check that the exe-
</span><br>
<span class="quotelev1">&gt;              cutable is being specified correctly and try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That way you can open a single terminal window for the process you are
</span><br>
<span class="quotelev1">&gt; interested in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 20, 2010 at 1:28 AM, Sang Chul Choi &lt;goshng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am wondering if there is a way to run a particular process among multiple processes on the console of a linux cluster.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I want to see the screen output (standard output) of a particular process (using a particular ID of a process) on the console screen while the MPI program is running.  I think that if I run a MPI program on a linux cluster using Sun Grid Engine, the particular process that prints out to standard output could run on the console or computing node.   And, it would be hard to see screen output of the particular process.  Is there a way to to set one process aside and to run it on the console in Sun Grid Engine?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I run the MPI program on my desktop with quad cores, I can set aside one process using an ID to print information that I need.  I do not know how I could do that in much larger scale like using Sun Grid Engine.  I could let one process print out in a file and then I could see it.  I do not know how I could let one process to print out on the console screen by setting it to run on the console using Sun Grid Engine or any other similar thing such as PBS.  I doubt that a cluster would allow jobs to run on the console because then others users would have to be in trouble in submitting jobs.  If this is the case, there seem no way to print out on the console.   Then, do I have to have a separate (non-MPI) program that can communicate with MPI program using TCP/IP by running the separate program on the master node of a cluster?  This separate non-MPI program may then communicate sporadically with the MPI program.  I do not know if this is a general approach or a peculiar way.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will appreciate any of input.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sang Chul
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="13105.php">Battalgazi YILDIRIM: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13103.php">Jeff Squyres: "Re: [OMPI users] R&#233;p :  openmpi + share points"</a>
<li><strong>In reply to:</strong> <a href="13094.php">jody: "Re: [OMPI users] How to show outputs from MPI program that runs on a cluster?"</a>
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
