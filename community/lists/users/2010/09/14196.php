<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1674, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 05:47:40 2010" -->
<!-- isoreceived="20100909094740" -->
<!-- sent="Thu, 9 Sep 2010 11:47:35 +0200" -->
<!-- isosent="20100909094735" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1674, Issue 1" -->
<!-- id="163C77BC-48CD-470D-8D5C-BC19378DD2F9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C847EE3.705_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1674, Issue 1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 05:47:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14197.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14195.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14181.php">lyb: "Re: [OMPI users] users Digest, Vol 1674, Issue 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think it's really a fault -- it's just how we designed and implemented it.
<br>
<p><p>On Sep 6, 2010, at 7:40 AM, lyb wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your answer, but I test with MPICH2, it doesn't have this fault. Why?
</span><br>
<span class="quotelev2">&gt;&gt; Message: 9
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 1 Sep 2010 20:14:44 -0600
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain&lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both
</span><br>
<span class="quotelev2">&gt;&gt; 	use 100%	one cpu core. Is it a bug?
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:&lt;4E4BC153-B4E3-43E2-B980-904DABE78B4E_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's not a bug - that is normal behavior. The processes are polling hard to establish the connections as quickly as possible.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 1, 2010, at 7:24 PM, lyb wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  Hi, All,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;  &gt;  I tested two sample applications on Windows 2003 Server, one use MPI_Comm_accept and other use MPI_Comm_connect,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  when run into MPI_Comm_accept or MPI_Comm_connect, the application use 100% one cpu core.  Is it a bug or some wrong?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;  &gt;  I tested with three version including Version 1.4 (stable), Version 1.5 (prerelease) and trunk 23706 version.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;  &gt;  ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  MPI_Open_port(MPI_INFO_NULL, port);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  MPI_Comm_accept( port, MPI_INFO_NULL, 0, MPI_COMM_WORLD,&amp;client );
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;  &gt;  ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  MPI_Comm_connect( port, MPI_INFO_NULL, 0, MPI_COMM_WORLD,&amp;server );
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;  &gt;  thanks a lot.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;  &gt;  lyb
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;  &gt;  &gt;  &gt;  &gt;  &gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt;&gt;   
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14197.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14195.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14181.php">lyb: "Re: [OMPI users] users Digest, Vol 1674, Issue 1"</a>
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
