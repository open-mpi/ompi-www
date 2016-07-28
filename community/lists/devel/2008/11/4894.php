<?
$subject_val = "Re: [OMPI devel] SM backing file size";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 09:00:41 2008" -->
<!-- isoreceived="20081114140041" -->
<!-- sent="Fri, 14 Nov 2008 09:00:36 -0500" -->
<!-- isosent="20081114140036" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM backing file size" -->
<!-- id="ea86ce220811140600i1133cf82hddaf991e7274ead2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C10D0173-17C3-4AC5-8558-D583DC2A172D_at_lanl.gov" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 09:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4896.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4896.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
Are these systems running Linux?  If so, the long term solution is to
<br>
finish ticket  #1320:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1320">https://svn.open-mpi.org/trac/ompi/ticket/1320</a>
<br>
Which would eliminate the sm backing files entierly, without needing
<br>
to reduce the size of the shared memory that is used.  For systems
<br>
where /tmp is a ramdisk, the current scheme is very wasteful (less
<br>
so if you are using tmpfs).
<br>
<p>What kind of ramdisk are you using?  If you are not using tmpfs,
<br>
you should consider switching to tmpfs, since it allows you to have
<br>
an arbitrarily large /tmp, yet only uses as much RAM as there
<br>
are files in /tmp.  See this for a good howto/intro:
<br>
<a href="http://www.ibm.com/developerworks/library/l-fs3.html">http://www.ibm.com/developerworks/library/l-fs3.html</a>
<br>
<p>On Fri, Nov 14, 2008 at 8:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Eugene
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I too am interested - I think we need to do something about the sm backing
</span><br>
<span class="quotelev1">&gt; file situation as larger core machines are slated to become more prevalent
</span><br>
<span class="quotelev1">&gt; shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I appreciate your info on the sizes and controls. One other question: what
</span><br>
<span class="quotelev1">&gt; happens when there isn't enough memory to support all this? Are we smart
</span><br>
<span class="quotelev1">&gt; enough to detect this situation? Does the sm subsystem quietly shut down?
</span><br>
<span class="quotelev1">&gt; Warn and shut down? Segfault?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two examples so far:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. using a ramdisk, /tmp was set to 10MB. OMPI was run on a single node,
</span><br>
<span class="quotelev1">&gt; 2ppn, with btl=openib,sm,self. The program started, but segfaulted on the
</span><br>
<span class="quotelev1">&gt; first MPI_Send. No warnings were printed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. again with a ramdisk, /tmp was reportedly set to 16MB (unverified - some
</span><br>
<span class="quotelev1">&gt; uncertainty, could be have been much larger). OMPI was run on multiple
</span><br>
<span class="quotelev1">&gt; nodes, 16ppn, with btl=openib,sm,self. The program ran to completion without
</span><br>
<span class="quotelev1">&gt; errors or warning. I don't know the communication pattern - could be no
</span><br>
<span class="quotelev1">&gt; local comm was performed, though that sounds doubtful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If someone doesn't know, I'll have to dig into the code and figure out the
</span><br>
<span class="quotelev1">&gt; response - just hoping that someone can spare me the pain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 13, 2008, at 3:21 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As has frequently been commented upon at one time or another, the  shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory backing file can be quite huge. There used to be a param  for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; controlling this size, but I can't find it in 1.3 - or at least,  the name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or method for controlling file size has morphed into  something I don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recognize.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can someone more familiar with that subsystem point me to one or more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  params that will allow us to control the size of that file? It is  swamping
</span><br>
<span class="quotelev3">&gt;&gt;&gt; our systems and causing OMPI to segfault.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds like you've already gotten your answers, but I'll add my $0.02
</span><br>
<span class="quotelev2">&gt;&gt; anyhow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The file size is the number of local processes (call it n) times
</span><br>
<span class="quotelev2">&gt;&gt; mpool_sm_per_peer_size (default 32M), but with a minimum of
</span><br>
<span class="quotelev2">&gt;&gt; mpool_sm_min_size (default 128M) and a maximum of mpool_sm_max_size (default
</span><br>
<span class="quotelev2">&gt;&gt; 2G?  256M?).  So, you can tweak those parameters to control file size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another issue is possibly how small a backing file you can get away with.
</span><br>
<span class="quotelev2">&gt;&gt;  That is, just forcing the file to be smaller may not be enough since your
</span><br>
<span class="quotelev2">&gt;&gt; job may no longer run.  The backing file seems to be used mainly by:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *) eager-fragment free lists:  We start with enough eager fragments so
</span><br>
<span class="quotelev2">&gt;&gt; that we could have two per connection.  So, you could bump the sm eager size
</span><br>
<span class="quotelev2">&gt;&gt; down if you need to shoehorn a job into a very small backing file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *) large-fragment free lists:  We start with 8*n large fragments.  If this
</span><br>
<span class="quotelev2">&gt;&gt; term plagues you, you can bump the sm chunk size down or reduce the value of
</span><br>
<span class="quotelev2">&gt;&gt; 8 (using btl_sm_free_list_num, I think).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *) FIFOs:  The code tries to align a number of things on pagesize
</span><br>
<span class="quotelev2">&gt;&gt; boundaries, so you end up with about 3*n*n*pagesize overhead here.  If this
</span><br>
<span class="quotelev2">&gt;&gt; term is causing you problems, you're stuck (unless you modify OMPI).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm interested in this subject!  :^)
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4893.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4896.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Reply:</strong> <a href="4896.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
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
