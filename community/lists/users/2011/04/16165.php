<?
$subject_val = "[OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 15:21:30 2011" -->
<!-- isoreceived="20110406192130" -->
<!-- sent="Wed, 6 Apr 2011 13:21:26 -0600" -->
<!-- isosent="20110406192126" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI 1.4.3 and &amp;quot;make distclean&amp;quot; error" -->
<!-- id="FFF918C0-D1BA-4A75-B2D7-F58039A7561C_at_lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 15:21:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16166.php">Jason Palmer: "[OMPI users] problem with configure and c++, lib and lib64"</a>
<li><strong>Previous message:</strong> <a href="16164.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16172.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<li><strong>Reply:</strong> <a href="16172.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<li><strong>Reply:</strong> <a href="16188.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We tend to build OMPI for several different architectures. Rather than untar the archive file each time I'd rather do a &quot;make distclean&quot; in between builds.  However, this always produces the following error:
<br>
<p>...
<br>
Making distclean in libltdl
<br>
make[2]: Entering directory `/user/openmpi-1.4.3/opal/libltdl'
<br>
make[2]: *** No rule to make target `distclean'.  Stop.
<br>
make[2]: Leaving directory `/user/openmpi-1.4.3/opal/libltdl'
<br>
make[1]: *** [distclean-recursive] Error 1
<br>
make[1]: Leaving directory `/user/openmpi-1.4.3/opal'
<br>
make: *** [distclean-recursive] Error 1
<br>
<p>and then fails to finish the rest of the cleanup.
<br>
<p>The reason is due to to our specific systems and the use of the configure argument --disable-dlopen, so nothing (including the Makefile) gets created in /user/openmpi-1.4.3/opal/libltd.
<br>
<p>Is there a workaround for this?
<br>
<p>Thanks,
<br>
david
<br>
<pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16166.php">Jason Palmer: "[OMPI users] problem with configure and c++, lib and lib64"</a>
<li><strong>Previous message:</strong> <a href="16164.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16172.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<li><strong>Reply:</strong> <a href="16172.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<li><strong>Reply:</strong> <a href="16188.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
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
