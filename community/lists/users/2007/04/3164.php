<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 30 10:41:00 2007" -->
<!-- isoreceived="20070430144100" -->
<!-- sent="Mon, 30 Apr 2007 08:40:29 -0600" -->
<!-- isosent="20070430144029" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running hpcc with a threaded BLAS" -->
<!-- id="11A003A8-4B75-43C8-820D-656C85DC020C_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5711d990704270529p6e4e2c0fmc71583935c83f1d6_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-30 10:40:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3165.php">Rob: "[OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>Previous message:</strong> <a href="3163.php">Nuno Sucena Almeida: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>In reply to:</strong> <a href="3156.php">G&#246;tz Waschk: "[OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3177.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3177.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2007, at 6:29 AM, G&#246;tz Waschk wrote:
<br>
<p><span class="quotelev1">&gt; I'm testing my new cluster installation with the hpcc benchmark and
</span><br>
<span class="quotelev1">&gt; openmpi 1.2.1 on RHEL5 32 bit. I have some trouble with using a
</span><br>
<span class="quotelev1">&gt; threaded BLAS implementation. I have tried ATLAS 3.7.30 compiled with
</span><br>
<span class="quotelev1">&gt; pthread support. It crashes as reported here:
</span><br>
<span class="quotelev1">&gt; <a href="http://sourceforge.net/tracker/index.php">http://sourceforge.net/tracker/index.php</a>? 
</span><br>
<span class="quotelev1">&gt; func=detail&amp;aid=1708575&amp;group_id=23725&amp;atid=379483
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I link to the ATLAS version without pthread support hpcc runs fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem with Goto BLAS 1.14 too, the output of hpcc stops
</span><br>
<span class="quotelev1">&gt; before the HPL run, then the hpcc processes seem to do nothing,
</span><br>
<span class="quotelev1">&gt; consuming 100% CPU. If I set the maximum number of threads for Goto
</span><br>
<span class="quotelev1">&gt; BLAS to 1, hpcc is working fine again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi was compiled without thread support.
</span><br>
<p>Did you configure with --without-threads or did you just not specify  
<br>
any options?  Specifying --without-threads is a promise that you will  
<br>
never ever have any threads anywhere in your code, especially on  
<br>
Linux.  This is because we have to use our own memory manager code to  
<br>
get around the memory pinning problem with Myrinet/GM and  
<br>
InfiniBand.  You might want to configure with --without-memory- 
<br>
manager and see if that helps with your crashes.
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3165.php">Rob: "[OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>Previous message:</strong> <a href="3163.php">Nuno Sucena Almeida: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>In reply to:</strong> <a href="3156.php">G&#246;tz Waschk: "[OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3177.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3177.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
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
