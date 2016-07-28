<?
$subject_val = "Re: [OMPI users] open mpi on non standard ssh port";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 16:53:42 2009" -->
<!-- isoreceived="20090318205342" -->
<!-- sent="Wed, 18 Mar 2009 16:53:37 -0400" -->
<!-- isosent="20090318205337" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on non standard ssh port" -->
<!-- id="4EA8C8AD-098E-469B-BFAF-49E83836C66B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CDE0E7DE-D0FF-4F4E-B19C-CE5088714DB4_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 16:53:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8506.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: open mpi on non standard ssh port]"</a>
<li><strong>Previous message:</strong> <a href="8504.php">Rene Salmon: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
<li><strong>In reply to:</strong> <a href="8495.php">Reuti: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8507.php">Gary Draving: "[OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Reply:</strong> <a href="8507.php">Gary Draving: "[OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, two other people said the same thing already:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/03/8479.php">http://www.open-mpi.org/community/lists/users/2009/03/8479.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/03/8481.php">http://www.open-mpi.org/community/lists/users/2009/03/8481.php</a>
<br>
<p>:-)
<br>
<p><p>On Mar 18, 2009, at 4:51 AM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Bernhard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 18.03.2009 um 09:19 schrieb Bernhard Knapp:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; come on, it must be somehow possible to use openmpi not on port
</span><br>
<span class="quotelev2">&gt; &gt; 22!? ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it's not an issue of Open MPI but ssh. You need in your home a file
</span><br>
<span class="quotelev1">&gt; ~/.ssh/config with two lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; host *
</span><br>
<span class="quotelev1">&gt;     port 1234
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or whatever port you need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Message: 3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Tue, 17 Mar 2009 09:45:29 +0100
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: Bernhard Knapp &lt;bernhard.knapp_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: [OMPI users] open mpi on non standard ssh port
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Message-ID: &lt;49BF6329.8090802_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I want to start a gromacs simulation on a small cluster where non
</span><br>
<span class="quotelev3">&gt; &gt;&gt; standard ports are used for ssh. If I just use a &quot;normal&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; maschinelist file (with the ips of the nodes), consequently, the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; following error comes up:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ssh: connect to host 192.168.0.103 port 22: Connection refused
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I guess that I need to somehow tell him to use the other ports. I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tried it in the following way (maschinelist file):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 192.168.0.101 -p 5101
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 192.168.0.102 -p 5102
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 192.168.0.103 -p 5103
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 192.168.0.104 -p 5104
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But it seems this is not the correct way to specifiy the port:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open RTE detected a parse error in the hostfile:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    /home/bknapp/scripts/machinefile.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It occured on line number 1 on token 5:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    -p
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; How can I tell him to use port 5101 on machine 192.168.0.101?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; May be the question is stupid but I could not find a solution via
</span><br>
<span class="quotelev3">&gt; &gt;&gt; google or search function ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cheers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Bernhard
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8506.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: open mpi on non standard ssh port]"</a>
<li><strong>Previous message:</strong> <a href="8504.php">Rene Salmon: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
<li><strong>In reply to:</strong> <a href="8495.php">Reuti: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8507.php">Gary Draving: "[OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Reply:</strong> <a href="8507.php">Gary Draving: "[OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
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
