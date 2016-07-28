<?
$subject_val = "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 09:02:12 2008" -->
<!-- isoreceived="20080215140212" -->
<!-- sent="Fri, 15 Feb 2008 09:02:10 -0500" -->
<!-- isosent="20080215140210" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)" -->
<!-- id="47B59B62.1050801_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080212203629.GI11839_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-15 09:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3254.php">Tim Prins: "[OMPI devel] C++ errhandler"</a>
<li><strong>Previous message:</strong> <a href="3252.php">Shiqing Fan: "Re: [OMPI devel] memchecker and weak symbols"</a>
<li><strong>In reply to:</strong> <a href="3220.php">Adrian Knoth: "[OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3289.php">Adrian Knoth: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<li><strong>Reply:</strong> <a href="3289.php">Adrian Knoth: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adrian Knoth wrote:
<br>
<span class="quotelev1">&gt; On Fri, Feb 01, 2008 at 11:40:20AM -0500, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Adrian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the late reply and thanks for your testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. There are some warnings when compiling:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've fixed these issues.
</span><br>
Thanks.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. If I exclude all my tcp interfaces, the connection fails properly, 
</span><br>
<span class="quotelev2">&gt;&gt; but I do get a malloc request for 0 bytes:
</span><br>
<span class="quotelev2">&gt;&gt; tprins_at_odin examples]$ mpirun -mca btl tcp,self  -mca btl_tcp_if_exclude 
</span><br>
<span class="quotelev2">&gt;&gt; eth0,ib0,lo -np 2 ./ring_c
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Request for 0 bytes (btl_tcp_component.c, 844)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Request for 0 bytes (btl_tcp_component.c, 844)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not my fault, but I guess we could fix it anyway. Should we?
</span><br>
It probably should be fixed. But I've noticed that other BTLs (such as 
<br>
MX) do not properly handle the case where there are no available 
<br>
interfaces either...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. If the exclude list does not contain 'lo', or the include list 
</span><br>
<span class="quotelev2">&gt;&gt; contains 'lo', the job hangs when using multiple nodes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's weird. Loopback interfaces should automatically be excluded right
</span><br>
<span class="quotelev1">&gt; from the beginning. See opal/util/if.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I neither know nor haven't checked where things go wrong. Do you want to
</span><br>
<span class="quotelev1">&gt; investigate? As already mentioned, this should not happen.
</span><br>
I took a quick glance at this file, and I'd be lying if I said I 
<br>
understood what was going on in it. One thing I did notice is that the 
<br>
parameter btl_tcp_if_exclude defaults to 'lo', but the user can of 
<br>
course overwrite it.
<br>
<p>It might be worth looking into this further. If the user got an error or 
<br>
the job aborted if they did something wrong with 'lo' I would not worry 
<br>
about it at all. But the fact that it causes a hang is worrisome to me.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you post the output of &quot;ip a s&quot; or &quot;ifconfig -a&quot;?
</span><br>
It is at the end of the email.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, the great news about this patch is that it appears to fix 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1027">https://svn.open-mpi.org/trac/ompi/ticket/1027</a> for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It also fixes my #1206. I'd like to merge tmp-public/btl-tcp into the
</span><br>
<span class="quotelev1">&gt; trunk, especially before the 1.3 code freeze. Any objections?
</span><br>
Not from me, especially now that it is already in the trunk :).
<br>
<p>Tim
<br>
<p><p><pre>
--
ifconfig -a:
eth0      Link encap:Ethernet  HWaddr 00:E0:81:2D:0B:08
           inet addr:129.79.240.101  Bcast:129.79.240.255 
Mask:255.255.255.0
           inet6 addr: 2001:18e8:2:240:2e0:81ff:fe2d:b08/64 Scope:Global
           inet6 addr: fe80::2e0:81ff:fe2d:b08/64 Scope:Link
           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
           RX packets:555918407 errors:0 dropped:2122 overruns:0 frame:0
           TX packets:569928551 errors:0 dropped:0 overruns:0 carrier:0
           collisions:0 txqueuelen:1000
           RX bytes:448936694980 (418.1 GiB)  TX bytes:486030858441 
(452.6 GiB)
           Interrupt:193
eth1      Link encap:Ethernet  HWaddr 00:E0:81:2D:0B:09
           BROADCAST MULTICAST  MTU:1500  Metric:1
           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
           collisions:0 txqueuelen:1000
           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
           Interrupt:201
ib0       Link encap:UNSPEC  HWaddr 
00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
           inet addr:192.168.0.101  Bcast:192.168.0.255  Mask:255.255.255.0
           inet6 addr: fe80::202:c902:0:5d71/64 Scope:Link
           UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
           RX packets:6304819 errors:0 dropped:0 overruns:0 frame:0
           TX packets:6355094 errors:0 dropped:2 overruns:0 carrier:0
           collisions:0 txqueuelen:128
           RX bytes:26794850321 (24.9 GiB)  TX bytes:35448899645 (33.0 GiB)
ib1       Link encap:UNSPEC  HWaddr 
00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
           BROADCAST MULTICAST  MTU:2044  Metric:1
           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
           collisions:0 txqueuelen:128
           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
lo        Link encap:Local Loopback
           inet addr:127.0.0.1  Mask:255.0.0.0
           inet6 addr: ::1/128 Scope:Host
           UP LOOPBACK RUNNING  MTU:16436  Metric:1
           RX packets:182055033 errors:0 dropped:0 overruns:0 frame:0
           TX packets:182055033 errors:0 dropped:0 overruns:0 carrier:0
           collisions:0 txqueuelen:0
           RX bytes:997605665018 (929.0 GiB)  TX bytes:997605665018 
(929.0 GiB)
sit0      Link encap:IPv6-in-IPv4
           NOARP  MTU:1480  Metric:1
           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
           collisions:0 txqueuelen:0
           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
ip a s:
1: lo: &lt;LOOPBACK,UP&gt; mtu 16436 qdisc noqueue
     link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
     inet 127.0.0.1/8 brd 127.255.255.255 scope host lo
     inet6 ::1/128 scope host
        valid_lft forever preferred_lft forever
2: eth0: &lt;BROADCAST,MULTICAST,UP&gt; mtu 1500 qdisc pfifo_fast qlen 1000
     link/ether 00:e0:81:2d:0b:08 brd ff:ff:ff:ff:ff:ff
     inet 129.79.240.101/24 brd 129.79.240.255 scope global eth0
     inet6 2001:18e8:2:240:2e0:81ff:fe2d:b08/64 scope global dynamic
        valid_lft 2591721sec preferred_lft 604521sec
     inet6 fe80::2e0:81ff:fe2d:b08/64 scope link
        valid_lft forever preferred_lft forever
3: eth1: &lt;BROADCAST,MULTICAST&gt; mtu 1500 qdisc noop qlen 1000
     link/ether 00:e0:81:2d:0b:09 brd ff:ff:ff:ff:ff:ff
4: sit0: &lt;NOARP&gt; mtu 1480 qdisc noop
     link/sit 0.0.0.0 brd 0.0.0.0
5: ib0: &lt;BROADCAST,MULTICAST,UP&gt; mtu 65520 qdisc pfifo_fast qlen 128
     link/[32] 
80:00:04:04:fe:80:00:00:00:00:00:00:00:02:c9:02:00:00:5d:71 brd 
00:ff:ff:ff:ff:12:40:1b:ff:ff:00:00:00:00:00:00:ff:ff:ff:ff
     inet 192.168.0.101/24 brd 192.168.0.255 scope global ib0
     inet6 fe80::202:c902:0:5d71/64 scope link
        valid_lft forever preferred_lft forever
6: ib1: &lt;BROADCAST,MULTICAST&gt; mtu 2044 qdisc noop qlen 128
     link/[32] 
80:00:04:05:fe:80:00:00:00:00:00:00:00:02:c9:02:00:00:5d:72 brd 
00:ff:ff:ff:ff:12:40:1b:ff:ff:00:00:00:00:00:00:ff:ff:ff:ff
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3254.php">Tim Prins: "[OMPI devel] C++ errhandler"</a>
<li><strong>Previous message:</strong> <a href="3252.php">Shiqing Fan: "Re: [OMPI devel] memchecker and weak symbols"</a>
<li><strong>In reply to:</strong> <a href="3220.php">Adrian Knoth: "[OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3289.php">Adrian Knoth: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<li><strong>Reply:</strong> <a href="3289.php">Adrian Knoth: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
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
