<?
$subject_val = "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 11:14:44 2010" -->
<!-- isoreceived="20100311161444" -->
<!-- sent="Thu, 11 Mar 2010 17:14:39 +0100" -->
<!-- isosent="20100311161439" -->
<!-- name="Olivier Riff" -->
<!-- email="oliriff_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun" -->
<!-- id="6ca4ee801003110814q5556aab0t43cf9115c52cd5ce_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AB3B9191-9D15-46FA-AE71-BC5020BA8505_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun<br>
<strong>From:</strong> Olivier Riff (<em>oliriff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 11:14:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12325.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<li><strong>Previous message:</strong> <a href="12323.php">Peter Kjellstrom: "Re: [OMPI users] mpi error?"</a>
<li><strong>In reply to:</strong> <a href="12322.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2010/3/11 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Yeah, it was a bug in the parser - fix scheduled for 1.4.2 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>OK, thanks Ralph for the test and the quick analyse.
<br>
<p>Regards,
<br>
<p>Olivier
<br>
<p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 11, 2010, at 4:32 AM, Olivier Riff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for you quick reply.
</span><br>
<span class="quotelev1">&gt; Sorry I did not mention the version : it is the v1.4 (which indeed is not
</span><br>
<span class="quotelev1">&gt; the very last one).
</span><br>
<span class="quotelev1">&gt; I will appreciate if you could make a short test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olivier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/3/10 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Probably a bug - I don't recall if/when anyone actually tested that code
</span><br>
<span class="quotelev2">&gt;&gt; path. I'll have a look...probably in the hostfile parser.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What version are you using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 10, 2010, at 8:26 AM, Olivier Riff wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oops sorry I made the test too fast: it still does not work properly with
</span><br>
<span class="quotelev2">&gt;&gt; several logins:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I start on user1's machine:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --machinefile machinefile.txt MyProgram
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with machinefile:
</span><br>
<span class="quotelev2">&gt;&gt; user1_at_machine1 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; user2_at_machine2 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and I got :
</span><br>
<span class="quotelev2">&gt;&gt; user1_at_machine2 password prompt ?! (there is no user1 account on
</span><br>
<span class="quotelev2">&gt;&gt; machine2...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My problem is still open... why is there a connection attempt to machine2
</span><br>
<span class="quotelev2">&gt;&gt; with user1 ...
</span><br>
<span class="quotelev2">&gt;&gt; Has somebody an explanation ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Olivier
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010/3/10 Olivier Riff &lt;oliriff_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK, it works now thanks. I forgot to add the slots information in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machinefile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Olivier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2010/3/10 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is the exact same syntax inside of the machinefile:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user1_at_machine1 slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user2_at_machine2 slots=3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 10, 2010, at 5:41 AM, Olivier Riff wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I am using openmpi on several machines which have different user
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; accounts and I cannot find a way to specify the login for each machine in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the machinefile passed to mpirun.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; The only solution I found is to use the -host argument of mpirun, such
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; mpirun -np 2 --host user1_at_machine1,user2_at_machine2 MyProgram
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; which is very inconvenient with a lot of machines.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Is there a way to do the same using a machinefile text? :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; mpirun -np 2 -machinefile machinefile.txt MyProgram
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I cannot find the appropriate syntax for specifying a user in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machinefile.txt...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Olivier
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12324/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12325.php">Matthew MacManes: "Re: [OMPI users] mpi error?"</a>
<li><strong>Previous message:</strong> <a href="12323.php">Peter Kjellstrom: "Re: [OMPI users] mpi error?"</a>
<li><strong>In reply to:</strong> <a href="12322.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
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
