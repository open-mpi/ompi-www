<?
$subject_val = "Re: [OMPI users] Newbie: Using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 07:37:52 2007" -->
<!-- isoreceived="20071129123752" -->
<!-- sent="Thu, 29 Nov 2007 07:37:42 -0500" -->
<!-- isosent="20071129123742" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie: Using hostfile" -->
<!-- id="D01707C4-4C21-4008-9F1E-24C5617ED54A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ec5d15220711282309i78750f0cj16a8f2437bc0763f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-11-29 07:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4559.php">Jeff Squyres: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>Previous message:</strong> <a href="4557.php">Reuti: "Re: [OMPI users] Run a process double"</a>
<li><strong>In reply to:</strong> <a href="4556.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4568.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Reply:</strong> <a href="4568.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 29, 2007, at 2:09 AM, Madireddy Samuel Vijaykumar wrote:
<br>
<p><span class="quotelev1">&gt; A non MPI application does run without any issues. Could eloberate on
</span><br>
<span class="quotelev1">&gt; what you mean by doing mpirun &quot;hostname&quot;. You mean i just do an
</span><br>
<span class="quotelev1">&gt; 'mpirun lynx' in my case???
</span><br>
<p>No, I mean
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --hostfile &lt;your_hostfile&gt; hostname
<br>
<p>This should run the &quot;hostname&quot; command on each of your nodes.  If  
<br>
running &quot;hostname&quot; doesn't work after changing the order, then  
<br>
something is very wrong.  If it *does* work, it implies something that  
<br>
there is faulty in the MPI startup (which is more complicated than  
<br>
starting up non-MPI applications).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 28, 2007 9:57 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Well, that's odd.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What happens if you try to mpirun &quot;hostname&quot; (i.e., a non-MPI
</span><br>
<span class="quotelev2">&gt;&gt; application)?  Does it run, or does it hang?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 23, 2007, at 6:00 AM, Madireddy Samuel Vijaykumar wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been using using clusters for some tests. My localhost &quot;lynx&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and i have &quot;puma&quot; and &quot;tiger&quot; which make up the cluster. All have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passwordless ssh enabled. Now if i have the following in my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile(perline in the same order)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lynx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; puma
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tiger
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My tests(from lynx) run over the cluster without any issues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But if move/remove the lynx from there either (perline in the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; order)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; puma
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lynx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tiger
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; puma
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tiger
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My test(from lynx) just does not get any where. It just hangs. And
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not proceed at all. Is this an issue with way my script handles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the cluster node. Or is there an method for the hostfile. Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sam aka Vijju
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :)~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux: Open, True and Cool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4559.php">Jeff Squyres: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>Previous message:</strong> <a href="4557.php">Reuti: "Re: [OMPI users] Run a process double"</a>
<li><strong>In reply to:</strong> <a href="4556.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4568.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Reply:</strong> <a href="4568.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
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
