<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 11:57:05 2007" -->
<!-- isoreceived="20071016155705" -->
<!-- sent="Tue, 16 Oct 2007 11:56:29 -0400" -->
<!-- isosent="20071016155629" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="3DDE62E5-567A-4750-A538-42143C820051_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6ce0ac130710160820i14e1fe20o3627da6f7febf9cf_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-10-16 11:56:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4223.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4221.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4221.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4223.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4223.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4224.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 16, 2007, at 11:20 AM, Brian Granger wrote:
<br>
<p><span class="quotelev1">&gt; Wow, that is quite a study of the different options.  I will spend
</span><br>
<span class="quotelev1">&gt; some time looking over things to better understand the (complex)
</span><br>
<span class="quotelev1">&gt; situation.  I will also talk with Lisandro Dalcin about what he thinks
</span><br>
<span class="quotelev1">&gt; the best approach is for mpi4py.  One question though.  You said that
</span><br>
<span class="quotelev1">&gt; nothing had changed in this respect from 1.2.3 to 1.2.4, but 1.2.3
</span><br>
<span class="quotelev1">&gt; doesn't show the problem.  Does this make sense?
</span><br>
<p>I wondered about that as well.  Is there any chance that you simply  
<br>
weren't using the one-sided MPI functionality between your different  
<br>
versions?
<br>
<p>Or are you using the same version of your software with v1.2.3 and  
<br>
v1.2.4 of OMPI?  If so, I'm kinda at a loss.  :-(
<br>
<p>FWIW: our one-sided support loads lazily; it doesn't load during  
<br>
MPI_INIT like most of the rest of the plugins that we have.  Since  
<br>
not many MPI applications use it, we decided to make it only load the  
<br>
osc plugins the first time an MPI window is created.
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
<li><strong>Next message:</strong> <a href="4223.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4221.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4221.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4223.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4223.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4224.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
