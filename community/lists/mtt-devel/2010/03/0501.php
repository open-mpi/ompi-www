<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 14:30:05 2010" -->
<!-- isoreceived="20100303193005" -->
<!-- sent="Wed, 3 Mar 2010 14:26:02 -0500" -->
<!-- isosent="20100303192602" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="4C546F17-40FC-47D6-9D72-B4330D5A08A4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B7AB770.5060407_at_argus-cv.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTToGDS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 14:26:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0502.php">Jeff Squyres: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0500.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0498.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0469.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 16, 2010, at 10:19 AM, Igor Ivanov wrote:
<br>
<p><span class="quotelev1">&gt; I am sending patch that enable google account approach to submit data to MTT GDS.
</span><br>
<span class="quotelev1">&gt; It also has the fix to a bug in displaying table as respond to bquery.pl --view (It has not been committed yet to MTT trunk).
</span><br>
<p>Thanks guys!  And sorry for my long lack of response - I was working in a window of availability for MTT stuff before, and then that window closed and I got sucked into other high priority things.  I have another small window of availability for MTT now...
<br>
<p>It looks like Mike D. committed this stuff to SVN already, right?  If so, great!
<br>
<p><span class="quotelev1">&gt; As for question relating &quot;how does one develop ...&quot; that source information can be found at following location as: <a href="http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_GDS_Setup.doc">http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_GDS_Setup.doc</a>.
</span><br>
<p>Ok, I'll dig into that.
<br>
<p>One thing that is quite confusing is the sign in to <a href="http://open-mpi-mtt.appspot.com/">http://open-mpi-mtt.appspot.com/</a>.  When you go there, you get a &quot;Sign in or register&quot; link.  You click that and get to a Google Accounts login.  I used openmpi.cisco_at_[hidden] and its associated password, but then I'm bounced back to the &quot;Sign in or register&quot; link.
<br>
<p>Only when I login as openmpi_at_[hidden] do I actually get beyond the &quot;Sign in or register&quot; link.
<br>
<p>Does this mean that openmpi.cisco_at_[hidden] does not have login privlidges on the open-mpi-mtt appspot?  If so, can we add a better error message than this?  It's very confusing -- because you *are* apparently signing in to a google account properly, but then you just get the &quot;Sign in or register&quot; link again.
<br>
<p><span class="quotelev1">&gt; In case you make a resolve to accept patch I am sending next steps should be done:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. update application on server side using instruction in VBench_GDS_Setup.doc (topic 4 &quot;Installation&quot;)
</span><br>
<span class="quotelev1">&gt; example: appcfg.py update &lt;local folder with open-mpi-mtt&gt;/
</span><br>
<span class="quotelev1">&gt; 2. change version on <a href="https://appengine.google.com/deployment?&amp;app_id=open-mpi-mtt&amp;version_id=1.337140739868725607">https://appengine.google.com/deployment?&amp;app_id=open-mpi-mtt&amp;version_id=1.337140739868725607</a> from 1 to 2 (make default)
</span><br>
<span class="quotelev1">&gt; note: after this operation all users that attempt to submit data using previous scheme of authentication will get failure respond.
</span><br>
<span class="quotelev1">&gt; 3. go to open-mpi-mtt and add new users with google account
</span><br>
<p>It looks like this was all done already -- probably because I took so long to reply.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0502.php">Jeff Squyres: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0500.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0498.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0469.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
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
