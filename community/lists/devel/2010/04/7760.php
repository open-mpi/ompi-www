<?
$subject_val = "Re: [OMPI devel] RFC: Deprecate rankfile?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 06:43:50 2010" -->
<!-- isoreceived="20100416104350" -->
<!-- sent="Fri, 16 Apr 2010 06:43:02 -0400" -->
<!-- isosent="20100416104302" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Deprecate rankfile?" -->
<!-- id="4BC83F36.4070502_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CF14E539-603C-4078-A564-B49EE97210F2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Deprecate rankfile?<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 06:43:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7761.php">Jeff Squyres: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7759.php">&#213;&#197;&#190;&#167;: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>In reply to:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7761.php">Jeff Squyres: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7761.php">Jeff Squyres: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>If you are suggesting that you will make code that breaks a current 
<br>
rankfile feature, note I am not talking about adding a new feature that 
<br>
isn't supported by rankfile but something that used to work, then I 
<br>
think you are acting in poor form.  At a minimum you should at least 
<br>
give the community a heads up that you are borking a feature.
<br>
<p>There are a lot of pieces of code that everyone changes that require 
<br>
other changes that one is not completely responsible for.  If everyone 
<br>
decided it wasn't necessary to maintain/support those pieces our code 
<br>
will soon be useless (maybe it is).
<br>
<p>--td
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Read the other &quot;no&quot; votes, and I can understand the points made. I noted that neither respondent offered to maintain this feature, but indicated that it had some value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There really isn't any need to make a decision about this because it will take care of itself. Since no-one is maintaining it (and I really don't have time to continue to do so), and it tends to break easily, this module will &quot;self-deprecate&quot; rather soon. When that happens, we can wait and see if anyone cares enough to step forward and take responsibility for maintaining it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If not, then we can note that support for this feature went the way of other things that died due to lack of interest within the developer community (e.g., xgrid)...which is totally okay since this is, after all, an open source effort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 15, 2010, at 4:00 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Deprecate the &quot;rankfile&quot; component in the v1.5 series; remove it in the 1.7 series
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: It's old, creaky, and difficult to maintain.  It'll require maintenance someday soon, when we support hardware / hyperthreads in OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: svn rm orte/mca/rmaps/rank_file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Deprecate in 1.5, remove in 1.7.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: Teleconf on Tue, 27 April 2010
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now that we have nice paffinity binding options, can we deprecate rankfile in the 1.5 series and remove it in 1.7?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I only ask because it's kind of a pain to maintain.  It's not a huge deal, but Ralph and I were talking about another paffinity issue today and we both groaned at the prospect of extending rank file to support hyperthreads (and/or boards).  Perhaps it should just go away...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pro: less maintenance, especially since the original developers no longer maintain it
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Con: it's the only way to have completely custom affinity bindings (i.e., outside of our pre-constructed &quot;bind to socket&quot;, &quot;bind to core&quot;, etc. options).  ...do any other MPI's offer completely custom binding options?  I.e., do any real users care?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7760/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-7760/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7761.php">Jeff Squyres: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7759.php">&#213;&#197;&#190;&#167;: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>In reply to:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7761.php">Jeff Squyres: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Reply:</strong> <a href="7761.php">Jeff Squyres: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
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
