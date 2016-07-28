<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 30 11:36:18 2009" -->
<!-- isoreceived="20090830153618" -->
<!-- sent="Sun, 30 Aug 2009 09:36:00 -0600" -->
<!-- isosent="20090830153600" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="BB9BD463-3E13-4EF2-8C37-7A4B92741FB4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8F7C9118-AC9B-4194-9387-BAB04E34FE26_at_computer.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-30 11:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6740.php">Nifty Tom Mitchell: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6738.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6736.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6742.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6742.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What if we instead offered a -xml-fd N option? I would rather not  
<br>
create a file myself. However, since you are calling mpirun yourself,  
<br>
this would allow you to create a pipe on your end, and then pass us  
<br>
the write end of the pipe. We would then send all XML output down that  
<br>
pipe.
<br>
<p>Jeff and I chatted about this and felt this might represent the  
<br>
cleanest solution. Sound okay?
<br>
<p><p>On Aug 28, 2009, at 6:33 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would this be doable? If we could guarantee that the only output  
</span><br>
<span class="quotelev1">&gt; that went to the file was XML then that would solve the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2009, at 5:39 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2009-08-27 at 23:46 -0400, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't realize it would be such a problem. Unfortunately there is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simply no way to reliably parse this kind of output, because it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; impossible to know what the error messages are going to be, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; presumably they could include XML-like formatting as well. The whole
</span><br>
<span class="quotelev3">&gt;&gt;&gt; point of the XML was to try and simplify the parsing of the mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output, but it now looks like it's actually more difficult.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought this might be difficult when I saw you were attempting it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me tell you about what Valgrind does because they have similar
</span><br>
<span class="quotelev2">&gt;&gt; problems.  Initially they just had added --xml=yes option which put  
</span><br>
<span class="quotelev2">&gt;&gt; most
</span><br>
<span class="quotelev2">&gt;&gt; of the valgrind (as distinct from application) output in xml tags.   
</span><br>
<span class="quotelev2">&gt;&gt; This
</span><br>
<span class="quotelev2">&gt;&gt; works for simple cases and if you mix it with --log-file=&lt;filename&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; it
</span><br>
<span class="quotelev2">&gt;&gt; keeps the valgrind output separate from the application output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately there are lots of places throughout the code where
</span><br>
<span class="quotelev2">&gt;&gt; developers have inserted print statements (in the valgrind case these
</span><br>
<span class="quotelev2">&gt;&gt; all go to the logfile) which means the xml is interspersed with non- 
</span><br>
<span class="quotelev2">&gt;&gt; xml
</span><br>
<span class="quotelev2">&gt;&gt; output and hence impossibly to parse reliably.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What they have now done in the current release is to add a extra
</span><br>
<span class="quotelev2">&gt;&gt; --xml-file=&lt;file&gt; option as well as the --log-file=&lt;file&gt; option.   
</span><br>
<span class="quotelev2">&gt;&gt; Now
</span><br>
<span class="quotelev2">&gt;&gt; in the simple case all output from a normal run goes well formatted  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; the xml file and the log file remains empty, any tool that wraps  
</span><br>
<span class="quotelev2">&gt;&gt; around
</span><br>
<span class="quotelev2">&gt;&gt; valgrind can parse the xml which is guaranteed to be well formatted  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; it can detect the presence of other messages by looking for output in
</span><br>
<span class="quotelev2">&gt;&gt; the standard log file.  The onus is then on tool writers to look at  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; remaining cases and decide if they are common or important enough to
</span><br>
<span class="quotelev2">&gt;&gt; wrap in xml and propose a patch or removal of the non-formatted  
</span><br>
<span class="quotelev2">&gt;&gt; message
</span><br>
<span class="quotelev2">&gt;&gt; entirely.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The above seems to work well, having a separate log file for xml is a
</span><br>
<span class="quotelev2">&gt;&gt; huge step forward as it means whilst the xml isn't necessarily  
</span><br>
<span class="quotelev2">&gt;&gt; complete
</span><br>
<span class="quotelev2">&gt;&gt; you can both parse it and are able to tell when it's missing  
</span><br>
<span class="quotelev2">&gt;&gt; something.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course when looking at this level of tool integration it's  
</span><br>
<span class="quotelev2">&gt;&gt; better to
</span><br>
<span class="quotelev2">&gt;&gt; use sockets that files (e.g. --xml-socket=localhost:1234 rather than
</span><br>
<span class="quotelev2">&gt;&gt; --xml-file=/tmp/app_XXXX.xml) but I'll leave that up to you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this gives you something to think over.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<li><strong>Next message:</strong> <a href="6740.php">Nifty Tom Mitchell: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6738.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6736.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6742.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6742.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
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
