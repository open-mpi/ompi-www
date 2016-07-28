<?
$subject_val = "Re: [OMPI users] Newbie: Using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 11:29:03 2007" -->
<!-- isoreceived="20071128162903" -->
<!-- sent="Wed, 28 Nov 2007 11:27:55 -0500" -->
<!-- isosent="20071128162755" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie: Using hostfile" -->
<!-- id="E7A0B560-4218-4369-AB0C-8EC48F776A50_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ec5d15220711230300u6c6f4514i639d391995e5b847_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie: Using hostfile<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 11:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4539.php">Jeff Squyres: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>Previous message:</strong> <a href="4537.php">Jeff Squyres: "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4514.php">Madireddy Samuel Vijaykumar: "[OMPI users] Newbie: Using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4556.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Reply:</strong> <a href="4556.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, that's odd.
<br>
<p>What happens if you try to mpirun &quot;hostname&quot; (i.e., a non-MPI  
<br>
application)?  Does it run, or does it hang?
<br>
<p><p>On Nov 23, 2007, at 6:00 AM, Madireddy Samuel Vijaykumar wrote:
<br>
<p><span class="quotelev1">&gt; I have been using using clusters for some tests. My localhost &quot;lynx&quot;
</span><br>
<span class="quotelev1">&gt; and i have &quot;puma&quot; and &quot;tiger&quot; which make up the cluster. All have
</span><br>
<span class="quotelev1">&gt; passwordless ssh enabled. Now if i have the following in my
</span><br>
<span class="quotelev1">&gt; hostfile(perline in the same order)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lynx
</span><br>
<span class="quotelev1">&gt; puma
</span><br>
<span class="quotelev1">&gt; tiger
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My tests(from lynx) run over the cluster without any issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if move/remove the lynx from there either (perline in the same  
</span><br>
<span class="quotelev1">&gt; order)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; puma
</span><br>
<span class="quotelev1">&gt; lynx
</span><br>
<span class="quotelev1">&gt; tiger
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; puma
</span><br>
<span class="quotelev1">&gt; tiger
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My test(from lynx) just does not get any where. It just hangs. And
</span><br>
<span class="quotelev1">&gt; does not proceed at all. Is this an issue with way my script handles
</span><br>
<span class="quotelev1">&gt; the cluster node. Or is there an method for the hostfile. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Sam aka Vijju
</span><br>
<span class="quotelev1">&gt; :)~
</span><br>
<span class="quotelev1">&gt; Linux: Open, True and Cool
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4539.php">Jeff Squyres: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>Previous message:</strong> <a href="4537.php">Jeff Squyres: "Re: [OMPI users] SegFault with MPI_THREAD_MULTIPLE in 1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4514.php">Madireddy Samuel Vijaykumar: "[OMPI users] Newbie: Using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4556.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Reply:</strong> <a href="4556.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
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
