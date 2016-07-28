<?
$subject_val = "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 16:08:49 2016" -->
<!-- isoreceived="20160719200849" -->
<!-- sent="Tue, 19 Jul 2016 13:08:46 -0700" -->
<!-- isosent="20160719200846" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking" -->
<!-- id="44B4D18A-B2B6-4B9D-B748-C933699CB770_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CABfhiS3svEh4w21h24Ff3KMChB-=vQTGZ6FsWKZix=kQ08-URw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 16:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29696.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Previous message:</strong> <a href="29694.php">Nathaniel Graham: "[OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>In reply to:</strong> <a href="29694.php">Nathaniel Graham: "[OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29696.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Reply:</strong> <a href="29696.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds to me like you have a confused build - I&#226;&#128;&#153;d whack your prefix location and do a &#226;&#128;&#156;make install&#226;&#128;&#157; again
<br>
<p><span class="quotelev1">&gt; On Jul 19, 2016, at 1:04 PM, Nathaniel Graham &lt;nrgraham23_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run the OSU tests for some results for a poster, but I am getting the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am building off master with gcc on Red Hat Enterprise Linux Server release 6.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My config command is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ./configure --prefix=/users/ngraham/ompi_install --enable-mpi-java
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything builds fine, but I get this issue with mpirun.  I am running a Java program, but I do not believe this is Java related.  The mpirun command I am using is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mpirun -np 2 Java OSUBW
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29694.php">http://www.open-mpi.org/community/lists/users/2016/07/29694.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29696.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Previous message:</strong> <a href="29694.php">Nathaniel Graham: "[OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>In reply to:</strong> <a href="29694.php">Nathaniel Graham: "[OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29696.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<li><strong>Reply:</strong> <a href="29696.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
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
