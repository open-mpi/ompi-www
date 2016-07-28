<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 20:52:13 2007" -->
<!-- isoreceived="20071025005213" -->
<!-- sent="Wed, 24 Oct 2007 20:52:01 -0400" -->
<!-- isosent="20071025005201" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with 'orted'" -->
<!-- id="2062E1C8-F35C-405C-AC28-F9B7ABE6937A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="547db2260710010526l43603405ne6cab3f82f2e44df_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-10-24 20:52:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4314.php">Jeff Squyres: "Re: [OMPI users] Number of processes and number of the cores."</a>
<li><strong>Previous message:</strong> <a href="4312.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>In reply to:</strong> <a href="4115.php">Amit Kumar Saha: "[OMPI users] problem with 'orted'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By default, I believe that orte assumes that the orted is in the same  
<br>
location on all nodes.  If it's not, you should be able to use the  
<br>
following:
<br>
<p>1. Make a sym link such that /usr/local/bin/orted appears on all of  
<br>
your nodes.  You implied that you tried this, but I find it hard to  
<br>
believe that that didn't work -- the error message you show clearly  
<br>
indicates that it's looking for /usr/local/bin/orted.  If it's there  
<br>
(and executable), it should work.
<br>
<p>2. I assume you're using the rsh/ssh launcher.  If this is the case,  
<br>
use the mca_pls_rsh_orted MCA parameter to /usr/bin/orted.  E.g.:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca pls_rsh_orted /usr/bin/orted ...
<br>
<p><p><p>On Oct 1, 2007, at 8:26 AM, Amit Kumar Saha wrote:
<br>
<p><span class="quotelev1">&gt; hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Open MPI 1.2.3 to run a task on 4 hosts as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; amit_at_ubuntu-desktop-1:~/mpi-exec$ mpirun --np 4 --hostfile
</span><br>
<span class="quotelev1">&gt; mpi-host-file ParallelSearch
</span><br>
<span class="quotelev1">&gt; bash: /usr/local/bin/orted: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that 'orted' is not found on one of the 4 hosts. I
</span><br>
<span class="quotelev1">&gt; investigated the problem and found out that whereas 'orted' is stored
</span><br>
<span class="quotelev1">&gt; in /usr/local/bin on all the other 3 hosts, it is in /usr/bin/orted on
</span><br>
<span class="quotelev1">&gt; the erroneous host. I tried to create a soft link to solve the problem
</span><br>
<span class="quotelev1">&gt; but sadly it is not so simple, it seems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be nice to know how to get around this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Amit
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Amit Kumar Saha
</span><br>
<span class="quotelev1">&gt; *NetBeans Community Docs Coordinator*
</span><br>
<span class="quotelev1">&gt; me blogs@ <a href="http://amitksaha.blogspot.com">http://amitksaha.blogspot.com</a>
</span><br>
<span class="quotelev1">&gt; URL:<a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>
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
<li><strong>Next message:</strong> <a href="4314.php">Jeff Squyres: "Re: [OMPI users] Number of processes and number of the cores."</a>
<li><strong>Previous message:</strong> <a href="4312.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>In reply to:</strong> <a href="4115.php">Amit Kumar Saha: "[OMPI users] problem with 'orted'"</a>
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
