<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 15:03:11 2006" -->
<!-- isoreceived="20060711190311" -->
<!-- sent="Tue, 11 Jul 2006 13:03:08 -0600" -->
<!-- isosent="20060711190308" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0" -->
<!-- id="20060711190308.GA4880_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.4263.1152643661.3329.users_at_open-mpi.org" -->
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
<strong>From:</strong> Daryl W. Grunau (<em>dwg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-11 15:03:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1611.php">George Bosilca: "Re: [OMPI users] users Digest, Vol 328, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1609.php">George Bosilca: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Maybe in reply to:</strong> <a href="1599.php">Daryl W. Grunau: "[OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Tue, 11 Jul 2006 12:23:16 -0400
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;507769B7-8495-478B-B9A8-18982665346B_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using the Intel compiler 9.0 on several platforms to compile Open  
</span><br>
<span class="quotelev1">&gt; MPI. I never get such kind of errors. I look into the attached file  
</span><br>
<span class="quotelev1">&gt; and I notice 2 things. First, there is a -m64 flag on the command  
</span><br>
<span class="quotelev1">&gt; line, and icc complain about not knowing anything about it (and it's  
</span><br>
<span class="quotelev1">&gt; right). Second, at the end of the file, it complain about a missing  
</span><br>
<span class="quotelev1">&gt; symbol (gxx_personality). I doubt that icc should know anything about  
</span><br>
<span class="quotelev1">&gt; the gxx_personality. In fact it look like icc is trying to use some  
</span><br>
<span class="quotelev1">&gt; libraries compiled with g++. Can you check the library path used by  
</span><br>
<span class="quotelev1">&gt; your compiler ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<p>George, my problem was solved by the fix below.  I didn't realize the
<br>
difference between icc and icpc - thanks Bernie!
<br>
<p>Daryl
<br>
<p><span class="quotelev1">&gt; Date: Tue, 11 Jul 2006 09:11:26 -0700
</span><br>
<span class="quotelev1">&gt; To: &lt;dwg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: problem buiding openmpi 1.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daryl,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   You need to set the C++ compiler to icpc, not icc for things to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bernie Borenstein
</span><br>
<span class="quotelev1">&gt; The Boeing Company
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1611.php">George Bosilca: "Re: [OMPI users] users Digest, Vol 328, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1609.php">George Bosilca: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Maybe in reply to:</strong> <a href="1599.php">Daryl W. Grunau: "[OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
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
