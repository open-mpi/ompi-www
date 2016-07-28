<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 16 12:57:14 2009" -->
<!-- isoreceived="20090216175714" -->
<!-- sent="Mon, 16 Feb 2009 12:57:11 -0500" -->
<!-- isosent="20090216175711" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562" -->
<!-- id="4CBB1DB3-FC79-4640-A884-52E269DC40E7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200902142151.n1ELp9kv017629_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-16 12:57:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5427.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5425.php">Jeff Squyres: "[OMPI devel] RFC: New Open MPI release procedure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5429.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<li><strong>Reply:</strong> <a href="5429.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit seems to have broken the tools. If I use orte-ps then on  
<br>
finalize I get an abort() with the following stack:
<br>
<p>shell$ orte-ps
<br>
...
<br>
(gdb) bt
<br>
#0  0x00002aaaabcee155 in raise () from /lib64/libc.so.6
<br>
#1  0x00002aaaabcefbf0 in abort () from /lib64/libc.so.6
<br>
#2  0x00002aaaabce75d6 in __assert_fail () from /lib64/libc.so.6
<br>
#3  0x00002aaaaaf734e1 in opal_evsignal_dealloc (base=0x609f50) at  
<br>
signal.c:295
<br>
#4  0x00002aaaaaf73f36 in poll_dealloc (base=0x609f50, arg=0x60a9a0)  
<br>
at poll.c:390
<br>
#5  0x00002aaaaaf70667 in opal_event_base_free (base=0x609f50) at  
<br>
event.c:530
<br>
#6  0x00002aaaaaf70519 in opal_event_fini () at event.c:390
<br>
#7  0x00002aaaaaf5f624 in opal_finalize () at runtime/opal_finalize.c: 
<br>
117
<br>
#8  0x00002aaaaacd4fc4 in orte_finalize () at runtime/orte_finalize.c:84
<br>
#9  0x000000000040196a in main (argc=1, argv=0x7fffffffdf38) at orte- 
<br>
ps.c:275
<br>
<p>Any thoughts on why this is happening for only the tools case?
<br>
<p>-- Josh
<br>
<p>On Feb 14, 2009, at 4:51 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2009-02-14 16:51:09 EST (Sat, 14 Feb 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 20562
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20562">https://svn.open-mpi.org/trac/ompi/changeset/20562</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Release the default base on finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/opal/event/event.c |     4 ++++
</span><br>
<span class="quotelev1">&gt;   1 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/event/event.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/event/event.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/event/event.c	2009-02-14 16:51:09 EST (Sat, 14 Feb  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -386,6 +386,10 @@
</span><br>
<span class="quotelev1">&gt;     if (NULL != opal_event_module_include) {
</span><br>
<span class="quotelev1">&gt;         opal_argv_free(opal_event_module_include);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    if( NULL != opal_current_base ) {
</span><br>
<span class="quotelev1">&gt; +        event_base_free(opal_current_base);
</span><br>
<span class="quotelev1">&gt; +        opal_current_base = NULL;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5427.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5425.php">Jeff Squyres: "[OMPI devel] RFC: New Open MPI release procedure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5429.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<li><strong>Reply:</strong> <a href="5429.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
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
