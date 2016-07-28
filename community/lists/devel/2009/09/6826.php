<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 21:44:29 2009" -->
<!-- isoreceived="20090911014429" -->
<!-- sent="Thu, 10 Sep 2009 21:44:23 -0400" -->
<!-- isosent="20090911014423" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="99F33ACB-C62E-4B04-8B14-9FDFCE88BCE5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="66B5D105-7A9B-4F10-A95F-9EE8D878D819_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] XML request<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 21:44:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6827.php">Jeff Squyres: "Re: [OMPI devel] version number issues"</a>
<li><strong>Previous message:</strong> <a href="6825.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6825.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6819.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I filed ticket #2019 pointing to this email thread in case someone  
<br>
ever wants to implement it.
<br>
<p>FWIW: I don't think it matters much whether it's implemented as part  
<br>
of mpirun or a new executable; I suspect that whatever implementation  
<br>
is easiest will be fine.
<br>
<p><p>On Sep 10, 2009, at 9:28 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that sums up the situation nicely. For item #2, I wonder if it
</span><br>
<span class="quotelev1">&gt; would be better to still use &quot;ssh &lt;host&gt; mpirun ...&quot;, but have mpirun
</span><br>
<span class="quotelev1">&gt; fork itself &quot;under the covers&quot;? Not having an extra executable in your
</span><br>
<span class="quotelev1">&gt; distribution would probably make long term maintenance easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If Ralph can do anything in the 1.3/1.4 timeframe to sort out the few
</span><br>
<span class="quotelev1">&gt; remaining issues, it would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2009, at 3:19 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greg and I chatted on the phone about this.  I now understand much
</span><br>
<span class="quotelev2">&gt; &gt; better about what he is trying to do (short version: Eclipse is
</span><br>
<span class="quotelev2">&gt; &gt; running on one machine, it is opening an ssh session to a remote
</span><br>
<span class="quotelev2">&gt; &gt; machine and launching mpirun on that remote machine).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Results of the phone conversation (for the web archives):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - In the short term, there's a few remaining issues to be figured
</span><br>
<span class="quotelev2">&gt; &gt; out.  Ralph (who is now full-time at Cisco) may or may not have time
</span><br>
<span class="quotelev2">&gt; &gt; to fix these in the near team.  We (Open MPI) would happily review
</span><br>
<span class="quotelev2">&gt; &gt; patches from others in this area if a solution is required before
</span><br>
<span class="quotelev2">&gt; &gt; Ralph can get to it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - In the long term, we came up with a &quot;thinking outside the box&quot;
</span><br>
<span class="quotelev2">&gt; &gt; solution that seems to be *much* better (think 1.5 and beyond).
</span><br>
<span class="quotelev2">&gt; &gt; I'll describe the scheme, but at the same time, I'll indicate that
</span><br>
<span class="quotelev2">&gt; &gt; Cisco likely does not have time in the foreseeable future to
</span><br>
<span class="quotelev2">&gt; &gt; implement it.  Again, we would be happy to provide guidance to
</span><br>
<span class="quotelev2">&gt; &gt; anyone who would want to implement it (e.g., IBM) and/or review
</span><br>
<span class="quotelev2">&gt; &gt; patches.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Currently, the Eclipse plugin is effectively executing &quot;ssh
</span><br>
<span class="quotelev2">&gt; &gt; &lt;otherhost&gt; mpirun ...&quot;.  This has several advantages:
</span><br>
<span class="quotelev2">&gt; &gt;   - Use whatever the native OMPI is on &lt;otherhost&gt;
</span><br>
<span class="quotelev2">&gt; &gt;   - No need for binary compatibility (i.e., version match of Eclipse
</span><br>
<span class="quotelev2">&gt; &gt; plugin and remote OMPI installation)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. The proposal is to change this to &quot;ssh &lt;otherhost&gt; mpirun-
</span><br>
<span class="quotelev2">&gt; &gt; proxy ...&quot; where mpirun-proxy is a new executable that does the
</span><br>
<span class="quotelev2">&gt; &gt; following:
</span><br>
<span class="quotelev2">&gt; &gt;   - fork/exec the real mpirun, making pipes to mpirun's stdin/ 
</span><br>
<span class="quotelev1">&gt; stdout/
</span><br>
<span class="quotelev2">&gt; &gt; stderr
</span><br>
<span class="quotelev2">&gt; &gt;   - tell mpirun to not display any IOF output from MPI processes
</span><br>
<span class="quotelev2">&gt; &gt;   - tell mpirun to not display any show_help messages
</span><br>
<span class="quotelev2">&gt; &gt;   - register to receive ORTE &quot;events&quot; (more below) via the ORTE comm
</span><br>
<span class="quotelev2">&gt; &gt; library
</span><br>
<span class="quotelev2">&gt; &gt;   - register to receive IOF from all the MPI processes via the ORTE
</span><br>
<span class="quotelev2">&gt; &gt; comm library
</span><br>
<span class="quotelev2">&gt; &gt;   - register to receive show_help messages from MPI processes via
</span><br>
<span class="quotelev2">&gt; &gt; the ORTE comm library
</span><br>
<span class="quotelev2">&gt; &gt;   - upon receipt of specific events (e.g., determination of host/
</span><br>
<span class="quotelev2">&gt; &gt; node/process maps), output this data encased in a specific XML
</span><br>
<span class="quotelev2">&gt; &gt; schema (e.g., a specific set of XML tags to encase each data item in
</span><br>
<span class="quotelev2">&gt; &gt; the nodemap) to ssh's stdout
</span><br>
<span class="quotelev2">&gt; &gt;   - read output from mpirun's stdout/stderr, output it on ssh's
</span><br>
<span class="quotelev2">&gt; &gt; stdout, encased in &lt;stdout&gt; / &lt;stderr&gt; (etc.)
</span><br>
<span class="quotelev2">&gt; &gt;   - read IOF from MPI processes and output them to ssh's stdout,
</span><br>
<span class="quotelev2">&gt; &gt; encased in appropriate XML tagging
</span><br>
<span class="quotelev2">&gt; &gt;   - read show_help messages from MPI processes and output them to
</span><br>
<span class="quotelev2">&gt; &gt; ssh's stdout, encased in appropriate XML tagging
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Note that some of the above functionality already exists; its
</span><br>
<span class="quotelev2">&gt; &gt; would just need to be marshaled together and used in some new
</span><br>
<span class="quotelev2">&gt; &gt; logic.  Other parts of the functionality do not exist and would need
</span><br>
<span class="quotelev2">&gt; &gt; to be written (e.g., redirecting show_help messages to something
</span><br>
<span class="quotelev2">&gt; &gt; other than the HNP).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. Once #2 is done, remove all the XML processing from mpirun,
</span><br>
<span class="quotelev2">&gt; &gt; libopen-rte, libmpi, and all OMPI plugins (since it's now all in
</span><br>
<span class="quotelev2">&gt; &gt; mpirun-proxy).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This functionality would accomplish the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - The code is distributed in Open MPI -- not Eclipse or an Eclipse
</span><br>
<span class="quotelev2">&gt; &gt; plugin -- there's no additional compilation or linking step for the
</span><br>
<span class="quotelev2">&gt; &gt; Eclipse plugin to talk to OMPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - The Eclipse plugin, which already checks the output from
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info, can know when to use this new functionality (ssh mpirun-
</span><br>
<span class="quotelev2">&gt; &gt; proxy instead of mpirun).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - All the OMPI XML parsing can be centralized to the mpirun-proxy
</span><br>
<span class="quotelev2">&gt; &gt; executable.  This is a *huge* improvement over having XML sprinkled
</span><br>
<span class="quotelev2">&gt; &gt; all over the OMPI code base, as it is now.  Additionally, with this
</span><br>
<span class="quotelev2">&gt; &gt; method, *all* OMPI output will be encased in XML before it is sent
</span><br>
<span class="quotelev2">&gt; &gt; to the Eclipse plugin (via ssh's stdout).  Today, we have &quot;XML-lite&quot;
</span><br>
<span class="quotelev2">&gt; &gt; functionality in that &quot;most&quot; of OMPI's output is XML-ified, but
</span><br>
<span class="quotelev2">&gt; &gt; there's oodles and oodles of corner cases where output is *not* XML-
</span><br>
<span class="quotelev2">&gt; &gt; ified.  The above proposal seems to be the best idea so far on how
</span><br>
<span class="quotelev2">&gt; &gt; to address this issue in a holistic way (rather than adding a bunch
</span><br>
<span class="quotelev2">&gt; &gt; more band-aids every time we find another output that isn't XML-
</span><br>
<span class="quotelev2">&gt; &gt; ified).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 10, 2009, at 9:23 AM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The most appealing thing about the XML option is that it just works
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;out of the box.&quot; Using a library API invariably requires compiling
</span><br>
<span class="quotelev3">&gt; &gt;&gt; an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; agent or distributing pre-compiled binaries with all the associated
</span><br>
<span class="quotelev3">&gt; &gt;&gt; complications. We tried that in the dim past and it was pretty
</span><br>
<span class="quotelev3">&gt; &gt;&gt; unworkable. The other problem was that the API headers were not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; installed by default, so users were forced to install local  
</span><br>
<span class="quotelev1">&gt; copies of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI with development headers enabled. It was not a great end-user
</span><br>
<span class="quotelev3">&gt; &gt;&gt; experience.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sep 10, 2009, at 8:45 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Thinking about this a little more ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; This all seems like Open MPI-specific functionality for Eclipse.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; that's the case, don't we have an ORTE tools communication  
</span><br>
<span class="quotelev1">&gt; library
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; that could be used?  IIRC, it pretty much does exactly what you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; want
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; and would be far less clumsy than trying to jury-rig sending XML
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; down files/fd's/whatever.  I have dim recollections of the ORTE
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; tools communication library API returning the data that you have
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; asked for in data structures -- no parsing of XML at all (and,  
</span><br>
<span class="quotelev1">&gt; more
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; importantly to us, no need to add all kinds of special code paths
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; for wrapping our output in XML).
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; If I'm right (and that's a big &quot;if&quot;!), is there a reason that  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; library is not attractive to you?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On Sep 10, 2009, at 8:04 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; On Sep 9, 2009, at 12:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; Hmmm....I never considered the possibility of output-filename
</span><br>
<span class="quotelev3">&gt; &gt;&gt; being
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; used that way. Interesting idea!
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; That feels way weird to me -- for example, how do you know that
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; you're actually outputting to a tty?
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; FWIW: +1 on the idea of writing to numbered fd's passed on the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; command line.  It just &quot;feels&quot; like a more POSIX-ish way of  
</span><br>
<span class="quotelev1">&gt; doing
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; things...?  I guess I'm surprised that that would be difficult  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; do from Java.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6827.php">Jeff Squyres: "Re: [OMPI devel] version number issues"</a>
<li><strong>Previous message:</strong> <a href="6825.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6825.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6819.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
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
