<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 20 06:53:19 2007" -->
<!-- isoreceived="20070420105319" -->
<!-- sent="Fri, 20 Apr 2007 06:53:11 -0400" -->
<!-- isosent="20070420105311" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new installation problem" -->
<!-- id="E7655CDD-A05E-484A-8455-EEC68A6A052B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4192a7a40704192027w6b8e5879m74a49671c9ee783b_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-20 06:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3106.php">Bas van der Vlies: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Previous message:</strong> <a href="3104.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>In reply to:</strong> <a href="3100.php">Babu Bhai: "Re: [OMPI users] new installation problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 19, 2007, at 11:27 PM, Babu Bhai wrote:
<br>
<p><span class="quotelev1">&gt;        I have already seen this faq. Nodes in cluster does not have  
</span><br>
<span class="quotelev1">&gt; multiple IP addresses. One thing i forgot to mention is that  
</span><br>
<span class="quotelev1">&gt; systems in cluster does not have static IPs and get IP address  
</span><br>
<span class="quotelev1">&gt; through DHCP.
</span><br>
<p>Ok, that should be fine.
<br>
<p><span class="quotelev1">&gt; Also if there is a print statement (printf(&quot;hello world\n&quot;); ) in  
</span><br>
<span class="quotelev1">&gt; slave it is correctly printed on masters consoles but none of MPI  
</span><br>
<span class="quotelev1">&gt; commands work.
</span><br>
<p>I'm not sure I follow -- which MPI commands are you referring to,  
<br>
mpirun?  Something else?
<br>
<p>I think you're saying that the MPI job starts up, printf works fine,  
<br>
but then something goes bad...?  Are you saying that MPI *functions*  
<br>
don't seem to work (like MPI_SEND)?  (I'm a little confused by your  
<br>
use of the word &quot;command&quot;)
<br>
<p>If that is the case, then this is a bit more odd because it means  
<br>
that OMPI started up, launched your job, and did some &quot;out of band&quot;  
<br>
communication, but then failed the first time it tried to establish  
<br>
MPI communications.
<br>
<p>Are you running any firewall or port-blocking software on either of  
<br>
the nodes?  Is each node routable from the other?  (in Linux, at  
<br>
least, errno 113 is &quot;no route to host&quot;, which would tend to imply  
<br>
that one host could not open a socket to another because it couldn't  
<br>
route there)
<br>
<p><p><span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Abhishek
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;I need to make that error string be google-able -- I'll add it to the
</span><br>
<span class="quotelev2">&gt; &gt;faq. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;The problem is likely that you have multiple IP addresses, some of
</span><br>
<span class="quotelev2">&gt; &gt;which are not routable to each other (but fail OMPI's routability
</span><br>
<span class="quotelev2">&gt; &gt;assumptions). Check out these FAQ entries:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Does this help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Apr 19, 2007, at 11:07 AM, Babu Bhai wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have migrated from LAM/MPI to OpenMPI. I am not able to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; execute simple mpi code in which master sends an integer to slave.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If i execute code on single machine i.e start 2 instance on same
</span><br>
<span class="quotelev3">&gt; &gt;&gt; machine (mpirun -np 2 hello) this works fine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If i execute in cluster using mpirun --prefix /usr /local -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; np 2 --host 199.63.34.154,199.63.34.36 hello
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it gives following error &quot;btl_tcp_endpoint.c:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; errno=113&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;I am using openmpi-1.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Abhishek
</span><br>
<span class="quotelev3">&gt; &gt; &gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;--
</span><br>
<span class="quotelev2">&gt; &gt;Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3106.php">Bas van der Vlies: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Previous message:</strong> <a href="3104.php">Jeff Squyres: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>In reply to:</strong> <a href="3100.php">Babu Bhai: "Re: [OMPI users] new installation problem"</a>
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
