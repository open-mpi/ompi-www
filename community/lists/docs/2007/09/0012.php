<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 06:55:19 2007" -->
<!-- isoreceived="20070918105519" -->
<!-- sent="Tue, 18 Sep 2007 06:55:11 -0400" -->
<!-- isosent="20070918105511" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] So what's the plan?" -->
<!-- id="D92A4E2C-15EE-4CE0-9E9C-ADDDBA63A1AB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0709180238u7e8731f7yce0f414c1652a20f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-09-18 06:55:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0013.php">Jeff Squyres: "Re: [OMPI docs] subject header"</a>
<li><strong>Previous message:</strong> <a href="0011.php">jody: "[OMPI docs] subject header"</a>
<li><strong>In reply to:</strong> <a href="0010.php">jody: "[OMPI docs] So what's the plan?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0019.php">Richard Friedman: "Re: [OMPI docs] So what's the plan?"</a>
<li><strong>Reply:</strong> <a href="0019.php">Richard Friedman: "Re: [OMPI docs] So what's the plan?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 18, 2007, at 5:38 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; I was just wondering how we'll start this documentation.
</span><br>
<p>BTW, before we get started, I want to make one thing very, very  
<br>
clear: it's &quot;Open MPI&quot;.  Two words.  Not one word smushed together.   
<br>
A lot of people get it wrong, but it's a brand, and in the official  
<br>
OMPI documentation, we must get this right.  :-)
<br>
<p>-------------
<br>
<p>I think we need a few procedural / logistics worked out first; some  
<br>
are simple, some require a little more thought.  I was kinda hoping  
<br>
that Richard Friedman would take the lead here.  :-)
<br>
<p>Here's some thoughts on things that we'll need to decide before we  
<br>
get rolling:
<br>
<p>1. SVN repository name.  &quot;ompi-docs&quot; is already used, so we'll need  
<br>
to pick another.
<br>
<p>2. Which technology to use for the documentation.  I think Richard  
<br>
has lots of experience here, so I'll let him expound on it.
<br>
<p>3. How to allow people to join/contribute -- there's some legal/ 
<br>
intellectual property issues here that I'll look into (IANAL, but my  
<br>
understanding is that contributing docs is different than  
<br>
contributing code).
<br>
<p>4. What process(es) and standards will be used to create and verify  
<br>
the documentation.
<br>
<p>5. What process(es) will be used to maintain the docs over time  
<br>
(e.g., ensure that they are up-to-date in time for a release, etc.).   
<br>
There will need to be some integration with the Open MPI developer  
<br>
community -- I'm here to help facilitate that.
<br>
<p>6. What document(s), exactly, are we going to produce.
<br>
<p><span class="quotelev1">&gt; I think to begin with, we need something like a table of contents.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess some areas we should cover are
</span><br>
<span class="quotelev1">&gt; - general introduction to the MPI model
</span><br>
<span class="quotelev1">&gt; - about MPI implementations
</span><br>
<span class="quotelev1">&gt; - about the structure of OpenMPI - brief explanation of orte, mca,  
</span><br>
<span class="quotelev1">&gt; opal etc
</span><br>
<span class="quotelev1">&gt; - installing OpenMPI (much can be taken from the FAQ)
</span><br>
<span class="quotelev1">&gt;   This should include good descriptions of all parameters for the
</span><br>
<span class="quotelev1">&gt; configure command
</span><br>
<span class="quotelev1">&gt;   as well as sections for systems with particular ways for  
</span><br>
<span class="quotelev1">&gt; installation
</span><br>
<span class="quotelev1">&gt; - compiling OpenMPI (much can be taken from the FAQ)
</span><br>
<span class="quotelev1">&gt; - running OpenMPI (much can be taken from the FAQ)
</span><br>
<span class="quotelev1">&gt; - tuning OpenMPI performance
</span><br>
<p>FWIW, there might be value in having more than one document:
<br>
<p>- compiling / installing Open MPI: a document for sysadmins / cluster  
<br>
installers
<br>
- using Open MPI: a document for end-users
<br>
<p>We did this for LAM/MPI and it was quite handy.  I'm not necessarily  
<br>
tied to this idea -- I just toss it out to the group to see what  
<br>
people think.
<br>
<p><span class="quotelev1">&gt; Perhaps something like a tutorial would be useful:
</span><br>
<span class="quotelev1">&gt; Designing, implementing and running a simple but nnon-trivial
</span><br>
<span class="quotelev1">&gt; MPI-application, introducing some of the basic MPI commands.
</span><br>
<p>This could be useful, but let's limit the MPI aspect of it (there are  
<br>
other MPI tutorials available on the net -- let's not try to  
<br>
duplicate those); let's have it focus more on the Open MPI-specific  
<br>
aspects.  Perhaps we can show the canonical &quot;hello world&quot; and/or  
<br>
&quot;ring&quot; applications in all 4 supported languages.
<br>
<p><span class="quotelev1">&gt; Any other ideas?
</span><br>
<span class="quotelev1">&gt; Should we also include a MPI-reference or should we simply
</span><br>
<span class="quotelev1">&gt; refer to the man-pages or the books?
</span><br>
<p>At least to start, I think we should refer to the man pages and other  
<br>
resources.
<br>
<p>My $0.02...
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
<li><strong>Next message:</strong> <a href="0013.php">Jeff Squyres: "Re: [OMPI docs] subject header"</a>
<li><strong>Previous message:</strong> <a href="0011.php">jody: "[OMPI docs] subject header"</a>
<li><strong>In reply to:</strong> <a href="0010.php">jody: "[OMPI docs] So what's the plan?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0019.php">Richard Friedman: "Re: [OMPI docs] So what's the plan?"</a>
<li><strong>Reply:</strong> <a href="0019.php">Richard Friedman: "Re: [OMPI docs] So what's the plan?"</a>
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
