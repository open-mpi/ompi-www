<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 28 16:58:28 2007" -->
<!-- isoreceived="20070528205828" -->
<!-- sent="Mon, 28 May 2007 14:58:06 -0600" -->
<!-- isosent="20070528205806" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] undefined environ symbol on Darwin" -->
<!-- id="50031055-A16E-47A4-8985-BE79E823BE00_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070528165935.GA1107_at_bromo.msbb.uc.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-28 16:58:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1592.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>In reply to:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1592.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2007, at 10:59 AM, Jack Howarth wrote:
<br>
<p><span class="quotelev1">&gt;    On MacOS X, the current v1.1.5 and v1.2.2 sources for openmpi
</span><br>
<span class="quotelev1">&gt; create shared libraries with undefined environ symbols. This
</span><br>
<span class="quotelev1">&gt; problem on MacOS X and the available workarounds are discussed
</span><br>
<span class="quotelev1">&gt; on the fink wiki section on Porting Notes...
</span><br>
<p>I understand the problem, but am curious how you are running into  
<br>
it.  Open MPI's shared libraries are built with a flat namespace and  
<br>
undefined errors suppressed.  An application will always have environ  
<br>
defined, so this could only happen when linking a dynamic library  
<br>
against the Open MPI libraries.  When testing this, however, I wasn't  
<br>
able to have create a situation where the linker complained that  
<br>
environ wasn't defined unless the new (MPI-using) library also  
<br>
included environ.  Do you have an example where Open MPI using  
<br>
environ causes problems?  If so, could you send the link command and  
<br>
output from this error?  Or even better, a test case?
<br>
<p>While I agree that long term this wouldn't be a bad thing to fix, I  
<br>
really hate making OS-specific hacks in the Open MPI source code if  
<br>
we don't absolutely have to.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1591/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1592.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>In reply to:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1592.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
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
