<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 08:33:13 2009" -->
<!-- isoreceived="20090828123313" -->
<!-- sent="Fri, 28 Aug 2009 08:33:08 -0400" -->
<!-- isosent="20090828123308" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="8F7C9118-AC9B-4194-9387-BAB04E34FE26_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1251452347.3878.89.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI devel] XML request<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-28 08:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6737.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6735.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6734.php">Ashley Pittman: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6739.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6739.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Would this be doable? If we could guarantee that the only output that  
<br>
went to the file was XML then that would solve the problem.
<br>
<p>Greg
<br>
<p>On Aug 28, 2009, at 5:39 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2009-08-27 at 23:46 -0400, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I didn't realize it would be such a problem. Unfortunately there is
</span><br>
<span class="quotelev2">&gt;&gt; simply no way to reliably parse this kind of output, because it is
</span><br>
<span class="quotelev2">&gt;&gt; impossible to know what the error messages are going to be, and
</span><br>
<span class="quotelev2">&gt;&gt; presumably they could include XML-like formatting as well. The whole
</span><br>
<span class="quotelev2">&gt;&gt; point of the XML was to try and simplify the parsing of the mpirun
</span><br>
<span class="quotelev2">&gt;&gt; output, but it now looks like it's actually more difficult.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought this might be difficult when I saw you were attempting it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me tell you about what Valgrind does because they have similar
</span><br>
<span class="quotelev1">&gt; problems.  Initially they just had added --xml=yes option which put  
</span><br>
<span class="quotelev1">&gt; most
</span><br>
<span class="quotelev1">&gt; of the valgrind (as distinct from application) output in xml tags.   
</span><br>
<span class="quotelev1">&gt; This
</span><br>
<span class="quotelev1">&gt; works for simple cases and if you mix it with --log-file=&lt;filename&gt; it
</span><br>
<span class="quotelev1">&gt; keeps the valgrind output separate from the application output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately there are lots of places throughout the code where
</span><br>
<span class="quotelev1">&gt; developers have inserted print statements (in the valgrind case these
</span><br>
<span class="quotelev1">&gt; all go to the logfile) which means the xml is interspersed with non- 
</span><br>
<span class="quotelev1">&gt; xml
</span><br>
<span class="quotelev1">&gt; output and hence impossibly to parse reliably.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What they have now done in the current release is to add a extra
</span><br>
<span class="quotelev1">&gt; --xml-file=&lt;file&gt; option as well as the --log-file=&lt;file&gt; option.  Now
</span><br>
<span class="quotelev1">&gt; in the simple case all output from a normal run goes well formatted to
</span><br>
<span class="quotelev1">&gt; the xml file and the log file remains empty, any tool that wraps  
</span><br>
<span class="quotelev1">&gt; around
</span><br>
<span class="quotelev1">&gt; valgrind can parse the xml which is guaranteed to be well formatted  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; it can detect the presence of other messages by looking for output in
</span><br>
<span class="quotelev1">&gt; the standard log file.  The onus is then on tool writers to look at  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; remaining cases and decide if they are common or important enough to
</span><br>
<span class="quotelev1">&gt; wrap in xml and propose a patch or removal of the non-formatted  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; entirely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above seems to work well, having a separate log file for xml is a
</span><br>
<span class="quotelev1">&gt; huge step forward as it means whilst the xml isn't necessarily  
</span><br>
<span class="quotelev1">&gt; complete
</span><br>
<span class="quotelev1">&gt; you can both parse it and are able to tell when it's missing  
</span><br>
<span class="quotelev1">&gt; something.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course when looking at this level of tool integration it's better  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; use sockets that files (e.g. --xml-socket=localhost:1234 rather than
</span><br>
<span class="quotelev1">&gt; --xml-file=/tmp/app_XXXX.xml) but I'll leave that up to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this gives you something to think over.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<li><strong>Next message:</strong> <a href="6737.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6735.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6734.php">Ashley Pittman: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6739.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6739.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
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
