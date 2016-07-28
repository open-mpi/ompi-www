<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 16 09:44:55 2006" -->
<!-- isoreceived="20060316144455" -->
<!-- sent="Thu, 16 Mar 2006 07:44:51 -0700" -->
<!-- isosent="20060316144451" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory allocation issue with OpenIB" -->
<!-- id="52CFD04A-F8B2-4D51-A7E1-92151BEFCD9C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-16 09:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0872.php">Jean Latour: "[OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>Previous message:</strong> <a href="0870.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="0866.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Emanuel,
<br>
<p>Thanks for the tip on this issue, we will be adding it to the FAQ  
<br>
shortly.
<br>
<p>- Galen
<br>
<p>On Mar 15, 2006, at 4:29 PM, Emanuel Ziegler wrote:
<br>
<p><span class="quotelev1">&gt; Hi Davide!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are using the -prefix option. I guess this is due to the fact  
</span><br>
<span class="quotelev1">&gt; that You
</span><br>
<span class="quotelev1">&gt; cannot set the paths appropriately. Most likely You are using rsh for
</span><br>
<span class="quotelev1">&gt; starting remote processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This causes some trouble since the environment offered by rsh lacks  
</span><br>
<span class="quotelev1">&gt; many
</span><br>
<span class="quotelev1">&gt; things that a usual login environment offers (e.g. the path is  
</span><br>
<span class="quotelev1">&gt; hardcoded
</span><br>
<span class="quotelev1">&gt; and cannot be changed).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Checking with
</span><br>
<span class="quotelev1">&gt;     mpirun -np 2 -prefix /usr/local /bin/bash -c ulimit -l
</span><br>
<span class="quotelev1">&gt; may result in reporting plenty of memory (according to Your  
</span><br>
<span class="quotelev1">&gt; settings) but
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
<span class="quotelev1">&gt; (where remotenode has to be replaced by the name of the remote  
</span><br>
<span class="quotelev1">&gt; host). This
</span><br>
<span class="quotelev1">&gt; may give a different result (e.g. 32 which is way too small). In my  
</span><br>
<span class="quotelev1">&gt; case
</span><br>
<span class="quotelev1">&gt; this problem was solved by adding
</span><br>
<span class="quotelev1">&gt;     session required        pam_limits.so
</span><br>
<span class="quotelev1">&gt; at the end of the file &quot;/etc/pam.d/rsh&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case of ssh check the file &quot;/etc/pam.d/ssh&quot; for a line similar  
</span><br>
<span class="quotelev1">&gt; to the
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0872.php">Jean Latour: "[OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>Previous message:</strong> <a href="0870.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="0866.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
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
