<?
$subject_val = "Re: [OMPI users] Private and public IP mixing.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 10 12:14:45 2011" -->
<!-- isoreceived="20111010161445" -->
<!-- sent="Mon, 10 Oct 2011 18:14:20 +0200" -->
<!-- isosent="20111010161420" -->
<!-- name=".-=Kiwi=-." -->
<!-- email="heffeque_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Private and public IP mixing." -->
<!-- id="CAD4g32Tjayqb=M6kRxCh0HJ4ikxrkuvcExJ0ANCtH=Z=+XdZXA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5A106BB7-9768-410B-9ECD-383E1E4D3F43_at_eecs.utk.edu" -->
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
<strong>From:</strong> .-=Kiwi=-. (<em>heffeque_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-10 12:14:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17529.php">Jonathan Bishop: "[OMPI users] can not get hello.cpp to run..."</a>
<li><strong>Previous message:</strong> <a href="17527.php">Jeff Squyres: "Re: [OMPI users] Open MPI error to define MPI_Datatype in header file"</a>
<li><strong>In reply to:</strong> <a href="17515.php">George Bosilca: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17531.php">George Bosilca: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17531.php">George Bosilca: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm confused... my IPs right now are:
<br>
<p>Computer 1 (192.168.31.2 internal / 210.1.1.39 external)
<br>
Computer 2 (192.168.31.3 internal / 210.1.1.40 external)
<br>
Computer 3 (210.1.1.137)
<br>
<p>I want Computer 1 to launch mpirun and Computer 3 to do the task.
<br>
<p>I tried both these commands first on Computer 1 and then also on Computer 3:
<br>
<p>ompi_info --mca btl_tcp_if_include &quot;210.0.0.0/8&quot; --mca oob_tcp_if_include &quot;
<br>
210.0.0.0/8&quot; (didn't work, Computer 3 tries to answer to 192.168.31.2
<br>
instead of 210.1.1.39)
<br>
ompi_info --mca btl_tcp_if_include &quot;210.1.1.0/8&quot; --mca oob_tcp_if_include &quot;
<br>
210.1.1.0/8&quot; (the same, still answering to the wrong IP).
<br>
<p>What am I doing wrong?
<br>
<p><pre>
---
&#239;&#163;&#191;
On Wed, Oct 5, 2011 at 8:08 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
&gt; The real solution is to evict the private addresses from both levels (MPI
&gt; and ORTE). However, based on the ordering of the interfaces, I guess you
&gt; cannot do it by name (eth0 has a private address on one side but a public
&gt; one on the other).
&gt;
&gt; No panic! There is support for this.
&gt;
&gt; Look at the output of &quot;ompi_info --param btw tcp&quot; attached below:
&gt;
&gt; &gt;  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &lt;none&gt;, data
&gt; &gt;           source: default value)
&gt; &gt;           Comma-delimited list of devices or CIDR notation of networks
&gt; &gt;           to use for MPI communication (e.g., &quot;eth0,eth1&quot; or
&gt; &gt;           &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with
&gt; &gt;           btl_tcp_if_exclude.
&gt; &gt;  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &lt;lo,sppp&gt;, data
&gt; &gt;           source: default value)
&gt; &gt;           Comma-delimited list of devices or CIDR notation of networks
&gt; &gt;           to NOT use for MPI communication -- all devices not matching
&gt; &gt;           these specifications will be used (e.g., &quot;eth0,eth1&quot; or
&gt; &gt;           &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with
&gt; &gt;           btl_tcp_if_include.
&gt;
&gt; You can use the [btl|oob]_tcp_if_[include|exclude] either with names or
&gt; with IP ranges. Add the following to your mpirun:
&gt;
&gt; --mca btl_tcp_if_include &quot;210.0.0.0/8&quot; --mca oob_tcp_if_include &quot;
&gt; 210.0.0.0/8&quot;
&gt;
&gt; and everything should work in all cases.
&gt;
&gt;  george.
&gt;
&gt; On Oct 5, 2011, at 12:13 , Jeff Squyres wrote:
&gt;
&gt; &gt; Check out this FAQ entry:
&gt; &gt;
&gt; &gt;    <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
&gt; &gt;
&gt; &gt; Note that there are btl_tcp_if_include / btl_tcp_if_exclude: these
&gt; control MPI-level communications.  There's also oob_tcp_if_include /
&gt; oob_tcp_if_exclude (that take the same kinds of values as
&gt; btl_tcp_if_include/exclude) that control OMPI's run-time environment
&gt; communications.
&gt; &gt;
&gt; &gt;
&gt; &gt; On Oct 5, 2011, at 12:01 PM, (.-=Kiwi=-.) wrote:
&gt; &gt;
&gt; &gt;&gt; &quot;OMPI always tries to use the lowest numbered address first - just a
&gt; natural ordering.&quot;
&gt; &gt;&gt;
&gt; &gt;&gt; That doesn't seem to be the reason. We changed the private IPs to 212...
&gt; (a higher number than the public 210... IPs) and still MPI tries to go to
&gt; 212 afterwards.
&gt; &gt;&gt;
&gt; &gt;&gt; We're reading the oob_tcp and btl_tcp parameters but we're not sure how
&gt; to do it.
&gt; &gt;&gt;
&gt; &gt;&gt; &quot;But if hello world doesn't even run, then try running with &quot;mpirun
&gt; --mca oob_tcp_if_include &lt;the interface(s) you want to use&gt; ...&quot;, per
&gt; Ralph's suggestion.  If *that* doesn't work, also add &quot;--mca
&gt; btl_tcp_if_include ...&quot; as well.&quot;
&gt; &gt;&gt;
&gt; &gt;&gt; We tried doing from Computer 1:
&gt; &gt;&gt;
&gt; &gt;&gt; orterun -mca oob_tcp_debug 1 -np 1 -host 212...3 ifconfig
&gt; &gt;&gt;
&gt; &gt;&gt; and everything was ok
&gt; &gt;&gt;
&gt; &gt;&gt; We tried doing from Computer 1:
&gt; &gt;&gt;
&gt; &gt;&gt; orterun -mca oob_tcp_debug 1 -np 1 -host 210...101 ifconfig
&gt; &gt;&gt;
&gt; &gt;&gt; and it says:
&gt; &gt;&gt;
&gt; &gt;&gt; There are no allocated resources for the application
&gt; &gt;&gt;  ifconfig
&gt; &gt;&gt; that match the requested mapping:
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; Verify that you have mapped the allocated resources properly using the
&gt; &gt;&gt; --host or --hostfile specification.
&gt; &gt;&gt;
&gt; --------------------------------------------------------------------------
&gt; &gt;&gt;
&gt; --------------------------------------------------------------------------
&gt; &gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting
&gt; to
&gt; &gt;&gt; launch so we are aborting. [...]
&gt; &gt;&gt;
&gt; &gt;&gt; Any other ideas?
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; On Wed, Oct 5, 2011 at 1:54 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
&gt; wrote:
&gt; &gt;&gt; OMPI always tries to use the lowest numbered address first - just a
&gt; natural ordering. You need to tell it to use just the public ones for this
&gt; topology. Use the oob_tcp and btl_tcp parameters to do this. See &quot;ompi_info
&gt; --param oob tcp&quot; and &quot;ompi_info --param btl tcp&quot; for the exact syntax.
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; Sent from my iPad
&gt; &gt;&gt;
&gt; &gt;&gt; On Oct 4, 2011, at 10:21 AM, &quot;(.-=Kiwi=-.)&quot; &lt;heffeque_at_[hidden]&gt; wrote:
&gt; &gt;&gt;
&gt; &gt;&gt;&gt; We are constructing a set of computers with Open MPI and there's a
&gt; small problem with mixing public and private IPs.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; We aren't sure about what's causing the problem or how to solve it.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; The files are shared thanks to NFS and we have a couple computers with
&gt; private IPs and public IPs that we want them to send MPI work to some
&gt; machines that have public IPs.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; I'm going to try to describe with example IPs.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Computer 1 sees itself as eth0:  172...2  but has a public IP assigned:
&gt;  210...2
&gt; &gt;&gt;&gt; Computer 2 sees itself as eth0:  172...3  but has a public IP assigned:
&gt;  210...3
&gt; &gt;&gt;&gt; Computers outside the subnet directly have public IPs assigned:
&gt;  210...100+
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; The computers outside see Computer 1 and 2 only with 210... they can't
&gt; see the 172... internal IPs.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; If an outside computer launches mpirun to Computer 1, it works ok.
&gt; &gt;&gt;&gt; If Computer 1 tries to launch mpirun to Computer 2 (with 172...) it
&gt; also works ok (not with 210... because they don't know that that's their
&gt; public IP, but that's not an issue).
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; The problem comes when Computer 1 or 2 try to launch mpirun to outside
&gt; computers.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; We tried to check out what was happening and installed wireshark on an
&gt; outside computer and it seems that the ssh part works ok (the ssh talk
&gt; between 210...2 and 210...101 is ok), but after that the outside computer
&gt; tries to send a TCP SYN package to 172...2 instead of 210...2 and the rest
&gt; of the packets onward the same.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Is there a way to solve this problem?
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; I've read this (
&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/11/11184.php">http://www.open-mpi.org/community/lists/users/2009/11/11184.php</a> ) but I'm
&gt; not really sure what he's doing there.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; We have the option of plugging Computer 1 and Computer 2 directly to
&gt; the switch that the outside computers are on, but we'd rather not because
&gt; we'd prefer the computers to stay on the private network, but if there's no
&gt; other way, I guess we can.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Can it be done without having to change the network topology?
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Thanks in advance.
&gt; &gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; --
&gt; &gt; Jeff Squyres
&gt; &gt; jsquyres_at_[hidden]
&gt; &gt; For corporate legal information go to:
&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17528/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17529.php">Jonathan Bishop: "[OMPI users] can not get hello.cpp to run..."</a>
<li><strong>Previous message:</strong> <a href="17527.php">Jeff Squyres: "Re: [OMPI users] Open MPI error to define MPI_Datatype in header file"</a>
<li><strong>In reply to:</strong> <a href="17515.php">George Bosilca: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17531.php">George Bosilca: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17531.php">George Bosilca: "Re: [OMPI users] Private and public IP mixing."</a>
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
