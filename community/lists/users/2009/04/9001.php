<?
$subject_val = "Re: [OMPI users] Open-MPI and gprof";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 10:31:45 2009" -->
<!-- isoreceived="20090421143145" -->
<!-- sent="Tue, 21 Apr 2009 07:31:10 -0700" -->
<!-- isosent="20090421143110" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI and gprof" -->
<!-- id="49EDD8AE.2080404_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0904210214p39d86b3el6a5b1439c6a4dfd4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI and gprof<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 10:31:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9002.php">Luis Vitorio Cargnini: "[OMPI users] few Problems"</a>
<li><strong>Previous message:</strong> <a href="9000.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="8999.php">jody: "[OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9038.php">Tiago Almeida: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
jody wrote:
<br>
<p><span class="quotelev1">&gt;Hi
</span><br>
<span class="quotelev1">&gt;I wanted to profile my application using gprof, and proceeded like
</span><br>
<span class="quotelev1">&gt;when profiling a normal application:
</span><br>
<span class="quotelev1">&gt;- compile everything with option -pg
</span><br>
<span class="quotelev1">&gt;- run application
</span><br>
<span class="quotelev1">&gt;- call gprof
</span><br>
<span class="quotelev1">&gt;This returns a normal-looking output, but i don't know
</span><br>
<span class="quotelev1">&gt;whether this is the data for node 0 only or accumulated for all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Does anybody have experience in profiling parallel applications?
</span><br>
<span class="quotelev1">&gt;Is there a way to have profile data for each node separately?
</span><br>
<span class="quotelev1">&gt;If not, is there another profiling tool which can?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Gosh, I'm trying not to sound like a repeating commercial, but this is a 
<br>
rather direct answer to your question.
<br>
<p>If you use Sun Studio compilers and tools, there is a Performance 
<br>
Analyzer.  The basic mode of operation is that it samples the callstack 
<br>
periodically.  So, you don't get the huge data volumes that tracing 
<br>
tools generate, but you do get statistically fair data that shows where 
<br>
time is spent.  If you preface your &quot;mpirun&quot; command with &quot;collect&quot;, 
<br>
then you get data for all the MPI processes in your job.  You can look 
<br>
at data aggregated over all processes or for some subset.  You can get 
<br>
gprof-style information about where time is spent.  You can also trace 
<br>
MPI calls, the memory heap, hardware events (like cache misses), etc.  
<br>
Tool is available from <a href="http://developers.sun.com/sunstudio/">http://developers.sun.com/sunstudio/</a> via free 
<br>
download for Linux and Solaris on on x86 and SPARC.  You don't need to 
<br>
compile your program specially (I mean, no -pg).  Fine print applies to 
<br>
every statement I'm making in this paragraph, but I'm trying to keep it 
<br>
short.
<br>
<p>Again, sorry if it sounds like a commercial, but it's intended to be a 
<br>
direct answer to your question.
<br>
<p>P.S.  If you go to 
<br>
<a href="http://developers.sun.com/sunstudio/documentation/demos/index.jsp">http://developers.sun.com/sunstudio/documentation/demos/index.jsp</a> , 
<br>
&quot;halfway down&quot; is a set of presentations on &quot;How to Perform Analysis&quot;.  
<br>
This can give you more information on Performance Analyzer.  I don't 
<br>
know how much, if any, is specific to MPI, but should be helpful.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9002.php">Luis Vitorio Cargnini: "[OMPI users] few Problems"</a>
<li><strong>Previous message:</strong> <a href="9000.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="8999.php">jody: "[OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9038.php">Tiago Almeida: "Re: [OMPI users] Open-MPI and gprof"</a>
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
