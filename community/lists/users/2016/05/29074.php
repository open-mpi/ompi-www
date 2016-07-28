<?
$subject_val = "[OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 06:35:12 2016" -->
<!-- isoreceived="20160503103512" -->
<!-- sent="Tue, 3 May 2016 12:35:10 +0200" -->
<!-- isosent="20160503103510" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used" -->
<!-- id="CAKbzMGfufCRvMEEs4LgCzmFt1i=DJVZqO-oU+ZZHR0ri63tMug_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] mpirun gives error when option '--hostfiles' or '--hosts' is used<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 06:35:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29075.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used"</a>
<li><strong>Previous message:</strong> <a href="29073.php">Maciek Lewi&#197;&#132;ski: "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29075.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used"</a>
<li><strong>Reply:</strong> <a href="29075.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I have installed Open MPI v 1.10.2 on two machines today using only the
<br>
prefix-option for configure, and then doing 'make all install'.
<br>
<p>On both machines i changed .bashrc to set PATH and LD_LIBRARY_PATH
<br>
correctly.
<br>
(I checked by running 'mpirun --version' and verifying that the output does
<br>
indeed say 1.10.2)
<br>
<p>Password-less ssh is enabled on both machines in both directions.
<br>
<p>When i start mpirun form one machine (kraken) with a hostfile specifying
<br>
the other machine (&quot;triops slots=8 max-slots=8),
<br>
it works:
<br>
-----
<br>
jody_at_kraken ~ $ mpirun -np 3 --hostfile triopshosts uptime
<br>
&nbsp;12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
<br>
&nbsp;12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
<br>
&nbsp;12:24:04 up 7 days, 43 min, 17 users,  load average: 0.06, 0.68, 0.65
<br>
-----
<br>
<p>But when i start mpirun form triops with a hostfile specifying kraken
<br>
(&quot;kraken slots=8 max-slots=8&quot;),
<br>
it fails:
<br>
-----
<br>
jody_at_triops ~ $ mpirun -np 3 --hostfile krakenhosts hostname
<br>
[aim-kraken:21973] Error: unknown option &quot;--hnp-topo-sig&quot;
<br>
input in flex scanner failed
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
<p>* not finding the required libraries and/or binaries on
<br>
&nbsp;&nbsp;one or more nodes. Please check your PATH and LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;settings, or configure OMPI with --enable-orterun-prefix-by-default
<br>
<p>* lack of authority to execute on one or more specified nodes.
<br>
&nbsp;&nbsp;Please verify your allocation and authorities.
<br>
<p>* the inability to write startup files into /tmp
<br>
(--tmpdir/orte_tmpdir_base).
<br>
&nbsp;&nbsp;Please check with your sys admin to determine the correct location to use.
<br>
<p>*  compilation of the orted with dynamic libraries when static are required
<br>
&nbsp;&nbsp;(e.g., on Cray). Please check your configure cmd line and consider using
<br>
&nbsp;&nbsp;one of the contrib/platform definitions for your system type.
<br>
<p>* an inability to create a connection back to mpirun due to a
<br>
&nbsp;&nbsp;lack of common network interfaces and/or no route found between
<br>
&nbsp;&nbsp;them. Please check network connectivity (including firewalls
<br>
&nbsp;&nbsp;and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
<p>The same error happens when i use '--host kraken'.
<br>
<p>I verified that PATH and LD_LIBRARY_PATH are correctly set on both machines.
<br>
And on both machines /tmp is readable, writeable and executable for all.
<br>
The connection should be okay (i can do a ssh from kraken to triops and
<br>
vice versa).
<br>
<p>Any idea what the problem is?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29075.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used"</a>
<li><strong>Previous message:</strong> <a href="29073.php">Maciek Lewi&#197;&#132;ski: "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29075.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used"</a>
<li><strong>Reply:</strong> <a href="29075.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun gives error when option '--hostfiles' or	'--hosts' is used"</a>
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
