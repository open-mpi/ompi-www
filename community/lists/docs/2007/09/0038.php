<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 16:44:44 2007" -->
<!-- isoreceived="20070920204444" -->
<!-- sent="Thu, 20 Sep 2007 16:44:12 -0400" -->
<!-- isosent="20070920204412" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] So what's the plan?" -->
<!-- id="66912079-4AA8-4713-90C4-43837EF968EC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46F1F1DA.6000103_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-20 16:44:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0039.php">Jeff Squyres: "Re: [OMPI docs] Open MPI Docs Structure - My thoughts"</a>
<li><strong>Previous message:</strong> <a href="0037.php">Jeff Squyres: "Re: [OMPI docs] Contributing documentation"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Richard Friedman: "Re: [OMPI docs] So what's the plan?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0040.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] So what's the plan?"</a>
<li><strong>Reply:</strong> <a href="0040.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] So what's the plan?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 20, 2007, at 12:06 AM, Richard Friedman wrote:
<br>
<p><span class="quotelev1">&gt; Jeff is working to create an infrastructure of a docs project  
</span><br>
<span class="quotelev1">&gt; within the open-mpi.org. We should have a formal project  
</span><br>
<span class="quotelev1">&gt; established real soon.
</span><br>
<p>We have an SVN:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;http[s]://svn.open-mpi.org/svn/ompi-user-docs
<br>
<p>The [s] is only necessary for authenticated checkouts (i.e., those  
<br>
who will be committing).
<br>
<p>The Trac is almost functional -- there seems to be a problem with the  
<br>
login right now (the cookies seem to be conflicting with the cookies  
<br>
for the main OMPI trac; I'm probably the only person that this is a  
<br>
problem for ;-) ):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi-user-docs">https://svn.open-mpi.org/trac/ompi-user-docs</a>
<br>
<p>Your trac username/password are the same as your SVN username/password.
<br>
<p><span class="quotelev1">&gt; Meantime, I'm doing some research to find out what are the right  
</span><br>
<span class="quotelev1">&gt; tools to consider for collaborative docs development. And tomorrow  
</span><br>
<span class="quotelev1">&gt; (Thurs) I'm meeting with one of our experts on DITA (Darwin  
</span><br>
<span class="quotelev1">&gt; Information Typing Architecture) at Sun. There are a number of  
</span><br>
<span class="quotelev1">&gt; free, open source, tools for authoring, building, maintaining, and  
</span><br>
<span class="quotelev1">&gt; publishing various kinds of documents collaboratively. There's  
</span><br>
<span class="quotelev1">&gt; DITA, docbook, and maybe more. (I'm pretty sure we don't want to  
</span><br>
<span class="quotelev1">&gt; use TeX)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Personally, I haven't kept up with recent developments so I'm  
</span><br>
<span class="quotelev1">&gt; giving myself a crash course in all this, and it's quite a lot to  
</span><br>
<span class="quotelev1">&gt; take in. I should have something to say about tools next week.
</span><br>
<p>Excellent.  We had some off-list mail about this (before the mail was  
<br>
setup) and you sent me some URL pointers about DITA, etc.  Could you  
<br>
re-send those so that others can see what you're talking about?
<br>
<p><span class="quotelev1">&gt; The next steps might be to figure out rules of engagement, what  
</span><br>
<span class="quotelev1">&gt; needs to be done, organize teams around tasks, and set up some kind  
</span><br>
<span class="quotelev1">&gt; of milestones. The goal is to provide a complete (or, as complete  
</span><br>
<span class="quotelev1">&gt; as possible) set of user documentation for Open MPI that is  
</span><br>
<span class="quotelev1">&gt; accurate, manageable, extensible, yadda, yadda.
</span><br>
<p>Hear, hear.
<br>
<p><span class="quotelev1">&gt; Lots of questions rush immediately to mind, like:
</span><br>
<span class="quotelev1">&gt; What should be in the user doc set?
</span><br>
<span class="quotelev1">&gt; reference manual
</span><br>
<span class="quotelev1">&gt; user guide
</span><br>
<span class="quotelev1">&gt; man pages
</span><br>
<span class="quotelev1">&gt; tutorials
</span><br>
<span class="quotelev1">&gt; release notes
</span><br>
<span class="quotelev1">&gt; code examples
</span><br>
<span class="quotelev1">&gt; Where do we stand with regard to the &quot;official&quot; MPI documents from  
</span><br>
<span class="quotelev1">&gt; mpi-forum.org?
</span><br>
<p>I'm for not including those.  That information is the spec for MPI  
<br>
implementations.  Our man page have very stripped-down text from the  
<br>
spec for each MPI function, but then add in any OMPI-specific  
<br>
information as relevant.  I think that's probably as far as we should  
<br>
do -- let mpi-forum.org produce the spec documents (there's actually  
<br>
work under way to update the in the larger MPI community -- not an  
<br>
Open MPI-specific effort).
<br>
<p><span class="quotelev1">&gt; Can we cut/paste and edit content from the 2.x reports into an Open  
</span><br>
<span class="quotelev1">&gt; MPI reference? Or do we have to worry about copyrighted content?   
</span><br>
<span class="quotelev1">&gt; Who &quot;owns&quot; the content currently?
</span><br>
<span class="quotelev1">&gt; How do we keep in sync with the &quot;official&quot; MPI documents.
</span><br>
<p>Per above, I don't think we need to worry about this.
<br>
<p><span class="quotelev1">&gt; Is there a chance that Open MPI will become the official MPI? (Or  
</span><br>
<span class="quotelev1">&gt; am I being too naive?)
</span><br>
<p>Probably not.  There's still a lot of vendor / proprietary MPI's out  
<br>
there that won't go away any time soon.  Open MPI has reduced the  
<br>
number of MPI's, but there's still a bunch.
<br>
<p><span class="quotelev1">&gt; What are the deltas between &quot;official&quot; MPI 2.x and Open MPI? And  
</span><br>
<span class="quotelev1">&gt; how do we document this?
</span><br>
<p>I'm not sure I understand this question...?  MPI 2.x is a spec; Open  
<br>
MPI is an implementation of that spec.
<br>
<p><span class="quotelev1">&gt; As I said in an earlier email today, I'm new to this community and  
</span><br>
<span class="quotelev1">&gt; I'm not fully aware of its dynamics, how it works, who the people  
</span><br>
<span class="quotelev1">&gt; are, and what to expect. But, I'm in the door. This all started a  
</span><br>
<span class="quotelev1">&gt; few weeks ago when I told my manager that I needed to find out more  
</span><br>
<span class="quotelev1">&gt; about our (Sun's) ClusterTools, which is based on Open MPI, because  
</span><br>
<span class="quotelev1">&gt; it is an important part of Sun's HPC software stack. This led me to  
</span><br>
<span class="quotelev1">&gt; open-mpi.org, looking for the documentation. The ClusterTools  
</span><br>
<span class="quotelev1">&gt; documentation only describes how to use the ClusterTools package,  
</span><br>
<span class="quotelev1">&gt; not how to program with Open MPI.  Which is appropriate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But Sun is committed to working with open source communities, and  
</span><br>
<span class="quotelev1">&gt; so my manager gave me the green light to go ahead and see if a docs  
</span><br>
<span class="quotelev1">&gt; project could be started.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm glad to see that a number of people are out there interested in  
</span><br>
<span class="quotelev1">&gt; doing something in this area. The devil's in the details, but so's  
</span><br>
<span class="quotelev1">&gt; the fun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We may be a bit slow in getting things to the point where we're  
</span><br>
<span class="quotelev1">&gt; writing and putting back content, but we're going to get there.  
</span><br>
<span class="quotelev1">&gt; First, lets set up a working framework so things go smoothly.
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev1">&gt; But here's a question we might want to discuss among ourselves over  
</span><br>
<span class="quotelev1">&gt; email in the meantime:
</span><br>
<span class="quotelev1">&gt; I'm curious to find out how you (or programmers you know who are  
</span><br>
<span class="quotelev1">&gt; using MPI in some form or another) learn about MPI. Where do you/ 
</span><br>
<span class="quotelev1">&gt; they go to develop these skills? What books/articles/courses do  
</span><br>
<span class="quotelev1">&gt; people use?  Programmers are not born with innate knowledge of MPI.  
</span><br>
<span class="quotelev1">&gt; So where to they attain those skills.
</span><br>
<p>Ah -- I think that there are 3 main topics here:
<br>
<p>1. Knowledge of the MPI spec itself (&quot;book knowledge&quot;)
<br>
2. Knowledge of how to write MPI applications (&quot;practical knowledge&quot;)
<br>
3. Knowledge of how to use a particular MPI implementation, such as  
<br>
Open MPI (&quot;applied knowledge&quot;)
<br>
<p>I assumed we were only talking about #3.  Per your discussion above,  
<br>
I'm thinking that you also want to document #1 and #2.
<br>
<p>I think we don't want to replicate #1.  www.mpi-forum.org is The  
<br>
Bible and there is a larger group working on an update (MPI 2.1,  
<br>
etc.).  I think that those documents should stand alone by themselves.
<br>
<p>#2 is usually covered by existing books and various tutorials on the  
<br>
net.  Someone cited the NCSA tutorial, which is one of my favorite to  
<br>
point newbies to, as well.  My $0.02 is that we can include some  
<br>
basic examples of MPI programming in this project, but the real focus  
<br>
should be #3: how do you use Open MPI itself.
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
<li><strong>Next message:</strong> <a href="0039.php">Jeff Squyres: "Re: [OMPI docs] Open MPI Docs Structure - My thoughts"</a>
<li><strong>Previous message:</strong> <a href="0037.php">Jeff Squyres: "Re: [OMPI docs] Contributing documentation"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Richard Friedman: "Re: [OMPI docs] So what's the plan?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0040.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] So what's the plan?"</a>
<li><strong>Reply:</strong> <a href="0040.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] So what's the plan?"</a>
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
