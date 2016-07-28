<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  8 09:16:01 2009" -->
<!-- isoreceived="20090808131601" -->
<!-- sent="Sat, 8 Aug 2009 07:15:56 -0600" -->
<!-- isosent="20090808131556" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="71d2d8cc0908080615g3ad8484agb3122b23bfe2d94_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="251BBF1D-7817-4F7F-82A4-30A4512D19C1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: convert send to ssend<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-08 09:15:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6610.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Previous message:</strong> <a href="6608.php">Jeff Squyres: "[OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6608.php">Jeff Squyres: "[OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6696.php">Chris Samuel: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Given the limited scope, would it make sense to somehow add this to the
<br>
trace library (or a separate debug lib) - i.e., can we do it via a lib that
<br>
inserts itself between the MPI binding and PMPI call? I would hate to
<br>
duplicate the code in something like sendrecv, but I wonder if we could
<br>
refactor that to allow for this added capability.
<br>
<p>Just a thought. It would allow someone to switch back-and-forth without
<br>
recompiling or switching MPI modules.
<br>
<p><p>On Sat, Aug 8, 2009 at 6:03 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: MCA parameter for converting all standard mode MPI sends to
</span><br>
<span class="quotelev1">&gt; synchronous mode sends
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: helpful in debugging user apps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: here's the output from &quot;svn st&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/runtime/params.h
</span><br>
<span class="quotelev1">&gt; M       ompi/runtime/ompi_mpi_params.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mpi/c/send.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mpi/c/send_init.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mpi/c/sendrecv.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mpi/c/isend.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: could be 1.3.4, could be 1.5 -- don't really care which (there's no
</span><br>
<span class="quotelev1">&gt; rush)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: COB Friday 14 Aug 2009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A feature we've long talked about is having an MCA parameter to switch all
</span><br>
<span class="quotelev1">&gt; standard mode MPI sends to synchronous mode sends (MPI_SEND, MPI_ISEND,
</span><br>
<span class="quotelev1">&gt; MPI_SEND_INIT, MPI_SENDRECV).  This helps users identify that their
</span><br>
<span class="quotelev1">&gt; application relies on internal MPI buffering.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam from LANL took a crack at implementing this; attached is the patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only concern I have about this patch (echoed by Brian to me in IM) is
</span><br>
<span class="quotelev1">&gt; that it replaces a compile-time constant with a variable lookup in the
</span><br>
<span class="quotelev1">&gt; critical performance code path -- we have to look up the value of a new
</span><br>
<span class="quotelev1">&gt; global variable during MPI_SEND to determine if the send is going to be
</span><br>
<span class="quotelev1">&gt; _SEND_STANDARD or _SEND_SYNCHRONOUS.  This could cause a cache miss.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian suggested making this stuff compile-out-able via some
</span><br>
<span class="quotelev1">&gt; --configure-cmd-line-switch, similar to how the MPI parameter checking stuff
</span><br>
<span class="quotelev1">&gt; is done (i.e., configure specifies either: always force sync, never force
</span><br>
<span class="quotelev1">&gt; sync, or force to sync based on an MCA parameter value at runtime).  This is
</span><br>
<span class="quotelev1">&gt; certainly do-able.  However, I'm sending this RFC just in case anyone can
</span><br>
<span class="quotelev1">&gt; think of a better way.  Having a compile-time option to effectively remove
</span><br>
<span class="quotelev1">&gt; this capability works fine, but it does reduce the usability of this
</span><br>
<span class="quotelev1">&gt; feature: you effectively have to link your app against a different libmpi.so
</span><br>
<span class="quotelev1">&gt; in order to turn it on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any suggestions?  Or are we stuck with compile-time
</span><br>
<span class="quotelev1">&gt; checking?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6609/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6610.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Previous message:</strong> <a href="6608.php">Jeff Squyres: "[OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6608.php">Jeff Squyres: "[OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6696.php">Chris Samuel: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
