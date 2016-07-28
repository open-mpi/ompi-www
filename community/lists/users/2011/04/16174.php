<?
$subject_val = "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 17:43:14 2011" -->
<!-- isoreceived="20110406214314" -->
<!-- sent="Wed, 06 Apr 2011 17:43:04 -0400" -->
<!-- isosent="20110406214304" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.4.3 and &amp;quot;make distclean&amp;quot; error" -->
<!-- id="4D9CDE68.90003_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="914BF2AB-A7DD-4810-9DB1-990452C333E4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 17:43:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16175.php">Jason Palmer: "[OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16173.php">Jason Palmer: "Re: [OMPI users] problem with configure and c++, lib and lib64"</a>
<li><strong>In reply to:</strong> <a href="16172.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16188.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Apr 6, 2011, at 1:21 PM, David Gunter wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We tend to build OMPI for several different architectures. 
</span><br>
<span class="quotelev2">&gt;&gt; Rather than untar the archive file each time I'd rather 
</span><br>
<span class="quotelev2">&gt;&gt; do a &quot;make distclean&quot; in between builds.  
</span><br>
<span class="quotelev2">&gt;&gt; However, this always produces the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Making distclean in libltdl
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/user/openmpi-1.4.3/opal/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `distclean'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/user/openmpi-1.4.3/opal/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [distclean-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/user/openmpi-1.4.3/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [distclean-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and then fails to finish the rest of the cleanup.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason is due to to our specific systems and the use 
</span><br>
<span class="quotelev2">&gt;&gt; of the configure argument --disable-dlopen, so nothing (including the Makefile) 
</span><br>
<span class="quotelev2">&gt;&gt; gets created in /user/openmpi-1.4.3/opal/libltd.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a workaround for this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can't think of any minus build system changes. 
</span><br>
<span class="quotelev1">&gt; I don't know of any testing done for that scenario, 
</span><br>
<span class="quotelev1">&gt; so I doubt we've hit it before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff is out today - will have to ask him tomorrow if he has any suggestions. 
</span><br>
<span class="quotelev1">&gt; I can think of a couple of possible solutions, but not sure what he would prefer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; david
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Gunter
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3: Infrastructure Team
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<p>Hi David
<br>
<p>You could build on a different directory, one directory for each build,
<br>
and use --prefix=/bla/bla to install in different locations
<br>
of your choice.
<br>
I do this all the time here, not for different architectures, but for
<br>
different compilers.
<br>
I use subdirectories on the main directory of the untarred source tree,
<br>
but that's a matter of taste.
<br>
Launch 'configure' with full path name or relative path from there.
<br>
Then do 'make' and 'make install'.
<br>
Worse comes to worst, if a particular build fails,
<br>
you can delete everything on the subdirectory,
<br>
instead of 'make distclean' (if that fails),
<br>
and start fresh, no harm to the original source tree.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16175.php">Jason Palmer: "[OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16173.php">Jason Palmer: "Re: [OMPI users] problem with configure and c++, lib and lib64"</a>
<li><strong>In reply to:</strong> <a href="16172.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16188.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
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
