<?
$subject_val = "[OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 08:55:34 2010" -->
<!-- isoreceived="20101022125534" -->
<!-- sent="Fri, 22 Oct 2010 14:55:18 +0200" -->
<!-- isosent="20101022125518" -->
<!-- name="Olivier Riff" -->
<!-- email="oliriff_at_[hidden]" -->
<!-- subject="[OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?" -->
<!-- id="AANLkTi=+n4QvGFxYeggKJ6W06ytXope9849q2Ydj=vyC_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?<br>
<strong>From:</strong> Olivier Riff (<em>oliriff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 08:55:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14550.php">Ralph Castain: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Previous message:</strong> <a href="14548.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14551.php">Ralph Castain: "Re: [OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?"</a>
<li><strong>Reply:</strong> <a href="14551.php">Ralph Castain: "Re: [OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>There was a bug in the use of hostfiles when a username is supplied which
<br>
has been fixed in OpenMPI v1.4.2.
<br>
I have just installed the v1.5 and the bug seems to come out again : only
<br>
the first username provided in the machinefile is taken into account.
<br>
<p>See mails below for the history.
<br>
<p>My configuration :
<br>
OpenMPI 1.5
<br>
Linux Mandriva 2008 x86_64 and Linux RHE x86_64
<br>
machinefile example :
<br>
or985966_at_is209898 slots=1
<br>
realtime_at_is206022 slots=8
<br>
realtime_at_is206025 slots=8
<br>
<p>Best regards,
<br>
<p>Olivier
<br>
<p>---------- Forwarded message ----------
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Date: 2010/3/11
<br>
Subject: Re: [OMPI users] OPenMpi: How to specify login name in machinefile
<br>
passed to mpirun
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>Yeah, it was a bug in the parser - fix scheduled for 1.4.2 release.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p>On Mar 11, 2010, at 4:32 AM, Olivier Riff wrote:
<br>
<p>Hello Ralph,
<br>
<p>Thanks for you quick reply.
<br>
Sorry I did not mention the version : it is the v1.4 (which indeed is not
<br>
the very last one).
<br>
I will appreciate if you could make a short test.
<br>
<p>Thanks and Regards,
<br>
<p>Olivier
<br>
<p>2010/3/10 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Probably a bug - I don't recall if/when anyone actually tested that code
</span><br>
<span class="quotelev1">&gt; path. I'll have a look...probably in the hostfile parser.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2010, at 8:26 AM, Olivier Riff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oops sorry I made the test too fast: it still does not work properly with
</span><br>
<span class="quotelev1">&gt; several logins:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I start on user1's machine:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --machinefile machinefile.txt MyProgram
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with machinefile:
</span><br>
<span class="quotelev1">&gt; user1_at_machine1 slots=1
</span><br>
<span class="quotelev1">&gt; user2_at_machine2 slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I got :
</span><br>
<span class="quotelev1">&gt; user1_at_machine2 password prompt ?! (there is no user1 account on
</span><br>
<span class="quotelev1">&gt; machine2...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My problem is still open... why is there a connection attempt to machine2
</span><br>
<span class="quotelev1">&gt; with user1 ...
</span><br>
<span class="quotelev1">&gt; Has somebody an explanation ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olivier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/3/10 Olivier Riff &lt;oliriff_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, it works now thanks. I forgot to add the slots information in the
</span><br>
<span class="quotelev2">&gt;&gt; machinefile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Olivier
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010/3/10 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is the exact same syntax inside of the machinefile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user1_at_machine1 slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user2_at_machine2 slots=3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 10, 2010, at 5:41 AM, Olivier Riff wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am using openmpi on several machines which have different user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accounts and I cannot find a way to specify the login for each machine in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the machinefile passed to mpirun.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The only solution I found is to use the -host argument of mpirun, such
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun -np 2 --host user1_at_machine1,user2_at_machine2 MyProgram
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; which is very inconvenient with a lot of machines.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Is there a way to do the same using a machinefile text? :
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun -np 2 -machinefile machinefile.txt MyProgram
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I cannot find the appropriate syntax for specifying a user in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machinefile.txt...
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Olivier
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14549/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14550.php">Ralph Castain: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Previous message:</strong> <a href="14548.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14551.php">Ralph Castain: "Re: [OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?"</a>
<li><strong>Reply:</strong> <a href="14551.php">Ralph Castain: "Re: [OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?"</a>
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
