<?
$subject_val = "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 08:33:09 2010" -->
<!-- isoreceived="20100310133309" -->
<!-- sent="Wed, 10 Mar 2010 14:32:43 +0100" -->
<!-- isosent="20100310133243" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun" -->
<!-- id="39436552-2A64-4EAC-8C38-589C1DD69C47_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6ca4ee801003100441s38b79820q4c8465c2953e7b44_at_mail.gmail.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 08:32:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12298.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Previous message:</strong> <a href="12296.php">Olivier Riff: "[OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>In reply to:</strong> <a href="12296.php">Olivier Riff: "[OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12298.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 10.03.2010 um 13:41 schrieb Olivier Riff:
<br>
<p><span class="quotelev1">&gt; I am using openmpi on several machines which have different user  
</span><br>
<span class="quotelev1">&gt; accounts and I cannot find a way to specify the login for each  
</span><br>
<span class="quotelev1">&gt; machine in the machinefile passed to mpirun.
</span><br>
<span class="quotelev1">&gt; The only solution I found is to use the -host argument of mpirun,  
</span><br>
<span class="quotelev1">&gt; such as:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --host user1_at_machine1,user2_at_machine2 MyProgram
</span><br>
<span class="quotelev1">&gt; which is very inconvenient with a lot of machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to do the same using a machinefile text? :
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -machinefile machinefile.txt MyProgram
</span><br>
<p>the program can be found at the same location on all machines?
<br>
<p>When you use ssh as startup, this can be coded in ~/.ssh/config:
<br>
<p>Host node001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User fubar
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hostname headnode.my.cluster.test
<br>
<p>Host node002
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User foo
<br>
<p>Host node003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User bar
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I cannot find the appropriate syntax for specifying a user in  
</span><br>
<span class="quotelev1">&gt; machinefile.txt...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olivier
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
<li><strong>Next message:</strong> <a href="12298.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Previous message:</strong> <a href="12296.php">Olivier Riff: "[OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>In reply to:</strong> <a href="12296.php">Olivier Riff: "[OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12298.php">Ralph Castain: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
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
