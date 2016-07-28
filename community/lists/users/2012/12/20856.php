<?
$subject_val = "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 03:23:11 2012" -->
<!-- isoreceived="20121203082311" -->
<!-- sent="Mon, 3 Dec 2012 09:23:05 +0100" -->
<!-- isosent="20121203082305" -->
<!-- name="pascal.deveze_at_[hidden]" -->
<!-- email="pascal.deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Lustre hints via environment variables/runtime	parameters" -->
<!-- id="OF006698ED.9B9E6E74-ONC1257AC9.002DAD0F-C1257AC9.002E0F46_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50BA0A5D.7010106_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Lustre hints via environment variables/runtime	parameters<br>
<strong>From:</strong> <a href="mailto:pascal.deveze_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Lustre%20hints%20via%20environment%20variables/runtime	parameters"><em>pascal.deveze_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-12-03 03:23:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20857.php">Silvio a Beccara: "[OMPI users] Possible memory leak in MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="20855.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20838.php">Eric Chamberland: "[OMPI users] Lustre hints via environment variables/runtime parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20858.php">Eric Chamberland: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
<li><strong>Reply:</strong> <a href="20858.php">Eric Chamberland: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
users-bounces_at_[hidden] a &#233;crit sur 01/12/2012 14:47:09 :
<br>
<p><span class="quotelev1">&gt; De : Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date : 01/12/2012 14:47
</span><br>
<span class="quotelev1">&gt; Objet : [OMPI users] Lustre hints via environment variables/runtime 
</span><br>
parameters
<br>
<span class="quotelev1">&gt; Envoy&#233; par : users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using openmpi 1.6.3 with lustre.  I can change the stip count via 
</span><br>
<span class="quotelev1">&gt; &quot;striping_unit&quot; but if I try to change the stripe size via 
</span><br>
<span class="quotelev1">&gt; &quot;striping_factor&quot;, all my options are ignored and fall back on the 
</span><br>
<span class="quotelev1">&gt; default values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is what I do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================
</span><br>
<span class="quotelev1">&gt; setenv ROMIO_HINTS /home/ericc/romio-hints
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cat $ROMIO_HINTS
</span><br>
<span class="quotelev1">&gt; striping_unit 16
</span><br>
<span class="quotelev1">&gt; striping_factor 1048576
</span><br>
<p>try with:
<br>
<p>striping_unit 1048576
<br>
striping_factor 16
<br>
<p>(stripe_size means striping_unit and stripe_count means striping_factor)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rm temp ; mpirun -n 3 idx2 ; lfs getstripe temp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; temp
</span><br>
<span class="quotelev1">&gt; lmm_stripe_count:   1
</span><br>
<span class="quotelev1">&gt; lmm_stripe_size:    65536
</span><br>
<span class="quotelev1">&gt; lmm_stripe_offset:  28
</span><br>
<span class="quotelev1">&gt;          obdidx           objid          objid            group
</span><br>
<span class="quotelev1">&gt;              28        23877295      0x16c56af                0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I remove the &quot;striping_factor 1048576&quot; entry in my hint file, I get 
</span><br>
this:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================
</span><br>
<span class="quotelev1">&gt; cat $ROMIO_HINTS
</span><br>
<span class="quotelev1">&gt; striping_unit 16
</span><br>
<span class="quotelev1">&gt; #striping_factor 1048576
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rm temp ; mpirun -n 3 idx2 ; lfs getstripe temp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; temp
</span><br>
<span class="quotelev1">&gt; lmm_stripe_count:   36
</span><br>
<span class="quotelev1">&gt; lmm_stripe_size:    65536
</span><br>
<span class="quotelev1">&gt; lmm_stripe_offset:  21
</span><br>
<span class="quotelev1">&gt;          obdidx           objid          objid            group
</span><br>
<span class="quotelev1">&gt;              21        27078098      0x19d2dd2                0
</span><br>
<span class="quotelev1">&gt;               5        26516786      0x1949d32                0
</span><br>
<span class="quotelev1">&gt;              18        26272707      0x190e3c3                0
</span><br>
<span class="quotelev1">&gt;               2        22198271      0x152b7ff                0
</span><br>
<span class="quotelev1">&gt;              14        24302770      0x172d4b2                0
</span><br>
<span class="quotelev1">&gt;              16        20970007      0x13ffa17                0
</span><br>
<span class="quotelev1">&gt;              28        23877307      0x16c56bb                0
</span><br>
<span class="quotelev1">&gt;               6        25726827      0x1888f6b                0
</span><br>
<span class="quotelev1">&gt;              31        23623835      0x168789b                0
</span><br>
<span class="quotelev1">&gt;              23        24231103      0x171bcbf                0
</span><br>
<span class="quotelev1">&gt;              34        23963185      0x16da631                0
</span><br>
<span class="quotelev1">&gt;               3        23462711      0x1660337                0
</span><br>
<span class="quotelev1">&gt;              13        27515658      0x1a3db0a                0
</span><br>
<span class="quotelev1">&gt;              26        23502238      0x1669d9e                0
</span><br>
<span class="quotelev1">&gt;               7        26708491      0x1978a0b                0
</span><br>
<span class="quotelev1">&gt;              32        21946148      0x14edf24                0
</span><br>
<span class="quotelev1">&gt;              17        26912937      0x19aa8a9                0
</span><br>
<span class="quotelev1">&gt;               4        24586434      0x17728c2                0
</span><br>
<span class="quotelev1">&gt;              27        23277776      0x16330d0                0
</span><br>
<span class="quotelev1">&gt;               9        23634614      0x168a2b6                0
</span><br>
<span class="quotelev1">&gt;              11        25769779      0x1893733                0
</span><br>
<span class="quotelev1">&gt;              33        24915767      0x17c2f37                0
</span><br>
<span class="quotelev1">&gt;              29        20790315      0x13d3c2b                0
</span><br>
<span class="quotelev1">&gt;               8        25647332      0x18758e4                0
</span><br>
<span class="quotelev1">&gt;              20        26938873      0x19b0df9                0
</span><br>
<span class="quotelev1">&gt;              19        26182463      0x18f833f                0
</span><br>
<span class="quotelev1">&gt;              12        25346469      0x182c1a5                0
</span><br>
<span class="quotelev1">&gt;              15        25681819      0x187df9b                0
</span><br>
<span class="quotelev1">&gt;              24        23898261      0x16ca895                0
</span><br>
<span class="quotelev1">&gt;              10        26554081      0x1952ee1                0
</span><br>
<span class="quotelev1">&gt;              25        23512409      0x166c559                0
</span><br>
<span class="quotelev1">&gt;               0        28428909      0x1b1ca6d                0
</span><br>
<span class="quotelev1">&gt;              30        23953009      0x16d7e71                0
</span><br>
<span class="quotelev1">&gt;              22        24117691      0x17001bb                0
</span><br>
<span class="quotelev1">&gt;              35        20972494      0x14003ce                0
</span><br>
<span class="quotelev1">&gt;               1        25492821      0x184fd55                0
</span><br>
<span class="quotelev1">&gt; =============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And if I don't put anything in the file, I get this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================
</span><br>
<span class="quotelev1">&gt; cat $ROMIO_HINTS
</span><br>
<span class="quotelev1">&gt; #striping_unit 16
</span><br>
<span class="quotelev1">&gt; #striping_factor 1048576
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rm temp ; mpirun -n 3 idx2 ; lfs getstripe temp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; temp
</span><br>
<span class="quotelev1">&gt; lmm_stripe_count:   1
</span><br>
<span class="quotelev1">&gt; lmm_stripe_size:    1048576
</span><br>
<span class="quotelev1">&gt; lmm_stripe_offset:  18
</span><br>
<span class="quotelev1">&gt;          obdidx           objid          objid            group
</span><br>
<span class="quotelev1">&gt;              18        26272802      0x190e422                0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which are the default values of our lustre.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20856/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20857.php">Silvio a Beccara: "[OMPI users] Possible memory leak in MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="20855.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20838.php">Eric Chamberland: "[OMPI users] Lustre hints via environment variables/runtime parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20858.php">Eric Chamberland: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
<li><strong>Reply:</strong> <a href="20858.php">Eric Chamberland: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
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
