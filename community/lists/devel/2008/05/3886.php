<?
$subject_val = "Re: [OMPI devel] Changes: opal_output and opal_show_help";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 10 08:59:43 2008" -->
<!-- isoreceived="20080510125943" -->
<!-- sent="Sat, 10 May 2008 08:59:35 -0400" -->
<!-- isosent="20080510125935" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changes: opal_output and opal_show_help" -->
<!-- id="5EA64D6E-B66A-4D29-BA52-53BFE69DC5DA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1A301B6A-0260-4E84-ACF2-257C468D0D19_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Changes: opal_output and opal_show_help<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-10 08:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3887.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3885.php">Rainer Keller: "Re: [OMPI devel] &quot;__printf__&quot; attribute"</a>
<li><strong>In reply to:</strong> <a href="3883.php">George Bosilca: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3884.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, if you want to look at the code and changelog, it's here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/rhc/channel/">http://www.open-mpi.org/hg/hgwebdir.cgi/rhc/channel/</a>
<br>
<p>FWIW, the short answer to many of your questions is: orte_show_help()  
<br>
and orte_output() are almost identical to their OPAL counterparts.   
<br>
They have a few extensions to provide simple and desirable semantics  
<br>
that make the output scheme more cohesive to a job (vs. a single OPAL  
<br>
process).  They also allow better integration with 3rd party tools by  
<br>
separating user MPI process output from OMPI infrastructure output.
<br>
<p>FWIW: the &quot;eliminate duplicate help messages&quot; functionality is a side  
<br>
effect of these goals; I seized upon the opportunity to implement it  
<br>
with the new infrastructure because I've wanted this feature for a  
<br>
long, long, looooong time.  :-)
<br>
<p>Here's a brief comparison of the two:
<br>
<p>- opal_output() and opal_show_help() output to their process' stdout  
<br>
and/or stderr streams (indistinguishable from other stdout/stderr  
<br>
data).  stdout/stderr from MPI processes is picked up by the orted's  
<br>
IOF and RML sent to the HNP, and then output as part of the HNP's  
<br>
stdout/stderr streams.
<br>
<p>- orte_output() and orte_show_help() render the final message string  
<br>
and then RML send it to the HNP.  The HNP may apply some job-level  
<br>
intelligence (e.g., adding XML tagging based on who the message came  
<br>
from, eliminating duplicate show_help messages, etc.) before  
<br>
outputting it somewhere, such as the HNP's stdout and/or stderr.
<br>
<p>More details below.
<br>
<p><p>On May 9, 2008, at 6:37 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; 1) If I correctly understood, we need the orte_output and  
</span><br>
<span class="quotelev1">&gt; orte_show_help in order to be able to make a difference between the  
</span><br>
<span class="quotelev1">&gt; application stdout/stderr and the MPI library ones ? Who is applying  
</span><br>
<span class="quotelev1">&gt; the filter ? The local daemon or the HNP ? How do we make sure that  
</span><br>
<span class="quotelev1">&gt; the remote outputs are not interlaced ?
</span><br>
<p>orte_show_help() and orte_output() messages are sent via RML to the  
<br>
HNP (which is almost exactly what the IOF does).  The HNP listens for  
<br>
these RML messages and then displays them on the HNP stdout/stderr,  
<br>
conditionally applying component-based filtering (e.g., sending the  
<br>
output into a tagged XML stream, or whatever the filter component  
<br>
does), and in the case of show_help messages, checking to see whether  
<br>
the message has been displayed already or not.
<br>
<p>orte_show_help() messages are always sent to the HNP stderr (just like  
<br>
opal_show_help messages are always sent to stderr).
<br>
<p>orte_output() messages are sent to the HNP's stdout and/or stderr,  
<br>
depending on what was requested when the stream was opened (via  
<br>
orte_output_open(), quite similar to opal_output_open()).
<br>
<p>&lt;sidenote&gt;
<br>
<p>We had a long discussion about using the IOF for all of this stuff  
<br>
(IOF has tags that could have been used).  We ended up creating new  
<br>
RML sends instead for the following reasons:
<br>
<p>- The idea of the IOF is great, but the implementation is lacking in  
<br>
many ways.  We have several open tickets on the IOF, each of which  
<br>
will require a *lot* of work to fix.  We did not want to undertake  
<br>
that right now; there are many complex issues involved in fixing the  
<br>
IOF.
<br>
<p>- The argument that swayed me was that for orte_output() and  
<br>
orte_show_help(), the IOF adds little functionality over vanilla RML.   
<br>
In both the RML and IOF, you'd end up adding a callback handler to be  
<br>
called back when an output() or show_help() message arrives in the  
<br>
HNP.  So why include all the (complex and known buggy) IOF  
<br>
infrastructure?  Note: the functionality that we give up by using the  
<br>
RML instead of the IOF is what is not implemented in the IOF anyway  
<br>
(yet?) -- multiplexing output to multiple destinations.  Perhaps  
<br>
someday the IOF will be fixed and it will be worthwhile, but probably  
<br>
not any time soon.
<br>
<p>&lt;/sidenote&gt;
<br>
<p><span class="quotelev1">&gt; 2) Who is really generating the error message ?
</span><br>
<p>Excellent question: keep in mind the difference between *generating*  
<br>
(or rendering) the error message and *outputting* the error message.
<br>
<p>Whoever calls orte_output() or orte_show_help() renders the message  
<br>
(usually MPI processes, but even non-MPI-process entities such as  
<br>
orterun can invoke orte_show_help).  The message is then sent to the  
<br>
HNP to be output.
<br>
<p><span class="quotelev1">&gt; In your item #2 I wonder how do you make the difference between what  
</span><br>
<span class="quotelev1">&gt; need to be printed once (such as the PML initialization error) and  
</span><br>
<span class="quotelev1">&gt; what is supposed to be printed multiple times (such as BTL TCP  
</span><br>
<span class="quotelev1">&gt; connection failure) ?
</span><br>
<p>Only orte_show_help() messages are checked for duplicates.   
<br>
orte_output() are always output -- just like opal_output().
<br>
<p>Note that show_help() messages are already uniquely identified by  
<br>
(filename, topic) tuples.  So the MPI process renders the help message  
<br>
into a single string, and then RML sends this string along with the  
<br>
(filename, topic) tuple to the HNP.  The HNP examines the (filename,  
<br>
topic) tuple to determine if a similar message has already been  
<br>
printed (remember that we have printf-like expansion in the rendering  
<br>
of show_help messages, so it's unlikely that two messages of the same  
<br>
(filename, topic) tuple will be *exactly* the same, because we  
<br>
frequently include the hostname or other process-specific data in the  
<br>
message).  If a similar message has already been printed, the count  
<br>
for that (filename, topic) tuple is simply incremented and an  
<br>
aggregate &quot;Hey, I got N duplicates&quot; notice is printed every ~5 seconds  
<br>
(libevent is your friend) or when the HNP terminates -- whichever  
<br>
occurs first.
<br>
<p><span class="quotelev1">&gt; If the HPN is managing these error messages, this will force us to  
</span><br>
<span class="quotelev1">&gt; always install all error files, otherwise this approach cannot work  
</span><br>
<span class="quotelev1">&gt; on an heterogeneous environment (such as the local installation  
</span><br>
<span class="quotelev1">&gt; doesn't have infiniband support but the remote one include it).
</span><br>
<p>The specific error message is rendered in the MPI process not only for  
<br>
the reason you cite, but also because it's the only one that has all  
<br>
the relevant data (potentially to include the helpfile).  We could  
<br>
have bundled up all the printf-varargs and sent them to the HNP, but  
<br>
it didn't seem worth it.  It would probably be a bandwidth savings,  
<br>
but a) who cares about optimizing error messages?, and b) that then  
<br>
falls into the problem you noted (need all the helpfiles on the HNP).   
<br>
Mebbe someday.
<br>
<p>Regardless, the (filename, topic) tuple is still unique and doesn't  
<br>
require the actual file to reside in the HNP-visible filesystem.  From  
<br>
the HNP's perspective, it's just a pair of text tags.
<br>
<p><span class="quotelev1">&gt; 3) What is the OMPI layer supposed to use ? opal_output ?  
</span><br>
<span class="quotelev1">&gt; orte_output ? or maybe ompi_output ?
</span><br>
<p>opal_output / opal_show_help is for serial processes, just like the  
<br>
rest of the OPAL layer.
<br>
<p>We created these new ORTE functions to have job-specific intelligence.
<br>
<p>Ralph and I talked about creating OMPI variants, but we didn't know  
<br>
what kind of additional MPI-specific intelligence would be useful.   
<br>
Got any suggestions?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3887.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3885.php">Rainer Keller: "Re: [OMPI devel] &quot;__printf__&quot; attribute"</a>
<li><strong>In reply to:</strong> <a href="3883.php">George Bosilca: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3884.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
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
