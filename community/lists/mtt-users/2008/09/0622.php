<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 11:24:03 2008" -->
<!-- isoreceived="20080919152403" -->
<!-- sent="Fri, 19 Sep 2008 11:23:58 -0400" -->
<!-- isosent="20080919152358" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="20080919152357.GB24596_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C74E6E8E-37CC-4782-9077-D1B5504E00AA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch to add --local-scratch option<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 11:23:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0623.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0621.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0621.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0623.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0623.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep/18/2008 05:35:13PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 18, 2008, at 10:45 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah, yeah, ok, now I see why you wouldl call it --mpi-install-scratch, so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it matches the MTT ini section name.  Sure, that works for me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since this does seem like a feature that should eventually
</span><br>
<span class="quotelev2">&gt;&gt; propogate to all the other phases (except for Test run),
</span><br>
<span class="quotelev2">&gt;&gt; what will we call the option to group all the fast phase
</span><br>
<span class="quotelev2">&gt;&gt; scratches?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --scratch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seriously, *if* we ever implement the other per-phase scratches, I think 
</span><br>
<span class="quotelev1">&gt; having one overall --scratch and fine-grained per-phase specifications 
</span><br>
<span class="quotelev1">&gt; fine.  I don't think we need to go overboard to have a way to say I want 
</span><br>
<span class="quotelev1">&gt; phases X, Y, and Z to use scratch A.  Meaning that you could just use 
</span><br>
<span class="quotelev1">&gt; --X-scratch=A --Y-scratch=A and --Z-scratch=A.
</span><br>
<p>--mpi-install-scratch actually has MTT install (using
<br>
DESTDIR) into --scratch. Is that confusing? Though
<br>
--fast-scratch could also be misleading, as I could see a
<br>
user thinking that --fast-scratch will do some magical
<br>
optimization to make their NFS directory go faster. I guess
<br>
I'm done splitting hairs over --mpi-install-scratch :-)
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0623.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0621.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0621.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0623.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0623.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
