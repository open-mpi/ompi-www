<?
$subject_val = "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 02:50:23 2016" -->
<!-- isoreceived="20160504065023" -->
<!-- sent="Wed, 4 May 2016 08:50:22 +0200" -->
<!-- isosent="20160504065022" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used" -->
<!-- id="CAKbzMGeG-rg1ordhku+PX2VpMeZ8p=jR+7a3PGZ5nadvHTy=yQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="21D53104-2A0E-4534-842B-C8913A7C9558_at_cisco.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-04 02:50:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29081.php">Dave Love: "[OMPI users] barrier algorithm 5"</a>
<li><strong>Previous message:</strong> <a href="29079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>In reply to:</strong> <a href="29079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually all machines use iptables as firewall.
<br>
<p>I compared the rules triops and kraken use and found that triops had the
<br>
line
<br>
&nbsp;&nbsp;REJECT     all  --  anywhere             anywhere             reject-with
<br>
icmp-host-prohibited
<br>
which kraken did not have (otherwise they were identical).
<br>
I removed that line from triops' rules, restarted iptables and now
<br>
communication works in all directions!
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Tue, May 3, 2016 at 7:00 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Have you disabled firewalls between these machines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 3, 2016, at 11:26 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...my bad!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I had set up things so that PATH and LD_LIBRARY_PATH were correct in
</span><br>
<span class="quotelev1">&gt; interactive mode,
</span><br>
<span class="quotelev2">&gt; &gt; but they were wrong ssh was called non-interactively.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now i have a new problem:
</span><br>
<span class="quotelev2">&gt; &gt; When i do
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun -np 6 --hostfile krakenhosts hostname
</span><br>
<span class="quotelev2">&gt; &gt; from triops, sometimes it seems to hang (i.e. no output, doesn't end)
</span><br>
<span class="quotelev2">&gt; &gt; and at other time i get the ouput
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; [aim-kraken:24527] [[45056,0],1] tcp_peer_send_blocking: send() to
</span><br>
<span class="quotelev1">&gt; socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev2">&gt; &gt; This usually is caused by:
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; Again, i can call mpirun on triops from kraken und all squid_XX without
</span><br>
<span class="quotelev1">&gt; a problem...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What could cause this problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank You
</span><br>
<span class="quotelev2">&gt; &gt;   Jody
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 3, 2016 at 2:54 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Have you verified that you are running the same version of Open MPI on
</span><br>
<span class="quotelev1">&gt; both servers when launched from non-interactive logins?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This kind of error is somewhat typical if you accidentally mixed, for
</span><br>
<span class="quotelev1">&gt; example, Open MPI v1.6.x and v1.10.2 (i.e., v1.10.2 understands the
</span><br>
<span class="quotelev1">&gt; --hnp-topo-sig back end option, but v1.6.x does not).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 3, 2016, at 6:35 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have installed Open MPI v 1.10.2 on two machines today using only
</span><br>
<span class="quotelev1">&gt; the prefix-option for configure, and then doing 'make all install'.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On both machines i changed .bashrc to set PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; correctly.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (I checked by running 'mpirun --version' and verifying that the output
</span><br>
<span class="quotelev1">&gt; does indeed say 1.10.2)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Password-less ssh is enabled on both machines in both directions.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When i start mpirun form one machine (kraken) with a hostfile
</span><br>
<span class="quotelev1">&gt; specifying the other machine (&quot;triops slots=8 max-slots=8),
</span><br>
<span class="quotelev3">&gt; &gt; &gt; it works:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jody_at_kraken ~ $ mpirun -np 3 --hostfile triopshosts uptime
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But when i start mpirun form triops with a hostfile specifying kraken
</span><br>
<span class="quotelev1">&gt; (&quot;kraken slots=8 max-slots=8&quot;),
</span><br>
<span class="quotelev3">&gt; &gt; &gt; it fails:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jody_at_triops ~ $ mpirun -np 3 --hostfile krakenhosts hostname
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [aim-kraken:21973] Error: unknown option &quot;--hnp-topo-sig&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; input in flex scanner failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This usually is caused by:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; * the inability to write startup files into /tmp
</span><br>
<span class="quotelev1">&gt; (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Please check with your sys admin to determine the correct location
</span><br>
<span class="quotelev1">&gt; to use.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *  compilation of the orted with dynamic libraries when static are
</span><br>
<span class="quotelev1">&gt; required
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   (e.g., on Cray). Please check your configure cmd line and consider
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   and network routing requirements).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The same error happens when i use '--host kraken'.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I verified that PATH and LD_LIBRARY_PATH are correctly set on both
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; And on both machines /tmp is readable, writeable and executable for
</span><br>
<span class="quotelev1">&gt; all.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The connection should be okay (i can do a ssh from kraken to triops
</span><br>
<span class="quotelev1">&gt; and vice versa).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any idea what the problem is?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank You
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Jody
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29074.php">http://www.open-mpi.org/community/lists/users/2016/05/29074.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29075.php">http://www.open-mpi.org/community/lists/users/2016/05/29075.php</a>
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29078.php">http://www.open-mpi.org/community/lists/users/2016/05/29078.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29079.php">http://www.open-mpi.org/community/lists/users/2016/05/29079.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29080/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29081.php">Dave Love: "[OMPI users] barrier algorithm 5"</a>
<li><strong>Previous message:</strong> <a href="29079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>In reply to:</strong> <a href="29079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
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
