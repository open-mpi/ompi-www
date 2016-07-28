<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 17 09:39:24 2006" -->
<!-- isoreceived="20061017133924" -->
<!-- sent="Tue, 17 Oct 2006 09:39:23 -0400 (EDT)" -->
<!-- isosent="20061017133923" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3a1r12121 ..." -->
<!-- id="Pine.LNX.4.64.0610170937510.26179_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0610171156150.29896_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-17 09:39:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI users] Question on mpi collectives"</a>
<li><strong>Previous message:</strong> <a href="1994.php">Lydia Heck: "[OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>In reply to:</strong> <a href="1994.php">Lydia Heck: "[OMPI users] openmpi 1.3a1r12121 ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2001.php">Lydia Heck: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi -
<br>
<p>Can you please send the config.log file generated when you ran configure? 
<br>
Generally, we ask that everyone send the information requested here:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>As it provides enough information to solve most of the problems seen 
<br>
during the build process.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On Tue, 17 Oct 2006, Lydia Heck wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that with 1.3a1xxxx I a looking at a development release.
</span><br>
<span class="quotelev1">&gt; HOwever I do need the SGE (GridEngine) support and I could not find
</span><br>
<span class="quotelev1">&gt; a download for a stable (or any other) 1.2 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I downloaded 1.3a1r12121 and tried to configure it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my configuration I use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-mx=/opt/mx (where the MX software is installed); also
</span><br>
<span class="quotelev1">&gt; --with-mx-libdir=/opt/mx/lib64, because I build for 64 bit only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I use the Sun Studio11 compilers and the configuration fails
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component btl:mx (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component btl:mx compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking myriexpress.h usability... no
</span><br>
<span class="quotelev1">&gt; checking myriexpress.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for myriexpress.h... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: error: MX support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried everything, entering under CFLAGS etc
</span><br>
<span class="quotelev1">&gt; -I/opt/mx/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; modifying
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-mx=/opt/mx/include ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; each the configure fails with the same error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, mx is definitely installed, and yes the path to mx is definitely
</span><br>
<span class="quotelev1">&gt; /opt/mx ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lydia Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
   Brian Barrett
   Graduate Student, Open Systems Lab, Indiana University
   <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1996.php">Jeff Squyres: "Re: [OMPI users] Question on mpi collectives"</a>
<li><strong>Previous message:</strong> <a href="1994.php">Lydia Heck: "[OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>In reply to:</strong> <a href="1994.php">Lydia Heck: "[OMPI users] openmpi 1.3a1r12121 ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2001.php">Lydia Heck: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
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
