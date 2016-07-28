<?
$subject_val = "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 13:00:13 2016" -->
<!-- isoreceived="20160503170013" -->
<!-- sent="Tue, 3 May 2016 17:00:10 +0000" -->
<!-- isosent="20160503170010" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used" -->
<!-- id="21D53104-2A0E-4534-842B-C8913A7C9558_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKbzMGd3qMrkuan9kmm0sJWHah4Nf1g5jEeVXhcYg=GUDFQ5SQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 13:00:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29080.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>Previous message:</strong> <a href="29078.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>In reply to:</strong> <a href="29078.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29080.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>Reply:</strong> <a href="29080.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you disabled firewalls between these machines?
<br>
<p><span class="quotelev1">&gt; On May 3, 2016, at 11:26 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...my bad!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had set up things so that PATH and LD_LIBRARY_PATH were correct in interactive mode,
</span><br>
<span class="quotelev1">&gt; but they were wrong ssh was called non-interactively.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now i have a new problem:
</span><br>
<span class="quotelev1">&gt; When i do 
</span><br>
<span class="quotelev1">&gt;   mpirun -np 6 --hostfile krakenhosts hostname
</span><br>
<span class="quotelev1">&gt; from triops, sometimes it seems to hang (i.e. no output, doesn't end)
</span><br>
<span class="quotelev1">&gt; and at other time i get the ouput
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [aim-kraken:24527] [[45056,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Again, i can call mpirun on triops from kraken und all squid_XX without a problem...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What could cause this problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, May 3, 2016 at 2:54 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Have you verified that you are running the same version of Open MPI on both servers when launched from non-interactive logins?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This kind of error is somewhat typical if you accidentally mixed, for example, Open MPI v1.6.x and v1.10.2 (i.e., v1.10.2 understands the --hnp-topo-sig back end option, but v1.6.x does not).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 3, 2016, at 6:35 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; I have installed Open MPI v 1.10.2 on two machines today using only the prefix-option for configure, and then doing 'make all install'.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On both machines i changed .bashrc to set PATH and LD_LIBRARY_PATH correctly.
</span><br>
<span class="quotelev2">&gt; &gt; (I checked by running 'mpirun --version' and verifying that the output does indeed say 1.10.2)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Password-less ssh is enabled on both machines in both directions.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When i start mpirun form one machine (kraken) with a hostfile specifying the other machine (&quot;triops slots=8 max-slots=8),
</span><br>
<span class="quotelev2">&gt; &gt; it works:
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; jody_at_kraken ~ $ mpirun -np 3 --hostfile triopshosts uptime
</span><br>
<span class="quotelev2">&gt; &gt;  12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
</span><br>
<span class="quotelev2">&gt; &gt;  12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
</span><br>
<span class="quotelev2">&gt; &gt;  12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But when i start mpirun form triops with a hostfile specifying kraken (&quot;kraken slots=8 max-slots=8&quot;),
</span><br>
<span class="quotelev2">&gt; &gt; it fails:
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; jody_at_triops ~ $ mpirun -np 3 --hostfile krakenhosts hostname
</span><br>
<span class="quotelev2">&gt; &gt; [aim-kraken:21973] Error: unknown option &quot;--hnp-topo-sig&quot;
</span><br>
<span class="quotelev2">&gt; &gt; input in flex scanner failed
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev2">&gt; &gt; This usually is caused by:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev2">&gt; &gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev2">&gt; &gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev2">&gt; &gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev2">&gt; &gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev2">&gt; &gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev2">&gt; &gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev2">&gt; &gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev2">&gt; &gt;   and network routing requirements).
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same error happens when i use '--host kraken'.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I verified that PATH and LD_LIBRARY_PATH are correctly set on both machines.
</span><br>
<span class="quotelev2">&gt; &gt; And on both machines /tmp is readable, writeable and executable for all.
</span><br>
<span class="quotelev2">&gt; &gt; The connection should be okay (i can do a ssh from kraken to triops and vice versa).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea what the problem is?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank You
</span><br>
<span class="quotelev2">&gt; &gt;   Jody
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29074.php">http://www.open-mpi.org/community/lists/users/2016/05/29074.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29075.php">http://www.open-mpi.org/community/lists/users/2016/05/29075.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29078.php">http://www.open-mpi.org/community/lists/users/2016/05/29078.php</a>
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
<li><strong>Next message:</strong> <a href="29080.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>Previous message:</strong> <a href="29078.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>In reply to:</strong> <a href="29078.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29080.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>Reply:</strong> <a href="29080.php">jody: "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
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
