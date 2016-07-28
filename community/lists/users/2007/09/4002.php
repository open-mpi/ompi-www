<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 13 14:48:26 2007" -->
<!-- isoreceived="20070913184826" -->
<!-- sent="Thu, 13 Sep 2007 14:48:19 -0400" -->
<!-- isosent="20070913184819" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Documentation?" -->
<!-- id="B6E227A1-1F4E-4A82-9DBC-D56D5388BBF3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF97DCF84F.85C430B0-ON86257355.00601D4B-86257355.00604AB7_at_exxonmobil.com" -->
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
<strong>Date:</strong> 2007-09-13 14:48:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4003.php">Jeff Pummill: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="4001.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>In reply to:</strong> <a href="4001.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] OpenMPI Documentation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4003.php">Jeff Pummill: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Reply:</strong> <a href="4003.php">Jeff Pummill: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Reply:</strong> <a href="4004.php">Richard.Friedman_at_[hidden]: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Reply:</strong> <a href="4009.php">Paul Cochrane: "Re: [OMPI users] OpenMPI Documentation?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So there are at least a few people who are interested in this effort  
<br>
(keep chiming in if you are interested so that we can get a tally of  
<br>
who would like to be involved).
<br>
<p>What kind of resources / organization would be useful for this  
<br>
group?  Indiana University graciously hosts all of Open MPI's  
<br>
electronic resources (Subversion, web site, bug tracking, DNS,  
<br>
mailing lists, ...) and I certainly can't speak for them, but if we  
<br>
ask nicely, I'd be willing to bet that they would add some hosting  
<br>
services for a documentation project (if such additional resources  
<br>
would be helpful, of course).
<br>
<p>I would also be happy to host a teleconference if talking about all  
<br>
this start/admin stuff for an hour would save 1-2 weeks worth of  
<br>
detailed e-mails.
<br>
<p>-----
<br>
<p>The only current documentation we have is:
<br>
<p>- the web FAQ
<br>
- the README in the tarball
<br>
<p>What is conspicuously missing is a nice PDF and/or HTML tarball with  
<br>
comprehensive documentation.  But I think that FAQ/README also fit  
<br>
into the general category of documentation, so it might make sense to  
<br>
put all 3 of these items under the control of one group.  The obvious  
<br>
rationale here is that all three could stay in tighter sync if  
<br>
there's one group monitoring all 3.
<br>
<p>One point worth mentioning: Open MPI is all about community  
<br>
consensus, but &quot;s/he who implements usually wins&quot;.  :-)  So if we get  
<br>
an active group working on documentation, the FAQ could be totally re- 
<br>
done if the group so decides (for example).
<br>
<p>All this being said, the OMPI developers *have* talked about  
<br>
documentation a bit over time.  Here's some of the points from prior  
<br>
discussions, in no particular order:
<br>
<p>- It highly desirable to have documentation that can be output in  
<br>
multiple different forms (PDF, HTML, ...whatever).  If possible, the  
<br>
docs should be shipped in distribution tarballs and hosted on the  
<br>
OMPI web site.
<br>
<p>- LAM/MPI had two great docs: one for installation LAM/MPI and one  
<br>
for using LAM/MPI.  These might be good example documents for what  
<br>
Open MPI might want to do (see <a href="http://www.lam-mpi.org/using/docs/">http://www.lam-mpi.org/using/docs/</a>),  
<br>
regardless of the back-end technology used to generate the docs.   
<br>
Source LaTeX for these guides are available if it would be helpful (I  
<br>
wrote most of them).
<br>
<p>- It would be most helpful if the documentation is written in a tool  
<br>
that has free editors, preferably cross-platform and available in  
<br>
multiple POSIX-like environments (Solaris, Linux, OS X).  MS Office  
<br>
was explicitly rejected because of its requirement for Windows/OS X  
<br>
(other Office clones were not really discussed).  LaTeX was discussed  
<br>
but wasn't favored due to the steep learning curve and general lack  
<br>
of experience with it outside of academia.
<br>
<p>- First documentation should be aimed towards users.  Developer  
<br>
documentation might follow.
<br>
<p>- Once upon a time, we developers started to use doxygen for  
<br>
documentation, but it has proven to be lousy for book-like entities  
<br>
(IONSHO).  Doxygen is decent for code documentation, but not documents.
<br>
<p>- A few recent discussions about documentation came to the conclusion  
<br>
that Docbook (www.docbook.org) looked promising, but we didn't get  
<br>
deep into details / investigating the feasibility.  One obvious Big  
<br>
Project using Docbook is Subversion (see <a href="http://svnbook.red">http://svnbook.red</a>- 
<br>
bean.com/).  Docbook-produced HTML and PDF seem to look both pretty  
<br>
and functional.
<br>
<p>- It would also be nice if sub-distributions of Open MPI could take  
<br>
the documentation and -- in some defined automated fashion -- be able  
<br>
to do the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- insert their own &quot;chapters&quot; or &quot;sections&quot; that are specific to  
<br>
that sub-distribution (e.g., Sun ClusterTools have some Solaris- 
<br>
specific stuff, OFED have some OpenFabrics-specific stuff, etc.)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- remove/&quot;turn off&quot; specific sections of documentation (e.g.,  
<br>
OFED would likely not include any documentation about Myricom  
<br>
networks [and vice versa])
<br>
This would go a long ways towards being able to keep the community  
<br>
documentation in sync with docs included in targeted/vendor OMPI  
<br>
releases.
<br>
<p>- The OMPI web site is almost entirely written in PHP and is mirrored  
<br>
around the world.  It would be *strongly* preferred if the web-site  
<br>
hosting of the docs is fully mirror-able (because assumedly docs are  
<br>
one of the things that users would want to browse the most).  Hence,  
<br>
requiring a new kind of server other than HTML/PHP would require  
<br>
very, very strong rationale.  :-)
<br>
<p>- The technology of choice for displaying on the web site is PHP.   
<br>
But that still leaves open a wide variety of choices for serving docs  
<br>
via the web site, including (but not limited to):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- just posting PDFs (although having HTML-based docs would  
<br>
certainly be nice)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- a PHP-based package or home-grown PHP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- generating HTML offline (via cron or whatever) and putting the  
<br>
results in the web site
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ...etc.
<br>
<p><p><p><p>On Sep 13, 2007, at 1:31 PM, pat.o'bryant_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;      I would also be interested. I am getting questions from my  
</span><br>
<span class="quotelev1">&gt; customers
</span><br>
<span class="quotelev1">&gt; about the location of documentation.
</span><br>
<span class="quotelev1">&gt;              Thanks,
</span><br>
<span class="quotelev1">&gt;               Pat
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Jeff Squyres
</span><br>
<span class="quotelev1">&gt;              &lt;jsquyres_at_cisc
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt; o.com&gt;                                                     To
</span><br>
<span class="quotelev1">&gt;              Sent by:                 Open MPI Users &lt;users_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org&gt;
</span><br>
<span class="quotelev1">&gt;              users- 
</span><br>
<span class="quotelev1">&gt; bounces@                                             cc
</span><br>
<span class="quotelev1">&gt;              open-mpi.org             rchrd_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                                                                     
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt;                                       Re: [OMPI users] OpenMPI
</span><br>
<span class="quotelev1">&gt;              09/13/07 10:33           Documentation?
</span><br>
<span class="quotelev1">&gt;              AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Please respond
</span><br>
<span class="quotelev1">&gt;                    to
</span><br>
<span class="quotelev1">&gt;              Open MPI Users
</span><br>
<span class="quotelev1">&gt;              &lt;users_at_open-mp
</span><br>
<span class="quotelev1">&gt;                  i.org&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be very happy to help setup a documentation community --
</span><br>
<span class="quotelev1">&gt; goodness knows we need more/better documentation for Open MPI!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Who else would be interested?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 13, 2007, at 5:13 AM, Amit Kumar Saha wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Richard,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/12/07, Richard Friedman &lt;rchrd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Amit:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Well, as far as I know a documentation community within OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has not yet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been formed, but maybe it is time to send out a general call to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; members to see about creating one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I'm new to the OpenMPI community myself, so I'm not yet sure how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be done. But we can find out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks for the interest.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, some has to take the initiative, and it would be ideal to have
</span><br>
<span class="quotelev2">&gt;&gt; an experienced Open MPI programmer take the lead role and members  
</span><br>
<span class="quotelev2">&gt;&gt; like
</span><br>
<span class="quotelev2">&gt;&gt; me can be contributors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Amit
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Amit Kumar Saha
</span><br>
<span class="quotelev2">&gt;&gt; [URL]:<a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4003.php">Jeff Pummill: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="4001.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>In reply to:</strong> <a href="4001.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] OpenMPI Documentation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4003.php">Jeff Pummill: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Reply:</strong> <a href="4003.php">Jeff Pummill: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Reply:</strong> <a href="4004.php">Richard.Friedman_at_[hidden]: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Reply:</strong> <a href="4009.php">Paul Cochrane: "Re: [OMPI users] OpenMPI Documentation?"</a>
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
