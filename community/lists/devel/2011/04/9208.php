<?
$subject_val = "Re: [OMPI devel] RFC: mpirun command line arugments";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 20:21:36 2011" -->
<!-- isoreceived="20110422002136" -->
<!-- sent="Thu, 21 Apr 2011 17:21:02 -0700" -->
<!-- isosent="20110422002102" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: mpirun command line arugments" -->
<!-- id="4DB0C9EE.1010806_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="807D4F24-C29F-4DA0-A8B7-448037EE402C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: mpirun command line arugments<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 20:21:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9209.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>Previous message:</strong> <a href="9207.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>In reply to:</strong> <a href="9207.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9209.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>Reply:</strong> <a href="9209.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/21/2011 4:41 PM, Jeff Squyres wrote:
<br>
<span class="quotelev2">&gt;&gt; Additionally implement --help=[topic] to give more info on related groups of options.
</span><br>
<span class="quotelev1">&gt; I think that fits in my &quot;extra bonus points&quot; proposal.  Meaning: I agree that it would be great, but I, sadly, do not have time to do it.
</span><br>
<p>I saw the &quot;extra bonus points&quot; proposal for svn-style &quot;mpirun help 
<br>
command&quot;, and I interpreted it to be slightly different from what I had 
<br>
in mind.  What I indented by my suggestion was regrouping the existing 
<br>
200+ line alphabetical-by-option-name output into from 5 to 10 topic 
<br>
sections - relatively minor &quot;editorial&quot; work (not that I am 
<br>
volunteering) when compared to writing new documentation.
<br>
<p><span class="quotelev2">&gt;&gt;   P.S. arguments is misspelled in the subject line:-)
</span><br>
<span class="quotelev1">&gt; I would aruge that you are just outta touch with how all the kids are typing on their iphones these days.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-P
</span><br>
<p>Well, then does the --help output need to fit a smart phone screen 
<br>
instead of the 24x80 classic vt100?
<br>
<p><p>Oh, one more related thing.  At least in 1.4.2 the --help output goes to 
<br>
stderr rather than stdout.  The gnu utilities all send their --help 
<br>
output to stdout.  This may seem like a extremely minor point to the 
<br>
folks on this list, but you would be surprised how many end-users don't 
<br>
know how to redirect stderr to a pipe (that is to say &quot;mpirun --help | 
<br>
less&quot; doesn't do what the user wants).  Perhaps that is already fixed in 
<br>
1.5.x?
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9209.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>Previous message:</strong> <a href="9207.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>In reply to:</strong> <a href="9207.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9209.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
<li><strong>Reply:</strong> <a href="9209.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun command line arugments"</a>
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
