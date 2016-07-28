<?
$subject_val = "Re: [OMPI devel] IOF redesign: cmd line options";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 09:44:16 2008" -->
<!-- isoreceived="20080828134416" -->
<!-- sent="Thu, 28 Aug 2008 06:44:11 -0700" -->
<!-- isosent="20080828134411" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF redesign: cmd line options" -->
<!-- id="63DE7872-9097-4244-8660-9F71DBC21746_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F88E2F0F-746B-4FE5-8068-079EDF928237_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IOF redesign: cmd line options<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-28 09:44:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4619.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4617.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>In reply to:</strong> <a href="4616.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4619.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Reply:</strong> <a href="4619.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 28, 2008, at 6:37 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; 1. specify which procs are to receive stdin. The options that were  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be supported are: all procs, a specific proc, or no procs. The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default will be rank=0 only. All procs not included will have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their stdin tied to /dev/null - which means a debugger could not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attach to the stdin at a later time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about: --stdin &lt;list&gt;, where &lt;list&gt; is a comma-delimited list  
</span><br>
<span class="quotelev2">&gt;&gt; of integer ranges?  Such as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --stdin 0 (same as default)
</span><br>
<span class="quotelev2">&gt;&gt; --stdin 0,1 (procs 0 and 1 get stdin)
</span><br>
<span class="quotelev2">&gt;&gt; --stdin 0-9 (proc 0 through 9 get stdin)
</span><br>
<span class="quotelev2">&gt;&gt; --stdin 0-9,23-25 (procs 0 through 9 and 23 through 25 get stdin)
</span><br>
<span class="quotelev2">&gt;&gt; --stdin all (all procs get stdin)
</span><br>
<span class="quotelev2">&gt;&gt; --stdin none (no procs get stdin)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to be clear: is this something that is necessary, or are we  
</span><br>
<span class="quotelev1">&gt; providing flexibility that nobody will ever use? Frankly, I'm told  
</span><br>
<span class="quotelev1">&gt; that reading stdin at all is pretty rare, at least on jobs around  
</span><br>
<span class="quotelev1">&gt; here, though I don't dispute having at least the all, one, or none  
</span><br>
<span class="quotelev1">&gt; capability. But is anyone really going to pick-and-choose multiple  
</span><br>
<span class="quotelev1">&gt; random procs to receive stdin?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm asking mostly because of the complexity it adds. Certainly, it  
</span><br>
<span class="quotelev1">&gt; is doable - just wondering if it is worth the effort, or something  
</span><br>
<span class="quotelev1">&gt; that will never be used.
</span><br>
<p>Ah -- I actually mis-read your original comment.  I'm happy with all,  
<br>
none, and X (where X is a single integer).
<br>
<p>&quot;Go for the gold&quot; would be the &lt;list&gt; syntax, but I agree that that's  
<br>
not really necessary.  I think it's definitely in the &quot;would be nice&quot;  
<br>
category.
<br>
<p><span class="quotelev2">&gt;&gt; It occurs to me that we're using this &lt;list&gt; kind of notation in a  
</span><br>
<span class="quotelev2">&gt;&gt; few places now (aren't we?).  Perhaps we should have this string- 
</span><br>
<span class="quotelev2">&gt;&gt; parsing code down in opal somewhere...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Processing it is so trivial it probably doesn't merit a dedicated  
</span><br>
<span class="quotelev1">&gt; code - all you do is use opal_argv_split and run down the list.
</span><br>
<p>I was thinking of the ranges -- there's additional processing for the  
<br>
X-Y strings.  But it's moot point.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; 2. specify which stdxxx file descriptors you want left open on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your procs. Our defaults are to leave stdout/stderr/stddiag open  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on all procs. This option would allow the user to specify that we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tie any or all of these to /dev/null
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about --stdout and --stderr, indicating which procs' stdout/ 
</span><br>
<span class="quotelev2">&gt;&gt; stderr you want to see?  FWIW, I don't think we should provide a  
</span><br>
<span class="quotelev2">&gt;&gt; way to turn off stddiag.  The syntax could be just like --stdin,  
</span><br>
<span class="quotelev2">&gt;&gt; except the default values would be &quot;all&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, will anyone ever really use this? I agree about stddiag as  
</span><br>
<span class="quotelev1">&gt; orte_show_help flows over it. I haven't found any interest around  
</span><br>
<span class="quotelev1">&gt; here in shutting off stdout and/or stderr - nobody can think of a  
</span><br>
<span class="quotelev1">&gt; reason to do so. Doing it is trivial - my concern here is solely  
</span><br>
<span class="quotelev1">&gt; with the complexity of providing such fine-grained specifications.
</span><br>
<p>It may actually be useful to turn off stdout/stderr in debugging  
<br>
scenarios, meaning &quot;I only want to see output from proc X, Y, Z.&quot;
<br>
<p>How about leading these options off for now, but leaving the design  
<br>
open to implementing them someday if someone ever cares enough?
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Are these options per app context, or global?  It would be awesome  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be per-app-context, but I wouldn't cry too hard if they were  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; global (especially if it meant making the code overly complex,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My first reaction is that making this per app_context would create a  
</span><br>
<span class="quotelev1">&gt; ton of complexity...but I'll take a gander before committing one way  
</span><br>
<span class="quotelev1">&gt; or the other. Again, though, I would wonder if anyone really is  
</span><br>
<span class="quotelev1">&gt; going to use this on a per app_context basis - or are we just  
</span><br>
<span class="quotelev1">&gt; creating capability &quot;because we can&quot;?
</span><br>
<p><p>I think it's solidly in the &quot;because we can&quot; department.  If it's  
<br>
anything more than trivial to implement, my $0.02 is to leave it off.   
<br>
If someone wants to implement it someday, they can.
<br>
<p>FWIW: as long as there's the possibility of writing an orte-iof  
<br>
command line tool to suck down an individual proc's stdin/stdout/ 
<br>
stderr[/stddiag], I'm happy (because leaves the door open for &quot;mpirun  
<br>
--screen ...&quot;).
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
<li><strong>Next message:</strong> <a href="4619.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4617.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>In reply to:</strong> <a href="4616.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4619.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Reply:</strong> <a href="4619.php">Ralph Castain: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
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
