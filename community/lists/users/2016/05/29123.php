<?
$subject_val = "Re: [OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 12:46:22 2016" -->
<!-- isoreceived="20160506164622" -->
<!-- sent="Sat, 7 May 2016 01:46:21 +0900" -->
<!-- isosent="20160506164621" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C" -->
<!-- id="CAAkFZ5vRdBmgsAmAH8_XcViK==ebx-Degu2TY+cVt29tjZVP8g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="89012b48-a55f-d5ae-8b02-88246b9e5d4f_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 12:46:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29124.php">dpchoudh .: "[OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29122.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
<li><strong>In reply to:</strong> <a href="29122.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>at first glance, this looks like a crash of the compiler.
<br>
so I guess the root cause is not openmpi
<br>
(that being said, a workaround could be implemented in openmpi)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, May 7, 2016, Siegmar Gross &lt;
<br>
siegmar.gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; today I tried to build openmpi-dev-4010-g6c9d65c on my
</span><br>
<span class="quotelev1">&gt; machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev1">&gt; Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. I was
</span><br>
<span class="quotelev1">&gt; successful on most machines, but I got the following error
</span><br>
<span class="quotelev1">&gt; on my Linux machine for the Sun C compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 123 tail -7
</span><br>
<span class="quotelev1">&gt; log.make.Linux.x86_64.64_cc
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-dev-4010-g6c9d65c/opal/mca/reachable/netlink/reachable_netlink_utils_common.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 322: warning: extern inline function &quot;nl_object_priv&quot; not defined in
</span><br>
<span class="quotelev1">&gt; translation unit
</span><br>
<span class="quotelev1">&gt; cc: Fatal error in /opt/sun/solarisstudio12.4/lib/compilers/acomp : Signal
</span><br>
<span class="quotelev1">&gt; number = 11
</span><br>
<span class="quotelev1">&gt; make[2]: *** [reachable_netlink_utils_common.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-master/openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc/opal/mca/reachable/netlink'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-master/openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 124
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody can fix the problem.
</span><br>
<span class="quotelev1">&gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29122.php">http://www.open-mpi.org/community/lists/users/2016/05/29122.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29123/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29124.php">dpchoudh .: "[OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29122.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
<li><strong>In reply to:</strong> <a href="29122.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
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
