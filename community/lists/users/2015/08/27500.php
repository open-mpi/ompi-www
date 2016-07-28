<?
$subject_val = "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 20:09:23 2015" -->
<!-- isoreceived="20150827000923" -->
<!-- sent="Thu, 27 Aug 2015 09:09:16 +0900" -->
<!-- isosent="20150827000916" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)" -->
<!-- id="55DE552C.8040906_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CADEJBEUYy7rMxANt0cP79jtKTUpy9juxXY+LZLppXP=KNqOjYw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-26 20:09:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27501.php">abhisekpan_at_[hidden]: "[OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Previous message:</strong> <a href="27499.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>In reply to:</strong> <a href="27499.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
can you try
<br>
mpirun --mca plm_rsh_no_tree_spawn 1 ...
<br>
without the FQDN and see if it helps ?
<br>
<p>just to be clear, i can understand the following command
<br>
ssh n0189.mako0 ssh n0198 echo ok
<br>
does not work and has never worked before
<br>
<p>what about the following command :
<br>
ssh n0189 ssh n0198.mako0 echo ok
<br>
my guess is that should be working, or if it does not work today, it 
<br>
used to work before
<br>
<p><p>or maybe i am all wrong ...
<br>
are you using any batch manager ? if yes, which one ?
<br>
the issue could be ompi is not using the batch manager integration 
<br>
plugin as it should
<br>
(e.g. it did not use ssh in the past, so you never ran into this issue)
<br>
/* with openmpi 1.6.5, you can run
<br>
strace -f -e execve -s 1024 -- mpirun ...
<br>
and see if
<br>
1) ssh is invoked
<br>
2) ssh is using the FQDN or not
<br>
<p>an other less likely option is your ssh config has changed
<br>
/etc/ssh/ssh_config or $HOME/.ssh/config
<br>
it is possible to do some tweaking with hostnames, so
<br>
ssh node0198 ...
<br>
really do
<br>
ssh node0198.mako0 ...
<br>
under the hood
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/27/2015 8:08 AM, Yong Qin wrote:
<br>
<span class="quotelev1">&gt; Yes all cross-node ssh works perfectly and this is our production 
</span><br>
<span class="quotelev1">&gt; system which have been running for years. I've done all of these 
</span><br>
<span class="quotelev1">&gt; testing and was puzzled by the inconsistent behavior that I observed. 
</span><br>
<span class="quotelev1">&gt; But enabling FQDN resolves the issue so I am just trying to understand 
</span><br>
<span class="quotelev1">&gt; why the inconsistency exists now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [yqin_at_n0009.scs00 ~]$ ssh n0189.mako0 ssh n0198.mako0 echo ok
</span><br>
<span class="quotelev1">&gt; ok
</span><br>
<span class="quotelev1">&gt; [yqin_at_n0009.scs00 ~]$ ssh n0233.mako0 ssh n0198.mako0 echo ok
</span><br>
<span class="quotelev1">&gt; ok
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The latter one wouldn't work because n0198 by itself without a domain 
</span><br>
<span class="quotelev1">&gt; name wouldn't resolve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 26, 2015 at 3:48 PM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     is name resolution working on *all* the nodes ?
</span><br>
<span class="quotelev1">&gt;     orted might be ssh'ed in a tree fashion.
</span><br>
<span class="quotelev1">&gt;     that means orted can either be ssh'ed by the node running mpirun
</span><br>
<span class="quotelev1">&gt;     or any other node.
</span><br>
<span class="quotelev1">&gt;     from n0009.scs00, can you make sure
</span><br>
<span class="quotelev1">&gt;     ssh n0189.mako0 ssh n0198.mako0 echo ok
</span><br>
<span class="quotelev1">&gt;     ssh n0233.mako0 ssh n0198.mako0 echo ok
</span><br>
<span class="quotelev1">&gt;     both work ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     per your log, mpirun might remove the domain name from the ssh
</span><br>
<span class="quotelev1">&gt;     command under the hood.
</span><br>
<span class="quotelev1">&gt;     e.g.
</span><br>
<span class="quotelev1">&gt;     ssh n0189.mako0 ssh n0198 echo ok
</span><br>
<span class="quotelev1">&gt;     or
</span><br>
<span class="quotelev1">&gt;     ssh n0198 ssh n0198.mako0 echo ok
</span><br>
<span class="quotelev1">&gt;     if that is the case, then I have no idea why we are doing this ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Thursday, August 27, 2015, Yong Qin &lt;yong.qin_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:yong.qin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;         &gt; regardless of number of nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         No, this is not true. I was referring to this specific test,
</span><br>
<span class="quotelev1">&gt;         which was the one that preventing me from thinking about FQDN,
</span><br>
<span class="quotelev1">&gt;         and the DN is different in this case. As I clearly stated in
</span><br>
<span class="quotelev1">&gt;         my original question - &quot;The issue only exposes itself when
</span><br>
<span class="quotelev1">&gt;         more than 2 nodes are involved.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev1">&gt;         mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         [yqin_at_n0009.scs00 ~]$ mpirun -np 2 -H n0189.mako0,n0233.mako0
</span><br>
<span class="quotelev1">&gt;         hostname
</span><br>
<span class="quotelev1">&gt;         n0189.mako0
</span><br>
<span class="quotelev1">&gt;         n0233.mako0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Tue, Aug 25, 2015 at 4:39 PM, Ralph Castain
</span><br>
<span class="quotelev1">&gt;         &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Your earlier message indicates that it works fine so long
</span><br>
<span class="quotelev1">&gt;             as the DN was the same, regardless of number of nodes. It
</span><br>
<span class="quotelev1">&gt;             only failed when the DN&#146;s of the nodes differed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On Aug 25, 2015, at 3:31 PM, Yong Qin
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;yong.qin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Of course! I blame that two-node test distracted me from
</span><br>
<span class="quotelev2">&gt;&gt;             checking all the FQDN relevant parameters. :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             So why would the two-node test pass in this case without
</span><br>
<span class="quotelev2">&gt;&gt;             allowing the FQDN then?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On Tue, Aug 25, 2015 at 2:35 PM, Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 You need to set &#151;mca orte_keep_fqdn_hostnames 1 on
</span><br>
<span class="quotelev2">&gt;&gt;                 your mpirun line, or set the equivalent MCA param
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; On Aug 25, 2015, at 2:24 PM, Yong Qin
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;yong.qin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; This has been bothering me for a while but I never
</span><br>
<span class="quotelev2">&gt;&gt;                 got a chance to identify the root cause. I know this
</span><br>
<span class="quotelev2">&gt;&gt;                 issue could be due to misconfig of network or ssh in
</span><br>
<span class="quotelev2">&gt;&gt;                 many cases. But I'm pretty sure that we don't fall
</span><br>
<span class="quotelev2">&gt;&gt;                 into that category at all. Proof? This issue doesn't
</span><br>
<span class="quotelev2">&gt;&gt;                 happen in 1.6.x and earlier releases, but only in
</span><br>
<span class="quotelev2">&gt;&gt;                 1.8+ including the 1.10.0 which was released today.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; mpirun (Open MPI) 1.6.5
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H
</span><br>
<span class="quotelev2">&gt;&gt;                 n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; n0233.mako0
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; n0189.mako0
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; n0198.mako0
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; mpirun (Open MPI) 1.8.8
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H
</span><br>
<span class="quotelev2">&gt;&gt;                 n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; ssh: Could not resolve hostname n0198: Name or
</span><br>
<span class="quotelev2">&gt;&gt;                 service not known
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; This usually is caused by:
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   one or more nodes. Please check your PATH and
</span><br>
<span class="quotelev2">&gt;&gt;                 LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;  settings, or configure OMPI with
</span><br>
<span class="quotelev2">&gt;&gt;                 --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; * lack of authority to execute on one or more
</span><br>
<span class="quotelev2">&gt;&gt;                 specified nodes.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; * the inability to write startup files into /tmp
</span><br>
<span class="quotelev2">&gt;&gt;                 (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   Please check with your sys admin to determine the
</span><br>
<span class="quotelev2">&gt;&gt;                 correct location to use.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; * compilation of the orted with dynamic libraries
</span><br>
<span class="quotelev2">&gt;&gt;                 when static are required
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   (e.g., on Cray). Please check your configure cmd
</span><br>
<span class="quotelev2">&gt;&gt;                 line and consider using
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   one of the contrib/platform definitions for your
</span><br>
<span class="quotelev2">&gt;&gt;                 system type.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; * an inability to create a connection back to
</span><br>
<span class="quotelev2">&gt;&gt;                 mpirun due to a
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   lack of common network interfaces and/or no route
</span><br>
<span class="quotelev2">&gt;&gt;                 found between
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   them. Please check network connectivity
</span><br>
<span class="quotelev2">&gt;&gt;                 (including firewalls
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H
</span><br>
<span class="quotelev2">&gt;&gt;                 n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; ssh: Could not resolve hostname n0198: Name or
</span><br>
<span class="quotelev2">&gt;&gt;                 service not known
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; This usually is caused by:
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   one or more nodes. Please check your PATH and
</span><br>
<span class="quotelev2">&gt;&gt;                 LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;  settings, or configure OMPI with
</span><br>
<span class="quotelev2">&gt;&gt;                 --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; * lack of authority to execute on one or more
</span><br>
<span class="quotelev2">&gt;&gt;                 specified nodes.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; * the inability to write startup files into /tmp
</span><br>
<span class="quotelev2">&gt;&gt;                 (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   Please check with your sys admin to determine the
</span><br>
<span class="quotelev2">&gt;&gt;                 correct location to use.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; * compilation of the orted with dynamic libraries
</span><br>
<span class="quotelev2">&gt;&gt;                 when static are required
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   (e.g., on Cray). Please check your configure cmd
</span><br>
<span class="quotelev2">&gt;&gt;                 line and consider using
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   one of the contrib/platform definitions for your
</span><br>
<span class="quotelev2">&gt;&gt;                 system type.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; * an inability to create a connection back to
</span><br>
<span class="quotelev2">&gt;&gt;                 mpirun due to a
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   lack of common network interfaces and/or no route
</span><br>
<span class="quotelev2">&gt;&gt;                 found between
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   them. Please check network connectivity
</span><br>
<span class="quotelev2">&gt;&gt;                 (including firewalls
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;   and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; Note that I was running the mpirun from
</span><br>
<span class="quotelev2">&gt;&gt;                 &quot;n0009.scs00&quot;. If I ran it from a native &quot;mako0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                 node, it would pass as well.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; [yqin_at_n0198.mako0 ~]$ mpirun -V
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; [yqin_at_n0198.mako0 ~]$ mpirun -np 3 -H
</span><br>
<span class="quotelev2">&gt;&gt;                 n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; n0189.mako0
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; n0198.mako0
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; n0233.mako0
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; The network connection between n0009.scs00 and all
</span><br>
<span class="quotelev2">&gt;&gt;                 the &quot;mako0&quot; nodes are clear and no firewall at all,
</span><br>
<span class="quotelev2">&gt;&gt;                 and all on the same subnet. The only thing that I can
</span><br>
<span class="quotelev2">&gt;&gt;                 think of is the hostname itself. From the error
</span><br>
<span class="quotelev2">&gt;&gt;                 message mpirun was trying to resolve n0198, etc.,
</span><br>
<span class="quotelev2">&gt;&gt;                 even though the proper hostname that's passed to it
</span><br>
<span class="quotelev2">&gt;&gt;                 was n0198.mako0. &quot;n0198&quot; by itself would not resolve
</span><br>
<span class="quotelev2">&gt;&gt;                 because we have multiple clusters configured within
</span><br>
<span class="quotelev2">&gt;&gt;                 the same subnet and we do need the cluster name
</span><br>
<span class="quotelev2">&gt;&gt;                 suffix as identifier. But this is also not always
</span><br>
<span class="quotelev2">&gt;&gt;                 true, for example, if I only have two nodes involved
</span><br>
<span class="quotelev2">&gt;&gt;                 than it would pass as well.
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 2 -H
</span><br>
<span class="quotelev2">&gt;&gt;                 n0189.mako0,n0233.mako0 hostname
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; n0189.mako0
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; n0233.mako0
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; The issue only exposes itself when more than 2
</span><br>
<span class="quotelev2">&gt;&gt;                 nodes are involved. Any thoughts?
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; Yong Qin
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;                 &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;                 <a href="http://www.open-mpi.org/community/lists/users/2015/08/27489.php">http://www.open-mpi.org/community/lists/users/2015/08/27489.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                 Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                 Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;                 <a href="http://www.open-mpi.org/community/lists/users/2015/08/27490.php">http://www.open-mpi.org/community/lists/users/2015/08/27490.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/users/2015/08/27491.php">http://www.open-mpi.org/community/lists/users/2015/08/27491.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             Subscription:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             Link to this post:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/community/lists/users/2015/08/27493.php">http://www.open-mpi.org/community/lists/users/2015/08/27493.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/08/27498.php">http://www.open-mpi.org/community/lists/users/2015/08/27498.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27499.php">http://www.open-mpi.org/community/lists/users/2015/08/27499.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27500/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27501.php">abhisekpan_at_[hidden]: "[OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Previous message:</strong> <a href="27499.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>In reply to:</strong> <a href="27499.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
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
