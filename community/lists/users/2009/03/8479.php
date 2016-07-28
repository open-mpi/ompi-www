<?
$subject_val = "Re: [OMPI users] open mpi on non standard ssh port";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 06:10:15 2009" -->
<!-- isoreceived="20090317101015" -->
<!-- sent="Tue, 17 Mar 2009 11:10:10 +0100" -->
<!-- isosent="20090317101010" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="grodid_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on non standard ssh port" -->
<!-- id="Pine.LNX.4.58.0903171107050.815_at_lxplus236.cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49BF6329.8090802_at_meduniwien.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi on non standard ssh port<br>
<strong>From:</strong> Gilbert Grosdidier (<em>grodid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 06:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>Previous message:</strong> <a href="8478.php">-andria-: "[OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>In reply to:</strong> <a href="8477.php">Bernhard Knapp: "[OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8481.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bernhard,
<br>
<p>&nbsp;You may want to use the .ssh/config file, where you will be able to specify on 
<br>
a machine by machine basis the port you want to use thru the 'Port'
<br>
directive. Have a look to 'man ssh_config' page.
<br>
<p>&nbsp;Hope this helps,          Gilbert.
<br>
<p>On Tue, 17 Mar 2009, Bernhard Knapp wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to start a gromacs simulation on a small cluster where non standard
</span><br>
<span class="quotelev1">&gt; ports are used for ssh. If I just use a &quot;normal&quot; maschinelist file (with the
</span><br>
<span class="quotelev1">&gt; ips of the nodes), consequently, the following error comes up:
</span><br>
<span class="quotelev1">&gt; ssh: connect to host 192.168.0.103 port 22: Connection refused
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess that I need to somehow tell him to use the other ports. I tried it in
</span><br>
<span class="quotelev1">&gt; the following way (maschinelist file):
</span><br>
<span class="quotelev1">&gt; 192.168.0.101 -p 5101
</span><br>
<span class="quotelev1">&gt; 192.168.0.102 -p 5102
</span><br>
<span class="quotelev1">&gt; 192.168.0.103 -p 5103
</span><br>
<span class="quotelev1">&gt; 192.168.0.104 -p 5104
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it seems this is not the correct way to specifiy the port:
</span><br>
<span class="quotelev1">&gt; Open RTE detected a parse error in the hostfile:
</span><br>
<span class="quotelev1">&gt;    /home/bknapp/scripts/machinefile.txt
</span><br>
<span class="quotelev1">&gt; It occured on line number 1 on token 5:
</span><br>
<span class="quotelev1">&gt;    -p
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I tell him to use port 5101 on machine 192.168.0.101?
</span><br>
<span class="quotelev1">&gt; May be the question is stupid but I could not find a solution via google or
</span><br>
<span class="quotelev1">&gt; search function ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt; Bernhard
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
<p><pre>
-- 
*---------------------------------------------------------------------*
  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
  B.P. 34, F-91898 Orsay Cedex (FRANCE)
 ---------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>Previous message:</strong> <a href="8478.php">-andria-: "[OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>In reply to:</strong> <a href="8477.php">Bernhard Knapp: "[OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8481.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
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
