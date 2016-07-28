<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 15:19:54 2009" -->
<!-- isoreceived="20090910191954" -->
<!-- sent="Thu, 10 Sep 2009 15:19:47 -0400" -->
<!-- isosent="20090910191947" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="855B7E26-B493-46AE-9A57-802EA9AC5418_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E19DC185-7DBD-4E21-B109-338023D4AD24_at_computer.org" -->
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
<strong>Date:</strong> 2009-09-10 15:19:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6824.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6822.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] OSL server reboots"</a>
<li><strong>In reply to:</strong> <a href="6820.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6825.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6825.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greg and I chatted on the phone about this.  I now understand much  
<br>
better about what he is trying to do (short version: Eclipse is  
<br>
running on one machine, it is opening an ssh session to a remote  
<br>
machine and launching mpirun on that remote machine).
<br>
<p>Results of the phone conversation (for the web archives):
<br>
<p>- In the short term, there's a few remaining issues to be figured  
<br>
out.  Ralph (who is now full-time at Cisco) may or may not have time  
<br>
to fix these in the near team.  We (Open MPI) would happily review  
<br>
patches from others in this area if a solution is required before  
<br>
Ralph can get to it.
<br>
<p>- In the long term, we came up with a &quot;thinking outside the box&quot;  
<br>
solution that seems to be *much* better (think 1.5 and beyond).  I'll  
<br>
describe the scheme, but at the same time, I'll indicate that Cisco  
<br>
likely does not have time in the foreseeable future to implement it.   
<br>
Again, we would be happy to provide guidance to anyone who would want  
<br>
to implement it (e.g., IBM) and/or review patches.
<br>
<p>-----
<br>
<p>1. Currently, the Eclipse plugin is effectively executing &quot;ssh  
<br>
&lt;otherhost&gt; mpirun ...&quot;.  This has several advantages:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Use whatever the native OMPI is on &lt;otherhost&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- No need for binary compatibility (i.e., version match of Eclipse  
<br>
plugin and remote OMPI installation)
<br>
<p>2. The proposal is to change this to &quot;ssh &lt;otherhost&gt; mpirun- 
<br>
proxy ...&quot; where mpirun-proxy is a new executable that does the  
<br>
following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- fork/exec the real mpirun, making pipes to mpirun's stdin/stdout/ 
<br>
stderr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- tell mpirun to not display any IOF output from MPI processes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- tell mpirun to not display any show_help messages
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- register to receive ORTE &quot;events&quot; (more below) via the ORTE comm  
<br>
library
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- register to receive IOF from all the MPI processes via the ORTE  
<br>
comm library
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- register to receive show_help messages from MPI processes via  
<br>
the ORTE comm library
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- upon receipt of specific events (e.g., determination of host/ 
<br>
node/process maps), output this data encased in a specific XML schema  
<br>
(e.g., a specific set of XML tags to encase each data item in the  
<br>
nodemap) to ssh's stdout
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- read output from mpirun's stdout/stderr, output it on ssh's  
<br>
stdout, encased in &lt;stdout&gt; / &lt;stderr&gt; (etc.)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- read IOF from MPI processes and output them to ssh's stdout,  
<br>
encased in appropriate XML tagging
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- read show_help messages from MPI processes and output them to  
<br>
ssh's stdout, encased in appropriate XML tagging
<br>
<p>--&gt; Note that some of the above functionality already exists; its  
<br>
would just need to be marshaled together and used in some new logic.   
<br>
Other parts of the functionality do not exist and would need to be  
<br>
written (e.g., redirecting show_help messages to something other than  
<br>
the HNP).
<br>
<p>3. Once #2 is done, remove all the XML processing from mpirun, libopen- 
<br>
rte, libmpi, and all OMPI plugins (since it's now all in mpirun-proxy).
<br>
<p>-----
<br>
<p>This functionality would accomplish the following:
<br>
<p>- The code is distributed in Open MPI -- not Eclipse or an Eclipse  
<br>
plugin -- there's no additional compilation or linking step for the  
<br>
Eclipse plugin to talk to OMPI.
<br>
<p>- The Eclipse plugin, which already checks the output from ompi_info,  
<br>
can know when to use this new functionality (ssh mpirun-proxy instead  
<br>
of mpirun).
<br>
<p>- All the OMPI XML parsing can be centralized to the mpirun-proxy  
<br>
executable.  This is a *huge* improvement over having XML sprinkled  
<br>
all over the OMPI code base, as it is now.  Additionally, with this  
<br>
method, *all* OMPI output will be encased in XML before it is sent to  
<br>
the Eclipse plugin (via ssh's stdout).  Today, we have &quot;XML-lite&quot;  
<br>
functionality in that &quot;most&quot; of OMPI's output is XML-ified, but  
<br>
there's oodles and oodles of corner cases where output is *not* XML- 
<br>
ified.  The above proposal seems to be the best idea so far on how to  
<br>
address this issue in a holistic way (rather than adding a bunch more  
<br>
band-aids every time we find another output that isn't XML-ified).
<br>
<p><p><p><p><p>On Sep 10, 2009, at 9:23 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; The most appealing thing about the XML option is that it just works
</span><br>
<span class="quotelev1">&gt; &quot;out of the box.&quot; Using a library API invariably requires compiling an
</span><br>
<span class="quotelev1">&gt; agent or distributing pre-compiled binaries with all the associated
</span><br>
<span class="quotelev1">&gt; complications. We tried that in the dim past and it was pretty
</span><br>
<span class="quotelev1">&gt; unworkable. The other problem was that the API headers were not
</span><br>
<span class="quotelev1">&gt; installed by default, so users were forced to install local copies of
</span><br>
<span class="quotelev1">&gt; OMPI with development headers enabled. It was not a great end-user
</span><br>
<span class="quotelev1">&gt; experience.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2009, at 8:45 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thinking about this a little more ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This all seems like Open MPI-specific functionality for Eclipse.  If
</span><br>
<span class="quotelev2">&gt; &gt; that's the case, don't we have an ORTE tools communication library
</span><br>
<span class="quotelev2">&gt; &gt; that could be used?  IIRC, it pretty much does exactly what you want
</span><br>
<span class="quotelev2">&gt; &gt; and would be far less clumsy than trying to jury-rig sending XML
</span><br>
<span class="quotelev2">&gt; &gt; down files/fd's/whatever.  I have dim recollections of the ORTE
</span><br>
<span class="quotelev2">&gt; &gt; tools communication library API returning the data that you have
</span><br>
<span class="quotelev2">&gt; &gt; asked for in data structures -- no parsing of XML at all (and, more
</span><br>
<span class="quotelev2">&gt; &gt; importantly to us, no need to add all kinds of special code paths
</span><br>
<span class="quotelev2">&gt; &gt; for wrapping our output in XML).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I'm right (and that's a big &quot;if&quot;!), is there a reason that this
</span><br>
<span class="quotelev2">&gt; &gt; library is not attractive to you?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 10, 2009, at 8:04 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sep 9, 2009, at 12:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hmmm....I never considered the possibility of output-filename  
</span><br>
<span class="quotelev1">&gt; being
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; used that way. Interesting idea!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That feels way weird to me -- for example, how do you know that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you're actually outputting to a tty?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FWIW: +1 on the idea of writing to numbered fd's passed on the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; command line.  It just &quot;feels&quot; like a more POSIX-ish way of doing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; things...?  I guess I'm surprised that that would be difficult to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; do from Java.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
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
<li><strong>Next message:</strong> <a href="6824.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Previous message:</strong> <a href="6822.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] OSL server reboots"</a>
<li><strong>In reply to:</strong> <a href="6820.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6825.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6825.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
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
