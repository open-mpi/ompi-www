<?
$subject_val = "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 15:05:51 2014" -->
<!-- isoreceived="20140923190551" -->
<!-- sent="Tue, 23 Sep 2014 15:05:46 -0400" -->
<!-- isosent="20140923190546" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange affinity messages with 1.8 and torque 5" -->
<!-- id="11667F8B-E52B-4E41-872C-73585726DCD2_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="86ECBFC2-2868-41D2-A7D6-F15980928D9F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange affinity messages with 1.8 and torque 5<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-23 15:05:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25380.php">Maxime Boissonneault: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Previous message:</strong> <a href="25378.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>In reply to:</strong> <a href="25378.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25380.php">Maxime Boissonneault: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Reply:</strong> <a href="25380.php">Maxime Boissonneault: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes the request to torque was procs=64,
<br>
<p>We are using cpusets.
<br>
<p>the mpirun without -np 64  creates 64 spawned hostnames. 
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Sep 23, 2014, at 3:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: that warning has been removed from the upcoming 1.8.3 release
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 23, 2014, at 11:45 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt;&gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 23.09.2014 um 19:53 schrieb Brock Palen:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found a fun head scratcher, with openmpi 1.8.2  with torque 5 built with TM support, on hereto core layouts  I get the fun thing:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -report-bindings hostname        &lt;-------- Works
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And you get 64 lines of output?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -report-bindings -np 64 hostname   &lt;--------- Wat?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bind to:     CORE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node:        nyx5518
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #processes:  2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #cpus:       1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How many cores are physically installed on this machine - two as mentioned above?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran with --oversubscribed and got the expected host list, which matched $PBS_NODEFILE and was 64 entires long:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -overload-allowed -report-bindings -np 64 --oversubscribe hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What did I do wrong?  I'm stumped why one works one doesn't but the one that doesn't if your force it appears correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25375.php">http://www.open-mpi.org/community/lists/users/2014/09/25375.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; Version: GnuPG/MacGPG2 v2.0.20 (Darwin)
</span><br>
<span class="quotelev2">&gt;&gt; Comment: GPGTools - <a href="http://gpgtools.org">http://gpgtools.org</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; iEYEARECAAYFAlQhv7IACgkQo/GbGkBRnRr3HgCgjZoD9l9a+WThl5CDaGF1jawx
</span><br>
<span class="quotelev2">&gt;&gt; PWIAmwWnZwQdytNgAJgbir6V7yCyBt5D
</span><br>
<span class="quotelev2">&gt;&gt; =NG0H
</span><br>
<span class="quotelev2">&gt;&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25376.php">http://www.open-mpi.org/community/lists/users/2014/09/25376.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25378.php">http://www.open-mpi.org/community/lists/users/2014/09/25378.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25379/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25380.php">Maxime Boissonneault: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Previous message:</strong> <a href="25378.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>In reply to:</strong> <a href="25378.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25380.php">Maxime Boissonneault: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Reply:</strong> <a href="25380.php">Maxime Boissonneault: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
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
