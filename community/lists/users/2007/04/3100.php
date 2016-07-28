<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 23:27:22 2007" -->
<!-- isoreceived="20070420032722" -->
<!-- sent="Fri, 20 Apr 2007 08:57:18 +0530" -->
<!-- isosent="20070420032718" -->
<!-- name="Babu Bhai" -->
<!-- email="babubhai3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new installation problem" -->
<!-- id="4192a7a40704192027w6b8e5879m74a49671c9ee783b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] new installation problem" -->
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
<strong>From:</strong> Babu Bhai (<em>babubhai3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-19 23:27:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3101.php">Harald Servat: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
<li><strong>Previous message:</strong> <a href="3099.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Maybe in reply to:</strong> <a href="3093.php">Babu Bhai: "[OMPI users] new installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3105.php">Jeff Squyres: "Re: [OMPI users] new installation problem"</a>
<li><strong>Reply:</strong> <a href="3105.php">Jeff Squyres: "Re: [OMPI users] new installation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have already seen this faq. Nodes in cluster does not have multiple
<br>
IP addresses. One thing i forgot to mention is that systems in cluster does
<br>
not have static IPs and get IP address through DHCP.
<br>
<p>Also if there is a print statement (printf(&quot;hello world\n&quot;); ) in slave it
<br>
is correctly printed on masters consoles but none of MPI commands work.
<br>
<p>regards,
<br>
<p>Abhishek
<br>
<p><span class="quotelev1">&gt;I need to make that error string be google-able -- I'll add it to the
</span><br>
<span class="quotelev1">&gt;faq. :-)
</span><br>
<p><span class="quotelev1">&gt;The problem is likely that you have multiple IP addresses, some of
</span><br>
<span class="quotelev1">&gt;which are not routable to each other (but fail OMPI's routability
</span><br>
<span class="quotelev1">&gt;assumptions). Check out these FAQ entries:
</span><br>
<p><span class="quotelev1">&gt;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability<http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability<http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection<http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection<http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>&gt;
</span><br>
<p><span class="quotelev1">&gt;Does this help?
</span><br>
<p><span class="quotelev1">&gt;On Apr 19, 2007, at 11:07 AM, Babu Bhai wrote:
</span><br>
<p><span class="quotelev2">&gt;&gt; I have migrated from LAM/MPI to OpenMPI. I am not able to
</span><br>
<span class="quotelev2">&gt;&gt; execute simple mpi code in which master sends an integer to slave.
</span><br>
<span class="quotelev2">&gt;&gt; If i execute code on single machine i.e start 2 instance on same
</span><br>
<span class="quotelev2">&gt;&gt; machine (mpirun -np 2 hello) this works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If i execute in cluster using mpirun --prefix /usr /local -
</span><br>
<span class="quotelev2">&gt;&gt; np 2 --host 199.63.34.154,199.63.34.36 hello
</span><br>
<span class="quotelev2">&gt;&gt; it gives following error &quot;btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with
</span><br>
<span class="quotelev2">&gt;&gt; errno=113&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;I am using openmpi-1.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;regards,
</span><br>
<span class="quotelev2">&gt; &gt;Abhishek
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<p><span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;Cisco Systems
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3100/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3101.php">Harald Servat: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
<li><strong>Previous message:</strong> <a href="3099.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Maybe in reply to:</strong> <a href="3093.php">Babu Bhai: "[OMPI users] new installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3105.php">Jeff Squyres: "Re: [OMPI users] new installation problem"</a>
<li><strong>Reply:</strong> <a href="3105.php">Jeff Squyres: "Re: [OMPI users] new installation problem"</a>
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
