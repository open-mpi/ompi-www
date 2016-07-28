<?
$subject_val = "Re: [OMPI users] Can't start program across network -- solved!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 00:46:55 2009" -->
<!-- isoreceived="20090317044655" -->
<!-- sent="Tue, 17 Mar 2009 13:46:48 +0900" -->
<!-- isosent="20090317044648" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't start program across network -- solved!" -->
<!-- id="49BF2B38.4070105_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49BE60C3.9090108_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't start program across network -- solved!<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 00:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8477.php">Bernhard Knapp: "[OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Previous message:</strong> <a href="8475.php">Norio Tamura: "[OMPI users] Selective file driven decision functions for Open MPI coll tuned"</a>
<li><strong>In reply to:</strong> <a href="8460.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8459.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Prentice/Jeff,
<br>
<p><p>Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; In an earlier e-mail in this thread, I theorized that this might be a
</span><br>
<span class="quotelev1">&gt; problem with your name service. This latest information seems to support
</span><br>
<span class="quotelev1">&gt; that theory.
</span><br>
<p><p>Thank you very much for the suggestions and help!  After discussing with our system administrator the contents of your e-mails, Prentice, he looked into the problem.  Indeed, in one direction of using rsh, I was getting &quot;No route to host&quot; but in the other, I was getting &quot;Connection refused&quot; -- so something was wrong.  As it turns out, for the machine that worked, its firewall was disabled.  For the remaining 7 machines, they had been enabled [perhaps by default].  
<br>
<p>Why the one computer had its firewall disabled is unknown (since there are two sysadmins and the person I talked to didn't do this), but as this network is behind an institute-wide firewall, he'll bring it down on all of the machines so that I can use MPI on them.  Ralph posted a message just over a month ago that says that Open MPI doesn't support restricted port ranges (<a href="http://www.open-mpi.org/community/lists/users/2009/02/7997.php">http://www.open-mpi.org/community/lists/users/2009/02/7997.php</a>), so this seems to fine.
<br>
<p>It's odd that ssh works fine and since I thought ssh should be used first by Open MPI, I never thought there was a firewall problem.
<br>
<p>One question to anyone who might know the answer.  So, I had two computers Y and Z.  On Y, I can do this but on Z I could not:
<br>
<p>mpirun --host Y,Z --np 3 uname -a
<br>
<p>But, it is Y that had its firewall disabled; Z has it enabled.  So, the firewall was blocking out-going traffic?  I would think that if I did &quot;--host Y,Z&quot; if the firewall is up on one computer but down on the other, things still shouldn't work...
<br>
<p>After all this, there might still be other problems with the network...i.e., it isn't a matter of the firewall being up or down, but it was incorrectly configured.  But as the sysadmin is happy to take this option, I'll take it too...
<br>
<p>Thank you both for your help!
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8477.php">Bernhard Knapp: "[OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Previous message:</strong> <a href="8475.php">Norio Tamura: "[OMPI users] Selective file driven decision functions for Open MPI coll tuned"</a>
<li><strong>In reply to:</strong> <a href="8460.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8459.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
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
