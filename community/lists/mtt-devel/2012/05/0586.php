<?
$subject_val = "Re: [MTT devel] PHP5 compatibility patch applied";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 08:40:04 2012" -->
<!-- isoreceived="20120530124004" -->
<!-- sent="Wed, 30 May 2012 08:39:59 -0400" -->
<!-- isosent="20120530123959" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] PHP5 compatibility patch applied" -->
<!-- id="CAANzjEnjfG5NhnWxHHiNNXzW2Y4WVB_Rj8fO2GeJL6ONfVbyEw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BE9BAEF2-1A78-45DF-81F8-874580B8CC30_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] PHP5 compatibility patch applied<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 08:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0587.php">Eugene Loh: "[MTT devel] MTT queries... problems"</a>
<li><strong>Previous message:</strong> <a href="0585.php">Jeff Squyres: "Re: [MTT devel] PHP5 compatibility patch applied"</a>
<li><strong>In reply to:</strong> <a href="0585.php">Jeff Squyres: "Re: [MTT devel] PHP5 compatibility patch applied"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Logistically, I will be making my transition to a new position over
<br>
the month of July. So if we make the MTT server transition before the
<br>
last week of June then I can help with the server side things, and
<br>
then use my last week to help debug any residual issues. After June 29
<br>
I will be sporadically available until things settle down later in
<br>
July.
<br>
<p>-- Josh
<br>
<p>On Wed, May 30, 2012 at 7:45 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Sweet!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to paint the rest of the picture: We're taking a multi-step approach to migrating services from old Indiana U. hardware to virtual machines in newer hardware. &#160;Step 1 was announced yesterday (migrating OMPI and MPI Forum SVN, Trac, and Open Grok). &#160;There's one last domino that needs to fall into place, but this looks like it will happen on Friday morning, June 2012.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MTT trac/wiki and SVN will be offline during the migration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After we're sure that's all working properly, we'll start to tackle migrating all other OMPI / MTT / hwloc services to new servers, too. &#160;These migrations are quite a bit more complex / detail-oriented (SVN and Trac are &quot;simple&quot; migrations).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While exact migration ordering and timing is still TBD, IU has agreed to increase resources for MTT, meaning that MTT will be moved to a different web server than the main OMPI web site. &#160;Specifically, the MTT submission server and reporter will be on <a href="https://mtt.open-mpi.org/">https://mtt.open-mpi.org/</a> rather than http[s]://www.open-mpi.org/mtt/. &#160;So we'll all need to update our MTT .ini files when the time comes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll let you know the timing of the change when we figure it out; it'll probably be in a week or two.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 30, 2012, at 7:06 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Awesome! Thanks for the fix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 30, 2012 at 12:03 AM, Christopher Yeoh &lt;cyeoh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have applied the PHP5 compatibility patch to trunk (from ticket #389).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that this means the reporter code will no longer work on PHP4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yeohc_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0587.php">Eugene Loh: "[MTT devel] MTT queries... problems"</a>
<li><strong>Previous message:</strong> <a href="0585.php">Jeff Squyres: "Re: [MTT devel] PHP5 compatibility patch applied"</a>
<li><strong>In reply to:</strong> <a href="0585.php">Jeff Squyres: "Re: [MTT devel] PHP5 compatibility patch applied"</a>
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
