<?
$subject_val = "Re: [OMPI users] users Digest, Vol 2881, Issue 4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 21:50:09 2014" -->
<!-- isoreceived="20140507015009" -->
<!-- sent="Tue, 6 May 2014 18:49:21 -0700" -->
<!-- isosent="20140507014921" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 2881, Issue 4" -->
<!-- id="A1FED970-ED3F-4113-BECE-8BA1AC44B526_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJDnjA9=ZW-Xe=z==wCUQxgzKgd9JKABGtJrYmPei0r7K8qydw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 2881, Issue 4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-06 21:49:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24301.php">Spenser Gilliland: "[OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24299.php">Clay Kirkland: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<li><strong>In reply to:</strong> <a href="24299.php">Clay Kirkland: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24302.php">Gus Correa: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<li><strong>Reply:</strong> <a href="24302.php">Gus Correa: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 6, 2014, at 6:24 PM, Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Got it to work finally.  The longer line doesn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if I take off the -mca oob_tcp_if_include 192.168.0.0/16 part then everything works from
</span><br>
<span class="quotelev1">&gt; every combination of machines I have.
</span><br>
<p>Interesting - I'm surprised, but glad it worked
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And as to any MPI having trouble, in my original posting I stated that I installed lam mpi
</span><br>
<span class="quotelev1">&gt; on the same hardware and it worked just fine.   Maybe you guys should look at what they
</span><br>
<span class="quotelev1">&gt; do and copy it.   Virtually every machine I have used in the last 5 years has multiple nic
</span><br>
<span class="quotelev1">&gt; interfaces and almost all of them are set up to use only 1 interface.   It seems odd to have
</span><br>
<span class="quotelev1">&gt; a product that is designed to lash together multiple machines and have it fail with default
</span><br>
<span class="quotelev1">&gt; install on generic machines.
</span><br>
<p>Actually, we are the &quot;lam mpi&quot; guys :-)
<br>
<p>There clearly is a bug in the connection logic, but a little hint will work it thru until we can resolve it.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   But software is like that some time and I want to thank you  much for all the help.   Please 
</span><br>
<span class="quotelev1">&gt; take my criticism with a grain of salt.   I love MPI, I just want to see it work.   I have been
</span><br>
<span class="quotelev1">&gt; using it for 20 some years to synchronize multiple machines for I/O testing and it is one
</span><br>
<span class="quotelev1">&gt; slick product for that.   It has helped us find many bugs in shared files systems.  Thanks 
</span><br>
<span class="quotelev1">&gt; again,
</span><br>
<p>No problem!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, May 6, 2014 at 7:45 PM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. Re: users Digest, Vol 2881, Issue 2 (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Tue, 6 May 2014 17:45:09 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] users Digest, Vol 2881, Issue 2
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4B207E61-952A-4744-9A7B-0704C4B0D63E_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca btl_tcp_if_include 192.168.0.0/16 -mca oob_tcp_if_include 192.168.0.0/16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; should do the trick. Any MPI is going to have trouble with your arrangement - just need a little hint to help figure it out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 6, 2014, at 5:14 PM, Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Someone suggested using some network address if all machines are on same subnet.
</span><br>
<span class="quotelev2">&gt; &gt; They are all on the same subnet, I think.   I have no idea what to put for a param there.
</span><br>
<span class="quotelev2">&gt; &gt; I tried the ethernet address but of course it couldn't be that simple.  Here are my ifconfig
</span><br>
<span class="quotelev2">&gt; &gt; outputs from a couple of machines:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_RAID MPI]# ifconfig -a
</span><br>
<span class="quotelev2">&gt; &gt; eth0      Link encap:Ethernet  HWaddr 00:25:90:73:2A:36
</span><br>
<span class="quotelev2">&gt; &gt;           inet addr:192.168.0.59  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt; &gt;           inet6 addr: fe80::225:90ff:fe73:2a36/64 Scope:Link
</span><br>
<span class="quotelev2">&gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:17983 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:9952 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:26309771 (25.0 MiB)  TX bytes:758940 (741.1 KiB)
</span><br>
<span class="quotelev2">&gt; &gt;           Interrupt:16 Memory:fbde0000-fbe00000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; eth1      Link encap:Ethernet  HWaddr 00:25:90:73:2A:37
</span><br>
<span class="quotelev2">&gt; &gt;           inet6 addr: fe80::225:90ff:fe73:2a37/64 Scope:Link
</span><br>
<span class="quotelev2">&gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:56 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:6 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:3924 (3.8 KiB)  TX bytes:468 (468.0 b)
</span><br>
<span class="quotelev2">&gt; &gt;           Interrupt:17 Memory:fbee0000-fbf00000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  And from one that I can't get to work:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_centos ~]# ifconfig -a
</span><br>
<span class="quotelev2">&gt; &gt; eth0      Link encap:Ethernet  HWaddr 00:1E:4F:FB:30:34
</span><br>
<span class="quotelev2">&gt; &gt;           inet6 addr: fe80::21e:4fff:fefb:3034/64 Scope:Link
</span><br>
<span class="quotelev2">&gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:45 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:6 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:2700 (2.6 KiB)  TX bytes:468 (468.0 b)
</span><br>
<span class="quotelev2">&gt; &gt;           Interrupt:21 Memory:fe9e0000-fea00000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; eth1      Link encap:Ethernet  HWaddr 00:14:D1:22:8E:50
</span><br>
<span class="quotelev2">&gt; &gt;           inet addr:192.168.0.154  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt; &gt;           inet6 addr: fe80::214:d1ff:fe22:8e50/64 Scope:Link
</span><br>
<span class="quotelev2">&gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:160 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:120 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:31053 (30.3 KiB)  TX bytes:18897 (18.4 KiB)
</span><br>
<span class="quotelev2">&gt; &gt;           Interrupt:16 Base address:0x2f00
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  The centos machine is using eth1 and not eth0, therein lies the problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I don't really need all this optimization of using multiple ethernet adaptors to speed things
</span><br>
<span class="quotelev2">&gt; &gt; up.   I am just using MPI to synchronize I/O tests.   Can I go back to a really old version
</span><br>
<span class="quotelev2">&gt; &gt; and avoid all this pain full debugging???
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 6, 2014 at 6:50 PM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt; &gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt; &gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt; &gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt; &gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt; &gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    1. Re: users Digest, Vol 2881, Issue 1 (Clay Kirkland)
</span><br>
<span class="quotelev2">&gt; &gt;    2. Re: users Digest, Vol 2881, Issue 1 (Clay Kirkland)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 1
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 6 May 2014 18:28:59 -0500
</span><br>
<span class="quotelev2">&gt; &gt; From: Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] users Digest, Vol 2881, Issue 1
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;         &lt;CAJDnjA90BuHWu_iHSSnNa1A4P35+O96RRXk19XnHWo-nSd_dqg_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  That last trick seems to work.  I can get it to work once in a while with
</span><br>
<span class="quotelev2">&gt; &gt; those tcp options but it is
</span><br>
<span class="quotelev2">&gt; &gt; tricky as I have three machines and two of them use eth0 as primary network
</span><br>
<span class="quotelev2">&gt; &gt; interface and one
</span><br>
<span class="quotelev2">&gt; &gt; uses eth1.   But by fiddling with network options and perhaps moving a
</span><br>
<span class="quotelev2">&gt; &gt; cable or two I think I can
</span><br>
<span class="quotelev2">&gt; &gt; get it all to work    Thanks much for the tip.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Clay
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 6, 2014 at 11:00 AM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Send users mailing list submissions to
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You can reach the person managing the list at
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev3">&gt; &gt; &gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Today's Topics:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    1. Re: MPI_Barrier hangs on second attempt but only  when
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       multiple hosts used. (Daniels, Marcus G)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    2. ROMIO bug reading darrays (Richard Shaw)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    3. MPI File Open does not work (Imran Ali)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    4. Re: MPI File Open does not work (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    5. Re: MPI File Open does not work (Imran Ali)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    6. Re: MPI File Open does not work (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    7. Re: MPI File Open does not work (Imran Ali)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    8. Re: MPI File Open does not work (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    9. Re: users Digest, Vol 2879, Issue 1 (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message: 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Mon, 5 May 2014 19:28:07 +0000
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: &quot;Daniels, Marcus G&quot; &lt;mdaniels_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: &quot;'users_at_[hidden]'&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] MPI_Barrier hangs on second attempt but only
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         when    multiple hosts used.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message-ID:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         &lt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 532C594B7920A549A2A91CB4312CC57640DC5007_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Clay Kirkland [mailto:clay.kirkland_at_[hidden]]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sent: Friday, May 02, 2014 03:24 PM
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: [OMPI users] MPI_Barrier hangs on second attempt but only when
</span><br>
<span class="quotelev3">&gt; &gt; &gt; multiple hosts used.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have been using MPI for many many years so I have very well debugged mpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tests.   I am
</span><br>
<span class="quotelev3">&gt; &gt; &gt; having trouble on either openmpi-1.4.5  or  openmpi-1.6.5 versions though
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with getting the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Barrier calls to work.   It works fine when I run all processes on one
</span><br>
<span class="quotelev3">&gt; &gt; &gt; machine but when
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I run with two or more hosts the second call to MPI_Barrier always hangs.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Not the first one,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but always the second one.   I looked at FAQ's and such but found nothing
</span><br>
<span class="quotelev3">&gt; &gt; &gt; except for a comment
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that MPI_Barrier problems were often problems with fire walls.  Also
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mentioned as a problem
</span><br>
<span class="quotelev3">&gt; &gt; &gt; was not having the same version of mpi on both machines.  I turned
</span><br>
<span class="quotelev3">&gt; &gt; &gt; firewalls off and removed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and reinstalled the same version on both hosts but I still see the same
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thing.   I then installed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lam mpi on two of my machines and that works fine.   I can call the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Barrier function when run on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; one of two machines by itself  many times with no hangs.  Only hangs if
</span><br>
<span class="quotelev3">&gt; &gt; &gt; two or more hosts are involved.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; These runs are all being done on CentOS release 6.4.   Here is test
</span><br>
<span class="quotelev3">&gt; &gt; &gt; program I used.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; main (argc, argv)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; int argc;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; char **argv;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     char message[20];
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     char hoster[256];
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     char nameis[256];
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     int fd, i, j, jnp, iret, myrank, np, ranker, recker;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     MPI_Comm comm;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     MPI_Status status;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     MPI_Comm_rank( MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     MPI_Comm_size( MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         gethostname(hoster,256);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     exit(0);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Here are three runs of test program.  First with two processes on one
</span><br>
<span class="quotelev3">&gt; &gt; &gt; host, then with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; two processes on another host, and finally with one process on each of two
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hosts.  The
</span><br>
<span class="quotelev3">&gt; &gt; &gt; first two runs are fine but the last run hangs on the second MPI_Barrier.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos a.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 1 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 1 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 1 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host RAID a.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 0 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 0 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 0 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos,RAID a.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Since it is such a simple test and problem and such a widely used MPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; function, it must obviously
</span><br>
<span class="quotelev3">&gt; &gt; &gt; be an installation or configuration problem.   A pstack for each of the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hung MPI_Barrier processes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on the two machines shows this:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [root_at_centos ~]# pstack 31666
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #0  0x0000003baf0e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0x00007f5de06125eb in epoll_dispatch () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #2  0x00007f5de061475a in opal_event_base_loop () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #3  0x00007f5de0639229 in opal_progress () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0x00007f5de0586f75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #5  0x00007f5ddc59565e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #6  0x00007f5ddc59d8ff in ompi_coll_tuned_barrier_intra_two_procs () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #7  0x00007f5de05941c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [root_at_RAID openmpi-1.6.5]# pstack 22167
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #0  0x00000030302e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0x00007f7ee46885eb in epoll_dispatch () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #2  0x00007f7ee468a75a in opal_event_base_loop () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #3  0x00007f7ee46af229 in opal_progress () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0x00007f7ee45fcf75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #5  0x00007f7ee060b65e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #6  0x00007f7ee06138ff in ompi_coll_tuned_barrier_intra_two_procs () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #7  0x00007f7ee460a1c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Which looks exactly the same on each machine.  Any thoughts or ideas
</span><br>
<span class="quotelev3">&gt; &gt; &gt; would be greatly appreciated as
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am stuck.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Clay Kirkland
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message: 2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Mon, 5 May 2014 22:20:59 -0400
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Richard Shaw &lt;jrs65_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: [OMPI users] ROMIO bug reading darrays
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message-ID:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         &lt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CAN+evmkC+9KAcNPAUSScZiufwDJ3JfcSYMB-8ZdX1etDkabioQ_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I think I've come across a bug when using ROMIO to read in a 2D distributed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; array. I've attached a test case to this email.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In the testcase I first initialise an array of 25 doubles (which will be a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 5x5 grid), then I create a datatype representing a 5x5 matrix distributed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in 3x3 blocks over a 2x2 process grid. As a reference I use MPI_Pack to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; pull out the block cyclic array elements local to each process (which I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; think is correct). Then I write the original array of 25 doubles to disk,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and use MPI-IO to read it back in (performing the Open, Set_view, and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Real_all), and compare to the reference.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Running this with OMPI, the two match on all ranks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpirun -mca io ompio -np 4 ./darr_read.x
</span><br>
<span class="quotelev3">&gt; &gt; &gt; === Rank 0 === (9 elements)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Packed:  0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Read:    0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; === Rank 1 === (6 elements)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Packed: 15.0 16.0 17.0 20.0 21.0 22.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Read:   15.0 16.0 17.0 20.0 21.0 22.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; === Rank 2 === (6 elements)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Packed:  3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Read:    3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; === Rank 3 === (4 elements)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Packed: 18.0 19.0 23.0 24.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Read:   18.0 19.0 23.0 24.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, using ROMIO the two differ on two of the ranks:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpirun -mca io romio -np 4 ./darr_read.x
</span><br>
<span class="quotelev3">&gt; &gt; &gt; === Rank 0 === (9 elements)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Packed:  0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Read:    0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; === Rank 1 === (6 elements)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Packed: 15.0 16.0 17.0 20.0 21.0 22.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Read:    0.0  1.0  2.0  0.0  1.0  2.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; === Rank 2 === (6 elements)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Packed:  3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Read:    3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; === Rank 3 === (4 elements)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Packed: 18.0 19.0 23.0 24.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Read:    0.0  1.0  0.0  1.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My interpretation is that the behaviour with OMPIO is correct.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Interestingly everything matches up using both ROMIO and OMPIO if I set the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; block shape to 2x2.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This was run on OS X using 1.8.2a1r31632. I have also run this on Linux
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with OpenMPI 1.7.4, and OMPIO is still correct, but using ROMIO I just get
</span><br>
<span class="quotelev3">&gt; &gt; &gt; segfaults.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Richard
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Name: darr_read.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Type: text/x-csrc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Size: 2218 bytes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Desc: not available
</span><br>
<span class="quotelev3">&gt; &gt; &gt; URL: &lt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/MailArchives/users/attachments/20140505/5a5ab0ba/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20140505/5a5ab0ba/attachment.bin</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message: 3
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Tue, 06 May 2014 13:24:35 +0200
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: [OMPI users] MPI File Open does not work
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message-ID: &lt;d57bdf499c00360b737205b085c50660_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I get the following error when I try to run the following python
</span><br>
<span class="quotelev3">&gt; &gt; &gt; code
</span><br>
<span class="quotelev3">&gt; &gt; &gt; import mpi4py.MPI as MPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; comm = MPI.COMM_WORLD
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI.File.Open(comm,&quot;some.file&quot;)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ mpirun -np 1 python
</span><br>
<span class="quotelev3">&gt; &gt; &gt; test_mpi.py
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Traceback (most recent call last):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  File &quot;test_mpi.py&quot;, line
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3, in &lt;module&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI.File.Open(comm,&quot; h5ex_d_alloc.h5&quot;)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  File &quot;File.pyx&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; line 67, in mpi4py.MPI.File.Open
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (src/mpi4py.MPI.c:89639)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpi4py.MPI.Exception: MPI_ERR_OTHER: known
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error not in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun
</span><br>
<span class="quotelev3">&gt; &gt; &gt; noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that
</span><br>
<span class="quotelev3">&gt; &gt; &gt; caused that
</span><br>
<span class="quotelev3">&gt; &gt; &gt; situation.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My mpirun version is (Open MPI) 1.6.2. I installed openmpi using the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; dorsal script (<a href="https://github.com/FEniCS/dorsal">https://github.com/FEniCS/dorsal</a>) for Redhat Enterprise 6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (OS I am using, release 6.5) . It configured the build as following :
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --with-threads=posix --disable-mpi-profile
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I need emphasize that I do
</span><br>
<span class="quotelev3">&gt; &gt; &gt; not have root acces on the system I am running my application.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Imran
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message: 4
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Tue, 6 May 2014 12:56:04 +0000
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] MPI File Open does not work
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message-ID: &lt;E7DF28CB-D4FB-4087-928E-18E61D1D24CF_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The thread support in the 1.6 series is not very good.  You might try:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Upgrading to 1.6.5
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Or better yet, upgrading to 1.8.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 6, 2014, at 7:24 AM, Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I get the following error when I try to run the following python code
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; import mpi4py.MPI as MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; comm =  MPI.COMM_WORLD
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI.File.Open(comm,&quot;some.file&quot;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; $ mpirun -np 1 python test_mpi.py
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Traceback (most recent call last):
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   File &quot;test_mpi.py&quot;, line 3, in &lt;module&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     MPI.File.Open(comm,&quot; h5ex_d_alloc.h5&quot;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   File &quot;File.pyx&quot;, line 67, in mpi4py.MPI.File.Open
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (src/mpi4py.MPI.c:89639)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpi4py.MPI.Exception: MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; My mpirun version is (Open MPI) 1.6.2. I installed openmpi using the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; dorsal script (<a href="https://github.com/FEniCS/dorsal">https://github.com/FEniCS/dorsal</a>) for Redhat Enterprise 6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (OS I am using, release 6.5) . It configured the build as following :
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --with-threads=posix --disable-mpi-profile
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I need emphasize that I do not have root acces on the system I am
</span><br>
<span class="quotelev3">&gt; &gt; &gt; running my application.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Imran
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message: 5
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Tue, 6 May 2014 15:32:21 +0200
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] MPI File Open does not work
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message-ID: &lt;FA6DFFFF-6C66-4A47-84FC-148FB51CE162_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 6. mai 2014 kl. 14:56 skrev Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The thread support in the 1.6 series is not very good.  You might try:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; - Upgrading to 1.6.5
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; - Or better yet, upgrading to 1.8.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I will attempt that than. I read at
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/faq/?category=building#install-overwrite">http://www.open-mpi.org/faq/?category=building#install-overwrite</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that I should completely uninstall my previous version. Could you
</span><br>
<span class="quotelev3">&gt; &gt; &gt; recommend to me how I can go about doing it (without root access).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am uncertain where I can use make uninstall.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Imran
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On May 6, 2014, at 7:24 AM, Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I get the following error when I try to run the following python code
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; import mpi4py.MPI as MPI
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; comm =  MPI.COMM_WORLD
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; MPI.File.Open(comm,&quot;some.file&quot;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; $ mpirun -np 1 python test_mpi.py
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Traceback (most recent call last):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;  File &quot;test_mpi.py&quot;, line 3, in &lt;module&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;    MPI.File.Open(comm,&quot; h5ex_d_alloc.h5&quot;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;  File &quot;File.pyx&quot;, line 67, in mpi4py.MPI.File.Open
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (src/mpi4py.MPI.c:89639)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; mpi4py.MPI.Exception: MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; My mpirun version is (Open MPI) 1.6.2. I installed openmpi using the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; dorsal script (<a href="https://github.com/FEniCS/dorsal">https://github.com/FEniCS/dorsal</a>) for Redhat Enterprise 6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (OS I am using, release 6.5) . It configured the build as following :
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; ./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --with-threads=posix --disable-mpi-profile
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I need emphasize that I do not have root acces on the system I am
</span><br>
<span class="quotelev3">&gt; &gt; &gt; running my application.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Imran
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message: 6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Tue, 6 May 2014 13:34:38 +0000
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] MPI File Open does not work
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message-ID: &lt;2A933C0E-80F6-4DED-B44C-53B5F37EFC0C_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 6, 2014, at 9:32 AM, Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I will attempt that than. I read at
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/faq/?category=building#install-overwrite">http://www.open-mpi.org/faq/?category=building#install-overwrite</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; that I should completely uninstall my previous version.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Yes, that is best.  OR: you can install into a whole separate tree and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ignore the first installation.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Could you recommend to me how I can go about doing it (without root
</span><br>
<span class="quotelev3">&gt; &gt; &gt; access).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I am uncertain where I can use make uninstall.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If you don't have write access into the installation tree (i.e., it was
</span><br>
<span class="quotelev3">&gt; &gt; &gt; installed via root and you don't have root access), then your best bet is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; simply to install into a new tree.  E.g., if OMPI is installed into
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /opt/openmpi-1.6.2, try installing into /opt/openmpi-1.6.5, or even
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $HOME/installs/openmpi-1.6.5, or something like that.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message: 7
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Tue, 6 May 2014 15:40:34 +0200
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] MPI File Open does not work
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message-ID: &lt;14F0596C-C5C5-4B1A-A4A8-8849D44AB76A_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 6. mai 2014 kl. 15:34 skrev Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On May 6, 2014, at 9:32 AM, Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I will attempt that than. I read at
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#install-overwrite">http://www.open-mpi.org/faq/?category=building#install-overwrite</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; that I should completely uninstall my previous version.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Yes, that is best.  OR: you can install into a whole separate tree and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ignore the first installation.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Could you recommend to me how I can go about doing it (without root
</span><br>
<span class="quotelev3">&gt; &gt; &gt; access).
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I am uncertain where I can use make uninstall.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; If you don't have write access into the installation tree (i.e., it was
</span><br>
<span class="quotelev3">&gt; &gt; &gt; installed via root and you don't have root access), then your best bet is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; simply to install into a new tree.  E.g., if OMPI is installed into
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /opt/openmpi-1.6.2, try installing into /opt/openmpi-1.6.5, or even
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $HOME/installs/openmpi-1.6.5, or something like that.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My install was in my user directory (i.e $HOME). I managed to locate the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source directory and successfully run make uninstall.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Will let you know how things went after installation.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Imran
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message: 8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Tue, 6 May 2014 14:42:52 +0000
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] MPI File Open does not work
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message-ID: &lt;710E3328-EDAA-4A13-9F07-B45FE319113D_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 6, 2014, at 9:40 AM, Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; My install was in my user directory (i.e $HOME). I managed to locate the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; source directory and successfully run make uninstall.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; FWIW, I usually install Open MPI into its own subdir.  E.g.,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $HOME/installs/openmpi-x.y.z.  Then if I don't want that install any more,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I can just &quot;rm -rf $HOME/installs/openmpi-x.y.z&quot; -- no need to &quot;make
</span><br>
<span class="quotelev3">&gt; &gt; &gt; uninstall&quot;.  Specifically: if there's nothing else installed in the same
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tree as Open MPI, you can just rm -rf its installation tree.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message: 9
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Tue, 6 May 2014 14:50:34 +0000
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] users Digest, Vol 2879, Issue 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message-ID: &lt;C60AA7E1-96A7-4CCD-9B5B-11A38FB87772_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Are you using TCP as the MPI transport?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If so, another thing to try is to limit the IP interfaces that MPI uses
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for its traffic to see if there's some kind of problem with specific
</span><br>
<span class="quotelev3">&gt; &gt; &gt; networks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For example:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    mpirun --mca btl_tcp_if_include eth0 ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If that works, then try adding in any/all other IP interfaces that you
</span><br>
<span class="quotelev3">&gt; &gt; &gt; have on your machines.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A sorta-wild guess: you have some IP interfaces that aren't working, or at
</span><br>
<span class="quotelev3">&gt; &gt; &gt; least, don't work in the way that OMPI wants them to work.  So the first
</span><br>
<span class="quotelev3">&gt; &gt; &gt; barrier works because it flows across eth0 (or some other first network
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that, as far as OMPI is concerned, works just fine).  But then the next
</span><br>
<span class="quotelev3">&gt; &gt; &gt; barrier round-robin advances to the next IP interface, and it doesn't work
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for some reason.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We've seen virtual machine bridge interfaces cause problems, for example.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  E.g., if a machine has a Xen virtual machine interface (vibr0, IIRC?),
</span><br>
<span class="quotelev3">&gt; &gt; &gt; then OMPI will try to use it to communicate with peer MPI processes because
</span><br>
<span class="quotelev3">&gt; &gt; &gt; it has a &quot;compatible&quot; IP address, and OMPI think it should be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; connected/reachable to peers.  If this is the case, you might want to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; disable such interfaces and/or use btl_tcp_if_include or btl_tcp_if_exclude
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to select the interfaces that you want to use.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Pro tip: if you use btl_tcp_if_exclude, remember to exclude the loopback
</span><br>
<span class="quotelev3">&gt; &gt; &gt; interface, too.  OMPI defaults to a btl_tcp_if_include=&quot;&quot; (blank) and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl_tcp_if_exclude=&quot;lo0&quot;. So if you override btl_tcp_if_exclude, you need
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to be sure to *also* include lo0 in the new value.  For example:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    mpirun --mca btl_tcp_if_exclude lo0,virb0 ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also, if possible, try upgrading to Open MPI 1.8.1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 4, 2014, at 2:15 PM, Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  I am configuring with all defaults.   Just doing a ./configure and then
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make and make install.   I have used open mpi on several kinds of
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; unix  systems this way and have had no trouble before.   I believe I
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; last had success on a redhat version of linux.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Sat, May 3, 2014 at 11:00 AM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Send users mailing list submissions to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; You can reach the person managing the list at
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Today's Topics:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    1. MPI_Barrier hangs on second attempt but only when multiple
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       hosts used. (Clay Kirkland)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    2. Re: MPI_Barrier hangs on second attempt but only when
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       multiple hosts used. (Ralph Castain)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Message: 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Date: Fri, 2 May 2014 16:24:04 -0500
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; From: Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subject: [OMPI users] MPI_Barrier hangs on second attempt but only
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         when    multiple hosts used.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Message-ID:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         &lt;CAJDnjA8Wi=FEjz6Vz+Bc34b+nFE=
</span><br>
<span class="quotelev3">&gt; &gt; &gt; TF4B7g0BQgMbeKg7H-pV+A_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I have been using MPI for many many years so I have very well debugged
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; tests.   I am
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; having trouble on either openmpi-1.4.5  or  openmpi-1.6.5 versions though
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; with getting the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Barrier calls to work.   It works fine when I run all processes on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; one
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; machine but when
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I run with two or more hosts the second call to MPI_Barrier always hangs.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Not the first one,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; but always the second one.   I looked at FAQ's and such but found nothing
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; except for a comment
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; that MPI_Barrier problems were often problems with fire walls.  Also
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mentioned as a problem
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; was not having the same version of mpi on both machines.  I turned
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; firewalls off and removed
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; and reinstalled the same version on both hosts but I still see the same
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; thing.   I then installed
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; lam mpi on two of my machines and that works fine.   I can call the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Barrier function when run on
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; one of two machines by itself  many times with no hangs.  Only hangs if
</span><br>
<span class="quotelev3">&gt; &gt; &gt; two
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; or more hosts are involved.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; These runs are all being done on CentOS release 6.4.   Here is test
</span><br>
<span class="quotelev3">&gt; &gt; &gt; program
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I used.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; main (argc, argv)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; int argc;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; char **argv;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     char message[20];
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     char hoster[256];
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     char nameis[256];
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     int fd, i, j, jnp, iret, myrank, np, ranker, recker;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     MPI_Comm comm;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     MPI_Status status;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     MPI_Comm_rank( MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     MPI_Comm_size( MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         gethostname(hoster,256);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 2.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 3.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     exit(0);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   Here are three runs of test program.  First with two processes on one
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; host, then with
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; two processes on another host, and finally with one process on each of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; two
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; hosts.  The
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; first two runs are fine but the last run hangs on the second MPI_Barrier.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos a.out
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 1 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 1 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 1 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host RAID a.out
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 0 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 0 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 0 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos,RAID a.out
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   Since it is such a simple test and problem and such a widely used MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; function, it must obviously
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; be an installation or configuration problem.   A pstack for each of the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; hung MPI_Barrier processes
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; on the two machines shows this:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [root_at_centos ~]# pstack 31666
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #0  0x0000003baf0e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #1  0x00007f5de06125eb in epoll_dispatch () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #2  0x00007f5de061475a in opal_event_base_loop () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #3  0x00007f5de0639229 in opal_progress () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #4  0x00007f5de0586f75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #5  0x00007f5ddc59565e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #6  0x00007f5ddc59d8ff in ompi_coll_tuned_barrier_intra_two_procs () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #7  0x00007f5de05941c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [root_at_RAID openmpi-1.6.5]# pstack 22167
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #0  0x00000030302e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #1  0x00007f7ee46885eb in epoll_dispatch () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #2  0x00007f7ee468a75a in opal_event_base_loop () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #3  0x00007f7ee46af229 in opal_progress () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #4  0x00007f7ee45fcf75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #5  0x00007f7ee060b65e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #6  0x00007f7ee06138ff in ompi_coll_tuned_barrier_intra_two_procs () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #7  0x00007f7ee460a1c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  Which looks exactly the same on each machine.  Any thoughts or ideas
</span><br>
<span class="quotelev3">&gt; &gt; &gt; would
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; be greatly appreciated as
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I am stuck.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  Clay Kirkland
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Message: 2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Date: Sat, 3 May 2014 06:39:20 -0700
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subject: Re: [OMPI users] MPI_Barrier hangs on second attempt but only
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         when    multiple hosts used.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Message-ID: &lt;3CF53D73-15D9-40BB-A2DE-50BA3561A0F4_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hmmm...just testing on my little cluster here on two nodes, it works
</span><br>
<span class="quotelev3">&gt; &gt; &gt; just fine with 1.8.2:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [rhc_at_bend001 v1.8]$ mpirun -n 2 --map-by node ./a.out
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 0 and host= bend001  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 0 and host= bend001  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 0 and host= bend001  Do Barrier call 3.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 1 and host= bend002  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 1 and host= bend002  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  In rank 1 and host= bend002  Do Barrier call 3.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [rhc_at_bend001 v1.8]$
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; How are you configuring OMPI?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On May 2, 2014, at 2:24 PM, Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I have been using MPI for many many years so I have very well debugged
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpi tests.   I am
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; having trouble on either openmpi-1.4.5  or  openmpi-1.6.5 versions
</span><br>
<span class="quotelev3">&gt; &gt; &gt; though with getting the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI_Barrier calls to work.   It works fine when I run all processes on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; one machine but when
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I run with two or more hosts the second call to MPI_Barrier always
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hangs.   Not the first one,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; but always the second one.   I looked at FAQ's and such but found
</span><br>
<span class="quotelev3">&gt; &gt; &gt; nothing except for a comment
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; that MPI_Barrier problems were often problems with fire walls.  Also
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mentioned as a problem
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; was not having the same version of mpi on both machines.  I turned
</span><br>
<span class="quotelev3">&gt; &gt; &gt; firewalls off and removed
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; and reinstalled the same version on both hosts but I still see the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; same thing.   I then installed
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; lam mpi on two of my machines and that works fine.   I can call the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Barrier function when run on
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; one of two machines by itself  many times with no hangs.  Only hangs
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if two or more hosts are involved.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; These runs are all being done on CentOS release 6.4.   Here is test
</span><br>
<span class="quotelev3">&gt; &gt; &gt; program I used.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; main (argc, argv)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; int argc;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; char **argv;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     char message[20];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     char hoster[256];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     char nameis[256];
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     int fd, i, j, jnp, iret, myrank, np, ranker, recker;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Comm comm;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Comm_rank( MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Comm_size( MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;         gethostname(hoster,256);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;     exit(0);
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Here are three runs of test program.  First with two processes on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; one host, then with
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; two processes on another host, and finally with one process on each of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; two hosts.  The
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; first two runs are fine but the last run hangs on the second
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Barrier.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos a.out
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 1 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 1 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 1 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host RAID a.out
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 0 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 0 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 0 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos,RAID
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a.out
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Since it is such a simple test and problem and such a widely used
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI function, it must obviously
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; be an installation or configuration problem.   A pstack for each of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the hung MPI_Barrier processes
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; on the two machines shows this:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [root_at_centos ~]# pstack 31666
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #0  0x0000003baf0e8ee3 in __epoll_wait_nocancel () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #1  0x00007f5de06125eb in epoll_dispatch () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #2  0x00007f5de061475a in opal_event_base_loop () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #3  0x00007f5de0639229 in opal_progress () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #4  0x00007f5de0586f75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #5  0x00007f5ddc59565e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #6  0x00007f5ddc59d8ff in ompi_coll_tuned_barrier_intra_two_procs ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #7  0x00007f5de05941c2 in PMPI_Barrier () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [root_at_RAID openmpi-1.6.5]# pstack 22167
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #0  0x00000030302e8ee3 in __epoll_wait_nocancel () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #1  0x00007f7ee46885eb in epoll_dispatch () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #2  0x00007f7ee468a75a in opal_event_base_loop () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #3  0x00007f7ee46af229 in opal_progress () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #4  0x00007f7ee45fcf75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #5  0x00007f7ee060b65e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #6  0x00007f7ee06138ff in ompi_coll_tuned_barrier_intra_two_procs ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #7  0x00007f7ee460a1c2 in PMPI_Barrier () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  Which looks exactly the same on each machine.  Any thoughts or ideas
</span><br>
<span class="quotelev3">&gt; &gt; &gt; would be greatly appreciated as
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I am stuck.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;  Clay Kirkland
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subject: Digest Footer
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; End of users Digest, Vol 2879, Issue 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; **************************************
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Digest Footer
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; End of users Digest, Vol 2881, Issue 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; **************************************
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 2
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 6 May 2014 18:50:50 -0500
</span><br>
<span class="quotelev2">&gt; &gt; From: Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] users Digest, Vol 2881, Issue 1
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;         &lt;CAJDnjA-U4BTpto+87CZSho81t+-A1JzOTTc7Mwdfiar7+VZMzQ_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Well it turns out  I can't seem to get all three of my machines on the
</span><br>
<span class="quotelev2">&gt; &gt; same page.
</span><br>
<span class="quotelev2">&gt; &gt; Two of them are using eth0 and one is using eth1.   Centos seems unable to
</span><br>
<span class="quotelev2">&gt; &gt; bring
</span><br>
<span class="quotelev2">&gt; &gt; up multiple network interfaces for some reason and when I use the mca param
</span><br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev2">&gt; &gt; use eth0 it works on two machines but not the other.   Is there some way to
</span><br>
<span class="quotelev2">&gt; &gt; use
</span><br>
<span class="quotelev2">&gt; &gt; only eth1 on one host and only eth0 on the other two?   Maybe environment
</span><br>
<span class="quotelev2">&gt; &gt; variables
</span><br>
<span class="quotelev2">&gt; &gt; but I can't seem to get that to work either.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Clay
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 6, 2014 at 6:28 PM, Clay Kirkland
</span><br>
<span class="quotelev2">&gt; &gt; &lt;clay.kirkland_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  That last trick seems to work.  I can get it to work once in a while with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; those tcp options but it is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tricky as I have three machines and two of them use eth0 as primary
</span><br>
<span class="quotelev3">&gt; &gt; &gt; network interface and one
</span><br>
<span class="quotelev3">&gt; &gt; &gt; uses eth1.   But by fiddling with network options and perhaps moving a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cable or two I think I can
</span><br>
<span class="quotelev3">&gt; &gt; &gt; get it all to work    Thanks much for the tip.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Clay
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, May 6, 2014 at 11:00 AM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Today's Topics:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    1. Re: MPI_Barrier hangs on second attempt but only  when
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;       multiple hosts used. (Daniels, Marcus G)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    2. ROMIO bug reading darrays (Richard Shaw)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    3. MPI File Open does not work (Imran Ali)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    4. Re: MPI File Open does not work (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    5. Re: MPI File Open does not work (Imran Ali)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    6. Re: MPI File Open does not work (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    7. Re: MPI File Open does not work (Imran Ali)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    8. Re: MPI File Open does not work (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    9. Re: users Digest, Vol 2879, Issue 1 (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message: 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Date: Mon, 5 May 2014 19:28:07 +0000
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From: &quot;Daniels, Marcus G&quot; &lt;mdaniels_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To: &quot;'users_at_[hidden]'&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: Re: [OMPI users] MPI_Barrier hangs on second attempt but only
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         when    multiple hosts used.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message-ID:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         &lt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 532C594B7920A549A2A91CB4312CC57640DC5007_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From: Clay Kirkland [mailto:clay.kirkland_at_[hidden]]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Sent: Friday, May 02, 2014 03:24 PM
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: [OMPI users] MPI_Barrier hangs on second attempt but only when
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; multiple hosts used.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I have been using MPI for many many years so I have very well debugged
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpi tests.   I am
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; having trouble on either openmpi-1.4.5  or  openmpi-1.6.5 versions though
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; with getting the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Barrier calls to work.   It works fine when I run all processes on
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; one machine but when
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I run with two or more hosts the second call to MPI_Barrier always hangs.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Not the first one,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; but always the second one.   I looked at FAQ's and such but found nothing
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; except for a comment
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; that MPI_Barrier problems were often problems with fire walls.  Also
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mentioned as a problem
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; was not having the same version of mpi on both machines.  I turned
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; firewalls off and removed
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; and reinstalled the same version on both hosts but I still see the same
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; thing.   I then installed
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; lam mpi on two of my machines and that works fine.   I can call the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Barrier function when run on
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; one of two machines by itself  many times with no hangs.  Only hangs if
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; two or more hosts are involved.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; These runs are all being done on CentOS release 6.4.   Here is test
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; program I used.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; main (argc, argv)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; int argc;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; char **argv;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     char message[20];
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     char hoster[256];
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     char nameis[256];
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     int fd, i, j, jnp, iret, myrank, np, ranker, recker;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     MPI_Comm comm;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     MPI_Status status;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     MPI_Comm_rank( MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     MPI_Comm_size( MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         gethostname(hoster,256);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 1.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 2.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 3.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     exit(0);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Here are three runs of test program.  First with two processes on one
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; host, then with
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; two processes on another host, and finally with one process on each of
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; two hosts.  The
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; first two runs are fine but the last run hangs on the second MPI_Barrier.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos a.out
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 1 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 1 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 1 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 0 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host RAID a.out
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 0 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 0 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 0 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 1 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos,RAID a.out
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   Since it is such a simple test and problem and such a widely used MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; function, it must obviously
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; be an installation or configuration problem.   A pstack for each of the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; hung MPI_Barrier processes
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; on the two machines shows this:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [root_at_centos ~]# pstack 31666
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #0  0x0000003baf0e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #1  0x00007f5de06125eb in epoll_dispatch () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #2  0x00007f5de061475a in opal_event_base_loop () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #3  0x00007f5de0639229 in opal_progress () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #4  0x00007f5de0586f75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #5  0x00007f5ddc59565e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #6  0x00007f5ddc59d8ff in ompi_coll_tuned_barrier_intra_two_procs () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #7  0x00007f5de05941c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [root_at_RAID openmpi-1.6.5]# pstack 22167
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #0  0x00000030302e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #1  0x00007f7ee46885eb in epoll_dispatch () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #2  0x00007f7ee468a75a in opal_event_base_loop () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #3  0x00007f7ee46af229 in opal_progress () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #4  0x00007f7ee45fcf75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #5  0x00007f7ee060b65e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #6  0x00007f7ee06138ff in ompi_coll_tuned_barrier_intra_two_procs () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #7  0x00007f7ee460a1c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  Which looks exactly the same on each machine.  Any thoughts or ideas
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; would be greatly appreciated as
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I am stuck.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  Clay Kirkland
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message: 2
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Date: Mon, 5 May 2014 22:20:59 -0400
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From: Richard Shaw &lt;jrs65_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: [OMPI users] ROMIO bug reading darrays
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message-ID:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         &lt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; CAN+evmkC+9KAcNPAUSScZiufwDJ3JfcSYMB-8ZdX1etDkabioQ_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I think I've come across a bug when using ROMIO to read in a 2D
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; distributed
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; array. I've attached a test case to this email.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; In the testcase I first initialise an array of 25 doubles (which will be a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 5x5 grid), then I create a datatype representing a 5x5 matrix distributed
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; in 3x3 blocks over a 2x2 process grid. As a reference I use MPI_Pack to
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; pull out the block cyclic array elements local to each process (which I
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; think is correct). Then I write the original array of 25 doubles to disk,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; and use MPI-IO to read it back in (performing the Open, Set_view, and
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Real_all), and compare to the reference.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Running this with OMPI, the two match on all ranks.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; mpirun -mca io ompio -np 4 ./darr_read.x
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; === Rank 0 === (9 elements)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Packed:  0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Read:    0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; === Rank 1 === (6 elements)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Packed: 15.0 16.0 17.0 20.0 21.0 22.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Read:   15.0 16.0 17.0 20.0 21.0 22.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; === Rank 2 === (6 elements)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Packed:  3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Read:    3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; === Rank 3 === (4 elements)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Packed: 18.0 19.0 23.0 24.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Read:   18.0 19.0 23.0 24.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; However, using ROMIO the two differ on two of the ranks:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; mpirun -mca io romio -np 4 ./darr_read.x
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; === Rank 0 === (9 elements)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Packed:  0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Read:    0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; === Rank 1 === (6 elements)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Packed: 15.0 16.0 17.0 20.0 21.0 22.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Read:    0.0  1.0  2.0  0.0  1.0  2.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; === Rank 2 === (6 elements)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Packed:  3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Read:    3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; === Rank 3 === (4 elements)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Packed: 18.0 19.0 23.0 24.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Read:    0.0  1.0  0.0  1.0
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; My interpretation is that the behaviour with OMPIO is correct.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Interestingly everything matches up using both ROMIO and OMPIO if I set
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; block shape to 2x2.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; This was run on OS X using 1.8.2a1r31632. I have also run this on Linux
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; with OpenMPI 1.7.4, and OMPIO is still correct, but using ROMIO I just get
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; segfaults.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Richard
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Name: darr_read.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Type: text/x-csrc
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Size: 2218 bytes
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Desc: not available
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; URL: &lt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/MailArchives/users/attachments/20140505/5a5ab0ba/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20140505/5a5ab0ba/attachment.bin</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message: 3
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Date: Tue, 06 May 2014 13:24:35 +0200
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From: Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: [OMPI users] MPI File Open does not work
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message-ID: &lt;d57bdf499c00360b737205b085c50660_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I get the following error when I try to run the following python
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; code
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; import mpi4py.MPI as MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; comm = MPI.COMM_WORLD
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI.File.Open(comm,&quot;some.file&quot;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; $ mpirun -np 1 python
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; test_mpi.py
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Traceback (most recent call last):
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  File &quot;test_mpi.py&quot;, line
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 3, in &lt;module&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  MPI.File.Open(comm,&quot; h5ex_d_alloc.h5&quot;)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  File &quot;File.pyx&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; line 67, in mpi4py.MPI.File.Open
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (src/mpi4py.MPI.c:89639)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpi4py.MPI.Exception: MPI_ERR_OTHER: known
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; error not in
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpirun
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; that
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; caused that
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; situation.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; My mpirun version is (Open MPI) 1.6.2. I installed openmpi using the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; dorsal script (<a href="https://github.com/FEniCS/dorsal">https://github.com/FEniCS/dorsal</a>) for Redhat Enterprise 6
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (OS I am using, release 6.5) . It configured the build as following :
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --with-threads=posix --disable-mpi-profile
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I need emphasize that I do
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; not have root acces on the system I am running my application.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Imran
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message: 4
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Date: Tue, 6 May 2014 12:56:04 +0000
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: Re: [OMPI users] MPI File Open does not work
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message-ID: &lt;E7DF28CB-D4FB-4087-928E-18E61D1D24CF_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The thread support in the 1.6 series is not very good.  You might try:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; - Upgrading to 1.6.5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; - Or better yet, upgrading to 1.8.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On May 6, 2014, at 7:24 AM, Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I get the following error when I try to run the following python code
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; import mpi4py.MPI as MPI
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; comm =  MPI.COMM_WORLD
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; MPI.File.Open(comm,&quot;some.file&quot;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; $ mpirun -np 1 python test_mpi.py
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Traceback (most recent call last):
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   File &quot;test_mpi.py&quot;, line 3, in &lt;module&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     MPI.File.Open(comm,&quot; h5ex_d_alloc.h5&quot;)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   File &quot;File.pyx&quot;, line 67, in mpi4py.MPI.File.Open
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (src/mpi4py.MPI.c:89639)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; mpi4py.MPI.Exception: MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; My mpirun version is (Open MPI) 1.6.2. I installed openmpi using the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; dorsal script (<a href="https://github.com/FEniCS/dorsal">https://github.com/FEniCS/dorsal</a>) for Redhat Enterprise 6
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (OS I am using, release 6.5) . It configured the build as following :
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --with-threads=posix --disable-mpi-profile
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I need emphasize that I do not have root acces on the system I am
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; running my application.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Imran
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message: 5
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Date: Tue, 6 May 2014 15:32:21 +0200
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From: Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: Re: [OMPI users] MPI File Open does not work
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message-ID: &lt;FA6DFFFF-6C66-4A47-84FC-148FB51CE162_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 6. mai 2014 kl. 14:56 skrev Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; The thread support in the 1.6 series is not very good.  You might try:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; - Upgrading to 1.6.5
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; - Or better yet, upgrading to 1.8.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I will attempt that than. I read at
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#install-overwrite">http://www.open-mpi.org/faq/?category=building#install-overwrite</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; that I should completely uninstall my previous version. Could you
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; recommend to me how I can go about doing it (without root access).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I am uncertain where I can use make uninstall.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Imran
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; On May 6, 2014, at 7:24 AM, Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; I get the following error when I try to run the following python code
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; import mpi4py.MPI as MPI
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; comm =  MPI.COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; MPI.File.Open(comm,&quot;some.file&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; $ mpirun -np 1 python test_mpi.py
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Traceback (most recent call last):
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;  File &quot;test_mpi.py&quot;, line 3, in &lt;module&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;    MPI.File.Open(comm,&quot; h5ex_d_alloc.h5&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;  File &quot;File.pyx&quot;, line 67, in mpi4py.MPI.File.Open
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (src/mpi4py.MPI.c:89639)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; mpi4py.MPI.Exception: MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; My mpirun version is (Open MPI) 1.6.2. I installed openmpi using the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; dorsal script (<a href="https://github.com/FEniCS/dorsal">https://github.com/FEniCS/dorsal</a>) for Redhat Enterprise 6
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (OS I am using, release 6.5) . It configured the build as following :
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; ./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --with-threads=posix --disable-mpi-profile
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; I need emphasize that I do not have root acces on the system I am
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; running my application.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Imran
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message: 6
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Date: Tue, 6 May 2014 13:34:38 +0000
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: Re: [OMPI users] MPI File Open does not work
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message-ID: &lt;2A933C0E-80F6-4DED-B44C-53B5F37EFC0C_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On May 6, 2014, at 9:32 AM, Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I will attempt that than. I read at
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=building#install-overwrite">http://www.open-mpi.org/faq/?category=building#install-overwrite</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; that I should completely uninstall my previous version.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Yes, that is best.  OR: you can install into a whole separate tree and
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ignore the first installation.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Could you recommend to me how I can go about doing it (without root
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; access).
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I am uncertain where I can use make uninstall.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; If you don't have write access into the installation tree (i.e., it was
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; installed via root and you don't have root access), then your best bet is
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; simply to install into a new tree.  E.g., if OMPI is installed into
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /opt/openmpi-1.6.2, try installing into /opt/openmpi-1.6.5, or even
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; $HOME/installs/openmpi-1.6.5, or something like that.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message: 7
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Date: Tue, 6 May 2014 15:40:34 +0200
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From: Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: Re: [OMPI users] MPI File Open does not work
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message-ID: &lt;14F0596C-C5C5-4B1A-A4A8-8849D44AB76A_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 6. mai 2014 kl. 15:34 skrev Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; On May 6, 2014, at 9:32 AM, Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; I will attempt that than. I read at
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#install-overwrite">http://www.open-mpi.org/faq/?category=building#install-overwrite</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; that I should completely uninstall my previous version.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Yes, that is best.  OR: you can install into a whole separate tree and
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ignore the first installation.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Could you recommend to me how I can go about doing it (without root
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; access).
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; I am uncertain where I can use make uninstall.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; If you don't have write access into the installation tree (i.e., it was
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; installed via root and you don't have root access), then your best bet is
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; simply to install into a new tree.  E.g., if OMPI is installed into
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /opt/openmpi-1.6.2, try installing into /opt/openmpi-1.6.5, or even
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; $HOME/installs/openmpi-1.6.5, or something like that.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; My install was in my user directory (i.e $HOME). I managed to locate the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; source directory and successfully run make uninstall.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Will let you know how things went after installation.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Imran
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message: 8
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Date: Tue, 6 May 2014 14:42:52 +0000
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: Re: [OMPI users] MPI File Open does not work
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message-ID: &lt;710E3328-EDAA-4A13-9F07-B45FE319113D_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On May 6, 2014, at 9:40 AM, Imran Ali &lt;imranal_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; My install was in my user directory (i.e $HOME). I managed to locate
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the source directory and successfully run make uninstall.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; FWIW, I usually install Open MPI into its own subdir.  E.g.,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; $HOME/installs/openmpi-x.y.z.  Then if I don't want that install any more,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I can just &quot;rm -rf $HOME/installs/openmpi-x.y.z&quot; -- no need to &quot;make
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; uninstall&quot;.  Specifically: if there's nothing else installed in the same
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; tree as Open MPI, you can just rm -rf its installation tree.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message: 9
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Date: Tue, 6 May 2014 14:50:34 +0000
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: Re: [OMPI users] users Digest, Vol 2879, Issue 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Message-ID: &lt;C60AA7E1-96A7-4CCD-9B5B-11A38FB87772_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Are you using TCP as the MPI transport?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; If so, another thing to try is to limit the IP interfaces that MPI uses
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; for its traffic to see if there's some kind of problem with specific
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; networks.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; For example:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    mpirun --mca btl_tcp_if_include eth0 ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; If that works, then try adding in any/all other IP interfaces that you
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; have on your machines.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; A sorta-wild guess: you have some IP interfaces that aren't working, or
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; at least, don't work in the way that OMPI wants them to work.  So the first
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; barrier works because it flows across eth0 (or some other first network
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; that, as far as OMPI is concerned, works just fine).  But then the next
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; barrier round-robin advances to the next IP interface, and it doesn't work
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; for some reason.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; We've seen virtual machine bridge interfaces cause problems, for example.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  E.g., if a machine has a Xen virtual machine interface (vibr0, IIRC?),
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; then OMPI will try to use it to communicate with peer MPI processes because
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; it has a &quot;compatible&quot; IP address, and OMPI think it should be
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; connected/reachable to peers.  If this is the case, you might want to
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; disable such interfaces and/or use btl_tcp_if_include or btl_tcp_if_exclude
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; to select the interfaces that you want to use.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Pro tip: if you use btl_tcp_if_exclude, remember to exclude the loopback
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; interface, too.  OMPI defaults to a btl_tcp_if_include=&quot;&quot; (blank) and
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; btl_tcp_if_exclude=&quot;lo0&quot;. So if you override btl_tcp_if_exclude, you need
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; to be sure to *also* include lo0 in the new value.  For example:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    mpirun --mca btl_tcp_if_exclude lo0,virb0 ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Also, if possible, try upgrading to Open MPI 1.8.1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On May 4, 2014, at 2:15 PM, Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  I am configuring with all defaults.   Just doing a ./configure and then
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; make and make install.   I have used open mpi on several kinds of
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; unix  systems this way and have had no trouble before.   I believe I
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; last had success on a redhat version of linux.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; On Sat, May 3, 2014 at 11:00 AM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;    1. MPI_Barrier hangs on second attempt but only when multiple
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;       hosts used. (Clay Kirkland)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;    2. Re: MPI_Barrier hangs on second attempt but only when
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;       multiple hosts used. (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Message: 1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Date: Fri, 2 May 2014 16:24:04 -0500
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; From: Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Subject: [OMPI users] MPI_Barrier hangs on second attempt but only
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;         when    multiple hosts used.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;         &lt;CAJDnjA8Wi=FEjz6Vz+Bc34b+nFE=
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; TF4B7g0BQgMbeKg7H-pV+A_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I have been using MPI for many many years so I have very well debugged
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpi
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; tests.   I am
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; having trouble on either openmpi-1.4.5  or  openmpi-1.6.5 versions
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; though
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; with getting the
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; MPI_Barrier calls to work.   It works fine when I run all processes on
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; one
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; machine but when
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I run with two or more hosts the second call to MPI_Barrier always
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; hangs.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Not the first one,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; but always the second one.   I looked at FAQ's and such but found
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; nothing
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; except for a comment
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; that MPI_Barrier problems were often problems with fire walls.  Also
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; mentioned as a problem
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; was not having the same version of mpi on both machines.  I turned
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; firewalls off and removed
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; and reinstalled the same version on both hosts but I still see the same
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; thing.   I then installed
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; lam mpi on two of my machines and that works fine.   I can call the
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; MPI_Barrier function when run on
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; one of two machines by itself  many times with no hangs.  Only hangs if
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; two
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; or more hosts are involved.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; These runs are all being done on CentOS release 6.4.   Here is test
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; program
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I used.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; main (argc, argv)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; int argc;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; char **argv;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; {
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     char message[20];
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     char hoster[256];
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     char nameis[256];
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     int fd, i, j, jnp, iret, myrank, np, ranker, recker;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     MPI_Comm comm;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     MPI_Comm_rank( MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     MPI_Comm_size( MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;         gethostname(hoster,256);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; 1.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; 2.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; 3.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;     exit(0);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; }
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   Here are three runs of test program.  First with two processes on one
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; host, then with
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; two processes on another host, and finally with one process on each of
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; two
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; hosts.  The
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; first two runs are fine but the last run hangs on the second
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Barrier.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos a.out
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 1 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 1 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 1 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 0 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host RAID a.out
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 0 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 0 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 0 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 1 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos,RAID a.out
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;   Since it is such a simple test and problem and such a widely used MPI
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; function, it must obviously
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; be an installation or configuration problem.   A pstack for each of the
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; hung MPI_Barrier processes
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; on the two machines shows this:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; [root_at_centos ~]# pstack 31666
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #0  0x0000003baf0e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #1  0x00007f5de06125eb in epoll_dispatch () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #2  0x00007f5de061475a in opal_event_base_loop () from
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #3  0x00007f5de0639229 in opal_progress () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #4  0x00007f5de0586f75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #5  0x00007f5ddc59565e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #6  0x00007f5ddc59d8ff in ompi_coll_tuned_barrier_intra_two_procs ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; from
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #7  0x00007f5de05941c2 in PMPI_Barrier () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; [root_at_RAID openmpi-1.6.5]# pstack 22167
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #0  0x00000030302e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #1  0x00007f7ee46885eb in epoll_dispatch () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #2  0x00007f7ee468a75a in opal_event_base_loop () from
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #3  0x00007f7ee46af229 in opal_progress () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #4  0x00007f7ee45fcf75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #5  0x00007f7ee060b65e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #6  0x00007f7ee06138ff in ompi_coll_tuned_barrier_intra_two_procs ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; from
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #7  0x00007f7ee460a1c2 in PMPI_Barrier () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  Which looks exactly the same on each machine.  Any thoughts or ideas
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; would
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; be greatly appreciated as
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I am stuck.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  Clay Kirkland
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Message: 2
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Date: Sat, 3 May 2014 06:39:20 -0700
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Subject: Re: [OMPI users] MPI_Barrier hangs on second attempt but only
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;         when    multiple hosts used.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Message-ID: &lt;3CF53D73-15D9-40BB-A2DE-50BA3561A0F4_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Hmmm...just testing on my little cluster here on two nodes, it works
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; just fine with 1.8.2:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; [rhc_at_bend001 v1.8]$ mpirun -n 2 --map-by node ./a.out
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 0 and host= bend001  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 0 and host= bend001  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 0 and host= bend001  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 1 and host= bend002  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 1 and host= bend002  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;  In rank 1 and host= bend002  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; [rhc_at_bend001 v1.8]$
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; How are you configuring OMPI?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; On May 2, 2014, at 2:24 PM, Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; I have been using MPI for many many years so I have very well
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; debugged mpi tests.   I am
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; having trouble on either openmpi-1.4.5  or  openmpi-1.6.5 versions
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; though with getting the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; MPI_Barrier calls to work.   It works fine when I run all processes
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; on one machine but when
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; I run with two or more hosts the second call to MPI_Barrier always
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; hangs.   Not the first one,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; but always the second one.   I looked at FAQ's and such but found
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; nothing except for a comment
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; that MPI_Barrier problems were often problems with fire walls.  Also
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mentioned as a problem
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; was not having the same version of mpi on both machines.  I turned
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; firewalls off and removed
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; and reinstalled the same version on both hosts but I still see the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; same thing.   I then installed
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; lam mpi on two of my machines and that works fine.   I can call the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Barrier function when run on
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; one of two machines by itself  many times with no hangs.  Only hangs
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; if two or more hosts are involved.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; These runs are all being done on CentOS release 6.4.   Here is test
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; program I used.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; main (argc, argv)
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; int argc;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; char **argv;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     char message[20];
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     char hoster[256];
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     char nameis[256];
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     int fd, i, j, jnp, iret, myrank, np, ranker, recker;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     MPI_Comm comm;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     MPI_Comm_rank( MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     MPI_Comm_size( MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;         gethostname(hoster,256);
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 1.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 2.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 3.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;     exit(0);
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;   Here are three runs of test program.  First with two processes on
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; one host, then with
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; two processes on another host, and finally with one process on each
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; of two hosts.  The
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; first two runs are fine but the last run hangs on the second
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Barrier.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos a.out
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 1 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 1 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 1 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host RAID a.out
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 0 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 0 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 0 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos,RAID
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; a.out
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;   Since it is such a simple test and problem and such a widely used
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI function, it must obviously
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; be an installation or configuration problem.   A pstack for each of
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the hung MPI_Barrier processes
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; on the two machines shows this:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; [root_at_centos ~]# pstack 31666
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #0  0x0000003baf0e8ee3 in __epoll_wait_nocancel () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #1  0x00007f5de06125eb in epoll_dispatch () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #2  0x00007f5de061475a in opal_event_base_loop () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #3  0x00007f5de0639229 in opal_progress () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #4  0x00007f5de0586f75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #5  0x00007f5ddc59565e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #6  0x00007f5ddc59d8ff in ompi_coll_tuned_barrier_intra_two_procs ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #7  0x00007f5de05941c2 in PMPI_Barrier () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; [root_at_RAID openmpi-1.6.5]# pstack 22167
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #0  0x00000030302e8ee3 in __epoll_wait_nocancel () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #1  0x00007f7ee46885eb in epoll_dispatch () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #2  0x00007f7ee468a75a in opal_event_base_loop () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #3  0x00007f7ee46af229 in opal_progress () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #4  0x00007f7ee45fcf75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #5  0x00007f7ee060b65e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #6  0x00007f7ee06138ff in ompi_coll_tuned_barrier_intra_two_procs ()
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #7  0x00007f7ee460a1c2 in PMPI_Barrier () from
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  Which looks exactly the same on each machine.  Any thoughts or ideas
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; would be greatly appreciated as
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; I am stuck.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;  Clay Kirkland
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Subject: Digest Footer
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; End of users Digest, Vol 2879, Issue 1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; **************************************
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: Digest Footer
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; End of users Digest, Vol 2881, Issue 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; **************************************
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Digest Footer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; End of users Digest, Vol 2881, Issue 2
</span><br>
<span class="quotelev2">&gt; &gt; **************************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Digest Footer
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 2881, Issue 4
</span><br>
<span class="quotelev1">&gt; **************************************
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24300/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24301.php">Spenser Gilliland: "[OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24299.php">Clay Kirkland: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<li><strong>In reply to:</strong> <a href="24299.php">Clay Kirkland: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24302.php">Gus Correa: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<li><strong>Reply:</strong> <a href="24302.php">Gus Correa: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
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
