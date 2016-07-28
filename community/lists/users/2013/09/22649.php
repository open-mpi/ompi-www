<?
$subject_val = "Re: [OMPI users] adding library (libmpi_cxx.so.1)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 14:12:18 2013" -->
<!-- isoreceived="20130913181218" -->
<!-- sent="Fri, 13 Sep 2013 18:11:58 +0000" -->
<!-- isosent="20130913181158" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] adding library (libmpi_cxx.so.1)" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8A7B7D_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1379094210.76442.YahooMailNeo_at_web160201.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] adding library (libmpi_cxx.so.1)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-13 14:11:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22650.php">amirreza Hashemi: "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Previous message:</strong> <a href="22648.php">amirreza Hashemi: "[OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>In reply to:</strong> <a href="22648.php">amirreza Hashemi: "[OMPI users] adding library (libmpi_cxx.so.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22650.php">amirreza Hashemi: "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This isn't quit enough information to figure out what's going on.  Can you provide all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Sep 13, 2013, at 7:43 PM, amirreza Hashemi &lt;hashemi_amirreza_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a problem to add a MPI library libmpi_cxx.so.1 to code which I am workign on it, I export the library to LD_LIBRARY_PATH. But whenever I do this, I get this error:
</span><br>
<span class="quotelev1">&gt; Fatal error in MPI_Comm_dup: Invalid communicator, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Comm_dup(168): MPI_Comm_dup(comm=0x0, new_comm=0x7fff39826eac) failed
</span><br>
<span class="quotelev1">&gt; MPI_Comm_dup(96).: Invalid communicator
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It might be possible that I have several openmpi in my linux machine and the code could not recognize right one. I just have this library in these two path: /usr/lib64/openmpi/lib/ and /usr/local/lib/, but none of them is not working in my case. Installed openmpi in my machine is openmpi-1.5.4-3.fc16.x86_64 and I am working with Fedora.
</span><br>
<span class="quotelev1">&gt; Does anybody can help me to figure out this problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ami
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
<li><strong>Next message:</strong> <a href="22650.php">amirreza Hashemi: "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Previous message:</strong> <a href="22648.php">amirreza Hashemi: "[OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>In reply to:</strong> <a href="22648.php">amirreza Hashemi: "[OMPI users] adding library (libmpi_cxx.so.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22650.php">amirreza Hashemi: "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
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
