<?
$subject_val = "Re: [OMPI devel] libtool issue with crs/self";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 12:27:03 2009" -->
<!-- isoreceived="20090805162703" -->
<!-- sent="Wed, 05 Aug 2009 12:26:58 -0400" -->
<!-- isosent="20090805162658" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libtool issue with crs/self" -->
<!-- id="9F8D68D6-662B-467D-A137-4B00E3F844FD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8A6E7FF8-4C79-4515-8BF3-B2660ABB5131_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libtool issue with crs/self<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-05 12:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6594.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6592.php">Brian W. Barrett: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>In reply to:</strong> <a href="6591.php">George Bosilca: "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6793.php">Ralf Wildenhues: "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For applications that wish to use the 'self' component they already  
<br>
need to pass the -export (or -export-dynamic) flags to expose the  
<br>
proper symbols. For the applications I was playing with I found that  
<br>
if I use dlsym() directly then the applications do not need to add the  
<br>
visibility attribute, that the -export was sufficient.
<br>
<p>I have a FAQ-like page that explains how to properly use this  
<br>
component in development, should be out soon. The FT User's Guide also  
<br>
talk about how to use the 'self' CRS with Open MPI.
<br>
<p>-- Josh
<br>
<p>On Aug 5, 2009, at 11:29 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These look like two different issues to me. One is how some modules  
</span><br>
<span class="quotelev1">&gt; from Open MPI can use the libltld, and for this you highlighted the  
</span><br>
<span class="quotelev1">&gt; issue. The second is that the users who want to use the self CRS  
</span><br>
<span class="quotelev1">&gt; have to make sure the symbols required by self CRS are visible in  
</span><br>
<span class="quotelev1">&gt; their application. This is clearly an item for the FAQ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 5, 2009, at 10:51 , Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As an update on this thread. I had a bit of time this morning to  
</span><br>
<span class="quotelev2">&gt;&gt; look into this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I noticed that the &quot;-fvisibility=hidden&quot; option when passed to  
</span><br>
<span class="quotelev2">&gt;&gt; libltdl will cause it to fail in its configure test for:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;checking whether a program can dlopen itself&quot;
</span><br>
<span class="quotelev2">&gt;&gt; This is because the symbol they are trying to look for with dlsym()  
</span><br>
<span class="quotelev2">&gt;&gt; is not postfixed with:
</span><br>
<span class="quotelev2">&gt;&gt; __attribute__ ((visibility(&quot;default&quot;)))
</span><br>
<span class="quotelev2">&gt;&gt; If I do that, then the test passes correctly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure if this is a configure bug in Libtool or not. But  
</span><br>
<span class="quotelev2">&gt;&gt; what it means is that even with the wrapper around the OPAL libltdl  
</span><br>
<span class="quotelev2">&gt;&gt; routines, it is not useful to me since I need to open the  
</span><br>
<span class="quotelev2">&gt;&gt; executable to examine it for the necessary symbols.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I might try to go down the track of using dlopen/dlsym/dlclose  
</span><br>
<span class="quotelev2">&gt;&gt; directly instead of through the libtool interfaces. However I just  
</span><br>
<span class="quotelev2">&gt;&gt; wanted to mention that this is happening in case there are other  
</span><br>
<span class="quotelev2">&gt;&gt; places in the codebase that ever want to look into the executable  
</span><br>
<span class="quotelev2">&gt;&gt; for symbols, and find that lt_dlopen() fails in non-obvious ways.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 29, 2009, at 11:01 AM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Never mind, I'm an idiot.  I still don't like the wrappers around  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lt_dlopen in util, but it might be your best option.  Are you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for symbols in components or the executable?  I assumed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the executable, in which case you might be better off just using  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dlsym() directly.  If you're looking for a symbol first place it's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found, then you can just do:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dlsym(RTLD_DEFAULT, symbol);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The lt_dlsym only really helps if you're running on really obscure  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; platforms which don't support dlsym and loading &quot;preloaded&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, 29 Jul 2009, Brian W. Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What are you trying to do with lt_dlopen?  It seems like you  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should always go through the MCA base utilities.  If one's  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; missing, adding it there seems like the right mechanism.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, 29 Jul 2009, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; George suggested that to me as well yesterday after the meeting.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So we would create opal interfaces to libtool (similar to what  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we do with the event engine). That might be the best way to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; approach this.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'll start to take a look at implementing this. Since opal/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libltdl is not part of the repository, is there a 'right' place  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to put this header? maybe in opal/util/?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 28, 2009, at 6:57 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Josh - this is almost certainly what happened. Yoibks.  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately, there's good reasons for it. :(
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What about if we proxy calls to lt_dlopen through an opal  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; function call?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -jms
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: Tue Jul 28 16:39:42 2009
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] libtool issue with crs/self
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It was mentioned to me that r21731 might have caused this  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problem by
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; restricting the visibility of the libltdl library.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21731">https://svn.open-mpi.org/trac/ompi/changeset/21731</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Brian,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do you have any thoughts on how we might extend the visibility  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; so that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MCA components could also use the libtool in opal?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I can try to initialize libtool in the Self CRS component and  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; use it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; directly, but since it is already opened by OPAL, I think it  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; might be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; better to use the instantiation in OPAL.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jul 28, 2009, at 3:06 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Once upon a time, the Self CRS module worked correctly, but I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; admit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that I have not tested it in a long time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The Self CRS component uses dl_open and friends to inspect the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; running process for a particular set of functions. When I try  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; an MPI program that contains these signatures I get the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; following
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; error when it tries to resolve lt_dlopen() in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_crs_self_component_query():
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; my-app: symbol lookup error: /path/to/install/lib/openmpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_crs_self.so: undefined symbol: lt_dlopen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am configuring with the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./configure --prefix=/path/to/install \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --enable-binaries \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-devel-headers \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --enable-debug \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --enable-mpi-threads \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-ft=cr \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --without-memory-manager \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --enable-ft-thread \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC=gcc CXX=g++ \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; F77=gfortran FC=gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The source code is at the link below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/crs/self">https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/crs/self</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does anyone have any thoughts on what might be going wrong here?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6594.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6592.php">Brian W. Barrett: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>In reply to:</strong> <a href="6591.php">George Bosilca: "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6793.php">Ralf Wildenhues: "Re: [OMPI devel] libtool issue with crs/self"</a>
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
