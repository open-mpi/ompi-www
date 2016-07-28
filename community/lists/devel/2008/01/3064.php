<?
$subject_val = "Re: [OMPI devel] dropping a pls module into an Open MPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 14:48:16 2008" -->
<!-- isoreceived="20080128194816" -->
<!-- sent="Mon, 28 Jan 2008 14:47:49 -0500" -->
<!-- isosent="20080128194749" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dropping a pls module into an Open MPI build" -->
<!-- id="EE0710AF-4EF9-4A89-A1AC-81FE791838E1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3BE2334.BE94%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] dropping a pls module into an Open MPI build<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 14:47:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3065.php">Josh Hursey: "[OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>Previous message:</strong> <a href="3063.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3033.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing you might check if you suspect compiler alignment issues is  
<br>
running &quot;ompi_info --all&quot; and see what Apple used to configure/build  
<br>
OMPI.  We save the CFLAGS and whatnot; they may be helpful to you...?
<br>
<p>I see on my MBP/Leopard 10.5.1, for example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build CFLAGS: -O3 -DNDEBUG -arch i386 -finline-functions - 
<br>
fno-strict-aliasing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build CXXFLAGS: -O3 -DNDEBUG -arch i386 -finline-functions
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build FFLAGS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build FCFLAGS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build LDFLAGS: -export-dynamic   -Wl,-u,_munmap -Wl,- 
<br>
multiply_defined,suppress
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build LIBS: -lutil
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wrapper extra CFLAGS:
<br>
&nbsp;&nbsp;&nbsp;Wrapper extra CXXFLAGS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wrapper extra FFLAGS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Wrapper extra FCFLAGS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Wrapper extra LDFLAGS:   -Wl,-u,_munmap -Wl,- 
<br>
multiply_defined,suppress
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wrapper extra LIBS:      -lutil
<br>
<p>I'll *guess* that the -Wl options came from OMPI's normal configure  
<br>
script.  But the -arch and -f might have come from Apple...?
<br>
<p>That being said, I'm *not* sure how this information relates to the  
<br>
universal binaries...  It *may* be that you'll see the different  
<br>
options for the different architectures depending on which machine you  
<br>
run &quot;ompi_info&quot; on...?  I don't know enough about how universal  
<br>
binaries are built or run to know.
<br>
<p><p><p>On Jan 24, 2008, at 1:12 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Appreciate the clarification. I am unaware of anyone attempting that
</span><br>
<span class="quotelev1">&gt; procedure in the past, but I'm not terribly surprised to hear it would
</span><br>
<span class="quotelev1">&gt; encounter problems and/or fail. Given the myriad of configuration  
</span><br>
<span class="quotelev1">&gt; options in
</span><br>
<span class="quotelev1">&gt; the code base, it would seem almost miraculous that you could either  
</span><br>
<span class="quotelev1">&gt; (a) hit
</span><br>
<span class="quotelev1">&gt; the same config options used by Apple (whatever they were), or (b)  
</span><br>
<span class="quotelev1">&gt; manage to
</span><br>
<span class="quotelev1">&gt; find a combination that matched enough to let you do this without  
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Frankly, I'm surprised even this small a fix would let you work  
</span><br>
<span class="quotelev1">&gt; around the
</span><br>
<span class="quotelev1">&gt; problems... ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unless you have some overriding reason to use the shipped binaries for
</span><br>
<span class="quotelev1">&gt; everything other than this special component, you're probably going  
</span><br>
<span class="quotelev1">&gt; to have
</span><br>
<span class="quotelev1">&gt; a lot more success just rebuilding from source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But that's just an opinion - either way, good luck with your efforts!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/24/08 10:54 AM, &quot;Dean Dauger, Ph. D.&quot; &lt;d_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm sorry, but now I am totally confused. Are you saying that you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are having
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems with the default rsh component in the distributed 1.2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or are you having a problem with your customized version?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and yes.  Each exhibited the same problem, a bus error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What compiler are you using? If it's your customized version, did
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you make sure to change the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; names of the data structures and modules as I pointed out?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gcc 4.0.1, the default of Leopard.  Yes, in the customized version, I
</span><br>
<span class="quotelev2">&gt;&gt; did change the names of the data structures, subroutines, support
</span><br>
<span class="quotelev2">&gt;&gt; file names, and where it says &quot;rsh&quot; just like you said.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We regularly work on Macs, both PPC and Intel based (I develop and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both every day), and I have -never- seen this problem in our code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hence my confusion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm sorry to confuse.  I'm starting with the shipping Mac OS X 10.5.1
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Leopard&quot;, which contains its own build of Open MPI (v1.2.3 according
</span><br>
<span class="quotelev2">&gt;&gt; to &quot;orterun -version&quot;).  So I assumed that the v1.2.3 branch from
</span><br>
<span class="quotelev2">&gt;&gt; svn.open-mpi.org was the same code Apple used to build the Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; that ships in Leopard.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My motivation was to build a new pls module based on pls_rsh module's
</span><br>
<span class="quotelev2">&gt;&gt; source code, substituting the rsh with my own name like you said, but
</span><br>
<span class="quotelev2">&gt;&gt; I encountered a bus error.  So to be sure I didn't screw up somewhere
</span><br>
<span class="quotelev2">&gt;&gt; in my custom module I rebuilt the unmodified pls_rsh module and
</span><br>
<span class="quotelev2">&gt;&gt; discovered the same problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then, after downloading the Open MPI from opensource.apple.com
</span><br>
<span class="quotelev2">&gt;&gt; (suspecting it was different), I tried recompiling the pls_rsh module
</span><br>
<span class="quotelev2">&gt;&gt; from that source code, dropped in just the resulting mca_pls_rsh.la
</span><br>
<span class="quotelev2">&gt;&gt; and mca_pls_rsh.so into the existing /usr/lib/openmpi of Leopard,
</span><br>
<span class="quotelev2">&gt;&gt; overwriting Leopard's versions, and the bus error happened the same
</span><br>
<span class="quotelev2">&gt;&gt; as before.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's where I was with my first post to this list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My last post regards the discovery that rearranging the elements of
</span><br>
<span class="quotelev2">&gt;&gt; orte_pls_rsh_component_t, without changing anything else about the
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh code, affects the bus error outcome.  Then I padded out
</span><br>
<span class="quotelev2">&gt;&gt; orte_pls_rsh_component_t and my &quot;orte_pls_dean_component_t&quot; by hand
</span><br>
<span class="quotelev2">&gt;&gt; so that it would be &quot;data alignment agnostic&quot;, if you will.
</span><br>
<span class="quotelev2">&gt;&gt; Consequently the bus error no longer occurs and both pls modules now
</span><br>
<span class="quotelev2">&gt;&gt; run as they should.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My hypothesis: Apple's procedure to build Open MPI into Leopard had a
</span><br>
<span class="quotelev2">&gt;&gt; side effect requiring shared object code structures to follow a data
</span><br>
<span class="quotelev2">&gt;&gt; alignment different than if I simply recompile Open MPI straight from
</span><br>
<span class="quotelev2">&gt;&gt; its source.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not saying anyone is to blame, but I'm recognizing that those
</span><br>
<span class="quotelev2">&gt;&gt; builds have different timelines.  I predict that if I overwrite all
</span><br>
<span class="quotelev2">&gt;&gt; of Leopard's Open MPI object code, then it would all run too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For my needs, I have a sufficient workaround: realign my data
</span><br>
<span class="quotelev2">&gt;&gt; structures to be &quot;agnostic&quot;.  I'm sharing this little discovery just
</span><br>
<span class="quotelev2">&gt;&gt; in case it might help somebody else out there; for all I know it
</span><br>
<span class="quotelev2">&gt;&gt; could happen on non-Macs too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   Dean
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3065.php">Josh Hursey: "[OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>Previous message:</strong> <a href="3063.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3033.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
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
