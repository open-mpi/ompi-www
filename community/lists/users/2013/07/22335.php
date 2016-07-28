<?
$subject_val = "Re: [OMPI users] max. message size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 07:34:31 2013" -->
<!-- isoreceived="20130718113431" -->
<!-- sent="Thu, 18 Jul 2013 11:34:26 +0000" -->
<!-- isosent="20130718113426" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] max. message size" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F728A27_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130718105424.1628559m7h6a9zcw_at_mail.livenet.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] max. message size<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 07:34:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22336.php">Iliev, Hristo: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22334.php">Brice Goglin: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22330.php">mohammad assadsolimani: "Re: [OMPI users] max. message size"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm assuming that you are referring to the fact that MPI uses an &quot;int&quot; to specify the &quot;length&quot; of a message (i.e., the number of items to be sent and received), like this:
<br>
<p>&nbsp;&nbsp;MPI_Send(buffer, count, datatype, ...)
<br>
<p>&quot;count&quot; is an int, which means that it has a max value of INT_MAX, which, on today's 64 bit machines, is about 2 billion.
<br>
<p>Note, however, that the message that is sent is really &quot;count times length of datatype&quot;, and datatype can represent something more than 1 byte.  For example, if you use (count=2B, datatype=MPI_INT), that represents ~2 billion MPI_INTs, and an &quot;int&quot; is typically 4 bytes, so you're sending an ~8 billion byte message.
<br>
<p>And you can use the MPI datatype constructors to create a datatype that is longer than that (google around; you'll find some good MPI datatype constructor tutorials).  E.g., you can send (count=2B, datatype=my_datatype), where my_datatype represents, say, 128 bytes.  Then you'll be sending a message that is (2 billion * 128) bytes.
<br>
<p>And so on.
<br>
<p>So there's two typical ways to send &quot;extra large&quot; messages in MPI:
<br>
<p>1. Use a (count, datatype) tuple that will represent more than 2 billion bytes.
<br>
<p>2. Break your message up into multiple parts.  E.g., if you have 16GB message to send, send it in 16 1GB chunks (which I assume is what Changsheng Jiang's code snipit was doing).
<br>
<p><p>On Jul 18, 2013, at 4:54 AM, mohammad assadsolimani &lt;m.assadsolimani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Mike,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your response. I use this program
</span><br>
<span class="quotelev1">&gt; <a href="http://reduze.hepforge.org/">http://reduze.hepforge.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did not rite its code myself.Did I understand you right?
</span><br>
<span class="quotelev1">&gt; You mean I have to use the new version of OMPI namely:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI 1.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; because the version which I use is:  mpirun (Open MPI) 1.5.5
</span><br>
<span class="quotelev1">&gt; What is IB ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you in advanced
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Mohammad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 5
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 17 Jul 2013 16:15:41 +0300
</span><br>
<span class="quotelev2">&gt;&gt; From: Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] max. message size
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt; 	&lt;CAAO1KyakymR7wqOMwW31ntZrbYShMzkhh9Wvm7yy1Swofmh=1w_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; do you use IB as a transport? max message size in IB/RDMA  is limited to
</span><br>
<span class="quotelev2">&gt;&gt; 2G, but OMPI 1.7 splits large buffers during RDMA into 2G chunks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 17, 2013 at 11:51 AM, mohammad assadsolimani &lt;
</span><br>
<span class="quotelev2">&gt;&gt; m.assadsolimani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<h3>Post removed!</h3>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 2631, Issue 1
</span><br>
<span class="quotelev2">&gt;&gt; **************************************
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Webmail: <a href="http://mail.livenet.ch">http://mail.livenet.ch</a>
</span><br>
<span class="quotelev1">&gt; Glauben entdecken: <a href="http://www.jesus.ch">http://www.jesus.ch</a>
</span><br>
<span class="quotelev1">&gt; Christliches Webportal: <a href="http://www.livenet.ch">http://www.livenet.ch</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22336.php">Iliev, Hristo: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22334.php">Brice Goglin: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22330.php">mohammad assadsolimani: "Re: [OMPI users] max. message size"</a>
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
