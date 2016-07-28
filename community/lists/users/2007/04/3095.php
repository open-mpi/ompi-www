<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 11:17:50 2007" -->
<!-- isoreceived="20070419151750" -->
<!-- sent="Thu, 19 Apr 2007 11:17:31 -0400" -->
<!-- isosent="20070419151731" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new installation problem" -->
<!-- id="421E20C7-4B92-4ADA-87D4-D17B3233D3BF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4192a7a40704190807w30c2b0c5i67241bc1cfd8570a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-04-19 11:17:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3096.php">George Bosilca: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
<li><strong>Previous message:</strong> <a href="3094.php">Harald Servat: "[OMPI users] peruse MSG_ARRIVED events lost"</a>
<li><strong>In reply to:</strong> <a href="3093.php">Babu Bhai: "[OMPI users] new installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3100.php">Babu Bhai: "Re: [OMPI users] new installation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I need to make that error string be google-able -- I'll add it to the  
<br>
faq.  :-)
<br>
<p>The problem is likely that you have multiple IP addresses, some of  
<br>
which are not routable to each other (but fail OMPI's routability  
<br>
assumptions).  Check out these FAQ entries:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p>Does this help?
<br>
<p><p>On Apr 19, 2007, at 11:07 AM, Babu Bhai wrote:
<br>
<p><span class="quotelev1">&gt;     I have migrated from LAM/MPI to OpenMPI. I am not able to  
</span><br>
<span class="quotelev1">&gt; execute simple mpi code in which master sends an integer to slave.
</span><br>
<span class="quotelev1">&gt; If i execute code on single machine i.e start 2 instance on same  
</span><br>
<span class="quotelev1">&gt; machine (mpirun -np 2 hello) this works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i execute in cluster using         mpirun --prefix /usr /local - 
</span><br>
<span class="quotelev1">&gt; np 2 --host 199.63.34.154,199.63.34.36 hello
</span><br>
<span class="quotelev1">&gt; it gives following error &quot;btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=113&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi-1.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Abhishek
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
<li><strong>Next message:</strong> <a href="3096.php">George Bosilca: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
<li><strong>Previous message:</strong> <a href="3094.php">Harald Servat: "[OMPI users] peruse MSG_ARRIVED events lost"</a>
<li><strong>In reply to:</strong> <a href="3093.php">Babu Bhai: "[OMPI users] new installation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3100.php">Babu Bhai: "Re: [OMPI users] new installation problem"</a>
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
