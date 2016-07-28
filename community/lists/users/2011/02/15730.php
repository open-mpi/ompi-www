<?
$subject_val = "Re: [OMPI users] multicast not available";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 10:33:10 2011" -->
<!-- isoreceived="20110224153310" -->
<!-- sent="Thu, 24 Feb 2011 08:30:09 -0700" -->
<!-- isosent="20110224153009" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multicast not available" -->
<!-- id="AANLkTi=x-Xy8L7awViQOuGcr6rj_N7goakJRFf3zBrak_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C32D4F5F-4F06-4577-BFD5-7B9EB0962182_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] multicast not available<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 10:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15731.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15729.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15724.php">Jeff Squyres: "Re: [OMPI users] multicast not available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are trying to use OMPI as the base for ORCM, then you can tell ORCM
<br>
to use OMPI's &quot;tcp&quot; multicast module - it fakes multicast using pt-2-pt tcp
<br>
messaging.
<br>
<p>-mca rmcast tcp
<br>
<p>will do the trick.
<br>
<p><p>On Thu, Feb 24, 2011 at 6:27 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm still not sure what you're asking -- are you asking how to get Open MPI
</span><br>
<span class="quotelev1">&gt; to work if multicast is disabled in your network?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, not to worry; Open MPI doesn't currently use multicast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2011, at 6:39 AM, Vasiliy G Tolstov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2011-02-24 at 06:32 -0500, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm not sure what you're asking. Open MPI should work just fine in a Xen
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you're unsure about how to use the MPI API, you might want to take a
</span><br>
<span class="quotelev1">&gt; tutorial to get you familiar with MPI concepts, etc. Google around; there
</span><br>
<span class="quotelev1">&gt; are a bunch available. My personal favorite is at the UIUC NCSA web site; if
</span><br>
<span class="quotelev1">&gt; you sign up for a free account, they have a beginners and intermediate MPI
</span><br>
<span class="quotelev1">&gt; tutorials available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent from my PDA. No type good.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 24, 2011, at 4:37 AM, &quot;Vasiliy G Tolstov&quot; &lt;v.tolstov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is not xen specific problem. but routing specific. Admins deny
</span><br>
<span class="quotelev2">&gt; &gt; multicast packets.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Vasiliy G Tolstov &lt;v.tolstov_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Selfip.Ru
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15730/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15731.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15729.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15724.php">Jeff Squyres: "Re: [OMPI users] multicast not available"</a>
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
