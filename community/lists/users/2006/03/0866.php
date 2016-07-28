<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 15 18:29:08 2006" -->
<!-- isoreceived="20060315232908" -->
<!-- sent="Thu, 16 Mar 2006 00:29:04 +0100 (CET)" -->
<!-- isosent="20060315232904" -->
<!-- name="Emanuel Ziegler" -->
<!-- email="eziegler_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory allocation issue with OpenIB" -->
<!-- id="Pine.LNX.4.58.0603160014520.13685_at_hermes.ita.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44189381.9020106_at_gmail.com" -->
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
<strong>From:</strong> Emanuel Ziegler (<em>eziegler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-15 18:29:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0867.php">Davide Bergamasco: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0865.php">Davide Bergamasco: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0863.php">Davide Bergamasco: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0867.php">Davide Bergamasco: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0867.php">Davide Bergamasco: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0871.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Davide!
<br>
<p>You are using the -prefix option. I guess this is due to the fact that You 
<br>
cannot set the paths appropriately. Most likely You are using rsh for 
<br>
starting remote processes.
<br>
<p>This causes some trouble since the environment offered by rsh lacks many 
<br>
things that a usual login environment offers (e.g. the path is hardcoded 
<br>
and cannot be changed).
<br>
<p>Checking with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 -prefix /usr/local /bin/bash -c ulimit -l
<br>
may result in reporting plenty of memory (according to Your settings) but 
<br>
this is not reliable since the new bash instance sets the limits 
<br>
differently. 
<br>
Unfortunately
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 -prefix /usr/local ulimit -l
<br>
does not work, since mpirun expects an executable. So the only way to 
<br>
check is to run rsh directly like
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rsh remotenode ulimit -l
<br>
(where remotenode has to be replaced by the name of the remote host). This 
<br>
may give a different result (e.g. 32 which is way too small). In my case 
<br>
this problem was solved by adding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;session required        pam_limits.so
<br>
at the end of the file &quot;/etc/pam.d/rsh&quot;.
<br>
<p>In case of ssh check the file &quot;/etc/pam.d/ssh&quot; for a line similar to the 
<br>
one above and add it if it does not yet exist.
<br>
<p>Hope that helps,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Emanuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0867.php">Davide Bergamasco: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0865.php">Davide Bergamasco: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0863.php">Davide Bergamasco: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0867.php">Davide Bergamasco: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0867.php">Davide Bergamasco: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0871.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
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
