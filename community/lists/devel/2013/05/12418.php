<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 24 15:22:36 2013" -->
<!-- isoreceived="20130524192236" -->
<!-- sent="Fri, 24 May 2013 19:22:30 +0000" -->
<!-- isosent="20130524192230" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F63D3BE_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E5E8CF2E-4F70-48E4-B45C-F7ADB9F8AA7E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-24 15:22:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12419.php">MHPC 2013: "[OMPI devel] Deadline Extension: 2013 Workshop on Middleware for HPC and Big Data Systems (MHPC'13)"</a>
<li><strong>Previous message:</strong> <a href="12417.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>In reply to:</strong> <a href="12416.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll throw in one point: fortran is an optional install on Linux, too.  :-)
<br>
<p>This is a complex issue, and I'm thinking that the email thread has reached the limit of its usefulness.  How about discussing in person at the meeting in a little over a week?  I'll add it to the agenda.
<br>
<p><p>On May 22, 2013, at 3:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 22, 2013, at 11:51 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let me jump in here with a different perspective.
</span><br>
<span class="quotelev2">&gt;&gt; First, for those who don't know me:
</span><br>
<span class="quotelev2">&gt;&gt;   + I am NOT an OMPI developer
</span><br>
<span class="quotelev2">&gt;&gt;   + I am NOT an MPI application author either
</span><br>
<span class="quotelev2">&gt;&gt;   + I am a developer of &quot;competing&quot; HPC communications software (GASNet)
</span><br>
<span class="quotelev2">&gt;&gt;   + I contribute to OMPI mainly by building release candidates on my menagerie of test systems
</span><br>
<span class="quotelev2">&gt;&gt;   + I less frequently contribute bug reports and patches (and opinions like this one)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As a developer myself, I agree that the maintainability problem that Jeff and Craig are trying to address is an important one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we all agree there
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I understand the concerns that Ralph has expressed and Brian has echoed, but I do not fully agree.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do agree that *if* one picks a scripting language for build-time tasks (configure and/or make), the there should really be only one unless there is a really good motivation for more.  But if I understood, the bigger issue than perl-vs-python is that perl has so far only be required for folks who need to autogen but not for users who just build from a tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe there is a tiny amount of perl in the configure/make portion of the build system, but it is very small - perl use is mostly confined to autogen.pl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my opinion any &quot;user&quot; who is going to build an MPI implementation should be capable of installing the reasonable &quot;build dependencies&quot;, whether it be python 2.x, python 3.x, perl or even tcl.  It is not like one is asking for smalltalk or common lisp.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; True, but many of our users build their own versions of OMPI (as opposed to what is provided by the sys admin), and they often don't have the ability/expertise to install languages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Additionally, as a &quot;build dependency&quot; the requirement applies only to the OMPI-build host, not to the host(s) used to build the MPI applications, and NOT to the compute nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also true
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For the user building sources via RPM or APT packaging for Linux, Fink for MacOS, or ports/packages for BSDs there are already mechanisms for expressing build dependencies in those respective systems.  Everything is just automatic for those users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since OMPI already ships all the generated atomics variants in the tarball, there is precedence in support of the alternative of per-generating all the Fortran wrapper variants.  That does NOT address Brian's strong objection to adding a new language dependency, but moves the language dependency from the end-user to the developer, and hopefully only to those developers who modify the Fortran bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect there is less objection to adding a language dependency to the tarball generator - the objections expressed so far were about adding python to the actual configure/compile stages. Users who build their own versions mostly download tarballs, so pushing the Fortran generator into the tarball creation phase would be less of a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just my USD 0.02,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Always appreciated!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 22, 2013 at 10:47 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 5/22/13 9:35 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;* this isn't about Craig and his abilities - this is a more general
</span><br>
<span class="quotelev3">&gt;&gt; &gt;requirements discussion. I personally wouldn't change my comments if it
</span><br>
<span class="quotelev3">&gt;&gt; &gt;was Jeff or Brian making the request - the issue remains the same.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Introducing another language requirement on the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; user-level build isn't a minor issue. Just because someone knows a
</span><br>
<span class="quotelev3">&gt;&gt; &gt;language seems a weak argument - I had to learn perl to work on the build
</span><br>
<span class="quotelev3">&gt;&gt; &gt;system too. The differences aren't that huge, and the barrier isn't that
</span><br>
<span class="quotelev3">&gt;&gt; &gt;high.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What Ralph said.  My objections are largely to introducing another
</span><br>
<span class="quotelev2">&gt;&gt; language dependency (we should strive to keep these as small in number as
</span><br>
<span class="quotelev2">&gt;&gt; possible).  As I said, I'm strongly against using Python in the build
</span><br>
<span class="quotelev2">&gt;&gt; system (unless we replace all Perl with Python, which I doubt anyone wants
</span><br>
<span class="quotelev2">&gt;&gt; to deal with).  I have a slight preference for not using non-Bourne Shell
</span><br>
<span class="quotelev2">&gt;&gt; things in the configure / make stages, but that's not anywhere near as
</span><br>
<span class="quotelev2">&gt;&gt; strong as the dislike of adding new languages to support in the build
</span><br>
<span class="quotelev2">&gt;&gt; system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;   Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;   Scalable System Software Group
</span><br>
<span class="quotelev2">&gt;&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12419.php">MHPC 2013: "[OMPI devel] Deadline Extension: 2013 Workshop on Middleware for HPC and Big Data Systems (MHPC'13)"</a>
<li><strong>Previous message:</strong> <a href="12417.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>In reply to:</strong> <a href="12416.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
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
