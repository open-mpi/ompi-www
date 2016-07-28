<?
$subject_val = "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 13:25:55 2009" -->
<!-- isoreceived="20091118182555" -->
<!-- sent="Wed, 18 Nov 2009 13:25:49 -0500" -->
<!-- isosent="20091118182549" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver" -->
<!-- id="20091118182549.GH53339_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 13:25:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0703.php">Venkat Venkatsubra: "[MTT users] MTT trivial tests fails to complete on Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Previous message:</strong> <a href="0701.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver"</a>
<li><strong>In reply to:</strong> <a href="0700.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/02/0720.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Nov/07/2009 04:15:42PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 6, 2009, at 5:18 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running multiple MTT clients out of the same scratch directory
</span><br>
<span class="quotelev2">&gt;&gt; using SGE. I'm running into race conditions between the multiple
</span><br>
<span class="quotelev2">&gt;&gt; clients, where one client is overwriting another's data in the .dump
</span><br>
<span class="quotelev2">&gt;&gt; files - which is a Very Bad Thing(tm). I'm running the
</span><br>
<span class="quotelev2">&gt;&gt; client/mtt-lock-server, and I've added the corresponding [Lock]
</span><br>
<span class="quotelev2">&gt;&gt; section in my INI file. Will my MTT clients now not interfere with
</span><br>
<span class="quotelev2">&gt;&gt; each other's .dump files? I'm skeptical of this because I don't see,
</span><br>
<span class="quotelev2">&gt;&gt; e.g., Lock() calls in SaveRuns(). How do I make my .dump files safe?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Err... perhaps this part wasn't tested well...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid it's been forever since I've looked at this code and I'm gearing 
</span><br>
<span class="quotelev1">&gt; up to leave for the Forum on Tuesday and then staying on for SC09, so it's 
</span><br>
<span class="quotelev1">&gt; quite likely that you'll be able to look at this in more detail before I 
</span><br>
<span class="quotelev1">&gt; will.  Sorry to pass the buck; just trying to be realistic...  :-(
</span><br>
<p>After some digging, I discover that MTT is not designed to execute
<br>
multiple INI sections out of a single scratch directory in parallel.
<br>
There's a ticket for this:
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/ticket/167">https://svn.open-mpi.org/trac/mtt/ticket/167</a>
<br>
<p>The way around this limitation is to have MTT split up the .dump files
<br>
by INI section so that two MTT client running simultaneously never
<br>
conflict with each other. (This change did not need to be made for the
<br>
Test run .dump files, as MTT already splits them up.) I have attached
<br>
a patch, which makes a simple wrapper script for #167 possible. The
<br>
changes should not disrupt normal (non-parallel) execution. Anyone
<br>
care to give it a try?
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0702/mtt-safe-dump-files.diff">mtt-safe-dump-files.diff</a>
</ul>
<!-- attachment="mtt-safe-dump-files.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0703.php">Venkat Venkatsubra: "[MTT users] MTT trivial tests fails to complete on Centos5.3-x86_64 bit platform with OFED 1.5"</a>
<li><strong>Previous message:</strong> <a href="0701.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver"</a>
<li><strong>In reply to:</strong> <a href="0700.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/02/0720.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*"</a>
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
