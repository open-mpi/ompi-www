<?
$subject_val = "Re: [OMPI users] Problems Broadcasting/Scattering Data";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 02:52:46 2008" -->
<!-- isoreceived="20080109075246" -->
<!-- sent="Wed, 09 Jan 2008 08:53:28 +0100" -->
<!-- isosent="20080109075328" -->
<!-- name="Dino Rossegger" -->
<!-- email="dino.rossegger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Broadcasting/Scattering Data" -->
<!-- id="47847D78.6040704_at_gmx.at" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="20080108220849.GA9534_at_wintermute" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Broadcasting/Scattering Data<br>
<strong>From:</strong> Dino Rossegger (<em>dino.rossegger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-09 02:53:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4800.php">Warner Yuen: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>Previous message:</strong> <a href="4798.php">Jeff Squyres: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>In reply to:</strong> <a href="4797.php">Andreas Sch&#228;fer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andreas Sch&#228;fer schrieb:
<br>
<span class="quotelev1">&gt; On 19:31 Tue 08 Jan     , Dino Rossegger wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the programm, but sadly I can't get it work :(.
</span><br>
<span class="quotelev2">&gt;&gt; It's the same error as in my programm. I get the following output:
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; 10
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; 11
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which as far as I know can't be correct. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, my bad. The field pointers had to be corrected for the Gather.
</span><br>
<span class="quotelev1">&gt; Now the output looks like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Now it works, thank you very much
<br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 500
</span><br>
<span class="quotelev1">&gt; 1000
</span><br>
<span class="quotelev1">&gt; 10
</span><br>
<span class="quotelev1">&gt; 510
</span><br>
<span class="quotelev1">&gt; 1010
</span><br>
<span class="quotelev1">&gt; 11
</span><br>
<span class="quotelev1">&gt; 511
</span><br>
<span class="quotelev1">&gt; 1011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this what you did expect?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW: of course you can send multidimensional arrays with scatter and
</span><br>
<span class="quotelev1">&gt; gather. This is because they're really just one-dimensional in
</span><br>
<span class="quotelev1">&gt; memory. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I thought so too but was a bit confused since I got the tip to fold the 
<br>
arrays etc.
<br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4800.php">Warner Yuen: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>Previous message:</strong> <a href="4798.php">Jeff Squyres: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>In reply to:</strong> <a href="4797.php">Andreas Sch&#228;fer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
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
