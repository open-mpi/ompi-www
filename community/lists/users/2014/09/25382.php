<?
$subject_val = "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 16:23:14 2014" -->
<!-- isoreceived="20140924202314" -->
<!-- sent="Wed, 24 Sep 2014 16:23:08 -0400" -->
<!-- isosent="20140924202308" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange affinity messages with 1.8 and torque 5" -->
<!-- id="060E1673-1566-43A9-944B-DA9702DA281B_at_umich.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5421C986.8040302_at_calculquebec.ca" -->
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
<strong>Date:</strong> 2014-09-24 16:23:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25383.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Previous message:</strong> <a href="25381.php">Au Eelis: "[OMPI users] mpi_file_read and arrays of custom datatypes"</a>
<li><strong>In reply to:</strong> <a href="25380.php">Maxime Boissonneault: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25383.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Reply:</strong> <a href="25383.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So very hetero, I did some testing and I couldn't make it happen below 32 cores.  Not sure if this the real issue or if it requires a specific layout:
<br>
<p>[brockp_at_nyx5512 ~]$ cat $PBS_NODEFILE | sort | uniq -c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5512
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5515
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5518
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5523
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5527
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 nyx5537
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5542
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5560
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 nyx5561
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 nyx5562
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 nyx5589
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5591
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5593
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5617
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 nyx5620
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5622
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 nyx5629
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5630
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5770
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5771
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 nyx5772
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5780
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 nyx5784
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 nyx5820
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10 nyx5844
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 nyx5847
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5849
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5852
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 nyx5856
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5870
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 nyx5872
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx5894
<br>
<p>This sort of layout gives me that warning, if I leave -np 64 
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;Node:        nyx5589
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>If I omit the -np ## it works and nyx5589 does get 3 processes started.
<br>
<p>If I look at the binding of the three ranks on nyx5589 that it complains about they appear correct:
<br>
[root_at_nyx5589 ~]# hwloc-bind --get --pid 24826
<br>
0x00000080  -&gt;  7
<br>
[root_at_nyx5589 ~]# hwloc-bind --get --pid 24827
<br>
0x00000400 -&gt; 10
<br>
[root_at_nyx5589 ~]# hwloc-bind --get --pid 24828
<br>
0x00001000 -&gt; 12
<br>
<p>I think I found the problem though, and its on torque side,  while the CPU set sets up 7, 10, and 12
<br>
PBS server thinks it gave out 6,7, and 10.  Thus where the only 2 processes come from.
<br>
<p>I checked some of the other jobs and the cpusets and the pbs server cpu list are the same.
<br>
<p>More investigation required.  Still strange why would it give that message at all?  Why would OpenMPI care, and why only when -np ## is given.
<br>
<p><p>Brock Palen
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
<p><p><p>On Sep 23, 2014, at 3:27 PM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Do you know the topology of the cores allocated by Torque (i.e. were they all on the same nodes, or 8 per node, or a heterogenous distribution for example ?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 2014-09-23 15:05, Brock Palen a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Yes the request to torque was procs=64,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are using cpusets.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the mpirun without -np 64  creates 64 spawned hostnames.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 23, 2014, at 3:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: that warning has been removed from the upcoming 1.8.3 release
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 23, 2014, at 11:45 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hash: SHA1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 23.09.2014 um 19:53 schrieb Brock Palen:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I found a fun head scratcher, with openmpi 1.8.2  with torque 5 built with TM support, on hereto core layouts  I get the fun thing:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -report-bindings hostname        &lt;-------- Works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And you get 64 lines of output?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -report-bindings -np 64 hostname   &lt;--------- Wat?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Node:        nyx5518
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #processes:  2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #cpus:       1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How many cores are physically installed on this machine - two as mentioned above?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I ran with --oversubscribed and got the expected host list, which matched $PBS_NODEFILE and was 64 entires long:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -overload-allowed -report-bindings -np 64 --oversubscribe hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What did I do wrong?  I'm stumped why one works one doesn't but the one that doesn't if your force it appears correct.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25375.php">http://www.open-mpi.org/community/lists/users/2014/09/25375.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Version: GnuPG/MacGPG2 v2.0.20 (Darwin)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Comment: GPGTools - <a href="http://gpgtools.org">http://gpgtools.org</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; iEYEARECAAYFAlQhv7IACgkQo/GbGkBRnRr3HgCgjZoD9l9a+WThl5CDaGF1jawx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PWIAmwWnZwQdytNgAJgbir6V7yCyBt5D
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =NG0H
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25376.php">http://www.open-mpi.org/community/lists/users/2014/09/25376.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25378.php">http://www.open-mpi.org/community/lists/users/2014/09/25378.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25379.php">http://www.open-mpi.org/community/lists/users/2014/09/25379.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25380.php">http://www.open-mpi.org/community/lists/users/2014/09/25380.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25382/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25383.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Previous message:</strong> <a href="25381.php">Au Eelis: "[OMPI users] mpi_file_read and arrays of custom datatypes"</a>
<li><strong>In reply to:</strong> <a href="25380.php">Maxime Boissonneault: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25383.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Reply:</strong> <a href="25383.php">Ralph Castain: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
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
