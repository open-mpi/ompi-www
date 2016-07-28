<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 03:11:18 2009" -->
<!-- isoreceived="20090126081118" -->
<!-- sent="Mon, 26 Jan 2009 09:11:13 +0100" -->
<!-- isosent="20090126081113" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="9b0da5ce0901260011s681066afq517440716847524f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25C281B0-74CD-47CF-8FAA-0A9A17A5A352_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-01-26 03:11:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7821.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7819.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>In reply to:</strong> <a href="7819.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7840.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7840.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I have written some shell scripts which ease the output
<br>
to an xterm for each processor for normal execution(run_sh.sh),
<br>
gdb (run_gdb.sh), and valgrind (run_vg.sh).
<br>
<p>In order for the xterms to be shown on your machine,
<br>
you have to set the DISPLAY variable on every host
<br>
(if this is not done by ssh)
<br>
&nbsp;&nbsp;export DISPLAY=myhost:0.0
<br>
<p>on myhost you may have to allow access:
<br>
do
<br>
&nbsp;&nbsp;xhost +&lt;host-name&gt;
<br>
for each machine in your hostfile.
<br>
<p>Then start
<br>
&nbsp;&nbsp;mpirun -np 12 -x DISPLAY run_gdb.sh myApp arg1 arg2 arg3
<br>
<p>I've attached these little scripts to this mail.
<br>
Feel free to use them.
<br>
<p>I've started working on my &quot;complicated&quot; way, i.e.
<br>
wrappers redirecting output via sockets to a server.
<br>
<p>Jody
<br>
<p>On Sun, Jan 25, 2009 at 1:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; For those of you following this thread:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been impressed by the various methods used to grab the output from
</span><br>
<span class="quotelev1">&gt; processes. Since this is clearly something of interest to a broad audience,
</span><br>
<span class="quotelev1">&gt; I would like to try and make this easier to do by adding some options to
</span><br>
<span class="quotelev1">&gt; mpirun. Coming in 1.3.1 will be --tag-output, which will automatically tag
</span><br>
<span class="quotelev1">&gt; each line of output with the rank of the process - this was already in the
</span><br>
<span class="quotelev1">&gt; works, but obviously doesn't meet the needs expressed here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have done some prelim work on a couple of options based on this thread:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. spawn a screen and redirect process output to it, with the ability to
</span><br>
<span class="quotelev1">&gt; request separate screens for each specified rank. Obviously, specifying all
</span><br>
<span class="quotelev1">&gt; ranks would be the equivalent of replacing &quot;my_app&quot; on the mpirun cmd line
</span><br>
<span class="quotelev1">&gt; with &quot;xterm my_app&quot;. However, there are cases where you only need to see the
</span><br>
<span class="quotelev1">&gt; output from a subset of the ranks, and that is the intent of this option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. redirect output of specified processes to files using the provided
</span><br>
<span class="quotelev1">&gt; filename appended with &quot;.rank&quot;. You can do this for all ranks, or a
</span><br>
<span class="quotelev1">&gt; specified subset of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. timestamp output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything else people would like to see?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is also possible to write a dedicated app such as Jody described, but
</span><br>
<span class="quotelev1">&gt; that is outside my purview for now due to priorities. However, I can provide
</span><br>
<span class="quotelev1">&gt; technical advice to such an effort, so feel free to ask.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2009, at 12:19 PM, Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4 CPUs).
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
<span class="quotelev3">&gt;&gt;&gt; i can make an application in which i can switch between the different
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
<span class="quotelev3">&gt;&gt;&gt; But perhaps there is an easier way, or something like this alread does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exist?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For C I use a printf wrapper function that writes the output to a logfile.
</span><br>
<span class="quotelev2">&gt;&gt; I derive the name of the logfile from the mpi_id. It prefixes the lines with
</span><br>
<span class="quotelev2">&gt;&gt; a time-stamp, so you also get some basic profile information. I can send you
</span><br>
<span class="quotelev2">&gt;&gt; the source code if you like.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Gijsbert
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
<p>


<br><hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7820/run_gdb.sh">run_gdb.sh</a>
</ul>
<!-- attachment="run_gdb.sh" -->
<hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7820/run_vg.sh">run_vg.sh</a>
</ul>
<!-- attachment="run_vg.sh" -->
<hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7820/run_sh.sh">run_sh.sh</a>
</ul>
<!-- attachment="run_sh.sh" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7821.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7819.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>In reply to:</strong> <a href="7819.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7840.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7840.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
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
