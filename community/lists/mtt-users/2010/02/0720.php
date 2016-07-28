<?
$subject_val = "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 12:09:19 2010" -->
<!-- isoreceived="20100211170919" -->
<!-- sent="Thu, 11 Feb 2010 12:09:13 -0500" -->
<!-- isosent="20100211170913" -->
<!-- name="Ethan Mallove" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*" -->
<!-- id="20100211170913.GA18474_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DAE918EB-5433-413A-AA3A-A7240AC116CD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*<br>
<strong>From:</strong> Ethan Mallove (<em>Ethan.Mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 12:09:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0721.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking	server *REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/01/0719.php">Jeff Squyres: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/11/0700.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0721.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking	server *REVIEW NEEDED*"</a>
<li><strong>Reply:</strong> <a href="0721.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking	server *REVIEW NEEDED*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This apparently got lost in the shuffle a few months ago.  The fix
<br>
allows one to kick off all of their MPI Installs and Test Builds in
<br>
parallel.  Give it a try when you have a chance.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; On Sat, Nov/07/2009 04:15:42PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 6, 2009, at 5:18 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm running multiple MTT clients out of the same scratch directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; using SGE. I'm running into race conditions between the multiple
</span><br>
<span class="quotelev3">&gt; &gt;&gt; clients, where one client is overwriting another's data in the .dump
</span><br>
<span class="quotelev3">&gt; &gt;&gt; files - which is a Very Bad Thing(tm). I'm running the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; client/mtt-lock-server, and I've added the corresponding [Lock]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; section in my INI file. Will my MTT clients now not interfere with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; each other's .dump files? I'm skeptical of this because I don't see,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; e.g., Lock() calls in SaveRuns(). How do I make my .dump files safe?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Err... perhaps this part wasn't tested well...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm afraid it's been forever since I've looked at this code and I'm gearing 
</span><br>
<span class="quotelev2">&gt; &gt; up to leave for the Forum on Tuesday and then staying on for SC09, so it's 
</span><br>
<span class="quotelev2">&gt; &gt; quite likely that you'll be able to look at this in more detail before I 
</span><br>
<span class="quotelev2">&gt; &gt; will.  Sorry to pass the buck; just trying to be realistic...  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After some digging, I discover that MTT is not designed to execute
</span><br>
<span class="quotelev1">&gt; multiple INI sections out of a single scratch directory in parallel.
</span><br>
<span class="quotelev1">&gt; There's a ticket for this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/mtt/ticket/167">https://svn.open-mpi.org/trac/mtt/ticket/167</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The way around this limitation is to have MTT split up the .dump files
</span><br>
<span class="quotelev1">&gt; by INI section so that two MTT client running simultaneously never
</span><br>
<span class="quotelev1">&gt; conflict with each other. (This change did not need to be made for the
</span><br>
<span class="quotelev1">&gt; Test run .dump files, as MTT already splits them up.) I have attached
</span><br>
<span class="quotelev1">&gt; a patch, which makes a simple wrapper script for #167 possible. The
</span><br>
<span class="quotelev1">&gt; changes should not disrupt normal (non-parallel) execution. Anyone
</span><br>
<span class="quotelev1">&gt; care to give it a try?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p>

<br><p>
_______________________________________________
<br>
mtt-users mailing list
<br>
mtt-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
<br>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0720/mtt-safe-dump-files.diff">mtt-safe-dump-files.diff</a>
</ul>
<!-- attachment="mtt-safe-dump-files.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0721.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking	server *REVIEW NEEDED*"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/01/0719.php">Jeff Squyres: "Re: [MTT users] MTT:Error while executing	ompi-core-perf-testing.ini"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/11/0700.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0721.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking	server *REVIEW NEEDED*"</a>
<li><strong>Reply:</strong> <a href="0721.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic networklocking	server *REVIEW NEEDED*"</a>
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
