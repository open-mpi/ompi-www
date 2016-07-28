<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 05:39:15 2009" -->
<!-- isoreceived="20090828093915" -->
<!-- sent="Fri, 28 Aug 2009 10:39:07 +0100" -->
<!-- isosent="20090828093907" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="1251452347.3878.89.camel_at_alpha" -->
<!-- inreplyto="1F894B35-9FA0-4C87-9042-EB9C225A6EB0_at_computer.org" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-28 05:39:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6735.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6733.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6733.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6736.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6736.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-08-27 at 23:46 -0400, Greg Watson wrote:
<br>
<span class="quotelev1">&gt; I didn't realize it would be such a problem. Unfortunately there is
</span><br>
<span class="quotelev1">&gt; simply no way to reliably parse this kind of output, because it is
</span><br>
<span class="quotelev1">&gt; impossible to know what the error messages are going to be, and
</span><br>
<span class="quotelev1">&gt; presumably they could include XML-like formatting as well. The whole
</span><br>
<span class="quotelev1">&gt; point of the XML was to try and simplify the parsing of the mpirun
</span><br>
<span class="quotelev1">&gt; output, but it now looks like it's actually more difficult.
</span><br>
<p>I thought this might be difficult when I saw you were attempting it.
<br>
<p>Let me tell you about what Valgrind does because they have similar
<br>
problems.  Initially they just had added --xml=yes option which put most
<br>
of the valgrind (as distinct from application) output in xml tags.  This
<br>
works for simple cases and if you mix it with --log-file=&lt;filename&gt; it
<br>
keeps the valgrind output separate from the application output.
<br>
<p>Unfortunately there are lots of places throughout the code where
<br>
developers have inserted print statements (in the valgrind case these
<br>
all go to the logfile) which means the xml is interspersed with non-xml
<br>
output and hence impossibly to parse reliably.
<br>
<p>What they have now done in the current release is to add a extra
<br>
--xml-file=&lt;file&gt; option as well as the --log-file=&lt;file&gt; option.  Now
<br>
in the simple case all output from a normal run goes well formatted to
<br>
the xml file and the log file remains empty, any tool that wraps around
<br>
valgrind can parse the xml which is guaranteed to be well formatted and
<br>
it can detect the presence of other messages by looking for output in
<br>
the standard log file.  The onus is then on tool writers to look at the
<br>
remaining cases and decide if they are common or important enough to
<br>
wrap in xml and propose a patch or removal of the non-formatted message
<br>
entirely.
<br>
<p>The above seems to work well, having a separate log file for xml is a
<br>
huge step forward as it means whilst the xml isn't necessarily complete
<br>
you can both parse it and are able to tell when it's missing something. 
<br>
<p>Of course when looking at this level of tool integration it's better to
<br>
use sockets that files (e.g. --xml-socket=localhost:1234 rather than
<br>
--xml-file=/tmp/app_XXXX.xml) but I'll leave that up to you.
<br>
<p>I hope this gives you something to think over.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6735.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6733.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6733.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6736.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6736.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
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
