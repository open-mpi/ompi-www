<?
$subject_val = "Re: [OMPI users] Private and public IP mixing.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 10 22:37:02 2011" -->
<!-- isoreceived="20111011023702" -->
<!-- sent="Mon, 10 Oct 2011 22:36:55 -0400" -->
<!-- isosent="20111011023655" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Private and public IP mixing." -->
<!-- id="EFAF6A09-7B82-4F1E-8EE4-725770A17581_at_eecs.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAD4g32Tjayqb=M6kRxCh0HJ4ikxrkuvcExJ0ANCtH=Z=+XdZXA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Private and public IP mixing.<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-10 22:36:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17532.php">Philippe Gouret: "[OMPI users] crash with hardware virtualization"</a>
<li><strong>Previous message:</strong> <a href="17530.php">Ralph Castain: "Re: [OMPI users] can not get hello.cpp to run..."</a>
<li><strong>In reply to:</strong> <a href="17528.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The current version of Open MPI doesn't handle such situations. You either have to configure your NAT differently or try to get your hands on one of the NAT-aware versions as described here <a href="http://www-lipn.univ-paris13.fr/~coti/QosCosGrid/qcgompi.php">http://www-lipn.univ-paris13.fr/~coti/QosCosGrid/qcgompi.php</a>.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Oct 10, 2011, at 12:14 , (.-=Kiwi=-.) wrote:
<br>
<p><span class="quotelev1">&gt; I'm confused... my IPs right now are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Computer 1 (192.168.31.2 internal / 210.1.1.39 external)
</span><br>
<span class="quotelev1">&gt; Computer 2 (192.168.31.3 internal / 210.1.1.40 external)
</span><br>
<span class="quotelev1">&gt; Computer 3 (210.1.1.137)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want Computer 1 to launch mpirun and Computer 3 to do the task.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried both these commands first on Computer 1 and then also on Computer 3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info --mca btl_tcp_if_include &quot;210.0.0.0/8&quot; --mca oob_tcp_if_include &quot;210.0.0.0/8&quot; (didn't work, Computer 3 tries to answer to 192.168.31.2 instead of 210.1.1.39)
</span><br>
<span class="quotelev1">&gt; ompi_info --mca btl_tcp_if_include &quot;210.1.1.0/8&quot; --mca oob_tcp_if_include &quot;210.1.1.0/8&quot; (the same, still answering to the wrong IP).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What am I doing wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; &#239;&#163;&#191;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 5, 2011 at 8:08 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; The real solution is to evict the private addresses from both levels (MPI and ORTE). However, based on the ordering of the interfaces, I guess you cannot do it by name (eth0 has a private address on one side but a public one on the other).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No panic! There is support for this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Look at the output of &quot;ompi_info --param btw tcp&quot; attached below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &lt;none&gt;, data
</span><br>
<span class="quotelev2">&gt; &gt;           source: default value)
</span><br>
<span class="quotelev2">&gt; &gt;           Comma-delimited list of devices or CIDR notation of networks
</span><br>
<span class="quotelev2">&gt; &gt;           to use for MPI communication (e.g., &quot;eth0,eth1&quot; or
</span><br>
<span class="quotelev2">&gt; &gt;           &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with
</span><br>
<span class="quotelev2">&gt; &gt;           btl_tcp_if_exclude.
</span><br>
<span class="quotelev2">&gt; &gt;  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &lt;lo,sppp&gt;, data
</span><br>
<span class="quotelev2">&gt; &gt;           source: default value)
</span><br>
<span class="quotelev2">&gt; &gt;           Comma-delimited list of devices or CIDR notation of networks
</span><br>
<span class="quotelev2">&gt; &gt;           to NOT use for MPI communication -- all devices not matching
</span><br>
<span class="quotelev2">&gt; &gt;           these specifications will be used (e.g., &quot;eth0,eth1&quot; or
</span><br>
<span class="quotelev2">&gt; &gt;           &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with
</span><br>
<span class="quotelev2">&gt; &gt;           btl_tcp_if_include.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can use the [btl|oob]_tcp_if_[include|exclude] either with names or with IP ranges. Add the following to your mpirun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_include &quot;210.0.0.0/8&quot; --mca oob_tcp_if_include &quot;210.0.0.0/8&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and everything should work in all cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 5, 2011, at 12:13 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Check out this FAQ entry:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that there are btl_tcp_if_include / btl_tcp_if_exclude: these control MPI-level communications.  There's also oob_tcp_if_include / oob_tcp_if_exclude (that take the same kinds of values as btl_tcp_if_include/exclude) that control OMPI's run-time environment communications.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 5, 2011, at 12:01 PM, (.-=Kiwi=-.) wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;OMPI always tries to use the lowest numbered address first - just a natural ordering.&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That doesn't seem to be the reason. We changed the private IPs to 212... (a higher number than the public 210... IPs) and still MPI tries to go to 212 afterwards.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We're reading the oob_tcp and btl_tcp parameters but we're not sure how to do it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;But if hello world doesn't even run, then try running with &quot;mpirun --mca oob_tcp_if_include &lt;the interface(s) you want to use&gt; ...&quot;, per Ralph's suggestion.  If *that* doesn't work, also add &quot;--mca btl_tcp_if_include ...&quot; as well.&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We tried doing from Computer 1:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orterun -mca oob_tcp_debug 1 -np 1 -host 212...3 ifconfig
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and everything was ok
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We tried doing from Computer 1:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orterun -mca oob_tcp_debug 1 -np 1 -host 210...101 ifconfig
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and it says:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There are no allocated resources for the application
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  ifconfig
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that match the requested mapping:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; launch so we are aborting. [...]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any other ideas?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Oct 5, 2011 at 1:54 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI always tries to use the lowest numbered address first - just a natural ordering. You need to tell it to use just the public ones for this topology. Use the oob_tcp and btl_tcp parameters to do this. See &quot;ompi_info --param oob tcp&quot; and &quot;ompi_info --param btl tcp&quot; for the exact syntax.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Oct 4, 2011, at 10:21 AM, &quot;(.-=Kiwi=-.)&quot; &lt;heffeque_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We are constructing a set of computers with Open MPI and there's a small problem with mixing public and private IPs.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We aren't sure about what's causing the problem or how to solve it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The files are shared thanks to NFS and we have a couple computers with private IPs and public IPs that we want them to send MPI work to some machines that have public IPs.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm going to try to describe with example IPs.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Computer 1 sees itself as eth0:  172...2  but has a public IP assigned:  210...2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Computer 2 sees itself as eth0:  172...3  but has a public IP assigned:  210...3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Computers outside the subnet directly have public IPs assigned:  210...100+
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The computers outside see Computer 1 and 2 only with 210... they can't see the 172... internal IPs.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If an outside computer launches mpirun to Computer 1, it works ok.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If Computer 1 tries to launch mpirun to Computer 2 (with 172...) it also works ok (not with 210... because they don't know that that's their public IP, but that's not an issue).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The problem comes when Computer 1 or 2 try to launch mpirun to outside computers.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We tried to check out what was happening and installed wireshark on an outside computer and it seems that the ssh part works ok (the ssh talk between 210...2 and 210...101 is ok), but after that the outside computer tries to send a TCP SYN package to 172...2 instead of 210...2 and the rest of the packets onward the same.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is there a way to solve this problem?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I've read this ( <a href="http://www.open-mpi.org/community/lists/users/2009/11/11184.php">http://www.open-mpi.org/community/lists/users/2009/11/11184.php</a> ) but I'm not really sure what he's doing there.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We have the option of plugging Computer 1 and Computer 2 directly to the switch that the outside computers are on, but we'd rather not because we'd prefer the computers to stay on the private network, but if there's no other way, I guess we can.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can it be done without having to change the network topology?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17531/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17532.php">Philippe Gouret: "[OMPI users] crash with hardware virtualization"</a>
<li><strong>Previous message:</strong> <a href="17530.php">Ralph Castain: "Re: [OMPI users] can not get hello.cpp to run..."</a>
<li><strong>In reply to:</strong> <a href="17528.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
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
