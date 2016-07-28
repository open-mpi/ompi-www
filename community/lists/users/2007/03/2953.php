<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 30 14:00:13 2007" -->
<!-- isoreceived="20070330180013" -->
<!-- sent="Fri, 30 Mar 2007 13:59:30 -0400" -->
<!-- isosent="20070330175930" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie Hostfile Quesiton" -->
<!-- id="D2728DAC-DE06-478A-90CE-7953ACED73B1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FCC2132C-5A27-41CD-9212-F6AC86961C05_at_apple.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-30 13:59:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2954.php">Jeff Squyres: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2952.php">Warner Yuen: "[OMPI users] Newbie Hostfile Quesiton"</a>
<li><strong>In reply to:</strong> <a href="2952.php">Warner Yuen: "[OMPI users] Newbie Hostfile Quesiton"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version: just don't list that host in the OMPI hostfile.
<br>
<p>Long version:
<br>
<p>In LAM, we had the constraint that you *had* to include the local  
<br>
host in the hostfile that you lambooted.  This was undesirable in  
<br>
some cases, such as lambooting from a cluster's head node (where you  
<br>
didn't want to run launch any MPI processes).  So as a workaround, we  
<br>
created the &quot;schedule=no&quot; attribute such that your lamboot would  
<br>
include the node, but we wouldn't [by default] run any MPI processes  
<br>
on it.
<br>
<p>In Open MPI, we do not have the restriction that you must include the  
<br>
local host in the hostfile that you mpirun on.  So equivalent  
<br>
functionality in Open MPI is simply to leave the local host out of  
<br>
the hostfile.
<br>
<p>Sidenote -- maybe I should create a &quot;I used to be a LAM user&quot; section  
<br>
of the FAQ...
<br>
<p><p>On Mar 30, 2007, at 1:13 PM, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt; In LAM/MPI, I can use &quot;portal.private schedule=no&quot; if I want to  
</span><br>
<span class="quotelev1">&gt; launch a job from a specific node but not schedule it for any work.  
</span><br>
<span class="quotelev1">&gt; I can't seem to find reference to an equivalent in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Warner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warner Yuen
</span><br>
<span class="quotelev1">&gt; Scientific Computing Consultant
</span><br>
<span class="quotelev1">&gt; Apple Computer
</span><br>
<span class="quotelev1">&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel: 408.718.2859
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2954.php">Jeff Squyres: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2952.php">Warner Yuen: "[OMPI users] Newbie Hostfile Quesiton"</a>
<li><strong>In reply to:</strong> <a href="2952.php">Warner Yuen: "[OMPI users] Newbie Hostfile Quesiton"</a>
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
