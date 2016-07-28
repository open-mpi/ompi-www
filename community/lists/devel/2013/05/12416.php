<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 15:17:25 2013" -->
<!-- isoreceived="20130522191725" -->
<!-- sent="Wed, 22 May 2013 12:17:16 -0700" -->
<!-- isosent="20130522191716" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers" -->
<!-- id="E5E8CF2E-4F70-48E4-B45C-F7ADB9F8AA7E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA161ugQwMASsazLnXA6HwDpRwXVHUs2KmgBQMfd4UUtpRA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 15:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12417.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>Previous message:</strong> <a href="12415.php">Jo&#227;o Zeni: "[OMPI devel] In reply to: Re:  [EXTERNAL] Re: Porting Open MPI"</a>
<li><strong>In reply to:</strong> <a href="12414.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<li><strong>Reply:</strong> <a href="12418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 22, 2013, at 11:51 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Let me jump in here with a different perspective.
</span><br>
<span class="quotelev1">&gt; First, for those who don't know me:
</span><br>
<span class="quotelev1">&gt;   + I am NOT an OMPI developer
</span><br>
<span class="quotelev1">&gt;   + I am NOT an MPI application author either
</span><br>
<span class="quotelev1">&gt;   + I am a developer of &quot;competing&quot; HPC communications software (GASNet)
</span><br>
<span class="quotelev1">&gt;   + I contribute to OMPI mainly by building release candidates on my menagerie of test systems
</span><br>
<span class="quotelev1">&gt;   + I less frequently contribute bug reports and patches (and opinions like this one)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a developer myself, I agree that the maintainability problem that Jeff and Craig are trying to address is an important one.
</span><br>
<p>I think we all agree there
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand the concerns that Ralph has expressed and Brian has echoed, but I do not fully agree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do agree that *if* one picks a scripting language for build-time tasks (configure and/or make), the there should really be only one unless there is a really good motivation for more.  But if I understood, the bigger issue than perl-vs-python is that perl has so far only be required for folks who need to autogen but not for users who just build from a tarball.
</span><br>
<p>I believe there is a tiny amount of perl in the configure/make portion of the build system, but it is very small - perl use is mostly confined to autogen.pl
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my opinion any &quot;user&quot; who is going to build an MPI implementation should be capable of installing the reasonable &quot;build dependencies&quot;, whether it be python 2.x, python 3.x, perl or even tcl.  It is not like one is asking for smalltalk or common lisp.
</span><br>
<p>True, but many of our users build their own versions of OMPI (as opposed to what is provided by the sys admin), and they often don't have the ability/expertise to install languages.
<br>
<p><span class="quotelev1">&gt;  Additionally, as a &quot;build dependency&quot; the requirement applies only to the OMPI-build host, not to the host(s) used to build the MPI applications, and NOT to the compute nodes.
</span><br>
<p>Also true
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the user building sources via RPM or APT packaging for Linux, Fink for MacOS, or ports/packages for BSDs there are already mechanisms for expressing build dependencies in those respective systems.  Everything is just automatic for those users.
</span><br>
<p>Yep
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since OMPI already ships all the generated atomics variants in the tarball, there is precedence in support of the alternative of per-generating all the Fortran wrapper variants.  That does NOT address Brian's strong objection to adding a new language dependency, but moves the language dependency from the end-user to the developer, and hopefully only to those developers who modify the Fortran bindings.
</span><br>
<p>I suspect there is less objection to adding a language dependency to the tarball generator - the objections expressed so far were about adding python to the actual configure/compile stages. Users who build their own versions mostly download tarballs, so pushing the Fortran generator into the tarball creation phase would be less of a problem.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just my USD 0.02,
</span><br>
<p>Always appreciated!
<br>
<p><span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 22, 2013 at 10:47 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On 5/22/13 9:35 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12416/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12417.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>Previous message:</strong> <a href="12415.php">Jo&#227;o Zeni: "[OMPI devel] In reply to: Re:  [EXTERNAL] Re: Porting Open MPI"</a>
<li><strong>In reply to:</strong> <a href="12414.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<li><strong>Reply:</strong> <a href="12418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
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
