<?
$subject_val = "Re: [OMPI users] Question on OpenMPI backwards compatibility";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 12:43:56 2016" -->
<!-- isoreceived="20160226174356" -->
<!-- sent="Fri, 26 Feb 2016 10:43:54 -0700" -->
<!-- isosent="20160226174354" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on OpenMPI backwards compatibility" -->
<!-- id="56D08EDA.4070407_at_lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CE1DD51_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on OpenMPI backwards compatibility<br>
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-26 12:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28594.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
<li><strong>Previous message:</strong> <a href="28592.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28590.php">Blosch, Edwin L: "[OMPI users] Question on OpenMPI backwards compatibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28594.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
<li><strong>Reply:</strong> <a href="28594.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Edwin,
<br>
<p>The versioning scheme changed with 2.x. Prior to 2.x the &quot;Minor&quot; version 
<br>
had a different definition and did not mention backwards compatibility 
<br>
at all (at least in my 1.6.x tarballs). As it turned out for 1.8.x and 
<br>
1.6.x, 1.8.x was not backwards compatible with 1.6.x, so the behavior 
<br>
you saw in your test of 1.6.x-compiled code running against 1.8.x is 
<br>
expected. In practice, 1.x was never backwards compatible with 1.y where 
<br>
x&gt;y, even though the versioning documentation at the time didn't 
<br>
specifically mention it.
<br>
<p>There is a note in the versioning documentation 
<br>
(<a href="https://www.open-mpi.org/software/ompi/versions/">https://www.open-mpi.org/software/ompi/versions/</a>) that does warn of 
<br>
this change in the versioning scheme:
<br>
<p>NOTE: The version numbering conventions were changed with the release
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of v1.10.0.  Most notably, Open MPI no longer uses an &quot;odd/even&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;release schedule to indicate feature development vs. stable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;releases.  See the README in releases prior to v1.10.0 for more
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;information (e.g.,
<br>
<a href="https://github.com/open-mpi/ompi-release/blob/v1.8/README#L1392-L1475">https://github.com/open-mpi/ompi-release/blob/v1.8/README#L1392-L1475</a>).
<br>
<p>There is also a CAVEAT underneath the &quot;Major&quot; section of the versioning 
<br>
documentation that says that 1.10.x is not backwards compatible with 
<br>
other 1.x releases and that the same rule applies to anything before 
<br>
1.10.0. Perhaps another CAVEAT could be placed after the &quot;Minor&quot; section 
<br>
since the information on backwards compatibility in the &quot;Minor&quot; section 
<br>
only applies to 2.x and beyond.
<br>
<p>The developers are still in the midst of the version scheme transition 
<br>
(developing on both 1.10.x and 2.x), so the FAQ entries might be a bit 
<br>
out-dated for the new numbering scheme for a while.
<br>
<p>Thanks,
<br>
David
<br>
<p>On 02/26/2016 09:20 AM, Blosch, Edwin L wrote:
<br>
<span class="quotelev1">&gt; I am confused about backwards-compatibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FAQ #111 says:
</span><br>
<span class="quotelev1">&gt; Open MPI reserves the right to break ABI compatibility at new feature release series. ..... MPI applications compiled/linked against Open MPI 1.6.x will not be ABI compatible with Open MPI 1.7.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the versioning documentation says:
</span><br>
<span class="quotelev1">&gt;    * Minor: The minor number is the second integer in the version string.  ....  Backwards compatibility will still be preserved with prior releases that have the same major version number (e.g., v2.5.3 is backwards compatible with v2.3.1).	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These two examples and statements appear inconsistent to me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I use OpenMPI 1.7.x run-time and options to execute codes built with OpenMPI 1.6.x?   No (FAQ #111)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I use OpenMPI 2.5.x run-time and options to execute codes built with OpenMPI 2.3.x?   Yes (s/w versioning documentation)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I use OpenMPI 1.8.x run-time and options to execute codes built with OpenMPI 1.6.x?   Who knows?!  I tested this once, and it failed.  I made the assumption that 1.8.x wouldn't run a 1.6.x code, and I moved on.  But I realize now that I could have made a mistake.  The test I performed could have failed for some other reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone shed some light?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28590.php">http://www.open-mpi.org/community/lists/users/2016/02/28590.php</a>
</span><br>
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28594.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
<li><strong>Previous message:</strong> <a href="28592.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28590.php">Blosch, Edwin L: "[OMPI users] Question on OpenMPI backwards compatibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28594.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
<li><strong>Reply:</strong> <a href="28594.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
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
