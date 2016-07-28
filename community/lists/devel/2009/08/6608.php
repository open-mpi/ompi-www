<?
$subject_val = "[OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  8 08:03:46 2009" -->
<!-- isoreceived="20090808120346" -->
<!-- sent="Sat, 8 Aug 2009 08:03:40 -0400" -->
<!-- isosent="20090808120340" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: convert send to ssend" -->
<!-- id="251BBF1D-7817-4F7F-82A4-30A4512D19C1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: convert send to ssend<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-08 08:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6609.php">Ralph Castain: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6607.php">Ralph Castain: "Re: [OMPI devel] sm_coll segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6609.php">Ralph Castain: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6609.php">Ralph Castain: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6696.php">Chris Samuel: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: MCA parameter for converting all standard mode MPI sends to  
<br>
synchronous mode sends
<br>
<p>WHY: helpful in debugging user apps
<br>
<p>WHERE: here's the output from &quot;svn st&quot;
<br>
<p>M       ompi/runtime/params.h
<br>
M       ompi/runtime/ompi_mpi_params.c
<br>
M       ompi/mpi/c/send.c
<br>
M       ompi/mpi/c/send_init.c
<br>
M       ompi/mpi/c/sendrecv.c
<br>
M       ompi/mpi/c/isend.c
<br>
<p>WHEN: could be 1.3.4, could be 1.5 -- don't really care which (there's  
<br>
no rush)
<br>
<p>TIMEOUT: COB Friday 14 Aug 2009
<br>
<p>More details:
<br>
<p>A feature we've long talked about is having an MCA parameter to switch  
<br>
all standard mode MPI sends to synchronous mode sends (MPI_SEND,  
<br>
MPI_ISEND, MPI_SEND_INIT, MPI_SENDRECV).  This helps users identify  
<br>
that their application relies on internal MPI buffering.
<br>
<p>Sam from LANL took a crack at implementing this; attached is the patch.
<br>
<p>The only concern I have about this patch (echoed by Brian to me in IM)  
<br>
is that it replaces a compile-time constant with a variable lookup in  
<br>
the critical performance code path -- we have to look up the value of  
<br>
a new global variable during MPI_SEND to determine if the send is  
<br>
going to be _SEND_STANDARD or _SEND_SYNCHRONOUS.  This could cause a  
<br>
cache miss.
<br>
<p>Brian suggested making this stuff compile-out-able via some -- 
<br>
configure-cmd-line-switch, similar to how the MPI parameter checking  
<br>
stuff is done (i.e., configure specifies either: always force sync,  
<br>
never force sync, or force to sync based on an MCA parameter value at  
<br>
runtime).  This is certainly do-able.  However, I'm sending this RFC  
<br>
just in case anyone can think of a better way.  Having a compile-time  
<br>
option to effectively remove this capability works fine, but it does  
<br>
reduce the usability of this feature: you effectively have to link  
<br>
your app against a different libmpi.so in order to turn it on.
<br>
<p>Does anyone have any suggestions?  Or are we stuck with compile-time  
<br>
checking?
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6608/send-to-ssend.patch">send-to-ssend.patch</a>
</ul>
<!-- attachment="send-to-ssend.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6609.php">Ralph Castain: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6607.php">Ralph Castain: "Re: [OMPI devel] sm_coll segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6609.php">Ralph Castain: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6609.php">Ralph Castain: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6696.php">Chris Samuel: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
