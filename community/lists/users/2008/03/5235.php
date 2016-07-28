<?
$subject_val = "Re: [OMPI users] Begginers question: why does this program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 10:34:17 2008" -->
<!-- isoreceived="20080318143417" -->
<!-- sent="Tue, 18 Mar 2008 10:34:10 -0400" -->
<!-- isosent="20080318143410" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Begginers question: why does this program" -->
<!-- id="F2CE0BE4-10CC-4DE2-A1EE-4A457C3CAAE3_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="202428.41389.qm_at_web33101.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Begginers question: why does this program<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 10:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5236.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Previous message:</strong> <a href="5234.php">George Bosilca: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>In reply to:</strong> <a href="5233.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As indicated in the FAQ you should add the directory where Open MPI  
<br>
was installed to the LD_LIBRARY_PATH.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 18, 2008, at 8:57 AM, Giovani Faccin wrote:
<br>
<p><span class="quotelev1">&gt; Ok, I uninstalled the previous version. Then downloaded the pre- 
</span><br>
<span class="quotelev1">&gt; release version. Unpacked it, configure, make, make install....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running MPICC I get this:
</span><br>
<span class="quotelev1">&gt; mpiCC: error while loading shared libraries: libopen-pal.so.0:  
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $whereis libopen-pal
</span><br>
<span class="quotelev1">&gt; libopen-pal: /usr/local/lib/libopen-pal.so /usr/local/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the library exists. How can I make mpiCC know it's location?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Giovani
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Giovani Faccin &lt;giovanifaccin_at_[hidden]&gt; escreveu: Yep, setting  
</span><br>
<span class="quotelev1">&gt; the card manually did not solve it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm compiling the pre-release version now. Let's see if it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Giovani
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Giovani Faccin &lt;giovanifaccin_at_[hidden]&gt; escreveu: Hi Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiler and flags:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sys-devel/gcc-4.1.2  USE=&quot;doc* fortran gtk mudflap nls (-altivec) - 
</span><br>
<span class="quotelev1">&gt; bootstrap -build -d -gcj (-hardened) -ip28 -ip32r10k -libffi% (- 
</span><br>
<span class="quotelev1">&gt; multilib) -multislot (-n32) (-n64) -nocxx -objc -objc++ -objc-gc - 
</span><br>
<span class="quotelev1">&gt; test -vanilla&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Network stuff:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sonja gfaccin # ifconfig
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:33166 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:33166 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:9846970 (9.3 Mb)  TX bytes:9846970 (9.3 Mb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; wlan0     Link encap:Ethernet  HWaddr 00:1C:BF:24:24:91
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.1.50  Bcast:192.168.0.255  Mask: 
</span><br>
<span class="quotelev1">&gt; 255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::21c:bfff:fe24:2491/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:5944 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:6343 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:3058968 (2.9 Mb)  TX bytes:1713598 (1.6 Mb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; wmaster0  Link encap:UNSPEC  HWaddr 00-1C- 
</span><br>
<span class="quotelev1">&gt; BF-24-24-91-60-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt; -00
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have 2 cards in my laptop, one is an ethernet one that's not  
</span><br>
<span class="quotelev1">&gt; enabled (no kernel modules loaded). The other one is the wireless  
</span><br>
<span class="quotelev1">&gt; card, which is enabled. Those 2 interfaces appear because the driver  
</span><br>
<span class="quotelev1">&gt; creates them. The real one is wlan0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try to find in the faq where is this flag to specify the card,  
</span><br>
<span class="quotelev1">&gt; just in case MPI might be trying to use wmaster0. Let's see if it  
</span><br>
<span class="quotelev1">&gt; works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Giovani
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark Kosmowski &lt;mark.kosmowski_at_[hidden]&gt; escreveu: Giovani:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which compiler are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, you didn't mention this, but does &quot;mpirun hostname&quot; give the
</span><br>
<span class="quotelev1">&gt; expected response? I (also new) had a hang similar to what you are
</span><br>
<span class="quotelev1">&gt; describing due to ompi getting confused as to which of two network
</span><br>
<span class="quotelev1">&gt; interfaces to use - &quot;mpirun hostname&quot; would hang when started on
</span><br>
<span class="quotelev1">&gt; certain nodes. This problem was resolved by telling ompi which
</span><br>
<span class="quotelev1">&gt; network interface to use (I forget the option needed to do this off
</span><br>
<span class="quotelev1">&gt; the top of my head, but it is in the FAQ somewhere).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
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
<span class="quotelev1">&gt; Abra sua conta no Yahoo! Mail, o &#250;nico sem limite de espa&#231;o para  
</span><br>
<span class="quotelev1">&gt; armazenamento! _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Abra sua conta no Yahoo! Mail, o &#250;nico sem limite de espa&#231;o para  
</span><br>
<span class="quotelev1">&gt; armazenamento! _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Abra sua conta no Yahoo! Mail, o &#250;nico sem limite de espa&#231;o para  
</span><br>
<span class="quotelev1">&gt; armazenamento! _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5235/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5236.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Previous message:</strong> <a href="5234.php">George Bosilca: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>In reply to:</strong> <a href="5233.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
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
