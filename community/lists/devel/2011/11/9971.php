<?
$subject_val = "[OMPI devel] PGI error invoked when svnversion is unavailable";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 15 15:45:24 2011" -->
<!-- isoreceived="20111115204524" -->
<!-- sent="Tue, 15 Nov 2011 14:49:53 -0600" -->
<!-- isosent="20111115204953" -->
<!-- name="Thomas Rothrock CTR SMDC SimCtr/GaN Corporation" -->
<!-- email="thomas.w.rothrock.ctr_at_[hidden]" -->
<!-- subject="[OMPI devel] PGI error invoked when svnversion is unavailable" -->
<!-- id="BD36066269DB4A4BB18E7D99D297C5F4411446BB69_at_WSUS.simctr.usasmdch" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] PGI error invoked when svnversion is unavailable<br>
<strong>From:</strong> Thomas Rothrock CTR SMDC SimCtr/GaN Corporation (<em>thomas.w.rothrock.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-15 15:49:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9972.php">Larry Baker: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>Previous message:</strong> <a href="9970.php">Matthias Jurenz: "Re: [OMPI devel] VT issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9972.php">Larry Baker: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>Reply:</strong> <a href="9972.php">Larry Baker: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am building on a separate (unnetworked) system than the one I check out
<br>
SVN sources from, thus subversion was never installed on this system and the
<br>
&quot;svnversion&quot; command is unavailable.  After configure, this eventually
<br>
results in OPAL_IDENT_STRING getting set to an empty string (&quot;&quot;).  This
<br>
seems to invoke an odd error in the Portland Group (PGI) C compiler (pgcc),
<br>
such that
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#pragma ident &quot;&quot;
<br>
<p>results in:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PGC-F-0010-File write error occurred (temporary pragma .s file)
<br>
<p>which is is a bit misleading and took me a while to track down the problem.
<br>
My testing has shown that the C++ compiler (pgCC) does not fail with the
<br>
same error (or any error at all) and completes, but pgcc fails this case in
<br>
at least all versions since 8.0-6 and probably earlier.  I have filed a
<br>
support request with PGI to see what they say about it, but of course this
<br>
does nothing for current and older versions.  My quick workaround was to
<br>
just install subversion so that the empty string never gets set to begin
<br>
with.  Ultimately though should OPAL_IDENT_STRING be ending up empty when
<br>
the &quot;svnversion&quot; command is not available?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tom Rothrock          &lt;Thomas.W.Rothrock.CTR_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US Army Space &amp; Missile Defense Command Simulation Center
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256-955-3382 (DSN 645)                   FAX 256-955-1231
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;<a href="http://www.sc.army.mil">http://www.sc.army.mil</a>&gt; Main SimCtr Phone:  256-955-3750
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This email capability is supported by Department of Defense
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;systems and is subject to monitoring.  Please refrain from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;using this address for non-Government purposes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------------------------------------------------
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9971/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9972.php">Larry Baker: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>Previous message:</strong> <a href="9970.php">Matthias Jurenz: "Re: [OMPI devel] VT issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9972.php">Larry Baker: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>Reply:</strong> <a href="9972.php">Larry Baker: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
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
