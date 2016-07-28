<?
$subject_val = "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking	server *REVIEW NEEDED*";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 16:57:48 2010" -->
<!-- isoreceived="20100217215748" -->
<!-- sent="Wed, 17 Feb 2010 16:57:38 -0500" -->
<!-- isosent="20100217215738" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking	server *REVIEW NEEDED*" -->
<!-- id="2B466135-AE56-40EE-B4DF-A9BED55B7855_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100211170913.GA18474_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking	server *REVIEW NEEDED*<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 16:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0722.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking server	*REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="0720.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*"</a>
<li><strong>In reply to:</strong> <a href="0720.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0722.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking server	*REVIEW NEEDED*"</a>
<li><strong>Reply:</strong> <a href="0722.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking server	*REVIEW NEEDED*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay...
<br>
<p>I see the comments like this:
<br>
<p>+    # We write the entire MPI::sources hash to file, even
<br>
+    # though the filename indicates a single INI section
<br>
+    # MTT::Util::hashes_merge will take care of duplicate
<br>
+    # hash keys. The reason for splitting up the .dump files
<br>
+    # is to keep them read and write safe across INI sections
<br>
<p>I'm a little confused by this.  I see that the goal is to have multiple MTT clients running simultaneously, all sharing a single $scratch.  Per the comment above, you're writing all current data to the .dump file, even if it's more than just the one section that the parameters (and filename) implies.  You're relying on merge_hashes() to &quot;figure it out&quot; and create one unified tree underneath.
<br>
<p>I'm a bit worried: aren't there cases where you can end up with a conflict?  I.e., hash A has value X for key K, but hash B has value B for the same key K?
<br>
<p><p><p>On Feb 11, 2010, at 12:09 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; This apparently got lost in the shuffle a few months ago.  The fix
</span><br>
<span class="quotelev1">&gt; allows one to kick off all of their MPI Installs and Test Builds in
</span><br>
<span class="quotelev1">&gt; parallel.  Give it a try when you have a chance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Nov/07/2009 04:15:42PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Nov 6, 2009, at 5:18 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I'm running multiple MTT clients out of the same scratch directory
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; using SGE. I'm running into race conditions between the multiple
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; clients, where one client is overwriting another's data in the .dump
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; files - which is a Very Bad Thing(tm). I'm running the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; client/mtt-lock-server, and I've added the corresponding [Lock]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; section in my INI file. Will my MTT clients now not interfere with
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; each other's .dump files? I'm skeptical of this because I don't see,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; e.g., Lock() calls in SaveRuns(). How do I make my .dump files safe?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Err... perhaps this part wasn't tested well...?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm afraid it's been forever since I've looked at this code and I'm gearing
</span><br>
<span class="quotelev3">&gt; &gt; &gt; up to leave for the Forum on Tuesday and then staying on for SC09, so it's
</span><br>
<span class="quotelev3">&gt; &gt; &gt; quite likely that you'll be able to look at this in more detail before I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; will.  Sorry to pass the buck; just trying to be realistic...  :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; After some digging, I discover that MTT is not designed to execute
</span><br>
<span class="quotelev2">&gt; &gt; multiple INI sections out of a single scratch directory in parallel.
</span><br>
<span class="quotelev2">&gt; &gt; There's a ticket for this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="https://svn.open-mpi.org/trac/mtt/ticket/167">https://svn.open-mpi.org/trac/mtt/ticket/167</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The way around this limitation is to have MTT split up the .dump files
</span><br>
<span class="quotelev2">&gt; &gt; by INI section so that two MTT client running simultaneously never
</span><br>
<span class="quotelev2">&gt; &gt; conflict with each other. (This change did not need to be made for the
</span><br>
<span class="quotelev2">&gt; &gt; Test run .dump files, as MTT already splits them up.) I have attached
</span><br>
<span class="quotelev2">&gt; &gt; a patch, which makes a simple wrapper script for #167 possible. The
</span><br>
<span class="quotelev2">&gt; &gt; changes should not disrupt normal (non-parallel) execution. Anyone
</span><br>
<span class="quotelev2">&gt; &gt; care to give it a try?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mtt-safe-dump-files.diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0722.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking server	*REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="0720.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*"</a>
<li><strong>In reply to:</strong> <a href="0720.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0722.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking server	*REVIEW NEEDED*"</a>
<li><strong>Reply:</strong> <a href="0722.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking server	*REVIEW NEEDED*"</a>
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
