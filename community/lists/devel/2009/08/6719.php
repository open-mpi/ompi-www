<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 11:23:05 2009" -->
<!-- isoreceived="20090825152305" -->
<!-- sent="Tue, 25 Aug 2009 11:23:00 -0400" -->
<!-- isosent="20090825152300" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="B76971B0-1551-4E70-80C1-ACB862D7A66C_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="30910A1B-7797-4671-AECB-F65011C0B03A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-08-25 11:23:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6720.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r1705"</a>
<li><strong>Previous message:</strong> <a href="6718.php">Ralph Castain: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6685.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6731.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Looks like some messages are taking a different path:
<br>
<p>$ mpirun -mca orte_show_resolved_nodenames 1 -xml -display-map -np 3 xxx
<br>
&lt;mpirun&gt;
<br>
&lt;map&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;host name=&quot;Jarrah.local&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;process rank=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;process rank=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;process rank=&quot;2&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/host&gt;
<br>
&lt;/map&gt;
<br>
&lt;
<br>
stderr
<br>
<span class="quotelev1"> &gt;
</span><br>
--------------------------------------------------------------------------&amp;#010
<br>
;&lt;/stderr&gt;
<br>
&lt;stderr&gt;mpirun was unable to launch the specified application as it  
<br>
could not find an executable:&amp;#010;&lt;/stderr&gt;
<br>
&lt;stderr&gt;&amp;#010;&lt;/stderr&gt;
<br>
&lt;stderr&gt;Executable: xxx&amp;#010;&lt;/stderr&gt;
<br>
&lt;stderr&gt;Node: Jarrah.local&amp;#010;&lt;/stderr&gt;
<br>
&lt;stderr&gt;&amp;#010;&lt;/stderr&gt;
<br>
&lt;stderr&gt;while attempting to start process rank 0.&amp;#010;&lt;/stderr&gt;
<br>
&lt; 
<br>
stderr 
<br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------&amp;#010 
<br>
;&lt;/stderr&gt;
<br>
3 total processes failed to start
<br>
&lt;/mpirun&gt;
<br>
<p>Cheers,
<br>
Greg
<br>
<p>On Aug 20, 2009, at 3:24 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Okay - try r21858.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 20, 2009, at 12:36 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cool!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regarding the scope of the tags, I never really thought about  
</span><br>
<span class="quotelev2">&gt;&gt; output from the command itself. I propose that any output that  
</span><br>
<span class="quotelev2">&gt;&gt; can't otherwise be classified be sent using the appropriate  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdout&gt; or &lt;stderr&gt; tags with no &quot;rank&quot; attribute.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 20, 2009, at 1:52 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can catch most of these and will do so as they flow through a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; single code path. However, there are places sprinkled throughout  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the code where people directly output warning and error info -  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these will be more problematic and represent a degree of change  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is probably outside the comfort zone for the 1.3 series.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After talking with Jeff about it, we propose that I make the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simple change that will  catch messages like those below. For the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broader problem, we believe that some discussion with you about  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the degree of granularity exposed through the xml output might  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help define the overall solution. For example, can we just label  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all stderr messages with &lt;stderr&gt;&lt;/stderr&gt; tags, or do you need  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more detailed tagging (e.g., rank, file, line, etc.)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That discussion can occur later - for now, I'll catch these. Will  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; let you know when it is ready to test!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 20, 2009, at 11:16 AM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; One more thing. Even with XML enabled, I notice that some error  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; messages are still sent to stderr without XML tags (see below.)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any chance these could be sent to stdout wrapped in &lt;stderr&gt;&lt;/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stderr&gt; tags?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -mca orte_show_resolved_nodenames 1 -xml -display-map - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; np 1 ./pop pop_in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;map&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	&lt;host name=&quot;4pcnuggets&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 		&lt;process rank=&quot;0&quot;/&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	&lt;/host&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;/map&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with errorcode 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;stdout  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------&amp;#010 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ;&lt;/stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt; &amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt; Parallel Ocean Program (POP) &amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt;  Version 2.0.1 Released 21 Jan 2004&amp;#010;&lt;/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt; &amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;stdout  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------&amp;#010 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ;&lt;/stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;stdout  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------&amp;#010 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ;&lt;/stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt; &amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt;POP aborting...&amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt; Input nprocs not same as system request&amp;#010;&lt;/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt; &amp;#010;&lt;/stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;stdout  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------&amp;#010 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ;&lt;/stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 15201 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 4pcnuggets exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 19, 2009, at 10:48 AM, Greg Watson wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looks like it's working now.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 18, 2009, at 5:21 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Give r21836 a try and see if it still gets out of order.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Aug 18, 2009, at 2:18 PM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Not sure that's it because all XML output should be via stdout.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 18, 2009, at 3:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hmmm....let me try adding a fflush after the &lt;mpirun&gt; output  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to force it out. Best guess is that you are seeing a little  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; race condition - the map output is coming over stderr, while  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the &lt;mpirun&gt; tag is coming over stdout.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Aug 18, 2009 at 12:53 PM, Greg Watson &lt;g.watson_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm seeing something strange. When I run &quot;mpirun -mca  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_show_resolved_nodenames 1 -xml -display-map...&quot;, I see:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;map&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        &lt;host name=&quot;Jarrah.local&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                &lt;process rank=&quot;0&quot;/&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                &lt;process rank=&quot;1&quot;/&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                &lt;process rank=&quot;2&quot;/&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                &lt;process rank=&quot;3&quot;/&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        &lt;/host&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;/map&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;/mpirun&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but when I run &quot; ssh localhost mpirun -mca  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_show_resolved_nodenames 1 -xml -display-map...&quot;, I see:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;map&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        &lt;host name=&quot;Jarrah.local&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                &lt;process rank=&quot;0&quot;/&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                &lt;process rank=&quot;1&quot;/&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                &lt;process rank=&quot;2&quot;/&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                &lt;process rank=&quot;3&quot;/&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;        &lt;/host&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;/map&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;/mpirun&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any ideas?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 17, 2009, at 11:16 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Should be done on trunk with r21826 - would you please give  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it a try and let me know if that meets requirements? If so,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'll move it to 1.3.4.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 17, 2009, at 6:42 AM, Greg Watson wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yes, you'd just need issue the start tag prior to any other  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; XML output, then the end tag when it's guaranteed all XML  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; other output has been sent.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 17, 2009, at 7:44 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; All things are possible - some just a tad more painful than  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; others.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like you want the mpirun tags to flow around all  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; output during the run - i.e., there is only one pair of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun tags that surround anything that might come out of the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; job. True?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If so, that would be trivial.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 14, 2009, at 9:25 AM, Greg Watson wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Would it be possible to get mpirun to issue start and end  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tags if the -xml option is used? Currently there is no way to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; determine when the output starts and finishes, which makes  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parsing the XML tricky, particularly if something else  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; generates output (e.g. the shell). Something like this would  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; be ideal:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;map&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;/map&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;stdout&gt;...&lt;/stdout&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;stderr&gt;...&lt;/stderr&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;/mpirun&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If we could get it in 1.3.4 even better. :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6719/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6720.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r1705"</a>
<li><strong>Previous message:</strong> <a href="6718.php">Ralph Castain: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6685.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6731.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
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
