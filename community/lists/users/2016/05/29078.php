<?
$subject_val = "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 11:26:21 2016" -->
<!-- isoreceived="20160503152621" -->
<!-- sent="Tue, 3 May 2016 17:26:19 +0200" -->
<!-- isosent="20160503152619" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used" -->
<!-- id="CAKbzMGd3qMrkuan9kmm0sJWHah4Nf1g5jEeVXhcYg=GUDFQ5SQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2CB4ABAB-A705-4460-B753-2783A2873D8E_at_cisco.com" -->
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
<strong>Date:</strong> 2016-05-03 11:26:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>Previous message:</strong> <a href="29077.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="29075.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>Reply:</strong> <a href="29079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
...my bad!
<br>
<p>I had set up things so that PATH and LD_LIBRARY_PATH were correct in
<br>
interactive mode,
<br>
but they were wrong ssh was called non-interactively.
<br>
<p>Now i have a new problem:
<br>
When i do
<br>
&nbsp;&nbsp;mpirun -np 6 --hostfile krakenhosts hostname
<br>
from triops, sometimes it seems to hang (i.e. no output, doesn't end)
<br>
and at other time i get the ouput
<br>
<pre>
----
[aim-kraken:24527] [[45056,0],1] tcp_peer_send_blocking: send() to socket 9
failed: Broken pipe (32)
--------------------------------------------------------------------------
ORTE was unable to reliably start one or more daemons.
This usually is caused by:
...
--------------------------------------------------------------------------
-----
Again, i can call mpirun on triops from kraken und all squid_XX without a
problem...
What could cause this problem?
Thank You
  Jody
On Tue, May 3, 2016 at 2:54 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
wrote:
&gt; Have you verified that you are running the same version of Open MPI on
&gt; both servers when launched from non-interactive logins?
&gt;
&gt; This kind of error is somewhat typical if you accidentally mixed, for
&gt; example, Open MPI v1.6.x and v1.10.2 (i.e., v1.10.2 understands the
&gt; --hnp-topo-sig back end option, but v1.6.x does not).
&gt;
&gt;
&gt; &gt; On May 3, 2016, at 6:35 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
&gt; &gt;
&gt; &gt; Hi
&gt; &gt; I have installed Open MPI v 1.10.2 on two machines today using only the
&gt; prefix-option for configure, and then doing 'make all install'.
&gt; &gt;
&gt; &gt; On both machines i changed .bashrc to set PATH and LD_LIBRARY_PATH
&gt; correctly.
&gt; &gt; (I checked by running 'mpirun --version' and verifying that the output
&gt; does indeed say 1.10.2)
&gt; &gt;
&gt; &gt; Password-less ssh is enabled on both machines in both directions.
&gt; &gt;
&gt; &gt; When i start mpirun form one machine (kraken) with a hostfile specifying
&gt; the other machine (&quot;triops slots=8 max-slots=8),
&gt; &gt; it works:
&gt; &gt; -----
&gt; &gt; jody_at_kraken ~ $ mpirun -np 3 --hostfile triopshosts uptime
&gt; &gt;  12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
&gt; &gt;  12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
&gt; &gt;  12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
&gt; &gt; -----
&gt; &gt;
&gt; &gt; But when i start mpirun form triops with a hostfile specifying kraken
&gt; (&quot;kraken slots=8 max-slots=8&quot;),
&gt; &gt; it fails:
&gt; &gt; -----
&gt; &gt; jody_at_triops ~ $ mpirun -np 3 --hostfile krakenhosts hostname
&gt; &gt; [aim-kraken:21973] Error: unknown option &quot;--hnp-topo-sig&quot;
&gt; &gt; input in flex scanner failed
&gt; &gt;
&gt; --------------------------------------------------------------------------
&gt; &gt; ORTE was unable to reliably start one or more daemons.
&gt; &gt; This usually is caused by:
&gt; &gt;
&gt; &gt; * not finding the required libraries and/or binaries on
&gt; &gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
&gt; &gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
&gt; &gt;
&gt; &gt; * lack of authority to execute on one or more specified nodes.
&gt; &gt;   Please verify your allocation and authorities.
&gt; &gt;
&gt; &gt; * the inability to write startup files into /tmp
&gt; (--tmpdir/orte_tmpdir_base).
&gt; &gt;   Please check with your sys admin to determine the correct location to
&gt; use.
&gt; &gt;
&gt; &gt; *  compilation of the orted with dynamic libraries when static are
&gt; required
&gt; &gt;   (e.g., on Cray). Please check your configure cmd line and consider
&gt; using
&gt; &gt;   one of the contrib/platform definitions for your system type.
&gt; &gt;
&gt; &gt; * an inability to create a connection back to mpirun due to a
&gt; &gt;   lack of common network interfaces and/or no route found between
&gt; &gt;   them. Please check network connectivity (including firewalls
&gt; &gt;   and network routing requirements).
&gt; &gt;
&gt; --------------------------------------------------------------------------
&gt; &gt;
&gt; &gt; The same error happens when i use '--host kraken'.
&gt; &gt;
&gt; &gt; I verified that PATH and LD_LIBRARY_PATH are correctly set on both
&gt; machines.
&gt; &gt; And on both machines /tmp is readable, writeable and executable for all.
&gt; &gt; The connection should be okay (i can do a ssh from kraken to triops and
&gt; vice versa).
&gt; &gt;
&gt; &gt; Any idea what the problem is?
&gt; &gt;
&gt; &gt; Thank You
&gt; &gt;   Jody
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29074.php">http://www.open-mpi.org/community/lists/users/2016/05/29074.php</a>
&gt;
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29075.php">http://www.open-mpi.org/community/lists/users/2016/05/29075.php</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29078/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>Previous message:</strong> <a href="29077.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="29075.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
<li><strong>Reply:</strong> <a href="29079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used"</a>
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
