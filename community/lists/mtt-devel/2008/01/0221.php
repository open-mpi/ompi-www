<?
$subject_val = "Re: [MTT devel] MTT Visualization";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 12:50:22 2008" -->
<!-- isoreceived="20080111175022" -->
<!-- sent="Fri, 11 Jan 2008 12:49:50 -0500" -->
<!-- isosent="20080111174950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT Visualization" -->
<!-- id="EAE6C381-98D7-473D-B070-27DF6AE29495_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="442898BF-FA70-45B7-BB1C-AD225E2FCB74_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 12:49:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0222.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>Previous message:</strong> <a href="0220.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>In reply to:</strong> <a href="0212.php">Josh Hursey: "[MTT devel] MTT Visualization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0222.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>Reply:</strong> <a href="0222.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2008, at 10:29 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; I met with Joseph Cottam (Grad student in my lab at IU) yesterday
</span><br>
<span class="quotelev1">&gt; about MTT visualization. He is working on some new visualization
</span><br>
<span class="quotelev1">&gt; techniques and wants to apply them to the MTT dataset.
</span><br>
<p>Awesome.
<br>
<p><span class="quotelev1">&gt; Since we are ramping up to a v1.3 release we want to visualization to
</span><br>
<span class="quotelev1">&gt; support this effort. So we want to make sure that the visualization
</span><br>
<span class="quotelev1">&gt; will meet the development community's needs. We should probably ask
</span><br>
<span class="quotelev1">&gt; the devel-core list, but I thought I would start some of the
</span><br>
<span class="quotelev1">&gt; discussion here to make sure I am asking the right questions of the
</span><br>
<span class="quotelev1">&gt; group.
</span><br>
<p>Sounds reasonable.
<br>
<p>After a first go-round here, we might want to have a conversation with  
<br>
the OMPI RM's to get their input - that would still be a small group  
<br>
to get targeted feedback on these questions.
<br>
<p><span class="quotelev1">&gt; To start I have some basic questions:
</span><br>
<span class="quotelev1">&gt;  - How does Open MPI determine that it is stable enough to release?
</span><br>
<p>I personally have a Magic 8 Ball on my desk that I consult frequently  
<br>
for questions like this.  ;-)
<br>
<p>It's a mix of many different metrics, actually:
<br>
<p>- stuff unrelated to MTT results:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- how many trac tickets are open against that release and do we care
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- how urgent are the bug fixes that are included
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- external requirements (e.g., get an OMPI release out to meet the  
<br>
OFED release schedule)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- ...and probably others
<br>
- related to MTT results
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- &quot;good&quot; coverage on platforms (where &quot;platform&quot; = host arch, OS,  
<br>
OS version, compiler, compiler version, MCA params, interconnect, and  
<br>
scheduler -- note that some of these are orthogonal from each other...)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- the only failures and timeouts we have are a) repeatable, b)  
<br>
consistent across multiple organizations (if relevant), and deemed to  
<br>
be acceptable
<br>
<p><span class="quotelev1">&gt;  - What dimensions of testing are most/least important (i.e.,
</span><br>
<span class="quotelev1">&gt; platforms, compilers, feature sets, scale, ...)?
</span><br>
<p>This is a hard question.  :-\  I listed several dimensions above:
<br>
<p>- host architecture
<br>
- OS
<br>
- OS version
<br>
- compiler
<br>
- compiler version
<br>
- MCA parameters used
<br>
- interconnect
<br>
- scheduler
<br>
<p>Here's some more:
<br>
<p>- number of processes tested
<br>
- layout of processes (by node, by proc, ...etc.)
<br>
<p>I don't quite know how to order those in terms of priority.  :-\
<br>
<p><span class="quotelev1">&gt;  - What other questions would be useful to answer with regard to
</span><br>
<span class="quotelev1">&gt; testing (thinking completely outside of the box)?
</span><br>
<span class="quotelev1">&gt;    * Example: Are we testing a specific platform/configuration set
</span><br>
<span class="quotelev1">&gt; too much/too little?
</span><br>
<p>This is a great question.
<br>
<p>I would love to be able to configure this question -- e.g., are we  
<br>
testing some MCA params too much/too little.
<br>
<p>The performance stuff can always be visualized better, especially over  
<br>
time. One idea is expressed in <a href="https://svn.open-mpi.org/trac/mtt/ticket/330">https://svn.open-mpi.org/trac/mtt/ticket/330</a> 
<br>
.
<br>
<p>I also very much like the ideas in <a href="https://svn.open-mpi.org/trac/mtt/ticket/236">https://svn.open-mpi.org/trac/mtt/ticket/236</a> 
<br>
&nbsp;&nbsp;and <a href="https://svn.open-mpi.org/trac/mtt/ticket/302">https://svn.open-mpi.org/trac/mtt/ticket/302</a> (302 is not  
<br>
expressed as a visualization issue, but it could be -- you can imagine  
<br>
a tree-based display showing the relationships between phase results,  
<br>
perhaps even incorporated with a timeline -- that would be awesome).
<br>
<p>Here's a whacky idea -- can our MTT data be combined with SCM data  
<br>
(SVN, in this case) to answer questions like:
<br>
<p>- what parts of the code are the most troublesome?  i.e., when this  
<br>
part of the code changes, these tests tend to break
<br>
<p>- what tests seem to be related to what parts of the OMPI code base?
<br>
<p>- who / what SVN commit(s) seemed to cause specific tests to break?
<br>
<p>(this seems like a longer-term set of questions, but I thought I'd  
<br>
bring it up...)
<br>
<p><span class="quotelev1">&gt;  - Other questions you think we should pose to the group?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are currently feeling out the domain of possibilities, but hope to
</span><br>
<span class="quotelev1">&gt; start doing some sketching some ideas in another week or so. This work
</span><br>
<span class="quotelev1">&gt; should proceed fairly quickly since we are targeting a paper about
</span><br>
<span class="quotelev1">&gt; this for the ACM Symposium on Software Visualization (<a href="http://www.softvis.org/">http://www.softvis.org/</a>
</span><br>
<span class="quotelev1">&gt; ) which is due in early April. How is that for expecting success :)
</span><br>
<p>Awesome.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0222.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>Previous message:</strong> <a href="0220.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>In reply to:</strong> <a href="0212.php">Josh Hursey: "[MTT devel] MTT Visualization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0222.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>Reply:</strong> <a href="0222.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
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
