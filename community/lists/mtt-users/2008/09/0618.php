<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 10:11:26 2008" -->
<!-- isoreceived="20080918141126" -->
<!-- sent="Thu, 18 Sep 2008 10:11:19 -0400" -->
<!-- isosent="20080918141119" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="ea86ce220809180711u7212fc52x6cf12252f8af4956_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7166D051-6D4E-4C9F-B547-E2E7205C509F_at_cisco.com" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 10:11:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0619.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0617.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0615.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0620.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0620.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I Guess I should comment on Jeff's comments too.
<br>
<p>On Thu, Sep 18, 2008 at 9:00 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Sep 16, 2008, at 12:07 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What happens if one uses --local-scratch, but leaves out the
</span><br>
<span class="quotelev2">&gt;&gt; --scratch option? In this case, I think MTT should assume
</span><br>
<span class="quotelev2">&gt;&gt; --scratch is the same as --local-scratch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this case, my $0.02 is that it should be an error.  --scratch implies a
</span><br>
<span class="quotelev1">&gt; --local-scatch, but I don't think the implication should go the other way.
</span><br>
<p>Yeah, I agree, especially if we call it --mpi-install-scratch.
<br>
<p><span class="quotelev2">&gt;&gt; Could the &quot;local&quot; in --local-scratch ever be misleading?
</span><br>
<span class="quotelev2">&gt;&gt; Couldn't a user ever use a mounted filesystem that's faster
</span><br>
<span class="quotelev2">&gt;&gt; than all their local filesystem? Should it be
</span><br>
<span class="quotelev2">&gt;&gt; --fast-scratch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm... good point.  What if we name it what it really is:
</span><br>
<span class="quotelev1">&gt; --mpi-install-scratch?  This also opens the door for other phase scratches
</span><br>
<span class="quotelev1">&gt; if we ever want them.  And it keeps everything consistent and simple (from
</span><br>
<span class="quotelev1">&gt; the user's point of view).
</span><br>
<p>Ah, yeah, ok, now I see why you wouldl call it --mpi-install-scratch, so
<br>
that it matches the MTT ini section name.  Sure, that works for me.
<br>
<p><span class="quotelev2">&gt;&gt; For future work, how about --scratch taking a (CSV?) list of
</span><br>
<span class="quotelev2">&gt;&gt; scratch directories. MTT then does a quick check for which
</span><br>
<span class="quotelev2">&gt;&gt; is the fastest filesystem (if such a check is
</span><br>
<span class="quotelev2">&gt;&gt; possible/feasible), and proceeds accordingly. That is, doing
</span><br>
<span class="quotelev2">&gt;&gt; everything it possible can in a fast scratch (builds,
</span><br>
<span class="quotelev2">&gt;&gt; writing out metadata, etc.), and installing the MPI(s) into
</span><br>
<span class="quotelev2">&gt;&gt; the slow mounted scratch. Would this be possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  I'm not quite sure how that would work -- &quot;fastest&quot; is a hard thing to
</span><br>
<span class="quotelev1">&gt; determine.  What is &quot;fastest&quot; at this moment may be &quot;slowest&quot; 2 minutes from
</span><br>
<span class="quotelev1">&gt; now, for example.
</span><br>
<p>Yeah, I claim that auto-detecting file system speed is outside the
<br>
scope of MTT. :-)
<br>
<p><span class="quotelev1">&gt; I'm looking at the patch in detail now... sorry for the delay...
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
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0619.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0617.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0615.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0620.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0620.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
