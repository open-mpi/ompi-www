<?
$subject_val = "Re: [OMPI devel] Change in btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 18 13:00:46 2008" -->
<!-- isoreceived="20080418170046" -->
<!-- sent="Fri, 18 Apr 2008 13:00:40 -0400" -->
<!-- isosent="20080418170040" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in btl/tcp" -->
<!-- id="4E79A4F8-78AB-44CF-8A0D-87776C0BF4D5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080418165605.GK15077_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Change in btl/tcp<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-18 13:00:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3722.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="3720.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="3720.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3722.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="3722.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm seeing this problem as well even running just 4 processes on a  
<br>
single node (though not as frequently as with higher process counts).  
<br>
The trick is to force Open MPI to use only tcp,self and nothing else.  
<br>
Did you try adding this (-mca btl tcp,self) to the runtime parameter  
<br>
set?
<br>
<p>-- Josh
<br>
<p>On Apr 18, 2008, at 12:56 PM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Apr 18, 2008 at 08:04:17AM -0400, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Adrian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After this change, I am getting a lot of errors of the form:
</span><br>
<span class="quotelev2">&gt;&gt; [sif2][[12854,1],9][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by
</span><br>
<span class="quotelev2">&gt;&gt; peer (104)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See for instance: <a href="http://www.open-mpi.org/mtt/index.php?do_redir=615">http://www.open-mpi.org/mtt/index.php?do_redir=615</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's weird. I've tried hello_c.c on about ten machines with  
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev1">&gt; network configurations, none of them showed any problems at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have a very special setup? And if need be, would it be possible
</span><br>
<span class="quotelev1">&gt; to debug on your machine?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From all MTT sites, this error only occurs on Odin and Sif. What's so
</span><br>
<span class="quotelev1">&gt; special with these clusters?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have found this especially easy to reproduce if I run 16  
</span><br>
<span class="quotelev2">&gt;&gt; processes all
</span><br>
<span class="quotelev2">&gt;&gt; with just the tcp and self btls on the same machine, running the
</span><br>
<span class="quotelev2">&gt;&gt; 'hello_c' program in the examples directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, I can't reproduce it that way. If this is related to  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; change, then it would mean that mca_btl_tcp_proc_accept() returns  
</span><br>
<span class="quotelev1">&gt; false,
</span><br>
<span class="quotelev1">&gt; either after the large loop or in mca_btl_tcp_endpoint_accept().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have the cycles to add some BTL_VERBOSE-lines to see where  
</span><br>
<span class="quotelev1">&gt; things
</span><br>
<span class="quotelev1">&gt; go wrong? Or even to step through with the debugger?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want me to do it, I would provide you with my ssh key?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheerio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP/GPG: key via keyserver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Das Sterben wird nur halb so schlimm, rauchst du KIM.
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
<li><strong>Next message:</strong> <a href="3722.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="3720.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="3720.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3722.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="3722.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
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
