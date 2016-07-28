<?
$subject_val = "Re: [OMPI users] Trouble with SGE integration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 30 11:47:59 2009" -->
<!-- isoreceived="20091130164759" -->
<!-- sent="Mon, 30 Nov 2009 17:47:44 +0100" -->
<!-- isosent="20091130164744" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with SGE integration" -->
<!-- id="F9271864-2FB2-4213-8AE2-8B72BCBB4F62_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B13E5E5.9060405_at_fit.vutbr.cz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with SGE integration<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-30 11:47:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11292.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11290.php">Ondrej Glembek: "[OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11290.php">Ondrej Glembek: "[OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11292.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11292.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 30.11.2009 um 16:33 schrieb Ondrej Glembek:
<br>
<p><span class="quotelev1">&gt; we are using a custom starter method in our SGE to launch our  
</span><br>
<span class="quotelev1">&gt; jobs... It
</span><br>
<span class="quotelev1">&gt; looks something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ... we do whole bunch of stuff here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #start the job in thus shell
</span><br>
<span class="quotelev1">&gt; exec &quot;$@&quot;
</span><br>
<p>the &quot;$@&quot; should be replaced by the path to the jobscript (qsub) or  
<br>
command (qrsh) plus the given options.
<br>
<p>For the spread tasks to other nodes I get as argument: &quot; orted -mca  
<br>
ess env -mca orte_ess_jobid ...&quot;. Also no . ./.profile.
<br>
<p>So I wonder, where the . ./.profile is coming from. Can you put a  
<br>
`sleep 60` or alike before the `exec ...` and grep the built line  
<br>
from `ps -e f` before it crashes?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; The trouble is that mpiexec passes a command which looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ( . ./.profile ..... )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which, however, is not a valid exec argument...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any way to tell mpiexec to run it in a separate script??? Any
</span><br>
<span class="quotelev1">&gt; idea how to solve this???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx
</span><br>
<span class="quotelev1">&gt; Ondrej Glembek
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev1">&gt;   UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/">http://www.fit.vutbr.cz/</a> 
</span><br>
<span class="quotelev1">&gt; ~glembek
</span><br>
<span class="quotelev1">&gt;   Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev1">&gt;   Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ICQ: 93233896
</span><br>
<span class="quotelev1">&gt;   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
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
<li><strong>Next message:</strong> <a href="11292.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11290.php">Ondrej Glembek: "[OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11290.php">Ondrej Glembek: "[OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11292.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11292.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
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
