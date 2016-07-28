<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 16 20:01:44 2005" -->
<!-- isoreceived="20050617010144" -->
<!-- sent="Thu, 16 Jun 2005 21:01:41 -0400" -->
<!-- isosent="20050617010141" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Further thoughts" -->
<!-- id="bd372e429e826812d2a9d82c95a606f2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050616212146.75482.qmail_at_web31514.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2005-06-16 20:01:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0089.php">Tim Mattox: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>Previous message:</strong> <a href="0087.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0084.php">Jonathan Day: "[O-MPI users] Further thoughts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0089.php">Tim Mattox: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>Reply:</strong> <a href="0089.php">Tim Mattox: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>Reply:</strong> <a href="0091.php">Ben Allan: "Re: [O-MPI users] Further thoughts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 16, 2005, at 5:21 PM, Jonathan Day wrote:
<br>
<p><span class="quotelev1">&gt; Just a couple of additional thoughts. First off, when
</span><br>
<span class="quotelev1">&gt; Open MPI officially goes gold, I would suggest one of
</span><br>
<span class="quotelev1">&gt; the developers puts up a listing on Freshmeat, as
</span><br>
<span class="quotelev1">&gt; there are a lot of academics using that to track
</span><br>
<span class="quotelev1">&gt; projects these days.
</span><br>
<p>Will do.
<br>
<p>We've also got the &quot;announce&quot; mailing list -- a low volume list just 
<br>
for announcing new releases (and *exciting* messages about products you 
<br>
might be interested in... just kidding.).
<br>
<p><span class="quotelev1">&gt; Secondly, it's great that Open MPI is going to use a
</span><br>
<span class="quotelev1">&gt; CPAN-like archive - the projects I know of that do
</span><br>
<span class="quotelev1">&gt; this are Perl, Python and TeX, and I use all three
</span><br>
<span class="quotelev1">&gt; extensively. The main problem with such archives is
</span><br>
<span class="quotelev1">&gt; that they tend not to be that well known and it can be
</span><br>
<span class="quotelev1">&gt; hard to track updates on them. Perhaps it might be
</span><br>
<span class="quotelev1">&gt; worth using RSS as a notification service for your
</span><br>
<p>Not a bad idea.  I don't know anything about RSS, but I assume that 
<br>
there's some perl modules that can cure that pretty easily.
<br>
<p><span class="quotelev1">&gt; COMAN (Comprehensive Open MPI Archive Network)
</span><br>
<span class="quotelev1">&gt; repository?
</span><br>
<p>:-)
<br>
<p><span class="quotelev1">&gt; Third, although there'll likely be some source changes
</span><br>
<span class="quotelev1">&gt; between now and the beta, the configure/make options
</span><br>
<span class="quotelev1">&gt; are presumably pretty stable, so it would be easy for
</span><br>
<span class="quotelev1">&gt; me to use the &quot;accident&quot; to draw up a suggested .spec
</span><br>
<span class="quotelev1">&gt; file for you, so you (or users) can roll RPMs from the
</span><br>
<span class="quotelev1">&gt; tarball, if you'd be interested.
</span><br>
<p>Thanks for the offer!
<br>
<p>We actually got a lot of help in this area from Greg Kurtzer from LBL 
<br>
(of cAos/Warewulf/Centos fame).  He helped us a bunch with our 
<br>
[previously extremely lame] LAM/MPI .spec file, and then offered to 
<br>
write one for Open MPI (which he did about a month or two ago).
<br>
<p>I have some random user questions about RPMs, though:
<br>
<p>1. Would you prefer an all-in-one Open MPI RPM, or would you prefer 
<br>
multiple RPMs (e.g., openmpi-doc, openmpi-devel, openmpi-runtime, 
<br>
...etc.)?
<br>
<p>2. We're definitely going to provide an SRPM suitable for &quot;rpmbuild 
<br>
--rebuild&quot;.  However, we're not 100% sure that it's worthwhile to 
<br>
provide binary RPMs because everyone's cluster/development systems seem 
<br>
to be &quot;one off&quot; from standard Linux distros.  Do you want a binary 
<br>
RPM(s)?  If so, for which distros?  (this is one area where vendors 
<br>
tend to have dramatically different views than academics/researchers)
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0089.php">Tim Mattox: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>Previous message:</strong> <a href="0087.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0084.php">Jonathan Day: "[O-MPI users] Further thoughts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0089.php">Tim Mattox: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>Reply:</strong> <a href="0089.php">Tim Mattox: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>Reply:</strong> <a href="0091.php">Ben Allan: "Re: [O-MPI users] Further thoughts"</a>
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
