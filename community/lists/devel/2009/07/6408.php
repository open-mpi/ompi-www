<?
$subject_val = "Re: [OMPI devel] [OMPI users] where can i get a tracing tool";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 06:17:14 2009" -->
<!-- isoreceived="20090715101714" -->
<!-- sent="Wed, 15 Jul 2009 12:17:09 +0200" -->
<!-- isosent="20090715101709" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] where can i get a tracing tool" -->
<!-- id="1247653029.7834.50.camel_at_ricolap" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A5D36F2.4060606_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] where can i get a tracing tool<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 06:17:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6409.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6407.php">Nikolay Molchanov: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>In reply to:</strong> <a href="6405.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6410.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Reply:</strong> <a href="6410.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Reply:</strong> <a href="6428.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene,
<br>
<p>the FAQ page looks very nice.
<br>
I just sent the following answer to Lin Zou:
<br>
<p>.....
<br>
for a quick view of what is inside the trace you could try 'otfprofile'
<br>
to generate a tex/ps file with some information. This tool is a
<br>
component of the latest stand-alone version of the Open Trace Format
<br>
(OTF) - see <a href="http://www.tu-dresden.de/zih/otf/">http://www.tu-dresden.de/zih/otf/</a>.
<br>
<p>However, if you need more detailed information about the trace you would
<br>
need to get a evaluation version of Vampir - see <a href="http://www.vampir.eu">http://www.vampir.eu</a>.
<br>
In addition to the evaluation version of Vampir a free version with some
<br>
functional limitations will be available in the near future.
<br>
.....
<br>
<p>Could you also mention the tool 'otfprofile' under the section 7,
<br>
please? As soon as the free version of Vampir is available this could
<br>
also be mentioned.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Matthias
<br>
<p>On Tue, 2009-07-14 at 18:54 -0700, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Zou, Lin (GE, Research, Consultant) wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all, 
</span><br>
<span class="quotelev2">&gt; &gt; I want to trace my program, having used vampirTrace to generate
</span><br>
<span class="quotelev2">&gt; &gt; tracing info, except for Vampir, where can I download free tools to
</span><br>
<span class="quotelev2">&gt; &gt; parse the tracing info?
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt; Lin
</span><br>
<span class="quotelev1">&gt; This message appeared on the users list yesterday.  For a long time,
</span><br>
<span class="quotelev1">&gt; I've been meaning to add a perf-tool section to the FAQ.  I finally
</span><br>
<span class="quotelev1">&gt; did so, incorporating questions and answers from the users and devel
</span><br>
<span class="quotelev1">&gt; lists that I've seen on this subject in the last few months.  I just
</span><br>
<span class="quotelev1">&gt; put the changes back and as soon as I see the pages &quot;live&quot; I'll
</span><br>
<span class="quotelev1">&gt; respond to the user on the user list.  Please take a look.  You can
</span><br>
<span class="quotelev1">&gt; make changes as you like or give me feedback and I can do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I acknowledge that there is a conflict of interests in my recommending
</span><br>
<span class="quotelev1">&gt; Sun MPI Analyzer, but I believe I've done so tastefully and
</span><br>
<span class="quotelev1">&gt; appropriately!  Throw tomatoes if you see fit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S.  Until the page goes live, I'll also leave it at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.osl.iu.edu/~eloh/faq/?category=perftools">http://www.osl.iu.edu/~eloh/faq/?category=perftools</a> .  Or, check out a
</span><br>
<span class="quotelev1">&gt; workspace.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<pre>
-- 
Matthias Jurenz
Technische Universit&#195;&#164;t Dresden
Center for Information Services and High Performance Computing (ZIH)
01062 Dresden, Germany
Phone : (+49) 351/463-31945
Fax   : (+49) 351/463-37773
e-mail: matthias.jurenz_at_[hidden]
WWW   : <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6408/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6409.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6407.php">Nikolay Molchanov: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>In reply to:</strong> <a href="6405.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6410.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Reply:</strong> <a href="6410.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Reply:</strong> <a href="6428.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
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
