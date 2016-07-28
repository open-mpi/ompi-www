<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 14:51:45 2013" -->
<!-- isoreceived="20130522185145" -->
<!-- sent="Wed, 22 May 2013 11:51:24 -0700" -->
<!-- isosent="20130522185124" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers" -->
<!-- id="CAAvDA161ugQwMASsazLnXA6HwDpRwXVHUs2KmgBQMfd4UUtpRA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CDC25160.1149F%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 14:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12415.php">João Zeni: "[OMPI devel] In reply to: Re:  [EXTERNAL] Re: Porting Open MPI"</a>
<li><strong>Previous message:</strong> <a href="12413.php">George Bosilca: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>In reply to:</strong> <a href="12411.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12416.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>Reply:</strong> <a href="12416.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me jump in here with a different perspective.
<br>
First, for those who don't know me:
<br>
&nbsp;&nbsp;+ I am NOT an OMPI developer
<br>
&nbsp;&nbsp;+ I am NOT an MPI application author either
<br>
&nbsp;&nbsp;+ I am a developer of &quot;competing&quot; HPC communications software (GASNet)
<br>
&nbsp;&nbsp;+ I contribute to OMPI mainly by building release candidates on
<br>
my menagerie of test systems
<br>
&nbsp;&nbsp;+ I less frequently contribute bug reports and patches (and opinions like
<br>
this one)
<br>
<p>As a developer myself, I agree that the maintainability problem that Jeff
<br>
and Craig are trying to address is an important one.
<br>
<p>I understand the concerns that Ralph has expressed and Brian has echoed,
<br>
but I do not fully agree.
<br>
<p>I do agree that *if* one picks a scripting language for build-time tasks
<br>
(configure and/or make), the there should really be only one unless there
<br>
is a really good motivation for more.  But if I understood, the bigger
<br>
issue than perl-vs-python is that perl has so far only be required for
<br>
folks who need to autogen but not for users who just build from a tarball.
<br>
<p>In my opinion any &quot;user&quot; who is going to build an MPI implementation should
<br>
be capable of installing the reasonable &quot;build dependencies&quot;, whether it be
<br>
python 2.x, python 3.x, perl or even tcl.  It is not like one is asking for
<br>
smalltalk or common lisp.  Additionally, as a &quot;build dependency&quot;
<br>
the requirement applies only to the OMPI-build host, not to the host(s)
<br>
used to build the MPI applications, and NOT to the compute nodes.
<br>
<p>For the user building sources via RPM or APT packaging for Linux, Fink for
<br>
MacOS, or ports/packages for BSDs there are already mechanisms for
<br>
expressing build dependencies in those respective systems.  Everything is
<br>
just automatic for those users.
<br>
<p>Since OMPI already ships all the generated atomics variants in the tarball,
<br>
there is precedence in support of the alternative of per-generating all the
<br>
Fortran wrapper variants.  That does NOT address Brian's strong objection
<br>
to adding a new language dependency, but moves the language dependency from
<br>
the end-user to the developer, and hopefully only to those developers who
<br>
modify the Fortran bindings.
<br>
<p>Just my USD 0.02,
<br>
-Paul
<br>
<p><p><p><p>On Wed, May 22, 2013 at 10:47 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On 5/22/13 9:35 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;* this isn't about Craig and his abilities - this is a more general
</span><br>
<span class="quotelev2">&gt; &gt;requirements discussion. I personally wouldn't change my comments if it
</span><br>
<span class="quotelev2">&gt; &gt;was Jeff or Brian making the request - the issue remains the same.
</span><br>
<span class="quotelev2">&gt; &gt;Introducing another language requirement on the
</span><br>
<span class="quotelev2">&gt; &gt; user-level build isn't a minor issue. Just because someone knows a
</span><br>
<span class="quotelev2">&gt; &gt;language seems a weak argument - I had to learn perl to work on the build
</span><br>
<span class="quotelev2">&gt; &gt;system too. The differences aren't that huge, and the barrier isn't that
</span><br>
<span class="quotelev2">&gt; &gt;high.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What Ralph said.  My objections are largely to introducing another
</span><br>
<span class="quotelev1">&gt; language dependency (we should strive to keep these as small in number as
</span><br>
<span class="quotelev1">&gt; possible).  As I said, I'm strongly against using Python in the build
</span><br>
<span class="quotelev1">&gt; system (unless we replace all Perl with Python, which I doubt anyone wants
</span><br>
<span class="quotelev1">&gt; to deal with).  I have a slight preference for not using non-Bourne Shell
</span><br>
<span class="quotelev1">&gt; things in the configure / make stages, but that's not anywhere near as
</span><br>
<span class="quotelev1">&gt; strong as the dislike of adding new languages to support in the build
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12415.php">João Zeni: "[OMPI devel] In reply to: Re:  [EXTERNAL] Re: Porting Open MPI"</a>
<li><strong>Previous message:</strong> <a href="12413.php">George Bosilca: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>In reply to:</strong> <a href="12411.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12416.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>Reply:</strong> <a href="12416.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
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
