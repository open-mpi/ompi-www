<?
$subject_val = "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 14:45:19 2014" -->
<!-- isoreceived="20140923184519" -->
<!-- sent="Tue, 23 Sep 2014 20:45:02 +0200" -->
<!-- isosent="20140923184502" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange affinity messages with 1.8 and torque 5" -->
<!-- id="5B5762A0-030A-4A2D-B32A-EC6527F88E7C_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="04FF5613-2CAD-4033-A922-6EBFA02BE31E_at_umich.edu" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-23 14:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25377.php">Maxime Boissonneault: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Previous message:</strong> <a href="25375.php">Brock Palen: "[OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>In reply to:</strong> <a href="25375.php">Brock Palen: "[OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25378.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Reply:</strong> <a href="25378.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Am 23.09.2014 um 19:53 schrieb Brock Palen:
<br>
<p><span class="quotelev1">&gt; I found a fun head scratcher, with openmpi 1.8.2  with torque 5 built with TM support, on hereto core layouts  I get the fun thing:
</span><br>
<span class="quotelev1">&gt; mpirun -report-bindings hostname        &lt;-------- Works
</span><br>
<p>And you get 64 lines of output?
<br>
<p><p><span class="quotelev1">&gt; mpirun -report-bindings -np 64 hostname   &lt;--------- Wat?
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;   Node:        nyx5518
</span><br>
<span class="quotelev1">&gt;   #processes:  2
</span><br>
<span class="quotelev1">&gt;   #cpus:       1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>How many cores are physically installed on this machine - two as mentioned above?
<br>
<p>- -- Reuti
<br>
<p><p><span class="quotelev1">&gt; I ran with --oversubscribed and got the expected host list, which matched $PBS_NODEFILE and was 64 entires long:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -overload-allowed -report-bindings -np 64 --oversubscribe hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What did I do wrong?  I'm stumped why one works one doesn't but the one that doesn't if your force it appears correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25375.php">http://www.open-mpi.org/community/lists/users/2014/09/25375.php</a>
</span><br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG/MacGPG2 v2.0.20 (Darwin)
<br>
Comment: GPGTools - <a href="http://gpgtools.org">http://gpgtools.org</a>
<br>
<p>iEYEARECAAYFAlQhv7IACgkQo/GbGkBRnRr3HgCgjZoD9l9a+WThl5CDaGF1jawx
<br>
PWIAmwWnZwQdytNgAJgbir6V7yCyBt5D
<br>
=NG0H
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25377.php">Maxime Boissonneault: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Previous message:</strong> <a href="25375.php">Brock Palen: "[OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>In reply to:</strong> <a href="25375.php">Brock Palen: "[OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25378.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Reply:</strong> <a href="25378.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
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
