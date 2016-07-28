<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 10:29:23 2011" -->
<!-- isoreceived="20110803142923" -->
<!-- sent="Wed, 03 Aug 2011 16:29:16 +0200" -->
<!-- isosent="20110803142916" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="4E395B3C.7090701_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BA9B139C-7A9C-4EF7-87A2-B36BB1235B49_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI + HWLOC + Static build  issue<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 10:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9592.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9590.php">Jeff Squyres: "Re: [OMPI devel] MXM question"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9558.php">Shamis, Pavel: "[OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9593.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9593.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9595.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I finally reproduced here. Based on the ornl platform script, you're
<br>
configuring with LDFLAGS=-static and then building with make
<br>
LDFLAGS=-all-static. Surprisingly, this works fine when building vanilla
<br>
hwloc, but it breaks inside OMPI. The reason is that OMPI doesn't pass
<br>
LDFLAGS=-static to hwloc's checks. Inside the vanilla hwloc, the libnuma
<br>
related checks properly use the static libnuma:
<br>
<p>configure:9786: checking for set_mempolicy in -lnuma
<br>
configure:9811: gcc -o conftest   -static conftest.c -lnuma  -lpthread &gt;&amp;5
<br>
/usr/bin/ld: cannot find -lnuma
<br>
collect2: ld returned 1 exit status
<br>
<p><p>Inside OMPI, there's no -static so it uses libnuma.so:
<br>
<p>configure:65582: checking for set_mempolicy in -lnuma
<br>
configure:65607: gcc -o conftest -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread     conftest.c -lnuma  -lnsl  -lutil -lm  &gt;&amp;5
<br>
configure:65607: $? = 0
<br>
configure:65616: result: yes
<br>
<p><p>So I think I am passing the ball to Jeff to look at this :)
<br>
<p><p>But there's something I am not sure about here:
<br>
Inside OMPI, passing LDFLAGS=-static seems to mean that &quot;we want to
<br>
build static libs but they can depend on dynamic libs&quot;. Inside hwloc, it
<br>
means &quot;we want fully static binaries (with no dynamic dependencies)&quot;. Is
<br>
one considered &quot;more standard&quot; than the other?
<br>
<p>If OMPI is right, is there a way to pass -all-static to libtool at
<br>
configure time? (putting it inside LDFLAGS breaks configure). If yes, we
<br>
could try to detect this flag in the hwloc configure and adapt our
<br>
checks. But I am not sure I want to go there...
<br>
<p>Brice
<br>
<p><p><p><p><p><p>Le 25/07/2011 23:56, Shamis, Pavel a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been trying to compile Open MPI (trunk) static version with hwloc, the last is enabled by default in trunk.
</span><br>
<span class="quotelev1">&gt; The build platform is AMD machine, that has dynamic libnuma version only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem:
</span><br>
<span class="quotelev1">&gt; Open MPI fails to link orted, because it can't find static version of libnuma.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Workaround:
</span><br>
<span class="quotelev1">&gt; add --without-hwloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Real solution:
</span><br>
<span class="quotelev1">&gt; Is it a way to keep hwloc enabled when static libnuma isn't presented on the system ? If it's a such way, I would like to know how to enable it.
</span><br>
<span class="quotelev1">&gt; Otherwise, I think configure script should handle such scenario, it means disable hwloc and enable some other alternative.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Application Performance Tools Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
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
<li><strong>Next message:</strong> <a href="9592.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9590.php">Jeff Squyres: "Re: [OMPI devel] MXM question"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9558.php">Shamis, Pavel: "[OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9593.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9593.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9595.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
