<?
$subject_val = "Re: [OMPI users] open mpi on non standard ssh port";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 10:17:31 2009" -->
<!-- isoreceived="20090317141731" -->
<!-- sent="Tue, 17 Mar 2009 07:58:21 -0400" -->
<!-- isosent="20090317115821" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on non standard ssh port" -->
<!-- id="60333954-A1FB-4A18-8C99-5B5A77DF2270_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 07:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8482.php">Philip Hayes: "[OMPI users] WRF Slow Down"</a>
<li><strong>Previous message:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>In reply to:</strong> <a href="8477.php">Bernhard Knapp: "[OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8494.php">Bernhard Knapp: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We don't have an easy way to specify using different ports for each  
<br>
host (this is a fairly uncommon configuration), but you can set it up  
<br>
in your $HOME/.ssh/config file, perhaps something like this:
<br>
<p>Host 192.168.0.101
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port 5101
<br>
Host 192.168.0.102
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port 5102
<br>
<p>...and so on.  Then &quot;ssh 192.168.0.101&quot; will automatically uses port  
<br>
5101, etc.
<br>
<p>See the man page for ssh_config(5) for details.
<br>
<p><p><p>On Mar 17, 2009, at 4:45 AM, Bernhard Knapp wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to start a gromacs simulation on a small cluster where non
</span><br>
<span class="quotelev1">&gt; standard ports are used for ssh. If I just use a &quot;normal&quot; maschinelist
</span><br>
<span class="quotelev1">&gt; file (with the ips of the nodes), consequently, the following error
</span><br>
<span class="quotelev1">&gt; comes up:
</span><br>
<span class="quotelev1">&gt; ssh: connect to host 192.168.0.103 port 22: Connection refused
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess that I need to somehow tell him to use the other ports. I  
</span><br>
<span class="quotelev1">&gt; tried
</span><br>
<span class="quotelev1">&gt; it in the following way (maschinelist file):
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
<span class="quotelev1">&gt;     /home/bknapp/scripts/machinefile.txt
</span><br>
<span class="quotelev1">&gt; It occured on line number 1 on token 5:
</span><br>
<span class="quotelev1">&gt;     -p
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I tell him to use port 5101 on machine 192.168.0.101?
</span><br>
<span class="quotelev1">&gt; May be the question is stupid but I could not find a solution via  
</span><br>
<span class="quotelev1">&gt; google
</span><br>
<span class="quotelev1">&gt; or search function ...
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8482.php">Philip Hayes: "[OMPI users] WRF Slow Down"</a>
<li><strong>Previous message:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>In reply to:</strong> <a href="8477.php">Bernhard Knapp: "[OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8494.php">Bernhard Knapp: "Re: [OMPI users] open mpi on non standard ssh port"</a>
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
