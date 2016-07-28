<?
$subject_val = "Re: [MTT devel] MTT Visualization";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 14:24:30 2008" -->
<!-- isoreceived="20080111192430" -->
<!-- sent="Fri, 11 Jan 2008 14:24:22 -0500" -->
<!-- isosent="20080111192422" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT Visualization" -->
<!-- id="65F9E670-9C83-4000-80A7-71CCB7B25AF3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080111182929.GT17034_at_sun.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 14:24:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0224.php">Ethan Mallove: "[MTT devel] Crazy SkaMPI graph rendering"</a>
<li><strong>Previous message:</strong> <a href="0222.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>In reply to:</strong> <a href="0222.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 11, 2008, at 1:29 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Jan/11/2008 12:49:50PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 10, 2008, at 10:29 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since we are ramping up to a v1.3 release we want to visualization  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support this effort. So we want to make sure that the visualization
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will meet the development community's needs. We should probably ask
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the devel-core list, but I thought I would start some of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; discussion here to make sure I am asking the right questions of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; group.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds reasonable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After a first go-round here, we might want to have a conversation  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; the OMPI RM's to get their input - that would still be a small group
</span><br>
<span class="quotelev2">&gt;&gt; to get targeted feedback on these questions.
</span><br>
<p>This sounds good to me.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To start I have some basic questions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - How does Open MPI determine that it is stable enough to release?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I personally have a Magic 8 Ball on my desk that I consult frequently
</span><br>
<span class="quotelev2">&gt;&gt; for questions like this.  ;-)
</span><br>
<p>Does it have an OMPI sticker on it? :)
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's a mix of many different metrics, actually:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - stuff unrelated to MTT results:
</span><br>
<span class="quotelev2">&gt;&gt;    - how many trac tickets are open against that release and do we  
</span><br>
<span class="quotelev2">&gt;&gt; care
</span><br>
<span class="quotelev2">&gt;&gt;    - how urgent are the bug fixes that are included
</span><br>
<span class="quotelev2">&gt;&gt;    - external requirements (e.g., get an OMPI release out to meet the
</span><br>
<span class="quotelev2">&gt;&gt; OFED release schedule)
</span><br>
<span class="quotelev2">&gt;&gt;    - ...and probably others
</span><br>
<p>I realize that this is just to complete the list, but we may be able  
<br>
to (one day in the distant future) link some of the Trac tickets with  
<br>
MTT testing. This would allow us, for example, to have a link from a  
<br>
Trac ticket to a special MTT reporter page that show how well testing  
<br>
for this bug is going, and who is testing it (or working on it). Just  
<br>
something to kick around, but it might be neat if MTT and Trac could  
<br>
play better together one day.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - related to MTT results
</span><br>
<span class="quotelev2">&gt;&gt;    - &quot;good&quot; coverage on platforms (where &quot;platform&quot; = host arch, OS,
</span><br>
<span class="quotelev2">&gt;&gt; OS version, compiler, compiler version, MCA params, interconnect, and
</span><br>
<span class="quotelev2">&gt;&gt; scheduler -- note that some of these are orthogonal from each  
</span><br>
<span class="quotelev2">&gt;&gt; other...)
</span><br>
<p>I think this is the one we are going to focus on in this first pass.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    - the only failures and timeouts we have are a) repeatable, b)
</span><br>
<span class="quotelev2">&gt;&gt; consistent across multiple organizations (if relevant), and deemed to
</span><br>
<span class="quotelev2">&gt;&gt; be acceptable
</span><br>
<p>We might be able to help highlight this situation. I'll have to think  
<br>
about it a bit more.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - What dimensions of testing are most/least important (i.e.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; platforms, compilers, feature sets, scale, ...)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a hard question.  :-\  I listed several dimensions above:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - host architecture
</span><br>
<span class="quotelev2">&gt;&gt; - OS
</span><br>
<span class="quotelev2">&gt;&gt; - OS version
</span><br>
<span class="quotelev2">&gt;&gt; - compiler
</span><br>
<span class="quotelev2">&gt;&gt; - compiler version
</span><br>
<span class="quotelev2">&gt;&gt; - MCA parameters used
</span><br>
<span class="quotelev2">&gt;&gt; - interconnect
</span><br>
<span class="quotelev2">&gt;&gt; - scheduler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's some more:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - number of processes tested
</span><br>
<span class="quotelev2">&gt;&gt; - layout of processes (by node, by proc, ...etc.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't quite know how to order those in terms of priority.  :-\
</span><br>
<p>I think that for some of these characteristics it will be feature  
<br>
dependent. We may end up with a few lists:
<br>
&nbsp;&nbsp;- General acceptance for all the normal chases and default feature  
<br>
sets.
<br>
&nbsp;&nbsp;- A set of configurations that must pass for opt-in feature X
<br>
&nbsp;&nbsp;- A set of configurations that must pass for opt-in feature Y
<br>
&nbsp;&nbsp;- ...
<br>
<p>Each list may have a different visualization associated with it. So we  
<br>
can say that in the normal use case everything is fine, but when we  
<br>
test with feature X then these N tests fail. Then we can determine if  
<br>
feature X is important enough to delay release.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - What other questions would be useful to answer with regard to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing (thinking completely outside of the box)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * Example: Are we testing a specific platform/configuration set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; too much/too little?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a great question.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would love to be able to configure this question -- e.g., are we
</span><br>
<span class="quotelev2">&gt;&gt; testing some MCA params too much/too little.
</span><br>
<p>This is the one question we have been talking about the most. With the  
<br>
visualization that Joseph was talking with me about it seems like a  
<br>
natural fit. It would help us to determine how to best organize our  
<br>
testing efforts so we don't waist time over testing something while  
<br>
under testing something else.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The performance stuff can always be visualized better, especially  
</span><br>
<span class="quotelev2">&gt;&gt; over
</span><br>
<span class="quotelev2">&gt;&gt; time. One idea is expressed in <a href="https://svn.open-mpi.org/trac/mtt/ticket/330">https://svn.open-mpi.org/trac/mtt/ticket/330</a>
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also very much like the ideas in <a href="https://svn.open-mpi.org/trac/mtt/ticket/236">https://svn.open-mpi.org/trac/mtt/ticket/236</a>
</span><br>
<span class="quotelev2">&gt;&gt;  and <a href="https://svn.open-mpi.org/trac/mtt/ticket/302">https://svn.open-mpi.org/trac/mtt/ticket/302</a> (302 is not
</span><br>
<span class="quotelev2">&gt;&gt; expressed as a visualization issue, but it could be -- you can  
</span><br>
<span class="quotelev2">&gt;&gt; imagine
</span><br>
<span class="quotelev2">&gt;&gt; a tree-based display showing the relationships between phase results,
</span><br>
<span class="quotelev2">&gt;&gt; perhaps even incorporated with a timeline -- that would be awesome).
</span><br>
<p>These are good ideas.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's a whacky idea -- can our MTT data be combined with SCM data
</span><br>
<span class="quotelev2">&gt;&gt; (SVN, in this case) to answer questions like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - what parts of the code are the most troublesome?  i.e., when this
</span><br>
<span class="quotelev2">&gt;&gt; part of the code changes, these tests tend to break
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - what tests seem to be related to what parts of the OMPI code base?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - who / what SVN commit(s) seemed to cause specific tests to break?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (this seems like a longer-term set of questions, but I thought I'd
</span><br>
<span class="quotelev2">&gt;&gt; bring it up...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I like this idea :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A level of redirection missing to do this is keying SVN r
</span><br>
<span class="quotelev1">&gt; numbers to files modified. We also need to be able to
</span><br>
<span class="quotelev1">&gt; somehow track *new* failures (see
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/mtt/ticket/70">https://svn.open-mpi.org/trac/mtt/ticket/70</a>). E.g., &quot;was it
</span><br>
<span class="quotelev1">&gt; *this* revision that broke test xyz or was it an older one?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is a neat idea, and certainly possible. This may be easier than  
<br>
one would expect. I know Joseph has a fair amount of experience mining  
<br>
similar Sourceforge data to answer some related questions, so he may  
<br>
have some ideas here.
<br>
<p>I CC'ed Joseph on this email so he can see some of the questions being  
<br>
posed. Joseph feel free to subscribe to the mtt-devel list if you want  
<br>
to. It is (I believe) just Ethan, Jeff, and myself and is fairly low  
<br>
traffic.
<br>
<p>Keep the suggestions coming if you think of any more.
<br>
<p>Cheers,
<br>
Josh
<br>
<p><span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0224.php">Ethan Mallove: "[MTT devel] Crazy SkaMPI graph rendering"</a>
<li><strong>Previous message:</strong> <a href="0222.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>In reply to:</strong> <a href="0222.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<!-- nextthread="start" -->
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
