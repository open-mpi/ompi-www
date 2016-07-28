<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 15:20:48 2009" -->
<!-- isoreceived="20090126202048" -->
<!-- sent="Mon, 26 Jan 2009 21:20:42 +0100" -->
<!-- isosent="20090126202042" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="9b0da5ce0901261220x6a0c98dfk3410f5c28b097bbb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BFD11BCB-F1BA-431D-8A1E-39B6D33F8A99_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-01-26 15:20:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7843.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7841.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Cannot compile on Linux Itanium system (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="7840.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7843.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7843.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7844.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would rather not have mpirun doing an xhost command - I think that is
</span><br>
<span class="quotelev1">&gt; beyond our comfort zone. Frankly, if someone wants to do this, it is up to
</span><br>
<span class="quotelev1">&gt; them to have things properly setup on their machine - as a rule, we don't
</span><br>
<span class="quotelev1">&gt; mess with your machine's configuration. Makes sys admins upset :-)
</span><br>
So what you mean is that the user must do the xhost before using the
<br>
xceren feature?
<br>
If not, how else can i have xterms from another machine display locally?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I can check to ensure that the DISPLAY value is locally set and
</span><br>
<span class="quotelev1">&gt; automatically export it for you (so you don't have to do the -x DISPLAY
</span><br>
<span class="quotelev1">&gt; option). What I have done is provided a param whereby you can tell us what
</span><br>
<span class="quotelev1">&gt; command to use to generate the new screen, with it defaulting to &quot;xterm -e&quot;.
</span><br>
<span class="quotelev1">&gt; I also allow you to specify which ranks you want displayed this way - you
</span><br>
<span class="quotelev1">&gt; can specify &quot;all&quot; by giving it a &quot;-1&quot;.
</span><br>
Cool!
<br>
<p><span class="quotelev1">&gt; Will hopefully have this done today or tomorrow. It will be in the OMPI
</span><br>
<span class="quotelev1">&gt; trunk repo for now. I'll send out a note pointing to it so people can check
</span><br>
<span class="quotelev1">&gt; all these options out - I would really appreciate the help to ensure things
</span><br>
<span class="quotelev1">&gt; are working across as many platforms as possible before we put it in the
</span><br>
<span class="quotelev1">&gt; official release!
</span><br>
I'll be happy to test these new features!
<br>
<p>Jody
<br>
<p><span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; I have written some shell scripts which ease the output
</span><br>
<span class="quotelev2">&gt;&gt; to an xterm for each processor for normal execution(run_sh.sh),
</span><br>
<span class="quotelev2">&gt;&gt; gdb (run_gdb.sh), and valgrind (run_vg.sh).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In order for the xterms to be shown on your machine,
</span><br>
<span class="quotelev2">&gt;&gt; you have to set the DISPLAY variable on every host
</span><br>
<span class="quotelev2">&gt;&gt; (if this is not done by ssh)
</span><br>
<span class="quotelev2">&gt;&gt;  export DISPLAY=myhost:0.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on myhost you may have to allow access:
</span><br>
<span class="quotelev2">&gt;&gt; do
</span><br>
<span class="quotelev2">&gt;&gt;  xhost +&lt;host-name&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for each machine in your hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then start
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 12 -x DISPLAY run_gdb.sh myApp arg1 arg2 arg3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've attached these little scripts to this mail.
</span><br>
<span class="quotelev2">&gt;&gt; Feel free to use them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've started working on my &quot;complicated&quot; way, i.e.
</span><br>
<span class="quotelev2">&gt;&gt; wrappers redirecting output via sockets to a server.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Jan 25, 2009 at 1:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For those of you following this thread:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been impressed by the various methods used to grab the output from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes. Since this is clearly something of interest to a broad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; audience,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to try and make this easier to do by adding some options to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun. Coming in 1.3.1 will be --tag-output, which will automatically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tag
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each line of output with the rank of the process - this was already in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works, but obviously doesn't meet the needs expressed here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have done some prelim work on a couple of options based on this thread:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. spawn a screen and redirect process output to it, with the ability to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request separate screens for each specified rank. Obviously, specifying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ranks would be the equivalent of replacing &quot;my_app&quot; on the mpirun cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with &quot;xterm my_app&quot;. However, there are cases where you only need to see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output from a subset of the ranks, and that is the intent of this option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. redirect output of specified processes to files using the provided
</span><br>
<span class="quotelev3">&gt;&gt;&gt; filename appended with &quot;.rank&quot;. You can do this for all ranks, or a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specified subset of them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. timestamp output
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there anything else people would like to see?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is also possible to write a dedicated app such as Jody described, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is outside my purview for now due to priorities. However, I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide
</span><br>
<span class="quotelev3">&gt;&gt;&gt; technical advice to such an effort, so feel free to ask.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 23, 2009, at 12:19 PM, Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jody wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4 CPUs).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I would like to be able to observe the output of the processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; separately during an mpirun.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What i currently do is to apply the mpirun to a shell script which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opens a xterm for each process,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which then starts the actual application.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This works, but is a bit complicated, e.g. finding the window you're
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interested in among 19 others.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So i was wondering is there a possibility to capture the processes'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; outputs separately, so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i can make an application in which i can switch between the different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processor outputs?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I could imagine that could be done by wrapper applications which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; redirect the output over a TCP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; socket to a server application.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But perhaps there is an easier way, or something like this alread does
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exist?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For C I use a printf wrapper function that writes the output to a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; logfile.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I derive the name of the logfile from the mpi_id. It prefixes the lines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a time-stamp, so you also get some basic profile information. I can send
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the source code if you like.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gijsbert
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;run_gdb.sh&gt;&lt;run_vg.sh&gt;&lt;run_sh.sh&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="7843.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7841.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Cannot compile on Linux Itanium system (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="7840.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7843.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7843.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7844.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
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
