<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 15 20:00:41 2006" -->
<!-- isoreceived="20060316010041" -->
<!-- sent="Wed, 15 Mar 2006 17:00:34 -0800" -->
<!-- isosent="20060316010034" -->
<!-- name="Davide Bergamasco" -->
<!-- email="bergamasco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory allocation issue with OpenIB" -->
<!-- id="4418B8B2.4090601_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.58.0603160014520.13685_at_hermes.ita.uni-heidelberg.de" -->
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
<strong>From:</strong> Davide Bergamasco (<em>bergamasco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-15 20:00:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0868.php">Allan Menezes: "[OMPI users] Two Gigabit NiCs"</a>
<li><strong>Previous message:</strong> <a href="0866.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0866.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0871.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Emanuel,
<br>
<p>thank you for your note.  You indirectly fixed my issue.  The -prefix 
<br>
option was there because at the beginning of times, when I installed 
<br>
everything, I didn't properly setup my environment.  The environment was 
<br>
fixed at a later time, but I forgot to remove the -prefix from my 
<br>
scripts.  After reading your message, I got rid of it and &quot;magically&quot; 
<br>
everything works just fine now.
<br>
<p>Thank you very much for your help.
<br>
<p>Davide
<br>
<p>PS - Many thanks to Galen too.
<br>
<p><p><p>Emanuel Ziegler wrote:
<br>
<span class="quotelev1">&gt; Hi Davide!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are using the -prefix option. I guess this is due to the fact that You 
</span><br>
<span class="quotelev1">&gt; cannot set the paths appropriately. Most likely You are using rsh for 
</span><br>
<span class="quotelev1">&gt; starting remote processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This causes some trouble since the environment offered by rsh lacks many 
</span><br>
<span class="quotelev1">&gt; things that a usual login environment offers (e.g. the path is hardcoded 
</span><br>
<span class="quotelev1">&gt; and cannot be changed).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Checking with
</span><br>
<span class="quotelev1">&gt;     mpirun -np 2 -prefix /usr/local /bin/bash -c ulimit -l
</span><br>
<span class="quotelev1">&gt; may result in reporting plenty of memory (according to Your settings) but 
</span><br>
<span class="quotelev1">&gt; this is not reliable since the new bash instance sets the limits 
</span><br>
<span class="quotelev1">&gt; differently. 
</span><br>
<span class="quotelev1">&gt; Unfortunately
</span><br>
<span class="quotelev1">&gt;     mpirun -np 2 -prefix /usr/local ulimit -l
</span><br>
<span class="quotelev1">&gt; does not work, since mpirun expects an executable. So the only way to 
</span><br>
<span class="quotelev1">&gt; check is to run rsh directly like
</span><br>
<span class="quotelev1">&gt;     rsh remotenode ulimit -l
</span><br>
<span class="quotelev1">&gt; (where remotenode has to be replaced by the name of the remote host). This 
</span><br>
<span class="quotelev1">&gt; may give a different result (e.g. 32 which is way too small). In my case 
</span><br>
<span class="quotelev1">&gt; this problem was solved by adding
</span><br>
<span class="quotelev1">&gt;     session required        pam_limits.so
</span><br>
<span class="quotelev1">&gt; at the end of the file &quot;/etc/pam.d/rsh&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In case of ssh check the file &quot;/etc/pam.d/ssh&quot; for a line similar to the 
</span><br>
<span class="quotelev1">&gt; one above and add it if it does not yet exist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps,
</span><br>
<span class="quotelev1">&gt;     Emanuel
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0868.php">Allan Menezes: "[OMPI users] Two Gigabit NiCs"</a>
<li><strong>Previous message:</strong> <a href="0866.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0866.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0871.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
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
