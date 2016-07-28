<?
$subject_val = "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 28 03:21:11 2014" -->
<!-- isoreceived="20141128082111" -->
<!-- sent="Fri, 28 Nov 2014 08:20:49 +0000" -->
<!-- isosent="20141128082049" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="CAAbhqc64rbzj9h0L4f5XgTicWbd-83Msr6_Ew-VbXfpbK0SsBQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc6gRwnnaK3+ET5F+LaLb0htvQd4uJ+9LcFokYjOtZ-xsg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-28 03:20:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25886.php">George Bosilca: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25884.php">Gustavo Correa: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>In reply to:</strong> <a href="25881.php">Nick Papior Andersen: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25886.php">George Bosilca: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25886.php">George Bosilca: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I reworked the idea and got it working.
<br>
I also got it compiled.
<br>
The non-standard flags are now with OMPI_ while the standard has MPI_.
<br>
I also added to more split types.
<br>
The manual is also updated.
<br>
<p><span class="quotelev2">&gt;&gt; Note to devs:
</span><br>
I had problems right after the autogen.pl script.
<br>
Procedure:
<br>
$&gt; git clone .. ompi
<br>
$&gt; cd ompi
<br>
$&gt; ./autogen.pl
<br>
My build versions:
<br>
m4: 1.4.17
<br>
automake: 1.14
<br>
autoconf: 2.69
<br>
libtool: 2.4.3
<br>
the autogen completes successfully (attached is the autogen output if
<br>
needed)
<br>
$&gt; mkdir build
<br>
$&gt; cd build
<br>
$&gt; ../configure --with-platform=optimized
<br>
I have attached the config.log (note that I have tested it with both the
<br>
shipped 1.9.1 and 1.10.0 hwloc)
<br>
$&gt; make all
<br>
Error message is:
<br>
make[2]: Entering directory '/home/nicpa/test/build/opal/libltdl'
<br>
CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd ../../../opal/libltdl &amp;&amp; /bin/bash
<br>
/home/nicpa/test/config/missing aclocal-1.14 -I ../../config
<br>
aclocal-1.14: error: ../../config/autogen_found_items.m4:308: file
<br>
'opal/mca/backtrace/configure.m4' does not exist
<br>
this error message is the same as found:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2013/07/12504.php">http://www.open-mpi.org/community/lists/devel/2013/07/12504.php</a>
<br>
My work-around is simple
<br>
It has to do with the created ACLOCAL_AMFLAGS variable
<br>
in build/opal/libltdl/Makefile
<br>
OLD:
<br>
ACLOCAL_AMFLAGS = -I ../../config
<br>
CORRECT:
<br>
ACLOCAL_AMFLAGS = -I ../../
<br>
Either the configure script creates the wrong include paths for the m4
<br>
scripts, or the m4 scripts are not copied fully to the config directory.
<br>
Ok, it works and the fix is simple. I just wonder why?
<br>
&lt;&lt; End note to devs
<br>
<p>First here is my test system 1:
<br>
$&gt; hwloc-info
<br>
depth 0: 1 Machine (type #1)
<br>
depth 1: 1 Socket (type #3)
<br>
depth 2: 1 L3Cache (type #4)
<br>
depth 3: 2 L2Cache (type #4)
<br>
depth 4: 2 L1dCache (type #4)
<br>
depth 5: 2 L1iCache (type #4)
<br>
depth 6: 2 Core (type #5)
<br>
depth 7: 4 PU (type #6)
<br>
Special depth -3: 2 Bridge (type #9)
<br>
Special depth -4: 4 PCI Device (type #10)
<br>
Special depth -5: 5 OS Device (type #11)
<br>
and my test system 2:
<br>
depth 0: 1 Machine (type #1)
<br>
depth 1: 1 Socket (type #3)
<br>
depth 2: 1 L3Cache (type #4)
<br>
depth 3: 4 L2Cache (type #4)
<br>
depth 4: 4 L1dCache (type #4)
<br>
depth 5: 4 L1iCache (type #4)
<br>
depth 6: 4 Core (type #5)
<br>
depth 7: 8 PU (type #6)
<br>
Special depth -3: 3 Bridge (type #9)
<br>
Special depth -4: 3 PCI Device (type #10)
<br>
Special depth -5: 4 OS Device (type #11)
<br>
<p>Here is an excerpt of what it can do (I have attached a fortran program
<br>
that creates a communicator using all types):
<br>
<p>Example of MPI_Comm_Split_Type
<br>
<p>Currently using 4 nodes.
<br>
<p>Comm using CU Node: 2 local rank: 2 out of 4 ranks
<br>
Comm using CU Node: 3 local rank: 3 out of 4 ranks
<br>
Comm using CU Node: 1 local rank: 1 out of 4 ranks
<br>
Comm using CU Node: 0 local rank: 0 out of 4 ranks
<br>
<p>Comm using Host Node: 0 local rank: 0 out of 4 ranks
<br>
Comm using Host Node: 2 local rank: 2 out of 4 ranks
<br>
Comm using Host Node: 3 local rank: 3 out of 4 ranks
<br>
Comm using Host Node: 1 local rank: 1 out of 4 ranks
<br>
<p>Comm using Board Node: 2 local rank: 2 out of 4 ranks
<br>
Comm using Board Node: 3 local rank: 3 out of 4 ranks
<br>
Comm using Board Node: 1 local rank: 1 out of 4 ranks
<br>
Comm using Board Node: 0 local rank: 0 out of 4 ranks
<br>
<p>Comm using Node Node: 0 local rank: 0 out of 4 ranks
<br>
Comm using Node Node: 1 local rank: 1 out of 4 ranks
<br>
Comm using Node Node: 2 local rank: 2 out of 4 ranks
<br>
Comm using Node Node: 3 local rank: 3 out of 4 ranks
<br>
<p>Comm using Shared Node: 0 local rank: 0 out of 4 ranks
<br>
Comm using Shared Node: 3 local rank: 3 out of 4 ranks
<br>
Comm using Shared Node: 1 local rank: 1 out of 4 ranks
<br>
Comm using Shared Node: 2 local rank: 2 out of 4 ranks
<br>
<p>Comm using Numa Node: 0 local rank: 0 out of 1 ranks
<br>
Comm using Numa Node: 2 local rank: 0 out of 1 ranks
<br>
Comm using Numa Node: 3 local rank: 0 out of 1 ranks
<br>
Comm using Numa Node: 1 local rank: 0 out of 1 ranks
<br>
<p>Comm using Socket Node: 1 local rank: 0 out of 1 ranks
<br>
Comm using Socket Node: 2 local rank: 0 out of 1 ranks
<br>
Comm using Socket Node: 3 local rank: 0 out of 1 ranks
<br>
Comm using Socket Node: 0 local rank: 0 out of 1 ranks
<br>
<p>Comm using L3 Node: 0 local rank: 0 out of 1 ranks
<br>
Comm using L3 Node: 3 local rank: 0 out of 1 ranks
<br>
Comm using L3 Node: 1 local rank: 0 out of 1 ranks
<br>
Comm using L3 Node: 2 local rank: 0 out of 1 ranks
<br>
<p>Comm using L2 Node: 2 local rank: 0 out of 1 ranks
<br>
Comm using L2 Node: 3 local rank: 0 out of 1 ranks
<br>
Comm using L2 Node: 1 local rank: 0 out of 1 ranks
<br>
Comm using L2 Node: 0 local rank: 0 out of 1 ranks
<br>
<p>Comm using L1 Node: 0 local rank: 0 out of 1 ranks
<br>
Comm using L1 Node: 1 local rank: 0 out of 1 ranks
<br>
Comm using L1 Node: 2 local rank: 0 out of 1 ranks
<br>
Comm using L1 Node: 3 local rank: 0 out of 1 ranks
<br>
<p>Comm using Core Node: 0 local rank: 0 out of 1 ranks
<br>
Comm using Core Node: 3 local rank: 0 out of 1 ranks
<br>
Comm using Core Node: 1 local rank: 0 out of 1 ranks
<br>
Comm using Core Node: 2 local rank: 0 out of 1 ranks
<br>
<p>Comm using HW Node: 2 local rank: 0 out of 1 ranks
<br>
Comm using HW Node: 3 local rank: 0 out of 1 ranks
<br>
Comm using HW Node: 1 local rank: 0 out of 1 ranks
<br>
Comm using HW Node: 0 local rank: 0 out of 1 ranks
<br>
<p>This is the output on both systems (note that I in the first one
<br>
oversubscribe the node). I have not tested it on a cluster :(.
<br>
One thing that worries me is that the SOCKET and L3 cache split types are
<br>
not of size 4? I only have one socket, and one L3 cache, so they must be
<br>
sharing?
<br>
I am not so sure about NUMA in this case. If you need any more information
<br>
about my setup to debug this, please let me know.
<br>
Or am I completely missing something?
<br>
<p>I tried looking into the opal/mca/hwloc/hwloc.h, but I have no idea whether
<br>
they are correct or not.
<br>
<p>If you think, I can make a pull request at its current stage?
<br>
<p><p>2014-11-27 13:22 GMT+00:00 Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; No worries :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-11-27 14:20 GMT+01:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that it's a holiday week here in the US -- I'm only on for a short
</span><br>
<span class="quotelev2">&gt;&gt; time here this morning; I'll likely disappear again shortly until next
</span><br>
<span class="quotelev2">&gt;&gt; week.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 27, 2014, at 8:12 AM, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sure, I will make the changes and commit to make them OMPI specific.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I will post forward my problems on the devel list.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I will keep you posted. :)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2014-11-27 13:58 GMT+01:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Nov 26, 2014, at 2:08 PM, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Here is my commit-msg:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; &quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; We can now split communicators based on hwloc full capabilities up to
</span><br>
<span class="quotelev2">&gt;&gt; BOARD.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I.e.:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; HWTHREAD,CORE,L1CACHE,L2CACHE,L3CACHE,SOCKET,NUMA,NODE,BOARD
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; where NODE is the same as SHARED.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; &quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Maybe what I did could be useful somehow?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I mean to achieve the effect one could do:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; comm_split_type(MPI_COMM_TYPE_Node,comm)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; create new group from all nodes not belonging to this group.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; This can even be more fine tuned if one wishes to create a group of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;master&quot; cores on each node.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I will say that there was a lot of debate about this kind of
</span><br>
<span class="quotelev2">&gt;&gt; functionality at the MPI Forum.  The problem is that although x86-based
</span><br>
<span class="quotelev2">&gt;&gt; clusters are quite common these days, they are not the only kind of
</span><br>
<span class="quotelev2">&gt;&gt; machines used for HPC out there, and the exact definitions of these kinds
</span><br>
<span class="quotelev2">&gt;&gt; of concepts (hwthread, core, lXcache, socket, numa, ...etc.) can vary
</span><br>
<span class="quotelev2">&gt;&gt; between architectures.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hence, the compromise was to just have MPI_COMM_TYPE_SHARED, where the
</span><br>
<span class="quotelev2">&gt;&gt; resulting communicator contains processes that share a single memory space.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; That being said, since OMPI uses hwloc for all of its supported
</span><br>
<span class="quotelev2">&gt;&gt; architectures, it might be worthwhile to have an OMPI extension for
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_TYPE_&lt;foo&gt; for the various different types.  One could/should
</span><br>
<span class="quotelev2">&gt;&gt; only use these new constants if the OPEN_MPI macro is defined and is 1.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; And *that* being said, one of the goals of MPI is portability, so
</span><br>
<span class="quotelev2">&gt;&gt; anyone using these constants would inherently non-portable.  :-)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I have not been able to compile it due to my autogen.pl giving me
</span><br>
<span class="quotelev2">&gt;&gt; some errors.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What kind of errors?  (we might want to move this discussion to the
</span><br>
<span class="quotelev2">&gt;&gt; devel list...)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;  However, I think it should compile just fine.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Do you think it could be useful?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; If interested you can find my, single commit branch, at:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/zerothi/ompi">https://github.com/zerothi/ompi</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This looks interesting.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Can you file a pull requests against the ompi master, and send
</span><br>
<span class="quotelev2">&gt;&gt; something to the devel list about this functionality?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'd still strongly suggest renaming these constants to the &quot;OMPI_&quot; to
</span><br>
<span class="quotelev2">&gt;&gt; differentiate them from standard MPI constants / functionality.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25878.php">http://www.open-mpi.org/community/lists/users/2014/11/25878.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Kind regards Nick
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25879.php">http://www.open-mpi.org/community/lists/users/2014/11/25879.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25880.php">http://www.open-mpi.org/community/lists/users/2014/11/25880.php</a>
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
<span class="quotelev1">&gt; Kind regards Nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick



</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25885/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25885/autogen.out.bz2">autogen.out.bz2</a>
</ul>
<!-- attachment="autogen.out.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25885/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25885/comm_split.f90">comm_split.f90</a>
</ul>
<!-- attachment="comm_split.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25886.php">George Bosilca: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25884.php">Gustavo Correa: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>In reply to:</strong> <a href="25881.php">Nick Papior Andersen: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25886.php">George Bosilca: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25886.php">George Bosilca: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
