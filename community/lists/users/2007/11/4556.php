<?
$subject_val = "Re: [OMPI users] Newbie: Using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 02:09:25 2007" -->
<!-- isoreceived="20071129070925" -->
<!-- sent="Thu, 29 Nov 2007 12:39:20 +0530" -->
<!-- isosent="20071129070920" -->
<!-- name="Madireddy Samuel Vijaykumar" -->
<!-- email="mad.vijay_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie: Using hostfile" -->
<!-- id="ec5d15220711282309i78750f0cj16a8f2437bc0763f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E7A0B560-4218-4369-AB0C-8EC48F776A50_at_cisco.com" -->
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
<strong>From:</strong> Madireddy Samuel Vijaykumar (<em>mad.vijay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 02:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4557.php">Reuti: "Re: [OMPI users] Run a process double"</a>
<li><strong>Previous message:</strong> <a href="4555.php">geetha r: "[OMPI users] configure: error: Cannot support Fortran MPI_ADDRESS_KIND!"</a>
<li><strong>In reply to:</strong> <a href="4538.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4558.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Reply:</strong> <a href="4558.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A non MPI application does run without any issues. Could eloberate on
<br>
what you mean by doing mpirun &quot;hostname&quot;. You mean i just do an
<br>
'mpirun lynx' in my case???
<br>
<p>On Nov 28, 2007 9:57 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Well, that's odd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What happens if you try to mpirun &quot;hostname&quot; (i.e., a non-MPI
</span><br>
<span class="quotelev1">&gt; application)?  Does it run, or does it hang?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 23, 2007, at 6:00 AM, Madireddy Samuel Vijaykumar wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have been using using clusters for some tests. My localhost &quot;lynx&quot;
</span><br>
<span class="quotelev2">&gt; &gt; and i have &quot;puma&quot; and &quot;tiger&quot; which make up the cluster. All have
</span><br>
<span class="quotelev2">&gt; &gt; passwordless ssh enabled. Now if i have the following in my
</span><br>
<span class="quotelev2">&gt; &gt; hostfile(perline in the same order)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; lynx
</span><br>
<span class="quotelev2">&gt; &gt; puma
</span><br>
<span class="quotelev2">&gt; &gt; tiger
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My tests(from lynx) run over the cluster without any issues.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But if move/remove the lynx from there either (perline in the same
</span><br>
<span class="quotelev2">&gt; &gt; order)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; puma
</span><br>
<span class="quotelev2">&gt; &gt; lynx
</span><br>
<span class="quotelev2">&gt; &gt; tiger
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; or
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; puma
</span><br>
<span class="quotelev2">&gt; &gt; tiger
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My test(from lynx) just does not get any where. It just hangs. And
</span><br>
<span class="quotelev2">&gt; &gt; does not proceed at all. Is this an issue with way my script handles
</span><br>
<span class="quotelev2">&gt; &gt; the cluster node. Or is there an method for the hostfile. Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Sam aka Vijju
</span><br>
<span class="quotelev2">&gt; &gt; :)~
</span><br>
<span class="quotelev2">&gt; &gt; Linux: Open, True and Cool
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Sam aka Vijju
:)~
Linux: Open, True and Cool
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4557.php">Reuti: "Re: [OMPI users] Run a process double"</a>
<li><strong>Previous message:</strong> <a href="4555.php">geetha r: "[OMPI users] configure: error: Cannot support Fortran MPI_ADDRESS_KIND!"</a>
<li><strong>In reply to:</strong> <a href="4538.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4558.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Reply:</strong> <a href="4558.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
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
