<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 28 08:27:24 2007" -->
<!-- isoreceived="20070728122724" -->
<!-- sent="Sat, 28 Jul 2007 08:27:07 -0400" -->
<!-- isosent="20070728122707" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="1AC162D1-95B2-40D1-AB65-7E083D5B8851_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40707271727j14a04aadmc51b9c4a5989f324_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-28 08:27:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2039.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Previous message:</strong> <a href="2037.php">Lisandro Dalcin: "[OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2037.php">Lisandro Dalcin: "[OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2040.php">Brian Barrett: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2040.php">Brian Barrett: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 27, 2007, at 8:27 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; MPI_WIN_GET_GROUP returns a duplicate of the group of the communicator
</span><br>
<span class="quotelev1">&gt; used to create the window. associated with win. The group is returned
</span><br>
<span class="quotelev1">&gt; in group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, it seems OMPI (v1.2 svn) is not returning a duplicate, comparing
</span><br>
<span class="quotelev1">&gt; the handles with == C operator gives true. Can you confirm this?
</span><br>
<span class="quotelev1">&gt; Should the word 'duplicate' be interpreted as 'a new reference to' ?
</span><br>
<p>I would tend to agree with this wording; I think we're doing the  
<br>
wrong thing.
<br>
<p>Brian -- what do you think?
<br>
<p><span class="quotelev1">&gt; Regards, and sorry me for raising again such low-level, corner- 
</span><br>
<span class="quotelev1">&gt; cases ...
</span><br>
<p>Are you kidding?  This stuff is great -- keep it coming!  :-)
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
<li><strong>Next message:</strong> <a href="2039.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Previous message:</strong> <a href="2037.php">Lisandro Dalcin: "[OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2037.php">Lisandro Dalcin: "[OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2040.php">Brian Barrett: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2040.php">Brian Barrett: "Re: [OMPI devel] MPI_Win_get_group"</a>
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
