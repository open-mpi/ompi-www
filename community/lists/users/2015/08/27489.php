<?
$subject_val = "[OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 17:24:22 2015" -->
<!-- isoreceived="20150825212422" -->
<!-- sent="Tue, 25 Aug 2015 14:24:02 -0700" -->
<!-- isosent="20150825212402" -->
<!-- name="Yong Qin" -->
<!-- email="yong.qin_at_[hidden]" -->
<!-- subject="[OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)" -->
<!-- id="CADEJBEUmiAdqm9zBGna8kOt=SkWXkGbBTgQZ-JKndcb_qkO1fw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)<br>
<strong>From:</strong> Yong Qin (<em>yong.qin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 17:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27490.php">Ralph Castain: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Previous message:</strong> <a href="27488.php">Ralph Castain: "Re: [OMPI users] default number of slots in openmpi 1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27490.php">Ralph Castain: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Reply:</strong> <a href="27490.php">Ralph Castain: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This has been bothering me for a while but I never got a chance to identify
<br>
the root cause. I know this issue could be due to misconfig of network or
<br>
ssh in many cases. But I'm pretty sure that we don't fall into that
<br>
category at all. Proof? This issue doesn't happen in 1.6.x and earlier
<br>
releases, but only in 1.8+ including the 1.10.0 which was released today.
<br>
<p>[yqin_at_n0009.scs00 ~]$ mpirun -V
<br>
mpirun (Open MPI) 1.6.5
<br>
<p>[yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H n0189.mako0,n0233.mako0,n0198.mako0
<br>
hostname
<br>
n0233.mako0
<br>
n0189.mako0
<br>
n0198.mako0
<br>
<p>[yqin_at_n0009.scs00 ~]$ mpirun -V
<br>
mpirun (Open MPI) 1.8.8
<br>
<p>[yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H n0189.mako0,n0233.mako0,n0198.mako0
<br>
hostname
<br>
ssh: Could not resolve hostname n0198: Name or service not known
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
<p>[yqin_at_n0009.scs00 ~]$ mpirun -V
<br>
mpirun (Open MPI) 1.10.0
<br>
<p>[yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H n0189.mako0,n0233.mako0,n0198.mako0
<br>
hostname
<br>
ssh: Could not resolve hostname n0198: Name or service not known
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
<p><p>Note that I was running the mpirun from &quot;n0009.scs00&quot;. If I ran it from a
<br>
native &quot;mako0&quot; node, it would pass as well.
<br>
<p>[yqin_at_n0198.mako0 ~]$ mpirun -V
<br>
mpirun (Open MPI) 1.10.0
<br>
<p>[yqin_at_n0198.mako0 ~]$ mpirun -np 3 -H n0189.mako0,n0233.mako0,n0198.mako0
<br>
hostname
<br>
n0189.mako0
<br>
n0198.mako0
<br>
n0233.mako0
<br>
<p>The network connection between n0009.scs00 and all the &quot;mako0&quot; nodes are
<br>
clear and no firewall at all, and all on the same subnet. The only thing
<br>
that I can think of is the hostname itself. From the error message mpirun
<br>
was trying to resolve n0198, etc., even though the proper hostname that's
<br>
passed to it was n0198.mako0. &quot;n0198&quot; by itself would not resolve because
<br>
we have multiple clusters configured within the same subnet and we do need
<br>
the cluster name suffix as identifier. But this is also not always true,
<br>
for example, if I only have two nodes involved than it would pass as well.
<br>
<p>[yqin_at_n0009.scs00 ~]$ mpirun -V
<br>
mpirun (Open MPI) 1.10.0
<br>
<p>[yqin_at_n0009.scs00 ~]$ mpirun -np 2 -H n0189.mako0,n0233.mako0 hostname
<br>
n0189.mako0
<br>
n0233.mako0
<br>
<p>The issue only exposes itself when more than 2 nodes are involved. Any
<br>
thoughts?
<br>
<p>Thanks,
<br>
<p>Yong Qin
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27489/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27490.php">Ralph Castain: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Previous message:</strong> <a href="27488.php">Ralph Castain: "Re: [OMPI users] default number of slots in openmpi 1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27490.php">Ralph Castain: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Reply:</strong> <a href="27490.php">Ralph Castain: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
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
