<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 27 11:49:31 2005" -->
<!-- isoreceived="20050927164931" -->
<!-- sent="Tue, 27 Sep 2005 09:49:18 -0700" -->
<!-- isosent="20050927164918" -->
<!-- name="Roland Dreier" -->
<!-- email="rolandd_at_[hidden]" -->
<!-- subject="Re:  [PATCH] Update Open MPI for new libibverbs API" -->
<!-- id="528xxiqwvl.fsf_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="358FA31B-AF4D-4CF1-ACAB-70788AA813CC_at_open-mpi.org" -->
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
<strong>From:</strong> Roland Dreier (<em>rolandd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-27 11:49:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0418.php">Nathan DeBardeleben: "Back to 32bit on 64bit machines..."</a>
<li><strong>Previous message:</strong> <a href="0416.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0414.php">Brian Barrett: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; It's even more annoying to be deluged with SPAM ;).  We
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; (the LAM developers) used to try to keep our mailing lists
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; as open as possible.  In the end, SPAM pushed the signal to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; noise ratio way too high and something had to be done.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; Requiring subscriptions to post was the best we could do.
<br>
<p>I understand that you have limited resources to administer your
<br>
mailing list, but certainly lists like openib-general and linux-kernel
<br>
show that it is possible to run lists with low levels of spam and
<br>
still allow posting by anyone.
<br>
<p>In general, if I have to subscribe to a list just to send a bug fix to
<br>
a project, I'm quite likely to forget about it.  So you are definitely
<br>
missing out on contributions by closing your lists.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; I'll admit my ignorance - is this part of a particular
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; release of OpenIB, or is this something that has happened
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; recently in SVN?  I ask because we already have people
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; using OpenIB and Open MPI together, and it would be bad to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; suddenly break things for them.  Testing for number of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; arguments in a function is horribly unreliable - is there
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; some version number or other key in the Open IB headers we
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Brian&gt; can use to determine which version of the function to use?
<br>
<p>OpenIB has not done an &quot;official&quot; release of any userspace components,
<br>
so this falls into the category of prerelease API breakage.
<br>
<p>New kernels will require a new libibverbs, so the number of obsolete
<br>
old development versions should decrease fairly quickly.
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0418.php">Nathan DeBardeleben: "Back to 32bit on 64bit machines..."</a>
<li><strong>Previous message:</strong> <a href="0416.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0414.php">Brian Barrett: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
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
