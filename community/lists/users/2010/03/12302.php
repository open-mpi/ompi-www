<?
$subject_val = "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 10:54:27 2010" -->
<!-- isoreceived="20100310155427" -->
<!-- sent="Wed, 10 Mar 2010 08:53:50 -0700" -->
<!-- isosent="20100310155350" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun" -->
<!-- id="4F7B16FB-AEA6-4EFE-8E29-FA95C92D9056_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6ca4ee801003100726v318e4824k494702ea8232038c_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 10:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12303.php">Justin Watson: "[OMPI users] Problem with private variables in modules"</a>
<li><strong>Previous message:</strong> <a href="12301.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>In reply to:</strong> <a href="12301.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12318.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Reply:</strong> <a href="12318.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Probably a bug - I don't recall if/when anyone actually tested that code path. I'll have a look...probably in the hostfile parser.
<br>
<p>What version are you using?
<br>
<p>On Mar 10, 2010, at 8:26 AM, Olivier Riff wrote:
<br>
<p><span class="quotelev1">&gt; Oops sorry I made the test too fast: it still does not work properly with several logins:
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
<span class="quotelev1">&gt; user1_at_machine2 password prompt ?! (there is no user1 account on machine2...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My problem is still open... why is there a connection attempt to machine2 with user1 ...
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
<span class="quotelev1">&gt; OK, it works now thanks. I forgot to add the slots information in the machinefile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Olivier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/3/10 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is the exact same syntax inside of the machinefile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; user1_at_machine1 slots=4
</span><br>
<span class="quotelev1">&gt; user2_at_machine2 slots=3
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2010, at 5:41 AM, Olivier Riff wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using openmpi on several machines which have different user accounts and I cannot find a way to specify the login for each machine in the machinefile passed to mpirun.
</span><br>
<span class="quotelev2">&gt; &gt; The only solution I found is to use the -host argument of mpirun, such as:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 --host user1_at_machine1,user2_at_machine2 MyProgram
</span><br>
<span class="quotelev2">&gt; &gt; which is very inconvenient with a lot of machines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to do the same using a machinefile text? :
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 -machinefile machinefile.txt MyProgram
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I cannot find the appropriate syntax for specifying a user in machinefile.txt...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Olivier
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12302/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12303.php">Justin Watson: "[OMPI users] Problem with private variables in modules"</a>
<li><strong>Previous message:</strong> <a href="12301.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>In reply to:</strong> <a href="12301.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12318.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Reply:</strong> <a href="12318.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
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
