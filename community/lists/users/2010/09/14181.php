<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1674, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  6 01:41:07 2010" -->
<!-- isoreceived="20100906054107" -->
<!-- sent="Mon, 06 Sep 2010 13:40:51 +0800" -->
<!-- isosent="20100906054051" -->
<!-- name="lyb" -->
<!-- email="linyb79_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1674, Issue 1" -->
<!-- id="4C847EE3.705_at_163.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.13.1283443202.17631.users_at_open-mpi.org" -->
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
<strong>From:</strong> lyb (<em>linyb79_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-06 01:40:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14182.php">dbbmyx-franzxaver_at_[hidden]: "[OMPI users] MPI_Wait: wait for ever by using Issend using larger data-strings"</a>
<li><strong>Previous message:</strong> <a href="14180.php">dbbmyx-franzxaver_at_[hidden]: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14196.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1674, Issue 1"</a>
<li><strong>Reply:</strong> <a href="14196.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1674, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your answer, but I test with MPICH2, it doesn't have this 
<br>
fault. Why?
<br>
<span class="quotelev1">&gt; Message: 9
</span><br>
<span class="quotelev1">&gt; Date: Wed, 1 Sep 2010 20:14:44 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain&lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both
</span><br>
<span class="quotelev1">&gt; 	use 100%	one cpu core. Is it a bug?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:&lt;4E4BC153-B4E3-43E2-B980-904DABE78B4E_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not a bug - that is normal behavior. The processes are polling hard to establish the connections as quickly as possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 1, 2010, at 7:24 PM, lyb wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  Hi, All,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  I tested two sample applications on Windows 2003 Server, one use MPI_Comm_accept and other use MPI_Comm_connect,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  when run into MPI_Comm_accept or MPI_Comm_connect, the application use 100% one cpu core.  Is it a bug or some wrong?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  I tested with three version including Version 1.4 (stable), Version 1.5 (prerelease) and trunk 23706 version.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  MPI_Open_port(MPI_INFO_NULL, port);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  MPI_Comm_accept( port, MPI_INFO_NULL, 0, MPI_COMM_WORLD,&amp;client );
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  MPI_Comm_connect( port, MPI_INFO_NULL, 0, MPI_COMM_WORLD,&amp;server );
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  thanks a lot.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  lyb
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14182.php">dbbmyx-franzxaver_at_[hidden]: "[OMPI users] MPI_Wait: wait for ever by using Issend using larger data-strings"</a>
<li><strong>Previous message:</strong> <a href="14180.php">dbbmyx-franzxaver_at_[hidden]: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14196.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1674, Issue 1"</a>
<li><strong>Reply:</strong> <a href="14196.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1674, Issue 1"</a>
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
