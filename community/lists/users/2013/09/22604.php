<?
$subject_val = "Re: [OMPI users] knem support in ompi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  4 07:15:12 2013" -->
<!-- isoreceived="20130904111512" -->
<!-- sent="Wed, 4 Sep 2013 13:15:09 +0200" -->
<!-- isosent="20130904111509" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem support in ompi" -->
<!-- id="2DC81BB0-CE2C-4AED-B9AC-61BFD9E81DFE_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CADGp0BRUXpxaCFwS0jvQTiSYzJgtMNKORFVmah8vD65pJcbmSw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem support in ompi<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-04 07:15:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22605.php">Lee-Ping Wang: "[OMPI users] Changing directory from /tmp"</a>
<li><strong>Previous message:</strong> <a href="22603.php">Alina Sklarevich: "[OMPI users] knem support in ompi"</a>
<li><strong>In reply to:</strong> <a href="22603.php">Alina Sklarevich: "[OMPI users] knem support in ompi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Small messages, i.e. their length is under btl_sm_eager_limit, always use normal SM. KNEM usage is restricted only for messages over either the eager size or the btl_sm_knem_dma_min (if KNEM supports DMA).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Sep 4, 2013, at 12:47 , Alina Sklarevich &lt;alinas_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am building ompi v1.6 with knem support and I see that when knem is enabed from the command line 
</span><br>
<span class="quotelev1">&gt; it is used for all message sizes in SM btl. There is no threshold for when to start using knem - starting 
</span><br>
<span class="quotelev1">&gt; which message size.
</span><br>
<span class="quotelev1">&gt; This makes the performance of small messages worse since it also uses knem.
</span><br>
<span class="quotelev1">&gt; Maybe a certain &quot;knem threshold&quot; should be added to specify when to use SM btl's send and when to start using knem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alina.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22605.php">Lee-Ping Wang: "[OMPI users] Changing directory from /tmp"</a>
<li><strong>Previous message:</strong> <a href="22603.php">Alina Sklarevich: "[OMPI users] knem support in ompi"</a>
<li><strong>In reply to:</strong> <a href="22603.php">Alina Sklarevich: "[OMPI users] knem support in ompi"</a>
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
