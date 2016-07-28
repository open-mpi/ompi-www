<?
$subject_val = "Re: [OMPI devel] SM backing file size";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 09:15:09 2008" -->
<!-- isoreceived="20081114141509" -->
<!-- sent="Fri, 14 Nov 2008 07:14:59 -0700" -->
<!-- isosent="20081114141459" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM backing file size" -->
<!-- id="DD2F60E2-3732-439F-9069-79A5C0B45601_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220811140600i1133cf82hddaf991e7274ead2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM backing file size<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 09:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4897.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4894.php">Tim Mattox: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2008, at 7:00 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; Are these systems running Linux?  If so, the long term solution is to
</span><br>
<span class="quotelev1">&gt; finish ticket  #1320:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1320">https://svn.open-mpi.org/trac/ompi/ticket/1320</a>
</span><br>
<span class="quotelev1">&gt; Which would eliminate the sm backing files entierly, without needing
</span><br>
<span class="quotelev1">&gt; to reduce the size of the shared memory that is used.  For systems
</span><br>
<span class="quotelev1">&gt; where /tmp is a ramdisk, the current scheme is very wasteful (less
</span><br>
<span class="quotelev1">&gt; so if you are using tmpfs).
</span><br>
<p>I agree - I think this needs to be bumped up in priority. I'm willing  
<br>
to help, if that would be useful
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What kind of ramdisk are you using?  If you are not using tmpfs,
</span><br>
<span class="quotelev1">&gt; you should consider switching to tmpfs, since it allows you to have
</span><br>
<span class="quotelev1">&gt; an arbitrarily large /tmp, yet only uses as much RAM as there
</span><br>
<span class="quotelev1">&gt; are files in /tmp.  See this for a good howto/intro:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.ibm.com/developerworks/library/l-fs3.html">http://www.ibm.com/developerworks/library/l-fs3.html</a>
</span><br>
<p>I honestly don't know, and have no control over how it is setup...nor  
<br>
any influence in that regard! :-)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 14, 2008 at 8:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Eugene
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I too am interested - I think we need to do something about the sm  
</span><br>
<span class="quotelev2">&gt;&gt; backing
</span><br>
<span class="quotelev2">&gt;&gt; file situation as larger core machines are slated to become more  
</span><br>
<span class="quotelev2">&gt;&gt; prevalent
</span><br>
<span class="quotelev2">&gt;&gt; shortly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I appreciate your info on the sizes and controls. One other  
</span><br>
<span class="quotelev2">&gt;&gt; question: what
</span><br>
<span class="quotelev2">&gt;&gt; happens when there isn't enough memory to support all this? Are we  
</span><br>
<span class="quotelev2">&gt;&gt; smart
</span><br>
<span class="quotelev2">&gt;&gt; enough to detect this situation? Does the sm subsystem quietly shut  
</span><br>
<span class="quotelev2">&gt;&gt; down?
</span><br>
<span class="quotelev2">&gt;&gt; Warn and shut down? Segfault?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have two examples so far:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. using a ramdisk, /tmp was set to 10MB. OMPI was run on a single  
</span><br>
<span class="quotelev2">&gt;&gt; node,
</span><br>
<span class="quotelev2">&gt;&gt; 2ppn, with btl=openib,sm,self. The program started, but segfaulted  
</span><br>
<span class="quotelev2">&gt;&gt; on the
</span><br>
<span class="quotelev2">&gt;&gt; first MPI_Send. No warnings were printed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. again with a ramdisk, /tmp was reportedly set to 16MB  
</span><br>
<span class="quotelev2">&gt;&gt; (unverified - some
</span><br>
<span class="quotelev2">&gt;&gt; uncertainty, could be have been much larger). OMPI was run on  
</span><br>
<span class="quotelev2">&gt;&gt; multiple
</span><br>
<span class="quotelev2">&gt;&gt; nodes, 16ppn, with btl=openib,sm,self. The program ran to  
</span><br>
<span class="quotelev2">&gt;&gt; completion without
</span><br>
<span class="quotelev2">&gt;&gt; errors or warning. I don't know the communication pattern - could  
</span><br>
<span class="quotelev2">&gt;&gt; be no
</span><br>
<span class="quotelev2">&gt;&gt; local comm was performed, though that sounds doubtful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If someone doesn't know, I'll have to dig into the code and figure  
</span><br>
<span class="quotelev2">&gt;&gt; out the
</span><br>
<span class="quotelev2">&gt;&gt; response - just hoping that someone can spare me the pain.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 13, 2008, at 3:21 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As has frequently been commented upon at one time or another,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the  shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory backing file can be quite huge. There used to be a param   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; controlling this size, but I can't find it in 1.3 - or at least,   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the name
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or method for controlling file size has morphed into  something I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recognize.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can someone more familiar with that subsystem point me to one or  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; params that will allow us to control the size of that file? It  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is  swamping
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; our systems and causing OMPI to segfault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sounds like you've already gotten your answers, but I'll add my  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $0.02
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anyhow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The file size is the number of local processes (call it n) times
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpool_sm_per_peer_size (default 32M), but with a minimum of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpool_sm_min_size (default 128M) and a maximum of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpool_sm_max_size (default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2G?  256M?).  So, you can tweak those parameters to control file  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another issue is possibly how small a backing file you can get  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; away with.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is, just forcing the file to be smaller may not be enough  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job may no longer run.  The backing file seems to be used mainly by:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *) eager-fragment free lists:  We start with enough eager  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fragments so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that we could have two per connection.  So, you could bump the sm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eager size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; down if you need to shoehorn a job into a very small backing file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *) large-fragment free lists:  We start with 8*n large fragments.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; term plagues you, you can bump the sm chunk size down or reduce  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the value of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 (using btl_sm_free_list_num, I think).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *) FIFOs:  The code tries to align a number of things on pagesize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; boundaries, so you end up with about 3*n*n*pagesize overhead  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here.  If this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; term is causing you problems, you're stuck (unless you modify OMPI).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm interested in this subject!  :^)
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<li><strong>Next message:</strong> <a href="4897.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4894.php">Tim Mattox: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
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
