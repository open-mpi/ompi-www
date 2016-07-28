<?
$subject_val = "Re: [OMPI users] Problem with MPI_Intercomm_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 09:00:14 2011" -->
<!-- isoreceived="20110607130014" -->
<!-- sent="Tue, 7 Jun 2011 09:00:08 -0400" -->
<!-- isosent="20110607130008" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Intercomm_create" -->
<!-- id="E7CC9341-079B-4C71-B4FB-863083ED6378_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3C720ADA-EFFF-4D8A-BC65-898FC070A4CE_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Intercomm_create<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 09:00:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16690.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Previous message:</strong> <a href="16688.php">Virginie trinite: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
<li><strong>In reply to:</strong> <a href="16686.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16691.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>Do we need to file a bug about this?
<br>
<p><p>On Jun 7, 2011, at 1:57 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Frederic,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached you will find an example that is supposed to work. The main difference with your code is on T3, T4 where you have inversed the local and remote comm. As depicted on the picture attached below, during the 3th step you will create the intercomm between ab and c (no overlap) using ac as a bridge communicator (here the two roots, a and c, can exchange messages).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Based on the MPI 2.2 standard, especially on the paragraph in PS:, the attached code should have been working. Unfortunately, I couldn't run it successfully neither with Open MPI trunk nor MPICH2 1.4rc1. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: Here is what the MPI standard states about the MPI_Intercomm_create:
</span><br>
<span class="quotelev2">&gt;&gt; The function MPI_INTERCOMM_CREATE can be used to create an inter-communicator from two existing intra-communicators, in the following situation: At least one selected member from each group (the &#147;group leader&#148;) has the ability to communicate with the selected member from the other group; that is, a &#147;peer&#148; communicator exists to which both leaders belong, and each leader knows the rank of the other leader in this peer communicator. Furthermore, members of each group know the rank of their leader.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;intercomm_create.c&gt;&lt;Mail Attachment.txt&gt;&lt;PastedGraphic-2.pdf&gt;&lt;Mail Attachment.txt&gt;&lt;Mail Attachment.txt&gt;
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
<li><strong>Next message:</strong> <a href="16690.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Previous message:</strong> <a href="16688.php">Virginie trinite: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
<li><strong>In reply to:</strong> <a href="16686.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16691.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
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
