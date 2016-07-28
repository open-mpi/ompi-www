<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb 10 07:54:44 2007" -->
<!-- isoreceived="20070210125444" -->
<!-- sent="Sat, 10 Feb 2007 07:54:27 -0500" -->
<!-- isosent="20070210125427" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: MPI 2.1" -->
<!-- id="28050106-2FC5-4C35-87DF-B4C1F4A2D3DB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DA7A1931-9496-44F3-A116-A0A57239F415_at_mcs.anl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-10 07:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2662.php">Jeff Squyres: "Re: [OMPI users] Fwd: MPI 2.1"</a>
<li><strong>Previous message:</strong> <a href="2660.php">Jeff Squyres: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2662.php">Jeff Squyres: "Re: [OMPI users] Fwd: MPI 2.1"</a>
<li><strong>Reply:</strong> <a href="2662.php">Jeff Squyres: "Re: [OMPI users] Fwd: MPI 2.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI.  The MPI Forum is re-convening to make some corrections to the  
<br>
MPI-2 standard.  Note that this is *not* a call for new features to  
<br>
MPI; it's a call for help in fixing the bugs in the current MPI-2  
<br>
spec.  Bill Gropp's e-mail below briefly describes the current state  
<br>
of affairs and gives a URL containing more information (including how  
<br>
to join the mpi-21 mailing list).
<br>
<p>NOTE: Pardon the posting to multiple lists simultaneously -- the  
<br>
intent is to spread this message far and wide to find people who are  
<br>
interested in helping with defining MPI (be warned: Rusty Lusk  
<br>
correctly characterized this as &quot;grubby, grubby work&quot;).  These four  
<br>
lists share a common listserver; it should be smart enough to only  
<br>
send this message once to people who are subscribed to more than one  
<br>
of the lists in the &quot;To:&quot; line.
<br>
<p><p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: William Gropp &lt;gropp_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: February 9, 2007 10:35:18 AM EST
</span><br>
<span class="quotelev1">&gt; To: mpi-21_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: MPI 2.1
</span><br>
<span class="quotelev1">&gt; Reply-To: mpi-21_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Welcome to the MPI 2.1 discussions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI 2.1 web page is available at <a href="http://www.mpi-forum.org/">http://www.mpi-forum.org/</a> 
</span><br>
<span class="quotelev1">&gt; mpi2_1/.  This page contains a link to the current errata  
</span><br>
<span class="quotelev1">&gt; discussion (please use this link through the forum page, as we may  
</span><br>
<span class="quotelev1">&gt; move this page in the future).  You will find on this page many  
</span><br>
<span class="quotelev1">&gt; issues that have been raised and are still open, as well as a draft  
</span><br>
<span class="quotelev1">&gt; ballot for the third round of errata items.  All items are open for  
</span><br>
<span class="quotelev1">&gt; discussion and new items may be submitted to mpi-21_at_[hidden]  
</span><br>
<span class="quotelev1">&gt; or to mpi-comments_at_mpi-forum.org.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first order of business is to determine the rules for voting.   
</span><br>
<span class="quotelev1">&gt; The rules that the MPI Forum has been using are posted on the MPI  
</span><br>
<span class="quotelev1">&gt; 2.1 web page (<a href="http://www.mpi-forum.org/mpi2_1/">http://www.mpi-forum.org/mpi2_1/</a>); the history of  
</span><br>
<span class="quotelev1">&gt; errata votes (linked off of that page) shows which institutions  
</span><br>
<span class="quotelev1">&gt; have participated in the last two ballots.  I suggest that we  
</span><br>
<span class="quotelev1">&gt; discuss updates to these rules to address the fact that we probably  
</span><br>
<span class="quotelev1">&gt; won't have face-to-face meetings, at least in the beginning.  Then  
</span><br>
<span class="quotelev1">&gt; the current voting members (based on the last two votes) can vote  
</span><br>
<span class="quotelev1">&gt; on that rule change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Discussions of the technical issues can start at any time (in fact,  
</span><br>
<span class="quotelev1">&gt; the page of issues has been available since before the original  
</span><br>
<span class="quotelev1">&gt; errata discussions).   Send mail about these issues to mpi-21_at_mpi- 
</span><br>
<span class="quotelev1">&gt; forum.org.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bill
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2662.php">Jeff Squyres: "Re: [OMPI users] Fwd: MPI 2.1"</a>
<li><strong>Previous message:</strong> <a href="2660.php">Jeff Squyres: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2662.php">Jeff Squyres: "Re: [OMPI users] Fwd: MPI 2.1"</a>
<li><strong>Reply:</strong> <a href="2662.php">Jeff Squyres: "Re: [OMPI users] Fwd: MPI 2.1"</a>
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
