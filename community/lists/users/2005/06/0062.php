<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 15 11:19:25 2005" -->
<!-- isoreceived="20050615161925" -->
<!-- sent="Wed, 15 Jun 2005 12:19:23 -0400" -->
<!-- isosent="20050615161923" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Questions on status" -->
<!-- id="4b5e5a87fdb46020180af99c71b9766e_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2659aa82d0be8daef868cda135ac79f4_at_pobox.com" -->
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
<strong>Date:</strong> 2005-06-15 11:19:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0063.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Previous message:</strong> <a href="0061.php">Scott Robert Ladd: "Re: [O-MPI users] Questions on status"</a>
<li><strong>In reply to:</strong> <a href="0058.php">Scott Feldman: "Re: [O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0065.php">Scott Feldman: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Reply:</strong> <a href="0065.php">Scott Feldman: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Reply:</strong> <a href="0067.php">Tim Mattox: "Re: [O-MPI users] Questions on status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 14, 2005, at 9:54 PM, Scott Feldman wrote:
<br>
<p><span class="quotelev2">&gt;&gt; We're a quiet bunch.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which is a bad thing for Open Source development.  It seems Open MPI is
</span><br>
<span class="quotelev1">&gt; closed-source development project with an open-source release model.
</span><br>
<p>At this point in our development, I somewhat agree.  But this will soon 
<br>
change.  See below.
<br>
<p><span class="quotelev1">&gt; The FAQ claims the future is in Open Source code, methodology, and
</span><br>
<span class="quotelev1">&gt; philosophy; so why is the development and testing of Open MPI closed?
</span><br>
<p>It is &quot;somewhat&quot; closed.  We have actually had a limited set of third 
<br>
parties involved from the very beginning -- people outside the core 
<br>
Open MPI development team who have tested the code, reported bugs, etc. 
<br>
&nbsp;&nbsp;Such reports have been extremely useful and helpful.
<br>
<p>I fully appreciate the benefit of the open source model.  Indeed, my 
<br>
parent organization's name is The Open Systems Laboratory 
<br>
(www.osl.iu.edu), which contributes and develops to several well-known 
<br>
open source projects.  For example, we've been developing and 
<br>
maintaining LAM/MPI under an open source model for several years, and 
<br>
it works well.  As of now, Open MPI is slightly different (see below 
<br>
for why), but will be shifting to a more open source model (like LAM's) 
<br>
in the near future.
<br>
<p><span class="quotelev1">&gt; Closed-source development doesn't scale.  You're missing out on early
</span><br>
<span class="quotelev1">&gt; bug reports from users with environments and applications different
</span><br>
<span class="quotelev1">&gt; than yours.  You're missing out on outside development help in finding
</span><br>
<span class="quotelev1">&gt; and fixing bugs.
</span><br>
<p>There are several reasons that we have not yet released the code to the 
<br>
public:
<br>
<p>1. The first 8 months or so of our project were in &quot;stealth&quot; mode.  We 
<br>
honestly didn't know if the collaboration would eventually bear useful 
<br>
fruit.  As the project went on, we came to see that it was working 
<br>
(really well, actually), and so we came out of stealth mode, announced 
<br>
it to the world, created the public web site, etc.
<br>
<p>2. Once the alpha was available, we didn't want novice users 
<br>
downloading the code, thinking that it was a fully-functional MPI 
<br>
implementation.  Even with oodles of warnings on the web site and/or in 
<br>
the tarball itself, some people would definitely try it and send 
<br>
unhelpful &quot;it doesn't work!&quot; flame mails.  Hence, it was released to a 
<br>
closed set of 3rd parties who were known to be knowledgeable about MPI 
<br>
and would be able to generate useful bug reports.  Their assistance was 
<br>
invaluable to us.
<br>
<p>3. The HPC community is quite small, and the competition is quite 
<br>
fierce.  We have direct and distinct competition in this space; having 
<br>
a bad release would negatively impact this project and greatly harm our 
<br>
chances of ever having a good release (at least in the eyes of the 
<br>
public).  This is an unfortunate reality.
<br>
<p>4. Adding more developers to a project does not make it release faster 
<br>
(indeed, it usually slows it down).  This is true for any committee 
<br>
model -- the more people on a project, the more opinions need to get 
<br>
discussed and more compromises need to be reached.  This is not 
<br>
necessarily a Bad Thing, of course -- independent, outside opinions can 
<br>
shed unique insight into problems -- but it does mean that it takes 
<br>
more time.  As I indicated in a previous post, we're taking longer than 
<br>
we expected in terms of the code (truth be told, we had really hoped to 
<br>
be at beta quality by SC last year -- that didn't happen).  Adding more 
<br>
developers right now would inevitably make this project take yet more 
<br>
time before releasing -- which we really don't have at this point.  We 
<br>
need to get to stability and release, if for no other reason than to 
<br>
answer mails like this.
<br>
<p>5. We really wanted to reach some level of stability before we opened 
<br>
to the public.  We felt that this would be the best way to make a 
<br>
positive contribution to the HPC community -- present code that works, 
<br>
and then move forward from there.  For all the interesting / 
<br>
research-worthy parts of an MPI implementation, there's 10 times that 
<br>
amount of code that is totally uninteresting / maintenance-requiring / 
<br>
internal accounting code and data structures that the MPI has to 
<br>
maintain.  Very, very few people outside the core MPI development team 
<br>
will ever look at or care about this kind of code (this has been our 
<br>
experience in other MPI implementations).  Specifically, what I mean is 
<br>
that we anticipate that almost no one outside of us will look at 90% of 
<br>
the Open MPI code base -- 3rd party vendors and researchers will be 
<br>
focusing on the 10% of the code base which is performance critical.  
<br>
Unfortunately, the other 90% is what takes a large portion of the time 
<br>
to develop and debug, and is quite useless to 3rd parties if a) it 
<br>
doesn't work, or b) changes quickly enough that it makes working in the 
<br>
10%-performance-critical parts painful.
<br>
<p>6. We're still working through the legal issues to get an Apache-like 
<br>
structure in place to a) guarantee that the code will always be in open 
<br>
source, and b) ensure that all contributions from 3rd parties are 
<br>
&quot;clean&quot; in terms of intellectual property (can you say &quot;SCO&quot;?).  This 
<br>
has unfortunately taken *WAY* longer than we anticipated, and perhaps 
<br>
the biggest reason that we have not invited in 3rd party developers 
<br>
yet.
<br>
<p><span class="quotelev1">&gt; Please adopt a release-early, release-often strategy.
</span><br>
<p>Actually, this is something that we will desperately try to avoid.  
<br>
Open source does not necessarily equal &quot;release early, release often&quot;.  
<br>
IMHO, that methodology tends to imply that at least one reason you have 
<br>
to release often because there are bugs that need to be fixed.  For 
<br>
production-quality software, you really want to release stable 
<br>
software.  There are always those who want to be out on the bleeding 
<br>
edge of development with the latest / greatest software (despite the 
<br>
fact that it may not be stable), but in our experience, the vast 
<br>
majority of MPI users just want software that works and don't care 
<br>
about many esoteric features.  They just want to run their MPI codes 
<br>
and get stable, repeatable answers.
<br>
<p>My experience with LAM/MPI is specifically what I am citing -- indeed, 
<br>
there are still many users who are using [extremely] old versions of 
<br>
LAM/MPI simply because that's what they started developing / using 
<br>
years ago and it still works for them (&quot;it ain't broke, so why fix 
<br>
it?&quot;).  I cannot speak for Los Alamos, but FWIW, I think that LA-MPI's 
<br>
experience is similar (they work in a production-quality environment -- 
<br>
slow, production-quality release cycles).
<br>
<p>However, to accommodate both kinds of users in LAM/MPI (those who want 
<br>
stability and those who want bleeding edge), we adopted a dual-headed 
<br>
strategy:
<br>
<p>1. Slow formal release cycle.  LAM/MPI typically has 1-3 releases a 
<br>
year.  Usually one major release with a small number of bug fix 
<br>
releases following it.
<br>
<p>2. Nightly tarball snapshots available.  Anyone who wants to can grab 
<br>
either a Subversion checkout or a nightly snapshot tarball, but no 
<br>
guarantees are made about its stability (because it represents active 
<br>
development).
<br>
<p>I anticipate that something analogous will occur for Open MPI.
<br>
<p><span class="quotelev1">&gt; &quot;Show us the code!&quot;
</span><br>
<p>I have a long, public track record of high-quality open source 
<br>
software, and am firmly committed to make Open MPI be in the same 
<br>
category.
<br>
<p>We will show you the code soon, I promise.  We've come too far to *not* 
<br>
do so!  :-)
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
<li><strong>Next message:</strong> <a href="0063.php">Jeff Squyres: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Previous message:</strong> <a href="0061.php">Scott Robert Ladd: "Re: [O-MPI users] Questions on status"</a>
<li><strong>In reply to:</strong> <a href="0058.php">Scott Feldman: "Re: [O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0065.php">Scott Feldman: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Reply:</strong> <a href="0065.php">Scott Feldman: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Reply:</strong> <a href="0067.php">Tim Mattox: "Re: [O-MPI users] Questions on status"</a>
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
