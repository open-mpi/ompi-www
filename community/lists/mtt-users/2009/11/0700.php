<?
$subject_val = "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  7 16:15:46 2009" -->
<!-- isoreceived="20091107211546" -->
<!-- sent="Sat, 7 Nov 2009 16:15:42 -0500" -->
<!-- isosent="20091107211542" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver" -->
<!-- id="DAE918EB-5433-413A-AA3A-A7240AC116CD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091106221856.GF53339_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] [MTT bugs] [MTT] #212: Generic network lockingserver<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-07 16:15:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0701.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver"</a>
<li><strong>Previous message:</strong> <a href="0699.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking server"</a>
<li><strong>In reply to:</strong> <a href="0699.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0701.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver"</a>
<li><strong>Reply:</strong> <a href="0701.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver"</a>
<li><strong>Reply:</strong> <a href="0702.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/02/0720.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 6, 2009, at 5:18 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I'm running multiple MTT clients out of the same scratch directory
</span><br>
<span class="quotelev1">&gt; using SGE. I'm running into race conditions between the multiple
</span><br>
<span class="quotelev1">&gt; clients, where one client is overwriting another's data in the .dump
</span><br>
<span class="quotelev1">&gt; files - which is a Very Bad Thing(tm). I'm running the
</span><br>
<span class="quotelev1">&gt; client/mtt-lock-server, and I've added the corresponding [Lock]
</span><br>
<span class="quotelev1">&gt; section in my INI file. Will my MTT clients now not interfere with
</span><br>
<span class="quotelev1">&gt; each other's .dump files? I'm skeptical of this because I don't see,
</span><br>
<span class="quotelev1">&gt; e.g., Lock() calls in SaveRuns(). How do I make my .dump files safe?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Err... perhaps this part wasn't tested well...?
<br>
<p>I'm afraid it's been forever since I've looked at this code and I'm  
<br>
gearing up to leave for the Forum on Tuesday and then staying on for  
<br>
SC09, so it's quite likely that you'll be able to look at this in more  
<br>
detail before I will.  Sorry to pass the buck; just trying to be  
<br>
realistic...  :-(
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0701.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver"</a>
<li><strong>Previous message:</strong> <a href="0699.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking server"</a>
<li><strong>In reply to:</strong> <a href="0699.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking server"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0701.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver"</a>
<li><strong>Reply:</strong> <a href="0701.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver"</a>
<li><strong>Reply:</strong> <a href="0702.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network	lockingserver"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2010/02/0720.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #212: Generic network locking	server *REVIEW NEEDED*"</a>
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
