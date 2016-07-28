<?
$subject_val = "[OMPI devel] Changes: opal_output and opal_show_help";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  9 17:52:25 2008" -->
<!-- isoreceived="20080509215225" -->
<!-- sent="Fri, 9 May 2008 17:52:15 -0400" -->
<!-- isosent="20080509215215" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Changes: opal_output and opal_show_help" -->
<!-- id="DFC91EB9-4E9D-40BC-BD71-D83471857392_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Changes: opal_output and opal_show_help<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-09 17:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3883.php">George Bosilca: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3881.php">Ralph Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3883.php">George Bosilca: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Reply:</strong> <a href="3883.php">George Bosilca: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Reply:</strong> <a href="3884.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the teleconf this week, Ralph and I worked up two new features  
<br>
that we're nearly ready to put back in the trunk:
<br>
<p>1. IBM+LANL needed a way to XML-ize all output that comes out of OMPI  
<br>
so that 3rd party tools can parse and use it intelligently (e.g., the  
<br>
PTP debugger can now distinguish between OMPI error messages and  
<br>
stderr from the MPI app).
<br>
<p>2. In order to do #1, we created separate logical channels (vs, just  
<br>
throwing everything in stderr and letting IOF relay it back to the  
<br>
HNP) for the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- stdout/stderr from the MPI app
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- opal_show_help() messages (***)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- opal_output*() messages (***)
<br>
As a side effect, we now filter show_help() messages and only print  
<br>
them *once* at the HNP (this has been a very long-standing goal of  
<br>
mine).  So if your MPI app barfs, you will no longer see the same  
<br>
show_help() error message N times -- you'll see it only once, possibly  
<br>
accompanied with a &quot;...and we got the same error message from N other  
<br>
processes&quot; notice.
<br>
<p>(***) To make both #1 and #2 work, we had to raise the abstraction  
<br>
level.  That is, there had to be job-level intelligence about the  
<br>
different kinds of output.  So we have created orte_output() (and  
<br>
friends) and orte_show_help().  The OPAL variants still exist, but  
<br>
they *SHOULD NOT BE USED* by the MPI layer.  Specifically, the OPAL  
<br>
variants are for what OPAL does best: single process stuff.  The ORTE  
<br>
variants provide the job-level intelligence, such as duplicate  
<br>
show_help filtering, relaying to the HNP in a different channel than  
<br>
IOF, etc.
<br>
<p>So when this stuff hits the trunk, you'll see a ton of s/opal_output/ 
<br>
orte_output/g and /opal_show_help/orte_show_help/g changes throughout  
<br>
the code base.  Do not be alarmed.  :-)
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
<li><strong>Next message:</strong> <a href="3883.php">George Bosilca: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3881.php">Ralph Castain: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3883.php">George Bosilca: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Reply:</strong> <a href="3883.php">George Bosilca: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Reply:</strong> <a href="3884.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
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
