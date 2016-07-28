<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 10:25:17 2008" -->
<!-- isoreceived="20081104152517" -->
<!-- sent="Tue, 4 Nov 2008 10:25:05 -0500" -->
<!-- isosent="20081104152505" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="6A57D0AE-7830-4040-9996-DB57659EFCDA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E4EADB78-5B08-4D01-BD16-92E51FAAE595_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-04 10:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0651.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/10/0649.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/10/0644.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0651.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0651.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guys -- any thoughts on this hg tree / the concept?  If I don't hear  
<br>
anything back within the next day or so, I'm inclined to put this back  
<br>
into the trunk (I could use this stuff in my MTT runs :-) ).
<br>
<p>Thanks!
<br>
<p>On Oct 31, 2008, at 1:55 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 31, 2008, at 1:42 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mtt-fast-scratch/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mtt-fast-scratch/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What do you guys think?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just ran this, and it seemed to work fine:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  $ client/mtt --fast-scratch /tmp/mtt-jeff-fast-scratch  \
</span><br>
<span class="quotelev2">&gt; &gt;               --scratch /workspace/mtt-jeff-slow-scratch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim -- what do you guys think?  (of both the code patch and the
</span><br>
<span class="quotelev1">&gt; concept -- it's a little different than your original idea)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, Ethan and I have put back a few more things into the hg tree,
</span><br>
<span class="quotelev1">&gt; mostly dealing with whacky cwd() issues.  Not directly related to your
</span><br>
<span class="quotelev1">&gt; original patch, but it came up when Ethan and I were discussing the --
</span><br>
<span class="quotelev1">&gt; fast-scratch stuff this morning.
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0651.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/10/0649.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/10/0644.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0651.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0651.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
