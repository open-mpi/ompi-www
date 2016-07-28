<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 10:50:08 2009" -->
<!-- isoreceived="20090904145008" -->
<!-- sent="Fri, 4 Sep 2009 16:47:42 +0200 (CEST)" -->
<!-- isosent="20090904144742" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="alpine.DEB.2.00.0909041641270.31624_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9251DC75-CDD8-445C-9C00-24E5EC039EE7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 10:47:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6778.php">Kenneth Lloyd: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6776.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6775.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Understood. So, let's say that we're only implementing a hurdle to 
<br>
discourage users from doing things wrong. I guess the efficiency of this 
<br>
will reside in the message displayed to the user (&quot;You are about to break 
<br>
the entire machine and you will be fined if you try to circumvent this in 
<br>
any way&quot;).
<br>
<p>Maybe the warning message should be set by administrators 
<br>
($OMPI/.../no-override.txt). It would certainly be more efficient :)
<br>
<p>Sylvain
<br>
<p>On Fri, 4 Sep 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I fear you all misunderstood me. This isn't a case of sabotage or nasty 
</span><br>
<span class="quotelev1">&gt; users, but simply people who do something that they don't realize can cause a 
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our example is quite simple. We have IB network for MPI messages, and several 
</span><br>
<span class="quotelev1">&gt; Ethernet NICs that are dedicated to system-level functions (e.g., RM 
</span><br>
<span class="quotelev1">&gt; communications, file system support). If the users access the TCP BTL, that 
</span><br>
<span class="quotelev1">&gt; code will utilize whatever TCP interface it wants - including the 
</span><br>
<span class="quotelev1">&gt; system-level ones.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The obvious solution is to set the btl_tcp_include param in the default MCA 
</span><br>
<span class="quotelev1">&gt; param file. However, in their ignorance, users will do an ompi_info, see that 
</span><br>
<span class="quotelev1">&gt; param, see the available interfaces, and set it improperly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your solution won't solve that problem. When users encounter such obstacles, 
</span><br>
<span class="quotelev1">&gt; it is because they are trying to run normally (i.e., using defaults) and 
</span><br>
<span class="quotelev1">&gt; encountering problems - which usually have nothing to do with constraints 
</span><br>
<span class="quotelev1">&gt; imposed in the default params. They talk to each other and discover that 
</span><br>
<span class="quotelev1">&gt; &quot;joe&quot; built his own version of OMPI and was able to run. Presto - they use 
</span><br>
<span class="quotelev1">&gt; his, which doesn't have the same protections as the production version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And now they make a mistake that causes a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So this isn't a security issue, nor a problem where somebody is trying to be 
</span><br>
<span class="quotelev1">&gt; stupid or do bad things. It is an inherent &quot;problem&quot; in OMPI that is caused 
</span><br>
<span class="quotelev1">&gt; by our desire to provide &quot;flexibility&quot; and &quot;control&quot; to the users, as opposed 
</span><br>
<span class="quotelev1">&gt; to deliberately restricting &quot;control&quot; to the sys admins.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My intent was not to argue that this isn't worth doing, but simply to warn 
</span><br>
<span class="quotelev1">&gt; you that similar attempts met with failure to fully achieve the desired goal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2009, at 7:59 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 2009-09-04 at 07:50 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me point out the obvious since this has plagued us at LANL with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regard to this concept. If a user wants to do something different, all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they have to do is download and build their own copy of OMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Amazingly enough, that is exactly what they do. When we build our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; production versions, we actually &quot;no-build&quot; modules we don't want them
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using (e.g., certain BTL's that use privileged network interfaces) so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; even MCA params won't let them do something undesirable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No good - they just try until they realize it won't work, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; download and build their own version...and merrily hose the system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My point here: this concept can help, but it should in no way be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; viewed as a solution to the problem you are trying to solve. It is at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; best a minor obstacle as we made it very simple for a user to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; circumvent such measures.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which is why I never made the effort to actually implement what was in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that ticket. It was decided that it really wouldn't help us here, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would only result in further encouraging user-owned builds.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let's forget those people who intentionally do bad things: it's true
</span><br>
<span class="quotelev2">&gt;&gt; that they will always find a way to bypass whatever has been done...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are not talking about security here, but there are client sites where
</span><br>
<span class="quotelev2">&gt;&gt; people do not want to care about some mca params values and where those
</span><br>
<span class="quotelev2">&gt;&gt; system-wide params should not be *unintentionally* set to different
</span><br>
<span class="quotelev2">&gt;&gt; values.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nadia
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 4, 2009, at 12:42 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 4, 2009, at 8:26 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can the file name ( openmpi-priv-mca-params.conf ) also be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configurable ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; No, it isn't, presently, but this can be changed if needed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If it's configurable, it must be configurable at configure time --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not run time -- otherwise, a user could just give a different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; filename at runtime and get around all the &quot;privileged&quot; values.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6778.php">Kenneth Lloyd: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6776.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6775.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
