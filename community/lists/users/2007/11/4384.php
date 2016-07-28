<?
$subject_val = "Re: [OMPI users] Too many open files Error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 14:13:46 2007" -->
<!-- isoreceived="20071101181346" -->
<!-- sent="Thu, 1 Nov 2007 16:13:34 -0200" -->
<!-- isosent="20071101181334" -->
<!-- name="Bruno Coutinho" -->
<!-- email="coutinho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Too many open files Error" -->
<!-- id="a8d96dec0711011113pe408958s48370072eea5d557_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D1B59946-9D23-445D-9247-C4609D233928_at_eecs.utk.edu" -->
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
<strong>From:</strong> Bruno Coutinho (<em>coutinho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-01 14:13:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4385.php">Adrian Knoth: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>Previous message:</strong> <a href="4383.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4375.php">George Bosilca: "Re: [OMPI users] Too many open files Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4385.php">Adrian Knoth: "Re: [OMPI users] Too many open files Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This page has information on how to increase the limit of open files.
<br>
Pass 1 and 3 don't require reboot.
<br>
<p><a href="http://www.cs.uwaterloo.ca/~brecht/servers/openfiles.html">http://www.cs.uwaterloo.ca/~brecht/servers/openfiles.html</a>
<br>
<p><p>2007/10/31, George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For some version of Open MPI (recent versions) you can use the
</span><br>
<span class="quotelev1">&gt; btl_tcp_disable_family MCA parameter to disable the IPv6 at runtime.
</span><br>
<span class="quotelev1">&gt; Unfortunately, there is no similar option allowing you to disable IPv6
</span><br>
<span class="quotelev1">&gt; for the runtime environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2007, at 6:55 PM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Clement,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I seem to recall (though this may have changed) that if a system
</span><br>
<span class="quotelev2">&gt; &gt; supports
</span><br>
<span class="quotelev2">&gt; &gt; ipv6, we may open both ipv4 and ipv6 sockets. This can be worked
</span><br>
<span class="quotelev2">&gt; &gt; around by
</span><br>
<span class="quotelev2">&gt; &gt; configuring Open MPI with --disable-ipv6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other then that, I don't know of anything else to do except raise
</span><br>
<span class="quotelev2">&gt; &gt; the limit
</span><br>
<span class="quotelev2">&gt; &gt; for the number of open files.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know it doesn't help you now, but we are actively working on this
</span><br>
<span class="quotelev2">&gt; &gt; problem
</span><br>
<span class="quotelev2">&gt; &gt; for Open MPI 1.3. This version will introduce a tree routing scheme
</span><br>
<span class="quotelev2">&gt; &gt; which
</span><br>
<span class="quotelev2">&gt; &gt; will dramatically reduce the number of open sockets that the runtime
</span><br>
<span class="quotelev2">&gt; &gt; system
</span><br>
<span class="quotelev2">&gt; &gt; needs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tuesday 30 October 2007 07:15:42 pm Clement Kam Man Chu wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  I got a &quot;Too many open files&quot; error while running over 1024
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on 512 cpus.  I found the same error on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/11/2216.php">http://www.open-mpi.org/community/lists/users/2006/11/2216.php</a>, but I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would like to know whether it is another solution instead of changing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; limit descriptors.  The limit descriptors is changed by root access
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; needs to restart the system that I don't want to.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Clement
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4384/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4385.php">Adrian Knoth: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>Previous message:</strong> <a href="4383.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4375.php">George Bosilca: "Re: [OMPI users] Too many open files Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4385.php">Adrian Knoth: "Re: [OMPI users] Too many open files Error"</a>
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
