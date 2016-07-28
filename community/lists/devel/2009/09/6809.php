<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 12:17:14 2009" -->
<!-- isoreceived="20090909161714" -->
<!-- sent="Wed, 9 Sep 2009 10:17:04 -0600" -->
<!-- isosent="20090909161704" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="231A4918-8911-4BBF-89F6-7D668F3437CD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A88FD7E4-E8FF-466B-B204-974446C1F73D_at_computer.org" -->
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
<strong>Date:</strong> 2009-09-09 12:17:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6810.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6808.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6806.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6813.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6813.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6816.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....I never considered the possibility of output-filename being  
<br>
used that way. Interesting idea!
<br>
<p>I can fix that one, I think - let me see what I can do.
<br>
<p>BTW: output-filename redirects stdout, stderr, and stddiag. So you  
<br>
would get rid of everything that doesn't come through the xml path.
<br>
<p><p>On Sep 9, 2009, at 7:54 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks good so far. The way I want to use is this to use /dev/tty as  
</span><br>
<span class="quotelev1">&gt; the xml-file and send any other stdout or stderr to /dev/null. I  
</span><br>
<span class="quotelev1">&gt; could use something like 'mpirun -xml-file /dev/tty .... &gt;/dev/null  
</span><br>
<span class="quotelev1">&gt; 2&gt;&amp;1', but the syntax is shell specific which causes a problem the  
</span><br>
<span class="quotelev1">&gt; ssh exec service. I noticed that mpirun has a -output-filename  
</span><br>
<span class="quotelev1">&gt; option, but when I try -output-filename /dev/null, I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Jarrah.local:01581] opal_os_dirpath_create: Error: Unable to create  
</span><br>
<span class="quotelev1">&gt; directory (/dev), unable to set the correct mode [-1]
</span><br>
<span class="quotelev1">&gt; [Jarrah.local:01581] [[22927,0],0] ORTE_ERROR_LOG: Error in file  
</span><br>
<span class="quotelev1">&gt; ess_hnp_module.c at line 406
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I'm not sure if -output-filename redirects both stdout and  
</span><br>
<span class="quotelev1">&gt; stderr, or just stdout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 2, 2009, at 2:04 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay Greg - give r21930 a whirl. It takes a new cmd line arg -xml- 
</span><br>
<span class="quotelev2">&gt;&gt; file foo as discussed below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can also specify it as an MCA param: -mca orte_xml_file foo, or  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_xml_file=foo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know how it works
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 31, 2009, at 7:26 PM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately I don't think this is going to work for us. Most of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the time we're starting the mpirun command using the ssh exec or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell service, neither of which provide any mechanism for reading  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from file descriptors other than 1 or 2. The only alternatives I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Provide a separate command that starts mpirun at the end of a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pipe that is connected to the fd passed using the -xml-fd  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument. This command would need to be part of the OMPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distribution, because the whole purpose of the XML was to provide  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an out-of-the-box experience when using PTP with OMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Implement an -xml-file option, but I could write the code for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Go back to limiting XML output to the map only.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; None of these are particularly ideal. If you can think of anything  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else, let me know.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 30, 2009, at 10:36 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What if we instead offered a -xml-fd N option? I would rather not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; create a file myself. However, since you are calling mpirun  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; yourself, this would allow you to create a pipe on your end, and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then pass us the write end of the pipe. We would then send all  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; XML output down that pipe.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff and I chatted about this and felt this might represent the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cleanest solution. Sound okay?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 28, 2009, at 6:33 AM, Greg Watson wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Would this be doable? If we could guarantee that the only output  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that went to the file was XML then that would solve the problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 28, 2009, at 5:39 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Thu, 2009-08-27 at 23:46 -0400, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I didn't realize it would be such a problem. Unfortunately  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; there is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; simply no way to reliably parse this kind of output, because  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; impossible to know what the error messages are going to be, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; presumably they could include XML-like formatting as well. The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; whole
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; point of the XML was to try and simplify the parsing of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; output, but it now looks like it's actually more difficult.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I thought this might be difficult when I saw you were  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; attempting it.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Let me tell you about what Valgrind does because they have  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; similar
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problems.  Initially they just had added --xml=yes option which  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; put most
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of the valgrind (as distinct from application) output in xml  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tags.  This
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; works for simple cases and if you mix it with --log- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file=&lt;filename&gt; it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; keeps the valgrind output separate from the application output.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately there are lots of places throughout the code where
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; developers have inserted print statements (in the valgrind case  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; these
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; all go to the logfile) which means the xml is interspersed with  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; non-xml
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; output and hence impossibly to parse reliably.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What they have now done in the current release is to add a extra
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --xml-file=&lt;file&gt; option as well as the --log-file=&lt;file&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; option.  Now
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in the simple case all output from a normal run goes well  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; formatted to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the xml file and the log file remains empty, any tool that  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wraps around
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; valgrind can parse the xml which is guaranteed to be well  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; formatted and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it can detect the presence of other messages by looking for  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; output in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the standard log file.  The onus is then on tool writers to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; look at the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; remaining cases and decide if they are common or important  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enough to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrap in xml and propose a patch or removal of the non-formatted  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; message
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; entirely.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The above seems to work well, having a separate log file for  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; xml is a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; huge step forward as it means whilst the xml isn't necessarily  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; complete
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you can both parse it and are able to tell when it's missing  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; something.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Of course when looking at this level of tool integration it's  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; better to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; use sockets that files (e.g. --xml-socket=localhost:1234 rather  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; than
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --xml-file=/tmp/app_XXXX.xml) but I'll leave that up to you.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I hope this gives you something to think over.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ashley,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6810.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6808.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6806.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6813.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6813.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6816.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
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
