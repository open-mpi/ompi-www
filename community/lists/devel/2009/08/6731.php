<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 22:44:56 2009" -->
<!-- isoreceived="20090828024456" -->
<!-- sent="Thu, 27 Aug 2009 20:44:50 -0600" -->
<!-- isosent="20090828024450" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="71d2d8cc0908271944p5e10c132j8d871c0386a04296_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2A0E80EC-1929-4FA3-B2C1-2E0A1C90049B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-08-27 22:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6732.php">Chris Samuel: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6730.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Maybe in reply to:</strong> <a href="6630.php">Greg Watson: "[OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6733.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6733.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Greg
<br>
<p>I fixed these so they will get properly formatted. However, it is
<br>
symptomatic of a much broader problem - namely, that developers have
<br>
inserted print statements throughout the code for reporting errors. There
<br>
simply isn't any easy way for me to catch them all.
<br>
<p>Jeff and I have talked about ways of approaching that problem. However,
<br>
nothing is entirely perfect. For example, an error detected by slurm will
<br>
generate a message that lies completely outside OMPI's scope, and will be
<br>
asynchronous with anything we try to report.
<br>
<p>Thus, you are going to have to always be prepared to deal with improperly
<br>
formatted messages. For example, you could easily get the following garbled
<br>
output:
<br>
<p>&lt;stdSLURM-GENERATED-ERROR-MESSAGE
<br>
err&gt;mpirun was unable to stSLURM-GENERATED-ERROR-MESSAGE
<br>
art the job&amp;010;&lt;SHELL-ERROR-MESSAGE
<br>
/stdANOTHER-ERROR
<br>
err&gt;
<br>
<p>You get the picture, I'm sure. There is nothing I can do about this, so your
<br>
system is simply going to have to figure out how to handle it.
<br>
<p>Only other solution I can propose is going back to building against the tool
<br>
library I created, but that has its own issues too...
<br>
Ralph
<br>
<p><p><p>*Date: *August 25, 2009 9:23:00 AM MDT
<br>
<span class="quotelev1">&gt; *To: *Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Subject: **Re: [OMPI devel] XML request*
</span><br>
<span class="quotelev1">&gt; *Reply-To: *Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; Looks like some messages are taking a different path:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca orte_show_resolved_nodenames 1 -xml -display-map -np 3 xxx
</span><br>
<span class="quotelev1">&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev1">&gt; &lt;map&gt;
</span><br>
<span class="quotelev1">&gt; &lt;host name=&quot;Jarrah.local&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;process rank=&quot;0&quot;/&gt;
</span><br>
<span class="quotelev1">&gt; &lt;process rank=&quot;1&quot;/&gt;
</span><br>
<span class="quotelev1">&gt; &lt;process rank=&quot;2&quot;/&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/host&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/map&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stderr&gt;--------------------------------------------------------------------------&amp;#010;&lt;/stderr&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stderr&gt;mpirun was unable to launch the specified application as it could
</span><br>
<span class="quotelev1">&gt; not find an executable:&amp;#010;&lt;/stderr&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stderr&gt;&amp;#010;&lt;/stderr&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stderr&gt;Executable: xxx&amp;#010;&lt;/stderr&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stderr&gt;Node: Jarrah.local&amp;#010;&lt;/stderr&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stderr&gt;&amp;#010;&lt;/stderr&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stderr&gt;while attempting to start process rank 0.&amp;#010;&lt;/stderr&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stderr&gt;--------------------------------------------------------------------------&amp;#010;&lt;/stderr&gt;
</span><br>
<span class="quotelev1">&gt; 3 total processes failed to start
</span><br>
<span class="quotelev1">&gt; &lt;/mpirun&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 20, 2009, at 3:24 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay - try r21858.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 20, 2009, at 12:36 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; Cool!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding the scope of the tags, I never really thought about output from
</span><br>
<span class="quotelev1">&gt; the command itself. I propose that any output that can't otherwise be
</span><br>
<span class="quotelev1">&gt; classified be sent using the appropriate &lt;stdout&gt; or &lt;stderr&gt; tags with no
</span><br>
<span class="quotelev1">&gt; &quot;rank&quot; attribute.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 20, 2009, at 1:52 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Greg
</span><br>
<span class="quotelev1">&gt; I can catch most of these and will do so as they flow through a single code
</span><br>
<span class="quotelev1">&gt; path. However, there are places sprinkled throughout the code where people
</span><br>
<span class="quotelev1">&gt; directly output warning and error info - these will be more problematic and
</span><br>
<span class="quotelev1">&gt; represent a degree of change that is probably outside the comfort zone for
</span><br>
<span class="quotelev1">&gt; the 1.3 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After talking with Jeff about it, we propose that I make the simple change
</span><br>
<span class="quotelev1">&gt; that will  catch messages like those below. For the broader problem, we
</span><br>
<span class="quotelev1">&gt; believe that some discussion with you about the degree of granularity
</span><br>
<span class="quotelev1">&gt; exposed through the xml output might help define the overall solution. For
</span><br>
<span class="quotelev1">&gt; example, can we just label all stderr messages with &lt;stderr&gt;&lt;/stderr&gt; tags,
</span><br>
<span class="quotelev1">&gt; or do you need more detailed tagging (e.g., rank, file, line, etc.)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That discussion can occur later - for now, I'll catch these. Will let you
</span><br>
<span class="quotelev1">&gt; know when it is ready to test!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 20, 2009, at 11:16 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; One more thing. Even with XML enabled, I notice that some error messages
</span><br>
<span class="quotelev1">&gt; are still sent to stderr without XML tags (see below.) Any chance these
</span><br>
<span class="quotelev1">&gt; could be sent to stdout wrapped in &lt;stderr&gt;&lt;/stderr&gt; tags?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca orte_show_resolved_nodenames 1 -xml -display-map -np 1 ./pop
</span><br>
<span class="quotelev1">&gt; pop_in
</span><br>
<span class="quotelev1">&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev1">&gt; &lt;map&gt;
</span><br>
<span class="quotelev1">&gt; &lt;host name=&quot;4pcnuggets&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;process rank=&quot;0&quot;/&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/host&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/map&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &lt;stdout
</span><br>
<span class="quotelev1">&gt; rank=&quot;0&quot;&gt;------------------------------------------------------------------------&amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt; &amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt; Parallel Ocean Program (POP) &amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt;  Version 2.0.1 Released 21 Jan 2004&amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt; &amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout
</span><br>
<span class="quotelev1">&gt; rank=&quot;0&quot;&gt;------------------------------------------------------------------------&amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout
</span><br>
<span class="quotelev1">&gt; rank=&quot;0&quot;&gt;------------------------------------------------------------------------&amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt; &amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt;POP aborting...&amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt; Input nprocs not same as system request&amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt; &amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout
</span><br>
<span class="quotelev1">&gt; rank=&quot;0&quot;&gt;------------------------------------------------------------------------&amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 15201 on
</span><br>
<span class="quotelev1">&gt; node 4pcnuggets exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 19, 2009, at 10:48 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; Looks like it's working now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2009, at 5:21 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Give r21836 a try and see if it still gets out of order.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2009, at 2:18 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; Not sure that's it because all XML output should be via stdout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2009, at 3:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm....let me try adding a fflush after the &lt;mpirun&gt; output to force it
</span><br>
<span class="quotelev1">&gt; out. Best guess is that you are seeing a little race condition - the map
</span><br>
<span class="quotelev1">&gt; output is coming over stderr, while the &lt;mpirun&gt; tag is coming over stdout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 18, 2009 at 12:53 PM, Greg Watson &lt;g.watson_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm seeing something strange. When I run &quot;mpirun -mca
</span><br>
<span class="quotelev2">&gt;&gt; orte_show_resolved_nodenames 1 -xml -display-map...&quot;, I see:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;map&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;host name=&quot;Jarrah.local&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                &lt;process rank=&quot;0&quot;/&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                &lt;process rank=&quot;1&quot;/&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                &lt;process rank=&quot;2&quot;/&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                &lt;process rank=&quot;3&quot;/&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;/host&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/map&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/mpirun&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but when I run &quot; ssh localhost mpirun -mca orte_show_resolved_nodenames 1
</span><br>
<span class="quotelev2">&gt;&gt; -xml -display-map...&quot;, I see:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;map&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;host name=&quot;Jarrah.local&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                &lt;process rank=&quot;0&quot;/&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                &lt;process rank=&quot;1&quot;/&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                &lt;process rank=&quot;2&quot;/&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                &lt;process rank=&quot;3&quot;/&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;/host&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/map&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/mpirun&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 17, 2009, at 11:16 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Should be done on trunk with r21826 - would you please give it a try and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; let me know if that meets requirements? If so, I'll move it to 1.3.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 17, 2009, at 6:42 AM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, you'd just need issue the start tag prior to any other XML output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then the end tag when it's guaranteed all XML other output has been sent.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 17, 2009, at 7:44 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  All things are possible - some just a tad more painful than others.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like you want the mpirun tags to flow around all output during
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the run - i.e., there is only one pair of mpirun tags that surround anything
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that might come out of the job. True?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If so, that would be trivial.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 14, 2009, at 9:25 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Would it be possible to get mpirun to issue start and end tags if the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -xml option is used? Currently there is no way to determine when the output
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; starts and finishes, which makes parsing the XML tricky, particularly if
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; something else generates output (e.g. the shell). Something like this would
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be ideal:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;map&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;/map&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;stdout&gt;...&lt;/stdout&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;stderr&gt;...&lt;/stderr&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;/mpirun&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If we could get it in 1.3.4 even better. :-)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From: *Greg Watson &lt;g.watson_at_[hidden]&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6731/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6732.php">Chris Samuel: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6730.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Maybe in reply to:</strong> <a href="6630.php">Greg Watson: "[OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6733.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6733.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
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
