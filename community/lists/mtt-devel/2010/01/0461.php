<?
$subject_val = "Re: [MTT devel] mtt not working on sles 11up2 perl 5.10.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 09:47:26 2010" -->
<!-- isoreceived="20100127144726" -->
<!-- sent="Wed, 27 Jan 2010 09:47:20 -0500" -->
<!-- isosent="20100127144720" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt not working on sles 11up2 perl 5.10.0" -->
<!-- id="50F7C880-695A-402C-97F0-4F3D6D5F3867_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b20b52801001270136s109b01dcl21657176f3c5d22e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt not working on sles 11up2 perl 5.10.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-27 09:47:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0462.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0460.php">Mike Dubman: "[MTT devel] mtt not working on sles 11up2 perl 5.10.0"</a>
<li><strong>In reply to:</strong> <a href="0460.php">Mike Dubman: "[MTT devel] mtt not working on sles 11up2 perl 5.10.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  This is trunk, I assume?  If so, Values.pm:107 is:
<br>
<p><pre>
----
        my $ret = _eval_func($func_name, $func_args);
        # If we got a string back, append the remaining and loop
        # around looking for more &amp;funclets.
--&gt;     if (ref($ret) eq &quot;&quot;) {
-----
So it's the return of evaluating the function.
Your output says &quot;&gt;&gt;&gt; Using group_reports&quot; , but I don't see a &quot;group_reports&quot; in mini.ini...?
I think what I would do here is try to figure out what function it was trying to invoke -- perhaps something returned undef instead of a value...?  If so, perhaps we should protect that if statement if a check to see if $ret is defined...?
On Jan 27, 2010, at 4:36 AM, Mike Dubman wrote:
&gt; 
&gt; 
&gt; Hello guys,
&gt; 
&gt; 
&gt; mtt fails on sles11up2 with perl version 5.10.0 but works on other distros as a charm.
&gt; 
&gt; The same minimalistic ini file which works on other distro`s fails on sles with error:
&gt; 
&gt; &gt;&gt; Test Run [osu]
&gt; &gt;&gt; Running with [open mpi] / [1.3.3] / [openmpi]
&gt;    Using MPI Details [open mpi] with MPI Install [openmpi]
&gt; &gt;&gt;&gt; Using group_reports
&gt; Can't use string (&quot;2&quot;) as an ARRAY ref while &quot;strict refs&quot; in use at /hpc/home/USERS/mttuserqa/work/svn/ompi/mtt/trunk/lib/MTT/Values.pm line 107.
&gt; 
&gt; Do you have any ideas what it may be?
&gt; 
&gt; P.S. mini.ini is attached.
&gt; &lt;mini.ini&gt;_______________________________________________
&gt; mtt-devel mailing list
&gt; mtt-devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0462.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0460.php">Mike Dubman: "[MTT devel] mtt not working on sles 11up2 perl 5.10.0"</a>
<li><strong>In reply to:</strong> <a href="0460.php">Mike Dubman: "[MTT devel] mtt not working on sles 11up2 perl 5.10.0"</a>
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
