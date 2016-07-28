<?
$subject_val = "Re: [OMPI devel] IOF redesign: cmd line options";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 10:00:28 2008" -->
<!-- isoreceived="20080828140028" -->
<!-- sent="Thu, 28 Aug 2008 08:00:21 -0600" -->
<!-- isosent="20080828140021" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF redesign: cmd line options" -->
<!-- id="420B9D75-0E8A-4C5D-B0FD-1B28E8598D10_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="63DE7872-9097-4244-8660-9F71DBC21746_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-28 10:00:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4620.php">Ralph Castain: "[OMPI devel] Fwd: error on QCD run"</a>
<li><strong>Previous message:</strong> <a href="4618.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>In reply to:</strong> <a href="4618.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4615.php">Greg Watson: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On the various stdout/err options: Other than the complexity of  
<br>
telling the orteds which procs to do what with, there is nothing  
<br>
standing in the way of implementing either of those capabilities. I  
<br>
currently support only sending the info on a per-job basis, though, so  
<br>
it would mean changing several ORTE-level global object definitions to  
<br>
store the data, plus changing the launch msg to tell the orteds what  
<br>
to do. So it wouldn't be a &quot;5-min&quot; kind of job, but it -could- be  
<br>
done....if someone really, really wanted to.
<br>
<p>I have a prototype &quot;orte-iof&quot; tool that does what you describe...will  
<br>
come into trunk with these changes.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<p>On Aug 28, 2008, at 7:44 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 28, 2008, at 6:37 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. specify which procs are to receive stdin. The options that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; were to be supported are: all procs, a specific proc, or no  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; procs. The default will be rank=0 only. All procs not included  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will have their stdin tied to /dev/null - which means a debugger  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could not attach to the stdin at a later time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about: --stdin &lt;list&gt;, where &lt;list&gt; is a comma-delimited list  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of integer ranges?  Such as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --stdin 0 (same as default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --stdin 0,1 (procs 0 and 1 get stdin)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --stdin 0-9 (proc 0 through 9 get stdin)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --stdin 0-9,23-25 (procs 0 through 9 and 23 through 25 get stdin)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --stdin all (all procs get stdin)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --stdin none (no procs get stdin)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to be clear: is this something that is necessary, or are we  
</span><br>
<span class="quotelev2">&gt;&gt; providing flexibility that nobody will ever use? Frankly, I'm told  
</span><br>
<span class="quotelev2">&gt;&gt; that reading stdin at all is pretty rare, at least on jobs around  
</span><br>
<span class="quotelev2">&gt;&gt; here, though I don't dispute having at least the all, one, or none  
</span><br>
<span class="quotelev2">&gt;&gt; capability. But is anyone really going to pick-and-choose multiple  
</span><br>
<span class="quotelev2">&gt;&gt; random procs to receive stdin?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm asking mostly because of the complexity it adds. Certainly, it  
</span><br>
<span class="quotelev2">&gt;&gt; is doable - just wondering if it is worth the effort, or something  
</span><br>
<span class="quotelev2">&gt;&gt; that will never be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah -- I actually mis-read your original comment.  I'm happy with  
</span><br>
<span class="quotelev1">&gt; all, none, and X (where X is a single integer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Go for the gold&quot; would be the &lt;list&gt; syntax, but I agree that  
</span><br>
<span class="quotelev1">&gt; that's not really necessary.  I think it's definitely in the &quot;would  
</span><br>
<span class="quotelev1">&gt; be nice&quot; category.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It occurs to me that we're using this &lt;list&gt; kind of notation in a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; few places now (aren't we?).  Perhaps we should have this string- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parsing code down in opal somewhere...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Processing it is so trivial it probably doesn't merit a dedicated  
</span><br>
<span class="quotelev2">&gt;&gt; code - all you do is use opal_argv_split and run down the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was thinking of the ranges -- there's additional processing for  
</span><br>
<span class="quotelev1">&gt; the X-Y strings.  But it's moot point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. specify which stdxxx file descriptors you want left open on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your procs. Our defaults are to leave stdout/stderr/stddiag open  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on all procs. This option would allow the user to specify that we  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tie any or all of these to /dev/null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about --stdout and --stderr, indicating which procs' stdout/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stderr you want to see?  FWIW, I don't think we should provide a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way to turn off stddiag.  The syntax could be just like --stdin,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; except the default values would be &quot;all&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, will anyone ever really use this? I agree about stddiag as  
</span><br>
<span class="quotelev2">&gt;&gt; orte_show_help flows over it. I haven't found any interest around  
</span><br>
<span class="quotelev2">&gt;&gt; here in shutting off stdout and/or stderr - nobody can think of a  
</span><br>
<span class="quotelev2">&gt;&gt; reason to do so. Doing it is trivial - my concern here is solely  
</span><br>
<span class="quotelev2">&gt;&gt; with the complexity of providing such fine-grained specifications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may actually be useful to turn off stdout/stderr in debugging  
</span><br>
<span class="quotelev1">&gt; scenarios, meaning &quot;I only want to see output from proc X, Y, Z.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about leading these options off for now, but leaving the design  
</span><br>
<span class="quotelev1">&gt; open to implementing them someday if someone ever cares enough?
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are these options per app context, or global?  It would be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; awesome to be per-app-context, but I wouldn't cry too hard if  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they were global (especially if it meant making the code overly  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; complex, etc.).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My first reaction is that making this per app_context would create  
</span><br>
<span class="quotelev2">&gt;&gt; a ton of complexity...but I'll take a gander before committing one  
</span><br>
<span class="quotelev2">&gt;&gt; way or the other. Again, though, I would wonder if anyone really is  
</span><br>
<span class="quotelev2">&gt;&gt; going to use this on a per app_context basis - or are we just  
</span><br>
<span class="quotelev2">&gt;&gt; creating capability &quot;because we can&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it's solidly in the &quot;because we can&quot; department.  If it's  
</span><br>
<span class="quotelev1">&gt; anything more than trivial to implement, my $0.02 is to leave it  
</span><br>
<span class="quotelev1">&gt; off.  If someone wants to implement it someday, they can.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: as long as there's the possibility of writing an orte-iof  
</span><br>
<span class="quotelev1">&gt; command line tool to suck down an individual proc's stdin/stdout/ 
</span><br>
<span class="quotelev1">&gt; stderr[/stddiag], I'm happy (because leaves the door open for  
</span><br>
<span class="quotelev1">&gt; &quot;mpirun --screen ...&quot;).
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4620.php">Ralph Castain: "[OMPI devel] Fwd: error on QCD run"</a>
<li><strong>Previous message:</strong> <a href="4618.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>In reply to:</strong> <a href="4618.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4615.php">Greg Watson: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
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
