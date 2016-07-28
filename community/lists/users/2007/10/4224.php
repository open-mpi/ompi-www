<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 12:57:04 2007" -->
<!-- isoreceived="20071016165704" -->
<!-- sent="Tue, 16 Oct 2007 10:56:56 -0600" -->
<!-- isosent="20071016165656" -->
<!-- name="Brian Granger" -->
<!-- email="ellisonbg.net_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="6ce0ac130710160956s22702016ve8d87c68672dd44f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3DDE62E5-567A-4750-A538-42143C820051_at_cisco.com" -->
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
<strong>From:</strong> Brian Granger (<em>ellisonbg.net_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-16 12:56:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4225.php">Victor Prosolin: "[OMPI users] broken symbolic links when configured with --program-suffix"</a>
<li><strong>Previous message:</strong> <a href="4223.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4222.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4625.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/16/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 16, 2007, at 11:20 AM, Brian Granger wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Wow, that is quite a study of the different options.  I will spend
</span><br>
<span class="quotelev2">&gt; &gt; some time looking over things to better understand the (complex)
</span><br>
<span class="quotelev2">&gt; &gt; situation.  I will also talk with Lisandro Dalcin about what he thinks
</span><br>
<span class="quotelev2">&gt; &gt; the best approach is for mpi4py.  One question though.  You said that
</span><br>
<span class="quotelev2">&gt; &gt; nothing had changed in this respect from 1.2.3 to 1.2.4, but 1.2.3
</span><br>
<span class="quotelev2">&gt; &gt; doesn't show the problem.  Does this make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wondered about that as well.  Is there any chance that you simply
</span><br>
<span class="quotelev1">&gt; weren't using the one-sided MPI functionality between your different
</span><br>
<span class="quotelev1">&gt; versions?
</span><br>
<p>It was the same version...but let me double check this to make sure.
<br>
<p><span class="quotelev1">&gt; Or are you using the same version of your software with v1.2.3 and
</span><br>
<span class="quotelev1">&gt; v1.2.4 of OMPI?  If so, I'm kinda at a loss.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: our one-sided support loads lazily; it doesn't load during
</span><br>
<span class="quotelev1">&gt; MPI_INIT like most of the rest of the plugins that we have.  Since
</span><br>
<span class="quotelev1">&gt; not many MPI applications use it, we decided to make it only load the
</span><br>
<span class="quotelev1">&gt; osc plugins the first time an MPI window is created.
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4225.php">Victor Prosolin: "[OMPI users] broken symbolic links when configured with --program-suffix"</a>
<li><strong>Previous message:</strong> <a href="4223.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4222.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4625.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
