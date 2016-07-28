<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 10:22:43 2009" -->
<!-- isoreceived="20090904142243" -->
<!-- sent="Fri, 4 Sep 2009 08:22:28 -0600" -->
<!-- isosent="20090904142228" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="9251DC75-CDD8-445C-9C00-24E5EC039EE7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1252072753.2636.289.camel_at_frecb000730.frec.bull.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 10:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6776.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6774.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6774.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6777.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6777.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fear you all misunderstood me. This isn't a case of sabotage or  
<br>
nasty users, but simply people who do something that they don't  
<br>
realize can cause a problem.
<br>
<p>Our example is quite simple. We have IB network for MPI messages, and  
<br>
several Ethernet NICs that are dedicated to system-level functions  
<br>
(e.g., RM communications, file system support). If the users access  
<br>
the TCP BTL, that code will utilize whatever TCP interface it wants -  
<br>
including the system-level ones.
<br>
<p>The obvious solution is to set the btl_tcp_include param in the  
<br>
default MCA param file. However, in their ignorance, users will do an  
<br>
ompi_info, see that param, see the available interfaces, and set it  
<br>
improperly.
<br>
<p>Your solution won't solve that problem. When users encounter such  
<br>
obstacles, it is because they are trying to run normally (i.e., using  
<br>
defaults) and encountering problems - which usually have nothing to do  
<br>
with constraints imposed in the default params. They talk to each  
<br>
other and discover that &quot;joe&quot; built his own version of OMPI and was  
<br>
able to run. Presto - they use his, which doesn't have the same  
<br>
protections as the production version.
<br>
<p>And now they make a mistake that causes a problem.
<br>
<p>So this isn't a security issue, nor a problem where somebody is trying  
<br>
to be stupid or do bad things. It is an inherent &quot;problem&quot; in OMPI  
<br>
that is caused by our desire to provide &quot;flexibility&quot; and &quot;control&quot; to  
<br>
the users, as opposed to deliberately restricting &quot;control&quot; to the sys  
<br>
admins.
<br>
<p>My intent was not to argue that this isn't worth doing, but simply to  
<br>
warn you that similar attempts met with failure to fully achieve the  
<br>
desired goal.
<br>
<p><p>On Sep 4, 2009, at 7:59 AM, Nadia Derbey wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 2009-09-04 at 07:50 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Let me point out the obvious since this has plagued us at LANL with
</span><br>
<span class="quotelev2">&gt;&gt; regard to this concept. If a user wants to do something different,  
</span><br>
<span class="quotelev2">&gt;&gt; all
</span><br>
<span class="quotelev2">&gt;&gt; they have to do is download and build their own copy of OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Amazingly enough, that is exactly what they do. When we build our
</span><br>
<span class="quotelev2">&gt;&gt; production versions, we actually &quot;no-build&quot; modules we don't want  
</span><br>
<span class="quotelev2">&gt;&gt; them
</span><br>
<span class="quotelev2">&gt;&gt; using (e.g., certain BTL's that use privileged network interfaces) so
</span><br>
<span class="quotelev2">&gt;&gt; even MCA params won't let them do something undesirable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No good - they just try until they realize it won't work, then
</span><br>
<span class="quotelev2">&gt;&gt; download and build their own version...and merrily hose the system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My point here: this concept can help, but it should in no way be
</span><br>
<span class="quotelev2">&gt;&gt; viewed as a solution to the problem you are trying to solve. It is at
</span><br>
<span class="quotelev2">&gt;&gt; best a minor obstacle as we made it very simple for a user to
</span><br>
<span class="quotelev2">&gt;&gt; circumvent such measures.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which is why I never made the effort to actually implement what was  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; that ticket. It was decided that it really wouldn't help us here, and
</span><br>
<span class="quotelev2">&gt;&gt; would only result in further encouraging user-owned builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's forget those people who intentionally do bad things: it's true
</span><br>
<span class="quotelev1">&gt; that they will always find a way to bypass whatever has been done...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are not talking about security here, but there are client sites  
</span><br>
<span class="quotelev1">&gt; where
</span><br>
<span class="quotelev1">&gt; people do not want to care about some mca params values and where  
</span><br>
<span class="quotelev1">&gt; those
</span><br>
<span class="quotelev1">&gt; system-wide params should not be *unintentionally* set to different
</span><br>
<span class="quotelev1">&gt; values.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 4, 2009, at 12:42 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 4, 2009, at 8:26 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can the file name ( openmpi-priv-mca-params.conf ) also be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configurable ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, it isn't, presently, but this can be changed if needed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it's configurable, it must be configurable at configure time --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not run time -- otherwise, a user could just give a different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; filename at runtime and get around all the &quot;privileged&quot; values.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
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
<li><strong>Next message:</strong> <a href="6776.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6774.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6774.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6777.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6777.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
