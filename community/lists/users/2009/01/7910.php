<?
$subject_val = "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 31 08:09:16 2009" -->
<!-- isoreceived="20090131130916" -->
<!-- sent="Sat, 31 Jan 2009 08:09:11 -0500" -->
<!-- isosent="20090131130911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5" -->
<!-- id="F9F50A16-48FB-456A-9CA6-8FB083DC5D30_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200901302225.28888.roy.dragseth_at_uit.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-31 08:09:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7911.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7909.php">Reuti: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7903.php">Roy Dragseth: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2009, at 4:25 PM, Roy Dragseth wrote:
<br>
<p><span class="quotelev1">&gt; I'm not very familiar with the workings of ltdl, I got this from one  
</span><br>
<span class="quotelev1">&gt; of our
</span><br>
<span class="quotelev1">&gt; users.  Would you suggest that if one use openmpi 1.3 and ltdl you  
</span><br>
<span class="quotelev1">&gt; should not
</span><br>
<span class="quotelev1">&gt; explicitly link with -lltdl?  At least this seems to work correctly  
</span><br>
<span class="quotelev1">&gt; with the
</span><br>
<span class="quotelev1">&gt; example I posted. That is, I can link the program without specifying  
</span><br>
<span class="quotelev1">&gt; -lltdl so
</span><br>
<span class="quotelev1">&gt; the symbol seems to resolve to something in the openmpi libraries  
</span><br>
<span class="quotelev1">&gt; and the
</span><br>
<span class="quotelev1">&gt; example runs without crashing.
</span><br>
<p><p>Yes, that is what I would recommend.
<br>
<p>I note that the Libtool v2.2.6a docs explicitly describe this problem  
<br>
and say &quot;don't do that&quot; (see section 11.6).  But I agree that it's a  
<br>
less-than-optimal solution for OMPI users because you shouldn't need  
<br>
to know/care that Open MPI embeds its own copy of libltdl.  I have  
<br>
just posted to the libtool-bug mailing list to see if they would  
<br>
consider a configure option to add a prefix to OMPI's internal libltdl  
<br>
symbols, thereby preventing clashes like this.  Let's see what they say.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://lists.gnu.org/archive/html/bug-libtool/2009-01/msg00032.html">http://lists.gnu.org/archive/html/bug-libtool/2009-01/msg00032.html</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7911.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7909.php">Reuti: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7903.php">Roy Dragseth: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
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
