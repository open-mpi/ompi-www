<?
$subject_val = "Re: [OMPI users] Question on OpenMPI backwards compatibility";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 12:55:54 2016" -->
<!-- isoreceived="20160226175554" -->
<!-- sent="Fri, 26 Feb 2016 10:55:53 -0700" -->
<!-- isosent="20160226175553" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on OpenMPI backwards compatibility" -->
<!-- id="56D091A9.50509_at_lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56D08EDA.4070407_at_lanl.gov" -->
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
<strong>Date:</strong> 2016-02-26 12:55:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28595.php">Ralph Castain: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28593.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
<li><strong>In reply to:</strong> <a href="28593.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forgot to include a link to the official announcement of the change, 
<br>
and that info might be helpful in navigating the different versions and 
<br>
backwards compatibility:
<br>
<p><a href="https://www.open-mpi.org/community/lists/announce/2015/06/0069.php">https://www.open-mpi.org/community/lists/announce/2015/06/0069.php</a>
<br>
<p>Thanks,
<br>
David
<br>
<p>On 02/26/2016 10:43 AM, David Shrader wrote:
<br>
<span class="quotelev1">&gt; Hey Edwin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The versioning scheme changed with 2.x. Prior to 2.x the &quot;Minor&quot; 
</span><br>
<span class="quotelev1">&gt; version had a different definition and did not mention backwards 
</span><br>
<span class="quotelev1">&gt; compatibility at all (at least in my 1.6.x tarballs). As it turned out 
</span><br>
<span class="quotelev1">&gt; for 1.8.x and 1.6.x, 1.8.x was not backwards compatible with 1.6.x, so 
</span><br>
<span class="quotelev1">&gt; the behavior you saw in your test of 1.6.x-compiled code running 
</span><br>
<span class="quotelev1">&gt; against 1.8.x is expected. In practice, 1.x was never backwards 
</span><br>
<span class="quotelev1">&gt; compatible with 1.y where x&gt;y, even though the versioning 
</span><br>
<span class="quotelev1">&gt; documentation at the time didn't specifically mention it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a note in the versioning documentation 
</span><br>
<span class="quotelev1">&gt; (<a href="https://www.open-mpi.org/software/ompi/versions/">https://www.open-mpi.org/software/ompi/versions/</a>) that does warn of 
</span><br>
<span class="quotelev1">&gt; this change in the versioning scheme:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: The version numbering conventions were changed with the release
</span><br>
<span class="quotelev1">&gt;       of v1.10.0.  Most notably, Open MPI no longer uses an &quot;odd/even&quot;
</span><br>
<span class="quotelev1">&gt;       release schedule to indicate feature development vs. stable
</span><br>
<span class="quotelev1">&gt;       releases.  See the README in releases prior to v1.10.0 for more
</span><br>
<span class="quotelev1">&gt;       information (e.g.,
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/blob/v1.8/README#L1392-L1475">https://github.com/open-mpi/ompi-release/blob/v1.8/README#L1392-L1475</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is also a CAVEAT underneath the &quot;Major&quot; section of the 
</span><br>
<span class="quotelev1">&gt; versioning documentation that says that 1.10.x is not backwards 
</span><br>
<span class="quotelev1">&gt; compatible with other 1.x releases and that the same rule applies to 
</span><br>
<span class="quotelev1">&gt; anything before 1.10.0. Perhaps another CAVEAT could be placed after 
</span><br>
<span class="quotelev1">&gt; the &quot;Minor&quot; section since the information on backwards compatibility 
</span><br>
<span class="quotelev1">&gt; in the &quot;Minor&quot; section only applies to 2.x and beyond.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The developers are still in the midst of the version scheme transition 
</span><br>
<span class="quotelev1">&gt; (developing on both 1.10.x and 2.x), so the FAQ entries might be a bit 
</span><br>
<span class="quotelev1">&gt; out-dated for the new numbering scheme for a while.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 02/26/2016 09:20 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am confused about backwards-compatibility.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FAQ #111 says:
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI reserves the right to break ABI compatibility at new feature 
</span><br>
<span class="quotelev2">&gt;&gt; release series. ..... MPI applications compiled/linked against Open 
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1.6.x will not be ABI compatible with Open MPI 1.7.x
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But the versioning documentation says:
</span><br>
<span class="quotelev2">&gt;&gt;    * Minor: The minor number is the second integer in the version 
</span><br>
<span class="quotelev2">&gt;&gt; string.  ....  Backwards compatibility will still be preserved with 
</span><br>
<span class="quotelev2">&gt;&gt; prior releases that have the same major version number (e.g., v2.5.3 
</span><br>
<span class="quotelev2">&gt;&gt; is backwards compatible with v2.3.1).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These two examples and statements appear inconsistent to me:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I use OpenMPI 1.7.x run-time and options to execute codes built 
</span><br>
<span class="quotelev2">&gt;&gt; with OpenMPI 1.6.x?   No (FAQ #111)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I use OpenMPI 2.5.x run-time and options to execute codes built 
</span><br>
<span class="quotelev2">&gt;&gt; with OpenMPI 2.3.x?   Yes (s/w versioning documentation)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I use OpenMPI 1.8.x run-time and options to execute codes built 
</span><br>
<span class="quotelev2">&gt;&gt; with OpenMPI 1.6.x?   Who knows?!  I tested this once, and it 
</span><br>
<span class="quotelev2">&gt;&gt; failed.  I made the assumption that 1.8.x wouldn't run a 1.6.x code, 
</span><br>
<span class="quotelev2">&gt;&gt; and I moved on.  But I realize now that I could have made a mistake.  
</span><br>
<span class="quotelev2">&gt;&gt; The test I performed could have failed for some other reason.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone shed some light?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28590.php">http://www.open-mpi.org/community/lists/users/2016/02/28590.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="28595.php">Ralph Castain: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28593.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
<li><strong>In reply to:</strong> <a href="28593.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
<!-- nextthread="start" -->
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
