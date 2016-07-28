<?
$subject_val = "Re: [MTT devel] MTT Visualization";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 13:29:37 2008" -->
<!-- isoreceived="20080111182937" -->
<!-- sent="Fri, 11 Jan 2008 13:29:30 -0500" -->
<!-- isosent="20080111182930" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT Visualization" -->
<!-- id="20080111182929.GT17034_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EAE6C381-98D7-473D-B070-27DF6AE29495_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT Visualization<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 13:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0223.php">Josh Hursey: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>Previous message:</strong> <a href="0221.php">Jeff Squyres: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>In reply to:</strong> <a href="0221.php">Jeff Squyres: "Re: [MTT devel] MTT Visualization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0223.php">Josh Hursey: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>Reply:</strong> <a href="0223.php">Josh Hursey: "Re: [MTT devel] MTT Visualization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jan/11/2008 12:49:50PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 10, 2008, at 10:29 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I met with Joseph Cottam (Grad student in my lab at IU) yesterday
</span><br>
<span class="quotelev2">&gt; &gt; about MTT visualization. He is working on some new visualization
</span><br>
<span class="quotelev2">&gt; &gt; techniques and wants to apply them to the MTT dataset.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Awesome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Since we are ramping up to a v1.3 release we want to visualization to
</span><br>
<span class="quotelev2">&gt; &gt; support this effort. So we want to make sure that the visualization
</span><br>
<span class="quotelev2">&gt; &gt; will meet the development community's needs. We should probably ask
</span><br>
<span class="quotelev2">&gt; &gt; the devel-core list, but I thought I would start some of the
</span><br>
<span class="quotelev2">&gt; &gt; discussion here to make sure I am asking the right questions of the
</span><br>
<span class="quotelev2">&gt; &gt; group.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sounds reasonable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After a first go-round here, we might want to have a conversation with  
</span><br>
<span class="quotelev1">&gt; the OMPI RM's to get their input - that would still be a small group  
</span><br>
<span class="quotelev1">&gt; to get targeted feedback on these questions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; To start I have some basic questions:
</span><br>
<span class="quotelev2">&gt; &gt;  - How does Open MPI determine that it is stable enough to release?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I personally have a Magic 8 Ball on my desk that I consult frequently  
</span><br>
<span class="quotelev1">&gt; for questions like this.  ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's a mix of many different metrics, actually:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - stuff unrelated to MTT results:
</span><br>
<span class="quotelev1">&gt;     - how many trac tickets are open against that release and do we care
</span><br>
<span class="quotelev1">&gt;     - how urgent are the bug fixes that are included
</span><br>
<span class="quotelev1">&gt;     - external requirements (e.g., get an OMPI release out to meet the  
</span><br>
<span class="quotelev1">&gt; OFED release schedule)
</span><br>
<span class="quotelev1">&gt;     - ...and probably others
</span><br>
<span class="quotelev1">&gt; - related to MTT results
</span><br>
<span class="quotelev1">&gt;     - &quot;good&quot; coverage on platforms (where &quot;platform&quot; = host arch, OS,  
</span><br>
<span class="quotelev1">&gt; OS version, compiler, compiler version, MCA params, interconnect, and  
</span><br>
<span class="quotelev1">&gt; scheduler -- note that some of these are orthogonal from each other...)
</span><br>
<span class="quotelev1">&gt;     - the only failures and timeouts we have are a) repeatable, b)  
</span><br>
<span class="quotelev1">&gt; consistent across multiple organizations (if relevant), and deemed to  
</span><br>
<span class="quotelev1">&gt; be acceptable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  - What dimensions of testing are most/least important (i.e.,
</span><br>
<span class="quotelev2">&gt; &gt; platforms, compilers, feature sets, scale, ...)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a hard question.  :-\  I listed several dimensions above:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - host architecture
</span><br>
<span class="quotelev1">&gt; - OS
</span><br>
<span class="quotelev1">&gt; - OS version
</span><br>
<span class="quotelev1">&gt; - compiler
</span><br>
<span class="quotelev1">&gt; - compiler version
</span><br>
<span class="quotelev1">&gt; - MCA parameters used
</span><br>
<span class="quotelev1">&gt; - interconnect
</span><br>
<span class="quotelev1">&gt; - scheduler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's some more:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - number of processes tested
</span><br>
<span class="quotelev1">&gt; - layout of processes (by node, by proc, ...etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't quite know how to order those in terms of priority.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  - What other questions would be useful to answer with regard to
</span><br>
<span class="quotelev2">&gt; &gt; testing (thinking completely outside of the box)?
</span><br>
<span class="quotelev2">&gt; &gt;    * Example: Are we testing a specific platform/configuration set
</span><br>
<span class="quotelev2">&gt; &gt; too much/too little?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a great question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would love to be able to configure this question -- e.g., are we  
</span><br>
<span class="quotelev1">&gt; testing some MCA params too much/too little.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The performance stuff can always be visualized better, especially over  
</span><br>
<span class="quotelev1">&gt; time. One idea is expressed in <a href="https://svn.open-mpi.org/trac/mtt/ticket/330">https://svn.open-mpi.org/trac/mtt/ticket/330</a> 
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also very much like the ideas in <a href="https://svn.open-mpi.org/trac/mtt/ticket/236">https://svn.open-mpi.org/trac/mtt/ticket/236</a> 
</span><br>
<span class="quotelev1">&gt;   and <a href="https://svn.open-mpi.org/trac/mtt/ticket/302">https://svn.open-mpi.org/trac/mtt/ticket/302</a> (302 is not  
</span><br>
<span class="quotelev1">&gt; expressed as a visualization issue, but it could be -- you can imagine  
</span><br>
<span class="quotelev1">&gt; a tree-based display showing the relationships between phase results,  
</span><br>
<span class="quotelev1">&gt; perhaps even incorporated with a timeline -- that would be awesome).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a whacky idea -- can our MTT data be combined with SCM data  
</span><br>
<span class="quotelev1">&gt; (SVN, in this case) to answer questions like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - what parts of the code are the most troublesome?  i.e., when this  
</span><br>
<span class="quotelev1">&gt; part of the code changes, these tests tend to break
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - what tests seem to be related to what parts of the OMPI code base?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - who / what SVN commit(s) seemed to cause specific tests to break?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (this seems like a longer-term set of questions, but I thought I'd  
</span><br>
<span class="quotelev1">&gt; bring it up...)
</span><br>
<p><p>I like this idea :-) 
<br>
<p>A level of redirection missing to do this is keying SVN r
<br>
numbers to files modified. We also need to be able to
<br>
somehow track *new* failures (see
<br>
<a href="https://svn.open-mpi.org/trac/mtt/ticket/70">https://svn.open-mpi.org/trac/mtt/ticket/70</a>). E.g., &quot;was it
<br>
*this* revision that broke test xyz or was it an older one?&quot;
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  - Other questions you think we should pose to the group?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We are currently feeling out the domain of possibilities, but hope to
</span><br>
<span class="quotelev2">&gt; &gt; start doing some sketching some ideas in another week or so. This work
</span><br>
<span class="quotelev2">&gt; &gt; should proceed fairly quickly since we are targeting a paper about
</span><br>
<span class="quotelev2">&gt; &gt; this for the ACM Symposium on Software Visualization (<a href="http://www.softvis.org/">http://www.softvis.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt; ) which is due in early April. How is that for expecting success :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Awesome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0223.php">Josh Hursey: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>Previous message:</strong> <a href="0221.php">Jeff Squyres: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>In reply to:</strong> <a href="0221.php">Jeff Squyres: "Re: [MTT devel] MTT Visualization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0223.php">Josh Hursey: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>Reply:</strong> <a href="0223.php">Josh Hursey: "Re: [MTT devel] MTT Visualization"</a>
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
