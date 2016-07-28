<?
$subject_val = "Re: [OMPI devel] --enable-opal-multi-threads";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 15 11:24:46 2011" -->
<!-- isoreceived="20110215162446" -->
<!-- sent="Tue, 15 Feb 2011 08:24:03 -0800" -->
<!-- isosent="20110215162403" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --enable-opal-multi-threads" -->
<!-- id="4D5AA8A3.4030704_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="242F98F5-4A35-4D30-80EC-281DC33EE90B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] --enable-opal-multi-threads<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-15 11:24:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8989.php">Ralph Castain: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>Previous message:</strong> <a href="8987.php">Ralph Castain: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>In reply to:</strong> <a href="8987.php">Ralph Castain: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8989.php">Ralph Castain: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>Reply:</strong> <a href="8989.php">Ralph Castain: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;On Feb 14, 2011, at 9:26 PM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Mon, 14 Feb 2011, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;If the ability to turn &quot;on&quot; thread support is missing from 1.5, then that is an error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;No, it was changed from &quot;--enable-mpi-threads&quot; to &quot;--enable-opal-multi-threads&quot; on the trunk in r22841 [1].
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;If the changeset has not been brought over to v1.5, it indeed looks like an anachronism in the README.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[1] <a href="https://svn.open-mpi.org/trac/ompi/changeset/22841">https://svn.open-mpi.org/trac/ompi/changeset/22841</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;My point is that it isn't an anachronism in the README, but an error in 1.5 - it needs to have the ability to turn on thread safety.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I'm not sure if we're making progress here.  So far as I can tell, the 
<br>
v1.5 README talks about --enable-opal-multi-threads.  This option does 
<br>
not otherwise appear in v1.5, but only in the trunk.  So, to make the 
<br>
v1.5 README consistent with the v1.5 source code (as opposed to talking 
<br>
about features that will appear in unspecified future releases), either:
<br>
<p>*) the comment should be removed from the README, or
<br>
<p>*) opal-multi-threads should be CMRed to v1.5
<br>
<p><span class="quotelev3">&gt;&gt;&gt;On Feb 14, 2011, at 5:36 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;In the v1.5 README, I see this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--enable-opal-multi-threads
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Enables thread lock support in the OPAL and ORTE layers. Does
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;not enable MPI_THREAD_MULTIPLE - see above option for that feature.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;This is currently disabled by default.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I don't otherwise find opal-multi-threads at all in this branch.  It seems to me, for such an option, one needs to move to the trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Is this an error (anachronism) in the v1.5 README?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8989.php">Ralph Castain: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>Previous message:</strong> <a href="8987.php">Ralph Castain: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>In reply to:</strong> <a href="8987.php">Ralph Castain: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8989.php">Ralph Castain: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>Reply:</strong> <a href="8989.php">Ralph Castain: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
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
