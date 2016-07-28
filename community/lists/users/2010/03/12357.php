<?
$subject_val = "Re: [OMPI users] openmpi-1.4.1 Debian-Live Cd";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 15 11:26:14 2010" -->
<!-- isoreceived="20100315152614" -->
<!-- sent="Mon, 15 Mar 2010 08:26:06 -0700" -->
<!-- isosent="20100315152606" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.4.1 Debian-Live Cd" -->
<!-- id="C01478BC-FF40-4910-B0A1-8518E4FEEB3E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B973E2C.9090508_at_geowiss.uni-hamburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.4.1 Debian-Live Cd<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-15 11:26:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12358.php">Brock Palen: "[OMPI users] viewing message queues for running job"</a>
<li><strong>Previous message:</strong> <a href="12356.php">Jeff Squyres: "Re: [OMPI users] mpirun over infiniband."</a>
<li><strong>In reply to:</strong> <a href="12293.php">piening: "[OMPI users] openmpi-1.4.1 Debian-Live Cd"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I don't know anything about the Devian Live CD distro -- it's hard to say exactly what the problem is without knowing more about your setup.  But if &quot;hello world&quot; is failing, it seems to indicate that something is fundamentally wrong.
<br>
<p>Can you try a trivial ping pong app?
<br>
<p><p>On Mar 9, 2010, at 10:37 PM, piening wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I set up a Linux Cluster with differnt Distributions ( 1x Debian Lenny,
</span><br>
<span class="quotelev1">&gt; 4x OpenSuse11.2 ) and openmpi-1.4.1 , all my test applications ran perfekt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I decided to create a Debian-Live System (Lenny) with openmpi-1.4.1,
</span><br>
<span class="quotelev1">&gt; to include some more Pc's in our Student-Pool, and always get the
</span><br>
<span class="quotelev1">&gt; folowing errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #:  mpirun --hostfile my_hostfile -np 4 hello_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello, world, I am    2 of    4         Dell-19  (256)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am    0 of    4         Dell-19  (256)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am    3 of    4         Dlive  (256)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am    1 of    4         Dlive  (256)
</span><br>
<span class="quotelev1">&gt; [Dell-19:9199] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; [Dell-19:9199] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [Dell-19:9199] *** MPI_ERR_IN_STATUS: error code in status
</span><br>
<span class="quotelev1">&gt; [Dell-19:9199] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 2 with PID 9199 on
</span><br>
<span class="quotelev1">&gt; node Dell-19 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [Dell-19:09196] 1 more process has sent help message help-mpi-errors.txt
</span><br>
<span class="quotelev1">&gt; / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [Dell-19:09196] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've got no more idea how to fix this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         horst.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Horst Piening
</span><br>
<span class="quotelev1">&gt;  IT-Administrator Fb15
</span><br>
<span class="quotelev1">&gt;  Universitaet Hamburg
</span><br>
<span class="quotelev1">&gt;  Bundesstr. 55
</span><br>
<span class="quotelev1">&gt;  20146 Hamburg
</span><br>
<span class="quotelev1">&gt;  Email: piening_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Tel.: (040) 42838-7015
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12358.php">Brock Palen: "[OMPI users] viewing message queues for running job"</a>
<li><strong>Previous message:</strong> <a href="12356.php">Jeff Squyres: "Re: [OMPI users] mpirun over infiniband."</a>
<li><strong>In reply to:</strong> <a href="12293.php">piening: "[OMPI users] openmpi-1.4.1 Debian-Live Cd"</a>
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
