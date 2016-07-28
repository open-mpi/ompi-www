<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 23:47:28 2010" -->
<!-- isoreceived="20101124044728" -->
<!-- sent="Tue, 23 Nov 2010 23:47:30 -0500" -->
<!-- isosent="20101124044730" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="1290574050.29453.25.camel_at_godzilla" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54642EC2-7B57-4F33-83EA-FDC3FE22A5F9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>Sebastien.Boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 23:47:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8717.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8715.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8713.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8717.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le mardi 23 novembre 2010 &#195;&#160; 20:21 -0500, Jeff Squyres (jsquyres) a
<br>
&#195;&#169;crit :
<br>
<p><span class="quotelev1">&gt; Beware that MPI-request-free on active buffers is valid but evil. You CANNOT be sure when the buffer is available for reuse. 
</span><br>
<p><p>Yes, but as I said, in my program an MPI rank never flood other MPI
<br>
ranks.
<br>
(I like to think they respect each other haha)
<br>
<p>Therefore the evilness is no more -- it is casted away in oblivions.
<br>
<p>If I understand correctly, a call to MPI_Request_free does not affect in
<br>
any way the void*buffer associated to the request, it just free the
<br>
memory of the MPI_Request.
<br>
For statuses, I use MPI_STATUS_IGNORE, except with my MPI_Iprobe
<br>
obviously !
<br>
<p>So, in a way, MPI_REQUEST_IGNORE would be cool, but it does not exist.
<br>
<p><p>For buffer availability:
<br>
<p>For MPI_Recv and MPI_Isend, buffers are allocated with a
<br>
&quot;RingAllocator&quot; (one malloc at the start of execution). 
<br>
But it is useless as most of the time there is only on active send.
<br>
<p><p>Here is an example of my code (14567 lines, but yet MPI_Isend and
<br>
MPI_Recv appear both only once).
<br>
p.s. it is GPLed !
<br>
<p><p><p>These bits extract a k-mer (a string of k symbols) from a DNA (the code
<br>
of life) sequence and send it to the good MPI rank
<br>
<p><p>void VerticesExtractor::process(...){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!m_ready){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isValidDNA(memory)){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VERTEX_TYPE a=wordId(memory);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rankToFlush=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(*m_reverseComplementVertex==false){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rankToFlush=vertexRank(a,size);
<br>
<p>m_disData-&gt;m_messagesStock.addAt(rankToFlush,a);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VERTEX_TYPE
<br>
b=complementVertex(a,m_wordSize,m_colorSpaceMode);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rankToFlush=vertexRank(b,size);
<br>
<p>m_disData-&gt;m_messagesStock.addAt(rankToFlush,b);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>if(m_disData-&gt;m_messagesStock.flush(rankToFlush,1,TAG_VERTICES_DATA,m_outboxAllocator,m_outbox,rank,false)){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m_ready=false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
...
<br>
}
<br>
<p><p>so, if the &quot;toilet&quot; if flushed, the rank set its slot called m_ready to
<br>
false.
<br>
<p><p><p><p><p>The following bits select the message handler:
<br>
<p>O(1) message handler selection !
<br>
<p><p><p>void MessageProcessor::processMessage(Message*message){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int tag=message-&gt;getTag();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FNMETHOD f=m_methods[tag];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(this-&gt;*f)(message);
<br>
}
<br>
<p><p><p><p><p>Obviously, it calls something like this:
<br>
(note that a reply is sent)
<br>
<p><p><p>void MessageProcessor::call_TAG_VERTICES_DATA(Message*message){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void*buffer=message-&gt;getBuffer();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int count=message-&gt;getCount();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VERTEX_TYPE*incoming=(VERTEX_TYPE*)buffer;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int length=count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i=0;i&lt;length;i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VERTEX_TYPE l=incoming[i];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#ifdef SHOW_PROGRESS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((*m_last_value)!=(int)m_subgraph-&gt;size() and
<br>
(int)m_subgraph-&gt;size()%100000==0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(*m_last_value)=m_subgraph-&gt;size();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;&quot;Rank &quot;&lt;&lt;rank&lt;&lt;&quot; has
<br>
&quot;&lt;&lt;m_subgraph-&gt;size()&lt;&lt;&quot; vertices &quot;&lt;&lt;endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SplayNode&lt;VERTEX_TYPE,Vertex&gt;*tmp=m_subgraph-&gt;insert(l);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#ifdef ASSERT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(tmp!=NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(m_subgraph-&gt;inserted()){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp-&gt;getValue()-&gt;constructor();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>tmp-&gt;getValue()-&gt;setCoverage(tmp-&gt;getValue()-&gt;getCoverage()+1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#ifdef ASSERT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(tmp-&gt;getValue()-&gt;getCoverage()&gt;0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Message
<br>
aMessage(NULL,0,MPI_UNSIGNED_LONG_LONG,message-&gt;getSource(),TAG_VERTICES_DATA_REPLY,rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m_outbox-&gt;push_back(aMessage);
<br>
}
<br>
<p><p><p><p>These bits process the reply:
<br>
(all my message handlers are called call_&lt;TAG_NAME&gt;)
<br>
<p><p><p>void MessageProcessor::call_TAG_VERTICES_DATA_REPLY(Message*message){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m_verticesExtractor-&gt;setReadiness();
<br>
}
<br>
<p><p>And, finally, here it goes:
<br>
<p>void VerticesExtractor::setReadiness(){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m_ready=true;
<br>
}
<br>
<p><p><p>So, you can see that there is no problem with my use of MPI_Isend
<br>
followed by MPI_Request_free.
<br>
<p><p>Thanks !
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There was a sentence or paragraph added yo MPI 2.2 describing exactly this case. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my PDA. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 23, 2010, at 5:36 PM, S&#195;&#169;bastien Boisvert &lt;Sebastien.Boisvert.3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Le mardi 23 novembre 2010 &#195;&#160; 17:28 -0500, George Bosilca a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sebastien,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Using MPI_Isend doesn't guarantee asynchronous progress. As you might be aware, the non-blocking communications are guaranteed to progress only when the application is in the MPI library. Currently very few MPI implementations progress asynchronously (and unfortunately Open MPI is not one of them).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regardless, I just need the non-blocking behavior.
</span><br>
<span class="quotelev2">&gt; &gt; I call MPI_Request_free just after MPI_Isend, and I use a ring allocator
</span><br>
<span class="quotelev2">&gt; &gt; to allocate message buffers.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Message recipients just reply with another message to the source, using
</span><br>
<span class="quotelev2">&gt; &gt; a NULL buffer.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The sender waits for the reply before sending the next message.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; And it works for assembling bacterial genomes on many MPI ranks:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Rank 0: 162 contigs/4576725 nucleotides
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Rank 0 reports the elapsed time, Tue Nov 23 01:35:48 2010
</span><br>
<span class="quotelev2">&gt; &gt; ---&gt; Step: Collection of fusions
</span><br>
<span class="quotelev2">&gt; &gt;      Elapsed time: 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;      Since beginning: 17 minutes, 33 seconds
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Elapsed time for each step, Tue Nov 23 01:35:48 2010
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Beginning of computation: 1 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Distribution of sequence reads: 7 minutes, 49 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Distribution of vertices: 19 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Calculation of coverage distribution: 1 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Distribution of edges: 29 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Indexing of sequence reads: 1 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Computation of seeds: 2 minutes, 33 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Computation of library sizes: 1 minutes, 47 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Extension of seeds: 3 minutes, 34 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Computation of fusions: 59 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Collection of fusions: 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt; Completion of the assembly: 17 minutes, 33 seconds
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Rank 0 wrote Ecoli-THEONE.CoverageDistribution.txt
</span><br>
<span class="quotelev2">&gt; &gt; Rank 0 wrote Ecoli-THEONE.fasta
</span><br>
<span class="quotelev2">&gt; &gt; Rank 0 wrote Ecoli-THEONE.ReceivedMessages.txt
</span><br>
<span class="quotelev2">&gt; &gt; Rank 0 wrote Ecoli-THEONE.Library0.txt
</span><br>
<span class="quotelev2">&gt; &gt; Rank 0 wrote Ecoli-THEONE.Library1.txt
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Au revoir !
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 23, 2010, at 17:17 , S&#195;&#169;bastien Boisvert wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I now use MPI_Isend, so the problem is no more.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; M. S&#195;&#169;bastien Boisvert
</span><br>
<span class="quotelev2">&gt; &gt; &#195;&#137;tudiant au doctorat en physiologie-endocrinologie &#195;&#160; l'Universit&#195;&#169; Laval
</span><br>
<span class="quotelev2">&gt; &gt; Boursier des Instituts de recherche en sant&#195;&#169; du Canada
</span><br>
<span class="quotelev2">&gt; &gt; &#195;&#137;quipe du Professeur Jacques Corbeil
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Centre de recherche en infectiologie de l'Universit&#195;&#169; Laval
</span><br>
<span class="quotelev2">&gt; &gt; Local R-61B
</span><br>
<span class="quotelev2">&gt; &gt; 2705, boulevard Laurier
</span><br>
<span class="quotelev2">&gt; &gt; Qu&#195;&#169;bec, Qu&#195;&#169;bec
</span><br>
<span class="quotelev2">&gt; &gt; Canada G1V 4G2
</span><br>
<span class="quotelev2">&gt; &gt; T&#195;&#169;l&#195;&#169;phone: 418 525 4444 46342
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Courriel: SEB_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Web: <a href="http://boisvert.info">http://boisvert.info</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Innovation comes only from an assault on the unknown&quot; -Sydney Brenner
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p>-
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8716/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8717.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8715.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8713.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8717.php">Christopher Samuel: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
