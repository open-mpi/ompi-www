<?
$subject_val = "Re: [OMPI users] test OpenMPI without Internet access";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 14:10:11 2008" -->
<!-- isoreceived="20081022181011" -->
<!-- sent="Wed, 22 Oct 2008 10:46:14 -0500" -->
<!-- isosent="20081022154614" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] test OpenMPI without Internet access" -->
<!-- id="F81DFA7E-B955-4EE9-851F-0D5753DA91E5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF597A95B9.169FDB97-ON482574E7.00838406-482574E8.00006E50_at_cn.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] test OpenMPI without Internet access<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 11:46:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7078.php">Patrick Geoffray: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>Previous message:</strong> <a href="7076.php">Jeff Squyres: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>In reply to:</strong> <a href="7036.php">Wen Hao Wang: "[OMPI users] test OpenMPI without Internet access"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7088.php">Wen Hao Wang: "Re: [OMPI users] test OpenMPI without Internet access"</a>
<li><strong>Reply:</strong> <a href="7088.php">Wen Hao Wang: "Re: [OMPI users] test OpenMPI without Internet access"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 19, 2008, at 7:05 PM, Wen Hao Wang wrote:
<br>
<p><span class="quotelev1">&gt; I have one cluster without Internet connection. I want to test  
</span><br>
<span class="quotelev1">&gt; OpenMPI functions on it. It seems MTT can not be used. Do I have any  
</span><br>
<span class="quotelev1">&gt; other choice for the testing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You can always run tests manually.  MTT is simply our harness for  
<br>
automated testing, which *usually* (but not always) involves  
<br>
downloading the latest nightly snapshot from the IU web site.
<br>
<p>You can certainly configure MTT to use a local copy of Open MPI and  
<br>
not use the IU web nightly snapshot.
<br>
<p><span class="quotelev1">&gt; I have tried lamtest. &quot;make -k check&quot; gave a lot of IB related  
</span><br>
<span class="quotelev1">&gt; warnings, indicating that my dat.conf file contained invalid entry.  
</span><br>
<span class="quotelev1">&gt; Each machine of my cluster has one IB connectX adapter installed.  
</span><br>
<span class="quotelev1">&gt; But do not know why lamtest detected that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>You must have built with udapl support.  Open MPI will use as many  
<br>
interfaces as you have built for; if you have built support for udapl  
<br>
(which I do not believe we build by default on Linux -- you have to  
<br>
specifically ask for it to be built because [among other reasons] OMPI  
<br>
would prefer to use verbs, not udapl), then we initialize udapl at run  
<br>
time and if you have an illegal dat.conf file, then I'm guessing udapl  
<br>
is complaining about it.  I don't know very much about udapl, so I  
<br>
can't give good guidance here (other than suggesting not building  
<br>
udapl support and just testing the native verbs support, which is  
<br>
where we put all of our effort for Linux/OpenFabrics/Open MPI support).
<br>
<p>OMPI's udapl support is mainly for Sun, because udapl *is* [currently]  
<br>
their high-performance network stack.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7078.php">Patrick Geoffray: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>Previous message:</strong> <a href="7076.php">Jeff Squyres: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>In reply to:</strong> <a href="7036.php">Wen Hao Wang: "[OMPI users] test OpenMPI without Internet access"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7088.php">Wen Hao Wang: "Re: [OMPI users] test OpenMPI without Internet access"</a>
<li><strong>Reply:</strong> <a href="7088.php">Wen Hao Wang: "Re: [OMPI users] test OpenMPI without Internet access"</a>
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
