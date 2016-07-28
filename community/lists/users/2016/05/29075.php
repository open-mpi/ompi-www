<?
$subject_val = "Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 08:54:57 2016" -->
<!-- isoreceived="20160503125457" -->
<!-- sent="Tue, 3 May 2016 12:54:31 +0000" -->
<!-- isosent="20160503125431" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used" -->
<!-- id="2CB4ABAB-A705-4460-B753-2783A2873D8E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKbzMGfufCRvMEEs4LgCzmFt1i=DJVZqO-oU+ZZHR0ri63tMug_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 08:54:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29076.php">Dave Love: "[OMPI users] collective tuning (was: MPI_Bcast implementations in OpenMPI)"</a>
<li><strong>Previous message:</strong> <a href="29074.php">jody: "[OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>In reply to:</strong> <a href="29074.php">jody: "[OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29078.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>Reply:</strong> <a href="29078.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you verified that you are running the same version of Open MPI on both servers when launched from non-interactive logins?
<br>
<p>This kind of error is somewhat typical if you accidentally mixed, for example, Open MPI v1.6.x and v1.10.2 (i.e., v1.10.2 understands the --hnp-topo-sig back end option, but v1.6.x does not).
<br>
<p><p><span class="quotelev1">&gt; On May 3, 2016, at 6:35 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I have installed Open MPI v 1.10.2 on two machines today using only the prefix-option for configure, and then doing 'make all install'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On both machines i changed .bashrc to set PATH and LD_LIBRARY_PATH correctly.
</span><br>
<span class="quotelev1">&gt; (I checked by running 'mpirun --version' and verifying that the output does indeed say 1.10.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Password-less ssh is enabled on both machines in both directions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i start mpirun form one machine (kraken) with a hostfile specifying the other machine (&quot;triops slots=8 max-slots=8),
</span><br>
<span class="quotelev1">&gt; it works:
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; jody_at_kraken ~ $ mpirun -np 3 --hostfile triopshosts uptime  
</span><br>
<span class="quotelev1">&gt;  12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
</span><br>
<span class="quotelev1">&gt;  12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
</span><br>
<span class="quotelev1">&gt;  12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when i start mpirun form triops with a hostfile specifying kraken (&quot;kraken slots=8 max-slots=8&quot;),
</span><br>
<span class="quotelev1">&gt; it fails:
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; jody_at_triops ~ $ mpirun -np 3 --hostfile krakenhosts hostname
</span><br>
<span class="quotelev1">&gt; [aim-kraken:21973] Error: unknown option &quot;--hnp-topo-sig&quot;
</span><br>
<span class="quotelev1">&gt; input in flex scanner failed
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;   and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same error happens when i use '--host kraken'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I verified that PATH and LD_LIBRARY_PATH are correctly set on both machines.
</span><br>
<span class="quotelev1">&gt; And on both machines /tmp is readable, writeable and executable for all.
</span><br>
<span class="quotelev1">&gt; The connection should be okay (i can do a ssh from kraken to triops and vice versa).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what the problem is?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;   Jody 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29074.php">http://www.open-mpi.org/community/lists/users/2016/05/29074.php</a>
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
<li><strong>Next message:</strong> <a href="29076.php">Dave Love: "[OMPI users] collective tuning (was: MPI_Bcast implementations in OpenMPI)"</a>
<li><strong>Previous message:</strong> <a href="29074.php">jody: "[OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>In reply to:</strong> <a href="29074.php">jody: "[OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29078.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>Reply:</strong> <a href="29078.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
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
