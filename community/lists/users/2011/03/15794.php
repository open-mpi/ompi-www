<?
$subject_val = "Re: [OMPI users] Number of processes and spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  4 06:43:53 2011" -->
<!-- isoreceived="20110304114353" -->
<!-- sent="Fri, 4 Mar 2011 12:43:48 +0100" -->
<!-- isosent="20110304114348" -->
<!-- name="Federico Golfr&#232; Andreasi" -->
<!-- email="federico.golfre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of processes and spawn" -->
<!-- id="AANLkTikFspkASzKQoE6ivDQ+i6_W5DEMZQ1-zA7ktqGd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="62666D3E-A831-49BE-9F66-BCD3328C3F97_at_gmail.com" -->
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
<strong>Date:</strong> 2011-03-04 06:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15795.php">Youri LACAN-BARTLEY: "[OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Previous message:</strong> <a href="15793.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12164.php">Federico Golfr&#232; Andreasi: "[OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15800.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="15800.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I'm getting stuck with spawning stuff,
<br>
<p>I've downloaded the snapshot from the trunk of 1st of March (
<br>
openmpi-1.7a1r24472.tar.bz2),
<br>
I'm testing using a small program that does the following:
<br>
&nbsp;- master program starts and each rank prints his hostsname
<br>
&nbsp;- master program spawn a slave program with the same size
<br>
&nbsp;- each rank of the slave (spawned) program prints his hostname
<br>
&nbsp;- end
<br>
Not always he is able to complete the progam run, two different behaviour:
<br>
&nbsp;1. not all the slave print their hostname and the program ends suddenly
<br>
&nbsp;2. both program ends correctly but orted demon is still alive and I need to
<br>
press crtl-c to exit
<br>
<p><p>I've tryed to recompile my test program with a previous snapshot
<br>
(openmpi-1.7a1r22794.tar.bz2)
<br>
where I have only the compiled version of OpenMPI (in another machine).
<br>
It gives me an error before starting (I've attacehd)
<br>
Surfing on the FAQ I found some tip and I verified to compile the program
<br>
with the correct OpenMPI version,
<br>
that the LD_LIBRARY_PATH is consistent.
<br>
So I would like to re-compile the openmpi-1.7a1r22794.tar.bz2 but where can
<br>
I found it ?
<br>
<p><p>Thank you,
<br>
Federico
<br>
<p><p><p><p><p><p><p><p><p><p>Il giorno 23 febbraio 2011 03:43, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; ha
<br>
scritto:
<br>
<p><span class="quotelev1">&gt; Apparently not. I will investigate when I return from vacation next week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 22, 2011, at 12:42 AM, Federico Golfr&#232; Andreasi &lt;
</span><br>
<span class="quotelev1">&gt; federico.golfre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tested spawning with the OpenMPI 1.5 release but that fix is not
</span><br>
<span class="quotelev1">&gt; there.
</span><br>
<span class="quotelev1">&gt; Are you sure you've added it ?
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
<span class="quotelev1">&gt; 2010/10/19 Ralph Castain &lt; &lt;rhc_at_[hidden]&gt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The fix should be there - just didn't get mentioned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if it isn't and I'll ensure it is in the next one...but I'd be
</span><br>
<span class="quotelev2">&gt;&gt; very surprised if it isn't already in there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 19, 2010, at 3:03 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralf !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I saw that the new realease 1.5 is out.
</span><br>
<span class="quotelev2">&gt;&gt; I didn't found this fix in the &quot;list of changes&quot;, is it present but not
</span><br>
<span class="quotelev2">&gt;&gt; mentioned since is a minor fix ?
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
<span class="quotelev2">&gt;&gt; 2010/4/1 Ralph Castain &lt; &lt;rhc_at_[hidden]&gt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi there!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It will be in the 1.5.0 release, but not 1.4.2 (couldn't backport the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fix). I understand that will come out sometime soon, but no firm date has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been set.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 1, 2010, at 4:05 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          I've downloaded and tested the openmpi-1.7a1r22817 snapshot,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and it works fine for (multiple) spawning more than 128 processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That fix will be included in the next release of OpenMPI, right ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you when it will be released ? Or where I can find that info ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Federico
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2010/3/1 Ralph Castain &lt; &lt;rhc_at_[hidden]&gt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not sure this patch will solve your problem, but it is worth a try.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &lt;users_at_[hidden]&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;users_at_[hidden]&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15794/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15794/OpenMPI.error">OpenMPI.error</a>
</ul>
<!-- attachment="OpenMPI.error" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15795.php">Youri LACAN-BARTLEY: "[OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Previous message:</strong> <a href="15793.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12164.php">Federico Golfr&#232; Andreasi: "[OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15800.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="15800.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
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
