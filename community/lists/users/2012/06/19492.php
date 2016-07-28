<?
$subject_val = "Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 11 10:41:07 2012" -->
<!-- isoreceived="20120611144107" -->
<!-- sent="Mon, 11 Jun 2012 10:40:53 -0400" -->
<!-- isosent="20120611144053" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6" -->
<!-- id="DF8A8A14-7AC7-46F2-8238-4081BDF3C1FD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20010_1339424197_4FD5FDC5_20010_11388_1_49CF97100DDD4B4A9C4DC89905CA59A310187E5E21_at_THSONEA01CMS07P.one.grp" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE : RE : Bug when mixing sent types in version 1.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-11 10:40:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19493.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19491.php">BOUVIER Benjamin: "[OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19491.php">BOUVIER Benjamin: "[OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19493.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19493.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To start, I would ensure that all firewalling  (e.g., iptables) is disabled on all machines involved.
<br>
<p>On Jun 11, 2012, at 10:16 AM, BOUVIER Benjamin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'd guess that running net pipe with 3 procs may be undefined.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is indeed undefined. Running the net pipe program locally with 3 processors blocks, on my computer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This issue is especially weird as there is no problem for running the example program on network with MPICH2 implementation, for 2 processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, with MPICH2, it fails with 3 processes and blocks also on connect (&quot;Connection refused&quot;), which could indicate that it's actually a network issue, with both MPICH2 and OMPI. I don't know how many connections OMPI use to send the data in the example program, but with the assumption that it tries to open 2 connections (while for the same program, MPICH2 only uses one connection, which is another hypothesis), maybe the number of connections is the right way to look for. I'll ask MPICH2 users on their mailing list, so as to get their opinion about it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now that I know the program doesn't work both with OMPI and MPICH2 implementations, I guess it's not dependant of MPI implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have any ideas or comments, I would be pleased to hear them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Benjamin Bouvier
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19493.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19491.php">BOUVIER Benjamin: "[OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19491.php">BOUVIER Benjamin: "[OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19493.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19493.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
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
