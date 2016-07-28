<?
$subject_val = "Re: [OMPI devel] ofud on InfiniPath?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 05:50:42 2011" -->
<!-- isoreceived="20110503095042" -->
<!-- sent="Tue, 3 May 2011 11:50:31 +0200" -->
<!-- isosent="20110503095031" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ofud on InfiniPath?" -->
<!-- id="201105031150.35567.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4DBEF3B1.2010509_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ofud on InfiniPath?<br>
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 05:50:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9239.php">Jeff Squyres: "Re: [OMPI devel] ofud on InfiniPath?"</a>
<li><strong>Previous message:</strong> <a href="9237.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>In reply to:</strong> <a href="9236.php">Paul H. Hargrove: "[OMPI devel] ofud on InfiniPath?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9239.php">Jeff Squyres: "Re: [OMPI devel] ofud on InfiniPath?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, May 02, 2011 08:10:57 PM Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Has anybody successfully used the &quot;ofud&quot; BTL with Qlogic/InfniPath HCAs ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know &quot;ofud&quot; is not for production, but I am seeing evidence that an
</span><br>
<span class="quotelev1">&gt; InfiniPath_QLE7140 HCA cannot pass UD traffic and wanted to know if this
</span><br>
<span class="quotelev1">&gt; was a known issue.  If anybody *has* used UD w/ this class of HCA then I
</span><br>
<span class="quotelev1">&gt; will know to look elsewhere for the problem.
</span><br>
<p>Just a piece of data, the ib_send_lat test from the perftest pkg (OFED) claims
<br>
to be able to run on UD (from -h output):
<br>
<p>&nbsp;Usage:
<br>
&nbsp;&nbsp;&nbsp;ib_send_lat            start a server and wait for connection
<br>
&nbsp;&nbsp;&nbsp;ib_send_lat &lt;host&gt;     connect to server at &lt;host&gt;
<br>
<p>&nbsp;Options:
<br>
&nbsp;&nbsp;&nbsp;-p, --port=&lt;port&gt;            Listen on/connect to port &lt;port&gt; (default 18515)
<br>
&nbsp;&nbsp;&nbsp;-c, --connection=&lt;RC/UC/UD&gt;  Connection type RC/UC/UD (default RC)
<br>
&nbsp;...
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9238/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9239.php">Jeff Squyres: "Re: [OMPI devel] ofud on InfiniPath?"</a>
<li><strong>Previous message:</strong> <a href="9237.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24665"</a>
<li><strong>In reply to:</strong> <a href="9236.php">Paul H. Hargrove: "[OMPI devel] ofud on InfiniPath?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9239.php">Jeff Squyres: "Re: [OMPI devel] ofud on InfiniPath?"</a>
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
