<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 15:05:25 2008" -->
<!-- isoreceived="20081106200525" -->
<!-- sent="Thu, 6 Nov 2008 15:05:19 -0500" -->
<!-- isosent="20081106200519" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="AF7B073A-F6AF-4B98-8079-C915D7A53F57_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6A57D0AE-7830-4040-9996-DB57659EFCDA_at_cisco.com" -->
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
<strong>Date:</strong> 2008-11-06 15:05:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0652.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>Previous message:</strong> <a href="0650.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0650.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/09/0616.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed in <a href="https://svn.open-mpi.org/trac/mtt/changeset/1243">https://svn.open-mpi.org/trac/mtt/changeset/1243</a>.
<br>
<p>On Nov 4, 2008, at 10:25 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Guys -- any thoughts on this hg tree / the concept?  If I don't hear
</span><br>
<span class="quotelev1">&gt; anything back within the next day or so, I'm inclined to put this back
</span><br>
<span class="quotelev1">&gt; into the trunk (I could use this stuff in my MTT runs :-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2008, at 1:55 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 31, 2008, at 1:42 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mtt-fast-scratch/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mtt-fast-scratch/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; What do you guys think?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I just ran this, and it seemed to work fine:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  $ client/mtt --fast-scratch /tmp/mtt-jeff-fast-scratch  \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               --scratch /workspace/mtt-jeff-slow-scratch
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim -- what do you guys think?  (of both the code patch and the
</span><br>
<span class="quotelev2">&gt; &gt; concept -- it's a little different than your original idea)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, Ethan and I have put back a few more things into the hg tree,
</span><br>
<span class="quotelev2">&gt; &gt; mostly dealing with whacky cwd() issues.  Not directly related to  
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev2">&gt; &gt; original patch, but it came up when Ethan and I were discussing  
</span><br>
<span class="quotelev1">&gt; the --
</span><br>
<span class="quotelev2">&gt; &gt; fast-scratch stuff this morning.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0652.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>Previous message:</strong> <a href="0650.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0650.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/09/0616.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
