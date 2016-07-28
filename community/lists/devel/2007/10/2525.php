<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 30 15:06:59 2007" -->
<!-- isoreceived="20071030190659" -->
<!-- sent="Tue, 30 Oct 2007 20:06:52 +0100 (CET)" -->
<!-- isosent="20071030190652" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]" -->
<!-- id="Pine.LNX.4.64.0710301946460.28382_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071030173128.GA17029_at_qlogic.com" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-30 15:06:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2526.php">Jeff Squyres: "Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>Previous message:</strong> <a href="2524.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2524.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2527.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2527.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 30 Oct 2007, Tom Mitchell wrote:
<br>
<p><span class="quotelev1">&gt; No but there are choices in how pathcc can be invoked and thus what 
</span><br>
<span class="quotelev1">&gt; frontend and other chunks are active.
</span><br>
<p>$ pathcc -v
<br>
QLogic PathScale(TM) Compiler Suite: Version 3.0
<br>
Built on: 2007-02-22 13:05:15 -0800
<br>
Thread model: posix
<br>
GNU gcc version 4.0.2 (PathScale 3.0 driver)
<br>
<p>$ pathcc -v -gnu4
<br>
QLogic PathScale(TM) Compiler Suite: Version 3.0
<br>
Built on: 2007-02-22 13:05:15 -0800
<br>
Thread model: posix
<br>
GNU gcc version 4.0.2 (PathScale 3.0 driver)
<br>
<p>$ pathcc -v -gnu3
<br>
QLogic PathScale(TM) Compiler Suite: Version 3.0
<br>
Built on: 2007-02-22 13:05:15 -0800
<br>
Thread model: posix
<br>
GNU gcc version 3.3.1 (PathScale 3.0 driver)
<br>
<p>So pathcc effectively uses on this system by default the 4.0 model, 
<br>
which matches somehow the default compiler on the system. It's only
<br>
&quot;somehow&quot; because gcc is actually 4.1 (different minor version), while 
<br>
on RHEL4 it matches exactly.
<br>
<p><span class="quotelev1">&gt; Try adding -gnu4 to the &quot;C&quot; flags and see if the segmentation faults 
</span><br>
<span class="quotelev1">&gt; exit.
</span><br>
<p>Given that the default seems to be -gnu4, should I expect any change ? 
<br>
I can't test right now...
<br>
<p><span class="quotelev1">&gt; Since you are on Debian it may be interesting to see what 
</span><br>
<span class="quotelev1">&gt; 'configure' found and what the generated compile line for orterun 
</span><br>
<span class="quotelev1">&gt; and it's library functions ended up being. This can include the 
</span><br>
<span class="quotelev1">&gt; &quot;libtool&quot; lines.
</span><br>
<p>Bad timing... I don't have access to the files at the moment, I'll 
<br>
write back shortly (which probably means tomorrow ;-)).
<br>
<p><pre>
-- 
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2526.php">Jeff Squyres: "Re: [OMPI devel] Question regarding MCA_PML_CM_SEND_REQUEST_INIT_COMMON"</a>
<li><strong>Previous message:</strong> <a href="2524.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2524.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2527.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2527.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
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
