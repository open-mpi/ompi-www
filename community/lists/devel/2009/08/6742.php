<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 21:26:41 2009" -->
<!-- isoreceived="20090901012641" -->
<!-- sent="Mon, 31 Aug 2009 20:26:20 -0500" -->
<!-- isosent="20090901012620" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="7C3BD80B-2E0D-4188-BA0A-9B4963AE2964_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BB9BD463-3E13-4EF2-8C37-7A4B92741FB4_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-08-31 21:26:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6743.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6741.php">Lisandro Dalcin: "[OMPI devel] Cannot Free() a datatype created with Dup() or Create_resized()"</a>
<li><strong>In reply to:</strong> <a href="6739.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6743.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6743.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6748.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Ralph,
<br>
<p>Unfortunately I don't think this is going to work for us. Most of the  
<br>
time we're starting the mpirun command using the ssh exec or shell  
<br>
service, neither of which provide any mechanism for reading from file  
<br>
descriptors other than 1 or 2. The only alternatives I see are:
<br>
<p>1. Provide a separate command that starts mpirun at the end of a pipe  
<br>
that is connected to the fd passed using the -xml-fd argument. This  
<br>
command would need to be part of the OMPI distribution, because the  
<br>
whole purpose of the XML was to provide an out-of-the-box experience  
<br>
when using PTP with OMPI.
<br>
<p>2. Implement an -xml-file option, but I could write the code for you.
<br>
<p>3. Go back to limiting XML output to the map only.
<br>
<p>None of these are particularly ideal. If you can think of anything  
<br>
else, let me know.
<br>
<p>Regards,
<br>
Greg
<br>
<p>On Aug 30, 2009, at 10:36 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; What if we instead offered a -xml-fd N option? I would rather not  
</span><br>
<span class="quotelev1">&gt; create a file myself. However, since you are calling mpirun  
</span><br>
<span class="quotelev1">&gt; yourself, this would allow you to create a pipe on your end, and  
</span><br>
<span class="quotelev1">&gt; then pass us the write end of the pipe. We would then send all XML  
</span><br>
<span class="quotelev1">&gt; output down that pipe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff and I chatted about this and felt this might represent the  
</span><br>
<span class="quotelev1">&gt; cleanest solution. Sound okay?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2009, at 6:33 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would this be doable? If we could guarantee that the only output  
</span><br>
<span class="quotelev2">&gt;&gt; that went to the file was XML then that would solve the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 28, 2009, at 5:39 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 2009-08-27 at 23:46 -0400, Greg Watson wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I didn't realize it would be such a problem. Unfortunately there is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simply no way to reliably parse this kind of output, because it is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; impossible to know what the error messages are going to be, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; presumably they could include XML-like formatting as well. The  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; whole
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; point of the XML was to try and simplify the parsing of the mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output, but it now looks like it's actually more difficult.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought this might be difficult when I saw you were attempting it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me tell you about what Valgrind does because they have similar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.  Initially they just had added --xml=yes option which  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; put most
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the valgrind (as distinct from application) output in xml  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tags.  This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works for simple cases and if you mix it with --log- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file=&lt;filename&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; keeps the valgrind output separate from the application output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately there are lots of places throughout the code where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developers have inserted print statements (in the valgrind case  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all go to the logfile) which means the xml is interspersed with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-xml
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output and hence impossibly to parse reliably.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What they have now done in the current release is to add a extra
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --xml-file=&lt;file&gt; option as well as the --log-file=&lt;file&gt; option.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the simple case all output from a normal run goes well  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; formatted to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the xml file and the log file remains empty, any tool that wraps  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; around
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valgrind can parse the xml which is guaranteed to be well  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; formatted and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it can detect the presence of other messages by looking for output  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the standard log file.  The onus is then on tool writers to look  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remaining cases and decide if they are common or important enough to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrap in xml and propose a patch or removal of the non-formatted  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entirely.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The above seems to work well, having a separate log file for xml  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; huge step forward as it means whilst the xml isn't necessarily  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can both parse it and are able to tell when it's missing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course when looking at this level of tool integration it's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use sockets that files (e.g. --xml-socket=localhost:1234 rather than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --xml-file=/tmp/app_XXXX.xml) but I'll leave that up to you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this gives you something to think over.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ashley,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6743.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6741.php">Lisandro Dalcin: "[OMPI devel] Cannot Free() a datatype created with Dup() or Create_resized()"</a>
<li><strong>In reply to:</strong> <a href="6739.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6743.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6743.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6748.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
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
