<?
$subject_val = "Re: [OMPI users] Number of processes and spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  7 05:24:17 2011" -->
<!-- isoreceived="20110307102417" -->
<!-- sent="Mon, 7 Mar 2011 11:24:11 +0100" -->
<!-- isosent="20110307102411" -->
<!-- name="Federico Golfr&#232; Andreasi" -->
<!-- email="federico.golfre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of processes and spawn" -->
<!-- id="AANLkTimYFqXXBC4ku5nam0YAS90GfK8DfNT0yMb-EePd_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0BAF6E84-43AE-4711-8C06-77E2F212E50E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Number of processes and spawn<br>
<strong>From:</strong> Federico Golfr&#232; Andreasi (<em>federico.golfre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-07 05:24:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15805.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15803.php">Dominik Goeddeke: "[OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>In reply to:</strong> <a href="15800.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15805.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="15805.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>thank you very much for the detailed response.
<br>
<p>I have to apologize I was not clear: I would like to use the
<br>
MPI_spawn_multiple function.
<br>
(I've attached the example program I use) .
<br>
<p>In any case I tryed your test program, just compling it with:
<br>
/home/fandreasi/openmpi-1.7/bin/mpicc loop_spawn.c -o loop_spawn
<br>
/home/fandreasi/openmpi-1.7/bin/mpicc loop_child.c -o loop_child
<br>
and execute it on a single machine with
<br>
/home/fandreasi/openmpi-1.7/bin/mpiexec ./loop_spawn ./loop_child
<br>
but it hungs at different loop iterations after printing:
<br>
&quot;Child 26833:exiting&quot;
<br>
but looking at the top both the process (loop_spawn and loop_child) are
<br>
still alive.
<br>
<p>I'm starting thinking that I've some environment setting not correct or I
<br>
need to compile OpenMPI with some options.
<br>
I compile it just setting the --prefix option to the ./configure.
<br>
Do I need to do something else ?
<br>
<p>I have a linux Centos 4, 64 bits machine,
<br>
with gcc 3.4.
<br>
<p>I think that this is my main problem now.
<br>
<p><p><p>Just to answer to other topics (minor):
<br>
- Regardin version mismatch I use a linux cluster where the /home/ directory
<br>
is shared among the compute nodes,
<br>
and I've edited by .bashrc and .bashprofile to export the correct
<br>
LD_LIBRARY_PATH.
<br>
- thank you for the usefull trick about svn.
<br>
<p><p>Thank you very much !!!
<br>
Federico.
<br>
<p><p><p><p><p><p>Il giorno 05 marzo 2011 19:05, Ralph Castain &lt;rhc_at_[hidden]&gt; ha scritto:
<br>
<p><span class="quotelev1">&gt; Hi Federico
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested the trunk today and it works fine for me - I let it spin for 1000
</span><br>
<span class="quotelev1">&gt; cycles without issue. My test program is essentially identical to what you
</span><br>
<span class="quotelev1">&gt; describe - you can see it in the orte/test/mpi directory. The &quot;master&quot; is
</span><br>
<span class="quotelev1">&gt; loop_spawn.c, and the &quot;slave&quot; is loop_child.c. I only tested it on a single
</span><br>
<span class="quotelev1">&gt; machine, though - will have to test multi-machine later. You might see if
</span><br>
<span class="quotelev1">&gt; that makes a difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error you report in your attachment is a classic symptom of mismatched
</span><br>
<span class="quotelev1">&gt; versions. Remember, we don't forward your ld_lib_path, so it has to be
</span><br>
<span class="quotelev1">&gt; correct on your remote machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for r22794 - we don't keep anything that old on our web site. If you
</span><br>
<span class="quotelev1">&gt; want to build it, the best way to get the code is to do a subversion
</span><br>
<span class="quotelev1">&gt; checkout of the developer's trunk at that revision level:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; svn co -r 22794 <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remember to run autogen before configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 4, 2011, at 4:43 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting stuck with spawning stuff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've downloaded the snapshot from the trunk of 1st of March (
</span><br>
<span class="quotelev1">&gt; openmpi-1.7a1r24472.tar.bz2),
</span><br>
<span class="quotelev1">&gt; I'm testing using a small program that does the following:
</span><br>
<span class="quotelev1">&gt;  - master program starts and each rank prints his hostsname
</span><br>
<span class="quotelev1">&gt;  - master program spawn a slave program with the same size
</span><br>
<span class="quotelev1">&gt;  - each rank of the slave (spawned) program prints his hostname
</span><br>
<span class="quotelev1">&gt;  - end
</span><br>
<span class="quotelev1">&gt; Not always he is able to complete the progam run, two different behaviour:
</span><br>
<span class="quotelev1">&gt;  1. not all the slave print their hostname and the program ends suddenly
</span><br>
<span class="quotelev1">&gt;  2. both program ends correctly but orted demon is still alive and I need
</span><br>
<span class="quotelev1">&gt; to press crtl-c to exit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tryed to recompile my test program with a previous snapshot
</span><br>
<span class="quotelev1">&gt; (openmpi-1.7a1r22794.tar.bz2)
</span><br>
<span class="quotelev1">&gt; where I have only the compiled version of OpenMPI (in another machine).
</span><br>
<span class="quotelev1">&gt; It gives me an error before starting (I've attacehd)
</span><br>
<span class="quotelev1">&gt; Surfing on the FAQ I found some tip and I verified to compile the program
</span><br>
<span class="quotelev1">&gt; with the correct OpenMPI version,
</span><br>
<span class="quotelev1">&gt; that the LD_LIBRARY_PATH is consistent.
</span><br>
<span class="quotelev1">&gt; So I would like to re-compile the openmpi-1.7a1r22794.tar.bz2 but where
</span><br>
<span class="quotelev1">&gt; can I found it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Federico
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
<span class="quotelev1">&gt; Il giorno 23 febbraio 2011 03:43, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; ha
</span><br>
<span class="quotelev1">&gt; scritto:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Apparently not. I will investigate when I return from vacation next week.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 22, 2011, at 12:42 AM, Federico Golfr&#232; Andreasi &lt;
</span><br>
<span class="quotelev2">&gt;&gt; federico.golfre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralf,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tested spawning with the OpenMPI 1.5 release but that fix is not
</span><br>
<span class="quotelev2">&gt;&gt; there.
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure you've added it ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Federico
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010/10/19 Ralph Castain &lt; &lt;rhc_at_[hidden]&gt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The fix should be there - just didn't get mentioned.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me know if it isn't and I'll ensure it is in the next one...but I'd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be very surprised if it isn't already in there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 19, 2010, at 3:03 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralf !
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I saw that the new realease 1.5 is out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't found this fix in the &quot;list of changes&quot;, is it present but not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mentioned since is a minor fix ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Federico
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2010/4/1 Ralph Castain &lt; &lt;rhc_at_[hidden]&gt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi there!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It will be in the 1.5.0 release, but not 1.4.2 (couldn't backport the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fix). I understand that will come out sometime soon, but no firm date has
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; been set.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 1, 2010, at 4:05 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          I've downloaded and tested the openmpi-1.7a1r22817 snapshot,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and it works fine for (multiple) spawning more than 128 processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That fix will be included in the next release of OpenMPI, right ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you when it will be released ? Or where I can find that info ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Federico
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2010/3/1 Ralph Castain &lt; &lt;rhc_at_[hidden]&gt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm not sure this patch will solve your problem, but it is worth a try.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;users_at_[hidden]&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  &lt;users_at_[hidden]&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;users_at_[hidden]&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &lt;users_at_[hidden]&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;OpenMPI.error&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15804/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15804/master.cpp">master.cpp</a>
</ul>
<!-- attachment="master.cpp" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15804/slave.cpp">slave.cpp</a>
</ul>
<!-- attachment="slave.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15805.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15803.php">Dominik Goeddeke: "[OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>In reply to:</strong> <a href="15800.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15805.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="15805.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
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
